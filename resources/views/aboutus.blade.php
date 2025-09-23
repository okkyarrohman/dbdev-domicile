@extends('layouts.app')

@section('content')
{{-- Hero Section --}}
<section class="d-flex align-items-center text-white text-center position-relative"
    style="height:75vh;
        background: linear-gradient(180deg, rgba(7, 7, 7, 0.85), rgba(255, 255, 255, 0.171) ),
        url('{{ asset('assets/img/3.jpg') }}') center/cover no-repeat;">
    <div class="container">
        <h1 class="display-3 fw-bold mb-3 animate__animated animate__fadeInDown" style="color: #faedd4">About Us</h1>
    </div>
</section>

{{-- About Content --}}
<section class="py-5" style="background: linear-gradient(
        0deg,
         rgba(250, 237, 212, 0.87),
         rgba(110, 86, 34, 0.55));">
    <div class="container">
        <div class="m-auto text-center my-5" style="color: #A23E48">
            <h2 class="fw-bold">
                Few Words About Us
            </h2>
        </div>
        <div class="row mt-3 align-items-center g-5">
            <div class="col-lg-6 " data-aos="fade-right">
                <img src="{{ asset('assets/img/2.jpg') }}" alt="Restaurant Interior" class="img-fluid m-auto rounded-4 shadow-lg" style="height:750px;">
            </div>
            <div class="col-lg-6" data-aos="fade-left">
            <div class="p-4 rounded-4 shadow-lg h-100 text-center" style="background:rgba(255,255,255,0.1); color:#efefef">
                <h2 class="fw-bold mb-3" style="color:#efefef;">Our Restaurant</h2>
                <p class="fs-5" style="color: #efefef">
                    Since <strong>2010</strong>, DOMICILE has become a favorite culinary destination,
                    serving <strong>authentic Indonesian dishes</strong> with a modern twist.
                    With a warm Javanese-inspired interior and friendly service,
                    we strive to create a dining atmosphere that is both comfortable and memorable.
                </p>
                <p class="fs-5" style="color: #efefef">
                    We believe every dish tells a story, and every visit is an experience worth remembering.
                </p>
            </div>
            </div>
        </div>
        <div class="row align-items-center g-5 m-auto mt-5 py-5">
            <div class="col-lg-6 m-auto" data-aos="fade-left">
                <div class="p-4 rounded-4 h-100 text-center" style=" color:#efefef">
                    <div class="d-flex m-auto gap-5 justify-content-center mt-2 mb-5">
                        <img src="{{ asset('assets/img/crab.png') }}" alt="Restaurant Interior" class="">
                        <i class="bi bi-chat-quote-fill fs-1 mt-2" style="color: #A23E48"></i>
                    </div>
                    <h2 class="fw-bold mb-5" style="color:#A23E48;">𝘾𝙍𝘼𝘽𝘽𝙄𝙉𝙂 𝙉𝙊𝙒</h2>
                </div>
            </div>
        </div>

    </div>
</section>
<section id="news" class="py-5" style="background: linear-gradient(
        180deg,
        rgba(250, 237, 212, 0.95),
        rgba(142, 60, 32, 0.15));">
    <div class="container text-center d-flex justify-content-between w-75">
        {{-- List of News / Blog --}}
        @php
            $news = $news ?? collect();
        @endphp

        <section id="news" class="py-5">
            <div class="container">
                <h2 class="fw-bold text-center mb-4" style="color:#8e3c20;">LATEST NEWS</h2>

                <div id="newsCarousel" class="carousel slide" data-bs-ride="false">
                    <div class="carousel-inner">

                        @foreach ($news->chunk(3) as $chunkIndex => $chunk)
                            <div class="carousel-item {{ $chunkIndex === 0 ? 'active' : '' }}">
                                <div class="d-flex flex-column gap-3">

                                    @foreach ($chunk as $item)
                                        <div class="card shadow-sm border-0 rounded-4 hover-card">
                                            <div class="row g-0 align-items-center">
                                                <div class="col-md-4">
                                                    <img src="{{ asset('assets/img/2.jpg') }}"
                                                        class="img-fluid rounded-start"
                                                        alt="{{ $item->title ?? 'News' }}"
                                                        style="object-fit: cover; height:180px; width:100%;">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body text-start">
                                                        <h5 class="fw-bold" style="color:#8e3c20;">{{ strtoupper($item->title ?? 'UNTITLED') }}</h5>
                                                        <p class="text-muted">
                                                            {{ \Illuminate\Support\Str::limit($item->excerpt ?? ($item->body ?? ''), 200) }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        @endforeach

                    </div>

                    {{-- Tombol navigasi atas & bawah --}}
                    <div class="d-flex justify-content-center mt-3 gap-3">
                        <button class="btn btn-outline-dark rounded-circle" type="button" data-bs-target="#newsCarousel" data-bs-slide="prev">
                            <i class="bi bi-arrow-up"></i>
                        </button>
                        <button class="btn btn-outline-dark rounded-circle" type="button" data-bs-target="#newsCarousel" data-bs-slide="next">
                            <i class="bi bi-arrow-down"></i>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <div class="w-50">
            {{-- Logo --}}
            <div class="mb-4">
                <img src="{{ asset('assets/img/logos.png') }}" alt="Crab n Co Logo"
                     class="img-fluid m-auto" style="max-height:120px;">
            </div>
    
            {{-- Heading --}}
            <h2 class="fw-bold mb-3" style="color:#8e3c20; font-family:'DM Serif Display', serif;">
                Get to Know Us More
            </h2>
            <p class="lead mb-5" style="color:#5a2d17; font-family:'Poppins', sans-serif;">
                 Our story begins in the vibrant city of Surabaya, where the passion for seafood and the love for 
                    culinary excellence meet. We are thrilled to share with you a new dining destination that 
                    celebrates the flavors of the ocean and the art of fine cooking. Stay tuned for our grand 
                    launch, where you’ll be invited to experience our signature dishes, a warm and elegant 
                    atmosphere, and an unforgettable journey of taste..
            </p>
            {{-- Instagram backlink --}}
            <div class="mt-5">
                <a href="https://instagram.com/yourpage" target="_blank" class="btn btn-lg shadow"
                style="background:#8e3c20; color:#faedd4; border-radius: 30px; font-weight:600;">
                    <i class="bi bi-instagram me-2"></i> Our Page on Instagram
                </a>
            </div>
        </div>


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
.scroll-container::-webkit-scrollbar {
    width: 8px;
}
.scroll-container::-webkit-scrollbar-thumb {
    background-color: #8e3c20;
    border-radius: 4px;
}
#news {
    height: 100vh;
    display: flex;
    align-items: center;
}
.scroll-container {
    height: 400px; /* biar pas */
    overflow-x: auto;
}
</style>
@endpush
