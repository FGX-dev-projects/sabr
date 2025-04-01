<?php

namespace App\Http\Controllers;

use App\Mail\VolunteerFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class VolunteerController extends Controller
{
    public function submit(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'surname' => 'required|string',
            'cell' => 'required|string',
            'alternative_number' => 'nullable|string',
            'email' => 'required|email',
            'date_of_birth' => 'required|date',
            'id_number' => 'nullable|string',
            'gender' => 'required|string',
            'country' => 'required|string',
            'addres_1' => 'required|string',
            'address_2' => 'nullable|string',
            'suburb' => 'required|string',
            'postal_code' => 'nullable|string',
            'city' => 'nullable|string',
            'province' => 'required|string',
            'volunteer_work' => 'required|string',
            'employment_type' => 'required|string',
            'volunteer_experience' => 'nullable|string',
            'work_experience' => 'nullable|string',
            'education' => 'nullable|string',
            'involved' => 'required|string',
            'health_care_prof' => 'required|string',
            'drivers_license' => 'required|string',
            'own_transport' => 'required|string',
            'vehicle_offering' => 'required|string',
            'commencement_date' => 'nullable|string',
            'location' => 'required|string',
            'itinerary' => 'nullable|string',
            'hope_to_gain' => 'nullable|string',
            'current_employer_details' => 'nullable|string',
            'communication_method' => 'required|string',
            'communication_consent' => 'required|string',
            'popia_consent' => 'required|string',
        ]);

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
            Mail::to('lesedi@fgx.co.za')->send(new VolunteerFormMail($validatedData));
            
            // Success message
            return redirect()->back()->with('success', 'Your form was successfully submitted!');
        } catch (\Exception $e) {
            // Log the error
            Log::error('Mail sending failed: ' . $e->getMessage());
            
            // Error message
            return redirect()->back()->with('error', 'An error occurred, please try again later.');
        }
    }
}
