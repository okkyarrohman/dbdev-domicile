@extends('layouts.app')

@section('content')
{{-- Menu Section --}}
<section class="py-5 bg-cream" style="min-height: 100vh; display: flex; align-items: center;">
    <div class="container" style="margin-top: 80px" >
        <h2 class="text-center fw-bold mb-5" style="color: #efefef">Menu</h2>

        <div class="row g-4 justify-content-center">
            
            {{-- Loop through the menus --}}
            @foreach ($menus as $menu)
            <div class="col-md-4 col-sm-6">
                <div class="card h-100 shadow-lg border-0 rounded-4 overflow-hidden" style="background:rgba(255,255,255,0.1); color:#efefef;">
                    <img src="{{ asset('storage/'.$menu->gambar) }}" class="card-img-top" alt="{{ $menu->name }}" 
                         style="object-fit: cover; height: 250px;">
                    <div class="card-body p-4 text-center">
                        <h5 class="fw-bold mb-2">{{ $menu->nama }}
                            {{-- Optional: Display a "Best Seller" badge --}}
                            @if ($menu->favorite) 
                                <span class="badge text-dark ms-2">⭐</span>
                            @endif
                        </h5>
                        <p class="card-text mb-3">{{ $menu->deskripsi }}</p>
                        <p class="fw-bold fs-5 mb-0">Rp {{ number_format($menu->harga, 0, ',', '.') }}</p>
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
        #121212,
          rgb(124, 106, 1)) !important; }
.tone-brown { color: #6B4226 !important; }
.tone-maroon { color: #634c4c !important; }

/* Menu Card */
.menu-card {
    background:rgba(255,255,255,0.1);
    transition: all 0.3s ease;
    color: #efefef; 
}
.menu-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 30px rgba(99, 76, 76, 0.25) !important;
}

/* Best Seller Badge */
.best-seller {
    background: linear-gradient(45deg, #634c4c00, #d2b48c00);
    color: #fff;
    font-size: 0.75rem;
    margin-left: 5px;
    border-radius: 6px;
}
</style>
@endsection
