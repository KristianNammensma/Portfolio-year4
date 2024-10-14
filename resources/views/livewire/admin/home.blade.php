<div class="m-0 p-0">
    <section class="w-100 h-100 position-relative p-5 d-flex flex-column justify-content-between">
        <div class="header-txt col-12 col-lg-4 d-flex justify-content-start flex-column p-2 ps-5 ms-5">
            <p class="text-danger portfolio-p scroll-fade scroll-up">Introducing</p>
            <h1 class="fw-bold portfolio-h1 scroll-fade scroll-up">About Me</h1>
        </div>

        <section class="d-flex flex-column flex-lg-row justify-content-center mt-5">

            <div class="d-flex flex-column align-items-center justify-content-end mb-5">
                <div class="aboutMe-info w-100 p-3 ps-4 position-relative scroll-fade scroll-up">
                    <h1 class="ps-1 fw-bold fs-2 pt-3 ">Kristian Nammensma</h1>
                    <p class="ps-1 fs-5">- 18 jaar</p>
                </div>
            </div>

            <div class="d-flex flex-column align-items-center justify-content-center">
                <img class="aboutMe-img" src="./css/image/zelfportret.jpg" alt="">
            </div>

            <div class="d-flex flex-column  align-items-center justify-content-start mt-5">
                <div class="aboutMe-info w-100 p-3 pe-4 position-relative flex-wrap scroll-fade scroll-down">
                    <h1 class="pe-1 fs-4 fw-bold">Software developer, jaar 4</h1>
                    <div class="p-2">
                        <p class="w-100 fs-5 m-2"> - Een ervaren web, game en app developer.</p>
                        <p class="w-100 fs-5 m-2"> - Ervaring met Laravel, Livewire, Javascript, Unity en Flutter.</p>
                        <p class="w-100 fs-5"> - Altijd open om nieuwe dingen te leren, redelijk sociaal en oplossend gericht.</p>
                    </div>
                </div>
            </div>

        </section>

        <section class="pt-5 d-flex flex-row justify-content-between align-items-center">
            <div class="header-txt col-4 d-flex justify-content-start flex-column p-2 ps-5 ms-5">
                <p class="portfolio-p text-danger fs-2 scroll-fade scroll-up">My</p>
                <h1 class="portfolio-h1 fw-bold scroll-fade scroll-up">CV</h1>
            </div>
        </section>

        <section class="Cv-cards  d-flex flex-lg-row flex-column justify-content-center justify-content-lg-evenly align-items-center">

            <section class="imageContainer position-relative">
                <img class="cv-image boxShadow-img w-100 " src="./css/image/portfolio.jpg" alt="">

                <div class="imageHover w-100 h-100 position-absolute d-flex justify-content-center align-items-center">
                    <button wire:click="goToCv" class="btn hoverButton border-0 bg-transparent">
                        <p class=" hoverButton-p ps-0 text-white position-relative">→</p>
                    </button>
                </div>
            </section>

            <div class="col-10 col-lg-2 position-relative top-0 start-0">
                <img class="lightbulb-img" src="./css/image/lightbulb.png" alt="">
            </div>
        </section>

        <section class="projects d-flex flex-row justify-content-between align-items-center">
            <div class="header-txt col-4 d-flex justify-content-start flex-column p-2 ps-5 ms-5">
                <p class="text-danger scroll-fade scroll-up"><i class="fa fa-folder-open-o fs-2" aria-hidden="true"></i></p>
                <h1 class="portfolio-h1 fw-bold scroll-fade scroll-up">Projects</h1>
            </div>
        </section>

        

        <section class="swiper-card  project-cards  d-flex flex-row justify-content-center align-items-center w-100 overflow-hidden">
            <div class="swiper-wrapper w-100">
                @foreach ($cards as $card)
                <div class="swiper-slide w-100 d-flex justify-content-center align-items-start">
                    <div class="card col-10 col-lg-2 m-5 d-flex justify-content-center align-items-center">
                        <div class="p-4">
                            <h1 class="fw-bold fs-3">{{ $card['title'] }}</h1>
                        </div>
                        
                        <div class="w-100">
                            <img class="frontend-img" src="{{ $card['image'] }}" alt="{{ $card['title'] }}">
                        </div>
            
                        <div class="m-4 col-6 col-lg-4">
                            <button wire:click="route('{{ $card['title'] }}')" class="w-100 btn d-flex align-items-center justify-content-center p-2">
                                <p>View More -></p>
                            </button>
                        </div>
                    </div>
                </div>

                @endforeach
            
            </div>
        </section>
    
        
    </section>
    

</div>
