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
                            We’d Love to hear from You
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pb-[120px]">
        <div class="wrapper">
            <p class="text-[24px] text-[#000] font-sans">If you'd like to find out more about what we do, please send us an
                email or give us a call. SABR also loves to receive feedback from our donors, recipients and breastfeeding
                mommies - so feel free to get in touch.</p>

            <div  class="grid grid-cols-1 md:grid-cols-2 gap-10  contact-us">
                <div class="flex flex-col gap-4">
                    <h3 class="text-[48px] font-sans text-black font-semibold">Address</h3>
                    <div>
                        <h5 class="font-semibold text-black font-sans text-[32px]">SABR head office:</h5>
                        <p class="text-[32px] text-left !font-[300] font-sans text-black">The Media Mills<br> 7 Quince Street<br>
                            Braamfontein Werf</p>
                    </div>
                </div>
                <div>
                    <iframe class="w-full h-[350px] " src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3581.9815313273175!2d28.015723775579428!3d-26.186027763234257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e950bf58959a8d7%3A0xa32463887606dc1c!2sSABR!5e0!3m2!1sen!2sza!4v1743060519690!5m2!1sen!2sza"   style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> 
                </div>
            </div>
            

            <div  class="grid grid-cols-1 md:grid-cols-2 gap-12  contact-us">
                <div class=" gap-4">
                    <div>
                        <h5 class="font-semibold text-black text-left font-sans text-[32px]">Telephone <br> <a href="tel: 011 482 1920" class="font-[300] ">011 482 1920</a></h5>
                        
                    </div>
                </div>
                <div>
                    <div>
                        <h5 class="font-semibold text-black text-left font-sans text-[32px]">E-mail <br> <a href="mailto: info@sabr.org.za" class="font-[300] ">info@sabr.org.za</a></h5>
                        
                    </div>
                </div>
                <div>
                    <div>
                        <h5 class="font-semibold text-black text-left font-sans text-[32px]">Donor's 24/7 <br> <a href="tel: 066 488 3350" class="font-[300] ">066 488 3350</a></h5>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-[128px]  bg-[#107BA2]">
        <div class="wrapper ">
            <div class=" bg-[#107BA2] inline-flex justify-center items-start gap-[98px]">
                <div class="flex-1 self-stretch flex flex-col justify-start items-center gap-8">
                    <div class="self-stretch flex flex-col lg:flex-row justify-start items-start gap-6">
                        <!-- Left Section -->
                        <div class="flex-1 flex flex-col justify-center items-start gap-3">
                            <div class="self-stretch text-[#F9FCE8] text-6xl font-normal leading-tight">
                                Take the <span class="font-bold">Next<br> Step</span>
                            </div>
                            <div class="self-stretch h-auto flex flex-col justify-start items-start gap-6">
                                <p class="self-stretch text-[#FEFEFD] text-2xl font-normal">
                                    Bring SoSAFE to your facility and set a new standard in breastmilk safety.
                                </p>
                            </div>
                        </div>
    
                        <!-- Right Section -->
                        <div class="flex-1 flex flex-col justify-center items-start gap-3">
                            <div class="self-stretch h-auto flex flex-col justify-start items-start gap-6">
                                <p class="self-stretch text-[#FEFEFD] text-3xl font-bold">
                                    Ready to Learn More?
                                </p>
                            </div>
                            <div class="self-stretch h-auto flex flex-col justify-start items-start gap-6">
                                <p class="self-stretch text-[#FEFEFD] text-2xl font-normal">
                                    Email us at <a href="mailto:SoSafe@sabr.org.za" class="underline">SoSafe@sabr.org.za</a>
                                    to explore implementation options, pricing details, and how SoSAFE fits into your
                                    existing infrastructure.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
        </div>
    </section>
@endsection