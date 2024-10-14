@extends('admin.layout.devider')

@section('title')
    <title>Home Portfolio</title>
@endsection

@section('pageCss')
    <link rel="stylesheet" href="./css/pages/home/Content.css">
@endsection


@section('header')


    @include('admin.layout.header')

    {{-- <section class="home-header w-100 h-100 position-relative d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between">
        <div class="header-txt col-4 d-flex justify-content-start flex-column p-5 ms-5">
            <p class="text-danger portfolio-p scroll-fade scroll-left">My</p>
            <h1 class="fw-bold portfolio-h1 scroll-fade scroll-left">Portfolio</h1>
        </div>
        
    </section> --}}

    <section class="home-header border-0 w-100 h-100 position-relative d-flex flex-row justify-content-start align-items-center">
        <div class="home-header-info z-3">
            <div class="w-100">
                <p class="text-start home-header-sd fs-1 scroll-fade scroll-left">My,</p>
                <h1 class="portfolio-h1 w-50 text-start text-white fw-bold scroll-fade scroll-left">
                    Portfolio
                </h1>
            </div>

            <p class="text-start home-header-text text-white fw-normal mt-5">
                Welkom bij mijn portfolio website, waarbij je mijn Cv, mijn projecten en over mij kunt lezen. Daarnaast is de mogelijkheid er ook om over mijn burgerschap opdrachten te lezen op de tweede pagina. Veel leesplezier en hopelijk is het informatief.
            </p>
        </div>
    </section>

    
    {{-- <div class="d-flex justify-content-center align-content-center mt-5">
        <img class="scroll-down animate-image" src="./css/image/arrow-down.png" alt="">
    </div>
     --}}
    
@endsection

@section('content')
    @livewire('home')
@endsection


@section('footer')

    @include('admin.layout.footer')

@endsection
