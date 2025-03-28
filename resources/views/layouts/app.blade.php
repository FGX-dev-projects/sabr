<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600&display=swap" rel="stylesheet">

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}"></script>
    @endif

    <!-- In your HTML head section -->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
     <!-- Toastr CSS -->
     
</head>

<body class="font-sans">
    @flasher_render
    <div class="sm-icon01-parent">
        <a href="https://www.facebook.com/pages/South-African-Breastmilk-Reserve/117615928250441" target="_blank" class="sm-icon01">
            <img class="rifacebook-fill-icon" alt="" src="{{asset('images/facebook.svg')}}">
        </a>
        <a href="https://twitter.com/SABRMilk" target="_blank" class="sm-icon01">
            <img class="rifacebook-fill-icon" alt="" src="{{asset('images/twitter.svg')}}">
        </a>
        <div class="frame-child">
        </div>
    </div>
    <div class="navigation wrapper  !fixed   py-[28px]">
        <img src="{{ asset('images/logo.png') }}" class="h-[112px] rounded-lg" alt="Logo">

        <div class="md:hidden cursor-pointer" id="mobile-menu-button">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </div>
        <div class="buttons md:flex hidden">
            <a href="{{ route('home') }}" class="nav-button {{ Route::is('home') ? 'bg-[#dedad4] text-[#00000080]' : '' }}">
                <div class="button">Home</div>
            </a>
            <div class="relative">
                <!-- Main Button -->
                <div class="nav-button flex items-center cursor-pointer p-2  rounded-lg ">
                    <div class="button">About Us</div>
                    <img class="mingcuteright-line-icon ml-2 w-4 h-4" alt=""
                        src="{{ asset('images/nav-dropdown-icon.svg') }}">
                </div>

                <!-- Dropdown Menu -->
                <div
                    class="dropdown-menu absolute text-sm left-0 mt-2 w-[255px] bg-[#f8f5f0] border  border-gray-300 dropdown-shadow px-[12px] py-[6px] text-left rounded-3xl hidden">
                    <a href="{{ route('about-us') }}" class="{{ Route::is('about-us') ? 'bg-[#dedad4] text-[#00000080]'  : '' }} text-left block px-4 py-2 transition ease-in duration-[0.4s] hover:bg-white rounded-xl"
                        >About
                        Us</a>
                    <a href="{{ route('stats') }}" class="{{ Route::is('stats') ? 'bg-[#dedad4] text-[#00000080]'  : '' }} text-left block px-4 py-2 transition ease-in duration-[0.4s] hover:bg-white rounded-xl"
                        >Stats</a>
                    <a href="{{ route('board-of-directors') }}" class="{{ Route::is('board-of-directors') ? 'bg-[#dedad4] text-[#00000080]'  : '' }} text-left block px-4 py-2 transition ease-in duration-[0.4s] hover:bg-white rounded-xl" class="block px-4 py-2 transition ease-in duration-[0.4s] hover:bg-white rounded-xl">Our
                        Board of Directors</a>
                    <a href="{{asset('documents/SABR-Annual-Report-14-10-2020.pdf')}}" target="_blank"
                        class="block px-4 py-2 transition ease-in duration-[0.4s] hover:bg-white rounded-xl"><span
                            class="px-2.5 py-1.5 text-[11px] text-[#adaaa5] !bg-[#f4f0e9] rounded-[6px]">2020/10</span>
                        Annual Report</a>
                    <a href="{{ route('financials') }}" class="{{ Route::is('financials') ? 'bg-[#dedad4] text-[#00000080]'  : '' }} text-left block px-4 py-2 transition ease-in duration-[0.4s] hover:bg-white rounded-xl">Annual
                        Financial Statements</a>
                </div>
            </div>

            <div class="relative">
                <a href="{{ route(name: 'impact') }}" class="nav-button {{ Route::is('impact') ? 'bg-[#dedad4] text-[#00000080]' : '' }}">
                    <div class="button">Our Impact</div>
                </a>
            </div>

            <div class="relative">
                <div class="nav-button flex items-center cursor-pointer p-2  rounded-lg">
                    <div class="button">Innovation</div>
                    <img class="mingcuteright-line-icon" alt="" src="{{ asset('images/nav-dropdown-icon.svg') }}">
                </div>

                <div
                    class="dropdown-menu absolute text-sm left-0 mt-2 w-[455px] bg-[#f8f5f0] border  border-gray-300 dropdown-shadow pl-[12px] pr-[5px] py-[6px] text-left rounded-3xl hidden">
                    <a href="{{ route('feed-for-life') }}" class="{{ Route::is('feed-for-life') ? 'bg-[#dedad4] text-[#00000080]'  : '' }} text-left block px-4 py-2 transition ease-in duration-[0.4s] hover:bg-white rounded-xl"><span
                            class="px-2.5 py-1.5 text-[11px] text-[#adaaa5] !bg-[#f4f0e9] rounded-[6px]">Programme</span>
                        Feed for Life Initiative</a>
                    <a href="{{ route('breastmilk-smart') }}" class="{{ Route::is('breastmilk-smart') ? 'bg-[#dedad4] text-[#00000080]'  : '' }} text-left block px-4 py-2 transition ease-in duration-[0.4s] hover:bg-white rounded-xl"><span
                        class="px-2.5 py-1.5 text-[11px] text-[#adaaa5] !bg-[#f4f0e9] rounded-[6px]">Programme</span>
                        Make Your Hospital Breastmilk Smart</a>
                    <a href="{{ route('sostainer') }}" class="{{ Route::is('sostainer') ? 'bg-[#dedad4] text-[#00000080]'  : '' }} text-left block px-4 py-2 transition ease-in duration-[0.4s] hover:bg-white rounded-xl"
                        ><span
                            class="px-2.5 py-1.5 text-[11px] text-[#adaaa5] !bg-[#f4f0e9] rounded-[6px]">Programme</span>
                        SOStainer Mobile Container Clinics</a>
                    <a href="{{ route('sosafe') }}" class="{{ Route::is('sosafe') ? 'bg-[#dedad4] text-[#00000080]'  : '' }} text-left block px-4 py-2 transition ease-in duration-[0.4s] hover:bg-white rounded-xl"><span
                            class="px-2.5 py-1.5 text-[11px] text-[#adaaa5] !bg-[#f4f0e9] rounded-[6px]">Programme</span>
                        SoSAFE Pasteuriser</a>
                    <a href="{{ route('research') }}" class="{{ Route::is('research') ? 'bg-[#dedad4] text-[#00000080]'  : '' }} text-left block px-4 py-2 transition ease-in duration-[0.4s] hover:bg-white rounded-xl"><span
                            class="px-2.5 py-1.5 text-[11px] text-[#adaaa5] !bg-[#f4f0e9] rounded-[6px]">Programme</span>
                        Research at SABR</a>
                </div>
            </div>


            <div class="relative">
                <a href="{{ route(name: 'get-involved') }}" class="nav-button {{ Route::is('get-involved') ? 'bg-[#dedad4] text-[#00000080]' : '' }}">
                    <div class="button">Get Involved</div>
                </a>
            </div>
            <div class="relative">
                <div class="nav-button flex items-center cursor-pointer p-2  rounded-lg">
                    <div class="button">Resources</div>
                    <img class="mingcuteright-line-icon" alt="" src="{{ asset('images/nav-dropdown-icon.svg') }}">
                </div>

                <div
                    class="dropdown-menu absolute text-sm left-0 mt-2 w-[300px] bg-[#f8f5f0] border  border-gray-300 dropdown-shadow px-[12px] py-[6px] text-left rounded-3xl hidden">
                    <a href="{{ route('breast-is-best') }}" class="{{ Route::is('breast-is-best') ? 'bg-[#dedad4] text-[#00000080]'  : '' }} text-left block px-4 py-2 transition ease-in duration-[0.4s] hover:bg-white rounded-xl">Best In
                        Breast (FAQs)</a>
                    <a href="{{ route('why-the-cost') }}" class="{{ Route::is('why-the-cost') ? 'bg-[#dedad4] text-[#00000080]'  : '' }} text-left block px-4 py-2 transition ease-in duration-[0.4s] hover:bg-white rounded-xl">Why
                        The Cost?</a>
                    <a href="{{ route('safe-user-of-dbm') }}" class="{{ Route::is('safe-user-of-dbm') ? 'bg-[#dedad4] text-[#00000080]'  : '' }} text-left block px-4 py-2 transition ease-in duration-[0.4s] hover:bg-white rounded-xl" class="block px-4 py-2 transition ease-in duration-[0.4s] hover:bg-white rounded-xl">The
                        Safe Use of DBM</a>
                    <a href="#" class="block px-4 py-2 transition ease-in duration-[0.4s] hover:bg-white rounded-xl">How
                        to Access DBM / Value of DBM</a>
                </div>
            </div>
            <div class="relative">
                <a href="{{ route(name: 'contact-us') }}" class="nav-button {{ Route::is('contact-us') ? 'bg-[#dedad4] text-[#00000080]' : '' }}">
                    <div class="button">Contact Us</div>
                </a>
            </div>
        </div>
        <div class="nav-button7  md:flex hidden cursor-pointer z-0">
            <a href="http://payfast.co.za/donate/go/southafricanbreastmilkreserve" target="_blank" class="button7">Donate Today</a>
        </div>


        <!-- Mobile Menu -->
        <div class="mobile-menu  hidden md:hidden absolute top-[140px] left-10 w-[350px] mx-auto bg-[#f8f5f0] border border-gray-300 dropdown-shadow px-[12px] py-[6px] text-left rounded-3xl z-50"
            id="mobile-menu">
            <a href="{{ route('home') }}"
            class="block px-4 py-2 text-mobile transition ease-in duration-[0.4s]  hover:bg-white rounded-xl">Home</a>
        
        <div class="relative">
            <div class="nav-button flex items-center cursor-pointer p-2 rounded-lg">
                <div class="button text-mobile">About Us</div>
                <img class="mingcuteright-line-icon ml-2 w-4 h-4" alt=""
                    src="{{ asset('images/nav-dropdown-icon.svg') }}">
            </div>
            <div class="dropdown-menu mt-2 w-full bg-[#f8f5f0] border border-gray-300 dropdown-shadow px-[12px] py-[6px] text-left rounded-3xl">
                <a href="{{ route('about-us') }}" class="block px-4 py-2 transition ease-in duration-[0.4s] hover:bg-white rounded-xl">About Us</a>
                <a href="{{ route('stats') }}" class="block px-4 py-2 transition ease-in duration-[0.4s] hover:bg-white rounded-xl">Stats</a>
                <a href="{{ route('board-of-directors') }}" class="block px-4 py-2 transition ease-in duration-[0.4s] hover:bg-white rounded-xl">Our Board of Directors</a>
                <a href="{{ asset('documents/SABR-Annual-Report-14-10-2020.pdf') }}" class="block px-4 py-2 transition ease-in duration-[0.4s] hover:bg-white rounded-xl">
                    <span class="px-2.5 py-1.5 text-[11px] text-[#adaaa5] !bg-[#f4f0e9] rounded-[6px]">2024/25</span> Annual Report
                </a>
                <a href="{{ route('financials') }}" class="block px-4 py-2 transition ease-in duration-[0.4s] hover:bg-white rounded-xl">Annual Financial Statements</a>
            </div>
        </div>
        
        <a href="{{ route('impact') }}" class="block px-4 py-2 transition ease-in duration-[0.4s] text-mobile hover:bg-white rounded-xl">Impact</a>
        
        <div class="relative">
            <div class="nav-button flex items-center cursor-pointer p-2 rounded-lg">
                <div class="button text-mobile">Innovation</div>
                <img class="mingcuteright-line-icon ml-2 w-4 h-4" alt=""
                    src="{{ asset('images/nav-dropdown-icon.svg') }}">
            </div>
            <div class="dropdown-menu absolute text-sm left-0 mt-2 w-[455px] bg-[#f8f5f0] border border-gray-300 dropdown-shadow pl-[12px] pr-[5px] py-[6px] text-left rounded-3xl hidden">
                <a href="{{ route('feed-for-life') }}" class="block px-4 py-2 transition ease-in duration-[0.4s] hover:bg-white rounded-xl">Feed for Life Initiative</a>
                <a href="{{ route('breastmilk-smart') }}" class="block px-4 py-2 transition ease-in duration-[0.4s] hover:bg-white rounded-xl">Make Your Hospital Breastmilk Smart</a>
                <a href="{{ route('sostainer') }}" class="block px-4 py-2 transition ease-in duration-[0.4s] hover:bg-white rounded-xl">SOStainer Mobile Container Clinics</a>
                <a href="{{ route('sosafe') }}" class="block px-4 py-2 transition ease-in duration-[0.4s] hover:bg-white rounded-xl">SoSAFE Pasteuriser</a>
                <a href="{{ route('research') }}" class="block px-4 py-2 transition ease-in duration-[0.4s] hover:bg-white rounded-xl">Research at SABR</a>
            </div>
        </div>
        
        <a href="{{ route('get-involved') }}" class="block px-4 py-2 transition ease-in duration-[0.4s] text-mobile hover:bg-white rounded-xl">Get Involved</a>
        
        <div class="relative">
            <div class="nav-button flex items-center cursor-pointer p-2 rounded-lg">
                <div class="button text-mobile">Resources</div>
                <img class="mingcuteright-line-icon ml-2 w-4 h-4" alt=""
                    src="{{ asset('images/nav-dropdown-icon.svg') }}">
            </div>
            <div class="dropdown-menu absolute text-sm left-0 mt-2 w-[300px] bg-[#f8f5f0] border border-gray-300 dropdown-shadow px-[12px] py-[6px] text-left rounded-3xl hidden">
                <a href="{{ route('breast-is-best') }}" class="block px-4 py-2 transition ease-in duration-[0.4s] hover:bg-white rounded-xl">Best In Breast (FAQs)</a>
                <a href="{{ route('why-the-cost') }}" class="block px-4 py-2 transition ease-in duration-[0.4s] hover:bg-white rounded-xl">Why The Cost?</a>
                <a href="{{ route('safe-user-of-dbm') }}" class="block px-4 py-2 transition ease-in duration-[0.4s] hover:bg-white rounded-xl">The Safe Use of DBM</a>
                <a href="#" class="block px-4 py-2 transition ease-in duration-[0.4s] hover:bg-white rounded-xl">How to Access DBM / Value of DBM</a>
            </div>
        </div>
        
        <a href="{{ route('contact-us') }}" class="block px-4 py-2 transition ease-in duration-[0.4s] text-mobile hover:bg-white rounded-xl">Contact Us</a>
        
        <div class="nav-button7 cursor-pointer z-0">
            <a href="http://payfast.co.za/donate/go/southafricanbreastmilkreserve" target="_blank" class="block px-4 py-2 transition ease-in duration-[0.4s] text-mobile hover:bg-white rounded-xl">Donate Today</a>
        </div>
        </div>
    </div>
    </div>




    <main>
        @yield('content')
    </main>
    
    <footer class="pt-[128px] pb-[50px] md:pb-[80px] px-[20px] md:px-[40px]  bg-[#107BA2]">
       
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center ">
                <!-- Logo -->
                <div class="flex flex-col md:flex-row gap-[100px]">
                    <img class="w-[87.15px] h-[118.99px] bg-white rounded-[12px]" src="{{asset('images/logo.png')}}" alt="Logo" />
            
                <!-- Navigation Links -->
                <div class="flex flex-col md:flex-row items-start gap-6 mt-4 md:mt-0">
                    <div class="flex flex-col items-start gap-3 md:gap-6 text-white text-[18px] font-inter">
                        <a href="{{route('home')}}">Home</a>
                        <a href="{{route('news')}}">Media</a>
                    </div>
                    <div class="flex flex-col items-start gap-3 md:gap-6 text-white text-[18px] font-inter">
                        <a href="{{route('about-us')}}">About</a>
                        <a href="{{route('feed-for-life')}}">Projects</a>
                    </div>
                    <div class="flex flex-col items-start gap-3 md:gap-6 text-white  text-[18px] font-inter">
                        <a href="{{route('breast-is-best')}}">Breast is Best</a>
                        <a href="{{route('financials')}}" class="items-start">Financials</a>
                    </div> 
                </div>
                </div>
                
            
                <!-- Newsletter Signup -->
                <div class="flex flex-col md:flex-row items-center gap-4 mt-4 md:mt-0 bg-[#107BA2] wifull border border-[#C4DF16] rounded-[12px] p-3 mb-5">
                    <input type="text" class="text-[#C4DF16] bg-[#107BA2] placeholder:text-[#C4DF16]  placeholder:text-[18px] placeholder:font-inter outline-none w-[250px]" placeholder="Sign up for our Newsletter">
                    <button class="px-4 py-2 bg-[#107BA2] rounded-[6px] text-[#E7F2F6] text-[18px] font-inter border border-white">
                        Sign up
                    </button>
                </div>

                
            </div>
            <div class="flex justify-center items-center md:mt-10 mt-5 ">
                <div class="grid grid-cols-6 gap-4">
                  <a href="https://www.facebook.com/SABreastmilkReserve/" target="_blank" class="w-[32px] h-[32px] flex justify-center items-center border border-[#BBE8F8] rounded-lg">
                    <img src="{{asset('images/favebook-icon.svg')}}"/>
                  </a>
                  <a  class="w-[32px] h-[32px] flex justify-center items-center border border-[#BBE8F8] rounded-lg">
                    <img src="{{asset('images/linkedin-icon.svg')}}"/>
                  </a>
                  <div class="w-[32px] h-[32px] flex justify-center items-center border border-[#BBE8F8] rounded-lg">
                    <img src="{{asset('images/youtube-icon.svg')}}"/>
                  </div>
                  <a href="https://twitter.com/SABRMilk" target="_blank" class="w-[32px] h-[32px] flex justify-center items-center border border-[#BBE8F8] rounded-lg">
                    <img src="{{asset('images/twitter-icon.svg')}}"/>
                  </a>
                  <div class="w-[32px] h-[32px] flex justify-center items-center border border-[#BBE8F8] rounded-lg">
                    <img src="{{asset('images/tiktik-icon.svg')}}"/>
                  </div>
                 
                </div>
              </div>


              <div class="flex justify-center text-center items-center md:mt-10 mt-5 text-[#BBE8F8] text-[16px] font-open-sans font-normal leading-4 break-words">
                <a href="{{asset('documents/SABR-Privacy-Policy.pdf')}}">Privacy Policy </a> <span class="m-2"> | </span> <a href="{{asset('documents/SABR-Website-Terms-and-Conditions.pdf')}}">Terms & Conditions</a> <span class="m-2"> | </span> <a href="{{asset('documents/Subject-Access-Request-Form1.pdf')}}">Subject Access Request (SAR)</a>
              </div>
            </div>
    </footer>
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</body>

</html>