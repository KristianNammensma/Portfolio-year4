@extends('admin.layout.baseLayout')

@section('css')
    @yield('pageCss')
@endsection

@section('devider')
    <header class="m-0 p-0 w-100  d-flex justify-content-center align-items-center flex-column">
        @yield('header')
    </header>

    <main class="m-0 p-0">
        @yield('content')
    </main>

    <footer class="d-flex justify-content-center align-items-center flex-column">
         @yield('footer')
    </footer>
@endsection
