@extends('admin.layout.devider')

@section('title')
    <title>Burgerschap Portfolio</title>
@endsection

@section('pageCss')
    <link rel="stylesheet" href="./css/pages/burgerschap/Content.css">
@endsection

@section('header')


    @include('admin.layout.header')
    <section class="w-100 h-100 position-relative d-flex flex-column flex-lg-row justify-content-lg-between justify-content-center">
        <div class="header-txt col-4 d-flex justify-content-start flex-column p-5 ms-5">
            <p class="text-danger portfolio-p scroll-fade scroll-left">My</p>
            <h1 class="fw-bold portfolio-h1 scroll-fade scroll-left">Burgerschap</h1>
        </div>
    
        <div class="header-img col-5 d-flex flex-column align-items-center justify-content-center mt-5">
            <img src="./css/image/combined.png" alt="">
        </div>
    
    </section>
    
    <div class="d-flex justify-content-center align-content-center">
        <img class="scroll-down animate-image" src="./css/image/arrow-down.png" alt="">
    </div>
    
@endsection

@section('content')
    @livewire('burgerschap' , [$titles])
@endsection


@section('footer')

    @include('admin.layout.footer')

@endsection