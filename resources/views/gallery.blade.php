@extends('layouts.app')

@section('content')
<section class="d-flex align-items-center text-white text-center position-relative"
    style="height:75vh;
        background: linear-gradient(180deg, rgba(7, 7, 7, 0.85), rgba(255, 255, 255, 0.171) ),
        url('{{ asset('assets/img/1.jpg') }}') center/cover no-repeat;">
    <div class="container">
        <h1 class="display-3 fw-bold mb-3 animate__animated animate__fadeInDown" style="color: #faedd4">Gallery</h1>
    </div>
</section>
{{-- Gallery Section --}}
<section class="py-5 bg-cream" style="min-height: 100vh; display: flex; align-items: center;">
    <div class="container" style="margin-top: 80px">
        <h2 class="text-center fw-bold mb-5 tone-brown">GALLERIES OF AMBIENCE</h2>

        <div id="galleryCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($galleries->chunk(3) as $chunkIndex => $chunk)
                    <div class="carousel-item {{ $chunkIndex == 0 ? 'active' : '' }}">
                        <div class="row g-4 justify-content-center">
                            @foreach ($chunk as $gallery)
                                <div class="col-md-4">
                                    <div class="card shadow rounded-4 overflow-hidden h-100 border-0">
                                        <div class="card-img-top d-flex align-items-end p-3"
                                            style="height: 500px; 
                                                background: url('{{ asset('storage/' . $gallery->image) }}') center center / cover no-repeat;
                                                position: relative;">

                                            <!-- Overlay gelap agar teks lebih jelas -->
                                            <div class="w-100 text-center fw-bold text-white py-2"
                                                style="background: rgba(0,0,0,0.5); border-radius: 0 0 12px 12px;">
                                                {{ $gallery->description }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Controls -->
<button class="carousel-control-prev" type="button" data-bs-target="#galleryCarousel" data-bs-slide="prev"
        style="left: -60px; width: auto;">
    <span class="carousel-control-prev-icon"></span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#galleryCarousel" data-bs-slide="next"
        style="right: -60px; width: auto;">
    <span class="carousel-control-next-icon" style="color: #8e3c20"></span>
</button>
        </div>
    </div>

</section>
<section class="py-5 bg-cream" style="min-height: 100vh; display: flex; align-items: center;">
    <div class="container" style="margin-top: 80px">
        <h2 class="text-center fw-bold mb-5 tone-brown">GALLERIES OF MENU</h2>

        <div id="galleryCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($galleries->chunk(3) as $chunkIndex => $chunk)
                    <div class="carousel-item {{ $chunkIndex == 0 ? 'active' : '' }}">
                        <div class="row g-4 justify-content-center">
                            @foreach ($chunk as $gallery)
                                <div class="col-md-4">
                                    <div class="card shadow rounded-4 overflow-hidden h-100 border-0">
                                        <div class="card-img-top d-flex align-items-end p-3"
                                            style="height: 500px; 
                                                background: url('{{ asset('storage/' . $gallery->image) }}') center center / cover no-repeat;
                                                position: relative;">

                                            <!-- Overlay gelap agar teks lebih jelas -->
                                            <div class="w-100 text-center fw-bold text-white py-2"
                                                style="background: rgba(0,0,0,0.5); border-radius: 0 0 12px 12px;">
                                                {{ $gallery->description }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#galleryCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#galleryCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>

</section>

<style>
/* Color Tone */
.bg-cream { background:linear-gradient(
        0deg,
        rgba(85, 67, 29, 0.815),
        rgba(250, 237, 212, 0.87),
        rgba(85, 67, 29, 0.815)) !important; }
.tone-brown { color: #8e3c20 !important; }

/* Container for the flip card */
.gallery-card {
    height: 300px; 
    position: relative;
    cursor: pointer;
}

/* The flipper container that holds the front and back */
.flipper {
    position: relative;
    width: 100%;
    height: 100%;
    transform-style: preserve-3d;
    transition: transform 0.6s;
}

.front, .back {
    position: absolute;
    width: 100%;
    height: 100%;
    backface-visibility: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
}

/* Image */
.front img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}

/* Skeleton loader */
.skeleton-wrapper {
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, #e0e0e0 25%, #f4f4f4 50%, #e0e0e0 75%);
    background-size: 200% 100%;
    animation: skeleton-loading 1.5s infinite;
    position: relative;
}

@keyframes skeleton-loading {
    from { background-position: 200% 0; }
    to { background-position: -200% 0; }
}

.lazy-image {
    opacity: 0;
    transition: opacity 0.4s ease-in-out;
}

.lazy-image.loaded {
    opacity: 1;
}

/* Back caption */
.back {
    background-color: rgba(0, 0, 0, 0.5);
    transform: rotateY(180deg);
    padding: 1rem;
}
.carousel-control-prev-icon,
.carousel-control-next-icon {
    filter: invert(33%) sepia(30%) saturate(500%) hue-rotate(350deg) brightness(90%) contrast(90%);
}
/* Flip effect */
.gallery-card:hover .flipper {
    transform: rotateY(180deg);
}
.carousel-control-prev,
.carousel-control-next {
    width: auto;
}

.carousel-control-prev {
    left: -60px;
}

.carousel-control-next {
    right: -60px;
}

</style>

{{-- Lazy Load Script --}}
<script>
document.addEventListener("DOMContentLoaded", function () {
    const lazyImages = document.querySelectorAll(".lazy-image");

    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src; 
                img.onload = () => {
                    img.classList.add("loaded");
                    img.parentElement.classList.remove("skeleton-wrapper"); // remove skeleton bg
                };
                observer.unobserve(img);
            }
        });
    });

    lazyImages.forEach(img => imageObserver.observe(img));
});
</script>
@endsection
