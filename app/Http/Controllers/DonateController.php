<?php

namespace App\Http\Controllers;

use App\Mail\DonateFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Flasher\Laravel\Facade\Flasher;

// class DonateController extends Controller
// {
//     public function submit(Request $request)
//     {
//         $validatedData = $request->validate([
//             // Mother details
//             'mother_name' => 'required|string',
//             'mother_surname' => 'required|string',
//             'mother_cell' => 'required|string',
//             'mother_alternative_number' => 'nullable|string',
//             'mother_email' => 'required|email',
//             'mother_date_of_birth' => 'required|date',
//             // Additional details
//             'mother_id_number' => 'nullable|string',
//             'mother_passport_number' => 'nullable|string',
//             'mother_race' => 'required|string',
//             'citizen' => 'required|string',
//             'nationality' => 'nullable|string',

//             // Address
//             'addres_1' => 'required|string',
//             'address_2' => 'nullable|string',
//             'suburb' => 'required|string',
//             'postal_code' => 'nullable|string|max:10',
//             'city' => 'required|string',
//             'province' => 'required|string',

//             // Volunteer signup
//             'volunteer' => 'required|string',

//             //occupation
//             'occupation' => 'required|string|max:255',
//             'skills' => 'nullable|string|max:255',
//             'company_name' => 'nullable|string|max:255',
//             'work_address_1' => 'nullable|string|max:255',
//             'work_address_2' => 'nullable|string|max:255',
//             'work_suburb' => 'nullable|string|max:255',
//             'work_city' => 'nullable|string|max:255',
//             'work_postal_code' => 'nullable|string|max:10',
//             'work_province' => 'nullable|string|max:255',
//             'occupation_country' => 'nullable|string|max:255',

//             //baby details
//             'baby_name' => 'required|string|max:255',
//             'baby_surname' => 'required|string|max:255',
//             'baby_date_of_birth' => 'required|date',
//             'family_doctor_name' => 'required|string|max:255',
//             'family_doctor_number' => 'required|string|max:15',

//             //declaration and consent
//             'collect_info' => 'required',
//             'share_info' => 'required',
//             'truth_info' => 'required',
//             'keep_records' => 'required',
//             'cooler_box' => 'required',
//             'lactation_advice' => 'required',

//             //consent
//             'hiv_test' => 'required',
//             'confidentiality' => 'required',
//             'withdraw_consent' => 'required',
//             'hiv_info' => 'required',
//             'info_declined' => 'required',
//             'questions_opportunity' => 'required',
//             'questions_answered' => 'required',
//             'antenatal_results' => 'required',
//             'breastmilk_testing' => 'required',

//             //questionnaire
//             'blood_transfusion' => 'required',
//             'hard_liquor' => 'required',
//             'vegetarian' => 'required',
//             'b12vitamins' => 'nullable',
//             'tobacco' => 'required',
//             'drugs' => 'required',
//             'cannabis' => 'required',
//             'prescribed_medication' => 'required',

//             //prescribed medication
//             'prescribed_medicines' => 'array',
//             'prescribed_medicines.*' => 'string',
//             'other_medication' => 'nullable|string',
//             'over-counter-medication' => 'required|string',

//             //over the counter
//             'medicines' => 'array', // Ensure it's an array
//             'medicines.*' => 'string', // Each item should be a string
//             'other_medicine' => 'nullable|string',
//             'other_medicine_specify' => 'nullable|string',
//             'herbal_medicines' => 'required|string',

//             //herbal medicines
//             // Herbal Supplements (checkbox array)
//             'herbal_supplements' => 'nullable|array',
//             'herbal_supplements.*' => 'string',
//             'herbal_medication_specify' => 'nullable|string',
//             'herbal_medication_other' => 'nullable|string',
//             'galactogogues' => 'required',
//             'cytotoxic_medication' => 'required|string',
//             'contraceptives' => 'required|string',
//             'contraceptives_specify' => 'nullable|array',
//             'contraceptives_specify.*' => 'string',

//             'monogamous_relationship' => 'required',
//             'hepatitis_b' => 'required',
//             'hepatitis_c' => 'required',
//             'tb_diagnosis' => 'required',
//             'syphilis_diagnosis' => 'required',
//             'hiv_diagnosis' => 'required',

//             //sexual partner
//             'partner_hiv_risk' => 'required',
//             'partner_drug_use' => 'required',
//             'partner_haemophiliac' => 'required',
//             'last_hiv_test' => 'required|string|max:255',
//             'persistent_cough' => 'required',
//             'persistent_cough_exposure' => 'required',
//             'job_hazard_exposure' => 'required',
//             'hiv_test_results' => 'required',
//             'hiv_rapid_test' => 'required',

//             'breast_pump' => 'required',
//             'expressing_donate' => 'required',
//             'donor_type' => 'required|string',
//             'milk_expression_date' => 'required',
//             'referral_source' => 'nullable|string',

//             'info_sharing' => 'required',
//             'communication_consent' => 'nullable|string',
//             'communication_method' => 'nullable|string',
//             'popia_consent' => 'required|string',
//         ]);

//         // Convert array fields into strings
//         if (!empty($request->input('prescribed_medicines'))) {
//             $validatedData['prescribed_medicines'] = implode(', ', $request->input('prescribed_medicines'));
//         }

//         if (!empty($request->input('medicines'))) {
//             $validatedData['medicines'] = implode(', ', $request->input('medicines'));
//         }

//         // Append extra medication fields if they exist
//         if (!empty($request->input('other_medicine'))) {
//             $validatedData['medicines'] = ($validatedData['medicines'] ?? '') . ', ' . $request->input('other_medicine');
//         }
//         if (!empty($request->input('other_medicine_specify'))) {
//             $validatedData['medicines'] = ($validatedData['medicines'] ?? '') . ', ' . $request->input('other_medicine_specify');
//         }

//         // Process herbal supplements
//         if (!empty($request->input('herbal_supplements'))) {
//             $validatedData['herbal_supplements'] = implode(', ', $request->input('herbal_supplements'));
//         }

//         if (!empty($request->input('herbal_medication_specify'))) {
//             $validatedData['herbal_supplements'] = ($validatedData['herbal_supplements'] ?? '') . ', ' . $request->input('herbal_medication_specify');
//         }

//         if (!empty($request->input('herbal_medication_other'))) {
//             $validatedData['herbal_supplements'] = ($validatedData['herbal_supplements'] ?? '') . ', ' . $request->input('herbal_medication_other');
//         }

//         // Process contraceptives
//         if (!empty($request->input('contraceptives_specify'))) {
//             $validatedData['contraceptives_specify'] = implode(', ', $request->input('contraceptives_specify'));
//         }

//         // Process contraceptives
//         $contraceptives = $request->input('contraceptives_specify', []);
//         $validatedData['contraceptives_specify'] = implode(', ', $contraceptives);
//         Log::info('Reached the mail sending block');

//         try {
//             foreach ($validatedData as $key => $value) {
//         if (is_array($value)) {
//             $validatedData[$key] = implode(', ', $value);
//         }
//     }
//             Mail::to('lesedi@fgx.co.za')->send(new DonateFormMail($validatedData));
//             Log::info('Donate email sent successfully');
//             return redirect()->back()->with('success', 'Form submitted.');
//         } catch (\Exception $e) {
//             Log::error('Donate email failed: ' . $e->getMessage());
//             return redirect()->back()->with('error', 'Failed to send email');
//         }

//     }
// }

class DonateController extends Controller
{
    public function submit(Request $request)
    {
        \Log::info('DonateController submit() reached.');

        // No server-side validation - handled by frontend JavaScript
        $validatedData = $request->all();

        try {
            // Convert all arrays to strings before emailing
            foreach ($validatedData as $key => $value) {
                if (is_array($value)) {
                    $validatedData[$key] = implode(', ', $value);
                }
            }
            
            // Send email notification
            Mail::to('lesedi@fgx.co.za')->cc('adriaan@fgx.co.za')->send(new DonateFormMail($validatedData));
            Log::info('Donate email sent successfully');

            // Insert into secondary database (existing Perl-style structure)
            $this->insertIntoSecondaryDatabase($request);

            return view('donate')->with('success', 'Your form was successfully submitted!');
        } catch (\Exception $e) {
            Log::error('Donate email failed: ' . $e->getMessage());
            return view(view: 'donate')->with('error', 'Failed to submit form. Please try again.');
        }
    }

    private function insertIntoSecondaryDatabase(Request $request)
    {
        try {
            // Use the secondary database connection
            $db = \DB::connection('sabr_secondary');
            
            // Client ID for SABR
            $clientID = 153;
            // Get memberGroupID from request, default to 2 for donors
            $memberGroupID = $request->get('memberGroupID', 2);
            
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

            // Map form fields to database fields based on Perl script structure
            $fieldMappings = [
                // Default fields (memberDefaultID)
                'mother_name' => ['memberDefaultID' => 2, 'memberCustomID' => 0], // First name
                'mother_surname' => ['memberDefaultID' => 3, 'memberCustomID' => 0], // Surname
                'mother_email' => ['memberDefaultID' => 4, 'memberCustomID' => 0], // Email
                'mother_cell' => ['memberDefaultID' => 5, 'memberCustomID' => 0], // Cell
                'mother_alternative_number' => ['memberDefaultID' => 6, 'memberCustomID' => 0], // Alt phone
                'mother_date_of_birth' => ['memberDefaultID' => 7, 'memberCustomID' => 0], // DOB
                'mother_id_number' => ['memberDefaultID' => 8, 'memberCustomID' => 0], // ID Number
                'mother_passport_number' => ['memberDefaultID' => 9, 'memberCustomID' => 0], // Passport
                'mother_race' => ['memberDefaultID' => 10, 'memberCustomID' => 0], // Race
                'citizen' => ['memberDefaultID' => 11, 'memberCustomID' => 0], // Citizenship
                'nationality' => ['memberDefaultID' => 12, 'memberCustomID' => 0], // Nationality
                
                // Address fields
                'addres_1' => ['memberDefaultID' => 13, 'memberCustomID' => 0], // Address 1
                'address_2' => ['memberDefaultID' => 14, 'memberCustomID' => 0], // Address 2
                'suburb' => ['memberDefaultID' => 15, 'memberCustomID' => 0], // Suburb
                'postal_code' => ['memberDefaultID' => 16, 'memberCustomID' => 0], // Postal Code
                'city' => ['memberDefaultID' => 17, 'memberCustomID' => 0], // City
                'province' => ['memberDefaultID' => 18, 'memberCustomID' => 0], // Province
                
                // Custom fields (you may need to adjust these IDs based on actual database)
                'volunteer' => ['memberDefaultID' => 0, 'memberCustomID' => 200],
                'occupation' => ['memberDefaultID' => 0, 'memberCustomID' => 201],
                'skills' => ['memberDefaultID' => 0, 'memberCustomID' => 202],
                'company_name' => ['memberDefaultID' => 0, 'memberCustomID' => 203],
                'work_address_1' => ['memberDefaultID' => 0, 'memberCustomID' => 204],
                'work_address_2' => ['memberDefaultID' => 0, 'memberCustomID' => 205],
                'work_suburb' => ['memberDefaultID' => 0, 'memberCustomID' => 206],
                'work_city' => ['memberDefaultID' => 0, 'memberCustomID' => 207],
                'work_province' => ['memberDefaultID' => 0, 'memberCustomID' => 208],
                
                // Baby details
                'baby_name' => ['memberDefaultID' => 0, 'memberCustomID' => 210],
                'baby_surname' => ['memberDefaultID' => 0, 'memberCustomID' => 211],
                'baby_date_of_birth' => ['memberDefaultID' => 0, 'memberCustomID' => 212],
                'family_doctor_name' => ['memberDefaultID' => 0, 'memberCustomID' => 213],
                'family_doctor_number' => ['memberDefaultID' => 0, 'memberCustomID' => 214],
                
                // Consent and declaration fields
                'collect_info' => ['memberDefaultID' => 0, 'memberCustomID' => 220],
                'share_info' => ['memberDefaultID' => 0, 'memberCustomID' => 221],
                'truth_info' => ['memberDefaultID' => 0, 'memberCustomID' => 222],
                'prescribed_medication' => ['memberDefaultID' => 0, 'memberCustomID' => 223],
                'over_counter_medication' => ['memberDefaultID' => 0, 'memberCustomID' => 226],
                'herbal_medicines' => ['memberDefaultID' => 0, 'memberCustomID' => 228],
            ];

            // Insert form values into memberValue table
            foreach ($fieldMappings as $formField => $mapping) {
                $formValue = $request->input($formField);
                
                if ($formValue !== null && $formValue !== '') {
                    // Handle arrays (checkboxes, etc.)
                    if (is_array($formValue)) {
                        $formValue = implode(';', $formValue);
                    }
                    
                    // Handle date of birth special formatting
                    if ($formField === 'mother_date_of_birth') {
                        $day = $request->input('mother_dob_day');
                        $month = $request->input('mother_dob_month');
                        $year = $request->input('mother_dob_year');
                        if ($day && $month && $year) {
                            $formValue = "{$year}-{$month}-{$day}";
                        }
                    }
                    
                    if ($formField === 'baby_date_of_birth') {
                        $day = $request->input('baby_dob_day');
                        $month = $request->input('baby_dob_month');
                        $year = $request->input('baby_dob_year');
                        if ($day && $month && $year) {
                            $formValue = "{$year}-{$month}-{$day}";
                        }
                    }

                    $db->table("memberValue{$clientID}")->insert([
                        'memberID' => $memberID,
                        'memberDefaultID' => $mapping['memberDefaultID'],
                        'memberCustomID' => $mapping['memberCustomID'],
                        'formValue' => $formValue
                    ]);
                }
            }

            // Handle medication arrays separately (like in Perl script)
            $this->handleMedicationArrays($db, $clientID, $memberID, $request);

            Log::info("Successfully inserted donation data into secondary database with memberID: {$memberID}");

        } catch (\Exception $e) {
            Log::error('Failed to insert into secondary database: ' . $e->getMessage());
            // Don't throw exception here - we still want email to be sent even if DB insert fails
        }
    }

    private function handleMedicationArrays($db, $clientID, $memberID, $request)
    {
        // Handle prescribed medications
        $prescribedMeds = $request->input('prescribed_medicines', []);
        if (is_array($prescribedMeds)) {
            foreach ($prescribedMeds as $medicineID) {
                if (!empty($medicineID)) {
                    // You may need to adjust this based on your medicine table structure
                    $db->table("memberMedicine{$clientID}")->insert([
                        'memberID' => $memberID,
                        'medicineID' => $medicineID,
                        'medicineType' => 'prescribed',
                        'medicineName' => $medicineID, // or lookup from medicine table
                        'other' => ''
                    ]);
                }
            }
        }

        // Handle over-the-counter medications
        $otcMeds = $request->input('medicines', []);
        if (is_array($otcMeds)) {
            foreach ($otcMeds as $medicineID) {
                if (!empty($medicineID)) {
                    $db->table("memberMedicine{$clientID}")->insert([
                        'memberID' => $memberID,
                        'medicineID' => $medicineID,
                        'medicineType' => 'over_counter',
                        'medicineName' => $medicineID,
                        'other' => ''
                    ]);
                }
            }
        }

        // Handle herbal medications
        $herbalMeds = $request->input('herbal_supplements', []);
        if (is_array($herbalMeds)) {
            foreach ($herbalMeds as $medicineID) {
                if (!empty($medicineID)) {
                    $db->table("memberMedicine{$clientID}")->insert([
                        'memberID' => $memberID,
                        'medicineID' => $medicineID,
                        'medicineType' => 'herbal',
                        'medicineName' => $medicineID,
                        'other' => ''
                    ]);
                }
            }
        }
    }
}