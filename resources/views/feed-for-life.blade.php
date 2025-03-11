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
                    <div class="w-full text-[#FEFEFD] text-[48px] md:text-[64px] font-normal break-words pt-[180px]  md:pt-[120px]">
                        Feed For Life
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-[128px]">
    <div class="wrapper ">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-[68px] !items-start">
            <!-- Left Container (Image) -->
            <div class="">
                <img src="{{asset('images/newborn.png')}}" alt="Placeholder Image" class="w-full  rounded-xl">
            </div>

            <!-- Right Container (Text) -->
            <div class="we-are-more-than-just-a-breast-parent flex !items-start !justify-start gap-[28px]">

                <div class="saving-lives-mobile  text-[#B2CB14] ">
                    <span><b>Vision</b> and <b class="!text-[#B2CB14]"><br> Mission</b></span>

                </div>
                <div class="home-sec-1 font-light">
                    <div class="for-18-years-the-south-afric-wrapper font-inter font-light">
                        <div style="font-weight: 300" class="text-[24px] ">At the South African Breastmilk Reserve (SABR), we envision a world where every infant has access to the life-saving benefits of breastmilk, regardless of their circumstances. Our mission is to bridge gaps in healthcare by promoting equitable access to donor breastmilk, fostering healthier beginnings for vulnerable newborns, and advancing innovation in human milk banking.
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-[128px] bg-[#8B9E10]">
    <div class="wrapper">
        <div class="introducing-sosafe md:text-[64px] text-[48px] !text-[#FEFEFD]">
            <b>Awards</b> <span class="font-thin">& </span><b>Achievements</b>
        </div>

        <p class="text-[#FEFEFD] text-[24px] pt-[28px]">
            Our commitment to innovation and impact has been recognised with accolades such as the Discovery Excellence
            Awards in 2018 and 2021. These honours highlight our efforts, including the development of the SoSAFE
            Pasteuriser, the SOStainer Mobile Clinic, and advancements in virological screening for donor milk.
        </p>



    </div>
</section>

<section class="py-[128px]">
    <div class="wrapper ">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-[68px] !items-start">
            <!-- Left Container (Image) -->
            

            <!-- Right Container (Text) -->
            <div class="we-are-more-than-just-a-breast-parent flex !items-start !justify-start gap-[28px]">

                <div class="saving-lives-mobile  text-[#23B4E9] ">
                    <span>Overview of the   <b class="!text-[#23B4E9]"><br>Initiative</b></span>

                </div>
                <div class="home-sec-1 font-light">
                    <div class="for-18-years-the-south-afric-wrapper font-inter font-light">
                        <div style="font-weight: 300" class="text-[24px] !font-light not-italic">
                            Pioneered by SABR, the Feed for Life Initiative represents an altruistic, sustainable, and replicable model for human milk banking. This system has demonstrated substantial impact, particularly in low-resourced public hospitals with large neonatal intensive care units (NICUs) and rural areas. Over the past decade, the programme has strengthened partnerships with South Africa’s Provincial Departments of Health, making life-saving donor breastmilk accessible to infants across the country. 
                        </div>
                    </div>


                </div>
            </div>


            <div class="">
                <img src="{{asset('images/newborn.png')}}" alt="Placeholder Image" class="w-full  rounded-xl">
            </div>
        </div>
    </div>
</section>

<section class="py-[128px]">
    <div class="wrapper flex flex-col gap-6">
        <div class="we-are-more-than-just-a-breast-parent saving-lives-mobile flex !items-start !text-start text-[#B2CB14] ">
            <span class="!text-[#B2CB14]">Inclusion Criteria for  <b class="!text-[#B2CB14]"> Recipient <br>Babies</b></span>
        </div>
        <h3 class="get-in-touch font-inter font-bold text-[#666562]">Infants eligible to receive donated breastmilk through the Feed for Life Initiative must meet the following criteria: </h3>
        <h4 class="font-inter">Prematurity</h4>
        <p class="font-inter font-light text-[24px] text-[#666562] ">Born before 37 weeks’ gestation. </p>
        <h4 class="font-inter">Age</h4>
        <p class="font-inter font-light text-[24px] text-[#666562] ">Hospitalised and younger than 14 days old.  </p>
        <h4 class="font-inter">Duration of Feeding</h4>
        <p class="font-inter font-light text-[24px] text-[#666562] ">Receive DBM for up to 14 days, under paediatric prescription.</p>
        <ul class="featuring-sosafes-innovative-container pl-8 " style="list-style: disc;">
            <li class="text-[24px] font-inter font-light text-[#666562]">Extensions require paediatrician approval. </li>
            <li class="text-[24px] font-inter font-light text-[#666562]">Maternal lactation is prioritised, with donor breastmilk colonised by the mother’s own milk to support the growth of maternal immunoglobulins and bioactive components. </li>
        </ul>
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