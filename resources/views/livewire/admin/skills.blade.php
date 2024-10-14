<div class="swiper-wrapper">
    @foreach($skills as $skill)
        <div class="swiper-slide d-flex flex-lg-row flex-column justify-content-evenly align-items-center">
            <div class="col-lg-4 col-8 mt-lg-0 mt-5">
                <p class="fs-5">{{ $skill['description'] }}</p>
                <p>Ervaring: {{ $skill['experience']}}</p>
            </div>
            <div class="card col-lg-5 col-10 m-4 d-flex justify-content-center align-items-center">
                <div class="w-100">
                    <img class="recent-img w-100" src="{{ $skill['imagePath'] }}" alt="">
                </div>
            </div>
        </div>
    @endforeach
</div>
