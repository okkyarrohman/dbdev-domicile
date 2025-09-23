@extends('layouts.app')

@section('content')
<section class="d-flex align-items-center text-white text-center position-relative"
    style="height:75vh;
        background: linear-gradient(180deg, rgba(7, 7, 7, 0.85), rgba(255, 255, 255, 0.171) ),
        url('{{ asset('assets/img/4.jpg') }}') center/cover no-repeat;">
    <div class="container">
        <h1 class="display-3 fw-bold mb-3 animate__animated animate__fadeInDown" style="color: #faedd4">MEETING & EVENTS</h1>
    </div>
</section>
<section id="meeting-event" class="py-5" style="background:linear-gradient(
        0deg,
        rgba(250, 237, 212, 0.87),
        rgba(110, 86, 34, 0.55));">
    <div class="container">
        <div style="color:#8e3c20">
            <h5>
                Experience the perfect ambience for high-level discussions. 
                    Our VIP rooms are designed for exclusivity, comfort, and privacy. 
                    Enjoy world-class service and a restaurant setting that blends 
                    elegance with functionality.
            </h5>
        </div>
        <!-- Carousel -->
        <div id="vipCarousel" class="carousel slide mt-5" data-bs-ride="carousel">
            <div class="carousel-inner rounded-4 shadow-lg" style="height:500px; overflow:hidden;">
                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <img src="{{ asset('assets/img/1.jpg') }}" 
                         class="d-block w-100 h-100 object-fit-cover" 
                         alt="VIP Room 1">
                </div>
                <!-- Slide 2 -->
                <div class="carousel-item">
                    <img src="{{ asset('assets/img/2.jpg') }}" 
                         class="d-block w-100 h-100 object-fit-cover" 
                         alt="VIP Room 2">
                </div>
                <!-- Slide 3 -->
                <div class="carousel-item">
                    <img src="{{ asset('assets/img/3.jpg') }}" 
                         class="d-block w-100 h-100 object-fit-cover" 
                         alt="Resto Ambience">
                </div>
            </div>

            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#vipCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#vipCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>

            <!-- Indicators -->
            <div class="carousel-indicators mt-3">
                <button type="button" data-bs-target="#vipCarousel" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#vipCarousel" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#vipCarousel" data-bs-slide-to="2"></button>
            </div>
        </div>

        <!-- Event Packages -->
        <div class="text-center mb-5 mt-5">
            <h3 class="fw-bold mb-4" style="color:#8e3c20;">List of Board of Directors Meeting Package</h3>
        </div>

        <div class="row g-4">
            <!-- VIP 1 or 2 Room Meeting -->
            <div class="col-md-6">
                <div class="p-4 rounded-4 shadow-sm h-100 text-center" style="background: linear-gradient(
        0deg,
        rgba(110, 86, 34, 0.1),
        rgba(250, 237, 212, 0),
        rgba(110, 86, 34, 0.1)); color:#8e3c20">
                    <i class="bi bi-door-closed-fill fs-1 text-custom mb-3"></i>
                    <h5 class="fw-bold mb-2">VIP 1 or 2 Room Meeting</h5>
                    <p class="mb-0">Exclusive single or double VIP room setup for private board meetings with premium service.</p>
                </div>
            </div>

            <!-- Double VIP Room Meeting -->
            <div class="col-md-6" style="">
                <div class="p-4 rounded-4 shadow-sm h-100 text-center" style="background: linear-gradient(
        0deg,
        rgba(110, 86, 34, 0.1),
         rgba(250, 237, 212, 0),
        rgba(110, 86, 34, 0.1)); color:#8e3c20">
                    <i class="bi bi-building-check fs-1 text-custom mb-3"></i>
                    <h5 class="fw-bold mb-2">Double VIP Room Meeting</h5>
                    <p class="mb-0">Spacious setup combining two VIP rooms for larger board of directors meetings and exclusive gatherings.</p>
                </div>
            </div>
        </div>

        <div class="text-center mb-5 mt-5">
            <h3 class="fw-bold mb-4" style="color:#8e3c20;">Events Package</h3>
            <p class="" style="color: #8e3c20">Choose the best package to suit your special events, gatherings, or corporate needs.</p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="p-4 rounded-4 shadow-sm h-100 text-center" style="background: linear-gradient(
        0deg,
        rgba(110, 86, 34, 0.199),
         rgba(250, 237, 212, 0)); color:#8e3c20">
                    <i class="bi bi-clock-history fs-1 text-custom mb-3"></i>
                    <h5 class="fw-bold mb-2">Half Day Book</h5>
                    <p class="mb-0">Perfect for short meetings and gatherings with full service included.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 rounded-4 shadow-sm h-100 text-center" style="background: linear-gradient(
        0deg,
        rgba(110, 86, 34, 0.199),
         rgba(250, 237, 212, 0)); color:#8e3c20">
                    <i class="bi bi-calendar2-day-fill fs-1 text-custom mb-3"></i>
                    <h5 class="fw-bold mb-2">Full Day Book</h5>
                    <p class="mb-0">Ideal for full-day meetings and events with complete hospitality service.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 rounded-4 shadow-sm h-100 text-center" style="background: linear-gradient(
        0deg,
        rgba(110, 86, 34, 0.199),
         rgba(250, 237, 212, 0)); color:#8e3c20">
                    <i class="bi bi-people-fill fs-1 text-custom mb-3"></i>
                    <h5 class="fw-bold mb-2">Full Room Book</h5>
                    <p class="mb-0">Exclusive booking for large gatherings, meetings, or private celebrations.</p>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection
