@extends('layouts.app')

@section('content')
    <section class="relative w-full h-screen overflow-hidden">
        <!-- Background Video -->
        <video class="absolute top-0 left-0 w-full h-full object-cover" autoplay loop muted playsinline>
            <source src="{{asset('images/hero-video.mp4')}}" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <!-- Dark Overlay -->
        <div class="absolute top-0 left-0 w-full h-full  "></div>

        <!-- Content Overlay -->
        <div class="relative z-10 flex flex-col  h-full  wrapper">
            <div class="hero-content wrapper">
                <div class="content">
                    <div class="content-inner">
                        <div class="frame-parent">
                            <div class="frame-parent ">
                                <div cc>
                                    <span>Saving Lives,</span>
                                    <span class="one-drop-at"> One Drop At A Time</span>
                                </div>
                                <div class="join-us-in">Join us in our mission to provide life-saving breastmilk to
                                    premature babies worldwide</div>
                            </div>
                            <div class="button-prim-wrapper">
                                <div class="button-prim">
                                    <a class="nav-button7 cursor-pointer">
                                        <div class="button7 pt-1">Start Contributing</div>
                                        <div class="nav-button-child">
                                        </div>
                                    </a>
                                    <div class="pharrow-up-wrapper cursor-pointer">
                                        <img class="pharrow-up-icon" alt="" src="{{asset('images/arrow-up.svg')}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="frame-group">
                        <div class="frame-container">
                            <div class="find-a-milk-bank-near-you-wrapper">
                                <div class="find-a-milk-container">
                                    <p class="find-a-milk">Find a Milk Bank</p>
                                    <p class="find-a-milk">Near You</p>
                                </div>
                            </div>
                            {{-- <div class="frame-div">
                                <div class="start-searching-wrapper">
                                    <div class="start-searching">Start Searching</div>
                                </div>
                                <div class="ionsearch-outline-wrapper">
                                    <img class="ionsearch-outline-icon" alt="" src="ion:search-outline.svg">
                                </div>
                            </div> --}}
                        </div>
                        <div class="component-2-parent">
                            <div class="component-2">
                                <div class="background">
                                    <div class="background-child">
                                    </div>
                                </div>
                                <div class="details">
                                    <div class="info">
                                        <div class="tags">
                                            <div class="pills">
                                                <div class="start-searching">Register</div>
                                            </div>
                                            <img class="healthiconschild-program-outl" alt=""
                                                src="{{asset('images/doctor-icon2.svg')}}">
                                        </div>
                                        <div class="copy">
                                            <div class="saving-lives-one-container">I want to donate Milk</div>
                                            <div class="help-save-lives">Help save lives by donating your excess breastmilk
                                                to babies in need. Your gift can make all the difference.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="component-1">
                                <div class="background">
                                    <div class="background-item">
                                    </div>
                                    <div class="background-inner">
                                    </div>
                                </div>
                                <div class="details">
                                    <div class="info">
                                        <div class="tags">
                                            <div class="pills">
                                                <div class="start-searching">Register</div>
                                            </div>
                                            <img class="healthiconschild-program-outl" alt=""
                                                src="{{asset('images/healthicons.svg')}}">
                                        </div>
                                        <div class="copy">
                                            <div class="saving-lives-one-container">I am a Parent</div>
                                            <div class="help-save-lives">Help save lives by donating your excess breastmilk
                                                to babies in need. Your gift can make all the difference.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="component-11">
                                <div class="background2">
                                    <div class="rectangle-div">
                                    </div>
                                </div>
                                <div class="details">
                                    <div class="info">
                                        <div class="tags">
                                            <div class="pills2">
                                                <div class="start-searching">Register</div>
                                            </div>
                                            <img class="healthiconschild-program-outl" alt=""
                                                src="{{asset('images/doctor-icon.svg')}}">
                                        </div>
                                        <div class="copy">
                                            <div class="saving-lives-one-container">I am a Clinician</div>
                                            <div class="help-save-lives">Help save lives by donating your excess breastmilk
                                                to babies in need. Your gift can make all the difference.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="py-20">
        <div class="wrapper ">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-[68px] items-center">
                <!-- Left Container (Image) -->
                <div class="image">
                    <img src="{{asset('images/homesec2.jpg')}}" alt="Placeholder Image"
                        class="w-full h-auto rounded-2xl shadow-lg">
                </div>

                <!-- Right Container (Text) -->
                <div class="we-are-more-than-just-a-breast-parent">
                    <div class="saving-lives-mobile">
                        <span>We Are More Than Just A </span>
                        <span class="breastmilk-bank">Breastmilk Bank</span>
                    </div>
                    <div class="home-sec-1">
                        <div class="for-18-years-the-south-afric-wrapper">
                            <div class="we-are-more-container">For 18+ years, the South African Breastmilk Reserve (SABR)
                                has been saving lives through innovative human milk banking.</div>
                        </div>
                        <div class="milk-banking-facilities-nation-parent">
                            <div class="we-are-more-container">
                                <ul class="milk-banking-facilities-nation" style="list-style: disc;">
                                    <li>30 milk banking facilities nationwide.</li>
                                </ul>
                            </div>
                            <div class="we-are-more-container">
                                <ul class="milk-banking-facilities-nation">
                                    <li>31,367 premature babies helped since 2003.</li>
                                </ul>
                            </div>
                            <div class="we-are-more-container">
                                <ul class="milk-banking-facilities-nation">
                                    <li>Over 5,700 infants fed donor breastmilk annually.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="button-prim-wrapper">
                            <div class="button-prim">
                                <a class="nav-button7 cursor-pointer">
                                    <div class="button7 pt-1">Learn More About Us</div>
                                    <div class="nav-button-child">
                                    </div>
                                </a>
                                <div class="pharrow-up-wrapper cursor-pointer">
                                    <img class="pharrow-up-icon" alt="" src="{{asset('images/arrow-up.svg')}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20">
        <div class="wrapper ">
            <div class="items-center">

                <!-- Right Container (Text) -->
                <div class="we-are-more-than-just-a-breast-parent">
                    <div class="introducing-sosafe">
                        <span>
                            <span>Introducing</span>
                            <span class="span"> </span>
                        </span>
                        <b class="sosafe">SoSAFE</b>
                    </div>
                    <div class="home-sec-2">
                        <div class="for-18-years-the-south-afric-wrapper">
                            <div class="paragraph">We are excited to announce the launch of SoSAFE, our state-of-the-art
                                breastmilk pasteuriser designed to ensure the highest safety standards. The SoSAFE
                                pasteuriser is IEC certified for laboratory equipment safety, making it a reliable choice
                                for hospitals and milk banks globally.</div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 py-3">
                            <div
                                class="w-full relative backdrop-blur-lg rounded-2xl bg-[#f8f5f0] border border-[#dfdcd8] h-[271px] flex flex-col items-end justify-start p-8 text-right text-2xl text-[#23b4e9] font-['Work_Sans']">
                                <div class="flex flex-col items-end justify-between flex-1 w-full">
                                    <b class="w-full relative">Safety</b>
                                    <div class="w-full relative text-xl text-[#6f6d6a]">
                                        Ensures breastmilk is free from harmful pathogens.
                                    </div>
                                </div>
                            </div>

                            <div
                                class="w-full relative backdrop-blur-lg rounded-2xl bg-[#f8f5f0] border border-[#dfdcd8] h-[271px] flex flex-col items-end justify-start p-8 text-right text-2xl text-[#23b4e9] font-['Work_Sans']">
                                <div class="flex flex-col items-end justify-between flex-1 w-full">
                                    <b class="w-full relative">Efficiency</b>
                                    <div class="w-full relative text-xl text-[#6f6d6a]">
                                        Streamlines the pasteurisation process, saving time and resources.
                                    </div>
                                </div>
                            </div>

                            <div
                                class="w-full relative backdrop-blur-lg rounded-2xl bg-[#f8f5f0] border border-[#dfdcd8] h-[271px] flex flex-col items-end justify-start p-8 text-right text-2xl text-[#23b4e9] font-['Work_Sans']">
                                <div class="flex flex-col items-end justify-between flex-1 w-full">
                                    <b class="w-full relative">Accessibility</b>
                                    <div class="w-full relative text-xl text-[#6f6d6a]">
                                        Designed for ease of use in diverse healthcare settings.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center  ">
                            <div class="button-prim-wrapper button-center">
                                <div class="button-prim">
                                    <a class="nav-button7 cursor-pointer">
                                        <div class="button7 pt-1">Learn More About Us</div>
                                        <div class="nav-button-child">
                                        </div>
                                    </a>
                                    <div class="pharrow-up-wrapper cursor-pointer">
                                        <img class="pharrow-up-icon" alt="" src="{{asset('images/arrow-up.svg')}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="gap-0 items-center  ">
                            <p class="p-0 m-0 items-center text-center">Interested in implementing SoSAFE in your facility?
                            </p>
                            <p class="p-0 items-center text-center">
                                Contact us at <a href="https://www.SoSafe@sabr.org.za" target="_blank"
                                    class="text-[#23B4E9]"> SoSafe@sabr.org.za </a>for more information on how to get
                                started.</p>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20">
        <div class="wrapper ">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-[68px]">
                <!-- Left Container (Image) -->
                <div class="image">
                    <img src="{{asset('images/homesec1.jpg')}}" alt="Placeholder Image"
                        class="w-full h-auto rounded-2xl shadow-lg">
                </div>

                <!-- Right Container (Text) -->
                <div class="">
                    <div class="make-your-hospital-container">
                        <span>Make Your Hospital </span>
                        <b>Breastmilk<br> Smart </b>
                    </div>
                    <div class="home-sec-1">
                        <div class="for-18-years-the-south-afric-wrapper">
                            <div class="">We establish and support in-hospital human milk banks, ensuring compliance with
                                national health standards while expanding access to donor breastmilk.</div>
                        </div>
                        <div class="milk-banking-facilities-nation-parent">
                            <div class="we-are-more-container">
                                <b class="cutting-edge-solutions font-[Inter] text-[#666562]">Cutting-Edge Solutions</b>
                                <ul class="featuring-sosafes-innovative-container pl-8 " style="list-style: disc;">
                                    <li class="font-normal text-[18px] font-medium">Featuring SoSAFE’s innovative
                                        “Breastmilk-in-a-Box” with affordable pasteurisers and rapid testing technology.
                                    </li>
                                </ul>
                            </div>

                            <div class="we-are-more-container">
                                <b class="cutting-edge-solutions font-[Inter] text-[#666562]">Comprehensive Care</b>
                                <ul class="featuring-sosafes-innovative-container pl-8 " style="list-style: disc;">
                                    <li class="font-normal text-[18px] font-medium">From milk processing to maternal health
                                        services, we equip hospitals to meet critical neonatal care needs.</li>
                                </ul>
                            </div>

                            <div class="we-are-more-container">
                                <b class="cutting-edge-solutions  text-[#666562]">Expanding Access</b>
                                <ul class="featuring-sosafes-innovative-container pl-8 " style="list-style: disc;">
                                    <li class="font-normal text-[18px] font-medium">44 human milk banks established
                                        nationwide, bridging the gap for underserved communities.</li>
                                </ul>
                            </div>


                        </div>

                        <div>Let’s transform infant care together.</div>
                        <div class="button-prim-wrapper">
                            <div class="button-prim">
                                <a class="nav-button7 cursor-pointer">
                                    <div class="button7 pt-1">Learn More About Us</div>
                                    <div class="nav-button-child">
                                    </div>
                                </a>
                                <div class="pharrow-up-wrapper cursor-pointer">
                                    <img class="pharrow-up-icon" alt="" src="{{asset('images/arrow-up.svg')}}">
                                </div>
                            </div>


                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>


    <section
        class="pt-[2px] md:pt-[120px] wrapper flex flex-col items-center justify-center text-center min-h-screen  relative overflow-hidden">
        <div class="sec3-title">
            Join Us In Our Mission To Provide Life-Saving <br> Breastmilk To Premature Babies Worldwide
        </div>

        <div class="stats-container">
            <div class="stats3">28 229+</div>
            <p class="stat-desc">Units of breastmilk distributed country-wide</p>
        </div>


        </div>

        <div class="mt-6  gap-4">
            <div class="button-prim-wrapper">
                <div class="button-prim">
                    <a class="nav-button7 cursor-pointer">
                        <div class="button7 pt-1 text-[18px]">Start Donating</div>
                        <div class="nav-button-child">
                        </div>
                    </a>
                    <div class="pharrow-up-wrapper cursor-pointer">
                        <img class="pharrow-up-icon" alt="" src="{{asset('images/arrow-up.svg')}}">
                    </div>
                </div>
            </div>

            <div class="mt-4">
                <div class="button-prim green-btn">
                    <a class="nav-button7 green-btn cursor-pointer">
                        <div class="button7 pt-1">Yes, I want to contribute</div>
                        <div class="nav-button-child">
                        </div>
                    </a>

                </div>
            </div>

        </div>

        <!-- Image container -->
        <div class=" absolute  mt-12 w-full h-[300px] image-container">
            <img src="{{asset('images/baby6.jpg')}}" class="image top-left">
            <img src="{{asset('images/baby5.jpg')}}" class="image top-right">
            <img src="{{asset('images/baby5.jpg')}}" class="image center">
            <img src="{{asset('images/baby3.jpg')}}" class="image bottom-left">
            <img src="{{asset('images/baby4.jpg')}}" class="image bottom-right">
        </div>
    </section>

    <section class="py-20">
        <div class="wrapper ">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-[68px]">

                <!-- Right Container (Text) -->
                <div class="">
                    <div class="make-your-hospital-container">
                        <span>Feed for Life Initiative </span>

                    </div>
                    <div class="home-sec-1">
                        <div class="for-18-years-the-south-afric-wrapper">
                            <div class="">SABR’s Feed for Life Initiative bridges critical gaps in neonatal care, ensuring
                                life-saving donor breastmilk reaches South Africa’s most vulnerable infants. </div>
                        </div>
                        <div class="milk-banking-facilities-nation-parent">
                            <div class="we-are-more-container">
                                <b class="cutting-edge-solutions font-[Inter] text-[#666562]">Equitable Access</b>
                                <ul class="featuring-sosafes-innovative-container pl-8 " style="list-style: disc;">
                                    <li class="font-normal text-[18px] font-medium">Delivering pasteurised donor breastmilk
                                        to infants in NICUs nationwide.
                                    </li>
                                </ul>
                            </div>

                            <div class="we-are-more-container">
                                <b class="cutting-edge-solutions font-[Inter] text-[#666562]">Priority Care</b>
                                <ul class="featuring-sosafes-innovative-container pl-8 " style="list-style: disc;">
                                    <li class="font-normal text-[18px] font-medium">Focused on babies born before 37 weeks,
                                        ensuring vital early nutrition.</li>
                                </ul>
                            </div>

                            <div class="we-are-more-container">
                                <b class="cutting-edge-solutions  text-[#666562]">Sustainable Impact</b>
                                <ul class="featuring-sosafes-innovative-container pl-8 " style="list-style: disc;">
                                    <li class="font-normal text-[18px] font-medium">Strengthening neonatal care in
                                        underserved rural areas through partnerships with Provincial Departments of Health.
                                    </li>
                                </ul>
                            </div>


                        </div>

                        <div>Together, we can provide a healthier start for every baby.</div>
                        <div class="button-prim-wrapper">
                            <div class="button-prim">
                                <a class="nav-button7 cursor-pointer">
                                    <div class="button7 pt-1">Learn More About Us</div>
                                    <div class="nav-button-child">
                                    </div>
                                </a>
                                <div class="pharrow-up-wrapper cursor-pointer">
                                    <img class="pharrow-up-icon" alt="" src="{{asset('images/arrow-up.svg')}}">
                                </div>
                            </div>


                        </div>


                    </div>
                </div>
                <div class="image">
                    <img src="{{asset('images/homesec1.jpg')}}" alt="Placeholder Image"
                        class="w-full h-auto rounded-2xl shadow-lg">
                </div>
            </div>
        </div>
    </section>


    <section class="py-20">
        <div class="wrapper">
            <div class="make-your-hospital-container text-center justify-center items-center !flex">
                <span>Making it Possible </span>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 place-items-center mt-10 mb:mt-20">
                <img src="{{asset('images/discovery_logo.png')}}" alt="Discovery logo"
                    class="w-[298px] h-[60px] object-cover">

                <img src="{{asset('images/sosafe_logo.png')}}" alt="So safe" class="w-[192px] h-[111px] object-cover">

                <img src="{{asset('images/Manufact.png')}}" alt="Manufact" class="w-[205px] h-[81px] object-cover">

                <img src="{{asset('images/fgx_logo.png')}}" alt="FGX Logo" class="w-[140px] h-[50px] object-cover">
            </div>

        </div>
    </section>

    <section class="py-20">
        <div class="ellipse-div">
            <div class="wrapper">
                <div class="help-us-or-let-us-help-you-parent pb-10">
                    <h1 class="help-us-or">Help Us, Or Let Us Help You</h1>
                    <h3 class="get-in-touch ">Get In Touch</h3>
                </div>

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
                                <div class="saving-lives-one-container">Donate Breastmilk</div>
                                <div class="help-save-lives">Your milk can provide vital nourishment for babies in need.
                                </div>
                            </div>
                            <div class="flex items-end justify-end w-full mt-4">
                                <div class="card-button flex gap-1 row justify-end">
                                    <div class="start-today">Start Today</div>
                                    <img class="mingcuteright-line-icon" alt="" src="{{asset('images/right-line.svg')}}">
                                </div>
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
                                <div class="saving-lives-one-container">Volunteer Your Time</div>
                                <div class="help-save-lives">From collections and deliveries to assisting the SABR team,
                                    volunteers help us make it all happen. </div>
                            </div>
                            <div class="flex items-end justify-end w-full mt-4">
                                <div class="card-button flex gap-1 row justify-end">
                                    <div class="start-today">Start Today</div>
                                    <img class="mingcuteright-line-icon" alt="" src="{{asset('images/right-line.svg')}}">
                                </div>
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
                                <div class="help-save-lives">Help us save lives. Your financial contribution supports SABR’s
                                    programmes, bringing life-saving donor breastmilk and care to vulnerable infants across
                                    South Africa.</div>
                            </div>
                            <div class="flex items-end justify-end w-full mt-4">
                                <div class="card-button flex gap-1 row justify-end">
                                    <div class="start-today">Start Today</div>
                                    <img class="mingcuteright-line-icon" alt="" src="{{asset('images/right-line.svg')}}">
                                </div>
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
                                <div class="help-save-lives">If your baby needs donor breastmilk, we’re here to help. Access
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
                                <div class="help-save-lives">Bring life-saving breastmilk services to your facility. Partner
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
                                <div class="help-save-lives">Help save lives by donating your excess breastmilk to babies in
                                    need. Your gift can make all the difference.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20">
        <div class="ellipse-div2">
            <div class="wrapper">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 p-4  ">
                    <!-- Left Container -->
                    <div class="make-your-hospital-container !text-[#fff] !font-normal !text-[64x] mt-20">
                        <span class="">SOStainer: Mobile Healthcare</span>
                    </div>


                    <!-- Right Container -->
                    <div class="flex items-center justify-end h-full">
                        <img src="{{asset('images/sosafe_logo.png')}}" class=" h-[140px]" />
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-[1fr_1.5fr] gap-4 p-4">
                    <!-- Left Container (Smaller) -->
                    <div>
                        <div class="text-slate-50 font-normal !text-[18px]">
                            The SOStainer Mobile Clinic delivers essential healthcare services, including breastfeeding
                            support, immunisations, and breastmilk pasteurisation, directly to underserved communities.
                            <br><br>
                            Solar-powered and versatile, it’s a vital resource for supporting mothers and young children.
                        </div>
                        <div class="button-prim-wrapper !border-none mt-10">
                            <div class="button-prim !border-[#FDC5C8]">
                                <a class="nav-button7 !bg-[#FDC5C8] cursor-pointer ">
                                    <div class="button7 pt-1 !text-[#F8444F]">Learn More</div>
                                    <div class="nav-button-child">
                                    </div>
                                </a>
                                <div class="pharrow-up-wrapper !bg-[#FDC5C8]  cursor-pointer">
                                    <img class="pharrow-up-icon " alt="" src="{{asset('images/arrow-red.svg')}}">
                                </div>
                            </div>


                        </div>
                    </div>


                    <!-- Right Container (Larger) -->
                    <div class="flex items-start justify-end  w-full">
                        <img src="{{ asset('images/container.png') }}"
                            class="w-auto max-w-[400px] h-[200px] md:h-[500px] md:max-w-[800px]" />
                    </div>

                </div>





            </div>
        </div>
    </section>

    <section class="py-20">
        <div class="wrapper">
            <div class="home-sec5 !p-0">
                <div class=" flex flex-col lg:flex-row r gap-6 ">
                    <div class="flex-1 flex flex-col justify-center  gap-6">
                        <div class="text-[#107BA2] text-4xl md:text-6xl font-bold">News</div>
                        <div class="text-[#107BA2] text-xl md:text-2xl font-bold">News</div>
                    </div>
                    <div id="scrollContainer" class=" max-w-[730px]  overflow-x-auto whitespace-nowrap py-4 px-4 ">
                        <div class="flex gap-6">
                            <div class="w-80 h-[440px] relative shrink-0">
                                <img class="h-full object-cover rounded-lg" src="{{asset('images/baby2.jpg')}}" />
                                <div
                                    class="absolute bottom-2 left-2 right-2 p-4 bg-[#FAF8F5] border border-[#DEDAD4] rounded-lg">
                                    <div class="text-[#868480] text-lg font-bold">News</div>
                                    <div class="text-[#868480] text-sm">Heading</div>
                                    <div class="mt-2 flex justify-end">
                                        <div class="px-2 py-1 bg-[#F4F0E9] rounded text-xs text-[#ADAAA5]">12 Aug</div>
                                    </div>
                                </div>
                                <div class="absolute top-4 left-4 px-2 py-1 bg-[#F4F0E9] rounded text-xs text-[#ADAAA5]">
                                    News</div>
                            </div>
                            <div class="w-80 h-[440px] relative shrink-0">
                                <img class="h-full object-cover rounded-lg" src="{{asset('images/baby2.jpg')}}" />
                                <div
                                    class="absolute bottom-2 left-2 right-2 p-4 bg-[#FAF8F5] border border-[#DEDAD4] rounded-lg">
                                    <div class="text-[#868480] text-lg font-bold">News</div>
                                    <div class="text-[#868480] text-sm">Heading</div>
                                    <div class="mt-2 flex justify-end">
                                        <div class="px-2 py-1 bg-[#F4F0E9] rounded text-xs text-[#ADAAA5]">12 Aug</div>
                                    </div>
                                </div>
                                <div class="absolute top-4 left-4 px-2 py-1 bg-[#F4F0E9] rounded text-xs text-[#ADAAA5]">
                                    News</div>
                            </div>
                            <div class="w-80 h-[440px] relative shrink-0">
                                <img class="h-full object-cover rounded-lg" src="{{asset('images/baby2.jpg')}}" />
                                <div
                                    class="absolute bottom-2 left-2 right-2 p-4 bg-[#FAF8F5] border border-[#DEDAD4] rounded-lg">
                                    <div class="text-[#868480] text-lg font-bold">News</div>
                                    <div class="text-[#868480] text-sm">Heading</div>
                                    <div class="mt-2 flex justify-end">
                                        <div class="px-2 py-1 bg-[#F4F0E9] rounded text-xs text-[#ADAAA5]">12 Aug</div>
                                    </div>
                                </div>
                                <div class="absolute top-4 left-4 px-2 py-1 bg-[#F4F0E9] rounded text-xs text-[#ADAAA5]">
                                    News</div>
                            </div>
                            <div class="w-80 h-[440px] relative shrink-0">
                                <img class="h-full object-cover rounded-lg" src="{{asset('images/baby2.jpg')}}" />
                                <div
                                    class="absolute bottom-2 left-2 right-2 p-4 bg-[#FAF8F5] border border-[#DEDAD4] rounded-lg">
                                    <div class="text-[#868480] text-lg font-bold">News</div>
                                    <div class="text-[#868480] text-sm">Heading</div>
                                    <div class="mt-2 flex justify-end">
                                        <div class="px-2 py-1 bg-[#F4F0E9] rounded text-xs text-[#ADAAA5]">12 Aug</div>
                                    </div>
                                </div>
                                <div class="absolute top-4 left-4 px-2 py-1 bg-[#F4F0E9] rounded text-xs text-[#ADAAA5]">
                                    News</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <section class="pt-[128px]  bg-[#107BA2]">
        <div class="wrapper ">
            <div class=" bg-[#107BA2] inline-flex justify-center items-start gap-[98px]">
                <div class="flex-1 self-stretch flex flex-col justify-start items-center gap-8">
                    <div class="self-stretch flex flex-col lg:flex-row justify-start items-start gap-6">
                        <!-- Left Section -->
                        <div class="flex-1 flex flex-col justify-center items-start gap-3">
                            <div class="self-stretch text-[#F9FCE8] text-6xl font-normal leading-tight">
                                Take the <span class="font-bold">Next<br> Step</span>
                            </div>
                            <div class="self-stretch h-auto flex flex-col justify-start items-start gap-6">
                                <p class="self-stretch text-[#FEFEFD] text-2xl font-normal">
                                    Bring SoSAFE to your facility and set a new standard in breastmilk safety.
                                </p>
                            </div>
                        </div>

                        <!-- Right Section -->
                        <div class="flex-1 flex flex-col justify-center items-start gap-3">
                            <div class="self-stretch h-auto flex flex-col justify-start items-start gap-6">
                                <p class="self-stretch text-[#FEFEFD] text-3xl font-bold">
                                    Ready to Learn More?
                                </p>
                            </div>
                            <div class="self-stretch h-auto flex flex-col justify-start items-start gap-6">
                                <p class="self-stretch text-[#FEFEFD] text-2xl font-normal">
                                    Email us at <a href="mailto:SoSafe@sabr.org.za" class="underline">SoSafe@sabr.org.za</a>
                                    to explore implementation options, pricing details, and how SoSAFE fits into your
                                    existing infrastructure.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>



    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const imageContainer = document.querySelector(".image-container");

            function toggleImages() {
                const rect = imageContainer.getBoundingClientRect();

                if (rect.top < window.innerHeight * 0.75 && rect.bottom > 0) {
                    imageContainer.classList.add("show"); // Show when section is in view
                } else {
                    imageContainer.classList.remove("show"); // Hide when section is out of view
                }
            }

            window.addEventListener("scroll", toggleImages);
            toggleImages(); // Run once on load to check the initial state
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const numbers = [
                "50726",
                "156",
                "3074",
                "22",
                "832",
                "28229",
                "24",
                "2"
            ];

            const descriptions = [
                "Units of breastmilk distributed country-wide",
                "Premature babies helped since 2003",
                "Hospitals supported with human milk banking services",
                "Infants fed human milk March 2023 - Feb 2024",
                "Situated in Public Hospitals",
                "Donors supplying breastmilk March 2023 - Feb 2024",
                "SABR human milk banking hospital facilities",
                "Additional collection centres"
            ];

            let index = 0;
            const statsNumber = document.querySelector(".stats3");
            const statsDesc = document.querySelector(".stat-desc");

            function animateNumber(target) {
                let current = 0;
                const increment = Math.ceil(target / 0); // Smooth step count

                function update() {
                    if (current < target) {
                        current += increment;
                        if (current > target) current = target;
                        statsNumber.textContent = current.toLocaleString() + "+"; // Format with commas
                        requestAnimationFrame(update);
                    }
                }

                update();
            }

            function updateStats() {
                statsNumber.classList.remove("show");
                statsDesc.classList.remove("show");

                setTimeout(() => {
                    animateNumber(parseInt(numbers[index]));
                    statsDesc.textContent = descriptions[index];

                    statsNumber.classList.add("show");
                    statsDesc.classList.add("show");

                    index = (index + 1) % numbers.length; // Loop through both arrays
                }, 300);
            }

            setInterval(updateStats, 3000); // Change every 3 seconds
            updateStats(); // Start the animation immediately
        });
    </script>

    <script>
        const container = document.getElementById("scrollContainer");

        let isDown = false;
        let startX;
        let scrollLeft;

        container.addEventListener("mousedown", (e) => {
            isDown = true;
            container.classList.add("active");
            startX = e.pageX - container.offsetLeft;
            scrollLeft = container.scrollLeft;
        });

        container.addEventListener("mouseleave", () => {
            isDown = false;
            container.classList.remove("active");
        });

        container.addEventListener("mouseup", () => {
            isDown = false;
            container.classList.remove("active");
        });

        container.addEventListener("mousemove", (e) => {
            if (!isDown) return;
            e.preventDefault();
            const x = e.pageX - container.offsetLeft;
            const walk = (x - startX) * 2; // Adjust scrolling speed
            container.scrollLeft = scrollLeft - walk;
        });
    </script>

@endsection