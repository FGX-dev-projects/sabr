@extends('layouts.app')

@section('content')


    <section class="relative w-full h-[150px] md:h-[310px]  overflow-hidden">
        <!-- Background Video -->


        <!-- Content Overlay -->
        <div class="relative z-10 flex flex-col  h-full   pt-[10px] md:pt-[186px]">
            <div class="wrapper">
                <div class="w-full h-full flex flex-col     gap-6">
                    <div class="w-full h-full flex flex-col text-[#107BA2]   gap-0">
                        <div
                            class="w-full text-[#107BA2] text-[48px] md:text-[64px] font-normal break-words pt-[180px]  md:pt-[20px]">
                            Board of Directors
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pb-[80px]">
        <div class="wrapper">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-4 gap-6 font-inter ">
                <div class="bg-white rounded-2xl border border-gray-300 overflow-hidden shadow-lg flex flex-col ">
                    <img src="{{ asset('images/gray-block1.png') }}" alt="User Image" class="w-full h-64 object-cover">
                    <div class="p-6 ">
                        <p class="text-lg font-bold  text-[#107ba2]">Ms Stasha Jordan</p>
                        <p class="text-[#107ba2] text-lg">Executive Director</p>
                    </div>
                </div>
                <div class="bg-white rounded-2xl border border-gray-300 overflow-hidden shadow-lg flex flex-col ">
                    <img src="{{ asset('images/gray-block1.png') }}" alt="User Image" class="w-full h-64 object-cover">
                    <div class="p-6 ">
                        <p class="text-lg font-bold  text-[#107ba2]">Mr Jeremy Druker </p>
                        <p class="text-[#107ba2] text-lg">Chairperson</p>
                    </div>
                </div>
                <div class="bg-white rounded-2xl border border-gray-300 overflow-hidden shadow-lg flex flex-col ">
                    <img src="{{ asset('images/gray-block1.png') }}" alt="User Image" class="w-full h-64 object-cover">
                    <div class="p-6 ">
                        <p class="text-lg font-bold  text-[#107ba2]">Prof Suzanne Delport</p>
                        <p class="text-[#107ba2] text-lg">Director</p>
                    </div>
                </div>
                <div class="bg-white rounded-2xl border border-gray-300 overflow-hidden shadow-lg flex flex-col ">
                    <img src="{{ asset('images/gray-block1.png') }}" alt="User Image" class="w-full h-64 object-cover">
                    <div class="p-6 ">
                        <p class="text-lg font-bold  text-[#107ba2]">Dr Mhleli Masango</p>
                        <p class="text-[#107ba2] text-lg">Director</p>
                    </div>
                </div>
                <div class="bg-white rounded-2xl border border-gray-300 overflow-hidden shadow-lg flex flex-col ">
                    <img src="{{ asset('images/gray-block1.png') }}" alt="User Image" class="w-full h-64 object-cover">
                    <div class="p-6 ">
                        <p class="text-lg font-bold  text-[#107ba2]">Mr Ayanda Ntsho</p>
                        <p class="text-[#107ba2] text-lg">Director</p>
                    </div>
                </div>
                <div class="bg-white rounded-2xl border border-gray-300 overflow-hidden shadow-lg flex flex-col ">
                    <img src="{{ asset('images/gray-block1.png') }}" alt="User Image" class="w-full h-64 object-cover">
                    <div class="p-6 ">
                        <p class="text-lg font-bold  text-[#107ba2]">Ziyanda Buthelezi</p>
                        <p class="text-[#107ba2] text-lg">Director</p>
                    </div>
                </div>
                <div class="bg-white rounded-2xl border border-gray-300 overflow-hidden shadow-lg flex flex-col ">
                    <img src="{{ asset('images/gray-block1.png') }}" alt="User Image" class="w-full h-64 object-cover">
                    <div class="p-6 ">
                        <p class="text-lg font-bold  text-[#107ba2]">Nomathemba Chandiwana</p>
                        <p class="text-[#107ba2] text-lg">Director</p>
                    </div>
                </div>
                
                
            </div>
        </div>
    </section>
    @endsection