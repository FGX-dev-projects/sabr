@extends('layouts.app')

@section('content')

<section class="relative w-full  h-300px] md:h-[450px] overflow-hidden">
    <!-- Background Video -->


    <!-- Content Overlay -->
    <div class="relative z-10 flex flex-col  h-full   pt-[10px] md:pt-[186px]">
        <div class="wrapper">
            <div class="w-full h-full flex flex-col     gap-6">
                <div class="w-full h-full flex flex-col text-[#107BA2]   gap-0">
                    <div
                        class="w-full text-[#107BA2] text-[48px] md:text-[64px] font-normal break-words pt-[180px]  md:pt-[20px]">
                        Latest News
                    </div>
                    <p class="text-[24px] font-inter">
                        With your help, SABR will be able to help more babies every year. Read on to find out what we've been up to, our latest fundraising ventures, and news on how donated breastmilk is changing lives
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pt-50 pb-[128px]">
    <div class="wrapper">
        <div class="w-full h-full flex flex-col md:flex-row justify-end items-start gap-[46px] md:gap-[96px] mt-5 ">
            <!-- Top image on mobile, left on desktop -->
            <img class="object-cover order-0 " src="{{asset('images/why-breast.png')}}" />
        
            <div class="w-full md:w-[781px] flex flex-col justify-start items-start gap-2.5">
                <div class="w-full px-4 py-3 bg-[#FAF8F5] rounded-xl border border-[#DEDAD4] flex flex-col md:flex-row justify-start gap-3">
                    <!-- Second image (on top in mobile view) -->
                    <img src="{{asset('images/baby3.jpg')}}" class="w-full md:w-[361.69px] h-auto rounded-2xl order-0 md:order-0" />
        
                    <div class="flex-1 flex flex-col justify-between gap-1 order-1 md:order-0">
                        <div class="flex flex-col justify-start items-start gap-3">
                            <h2 class="text-[#868480] text-2xl font-bold font-inter">COVID-19 linked to increase in infant and maternal deaths</h2>
                            <p class="text-[#868480] text-lg font-light font-inter">
                                Monday, 8th February 2021<br>
                                Evidence suggests that there has been an increase in maternal and perinatal mortality rates due to the COVID-19 pandemic and the nationwide lockdown... Read More
                            </p>
                        </div>
                        <div class="flex items-end justify-end gap-2.5">
                            <div class="px-2 py-1 bg-[#F4F0E9] rounded-md text-[#ADAAA5] text-base font-inter font-normal">12 Aug</div>
                        </div>
                    </div>
                </div> 
                <div class="w-full px-4 py-3 bg-[#FAF8F5] rounded-xl border border-[#DEDAD4] flex flex-col md:flex-row justify-start gap-3">
                    <!-- Second image (on top in mobile view) -->
                    <img src="{{asset('images/baby3.jpg')}}" class="w-full md:w-[361.69px] h-auto rounded-2xl order-0 md:order-0" />
        
                    <div class="flex-1 flex flex-col justify-between gap-1 order-1 md:order-0">
                        <div class="flex flex-col justify-start items-start gap-3">
                            <h2 class="text-[#868480] text-2xl font-bold font-inter">COVID-19 linked to increase in infant and maternal deaths</h2>
                            <p class="text-[#868480] text-lg font-light font-inter">
                                Monday, 8th February 2021<br>
                                Evidence suggests that there has been an increase in maternal and perinatal mortality rates due to the COVID-19 pandemic and the nationwide lockdown... Read More
                            </p>
                        </div>
                        <div class="flex items-end justify-end gap-2.5">
                            <div class="px-2 py-1 bg-[#F4F0E9] rounded-md text-[#ADAAA5] text-base font-inter font-normal">12 Aug</div>
                        </div>
                    </div>
                </div> 
                <div class="w-full px-4 py-3 bg-[#FAF8F5] rounded-xl border border-[#DEDAD4] flex flex-col md:flex-row justify-start gap-3">
                    <!-- Second image (on top in mobile view) -->
                    <img src="{{asset('images/baby3.jpg')}}" class="w-full md:w-[361.69px] h-auto rounded-2xl order-0 md:order-0" />
        
                    <div class="flex-1 flex flex-col justify-between gap-1 order-1 md:order-0">
                        <div class="flex flex-col justify-start items-start gap-3">
                            <h2 class="text-[#868480] text-2xl font-bold font-inter">COVID-19 linked to increase in infant and maternal deaths</h2>
                            <p class="text-[#868480] text-lg font-light font-inter">
                                Monday, 8th February 2021<br>
                                Evidence suggests that there has been an increase in maternal and perinatal mortality rates due to the COVID-19 pandemic and the nationwide lockdown... Read More
                            </p>
                        </div>
                        <div class="flex items-end justify-end gap-2.5">
                            <div class="px-2 py-1 bg-[#F4F0E9] rounded-md text-[#ADAAA5] text-base font-inter font-normal">12 Aug</div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
        
    </div>
    
    
</section>

@endsection