@extends('admin.layout.devider')

@section('pageCss')
    <link rel="stylesheet" href="./css/pages/cv/Content.css">
@endsection

@section('title')
    <title>CV Portfolio</title>
@endsection

@section('header')



    <div id="header_info" class="d-flex justify-content-center  align-items-center col-8 col-lg-6 flex-grow-0 text-white position-absolute  top-0 z-3" bis_skin_checked="1" style="bottom: 0px;">

        <div id="account" class="d-flex justify-content-between align-items-center flex-grow-0 w-75" bis_skin_checked="1">
            <div bis_skin_checked="1">
                <i class="fa fa-gg fs-2" aria-hidden="true"></i>
            </div>

            @livewire('back-button')


            <div bis_skin_checked="1">
                <i class="fa fa-css3 fs-4" aria-hidden="true"></i>
            </div>
        </div>  
    </div>

    <section class="cv-header border-0 w-100 h-100 position-relative d-flex flex-row justify-content-start align-items-center">
            <div class="cv-header-info z-3">
                <div class="w-100">
                    <h1 class="portfolio-h1 w-50 text-start text-white fw-bold scroll-fade scroll-left">
                        Kristian Nammensma,
                    </h1>
                    <p class="text-start cv-header-sd scroll-fade scroll-left">Software Developer</p>
                </div>

                <p class="text-start cv-header-text text-white fw-normal mt-5">
                    Student Software Developer jaar 4, 18 jaar oud. Ervaren in bouwen van websites, maken van webApplications en maken van databases. Sociaal en houdt van praatjes met collegas of eventueel klanten.
                </p>

                <div class="d-flex justify-content-start">
                    <button class="btn scroll-down onBtn w-25 mt-5 p-3 overflow-hidden" style="--before-top: -20vw; --after-top-hover: 20vw; --before-top-hover: .7vw;">
                        <p class="onBtn-p m-0"></p>
                    </button>
                </div>
            </div>
    </section>
    
    {{-- <div class="d-flex justify-content-center align-content-center">
        <img class="scroll-down animate-image" src="./css/image/arrow-down.png" alt="">
    </div> --}}
    
    
@endsection

@section('content')

    <div class="target-section m-0 p-0 overflow-hidden">
        <section class="w-100 h-100 position-relative p-5 d-flex flex-column justify-content-between">
            <div class="w-100 overflow-hidden header-txt col-4 d-flex justify-content-start flex-column p-lg-2 ps-lg-5 ms-lg-5">
                <p class="text-danger portfolio-p scroll-fade scroll-up">Introducing</p>
                <h1 class="fw-bold portfolio-h1 scroll-fade scroll-up">My Skills</h1>
            </div>
    
            <section class="swiper d-flex flex-row justify-content-evenly align-items-center">

                @livewire('skills')

                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </section>
    
        </section>

        <section class="w-100 h-100 position-relative p-5 d-flex flex-column justify-content-between">
            <div class="w-100 header-txt col-12 d-flex justify-content-end flex-column p-lg-2 pe-lg-5 me-lg-5">
                <p class="text-end text-danger portfolio-p scroll-fade scroll-up">Working</p>
                <h1 class="text-end fw-bold portfolio-h1 scroll-fade scroll-up">Skills</h1>
            </div>
    
            <section class="swiper d-flex flex-row justify-content-evenly align-items-center">

                @livewire('recent')

                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </section>
    
        </section>

        <section class="w-100 h-100 position-relative d-flex flex-column justify-content-between">   
            <section class="recentProject-cards d-flex flex-row justify-content-evenly align-items-center">
                <div class="p-5 m-5 w-100 d-flex justify-content-evenly align-items-center">
                    <a href="https://www.linkedin.com/in/kristian-nammensma-912971229/" target="_blank" class="text-decoration-none text-reset">
                        <i class="fa-brands fa-linkedin fa-2xl"></i>
                    </a>
                    <a href="https://www.instagram.com/kristian_nammensma/" class="text-decoration-none text-reset">
                        <i class="fa-brands fa-instagram fa-2xl"></i>
                    </a>
                    <a href="https://github.com/KristianNammensma" class="text-decoration-none text-reset">
                        <i class="fa-brands fa-github fa-2xl"></i>
                    </a>
                </div>
            </section>
    
        </section>
    </div>
@endsection