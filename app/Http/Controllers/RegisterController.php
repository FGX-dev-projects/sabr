<?php

namespace App\Http\Controllers;

use App\Mail\RegisterFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function show(Request $request)
    {
        $memberGroupID = $request->get('memberGroupID', 20); // Default to 20 for recipients
        return view('register', compact('memberGroupID'));
    }
    public function submit(Request $request)
    {
        // No server-side validation - handled by frontend JavaScript
        $validatedData = $request->all();

        // Define labels for specific fields
        $labels = [
            'hospital_type' => [
                'public' => 'Public',
                'private' => 'Private'
            ],
            'maternal_lactation_status' => [
                'lactating' => 'Lactating',
                'not_lactating' => 'Not Lactating'
            ],
            'feeding_status' => [
                '1st_week' => '1st Week',
                '2nd_week' => '2nd Week',
                '3rd_week' => '3rd Week',
                'over_3_weeks' => 'Over 3 weeks'
            ],
            'feeding_status_2' => [
                '1st_week' => '1st Week',
                '2nd_week' => '2nd Week',
                '3rd_week' => '3rd Week',
                'over_3_weeks' => 'Over 3 weeks'
            ],
            'feeding_status_3' => [
                '1st_week' => '1st Week',
                '2nd_week' => '2nd Week',
                '3rd_week' => '3rd Week',
                'over_3_weeks' => 'Over 3 weeks'
            ],
            'feeding_status_4' => [
                '1st_week' => '1st Week',
                '2nd_week' => '2nd Week',
                '3rd_week' => '3rd Week',
                'over_3_weeks' => 'Over 3 weeks'
            ]
        ];

        // Map values to labels
        $validatedData['hospital_type'] = $labels['hospital_type'][$validatedData['hospital_type']] ?? 'Unknown';
        $validatedData['maternal_lactation_status'] = $labels['maternal_lactation_status'][$validatedData['maternal_lactation_status']] ?? 'Unknown';
        $validatedData['feeding_status'] = $labels['feeding_status'][$validatedData['feeding_status']] ?? 'Unknown';
        if (!empty($validatedData['feeding_status_2'])) {
            $validatedData['feeding_status_2'] = $labels['feeding_status_2'][$validatedData['feeding_status_2']] ?? 'Unknown';
        }
        if (!empty($validatedData['feeding_status_3'])) {
            $validatedData['feeding_status_3'] = $labels['feeding_status_3'][$validatedData['feeding_status_3']] ?? 'Unknown';
        }
        if (!empty($validatedData['feeding_status_4'])) {
            $validatedData['feeding_status_4'] = $labels['feeding_status_4'][$validatedData['feeding_status_4']] ?? 'Unknown';
        }

        // Send the email with the updated data inside a try-catch block
        try {
            Mail::to('lesedi@fgx.co.za')->cc('adriaan@fgx.co.za')->send(new RegisterFormMail($validatedData));
            Log::info('Register email sent successfully');
            
            // Insert into secondary database (existing Perl-style structure)
            $this->insertIntoSecondaryDatabase($request);
            
            // Return back to the form with success message (like donate form)
            return view('register')->with('success', 'Your form was successfully submitted!');

        } catch (\Exception $e) {
            // Log the error
            Log::error('Register email failed: ' . $e->getMessage());

            // Return back with error message
            return redirect()->back()->with('error', 'Failed to submit form. Please try again.');
        }
    }

    private function insertIntoSecondaryDatabase(Request $request)
    {
        try {
            // Use the secondary database connection
            $db = \DB::connection('sabr_secondary');
            
            // Client ID for SABR
            $clientID = 153;
            // Get memberGroupID from request, default to 20 for recipients
            $memberGroupID = $request->get('memberGroupID', 20);
            
            // Insert main member record
            $memberID = $db->table("member{$clientID}")->insertGetId([
                'clientID' => $clientID,
                'dateAdded' => now(),
                'lastUpdate' => now(),
                'activate' => 'Y',
                'HTTP_USER_AGENT' => $request->server('HTTP_USER_AGENT'),
                'REQUEST_URI' => $request->server('REQUEST_URI'),
                'HTTP_REFERER' => $request->server('HTTP_REFERER'),
                'HTTP_X_FORWARDED_FOR' => $request->ip(),
            ]);

            // Insert member group association
            $db->table("memberGroups{$clientID}")->insert([
                'memberID' => $memberID,
                'memberGroupID' => $memberGroupID
            ]);

            // Map form fields to database fields for recipients
            $fieldMappings = [
                // Default fields (memberDefaultID)
                'name' => ['memberDefaultID' => 2, 'memberCustomID' => 0], // First name
                'surname' => ['memberDefaultID' => 3, 'memberCustomID' => 0], // Surname
                'email' => ['memberDefaultID' => 4, 'memberCustomID' => 0], // Email
                'cell' => ['memberDefaultID' => 5, 'memberCustomID' => 0], // Cell
                'id_number' => ['memberDefaultID' => 8, 'memberCustomID' => 0], // ID Number
                'passport_number' => ['memberDefaultID' => 9, 'memberCustomID' => 0], // Passport
                'race' => ['memberDefaultID' => 10, 'memberCustomID' => 0], // Race
                'physical_address' => ['memberDefaultID' => 13, 'memberCustomID' => 0], // Address
                
                // Custom fields for recipients (adjust IDs as needed)
                'order_date' => ['memberDefaultID' => 0, 'memberCustomID' => 400],
                'order_time' => ['memberDefaultID' => 0, 'memberCustomID' => 401],
                'hospital_type' => ['memberDefaultID' => 0, 'memberCustomID' => 402],
                'hospital_name' => ['memberDefaultID' => 0, 'memberCustomID' => 403],
                'unit_telephone' => ['memberDefaultID' => 0, 'memberCustomID' => 404],
                'nurse_name' => ['memberDefaultID' => 0, 'memberCustomID' => 405],
                'unit_email' => ['memberDefaultID' => 0, 'memberCustomID' => 406],
                'quantity_ordered' => ['memberDefaultID' => 0, 'memberCustomID' => 407],
                'amount_due' => ['memberDefaultID' => 0, 'memberCustomID' => 408],
                'sa_citizen' => ['memberDefaultID' => 0, 'memberCustomID' => 409],
                'account_responsible' => ['memberDefaultID' => 0, 'memberCustomID' => 410],
                'maternal_lactation_status' => ['memberDefaultID' => 0, 'memberCustomID' => 411],
                'infant_name' => ['memberDefaultID' => 0, 'memberCustomID' => 412],
                'infant_dob' => ['memberDefaultID' => 0, 'memberCustomID' => 413],
                'birth_weight' => ['memberDefaultID' => 0, 'memberCustomID' => 414],
                'gestational_age' => ['memberDefaultID' => 0, 'memberCustomID' => 415],
                'gender' => ['memberDefaultID' => 0, 'memberCustomID' => 416],
                'medical_conditions' => ['memberDefaultID' => 0, 'memberCustomID' => 417],
                'nec_case' => ['memberDefaultID' => 0, 'memberCustomID' => 418],
                'feeding_status' => ['memberDefaultID' => 0, 'memberCustomID' => 419],
                'feeding_started' => ['memberDefaultID' => 0, 'memberCustomID' => 420],
                'total_volume' => ['memberDefaultID' => 0, 'memberCustomID' => 421],
                'patient_file_no' => ['memberDefaultID' => 0, 'memberCustomID' => 422],
                'prescribing_paediatrician' => ['memberDefaultID' => 0, 'memberCustomID' => 423],
                'medical_aid_scheme' => ['memberDefaultID' => 0, 'memberCustomID' => 424],
                'parent_consent' => ['memberDefaultID' => 0, 'memberCustomID' => 425],
                'communication_consent' => ['memberDefaultID' => 0, 'memberCustomID' => 426],
                'communication_method' => ['memberDefaultID' => 0, 'memberCustomID' => 427],
                'popia_consent' => ['memberDefaultID' => 0, 'memberCustomID' => 428],
            ];

            // Insert form values into memberValue table
            foreach ($fieldMappings as $formField => $mapping) {
                $formValue = $request->input($formField);
                
                if ($formValue !== null && $formValue !== '') {
                    // Handle arrays (checkboxes, etc.)
                    if (is_array($formValue)) {
                        $formValue = implode(';', $formValue);
                    }

                    $db->table("memberValue{$clientID}")->insert([
                        'memberID' => $memberID,
                        'memberDefaultID' => $mapping['memberDefaultID'],
                        'memberCustomID' => $mapping['memberCustomID'],
                        'formValue' => $formValue
                    ]);
                }
            }

            Log::info("Successfully inserted recipient data into secondary database with memberID: {$memberID}");

        } catch (\Exception $e) {
            Log::error('Failed to insert recipient data into secondary database: ' . $e->getMessage());
            // Don't throw exception here - we still want email to be sent even if DB insert fails
        }
    }
}
