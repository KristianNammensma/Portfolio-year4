@extends('admin.layout.devider')

@section('pageCss')
    <link rel="stylesheet" href="./css/pages/gaming/Content.css">
@endsection

@section('title')
    <title>Gaming Portfolio</title>
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

    <section class="gaming-header border-0 w-100 h-100 position-relative d-flex flex-row justify-content-start align-items-center">
            <div class="gaming-header-info z-3">
                <div class="">
                    <h1 class="text-start text-white fw-bold scroll-fade scroll-left">
                        Kristian Nammensma,
                    </h1>
                    <p class="text-start gaming-header-sd scroll-fade scroll-left">Software Developer</p>
                </div>

                <div class="d-flex justify-content-start">
                    <button class="btn scroll-down onBtn mt-5 p-3 overflow-hidden" style="--before-top: -20vw; --after-top-hover: 20vw; --before-top-hover: .7vw;">
                        <p class="onBtn-p m-0 "></p>
                    </button>
                </div>
            </div>
    </section>
    
@endsection

@section('content')

    <div class="target-section m-0 p-0">
        <section class="w-100 h-100 position-relative p-5 d-flex flex-column justify-content-between">
            <div class="overflow-hidden header-txt col-4 d-flex justify-content-start flex-column p-2 ps-5 ms-5">
                <p class="text-danger portfolio-p scroll-fade scroll-up">Project</p>
                <h1 class="fw-bold portfolio-h1 scroll-fade scroll-up">Tower Defence</h1>
            </div>
    
            <section class="recentProject-cards d-flex flex-row justify-content-evenly align-items-center">
                <div class="col-4">
                    <p class="fs-5">Een tower defence game die ik in mijn vrije tijd gemaakt heb. Dit kosste mij ongeveer 4-6 weken om te maken met behulp van het internet. Er zijn in totaal 3 levels in de game, waarbij je na 20 rondes een level wint. Het doel is ook om geneen enemy door te laten.</p>

                    <p>Datum: 13/09/2022</p>
                </div>
                <div class="swiperAuto card col-5 m-4 d-flex justify-content-center align-items-center overflow-hidden">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide w-100">
                            <img class="recent-img " src="./css/image/game1.png" alt="">
                        </div>
                        <div class="swiper-slide w-100">
                            <img class="recent-img " src="./css/image/game1-1.png" alt="">
                        </div>
                    </div>
 
                    <div class="swiper-pagination"></div>
                </div>
            </section>
    
        </section>

        <section class="w-100 h-100 position-relative p-5 d-flex flex-column justify-content-between">
            <div class="header-txt col-12 d-flex justify-content-end flex-column p-2 pe-5 me-5">
                <p class="text-end text-danger portfolio-p scroll-fade scroll-up">Project</p>
                <h1 class="text-end fw-bold portfolio-h1 scroll-fade scroll-up">Dou-Ma Climbers</h1>
            </div>
    
            <section class="recentProject-cards d-flex flex-row justify-content-evenly align-items-center">
                <div class="swiperAuto card col-5 m-4 d-flex justify-content-center align-items-center overflow-hidden">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide w-100">
                            <img class="recent-img " src="./css/image/game2.png" alt="">
                        </div>
                        <div class="swiper-slide w-100">
                            <img class="recent-img " src="./css/image/game2-2.png" alt="">
                        </div>
                    </div>
 
                    <div class="swiper-pagination"></div>
                </div>

                <div class="col-4" >
                    <p class="fs-5">Dit is mijn keuzedeel voor Game development, een game waarbij je als 2d karakter speelt die levels moet completen door van onder naar boven te klimmen zonder enige obstakels te raken. Het spel heeft onder andere ook achtergrond muziek en een hoofdmenu, net zoals een scherm als je gewonnen hebt. Daarnaast zijn er ook nog meerdere levels die je moet completen.</p>

                    <p>Datum: 25/03/2023</p>
                </div>
            </section>
    
        </section>




        
        <section class="w-100 h-100 position-relative p-5 d-flex flex-column justify-content-between">
            {{-- <div class="header-txt col-12 d-flex justify-content-center flex-column p-2 pe-5 me-5">
                <p class="text-center text-danger portfolio-p">Contact</p>
            </div> --}}
    
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