@extends('layouts.app')

@section('content')


    <section class="relative w-full h-[350px] md:h-[450px]  overflow-hidden">
        <!-- Background Video -->


        <!-- Content Overlay -->
        <div class="relative z-10 flex flex-col  h-full   pt-[10px] md:pt-[186px]">
            <div class="wrapper">
                <div class="w-full h-full flex flex-col     gap-6">
                    <div class="w-full h-full flex flex-col text-[#107BA2]   gap-0">
                        <div
                            class="w-full text-[#107BA2] text-[48px] md:text-[64px] font-normal break-words pt-[180px]  md:pt-[20px]">
                            Our Statistics
                        </div>
                        <p class="text-[24px] font-inter font-light">
                            Subheading
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pb-[100px]">
        <div class="wrapper">
            <div class="section-3   font-inter ">
                <div class="flex flex-col gap-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-[#23b4e9] ">
                        <div class="flex flex-col bg-[#f3fcff]  rounded-2xl p-6 gap-4 ">
                            <b class="text-[64px] text-[#23b4e9]">156</b>
                            <b class="text-xl text-black">Hospitals supported with human milk banking services</b>
                        </div>
                        <div class="flex flex-col bg-[#f3fcff] border border-[#23b4e9] rounded-2xl p-6 gap-4">
                            <b class="text-[64px] text-[#23b4e9]">28229</b>
                            <b class="text-xl text-black">Units of breastmilk distributed countrywide</b>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        
                        <div class="flex flex-col bg-[#f3fcff] border border-[#23b4e9]  rounded-2xl p-6 gap-3.5">
                            <b class="text-[64px] text-[#23b4e9]">3074</b>
                            <b class="text-xl text-black">Infants fed human milk March 2023 - Feb 2024</b>
                        </div>
                        
                        <div class="flex flex-col bg-[#f3fcff] rounded-2xl p-6 gap-3.5">
                            <b class="text-[64px] text-[#23b4e9]">832</b>
                            <b class="text-xl text-black">Number of donors supplying breastmilk March 2023 - Feb 2024</b>
                        </div>
                        <div class="flex flex-col bg-[#f3fcff] border border-[#23b4e9] rounded-2xl p-6 gap-3.5">
                            <b class="text-[64px] text-[#23b4e9]">24</b>
                            <b class="text-xl text-black">Number of SABR human milk banking hospital facilities</b>
                        </div>
                        
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-3 gap-6">
                        
                        <div class="flex flex-col border border-[#23b4e9]   bg-[#f3fcff] col-span-2  rounded-2xl p-6 gap-3.5">
                            <b class="text-[64px] text-[#23b4e9]">22</b>
                            <b class="text-xl text-black">Situated in Public Hospitals</b>
                        </div>
                        <div class="flex flex-col bg-[#f3fcff] rounded-2xl p-6 gap-3.5">
                            <b class="text-[64px] text-[#23b4e9]">2</b>
                            <b class="text-xl text-black">Additional collection centres</b>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection