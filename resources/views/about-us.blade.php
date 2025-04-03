@extends('layouts.app')

@section('content')

    <section class="relative w-full h-[750px] md:h-[750px]  overflow-hidden">
        <!-- Background Video -->
        <img class="absolute top-0 left-0 w-full h-full object-cover " src="{{ asset('images/about-us-banner.png') }}"
            alt="Hero Image">

        <!-- Dark Overlay -->
        <div class="absolute top-0 left-0 w-full h-full  "></div>

        <!-- Content Overlay -->
        <div class="relative z-10 flex flex-col  h-full  wrapper pt-[180px] md:pt-[186px]">
            <div class="wrapper">
                <div class="w-full h-full flex flex-col items-center  justify-center  gap-6">
                    <div class="w-full h-full flex flex-col text-[#FEFEFD]   gap-6">
                        <div class="w-full text-[#FEFEFD] text-[48px] md:text-[64px] font-normal break-words">
                            About Us
                        </div>
                        <div class="join-us-in">
                            Saving Lives, One Drop At A Time
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-[128px]">
        <div class="wrapper ">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-[68px] items-center">
                <!-- Left Container (Image) -->
                <div class="">
                    <img src="{{asset('images/about-img1.png')}}" alt="Placeholder Image" class="w-full  rounded-xl">
                </div>

                <!-- Right Container (Text) -->
                <div class="we-are-more-than-just-a-breast-parent !justify-start gap-[50px]">

                    <div class="saving-lives-mobile  text-[#23B4E9] ">
                        <span>Ensuring <b class="!text-[#23B4E9]">Equitable Access</b> to Donor Breastmilk </span>

                    </div>
                    <div class="home-sec-1">
                        <div class="for-18-years-the-south-afric-wrapper">
                            <div class="text-[24px]">The Feed for Life Initiative is a cornerstone programme of the South
                                African Breastmilk Reserve (SABR), dedicated to ensuring that all in-hospital
                                patients—especially those in low-resource public facilities—have access to pasteurised,
                                donated breastmilk (DBM). By bridging gaps in neonatal care, the programme supports the
                                survival and development of South Africa’s most vulnerable infants. 
                            </div>
                        </div>


                    </div>
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
                                    <h2 class="text-[24px] text-[#FEFEFD] font-inter font-[600] mb-3">Mission Statement</h2>
                                    <p class="text-[24px] font-inter">Deliver pasteurised, donated breastmilk to in-hospital patients and equitably redistribute DBM to infants in public healthcare facilities. 
                                    </p>
                                </div>
                                <div class="flex-1 gap: 24px;">
                                    <h2 class="text-[24px] text-[#FEFEFD] font-inter font-[600] mb-3">Programme Goal</h2>
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

    <section class="py-[128px] ">
        <div class="wrapper ">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-[68px] ">
                <!-- Left Container (Image) -->
                <div class="">
                    <img src="{{asset('images/about-baby.png')}}" alt="Placeholder Image" class="w-full  rounded-xl">
                </div>

                <!-- Right Container (Text) -->
                <div class="we-are-more-than-just-a-breast-parent !items-start !justify-start gap-[30px]">

                    <div class="!text-left saving-lives-mobile  text-[#23B4E9]">
                        <span class="!text-left">Our <b class="!text-[#23B4E9]">Reach </b></span>

                    </div>
                    <div class="home-sec-1">
                        <div class="for-18-years-the-south-afric-wrapper">
                            <div class="text-[24px]">The Feed for Life Initiative is a cornerstone programme of the South
                                African Breastmilk Reserve (SABR), dedicated to ensuring that all in-hospital
                                patients—especially those in low-resource public facilities—have access to pasteurised,
                                donated breastmilk (DBM). By bridging gaps in neonatal care, the programme supports the
                                survival and development of South Africa’s most vulnerable infants. 
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
            <div class="grid grid-cols-1  md:grid-cols-2 gap-[50px]">
                <!-- Left Container (Image) -->

                <div class="flex-1">
                    <div class="make-your-hospital-container !text-[#B2CB14]">
                        <span>Our <b>History</b> </span>

                    </div>
                    <div class="home-sec-1 ">
                        Founded in 2003, SABR began as a pioneering initiative to address disparities in neonatal care
                        through human milk banking. Over the years, we have:
                        <div class="milk-banking-facilities-nation-parent">
                            <div class="we-are-more-container">
                                <ul class="featuring-sosafes-innovative-container pl-4 " style="list-style: disc;">
                                    <li class="font-light text-[24px] font-inter">Established a sustainable and replicable
                                        model for non-profit milk banking.

                                    </li>
                                </ul>
                            </div>
                            <div class="we-are-more-container">
                                <ul class="featuring-sosafes-innovative-container pl-4 " style="list-style: disc;">
                                    <li class="font-light text-[24px] font-inter">Expanded our reach to serve both public
                                        and private healthcare sectors.</li>
                                </ul>
                            </div>

                            <div class="we-are-more-container">

                                <ul class="featuring-sosafes-innovative-container pl-4 " style="list-style: disc;">
                                    <li class="font-light text-[24px] font-inter">Developed groundbreaking technologies
                                        like the SoSAFE Pasteuriser.</li>
                                </ul>
                            </div>
                            <div class="we-are-more-container">
                                <ul class="featuring-sosafes-innovative-container pl-4 " style="list-style: disc;">
                                    <li class="font-light text-[24px] font-inter">Partnered with government and healthcare institutions to create lasting change.</li>
                                </ul>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="image">
                    <img src="{{asset('images/baby5.jpg')}}" alt="Placeholder Image"
                        class=" rounded-xl">
                </div>
            </div>
        </div>
    </section>

    <section class="py-[128px]">
        <div class="wrapper">
            <div class="introducing-sosafe md:text-[64px] text-[48] font-extrabold text-[48px] !text-[#666562] mb-[98px]">
                Key Milestones
            </div>

            <img src="{{asset('images/timeline.png')}}" class="block mx-auto"/>
            <p class="mt-[98px] font-inter text-light-2 text-[24px] text-[#666562]">
                Through our vision, partnerships, and unwavering commitment, SABR continues to champion the health and well-being of South Africa’s most vulnerable infants.
            </p>
        </div>
        
        {{-- <div class="relative max-w-4xl mx-auto">
            <div class="absolute left-1/2 top-0 bottom-0 w-0.5 bg-yellow-400 transform -translate-x-1/2"></div>
            
            <div class="relative mb-16">
                <div class="flex items-center">
                    <div class="w-1/2 pr-8 text-right">
                        <h2 class="text-2xl font-bold mb-2">2003</h2>
                        <p class="text-gray-600">Adoption of a life-cycle approach to infant health, integrating breastfeeding into broader childhood development programmes.</p>
                    </div>
                    <div class="absolute left-1/2 transform -translate-x-1/2">
                        <div class="w-5 h-5 bg-blue-500 rounded-full"></div>
                    </div>
                    <div class="w-1/2"></div>
                </div>
            </div>
            
            <div class="relative mb-16">
                <div class="flex items-center">
                    <div class="w-1/2"></div>
                    <div class="absolute left-1/2 transform -translate-x-1/2">
                        <div class="w-5 h-5 bg-blue-500 rounded-full"></div>
                    </div>
                    <div class="w-1/2 pl-8">
                        <h2 class="text-2xl font-bold mb-2">2015</h2>
                        <p class="text-gray-600">Adoption of a life-cycle approach to infant health, integrating breastfeeding into broader childhood development programmes.</p>
                    </div>
                </div>
            </div>
            
            <div class="relative mb-16">
                <div class="flex items-center">
                    <div class="w-1/2 pr-8 text-right">
                        <h2 class="text-2xl font-bold mb-2">2018</h2>
                        <p class="text-gray-600">Adoption of a life-cycle approach to infant health, integrating breastfeeding into broader childhood development programmes.</p>
                    </div>
                    <div class="absolute left-1/2 transform -translate-x-1/2">
                        <div class="w-5 h-5 bg-blue-500 rounded-full"></div>
                    </div>
                    <div class="w-1/2"></div>
                </div>
            </div>
            
            <div class="relative mb-16">
                <div class="flex items-center">
                    <div class="w-1/2"></div>
                    <div class="absolute left-1/2 transform -translate-x-1/2">
                        <div class="w-5 h-5 bg-blue-500 rounded-full"></div>
                    </div>
                    <div class="w-1/2 pl-8">
                        <h2 class="text-2xl font-bold mb-2">2021</h2>
                        <p class="text-gray-600">Adoption of a life-cycle approach to infant health, integrating breastfeeding into broader childhood development programmes.</p>
                    </div>
                </div>
            </div>
            
            <div class="relative">
                <div class="flex items-center">
                    <div class="w-1/2 pr-8 text-right">
                        <h2 class="text-2xl font-bold mb-2">Present</h2>
                        <p class="text-gray-600">Adoption of a life-cycle approach to infant health, integrating breastfeeding into broader childhood development programmes.</p>
                    </div>
                    <div class="absolute left-1/2 transform -translate-x-1/2">
                        <div class="w-5 h-5 bg-blue-500 rounded-full"></div>
                    </div>
                    <div class="w-1/2"></div>
                </div>
            </div>
        </div> --}}
    
    </section>

    <section class="py-[128px]">
        <div class="wrapper ">
            <div class="make-your-hospital-container !text-right font-inter font-bold !text-[#959595]">
                <span>Beneficiaries </span>

            </div>
            <div class="grid grid-cols-1  md:grid-cols-2 gap-[50px]">
                <!-- Left Container (Image) -->
                

                <div class="flex-1">
                    <div class="make-your-hospital-container !text-[#B2CB14]">
                        

                    </div>
                    <div class="!text-right ">
                        <p class="text-right text-[16px] font-normal text-black font-inter">The SABR functions as a co-ordinating body for the equitable distribution of life-saving DBM country wide and is geared towards delivering DBM to every part of South Africa within 24 to 48 hours, whilst ensuring that it is of the highest quality and meets regulatory standards.</p> 
                        <br>
                        <p class="text-right text-[24px] font-light  font-inter">The SABR follows a universal guideline that includes all infants below 37 weeks’ gestation. The largest amount of donor breastmilk is directed to public hospital facilities.</p>
                        <br>
                        <p class="text-right text-[24px] font-light  font-inter">The SABR follows a universal guideline that includes all infants below 37 weeks’ gestation. The largest amount of donor breastmilk is directed to public hospital facilities.</p>    


                    </div>
                </div>


                <div class="image">
                    
                    <img src="{{asset('images/baby5.jpg')}}" alt="Placeholder Image"
                        class=" rounded-xl w-full">
                </div>

                <!-- Right Container (Text) -->

            </div>
        </div>
    </section>

    <section class="pb-[50px]">
        <div class="wrapper">
            <p class="text-center font-inter text-[24px] mb-[32px] text-light-2">The SABR currently supports breastfeeding mothers in rural areas in:</p>
            <div class="flex flex-wrap justify-center gap-3 p-4">
                <button class="px-4 py-2 border border-slate-400 rounded-full text-[#107BA2] bg-[#F8F5F0] hover:bg-gray-200">
                    Lusikisiki
                </button>
                <button class="px-4 py-2 border border-slate-400 rounded-full text-[#107BA2] bg-[#F8F5F0] hover:bg-gray-200">
                    Umthatha
                </button>
                <button class="px-4 py-2 border border-slate-400 rounded-full text-[#107BA2] bg-[#F8F5F0] hover:bg-gray-200">
                    Queenstown
                </button>
                <button class="px-4 py-2 border border-slate-400 rounded-full text-[#107BA2] bg-[#F8F5F0] hover:bg-gray-200">
                    Upington
                </button>
                <button class="px-4 py-2 border border-slate-400 rounded-full text-[#107BA2] bg-[#F8F5F0] hover:bg-gray-200">
                    Kimberley
                </button>
                <button class="px-4 py-2 border border-slate-400 rounded-full text-[#107BA2] bg-[#F8F5F0] hover:bg-gray-200">
                    Vryburg
                </button>
                <button class="px-4 py-2 border border-slate-400 rounded-full text-[#107BA2] bg-[#F8F5F0] hover:bg-gray-200">
                    Dihlabeng
                </button>
                <button class="px-4 py-2 border border-slate-400 rounded-full text-[#107BA2] bg-[#F8F5F0] hover:bg-gray-200">
                    Phuthaditjhaba
                </button>
                <button class="px-4 py-2 border border-slate-400 rounded-full text-[#107BA2] bg-[#F8F5F0] hover:bg-gray-200">
                    Mankweng
                </button>
                
               
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