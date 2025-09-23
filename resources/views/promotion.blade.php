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
        <!-- Title -->
        <h2 class="fw-bold mb-5" style="color:#8e3c20;">OUR PROMOTION</h2>

        <!-- Sliding Promotion Banner -->
        <div id="promotionCarousel" class="carousel slide mb-5" data-bs-ride="carousel">
            <div class="carousel-inner rounded-4 shadow-lg" style="height:400px; overflow:hidden;">
                <div class="carousel-item active">
                    <img src="{{ asset('assets/img/1.jpg') }}" class="d-block w-100 h-100 object-fit-cover" alt="Promo 1">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/img/2.jpg') }}" class="d-block w-100 h-100 object-fit-cover" alt="Promo 2">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/img/3.jpg') }}" class="d-block w-100 h-100 object-fit-cover" alt="Promo 3">
                </div>
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
            <div class="col-md-4">
                <div class="p-4 rounded-4 shadow-sm h-100 bg-white">
                    <i class="bi bi-gift-fill fs-1 text-custom mb-3"></i>
                    <h5 class="fw-bold mb-2">Free Item</h5>
                    <p class="mb-0 text-muted">Get exclusive free items with every purchase above Rp 200.000.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 rounded-4 shadow-sm h-100 bg-white">
                    <i class="bi bi-ticket-perforated-fill fs-1 text-custom mb-3"></i>
                    <h5 class="fw-bold mb-2">Voucher Discount</h5>
                    <p class="mb-0 text-muted">Enjoy special vouchers up to 50% off on selected menus.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 rounded-4 shadow-sm h-100 bg-white">
                    <i class="bi bi-cash-stack fs-1 text-custom mb-3"></i>
                    <h5 class="fw-bold mb-2">Cashback Reward</h5>
                    <p class="mb-0 text-muted">Earn cashback points for every dine-in and redeem on your next visit.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
