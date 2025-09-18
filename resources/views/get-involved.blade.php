@extends('layouts.app')
@section('title', 'SABR: South African Breastmilk Reserve - Get Involved')
@section('meta-description', 'South African Breastmilk Reserve - Bringing milk to babies, safely.')
@section('content')
<style>
    .pills{
        background-color: rgba(16, 123, 162, 0.15);
        font-size: 11px;
        font-weight:300 !important; 
    }
</style>

<section class="relative w-full h-[350px] md:h-[350px] bg-primary-purple overflow-hidden">
    <!-- Content Overlay -->
    <div class="relative z-10 flex flex-col h-full pt-[10px] md:pt-[186px]">
        <div class="wrapper">
            <div class="w-full h-full flex flex-col gap-6">
                <div class="w-full h-full flex flex-col text-[#fff] gap-0">
                    <div class="w-full text-[#fff] text-[48px] md:text-[64px] font-normal break-words pt-[180px] md:pt-[20px]">
                        Get Involved
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="w-full relative bg-primary-purple overflow-hidden flex flex-col items-center wrapper pb-20 box-border gap-10 text-left text-lg text-white font-inter">
        <!-- Cards Container -->
        <div class="w-full flex flex-wrap justify-center gap-6">

            <!-- Donate Breastmilk Card -->
            <div class="w-full sm:w-[48%] rounded-3xl bg-card-bg border border-card-border overflow-hidden flex flex-col items-start justify-start relative h-[320px] group hover:shadow-lg transition-all duration-300">
                <div class="absolute -top-48 -left-96 w-full h-full backdrop-blur-2xl opacity-20"></div>
                <div class="w-full bg-card-bg border-white h-full flex flex-col items-start justify-center p-6 z-10 relative">
                    <div class="self-stretch flex-1 relative">
                        <div class="absolute top-0 left-0 w-full flex flex-row items-center justify-between">
                            <a href="{{route('donate')}}" class="rounded-md bg-primary-purple flex flex-row items-center justify-center px-3 py-2">
                                <span class="font-bold text-sm">Register</span>
                            </a>
                            <div class="w-8 h-8 rounded-full flex items-center justify-center">
                                <img class="w-8 h-8" alt="" src="{{asset('images/holding-hands-icon.svg')}}">    
                            </div>
                        </div>
                        <div class="absolute top-12 left-0 w-full">
                            <h3 class="text-2xl font-work-sans font-semibold mb-2 text-white">Donate Breastmilk</h3>
                            <p class="text-lg font-light font-inter text-white/90">Your milk can provide vital nourishment for babies in need.</p>
                        </div>
                        <div class="absolute bottom-0 right-0 flex flex-row items-end justify-end">
                            <a href="{{route('donate')}}" class="flex flex-row items-center gap-2 group-hover:gap-3 transition-all duration-300">
                                <span class="text-lg font-[300]">Give Hope</span>
                                <div class="w-5 h-5 flex items-center justify-center">
                                    <img alt="" src="{{asset('images/right-arrwow.svg')}}">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Volunteer Card -->
            <div class="w-full sm:w-[48%] rounded-3xl bg-card-bg border border-card-border overflow-hidden flex flex-col items-start justify-start relative h-[320px] group hover:shadow-lg transition-all duration-300">
                <div class="w-full bg-card-bg border border-card-border h-full flex flex-col items-start justify-center p-6 z-10 relative">
                    <a href="{{route('volunteer')}}" class="self-stretch flex-1 relative">
                        <div class="absolute top-0 left-0 w-full flex flex-row items-center justify-between">
                            <div class="rounded-md bg-primary-purple flex flex-row items-center justify-center px-3 py-2">
                                <span class="font-bold text-sm">Register</span>
                            </div>
                            <div class="w-8 h-8 rounded-full flex items-center justify-center">
                                <img class="w-8 h-8" alt="" src="{{asset('images/Alarm.svg')}}">    
                            </div>
                        </div>
                        <div class="absolute top-12 left-0 w-full">
                            <h3 class="text-2xl font-work-sans font-semibold mb-2 text-white">Volunteer Your Time</h3>
                            <p class="text-lg font-light font-inter text-white/90">From collections and deliveries to assisting the SABR team, volunteers help us make it all happen.</p>
                        </div>
                        <div class="absolute bottom-0 right-0 m-5 flex flex-row items-end justify-end">
                            <span class="text-lg font-[300]">Begin Helping Today</span>
                            <div class="w-5 h-5 flex items-center justify-center">
                                <img alt="" src="{{asset('images/right-arrwow.svg')}}">
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Financial Donation Card -->
            <div class="w-full sm:w-[48%] rounded-3xl bg-card-bg border border-card-border overflow-hidden flex flex-col items-start justify-start relative h-[320px] group hover:shadow-lg transition-all duration-300">
                <div class="w-full bg-card-bg border border-card-border h-full flex flex-col items-start justify-center p-6 z-10 relative">
                    <a href="https://payfast.co.za/donate/go/southafricanbreastmilkreserve" class="self-stretch flex-1 relative">
                        <div class="absolute top-0 left-0 w-full flex flex-row items-center justify-between">
                            <div class="rounded-md bg-primary-purple flex flex-row items-center justify-center px-3 py-2">
                                <span class="font-bold text-sm">Register</span>
                            </div>
                            <div class="w-9 h-9 rounded-full flex items-center justify-center">
                                <img class="w-8 h-8" src="{{asset('images/Heart_01.png')}}"/>
                            </div>
                        </div>
                        <div class="absolute top-12 left-0 w-full">
                            <h3 class="text-2xl font-work-sans font-semibold mb-2 text-white">Donate</h3>
                            <p class="text-lg font-light font-inter text-white/90">Help us save lives. Your financial contribution supports SABR's programmes, bringing life-saving donor breastmilk and care to vulnerable infants across SA.</p>
                        </div>
                        <div class="absolute bottom-0 right-0 m-5 flex flex-row items-end justify-end">
                            <span class="text-lg font-[300]">Fund a Miracle</span>
                            <div class="w-5 h-5 flex items-center justify-center">
                                <img alt="" src="{{asset('images/right-arrwow.svg')}}">
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Parent Card -->
            <div class="w-full sm:w-[48%] rounded-3xl bg-card-bg border border-card-border overflow-hidden flex flex-col items-start justify-start relative h-[320px] group hover:shadow-lg transition-all duration-300">
                <div class="flex-1 flex flex-col items-start justify-start p-6 z-10 relative">
                    <a href="{{route('register')}}" class="self-stretch flex flex-col items-start justify-start gap-4">
                        <div class="self-stretch flex flex-row items-center justify-between">
                            <div class="rounded-md bg-primary-purple flex flex-row items-center justify-center px-3 py-2">
                                <span class="font-bold text-sm text-white">Register</span>
                            </div>
                            <div class="w-8 h-8 rounded-full flex items-center justify-center">
                                <img class="w-8 h-8" src="{{asset('images/icon-child.svg')}}"/> 
                            </div>
                        </div>
                        <div class="self-stretch flex flex-col items-start justify-start gap-3">
                            <h3 class="self-stretch text-2xl font-work-sans font-semibold text-white">I am a Parent</h3>
                            <p class="w-full text-lg font-light font-inter text-white/90">If your baby can't receive milk from you, we're here to help. Donated breastmilk is love in liquid form - giving your child the best possible start when they need it most.</p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Clinician Card -->
            <div class="w-full sm:w-[48%] bg-[#9f9ab1] shadow-[0px_0px_12px_rgba(0,0,0,0.45)] rounded-3xl border border-white overflow-hidden flex flex-col items-start justify-center relative h-[320px] group hover:shadow-xl transition-all duration-300">
                <div class="self-stretch flex-1 flex flex-col items-start justify-start p-6 z-10 relative">
                    <div class="self-stretch flex-1 flex flex-col items-start justify-start gap-4">
                        <div class="self-stretch flex flex-row items-center justify-between">
                            <div class="rounded-md bg-pill-bg flex flex-row items-center justify-center px-3 py-2">
                                <span class="font-bold text-sm text-white">Coming Soon</span>
                            </div>
                            <div class="w-8 h-8 rounded-full flex items-center justify-center">
                                <img class="w-8 h-8" src="{{asset('images/doctor-icon.svg')}}"/>
                            </div>
                        </div>
                        <div class="self-stretch flex flex-col items-start justify-start gap-3">
                            <h3 class="self-stretch text-2xl font-work-sans font-semibold text-white">I am a Clinician</h3>
                            <p class="self-stretch text-lg font-light font-inter text-white whitespace-pre-wrap">If your baby can't receive milk from you, we're here to help. Donated breastmilk is love in liquid form - giving your child the best possible start when they need it most.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
