<?php

namespace App\Http\Controllers;

use App\Mail\VolunteerFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

class VolunteerController extends Controller
{
    public function submit(Request $request)
    {
        // No server-side validation - handled by frontend JavaScript
        $validatedData = $request->all();

        // Define labels for volunteer work options
        $labels = [
            'veteran' => "I'm a veteran volunteer, lot's of experience!",
            'ngo_experience' => 'I have professional experience in not-for-profit / NGO work',
            'public_sector' => 'I work for the public sector',
            'community_programs' => 'I have joined community programs at my place of employment',
            'first_time' => "It's my first, I want to make a difference",
            'student' => 'I am a student',
            'other' => 'Other'
        ];

        // Define labels for volunteer driver locations
        $driverLocationLabels = [
            'cape_town' => 'Cape Town',
            'durban' => 'Durban',
            'kimberly' => 'Kimberly',
            'johannesburg' => 'Johannesburg',
            'new_castle' => 'New Castle',
            'bloemfontein' => 'Bloemfontein',
            'port_elizabeth_city' => 'Port Elizabeth - City',
            'port_elizabeth_eutenhague' => 'Port Elizabeth - Eutenhague',
            'witbank' => 'Witbank',
            'pretoria' => 'Pretoria',
            'richards_bay' => 'Richards Bay',
            'springs' => 'Springs',
            'belito' => 'Belito',
            'other' => 'Other'
        ];

        // Map the volunteer work value to its label
        $selectedValue = $validatedData['volunteer_work'];
        $validatedData['volunteer_work'] = $labels[$selectedValue] ?? 'Unknown';

        // Map the volunteer driver location to its corresponding label
        $validatedData['location'] = $driverLocationLabels[$validatedData['location']] ?? 'Unknown';

        // Send the email with the updated data inside a try-catch block
        try {
            Mail::to('lesedi@fgx.co.za')->cc('adriaan@fgx.co.za')->send(new VolunteerFormMail($validatedData));
            
            // Insert into secondary database (existing Perl-style structure)
            $this->insertIntoSecondaryDatabase($request);
            
            // Success message
            return view('volunteer')->with('success', 'Your form was successfully submitted!');
            
        } catch (\Exception $e) {
            // Log the error
            Log::error('Mail sending failed: ' . $e->getMessage());
            
            // Error message
            return view('volunteer')->with('error', 'Failed to submit form. Please try again.');

        }
    }

    private function insertIntoSecondaryDatabase(Request $request)
    {
        try {
            // Use the secondary database connection
            $db = \DB::connection('sabr_secondary');
            
            // Client ID for SABR
            $clientID = 153;
            // Get memberGroupID from request, default to 4 for volunteers
            $memberGroupID = $request->get('memberGroupID', 4);
            
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

            // Map form fields to database fields
            $fieldMappings = [
                // Default fields (memberDefaultID)
                'name' => ['memberDefaultID' => 2, 'memberCustomID' => 0], // First name
                'surname' => ['memberDefaultID' => 3, 'memberCustomID' => 0], // Surname
                'email' => ['memberDefaultID' => 4, 'memberCustomID' => 0], // Email
                'cell' => ['memberDefaultID' => 5, 'memberCustomID' => 0], // Cell
                'alternative_number' => ['memberDefaultID' => 6, 'memberCustomID' => 0], // Alt phone
                'date_of_birth' => ['memberDefaultID' => 7, 'memberCustomID' => 0], // DOB
                'id_number' => ['memberDefaultID' => 8, 'memberCustomID' => 0], // ID Number
                'gender' => ['memberDefaultID' => 10, 'memberCustomID' => 0], // Gender
                'country' => ['memberDefaultID' => 12, 'memberCustomID' => 0], // Country
                
                // Address fields
                'addres_1' => ['memberDefaultID' => 13, 'memberCustomID' => 0], // Address 1
                'address_2' => ['memberDefaultID' => 14, 'memberCustomID' => 0], // Address 2
                'suburb' => ['memberDefaultID' => 15, 'memberCustomID' => 0], // Suburb
                'postal_code' => ['memberDefaultID' => 16, 'memberCustomID' => 0], // Postal Code
                'city' => ['memberDefaultID' => 17, 'memberCustomID' => 0], // City
                'province' => ['memberDefaultID' => 18, 'memberCustomID' => 0], // Province
                
                // Custom fields for volunteers (adjust IDs as needed)
                'volunteer_work' => ['memberDefaultID' => 0, 'memberCustomID' => 300],
                'employment_type' => ['memberDefaultID' => 0, 'memberCustomID' => 301],
                'volunteer_experience' => ['memberDefaultID' => 0, 'memberCustomID' => 302],
                'work_experience' => ['memberDefaultID' => 0, 'memberCustomID' => 303],
                'education' => ['memberDefaultID' => 0, 'memberCustomID' => 304],
                'involved' => ['memberDefaultID' => 0, 'memberCustomID' => 305],
                'health_care_prof' => ['memberDefaultID' => 0, 'memberCustomID' => 306],
                'drivers_license' => ['memberDefaultID' => 0, 'memberCustomID' => 307],
                'own_transport' => ['memberDefaultID' => 0, 'memberCustomID' => 308],
                'vehicle_offering' => ['memberDefaultID' => 0, 'memberCustomID' => 309],
                'commencement_date' => ['memberDefaultID' => 0, 'memberCustomID' => 310],
                'location' => ['memberDefaultID' => 0, 'memberCustomID' => 311],
                'itinerary' => ['memberDefaultID' => 0, 'memberCustomID' => 312],
                'hope_to_gain' => ['memberDefaultID' => 0, 'memberCustomID' => 313],
                'current_employer_details' => ['memberDefaultID' => 0, 'memberCustomID' => 314],
                'communication_method' => ['memberDefaultID' => 0, 'memberCustomID' => 315],
                'communication_consent' => ['memberDefaultID' => 0, 'memberCustomID' => 316],
                'popia_consent' => ['memberDefaultID' => 0, 'memberCustomID' => 317],
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

            Log::info("Successfully inserted volunteer data into secondary database with memberID: {$memberID}");

        } catch (\Exception $e) {
            Log::error('Failed to insert volunteer data into secondary database: ' . $e->getMessage());
            // Don't throw exception here - we still want email to be sent even if DB insert fails
        }
    }
}
