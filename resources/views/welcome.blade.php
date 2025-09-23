@extends('layouts.app')

@section('content')
{{-- Hero Section --}}
<section id="hero" class="position-relative text-center text-white d-flex align-items-center" style="height:90vh;">
    <!-- Background Slider -->
    <div id="heroCarousel" class="carousel slide carousel-fade position-absolute top-0 start-0 w-100 h-100" data-bs-ride="carousel">
        <div class="carousel-inner h-100">
            <div class="carousel-item active h-100">
                <div class="bg-slide h-100" style="background: linear-gradient(180deg, rgba(56,56,56,0.6), rgba(0,0,0,0.4)), url('{{ asset('assets/img/benner.jpg') }}') center/cover no-repeat;"></div>
            </div>
            <div class="carousel-item h-100">
                <div class="bg-slide h-100" style="background: linear-gradient(180deg, rgba(56,56,56,0.6), rgba(0,0,0,0.4)), url('{{ asset('assets/img/1.jpg') }}') center/cover no-repeat;"></div>
            </div>
            <div class="carousel-item h-100">
                <div class="bg-slide h-100" style="background: linear-gradient(180deg, rgba(56,56,56,0.6), rgba(0,0,0,0.4)), url('{{ asset('assets/img/3.jpg') }}') center/cover no-repeat;"></div>
            </div>
        </div>
    </div>

    <!-- Overlay Content -->
    <div class="container position-relative z-2">
        <h1 class="display-4 fw-bold animate__animated animate__fadeInDown heading" 
            style="text-shadow: 2px 2px 12px rgba(0,0,0,0.7); color:#faedd4;">
            Welcome to <span style="color:#8e3c20;">Crab n Co</span>
        </h1>

        <a href="https://api.whatsapp.com/send/?phone=62811358998&text&type=phone_number&app_absent=0" 
           target="_blank"
           class="btn btn-lg shadow mt-4 animate__animated animate__fadeInUp"
           style="background: #8e3c20; color:#faedd4; border-radius: 30px; padding:0.75rem 2rem; font-weight:600; transition: all 0.3s;">
           <i class="bi bi-calendar-check me-2"></i> Reserve Now
        </a>
    </div>
</section>

<section class="py-5 bg-light"  style="background: linear-gradient(
        0deg,
        rgba(110, 86, 34, 0.55),
        rgba(250, 237, 212, 0.87)
        );">
    <div class="container">
        <h2 class="text-center fw-bold mb-5" style="color: #8e3c20">OUR SIGNATURE MENU</h2>

        <div id="favoriteMenuCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
            <div class="carousel-inner">

                @foreach ($menus->chunk(3) as $chunkIndex => $menuChunk)
                    <div class="carousel-item {{ $chunkIndex === 0 ? 'active' : '' }}">
                        <div class="row row-cols-1 row-cols-md-3 g-4">
                            @foreach ($menuChunk as $menu)
                                <div class="col">
                                    <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden" style="background:rgba(255,255,255,0.1); color:#efefef;">
                                        <div class="position-relative overflow-hidden" style="height: 250px;">
                                            <img src="{{ asset('storage/'.$menu->gambar) }}"
                                                class="card-img-top w-100 h-100"
                                                style="object-fit: cover;"
                                                alt="{{ $menu->name }}">
                                            <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-25"></div>
                                        </div>
                                        <div class="card-body text-center">
                                            <h5 class=" fw-bold" style="color: #8e3c20">{{ $menu->nama }}</h5>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach

            </div>

            {{-- Navigasi --}}
            <button class="carousel-control-prev" type="button" data-bs-target="#favoriteMenuCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#favoriteMenuCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>
<section id="about" class="py-5" style="background: linear-gradient(
        0deg,
        rgba(250, 237, 212, 0.87),
        rgba(110, 86, 34, 0.55));">
    <div class="container">
        <div class="row justify-content-center text-center px-4" data-aos="fade-up">
            <div class="col-lg-8">
                <h2 class="fw-bold mb-3" style="color:#8e3c20; font-size:2.5rem; letter-spacing:2px;">
                    OUR STORY
                </h2>
                <hr class="mx-auto mb-4" style="width:80px; height:3px; background:#8e3c20; opacity:0.9; border:none;">
                <p class="lead" style="color:#5a2d17; font-size:1.2rem; line-height:1.8;">
                    At <span class="fw-bold">DOMICILE Kitchen & Lounge</span>, we serve not only a wide selection of 
                    Western–Eastern fusion dining experiences, but also a spontaneous ambience located 
                    in the heart of the Heroes city. <br><br>
                    Indulge your beloved ones and yourself in our <em>casual bistro</em> & 
                    <em>extraordinaire lounge</em>, where every moment is designed to be memorable.
                </p>
            </div>
        </div>
    </div>
</section>





{{-- Info & Contact Section --}}
<section id="info" class="py-5" style="background: linear-gradient(
        0deg,
        rgba(110, 86, 34, 0.55),
        rgba(250, 237, 212, 0.87));">
    <div class="container text-white">
        <div class="row g-5 align-items-center">
            {{-- Info --}}
            <div class="col-lg-6" data-aos="fade-right">
                <ul class="list-unstyled fs-5" style="color: #8e3c20">
                    <li class="mb-3">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-geo-alt-fill text-custom me-3 fs-4"></i>
                            <div>
                                <span class="d-block fw-bold">Location</span>
                                <span class="d-block fs-6">Jl. Sumatera No.35, Gubeng, Kec. Gubeng, Surabaya</span>
                            </div>
                        </div>
                    </li>
                    <li class="mb-3">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-telephone-fill text-custom me-3 fs-4"></i>
                            <div>
                                <span class="d-block fw-bold">Phone</span>
                                <span class="d-block fs-6">+62 811358998</span>
                            </div>
                        </div>
                    </li>
                    <li class="mb-3">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-clock-fill text-custom me-3 fs-4"></i>
                            <div>
                                <span class="d-block fw-bold">Open</span>
                                <div class="d-flex flex-row justify-content-between gap-5">
                                    <span class="d-block fs-6">
                                        Monday to Sunday  <br>
                                        10:00 AM - 10:00 PM
                                    </span>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            {{-- Maps --}}
            <div class="col-lg-6" data-aos="fade-left">
                <div class="ratio ratio-16x9 shadow-lg rounded-4 overflow-hidden">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.74994879306!2d112.75011730000001!3d-7.2692707!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbd9ce98e1fd%3A0x7d23e2e7537c2996!2sDomicile%20Kitchen%20And%20Lounge!5e0!3m2!1sid!2sid!4v1757948753589!5m2!1sid!2sid"                        
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

<style>
body {
    background-color: #fff;
    color: #1C1C1C;
}
.btn-custom {
    background: linear-gradient(45deg, #a23e4800, #6b422600);
    color: #E6D5B8;
    border: none;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.btn-custom:hover {
    transform: translateY(-3px);
    background-color: rgb(0, 0, 0);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.863);
}
.bg-custom {
    background: #A23E48 !important;
    color: #fff;
}
/* Hover effect menu */
.hover-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.hover-card:hover {
    transform: translateY(-12px) scale(1.03);
    box-shadow: 0 15px 30px rgba(0,0,0,0.25);
}
.text-custom { color: #8e3c20 !important; }

.text-beige { color: #E6D5B8; }
.card img {
    transition: transform 0.6s ease;
}
.card:hover img {
    transform: scale(1.05);
}
#hero .bg-slide {
    width: 100%;
    height: 100%;
}
#hero:before {
    content: "";
    position: absolute;
    top:0; left:0; right:0; bottom:0;
    background: rgba(0,0,0,0.25);
    z-index:1;
}
</style>
@push('styles')
<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
<style>
/* Global font setup */
body {
    font-family: 'Poppins', sans-serif;
    background-color: #fff;
    color: #1C1C1C;
}

/* Headings */
h1, h2, h3, h4, h5, h6,
.heading {
    font-family: 'DM Serif Display', serif;
    letter-spacing: 1px;
}

/* Subheading (taglines, section titles kecil) */
.subheading {
    font-family: 'DM Serif Display', serif;
    font-style: italic;
    font-size: 1.25rem;
    color: #8e3c20;
}

/* Body */
p, .lead, span, li {
    font-family: 'Poppins', sans-serif;
    font-weight: 300;
}

/* Branding tagline “The Season” */
.tagline {
    font-family: 'DM Serif Display', serif;
    font-style: italic;
    font-size: 1.5rem;
    letter-spacing: 2px;
    text-transform: uppercase;
    color: #8e3c20;
}
</style>
@endpush