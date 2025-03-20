@extends('layouts.app')

@section('content')
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
        <div class="w-full p-6 ">
            <h2 class="text-[32px] font-inter font-bold text-[#adaaa5]">Mother’s Details</h2>
            <form class="mt-4 grid grid-cols-1 md:grid-cols-2 gap-12">
                <!-- Name -->
                <div>
                    <label class="block  text-gray-600">Name</label>
                    <input type="text" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                
                <!-- Surname -->
                <div>
                    <label class="block text-gray-600">Surname</label>
                    <input type="text" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                
                <!-- Cell -->
                <div>
                    <label class="block text-gray-600">Cell</label>
                    <input type="text" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                
                <!-- Alternative Phone Number -->
                <div>
                    <label class="block text-gray-600">Alternative Phone Number</label>
                    <input type="text" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                
                <!-- Email -->
                <div>
                    <label class="block text-gray-600">E-mail</label>
                    <input type="email" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                
                <!-- Date of Birth -->
                <div class="dob-container">
                    <label class="block text-gray-600">Your Date of Birth</label>
                    <div class="flex gap-2">
                        <!-- Date Dropdown -->
                        <select class="dob-date w-1/3 p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="">Date</option>
                        </select>
                
                        <!-- Month Dropdown -->
                        <select class="dob-month w-1/3 p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="">Month</option>
                        </select>
                
                        <!-- Year Dropdown -->
                        <select class="dob-year w-1/3 p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="">Year</option>
                        </select>
                    </div>
                </div>
                
                
                
                <!-- ID Number -->
                <div>
                    <label class="block text-gray-600">ID Number</label>
                    <input type="text" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                
                <!-- Race Selection -->
                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600">Race</label>
                    <div class="grid grid-cols-2 md:grid-cols-5 gap-1">
                        <label class="flex items-center gap-2">
                            <input type="radio" name="race" class="form-radio  scale-150 text-blue-500"> Black
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" name="race" class="form-radio scale-150 text-blue-500"> White
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" name="race" class="form-radio scale-150 text-blue-500"> Coloured
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" name="race" class="form-radio scale-150 text-blue-500"> Indian
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" name="race" class="form-radio scale-150 text-blue-500"> Asian
                        </label>
                    </div>
                </div>
                
                <!-- South African Citizen -->
                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600">Are you a South African citizen?</label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> Yes
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> No
                        </label>
                    </div>
                </div>
                
                <!-- Other Nationality -->
                <div>
                    <label class="block text-gray-600">Other Nationality</label>
                    <input type="text" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                
                <!-- Address -->
                <div class="c">
                    <label class="block text-gray-600">Address 1*</label>
                    <input type="text" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="">
                    <label class="block text-gray-600">Address 2</label>
                    <input type="text" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                
                <div>
                    <label class="block text-gray-600">Suburb *</label>
                    <input type="text" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div>
                    <label class="block text-gray-600">Postal Code</label>
                    <input type="text" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                
                <div>
                    <label class="block text-gray-600">City</label>
                    <input type="text" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div>
                    <label class="block text-gray-600">Province</label>
                    <input type="text" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <h2 class="text-[32px] font-inter font-bold text-[#adaaa5] col-span-1 md:col-span-2">Occupational Details</h2>

                <!-- Other Nationality -->
                <div>
                    <label class="block text-gray-600">Country</label>
                    <input type="text" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <!-- South African Citizen -->
                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600">Would you like to sign up as a volunteer?</label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> Yes
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> No
                        </label>
                    </div>
                </div>

                <div>
                    <label class="block text-gray-600">Occupation</label>
                    <input type="text" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label class="block text-gray-600">Additional Skills</label>
                    <input type="text" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label class="block text-gray-600">Company Name</label>
                    <input type="text" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label class="block text-gray-600">Work Address: Street 1</label>
                    <input type="text" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label class="block text-gray-600">Work Address: Street 2</label>
                    <input type="text" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label class="block text-gray-600">Work Address: Suburb</label>
                    <input type="text" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label class="block text-gray-600">Work Address: City</label>
                    <input type="text" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label class="block text-gray-600">Work Address: City</label>
                    <input type="text" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label class="block text-gray-600">Work Address: Province</label>
                    <input type="text" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label class="block text-gray-600">Work Address: Country</label>
                    <input type="text" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                
                <h2 class="text-[32px] font-inter font-bold text-[#adaaa5] col-span-1 md:col-span-2">Baby’s Details</h2>
                <div>
                    <label class="block text-gray-600">Name</label>
                    <input type="text" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label class="block text-gray-600">Surname</label>
                    <input type="text" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                
                
                <!-- Date of Birth -->
                <div class="dob-container">
                    <label class="block text-gray-600">Your Date of Birth</label>
                    <div class="flex gap-2">
                        <!-- Date Dropdown -->
                        <select class="dob-date w-1/3 p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="">Date</option>
                        </select>
                
                        <!-- Month Dropdown -->
                        <select class="dob-month w-1/3 p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="">Month</option>
                        </select>
                
                        <!-- Year Dropdown -->
                        <select class="dob-year w-1/3 p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="">Year</option>
                        </select>
                    </div>
                </div>
                <div>
                    <label class="block text-gray-600">Name of Family Doctor</label>
                    <input type="email" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div>
                    <label class="block text-gray-600">Contact Number of Family Doctor</label>
                    <input type="email" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>


                <h2 class="text-[32px] font-inter font-bold text-[#adaaa5] col-span-1 md:col-span-2">Declarations & Consent</h2>

                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600">I give the SABR permission to collect and retain personal information as necessary *</label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> Yes
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> No
                        </label>
                    </div>
                </div>
                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600">I agree that necessary personal information may be shared with a contracted 3rd party for donor sign up purposes *</label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> Yes
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> No
                        </label>
                    </div>
                </div>

                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600">I agree that the information I have provided is true and correct *</label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> Yes
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> No
                        </label>
                    </div>
                </div>
                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600">I confirm that I give the SABR permission to keep record of my antenatal and other blood test results as necessary *</label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> Yes
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> No
                        </label>
                    </div>
                </div>

                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600">I confirm that I have been issued with a SABR issued cooler box and bottles *</label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> Yes
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> No
                        </label>
                    </div>
                </div>
                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600">I agree that the SABR cannot be held responsible for any lactation related advice that was requested from or given by a 3rd party </label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> Yes
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> No
                        </label>
                    </div>
                </div>

                <h2 class="text-[32px] font-inter font-bold text-[#adaaa5] col-span-1 md:col-span-2">Furthermore I confirm & consent to the following</h2>

                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600">I confirm that I agree to be tested for HIV & agree to be retested every 3 months *</label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> Yes
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> No
                        </label>
                    </div>
                </div>
                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600">I confirm that I have been informed that my test results are confidential & will not be released without my written permission *</label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> Yes
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> No
                        </label>
                    </div>
                </div>

                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600">I confirm that I understand that I have the right to withdraw my consent for the test at any time before the test is complete *</label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> Yes
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> No
                        </label>
                    </div>
                </div>
                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600">I confirm that I have been given basic information on HIV & the testing process *</label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> Yes
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> No
                        </label>
                    </div>
                </div>

                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600">Or, I confirm that I was offered basic information as above but declined *</label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> Yes
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> No
                        </label>
                    </div>
                </div>

                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600">I confirm that I have been given the opportunity to ask questions concerning the test for HIV * </label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> Yes
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> No
                        </label>
                    </div>
                </div>
                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600">I confirm that my questions have been answered to my satisfaction *</label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> Yes
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> No
                        </label>
                    </div>
                </div>
                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600">I confirm that I grant the SABR permission to obtain my antenatal blood results in the event of me not issuing them with a copy *</label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> Yes
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> No
                        </label>
                    </div>
                </div>
                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600">I agree to allow the SABR to conduct random testing on my donated breastmilk for quality assurance and research purposes *</label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> Yes
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> No
                        </label>
                    </div>
                </div>

                <h2 class="text-[32px] font-inter font-bold text-[#adaaa5] col-span-1 md:col-span-2">Questionnaire</h2>

                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600">1. Have you received a blood transfusion or blood products in the last 12 months? *</label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> Yes
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> No
                        </label>
                    </div>
                </div>
                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600">1. Have you received a blood transfusion or blood products in the last 12 months? *</label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> Yes
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> No
                        </label>
                    </div>
                </div>
                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600">2. Do you regularly consume more than 50ml of hard liquor or its equivalent in a 24hr period? *</label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> Yes
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> No
                        </label>
                    </div>
                </div>
                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600">3. Are you a total vegetarian? *</label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> Yes
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> No
                        </label>
                    </div>
                </div>
                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600">If yes, do you supplement your diet with B12 vitamins?</label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> Yes
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> No
                        </label>
                    </div>
                </div>
                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600">4. Do you smoke or use tobacco products (snuff, chewing tobacco etc.)? *</label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> Yes
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> No
                        </label>
                    </div>
                </div>
                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600">5. Do you use habit forming drugs? *</label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> Yes
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> No
                        </label>
                    </div>
                </div>
                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600">6. Do you use cannabis? *</label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> Yes
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> No
                        </label>
                    </div>
                </div>
                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600">8. Do you use any prescribed medication? *</label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> Yes
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> No
                        </label>
                    </div>
                </div>
                <h2 class="text-[32px] font-inter font-bold text-[#adaaa5] col-span-1 md:col-span-2">Prescribed medicines</h2>
                <div class="col-span-1 md:col-span-2 flex flex-col gap-2 rounded-lg w-full">
                    
                    <div class="flex flex-wrap   gap-2">
                        <label class="flex items-center gap-2 ">
                            <input type="checkbox" class="form-checkbox text-blue-500 w-5 h-5">
                            Anti depressants
                        </label>
                        <label class="flex items-center gap-2 ">
                            <input type="checkbox" class="form-checkbox text-blue-500 w-5 h-5">
                            Anti hypertensives
                        </label>
                        <label class="flex items-center gap-2 ">
                            <input type="checkbox" class="form-checkbox text-blue-500 w-5 h-5">
                            Antibiotics
                        </label>
                        <label class="flex items-center gap-2 ">
                            <input type="checkbox" class="form-checkbox text-blue-500 w-5 h-5">
                            Anticoagulants
                        </label>
                        <label class="flex items-center gap-2 ">
                            <input type="checkbox" class="form-checkbox text-blue-500 w-5 h-5">
                            Asthma inhalers
                        </label>
                        <label class="flex items-center gap-2 ">
                            <input type="checkbox" class="form-checkbox text-blue-500 w-5 h-5">
                            Baclofen
                        </label>
                        <label class="flex items-center gap-2 ">
                            <input type="checkbox" class="form-checkbox text-blue-500 w-5 h-5">
                            Carbimazole
                        </label>
                        <label class="flex items-center gap-2 ">
                            <input type="checkbox" class="form-checkbox text-blue-500 w-5 h-5">
                            Clexane
                        </label>
                        <label class="flex items-center gap-2 ">
                            <input type="checkbox" class="form-checkbox text-blue-500 w-5 h-5">
                            Domperidone
                        </label>
                        <label class="flex items-center gap-2 ">
                            <input type="checkbox" class="form-checkbox text-blue-500 w-5 h-5">
                            Ibuprofen
                        </label>
                        <label class="flex items-center gap-2 ">
                            <input type="checkbox" class="form-checkbox text-blue-500 w-5 h-5">
                            Insulin
                        </label>
                        <label class="flex items-center gap-2  ">
                            <input type="checkbox" class="form-checkbox text-blue-500 w-5 h-5">
                            Levothyroxine
                        </label>
                        <label class="flex items-center gap-2  ">
                            <input type="checkbox" class="form-checkbox text-blue-500 w-5 h-5">
                            Mesalazine
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="checkbox" class="form-checkbox text-blue-500 w-5 h-5">
                            Metformin
                        </label>
                        <label class="flex items-center gap-2 ">
                            <input type="checkbox" class="form-checkbox text-blue-500 w-5 h-5">
                            Omeprazole
                        </label>
                        <label class="flex items-center gap-2 ">
                            <input type="checkbox" class="form-checkbox text-blue-500 w-5 h-5">
                            Prednisolone
                        </label>
                        <label class="flex items-center gap-2 ">
                            <input type="checkbox" class="form-checkbox text-blue-500 w-5 h-5">
                            Progesterone
                        </label>
                        <label class="flex items-center gap-2 ">
                            <input type="checkbox" class="form-checkbox text-blue-500 w-5 h-5">
                            Propothiouracil
                        </label>
                        <label class="flex items-center gap-2 ">
                            <input type="checkbox" class="form-checkbox text-blue-500 w-5 h-5">
                            Sleeping tablets
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="checkbox" class="form-checkbox text-blue-500 w-5 h-5">
                            Steroid creams
                        </label>
                        <label class="flex items-center gap-2 ">
                            <input type="checkbox" class="form-checkbox text-blue-500 w-5 h-5">
                            Tramadol
                        </label>
                        
                    </div>
                    <label>If you are using any prescribed medication not in the list above please specify in the field below:</label>
                    <div>
                        <input type="text" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                </div>
                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600">9. Do you regularly use over the counter medication? *</label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> Yes
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> No
                        </label>
                    </div>
                </div>
                <h2 class="text-[32px] font-inter font-bold text-[#adaaa5] col-span-1 md:col-span-2">Over the counter medicines</h2>
                <div class="col-span-1 md:col-span-2 flex flex-col gap-2 rounded-lg w-full">
                    
                    <div class="flex flex-wrap   gap-2">
                        <label class="flex items-center gap-2 ">
                            <input type="checkbox" class="form-checkbox text-blue-500 w-5 h-5">
                            Antacids
                        </label>
                        <label class="flex items-center gap-2 ">
                            <input type="checkbox" class="form-checkbox text-blue-500 w-5 h-5">
                            Aspirin
                        </label>
                        <label class="flex items-center gap-2 ">
                            <input type="checkbox" class="form-checkbox text-blue-500 w-5 h-5">
                            Bulk forming laxatives
                        </label>
                        <label class="flex items-center gap-2 ">
                            <input type="checkbox" class="form-checkbox text-blue-500 w-5 h-5">
                            Cetirizine
                        </label>
                        <label class="flex items-center gap-2 ">
                            <input type="checkbox" class="form-checkbox text-blue-500 w-5 h-5">
                            Chlorpheniramine to relieve symptoms of hay fever
                        </label>
                        <label class="flex items-center gap-2 ">
                            <input type="checkbox" class="form-checkbox text-blue-500 w-5 h-5">
                            Cough mixtures that do not cause drowsiness and do not contain decongestants
                        </label>
                        <label class="flex items-center gap-2 ">
                            <input type="checkbox" class="form-checkbox text-blue-500 w-5 h-5">
                            Folic acid
                        </label>
                        <label class="flex items-center gap-2 ">
                            <input type="checkbox" class="form-checkbox text-blue-500 w-5 h-5">
                            Head lice treatment
                        </label>
                        <label class="flex items-center gap-2 ">
                            <input type="checkbox" class="form-checkbox text-blue-500 w-5 h-5">
                            Imodium for diarrhoea
                        </label>
                        <label class="flex items-center gap-2 ">
                            <input type="checkbox" class="form-checkbox text-blue-500 w-5 h-5">
                            Loratadine Lozenges for sore throat
                        </label>
                        <label class="flex items-center gap-2 ">
                            <input type="checkbox" class="form-checkbox text-blue-500 w-5 h-5">
                            Moisturizers for the relief of eczema
                        </label>
                        <label class="flex items-center gap-2  ">
                            <input type="checkbox" class="form-checkbox text-blue-500 w-5 h-5">
                            Nasal spray for colds .i.e. xylometazoline
                        </label>
                        <label class="flex items-center gap-2  ">
                            <input type="checkbox" class="form-checkbox text-blue-500 w-5 h-5">
                            Nasal sprays or eye drops for hay fever
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="checkbox" class="form-checkbox text-blue-500 w-5 h-5">
                            Nasal sprays or eye drops for hay fever
                        </label>
                        <label class="flex items-center gap-2 ">
                            <input type="checkbox" class="form-checkbox text-blue-500 w-5 h-5">
                            Nicotine patches
                        </label>
                        <label class="flex items-center gap-2 ">
                            <input type="checkbox" class="form-checkbox text-blue-500 w-5 h-5">
                            nicotine replacements
                        </label>
                        <label class="flex items-center gap-2 ">
                            <input type="checkbox" class="form-checkbox text-blue-500 w-5 h-5">
                            Paracetamol
                        </label>
                        <label class="flex items-center gap-2 ">
                            <input type="checkbox" class="form-checkbox text-blue-500 w-5 h-5">
                            Sofradex for conjunctivitis
                        </label>
                        <label class="flex items-center gap-2 ">
                            <input type="checkbox" class="form-checkbox text-blue-500 w-5 h-5">
                            Threadworm treatment (Vermoxil)
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="checkbox" class="form-checkbox text-blue-500 w-5 h-5">
                            Vitamins
                        </label>
                        
                        
                    </div>
                    <label>If you are using any over the counter medication not in the list above please specify in the field below:</label>
                    <div>
                        <input type="text" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <label>If yes, please specify what over the counter medication you use</label>
                    <div>
                        <input type="text" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                </div>
                <div class="flex flex-col col-span-1 md:col-span-2 gap-3">
                    <label class="block text-gray-600">10. Do you use any herbal / homeopathic medications /  remedies? *</label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> Yes
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> No
                        </label>
                    </div>
                </div>

                <h2 class="text-[32px] font-inter font-bold text-[#adaaa5] col-span-1 md:col-span-2">Herbal medicines</h2>
                <div class="col-span-1 md:col-span-2 flex flex-col gap-2 rounded-lg w-full">
                    
                    <div class="flex flex-wrap   gap-2">
                        <label class="flex items-center gap-2 ">
                            <input type="checkbox" class="form-checkbox text-blue-500 w-5 h-5">
                            Fenugreek
                        </label>
                        <label class="flex items-center gap-2 ">
                            <input type="checkbox" class="form-checkbox text-blue-500 w-5 h-5">
                            Biloba
                        </label>
                        
                        <label class="flex items-center gap-2 ">
                            <input type="checkbox" class="form-checkbox text-blue-500 w-5 h-5">
                            St Johns Wort
                        </label>
                        
                        
                    </div>
                    <label>If you are using any herbal medication not in the list above please specify in the field below:</label>
                    <div>
                        <input type="text" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <label>If yes, please specify what herbal, homeopathic medication or remedies you use</label>
                    <div>
                        <input type="text" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                </div>
                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600">11. Do you use any galactogogues / substances to increase your breastmilk supply? *</label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> Yes
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> No
                        </label>
                    </div>
                </div>
                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600">12. Do you use any cytotoxic or radioactive medication? *</label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> Yes
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> No
                        </label>
                    </div>
                </div>
                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600">13. Do you use any form of contraceptives? *</label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> Yes
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> No
                        </label>
                    </div>
                </div>
                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600">14. If you do use contraceptives please specify the type</label>
                    <div class="flex flex-wrap   gap-2">
                        <label class="flex items-center gap-2 ">
                            <input type="checkbox" class="form-checkbox text-blue-500 w-5 h-5">
                            Condoms
                        </label>
                        <label class="flex items-center gap-2 ">
                            <input type="checkbox" class="form-checkbox text-blue-500 w-5 h-5">
                            Injectable
                        </label>
                        
                        <label class="flex items-center gap-2 ">
                            <input type="checkbox" class="form-checkbox text-blue-500 w-5 h-5">
                            Oral
                        </label>
                        
                        
                    </div>

                </div>
                <div class="flex flex-col col-span-1 md:col-span-2 gap-3">
                    <label class="block text-gray-600">15. Are you in a monogamous relationship? *</label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> Yes
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> No
                        </label>
                    </div>
                </div>
                <div class="flex flex-col col-span-1 md:col-span-2 gap-3">
                    <label class="block text-gray-600">16. Have you ever been diagnosed with:</label>
                   
                </div>
                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600">Have you ever had hepatitis B, HIV or TB? *</label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> Yes
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> No
                        </label>
                    </div>
                </div>
                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600">Have you ever been diagnosed with Hepatitis B *</label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> Yes
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> No
                        </label>
                    </div>
                </div>
                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600">Have you ever been diagnosed with Hepatitis C? *</label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> Yes
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> No
                        </label>
                    </div>
                </div>
                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600">Have you ever been diagnosed with TB? *</label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> Yes
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> No
                        </label>
                    </div>
                </div>
                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600">Have you ever been diagnosed with Syphilis? *</label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> Yes
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> No
                        </label>
                    </div>
                </div>
                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600">Have you ever been diagnosed with HIV? *</label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> Yes
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> No
                        </label>
                    </div>
                </div>
                <div class="flex flex-col col-span-1 md:col-span-2 gap-3">
                    <label class="block text-gray-600">Have you ever had hepatitis B, HIV or TB? *</label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> Yes
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> No
                        </label>
                    </div>
                </div>

                <div class="flex flex-col col-span-1 md:col-span-2 gap-3">
                    <label class="block text-gray-600">17. Do you or have you ever had a sexual partner who:*</label>
                </div>
                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600">Have you ever had a sexual partner who is at risk for HIV, takes habit-forming drugs or is a hemophiliac? *</label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> Yes
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> No
                        </label>
                    </div>
                </div>
                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600">Do you or have you ever had a sexual partner who Has / is at risk for HIV *</label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> Yes
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> No
                        </label>
                    </div>
                </div>
                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600">Do you or have you ever had a sexual partner who uses habit forming drugs *</label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> Yes
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> No
                        </label>
                    </div>
                </div>
                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600">Do you or have you ever had a sexual partner who is a Haemophiliac? *</label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> Yes
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> No
                        </label>
                    </div>
                </div>
                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600">18. When was the last time your spouse / consort / regular sexual partner was tested for HIV? *</label>
                    <div class="flex gap-4">
                        <input type="text" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                </div>
                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600">19. Do you or have you ever had a sexual partner who is a Haemophiliac? *</label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> Yes
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> No
                        </label>
                    </div>
                </div>
                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600">20. Have you been exposed to someone (work or home) who is coughing persistently? *</label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> Yes
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> No
                        </label>
                    </div>
                </div>
                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600">21. Are you exposed to harmful environments / chemicals due to your job? *</label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> Yes
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> No
                        </label>
                    </div>
                </div>
                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600">Do you have a copy of the results of your anti-natal HIV tests? *</label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> Yes
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> No
                        </label>
                    </div>
                </div>
                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600">If not, would you be prepared to undergo a rapid test for HIV at your expense and submit the results to the screening officer? *</label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> Yes
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> No
                        </label>
                    </div>
                </div>
                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600">If not, would you be prepared to undergo a rapid test for HIV at your expense and submit the results to the screening officer? *</label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> Yes
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> No
                        </label>
                    </div>
                </div>
                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600">Do you own a breast pump?</label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> Yes
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> No
                        </label>
                    </div>
                    <p class="text-[14px] text-[#adaaa5]">Unfortunately, we are not able to supply breast pumps, thus, unless you are able to hand express, owning a breast pump is essential.</p>
                </div>
                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600">If not, how will you be expressing to donate?</label>
                    <div class="flex gap-4">
                        <input type="text" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                </div>
                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600">If not, would you be prepared to undergo a rapid test for HIV at your expense and submit the results to the screening officer? *</label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> Yes
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> No
                        </label>
                    </div>
                    
                </div>
                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600">Will you be a once off donor or a long term donor?</label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> Once off donor
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> Long term donor
                        </label>
                    </div>
                </div>
                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600">If you are a once off donor, when was the milk you are donating expressed?</label>
                    <div class="flex gap-4">
                        <input type="text" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                </div>
                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600">How did you hear about us?</label>
                    <div class="flex gap-4">
                        <input type="text" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                </div>
                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600">Please note, SABR reserves the right to outsource the sign up of donors to a third party medical professional.</label>
                    
                </div>
                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600">I agree to the sharing of my information for sign up purposes only. *</label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> Yes
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> No
                        </label>
                    </div>
                </div>
                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600">Can we send you communication regarding South African Breastmilk Reserve</label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> Once off donor
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" name="citizen" class="form-radio scale-150 text-blue-500"> Long term donor
                        </label>
                    </div>
                </div>
                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600">Please send communication via SMS/E-mail (Choose one or both)</label>
                    <div class="flex flex-wrap   gap-2">
                        <label class="flex items-center gap-2 ">
                            <input type="checkbox" class="form-checkbox text-blue-500 w-5 h-5">
                            SMS
                        </label>
                        <label class="flex items-center gap-2 ">
                            <input type="checkbox" class="form-checkbox text-blue-500 w-5 h-5">
                            E-mail
                        </label>
                        
                        <label class="flex items-center gap-2 ">
                            <input type="checkbox" class="form-checkbox text-blue-500 w-5 h-5">
                            Both
                        </label> 
                    </div>

                </div>
                <div class="flex flex-col col-span-1 md:col-span-2 gap-6 border border-[#91c2d4] bg-[#e7f2f6] rounded-3xl p-6">
                    <label class="block text-[#107ba2] font-bold">Please note</label>
                    <div class="flex flex-wrap  gap-2">
                        <label class="flex flex-row items-center gap-2 ">
                            <input type="checkbox" class="form-checkbox checked:text-blue-500 scale-150 !w-3 !h-3 text-[#636061] ">
                            Yes, I HAVE READ AND UNDERSTAND WHAT I AM CONSENTING TO AS OUTLINED ON THE POPIA CONSENT TERMS AND CONDITIONS AND IN THE INFORMATION PRIVACY POLICY AND CONSENT TO THE PROCESSING OF MY PERSONAL INFORMATION. I understand that the outcome OF MY APPLICATION is at the sole discretion of the SABR and I will abide by it.
                        </label>
                          
                    </div>
                </div>
                
                <div class="nav-button7 w-36 flex text-center cursor-pointer z-0">
                    <div class="button7">Submit</div>
                </div>
            </form>
        </div>
        
    </div>
</section>
@endsection