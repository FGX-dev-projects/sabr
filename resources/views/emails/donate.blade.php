<!DOCTYPE html>
<html>
<head>
    <title>New Donation Form Submission</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; }
        h2 { color: #107BA2; }
        .section { margin-top: 20px; }
    </style>
</head>
<body>
    <h2>New Donation Form Submission</h2>

    <!-- Mother Details -->
    <div class="section">
        <h3>Mother’s Details</h3>
        <p><strong>Name:</strong> {{ $formData['mother_name'] ?? 'N/A' }} {{ $formData['mother_surname'] ?? 'N/A' }}</p>
        <p><strong>Cell:</strong> {{ $formData['mother_cell'] ?? 'N/A' }}</p>
        <p><strong>Alternative Number:</strong> {{ $formData['mother_alternative_number'] ?? 'N/A' }}</p>
        <p><strong>Email:</strong> {{ $formData['mother_email'] ?? 'N/A' }}</p>
        <p><strong>Date of Birth:</strong> {{ $formData['mother_date_of_birth'] ?? 'N/A' }}</p>
        <p><strong>ID Number:</strong> {{ $formData['mother_id_number'] ?? 'N/A' }}</p>
        <p><strong>Passport Number:</strong> {{ $formData['mother_passport_number'] ?? 'N/A' }}</p>
        <p><strong>Race:</strong> {{ $formData['mother_race'] ?? 'N/A' }}</p>
        <p><strong>South African Citizen:</strong> {{ $formData['citizen'] ?? 'N/A' }}</p>
        <p><strong>Other Nationality:</strong> {{ $formData['nationality'] ?? 'N/A' }}</p>
    </div>

    <!-- Address -->
    <div class="section">
        <h3>Residential Address</h3>
        <p><strong>Address Line 1:</strong> {{ $formData['addres_1'] ?? 'N/A' }}</p>
        <p><strong>Address Line 2:</strong> {{ $formData['address_2'] ?? 'N/A' }}</p>
        <p><strong>Suburb:</strong> {{ $formData['suburb'] ?? 'N/A' }}</p>
        <p><strong>Postal Code:</strong> {{ $formData['postal_code'] ?? 'N/A' }}</p>
        <p><strong>City:</strong> {{ $formData['city'] ?? 'N/A' }}</p>
        <p><strong>Province:</strong> {{ $formData['province'] ?? 'N/A' }}</p>
    </div>

    <!-- Occupational Details -->
    <div class="section">
        <h3>Occupational Details</h3>
        <p><strong>Willing to Volunteer:</strong> {{ $formData['volunteer'] ?? 'N/A' }}</p>
        <p><strong>Occupation:</strong> {{ $formData['occupation'] ?? 'N/A' }}</p>
        <p><strong>Skills:</strong> {{ $formData['skills'] ?? 'N/A' }}</p>
        <p><strong>Company:</strong> {{ $formData['company_name'] ?? 'N/A' }}</p>
        <p><strong>Work Address 1:</strong> {{ $formData['work_address_1'] ?? 'N/A' }}</p>
        <p><strong>Work Address 2:</strong> {{ $formData['work_address_2'] ?? 'N/A' }}</p>
        <p><strong>Work Suburb:</strong> {{ $formData['work_suburb'] ?? 'N/A' }}</p>
        <p><strong>Work City:</strong> {{ $formData['work_city'] ?? 'N/A' }}</p>
        <p><strong>Work Postal Code:</strong> {{ $formData['work_postal_code'] ?? 'N/A' }}</p>
        <p><strong>Work Province:</strong> {{ $formData['work_province'] ?? 'N/A' }}</p>
        <p><strong>Work Country:</strong> {{ $formData['occupation_country'] ?? 'N/A' }}</p>
    </div>

    <!-- Baby Details -->
    <div class="section">
        <h3>Baby's Details</h3>
        <p><strong>Baby Name:</strong> {{ $formData['baby_name'] ?? 'N/A' }} {{ $formData['baby_surname'] ?? '' }}</p>
        <p><strong>Baby Date of Birth:</strong> {{ $formData['baby_date_of_birth'] ?? 'N/A' }}</p>
        <p><strong>Family Doctor Name:</strong> {{ $formData['family_doctor_name'] ?? 'N/A' }}</p>
        <p><strong>Doctor Contact:</strong> {{ $formData['family_doctor_number'] ?? 'N/A' }}</p>
    </div>

    <!-- Consent & Declarations -->
    <div class="section">
        <h3>Declarations & Consent</h3>
        <ul>
            <li><strong>Info Collection:</strong> {{ $formData['collect_info'] ?? 'N/A' }}</li>
            <li><strong>Share with 3rd Party:</strong> {{ $formData['share_info'] ?? 'N/A' }}</li>
            <li><strong>Truthful Info:</strong> {{ $formData['truth_info'] ?? 'N/A' }}</li>
            <li><strong>Keep Medical Records:</strong> {{ $formData['keep_records'] ?? 'N/A' }}</li>
            <li><strong>Cooler Box Received:</strong> {{ $formData['cooler_box'] ?? 'N/A' }}</li>
            <li><strong>Lactation Disclaimer:</strong> {{ $formData['lactation_advice'] ?? 'N/A' }}</li>
            <li><strong>HIV Test Consent:</strong> {{ $formData['hiv_test'] ?? 'N/A' }}</li>
            <li><strong>Confidentiality:</strong> {{ $formData['confidentiality'] ?? 'N/A' }}</li>
            <li><strong>Withdraw Consent:</strong> {{ $formData['withdraw_consent'] ?? 'N/A' }}</li>
            <li><strong>HIV Info Provided:</strong> {{ $formData['hiv_info'] ?? 'N/A' }}</li>
            <li><strong>Info Declined:</strong> {{ $formData['info_declined'] ?? 'N/A' }}</li>
            <li><strong>Asked Questions:</strong> {{ $formData['questions_opportunity'] ?? 'N/A' }}</li>
            <li><strong>Questions Answered:</strong> {{ $formData['questions_answered'] ?? 'N/A' }}</li>
            <li><strong>Antenatal Results Consent:</strong> {{ $formData['antenatal_results'] ?? 'N/A' }}</li>
            <li><strong>Breastmilk Testing Consent:</strong> {{ $formData['breastmilk_testing'] ?? 'N/A' }}</li>
        </ul>
    </div>

    <!-- Health & Lifestyle Questionnaire -->
    <div class="section">
        <h3>Health Questionnaire</h3>
        <ul>
            <li><strong>Blood Transfusion:</strong> {{ $formData['blood_transfusion'] ?? 'N/A' }}</li>
            <li><strong>Alcohol Consumption:</strong> {{ $formData['hard_liquor'] ?? 'N/A' }}</li>
            <li><strong>Vegetarian:</strong> {{ $formData['vegetarian'] ?? 'N/A' }}</li>
            <li><strong>B12 Supplement:</strong> {{ $formData['b12vitamins'] ?? 'N/A' }}</li>
            <li><strong>Tobacco Use:</strong> {{ $formData['tobacco'] ?? 'N/A' }}</li>
            <li><strong>Drug Use:</strong> {{ $formData['drugs'] ?? 'N/A' }}</li>
            <li><strong>Cannabis Use:</strong> {{ $formData['cannabis'] ?? 'N/A' }}</li>
            <li><strong>Prescribed Medication:</strong> {{ $formData['prescribed_medication'] ?? 'N/A' }}</li>
            <li><strong>Prescribed Medicines:</strong> {{ $formData['prescribed_medicines'] ?? 'N/A' }}</li>
            <li><strong>Other Medication:</strong> {{ $formData['other_medication'] ?? 'N/A' }}</li>
            <li><strong>OTC Medication:</strong> {{ $formData['over-counter-medication'] ?? 'N/A' }}</li>
            <li><strong>OTC List:</strong> {{ $formData['medicines'] ?? 'N/A' }}</li>
            <li><strong>OTC Other:</strong> {{ $formData['other_medicine'] ?? 'N/A' }}</li>
            <li><strong>OTC Specified:</strong> {{ $formData['other_medicine_specify'] ?? 'N/A' }}</li>
            <li><strong>Herbal Meds Used:</strong> {{ $formData['herbal_medicines'] ?? 'N/A' }}</li>
            <li><strong>Herbal Supplements:</strong> {{ $formData['herbal_supplements'] ?? 'N/A' }}</li>
            <li><strong>Herbal Specify:</strong> {{ $formData['herbal_medication_specify'] ?? 'N/A' }}</li>
            <li><strong>Other Herbal Use:</strong> {{ $formData['herbal_medication_other'] ?? 'N/A' }}</li>
        </ul>
    </div>

    <!-- Sexual & Partner History -->
    <div class="section">
        <h3>Sexual & Partner History</h3>
        <ul>
            <li><strong>Monogamous Relationship:</strong> {{ $formData['monogamous_relationship'] ?? 'N/A' }}</li>
            <li><strong>Hepatitis B:</strong> {{ $formData['hepatitis_b'] ?? 'N/A' }}</li>
            <li><strong>Hepatitis C:</strong> {{ $formData['hepatitis_c'] ?? 'N/A' }}</li>
            <li><strong>TB Diagnosis:</strong> {{ $formData['tb_diagnosis'] ?? 'N/A' }}</li>
            <li><strong>Syphilis Diagnosis:</strong> {{ $formData['syphilis_diagnosis'] ?? 'N/A' }}</li>
            <li><strong>HIV Diagnosis:</strong> {{ $formData['hiv_diagnosis'] ?? 'N/A' }}</li>
            <li><strong>Partner HIV Risk:</strong> {{ $formData['partner_hiv_risk'] ?? 'N/A' }}</li>
            <li><strong>Partner Drug Use:</strong> {{ $formData['partner_drug_use'] ?? 'N/A' }}</li>
            <li><strong>Partner Haemophiliac:</strong> {{ $formData['partner_haemophiliac'] ?? 'N/A' }}</li>
            <li><strong>Partner HIV Test Date:</strong> {{ $formData['last_hiv_test'] ?? 'N/A' }}</li>
        </ul>
    </div>

    <!-- TB/Cough Exposure & Medical -->
    <div class="section">
        <h3>Exposure & HIV Testing</h3>
        <ul>
            <li><strong>Persistent Cough:</strong> {{ $formData['persistent_cough'] ?? 'N/A' }}</li>
            <li><strong>Exposure to Coughing Person:</strong> {{ $formData['persistent_cough_exposure'] ?? 'N/A' }}</li>
            <li><strong>Hazardous Work Environment:</strong> {{ $formData['job_hazard_exposure'] ?? 'N/A' }}</li>
            <li><strong>HIV Antenatal Results:</strong> {{ $formData['hiv_test_results'] ?? 'N/A' }}</li>
            <li><strong>Prepared for HIV Rapid Test:</strong> {{ $formData['hiv_rapid_test'] ?? 'N/A' }}</li>
        </ul>
    </div>

    <!-- Donor Logistics -->
    <div class="section">
        <h3>Donation Logistics</h3>
        <p><strong>Own Breast Pump:</strong> {{ $formData['breast_pump'] ?? 'N/A' }}</p>
        <p><strong>Expression Method:</strong> {{ $formData['expressing_donate'] ?? 'N/A' }}</p>
        <p><strong>Donor Type:</strong> {{ $formData['donor_type'] ?? 'N/A' }}</p>
        <p><strong>Date Milk Was Expressed:</strong> {{ $formData['milk_expression_date'] ?? 'N/A' }}</p>
        <p><strong>Referral Source:</strong> {{ $formData['referral_source'] ?? 'N/A' }}</p>
    </div>

    <!-- Communication Preferences -->
    <div class="section">
        <h3>Communication Preferences</h3>
        <p><strong>Consent to Share Info:</strong> {{ $formData['info_sharing'] ?? 'N/A' }}</p>
        <p><strong>Allow Communication:</strong> {{ $formData['communication_consent'] ?? 'N/A' }}</p>
        <p><strong>Preferred Method:</strong> {{ $formData['communication_method'] ?? 'N/A' }}</p>
    </div>

    <!-- POPIA -->
    <div class="section">
        <h3>POPIA Consent</h3>
        <p><strong>POPIA Agreement:</strong> {{ $formData['popia_consent'] ?? 'N/A' }}</p>
    </div>
</body>
</html>
