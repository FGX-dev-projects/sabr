@extends('layouts.app')

@section('content')

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
<section class="relative w-full h-[550px] md:h-[450px]  overflow-hidden">
    <!-- Background Video -->


    <!-- Content Overlay -->
    <div class="relative z-10 flex flex-col  h-full   pt-[10px] md:pt-[186px]">
        <div class="wrapper">
            <div class="w-full h-full flex flex-col gap-6">
                <div class="w-full h-full flex flex-col text-[#107BA2]   gap-0">
                    <div
                        class="w-full text-[#107BA2] text-[48px] md:text-[64px] font-normal break-words pt-[180px]  md:pt-[20px]">
                        Volunteer
                    </div>
                    <p class="text-[24px] font-inter font-light">
                        From collections and deliveries to assisting the SABR team, volunteers help us make it all happen. Thank you for being willing to donate your time and energy. By filling out this form you are making a difference to an infant’s future.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-[128px]">
    <div class="wrapper">
        <div class="w-full p- ">
            <h2 class="text-[32px] font-inter font-bold text-[#adaaa5]">Personal Details</h2>
            <form action="{{ route('volunteer.submit') }}"  class="mt-4 grid grid-cols-1 md:grid-cols-2 gap-12" method="POST">
                @csrf
                <!-- Name -->
                <div>
                    <label for="name" class="block  text-gray-600" >Name</label>
                    <input  type="text" name="name" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                
                <!-- Surname -->
                <div>
                    <label for="surname" class="block text-gray-600">Surname</label>
                    <input type="text" name="surname" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                
                <!-- Cell -->
                <div>
                    <label for="cell" class="block text-gray-600">Cell</label>
                    <input type="text" name="cell" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                
                <!-- Alternative Phone Number -->
                <div>
                    <label for="alternative_number" class="block text-gray-600">Alternative Phone Number</label>
                    <input type="text" name="alternative_number" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600">Gender</label>
                    <div class="flex gap-4">
                        <label for="gender_female" class="flex items-center gap-2">
                            <input type="radio" id="female" name="gender" value="Female" class="form-radio scale-150 text-blue-500"> Female
                        </label>
                        <label for="gender_male" class="flex items-center gap-2">
                            <input type="radio" id="male" name="gender" value="Male" class="form-radio scale-150 text-blue-500"> Male
                        </label>
                    </div>
                </div>
                
                <!-- Email -->
                <div>
                    <label for="email" class="block text-gray-600">E-mail</label>
                    <input type="email" name="email" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
                
                
                    <div class="dob-container">
                        <label class="block text-gray-600">Your Date of Birth</label>
                        <div class="flex gap-2">
                            <!-- Day Dropdown -->
                            <select name="dob_day" id="dob_day" class="dob-date w-1/3 p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option value="">Date</option>
                                @for ($i = 1; $i <= 31; $i++)
                                    <option value="{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}">{{ $i }}</option>
                                @endfor
                            </select>
                
                            <!-- Month Dropdown -->
                            <select name="dob_month" id="dob_month" class="w-1/3 p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option value="">Month</option>
                                @for ($i = 1; $i <= 12; $i++)
                                    <option value="{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}">{{ date('F', mktime(0, 0, 0, $i, 1)) }}</option>
                                @endfor
                            </select>
                
                            <!-- Year Dropdown -->
                            <select name="dob_year" id="dob_year" class="w-1/3 p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option value="">Year</option>
                                @for ($i = date('Y'); $i >= 1900; $i--)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                
                        <!-- Hidden Input for Storing Formatted Date -->
                        <input type="hidden" name="date_of_birth" id="date_of_birth">
                    </div>
                
                <script>
                    document.addEventListener('DOMContentLoaded', function () {
                        const day = document.getElementById('dob_day');
                        const month = document.getElementById('dob_month');
                        const year = document.getElementById('dob_year');
                        const dobInput = document.getElementById('date_of_birth');
                
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
                    <label for="id_number" class="block text-gray-600">ID Number</label>
                    <input name="id_number" type="text" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <!-- Other Nationality -->
                <div>
                    <label for="country" class="block text-gray-600">Country</label>
                    <input name="country" type="text" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
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
                    <label for="province" class="block text-gray-600 col-span-1 md:col-span-2">Province</label>
                    <input type="text" name="province" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <h2 class="text-[32px] font-inter font-bold text-[#adaaa5] col-span-1 md:col-span-2">Occupational Details</h2>

                <!-- Volunteer Signup -->
                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600" for="volunteer_work">Volunteer work is serious work</label>
                    <select id="volunteer_work" name="volunteer_work"
        class="block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
        <option value="veteran">I'm a veteran volunteer, lot's of experience!</option>
        <option value="ngo_experience">I have professional experience in not for profit / NGO work</option>
        <option value="public_sector">I work for the public sector</option>
        <option value="community_programs">I have joined community programs at my place of employment</option>
        <option value="first_time">It's my first, I want to make a difference</option>
        <option value="student">I am a student</option>
        <option value="other">Other</option>
    </select>
                </div>


                <div class="flex flex-col gap-3">
                    <label for="employment_type" class="block text-gray-600">I am currently employed</label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2">
                            <input type="radio" id="employment_type" name="employment_type" value="Full-time" class="form-radio scale-150 text-blue-500"> Full-time
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" id="employment_type" name="employment_type" value="Part-time" class="form-radio scale-150 text-blue-500"> Part-time
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" id="employment_type" name="employment_type" value="Unemployed" class="form-radio scale-150 text-blue-500"> Unemployed
                        </label>
                    </div>
                </div>

                <div>
                    <label for="volunteer_experience" class="block text-gray-600 ">Tell us about your volunteer experience</label>
                    <input type="text" name="volunteer_experience" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label for="work_experience" class="block text-gray-600 ">Tells us about your work experience</label>
                    <input type="text" name="work_experience" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label for="education" class="block text-gray-600 ">Education - Please give a brief outline of your educational background</label>
                    <input type="text" name="education" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div class="flex flex-col gap-3">
                    <label for="involved" class="block text-gray-600">Are you directly involved in the coordination of an SABR bank?</label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2">
                            <input type="radio" id="involved_yes" name="involved" value="yes" class="form-radio scale-150 text-blue-500"> Yes
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" id="involved_no" name="involved" value="no" class="form-radio scale-150 text-blue-500"> No
                        </label>
                    </div>
                </div>
                <div class="flex flex-col gap-3">
                    <label for="health_care_prof" class="block text-gray-600">Are you a health care professional?</label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2">
                            <input type="radio" id="health_care_prof_yes" name="health_care_prof" value="yes" class="form-radio scale-150 text-blue-500"> Yes
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" id="health_care_prof_no" name="health_care_prof" value="no" class="form-radio scale-150 text-blue-500"> No
                        </label>
                    </div>
                </div>

                <div class="flex flex-col gap-3">
                    <label for="drivers_license" class="block text-gray-600">Drivers license</label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2">
                            <input type="radio" id="drivers_license_yes" name="drivers_license" value="yes" class="form-radio scale-150 text-blue-500"> Yes
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" id="drivers_license_no" name="drivers_license" value="no" class="form-radio scale-150 text-blue-500"> No
                        </label>
                    </div>
                </div>

                <div class="flex flex-col gap-3">
                    <label for="own_transport" class="block text-gray-600">Own Transport</label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2">
                            <input type="radio" id="own_transport_yes" name="own_transport" value="yes" class="form-radio scale-150 text-blue-500"> Yes
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" id="own_transport_no" name="own_transport" value="no" class="form-radio scale-150 text-blue-500"> No
                        </label>
                    </div>
                </div>

                <div>
                    <label for="commencement_date" class="block text-gray-600 ">Commencement date</label>
                    <input type="text" name="commencement_date" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

               

                <div class="flex flex-col gap-3">
                    <label for="vehicle_offering" class="block text-gray-600">I do understand that offering to drive for the cause means that: I am donating my time, my petrol, ware and tear on my vehicle and I drive at my own risk. SABR will not be liable for any loss or damage incurred in the conduct of my volunteer work</label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2">
                            <input type="radio" id="vehicle_offering_yes" name="vehicle_offering" value="Agree" class="form-radio scale-150 text-blue-500"> Agree
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" id="vehicle_offering_no" name="vehicle_offering" value="Disagree" class="form-radio scale-150 text-blue-500"> Disagree
                        </label>
                    </div>
                </div>

                <div class="flex flex-col gap-3">
                    <label class="block text-gray-600" for="volunteer_driver_location">SABR is looking for volunteer drivers with four wheels to assist in the transport of breastmilk and materials to hospitals around the country. Please select which area you would be able to assist us with</label>
                    <select id="volunteer_driver_location" name="location"
                        class="block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                        <option value="cape_town">Cape Town</option>
                        <option value="durban">Durban</option>
                        <option value="kimberly">Kimberly</option>
                        <option value="johannesburg">Johannesburg</option>
                        <option value="new_castle">New Castle</option>
                        <option value="bloemfontein">Bloemfontein</option>
                        <option value="port_elizabeth_city">Port Elizabeth - City</option>
                        <option value="port_elizabeth_eutenhague">Port Elizabeth - Eutenhague</option>
                        <option value="witbank">Witbank</option>
                        <option value="pretoria">Pretoria</option>
                        <option value="richards_bay">Richards Bay</option>
                        <option value="springs">Springs</option>
                        <option value="belito">Belito</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                

                <div>
                    <label for="itinerary" class="block text-gray-600 ">I drive between cities - give us a brief description of your itinerary - from A to B</label>
                    <input type="text" name="itinerary" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label for="hope_to_gain" class="block text-gray-600 "> What do you hope to gain from volunteering for us? We save lives so be ambitious and show us your vision!</label>
                    <input type="text" name="hope_to_gain" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label for="current_employer_details" class="block text-gray-600 "> Current employer details - contact person, institution, contact number</label>
                    <input type="text" name="current_employer_details" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>

                <div class="flex flex-col gap-3">
                    <label for="communication_consent" class="block text-gray-600">Can we send you communication regarding South African Breastmilk Reserve</label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2">
                            <input type="radio" id="communication_consent_yes" name="communication_consent" value="Agree" class="form-radio scale-150 text-blue-500"> Yes
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" id="communication_consent_no" name="communication_consent" value="Disagree" class="form-radio scale-150 text-blue-500"> No
                        </label>
                    </div>
                </div>

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