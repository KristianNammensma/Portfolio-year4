@extends('admin.layout.devider')

@section('pageCss')
    <link rel="stylesheet" href="./css/pages/app/Content.css">
@endsection

@section('title')
    <title>App Portfolio</title>
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

    <section class="app-header border-0 w-100 h-100 position-relative d-flex flex-row justify-content-start align-items-center">
            <div class="app-header-info z-3">
                <div class="w-100">
                    <h1 class="portfolio-h1 w-50 text-start text-white fw-bold scroll-fade scroll-left">
                        Kristian Nammensma,
                    </h1>
                    <p class="text-start app-header-sd scroll-fade scroll-left">Software Developer</p>
                </div>

                <div class="d-flex justify-content-start">
                    <button class="btn scroll-down w-25 onBtn mt-5 p-3 overflow-hidden" style="--before-top: -20vw; --after-top-hover: 20vw; --before-top-hover: .7vw;">
                        <p class="onBtn-p m-0 "></p>
                    </button>
                </div>
            </div>
    </section>
    
@endsection

@section('content')

    <div class="target-section m-0 p-0">
        <section class="w-100 h-100 position-relative p-5 d-flex flex-column justify-content-between">
            <div class="overflow-hidden header-txt col-lg-4 col-12 d-flex justify-content-start flex-column p-lg-2 ps-lg-5 ms-lg-5">
                <p class="text-danger portfolio-p scroll-fade">Project</p>
                <h1 class="fw-bold portfolio-h1 scroll-fade">Converter App</h1>
            </div>
    
            <section class="recentProject-cards d-flex flex-lg-row flex-column justify-content-evenly align-items-center">
                <div class="col-lg-4 col-12 m-lg-0 m-5">
                    <p class="fs-5">Project Converter app gemaakt als school opdracht. Iedere student kreeg dezelfde opdracht om een app te maken die geld kan converten van Euro naar Dollar of enige valuta naar keuze.</p>

                    <p>Datum: 11/04/2023</p>
                </div>
                <div class="card col-lg-5 col-12 m-4 d-flex justify-content-center align-items-center">
                    <div class="w-100">
                        <img class="recent-img w-100" src="./css/image/converter.png" alt="">
                    </div>
                </div>
            </section>
    
        </section>

        <section class="w-100 h-100 position-relative p-5 d-flex flex-column justify-content-between">
            <div class="header-txt col-12 d-flex justify-content-end flex-column p-lg-2 pe-lg-5 me-lg-5">
                <p class="text-end text-danger portfolio-p scroll-fade">Project</p>
                <h1 class="text-end fw-bold portfolio-h1 scroll-fade">Financien App</h1>
            </div>
    
            <section class="recentProject-cards d-flex flex-lg-row flex-column justify-content-evenly align-items-center">
                <div class="card col-lg-5 col-12 m-4 d-flex justify-content-center align-items-center">
                    <div class="w-100">
                        <img class="recent-img w-100" src="./css/image/financienApp.png" alt="">
                    </div>
                </div>
                
                <div class="col-lg-4 col-12 m-lg-0 m-5">
                    <p class="fs-5">Dit is mijn financien app. Deze app werkt als een soort bank app net zoals Rabobank. Je kan hierin afschriften zien en ook bijschriften maken of inzien. Ook kan je verschillende budgetten aanmaken waarbij je kan sparen voor een bepaald doel. Dit was een groepsproject voor iedere student.</p>

                    <p>Datum: 18/04/2023</p>
                </div>
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