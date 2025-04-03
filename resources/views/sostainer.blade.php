@extends('layouts.app')

@section('content')

    <section class="relative w-full h-[750px] md:h-[750px]  overflow-hidden">
        <!-- Background Video -->
        <img class="absolute top-0 left-0 w-full h-full object-cover " src="{{ asset('images/sos-banner.png') }}"
            alt="Hero Image">

        <!-- Dark Overlay -->
        <div class="absolute top-0 left-0 w-full h-full  "></div>

        <!-- Content Overlay -->
        <div class="relative z-10 flex flex-col  h-full  wrapper pt-[180px] md:pt-[186px]">
            <div class="wrapper">
                <div class="w-full h-full flex flex-col     gap-6">
                    <div class="w-full h-full flex flex-col text-[#FEFEFD]   gap-6">
                        <div
                            class="w-full text-[#FEFEFD] block md:hidden text-[48px] md:text-[64px] font-normal break-words pt-[180px]  md:pt-[120px]">
                            SOStainer Mobile Clinics
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


                <!-- Right Container (Text) -->
                <div
                    class="we-are-more-than-just-a-breast-parent flex !items-start !justify-start gap-[28px] !text-[#E23E48]">

                    <div class="!text-[#E23E48] saving-lives-mobile sostainer   ">
                        <span class="text-[#E23E48]">Bringing <b>Maternal</b> and <b>Child Health</b> Closer to
                            <b>Communities</b> </span>

                    </div>
                    <div class="home-sec-1 font-light">
                        <div class="for-18-years-the-south-afric-wrapper font-inter font-light">
                            <div style="font-weight: 300" class="text-[24px] "> The SOStainer Mobile Clinics are a
                                groundbreaking innovation by the South African Breastmilk Reserve (SABR), bringing essential
                                maternal and child healthcare services directly to underserved communities. These versatile,
                                solar-powered facilities are designed to address critical health challenges in low-resource
                                settings, improving access to life-saving interventions for mothers and children under
                                five. 
                            </div>
                        </div>


                    </div>
                </div>

                <div class="">
                    <img src="{{asset('images/sos-baby.png')}}" alt="Placeholder Image" class="w-full  rounded-3xl">
                </div>
            </div>
        </div>
    </section>

    <section class="py-[128px]">
        <div class="wrapper ">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-[68px] !items-start">
                <div class="">
                    <img src="{{asset('images/sos-baby.png')}}" alt="Placeholder Image" class="w-full  rounded-3xl">
                </div>
                
                <div
                    class="we-are-more-than-just-a-breast-parent flex !items-start !justify-start gap-[28px] !text-[#E23E48]">

                    <div class="!text-[#E23E48] saving-lives-mobile sostainer   ">
                        <span class="text-[#E23E48]"><b>Concept</b> and <b>Vision </b></span>

                    </div>
                    <div class="home-sec-1 font-light">
                        <div class="for-18-years-the-south-afric-wrapper font-inter font-light">
                            <div style="font-weight: 300" class="text-[24px] ">The SOStainer Clinic embodies SABR’s
                                commitment to a holistic, life-cycle approach to health. While our initial focus was on
                                reducing neonatal mortality through donor breastmilk, the SOStainer expands this mission to
                                include a broader range of health services. Recognising that the health of infants is deeply
                                connected to maternal well-being and early childhood development, the SOStainer integrates
                                breastfeeding support with comprehensive primary care services. 
                            </div>
                        </div>


                    </div>
                </div>

                
            </div>
        </div>
    </section>

    <section class="py-[128px]">
        <div class="wrapper ">

            <div class="we-are-more-than-just-a-breast-parent flex !items-start !justify-start gap-[28px] !text-[#E23E48]">

                <div class="!text-[#E23E48] saving-lives-mobile sostainer   ">
                    <span class="text-[#E23E48]">Key <b>Services Provided</b> </span>

                </div>
                <div class="flex gap-6">
                    <img src="{{asset('images/eclip.svg')}}" />
                    <div>
                        <h3 class="get-in-touch font-inter font-bold text-[#666562]">Breastfeeding Support and Nutrition
                        </h3>
                        <div class="for-18-years-the-south-afric-wrapper font-inter font-light">
                            <div style="font-weight: 300" class="text-[24px] text-[#666562] ">Guidance for mothers to ensure
                                optimal infant feeding practices. 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex gap-6">
                    <img src="{{asset('images/eclip.svg')}}" />
                    <div>
                        <h3 class="get-in-touch font-inter font-bold text-[#666562]">Immunisations</h3>
                        <div class="for-18-years-the-south-afric-wrapper font-inter font-light">
                            <div style="font-weight: 300" class="text-[24px] text-[#666562] ">Vaccinations for children to
                                prevent life-threatening illnesses. 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex gap-6">
                    <img src="{{asset('images/eclip.svg')}}" />
                    <div>
                        <h3 class="get-in-touch font-inter font-bold text-[#666562]">Donor Breastmilk Processing</h3>
                        <div class="for-18-years-the-south-afric-wrapper font-inter font-light">
                            <div style="font-weight: 300" class="text-[24px] text-[#666562] ">Collection, pasteurisation,
                                and distribution of safe, nutrient-rich donor breastmilk. 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex gap-6">
                    <img src="{{asset('images/eclip.svg')}}" />
                    <div>
                        <h3 class="get-in-touch font-inter font-bold text-[#666562]">HIV Testing and Counselling</h3>
                        <div class="for-18-years-the-south-afric-wrapper font-inter font-light">
                            <div style="font-weight: 300" class="text-[24px] text-[#666562] ">Support for HIV prevention and
                                treatment. 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex gap-6">
                    <img src="{{asset('images/eclip.svg')}}" />
                    <div>
                        <h3 class="get-in-touch font-inter font-bold text-[#666562]">Nutrition Support</h3>
                        <div class="for-18-years-the-south-afric-wrapper font-inter font-light">
                            <div style="font-weight: 300" class="text-[24px] text-[#666562] ">Services aimed at preventing
                                stunting and improving overall health outcomes. 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex gap-6">
                    <img src="{{asset('images/eclip.svg')}}" />
                    <div>
                        <h3 class="get-in-touch font-inter font-bold text-[#666562]">Early Childhood Development (ECD)</h3>
                        <div class="for-18-years-the-south-afric-wrapper font-inter font-light">
                            <div style="font-weight: 300" class="text-[24px] text-[#666562] ">Programmes focused on the five
                                pillars of child development. 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex gap-6">
                    <img src="{{asset('images/eclip.svg')}}" />
                    <div>
                        <h3 class="get-in-touch font-inter font-bold text-[#666562]">Community Outreach</h3>
                        <div class="for-18-years-the-south-afric-wrapper font-inter font-light">
                            <div style="font-weight: 300" class="text-[24px] text-[#666562] ">Home visits and health
                                communication to expand the clinic’s impact. 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-[128px]">
        <div class="wrapper ">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-[98px] !items-start">
                <!-- Left Container (Image) -->
                <!-- Right Container (Text) -->
                <div
                    class="we-are-more-than-just-a-breast-parent flex !items-start !justify-start gap-[24px] !text-[#E23E48]">
                    <div class="!text-[#E23E48] saving-lives-mobile sostainer   ">
                        <span class="text-[#E23E48]">Addressing <b>Critical Needs</b> </span>
                    </div>
                    <div class="home-sec-1 font-light">
                        <div class="for-18-years-the-south-afric-wrapper font-inter font-light">
                            <div style="font-weight: 300" class="text-[24px] ">Located in Mankweng, Limpopo, the SOStainer
                                addresses significant barriers to healthcare access, including the lack of nearby clinics,
                                limited transportation, and inadequate infrastructure. This region faces high rates of
                                diarrhoeal disease, malnutrition, and respiratory infections, which are leading causes of
                                infant mortality. By providing care closer to home, the SOStainer ensures that mothers and
                                children receive timely, quality healthcare services.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <img src="{{asset('images/sos-baby.png')}}" alt="Placeholder Image" class="w-full rounded-3xl">
                </div>
            </div>
        </div>
    </section>

    <section class="py-[128px] bg-[#B03038]">
        <div class="wrapper">
            <div class="introducing-sosafe !font-inter !text-end md:text-[64px] text-[48px] font-bold !text-[#FEFEFD]">
                Beneficiaries and Impact
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-[98px] !items-start mt-10">
                <!-- Left Container (Image) -->
                <!-- Right Container (Text) -->
                <div
                    class="we-are-more-than-just-a-breast-parent flex !items-start !justify-start gap-[24px] !text-[#E23E48]">

                    <div class="home-sec-1 font-light">
                        <div class="for-18-years-the-south-afric-wrapper font-inter font-light">
                            <div style="font-weight: 300" class="text-[24px] text-white ">The SOStainer has brought
                                healthcare closer to one of Limpopo’s most underserved rural communities. The clinic has
                                improved immunisation rates, supported exclusive breastfeeding, and provided critical HIV
                                and nutritional services. In its first year, the SOStainer supported over 1,100 clinic
                                visits and reached an additional 2,900 mothers and children through household-level
                                interventions.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <img src="{{asset('images/baby3.jpg')}}" alt="Placeholder Image" class="w-full rounded-3xl">
                </div>
            </div>



        </div>
    </section>

    <section class="py-[128px]">
        <div class="wrapper ">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-[68px] !items-start">
                <!-- Left Container (Image) -->



                <!-- Right Container (Text) -->
                <div
                    class="we-are-more-than-just-a-breast-parent flex !items-start !justify-start gap-[28px] !text-[#E23E48]">

                    <div class="!text-[#E23E48] saving-lives-mobile sostainer   ">
                        <span class="text-[#E23E48]"><b>Partnerships </b> and <b>Collaboration</b></span>

                    </div>
                    <div class="home-sec-1 font-light">
                        <div class="for-18-years-the-south-afric-wrapper font-inter font-light">
                            <div style="font-weight: 300" class="text-[24px] ">The SOStainer project is supported by
                                partnerships with the Limpopo Department of Health, SACSoWACH, and other stakeholders. SABR
                                collaborates with technical experts, engineers, and academic institutions to ensure the
                                project’s success. Key contributors include Beyond Wireless for cold-chain support and
                                CleanRoom Technologies for solar and water solutions. 
                            </div>
                        </div>


                    </div>
                </div>
                <div class="">
                    <img src="{{asset('images/sos-baby.png')}}" alt="Placeholder Image" class="w-full  rounded-3xl">
                </div>

            </div>
        </div>
    </section>

    <section class="py-[128px]">
        <div class="wrapper ">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-[68px] !items-start">
                <!-- Left Container (Image) -->
                <div class="">
                    <img src="{{asset('images/sos-baby.png')}}" alt="Placeholder Image" class="w-full  rounded-3xl">
                </div>

                <!-- Right Container (Text) -->
                <div
                    class="we-are-more-than-just-a-breast-parent flex !items-start !justify-start gap-[28px] !text-[#E23E48]">

                    <div class="!text-[#E23E48] saving-lives-mobile sostainer   ">
                        <span class="text-[#E23E48]"><b>Scalability </b> and <b>Sustainability</b></span>

                    </div>
                    <div class="home-sec-1 font-light">
                        <div class="for-18-years-the-south-afric-wrapper font-inter font-light">
                            <div style="font-weight: 300" class="text-[24px] ">As a modular, adaptable facility, the
                                SOStainer has the potential to scale beyond its pilot in Mankweng. Its success has paved the
                                way for broader implementation across Limpopo and other provinces, providing a flexible,
                                cost-effective solution to healthcare delivery in low-resource environments.
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
                <b>Recognitions</b> <span class="font-thin">& </span><b>Awards</b>
            </div>

            <p class="text-[#FEFEFD] text-[24px] pt-[28px]">
                The SOStainer project earned the Discovery Foundation Excellence Award in 2018 for its innovative approach
                to improving maternal and child health. It continues to exemplify SABR’s mission to bring life-saving
                services to the most vulnerable populations.
            </p>



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
                                Join Us in<br> <span class="font-bold">Expanding Impact</span>
                            </div>
                            <div class="self-stretch h-auto flex flex-col justify-start items-start gap-6">
                                <p class="self-stretch text-[#FEFEFD] text-2xl font-normal">
                                    The SOStainer Mobile Clinics demonstrate what’s possible when innovation meets
                                    commitment. Partner with SABR to scale this transformative initiative and bring health
                                    and hope to more communities in need. 
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