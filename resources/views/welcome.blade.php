@extends('layouts.app')

@section('content')
{{-- Hero Section --}}
<section id="hero" class="d-flex align-items-center text-center text-white position-relative"
    style="height:75vh;
        background: linear-gradient(180deg, rgba(56, 56, 56, 0.85), rgba(255, 227, 65, 0.445) ),
                    url({{ asset('assets/img/benner.jpg') }}) center/cover no-repeat;">

    <div class="container">
        <h1 class="display-4 fw-bold animate__animated animate__fadeInDown" 
            style="text-shadow: 2px 2px 12px rgba(0,0,0,0.7);">
            <span style="color:#E6D5B8">DOMICILE Kitchen & Lounge</span>
        </h1>

        <p class="lead mt-3 animate__animated animate__fadeInUp" 
            style="color:#E6D5B8; text-shadow: 1px 1px 8px rgba(0,0,0,0.6);">
            Casual dining
        </p>

        <p class="mb-3 animate__animated animate__fadeInUp" 
            style="color:#E6D5B8; font-weight:500; text-shadow: 1px 1px 6px rgba(0,0,0,0.5);">
            <i class="bi bi-clock-fill me-2"></i> Open: 10:00 AM - 10:00 PM
        </p>

        <a href="/menu" 
            class="btn btn-lg shadow animate__animated animate__pulse animate__infinite fs-semibold"
            style="background: linear-gradient(45deg, #7b767273, #7b767257); color:#efefef; border:none; transition: all 0.3s;">
            <span><i class="bi bi-book mt-5"></i></span> Menu
        </a>
    </div>

</section>

{{-- About Section --}}
<section id="about" class="py-5" style="background: linear-gradient(
        0deg,
        rgb(124, 106, 1),
        rgba(0, 0, 0, 0.95));">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-md-6" data-aos="fade-right">
                <img src="{{ asset('assets/img/resto.jpeg') }}" class="img-fluid rounded-4 shadow-lg" alt="Chef">
            </div>
            <div class="col-md-6 text-center text-md-start" data-aos="fade-left">
                <h2 class="fw-bold mb-3" style="color:#efefef;">About Us</h2>
                <p class="lead" style="color:#efefef;">
                    DOMICILE Kitchen & Lounge serves not just a wide range selection of Western – Eastern fusion dining experiences, but also spontaneous ambience, which is located in the heart of the Heroes city. Indulge your most beloved people and yourself in our casual bistro & extraordinaire lounge.
                </p>
                <a href="/aboutus" class="btn btn-custom mt-3 shadow text-white">About Us</a>
            </div>
        </div>
    </div>
</section>
<section class="py-5 bg-light"  style="background: linear-gradient(
        0deg,
        rgba(0, 0, 0, 0.95),
        rgb(124, 106, 1));">
    <div class="container">
        <h2 class="text-center fw-bold mb-5" style="color: #efefef">Menus</h2>

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
                                            <h5 class="card-title fw-bold">{{ $menu->nama }}</h5>
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



{{-- Info & Contact Section --}}
<section id="info" class="py-5" style="background: linear-gradient(
        0deg,
        rgb(124, 106, 1),
        rgba(0, 0, 0, 0.95));">
    <div class="container text-white">
        <div class="row g-5 align-items-center">
            {{-- Info --}}
            <div class="col-lg-6" data-aos="fade-right">
                <h2 class="fw-bold mb-4" style="color:#efefef;">Information</h2>
                <ul class="list-unstyled fs-5">
                    <li class="mb-3">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-geo-alt-fill text-custom me-3 fs-4"></i>
                            <div>
                                <span class="d-block fw-bold">Location</span>
                                <span class="d-block text-white fs-6">Jl. Sumatera No.35, Gubeng, Kec. Gubeng, Surabaya</span>
                            </div>
                        </div>
                    </li>
                    <li class="mb-3">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-telephone-fill text-custom me-3 fs-4"></i>
                            <div>
                                <span class="d-block fw-bold">Phone</span>
                                <span class="d-block text-white fs-6">(031) 5016900</span>
                            </div>
                        </div>
                    </li>
                    <li class="mb-3">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-clock-fill text-custom me-3 fs-4"></i>
                            <div>
                                <span class="d-block fw-bold">Open</span>
                                <div class="d-flex flex-row justify-content-between gap-5">
                                    <span class="d-block text-white fs-6">
                                        Sunday to Thursday  <br>
                                        10:00 AM - 10:00 PM
                                    </span>
                                    <span class="d-block text-white fs-6">
                                        Friday to Saturday  <br>
                                        10:00 AM - 24:00 PM
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
.text-custom { color: #efefef !important; }

.text-beige { color: #E6D5B8; }
.card img {
    transition: transform 0.6s ease;
}
.card:hover img {
    transform: scale(1.05);
}
</style>
