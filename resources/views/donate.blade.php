@extends('layouts.app')

@section('content')
@flasher_render
<section class="relative w-full h-[650px] md:h-[450px]  overflow-hidden">
    <!-- Background Video -->


    <!-- Content Overlay -->
    <div class="relative z-10 flex flex-col  h-full   pt-[10px] md:pt-[186px]">
        <div class="wrapper">
            <div class="w-full h-full flex flex-col     gap-6">
                <div class="w-full h-full flex flex-col text-[#107BA2]   gap-0">
                    <div
                        class="w-full text-[#107BA2] text-[48px] md:text-[64px] font-normal break-words pt-[180px]  md:pt-[20px]">
                        Donate
                    </div>
                    <p class="text-[24px] font-inter font-light">
                        Thank you for wanting to become a breastmilk donor. Ideal candidates are in good health and have access to a fridge and freezer. There is no financial compensation but by filling out this form you are on your way to helping an infant in need. We can’t thank you enough.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-[128px]">
    <div class="wrapper">
        <div class="w-full p- ">
            <h2 class="text-[32px] font-inter font-bold text-[#adaaa5]">Mother’s Details</h2>
            <form action="{{ route('donate.submit') }}"  class="mt-4 grid grid-cols-1 md:grid-cols-2 gap-12" method="POST" onsubmit="updateDOB();">
                @csrf
                <!-- Name -->
                <script>
                    document.addEventListener('DOMContentLoaded', function () {
                        const form = document.querySelector('form');
                        const requiredInputs = form.querySelectorAll('input[type="text"], input[type="email"], input[type="radio"], select');
                        const nameAttributesToExclude = ['other_medication', 'other_medicine', 'other_medicine_specify', 'herbal_medication_specify', 'herbal_medication_other', 'expressing_donate', 'milk_expression_date', 'referral_source'];
                
                        requiredInputs.forEach(input => {
                            if (!input.hasAttribute('required') && !nameAttributesToExclude.includes(input.name) && !input.closest('.dob-container')) {
                                input.required = true;
                            }
                        });
                
                        // Date of Birth dropdowns require all 3 selects to be filled, so set required on each
                        document.querySelectorAll('.dob-container select').forEach(select => {
                            select.required = true;
                        });
                    });
                </script>
                <div>
                    <label for="mother_name" class="block  text-gray-600">Name</label>
                    <input  type="text" name="mother_name" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                
                <!-- Surname -->
                <div>
                    <label for="mother_surname" class="block text-gray-600">Surname</label>
                    <input type="text" name="mother_surname" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                
                <!-- Cell -->
                <div>
                    <label for="mother_cell" class="block text-gray-600">Cell</label>
                    <input type="text" name="mother_cell" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                
                <!-- Alternative Phone Number -->
                <div>
                    <label for="mother_alternative_number" class="block text-gray-600">Alternative Phone Number</label>
                    <input type="text" name="mother_alternative_number" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                
                <!-- Email -->
                <div>
                    <label for="mother_email" class="block text-gray-600">E-mail</label>
                    <input type="email" name="mother_email" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                
                
                    <div class="dob-container">
                        <label class="block text-gray-600">Your Date of Birth</label>
                        <div class="flex gap-2">
                            <!-- Day Dropdown -->
                            <select name="mother_dob_day" id="mother_dob_day" class="dob-date w-1/3 p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option value="">Date</option>
                                @for ($i = 1; $i <= 31; $i++)
                                    <option value="{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}">{{ $i }}</option>
                                @endfor
                            </select>
                
                            <!-- Month Dropdown -->
                            <select name="mother_dob_month" id="mother_dob_month" class="w-1/3 p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option value="">Month</option>
                                @for ($i = 1; $i <= 12; $i++)
                                    <option value="{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}">{{ date('F', mktime(0, 0, 0, $i, 1)) }}</option>
                                @endfor
                            </select>
                
                            <!-- Year Dropdown -->
                            <select name="mother_dob_year" id="mother_dob_year" class="w-1/3 p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option value="">Year</option>
                                @for ($i = date('Y'); $i >= 1900; $i--)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                
                        <!-- Hidden Input for Storing Formatted Date -->
                        <input type="hidden" name="mother_date_of_birth" id="mother_date_of_birth">
                    </div>
                
                <script>
                    document.addEventListener('DOMContentLoaded', function () {
                        const day = document.getElementById('mother_dob_day');
                        const month = document.getElementById('mother_dob_month');
                        const year = document.getElementById('mother_dob_year');
                        const dobInput = document.getElementById('mother_date_of_birth');
                
                        function updateDOB() {
                            if (day.value && month.value && year.value) {
                                dobInput.value = `${year.value}-${month.value}-${day.value}`;
                            }
                        }
                
                        [day, month, year].forEach(el => el.addEventListener('change', updateDOB));
                    });
                </script>
                
                
                <!-- ID Number -->
                <div>
                    <label for="mother_id_number" class="block text-gray-600">ID Number</label>
                    <input name="mother_id_number" type="text" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label for="mother_passport_number" class="block text-gray-600">Passport Number</label>
                    <input name="mother_passport_number" type="text" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                
                <!-- Race Selection -->
                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600" for="mother_race">Mother's Race</label>
                    <div class="grid grid-cols-2 md:grid-cols-5 gap-1">
                        <label for="mother_race_black" class="flex items-center gap-2">
                            <input type="radio" id="mother_race_black" name="mother_race" value="Black" class="form-radio scale-150 text-blue-500"> Black
                        </label>
                        <label for="mother_race_white" class="flex items-center gap-2">
                            <input type="radio" id="mother_race_white" name="mother_race" value="White" class="form-radio scale-150 text-blue-500"> White
                        </label>
                        <label for="mother_race_coloured" class="flex items-center gap-2">
                            <input type="radio" id="mother_race_coloured" name="mother_race" value="Coloured" class="form-radio scale-150 text-blue-500"> Coloured
                        </label>
                        <label for="mother_race_indian" class="flex items-center gap-2">
                            <input type="radio" id="mother_race_indian" name="mother_race" value="Indian" class="form-radio scale-150 text-blue-500"> Indian
                        </label>
                        <label for="mother_race_asian" class="flex items-center gap-2">
                            <input type="radio" id="mother_race_asian" name="mother_race" value="Asian" class="form-radio scale-150 text-blue-500"> Asian
                        </label>
                    </div>
                </div>
                
                
                
                <!-- South African Citizen -->
                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600">Are you a South African citizen?</label>
                    <div class="flex gap-4">
                        <label for="citizen_yes" class="flex items-center gap-2">
                            <input type="radio" id="citizen_yes" name="citizen" value="Yes" class="form-radio scale-150 text-blue-500"> Yes
                        </label>
                        <label for="citizen_no" class="flex items-center gap-2">
                            <input type="radio" id="citizen_no" name="citizen" value="No" class="form-radio scale-150 text-blue-500"> No
                        </label>
                    </div>
                </div>
                
                <!-- Other Nationality -->
                <div>
                    <label for="nationality" class="block text-gray-600">Other Nationality</label>
                    <input name="nationality" type="text" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                
                <!-- Address -->
                <div class="">
                    <label for="address_1" class="block text-gray-600">Address 1*</label>
                    <input name="addres_1" type="text" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="">
                    <label for="address_2" class="block text-gray-600">Address 2</label>
                    <input name="address_2" type="text" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                
                <div>
                    <label for="suburb" class="block text-gray-600">Suburb *</label>
                    <input name="suburb" type="text" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div>
                    <label for="postal_code" class="block text-gray-600">Postal Code</label>
                    <input name="postal_code" type="text" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                
                <div>
                    <label for="city" class="block text-gray-600">City</label>
                    <input name="city" type="text" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div>
                    <label for="province" class="block text-gray-600">Province</label>
                    <input type="text" name="province" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <h2 class="text-[32px] font-inter font-bold text-[#adaaa5] col-span-1 md:col-span-2">Occupational Details</h2>

                <!-- Volunteer Signup -->
                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600">Would you like to sign up as a volunteer?</label>
                    <div class="flex gap-4">
                        <label for="volunteer_yes" class="flex items-center gap-2">
                            <input type="radio" id="volunteer_yes" name="volunteer" value="Yes" class="form-radio scale-150 text-blue-500"> Yes
                        </label>
                        <label for="volunteer_no" class="flex items-center gap-2">
                            <input type="radio" id="volunteer_no" name="volunteer" value="No" class="form-radio scale-150 text-blue-500"> No
                        </label>
                    </div>
                </div>


                <div>
                    <label for="occupation" class="block text-gray-600">Occupation</label>
                    <input name="occupation" type="text" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label for="skills" class="block text-gray-600">Additional Skills</label>
                    <input name="skills" type="text" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label for="company_name" class="block text-gray-600">Company Name</label>
                    <input name="company_name" type="text" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label for="work_address_1" class="block text-gray-600">Work Address: Street 1</label>
                    <input name="work_address_1" type="text" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label for="work_address_2" class="block text-gray-600">Work Address: Street 2</label>
                    <input name="work_address_2" type="text" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label for="work_suburb" class="block text-gray-600">Work Address: Suburb</label>
                    <input name="work_suburb" type="text" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label for="work_city" class="block text-gray-600">Work Address: City</label>
                    <input name="work_city" type="text" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label for="work_postal_code" class="block text-gray-600">Work Address: Postal Code</label>
                    <input name="work_postal_code" type="text" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label for="work_province" class="block text-gray-600">Work Address: Province</label>
                    <input name="work_province" type="text" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label for="woccupation_country" class="block text-gray-600">Work Address: Country</label>
                    <input name="occupation_country" type="text" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>


                
                <h2 class="text-[32px] font-inter font-bold text-[#adaaa5] col-span-1 md:col-span-2">Baby’s Details</h2>
                <div>
                    <label for="baby_name" class="block text-gray-600">Name</label>
                    <input name="baby_name" type="text" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label for="baby_surname" class="block text-gray-600">Surname</label>
                    <input name="baby_surname" type="text" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                
                
                <div class="dob-container">
                    <label class="block text-gray-600">Your Date of Birth</label>
                    <div class="flex gap-2">
                        <!-- Day Dropdown -->
                        <select name="baby_dob_day" id="baby_dob_day" class="dob-date w-1/3 p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="">Date</option>
                            @for ($i = 1; $i <= 31; $i++)
                                <option value="{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}">{{ $i }}</option>
                            @endfor
                        </select>
            
                        <!-- Month Dropdown -->
                        <select name="baby_dob_month" id="baby_dob_month" class="w-1/3 p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="">Month</option>
                            @for ($i = 1; $i <= 12; $i++)
                                <option value="{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}">{{ date('F', mktime(0, 0, 0, $i, 1)) }}</option>
                            @endfor
                        </select>
            
                        <!-- Year Dropdown -->
                        <select name="baby_dob_year" id="baby_dob_year" class="w-1/3 p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="">Year</option>
                            @for ($i = date('Y'); $i >= 1900; $i--)
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                    </div>
            
                    <!-- Hidden Input for Storing Formatted Date -->
                    <input type="hidden" name="baby_date_of_birth" id="baby_date_of_birth">
                </div>
            
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    const day = document.getElementById('baby_dob_day');
                    const month = document.getElementById('baby_dob_month');
                    const year = document.getElementById('baby_dob_year');
                    const dobInput = document.getElementById('baby_date_of_birth');
            
                    function updateDOB() {
                        if (day.value && month.value && year.value) {
                            dobInput.value = `${year.value}-${month.value}-${day.value}`;
                        }
                    }
            
                    [day, month, year].forEach(el => el.addEventListener('change', updateDOB));
                });
            </script>
                <div>
                    <label for="family_doctor_name" class="block text-gray-600">Name of Family Doctor</label>
                    <input name="family_doctor_name" type="text" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div>
                    <label for="family_doctor_number" class="block text-gray-600">Contact Number of Family Doctor</label>
                    <input name="family_doctor_number" type="text" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>


                <h2 class="text-[32px] font-inter font-bold text-[#adaaa5] col-span-1 md:col-span-2">Declarations & Consent</h2>

<!-- Consent to collect personal information -->
<div class="flex flex-col gap-3">
    <label class="block text-gray-600">I give the SABR permission to collect and retain personal information as necessary *</label>
    <div class="flex gap-4">
        <label for="collect_info_yes" class="flex items-center gap-2">
            <input type="radio" id="collect_info_yes" name="collect_info" value="Yes" class="form-radio scale-150 text-blue-500"> Yes
        </label>
        <label for="collect_info_no" class="flex items-center gap-2">
            <input type="radio" id="collect_info_no" name="collect_info" value="No" class="form-radio scale-150 text-blue-500"> No
        </label>
    </div>
</div>

<!-- Consent to share information with third parties -->
<div class="flex flex-col gap-3">
    <label class="block text-gray-600">I agree that necessary personal information may be shared with a contracted 3rd party for donor sign-up purposes *</label>
    <div class="flex gap-4">
        <label for="share_info_yes" class="flex items-center gap-2">
            <input type="radio" id="share_info_yes" name="share_info" value="Yes" class="form-radio scale-150 text-blue-500"> Yes
        </label>
        <label for="share_info_no" class="flex items-center gap-2">
            <input type="radio" id="share_info_no" name="share_info" value="No" class="form-radio scale-150 text-blue-500"> No
        </label>
    </div>
</div>

<!-- Confirmation of truthfulness -->
<div class="flex flex-col gap-3">
    <label class="block text-gray-600">I agree that the information I have provided is true and correct *</label>
    <div class="flex gap-4">
        <label for="truth_info_yes" class="flex items-center gap-2">
            <input type="radio" id="truth_info_yes" name="truth_info" value="Yes" class="form-radio scale-150 text-blue-500"> Yes
        </label>
        <label for="truth_info_no" class="flex items-center gap-2">
            <input type="radio" id="truth_info_no" name="truth_info" value="No" class="form-radio scale-150 text-blue-500"> No
        </label>
    </div>
</div>

<!-- Consent to keep medical records -->
<div class="flex flex-col gap-3">
    <label class="block text-gray-600">I confirm that I give the SABR permission to keep records of my antenatal and other blood test results as necessary *</label>
    <div class="flex gap-4">
        <label for="keep_records_yes" class="flex items-center gap-2">
            <input type="radio" id="keep_records_yes" name="keep_records" value="Yes" class="form-radio scale-150 text-blue-500"> Yes
        </label>
        <label for="keep_records_no" class="flex items-center gap-2">
            <input type="radio" id="keep_records_no" name="keep_records" value="No" class="form-radio scale-150 text-blue-500"> No
        </label>
    </div>
</div>

<!-- Confirmation of issued cooler box -->
<div class="flex flex-col gap-3">
    <label class="block text-gray-600">I confirm that I have been issued with a SABR-issued cooler box and bottles *</label>
    <div class="flex gap-4">
        <label for="cooler_box_yes" class="flex items-center gap-2">
            <input type="radio" id="cooler_box_yes" name="cooler_box" value="Yes" class="form-radio scale-150 text-blue-500"> Yes
        </label>
        <label for="cooler_box_no" class="flex items-center gap-2">
            <input type="radio" id="cooler_box_no" name="cooler_box" value="No" class="form-radio scale-150 text-blue-500"> No
        </label>
    </div>
</div>

<!-- Disclaimer about third-party lactation advice -->
<div class="flex flex-col gap-3">
    <label class="block text-gray-600">I agree that the SABR cannot be held responsible for any lactation-related advice that was requested from or given by a 3rd party</label>
    <div class="flex gap-4">
        <label for="lactation_advice_yes" class="flex items-center gap-2">
            <input type="radio" id="lactation_advice_yes" name="lactation_advice" value="Yes" class="form-radio scale-150 text-blue-500"> Yes
        </label>
        <label for="lactation_advice_no" class="flex items-center gap-2">
            <input type="radio" id="lactation_advice_no" name="lactation_advice" value="No" class="form-radio scale-150 text-blue-500"> No
        </label>
    </div>
</div>


<h2 class="text-[32px] font-inter font-bold text-[#adaaa5] col-span-1 md:col-span-2">
    Furthermore, I confirm & consent to the following
</h2>

<div class="flex flex-col gap-3">
    <label for="hiv_test_yes" class="block text-gray-600">I confirm that I agree to be tested for HIV & agree to be retested every 3 months *</label>
    <div class="flex gap-4">
        <label class="flex items-center gap-2">
            <input type="radio" id="hiv_test_yes" name="hiv_test" value="yes" class="form-radio scale-150 text-blue-500"> Yes
        </label>
        <label class="flex items-center gap-2">
            <input type="radio" id="hiv_test_no" name="hiv_test" value="no" class="form-radio scale-150 text-blue-500"> No
        </label>
    </div>
</div>

<div class="flex flex-col gap-3">
    <label for="confidentiality_yes" class="block text-gray-600">I confirm that I have been informed that my test results are confidential & will not be released without my written permission *</label>
    <div class="flex gap-4">
        <label class="flex items-center gap-2">
            <input type="radio" id="confidentiality_yes" name="confidentiality" value="yes" class="form-radio scale-150 text-blue-500"> Yes
        </label>
        <label class="flex items-center gap-2">
            <input type="radio" id="confidentiality_no" name="confidentiality" value="no" class="form-radio scale-150 text-blue-500"> No
        </label>
    </div>
</div>

<div class="flex flex-col gap-3">
    <label for="withdraw_consent_yes" class="block text-gray-600">I confirm that I understand that I have the right to withdraw my consent for the test at any time before the test is complete *</label>
    <div class="flex gap-4">
        <label class="flex items-center gap-2">
            <input type="radio" id="withdraw_consent_yes" name="withdraw_consent" value="yes" class="form-radio scale-150 text-blue-500"> Yes
        </label>
        <label class="flex items-center gap-2">
            <input type="radio" id="withdraw_consent_no" name="withdraw_consent" value="no" class="form-radio scale-150 text-blue-500"> No
        </label>
    </div>
</div>

<div class="flex flex-col gap-3">
    <label for="hiv_info_yes" class="block text-gray-600">I confirm that I have been given basic information on HIV & the testing process *</label>
    <div class="flex gap-4">
        <label class="flex items-center gap-2">
            <input type="radio" id="hiv_info_yes" name="hiv_info" value="yes" class="form-radio scale-150 text-blue-500"> Yes
        </label>
        <label class="flex items-center gap-2">
            <input type="radio" id="hiv_info_no" name="hiv_info" value="no" class="form-radio scale-150 text-blue-500"> No
        </label>
    </div>
</div>

<div class="flex flex-col gap-3">
    <label for="info_declined_yes" class="block text-gray-600">Or, I confirm that I was offered basic information as above but declined *</label>
    <div class="flex gap-4">
        <label class="flex items-center gap-2">
            <input type="radio" id="info_declined_yes" name="info_declined" value="yes" class="form-radio scale-150 text-blue-500"> Yes
        </label>
        <label class="flex items-center gap-2">
            <input type="radio" id="info_declined_no" name="info_declined" value="no" class="form-radio scale-150 text-blue-500"> No
        </label>
    </div>
</div>

<div class="flex flex-col gap-3">
    <label for="questions_opportunity_yes" class="block text-gray-600">I confirm that I have been given the opportunity to ask questions concerning the test for HIV *</label>
    <div class="flex gap-4">
        <label class="flex items-center gap-2">
            <input type="radio" id="questions_opportunity_yes" name="questions_opportunity" value="yes" class="form-radio scale-150 text-blue-500"> Yes
        </label>
        <label class="flex items-center gap-2">
            <input type="radio" id="questions_opportunity_no" name="questions_opportunity" value="no" class="form-radio scale-150 text-blue-500"> No
        </label>
    </div>
</div>

<div class="flex flex-col gap-3">
    <label for="questions_answered_yes" class="block text-gray-600">I confirm that my questions have been answered to my satisfaction *</label>
    <div class="flex gap-4">
        <label class="flex items-center gap-2">
            <input type="radio" id="questions_answered_yes" name="questions_answered" value="yes" class="form-radio scale-150 text-blue-500"> Yes
        </label>
        <label class="flex items-center gap-2">
            <input type="radio" id="questions_answered_no" name="questions_answered" value="no" class="form-radio scale-150 text-blue-500"> No
        </label>
    </div>
</div>

<div class="flex flex-col gap-3">
    <label for="antenatal_results_yes" class="block text-gray-600">I confirm that I grant the SABR permission to obtain my antenatal blood results in the event of me not issuing them with a copy *</label>
    <div class="flex gap-4">
        <label class="flex items-center gap-2">
            <input type="radio" id="antenatal_results_yes" name="antenatal_results" value="yes" class="form-radio scale-150 text-blue-500"> Yes
        </label>
        <label class="flex items-center gap-2">
            <input type="radio" id="antenatal_results_no" name="antenatal_results" value="no" class="form-radio scale-150 text-blue-500"> No
        </label>
    </div>
</div>

<div class="flex flex-col gap-3">
    <label for="breastmilk_testing_yes" class="block text-gray-600">I agree to allow the SABR to conduct random testing on my donated breastmilk for quality assurance and research purposes *</label>
    <div class="flex gap-4">
        <label class="flex items-center gap-2">
            <input type="radio" id="breastmilk_testing_yes" name="breastmilk_testing" value="yes" class="form-radio scale-150 text-blue-500"> Yes
        </label>
        <label class="flex items-center gap-2">
            <input type="radio" id="breastmilk_testing_no" name="breastmilk_testing" value="no" class="form-radio scale-150 text-blue-500"> No
        </label>
    </div>
</div>

<h2 class="text-[32px] font-inter font-bold text-[#adaaa5] col-span-1 md:col-span-2">Questionnaire</h2>

<div class="flex flex-col gap-3">
    <label for="blood_transfusion_yes" class="block text-gray-600">1. Have you received a blood transfusion or blood products in the last 12 months? *</label>
    <div class="flex gap-4">
        <label class="flex items-center gap-2">
            <input type="radio" id="blood_transfusion_yes" name="blood_transfusion" value="yes" class="form-radio scale-150 text-blue-500"> Yes
        </label>
        <label class="flex items-center gap-2">
            <input type="radio" id="blood_transfusion_no" name="blood_transfusion" value="no" class="form-radio scale-150 text-blue-500"> No
        </label>
    </div>
</div>

<div class="flex flex-col gap-3">
    <label for="hard_liquor_yes" class="block text-gray-600">2. Do you regularly consume more than 50ml of hard liquor or its equivalent in a 24hr period? *</label>
    <div class="flex gap-4">
        <label class="flex items-center gap-2">
            <input type="radio" id="hard_liquor_yes" name="hard_liquor" value="yes" class="form-radio scale-150 text-blue-500"> Yes
        </label>
        <label class="flex items-center gap-2">
            <input type="radio" id="qhard_liquor_no" name="hard_liquor" value="no" class="form-radio scale-150 text-blue-500"> No
        </label>
    </div>
</div>

<div class="flex flex-col gap-3">
    <label for="vegetarian_yes" class="block text-gray-600">3. Are you a total vegetarian? *</label>
    <div class="flex gap-4">
        <label class="flex items-center gap-2">
            <input type="radio" id="vegetarian_yes" name="vegetarian" value="yes" class="form-radio scale-150 text-blue-500"> Yes
        </label>
        <label class="flex items-center gap-2">
            <input type="radio" id="vegetarian_no" name="vegetarian" value="no" class="form-radio scale-150 text-blue-500"> No
        </label>
    </div>
</div>

<div class="flex flex-col gap-3">
    <label for="b12vitamins_yes" class="block text-gray-600">If yes, do you supplement your diet with B12 vitamins?</label>
    <div class="flex gap-4">
        <label class="flex items-center gap-2">
            <input type="radio" id="b12vitamins_yes" name="b12vitamins" value="yes" class="form-radio scale-150 text-blue-500"> Yes
        </label>
        <label class="flex items-center gap-2">
            <input type="radio" id="b12vitamins_no" name="b12vitamins" value="no" class="form-radio scale-150 text-blue-500"> No
        </label>
    </div>
</div>

<div class="flex flex-col gap-3">
    <label for="tobacco_yes" class="block text-gray-600">4. Do you smoke or use tobacco products (snuff, chewing tobacco etc.)? *</label>
    <div class="flex gap-4">
        <label class="flex items-center gap-2">
            <input type="radio" id="tobacco_yes" name="tobacco" value="yes" class="form-radio scale-150 text-blue-500"> Yes
        </label>
        <label class="flex items-center gap-2">
            <input type="radio" id="tobacco_no" name="tobacco" value="no" class="form-radio scale-150 text-blue-500"> No
        </label>
    </div>
</div>

<div class="flex flex-col gap-3">
    <label for="drugs_yes" class="block text-gray-600">5. Do you use habit-forming drugs? *</label>
    <div class="flex gap-4">
        <label class="flex items-center gap-2">
            <input type="radio" id="drugs_yes" name="drugs" value="yes" class="form-radio scale-150 text-blue-500"> Yes
        </label>
        <label class="flex items-center gap-2">
            <input type="radio" id="drugs_no" name="drugs" value="no" class="form-radio scale-150 text-blue-500"> No
        </label>
    </div>
</div>

<div class="flex flex-col gap-3">
    <label for="cannabis_yes" class="block text-gray-600">6. Do you use cannabis? *</label>
    <div class="flex gap-4">
        <label class="flex items-center gap-2">
            <input type="radio" id="cannabis_yes" name="cannabis" value="yes" class="form-radio scale-150 text-blue-500"> Yes
        </label>
        <label class="flex items-center gap-2">
            <input type="radio" id="cannabis_no" name="cannabis" value="no" class="form-radio scale-150 text-blue-500"> No
        </label>
    </div>
</div>

<div class="flex flex-col gap-3">
    <label for="prescribed_medication_yes" class="block text-gray-600">8. Do you use any prescribed medication? *</label>
    <div class="flex gap-4">
        <label class="flex items-center gap-2">
            <input type="radio" id="prescribed_medication_yes" name="prescribed_medication" value="yes" class="form-radio scale-150 text-blue-500"> Yes
        </label>
        <label class="flex items-center gap-2">
            <input type="radio" id="prescribed_medication_no" name="prescribed_medication" value="no" class="form-radio scale-150 text-blue-500"> No
        </label>
    </div>
</div>
<h2 class="text-[32px] font-inter font-bold text-[#adaaa5] col-span-1 md:col-span-2">Prescribed medicines</h2>
<div class="col-span-1 md:col-span-2 flex flex-col gap-2 rounded-lg w-full">
    <div class="flex flex-wrap gap-2">
        <label for="antidepressants" class="flex items-center gap-2">
            <input type="checkbox" id="antidepressants" name="prescribed_medicines[]" value="Antidepressants" class="form-checkbox text-blue-500 w-5 h-5">
            Anti depressants
        </label>
        <label for="antihypertensives" class="flex items-center gap-2">
            <input type="checkbox" id="antihypertensives" name="prescribed_medicines[]" value="Anti Hypertensives" class="form-checkbox text-blue-500 w-5 h-5">
            Anti hypertensives
        </label>
        <label for="antibiotics" class="flex items-center gap-2">
            <input type="checkbox" id="antibiotics" name="prescribed_medicines[]" value="Antibiotics" class="form-checkbox text-blue-500 w-5 h-5">
            Antibiotics
        </label>
        <label for="anticoagulants" class="flex items-center gap-2">
            <input type="checkbox" id="anticoagulants" name="prescribed_medicines[]" value="Anticoagulants" class="form-checkbox text-blue-500 w-5 h-5">
            Anticoagulants
        </label>
        <label for="asthma_inhalers" class="flex items-center gap-2">
            <input type="checkbox" id="asthma_inhalers" name="prescribed_medicines[]" value="Asthma Inhalers" class="form-checkbox text-blue-500 w-5 h-5">
            Asthma inhalers
        </label>
        <label for="baclofen" class="flex items-center gap-2">
            <input type="checkbox" id="baclofen" name="prescribed_medicines[]" value="Baclofen" class="form-checkbox text-blue-500 w-5 h-5">
            Baclofen
        </label>
        <label for="carbimazole" class="flex items-center gap-2">
            <input type="checkbox" id="carbimazole" name="prescribed_medicines[]" value="Carbimazole" class="form-checkbox text-blue-500 w-5 h-5">
            Carbimazole
        </label>
        <label for="clexane" class="flex items-center gap-2">
            <input type="checkbox" id="clexane" name="prescribed_medicines[]" value="Clexane" class="form-checkbox text-blue-500 w-5 h-5">
            Clexane
        </label>
        <label for="domperidone" class="flex items-center gap-2">
            <input type="checkbox" id="domperidone" name="prescribed_medicines[]" value="Domperidone" class="form-checkbox text-blue-500 w-5 h-5">
            Domperidone
        </label>
        <label for="ibuprofen" class="flex items-center gap-2">
            <input type="checkbox" id="ibuprofen" name="prescribed_medicines[]" value="Ibuprofen" class="form-checkbox text-blue-500 w-5 h-5">
            Ibuprofen
        </label>
        <label for="insulin" class="flex items-center gap-2">
            <input type="checkbox" id="insulin" name="prescribed_medicines[]" value="Insulin" class="form-checkbox text-blue-500 w-5 h-5">
            Insulin
        </label>
        <label for="levothyroxine" class="flex items-center gap-2">
            <input type="checkbox" id="levothyroxine" name="prescribed_medicines[]" value="Levothyroxine" class="form-checkbox text-blue-500 w-5 h-5">
            Levothyroxine
        </label>
        <label for="mesalazine" class="flex items-center gap-2">
            <input type="checkbox" id="mesalazine" name="prescribed_medicines[]" value="Mesalazine" class="form-checkbox text-blue-500 w-5 h-5">
            Mesalazine
        </label>
        <label for="metformin" class="flex items-center gap-2">
            <input type="checkbox" id="metformin" name="prescribed_medicines[]" value="Metformin" class="form-checkbox text-blue-500 w-5 h-5">
            Metformin
        </label>
        <label for="omeprazole" class="flex items-center gap-2">
            <input type="checkbox" id="omeprazole" name="prescribed_medicines[]" value="Omeprazole" class="form-checkbox text-blue-500 w-5 h-5">
            Omeprazole
        </label>
        <label for="prednisolone" class="flex items-center gap-2">
            <input type="checkbox" id="prednisolone" name="prescribed_medicines[]" value="Prednisolone" class="form-checkbox text-blue-500 w-5 h-5">
            Prednisolone
        </label>
        <label for="progesterone" class="flex items-center gap-2">
            <input type="checkbox" id="progesterone" name="prescribed_medicines[]" value="Progesterone" class="form-checkbox text-blue-500 w-5 h-5">
            Progesterone
        </label>
        <label for="propothiouracil" class="flex items-center gap-2">
            <input type="checkbox" id="propothiouracil" name="prescribed_medicines[]" value="propothiouracil" class="form-checkbox text-blue-500 w-5 h-5">
            Propothiouracil
        </label>
        <label for="sleeping_tablets" class="flex items-center gap-2">
            <input type="checkbox" id="sleeping_tablets" name="prescribed_medicines[]" value="Sleeping Tablets" class="form-checkbox text-blue-500 w-5 h-5">
            Sleeping tablets
        </label>
        <label for="steroid_creams" class="flex items-center gap-2">
            <input type="checkbox" id="steroid_creams" name="prescribed_medicines[]" value="Steroid Creams" class="form-checkbox text-blue-500 w-5 h-5">
            Steroid creams
        </label>
        <label for="tramadol" class="flex items-center gap-2">
            <input type="checkbox" id="tramadol" name="prescribed_medicines[]" value="Tramadol" class="form-checkbox text-blue-500 w-5 h-5">
            Tramadol
        </label>
    </div>
    <label for="other-medication">If you are using any prescribed medication not in the list above please specify in the field below:</label>
    <div>
        <input type="text" id="other-medication" name="other_medication" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
    </div>
</div>

                <div class="flex flex-col gap-3">
                    <label for="over-counter-medication" class="block text-gray-600">9. Do you regularly use over the counter medication? *</label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2">
                            <input type="radio" id="over-counter-medication_yes" name="over-counter-medication" value="yes" class="form-radio scale-150 text-blue-500"> Yes
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" name="over-counter-medication" id="over-counter-medication_no"  value="no" class="form-radio scale-150 text-blue-500"> No
                        </label>
                    </div>
                </div>
                <h2 class="text-[32px] font-inter font-bold text-[#adaaa5] col-span-1 md:col-span-2">Over the counter medicines</h2>
                <div class="col-span-1 md:col-span-2 flex flex-col gap-2 rounded-lg w-full">
                    
                    <div class="flex flex-wrap   gap-2">
                        @php
                        $medicines = [
                            "Antacids", "Aspirin", "Bulk forming laxatives", "Cetirizine",
                            "Chlorpheniramine to relieve symptoms of hay fever",
                            "Cough mixtures that do not cause drowsiness and do not contain decongestants",
                            "Folic acid", "Head lice treatment", "Imodium for diarrhoea",
                            "Loratadine Lozenges for sore throat", "Moisturizers for the relief of eczema",
                            "Nasal spray for colds .i.e. xylometazoline",
                            "Nasal sprays or eye drops for hay fever", "Nicotine patches",
                            "Nicotine replacements", "Paracetamol", "Sofradex for conjunctivitis",
                            "Threadworm treatment (Vermoxil)", "Vitamins"
                        ];
                    @endphp
        
                    @foreach ($medicines as $medicine)
                        <label class="flex items-center gap-2">
                            <input type="checkbox" name="medicines[]" value="{{ $medicine }}" class="form-checkbox text-blue-500 w-5 h-5">
                            {{ $medicine }}
                        </label>
                    @endforeach
                        
                        
                    </div>
                    <label>If you are using any over the counter medication not in the list above please specify in the field below:</label>
                    <div>
                        <input type="text" name="other_medicine" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <label>If yes, please specify what over the counter medication you use</label>
                    <div>
                        <input type="text" name="other_medicine_specify" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                </div>
                <div class="flex flex-col col-span-1 md:col-span-2 gap-3">
                    <label class="block text-gray-600" for="herbal_medicines_yes">10. Do you use any herbal / homeopathic medications / remedies? *</label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2">
                            <input type="radio" id="herbal_medicines_yes" name="herbal_medicines" value="yes" class="form-radio scale-150 text-blue-500">
                            Yes
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" id="herbal_medicines_no" name="herbal_medicines" value="no" class="form-radio scale-150 text-blue-500">
                            No
                        </label>
                    </div>
                </div>

                <h2 class="text-[32px] font-inter font-bold text-[#adaaa5] col-span-1 md:col-span-2">Herbal medicines</h2>
                <div class="col-span-1 md:col-span-2 flex flex-col gap-2 rounded-lg w-full">
                    
                    <div class="flex flex-wrap gap-2">
                        <label class="flex items-center gap-2">
                            <input type="checkbox" id="fenugreek" name="herbal_supplements[]" value="Fenugreek" class="form-checkbox text-blue-500 w-5 h-5">
                            Fenugreek
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="checkbox" id="biloba" name="herbal_supplements[]" value="Biloba" class="form-checkbox text-blue-500 w-5 h-5">
                            Biloba
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="checkbox" id="st_johns_wort" name="herbal_supplements[]" value="St Johns Wort" class="form-checkbox text-blue-500 w-5 h-5">
                            St Johns Wort
                        </label>
                    </div>
                    <label>If you are using any herbal medication not in the list above please specify in the field below:</label>
                    <div>
                        <input name="herbal_medication_specify" type="text" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <label>If yes, please specify what herbal, homeopathic medication or remedies you use</label>
                    <div>
                        <input type="text" name="herbal_medication_other" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                </div>
                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600">11. Do you use any galactogogues / substances to increase your breastmilk supply? *</label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2" for="galactogogues_yes">
                            <input type="radio" id="galactogogues_yes" name="galactogogues" value="Yes" class="form-radio scale-150 text-blue-500">
                            Yes
                        </label>
                        <label class="flex items-center gap-2" for="galactogogues_no">
                            <input type="radio" id="galactogogues_no" name="galactogogues" value="No" class="form-radio scale-150 text-blue-500">
                            No
                        </label>
                    </div>
                </div>
                
                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600">12. Do you use any cytotoxic or radioactive medication? *</label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2" for="cytotoxic_yes">
                            <input type="radio" id="cytotoxic_yes" name="cytotoxic_medication" value="Yes" class="form-radio scale-150 text-blue-500">
                            Yes
                        </label>
                        <label class="flex items-center gap-2" for="cytotoxic_no">
                            <input type="radio" id="cytotoxic_no" name="cytotoxic_medication" value="No" class="form-radio scale-150 text-blue-500">
                            No
                        </label>
                    </div>
                </div>
                
                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600">13. Do you use any form of contraceptives? *</label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2" for="contraceptives_yes">
                            <input type="radio" id="contraceptives_yes" name="contraceptives" value="Yes" class="form-radio scale-150 text-blue-500">
                            Yes
                        </label>
                        <label class="flex items-center gap-2" for="contraceptives_no">
                            <input type="radio" id="contraceptives_no" name="contraceptives" value="No" class="form-radio scale-150 text-blue-500">
                            No
                        </label>
                    </div>
                </div>
                
                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600">14. If you do use contraceptives, please specify the type</label>
                    <div class="flex flex-wrap gap-2">
                        <label class="flex items-center gap-2" for="contraceptive_condoms">
                            <input type="checkbox" id="contraceptive_condoms" name="contraceptives_specify[]" value="Condoms" class="form-checkbox text-blue-500 w-5 h-5">
                            Condoms
                        </label>
                        <label class="flex items-center gap-2" for="contraceptive_injectable">
                            <input type="checkbox" id="contraceptive_injectable" name="contraceptives_specify[]" value="Injectable" class="form-checkbox text-blue-500 w-5 h-5">
                            Injectable
                        </label>
                        <label class="flex items-center gap-2" for="contraceptive_oral">
                            <input type="checkbox" id="contraceptive_oral" name="contraceptives_specify[]" value="Oral" class="form-checkbox text-blue-500 w-5 h-5">
                            Oral
                        </label>
                    </div>
                </div>
                <div class="flex flex-col col-span-1 md:col-span-2 gap-3">
                    <label class="block text-gray-600">15. Are you in a monogamous relationship? *</label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2" for="monogamous_yes">
                            <input type="radio" id="monogamous_yes" name="monogamous_relationship" value="Yes" class="form-radio scale-150 text-blue-500">
                            Yes
                        </label>
                        <label class="flex items-center gap-2" for="monogamous_no">
                            <input type="radio" id="monogamous_no" name="monogamous_relationship" value="No" class="form-radio scale-150 text-blue-500">
                            No
                        </label>
                    </div>
                </div>
                <div class="flex flex-col col-span-1 md:col-span-2 gap-3">
                    <label class="block text-gray-600">16. Have you ever been diagnosed with:</label>
                   
                </div>
                {{-- <div class="flex flex-col gap-3">
                    <label class="block text-gray-600">Have you ever had hepatitis B, HIV, or TB? *</label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2" for="hepatitis_hiv_tb_yes">
                            <input type="radio" id="hepatitis_hiv_tb_yes" name="hepatitis_hiv_tb" value="Yes" class="form-radio scale-150 text-blue-500">
                            Yes
                        </label>
                        <label class="flex items-center gap-2" for="hepatitis_hiv_tb_no">
                            <input type="radio" id="hepatitis_hiv_tb_no" name="hepatitis_hiv_tb" value="No" class="form-radio scale-150 text-blue-500">
                            No
                        </label>
                    </div>
                </div> --}}
                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600">Have you ever been diagnosed with Hepatitis B? *</label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2" for="hepatitis_b_yes">
                            <input type="radio" id="hepatitis_b_yes" name="hepatitis_b" value="Yes" class="form-radio scale-150 text-blue-500">
                            Yes
                        </label>
                        <label class="flex items-center gap-2" for="hepatitis_b_no">
                            <input type="radio" id="hepatitis_b_no" name="hepatitis_b" value="No" class="form-radio scale-150 text-blue-500">
                            No
                        </label>
                    </div>
                </div>
                
                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600" for="hepatitis_c">Have you ever been diagnosed with Hepatitis C? *</label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2" for="hepatitis_c_yes">
                            <input type="radio" id="hepatitis_c_yes" name="hepatitis_c" value="Yes" class="form-radio scale-150 text-blue-500">
                            Yes
                        </label>
                        <label class="flex items-center gap-2" for="hepatitis_c_no">
                            <input type="radio" id="hepatitis_c_no" name="hepatitis_c" value="No" class="form-radio scale-150 text-blue-500">
                            No
                        </label>
                    </div>
                </div>
                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600" for="tb_diagnosis">Have you ever been diagnosed with TB? *</label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2" for="tb_yes">
                            <input type="radio" id="tb_yes" name="tb_diagnosis" value="Yes" class="form-radio scale-150 text-blue-500">
                            Yes
                        </label>
                        <label class="flex items-center gap-2" for="tb_no">
                            <input type="radio" id="tb_no" name="tb_diagnosis" value="No" class="form-radio scale-150 text-blue-500">
                            No
                        </label>
                    </div>
                </div>
                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600" for="syphilis_diagnosis">Have you ever been diagnosed with Syphilis? *</label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2" for="syphilis_yes">
                            <input type="radio" id="syphilis_yes" name="syphilis_diagnosis" value="Yes" class="form-radio scale-150 text-blue-500">
                            Yes
                        </label>
                        <label class="flex items-center gap-2" for="syphilis_no">
                            <input type="radio" id="syphilis_no" name="syphilis_diagnosis" value="No" class="form-radio scale-150 text-blue-500">
                            No
                        </label>
                    </div>
                </div>
                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600" for="hiv_diagnosis">Have you ever been diagnosed with HIV? *</label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2" for="hiv_yes">
                            <input type="radio" id="hiv_yes" name="hiv_diagnosis" value="Yes" class="form-radio scale-150 text-blue-500">
                            Yes
                        </label>
                        <label class="flex items-center gap-2" for="hiv_no">
                            <input type="radio" id="hiv_no" name="hiv_diagnosis" value="No" class="form-radio scale-150 text-blue-500">
                            No
                        </label>
                    </div>
                </div>
                
               
                

                <div class="flex flex-col col-span-1 md:col-span-2 gap-3">
                    <label class="block text-gray-600">17. Do you or have you ever had a sexual partner who:*</label>
                </div>
                {{-- <div class="flex flex-col gap-3">
                    <label class="block text-gray-600" for="partner_risk_hiv">
                        Have you ever had a sexual partner who is at risk for HIV, takes habit-forming drugs, or is a hemophiliac? *
                    </label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2" for="partner_risk_hiv_yes">
                            <input type="radio" id="partner_risk_hiv_yes" name="partner_risk_hiv" value="Yes" class="form-radio scale-150 text-blue-500">
                            Yes
                        </label>
                        <label class="flex items-center gap-2" for="partner_risk_hiv_no">
                            <input type="radio" id="partner_risk_hiv_no" name="partner_risk_hiv" value="No" class="form-radio scale-150 text-blue-500">
                            No
                        </label>
                    </div>
                </div> --}}
                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600" for="partner_hiv_risk">
                        Do you currently have, or have you ever had, a sexual partner who has or is at risk for HIV? *
                    </label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2" for="partner_hiv_risk_yes">
                            <input type="radio" id="partner_hiv_risk_yes" name="partner_hiv_risk" value="Yes" class="form-radio scale-150 text-blue-500">
                            Yes
                        </label>
                        <label class="flex items-center gap-2" for="partner_hiv_risk_no">
                            <input type="radio" id="partner_hiv_risk_no" name="partner_hiv_risk" value="No" class="form-radio scale-150 text-blue-500">
                            No
                        </label>
                    </div>
                </div>
                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600" for="partner_drug_use">
                        Do you currently have, or have you ever had, a sexual partner who uses habit-forming drugs? *
                    </label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2" for="partner_drug_use_yes">
                            <input type="radio" id="partner_drug_use_yes" name="partner_drug_use" value="Yes" class="form-radio scale-150 text-blue-500">
                            Yes
                        </label>
                        <label class="flex items-center gap-2" for="partner_drug_use_no">
                            <input type="radio" id="partner_drug_use_no" name="partner_drug_use" value="No" class="form-radio scale-150 text-blue-500">
                            No
                        </label>
                    </div>
                </div>
                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600" for="partner_haemophiliac">
                        Do you currently have, or have you ever had, a sexual partner who is a haemophiliac? *
                    </label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2" for="partner_haemophiliac_yes">
                            <input type="radio" id="partner_haemophiliac_yes" name="partner_haemophiliac" value="Yes" class="form-radio scale-150 text-blue-500">
                            Yes
                        </label>
                        <label class="flex items-center gap-2" for="partner_haemophiliac_no">
                            <input type="radio" id="partner_haemophiliac_no" name="partner_haemophiliac" value="No" class="form-radio scale-150 text-blue-500">
                            No
                        </label>
                    </div>
                </div>
                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600" for="last_hiv_test">
                        18. When was the last time your spouse/consort/regular sexual partner was tested for HIV? *
                    </label>
                    <input type="text" id="last_hiv_test" name="last_hiv_test"
                        class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Enter date or approximate timeframe">
                </div>
                
                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600" for="persistent_cough">
                        19. Have you been coughing persistently (2 weeks or longer)? *
                    </label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2" for="persistent_cough_yes">
                            <input type="radio" id="persistent_cough_yes" name="persistent_cough" value="Yes"
                                class="form-radio scale-150 text-blue-500">
                            Yes
                        </label>
                        <label class="flex items-center gap-2" for="persistent_cough_no">
                            <input type="radio" id="persistent_cough_no" name="persistent_cough" value="No"
                                class="form-radio scale-150 text-blue-500">
                            No
                        </label>
                    </div>
                </div>
                
                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600" for="persistent_cough_exposure">
                        20. Have you been exposed to someone (work or home) who is coughing persistently? *
                    </label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2" for="persistent_cough_exposure_yes">
                            <input type="radio" id="persistent_cough_exposure_yes" name="persistent_cough_exposure" value="Yes"
                                class="form-radio scale-150 text-blue-500">
                            Yes
                        </label>
                        <label class="flex items-center gap-2" for="persistent_cough_exposure_no">
                            <input type="radio" id="persistent_cough_exposure_no" name="persistent_cough_exposure" value="No"
                                class="form-radio scale-150 text-blue-500">
                            No
                        </label>
                    </div>
                </div>
                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600" for="job_hazard_exposure">
                        21. Are you exposed to harmful environments or chemicals due to your job? *
                    </label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2" for="job_hazard_exposure_yes">
                            <input type="radio" id="job_hazard_exposure_yes" name="job_hazard_exposure" value="Yes"
                                class="form-radio scale-150 text-blue-500">
                            Yes
                        </label>
                        <label class="flex items-center gap-2" for="job_hazard_exposure_no">
                            <input type="radio" id="job_hazard_exposure_no" name="job_hazard_exposure" value="No"
                                class="form-radio scale-150 text-blue-500">
                            No
                        </label>
                    </div>
                </div>
                
                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600" for="hiv_test_results">
                        Do you have a copy of the results of your antenatal HIV tests? *
                    </label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2" for="hiv_test_results_yes">
                            <input type="radio" id="hiv_test_results_yes" name="hiv_test_results" value="Yes"
                                class="form-radio scale-150 text-blue-500">
                            Yes
                        </label>
                        <label class="flex items-center gap-2" for="hiv_test_results_no">
                            <input type="radio" id="hiv_test_results_no" name="hiv_test_results" value="No"
                                class="form-radio scale-150 text-blue-500">
                            No
                        </label>
                    </div>
                </div>
                
                <!-- Question: Willing to undergo an HIV test -->
<div class="flex flex-col gap-3">
    <label class="block text-gray-600" for="hiv_rapid_test">
        If not, would you be prepared to undergo a rapid test for HIV at your expense and submit the results to the screening officer? *
    </label>
    <div class="flex gap-4">
        <label class="flex items-center gap-2" for="hiv_rapid_test_yes">
            <input type="radio" id="hiv_rapid_test_yes" name="hiv_rapid_test" value="Yes" class="form-radio scale-150 text-blue-500">
            Yes
        </label>
        <label class="flex items-center gap-2" for="hiv_rapid_test_no">
            <input type="radio" id="hiv_rapid_test_no" name="hiv_rapid_test" value="No" class="form-radio scale-150 text-blue-500">
            No
        </label>
    </div>
</div>

<!-- Question: Do you own a breast pump? -->
<div class="flex flex-col gap-3">
    <label class="block text-gray-600" for="breast_pump">
        Do you own a breast pump?
    </label>
    <div class="flex gap-4">
        <label class="flex items-center gap-2" for="breast_pump_yes">
            <input type="radio" id="breast_pump_yes" name="breast_pump" value="Yes" class="form-radio scale-150 text-blue-500">
            Yes
        </label>
        <label class="flex items-center gap-2" for="breast_pump_no">
            <input type="radio" id="breast_pump_no" name="breast_pump" value="No" class="form-radio scale-150 text-blue-500">
            No
        </label>
    </div>
    <p class="text-[14px] text-[#adaaa5]">
        Unfortunately, we are not able to supply breast pumps. Unless you are able to hand express, owning a breast pump is essential.
    </p>
</div>
               <!-- Question: Expression method for donation -->
<div class="flex flex-col gap-3">
    <label class="block text-gray-600" for="expressing_donate">
        If not, how will you be expressing to donate?
    </label>
    <div class="flex gap-4">
        <input type="text" id="expressing_donate" name="expressing_donate" 
            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" >
    </div>
</div>

<!-- Question: Donation type (Once-off or Long-term) -->
<div class="flex flex-col gap-3">
    <label class="block text-gray-600">Will you be a once-off donor or a long-term donor?</label>
    <div class="flex gap-4">
        <label class="flex items-center gap-2" for="donor_once">
            <input type="radio" id="donor_once" name="donor_type" value="Once-off" class="form-radio scale-150 text-blue-500">
            Once-off donor
        </label>
        <label class="flex items-center gap-2" for="donor_long_term">
            <input type="radio" id="donor_long_term" name="donor_type" value="Long-term" class="form-radio scale-150 text-blue-500">
            Long-term donor
        </label>
    </div>
</div>

                <!-- Question: Date of Milk Expression for Once-off Donors -->
<div class="flex flex-col gap-3">
    <label class="block text-gray-600" for="milk_expression_date">
        If you are a once-off donor, when was the milk you are donating expressed?
    </label>
    <div class="flex gap-4">
        <input type="text" id="milk_expression_date" name="milk_expression_date"
            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
    </div>
</div>

<!-- Question: How did you hear about us? -->
<div class="flex flex-col gap-3">
    <label class="block text-gray-600" for="referral_source">
        How did you hear about us?
    </label>
    <div class="flex gap-4">
        <input type="text" id="referral_source" name="referral_source" 
            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" >
    </div>
</div>
                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600">Please note, SABR reserves the right to outsource the sign up of donors to a third party medical professional.</label>
                    
                </div>
                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600">
                        I agree to the sharing of my information for sign-up purposes only. *
                    </label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2">
                            <input type="radio" name="info_sharing" value="yes" class="form-radio scale-150 text-blue-500"> Yes
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" name="info_sharing" value="no" class="form-radio scale-150 text-blue-500"> No
                        </label>
                    </div>
                </div>
                
                <!-- Communication Consent -->
                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600">
                        Can we send you communication regarding the South African Breastmilk Reserve?
                    </label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2">
                            <input type="radio" name="communication_consent" value="yes" class="form-radio scale-150 text-blue-500"> Yes
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" name="communication_consent" value="no" class="form-radio scale-150 text-blue-500"> No
                        </label>
                    </div>
                </div>
                
                <!-- Preferred Communication Method -->
                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600">
                        Please send communication via SMS/E-mail (Choose one or both)
                    </label>
                    <div class="flex flex-wrap gap-2">
                        <label class="flex items-center gap-2">
                            <input type="radio" name="communication_method" value="sms" class="form-radio scale-150 text-blue-500"> SMS
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" name="communication_method" value="email" class="form-radio scale-150 text-blue-500"> E-mail
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" name="communication_method" value="both" class="form-radio scale-150 text-blue-500"> Both
                        </label>
                    </div>
                </div>
                
                <div class="flex flex-col col-span-1 md:col-span-2 gap-6 border border-[#91c2d4] bg-[#e7f2f6] rounded-3xl p-6">
                    <label class="block text-[#107ba2] font-bold">Please note</label>
                    <div class="flex flex-wrap  gap-2">
                        <label class="flex flex-row items-center gap-2 ">
                            <input id="popia-consent" name="popia_consent" value="yes" type="checkbox" class="form-checkbox checked:text-blue-500 scale-150 !w-3 !h-3 text-[#636061] required" required>
                            Yes, I HAVE READ AND UNDERSTAND WHAT I AM CONSENTING TO AS OUTLINED ON THE POPIA CONSENT TERMS AND CONDITIONS AND IN THE INFORMATION PRIVACY POLICY AND CONSENT TO THE PROCESSING OF MY PERSONAL INFORMATION. I understand that the outcome OF MY APPLICATION is at the sole discretion of the SABR and I will abide by it.
                        </label>
                          
                    </div>
                </div>
                
                <div class="nav-button7 w-36 flex text-center cursor-pointer z-0">
                    <button type="submit" class="button7">Submit</button>
                </div>
            </form>
        </div>
        
    </div>
</section>
@endsection