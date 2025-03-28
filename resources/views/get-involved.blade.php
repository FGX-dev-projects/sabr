@extends('layouts.app')

@section('content')


<section class="relative w-full h-[350px] md:h-[350px]  overflow-hidden">
    <!-- Content Overlay -->
    <div class="relative z-10 flex flex-col  h-full   pt-[10px] md:pt-[186px]">
        <div class="wrapper">
            <div class="w-full h-full flex flex-col     gap-6">
                <div class="w-full h-full flex flex-col text-[#107BA2]   gap-0">
                    <div
                        class="w-full text-[#107BA2] text-[48px] md:text-[64px] font-normal break-words pt-[180px]  md:pt-[20px]">
                        get involved
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pb-[128px]">
    <div class="wrapper">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
            <div class="details-4">
                <div class="info gap-3">
                    <div class="tags">
                        <div class="pills">
                            <div class="start-searching">Register</div>
                        </div>
                        <img class="healthiconschild-program-outl" alt=""
                            src="{{asset('images/doctor-icon2.svg')}}">
                    </div>
                    <div class="copy">
                        <div class="saving-lives-one-container font-sans">Donate Breastmilk</div>
                        <div class="help-save-lives !font-inter !text-[14px] !font-[300]">Your milk can provide vital nourishment for babies in need.
                        </div>
                    </div>
                    <div class="flex items-end justify-end w-full mt-4">
                        <a href="{{route('donate')}}" class="card-button flex gap-1 row justify-end">
                            <div class="start-today !font-inter">Start Today</div>
                            <img class="mingcuteright-line-icon" alt="" src="{{asset('images/right-line.svg')}}">
                        </a>
                    </div>


                </div>
            </div>

            <div class="details-4">
                <div class="info">
                    <div class="tags">
                        <div class="pills">
                            <div class="start-searching">Register</div>
                        </div>
                        <img class="healthiconschild-program-outl" alt=""
                            src="{{asset('images/doctor-icon2.svg')}}">
                    </div>
                    <div class="copy">
                        <div class="saving-lives-one-container font-sans">Volunteer Your Time</div>
                        <div class="help-save-lives !font-inter !text-[14px] !font-[300]">From collections and deliveries to assisting the SABR team,
                            volunteers help us make it all happen. </div>
                    </div>
                    <div class="flex items-end justify-end w-full mt-4">
                        <a href="{{route('volunteer')}}" class="card-button flex gap-1 row justify-end">
                            <div class="start-today !font-inter">Start Today</div>
                            <img class="mingcuteright-line-icon" alt="" src="{{asset('images/right-line.svg')}}">
                        </a>
                    </div>


                </div>
            </div>

            <div class="details-4">
                <div class="info">
                    <div class="tags">
                        <div class="pills">
                            <div class="start-searching">Register</div>
                        </div>
                        <img class="healthiconschild-program-outl" alt=""
                            src="{{asset('images/doctor-icon2.svg')}}">
                    </div>
                    <div class="copy">
                        <div class="saving-lives-one-container">Donate</div>
                        <div class="help-save-lives !font-inter !text-[14px] !font-[300]">Help us save lives. Your financial contribution supports SABR’s
                            programmes, bringing life-saving donor breastmilk and care to vulnerable infants across
                            South Africa.</div>
                    </div>
                    <div class="flex items-end justify-end w-full mt-4">
                        <a href="payfast.co.za/donate/go/southafricanbreastmilkreserve" target="_blank" class="card-button flex gap-1 row justify-end">
                            <div class="start-today !font-inter">Start Today</div>
                            <img class="mingcuteright-line-icon" alt="" src="{{asset('images/right-line.svg')}}">
                        </a>
                    </div>


                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-5 mt-8">
            <div class="details-4 !bg-[#107BA226] !text-[#107BA2]">
                <div class="info gap-3">
                    <div class="tags">
                        <div class="pills !bg-[#107BA226]">
                            <div class="start-searching">Register</div>
                        </div>
                        <img class="healthiconschild-program-outl" alt=""
                            src="{{asset('images/doctor-icon2.svg')}}">
                    </div>
                    <div class="copy">
                        <div class="saving-lives-one-container">I am a Parent</div>
                        <div class="help-save-lives !font-inter !text-[14px] !font-[300]">If your baby needs donor breastmilk, we’re here to help. Access
                            safe, pasteurised breastmilk for your little one and learn how SABR supports families in
                            need.</div>
                    </div>



                </div>
            </div>

            <div class="details-4 !bg-[#FFFFFF80]">
                <div class="info gap-3">
                    <div class="tags">
                        <div class="pills">
                            <div class="start-searching">Register</div>
                        </div>
                        <img class="healthiconschild-program-outl" alt=""
                            src="{{asset('images/doctor-icon2.svg')}}">
                    </div>
                    <div class="copy">
                        <div class="saving-lives-one-container">I am a Doctor</div>
                        <div class="help-save-lives !font-inter !text-[14px] !font-[300]">Bring life-saving breastmilk services to your facility. Partner
                            with SABR to access donor breastmilk and establish human milk-banking infrastructure in
                            your practice.</div>
                    </div>

                </div>
            </div>

            <div class="details-4 !bg-[#107BA280]">
                <div class="info gap-3 !text-[#ffff]">
                    <div class="tags">
                        <div class="pills !bg-[#107BA280] text-[#ffff]">
                            <div class="start-searching">Register</div>
                        </div>
                        <img class="healthiconschild-program-outl" alt="" src="{{asset('images/doc-white.svg')}}">
                    </div>
                    <div class="copy ">
                        <div class="saving-lives-one-container">I am a Clinician</div>
                        <div class="help-save-lives !font-inter !text-[14px] !font-[300]">Help save lives by donating your excess breastmilk to babies in
                            need. Your gift can make all the difference.</div>
                    </div>
                </div>
            </div>
        </div>

        <div  class="grid grid-cols-1 md:grid-cols-2 gap-12 pt-14 contact-us">
            <div class=" gap-4">
                <div>
                    <h5 class="font-semibold text-black text-left font-sans text-[32px]">Telephone <br> <a href="tel: 011 482 1920" class="font-[300] ">011 482 1920</a></h5>
                    
                </div>
            </div>
            <div>
                <div>
                    <h5 class="font-semibold text-black text-left font-sans text-[32px]">E-mail <br> <a href="mailto: info@sabr.org.za" class="font-[300] ">info@sabr.org.za</a></h5>
                    
                </div>
            </div>
            <div>
                <div>
                    <h5 class="font-semibold text-black text-left font-sans text-[32px]">Donor's 24/7 <br> <a href="tel: 066 488 3350" class="font-[300] ">066 488 3350</a></h5>
                    
                </div>
            </div>
        </div>
    </div>

    
</section>

@endsection