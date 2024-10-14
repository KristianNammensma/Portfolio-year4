@extends('admin.layout.devider')

@section('pageCss')
    <link rel="stylesheet" href="./css/pages/frontend/Content.css">
@endsection

@section('title')
    <title>Frontend Portfolio</title>
@endsection

@section('header')



    <div id="header_info" class="d-flex justify-content-center  align-items-center col-12 col-lg-6 flex-grow-0 text-white position-absolute  top-0 z-3" bis_skin_checked="1" style="bottom: 0px;">

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

    <section class="frontend-header border-0 w-100 h-100 position-relative d-flex flex-row justify-content-end align-items-center">
            <div class="frontend-header-info z-3">
                <div class="d-flex justify-content-end flex-column align-items-end">
                    <h1 class="portfolio-h1 col-lg-8 col-12 text-end text-white fw-bold scroll-fade scroll-right">
                        Kristian Nammensma
                    </h1>
                    <p class="text-end frontend-header-sd scroll-fade scroll-left">Software Developer</p>
                </div>

                <div class="d-flex justify-content-end">
                    <button class="btn scroll-down onBtn w-25 mt-5 p-3 overflow-hidden" style="--before-top: -20vw; --after-top-hover: 20em; --before-top-hover: .7vw;">
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

    <div class="target-section m-0 p-0">
        <section class="w-100 h-100 position-relative p-5 d-flex flex-column justify-content-between">
            <div class="w-100 overflow-hidden header-txt col-4 d-flex justify-content-start flex-column p-2 ps-5 ms-5">
                <p class="text-danger portfolio-p scroll-fade scroll-up">Project</p>
                <h1 class="fw-bold portfolio-h1 scroll-fade scroll-up">Hoveniers</h1>
            </div>
    
            <section class="recentProject-cards d-flex flex-lg-row  flex-column justify-content-evenly align-items-center">
                <div class="col-lg-4 col-12 m-lg-0 m-5">
                    <p class="fs-5">Dit was een project dat ik samen met mijn neefje, nichtje en broertje heb bedacht. Het stelt een project voor waarbij je ons in kunt huren voor tuinprojecten. Met deze website kun je zien wat het bedrijf in houdt, wat je van ons kan verwachten en je kan ons inhuren.</p>

                    <p>Datum: 11/04/2023</p>
                </div>
                <div class="card col-lg-5 col-12 m-4 d-flex justify-content-center align-items-center">
                    <div class="w-100">
                        <img class="recent-img w-100" src="./css/image/hovenier.png" alt="">
                    </div>
                </div>
            </section>
    
        </section>

        <section class="w-100 h-100 position-relative p-5 d-flex flex-column justify-content-between">
            <div class="header-txt col-12 d-flex justify-content-end flex-column p-2 pe-5 me-5">
                <p class="text-end text-danger portfolio-p scroll-fade scroll-up">Project</p>
                <h1 class="text-end fw-bold portfolio-h1 scroll-fade scroll-up">Poster Winkel</h1> 
            </div>
    
            <section class="recentProject-cards d-flex flex-lg-row flex-column justify-content-evenly align-items-center">
                <div class="card col-lg-5 col-12 m-4 d-flex justify-content-center align-items-center">
                    <div class="w-100">
                        <img class="recent-img w-100" src="./css/image/posterStore.png" alt="">
                    </div>
                </div>
                
                <div class="col-lg-4 col-12 m-lg-0 m-5 " >
                    <p class="fs-5">Dit is de Poster Store, een store waarbij je posters op ieder formaat kunt kopen, met plaatjes ter representatie. Dit was een opdracht voor mijn keuzedeel frontend development. De functionaliteit van deze website bestond uit het aanklikken van de posters en door de gallerij aan verschillende posters heen kunnen kijken. </p>

                    <p>Datum: 25/01/2023</p>
                </div>
            </section>
    
        </section>

        <section class="w-100 h-100 position-relative p-5 d-flex flex-column justify-content-between">
            <div class="overflow-hidden header-txt col-lg-4 col-12 d-flex justify-content-start flex-column p-2 ps-5 ms-5">
                <p class="text-danger portfolio-p scroll-fade scroll-up">Project</p>
                <h1 class="fw-bold portfolio-h1 scroll-fade scroll-up">FazWatch</h1>
            </div>
    
            <section class="recentProject-cards d-flex flex-lg-row flex-column justify-content-evenly align-items-center">
                <div class="col-lg-4 col-12 m-lg-0 m-5">
                    <p class="fs-5">Dit was een opdracht voor de opleiding zelf. Fazwatch is een website gemaakt in groepjes en daarbij ook ons eerste groepsproject. Samen met 2 anderen hebben wij een website gebouwt die lijkt op Pathe, maar met onze twist. Je kan er trailers van films op kijken en ook stoelen reserveren. Helaas hebben wij in de 3 weken de website niet af kunnen krijgen.</p>

                    <p>Datum: 28/11/2023</p>
                </div>
                <div class="card col-lg-5 col-12 m-4 d-flex justify-content-center align-items-center">
                    <div class="w-100">
                        <img class="recent-img w-100" src="./css/image/fazwatch.png" alt="">
                    </div>
                </div>
            </section>
    
        </section>

        
        <section class="w-100 h-100 position-relative p-5 d-flex flex-column justify-content-between">
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