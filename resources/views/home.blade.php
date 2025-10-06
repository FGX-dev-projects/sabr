@extends('layouts.app')
@section('title', 'SABR: South African Breastmilk Reserve - Home')
@section('meta-description', 'South African Breastmilk Reserve - Bringing milk to babies, safely.')
@section('content')
    <section class="relative w-full h-[1500px] md:h-[950px] overflow-hidden">
        <!-- Background Video -->
        <video class="absolute top-0 left-0 w-full h-full object-cover" playsinline autoplay muted loop preload="auto">
            <source src="{{asset('images/hero-video.mp4')}}" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <!-- Dark Overlay -->
        <div class="absolute top-0 left-0 w-full h-full  "></div>

        <!-- Content Overlay -->
        <div class="relative z-10 flex flex-col  h-full  wrapper">
            <div class="hero-content wrapper">
                <div class="content">
                    <div class="content-inner">
                        <div class="frame-parent font-sans">
                            <div class="frame-parent ">
                                <div class="text-spacing">
                                    <span>Saving Lives,</span>
                                    <span class="one-drop-at"> One Drop At A Time</span>
                                </div>
                                <div class="join-us-in">Join us in giving premature and fragile babies the best start in life. Every drop of donated breastmilk is a gift of nourishment, comfort, and hope.</div>
                            </div>
                            <div class="button-prim-wrapper !ml-0 !pl-0">
                                <a href="https://payfast.co.za/donate/go/southafricanbreastmilkreserve" class="button-prim">
                                    <div class="nav-button7 cursor-pointer">
                                        <div class="button7 pt-1">Start Contributing</div>
                                        <div class="nav-button-child">
                                        </div>
                                    </div>
                                    <div class="pharrow-up-wrapper cursor-pointer">
                                        <img class="pharrow-up-icon" alt="" src="{{asset('images/arrow-up.svg')}}">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="frame-group font-sans">
                        {{-- <div class="frame-container">
                            <div class="find-a-milk-bank-near-you-wrapper">
                                <div class="find-a-milk-container">
                                    <p class="find-a-milk">Find a Milk Bank</p>
                                    <p class="find-a-milk">Near You</p>
                                </div>
                            </div>
                            {{-- <div class="frame-div">
                                <div class="start-searching-wrapper">
                                    <div class="start-searching">Start Searching</div>
                                </div>
                                <div class="ionsearch-outline-wrapper">
                                    <img class="ionsearch-outline-icon" alt="" src="ion:search-outline.svg">
                                </div>
                            </div> 
                        </div> --}}
                        <div class="component-2-parent">
                            <div class="component-2">
                                <div class="background">
                                    <div class="background-child">
                                    </div>
                                </div>
                                <a href="{{route('donate')}}" class="details cursor-pointer">
                                    <div class="info font-sans">
                                        <div class="tags">
                                            <div class="pills">
                                                <div class="start-searching">Register</div>
                                            </div>
                                            <img class="healthiconschild-program-outl" alt=""
                                                src="{{asset('images/icon-doc.svg')}}">
                                        </div>
                                        <div class="copy">
                                            <div class="saving-lives-one-container font-bold">I want to donate Milk</div>
                                            <div class="help-save-lives ">Your milk can be a lifeline. By sharing your breastmilk, you give a vulnerable baby the strength to grow, to heal, and to thrive.</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="component-1">
                                <div class="background">
                                    <div class="background-item">
                                    </div>
                                    <div class="background-inner">
                                    </div>
                                </div>
                                <a href="{{route('register')}}" class="details cursor-pointer">
                                    <div class="info">
                                        <div class="tags">
                                            <div class="pills">
                                                <div class="start-searching">Register</div>
                                            </div>
                                            <img class="healthiconschild-program-outl" alt=""
                                                src="{{asset('images/icon-child.svg')}}">
                                        </div>
                                        <div class="copy">
                                            <div class="saving-lives-one-container font-bold">I am a Parent</div>
                                            <div class="help-save-lives">Your milk can be a lifeline. By sharing your breastmilk, you give a vulnerable baby the strength to grow, to heal, and to thrive.</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="component-11">
                                <div class="background2">
                                    <div class="rectangle-div">
                                    </div>
                                </div>
                                <a href="{{route('register')}}" class="details cursor-pointer">
                                    <div class="info">
                                        <div class="tags">
                                            <div class="pills2">
                                                <div class="start-searching">Coming Soon</div>
                                            </div>
                                            <img class="healthiconschild-program-outl" alt=""
                                                src="{{asset('images/doctor-icon.svg')}}">
                                        </div>
                                        <div class="copy">
                                            <div class="saving-lives-one-container font-bold">I am a Clinician</div>
                                            <div class="help-save-lives">Help save lives by donating your excess breastmilk to babies in need. Your gift can make all the difference.</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="py-20 bg-[#e5d2b8] new-sec1 relative mt-[-100px]">
        <div class="wrapper ">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-[68px] items-center">
                <!-- Left Container (Image) -->
                <div class="image">
                    <img src="{{asset('images/sec2-img.png')}}" alt="Placeholder Image"
                        class="w-full h-auto rounded-2xl ">
                </div>

                <!-- Right Container (Text) -->
                <div class="we-are-more-than-just-a-breast-parent">
                    <div class="saving-lives-mobile text-spacing-2 !text-[#905460]">
                        <span>We Are More Than Just A </span>
                        <span class="breastmilk-bank font-bold !text-[#905460]">Breastmilk Bank</span>
                    </div>
                    <div class="home-sec-1">
                        <div class="for-18-years-the-south-afric-wrapper">
                            <div class="we-are-more-container text-[#905460]">For 18+ years, the South African Breastmilk Reserve (SABR) has been weaving together stories of resilience, hope, and unconditional love. Every drop we collect carries with it a mother's devotion and a community's embrace around our most vulnerable little ones.</div>
                        </div>
                        <div class="milk-banking-facilities-nation-parent !text-[#6d5d43]">
                            <b class="our-heart-in text-[24px] font-sans text-[#6d5d43] font-bold">Our Heart in Numbers</b>
                            <div class="we-are-more-container">
                                <ul class="milk-banking-facilities-nation" style="list-style: disc;">
                                    <li>
                                        <span class="font-inter font-bold">30 sanctuaries of nourishment</span><br> Our milk banking facilities across the nation, each one a beacon of hope for families when they need it most. 
                                       </li>
                                </ul>
                            </div>
                            <div class="we-are-more-container">
                                <ul class="milk-banking-facilities-nation">
                                    <li>
                                        <span class="font-inter font-bold">31,367 precious lives touched</span><br> Every premature baby we've helped represents a family's prayers answered, a future brightened, and dreams kept alive since 2003.
                                       </li>
                                </ul>
                            </div>
                            <div class="we-are-more-container">
                                <ul class="milk-banking-facilities-nation">
                                    <li>
                                        <span class="font-inter font-bold">Over 5,700 tiny hearts fed</span><br> Each year, thousands of infants receive milk mothers who understand that love multiplies when shared.
                                       </li>
                                </ul>
                            </div>
                        </div>
                        <div class="flex flex-row items-start justify-start gap-6 text-[18px] font-inter">
                            <!-- Donate Milk -->
                            <a href="{{route('donate')}}" 
                               class="rounded-[32px] bg-[#e26654] flex flex-row items-center justify-center p-4 text-white font-bold hover:bg-[#c24f40] text-[18px] transition">
                              Donate Milk
                            </a>
                          
                            <!-- Support Us -->
                            <a href="https://payfast.co.za/donate/go/southafricanbreastmilkreserve" 
                               class="rounded-[32px] border border-[#503325] flex flex-row items-center justify-center p-4 text-[#503325] text-[18px] font-bold hover:bg-[#503325] hover:text-white transition">
                              Support Us 
                            </a>
                          
                            <!-- Learn More -->
                            <a href="{{route('about-us')}}" 
                               class="rounded-[32px] flex flex-row items-center justify-start text-[18px] px-6 py-4 text-[#503325] font-bold hover:bg-gray-100 transition">
                              Learn More
                            </a>
                          </div>
                          
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 ">
        <div class="wrapper ">
            <div class="items-center">

                <!-- Right Container (Text) -->
                <div class="we-are-more-than-just-a-breast-parent">
                    <div class="introducing-sosafe">
                        <span>
                            <span class="font-bold">SoSAFE: </span>
                            <span class="span"> </span>
                        </span>
                        <b class="sosafe">Our Promise to Every Baby</b>
                    </div>
                    <div class="home-sec-2">
                        <div class="for-18-years-the-south-afric-wrapper">
                            <div class="paragraph font-inter text-[24px] font-[300]">We are excited to announce the launch of SoSAFE, our state-of-the-art breastmilk pasteuriser designed to ensure the highest safety standards. The SoSAFE pasteuriser is IEC certified for laboratory equipment safety, making it a reliable choice for hospitals and milk banks globally.</div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 py-3">
                            <div
                                class="w-full relative backdrop-blur-lg rounded-2xl bg-[#e8dfcf] border border-[#dfdcd8] h-[271px] flex flex-col items-end justify-start p-8 text-right text-2xl text-[#6f6d6a] font-['Work_Sans']">
                                <div class="flex flex-col items-end justify-between flex-1 w-full">
                                    <b class="w-full relative text-[#6d5d43]">Safety</b>
                                    <div class="w-full text-left relative text-xl text-[#6f6d6a]">
                                        Ensures breastmilk is free from harmful pathogens.
                                    </div>
                                </div>
                            </div>

                            <div
                                class="w-full relative backdrop-blur-lg rounded-2xl bg-[#e8dfcf] border border-[#dfdcd8] h-[271px] flex flex-col items-end justify-start p-8 text-right text-2xl text-[#6f6d6a] font-['Work_Sans']">
                                <div class="flex flex-col items-end justify-between flex-1 w-full">
                                    <b class="w-full relative text-[#6d5d43]">Efficiency</b>
                                    <div class="w-full text-left relative text-xl text-[#6f6d6a]">
                                        Streamlines the pasteurisation process, saving time and resources.
                                    </div>
                                </div>
                            </div>

                            <div
                                class="w-full relative backdrop-blur-lg rounded-2xl bg-[#e8dfcf] border border-[#dfdcd8] h-[271px] flex flex-col items-end justify-start p-8 text-right text-2xl text-[#6f6d6a] font-['Work_Sans']">
                                <div class="flex flex-col items-end justify-between flex-1 w-full">
                                    <b class="w-full relative text-[#6d5d43]">Accessibility</b>
                                    <div class="w-full text-left relative text-xl text-[#6f6d6a]">
                                        Designed for ease of use in diverse healthcare settings.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center gap-6 ">
                            <a href="{{route('sosafe')}}" 
                               class="rounded-[32px] bg-[#e26654] flex flex-row items-center justify-center p-4 text-white font-bold hover:bg-[#c24f40] text-[18px] transition">
                               Learn Our Safety Standards
                            </a>
                            <a href="{{route('stats')}}" 
                            class="rounded-[32px] border border-[#503325] flex flex-row items-center justify-center p-4 text-[#503325] text-[18px] font-bold hover:bg-[#503325] hover:text-white transition">
                            See Quality Protocols
                         </a>
                        </div>
                        <div class="gap-0 items-center text-[24px] font-inter text-[#6d5d43] font-[300]">
                            <p class="p-0 m-0 items-center text-start md:text-center">Interested in implementing SoSAFE in your facility?
                            </p>
                            <p class="p-0 items-center text-start md:text-center ">
                                Contact us at <a href="mailto:SoSafe@sabr.org.za" target="_blank"
                                    class="text-[#23B4E9]"> SoSafe@sabr.org.za </a>for more information on how to get
                                started.</p><br>
                                <p>Discover how we maintain the highest standards for every precious drop</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="">
        <div class="w-full relative section-bg rounded-[32px] min-h-[1022px] lg:h-[1022px] overflow-hidden flex flex-row items-start justify-center px-4 py-8 sm:px-8 sm:py-16 lg:pl-[353px] lg:pr-32 lg:py-32 box-border gap-6 text-left text-lg sm:text-xl lg:text-2xl section-text work-sans">
            <div class="self-stretch w-full max-w-[915px] flex flex-col items-center justify-center z-0">
                <div class="self-stretch flex flex-col items-start justify-start gap-8 lg:gap-16">
                    <div class="self-stretch flex flex-col items-start justify-start gap-6 lg:gap-[46px]">
                        <div class="self-stretch relative text-2xl sm:text-3xl lg:text-5xl">
                            <span>Make Your Hospital </span>
                            <span class="font-bold">Breastmilk Smart</span>
                        </div>
                        
                        <div class="self-stretch flex flex-col items-start justify-start inter">
                            <div class="self-stretch relative text-[24px] font-inter font-[300]">
                                We establish and support in-hospital human milk banks, ensuring compliance with national health standards while expanding access to donor breastmilk.
                            </div>
                        </div>
                        
                        <div class="self-stretch flex flex-col lg:flex-row items-start justify-start gap-4 lg:gap-8 text-xl sm:text-2xl lg:text-[32px]">
                            <div class="flex-1 w-full flex flex-col items-start justify-start gap-4 lg:gap-6">
                                <div class="font-bold self-stretch relative">Cutting-Edge Solutions</div>
                                <div class="self-stretch relative text-[24px] font-inter font-[300]">
                                    Featuring SoSAFE's innovative "Breastmilk-in-a-Box" with affordable pasteurisers and rapid testing technology.
                                </div>
                            </div>
                            
                            <div class="flex-1 w-full flex flex-col items-start justify-start gap-4 lg:gap-6">
                                <div class="font-bold self-stretch relative">Comprehensive Care</div>
                                <div class="self-stretch relative text-[24px] font-inter font-[300]">
                                    From milk processing to maternal health services, we equip hospitals to meet critical neonatal care needs.
                                </div>
                            </div>
                            
                            <div class="flex-1 w-full flex flex-col items-start justify-start gap-4 lg:gap-6">
                                <div class="font-bold self-stretch relative">Expanding Access</div>
                                <div class="self-stretch relative text-[24px] font-inter font-[300]">
                                    44 human milk banks established nationwide, bridging the gap for underserved communities.
                                </div>
                            </div>
                        </div>
                        
                        <div class="w-full lg:w-[484px] relative font-bold flex items-end min-h-[63px] flex-shrink-0">
                            Let's transform infant care together.
                        </div>
                    </div>
                    
                    <div class="flex flex-col sm:flex-row items-start justify-start gap-4 lg:gap-6 text-sm sm:text-base lg:text-lg inter">
                        <a href="{{route('donate')}}" class="w-full sm:w-auto rounded-[32px] btn-primary flex flex-row items-center justify-center p-3 lg:p-4">
                            <div class="relative font-bold">Donate Milk</div>
                        </a>
                        
                        <a href="https://payfast.co.za/donate/go/southafricanbreastmilkreserve" class="w-full sm:w-auto rounded-[32px] btn-outline flex flex-row items-center justify-center p-3 lg:p-4">
                            <div class="relative font-bold">Support Us</div>
                        </a>
                        
                        <a href="{{route('about-us')}}" class="w-full sm:w-auto rounded-[32px] flex flex-row items-center justify-center p-3 lg:p-4">
                            <div class="relative font-bold">Learn More</div>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Images positioned absolutely - hidden on mobile and tablet -->
            <img class="hidden xl:block absolute rounded-2xl object-contain img-frame-96" alt="milks" src="{{asset('images/milks2.png')}}">
            <img class="hidden xl:block absolute rounded-2xl object-contain img-frame-97" alt="" src="{{asset('images/hom-sosafe.png')}}">
        </div>
    </section>

    <section>
        <div class="relative w-full h-auto flex flex-col items-center justify-start px-4 sm:px-8 lg:px-32 py-16 sm:py-20 lg:py-32 gap-8 lg:gap-16 text-left font-work-sans">
    
            <!-- Header Section -->
            <div class="w-full max-w-6xl flex flex-col items-start justify-start gap-4 lg:gap-6">
                <div class="w-full text-[#905460] text-5xl">
                    <h1 class=" text-5xl leading-tight m-0">
                        <span class="font-bold">The Tree of Life:</span>
                    </h1>
                    <p class="leading-tight m-0 !font-[300]">Stories of Love and Survival</p>
                </div>
                <p class="w-full font-inter font-light text-[24px] text-[#535353]">
                    Donor moms, recipient families, and healthcare workers share how every drop truly counts.
                </p>
            </div>
    
            <!-- Carousel -->
            <div class="w-full">
                <div class="w-full bg-none flex flex-col items-center gap-6 font-work-sans">
                    <div class="relative w-full md:overflow-visible overflow-hidden">
                        <!-- Testimonial Track -->
                        <div id="testimonialTrack" class="flex transition-transform duration-500 ease-in-out">
                            <!-- Card 1 -->
                            <div class="flex-shrink-0 w-full md:w-1/2 lg:w-1/3 px-3">
                                <div class="flex flex-col h-[1000px] rounded-3xl shadow-[0_12px_24px_rgba(80,51,37,0.25)] overflow-hidden">
                                    <img src="{{asset('images/review-1.png')}}" alt="testimonial" class="w-full flex-1 object-cover">
                                    <div class="p-8 flex flex-col gap-4">
                                        <h3 class="text-2xl font-bold text-black">Baby Ngobeni</h3>
                                        <p class="text-[#50332540] text-xl font-[300]">Life Daleview Hospital</p>
                                        <blockquote class="text-[#535353] leading-9 font-inter">
                                            "As a new mom struggling with breastfeeding, I just want to say thank you for the milk you've been providing me. My baby is healthy and getting stronger every day. What a beautiful testimony — my baby is growing so nicely with your donor milk. Thank you so much, team. Keep it up!"
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
    
                            <!-- Card 2 -->
                            <div class="flex-shrink-0 w-full md:w-1/2 lg:w-1/3 px-3">
                                <div class="flex flex-col h-[1000px] rounded-3xl shadow-[0_12px_24px_rgba(80,51,37,0.25)] overflow-hidden">
                                    <img src="{{asset('images/review-2.png')}}" alt="testimonial" class="w-full flex-1 object-cover">
                                    <div class="p-8 flex flex-col gap-4">
                                        <h3 class="text-2xl font-bold text-black">Dr Harri Surti</h3>
                                        <p class="text-[#50332540] text-xl font-[300]">Neonatologist</p>
                                        <blockquote class="text-[#535353] leading-9 font-inter">
                                            "This little girl was born at just 28 weeks in October 2016, weighing only 1.18kg. In her first few days in the NICU, she received donor expressed breastmilk from the South African Breastmilk Reserve, giving her the vital start she needed until her mother's own milk supply came in. She went on to be exclusively breastfed until one year of age — and today, she's a healthy, thriving 8-year-old. A true testament to the life-saving power of breastmilk."
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
    
                            <!-- Card 3 -->
                            <div class="flex-shrink-0 w-full md:w-1/2 lg:w-1/3 px-3">
                                <div class="flex flex-col h-[1000px] rounded-3xl shadow-[0_12px_24px_rgba(80,51,37,0.25)] overflow-hidden">
                                    <img src="{{asset('images/review-3.png')}}" alt="testimonial" class="w-full flex-1 object-cover">
                                    <div class="p-8 flex flex-col gap-4">
                                        <h3 class="text-2xl font-bold text-black">Kyle Schenck</h3>
                                        <p class="text-[#50332540] text-xl font-[300]">Parent, Wilgers Hospital</p>
                                        <blockquote class="text-[#535353] leading-9 font-inter">
                                            "Liebe Hunter Schenck was born at just 31 weeks. With her mom in ICU and unable to produce milk, we were desperate for help. The South African Breastmilk Reserve stepped in, and I was able to purchase donor milk for our little miracle. I placed the order in the afternoon, and by the next morning, the hospital had received the milk. The service was top-notch — friendly, professional, and deeply caring. I can't recommend them enough."
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
    
                            <!-- Card 4 -->
                            <div class="flex-shrink-0 w-full md:w-1/2 lg:w-1/3 px-3">
                                <div class="flex flex-col h-[1000px] rounded-3xl shadow-[0_12px_24px_rgba(80,51,37,0.25)] overflow-hidden">
                                    <img src="{{asset('images/gray-block1.png')}}" alt="testimonial" class="w-full flex-1 object-cover">
                                    <div class="p-8 flex flex-col gap-4">
                                        <h3 class="text-2xl font-bold text-black">Sr Monageng</h3>
                                        <p class="text-[#50332540] text-xl font-[300]">Unit Manager, Joe Morolong Memorial Hospital</p>
                                        <blockquote class="text-[#535353] leading-9 font-inter">
                                            "Donating breastmilk gives small, vulnerable babies a fighting chance — boosting their immunity to help defend against harmful pathogens. At Joe Morolong Memorial Hospital, most of our recipients are babies weighing under 1 kilogram. Thanks to access to donor breastmilk, we've seen a significant improvement in survival rates. Attached is a photo of one of our mothers breastfeeding her baby (not premature), and our dedicated milk bank champion, Sister Topp — both proudly part of this life-saving journey."
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
    
                            <!-- Card 5 -->
                            <div class="flex-shrink-0 w-full md:w-1/2 lg:w-1/3 px-3">
                                <div class="flex flex-col h-[1000px] rounded-3xl shadow-[0_12px_24px_rgba(80,51,37,0.25)] overflow-hidden">
                                    <img src="{{asset('images/gray-block1.png')}}" alt="testimonial" class="w-full flex-1 object-cover">
                                    <div class="p-8 flex flex-col gap-4">
                                        <h3 class="text-2xl font-bold text-black">Yamini</h3>
                                        <p class="text-[#50332540] text-xl font-[300]">Sandton Mediclinic NICU Team</p>
                                        <blockquote class="text-[#535353] leading-9 font-inter">
                                            "To the South African Breastmilk Reserve team, we extend our heartfelt gratitude for your life-changing work. Your dedication to providing breastmilk for vulnerable neonatal babies is truly appreciated. And to the amazing donor moms — thank you for your selflessness and generosity in sharing your precious milk. Your contributions are making a real difference in the lives of these tiny humans."
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
    
                            <!-- Card 6 -->
                            <div class="flex-shrink-0 w-full md:w-1/2 lg:w-1/3 px-3">
                                <div class="flex flex-col h-[1000px] rounded-3xl shadow-[0_12px_24px_rgba(80,51,37,0.25)] overflow-hidden">
                                    <img src="{{asset('images/gray-block1.png')}}" alt="testimonial" class="w-full flex-1 object-cover">
                                    <div class="p-8 flex flex-col gap-4">
                                        <h3 class="text-2xl font-bold text-black">Gomotseng Ndlovu Mannya</h3>
                                        <p class="text-[#50332540] text-xl font-[300]">Breastmilk Donor</p>
                                        <blockquote class="text-[#535353] leading-9 font-inter">
                                            "My baby and I were proud breastmilk donors in 2024. Together, we donated 205 units of breastmilk, feeding 14 premature babies. To upcoming new moms, I would like to say: Breastmilk gives life to our children. As mothers, it is our duty, where possible, to share our breastmilk to give life and spread love to as many children as we can."
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
    
                            <!-- Card 7 -->
                            <div class="flex-shrink-0 w-full md:w-1/2 lg:w-1/3 px-3">
                                <div class="flex flex-col h-[1000px] rounded-3xl shadow-[0_12px_24px_rgba(80,51,37,0.25)] overflow-hidden">
                                    <img src="{{asset('images/gray-block1.png')}}" alt="testimonial" class="w-full flex-1 object-cover">
                                    <div class="p-8 flex flex-col gap-4">
                                        <h3 class="text-2xl font-bold text-black">Tracy Ann Swanepoel</h3>
                                        <p class="text-[#50332540] text-xl font-[300]">Breastmilk Donor</p>
                                        <blockquote class="text-[#535353] leading-9 font-inter">
                                            "My baby didn't take a bottle, and because I worked until 12h00, I ended up throwing away one feed every day. One night, I saw a post on Facebook about the Milkbank and immediately registered — it was super easy. Donating meant so much to me because I knew my milk wasn't going to waste. I felt complete and expressed with a smile. I wish more moms would donate and save more babies — they are our future. Thank you, Milkbank, for making donating so easy and comfortable."
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
    
                            <!-- Card 8 -->
                            <div class="flex-shrink-0 w-full md:w-1/2 lg:w-1/3 px-3">
                                <div class="flex flex-col h-[1000px] rounded-3xl shadow-[0_12px_24px_rgba(80,51,37,0.25)] overflow-hidden">
                                    <img src="{{asset('images/gray-block1.png')}}" alt="testimonial" class="w-full flex-1 object-cover">
                                    <div class="p-8 flex flex-col gap-4">
                                        <h3 class="text-2xl font-bold text-black">Annarie Theron</h3>
                                        <p class="text-[#50332540] text-xl font-[300]">Breastmilk Donor</p>
                                        <blockquote class="text-[#535353] leading-9 font-inter">
                                            "Being a donor mom has been such a privilege. Since the beginning of 2025, I have donated 443 units of breastmilk, helping to feed 53 babies in the NICU — and my journey is still continuing. Each drop feels like a small gift of strength and love for a baby in need. It's humbling to know that something so natural can make such a difference."
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
    
                            <!-- Card 9 -->
                            <div class="flex-shrink-0 w-full md:w-1/2 lg:w-1/3 px-3">
                                <div class="flex flex-col h-[1000px] rounded-3xl shadow-[0_12px_24px_rgba(80,51,37,0.25)] overflow-hidden">
                                    <img src="{{asset('images/gray-block1.png')}}" alt="testimonial" class="w-full flex-1 object-cover">
                                    <div class="p-8 flex flex-col gap-4">
                                        <h3 class="text-2xl font-bold text-black">Barbra Van den Merwe</h3>
                                        <p class="text-[#50332540] text-xl font-[300]">Breastmilk Donor</p>
                                        <blockquote class="text-[#535353] leading-9 font-inter">
                                            "The surprise diagnosis of Down Syndrome meant my breastfeeding journey looked a little different than I had envisioned. Little Stella-Marie's AVSD meant she would be receiving expressed milk. As an oversupplier, I need SABR just as much as they need me! It's a blessing to be able to bless other mommies and babies — all because of this little extra chromosome."
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
    
                            <!-- Card 10 -->
                            <div class="flex-shrink-0 w-full md:w-1/2 lg:w-1/3 px-3">
                                <div class="flex flex-col h-[1000px] rounded-3xl shadow-[0_12px_24px_rgba(80,51,37,0.25)] overflow-hidden">
                                    <img src="{{asset('images/gray-block1.png')}}" alt="testimonial" class="w-full flex-1 object-cover">
                                    <div class="p-8 flex flex-col gap-4">
                                        <h3 class="text-2xl font-bold text-black">Stefanie Botha</h3>
                                        <p class="text-[#50332540] text-xl font-[300]">Breastmilk Donor</p>
                                        <blockquote class="text-[#535353] leading-9 font-inter">
                                            "Being able to donate is my way of giving something to the ones who will change the world. Children are our future, and every single one — no matter the world they are born into — deserves the best. And as we know, breast is best. With every drop of donated milk, I pray for success and growth for those who drink it."
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
    
                            <!-- Card 11 -->
                            <div class="flex-shrink-0 w-full md:w-1/2 lg:w-1/3 px-3">
                                <div class="flex flex-col h-[1000px] rounded-3xl shadow-[0_12px_24px_rgba(80,51,37,0.25)] overflow-hidden">
                                    <img src="{{asset('images/gray-block1.png')}}" alt="testimonial" class="w-full flex-1 object-cover">
                                    <div class="p-8 flex flex-col gap-4">
                                        <h3 class="text-2xl font-bold text-black">Pepita Emeyene</h3>
                                        <p class="text-[#50332540] text-xl font-[300]">Breastmilk Donor</p>
                                        <blockquote class="text-[#535353] leading-9 font-inter">
                                            "We lost our first child due to health complications, and one of the hardest parts was that she could not be fed properly. Sometimes we could only express a few millilitres of milk for her, and the formula available was too harsh. By God's grace, we have had more babies since. I now donate as much milk as I can, hoping another mother will have the help she needs to keep her baby strong in a natural way during hospital care."
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
    
                            <!-- Card 12 -->
                            <div class="flex-shrink-0 w-full md:w-1/2 lg:w-1/3 px-3">
                                <div class="flex flex-col h-[1000px] rounded-3xl shadow-[0_12px_24px_rgba(80,51,37,0.25)] overflow-hidden">
                                    <img src="{{asset('images/gray-block1.png')}}" alt="testimonial" class="w-full flex-1 object-cover">
                                    <div class="p-8 flex flex-col gap-4">
                                        <h3 class="text-2xl font-bold text-black">Linda-Ann Swart</h3>
                                        <p class="text-[#50332540] text-xl font-[300]">Breastmilk Donor</p>
                                        <blockquote class="text-[#535353] leading-9 font-inter">
                                            "Donating breastmilk has been one of the most rewarding experiences of my motherhood journey. When I discovered in 2018 — and again in 2023 — that my milk could help nourish and care for babies in need, I felt a deep sense of purpose and decided to continue for as long as possible. The process was straightforward, and I often imagined tiny hands holding the bottles, tiny bodies growing stronger with each feeding. It's my way of showing love and care for children beyond my own."
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
    
                            <!-- Card 13 -->
                            <div class="flex-shrink-0 w-full md:w-1/2 lg:w-1/3 px-3">
                                <div class="flex flex-col h-[1000px] rounded-3xl shadow-[0_12px_24px_rgba(80,51,37,0.25)] overflow-hidden">
                                    <img src="{{asset('images/gray-block1.png')}}" alt="testimonial" class="w-full flex-1 object-cover">
                                    <div class="p-8 flex flex-col gap-4">
                                        <h3 class="text-2xl font-bold text-black">Nthabiseng Qhesi</h3>
                                        <p class="text-[#50332540] text-xl font-[300]">Breastmilk Donor</p>
                                        <blockquote class="text-[#535353] leading-9 font-inter">
                                            "As an African mother, I grew up in a culture where I never knew a programme like this even existed. We were never exposed to the idea of donating breastmilk. When I discovered that it was possible, I was overjoyed. I started donating in January 2024 and, as someone who produces more milk than my baby needs, I have felt blessed to share the extra. So far, I have donated around 289 units of breastmilk, and I am very proud knowing that my milk has helped save the lives of other babies."
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
    
                            <!-- Card 14 -->
                            <div class="flex-shrink-0 w-full md:w-1/2 lg:w-1/3 px-3">
                                <div class="flex flex-col h-[1000px] rounded-3xl shadow-[0_12px_24px_rgba(80,51,37,0.25)] overflow-hidden">
                                    <img src="{{asset('images/gray-block1.png')}}" alt="testimonial" class="w-full flex-1 object-cover">
                                    <div class="p-8 flex flex-col gap-4">
                                        <h3 class="text-2xl font-bold text-black">Shanta Bosman</h3>
                                        <p class="text-[#50332540] text-xl font-[300]">Breastmilk Donor</p>
                                        <blockquote class="text-[#535353] leading-9 font-inter">
                                            "Breastmilk donation, to me, is an act of connection — a way of giving life, health, and hope from one mother to another. It's more than just milk; it's hours of nourishment, antibodies, comfort, and care packaged into every drop. Knowing that my milk can help a baby thrive when their own mother's supply is limited fills my heart with gratitude and joy. It's a quiet reminder that we are part of a wider community, lifting each other up in the most fundamental way possible — by helping the tiniest among us have a stronger start."
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
    
                            <!-- Card 15 -->
                            <div class="flex-shrink-0 w-full md:w-1/2 lg:w-1/3 px-3">
                                <div class="flex flex-col h-[1000px] rounded-3xl shadow-[0_12px_24px_rgba(80,51,37,0.25)] overflow-hidden">
                                    <img src="{{asset('images/gray-block1.png')}}" alt="testimonial" class="w-full flex-1 object-cover">
                                    <div class="p-8 flex flex-col gap-4">
                                        <h3 class="text-2xl font-bold text-black">Kaylin Wilson</h3>
                                        <p class="text-[#50332540] text-xl font-[300]">Breastmilk Donor</p>
                                        <blockquote class="text-[#535353] leading-9 font-inter">
                                            "As a mom, breastfeeding has been one of the most beautiful and fulfilling journeys of my life. Being able to nourish my own children and still have enough to donate 868 units of milk — feeding 63 precious little ones — has been such a blessing. I want to encourage every mother: your milk is powerful, your body is amazing, and every drop truly makes a difference."
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
    
                            <!-- Card 16 -->
                            <div class="flex-shrink-0 w-full md:w-1/2 lg:w-1/3 px-3">
                                <div class="flex flex-col h-[1000px] rounded-3xl shadow-[0_12px_24px_rgba(80,51,37,0.25)] overflow-hidden">
                                    <img src="{{asset('images/gray-block1.png')}}" alt="testimonial" class="w-full flex-1 object-cover">
                                    <div class="p-8 flex flex-col gap-4">
                                        <h3 class="text-2xl font-bold text-black">Lihlethu Mhlongo</h3>
                                        <p class="text-[#50332540] text-xl font-[300]">Born at Nelspruit Mediclinic</p>
                                        <blockquote class="text-[#535353] leading-9 font-inter">
                                            "Lihlethu was born on 12 March 2025 at Nelspruit Mediclinic, weighing just 1.39 kg. Today, she is thriving at 5.7 kg — a beautiful reminder of how far our tiniest fighters can come."
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
    
                            <!-- Card 17 -->
                            <div class="flex-shrink-0 w-full md:w-1/2 lg:w-1/3 px-3">
                                <div class="flex flex-col h-[1000px] rounded-3xl shadow-[0_12px_24px_rgba(80,51,37,0.25)] overflow-hidden">
                                    <img src="{{asset('images/gray-block1.png')}}" alt="testimonial" class="w-full flex-1 object-cover">
                                    <div class="p-8 flex flex-col gap-4">
                                        <h3 class="text-2xl font-bold text-black">Nikita & Jeremy Foord</h3>
                                        <p class="text-[#50332540] text-xl font-[300]">Parents</p>
                                        <blockquote class="text-[#535353] leading-9 font-inter">
                                            "Our baby girl was born prematurely at just 27 weeks and 5 days, and my milk supply had not yet come in. The doctors needed to start feeding her immediately so she could gain weight, as she was extremely underweight. That's when one of the front desk nurses quietly handed me a small note with a number on it. Through that number, I was connected to the South African Breastmilk Reserve and received the most incredible service and support. I want to express my deepest gratitude — not only to SABR for their assistance, but also to every mother selfless enough to donate."
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <!-- Navigation Buttons -->
                    <div class="flex items-center gap-2 p-2 rounded-full border border-[#23B4E9]">
                        <button id="prevBtn" class="w-16 h-16 rounded-full bg-[#23B4E9] hover:bg-primary-blue/20 transition-colors duration-200 flex items-center justify-center group">
                            <img src="{{asset('images/arrowleft.svg')}}" alt="Previous" class="w-6 h-6 "/>
                        </button>
                        <button id="nextBtn" class="w-16 h-16 rounded-full bg-[#23B4E9] hover:bg-primary-blue/20 transition-colors duration-200 flex items-center justify-center group">
                            <img src="{{asset('images/arrowright.svg')}}" alt="Next" class="w-6 h-6 "/>
                        </button>
                    </div>
    
                    <!-- Dots Indicator -->
                    
                </div>
            </div>
        </div>
    
        <script>
            const track = document.getElementById('testimonialTrack');
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');
            
            let currentIndex = 0;
            const cards = track.children.length;
            
            // Get cards per view based on screen size
            function getCardsPerView() {
                if (window.innerWidth >= 1024) return 3; // lg
                if (window.innerWidth >= 768) return 2;  // md
                return 1; // mobile
            }
            
            function updateCarousel() {
                const cardsPerView = getCardsPerView();
                const maxIndex = cards - cardsPerView;
                
                // Ensure currentIndex is within bounds
                if (currentIndex > maxIndex) {
                    currentIndex = maxIndex;
                }
                if (currentIndex < 0) {
                    currentIndex = 0;
                }
                
                const cardWidth = track.children[0].offsetWidth;
                const offset = -currentIndex * cardWidth;
                track.style.transform = `translateX(${offset}px)`;
                
                // Update button states
                prevBtn.disabled = currentIndex === 0;
                nextBtn.disabled = currentIndex >= maxIndex;
                
                prevBtn.style.opacity = currentIndex === 0 ? '0.5' : '1';
                nextBtn.style.opacity = currentIndex >= maxIndex ? '0.5' : '1';
            }
            
            prevBtn.addEventListener('click', () => {
                if (currentIndex > 0) {
                    currentIndex--;
                    updateCarousel();
                }
            });
            
            nextBtn.addEventListener('click', () => {
                const cardsPerView = getCardsPerView();
                const maxIndex = cards - cardsPerView;
                if (currentIndex < maxIndex) {
                    currentIndex++;
                    updateCarousel();
                }
            });
            
            // Update on window resize
            window.addEventListener('resize', updateCarousel);
            
            // Initial update
            updateCarousel();
        </script>
    </section>
    
    

    <script>
    let currentSlide = 0;
    const track = document.getElementById('testimonialTrack');
    const cards = track.children;
    const totalCards = cards.length;
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const dots = document.querySelectorAll('.dot');
    
    function updateCarousel() {
        const cardWidth = cards[0].offsetWidth;
        track.style.transform = `translateX(-${currentSlide * cardWidth}px)`;
    
        // Update dots
        dots.forEach((dot, index) => {
            dot.classList.toggle('bg-primary-blue', index === currentSlide);
            dot.classList.toggle('bg-primary-blue/30', index !== currentSlide);
        });
    }
    
    function nextSlide() {
        currentSlide = (currentSlide + 1) % totalCards;
        updateCarousel();
    }
    
    function prevSlide() {
        currentSlide = (currentSlide - 1 + totalCards) % totalCards;
        updateCarousel();
    }
    
    function goToSlide(slideIndex) {
        currentSlide = slideIndex;
        updateCarousel();
    }
    
    // Event listeners
    nextBtn.addEventListener('click', nextSlide);
    prevBtn.addEventListener('click', prevSlide);
    dots.forEach((dot, index) => dot.addEventListener('click', () => goToSlide(index)));
    
    // Auto-play
    let autoPlay = setInterval(nextSlide, 5000);
    track.parentElement.addEventListener('mouseenter', () => clearInterval(autoPlay));
    track.parentElement.addEventListener('mouseleave', () => autoPlay = setInterval(nextSlide, 5000));
    
    // Swipe functionality
    let startX = 0;
    let isDragging = false;
    
    track.addEventListener('touchstart', e => {
        startX = e.touches[0].clientX;
        isDragging = true;
    });
    
    track.addEventListener('touchend', e => {
        if (!isDragging) return;
        const diffX = startX - e.changedTouches[0].clientX;
        if (Math.abs(diffX) > 50) diffX > 0 ? nextSlide() : prevSlide();
        isDragging = false;
    });
    
    updateCarousel();
    </script>
    
    {{-- <section class="py-20">
        <div class="wrapper ">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-[68px]">
                <!-- Left Container (Image) -->
                <div class="image">
                    <img src="{{asset('images/homesec1.jpg')}}" alt="Placeholder Image"
                        class="w-full h-auto rounded-2xl shadow-lg">
                </div>

                <!-- Right Container (Text) -->
                <div class="">
                    <div class="make-your-hospital-container">
                        <span>Make Your Hospital </span>
                        <b>Breastmilk<br> Smart </b>
                    </div>
                    <div class="home-sec-1">
                        <div class="for-18-years-the-south-afric-wrapper">
                            <div class="">We establish and support in-hospital human milk banks, ensuring compliance with
                                national health standards while expanding access to donor breastmilk.</div>
                        </div>
                        <div class="milk-banking-facilities-nation-parent">
                            <div class="we-are-more-container">
                                <b class="cutting-edge-solutions font-bold font-inter  text-[20px] text-[#666562]">Cutting-Edge Solutions</b>
                                <ul class="featuring-sosafes-innovative-container pl-8 " style="list-style: disc;">
                                    <li class="font-light text-[20px] font-inter">Featuring SoSAFE’s innovative
                                        “Breastmilk-in-a-Box” with affordable pasteurisers and rapid testing technology.
                                    </li>
                                </ul>
                            </div>

                            <div class="we-are-more-container">
                                <b class="cutting-edge-solutions font-bold font-inter  text-[20px] text-[#666562]">Comprehensive Care</b>
                                <ul class="featuring-sosafes-innovative-container pl-8 " style="list-style: disc;">
                                    <li class="font-light text-[20px] font-inter">From milk processing to maternal health
                                        services, we equip hospitals to meet critical neonatal care needs.</li>
                                </ul>
                            </div>

                            <div class="we-are-more-container">
                                <b class="cutting-edge-solutions font-bold font-inter  text-[20px] text-[#666562]">Expanding Access</b>
                                <ul class="featuring-sosafes-innovative-container pl-8 " style="list-style: disc;">
                                    <li class="font-light text-[20px] font-inter">44 human milk banks established
                                        nationwide, bridging the gap for underserved communities.</li>
                                </ul>
                            </div>


                        </div>

                        <div>Let’s transform infant care together.</div>
                        <div class="button-prim-wrapper">
                            <a href="{{route('breastmilk-smart')}}" class="button-prim">
                                <div class="nav-button7 cursor-pointer">
                                    <div class="button7 pt-1">Learn More About Us</div>
                                    <div class="nav-button-child">
                                    </div>
                                </div>
                                <div class="pharrow-up-wrapper cursor-pointer">
                                    <img class="pharrow-up-icon" alt="" src="{{asset('images/arrow-up.svg')}}">
                                </div>
                            </a>


                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section> --}}


    <section
        class="pt-[2px] md:pt-[120px] wrapper flex flex-col items-center justify-center text-center lg:min-h-screen py-20 md:py-0  relative overflow-hidden">
        <div class="sec3-title text-start md:text-center">
            Join Us In Our Mission To Provide Life-Saving <br> Breastmilk To Premature Babies Worldwide
        </div>

        <div class="stats-container text-start md:text-center">
            <div class="stats3">28 229+</div>
            <p class="stat-desc">Units of breastmilk distributed country-wide</p>
        </div>


        </div>

        <div class="mt-6  gap-4">

            


            <div class="button-prim-wrapper border-none cursor-pointer   relative z-50 ">
                <a href="{{route('donate')}}" class="button-prim">
                    <div class="nav-button7  text-[18px] !px-[30px] cursor-pointer">
                        <div class="button7   text-[18px]">Start Donating</div>
                        <div class="nav-button-child">
                        </div>
                    </div>
                    <div class="pharrow-up-wrapper cursor-pointer">
                        <img class="pharrow-up-icon" alt="" src="{{asset('images/new-arrow-up.svg')}}">
                    </div>
                </a>
            </div>

            <div class="mt-4">
                <div class="button-prim green-btn">
                    <a href="https://payfast.co.za/donate/go/southafricanbreastmilkreserve" target="_blank" class="nav-button7 green-btn cursor-pointer">
                        <div class="button7 px-[10px] text-[18px]">Yes, I want to contribute</div>
                        <div class="nav-button-child">
                        </div>
                    </a>
                </div>
            </div>
            
        </div>

        <!-- Image container -->
        <div class=" absolute z-[-99]  mt-12 w-full h-[300px] image-container">
            <img src="{{asset('images/rec2.jpg')}}" class="image top-left">
            <img src="{{asset('images/rec1.jpg')}}" class="image top-right">
            <img src="{{asset('images/rec4.jpg')}}" class="image center">
            <img src="{{asset('images/rec5.jpg')}}" class="image bottom-left">
            <img src="{{asset('images/rec3.jpg')}}" class="image bottom-right">
        </div>
    </section>


    <section class="bg-[#e8d8c6] rounded-[32px]">
        <div class="relative w-full  flex flex-col items-center justify-start px-4 sm:px-8 lg:px-32 py-16 sm:py-20 lg:py-32 gap-8 lg:gap-16 text-left font-work-sans">
    
            <!-- Header Section -->
            <div class="w-full max-w-6xl flex flex-col items-center justify-start gap-4 lg:gap-6">
                <div class="w-full text-[#905460]">
                    <h1 class=" text-[64px] text-center leading-tight m-0">
                        <span class="font-extrabold">Begin Helping Today</span>
                    </h1>
                    
                </div>
                <p class="w-full font-inter font-light text-[24px] text-[#503325]">
                    Human-centered programs bringing milk, care, and hope where it’s needed most.  Help us fund a miracle.
                </p>
            </div>
            
                <div class="w-full relative section-bg rounded-[32px]  overflow-hidden pb-8 flex flex-row items-start justify-center px-4  sm:px-8  lg:pr-[353px] lg:pr-32  box-border gap-6 text-left  section-text work-sans">
                    <div class="self-stretch w-full max-w-[915px] flex flex-col items-center  z-0">
                        <div class="self-stretch flex flex-col items-start justify-start gap-[24px]">
                            <div class="self-stretch flex flex-col items-start justify-start gap-[24px]">
                                <div class="self-stretch relative text-[64px]">
                                    <span class="font-bold">Feed for Life </span>
                                    <span>Initiative </span>
                                </div>
                                
                                <div class="self-stretch flex flex-col items-start justify-start inter">
                                    <div class="self-stretch relative text-[24px] font-inter font-[300]">
                                        Our Feed for Life Initiative isn't just a program - it's a lifeline woven with love, reaching into every corner of South Africa where tiny hearts beat with determination and families hold onto hope.
                                    </div>
                                </div>
                                
                                <div class="self-stretch flex flex-col lg:flex-row items-start justify-start gap-4 lg:gap-8 text-xl sm:text-2xl lg:text-[32px]">
                                    <div class="flex-1 w-full flex flex-col items-start justify-start gap-3">
                                        <div class="font-bold self-stretch relative text-[24px]">Where time<br> matters most</div>
                                        <div class="self-stretch relative text-[24px] font-inter font-[300]">
                                            We focus our tender care on our earliest arrivals, wrapping them in nutrition that speaks the language their tiny bodies understand.
                                        </div>
                                    </div>
                                    
                                    <div class="flex-1 w-full flex flex-col items-start justify-start gap-3">
                                        <div class="font-bold self-stretch relative text-[24px] ">Our promise<br> travels far</div>
                                        <div class="self-stretch relative text-[24px] font-inter font-[300]">
                                            pasteurised donor breastmilk like precious cargo to NICUs nationwide, because distance should never determine a baby's destiny.
                                        </div>
                                    </div>
                                    
                                    <div class="flex-1 w-full flex flex-col items-start justify-start gap-3 ">
                                        <div class="font-bold self-stretch relative text-[24px] font-sans">Sustainable Impact</div>
                                        <div class="self-stretch relative text-[24px] font-inter font-[300]">
                                            Strengthening neonatal care  in underserved rural areas through partnerships with Provincial Departments of Health.
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="w-full relative font-[300] text-[24px] font-inter flex items-end min-h-[63px] flex-shrink-0">
                                    Together, we can provide a healthier start for every baby.
                                </div>
                            </div>
                            
                            <div class="flex flex-col sm:flex-row items-start justify-start gap-4 lg:gap-6 text-sm sm:text-base lg:text-lg inter">
                                <a href="{{route('feed-for-life')}}" class="w-full sm:w-auto rounded-[32px] btn-primary flex flex-row items-center justify-center p-3 lg:p-4">
                                    <div class="relative font-bold">Support Feed for Life</div>
                                </a>
                                
                               
                            </div>
                        </div>
                    </div>
                    
                    <!-- Images positioned absolutely - hidden on mobile and tablet -->
                    <img class="hidden xl:block absolute rounded-2xl object-contain img-frame-99" alt="milks" src="{{asset('images/img-sec3.png')}}">
                    
                </div>
                <section class=" rounded-[32px] overflow-hidden">
                    <div class="ellipse-div3">
                        <div class="">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 pl-8  ">
                                <!-- Left Container -->
                                <div class="make-your-hospital-container !text-[#fff]  font-bold !text-[64x] mt-20">
                                    SOStainer: <span class="font-normal">Mobile Healthcare</span>
                                </div>
            
            
                                <!-- Right Container -->
                                <div class="flex items-center justify-end h-full">
                                    <img src="{{asset('images/sos-logo.png')}}" class=" h-[140px]" />
                                </div>
                            </div>
            
                            <div class="grid grid-cols-1 md:grid-cols-[1fr_1.5fr] gap-4 pl-8 mt-6">
                                <!-- Left Container (Smaller) -->
                                <div>
                                    <div class="text-white !font-[300] font-inter text-[24px] ">
                                        The SOStainer Mobile Clinic delivers essential healthcare services, including breastfeeding
                                        support, immunisations, and breastmilk pasteurisation, directly to underserved communities.
                                        <br><br>
                                        Solar-powered and versatile, it’s a vital resource for supporting mothers and young children.
                                    </div>
                                    <a href="{{route('sostainer')}}" class="explore-sostainer-parent">
                                        <b class="explore-sostainer">Explore SOStainer</b>
                                    </a>
                                </div>
            
            
                                <!-- Right Container (Larger) -->
                                <div class="flex items-start justify-end  w-full mt-[-30px] md:mt-[180px]">
                                    <img src="{{ asset('images/new-container.png') }}"
                                        class="object-cover w-full h-full" />
                                </div>
            
                            </div>
            
            
            
            
            
                        </div>
                    </div>
                </section>
        </div>
    </section>

    {{-- <section class="py-20">
        <div class="wrapper ">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-[68px]">

                <!-- Right Container (Text) -->
                <div class="">
                    <div class="make-your-hospital-container">
                        <span>Feed for Life Initiative </span>

                    </div>
                    <div class="home-sec-1">
                        <div class="for-18-years-the-south-afric-wrapper">
                            <div class="">SABR’s Feed for Life Initiative bridges critical gaps in neonatal care, ensuring
                                life-saving donor breastmilk reaches South Africa’s most vulnerable infants. </div>
                        </div>
                        <div class="milk-banking-facilities-nation-parent">
                            <div class="we-are-more-container">
                                <b class="cutting-edge-solutions font-bold font-inter  text-[20px] text-[#666562]">Equitable Access</b>
                                <ul class="featuring-sosafes-innovative-container pl-8 " style="list-style: disc;">
                                    <li class="font-light text-[20px] font-inter">Delivering pasteurised donor breastmilk
                                        to infants in NICUs nationwide.
                                    </li>
                                </ul>
                            </div>

                            <div class="we-are-more-container">
                                <b class="cutting-edge-solutions font-bold font-inter  text-[20px] text-[#666562]">Priority Care</b>
                                <ul class="featuring-sosafes-innovative-container pl-8 " style="list-style: disc;">
                                    <li class="font-light text-[20px] font-inter">Focused on babies born before 37 weeks,
                                        ensuring vital early nutrition.</li>
                                </ul>
                            </div>

                            <div class="we-are-more-container">
                                <b class="cutting-edge-solutions font-bold font-inter  text-[20px]  text-[#666562]">Sustainable Impact</b>
                                <ul class="featuring-sosafes-innovative-container pl-8 " style="list-style: disc;">
                                    <li class="font-light text-[20px] font-inter">Strengthening neonatal care in
                                        underserved rural areas through partnerships with Provincial Departments of Health.
                                    </li>
                                </ul>
                            </div>


                        </div>

                        <div>Together, we can provide a healthier start for every baby.</div>
                        <div class="button-prim-wrapper">
                            <a href="{{route('feed-for-life')}}" class="button-prim">
                                <div class="nav-button7 cursor-pointer">
                                    <div class="button7 pt-1">Learn More About Us</div>
                                    <div class="nav-button-child">
                                    </div>
                                </div>
                                <div class="pharrow-up-wrapper cursor-pointer">
                                    <img class="pharrow-up-icon" alt="" src="{{asset('images/arrow-up.svg')}}">
                                </div>
                            </a>


                        </div>


                    </div>
                </div>
                <div class="image">
                    <img src="{{asset('images/homesec1.jpg')}}" alt="Placeholder Image"
                        class="w-full h-auto rounded-2xl shadow-lg">
                </div>
            </div>
        </div>
    </section> --}}


    <section class="py-20">
        <div class="wrapper">
            <div class="!text-[#905460]  font-bold make-your-hospital-container text-center justify-center items-center !flex">
                <span>Making it Possible </span>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 place-items-center mt-10 mb:mt-20">
                <img src="{{asset('images/discovery_logo.png')}}" alt="Discovery logo"
                    class="w-[298px] h-[60px]">

                <img src="{{asset('images/sosafe_logo.png')}}" alt="So safe" class="w-[192px] h-[111px]">

                <img src="{{asset('images/Manufact.png')}}" alt="Manufact" class="w-[205px] h-[81px]">

                <img src="{{asset('images/fgx_logo.png')}}" alt="FGX Logo" class="w-[140px] h-[50px]">
            </div>

        </div>
    </section>

    <section class=" bg-[#948ea7]">
        <div class="w-full relative bg-primary-purple overflow-hidden flex flex-col items-end justify-start wrapper pt-[20px] md:pt-[120px] pb-20 box-border gap-16 text-right text-6xl text-cream font-work-sans">
            <!-- Header Section -->
            <div class="w-full max-w-4xl flex flex-col items-end justify-start gap-3 z-10">
                <h1 class="self-stretch text-6xl font-bold">Help Us, Or Let Us Help You</h1>
                <h2 class="self-stretch text-[32px] text-cream font-inter font-bold">Get In Touch</h2>
            </div>
            
            <!-- Cards Container -->
            <div class="self-stretch flex flex-col items-center justify-start gap-6 z-20 text-left text-lg text-white font-inter">
                <!-- Top Row - 3 Cards -->
                <div class="self-stretch flex flex-row items-center justify-between gap-0 flex-wrap lg:flex-nowrap">
                    <!-- Donate Breastmilk Card -->
                    <div class="w-full lg:w-96 rounded-3xl mt-5 bg-card-bg border border-card-border overflow-hidden flex-shrink-0 flex flex-row items-start justify-start relative  h-[320px] group hover:shadow-lg transition-all duration-300">
                        <!-- Background Effects -->
                        <div class="absolute -top-48 -left-96 w-full h-full backdrop-blur-2xl opacity-20"></div>
                        
                        <!-- Card Content -->
                        <div class="w-full bg-card-bg  border-white h-full flex flex-col items-start justify-center p-6 z-10 relative ">
                            <div class="self-stretch flex-1 relative">
                                <!-- Tags -->
                                <div class="absolute top-0 left-0 w-full flex flex-row items-center justify-between">
                                    <a href="{{route('donate')}}" class="rounded-md bg-primary-purple flex flex-row items-center justify-center px-3 py-2">
                                        <span class="font-bold text-sm">Register</span>
                                    </a>
                                    <div class="w-8 h-8  rounded-full flex items-center justify-center">
                                        <img class="w-8 h-8" alt="" src="{{asset('images/holding-hands-icon.svg')}}">    
                                    </div>
                                </div>
                                
                                <!-- Copy -->
                                <div class="absolute top-12 left-0 w-full">
                                    <h3 class="text-2xl font-work-sans font-semibold mb-2 text-white">Donate Breastmilk</h3>
                                    <p class="text-lg font-light font-inter text-white/90">Your milk can provide vital nourishment for babies in need.</p>
                                </div>
                                
                                <!-- Button -->
                                <div class="absolute bottom-0  right-0 flex flex-row items-end justify-end">
                                    <a href="{{route('donate')}}" class="flex flex-row items-center gap-2 group-hover:gap-3 transition-all duration-300">
                                        <span class="text-lg font-[300]">Give Hope</span>
                                        <div class="w-5 h-5 flex items-center justify-center">
                                            <img class="" alt="" src="{{asset('images/right-arrwow.svg')}}">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Volunteer Card -->
                    <div class="w-full lg:w-96 rounded-3xl mt-5 bg-card-bg border border-card-border overflow-hidden flex-shrink-0 flex flex-row items-start justify-start relative  h-[320px] group hover:shadow-lg transition-all duration-300">
                        <!-- Card Content -->
                        <div class="w-full bg-card-bg border border-card-border h-full flex flex-col items-start justify-center p-6 z-10 relative">
                            <a href={{route('volunteer')}} class="self-stretch flex-1 relative">
                                <!-- Tags -->
                                <div class="absolute top-0 left-0 w-full flex flex-row items-center justify-between">
                                    <div class="rounded-md bg-primary-purple flex flex-row items-center justify-center px-3 py-2">
                                        <span class="font-bold text-sm">Register</span>
                                    </div>
                                    <div class="w-8 h-8  rounded-full flex items-center justify-center">
                                        <img class="w-8 h-8" alt="" src="{{asset('images/Alarm.svg')}}">    
                                    </div>
                                </div>
                                
                                <!-- Copy -->
                                <div class="absolute top-12 left-0 w-full">
                                    <h3 class="text-2xl font-work-sans font-semibold mb-2 text-white">Volunteer Your Time</h3>
                                    <p class="text-lg font-light font-inter text-white/90">From collections and deliveries to assisting the SABR team, volunteers help us make it all happen.</p>
                                </div>

                                
                                
                                <!-- Button -->
                                <div class="absolute bottom-0 right-0 m-5 flex flex-row items-end justify-end">
                                    <a href="{{route('volunteer')}}" class="flex flex-row items-center gap-2 group-hover:gap-3 transition-all duration-300">
                                        <span class="text-lg font-[300]">Begin Helping Today</span>
                                        <div class="w-5 h-5 flex items-center justify-center">
                                            <div class="w-5 h-5 flex items-center justify-center">
                                                <img class="" alt="" src="{{asset('images/right-arrwow.svg')}}">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Financial Donation Card -->
                    <div class="w-full lg:w-96 rounded-3xl mt-5 bg-card-bg border border-white overflow-hidden flex-shrink-0 flex flex-row items-start justify-start relative h-[320px] group hover:shadow-lg transition-all duration-300">
                        <!-- Card Content -->
                        <div class="w-full bg-card-bg border border-card-border h-full flex flex-col items-start justify-center p-6 z-10 relative">
                            <a href="https://payfast.co.za/donate/go/southafricanbreastmilkreserve" class="self-stretch flex-1 relative">
                                <!-- Tags -->
                                <div class="absolute top-0 left-0 w-full flex flex-row items-center justify-between">
                                    <div class="rounded-md bg-primary-purple flex flex-row items-center justify-center px-3 py-2">
                                        <span class="font-bold text-sm">Register</span>
                                    </div>
                                    <div class="w-9 h-9  rounded-full flex items-center justify-center">
                                        <img class="w-8 h-8" src="{{asset('images/Heart_01.png')}}"/>
                                    </div>
                                </div>
                                
                                <!-- Copy -->
                                <div class="absolute top-12 left-0 w-full">
                                    <h3 class="text-2xl font-work-sans font-semibold mb-2 text-white">Donate</h3>
                                    <p class="text-lg font-light font-inter text-white/90">Help us save lives. Your financial contribution supports SABR's programmes, bringing life-saving donor breastmilk and care to vulnerable infants across SA.</p>
                                </div>
                                
                                <!-- Button -->
                                <div class="absolute bottom-0 right-0 m-5 flex flex-row items-end justify-end">
                                    <a href="https://payfast.co.za/donate/go/southafricanbreastmilkreserve" class="flex flex-row items-center gap-2 group-hover:gap-3 transition-all duration-300">
                                        <span class="text-lg font-[300]">Fund a Miracle</span>
                                        <div class="w-5 h-5 flex items-center justify-center">
                                            <div class="w-5 h-5 flex items-center justify-center">
                                                <img class="" alt="" src="{{asset('images/right-arrwow.svg')}}">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Bottom Row - 2 Cards -->
                <div class="self-stretch flex flex-row items-start justify-center gap-11 flex-wrap lg:flex-nowrap">
                    <!-- Parent Card -->
                    <div class="w-full lg:w-96 rounded-3xl bg-card-bg border border-card-border overflow-hidden flex-shrink-0 flex flex-row items-start justify-start relative h-[320px] group hover:shadow-lg transition-all duration-300">
                        <!-- Background -->
                        <div class="absolute inset-0 bg-card-bg backdrop-blur-2xl"></div>
                        
                        <!-- Card Content -->
                        <div class="flex-1 flex flex-col items-start justify-start p-6 z-10 relative">
                            <a href={{route('register')}} class="self-stretch flex flex-col items-start justify-start gap-4">
                                <!-- Header -->
                                <div class="self-stretch flex flex-row items-center justify-between">
                                    <div class="rounded-md bg-primary-purple flex flex-row items-center justify-center px-3 py-2">
                                        <span class="font-bold text-sm text-white">Register</span>
                                    </div>
                                    <div class="w-8 h-8 rounded-full flex items-center justify-center">
                                        <img class="w-8 h-8" src="{{asset('images/icon-child.svg')}}"/> 
                                    </div>
                                </div>
                                
                                <!-- Content -->
                                <div class="self-stretch flex flex-col items-start justify-start gap-3">
                                    <h3 class="self-stretch text-2xl font-work-sans font-semibold text-white">I am a Parent</h3>
                                    <p class="w-full text-lg font-light font-inter text-white/90">If your baby can't receive milk from you, we're here to help. Donated breastmilk is love in liquid form - giving your child the best possible start when they need it most.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Clinician Card -->
                    <div class="w-full lg:w-96 bg-[#9f9ab1] shadow-[0px_0px_12px_rgba(0,0,0,0.45)] rounded-3xl border border-white overflow-hidden flex-shrink-0 flex flex-row items-center justify-center relative h-[320px] group hover:shadow-xl transition-all duration-300">
                        <!-- Background Effects -->
                        <div class="absolute inset-0 backdrop-blur-2xl"></div>
                        
                        <!-- Card Content -->
                        <div class="self-stretch flex-1 flex flex-col items-start justify-start p-6 z-10 relative">
                            <div class="self-stretch flex-1 flex flex-col items-start justify-start gap-4">
                                <!-- Header -->
                                <div class="self-stretch flex flex-row items-center justify-between">
                                    <div class="rounded-md bg-pill-bg flex flex-row items-center justify-center px-3 py-2">
                                        <span class="font-bold text-sm text-white">Coming Soon</span>
                                    </div>
                                    <div class="w-8 h-8 rounded-full flex items-center justify-center">
                                        <img class="w-8 h-8" src="{{asset('images/doctor-icon.svg')}}"/>
                                    </div>
                                </div>
                                
                                <!-- Content -->
                                <div class="self-stretch flex flex-col items-start justify-start gap-3">
                                    <h3 class="self-stretch text-2xl font-work-sans font-semibold text-white">I am a Clinician</h3>
                                    <p class="self-stretch text-lg font-light font-inter text-white whitespace-pre-wrap">If your baby can't receive milk from you, we're here to help. Donated breastmilk is love in liquid form - giving your child the best possible start when they need it most.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Background Images (Placeholder areas) -->
            <div class="absolute -top-4 left-14 w-96 h-96  z-[10] hidden md:block ">
                <img src="{{asset('images/babyhands.png')}}" alt=""/>
            </div>
            <div class="absolute top-9 -left-8 w-64 h-72  z-40 hidden md:block">
                <img src="{{asset('images/baby-sec4.png')}}" alt=""/>
            </div>
        </div>
    </section>

    {{-- <section class="pt-10">
        <div class="ellipse-div">
            <div class="wrapper">
                <div class="help-us-or-let-us-help-you-parent pb-10">
                    <h1 class="help-us-or">Help Us, Or Let Us Help You</h1>
                    <h3 class="get-in-touch ">Get In Touch</h3>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                    <div class="details-4">
                        <div class="info gap-3">
                            <div class="tags">
                                <div class="pills">
                                    <div class="start-searching">Register</div>
                                </div>
                                <img class="healthiconschild-program-outl" alt=""
                                    src="{{asset('images/doctor-icon2.svg')}}">
                            </div>
                            <div class="copy">
                                <div class="saving-lives-one-container font-sans">Donate Breastmilk</div>
                                <div class="help-save-lives !font-inter  !font-[300]">Your milk can provide vital nourishment for babies in need.
                                </div>
                            </div>
                            <div class="flex items-end justify-end w-full mt-4">
                                <a href="{{route('donate')}}" class="card-button flex gap-1 row justify-end">
                                    <div class="start-today !font-inter">Start Today</div>
                                    <img class="mingcuteright-line-icon" alt="" src="{{asset('images/right-line.svg')}}">
                                </a>
                            </div>


                        </div>
                    </div>

                    <div class="details-4">
                        <div class="info">
                            <div class="tags">
                                <div class="pills">
                                    <div class="start-searching">Register</div>
                                </div>
                                <img class="healthiconschild-program-outl" alt=""
                                    src="{{asset('images/doctor-icon2.svg')}}">
                            </div>
                            <div class="copy">
                                <div class="saving-lives-one-container font-sans">Volunteer Your Time</div>
                                <div class="help-save-lives !font-inter !font-[300]">From collections and deliveries to assisting the SABR team,
                                    volunteers help us make it all happen. </div>
                            </div>
                            <div class="flex items-end justify-end w-full mt-4">
                                <a href="{{route('volunteer')}}" class="card-button flex gap-1 row justify-end">
                                    <div class="start-today !font-inter">Start Today</div>
                                    <img class="mingcuteright-line-icon" alt="" src="{{asset('images/right-line.svg')}}">
                                </a>
                            </div>


                        </div>
                    </div>

                    <div class="details-4">
                        <div class="info">
                            <div class="tags">
                                <div class="pills">
                                    <div class="start-searching">Register</div>
                                </div>
                                <img class="healthiconschild-program-outl" alt=""
                                    src="{{asset('images/doctor-icon2.svg')}}">
                            </div>
                            <div class="copy">
                                <div class="saving-lives-one-container">Donate</div>
                                <div class="help-save-lives !font-inter  !font-[300]">Help us save lives. Your financial contribution supports SABR’s
                                    programmes, bringing life-saving donor breastmilk and care to vulnerable infants across
                                    South Africa.</div>
                            </div>
                            <div class="flex items-end justify-end w-full mt-4">
                                <a href="https://payfast.co.za/donate/go/southafricanbreastmilkreserve" target="_blank" class="card-button flex gap-1 row justify-end">
                                    <div class="start-today !font-inter">Start Today</div>
                                    <img class="mingcuteright-line-icon" alt="" src="{{asset('images/right-line.svg')}}">
                                </a>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-5 mt-8">
                    <div class="details-4 !bg-[#107BA226] !text-[#107BA2]">
                        <div class="info gap-3">
                            <div class="tags">
                                <div class="pills !bg-[#107BA226]">
                                    <div class="start-searching">Register</div>
                                </div>
                                <img class="healthiconschild-program-outl" alt=""
                                    src="{{asset('images/doctor-icon2.svg')}}">
                            </div>
                            <div class="copy">
                                <div class="saving-lives-one-container">I am a Parent</div>
                                <div class="help-save-lives !font-inter !font-[300]">If your baby needs donor breastmilk, we’re here to help. Access
                                    safe, pasteurised breastmilk for your little one and learn how SABR supports families in
                                    need.</div>
                            </div>
                            <div class="flex items-end justify-end w-full mt-4">
                                <a href="{{route('register')}}" class="card-button flex gap-1 row justify-end">
                                    <div class="start-today !font-inter">Start Today</div>
                                    <img class="mingcuteright-line-icon" alt="" src="{{asset('images/right-line.svg')}}">
                                </a>
                            </div>


                        </div>
                    </div>

                    <div class="details-4 !bg-[#FFFFFF80]">
                        <div class="info gap-3">
                            <div class="tags">
                                <div class="pills">
                                    <div class="start-searching">Register</div>
                                </div>
                                <img class="healthiconschild-program-outl" alt=""
                                    src="{{asset('images/doctor-icon2.svg')}}">
                            </div>
                            <div class="copy">
                                <div class="saving-lives-one-container">I am a Doctor</div>
                                <div class="help-save-lives !font-inter  !font-[300]">Bring life-saving breastmilk services to your facility. Partner
                                    with SABR to access donor breastmilk and establish human milk-banking infrastructure in
                                    your practice.</div>
                            </div>
                            <div class="flex items-end justify-end w-full mt-4">
                                <a href="{{route('register')}}" class="card-button flex gap-1 row justify-end">
                                    <div class="start-today !font-inter">Start Today</div>
                                    <img class="mingcuteright-line-icon" alt="" src="{{asset('images/right-line.svg')}}">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="details-4 !bg-[#107BA280]">
                        <div class="info gap-3 !text-[#ffff]">
                            <div class="tags">
                                <div class="pills !bg-[#107BA280] text-[#ffff]">
                                    <div class="start-searching">Register</div>
                                </div>
                                <img class="healthiconschild-program-outl" alt="" src="{{asset('images/doc-white.svg')}}">
                            </div>
                            <div class="copy ">
                                <div class="saving-lives-one-container">I am a Clinician</div>
                                <div class="help-save-lives !font-inter  !font-[300]">Help save lives by donating your excess breastmilk to babies in
                                    need. Your gift can make all the difference.</div>
                            </div>
                            <div class="flex items-end justify-end w-full mt-4">
                                <a href="{{route('register')}}" class="card-button flex gap-1 row justify-end">
                                    <div class="start-today !font-inter">Start Today</div>
                                    <img class="mingcuteright-line-icon" alt="" src="{{asset('images/right-line.svg')}}">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

   

    {{-- <section class="pt-20 pb-[80px]">
        <div class="wrapper">
            <div class="home-sec5 !p-0">
                <div class=" flex flex-col lg:flex-row r gap-6 ">
                    <div class="flex-1 flex flex-col justify-center  gap-6">
                        <div class="text-[#107BA2] text-4xl md:text-6xl font-bold">News</div>
                        
                    </div>
                    <div id="scrollContainer" class="max-w-[730px] overflow-x-auto whitespace-nowrap py-4 px-4">
                        <div class="flex gap-6">
                            @forelse($news as $article)
                                <div class="w-80 h-[440px] relative shrink-0 cursor-pointer hover:transform hover:scale-105 transition-transform duration-300"
                                     onclick="window.location.href='{{ route('news.article', $article->slug) }}'">
                                    
                                        <img class="h-full w-full object-cover rounded-lg" 
                                             src="{{ $article->small_image ? env('CMS_UPLOADS') . 'posts/small/' . $article->small_image : asset('images/baby2.jpg') }}" 
                                             alt="{{ $article->title }}" />
                                    
                                    <div class="absolute bottom-2 left-2 right-2 p-4 bg-[#FAF8F5] border border-[#DEDAD4] rounded-lg">
                                        <div class="text-[#868480] text-lg font-bold truncate">{{ Str::limit($article->title, 50) }}</div>
                                        <div class="text-[#868480] text-[16px] truncate"></div>
                                        <div class="mt-2 flex justify-end">
                                            <div class="px-2 py-1 bg-[#F4F0E9] rounded text-xs text-[#ADAAA5]">
                                                @if($article->article_date instanceof \Carbon\Carbon)
                                                    {{ $article->article_date->format('j M') }}
                                                @else
                                                    {{ \Carbon\Carbon::parse($article->article_date)->format('j M') }}
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="absolute top-4 left-4 px-2 py-1 bg-[#F4F0E9] rounded text-xs text-[#ADAAA5]">
                                        News
                                    </div>
                                    
                                    
                                </div>
                            @empty
                                <div class="w-80 h-[440px] relative shrink-0">
                                    <div class="h-full bg-gray-200 rounded-lg flex items-center justify-center">
                                        <p class="text-gray-500">No news articles available</p>
                                    </div>
                                </div>
                            @endforelse
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section> --}}


    <section class="py-[80px]  bg-[#e8d8c6]">
        <div class="wrapper ">
            <div class=" bg-[#e8d8c6] inline-flex justify-center items-start gap-[98px]">
                <div class="flex-1 self-stretch flex flex-col justify-start items-center gap-8">
                    <div class="self-stretch flex flex-col lg:flex-row justify-start items-start gap-6">
                        <!-- Left Section -->
                        <div class="flex-1 flex flex-col justify-center items-start gap-3">
                            <div class="self-stretch text-[#6d5d43] text-6xl font-normal leading-tight">
                                Take the <span class="font-bold">Next<br> Step</span>
                            </div>
                            <div class="self-stretch h-auto flex flex-col justify-start items-start gap-6">
                                <p class="self-stretch text-[#6d5d43] text-2xl font-inter font-[300]">
                                    Bring SoSAFE to your facility and set a new standard in breastmilk safety.
                                </p>
                            </div>
                        </div>

                        <!-- Right Section -->
                        <div class="flex-1 flex flex-col justify-center items-start gap-3">
                            <div class="self-stretch h-auto flex flex-col justify-start items-start gap-6">
                                <p class="self-stretch text-[#6d5d43] text-3xl font-bold">
                                    Ready to Learn More?
                                </p>
                            </div>
                            <div class="self-stretch h-auto flex flex-col justify-start items-start gap-6">
                                <p class="self-stretch text-[#6d5d43]  text-2xl font-[300] font-inter">
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



    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const imageContainer = document.querySelector(".image-container");

            function toggleImages() {
                const rect = imageContainer.getBoundingClientRect();

                if (rect.top < window.innerHeight * 0.75 && rect.bottom > 0) {
                    imageContainer.classList.add("show"); // Show when section is in view
                } else {
                    imageContainer.classList.remove("show"); // Hide when section is out of view
                }
            }

            window.addEventListener("scroll", toggleImages);
            toggleImages(); // Run once on load to check the initial state
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const numbers = [
                "50726",
                "156",
                "3074",
                "22",
                "832",
                "28229",
                "24",
                "2"
            ];

            const descriptions = [
                "Units of breastmilk distributed country-wide",
                "Premature babies helped since 2003",
                "Hospitals supported with human milk banking services",
                "Infants fed human milk March 2023 - Feb 2024",
                "Situated in Public Hospitals",
                "Donors supplying breastmilk March 2023 - Feb 2024",
                "SABR human milk banking hospital facilities",
                "Additional collection centres"
            ];

            let index = 0;
            const statsNumber = document.querySelector(".stats3");
            const statsDesc = document.querySelector(".stat-desc");

            function animateNumber(target) {
                let current = 0;
                const increment = Math.ceil(target / 0); // Smooth step count

                function update() {
                    if (current < target) {
                        current += increment;
                        if (current > target) current = target;
                        statsNumber.textContent = current.toLocaleString() + "+"; // Format with commas
                        requestAnimationFrame(update);
                    }
                }

                update();
            }

            function updateStats() {
                statsNumber.classList.remove("show");
                statsDesc.classList.remove("show");

                setTimeout(() => {
                    animateNumber(parseInt(numbers[index]));
                    statsDesc.textContent = descriptions[index];

                    statsNumber.classList.add("show");
                    statsDesc.classList.add("show");

                    index = (index + 1) % numbers.length; // Loop through both arrays
                }, 300);
            }

            setInterval(updateStats, 3000); // Change every 3 seconds
            updateStats(); // Start the animation immediately
        });
    </script>

    <script>
        const container = document.getElementById("scrollContainer");

        let isDown = false;
        let startX;
        let scrollLeft;

        container.addEventListener("mousedown", (e) => {
            isDown = true;
            container.classList.add("active");
            startX = e.pageX - container.offsetLeft;
            scrollLeft = container.scrollLeft;
        });

        container.addEventListener("mouseleave", () => {
            isDown = false;
            container.classList.remove("active");
        });

        container.addEventListener("mouseup", () => {
            isDown = false;
            container.classList.remove("active");
        });

        container.addEventListener("mousemove", (e) => {
            if (!isDown) return;
            e.preventDefault();
            const x = e.pageX - container.offsetLeft;
            const walk = (x - startX) * 2; // Adjust scrolling speed
            container.scrollLeft = scrollLeft - walk;
        });
    </script>

@endsection