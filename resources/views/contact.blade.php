@extends('layouts.app')

@section('content')
{{-- Hero Section --}}
<section class="d-flex align-items-center text-white text-center position-relative"
    style="height:75vh;
        background: linear-gradient(180deg, rgba(56, 56, 56, 0.85), rgba(255, 227, 65, 0.445) ),
                    url('{{ asset('assets/img/8.jpg') }}') center/cover no-repeat;">
    <div class="container">
        <h1 class="display-4 fw-bold mb-3 animate__animated animate__fadeInDown">Contact Us</h1>
        <p class="lead animate__animated animate__fadeInUp" style="max-width: 700px; margin:0 auto;">
            We’re always happy to hear from you. For reservations, questions, or feedback — feel free to reach out.
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
                <a href="https://maps.app.goo.gl/RmNScrSWqndsnDBs5" 
                target="_blank" 
                class="text-decoration-none">
                    <div class="p-4 rounded-4 shadow-lg h-100 card-hover" 
                        style="background:rgba(255,255,255,0.1); color:#efefef">
                        <i class="bi bi-geo-alt fs-1 tone-white mb-3"></i>
                        <h5 class="fw-bold mb-2">Address</h5>
                        <p class="mb-0">Jl. Sumatera No.35, Gubeng, Kec. Gubeng, Surabaya</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4" data-aos="fade-up">
                <a href="https://api.whatsapp.com/send/?phone=62811358998&text&type=phone_number&app_absent=0" 
                class="text-decoration-none">
                    <div class="p-4 rounded-4 shadow-lg h-100 card-hover" 
                        style="background:rgba(255,255,255,0.1); color:#efefef">
                        <i class="bi bi-telephone fs-1 tone-white mb-3"></i>
                        <h5 class="fw-bold mb-2">Phone</h5>
                        <p class="mb-0">+62 811358998</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4" data-aos="fade-up">
                <a href="https://www.instagram.com/domicilesby/?utm_source=ig_web_button_share_sheet" 
                class="text-decoration-none">
                    <div class="p-4 rounded-4 shadow-lg h-100 card-hover" 
                        style="background:rgba(255,255,255,0.1); color:#efefef">
                        <i class="bi bi-instagram fs-1 tone-white mb-3"></i>
                        <h5 class="fw-bold mb-2">Instagram</h5>
                        <p class="mb-0">DOMICILESBY</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

{{-- Contact Form --}}
<section class="py-5 "style="background: linear-gradient(
        0deg,
        rgba(250, 237, 212, 0.87),
        rgba(110, 86, 34, 0.55));">>
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <h2 class="fw-bold mb-4 text-white">Send us a message</h2>
                <form action="{{ route('contact.store') }}" method="POST" class="p-4 rounded-4 shadow-lg" style="background:rgba(255,255,255,0.1); color:#efefef">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label" style="color: #8e3c20">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label" style="color: #8e3c20">Whatsapp Number</label>
                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="08xxxxxxxxxx" required>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label" style="color: #8e3c20">Subject</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label" style="color: #8e3c20">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="5" placeholder="Write your message..." required></textarea>
                    </div>
                    <button type="submit" class="btn btn-custom btn-lg w-100 shadow">Send Message</button>
                </form>
            </div>
            <div class="col-lg-6 h-full" data-aos="fade-left">
                <h2 class="fw-bold mb-4 text-white">Send us a message</h2>
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
            </div>
        </div>
    </div>
</section>

<style>
/* 2 Tone Color */
.bg-cream { background: #fdf6ec !important; }
.tone-brown { color: #6B4226 !important; }

/* Premium Button */
.btn-custom {
    background: linear-gradient(45deg, #6b422600, #d2b48c00); /* brown to beige */
    color: #8e3c20;
    font-weight: 600;
    border: none;
    letter-spacing: 0.5px;
    transition: all 0.3s ease;
}
.btn-custom:hover {
    transform: translateY(-3px);
    background: linear-gradient(45deg,   rgba(110, 85, 34, 0.55),
        rgba(110, 86, 34, 0.55));
    color: #efefef;
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
.card-hover {
    transition: all 0.3s ease-in-out;
}
.card-hover:hover {
    transform: translateY(-8px) scale(1.05);
    box-shadow: 0 10px 25px rgba(0,0,0,0.3);
    background: rgba(255,255,255,0.2);
}

</style>
@endsection
