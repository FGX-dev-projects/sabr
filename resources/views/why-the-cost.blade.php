@extends('layouts.app')

@section('content')
    <section class="relative w-full h-[610px] md:h-[390px]  overflow-hidden">
        <!-- Background Video -->


        <!-- Content Overlay -->
        <div class="relative z-10 flex flex-col  h-full   pt-[10px] md:pt-[186px]">
            <div class="wrapper">
                <div class="w-full h-full flex flex-col     gap-6">
                    <div class="w-full h-full flex flex-col text-[#107BA2]   gap-0">
                        <div
                            class="w-full text-[#107BA2] text-[48px] md:text-[64px] font-normal break-words pt-[180px]  md:pt-[20px]">
                            COVID-19 linked to increase in infant and maternal deaths
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pt-[50px] pb-[128px]">
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

    </section>
@endsection