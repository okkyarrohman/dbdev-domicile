@extends('layouts.app')

@section('content')
{{-- Hero Section --}}
<section id="hero" class="d-flex align-items-center text-center text-white position-relative"
    style="height:75vh;
        background: linear-gradient(135deg, rgba(110,63,68,0.85), rgba(27,27,27,0.85)),
                    url({{ asset('assets/img/lontong-kupang.jpeg') }}) center/cover no-repeat;">

    <div class="container">
        <h1 class="display-4 fw-bold animate__animated animate__fadeInDown" 
            style="text-shadow: 2px 2px 12px rgba(0,0,0,0.7);">
            Selamat Datang di 
            <span style="color:#E6D5B8">Restoran<span style="color:#A23E48">Kami</span></span>
        </h1>

        <p class="lead mt-3 animate__animated animate__fadeInUp" 
            style="color:#E6D5B8; text-shadow: 1px 1px 8px rgba(0,0,0,0.6);">
            Nikmati sajian lezat dengan suasana hangat & elegan
        </p>

        <p class="mb-3 animate__animated animate__fadeInUp" 
            style="color:#E6D5B8; font-weight:500; text-shadow: 1px 1px 6px rgba(0,0,0,0.5);">
            <i class="bi bi-clock-fill me-2"></i> Buka: 10.00 - 22.00 WIB
        </p>

        <a href="#menu" 
            class="btn btn-lg shadow animate__animated animate__pulse animate__infinite"
            style="background: linear-gradient(45deg, #6B4226, #A23E48); color:#E6D5B8; border:none; transition: all 0.3s;">
            🍽 Lihat Menu
        </a>
    </div>

    <div class="position-absolute bottom-0 start-50 translate-middle-x mb-3">
        <a href="#about" style="color:#E6D5B8;">
            <i class="bi bi-chevron-double-down fs-1"></i>
        </a>
    </div>
</section>

{{-- About Section --}}
<section id="about" class="py-5" style="background-color:#E6D5B8;">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-md-6" data-aos="fade-right">
                <img src="{{ asset('assets/img/resto.jpeg') }}" class="img-fluid rounded-4 shadow-lg" alt="Chef">
            </div>
            <div class="col-md-6 text-center text-md-start" data-aos="fade-left">
                <h2 class="fw-bold mb-3" style="color:#6B4226;">Tentang Kami</h2>
                <p class="lead" style="color:#6B4226;">
                    RestoranKami berdiri sejak 2010, menyajikan makanan berkualitas dengan bahan segar.
                    Kami mengutamakan rasa, kebersihan, dan pelayanan ramah agar setiap kunjungan Anda
                    menjadi pengalaman yang menyenangkan.
                </p>
                <a href="/menu" class="btn btn-custom mt-3 text-white">Jelajahi Menu</a>
            </div>
        </div>
    </div>
</section>

{{-- Menu Section --}}
<section id="menu" class="py-5" style="background-color:#9c5e41;">
    <div class="container text-center">
        <h2 class="fw-bold mb-5" style="color:#fff;" data-aos="zoom-in">Menu Favorit</h2>
        <div class="row g-4">

            {{-- Menu Item 1 --}}
            <div class="col-md-4" data-aos="flip-left">
                <div class="card h-100 border-0 shadow-lg hover-card">
                    <img src="{{ asset('assets/img/lontong-kupang.jpeg') }}" 
                        class="card-img-top rounded-top img-fluid object-fit-cover" 
                        alt="Lontong Kupang" style="height:400px; object-fit:cover;">
                    <div class="card-body">
                        <h5 class="card-title fw-bold" style="color:#6B4226;">Lontong Kupang</h5>
                        <p class="card-text text-dark">Lontong khas Kupang dengan bumbu rahasia.</p>
                        <span class="badge bg-custom">Rp 120.000</span>
                    </div>
                </div>
            </div>

            {{-- Menu Item 2 --}}
            <div class="col-md-4" data-aos="flip-up">
                <div class="card h-100 border-0 shadow-lg hover-card">
                    <img src="{{ asset('assets/img/nasgor.jpeg') }}" 
                        class="card-img-top rounded-top img-fluid object-fit-cover" 
                        alt="Nasi Goreng" style="height:400px; object-fit:cover;">
                    <div class="card-body">
                        <h5 class="card-title fw-bold" style="color:#6B4226;">Nasi Goreng Spesial</h5>
                        <p class="card-text text-dark">Nasi goreng lezat dengan topping ayam & telur.</p>
                        <span class="badge bg-custom">Rp 65.000</span>
                    </div>
                </div>
            </div>

            {{-- Menu Item 3 --}}
            <div class="col-md-4" data-aos="flip-right">
                <div class="card h-100 border-0 shadow-lg hover-card">
                    <img src="{{ asset('assets/img/onde.jpeg') }}" 
                        class="card-img-top rounded-top img-fluid object-fit-cover" 
                        alt="Onde-onde" style="height:400px; object-fit:cover;">
                    <div class="card-body">
                        <h5 class="card-title fw-bold" style="color:#6B4226;">Onde-onde</h5>
                        <p class="card-text text-dark">Camilan tradisional manis dengan wijen renyah.</p>
                        <span class="badge bg-custom">Rp 25.000</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- Info & Contact Section --}}
<section id="info" class="py-5" style="background-color:#634c4c;">
    <div class="container text-white">
        <div class="row g-5 align-items-center">
            {{-- Info --}}
            <div class="col-lg-6" data-aos="fade-right">
                <h2 class="fw-bold mb-4" style="color:#E6D5B8;">📌 Informasi Restoran</h2>
                <ul class="list-unstyled fs-5">
                    <li><i class="bi bi-geo-alt-fill text-danger me-2"></i>Jl. Sudirman No. 123, Jakarta</li>
                    <li><i class="bi bi-telephone-fill text-danger me-2"></i>(021) 123-4567</li>
                    <li><i class="bi bi-clock-fill text-danger me-2"></i>Buka: 10.00 - 22.00 WIB</li>
                </ul>
                <a href="https://wa.me/628123456789" target="_blank" class="btn btn-custom mt-3"style="color:#E6D5B8;">
                    <i class="bi bi-whatsapp text-white"></i> Reservasi Sekarang
                </a>
            </div>

            {{-- Maps --}}
            <div class="col-lg-6" data-aos="fade-left">
                <div class="ratio ratio-16x9 shadow-lg rounded-4 overflow-hidden">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.6565539721166!2d106.82274551533263!3d-6.200000395498222!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e4f8aefb6f%3A0x123456789abcdef!2sJakarta!5e0!3m2!1sid!2sid!4v1694094688888!5m2!1sid!2sid"
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
    background: linear-gradient(45deg, #A23E48, #6B4226);
    color: #E6D5B8;
    border: none;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.btn-custom:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.4);
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
.text-beige { color: #E6D5B8; }
</style>
