@extends('layouts.app')
@section('title', 'SABR: South African Breastmilk Reserve - Why the Cost')
@section('meta-description', 'South African Breastmilk Reserve - Bringing milk to babies, safely.')
@section('content')
    <section class="relative w-full   overflow-hidden !bg-white">
        <!-- Background Video -->


        <!-- Content Overlay -->
        <div class="relative z-10 flex flex-col  h-full   pt-[10px] md:pt-[186px]">
            <div class="wrapper">
                <div class="w-full h-full flex flex-col     gap-6">
                    <div class="w-full h-full flex flex-col text-[#107BA2]   gap-0">
                        <div
                            class="w-full text-[#107BA2] text-[48px] md:text-[64px] font-normal break-words pt-[180px]  md:pt-[20px]">
                            Why The Cost?
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pb-20 !bg-white">
        <div class="wrapper bg-white">
            <img src="{{asset('images/SABR_WhatsTheBuzz_page-0001.jpg')}}" class="w-full h-full pt-[0px]  bg-white"/>
            <p class="text-center text-[24px] font-[300] font-inter my-6"><a class="underline cursor-pointer text-blue-600 " target="_blank" href="{{ asset('documents/SABR_WhatsTheBuzz.pdf') }}">Download</a> What's the buzz document</p>
        </div>
    
        
        </div>
    </section>

    {{-- <section class="pb-20 !bg-white">
        <div class="wrapper ">
            <img src="{{asset('images/whycost.png')}}" class="w-full mb-6"/>
            <p class="text-[24px] font-inter font-[300] text-black">
                Dear SABR partners and stakeholders,
<br><br>
Here at the SABR, we believe that the survival of our organisation, and especially the survival of 'our babies', are mandatory! However, in order to ensure our sustainability and continued compliance with the National Department of Health's proposed Regulatory Framework for Human Milk Banking, it has become necessary for us to make some changes.
<br><br>
Our vision is survival: both the survival of premature babies and of the SABR, by becoming sustainable in the long term. Vulnerable, low birth weight infants - your patients and children - are the reason we exist. For the SABR to continue helping them through the provision of breastmilk, we depend on the support of all stakeholders and role-players in the human milk banking endeavour.
<br><br>
While the SABR is a non-profit human milk banking organisation, our primary goal is breastfeeding advocacy and promotion - especially considering the low breastfeeding rates in South Africa. Human milk banking cannot exist without breastfeeding mothers; as such, maternal lactation remains the key intervention in promoting baby-friendly values. As part of the South African breastfeeding community, we wish to collaborate with our prescribing doctors in reaching a shared understanding of the ethical values governing the equitable distribution donor breastmilk, as with all donated tissues and organs. We have an ethical obligation to ensure the safe and appropriate use of our product (see our work aid 'Promoting the Safe Use of Donor Breastmilk'), as well as the equitable distribution to babies in both private and public institutions.
<br><br>
At current capacity, the SABR is able to supply donor breastmilk to infants weighing under 1.8kg and younger than 14 days, for a period of 14 days (with the possibility of an extension to 28 days in certain cases). We hope that with the expansion of breastfeeding in South Africa, we will be able to extend these guidelines in order to help many other babies in need.
            </p>
            <p class="text-[24px] font-inter font-[300] text-black text-end mt-[28px]">
                The SABR follows a universal guideline that includes all infants below 37 weeks’ gestation. The largest amount of donor breastmilk is directed to public hospital facilities.
            </p>
            <img src="{{asset('images/banner2.png')}}" class="w-full my-6"/>
            <p class="text-[24px] font-inter font-[300] text-black">
                We aim to continue providing the best quality product at the lowest price. Our new pricing structure (as per the most recent 'SABR Pricelist' and 'SABR Packages') for facilities that do not currently have service-level agreements will be implemented as of October 2016. 'Sister Joy' will regularly update you via our monthly 'What's the Buzz?' newsletter. Please feel free to contact us to discuss any questions or queries you might have.
<br><br>We trust that you understand that this change is necessary, in order for the SABR to keep providing safe and sustainable donor breastmilk that is equally accessible to all babies in need. We look forward to many more years of contributing this life-saving service!
            </p>

            <p class="text-center text-[24px] font-[300] font-inter"><a class="underline cursor-pointer text-blue-600 py-6" target="_blank" href="{{ asset('documents/SABR_WhatsTheBuzz.pdf') }}">Download</a> What's the buzz document</p>
        </div>
    </section> --}}
    {{-- <section class="pt-[50px] pb-[128px]">
        <div class="wrapper">
            <img src="{{asset('images/why-the cost.png')}}" class="w-full h-full"/>

            <h3 class="py-[42px] text-[32px] font-bold font-inter text-[#107BA2]">
                News
            </h3>
            <div class="flex flex-col md:flex-row items-start gap-10 w-full h-full">
                <img class="w-full md:w-[603px]  rounded-xl" src="{{asset('images/baby5.jpg')}}" alt="Placeholder Image">
                
                <div class="w-full md:w-[479px] flex flex-col gap-7">
                    <div class="text-black text-lg  font-inter  text-right">
                        The SABR functions as a co-ordinating body for the equitable distribution of life-saving DBM country wide and is geared towards delivering DBM to every part of South Africa within 24 to 48 hours, whilst ensuring that it is of the highest quality and meets regulatory standards.
                    </div>
                    
                    <div class="flex flex-col gap-7">
                        <div class="text-black text-2xl font-inter   font-normal text-right">
                            The SABR follows a universal guideline that includes all infants below 37 weeks’ gestation. The largest amount of donor breastmilk is directed to public hospital facilities.
                        </div>
                        <div class="text-black text-2xl font-inter   font-normal text-right">
                            The SABR follows a universal guideline that includes all infants below 37 weeks’ gestation. The largest amount of donor breastmilk is directed to public hospital facilities.
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

    </section> --}}
@endsection