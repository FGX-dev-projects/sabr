@extends('layouts.app')
@section('title', 'SABR: South African Breastmilk Reserve - Toolkit Access Value')
@section('meta-description', 'South African Breastmilk Reserve - Bringing milk to babies, safely.')
@section('content')

<section class="relative w-full    overflow-hidden">
    <div style="" class="wrapper  pb-[50px] ">
        <img src="{{asset('images/toolkit.jpg')}}" class="w-full h-full pt-[0px] md:mt-[200px] mt-[200px]"/>
        <p class="text-center font-inter font-[300] my-5"><a class="underline cursor-pointer text-blue-600 mt-5" target="_blank" href="{{ asset('images/SABR_WorkAid_AccessValueDBM201806.pdf') }}">Download</a> the "SABR: How to Access Donor Breastmilk / The Value of Donor Breastmilk" PDF document (751Kb)</p>
    </div>

    
</section>

@endsection