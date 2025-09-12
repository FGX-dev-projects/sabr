@extends('layouts.app')
@section('title', 'SABR: South African Breastmilk Reserve - Breastmilk Smart')
@section('meta-description', 'South African Breastmilk Reserve - Bringing milk to babies, safely.')
@section('content')

<section class="relative w-full h-[750px] md:h-[750px]  overflow-hidden">
    <!-- Background Video -->
    <img class="absolute top-0 left-0 w-full h-full object-cover " src="{{ asset('images/breastmilk-smart.png') }}"
        alt="Hero Image">

    <!-- Dark Overlay -->
    <div class="absolute top-0 left-0 w-full h-full  "></div>

    <!-- Content Overlay -->
    <div class="relative z-10 flex flex-col  h-full  wrapper pt-[180px] md:pt-[186px]">
        <div class="">
            <div class="w-full h-full flex flex-col     gap-6">
                <div class="w-full h-full flex flex-col text-[#FEFEFD]   gap-6">
                    <div
                        class="w-full text-[#FEFEFD] text-[48px] md:text-[64px] font-[300] break-words pt-[80px]  md:pt-[120px]">
                        Make Your Hospital <span class="font-bold">Breastmilk Smart </span>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-[80px]">
    <div class="wrapper ">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-[68px] !items-start">
            <!-- Left Container (Image) -->
            <div class="">
                <img src="{{asset('images/new-group.png')}}" alt="Placeholder Image" class="w-full  rounded-3xl">
            </div>

            <!-- Right Container (Text) -->
            <div
                class="we-are-more-than-just-a-breast-parent flex !items-start !justify-start gap-[28px] !text-[#905460]">

                <div class="!text-[#905460] saving-lives-mobile sostainer text-[48px] md:text-[64px]  ">
                    <span class="text-[#905460]">Transforming <b>Healthcare</b> with In-Hospital <b>Human Milk Banks </b> 
                       </span>

                </div>
                <div class="home-sec-1 font-light">
                    <div class="for-18-years-the-south-afric-wrapper font-inter font-light">
                        <div style="font-weight: 300" class="text-[24px] "> 
                            The Make Your Hospital Breastmilk Smart programme is about more than compliance - it’s about compassion. <br><br>We work hand in hand with South Africa’s National Department of Health (DOH) to make sure every in-hospital milk bank is a safe, trusted place where fragile newborns can receive the nourishment they need. <br><br>By bringing donor milk closer to the babies who depend on it, we shorten the wait, save precious time, and give more infants a fighting chance at life.
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
            Programme <b>Mission</b> and <b>Goals </b>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 py-[64px]">
            <div
                class="relative backdrop-blur-lg rounded-2xl bg-[#99a383] border border-[#90987e]  flex flex-col items-end justify-start p-8 gap-10 text-right text-2xl text-[#23b4e9] font-['Work_Sans']">
                <div class="flex flex-col items-end justify-between gap-10 flex-1 w-full">
                    <b class="w-full relative text-[32px] text-[#FEFEFD] font-sans font-[600]">Mission Statement</b>
                    <div class="w-full text-left font-inter font-[300] relative text-xl text-[#FEFEFD]">
                        Ensure compliance of human milk-banking facilities with national regulations. 
                    </div>
                </div>
            </div>


            <div
                class="relative  backdrop-blur-lg rounded-2xl bg-[#99a383] border border-[#90987e]  flex flex-col items-end justify-start p-8 gap-10 text-right text-2xl text-[#23b4e9] font-['Work_Sans']">
                <div class="flex flex-col items-end justify-between gap-10 flex-1 w-full">
                    <b class="w-full relative text-[32px] !text-[#FEFEFD]">Programme Goal</b>
                    <div class="w-full text-left relative text-xl text-[#FEFEFD] font-inter font-[300]">
                        Re-establish and support in-hospital human milk banks while raising awareness of the importance of breastfeeding. 
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-[80px]">
    <div class="wrapper ">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-[68px] !items-start">
            <!-- Left Container (Image) -->
            

            <!-- Right Container (Text) -->
            <div
                class="we-are-more-than-just-a-breast-parent flex !items-start !justify-start gap-[28px] !text-[#905460]">

                <div class="!text-[#905460] saving-lives-mobile sostainer  text-[48px] md:text-[64px] ">
                    <span class="text-[#905460]">The SoSAFE <b>"Breastmilk-in-a-Box"</b> Initiative
                       </span>

                </div>
                <div class="home-sec-1 font-light">
                    <div class="for-18-years-the-south-afric-wrapper font-inter font-light">
                        <div style="font-weight: 300" class="text-[24px] ">The SoSAFE Breastmilk-in-a-Box Initiative is a comprehensive solution designed to address the challenges of breastmilk safety and accessibility in low-resource settings.<br><br> This innovative initiative incorporates a range of technologies and strategies to ensure that donor breastmilk reaches vulnerable infants safely and efficiently. 
                        </div>
                    </div>


                </div>
            </div>

            <div class="">
                <img src="{{asset('images/life.png')}}" alt="Placeholder Image" class="w-full  rounded-3xl">
            </div>
            
        </div>
    </div>
</section>

<section class="py-[80px] bg-[#905460]" style="background-color: #905460">
    <div class="wrapper">
        <div class="introducing-sosafe md:text-[64px] text-[48px] !text-[#FEFEFD]">
            Key <b>Components</b>  
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 py-[64px]">
            <div
                class="max-w-[377px] max-h-[550px] relative backdrop-blur-lg rounded-2xl bg-[#ac7681]    flex flex-col items-end justify-start p-8 text-right text-2xl  font-['Work_Sans']">
                <div class="flex flex-col gap-8  flex-1 w-full">
                    <b class="w-full relative text-[32px] text-[#FEFEFD]">Affordable and<br> Accessible</b>
                    <div class="w-full text-right relative text-xl text-[#FEFEFD]">
                        Our SoSAFE pasteurisers are lovingly designed to be not just cost-effective, but life-changing. These compassionate facilities enable communities to safely process donated breastmilk, creating a protective shield against harmful pathogens while preserving every vital nutrient that helps babies thrive.
                    </div>
                </div>
            </div>

            <div
                class="max-w-[377px] max-h-[550px]  relative backdrop-blur-lg rounded-2xl bg-[#ac7681]   flex flex-col items-end justify-start p-8 text-right text-2xl  font-['Work_Sans']">
                <div class="flex flex-col  flex-1 w-full gap-8">
                    <b class="w-full relative text-[32px] text-[#FEFEFD]">Rapid Testing <br>Technology</b>
                    <div class="w-full text-right flex justify-start  relative text-xl text-[#FEFEFD]">
                        Ongoing research and development have resulted in cutting-edge testing methods that allow for faster, more reliable screening of donor milk. These innovations ensure timely distribution without compromising safety.
                    </div>
                </div>
            </div>

            <div
                class="max-w-[377px] max-h-[550px]  relative backdrop-blur-lg rounded-2xl bg-[#ac7681]   flex flex-col items-end justify-start p-8 text-right text-2xl text-[#23b4e9] font-['Work_Sans']">
                <div class="flex flex-col gap-8 flex-1 w-full ">
                    <b class="w-full relative text-[32px] text-[#FEFEFD] ">SOStainer Mobile <br>Clinics</b>
                    <div class="w-full relative text-right text-xl text-[#FEFEFD]">
                        This versatile, solar-powered mobile solution brings healthcare directly to underserved communities. In addition to donor milk pasteurisation and distribution, SOStainer clinics provide vital maternal and child health services, including immunisations, nutrition support, and HIV testing. 
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-[80px]">
    <div class="wrapper ">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-[68px] !items-start">
            <!-- Left Container (Image) -->
            

            <!-- Right Container (Text) -->
            <div
                class="we-are-more-than-just-a-breast-parent flex !items-start !justify-start gap-[28px] !text-[#905460]">

                <div class="!text-[#905460] saving-lives-mobile sostainer  text-[48px] md:text-[64px] ">
                    <span class="text-[#905460]">Benefits of <b>"Breastmilk-in-a-Box"</b> 
                       </span>

                </div>
                <div class="home-sec-1 ">
                    <div class="for-18-years-the-south-afric-wrapper font-inter font-light">
                        <div style="font-weight: 700" class="text-[24px] ">The SoSAFE initiative exemplifies SABR’s commitment to community-based healthcare. By combining affordability, efficiency, and innovation, the initiative
                        </div>
                    </div>
                </div>
                <div class="home-sec-1 font-light">
                    <div class="for-18-years-the-south-afric-wrapper font-inter font-light">
                        <div style="font-weight: 300" class="text-[24px] ">Ensures that donor breastmilk remains a viable option even in low-resource environments. 
                            <br><br>
                            Bridges gaps in neonatal care by expanding access to life-saving nutrition for infants. 
                            <br><br>
                            Supports healthcare facilities in meeting regulatory and quality standards for human milk banking. 
                        </div>
                    </div>
                </div>
            </div>

            <div class="">
                <img src="{{asset('images/baby108.png')}}" alt="Placeholder Image" class="w-full  rounded-3xl">
            </div>
            
        </div>
    </div>
</section>

<section class="py-[80px] bg-[#a8b096]">
    <div class="wrapper ">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-[68px] !items-start">
            <!-- Left Container (Image) -->
            <div class="">
                <img src="{{asset('images/baby109.png')}}" alt="Placeholder Image" class="w-full  rounded-3xl">
            </div>

            <!-- Right Container (Text) -->
            <div
                class="we-are-more-than-just-a-breast-parent flex !items-start !justify-start gap-[28px] !text-[#fff]">

                <div class="!text-[#fff] saving-lives-mobile sostainer  text-[48px] md:text-[64px] ">
                    <span class="text-[#fff] leading-[1px]"><b>Scaling</b> and<br> <b>Impact</b> 
                       </span>

                </div>
                <div class="home-sec-1 font-light">
                    <div class="for-18-years-the-south-afric-wrapper font-inter font-light">
                        <div style="font-weight: 300" class="text-[24px] text-[#fff] ">
                            With its scalable design, the "Breastmilk-in-a-Box" initiative can be adapted to various healthcare settings across South Africa and beyond. <br><br>By integrating these solutions into the <b class="font-bold">Make Your Hospital Breastmilk Smart</b> programme, SABR enhances its capacity to support hospitals, breastfeeding mothers, and pre-term infants nationwide. 
                        </div>
                    </div>
                </div>
            </div>

            
            
        </div>
    </div>
</section>

<section class="py-[80px]  bg-[#9f9ab1]">
    <div class="wrapper ">
        <div class=" bg-[#9f9ab1] inline-flex justify-center items-start gap-[98px]">
            <div class="flex-1 self-stretch justify-start items-center gap-8">
                <div class="self-stretch items-start gap-6">
                    <!-- Left Section -->
                    <div class="justify-center items-start gap-3">
                        <div class="self-stretch text-[#F9FCE8] text-[48px] md:text-[64px] font-normal ">
                            Programme <b>Mission</b> and <b>Goals</b>
                        </div>

                        <div class="flex flex-col md:flex-row gap-4 text-[#FEFEFD] mt-10">
                            <div class="flex-1 gap: 24px;">
                                <h2 class="text-[24px] text-[#FEFEFD] font-inter font-[600] mb-3">Mission Statement</h2>
                                <p class="text-[24px] font-inter font-[300]">Deliver pasteurised, donated breastmilk to in-hospital patients and equitably redistribute DBM to infants in public healthcare facilities. 
                                </p>
                            </div>
                            <div class="flex-1 gap: 24px;">
                                <h2 class="text-[20px] text-[#FEFEFD] font-inter font-[600] mb-3">Programme Goal</h2>
                                <p class="text-[24px] font-inter font-[300]">Provide fair and reliable access to donor breastmilk for both private and public-sector patients, ensuring critical early nutrition for pre-term and at-risk infants. 
                                </p>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>

    </div>
</section>

<section class="py-[80px]  bg-[#e8d8c6]">
    <div class="wrapper ">
        <div class=" bg-[#e8d8c6] inline-flex justify-center items-start gap-[98px]">
            <div class="flex-1 self-stretch flex flex-col justify-start items-center gap-8">
                <div class="self-stretch flex flex-col lg:flex-row justify-start items-start gap-6">
                    <!-- Left Section -->
                    <div class="flex-1 flex flex-col justify-center items-start gap-3">
                        <div class="self-stretch text-[#6d5d43] text-6xl font-normal leading-tight">
                            Take the <span class="font-bold">Next<br> Step</span>
                        </div>
                        <div class="self-stretch h-auto flex flex-col justify-start items-start gap-6">
                            <p class="self-stretch text-[#6d5d43] text-2xl font-inter font-[300]">
                                Bring SoSAFE to your facility and set a new standard in breastmilk safety.
                            </p>
                        </div>
                    </div>

                    <!-- Right Section -->
                    <div class="flex-1 flex flex-col justify-center items-start gap-3">
                        <div class="self-stretch h-auto flex flex-col justify-start items-start gap-6">
                            <p class="self-stretch text-[#6d5d43] text-3xl font-bold">
                                Ready to Learn More?
                            </p>
                        </div>
                        <div class="self-stretch h-auto flex flex-col justify-start items-start gap-6">
                            <p class="self-stretch text-[#6d5d43] font-inter text-2xl font-[300] font-inter">
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