@extends('layouts.app')
@section('title', 'SABR: South African Breastmilk Reserve - Feed For Life')
@section('meta-description', 'South African Breastmilk Reserve - Bringing milk to babies, safely.')
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

<section class="py-[80px] bg-[#e5d2b8]">
    <div class="wrapper ">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-[68px] !items-start">
            <!-- Left Container (Image) -->
            <div class="">
                <img src="{{asset('images/baby104.png')}}" alt="Placeholder Image" class="w-full  ">
            </div>

            <!-- Right Container (Text) -->
            <div class="we-are-more-than-just-a-breast-parent flex !items-start !justify-start gap-[24px]">

                <div class="saving-lives-mobile  md:text-[64px] text-[48px] text-[#905460] ">
                    <span><b>Vision</b> and <b class="!text-[#905460] font-bold"><br> Mission</b></span>

                </div>
                <div class="home-sec-1 font-light">
                    <div class="for-18-years-the-south-afric-wrapper font-inter font-light">
                        <div style="font-weight: 300" class="text-[24px] ">
                            At the South African Breastmilk Reserve (SABR), we dream of a world where every newborn - no matter their circumstances - has access to the life-saving nourishment of breastmilk. <br><br>
                            
                            We believe in the healing power of milk, in protecting the most vulnerable, and in giving fragile babies the healthiest possible start.
                            <br><br>
                            Through innovation, compassion, and collaboration, we are opening the door to breastmilk for those who need it most and leading the way in advancing human milk banking.
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-[80px] bg-[#a8b096]">
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

<section class="py-[80px]">
    <div class="wrapper ">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-[68px] !items-start">
            <!-- Left Container (Image) -->
            

            <!-- Right Container (Text) -->
            <div class="we-are-more-than-just-a-breast-parent flex !items-start !justify-start gap-[28px]">

                <div class="saving-lives-mobile  text-[48px] md:text-[64px] text-[#905460] ">
                    <span>Make your hospital <b class="!text-[#905460]"><br>breastmilk smart</b></span>

                </div>
                <div class="home-sec-1 font-light">
                    <div class="for-18-years-the-south-afric-wrapper font-inter font-light">
                        <div style="font-weight: 300" class="text-[24px] !font-light not-italic">
                            Born from a belief that no baby should go without the nourishment they deserve, SABR’s Feed for Life initiative transforms compassion into action. <br><br>By working hand in hand with hospitals, NICUs, and provincial health departments, we make life-saving donor breastmilk accessible to infants across South Africa - even in the most under-resourced communities. <br><br>Every drop donated is a promise: a promise of strength, of growth, and of a brighter future.
                        </div>
                    </div>


                </div>
            </div>


            <div class="">
                <img src="{{asset('images/baby104.png')}}" alt="Placeholder Image" class="w-full  rounded-xl">
            </div>
        </div>
    </div>
</section>

<section class="py-[80px] bg-[#e8dfcf]">
    <div class="wrapper flex flex-col gap-6">
        <div class="we-are-more-than-just-a-breast-parent saving-lives-mobile flex !items-start !text-start text-[#905460] ">
            <span class="!text-[#905460]">Inclusion Criteria for  <b class="!text-[#905460]"> Recipient <br>Babies</b></span>
        </div>
        <h3 class="get-in-touch font-inter font-bold text-[#666562]">Infants eligible to receive donated breastmilk through the Feed for Life Initiative must meet the following criteria: </h3>
        <h4 class="font-inter">Prematurity</h4>
        <p class="font-inter font-light text-[20px] text-[#666562] ">Born before 37 weeks’ gestation. </p>
        <h4 class="font-inter">Age</h4>
        <p class="font-inter font-light text-[20px] text-[#666562] ">Hospitalised and younger than 14 days old.  </p>
        <h4 class="font-inter">Duration of Feeding</h4>
        <p class="font-inter font-light text-[20px] text-[#666562] ">Receive DBM for up to 14 days, under paediatric prescription.</p>
        <ul class="featuring-sosafes-innovative-container pl-8 " style="list-style: disc;">
            <li class="text-[20px] font-inter font-light text-[#666562]">Extensions require paediatrician approval. </li>
            <li class="text-[20px] font-inter font-light text-[#666562]">Maternal lactation is prioritised, with donor breastmilk colonised by the mother’s own milk to support the growth of maternal immunoglobulins and bioactive components. </li>
        </ul>
    </div>
</section>

<section class="py-[80px]  bg-[#905460]">
    <div class="wrapper ">
        <div class=" bg-[#905460] inline-flex justify-center items-start gap-[98px]">
            <div class="flex-1 self-stretch flex flex-col justify-start items-center gap-8">
                <div class="self-stretch flex flex-col lg:flex-row justify-start items-start gap-6">
                    <!-- Left Section -->
                    <div class="flex-1 flex flex-col justify-center items-start gap-3">
                        <div class="self-stretch text-[#f9fce8] text-6xl font-normal leading-tight">
                            Take the <span class="font-bold">Next<br> Step</span>
                        </div>
                        <div class="self-stretch h-auto flex flex-col justify-start items-start gap-6">
                            <p class="self-stretch text-[#fefefd] text-2xl font-inter font-[300]">
                                Bring SoSAFE to your facility and set a new standard in breastmilk safety.
                            </p>
                        </div>
                    </div>

                    <!-- Right Section -->
                    <div class="flex-1 flex flex-col justify-center items-start gap-3">
                        <div class="self-stretch h-auto flex flex-col justify-start items-start gap-6">
                            <p class="self-stretch text-[32px] text-[#fefefd] text-3xl font-bold">
                                Ready to Learn More?
                            </p>
                        </div>
                        <div class="self-stretch h-auto flex flex-col justify-start items-start gap-6">
                            <p class="self-stretch text-[#fefefd]  text-2xl font-[300] font-inter">
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