@extends('layouts.app')

@section('content')
{{-- Hero Section --}}
<section class="d-flex align-items-center text-white text-center position-relative"
    style="height:60vh;
        background: linear-gradient(135deg, rgba(0,0,0,0.65), rgba(0,0,0,0.75)),
                    url('{{ asset('assets/img/resto.jpeg') }}') center/cover no-repeat;">
    <div class="container">
        <h1 class="display-3 fw-bold mb-3 animate__animated animate__fadeInDown">Tentang Kami</h1>
        <p class="lead animate__animated animate__fadeInUp" style="max-width: 700px; margin:0 auto;">
            Menyajikan pengalaman kuliner terbaik dengan perpaduan cita rasa tradisional dan modern.
        </p>
    </div>
</section>

{{-- About Content --}}
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="fade-right">
                <img src="{{ asset('assets/img/resto-interior.jpeg') }}" alt="Restoran Interior" class="img-fluid rounded-4 shadow-lg">
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <h2 class="fw-bold mb-3" style="color:#6B4226;">RestoranKami</h2>
                <p class="fs-5 text-muted">
                    Sejak <strong>2010</strong>, RestoranKami menjadi destinasi kuliner favorit yang
                    menghadirkan <strong>hidangan Nusantara autentik</strong> dengan sentuhan modern.
                    Dengan desain interior hangat bernuansa Jawa klasik dan pelayanan ramah,
                    kami selalu berusaha menciptakan suasana makan yang nyaman dan berkesan.
                </p>
                <p class="fs-5 text-muted">
                    Kami percaya setiap sajian adalah cerita, dan setiap kunjungan Anda adalah pengalaman yang layak dikenang.
                </p>
            </div>
        </div>
        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="fade-left">
                <h2 class="fw-bold mb-3" style="color:#6B4226;">Menu Favorit Kami</h2>
                <p class="fs-5 text-muted">
                    Kami bangga menghadirkan berbagai hidangan yang menjadi favorit pelanggan.
                    Setiap menu diproses dari bahan-bahan segar pilihan dengan resep autentik Nusantara
                    dan sentuhan modern yang khas.
                </p>
                <ul class="fs-5 text-muted list-unstyled">
                    <li>🍛 <strong>Nasi Gudeg</strong> — manis gurih khas Yogyakarta.</li>
                    <li>🍢 <strong>Sate Maranggi</strong> — daging sapi berbumbu istimewa.</li>
                    <li>🍲 <strong>Soto Ayam Kampung</strong> — kuah hangat penuh rempah.</li>
                    <li>🥤 <strong>Es Cendol Susu</strong> — segar dan nikmat untuk penutup.</li>
                </ul>
            </div>
            <div class="col-lg-6" data-aos="fade-right">
                <img src="{{ asset('assets/img/menu-favorit.jpeg') }}" alt="Menu Favorit" class="img-fluid rounded-4 shadow-lg">
            </div>
        </div>

    </div>
</section>

{{-- Vision & Mission --}}
<section class="py-5" style="background-color:#6B4226;">
    <div class="container text-white text-center">
        <h2 class="fw-bold mb-5">Visi & Misi Kami</h2>
        <div class="row g-4">
            <div class="col-md-6" data-aos="zoom-in">
                <div class="p-4 rounded-4 shadow-lg h-100" style="background:rgba(255,255,255,0.1);">
                    <h4 class="fw-bold mb-3">Visi</h4>
                    <p class="fs-5">Menjadi restoran pilihan utama yang menghadirkan cita rasa Nusantara dalam suasana modern & elegan.</p>
                </div>
            </div>
            <div class="col-md-6" data-aos="zoom-in">
                <div class="p-4 rounded-4 shadow-lg h-100" style="background:rgba(255,255,255,0.1);">
                    <h4 class="fw-bold mb-3">Misi</h4>
                    <ul class="list-unstyled fs-5">
                        <li>🍴 Menyajikan makanan berkualitas tinggi dengan bahan segar.</li>
                        <li>😊 Memberikan pelayanan ramah & profesional.</li>
                        <li>🏡 Menciptakan suasana hangat dan nyaman bagi pelanggan.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Call to Action --}}
<section class="py-5 text-center text-white" style="background:linear-gradient(135deg,#A23E48,#6B4226);">
    <div class="container">
        <h2 class="fw-bold mb-3">Datang & Rasakan Pengalaman Kami</h2>
        <p class="fs-5 mb-4">Reservasi sekarang untuk pengalaman kuliner yang tak terlupakan.</p>
        <a href="https://wa.me/628123456789" target="_blank" class="btn btn-light btn-lg shadow">
            📲 Pesan via WhatsApp
        </a>
    </div>
</section>
@endsection

@push('styles')
<style>
.btn-custom {
    background: linear-gradient(45deg, #A23E48, #6B4226);
    color: #E6D5B8;
    border: none;
    transition: all 0.3s ease;
}
.btn-custom:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.4);
    color: #fff;
}
</style>
@endpush
