@extends('layouts.app')
@section('title', 'SABR: South African Breastmilk Reserve - Recipient')
@section('meta-description', 'South African Breastmilk Reserve - Bringing milk to babies, safely.')
@section('content')

    <section class="relative w-full h-[250px] md:h-[250px] ">
        <!-- Content Overlay -->
        <div class="relative z-10 flex flex-col h-full pt-[10px] md:pt-[186px]">
            <div class="wrapper">
                <div class="w-full h-full flex flex-col gap-6">
                    <div class="w-full h-full flex flex-col text-[#107BA2] gap-0">
                        <div
                            class="w-full text-[#107BA2] text-[48px] md:text-[64px] font-normal break-words pt-[180px] md:pt-[20px]">
                            Recipient
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-[80px]">
        <div class="wrapper">
            <div class="w-full p-4">
                <h2 class="text-[32px] font-inter font-bold text-[#adaaa5]">Order Details</h2>
                <form action="{{ route('register.submit') }}" class="mt-4 grid grid-cols-1 md:grid-cols-2 gap-12"
                    method="POST">
                    @csrf
                    <!-- Hidden field for memberGroupID -->
                    <input type="hidden" name="memberGroupID" value="{{ $memberGroupID ?? 20 }}">

                    <script>
                        document.addEventListener('DOMContentLoaded', function () {
                            // Essential recipient/order information that should be required (matching red asterisks)
                            const requiredFields = [
                                // Order Details (essential - marked with red asterisks)
                                'order_date', 'order_time', 'hospital_type',
                                
                                // Contact Person (essential - marked with red asterisks)
                                'name', 'surname', 'email', 'cell'
                            ];

                            requiredFields.forEach(field => {
                                const el = document.querySelector(`[name="${field}"]`);
                                if (el) {
                                    el.setAttribute('required', 'required');
                                }
                            });
                            
                            // Handle conditional requirements for additional infants
                            const additionalInfantNumbers = [2, 3, 4];
                            additionalInfantNumbers.forEach(num => {
                                const nameField = document.querySelector(`[name="infant_name_${num}"]`);
                                if (nameField) {
                                    nameField.addEventListener('input', function() {
                                        const hasName = this.value.trim() !== '';
                                        const fieldsToToggle = [
                                            `birth_weight_${num}`, `gestational_age_${num}`, 
                                            `medical_conditions_${num}`, `nec_case_${num}`,
                                            `feeding_status_${num}`, `feeding_started_${num}`,
                                            `total_volume_${num}`, `patient_file_no_${num}`,
                                            `prescribing_paediatrician_${num}`
                                        ];
                                        
                                        fieldsToToggle.forEach(fieldName => {
                                            const field = document.querySelector(`[name="${fieldName}"]`);
                                            if (field) {
                                                if (hasName) {
                                                    field.required = true;
                                                } else {
                                                    field.required = false;
                                                }
                                            }
                                        });
                                    });
                                }
                            });

                            // ID and Passport are both optional - no conditional requirements needed
                        });
                    </script>

                    <!-- Order Date -->
                    <div>
                        <label for="order_date" class="block text-gray-600">Date of Order <span class="text-red-500">*</span></label>
                        <input type="date" name="order_date" id="order_date"
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <!-- Order Time -->
                    <div>
                        <label for="order_time" class="block text-gray-600">Time of Order <span class="text-red-500">*</span></label>
                        <input type="time" name="order_time" id="order_time"
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <!-- Type of Hospital -->
                    <div>
                        <label for="hospital_type" class="block text-gray-600">Type of Hospital <span class="text-red-500">*</span></label>
                        <select name="hospital_type" id="hospital_type"
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="">Select Hospital Type</option>
                            <option value="public">Public</option>
                            <option value="private">Private</option>
                        </select>
                    </div>

                    <!-- Hospital Name -->
                    <div>
                        <label for="hospital_name" class="block text-gray-600">Hospital Name</label>
                        <input type="text" name="hospital_name" id="hospital_name"
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <!-- Unit Telephone No -->
                    <div>
                        <label for="unit_telephone" class="block text-gray-600">Unit Telephone No</label>
                        <input type="tel" name="unit_telephone" id="unit_telephone"
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <!-- Name of Nurse Ordering -->
                    <div>
                        <label for="nurse_name" class="block text-gray-600">Name of Nurse Ordering</label>
                        <input type="text" name="nurse_name" id="nurse_name"
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <!-- Unit Email Address -->
                    <div>
                        <label for="unit_email" class="block text-gray-600">Unit Email Address</label>
                        <input type="email" name="unit_email" id="unit_email"
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <!-- Quantity Ordered -->
                    <div>
                        <label for="quantity_ordered" class="block text-gray-600">Quantity Ordered</label>
                        <input type="text" name="quantity_ordered" id="quantity_ordered"
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <!-- Amount Due -->
                    <div>
                        <label for="amount_due" class="block text-gray-600">Amount Due: (DBM + Courier)</label>
                        <input type="text" name="amount_due" id="amount_due"
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <h2 class="text-[32px] font-inter font-bold text-[#adaaa5] col-span-1 md:col-span-2">Parent / Guardian
                        Details</h2>

                    <!-- South African Citizen -->
                    <div class="flex flex-col gap-3">
                        <label id="sa_citizen_label" class="block text-gray-600">Are you a South African citizen</label>
                        <div class="flex gap-4" role="radiogroup" aria-labelledby="sa_citizen_label">
                            <label for="sa_citizen_yes" class="flex items-center gap-2">
                                <input type="radio" name="sa_citizen" id="sa_citizen_yes" value="Yes"
                                    class="form-radio scale-150 text-blue-500">
                                <span>Yes</span>
                            </label>
                            <label for="sa_citizen_no" class="flex items-center gap-2">
                                <input type="radio" name="sa_citizen" id="sa_citizen_no" value="No"
                                    class="form-radio scale-150 text-blue-500">
                                <span>No</span>
                            </label>
                        </div>
                    </div>

                    <!-- ID Number -->
                    <div>
                        <label for="id_number" class="block text-gray-600">ID Number</label>
                        <input type="number" name="id_number" id="id_number"
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <!-- Passport Number -->
                    <div>
                        <label for="passport_number" class="block text-gray-600">Passport Number</label>
                        <input type="text" name="passport_number" id="passport_number"
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <!-- Name -->
                    <div>
                        <label for="name" class="block text-gray-600">Name <span class="text-red-500">*</span></label>
                        <input type="text" name="name" id="name"
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <!-- Surname -->
                    <div>
                        <label for="surname" class="block text-gray-600">Surname <span class="text-red-500">*</span></label>
                        <input type="text" name="surname" id="surname"
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-gray-600">E-mail <span class="text-red-500">*</span></label>
                        <input type="email" name="email" id="email"
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <!-- Cell -->
                    <div>
                        <label for="cell" class="block text-gray-600">Cell <span class="text-red-500">*</span></label>
                        <input type="tel" name="cell" id="cell"
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <!-- Person Responsible for the Account -->
                    <div>
                        <label for="account_responsible" class="block text-gray-600">Person Responsible for the
                            Account</label>
                        <input type="text" name="account_responsible" id="account_responsible"
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <!-- Physical Address -->
                    <div>
                        <label for="physical_address" class="block text-gray-600">Physical Address</label>
                        <textarea name="physical_address" id="physical_address"
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                    </div>

                    <!-- Maternal Lactation Status -->
                    <div>
                        <label for="maternal_lactation_status" class="block text-gray-600">Maternal Lactation Status</label>
                        <select name="maternal_lactation_status" id="maternal_lactation_status"
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="">Select Status</option>
                            <option value="lactating">Lactating</option>
                            <option value="not_lactating">Not Lactating</option>
                        </select>
                    </div>

                    <h2 class="text-[32px] font-inter font-bold text-[#adaaa5] col-span-1 md:col-span-2">Infant Details</h2>

                    <!-- Infant Name -->
                    <div>
                        <label for="infant_name" class="block text-gray-600">Infant Name</label>
                        <input type="text" name="infant_name" id="infant_name"
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <!-- Date of Birth -->
                    <div>
                        <label for="infant_dob" class="block text-gray-600">Date of Birth</label>
                        <input type="date" name="infant_dob" id="infant_dob"
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <!-- Birth Weight -->
                    <div>
                        <label for="birth_weight" class="block text-gray-600">Birth Weight (In grams - enter a number
                            between 200 - 3500)</label>
                        <input type="number" name="birth_weight" id="birth_weight" min="200" max="3500"
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <!-- Gestational Age -->
                    <div>
                        <label for="gestational_age" class="block text-gray-600">Gestational Age (In weeks - enter a number
                            between 20 - 40)</label>
                        <input type="number" name="gestational_age" id="gestational_age" min="20" max="40"
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <!-- Gender -->
                    <div class="flex flex-col gap-3">
                        <label id="gender_label" class="block text-gray-600">Gender</label>
                        <div class="flex gap-4" role="radiogroup" aria-labelledby="gender_label">
                            <label for="gender_male" class="flex items-center gap-2">
                                <input type="radio" name="gender" id="gender_male" value="Male"
                                    class="form-radio scale-150 text-blue-500">
                                <span>Male</span>
                            </label>
                            <label for="gender_female" class="flex items-center gap-2">
                                <input type="radio" name="gender" id="gender_female" value="Female"
                                    class="form-radio scale-150 text-blue-500">
                                <span>Female</span>
                            </label>
                        </div>
                    </div>

                    <!-- Race -->
                    <div>
                        <label for="race" class="block text-gray-600">Race</label>
                        <input type="text" name="race" id="race"
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <!-- Medical Conditions and Current Weight -->
                    <div>
                        <label for="medical_conditions" class="block text-gray-600">Medical Conditions and Current
                            Weight</label>
                        <textarea name="medical_conditions" id="medical_conditions"
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                    </div>

                    <!-- NEC Case -->
                    <div class="flex flex-col gap-3">
                        <label id="nec_case_label" class="block text-gray-600">NEC Case</label>
                        <div class="flex gap-4" role="radiogroup" aria-labelledby="nec_case_label">
                            <label for="nec_case_yes" class="flex items-center gap-2">
                                <input type="radio" name="nec_case" id="nec_case_yes" value="Yes"
                                    class="form-radio scale-150 text-blue-500">
                                <span>Yes</span>
                            </label>
                            <label for="nec_case_no" class="flex items-center gap-2">
                                <input type="radio" name="nec_case" id="nec_case_no" value="No"
                                    class="form-radio scale-150 text-blue-500">
                                <span>No</span>
                            </label>
                        </div>
                    </div>

                    <!-- Feeding Status -->
                    <div>
                        <label for="feeding_status" class="block text-gray-600">Feeding Status</label>
                        <select name="feeding_status" id="feeding_status"
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="">Select Feeding Status</option>
                            <option value="1st_week">1st Week</option>
                            <option value="2nd_week">2nd Week</option>
                            <option value="3rd_week">3rd Week</option>
                            <option value="over_3_weeks">Over 3 weeks</option>
                        </select>
                    </div>

                    <!-- Motivation for Extended Feeds -->
                    <div>
                        <label for="motivation_extended_feeds" class="block text-gray-600">Motivation for Extended
                            Feeds</label>
                        <textarea name="motivation_extended_feeds" id="motivation_extended_feeds"
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                    </div>

                    <!-- Feeding Started -->
                    <div>
                        <label for="feeding_started" class="block text-gray-600">Feeding Started (Date)</label>
                        <input type="date" name="feeding_started" id="feeding_started"
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <!-- Total Volume / Day -->
                    <div>
                        <label for="total_volume" class="block text-gray-600">Total Volume / Day (Estimated, In ml - enter a
                            number between 0 - 150)</label>
                        <input type="number" name="total_volume" id="total_volume" min="0" max="150"
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <!-- Patient File No. or Sticker -->
                    <div>
                        <label for="patient_file_no" class="block text-gray-600">Patient File No. or Sticker</label>
                        <input type="text" name="patient_file_no" id="patient_file_no"
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <!-- Prescribing Paediatrician -->
                    <div>
                        <label for="prescribing_paediatrician" class="block text-gray-600">Prescribing Paediatrician</label>
                        <input type="text" name="prescribing_paediatrician" id="prescribing_paediatrician"
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <h2 class="text-[32px] font-inter font-bold text-[#adaaa5] col-span-1 md:col-span-2">Twins, Triplets or
                        Quadruplets</h2>

                    <!-- Child 2 Details -->
                    <div>
                        <label for="infant_name_2" class="block text-gray-600">Infant Name (Child 2)</label>
                        <input type="text" name="infant_name_2" id="infant_name_2"
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label for="birth_weight_2" class="block text-gray-600">Birth Weight (Child 2) (In grams - enter a
                            number between 200 - 3500)</label>
                        <input type="number" name="birth_weight_2" id="birth_weight_2" min="200" max="3500"
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label for="gestational_age_2" class="block text-gray-600">Gestational Age (Child 2) (In weeks -
                            enter a number between 20 - 40)</label>
                        <input type="number" name="gestational_age_2" id="gestational_age_2" min="20" max="40"
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label for="medical_conditions_2" class="block text-gray-600">Medical Conditions and Current Weight
                            (Child 2)</label>
                        <textarea name="medical_conditions_2" id="medical_conditions_2"
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                    </div>
                    <div class="flex flex-col gap-3">
                        <label id="nec_case_2_label" class="block text-gray-600">NEC Case (Child 2)</label>
                        <div class="flex gap-4" role="radiogroup" aria-labelledby="nec_case_2_label">
                            <label for="nec_case_2_yes" class="flex items-center gap-2">
                                <input type="radio" name="nec_case_2" id="nec_case_2_yes" value="Yes"
                                    class="form-radio scale-150 text-blue-500">
                                <span>Yes</span>
                            </label>
                            <label for="nec_case_2_no" class="flex items-center gap-2">
                                <input type="radio" name="nec_case_2" id="nec_case_2_no" value="No"
                                    class="form-radio scale-150 text-blue-500">
                                <span>No</span>
                            </label>
                        </div>
                    </div>
                    <div>
                        <label for="feeding_status_2" class="block text-gray-600">Feeding Status (Child 2)</label>
                        <select name="feeding_status_2" id="feeding_status_2"
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="">Select Feeding Status</option>
                            <option value="1st_week">1st Week</option>
                            <option value="2nd_week">2nd Week</option>
                            <option value="3rd_week">3rd Week</option>
                            <option value="over_3_weeks">Over 3 weeks</option>
                        </select>
                    </div>
                    <div>
                        <label for="feeding_started_2" class="block text-gray-600">Feeding Started (Date) (Child 2)</label>
                        <input type="date" name="feeding_started_2" id="feeding_started_2"
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label for="motivation_extended_feeds_2" class="block text-gray-600">Motivation for Extended Feeds
                            (Child 2)</label>
                        <textarea name="motivation_extended_feeds_2" id="motivation_extended_feeds_2"
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                    </div>
                    <div>
                        <label for="total_volume_2" class="block text-gray-600">Total Volume / Day (Child 2) (Estimated, In
                            ml - enter a number between 0 - 150)</label>
                        <input type="number" name="total_volume_2" id="total_volume_2" min="0" max="150"
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label for="patient_file_no_2" class="block text-gray-600">Patient File No. or Sticker (Child
                            2)</label>
                        <input type="text" name="patient_file_no_2" id="patient_file_no_2"
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label for="prescribing_paediatrician_2" class="block text-gray-600">Prescribing Paediatrician
                            (Child 2)</label>
                        <input type="text" name="prescribing_paediatrician_2" id="prescribing_paediatrician_2"
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <!-- Child 3 Details -->
                    <div>
                        <label for="infant_name_3" class="block text-gray-600">Infant Name (Child 3)</label>
                        <input type="text" name="infant_name_3" id="infant_name_3"
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label for="birth_weight_3" class="block text-gray-600">Birth Weight (Child 3) (In grams - enter a
                            number between 200 - 3500)</label>
                        <input type="number" name="birth_weight_3" id="birth_weight_3" min="200" max="3500"
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label for="gestational_age_3" class="block text-gray-600">Gestational Age (Child 3) (In weeks -
                            enter a number between 20 - 40)</label>
                        <input type="number" name="gestational_age_3" id="gestational_age_3" min="20" max="40"
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label for="medical_conditions_3" class="block text-gray-600">Medical Conditions and Current Weight
                            (Child 3)</label>
                        <textarea name="medical_conditions_3" id="medical_conditions_3"
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                    </div>
                    <div class="flex flex-col gap-3">
                        <label id="nec_case_3_label" class="block text-gray-600">NEC Case (Child 3)</label>
                        <div class="flex gap-4" role="radiogroup" aria-labelledby="nec_case_3_label">
                            <label for="nec_case_3_yes" class="flex items-center gap-2">
                                <input type="radio" name="nec_case_3" id="nec_case_3_yes" value="Yes"
                                    class="form-radio scale-150 text-blue-500">
                                <span>Yes</span>
                            </label>
                            <label for="nec_case_3_no" class="flex items-center gap-2">
                                <input type="radio" name="nec_case_3" id="nec_case_3_no" value="No"
                                    class="form-radio scale-150 text-blue-500">
                                <span>No</span>
                            </label>
                        </div>
                    </div>
                    <div>
                        <label for="feeding_status_3" class="block text-gray-600">Feeding Status (Child 3)</label>
                        <select name="feeding_status_3" id="feeding_status_3"
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="">Select Feeding Status</option>
                            <option value="1st_week">1st Week</option>
                            <option value="2nd_week">2nd Week</option>
                            <option value="3rd_week">3rd Week</option>
                            <option value="over_3_weeks">Over 3 weeks</option>
                        </select>
                    </div>
                    <div>
                        <label for="feeding_started_3" class="block text-gray-600">Feeding Started (Date) (Child 3)</label>
                        <input type="date" name="feeding_started_3" id="feeding_started_3"
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label for="motivation_extended_feeds_3" class="block text-gray-600">Motivation for Extended Feeds
                            (Child 3)</label>
                        <textarea name="motivation_extended_feeds_3" id="motivation_extended_feeds_3"
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                    </div>
                    <div>
                        <label for="total_volume_3" class="block text-gray-600">Total Volume / Day (Child 3) (Estimated, In
                            ml - enter a number between 0 - 150)</label>
                        <input type="number" name="total_volume_3" id="total_volume_3" min="0" max="150"
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label for="patient_file_no_3" class="block text-gray-600">Patient File No. or Sticker (Child
                            3)</label>
                        <input type="text" name="patient_file_no_3" id="patient_file_no_3"
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label for="prescribing_paediatrician_3" class="block text-gray-600">Prescribing Paediatrician
                            (Child 3)</label>
                        <input type="text" name="prescribing_paediatrician_3" id="prescribing_paediatrician_3"
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <!-- Child 4 Details -->
                    <div>
                        <label for="infant_name_4" class="block text-gray-600">Infant Name (Child 4)</label>
                        <input type="text" name="infant_name_4" id="infant_name_4"
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label for="birth_weight_4" class="block text-gray-600">Birth Weight (Child 4) (In grams - enter a
                            number between 200 - 3500)</label>
                        <input type="number" name="birth_weight_4" id="birth_weight_4" min="200" max="3500"
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label for="gestational_age_4" class="block text-gray-600">Gestational Age (Child 4) (In weeks -
                            enter a number between 20 - 40)</label>
                        <input type="number" name="gestational_age_4" id="gestational_age_4" min="20" max="40"
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label for="medical_conditions_4" class="block text-gray-600">Medical Conditions and Current Weight
                            (Child 4)</label>
                        <textarea name="medical_conditions_4" id="medical_conditions_4"
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                    </div>
                    <div class="flex flex-col gap-3">
                        <label id="nec_case_4_label" class="block text-gray-600">NEC Case (Child 4)</label>
                        <div class="flex gap-4" role="radiogroup" aria-labelledby="nec_case_4_label">
                            <label for="nec_case_4_yes" class="flex items-center gap-2">
                                <input type="radio" name="nec_case_4" id="nec_case_4_yes" value="Yes"
                                    class="form-radio scale-150 text-blue-500">
                                <span>Yes</span>
                            </label>
                            <label for="nec_case_4_no" class="flex items-center gap-2">
                                <input type="radio" name="nec_case_4" id="nec_case_4_no" value="No"
                                    class="form-radio scale-150 text-blue-500">
                                <span>No</span>
                            </label>
                        </div>
                    </div>
                    <div>
                        <label for="feeding_status_4" class="block text-gray-600">Feeding Status (Child 4)</label>
                        <select name="feeding_status_4" id="feeding_status_4"
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="">Select Feeding Status</option>
                            <option value="1st_week">1st Week</option>
                            <option value="2nd_week">2nd Week</option>
                            <option value="3rd_week">3rd Week</option>
                            <option value="over_3_weeks">Over 3 weeks</option>
                        </select>
                    </div>
                    <div>
                        <label for="feeding_started_4" class="block text-gray-600">Feeding Started (Date) (Child 4)</label>
                        <input type="date" name="feeding_started_4" id="feeding_started_4"
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label for="motivation_extended_feeds_4" class="block text-gray-600">Motivation for Extended Feeds
                            (Child 4)</label>
                        <textarea name="motivation_extended_feeds_4" id="motivation_extended_feeds_4"
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                    </div>
                    <div>
                        <label for="total_volume_4" class="block text-gray-600">Total Volume / Day (Child 4) (Estimated, In
                            ml - enter a number between 0 - 150)</label>
                        <input type="number" name="total_volume_4" id="total_volume_4" min="0" max="150"
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label for="patient_file_no_4" class="block text-gray-600">Patient File No. or Sticker (Child
                            4)</label>
                        <input type="text" name="patient_file_no_4" id="patient_file_no_4"
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label for="prescribing_paediatrician_4" class="block text-gray-600">Prescribing Paediatrician
                            (Child 4)</label>
                        <input type="text" name="prescribing_paediatrician_4" id="prescribing_paediatrician_4"
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <h2 class="text-[32px] font-inter font-bold text-[#adaaa5] col-span-1 md:col-span-2">Medical Aid Details
                    </h2>

                    <!-- Medical Aid Scheme -->
                    <div>
                        <label for="medical_aid_scheme" class="block text-gray-600">Medical Aid Scheme</label>
                        <input type="text" name="medical_aid_scheme" id="medical_aid_scheme"
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <!-- Medical Aid Number -->
                    <div>
                        <label for="medical_aid_number" class="block text-gray-600">Medical Aid Number</label>
                        <input type="text" name="medical_aid_number" id="medical_aid_number"
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <!-- Option / Plan -->
                    <div>
                        <label for="medical_aid_plan" class="block text-gray-600">Option / Plan</label>
                        <input type="text" name="medical_aid_plan" id="medical_aid_plan"
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <!-- Infant Dependant Code -->
                    <div>
                        <label for="infant_dependent_code" class="block text-gray-600">Infant Dependant Code</label>
                        <input type="text" name="infant_dependent_code" id="infant_dependent_code"
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <h2 class="text-[32px] font-inter font-bold text-[#adaaa5] col-span-1 md:col-span-2">Terms & Conditions
                        and Indemnity</h2>

                    <div
                        class="flex flex-col col-span-1 md:col-span-2 gap-6 border border-[#91c2d4] bg-[#e7f2f6] rounded-3xl p-6">
                        <label class="block text-[#107ba2] font-bold">Parent / Guardian Consent</label>
                        <div class="text-gray-600 mb-4 text-[20px]">
                            <p>I, <input type="text" name="parent_consent_name" id="parent_consent_name"
                                    class="inline-block p-1 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                                    > (ID No. <input type="number" name="parent_consent_id" id="parent_consent_id"
                                    class="inline-block p-1 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                                    required>), parent / guardian of <input type="text" name="parent_consent_infant_name"
                                    id="parent_consent_infant_name"
                                    class="inline-block p-1 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                                    required> hereby consent to receiving breastmilk as provided by the South African
                                Breastmilk Reserve having been informed of the material risks and benefits thereof. Healthy
                                breastmilk has been donated in good faith for the feeding of the abovementioned infant.</p>
                            <p>I shall not claim or take legal action against the South African Breastmilk Reserve, an
                                Association incorporated under the terms of Section 21 of the Companies Act, 1973, its
                                servants, employees, representatives or agents; or the attending doctors or any of the
                                aforementioned persons' insurers (all of whom will hereinafter be referred to as "The
                                Releasees").</p>
                            <p>I hold The Releasees free from any liabilities of whatsoever nature: Of any harm, loss,
                                consequential loss, damage, death or injury of whatsoever nature that either I or the
                                abovementioned infant may suffer, arising from the administration or supply of breastmilk by
                                the Releasees or the contracting of medical pathologies there from and howsoever such harm,
                                consequential loss, damage, injury or death may occur.</p>
                            <p>I confirm that the way in which the breastmilk will be used after the date of release, is not
                                the responsibility of the Releasees.</p>
                            <p>I acknowledge that I am aware of the cost of the abovementioned breastmilk and that payment
                                will be made accordingly.</p>
                        </div>

                        <div class="flex flex-col gap-3">
                            <label id="parent_consent_label" class="block text-gray-600">I, the Parent / Guardian, agree and
                                consent to the terms and conditions above</label>
                            <div class="flex gap-4" role="radiogroup" aria-labelledby="parent_consent_label">
                                <label for="parent_consent_yes" class="flex items-center gap-2">
                                    <input type="radio" name="parent_consent" id="parent_consent_yes" value="Yes"
                                        class="form-radio scale-150 text-blue-500">
                                    <span>Yes</span>
                                </label>
                                <label for="parent_consent_no" class="flex items-center gap-2">
                                    <input type="radio" name="parent_consent" id="parent_consent_no" value="No"
                                        class="form-radio scale-150 text-blue-500">
                                    <span>No</span>
                                </label>
                            </div>
                        </div>

                        <div class="flex flex-col gap-3">
                            <label id="nurse_consent_label" class="block text-gray-600">I, the Nurse, agree to the terms and
                                conditions above</label>
                            <div class="flex gap-4" role="radiogroup" aria-labelledby="nurse_consent_label">
                                <label for="nurse_consent_yes" class="flex items-center gap-2">
                                    <input type="radio" name="nurse_consent" id="nurse_consent_yes" value="Yes"
                                        class="form-radio scale-150 text-blue-500" required>
                                    <span>Yes</span>
                                </label>
                                <label for="nurse_consent_no" class="flex items-center gap-2">
                                    <input type="radio" name="nurse_consent" id="nurse_consent_no" value="No"
                                        class="form-radio scale-150 text-blue-500">
                                    <span>No</span>
                                </label>
                            </div>
                        </div>

                        <label class="block text-[#107ba2] font-bold">Medical Team Consent</label>

                        <div class="flex flex-col gap-3">
                            <label id="healthcare_professional_consent_label" class="block text-gray-600">I, as the
                                Healthcare Professional acknowledge that I have read & understand the SABR Work Aid
                                "Promoting The Safe Use Of Donor Breastmilk"</label>
                            <div class="flex gap-4" role="radiogroup"
                                aria-labelledby="healthcare_professional_consent_label">
                                <label for="healthcare_professional_consent_yes" class="flex items-center gap-2">
                                    <input type="radio" name="healthcare_professional_consent"
                                        id="healthcare_professional_consent_yes" value="Yes"
                                        class="form-radio scale-150 text-blue-500" required>
                                    <span>Yes</span>
                                </label>
                                <label for="healthcare_professional_consent_no" class="flex items-center gap-2">
                                    <input type="radio" name="healthcare_professional_consent"
                                        id="healthcare_professional_consent_no" value="No"
                                        class="form-radio scale-150 text-blue-500">
                                    <span>No</span>
                                </label>
                            </div>
                        </div>

                        <div class="flex flex-col gap-3">
                            <label id="healthcare_professional_trained_label" class="block text-gray-600">I, as the
                                Healthcare Professional acknowledge that I have been trained in the safe use / application
                                of donor breastmilk</label>
                            <div class="flex gap-4" role="radiogroup"
                                aria-labelledby="healthcare_professional_trained_label">
                                <label for="healthcare_professional_trained_yes" class="flex items-center gap-2">
                                    <input type="radio" name="healthcare_professional_trained"
                                        id="healthcare_professional_trained_yes" value="Yes"
                                        class="form-radio scale-150 text-blue-500" required>
                                    <span>Yes</span>
                                </label>
                                <label for="healthcare_professional_trained_no" class="flex items-center gap-2">
                                    <input type="radio" name="healthcare_professional_trained"
                                        id="healthcare_professional_trained_no" value="No"
                                        class="form-radio scale-150 text-blue-500">
                                    <span>No</span>
                                </label>
                            </div>
                        </div>

                        <div class="flex flex-col gap-3">
                            <label id="prescribing_doctor_consent_label" class="block text-gray-600">I, the Prescribing
                                Doctor, agree and consent to the terms and conditions above</label>
                            <div class="flex gap-4" role="radiogroup" aria-labelledby="prescribing_doctor_consent_label">
                                <label for="prescribing_doctor_consent_yes" class="flex items-center gap-2">
                                    <input type="radio" name="prescribing_doctor_consent"
                                        id="prescribing_doctor_consent_yes" value="Yes"
                                        class="form-radio scale-150 text-blue-500" required>
                                    <span>Yes</span>
                                </label>
                                <label for="prescribing_doctor_consent_no" class="flex items-center gap-2">
                                    <input type="radio" name="prescribing_doctor_consent" id="prescribing_doctor_consent_no"
                                        value="No" class="form-radio scale-150 text-blue-500">
                                    <span>No</span>
                                </label>
                            </div>
                        </div>

                        <div class="flex flex-col gap-3">
                            <label id="prescribing_nurse_consent_label" class="block text-gray-600">I, the Prescribing
                                Nurse, agree and consent to the terms and conditions above</label>
                            <div class="flex gap-4" role="radiogroup" aria-labelledby="prescribing_nurse_consent_label">
                                <label for="prescribing_nurse_consent_yes" class="flex items-center gap-2">
                                    <input type="radio" name="prescribing_nurse_consent" id="prescribing_nurse_consent_yes"
                                        value="Yes" class="form-radio scale-150 text-blue-500" required>
                                    <span>Yes</span>
                                </label>
                                <label for="prescribing_nurse_consent_no" class="flex items-center gap-2">
                                    <input type="radio" name="prescribing_nurse_consent" id="prescribing_nurse_consent_no"
                                        value="No" class="form-radio scale-150 text-blue-500">
                                    <span>No</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col gap-3 col-span-1 md:col-span-2">
                        <label id="communication_consent_label" class="block text-gray-600">Can we send you communication
                            regarding South African Breastmilk Reserve</label>
                        <div class="flex gap-4" role="radiogroup" aria-labelledby="communication_consent_label">
                            <label for="communication_consent_yes" class="flex items-center gap-2">
                                <input type="radio" name="communication_consent" id="communication_consent_yes" value="Yes"
                                    class="form-radio scale-150 text-blue-500">
                                <span>Yes</span>
                            </label>
                            <label for="communication_consent_no" class="flex items-center gap-2">
                                <input type="radio" name="communication_consent" id="communication_consent_no" value="No"
                                    class="form-radio scale-150 text-blue-500">
                                <span>No</span>
                        </div>
                    </div>

                    <div class="flex flex-col gap-3 col-span-1 md:col-span-2">
                        <label id="communication_method_label" class="block text-gray-600">Please send communication via
                            SMS/E-mail</label>
                        <div class="flex flex-wrap gap-2" role="radiogroup" aria-labelledby="communication_method_label">
                            <label for="communication_method_sms" class="flex items-center gap-2">
                                <input type="radio" name="communication_method" id="communication_method_sms" value="sms"
                                    class="form-radio scale-150 text-blue-500">
                                <span>SMS</span>
                            </label>
                            <label for="communication_method_email" class="flex items-center gap-2">
                                <input type="radio" name="communication_method" id="communication_method_email"
                                    value="email" class="form-radio scale-150 text-blue-500">
                                <span>E-mail</span>
                            </label>
                            <label for="communication_method_both" class="flex items-center gap-2">
                                <input type="radio" name="communication_method" id="communication_method_both" value="both"
                                    class="form-radio scale-150 text-blue-500">
                                <span>Both</span>
                            </label>
                        </div>
                    </div>

                    <div
                        class="flex flex-col col-span-1 md:col-span-2 gap-6 border border-[#91c2d4] bg-[#e7f2f6] rounded-3xl p-6">
                        <label id="popia_consent_label" class="block text-[#107ba2] font-bold">Please note</label>
                        <div class="flex flex-wrap gap-2">
                            <label for="popia-consent" class="flex flex-row items-center gap-2">
                                <input id="popia-consent" name="popia_consent" value="yes" type="checkbox"
                                    class="form-checkbox scale-150 text-blue-500" required>
                                <span class="m-0 p-0">Yes, I HAVE READ AND UNDERSTAND WHAT I AM CONSENTING TO AS OUTLINED ON
                                    THE
                                    <a href="{{asset('documents/Donor-Consent-Terms-and-Conditions-updated.pdf')}}"
                                        class="underline">POPIA CONSENT TERMS AND CONDITIONS</a>
                                    AND IN THE
                                    <a href="{{asset('documents/SABR-Privacy-Policy.pdf')}}" class="underline">INFORMATION
                                        PRIVACY POLICY</a>
                                    AND CONSENT TO THE PROCESSING OF MY PERSONAL INFORMATION. I understand that the outcome
                                    OF MY APPLICATION is at the sole discretion of the SABR and I will abide by it.</span>
                            </label>
                        </div>
                    </div>

                    <div class="nav-button7 w-36 flex text-center cursor-pointer z-0">
                        <button type="submit" class="button7">Submit</button>

                    </div>
                    <!-- Success/Error Messages -->
@if (isset($success) || session('success'))
<div class="mt-6 text-green-800 bg-green-100 border border-green-300 rounded-lg p-4">
    {{ $success ?? session('success') }}
</div>
@endif

@if (isset($error) || session('error'))
<div class="mt-6 text-red-800 bg-red-100 border border-red-300 rounded-lg p-4">
    {{ $error ?? session('error') }}
</div>
@endif
                </form>

                @if ($errors->any())
                    <div class="mt-6 text-red-800 bg-red-100 border border-red-300 rounded-lg p-4">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                {{-- @if (isset($success))
                <div class="mt-6 text-green-800 bg-green-100 border border-green-300 rounded-lg p-4">
                    {{ $success }}
                </div>
                @endif --}}
               
            </div>
        </div>
    </section>

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const alertBox = document.querySelector('.bg-green-100, .bg-red-100');
                if (alertBox) {
                    alertBox.scrollIntoView({ behavior: 'smooth', block: 'center' });
                }
            });
        </script>
    @endpush

@endsection