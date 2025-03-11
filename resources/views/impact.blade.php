@extends('layouts.app')

@section('content')
<section class="relative w-full h-[750px] md:h-[750px]  overflow-hidden">
    <!-- Background Video -->
    <img class="absolute top-0 left-0 w-full h-full object-cover " src="{{ asset('images/feed-for-life-banner.png') }}"
        alt="Hero Image">

    <!-- Dark Overlay -->
    <div class="absolute top-0 left-0 w-full h-full  "></div>

    <!-- Content Overlay -->
    <div class="relative z-10 flex flex-col  h-full  wrapper pt-[180px] md:pt-[186px]">
        <div class="wrapper">
            <div class="w-full h-full flex flex-col     gap-6">
                <div class="w-full h-full flex flex-col text-[#FEFEFD]   gap-6">
                    <div
                        class="w-full text-[#FEFEFD] text-[48px] md:text-[64px] font-normal break-words pt-[180px]  md:pt-[120px]">
                        Our Impact 
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-[128px]">
    <div class="wrapper">
        <div class="introducing-sosafe md:text-[64px] text-[48px] !text-[#B2CB14]">
            Transforming Lives Through <b>Human-Milk Banking</b>
        </div>
        <div class="home-sec-1 font-light">
            <div class="for-18-years-the-south-afric-wrapper font-inter font-light">
                <div style="font-weight: 300" class="text-[24px] "> 
                    At the South African Breastmilk Reserve (SABR), our impact is measured not only by the lives we save but also by the systemic change we drive. From reducing infant mortality to empowering mothers and advancing cutting-edge research, SABR’s work touches thousands of lives across South Africa every year.

                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-[128px] bg-[#23B4E9]">
    <div class="wrapper">
        <div class="introducing-sosafe md:text-[64px] text-[48px] !text-[#FEFEFD]">
            Advocacy for Breastfeeding and Health Economics 
        </div>
        <div class="home-sec-1 font-light !text-[#FEFEFD]">
            <div class="for-18-years-the-south-afric-wrapper font-inter font-light">
                <div style="font-weight: 300" class="text-[24px] !text-[#FEFEFD]"> 
                    As active members of the Maternal Neonatal Guideline and Breastfeeding Technical Working Groups of the National Department of Health (NDOH), SABR champions breastfeeding as a public health priority.
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 py-[64px]">
            <div
                class="max-w-[377px] max-h-[531px] relative backdrop-blur-lg rounded-2xl bg-[#20A4D4] border border-[#6CCDF0]  flex flex-col items-end justify-start p-8 text-right text-2xl text-[#23b4e9] font-['Work_Sans']">
                <div class="flex flex-col items-end gap-[13px] flex-1 w-full">
                    <b class="w-full relative text-[#FEFEFD] text-[32px]">Breastfeeding<br>Algorithm</b>
                    <div class="w-full text-left relative text-xl text-[#FEFEFD]">
                        SABR has proposed a systematic breastfeeding algorithm to identify staffing needs in postnatal wards, factoring in ward size, bed count, and C-section rates. With public hospital C-section rates at 44%, many mothers face prolonged separations from their newborns, hindering essential practices like skin-to-skin contact and early latching—both critical for initiating lactation.  
                    </div>
                </div>
            </div>

            <div
                class="max-w-[377px] max-h-[531px] relative backdrop-blur-lg rounded-2xl bg-[#20A4D4] border border-[#6CCDF0]  flex flex-col items-end justify-start p-8 text-right text-2xl text-[#23b4e9] font-['Work_Sans']">
                <div class="flex flex-col items-end gap-[13px] flex-1 w-full ">
                    <b class="w-full relative text-[#FEFEFD] text-[32px]">Health <br>Economics</b>
                    <div class="w-full text-left flex justify-start relative text-xl text-[#FEFEFD]">
                        SABR advocates for aligning public health budgets with the importance of breastfeeding. Reallocation of resources could enable greater breastfeeding assistance, improve lactation support, and expand human-milk banking services. This ensures breastfeeding is prioritised as an accessible and essential aspect of infant health.
                    </div>
                </div>
            </div>

            <div
                class="max-w-[377px] max-h-[531px] relative backdrop-blur-lg rounded-2xl bg-[#20A4D4] border border-[#6CCDF0]  flex flex-col items-end justify-start p-8 text-right text-2xl text-[#23b4e9] font-['Work_Sans']">
                <div class="flex flex-col items-end gap-[13px] flex-1 w-full ">
                    <b class="w-full relative text-[#FEFEFD] text-[32px]">Policy<br> Strengthening</b>
                    <div class="w-full relative text-left text-xl text-[#FEFEFD]">
                        SABR collaborates with healthcare providers and communities to re-engage post-pandemic breastfeeding initiatives. Our goal is to sustain and promote breastfeeding as an affordable, accessible, and beneficial choice for families from all backgrounds.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-[128px] bg-[#8B9E10]">
    <div class="wrapper flex flex-col gap-[24px]">
        <div class="introducing-sosafe md:text-[64px] text-[48px] !text-[#FEFEFD]">
            <b>Research</b> 
        </div>

        <p class="text-[#FEFEFD] text-[24px] ">
            While SABR’s innovative research drives advancements in human-milk banking, its true value lies in the lives it touches. From ensuring safer donor milk to supporting at-risk infants, our studies amplify the reach and effectiveness of our programmes. Learn more about the science behind our impact by exploring SABR’s dedicated research initiatives.
        </p>

        <div class="button-prim-wrapper">
            <div class="button-prim">
                <a class="nav-button7 cursor-pointer !bg-[#107BA2]">
                    <div class="button7 pt-1">Learn More About Us</div>
                    <div class="nav-button-child">
                    </div>
                </a>
                <div class="pharrow-up-wrapper cursor-pointer !bg-[#107BA2]">
                    <img class="pharrow-up-icon" alt="" src="{{asset('images/arrow-up.svg')}}">
                </div>
            </div>


        </div>
    </div>
</section>

<section class="py-[128px]">
    <div class="wrapper ">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-[68px] !items-start mb-[98px]">
            <!-- Left Container (Image) -->
            <div class="">
                <img src="{{asset('images/about-baby.png')}}" alt="Placeholder Image" class="w-full  rounded-3xl">
            </div>

            <!-- Right Container (Text) -->
            <div
                class="we-are-more-than-just-a-breast-parent flex !items-start !justify-start gap-[28px] ">

                <div class="!text-[#23B4E9] saving-lives-mobile sostainer  ">
                    <span class="text-[#23B4E9]">Challenges & Opportunities
                       </span>

                </div>
                <div class="home-sec-1 !gap-0 font-light">
                    <div class="for-18-years-the-south-afric-wrapper font-inter font-light mb-6">
                        <div style="font-weight: 300" class="text-[24px] ">Accessing breastmilk in public care is often hindered by significant challenges, including:
                        </div>
                    </div>
                    <div class="for-18-years-the-south-afric-wrapper font-inter ">
                        <div style="font-weight: 700" class="text-[24px] ">Lack of Infrastructure and Resources
                        </div>
                    </div>
                    <div class="for-18-years-the-south-afric-wrapper font-inter font-light mt-3 mb-6">
                        <div style="font-weight: 300" class="text-[24px] ">
                            Many healthcare facilities lack the equipment and staffing needed to promote lactation and maternal health.
                        </div>
                    </div>
                    <div class="for-18-years-the-south-afric-wrapper font-inter ">
                        <div style="font-weight: 700" class="text-[24px] ">Health Impacts of HIV/AIDS
                        </div>
                    </div>
                    <div class="for-18-years-the-south-afric-wrapper font-inter font-light  mb-6">
                        <div style="font-weight: 300" class="text-[24px] mt-3">
                            High rates of HIV/AIDS and associated illnesses, such as TB and meningitis, contribute to premature births, often leaving mothers too ill to lactate or, in some cases, unable to survive childbirth.

                        </div>
                    </div>
                    <div class="for-18-years-the-south-afric-wrapper font-inter ">
                        <div style="font-weight: 700" class="text-[24px] ">Social and Structural Barriers
                        </div>
                    </div>
                    <div class="for-18-years-the-south-afric-wrapper font-inter font-light mt-3">
                        <div style="font-weight: 300" class="text-[24px] ">
                            Stigma, lack of awareness, and inadequate legislation to protect breastfeeding mothers exacerbate the challenges faced by many families.
                        </div>
                    </div>
                </div>
            </div>

            
        </div>

        <div class="for-18-years-the-south-afric-wrapper font-inter font-light mb-6">
            <div style="font-weight: 300" class="text-[24px] text-[#666562] ">SABR’s 15 years of experience have also highlighted issues specific to rural areas, where limited access to laboratories, electricity, and clean water complicates the safe and hygienic processing of donor breastmilk. These barriers underscore the need for innovative solutions, such as rapid testing technologies and low-cost, self-sustaining processing methods.

            </div>
        </div>
    </div>
</section>

<section class="py-[128px]  bg-[#107BA2]">
    <div class="wrapper ">
        <div class=" bg-[#107BA2] inline-flex justify-center items-start gap-[98px]">
            <div class="flex-1 self-stretch justify-start items-center gap-8">
                <div class="self-stretch items-start gap-6">
                    <!-- Left Section -->
                    <div class="justify-center items-start gap-3">
                        <div class="self-stretch text-[#F9FCE8] text-4xl md:text-7xl font-normal ">
                            Programme <b>Mission</b> and <b>Goals</b>
                        </div>

                        <div class="flex flex-col md:flex-row gap-4 text-[#FEFEFD] mt-10">
                            <div class="flex-1 gap: 24px;">
                                <h2 class="text-[24px] font-bold mb-3">Mission Statement</h2>
                                <p class="text-[24px] font-inter">Deliver pasteurised, donated breastmilk to in-hospital patients and equitably redistribute DBM to infants in public healthcare facilities. 
                                </p>
                            </div>
                            <div class="flex-1 gap: 24px;">
                                <h2 class="text-[24px] font-bold mb-3">Programme Goal</h2>
                                <p class="text-[24px] font-inter">Provide fair and reliable access to donor breastmilk for both private and public-sector patients, ensuring critical early nutrition for pre-term and at-risk infants. 
                                </p>
                            </div>
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

@endsection