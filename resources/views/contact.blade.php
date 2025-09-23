@extends('layouts.app')

@section('content')
{{-- Hero Section --}}
<section class="d-flex align-items-center text-white text-center position-relative"
    style="height:75vh;
        background: linear-gradient(180deg, rgba(56,56,56,0.6), rgba(0,0,0,0.4)),
                    url('{{ asset('assets/img/8.jpg') }}') center/cover no-repeat;">
    <div class="container">
        <h1 class="display-4 fw-bold mb-3 animate__animated animate__fadeInDown">Contact Us</h1>
    </div>
</section>

{{-- Contact Form --}}
<section class="py-5 "style="background: linear-gradient(
        0deg,
        rgba(250, 237, 212, 0.87),
        rgba(110, 86, 34, 0.55));">>
    <div class="container">
        <div class="row g-5 align-items-stretch ">
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
                        <input type="text" class="form-control" id="name" name="name" placeholder="Subject" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label" style="color: #8e3c20">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="5" placeholder="Write your message..." required></textarea>
                    </div>
                    <button type="submit" class="btn btn-custom btn-lg w-100 shadow">Send Message</button>
                </form>
            </div>
            <div class="col-lg-6 d-flex" data-aos="fade-left">
                <div class="w-100 p-4 rounded-4 d-flex flex-column h-100" 
                    style="color: #8e3c20;">
                    
                    <h2 class="fw-bold mb-4" style="color: #8e3c20">Details</h2>
                    
                    <ul class="list-unstyled fs-5 flex-grow-1 d-flex flex-column justify-content-between py-5 my-5" 
                        style="color: #8e3c20;">
                        
                        <!-- Phone -->
                        <li class="mb-4">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-telephone-fill text-custom me-3 fs-4"></i>
                                <div>
                                    <span class="d-block fw-bold">Call Us</span>
                                    <span class="d-block fs-6">+62 821-4009-8833</span>
                                </div>
                            </div>
                        </li>

                        <!-- Location -->
                        <li class="mb-4">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-geo-alt-fill text-custom me-3 fs-4"></i>
                                <div>
                                    <span class="d-block fw-bold">Location</span>
                                    <span class="d-block fs-6">
                                        Crab n Co Restaurant, Jl Bukit Golf D1-12 Citraland, Surabaya
                                    </span>
                                </div>
                            </div>
                        </li>

                        <!-- Open Hours -->
                        <li>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-clock-fill text-custom me-3 fs-4"></i>
                                <div>
                                    <span class="d-block fw-bold">Open</span>
                                    <span class="d-block fs-6">
                                        Monday to Sunday <br>
                                        10:00 AM – 10:00 PM
                                    </span>
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
    color: #8e3c20 !important;
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
