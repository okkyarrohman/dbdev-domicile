@extends('layouts.app')

@section('content')
{{-- Menu Section --}}
<section class="py-5 bg-cream" style="min-height: 100vh; display: flex; align-items: center;">
    <div class="container" style="margin-top: 80px" >
        <h2 class="text-center fw-bold mb-5" style="color: #efefef">Menu</h2>

        <div class="row g-4">
            {{-- Makanan Berat --}}
            <div class="col-md-4">
                <div class="menu-card shadow-lg rounded-4 p-3">
                    <img src="{{ asset('assets/img/nasi-gudeg.jpeg') }}" class="img-fluid rounded-3 mb-3" alt="Gudeg">
                    <h5 class="fw-bold">Gudeg Jogja 
                        <span class="badge best-seller">⭐ Best Seller</span>
                    </h5>
                    <p class="" style="color: #efefef">Nasi gudeg khas Jogja lengkap dengan krecek & telur.</p>
                    <p class="fw-bold">Rp 25.000</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="menu-card shadow-lg rounded-4 p-3">
                    <img src="{{ asset('assets/img/rawon.jpeg') }}" class="img-fluid rounded-3 mb-3" alt="Rawon">
                    <h5 class="fw-bold">Rawon Surabaya</h5>
                    <p class="" style="color: #efefef">Sup daging sapi khas Jawa Timur dengan kuah hitam.</p>
                    <p class="fw-bold">Rp 30.000</p>
                </div>
            </div>

            {{-- Minuman --}}
            <div class="col-md-4">
                <div class="menu-card shadow-lg rounded-4 p-3">
                    <img src="{{ asset('assets/img/es-teh.jpeg') }}" class="img-fluid rounded-3 mb-3" alt="Es Teh">
                    <h5 class="fw-bold">Es Teh Manis</h5>
                    <p class="" style="color: #efefef">Teh melati segar dengan gula alami.</p>
                    <p class="fw-bold">Rp 8.000</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="menu-card shadow-lg rounded-4 p-3">
                    <img src="{{ asset('assets/img/kopi-tubruk.jpeg') }}" class="img-fluid rounded-3 mb-3" alt="Kopi Tubruk">
                    <h5 class="fw-bold">Kopi Tubruk 
                        <span class="badge best-seller">⭐ Best Seller</span>
                    </h5>
                    <p class="" style="color: #efefef">Kopi hitam Nusantara yang diseduh klasik.</p>
                    <p class="fw-bold">Rp 12.000</p>
                </div>
            </div>

            {{-- Cemilan --}}
            <div class="col-md-4">
                <div class="menu-card shadow-lg rounded-4 p-3">
                    <img src="{{ asset('assets/img/tempe-mendoan.jpeg') }}" class="img-fluid rounded-3 mb-3" alt="Mendoan">
                    <h5 class="fw-bold">Tempe Mendoan</h5>
                    <p class="" style="color: #efefef">Tempe goreng tepung khas Banyumas, gurih & lembut.</p>
                    <p class="fw-bold">Rp 10.000</p>
                </div>
            </div>

            {{-- Dessert --}}
            <div class="col-md-4">
                <div class="menu-card shadow-lg rounded-4 p-3">
                    <img src="{{ asset('assets/img/es-dawet.jpeg') }}" class="img-fluid rounded-3 mb-3" alt="Es Dawet">
                    <h5 class="fw-bold">Es Dawet Ayu</h5>
                    <p class="" style="color: #efefef">Cendol manis dengan gula jawa dan santan segar.</p>
                    <p class="fw-bold">Rp 15.000</p>
                </div>
            </div>

            {{-- Lainnya --}}
            <div class="col-md-4">
                <div class="menu-card shadow-lg rounded-4 p-3">
                    <img src="{{ asset('assets/img/lontong-kupang.jpeg') }}" class="img-fluid rounded-3 mb-3" alt="Lontong Kupang">
                    <h5 class="fw-bold">Lontong Kupang</h5>
                    <p class="" style="color: #efefef">Makanan khas Sidoarjo dengan kupang laut & lontong.</p>
                    <p class="fw-bold">Rp 22.000</p>
                </div>
            </div>
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
