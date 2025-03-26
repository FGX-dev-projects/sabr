<?php

namespace App\Http\Controllers;

use App\Mail\DonateFormMail;
use Illuminate\Http\Request;
use Mail;
use Flasher\Laravel\Facade\Flasher;

class DonateController extends Controller
{
    public function submit(Request $request)
    {
        $validatedData = $request->validate([
            // Mother details
            'mother_name' => 'required|string',
            'mother_surname' => 'required|string',
            'mother_cell' => 'required|string',
            'mother_alternative_number' => 'nullable|string',
            'mother_email' => 'required|email',
            'mother_date_of_birth' => 'required|date',
            // Additional details
            'mother_id_number' => 'nullable|string',
            'mother_passport_number' => 'nullable|string',
            'mother_race' => 'required|string',
            'citizen' => 'required|string',
            'nationality' => 'nullable|string',

            // Address
            'addres_1' => 'required|string',
            'address_2' => 'nullable|string',
            'suburb' => 'required|string',
            'postal_code' => 'nullable|string|max:10',
            'city' => 'required|string',
            'province' => 'required|string',

            // Volunteer signup
            'volunteer' => 'required|string',

            //occupation
            'occupation' => 'required|string|max:255',
            'skills' => 'nullable|string|max:255',
            'company_name' => 'nullable|string|max:255',
            'work_address_1' => 'nullable|string|max:255',
            'work_address_2' => 'nullable|string|max:255',
            'work_suburb' => 'nullable|string|max:255',
            'work_city' => 'nullable|string|max:255',
            'work_postal_code' => 'nullable|string|max:10',
            'work_province' => 'nullable|string|max:255',
            'occupation_country' => 'nullable|string|max:255',

            //baby details
            'baby_name' => 'required|string|max:255',
            'baby_surname' => 'required|string|max:255',
            'baby_date_of_birth' => 'required|date',
            'family_doctor_name' => 'required|string|max:255',
            'family_doctor_number' => 'required|string|max:15',

            //declaration and consent
            'collect_info' => 'required',
            'share_info' => 'required',
            'truth_info' => 'required',
            'keep_records' => 'required',
            'cooler_box' => 'required',
            'lactation_advice' => 'required',

            //consent
            'hiv_test' => 'required',
            'confidentiality' => 'required',
            'withdraw_consent' => 'required',
            'hiv_info' => 'required',
            'info_declined' => 'required',
            'questions_opportunity' => 'required',
            'questions_answered' => 'required',
            'antenatal_results' => 'required',
            'breastmilk_testing' => 'required',

            //questionnaire
            'blood_transfusion' => 'required',
            'hard_liquor' => 'required',
            'vegetarian' => 'required',
            'b12vitamins' => 'nullable',
            'tobacco' => 'required',
            'drugs' => 'required',
            'cannabis' => 'required',
            'prescribed_medication' => 'required',

            //prescribed medication
            'prescribed_medicines' => 'array',
            'prescribed_medicines.*' => 'string',
            'other_medication' => 'nullable|string',
            'over-counter-medication' => 'required|string',

            //over the counter
            'medicines' => 'array', // Ensure it's an array
            'medicines.*' => 'string', // Each item should be a string
            'other_medicine' => 'nullable|string',
            'other_medicine_specify' => 'nullable|string',
            'herbal_medicines' => 'required|string',

            //herbal medicines
            // Herbal Supplements (checkbox array)
            'herbal_supplements' => 'nullable|array',
            'herbal_supplements.*' => 'string',
            'herbal_medication_specify' => 'nullable|string',
            'herbal_medication_other' => 'nullable|string',
            'galactogogues' => 'required',
            'cytotoxic_medication' => 'required|string',
            'contraceptives' => 'required|string',
            'contraceptives_specify' => 'nullable|array',
            'contraceptives_specify.*' => 'string',

            'monogamous_relationship' => 'required',
            'hepatitis_b' => 'required',
            'hepatitis_c' => 'required',
            'tb_diagnosis' => 'required',
            'syphilis_diagnosis' => 'required',
            'hiv_diagnosis' => 'required',

            //sexual partner
            'partner_hiv_risk' => 'required',
            'partner_drug_use' => 'required',
            'partner_haemophiliac' => 'required',
            'last_hiv_test' => 'required|string|max:255',
            'persistent_cough' => 'required',
            'persistent_cough_exposure' => 'required',
            'job_hazard_exposure' => 'required',
            'hiv_test_results' => 'required',
            'hiv_rapid_test' => 'required',

            'breast_pump' => 'required',
            'expressing_donate' => 'required',
            'donor_type' => 'required|string',
            'milk_expression_date' => 'required',
            'referral_source' => 'nullable|string',

            'info_sharing' => 'required',
            'communication_consent' => 'nullable|string',
            'communication_method' => 'nullable|string',
            'popia_consent' => 'required|string',
        ]);

        // Convert array fields into strings
        if (!empty($request->input('prescribed_medicines'))) {
            $validatedData['prescribed_medicines'] = implode(', ', $request->input('prescribed_medicines'));
        }

        if (!empty($request->input('medicines'))) {
            $validatedData['medicines'] = implode(', ', $request->input('medicines'));
        }

        // Append extra medication fields if they exist
        if (!empty($request->input('other_medicine'))) {
            $validatedData['medicines'] = ($validatedData['medicines'] ?? '') . ', ' . $request->input('other_medicine');
        }
        if (!empty($request->input('other_medicine_specify'))) {
            $validatedData['medicines'] = ($validatedData['medicines'] ?? '') . ', ' . $request->input('other_medicine_specify');
        }

        // Process herbal supplements
        if (!empty($request->input('herbal_supplements'))) {
            $validatedData['herbal_supplements'] = implode(', ', $request->input('herbal_supplements'));
        }

        if (!empty($request->input('herbal_medication_specify'))) {
            $validatedData['herbal_supplements'] = ($validatedData['herbal_supplements'] ?? '') . ', ' . $request->input('herbal_medication_specify');
        }

        if (!empty($request->input('herbal_medication_other'))) {
            $validatedData['herbal_supplements'] = ($validatedData['herbal_supplements'] ?? '') . ', ' . $request->input('herbal_medication_other');
        }

        // Process contraceptives
        if (!empty($request->input('contraceptives_specify'))) {
            $validatedData['contraceptives_specify'] = implode(', ', $request->input('contraceptives_specify'));
        }

        // Process contraceptives
        $contraceptives = $request->input('contraceptives_specify', []);
        $validatedData['contraceptives_specify'] = implode(', ', $contraceptives);

        Mail::to('admin@email.com')->send(new DonateFormMail($validatedData));

        Flasher::addSuccess('Thank you! Your form has been submitted successfully.');

        // Redirect back
        return redirect()->back();
    }
    // /**
    //  * Display a listing of the resource.
    //  */
    // public function index()
    // {
    //     //
    // }

    // /**
    //  * Show the form for creating a new resource.
    //  */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(string $id)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(string $id)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, string $id)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(string $id)
    // {
    //     //
    // }

}
