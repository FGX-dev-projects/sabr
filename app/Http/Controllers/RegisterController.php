<?php

namespace App\Http\Controllers;

use App\Mail\RegisterFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    public function show()
    {
        return view('register');
    }
    public function submit(Request $request)
    {
        $validatedData = $request->validate([
            'order_date' => 'required|date',
            'order_time' => 'required',
            'hospital_type' => 'required|string|in:public,private',
            'hospital_name' => 'required|string',
            'unit_telephone' => 'required|string',
            'nurse_name' => 'required|string',
            'unit_email' => 'required|email',
            'quantity_ordered' => 'required|string',
            'amount_due' => 'nullable|string',
            'sa_citizen' => 'required|string|in:Yes,No',
            'id_number' => 'required_if:sa_citizen,Yes|digits:13|nullable',
            'passport_number' => 'required_if:sa_citizen,No|string|nullable',
            'name' => 'required|string',
            'surname' => 'required|string',
            'email' => 'required|email',
            'cell' => 'required|string',
            'account_responsible' => 'required|string',
            'physical_address' => 'required|string',
            'maternal_lactation_status' => 'required|string|in:lactating,not_lactating',
            'infant_name' => 'required|string',
            'infant_dob' => 'required|date',
            'birth_weight' => 'required|numeric|min:200|max:3500',
            'gestational_age' => 'required|numeric|min:20|max:40',
            'gender' => 'required|string|in:Male,Female',
            'race' => 'required|string',
            'medical_conditions' => 'required|string',
            'nec_case' => 'required|string|in:Yes,No',
            'feeding_status' => 'required|string|in:1st_week,2nd_week,3rd_week,over_3_weeks',
            'motivation_extended_feeds' => 'nullable|string',
            'feeding_started' => 'required|date',
            'total_volume' => 'required|numeric|min:0|max:150',
            'patient_file_no' => 'required|string',
            'prescribing_paediatrician' => 'required|string',
            'infant_name_2' => 'nullable|string',
            'birth_weight_2' => 'nullable|numeric|min:200|max:3500',
            'gestational_age_2' => 'nullable|numeric|min:20|max:40',
            'medical_conditions_2' => 'nullable|string',
            'nec_case_2' => 'nullable|string|in:Yes,No',
            'feeding_status_2' => 'nullable|string|in:1st_week,2nd_week,3rd_week,over_3_weeks',
            'feeding_started_2' => 'nullable|date',
            'motivation_extended_feeds_2' => 'nullable|string',
            'total_volume_2' => 'nullable|numeric|min:0|max:150',
            'patient_file_no_2' => 'nullable|string',
            'prescribing_paediatrician_2' => 'nullable|string',
            'infant_name_3' => 'nullable|string',
            'birth_weight_3' => 'nullable|numeric|min:200|max:3500',
            'gestational_age_3' => 'nullable|numeric|min:20|max:40',
            'medical_conditions_3' => 'nullable|string',
            'nec_case_3' => 'nullable|string|in:Yes,No',
            'feeding_status_3' => 'nullable|string|in:1st_week,2nd_week,3rd_week,over_3_weeks',
            'feeding_started_3' => 'nullable|date',
            'motivation_extended_feeds_3' => 'nullable|string',
            'total_volume_3' => 'nullable|numeric|min:0|max:150',
            'patient_file_no_3' => 'nullable|string',
            'prescribing_paediatrician_3' => 'nullable|string',
            'infant_name_4' => 'nullable|string',
            'birth_weight_4' => 'nullable|numeric|min:200|max:3500',
            'gestational_age_4' => 'nullable|numeric|min:20|max:40',
            'medical_conditions_4' => 'nullable|string',
            'nec_case_4' => 'nullable|string|in:Yes,No',
            'feeding_status_4' => 'nullable|string|in:1st_week,2nd_week,3rd_week,over_3_weeks',
            'feeding_started_4' => 'nullable|date',
            'motivation_extended_feeds_4' => 'nullable|string',
            'total_volume_4' => 'nullable|numeric|min:0|max:150',
            'patient_file_no_4' => 'nullable|string',
            'prescribing_paediatrician_4' => 'nullable|string',
            'medical_aid_scheme' => 'nullable|string',
            'medical_aid_number' => 'nullable|string',
            'medical_aid_plan' => 'nullable|string',
            'infant_dependent_code' => 'nullable|string',
            'parent_consent_name' => 'required|string',
            'parent_consent_id' => 'required|digits:13',
            'parent_consent_infant_name' => 'required|string',
            'parent_consent' => 'required|string|in:Yes,No',
            'nurse_consent' => 'required|string|in:Yes,No',
            'healthcare_professional_consent' => 'required|string|in:Yes,No',
            'healthcare_professional_trained' => 'required|string|in:Yes,No',
            'prescribing_doctor_consent' => 'required|string|in:Yes,No',
            'prescribing_nurse_consent' => 'required|string|in:Yes,No',
            'communication_consent' => 'required|string|in:Yes,No',
            'communication_method' => 'required|string|in:sms,email,both',
            'popia_consent' => 'required|string|in:yes',
        ]);

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
            Mail::to('lesedi@fgx.co.za')->send(new RegisterFormMail($validatedData));
            Log::info('Register email sent successfully');
            
            // Return back to the form with success message (like donate form)
            return view('donate')->with('success', 'Your form was successfully submitted!');

        } catch (\Exception $e) {
            // Log the error
            Log::error('Register email failed: ' . $e->getMessage());

            // Return back with error message
            return redirect()->back()->with('error', 'Failed to submit form. Please try again.');
        }
    }
}
