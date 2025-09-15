@extends('layouts.app')

@section('content')
{{-- Gallery Section --}}
<section class="py-5 bg-cream" style="min-height: 100vh; display: flex; align-items: center;">
    <div class="container" style="margin-top: 80px">
        <h2 class="text-center fw-bold mb-5 tone-brown">Gallery</h2>

        <div class="row g-4">
            {{-- Foto 1 --}}
            <div class="col-md-4">
                <div class="gallery-card shadow rounded-4 overflow-hidden">
                    <img src="{{ asset('assets/img/1.jpg') }}" 
                         class="img-fluid gallery-img" 
                         alt="Interior Resto" 
                         data-bs-toggle="modal" data-bs-target="#galleryModal1">
                </div>
            </div>

            {{-- Foto 2 --}}
            <div class="col-md-4">
                <div class="gallery-card shadow rounded-4 overflow-hidden">
                    <img src="{{ asset('assets/img/2.jpg') }}" 
                         class="img-fluid gallery-img" 
                         alt="Meja & Kursi" 
                         data-bs-toggle="modal" data-bs-target="#galleryModal2">
                </div>
            </div>

            {{-- Foto 3 --}}
            <div class="col-md-4">
                <div class="gallery-card shadow rounded-4 overflow-hidden">
                    <img src="{{ asset('assets/img/3.jpg') }}" 
                         class="img-fluid gallery-img" 
                         alt="Menu Favorit" 
                         data-bs-toggle="modal" data-bs-target="#galleryModal3">
                </div>
            </div>
            {{-- Foto 1 --}}
            <div class="col-md-4">
                <div class="gallery-card shadow rounded-4 overflow-hidden">
                    <img src="{{ asset('assets/img/4.jpg') }}" 
                         class="img-fluid gallery-img" 
                         alt="Interior Resto" 
                         data-bs-toggle="modal" data-bs-target="#galleryModal1">
                </div>
            </div>

            {{-- Foto 2 --}}
            <div class="col-md-4">
                <div class="gallery-card shadow rounded-4 overflow-hidden">
                    <img src="{{ asset('assets/img/5.jpg') }}" 
                         class="img-fluid gallery-img" 
                         alt="Meja & Kursi" 
                         data-bs-toggle="modal" data-bs-target="#galleryModal2">
                </div>
            </div>

            {{-- Foto 3 --}}
            <div class="col-md-4">
                <div class="gallery-card shadow rounded-4 overflow-hidden">
                    <img src="{{ asset('assets/img/6.jpg') }}" 
                         class="img-fluid gallery-img" 
                         alt="Menu Favorit" 
                         data-bs-toggle="modal" data-bs-target="#galleryModal3">
                </div>
            </div>
            {{-- Foto 1 --}}
            <div class="col-md-4">
                <div class="gallery-card shadow rounded-4 overflow-hidden">
                    <img src="{{ asset('assets/img/7.jpg') }}" 
                         class="img-fluid gallery-img" 
                         alt="Interior Resto" 
                         data-bs-toggle="modal" data-bs-target="#galleryModal1">
                </div>
            </div>

            {{-- Foto 2 --}}
            <div class="col-md-4">
                <div class="gallery-card shadow rounded-4 overflow-hidden">
                    <img src="{{ asset('assets/img/8.jpg') }}" 
                         class="img-fluid gallery-img" 
                         alt="Meja & Kursi" 
                         data-bs-toggle="modal" data-bs-target="#galleryModal2">
                </div>
            </div>

            {{-- Foto 3 --}}
            <div class="col-md-4">
                <div class="gallery-card shadow rounded-4 overflow-hidden">
                    <img src="{{ asset('assets/img/1.jpg') }}" 
                         class="img-fluid gallery-img" 
                         alt="Menu Favorit" 
                         data-bs-toggle="modal" data-bs-target="#galleryModal3">
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Color Tone */
.bg-cream { background: linear-gradient(
        0deg,
         rgba(0, 0, 0, 0.95),
          rgb(197, 168, 4),
         rgba(0, 0, 0, 0.95)) !important; }
.tone-brown { color: #efefef !important; }

/* Gallery Card */
.gallery-card {
    cursor: pointer;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.gallery-card:hover {
    transform: scale(1.05);
    box-shadow: 0 12px 30px rgba(99, 76, 76, 0.3) !important;
}
.gallery-img {
    height: 500px;
    width: 100%;
    object-fit: cover;
}
</style>
@endsection
