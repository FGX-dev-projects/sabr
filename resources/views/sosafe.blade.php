@extends('layouts.app')

@section('content')

    <section class="relative w-full h-[750px] md:h-[750px]  overflow-hidden">
        <!-- Background Video -->
        <img class="absolute top-0 left-0 w-full h-full object-cover" src="{{ asset('images/sosafe-bg.png') }}"
            alt="Hero Image">

        <!-- Dark Overlay -->
        <div class="absolute top-0 left-0 w-full h-full  "></div>

        <!-- Content Overlay -->
        <div class="relative z-10 flex flex-col  h-full  wrapper pt-[180px] md:pt-[186px]">
            <div class="wrapper">
                <div class="w-full h-full flex flex-col items-center  justify-center  gap-6">
                    <div class="w-full h-full flex flex-col text-[#FEFEFD]   gap-6">
                        <div class="w-full text-[#FEFEFD] text-[48px] md:text-[64px] font-normal break-words">
                            Introducing the <span class="font-bold">SoSAFE Pasteuriser</span>
                        </div>
                        <div class="join-us-in">
                            Engineered by SABR to address the critical need for reliable donor breastmilk processing, SoSAFE
                            ensures the highest level of safety and preserves essential nutrients. Join us in transforming
                            infant care worldwide.
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
                    <img src="{{asset('images/machine.png')}}" alt="Placeholder Image" class="w-full max-h-[700px] ">
                </div>

                <!-- Right Container (Text) -->
                <div class="we-are-more-than-just-a-breast-parent !justify-start gap-[120px]">

                    <div class="saving-lives-mobile text-[#B2CB14] ">
                        <span>A New Standard in </span>
                        <b class="breastmilk-bank !text-[#B2CB14]">Breastmilk Safety</b>
                    </div>
                    <div class="home-sec-1">
                        <div class="for-18-years-the-south-afric-wrapper">
                            <div class="we-are-more-container">The SoSAFE Pasteuriser is SABR’s latest innovation designed
                                to ensure the highest safety standards in human milk banking.
                                <br><br>
                                This advanced pasteurisation system was developed to deliver safe, nutrient-rich donor
                                breastmilk to infants, particularly in low-resource settings, where reliable, cost-effective
                                solutions are crucial.
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-[128px] bg-[#23B4E9]">
        <div class="wrapper">
            <div class="introducing-sosafe md:text-[64px] text-[48px] !text-[#FEFEFD]">
                Features of SoSAFE
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 py-[64px]">
                <div
                    class="max-w-[377px] max-h-[431px] relative backdrop-blur-lg rounded-2xl bg-[#20A4D4] border border-[#6CCDF0]  flex flex-col items-end justify-start p-8 text-right text-2xl text-[#23b4e9] font-['Work_Sans']">
                    <div class="flex flex-col items-end justify-between flex-1 w-full">
                        <b class="w-full relative text-[#FEFEFD] text-[32px]">Affordable and<br> Accessible</b>
                        <div class="w-full text-left relative text-xl text-[#FEFEFD]">
                            SoSAFE is designed with affordability and scalability in mind, making it an ideal option for
                            hospitals and milk banks globally. Its accessible design ensures it can be easily adopted in
                            diverse healthcare settings.
                        </div>
                    </div>
                </div>

                <div
                    class="max-w-[377px] max-h-[431px] relative backdrop-blur-lg rounded-2xl bg-[#20A4D4] border border-[#6CCDF0]  flex flex-col items-end justify-start p-8 text-right text-2xl text-[#23b4e9] font-['Work_Sans']">
                    <div class="flex flex-col items-end justify-between flex-1 w-full gap-8">
                        <b class="w-full relative text-[#FEFEFD] text-[32px]">High Safety <br>Standards</b>
                        <div class="w-full text-left flex justify-start relative text-xl text-[#FEFEFD]">
                            Certified for IEC laboratory equipment safety, SoSAFE eliminates pathogens while retaining the
                            essential nutrients and bioactive components in breastmilk, providing infants with the best
                            possible nutrition.
                        </div>
                    </div>
                </div>

                <div
                    class="max-w-[377px] max-h-[431px] relative backdrop-blur-lg rounded-2xl bg-[#20A4D4] border border-[#6CCDF0]  flex flex-col items-end justify-start p-8 text-right text-2xl text-[#23b4e9] font-['Work_Sans']">
                    <div class="flex flex-col items-end justify-between flex-1 w-full ">
                        <b class="w-full relative text-[#FEFEFD] text-[32px]">Efficient <br>Processing</b>
                        <div class="w-full relative text-left text-xl text-[#FEFEFD]">
                            The SoSAFE Pasteuriser streamlines the pasteurisation process, reducing time and costs for
                            facilities without compromising safety or quality.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-[128px]">
        <div class="wrapper ">
            <div class="grid grid-cols-1  md:grid-cols-2 gap-[68px]">
                <!-- Left Container (Image) -->

                <div class="flex-1">
                    <div class="make-your-hospital-container !text-[#B2CB14]">
                        <span>Why <b>SoSAFE</b> <br>Matters</span>
                        
                    </div>
                    <div class="home-sec-1">
                        
                        <div class="milk-banking-facilities-nation-parent">
                            <div class="we-are-more-container">
                                <b class="cutting-edge-solutions font-[Inter] text-[#666562]">Pathogen Elimination</b>
                                <ul class="featuring-sosafes-innovative-container pl-8 " style="list-style: disc;">
                                    <li class="font-normal text-[18px] font-medium">SoSAFE ensures breastmilk is free from harmful bacteria and viruses, providing a safe source of nutrition for infants in neonatal intensive care units (NICUs).

                                    </li>
                                </ul>
                            </div>

                            <div class="we-are-more-container">
                                <b class="cutting-edge-solutions font-[Inter] text-[#666562]">Nutrient Preservation</b>
                                <ul class="featuring-sosafes-innovative-container pl-8 " style="list-style: disc;">
                                    <li class="font-normal text-[18px] font-medium">Unlike traditional methods, SoSAFE retains the critical proteins, antibodies, and growth factors that make breastmilk an unparalleled source of nourishment.</li>
                                </ul>
                            </div>

                            <div class="we-are-more-container">
                                <b class="cutting-edge-solutions  text-[#666562]">Equitable Access</b>
                                <ul class="featuring-sosafes-innovative-container pl-8 " style="list-style: disc;">
                                    <li class="font-normal text-[18px] font-medium">By simplifying and reducing the cost of pasteurisation, the SoSAFE Pasteuriser enables more hospitals and communities to provide life-saving donor milk, especially in resource-limited settings.</li>
                                </ul>
                            </div>


                        </div>


                    </div>
                </div>


                <div class="image">
                    <img src="{{asset('images/sosafe-img.png')}}" alt="Placeholder Image"
                        class=" max-w-[300px] md:max-h-[640px] md:max-w-[543px]">
                </div>

                <!-- Right Container (Text) -->

            </div>
        </div>
    </section>

    <section class="py-[128px] bg-[#8B9E10]">
        <div class="wrapper">
            <div class="introducing-sosafe md:text-[64px] text-[48px] !text-[#FEFEFD]">
                Commitment to Equitable Access
            </div>

            <p class="text-[#FEFEFD] text-[24px] py-[64px]">
            At SABR, we believe that every infant deserves the chance to thrive, regardless of where they are born. Equitable access to safe, nutrient-rich donor breastmilk is a cornerstone of our mission, and the SoSAFE Pasteuriser plays a pivotal role in achieving this vision.
<br><br>
By making pasteurisation affordable and accessible, SoSAFE empowers hospitals and communities in underserved regions to bridge the gap in neonatal care. This innovation not only reduces disparities in infant health outcomes but also ensures that even the most vulnerable babies can benefit from the life-saving properties of breastmilk.
            </p>

            <div class="flex items-center justify-center">
                <img src="{{asset('images/sosafe-video.png')}}"/>
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