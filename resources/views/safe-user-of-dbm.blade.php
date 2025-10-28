@extends('layouts.app')
@section('title', 'SABR: South African Breastmilk Reserve - Safe User of DBM')
@section('meta-description', 'South African Breastmilk Reserve - Bringing milk to babies, safely.')
@section('content')

<section class="relative w-full pb-[80px]">
    <div style="" class="wrapper  pb-[30px] ">
        <img src="{{asset('images/safe-user.png')}}" class="w-full h-full pt-[0px] md:mt-[200px] mt-[200px]"/>
    </div>

    <p class="text-center text-[24px] font-[300] font-inter"><a class="underline cursor-pointer text-blue-600 pb-5" target="_blank" href="{{ asset('images/SABR_WorkAid_PromotingTheSafeUse201806.pdf') }}">Download</a> the "SABR: Promoting the Safe Use of Donor Milk" PDF document (703Kb)</p>
</section>

@endsection