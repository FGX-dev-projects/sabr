@extends('layouts.app')

@section('content')


<section class="relative w-full h-[350px] md:h-[350px]  overflow-hidden">
    <!-- Content Overlay -->
    <div class="relative z-10 flex flex-col  h-full   pt-[10px] md:pt-[186px]">
        <div class="wrapper">
            <div class="w-full h-full flex flex-col     gap-6">
                <div class="w-full h-full flex flex-col text-[#107BA2]   gap-0">
                    <div
                        class="w-full text-[#107BA2] text-[48px] md:text-[64px] font-normal break-words pt-[180px]  md:pt-[20px]">
                        Financials
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pb-[128px]">
    <div class="wrapper">
        <div class="flex flex-col gap-8">
            <a class="flex flex-row gap-4" target="_blank" href="{{asset('documents/SABR FS Feb23 Signed.pdf')}}"><img
                    src="{{asset('images/document.png')}}" class="w-10 h-10" /> <span
                    class="justify-center text-[24px] text-[#466c7a]">Financials 2023</span>
            </a>
            <a class="flex flex-row gap-4" target="_blank" href="{{asset('documents/South African Breastmilk Reserve NPC 22 - Financial statements - SME.pdf sign.pdf')}}"><img
                    src="{{asset('images/document.png')}}" class="w-10 h-10" /> <span
                    class="justify-center text-[24px] text-[#466c7a]">Financials 2022</span>
            </a>
            <a class="flex flex-row gap-4" target="_blank" href="{{asset('documents/FS Feb21 Signed.pdf')}}"><img
                    src="{{asset('images/document.png')}}" class="w-10 h-10" /> <span
                    class="justify-center text-[24px] text-[#466c7a]">Financials 2021</span>
            </a>
            <a class="flex flex-row gap-4" target="_blank" href="{{asset('documents/FS-Feb20-Signed.pdf')}}"><img
                    src="{{asset('images/document.png')}}" class="w-10 h-10" /> <span
                    class="justify-center text-[24px] text-[#466c7a]">Financials 2020</span>
            </a>
        </div>
    </div>
</section>