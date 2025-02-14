@extends('layouts.app')

@section('content')
<section class="relative w-full h-screen overflow-hidden">
    <!-- Background Video -->
    <video class="absolute top-0 left-0 w-full h-full object-cover" autoplay loop muted playsinline>
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
                    <div class="frame-parent">
                        <div class="frame-parent ">
                            <div class="saving-lives-one-container saving-lives-mobile">
                                <span>Saving Lives,</span>
                                <span class="one-drop-at"> One Drop At A Time</span>
                            </div>
                            <div class="join-us-in">Join us in our mission to provide life-saving breastmilk to
                                premature babies worldwide</div>
                        </div>
                        <div class="button-prim-wrapper">
                            <div class="button-prim">
                                <a class="nav-button7 cursor-pointer">
                                    <div class="button7 pt-1">Start Contributing</div>
                                    <div class="nav-button-child">
                                    </div>
                                </a>
                                <div class="pharrow-up-wrapper cursor-pointer">
                                    <img class="pharrow-up-icon" alt="" src="{{asset('images/arrow-up.svg')}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="frame-group">
                    <div class="frame-container">
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
                        </div> --}}
                    </div>
                    <div class="component-2-parent">
                        <div class="component-2">
                            <div class="background">
                                <div class="background-child">
                                </div>
                            </div>
                            <div class="details">
                                <div class="info">
                                    <div class="tags">
                                        <div class="pills">
                                            <div class="start-searching">Register</div>
                                        </div>
                                        <img class="healthiconschild-program-outl" alt=""
                                            src="{{asset('images/doctor-icon2.svg')}}">
                                    </div>
                                    <div class="copy">
                                        <div class="saving-lives-one-container">I want to donate Milk</div>
                                        <div class="help-save-lives">Help save lives by donating your excess breastmilk
                                            to babies in need. Your gift can make all the difference.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="component-1">
                            <div class="background">
                                <div class="background-item">
                                </div>
                                <div class="background-inner">
                                </div>
                            </div>
                            <div class="details">
                                <div class="info">
                                    <div class="tags">
                                        <div class="pills">
                                            <div class="start-searching">Register</div>
                                        </div>
                                        <img class="healthiconschild-program-outl" alt=""
                                            src="{{asset('images/healthicons.svg')}}">
                                    </div>
                                    <div class="copy">
                                        <div class="saving-lives-one-container">I am a Parent</div>
                                        <div class="help-save-lives">Help save lives by donating your excess breastmilk
                                            to babies in need. Your gift can make all the difference.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="component-11">
                            <div class="background2">
                                <div class="rectangle-div">
                                </div>
                            </div>
                            <div class="details">
                                <div class="info">
                                    <div class="tags">
                                        <div class="pills2">
                                            <div class="start-searching">Register</div>
                                        </div>
                                        <img class="healthiconschild-program-outl" alt=""
                                            src="{{asset('images/doctor-icon.svg')}}">
                                    </div>
                                    <div class="copy">
                                        <div class="saving-lives-one-container">I am a Clinician</div>
                                        <div class="help-save-lives">Help save lives by donating your excess breastmilk
                                            to babies in need. Your gift can make all the difference.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection