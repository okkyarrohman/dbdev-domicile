@extends('layouts.app')

@section('content')
{{-- Menu Section --}}
<section class="d-flex align-items-center text-white text-center position-relative"
    style="height:75vh;
        background: linear-gradient(180deg, rgba(7, 7, 7, 0.85), rgba(255, 255, 255, 0.171) ),
        url('{{ asset('assets/img/3.jpg') }}') center/cover no-repeat;">
    <div class="container">
        <h1 class="display-3 fw-bold mb-3 animate__animated animate__fadeInDown" style="color: #faedd4">Menu</h1>
    </div>
</section>
<section class="py-5 bg-cream" style="min-height: 100vh; display: flex; align-items: center;">
    <div class="container" style="margin-top: 80px" >
        <img src="{{ asset('assets/img/menu1.jpg') }}" alt="">
        <img src="{{ asset('assets/img/menu2.jpg') }}" class="mt-5" alt="">
        </div>
    </div>
</section>

<style>
/* Color Tone */
.bg-cream { background: linear-gradient(
        0deg,
        rgba(110, 86, 34, 0.55),
         rgba(250, 237, 212, 0.87))!important; }
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
