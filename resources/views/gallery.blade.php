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
                                <img src="{{ asset('storage/' . $gallery->image) }}" 
                                    class="img-fluid gallery-img" 
                                    alt="{{ $gallery->description }}">
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
    height: 300px; /* Set a fixed height for all cards for consistency */
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

/* The front and back of the card */
.front, .back {
    position: absolute;
    width: 100%;
    height: 100%;
    backface-visibility: hidden; /* This hides the back side of the card */
    display: flex; /* Ensure the content is centered */
    align-items: center;
    justify-content: center;
}

/* The front of the card (image) */
.front img {
    width: 100%;
    height: 100%;
    object-fit: cover; /* Ensures the image fills the space without distortion */
}

/* The back of the card (caption) */
.back {
    background-color: rgba(0, 0, 0, 0.212); /* Dark, semi-transparent background */
    transform: rotateY(180deg); /* The back is initially rotated 180 degrees */
    padding: 1rem;
}

/* The flip effect on hover */
.gallery-card:hover .flipper {
    transform: rotateY(180deg);
}
</style>
@endsection
