@extends('layouts.app')

@section('content')
{{-- Gallery Section --}}
<section class="py-5 bg-cream" style="min-height: 100vh; display: flex; align-items: center;">
    <div class="container" style="margin-top: 80px">
        <h2 class="text-center fw-bold mb-5 tone-brown">Gallery</h2>

        <div class="row g-4">
            @foreach ($galleries as $gallery)
                <div class="col-md-4">
                    <div class="gallery-card shadow rounded-4 overflow-hidden">
                        <div class="flipper">
                            {{-- Front of the Card (Image) --}}
                            <div class="front">
                                {{-- Skeleton wrapper --}}
                                <div class="skeleton-wrapper">
                                    <img data-src="{{ asset('storage/' . $gallery->image) }}" 
                                        class="img-fluid gallery-img lazy-image" 
                                        alt="{{ $gallery->description }}">
                                </div>
                            </div>
                            {{-- Back of the Card (Caption) --}}
                            <div class="back p-4 d-flex align-items-center justify-content-center text-center">
                                <h5 class="text-white fw-bold mb-0">{{ $gallery->description }}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Pagination --}}
        <div class="d-flex justify-content-center mt-5">
            {{ $galleries->links() }}
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

/* Flip effect */
.gallery-card:hover .flipper {
    transform: rotateY(180deg);
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
