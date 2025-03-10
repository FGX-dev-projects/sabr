@extends('layouts.app')

@section('content')
<section class="relative w-full h-[750px] md:h-[750px]  overflow-hidden">
    <!-- Background Video -->
    <img class="absolute top-0 left-0 w-full h-full object-cover " src="{{ asset('images/feed-for-life-banner.png') }}"
        alt="Hero Image">

    <!-- Dark Overlay -->
    <div class="absolute top-0 left-0 w-full h-full  "></div>

    <!-- Content Overlay -->
    <div class="relative z-10 flex flex-col  h-full  wrapper pt-[180px] md:pt-[186px]">
        <div class="wrapper">
            <div class="w-full h-full flex flex-col     gap-6">
                <div class="w-full h-full flex flex-col text-[#FEFEFD]   gap-6">
                    <div
                        class="w-full text-[#FEFEFD] text-[48px] md:text-[64px] font-normal break-words pt-[180px]  md:pt-[195px]">
                        Our Impact 
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

@endsection