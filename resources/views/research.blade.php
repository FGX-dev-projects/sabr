@extends('layouts.app')

@section('content')
<section class="relative w-full h-[998px] md:h-[490px]  overflow-hidden">
    <!-- Background Video -->
   

    <!-- Content Overlay -->
    <div class="relative z-10 flex flex-col  h-full   pt-[10px] md:pt-[186px]">
        <div class="wrapper">
            <div class="w-full h-full flex flex-col     gap-6">
                <div class="w-full h-full flex flex-col text-[#107BA2]   gap-4">
                    <div
                        class="w-full text-[#107BA2] text-[48px] md:text-[64px] font-normal break-words pt-[180px]  md:pt-[20px]">
                        Research at SABR 
                    </div>
                    <p class="text-[24px] font-inter !font-light">
                        At the South African Breastmilk Reserve (SABR), research is at the core of our mission to improve maternal and infant health. Through clinical, virological, and safety studies, we enhance the understanding of breastmilk safety and quality, paving the way for innovative testing methodologies and improved healthcare outcomes. Our work is supported by partnerships with leading research teams and public health institutions, ensuring that our findings contribute to advancements in breastfeeding and human-milk banking practices. 
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-[128px]">
    <div class="wrapper flex flex-col gap-3">
        <div class="w-full h-full p-4 bg-[#FAF8F5] rounded-xl outline outline-1 outline-[#DEDAD4] flex flex-col md:flex-row justify-start  gap-3">
            <div class="w-full md:w-auto h-full  p-0">
                <img src="{{asset('images/gray-box.png')}}" class="object-cover w-full h-full"/>
            </div>
            <div class="flex-1 flex flex-col justify-between items-start gap-8">
                <div class="flex flex-col items-start gap-2 self-stretch">
                    <div class="px-2 py-1 bg-[#F4F0E9] rounded-md inline-flex justify-center items-center gap-2">
                        <div class="text-[#ADAAA5] text-lg font-normal">Innovation</div>
                    </div>
                </div>
                <div class="flex flex-col items-start gap-3 self-stretch">
                    <div class="flex flex-col items-start gap-3 self-stretch">
                        <div class="text-[#868480] text-2xl font-bold self-stretch">SABRViro1 – Virological Screening of Breastmilk for HIV-1</div>
                        <div class="text-[#868480] text-lg font-inter font-light self-stretch">
                            This pioneering study explores the effectiveness of direct HIV-1 screening in breastmilk using the Ultrio Elite assay, a technology traditionally used for blood. By identifying the minimum detectable viral load, this research provides critical insights into the sensitivity and specificity of the assay. These findings lay the groundwork for developing rapid testing tools that ensure safe and efficient breastmilk screening in human-milk banking.
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-end gap-2 self-stretch">
                    <div class="px-2 py-1 bg-[#F4F0E9] rounded-md inline-flex justify-center items-center gap-2">
                        <div class="text-[#ADAAA5] text-lg font-normal">12 Aug</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full h-full p-4 bg-[#FAF8F5] rounded-xl outline outline-1 outline-[#DEDAD4] flex flex-col md:flex-row justify-start  gap-3">
            <div class="w-full md:w-auto h-full  p-0">
                <img src="{{asset('images/gray-box.png')}}" class="object-cover w-full h-full"/>
            </div>
            <div class="flex-1 flex flex-col justify-between items-start gap-8">
                <div class="flex flex-col items-start gap-2 self-stretch">
                    <div class="px-2 py-1 bg-[#F4F0E9] rounded-md inline-flex justify-center items-center gap-2">
                        <div class="text-[#ADAAA5] text-lg font-normal">Innovation</div>
                    </div>
                </div>
                <div class="flex flex-col items-start gap-3 self-stretch">
                    <div class="flex flex-col items-start gap-3 self-stretch">
                        <div class="text-[#868480] text-2xl font-bold self-stretch">Phangisa Sub-Study </div>
                        <div class="text-[#868480] text-lg font-inter font-light self-stretch">The Phangisa study investigates the use of broadly neutralising antibodies (bNAbs) as a protective measure against HIV transmission through breastfeeding. This proof-of-concept study examines the sensitivity of HIV-1 isolates in breastmilk and evaluates the potential of bNAbs as a viable prophylactic to prevent postnatal HIV transmission, particularly in South Africa’s unique population demographics. </div>
                    </div>
                </div>
                <div class="flex flex-col items-end gap-2 self-stretch">
                    <div class="px-2 py-1 bg-[#F4F0E9] rounded-md inline-flex justify-center items-center gap-2">
                        <div class="text-[#ADAAA5] text-lg font-normal">12 Aug</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full h-full p-4 bg-[#FAF8F5] rounded-xl outline outline-1 outline-[#DEDAD4] flex flex-col md:flex-row justify-start  gap-3">
            <div class="w-full md:w-auto h-full  p-0">
                <img src="{{asset('images/gray-box.png')}}" class="object-cover w-full h-full"/>
            </div>
            <div class="flex-1 flex flex-col justify-between items-start gap-8">
                <div class="flex flex-col items-start gap-2 self-stretch">
                    <div class="px-2 py-1 bg-[#F4F0E9] rounded-md inline-flex justify-center items-center gap-2">
                        <div class="text-[#ADAAA5] text-lg font-normal">Innovation</div>
                    </div>
                </div>
                <div class="flex flex-col items-start gap-3 self-stretch">
                    <div class="flex flex-col items-start gap-3 self-stretch">
                        <div class="text-[#868480] text-2xl font-bold self-stretch">Siyakhula Collaboration  </div>
                        <div class="text-[#868480] text-lg font-inter font-light self-stretch">This project delves into the nutritional and safety parameters of donated breastmilk, supported by SABR through the sponsorship of a neonatal nurse for specimen collection. The Siyakhula Collaboration enhances our understanding of maternal health, infant growth, and breastmilk composition, contributing to improved neonatal health outcomes. </div>
                    </div>
                </div>
                <div class="flex flex-col items-end gap-2 self-stretch">
                    <div class="px-2 py-1 bg-[#F4F0E9] rounded-md inline-flex justify-center items-center gap-2">
                        <div class="text-[#ADAAA5] text-lg font-normal">12 Aug</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full h-full p-4 bg-[#FAF8F5] rounded-xl outline outline-1 outline-[#DEDAD4] flex flex-col md:flex-row justify-start  gap-3">
            <div class="w-full md:w-auto h-full  p-0">
                <img src="{{asset('images/gray-box.png')}}" class="object-cover w-full h-full"/>
            </div>
            <div class="flex-1 flex flex-col justify-between items-start gap-8">
                <div class="flex flex-col items-start gap-2 self-stretch">
                    <div class="px-2 py-1 bg-[#F4F0E9] rounded-md inline-flex justify-center items-center gap-2">
                        <div class="text-[#ADAAA5] text-lg font-normal">Innovation</div>
                    </div>
                </div>
                <div class="flex flex-col items-start gap-3 self-stretch">
                    <div class="flex flex-col items-start gap-3 self-stretch">
                        <div class="text-[#868480] text-2xl font-bold self-stretch">Sulpiride Pharmacokinetics Study   </div>
                        <div class="text-[#868480] text-lg font-inter font-light self-stretch">Focusing on the safety of Sulpiride in breastmilk, this study examines its use as a lactation-support medication for pre-term infants. A breakthrough rapid testing method now detects Sulpiride in less than a drop of breastmilk, reducing ethical implications associated with large sample collection. The findings support the development of safe lactation protocols for vulnerable infants. </div>
                    </div>
                </div>
                <div class="flex flex-col items-end gap-2 self-stretch">
                    <div class="px-2 py-1 bg-[#F4F0E9] rounded-md inline-flex justify-center items-center gap-2">
                        <div class="text-[#ADAAA5] text-lg font-normal">12 Aug</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full h-full p-4 bg-[#FAF8F5] rounded-xl outline outline-1 outline-[#DEDAD4] flex flex-col md:flex-row justify-start  gap-3">
            <div class="w-full md:w-auto h-full  p-0">
                <img src="{{asset('images/gray-box.png')}}" class="object-cover w-full h-full"/>
            </div>
            <div class="flex-1 flex flex-col justify-between items-start gap-8">
                <div class="flex flex-col items-start gap-2 self-stretch">
                    <div class="px-2 py-1 bg-[#F4F0E9] rounded-md inline-flex justify-center items-center gap-2">
                        <div class="text-[#ADAAA5] text-lg font-normal">Innovation</div>
                    </div>
                </div>
                <div class="flex flex-col items-start gap-3 self-stretch">
                    <div class="flex flex-col items-start gap-3 self-stretch">
                        <div class="text-[#868480] text-2xl font-bold self-stretch">Tenofovir Disoproxil Fumarate (TDF) Exposure in Breastfed Infants   </div>
                        <div class="text-[#868480] text-lg font-inter font-light self-stretch">Conducted in collaboration with the University of Pretoria’s School of Pharmacology, this study quantifies TDF levels in the breastmilk of HIV-positive mothers. It also evaluates the growth and development of infants exposed to TDF compared to a control group, establishing clear guidelines for safe breastfeeding practices among HIV-positive mothers. </div>
                    </div>
                </div>
                <div class="flex flex-col items-end gap-2 self-stretch">
                    <div class="px-2 py-1 bg-[#F4F0E9] rounded-md inline-flex justify-center items-center gap-2">
                        <div class="text-[#ADAAA5] text-lg font-normal">12 Aug</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full h-full p-4 bg-[#FAF8F5] rounded-xl outline outline-1 outline-[#DEDAD4] flex flex-col md:flex-row justify-start  gap-3">
            <div class="w-full md:w-auto h-full  p-0">
                <img src="{{asset('images/gray-box.png')}}" class="object-cover w-full h-full"/>
            </div>
            <div class="flex-1 flex flex-col justify-between items-start gap-8">
                <div class="flex flex-col items-start gap-2 self-stretch">
                    <div class="px-2 py-1 bg-[#F4F0E9] rounded-md inline-flex justify-center items-center gap-2">
                        <div class="text-[#ADAAA5] text-lg font-normal">Innovation</div>
                    </div>
                </div>
                <div class="flex flex-col items-start gap-3 self-stretch">
                    <div class="flex flex-col items-start gap-3 self-stretch">
                        <div class="text-[#868480] text-2xl font-bold self-stretch">Toward Rapid Testing and Improved Breastmilk Processing  </div>
                        <div class="text-[#868480] text-lg font-inter font-light self-stretch">SABR’s long-term goal is to develop a rapid, multiplex testing method for breastmilk capable of detecting pathogens like HIV, HTLV, TB, and Syphilis. Through studies like SABRViro1, we are validating direct virological testing, reducing the cost and complexity of donor screening. This</div>
                    </div>
                </div>
                <div class="flex flex-col items-end gap-2 self-stretch">
                    <div class="px-2 py-1 bg-[#F4F0E9] rounded-md inline-flex justify-center items-center gap-2">
                        <div class="text-[#ADAAA5] text-lg font-normal">12 Aug</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection