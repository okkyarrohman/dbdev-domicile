@extends('layouts.app')

@section('content')
<section class="d-flex align-items-center text-white text-center position-relative"
    style="height:75vh;
        background: linear-gradient(180deg, rgba(7, 7, 7, 0.85), rgba(255, 255, 255, 0.171) ),
        url('{{ asset('assets/img/2.jpg') }}') center/cover no-repeat;">
    <div class="container">
        <h1 class="display-3 fw-bold mb-3 animate__animated animate__fadeInDown" style="color: #faedd4">OUR PROMOTION</h1>
    </div>
</section>
<section id="promotion" class="py-5 min-vh-100" style="background:linear-gradient(
        0deg,
        rgba(250, 237, 212, 0.87),
        rgba(110, 86, 34, 0.55));">
    <div class="container text-center">
        <!-- Sliding Promotion Banner -->
        <div id="promotionCarousel" class="carousel slide mb-5" data-bs-ride="carousel">
            <div class="carousel-inner rounded-4 shadow-lg" style="height:400px; overflow:hidden;">
                @foreach($banners as $index => $banner)
                    <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                        <img src="{{ asset('storage/'.$banner->img) }}" 
                            class="d-block w-100 h-100 object-fit-cover" 
                            alt="Banner Promo">
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#promotionCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#promotionCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>


        <!-- Visuals of Benefit -->
        <div class="row g-4">
            @foreach($promotions as $promotion)
                <div class="col-md-4">
                    <div class="p-4 rounded-4 shadow-sm h-100 text-center" style="background:rgba(255,255,255,0.1);">
                        @if($promotion->img)
                           <img src="{{ asset('storage/'.$promotion->img) }}" 
                            alt="Promotion" 
                            class="mb-3" 
                            style="width:300%; height:200px; object-fit:cover; border-radius:8px;">
                        @else
                            <i class="bi bi-star-fill fs-1 text-custom mb-3"></i>
                        @endif
                        <h5 class="mb-0" style="color: #8e3c20">{{ $promotion->keterangan }}</h5>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>
@endsection
