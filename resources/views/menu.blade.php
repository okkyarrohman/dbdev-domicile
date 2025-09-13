@extends('layouts.app')

@section('content')
{{-- Hero --}}
<section class="d-flex align-items-center text-white text-center position-relative"
    style="height:40vh;
        background: linear-gradient(135deg, #6B4226, #634c4c, #D2B48C);">
    <div class="container">
        <h1 class="display-4 fw-bold mb-3">Menu Restoran</h1>
        <p class="lead">Hidangan terbaik kami dengan cita rasa Nusantara dan sentuhan modern</p>
    </div>
</section>

{{-- Menu Section --}}
<section class="py-5 bg-cream">
    <div class="container">
        {{-- Tabs --}}
        <ul class="nav nav-pills justify-content-center mb-5" id="menuTabs" role="tablist">
            <li class="nav-item"><a class="nav-link active" data-bs-toggle="pill" href="#makanan">🍛 Makanan Berat</a></li>
            <li class="nav-item"><a class="nav-link" data-bs-toggle="pill" href="#minuman">🥤 Minuman</a></li>
            <li class="nav-item"><a class="nav-link" data-bs-toggle="pill" href="#cemilan">🍢 Cemilan</a></li>
            <li class="nav-item"><a class="nav-link" data-bs-toggle="pill" href="#dessert">🍰 Dessert</a></li>
            <li class="nav-item"><a class="nav-link" data-bs-toggle="pill" href="#lain">🍽️ Lainnya</a></li>
        </ul>

        <div class="tab-content">
            {{-- Makanan Berat --}}
            <div class="tab-pane fade show active" id="makanan">
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="menu-card shadow-lg rounded-4 p-3">
                            <img src="{{ asset('assets/img/nasi-gudeg.jpeg') }}" class="img-fluid rounded-3 mb-3" alt="Gudeg">
                            <h5 class="fw-bold">Gudeg Jogja 
                                <span class="badge best-seller">⭐ Best Seller</span>
                            </h5>
                            <p class="text-muted">Nasi gudeg khas Jogja lengkap dengan krecek & telur.</p>
                            <p class="fw-bold tone-brown">Rp 25.000</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="menu-card shadow-lg rounded-4 p-3">
                            <img src="{{ asset('assets/img/rawon.jpeg') }}" class="img-fluid rounded-3 mb-3" alt="Rawon">
                            <h5 class="fw-bold">Rawon Surabaya</h5>
                            <p class="text-muted">Sup daging sapi khas Jawa Timur dengan kuah hitam.</p>
                            <p class="fw-bold tone-brown">Rp 30.000</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Minuman --}}
            <div class="tab-pane fade" id="minuman">
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="menu-card shadow-lg rounded-4 p-3">
                            <img src="{{ asset('assets/img/es-teh.jpeg') }}" class="img-fluid rounded-3 mb-3" alt="Es Teh">
                            <h5 class="fw-bold">Es Teh Manis</h5>
                            <p class="text-muted">Teh melati segar dengan gula alami.</p>
                            <p class="fw-bold tone-brown">Rp 8.000</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="menu-card shadow-lg rounded-4 p-3">
                            <img src="{{ asset('assets/img/kopi-tubruk.jpeg') }}" class="img-fluid rounded-3 mb-3" alt="Kopi Tubruk">
                            <h5 class="fw-bold">Kopi Tubruk 
                                <span class="badge best-seller">⭐ Best Seller</span>
                            </h5>
                            <p class="text-muted">Kopi hitam Nusantara yang diseduh klasik.</p>
                            <p class="fw-bold tone-brown">Rp 12.000</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Cemilan --}}
            <div class="tab-pane fade" id="cemilan">
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="menu-card shadow-lg rounded-4 p-3">
                            <img src="{{ asset('assets/img/tempe-mendoan.jpeg') }}" class="img-fluid rounded-3 mb-3" alt="Mendoan">
                            <h5 class="fw-bold">Tempe Mendoan</h5>
                            <p class="text-muted">Tempe goreng tepung khas Banyumas, gurih & lembut.</p>
                            <p class="fw-bold tone-brown">Rp 10.000</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Dessert --}}
            <div class="tab-pane fade" id="dessert">
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="menu-card shadow-lg rounded-4 p-3">
                            <img src="{{ asset('assets/img/es-dawet.jpeg') }}" class="img-fluid rounded-3 mb-3" alt="Es Dawet">
                            <h5 class="fw-bold">Es Dawet Ayu</h5>
                            <p class="text-muted">Cendol manis dengan gula jawa dan santan segar.</p>
                            <p class="fw-bold tone-brown">Rp 15.000</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Lainnya --}}
            <div class="tab-pane fade" id="lain">
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="menu-card shadow-lg rounded-4 p-3">
                            <img src="{{ asset('assets/img/lontong-kupang.jpeg') }}" class="img-fluid rounded-3 mb-3" alt="Lontong Kupang">
                            <h5 class="fw-bold">Lontong Kupang</h5>
                            <p class="text-muted">Makanan khas Sidoarjo dengan kupang laut & lontong.</p>
                            <p class="fw-bold tone-brown">Rp 22.000</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Color Tone */
.bg-cream { background: #fdf6ec !important; }
.tone-brown { color: #6B4226 !important; }
.tone-maroon { color: #634c4c !important; }

/* Menu Card */
.menu-card {
    background: #fff;
    border: 1px solid #f0e6d2;
    transition: all 0.3s ease;
}
.menu-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 30px rgba(99, 76, 76, 0.25) !important;
}

/* Best Seller Badge */
.best-seller {
    background: linear-gradient(45deg, #634c4c, #D2B48C);
    color: #fff;
    font-size: 0.75rem;
    margin-left: 5px;
    border-radius: 6px;
}
.nav-pills .nav-link {
    background: #eee;
    margin: 0 5px;
    border-radius: 30px;
    color: #634c4c;
    font-weight: 600;
}
.nav-pills .nav-link.active {
    background: linear-gradient(45deg, #6B4226, #634c4c, #D2B48C);
    color: #fff !important;
}
</style>
@endsection
