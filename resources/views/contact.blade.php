@extends('layouts.app')

@section('content')
{{-- Hero Section --}}
<section class="d-flex align-items-center text-white text-center position-relative"
    style="height:50vh;
        background: linear-gradient(180deg, rgba(56, 56, 56, 0.85), rgba(255, 227, 65, 0.445) ),
                    url('{{ asset('assets/img/8.jpg') }}') center/cover no-repeat;">
    <div class="container">
        <h1 class="display-4 fw-bold mb-3 animate__animated animate__fadeInDown">Hubungi Kami</h1>
        <p class="lead animate__animated animate__fadeInUp" style="max-width: 700px; margin:0 auto;">
            Kami selalu senang mendengar dari Anda. Reservasi, pertanyaan, atau kritik & saran — silakan hubungi kami.
        </p>
    </div>
</section>

{{-- Contact Info --}}
<section class="py-5" style="background: linear-gradient(
        0deg,
        rgba(0, 0, 0, 0.95),
        rgb(124, 106, 1));">
    <div class="container">
        <div class="row g-4 text-center">
            <div class="col-md-4" data-aos="fade-up">
                <div class="p-4 rounded-4 shadow-lg h-100" style="background:rgba(255,255,255,0.1); color:#efefef">
                    <i class="bi bi-geo-alt fs-1 tone-brown mb-3"></i>
                    <h5 class="fw-bold mb-2">Alamat</h5>
                    <p class="">Jl. Malioboro No. 123, Yogyakarta</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="p-4 rounded-4 shadow-lg h-100" style="background:rgba(255,255,255,0.1); color:#efefef">
                    <i class="bi bi-telephone fs-1 tone-brown mb-3"></i>
                    <h5 class="fw-bold mb-2">Telepon</h5>
                    <p class="">+62 812-3456-7890</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="p-4 rounded-4 shadow-lg h-100" style="background:rgba(255,255,255,0.1); color:#efefef">
                    <i class="bi bi-envelope fs-1 tone-brown mb-3"></i>
                    <h5 class="fw-bold mb-2">Email</h5>
                    <p class="">info@restorankami.com</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Contact Form --}}
<section class="py-5 "style="background: linear-gradient(
        0deg,
        rgb(124, 106, 1),
        rgba(0, 0, 0, 0.95));">>
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <h2 class="fw-bold mb-4 text-white">Kirim Pesan</h2>
                <form action="{{ route('contact.store') }}" method="POST" class="p-4 rounded-4 shadow-lg" style="background:rgba(255,255,255,0.1); color:#efefef">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nama Anda" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Nomor Telepon</label>
                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="08xxxxxxxxxx" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Pesan</label>
                        <textarea class="form-control" id="message" name="message" rows="5" placeholder="Tulis pesan Anda..." required></textarea>
                    </div>
                    <button type="submit" class="btn btn-custom btn-lg w-100 shadow">Kirim Pesan</button>
                </form>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="rounded-4 overflow-hidden shadow-lg" style="height:400px;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.1656788269724!2d110.3671!3d-7.8014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a578fbff0d9d1%3A0x4027a76e352f740!2sMalioboro%20Yogyakarta!5e0!3m2!1sid!2sid!4v1694142935123!5m2!1sid!2sid"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* 2 Tone Color */
.bg-cream { background: #fdf6ec !important; }
.tone-brown { color: #6B4226 !important; }

/* Button Premium */
.btn-custom {
    background: linear-gradient(45deg, #6b422600, #d2b48c00); /* brown ke beige */
    color: #fff;
    font-weight: 600;
    border: none;
    letter-spacing: 0.5px;
    transition: all 0.3s ease;
}
.btn-custom:hover {
    transform: translateY(-3px);
    background: linear-gradient(45deg, #00000054, #00000054);
    color: #fff;
    box-shadow: 0 10px 25px rgba(0,0,0,0.4);
}

/* Card */
.bg-white {
    background: #fff !important;
    border: 1px solid #f0e6d2;
}
.shadow-lg {
    box-shadow: 0 8px 25px rgba(107, 66, 38, 0.25) !important;
}

/* Section Title */
h2.fw-bold {
    color: #efefef !important;
    border-left: 5px solid #D2B48C;
    padding-left: 10px;
}
</style>
@endsection
