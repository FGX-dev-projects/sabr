<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="Author" content="SABR" />
    <title>@yield('title', 'SABR: South African Breastmilk Reserve')</title>
    <meta name="description"
        content="@yield('meta-description', 'South African Breastmilk Reserve - Bringing milk to babies, safely.')">
    <meta name="Keywords"
        content="Breast milk bank johannesburg, infant feeding, breastfeeding, breast feeding, breast is best, Feed for Life initiative, breast milk, breastmilk banking" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600&display=swap" rel="stylesheet">

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}"></script>
    @endif

    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
</head>

<body class="font-sans">
    @flasher_render
    <div class="sm-icon01-parent">
        <a href="https://www.facebook.com/pages/South-African-Breastmilk-Reserve/117615928250441" target="_blank"
            class="sm-icon01">
            <img class="rifacebook-fill-icon" alt="" src="{{asset('images/facebook.svg')}}">
        </a>
        <a href="https://twitter.com/SABRMilk" target="_blank" class="sm-icon01">
            <img class="rifacebook-fill-icon" alt="" src="{{asset('images/twitter.svg')}}">
        </a>
        <div class="frame-child">
        </div>
    </div>
    <div class="navigation wrapper !fixed py-[28px]">
        <a href="{{route('home')}}">
            <img src="{{ asset('images/logo.png') }}" class="h-[112px] rounded-lg" alt="Logo">
        </a>
    
        <!-- Mobile & Tablet Controls (Show up to 1279px) -->
        <div class="flex xl:hidden items-center gap-4">
            <!-- Search Button -->
            <button id="search-btn-mobile" class="flex items-center justify-center cursor-pointer">
                <img src="{{asset('images/search-icon.png')}}" class="w-6 h-6" alt="Search" />
            </button>
            
            <!-- Hamburger Menu Icon -->
            <div class="cursor-pointer" id="mobile-menu-button">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </div>
        </div>
    
        <!-- Desktop Navigation (only 1280px and above) -->
        <div class="buttons hidden xl:flex">
            <a href="{{ route('home') }}" class="nav-button {{ Route::is('home') ? 'bg-[#dedad4] ' : '' }}">
                <div class="button">Home</div>
            </a>
            <div class="relative">
                <!-- Main Button -->
                <div class="nav-button flex items-center cursor-pointer p-2 rounded-lg">
                    <div class="button">About Us</div>
                    <img class="mingcuteright-line-icon ml-2 w-4 h-4" alt=""
                        src="{{ asset('images/nav-dropdown-icon.svg') }}">
                </div>
    
                <!-- Dropdown Menu -->
                <div
                    class="dropdown-menu absolute text-sm left-0 mt-2 w-[255px] bg-[#f8f5f0] border border-gray-300 dropdown-shadow px-[12px] py-[6px] text-left rounded-3xl hidden">
                    <a href="{{ route('about-us') }}"
                        class="{{ Route::is('about-us') ? 'bg-[#dedad4] ' : '' }} text-left block px-4 py-2 transition ease-in duration-[0.4s] nav-btn-colour hover:bg-white rounded-xl">About
                        Us</a>
                    <a href="{{ route('stats') }}"
                        class="{{ Route::is('stats') ? 'bg-[#dedad4] ' : '' }} text-left block px-4 py-2 transition ease-in duration-[0.4s] nav-btn-colour hover:bg-white rounded-xl">Stats</a>
                    <a href="{{ route('board-of-directors') }}"
                        class="{{ Route::is('board-of-directors') ? 'bg-[#dedad4] ' : '' }} text-left block px-4 py-2 nav-btn-colour transition ease-in duration-[0.4s] hover:bg-white rounded-xl">Our
                        Board of Directors</a>
                    <a href="{{asset('documents/SABR-Annual-Report-14-10-2020.pdf')}}" target="_blank"
                        class="block px-4 py-2 transition ease-in duration-[0.4s] hover:bg-white rounded-xl nav-btn-colour"><span
                            class="px-2.5 py-1.5 text-[11px] text-[#adaaa5] !bg-[#f4f0e9] rounded-[6px]">2020/10</span>
                        Annual Report</a>
                    <a href="{{ route('financials') }}"
                        class="{{ Route::is('financials') ? 'bg-[#dedad4] ' : '' }} text-left block px-4 py-2 transition nav-btn-colour ease-in duration-[0.4s] hover:bg-white rounded-xl">Annual
                        Financial Statements</a>
                </div>
            </div>
    
            <div class="relative">
                <a href="{{ route(name: 'impact') }}"
                    class="nav-button {{ Route::is('impact') ? 'bg-[#dedad4] ' : '' }}">
                    <div class="button">Our Impact</div>
                </a>
            </div>
    
            <div class="relative">
                <div class="nav-button flex items-center cursor-pointer p-2 rounded-lg">
                    <div class="button">Innovation</div>
                    <img class="mingcuteright-line-icon" alt="" src="{{ asset('images/nav-dropdown-icon.svg') }}">
                </div>
    
                <div
                    class="dropdown-menu absolute text-sm left-0 mt-2 w-[455px] bg-[#f8f5f0] border border-gray-300 dropdown-shadow pl-[12px] pr-[5px] py-[6px] text-left rounded-3xl hidden">
                    <a href="{{ route('feed-for-life') }}"
                        class="{{ Route::is('feed-for-life') ? 'bg-[#dedad4] text-[#00000080]' : '' }} nav-btn-colour text-left block px-4 py-2 transition ease-in duration-[0.4s] hover:bg-white rounded-xl"><span
                            class="px-2.5 py-1.5 text-[11px] text-[#adaaa5] !bg-[#f4f0e9] rounded-[6px]">Programme</span>
                        Feed for Life Initiative</a>
                    <a href="{{ route('breastmilk-smart') }}"
                        class="{{ Route::is('breastmilk-smart') ? 'bg-[#dedad4] text-[#00000080]' : '' }}nav-btn-colour text-left block px-4 py-2 transition ease-in duration-[0.4s] hover:bg-white rounded-xl"><span
                            class="px-2.5 py-1.5 text-[11px] text-[#adaaa5] !bg-[#f4f0e9] rounded-[6px]">Programme</span>
                        Make Your Hospital Breastmilk Smart</a>
                    <a href="{{ route('sostainer') }}"
                        class="{{ Route::is('sostainer') ? 'bg-[#dedad4] text-[#00000080]' : '' }} nav-btn-colour text-left block px-4 py-2 transition ease-in duration-[0.4s] hover:bg-white rounded-xl"><span
                            class="px-2.5 py-1.5 text-[11px] text-[#adaaa5] !bg-[#f4f0e9] rounded-[6px]">Programme</span>
                        SOStainer Mobile Container Clinics</a>
                    <a href="{{ route('sosafe') }}"
                        class="{{ Route::is('sosafe') ? 'bg-[#dedad4] text-[#00000080]' : '' }} nav-btn-colour text-left block px-4 py-2 transition ease-in duration-[0.4s] hover:bg-white rounded-xl"><span
                            class="px-2.5 py-1.5 text-[11px] text-[#adaaa5] !bg-[#f4f0e9] rounded-[6px]">Programme</span>
                        SoSAFE Pasteuriser</a>
                    <a href="{{ route('research') }}"
                        class="{{ Route::is('research') ? 'bg-[#dedad4] text-[#00000080]' : '' }} nav-btn-colour text-left block px-4 py-2 transition ease-in duration-[0.4s] hover:bg-white rounded-xl"><span
                            class="px-2.5 py-1.5 text-[11px] text-[#adaaa5] !bg-[#f4f0e9] rounded-[6px]">Programme</span>
                        Research at SABR</a>
                </div>
            </div>
    
            <div class="relative">
                <a href="{{ route(name: 'get-involved') }}"
                    class="nav-button {{ Route::is('get-involved') ? 'bg-[#dedad4] text-[#00000080]' : '' }}">
                    <div class="button">Get Involved</div>
                </a>
            </div>
            <div class="relative">
                <div class="nav-button flex items-center cursor-pointer p-2 rounded-lg">
                    <div class="button">Resources</div>
                    <img class="mingcuteright-line-icon" alt="" src="{{ asset('images/nav-dropdown-icon.svg') }}">
                </div>
    
                <div
                    class="dropdown-menu absolute text-sm left-0 mt-2 w-[300px] bg-[#f8f5f0] border border-gray-300 dropdown-shadow px-[12px] py-[6px] text-left rounded-3xl hidden">
                    <a href="{{ route('breast-is-best') }}"
                        class="{{ Route::is('breast-is-best') ? 'bg-[#dedad4] text-[#00000080]' : '' }} nav-btn-colour text-left block px-4 py-2 transition ease-in duration-[0.4s] hover:bg-white rounded-xl">Breast is Best (FAQs)</a>
                    <a href="{{ route('why-the-cost') }}"
                        class="{{ Route::is('why-the-cost') ? 'bg-[#dedad4] text-[#00000080]' : '' }} nav-btn-colour text-left block px-4 py-2 transition ease-in duration-[0.4s] hover:bg-white rounded-xl">Why
                        The Cost?</a>
                    <a href="{{ route('safe-use-of-dbm') }}"
                        class="{{ Route::is('safe-use-of-dbm') ? 'bg-[#dedad4] text-[#00000080]' : '' }} nav-btn-colour text-left block px-4 py-2 transition ease-in duration-[0.4s] hover:bg-white rounded-xl">The
                        Safe Use of DBM</a>
                    <a href="{{ route('toolkit-access-value') }}"
                        class="{{ Route::is('toolkit-access-value') ? 'bg-[#dedad4] text-[#00000080]' : '' }} nav-btn-colour text-left block px-4 py-2 transition ease-in duration-[0.4s] hover:bg-white rounded-xl">How to Access DBM / Value of DBM</a>
                    <a href="{{ route('news') }}"
                        class="{{ Route::is('news') ? 'bg-[#dedad4] text-[#00000080]' : '' }} nav-btn-colour text-left block px-4 py-2 transition ease-in duration-[0.4s] hover:bg-white rounded-xl">News</a>
                    <a href="{{ route('milk-banks') }}"
                        class="{{ Route::is('milk-banks') ? 'bg-[#dedad4] text-[#00000080]' : '' }} nav-btn-colour text-left block px-4 py-2 transition ease-in duration-[0.4s] hover:bg-white rounded-xl">Breast
                        Milk Banks</a>
                </div>
            </div>
            <div class="relative">
                <a href="{{ route(name: 'contact-us') }}"
                    class="nav-button {{ Route::is('contact-us') ? 'bg-[#dedad4] text-[#00000080]' : '' }}">
                    <div class="button">Contact Us</div>
                </a>
            </div>
            <div class="nav-button7 flex cursor-pointer z-0">
                <a href="http://payfast.co.za/donate/go/southafricanbreastmilkreserve" target="_blank"
                    class="button7">Donate Today</a>
            </div>
            <!-- Search Button Desktop -->
            <button id="search-btn" class="flex items-center justify-center cursor-pointer">
                <img src="{{asset('images/search-icon.png')}}" alt="Search" />
            </button>
        </div>
    
        <!-- Mobile & Tablet Menu (Show up to 1279px) -->
        <div class="mobile-menu hidden xl:hidden absolute top-[140px] left-4 w-[350px] mx-auto bg-[#f8f5f0] border border-gray-300 dropdown-shadow px-[12px] py-[6px] text-left rounded-3xl z-50"
            id="mobile-menu">
            <a href="{{ route('home') }}"
                class="block px-4 py-2 text-mobile transition ease-in duration-[0.4s] hover:bg-white rounded-xl">Home</a>
    
            <div class="relative">
                <div class="nav-button flex items-center cursor-pointer p-2 rounded-lg">
                    <div class="button text-mobile">About Us</div>
                    <img class="mingcuteright-line-icon ml-2 w-4 h-4" alt=""
                        src="{{ asset('images/nav-dropdown-icon.svg') }}">
                </div>
                <div
                    class="dropdown-menu mt-2 w-full bg-[#f8f5f0] border border-gray-300 dropdown-shadow px-[12px] py-[6px] text-left rounded-3xl">
                    <a href="{{ route('about-us') }}"
                        class="block px-4 py-2 transition ease-in duration-[0.4s] hover:bg-white rounded-xl">About
                        Us</a>
                    <a href="{{ route('stats') }}"
                        class="block px-4 py-2 transition ease-in duration-[0.4s] hover:bg-white rounded-xl">Stats</a>
                    <a href="{{ route('board-of-directors') }}"
                        class="block px-4 py-2 transition ease-in duration-[0.4s] hover:bg-white rounded-xl">Our Board
                        of Directors</a>
                    <a href="{{ asset('documents/SABR-Annual-Report-14-10-2020.pdf') }}"
                        class="block px-4 py-2 transition ease-in duration-[0.4s] hover:bg-white rounded-xl">
                        <span
                            class="px-2.5 py-1.5 text-[11px] text-[#adaaa5] !bg-[#f4f0e9] rounded-[6px]">2024/25</span>
                        Annual Report
                    </a>
                    <a href="{{ route('financials') }}"
                        class="block px-4 py-2 transition ease-in duration-[0.4s] hover:bg-white rounded-xl">Annual
                        Financial Statements</a>
                </div>
            </div>
    
            <a href="{{ route('impact') }}"
                class="block px-4 py-2 transition ease-in duration-[0.4s] text-mobile hover:bg-white rounded-xl">Impact</a>
    
            <div class="relative">
                <div class="nav-button flex items-center cursor-pointer p-2 rounded-lg">
                    <div class="button text-mobile">Innovation</div>
                    <img class="mingcuteright-line-icon ml-2 w-4 h-4" alt=""
                        src="{{ asset('images/nav-dropdown-icon.svg') }}">
                </div>
                <div
                    class="dropdown-menu mt-2 w-full bg-[#f8f5f0] border border-gray-300 dropdown-shadow pl-[12px] pr-[5px] py-[6px] text-left rounded-3xl">
                    <a href="{{ route('feed-for-life') }}"
                        class="block px-4 py-2 transition ease-in duration-[0.4s] hover:bg-white rounded-xl">Feed for
                        Life Initiative</a>
                    <a href="{{ route('breastmilk-smart') }}"
                        class="block px-4 py-2 transition ease-in duration-[0.4s] hover:bg-white rounded-xl">Make Your
                        Hospital Breastmilk Smart</a>
                    <a href="{{ route('sostainer') }}"
                        class="block px-4 py-2 transition ease-in duration-[0.4s] hover:bg-white rounded-xl">SOStainer
                        Mobile Container Clinics</a>
                    <a href="{{ route('sosafe') }}"
                        class="block px-4 py-2 transition ease-in duration-[0.4s] hover:bg-white rounded-xl">SoSAFE
                        Pasteuriser</a>
                    <a href="{{ route('research') }}"
                        class="block px-4 py-2 transition ease-in duration-[0.4s] hover:bg-white rounded-xl">Research at
                        SABR</a>
                </div>
            </div>
    
            <a href="{{ route('get-involved') }}"
                class="block px-4 py-2 transition ease-in duration-[0.4s] text-mobile hover:bg-white rounded-xl">Get
                Involved</a>
    
            <div class="relative">
                <div class="nav-button flex items-center cursor-pointer p-2 rounded-lg">
                    <div class="button text-mobile">Resources</div>
                    <img class="mingcuteright-line-icon ml-2 w-4 h-4" alt=""
                        src="{{ asset('images/nav-dropdown-icon.svg') }}">
                </div>
                <div
                    class="dropdown-menu mt-2 w-full bg-[#f8f5f0] border border-gray-300 dropdown-shadow px-[12px] py-[6px] text-left rounded-3xl">
                    <a href="{{ route('breast-is-best') }}"
                        class="block px-4 py-2 transition ease-in duration-[0.4s] hover:bg-white rounded-xl">Best In
                        Breast (FAQs)</a>
                    <a href="{{ route('why-the-cost') }}"
                        class="block px-4 py-2 transition ease-in duration-[0.4s] hover:bg-white rounded-xl">Why The
                        Cost?</a>
                    <a href="{{ route('safe-use-of-dbm') }}"
                        class="block px-4 py-2 transition ease-in duration-[0.4s] hover:bg-white rounded-xl">The Safe
                        Use of DBM</a>
                    <a href="{{ route('toolkit-access-value') }}"
                        class="block px-4 py-2 transition ease-in duration-[0.4s] hover:bg-white rounded-xl">How to Access DBM / Value of DBM</a>
                    <a href="{{ route('news') }}"
                        class="block px-4 py-2 transition ease-in duration-[0.4s] hover:bg-white rounded-xl">News</a>
                    <a href="{{ route('milk-banks') }}"
                        class="block px-4 py-2 transition ease-in duration-[0.4s] hover:bg-white rounded-xl">Breast Milk Banks</a>
                </div>
            </div>
    
            <a href="{{ route('contact-us') }}"
                class="block px-4 py-2 transition ease-in duration-[0.4s] text-mobile hover:bg-white rounded-xl">Contact
                Us</a>
    
            <div class="nav-button7 cursor-pointer z-0">
                <a href="http://payfast.co.za/donate/go/southafricanbreastmilkreserve" target="_blank"
                    class="block px-4 py-2 transition ease-in duration-[0.4s] text-center !text-white rounded-xl">Donate
                    Today</a>
            </div>
        </div>
    </div>
    
    <!-- Search Modal -->
    <div id="search-modal"
        class="fixed inset-0 bg-black bg-opacity-50 z-[9999] hidden items-center justify-center px-3">
        <div class="bg-white rounded-3xl max-w-2xl w-full max-h-[80vh] overflow-hidden shadow-2xl">
            <!-- Modal Header -->
            <div class="p-6 border-b border-gray-200">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-2xl font-semibold text-[#905460]">Search SABR</h3>
                    <button id="close-search-modal"
                        class="text-gray-400 hover:text-gray-600 transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <!-- Search Input -->
                <div class="relative">
                    <input type="text" id="search-input"
                        class="w-full px-4 py-3 pr-12 rounded-xl border-2 border-gray-200 focus:border-[#23b4e9] focus:outline-none transition-colors"
                        placeholder="Search for pages, programs, or information...">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-5 h-5 absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
            </div>
    
            <!-- Search Results -->
            <div id="search-results" class="p-6 overflow-y-auto max-h-[50vh]">
                <div class="text-center text-gray-500 py-8">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-16 h-16 mx-auto mb-4 text-gray-300" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                    <p class="text-lg">Start typing to search...</p>
                </div>
            </div>
    
            <!-- Loading State -->
            <div id="search-loading" class="hidden p-6">
                <div class="flex items-center justify-center py-8">
                    <div
                        class="animate-spin rounded-full h-12 w-12 border-b-2 border-[#23b4e9]">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Floating Milk Bank Button -->
    <a href="{{ route('milk-banks') }}" 
       class="floating-milk-bank-btn"
       aria-label="Find a Milk Bank Near You">
        <img src="{{ asset('images/milkbankbtn.gif') }}" 
             alt="Find Milk Bank" 
             class="floating-btn-image">
    </a>

    <style>
        #search-modal.show {
            display: flex !important;
        }
    
        .search-result-item {
            padding: 16px;
            border-radius: 12px;
            margin-bottom: 12px;
            transition: all 0.3s ease;
            border: 1px solid #f0f0f0;
        }
    
        .search-result-item:hover {
            background-color: #f8f5f0;
            border-color: #23b4e9;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
    
        .search-result-title {
            font-size: 18px;
            font-weight: 600;
            color: #905460;
            margin-bottom: 8px;
        }
    
        .search-result-description {
            font-size: 14px;
            color: #666562;
            line-height: 1.5;
        }
    
        .search-result-url {
            font-size: 12px;
            color: #23b4e9;
            margin-top: 4px;
        }

        /* Mobile-specific modal adjustments */
        @media only screen and (max-width: 768px) {
            #search-modal > div {
                max-width: 95%;
                margin: 0 auto;
            }
            
            #search-modal .p-6 {
                padding: 1rem;
            }
            
            #search-results {
                max-height: 60vh;
            }

            .search-result-title {
                font-size: 16px;
            }
            
            .search-result-description {
                font-size: 13px;
            }
        }

        /* Highlight styling */
        mark {
            background-color: #fef08a;
            padding: 2px 4px;
            border-radius: 3px;
            font-weight: 600;
        }

        /* Floating Milk Bank Button Styles */
        .floating-milk-bank-btn {
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 1000;
            width: 80px;
            height: 80px;
            border-radius: 50%;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15), 
                        0 8px 24px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            background: white;
        }

        .floating-milk-bank-btn:hover {
            transform: scale(1.1) translateY(-5px);
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.2), 
                        0 12px 32px rgba(0, 0, 0, 0.15);
        }

        .floating-milk-bank-btn:active {
            transform: scale(1.05) translateY(-3px);
        }

        .floating-btn-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .floating-milk-bank-btn {
                width: 70px;
                height: 70px;
                bottom: 20px;
                right: 20px;
            }
        }

        @media (max-width: 480px) {
            .floating-milk-bank-btn {
                width: 60px;
                height: 60px;
                bottom: 15px;
                right: 15px;
            }
        }

        /* Pulse animation */
        @keyframes pulse {
            0%, 100% {
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15), 
                            0 8px 24px rgba(0, 0, 0, 0.1),
                            0 0 0 0 rgba(35, 180, 233, 0.4);
            }
            50% {
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15), 
                            0 8px 24px rgba(0, 0, 0, 0.1),
                            0 0 0 10px rgba(35, 180, 233, 0);
            }
        }

        .floating-milk-bank-btn {
            animation: pulse 2s infinite;
        }

        .floating-milk-bank-btn:hover {
            animation: none;
        }
    </style>

    <main>
        @yield('content')
    </main>

    <footer class="pt-[80px] pb-[80px] md:pb-[80px] wrapper bg-[#905460]">

        <div class="flex flex-col md:flex-row justify-between items-start md:items-center ">
            <!-- Logo -->
            <div class="flex flex-col md:flex-row gap-[80px] md:gap-[100px]">
                <img class="w-[87.15px] h-[118.99px] bg-white rounded-[12px]" src="{{asset('images/logo.png')}}"
                    alt="Logo" />

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
            <div
                class="flex flex-col md:flex-row items-center gap-4 mt-4 md:mt-0 bg-[#834551] wifull border border-[#fff] rounded-[12px] p-3 mb-5">
                <input type="text"
                    class="text-[#e7f2f6] bg-[#834551] placeholder:text-[#fff]  placeholder:text-[18px] placeholder:font-inter outline-none w-[250px]"
                    placeholder="Sign up for our Newsletter">
                <button
                    class="px-4 py-2 bg-[#68343e] rounded-[6px] text-[#e7f2f6] text-[18px] font-inter border border-white">
                    Sign up
                </button>
            </div>


        </div>
        <div class="flex justify-start items-center md:justify-center md:mt-10 mt-5 ">
            <div class=" gap-4 flex flex-row justify-center">
                <a href="https://www.facebook.com/SABreastmilkReserve/" target="_blank"
                    class="w-[32px] h-[32px] flex justify-center items-center border border-[#fff] rounded-lg">
                    <img src="{{asset('images/favebook-icon.svg')}}" />
                </a>
                <a href="https://twitter.com/SABRMilk" target="_blank"
                    class="w-[32px] h-[32px] flex justify-center items-center border border-[#fff]  rounded-lg">
                    <img src="{{asset('images/twitter-icon.svg')}}" />
                </a>
            </div>
        </div>


        <div
            class="flex justify-center text-start md:text-center items-center md:mt-10 mt-5 text-[#fff] text-[16px] font-open-sans font-normal leading-4 break-words">
            <a href="{{asset('documents/SABR-Privacy-Policy.pdf')}}">Privacy Policy </a> <span class="m-2"> | </span> <a
                href="{{asset('documents/SABR-Website-Terms-and-Conditions.pdf')}}">Terms & Conditions</a> <span
                class="m-2"> | </span> <a href="{{asset('documents/Subject-Access-Request-Form1.pdf')}}">Subject Access
                Request (SAR)</a>
        </div>
    </footer>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchBtn = document.getElementById('search-btn');
            const searchBtnMobile = document.getElementById('search-btn-mobile');
            const searchModal = document.getElementById('search-modal');
            const closeModal = document.getElementById('close-search-modal');
            const searchInput = document.getElementById('search-input');
            const searchResults = document.getElementById('search-results');
            const searchLoading = document.getElementById('search-loading');
    
            let searchTimeout;
    
            // Open modal - Desktop
            if (searchBtn) {
                searchBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    searchModal.classList.add('show');
                    searchModal.style.display = 'flex';
                    searchInput.focus();
                });
            }

            // Open modal - Mobile
            if (searchBtnMobile) {
                searchBtnMobile.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    searchModal.classList.add('show');
                    searchModal.style.display = 'flex';
                    searchInput.focus();
                });
            }
    
            // Close modal
            if (closeModal) {
                closeModal.addEventListener('click', function() {
                    searchModal.classList.remove('show');
                    searchModal.style.display = 'none';
                    searchInput.value = '';
                    searchResults.innerHTML = `
                        <div class="text-center text-gray-500 py-8">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 mx-auto mb-4 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                            <p class="text-lg">Start typing to search...</p>
                        </div>
                    `;
                });
            }
    
            // Close on outside click
            if (searchModal) {
                searchModal.addEventListener('click', function(e) {
                    if (e.target === searchModal) {
                        closeModal.click();
                    }
                });
            }
    
            // Close on ESC key
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && searchModal.classList.contains('show')) {
                    closeModal.click();
                }
            });
    
            // Search functionality
            if (searchInput) {
                searchInput.addEventListener('input', function() {
                    clearTimeout(searchTimeout);
                    const query = this.value.trim();
    
                    if (query.length < 2) {
                        searchResults.innerHTML = `
                            <div class="text-center text-gray-500 py-8">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 mx-auto mb-4 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                                <p class="text-lg">Type at least 2 characters to search...</p>
                            </div>
                        `;
                        return;
                    }
    
                    searchTimeout = setTimeout(() => {
                        performSearch(query);
                    }, 300);
                });
            }
    
            function performSearch(query) {
                searchResults.classList.add('hidden');
                searchLoading.classList.remove('hidden');
    
                fetch(`/search?query=${encodeURIComponent(query)}`, {
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest'
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        searchLoading.classList.add('hidden');
                        searchResults.classList.remove('hidden');
    
                        if (data.length === 0) {
                            searchResults.innerHTML = `
                                <div class="text-center text-gray-500 py-8">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 mx-auto mb-4 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <p class="text-lg font-medium mb-2">No results found</p>
                                    <p class="text-sm">Try different keywords or check your spelling</p>
                                </div>
                            `;
                            return;
                        }
    
                        let html = '';
                        data.forEach(result => {
                            html += `
                                <a href="${result.url}" class="search-result-item block">
                                    <div class="search-result-title">${highlightText(result.title, query)}</div>
                                    <div class="search-result-description">${highlightText(result.description, query)}</div>
                                    <div class="search-result-url">${result.url}</div>
                                </a>
                            `;
                        });
    
                        searchResults.innerHTML = html;
                    })
                    .catch(error => {
                        searchLoading.classList.add('hidden');
                        searchResults.classList.remove('hidden');
                        searchResults.innerHTML = `
                            <div class="text-center text-red-500 py-8">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 mx-auto mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <p class="text-lg font-medium mb-2">Something went wrong</p>
                                <p class="text-sm">Please try again later</p>
                            </div>
                        `;
                    });
            }
    
            function highlightText(text, query) {
                const regex = new RegExp(`(${query})`, 'gi');
                return text.replace(regex, '<mark class="bg-yellow-200 px-1 rounded">$1</mark>');
            }
        });
    </script>

    @stack('scripts')
</body>

</html>