<!DOCTYPE html>
<html>
<head>
    <title>New Recipient Form Submission</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; }
        h2 { color: #107BA2; }
        .section { margin-top: 20px; }
    </style>
</head>
<body>
    <h2>New Recipient Submission</h2>

    <div class="section">
        <h3>Order Details</h3>
        <p><strong>Date of Order:</strong> {{ $formData['order_date'] }}</p>
        <p><strong>Time of Order:</strong> {{ $formData['order_time'] }}</p>
        <p><strong>Type of Hospital:</strong> {{ $formData['hospital_type'] }}</p>
        <p><strong>Hospital Name:</strong> {{ $formData['hospital_name'] }}</p>
        <p><strong>Unit Telephone No:</strong> {{ $formData['unit_telephone'] }}</p>
        <p><strong>Name of Nurse Ordering:</strong> {{ $formData['nurse_name'] }}</p>
        <p><strong>Unit Email Address:</strong> {{ $formData['unit_email'] }}</p>
        <p><strong>Quantity Ordered:</strong> {{ $formData['quantity_ordered'] }}</p>
        <p><strong>Amount Due:</strong> {{ $formData['amount_due'] ?? 'N/A' }}</p>
    </div>

    <div class="section">
        <h3>Parent / Guardian Details</h3>
        <p><strong>South African Citizen:</strong> {{ $formData['sa_citizen'] }}</p>
        <p><strong>ID Number:</strong> {{ $formData['id_number'] ?? 'N/A' }}</p>
        <p><strong>Passport Number:</strong> {{ $formData['passport_number'] ?? 'N/A' }}</p>
        <p><strong>Name:</strong> {{ $formData['name'] }}</p>
        <p><strong>Surname:</strong> {{ $formData['surname'] }}</p>
        <p><strong>Email:</strong> {{ $formData['email'] }}</p>
        <p><strong>Cell:</strong> {{ $formData['cell'] }}</p>
        <p><strong>Person Responsible for the Account:</strong> {{ $formData['account_responsible'] }}</p>
        <p><strong>Physical Address:</strong> {{ $formData['physical_address'] }}</p>
        <p><strong>Maternal Lactation Status:</strong> {{ $formData['maternal_lactation_status'] }}</p>
    </div>

    <div class="section">
        <h3>Infant Details</h3>
        <p><strong>Infant Name:</strong> {{ $formData['infant_name'] }}</p>
        <p><strong>Date of Birth:</strong> {{ $formData['infant_dob'] }}</p>
        <p><strong>Birth Weight:</strong> {{ $formData['birth_weight'] }} grams</p>
        <p><strong>Gestational Age:</strong> {{ $formData['gestational_age'] }} weeks</p>
        <p><strong>Gender:</strong> {{ $formData['gender'] }}</p>
        <p><strong>Race:</strong> {{ $formData['race'] }}</p>
        <p><strong>Medical Conditions and Current Weight:</strong> {{ $formData['medical_conditions'] }}</p>
        <p><strong>NEC Case:</strong> {{ $formData['nec_case'] }}</p>
        <p><strong>Feeding Status:</strong> {{ $formData['feeding_status'] }}</p>
        <p><strong>Motivation for Extended Feeds:</strong> {{ $formData['motivation_extended_feeds'] ?? 'N/A' }}</p>
        <p><strong>Feeding Started:</strong> {{ $formData['feeding_started'] }}</p>
        <p><strong>Total Volume / Day:</strong> {{ $formData['total_volume'] }} ml</p>
        <p><strong>Patient File No.:</strong> {{ $formData['patient_file_no'] }}</p>
        <p><strong>Prescribing Paediatrician:</strong> {{ $formData['prescribing_paediatrician'] }}</p>
    </div>

    @if (!empty($formData['infant_name_2']) || !empty($formData['infant_name_3']) || !empty($formData['infant_name_4']))
        <div class="section">
            <h3>Twins, Triplets or Quadruplets</h3>
            @if (!empty($formData['infant_name_2']))
                <h4>Child 2</h4>
                <p><strong>Infant Name:</strong> {{ $formData['infant_name_2'] }}</p>
                <p><strong>Birth Weight:</strong> {{ $formData['birth_weight_2'] ?? 'N/A' }} grams</p>
                <p><strong>Gestational Age:</strong> {{ $formData['gestational_age_2'] ?? 'N/A' }} weeks</p>
                <p><strong>Medical Conditions and Current Weight:</strong> {{ $formData['medical_conditions_2'] ?? 'N/A' }}</p>
                <p><strong>NEC Case:</strong> {{ $formData['nec_case_2'] ?? 'N/A' }}</p>
                <p><strong>Feeding Status:</strong> {{ $formData['feeding_status_2'] ?? 'N/A' }}</p>
                <p><strong>Feeding Started:</strong> {{ $formData['feeding_started_2'] ?? 'N/A' }}</p>
                <p><strong>Motivation for Extended Feeds:</strong> {{ $formData['motivation_extended_feeds_2'] ?? 'N/A' }}</p>
                <p><strong>Total Volume / Day:</strong> {{ $formData['total_volume_2'] ?? 'N/A' }} ml</p>
                <p><strong>Patient File No.:</strong> {{ $formData['patient_file_no_2'] ?? 'N/A' }}</p>
                <p><strong>Prescribing Paediatrician:</strong> {{ $formData['prescribing_paediatrician_2'] ?? 'N/A' }}</p>
            @endif
            @if (!empty($formData['infant_name_3']))
                <h4>Child 3</h4>
                <p><strong>Infant Name:</strong> {{ $formData['infant_name_3'] }}</p>
                <p><strong>Birth Weight:</strong> {{ $formData['birth_weight_3'] ?? 'N/A' }} grams</p>
                <p><strong>Gestational Age:</strong> {{ $formData['gestational_age_3'] ?? 'N/A' }} weeks</p>
                <p><strong>Medical Conditions and Current Weight:</strong> {{ $formData['medical_conditions_3'] ?? 'N/A' }}</p>
                <p><strong>NEC Case:</strong> {{ $formData['nec_case_3'] ?? 'N/A' }}</p>
                <p><strong>Feeding Status:</strong> {{ $formData['feeding_status_3'] ?? 'N/A' }}</p>
                <p><strong>Feeding Started:</strong> {{ $formData['feeding_started_3'] ?? 'N/A' }}</p>
                <p><strong>Motivation for Extended Feeds:</strong> {{ $formData['motivation_extended_feeds_3'] ?? 'N/A' }}</p>
                <p><strong>Total Volume / Day:</strong> {{ $formData['total_volume_3'] ?? 'N/A' }} ml</p>
                <p><strong>Patient File No.:</strong> {{ $formData['patient_file_no_3'] ?? 'N/A' }}</p>
                <p><strong>Prescribing Paediatrician:</strong> {{ $formData['prescribing_paediatrician_3'] ?? 'N/A' }}</p>
            @endif
            @if (!empty($formData['infant_name_4']))
                <h4>Child 4</h4>
                <p><strong>Infant Name:</strong> {{ $formData['infant_name_4'] }}</p>
                <p><strong>Birth Weight:</strong> {{ $formData['birth_weight_4'] ?? 'N/A' }} grams</p>
                <p><strong>Gestational Age:</strong> {{ $formData['gestational_age_4'] ?? 'N/A' }} weeks</p>
                <p><strong>Medical Conditions and Current Weight:</strong> {{ $formData['medical_conditions_4'] ?? 'N/A' }}</p>
                <p><strong>NEC Case:</strong> {{ $formData['nec_case_4'] ?? 'N/A' }}</p>
                <p><strong>Feeding Status:</strong> {{ $formData['feeding_status_4'] ?? 'N/A' }}</p>
                <p><strong>Feeding Started:</strong> {{ $formData['feeding_started_4'] ?? 'N/A' }}</p>
                <p><strong>Motivation for Extended Feeds:</strong> {{ $formData['motivation_extended_feeds_4'] ?? 'N/A' }}</p>
                <p><strong>Total Volume / Day:</strong> {{ $formData['total_volume_4'] ?? 'N/A' }} ml</p>
                <p><strong>Patient File No.:</strong> {{ $formData['patient_file_no_4'] ?? 'N/A' }}</p>
                <p><strong>Prescribing Paediatrician:</strong> {{ $formData['prescribing_paediatrician_4'] ?? 'N/A' }}</p>
            @endif
        </div>
    @endif

    <div class="section">
        <h3>Medical Aid Details</h3>
        <p><strong>Medical Aid Scheme:</strong> {{ $formData['medical_aid_scheme'] ?? 'N/A' }}</p>
        <p><strong>Medical Aid Number:</strong> {{ $formData['medical_aid_number'] ?? 'N/A' }}</p>
        <p><strong>Option / Plan:</strong> {{ $formData['medical_aid_plan'] ?? 'N/A' }}</p>
        <p><strong>Infant Dependant Code:</strong> {{ $formData['infant_dependent_code'] ?? 'N/A' }}</p>
    </div>

    <div class="section">
        <h3>Terms & Conditions and Indemnity</h3>
        <p><strong>Parent Consent Name:</strong> {{ $formData['parent_consent_name'] }}</p>
        <p><strong>Parent Consent ID:</strong> {{ $formData['parent_consent_id'] }}</p>
        <p><strong>Parent Consent Infant Name:</strong> {{ $formData['parent_consent_infant_name'] }}</p>
        <p><strong>Parent Consent:</strong> {{ $formData['parent_consent'] }}</p>
        <p><strong>Nurse Consent:</strong> {{ $formData['nurse_consent'] }}</p>
        <p><strong>Healthcare Professional Consent:</strong> {{ $formData['healthcare_professional_consent'] }}</p>
        <p><strong>Healthcare Professional Trained:</strong> {{ $formData['healthcare_professional_trained'] }}</p>
        <p><strong>Prescribing Doctor Consent:</strong> {{ $formData['prescribing_doctor_consent'] }}</p>
        <p><strong>Prescribing Nurse Consent:</strong> {{ $formData['prescribing_nurse_consent'] }}</p>
    </div>

    <div class="section">
        <h3>Consent & Communication</h3>
        <p><strong>Consent to Communication:</strong> {{ $formData['communication_consent'] }}</p>
        <p><strong>Preferred Communication Method:</strong> {{ $formData['communication_method'] }}</p>
        <p><strong>POPIA Consent:</strong> {{ $formData['popia_consent'] }}</p>
    </div>
</body>
</html>