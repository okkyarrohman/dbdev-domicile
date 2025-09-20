@extends('layouts.app')

@section('content')
{{-- Hero Section --}}
<section class="d-flex align-items-center text-white text-center position-relative"
    style="height:75vh;
        background: linear-gradient(180deg, rgba(7, 7, 7, 0.85), rgba(255, 227, 65, 0.445) ),
        url('{{ asset('assets/img/3.jpg') }}') center/cover no-repeat;">
    <div class="container">
        <h1 class="display-3 fw-bold mb-3 animate__animated animate__fadeInDown">About Us</h1>
        <p class="lead animate__animated animate__fadeInUp" style="max-width: 700px; margin:0 auto;">
            Delivering the finest dining experience with a perfect blend of traditional and modern flavors.
        </p>
    </div>
</section>

{{-- About Content --}}
<section class="py-5" style="background: linear-gradient(
        0deg,
         rgba(0, 0, 0, 0.95),
          rgb(124, 106, 1),
         rgba(0, 0, 0, 0.95));">
    <div class="container">
        <div class="row align-items-center g-5">
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
        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="fade-left">
            <div class="p-4 rounded-4 shadow-lg h-100 text-center" style="background:rgba(255,255,255,0.1); color:#efefef">
                <h2 class="fw-bold mb-3" style="color:#efefef;">Our Signature Dishes</h2>
                <p class="" style="color: #efefef">
                    We take pride in offering a variety of dishes that have become customer favorites.
                    Every dish is prepared with fresh, high-quality ingredients using authentic Indonesian recipes
                    and our own unique modern touch.
                </p>
            </div>
            </div>
            <div class="col-lg-6" data-aos="fade-right">
                <img src="{{ asset('assets/img/8.jpg') }}" alt="Signature Menu" class="img-fluid m-auto rounded-4 shadow-lg" style="height:750px;">
            </div>
        </div>

    </div>
</section>
<section class="py-5" style="background: linear-gradient(
        0deg,
         rgba(0, 0, 0, 0.95),
          rgb(124, 106, 1),
         rgba(0, 0, 0, 0.95));">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 " data-aos="fade-right">
                <img src="{{ asset('assets/img/2.jpg') }}" alt="Restaurant Interior" class="img-fluid m-auto rounded-4 shadow-lg" style="height:750px;">
            </div>
              <div class="col-md-6" data-aos="zoom-in">
                <div class="p-4 rounded-4 shadow-lg h-100 text-center" style="background:rgba(255,255,255,0.1); color:#efefef">
                    <p class="fs-5">To become the top dining destination, serving the authentic taste of Indonesia in a modern & elegant setting.</p>
                </div>
            </div>
        </div>
        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="fade-left">
                <div class="p-4 rounded-4 shadow-lg h-100 text-center" style="background:rgba(255,255,255,0.1); color:#efefef">
                    <ul class="list-unstyled fs-5 text-center">
                        <li>Serving high-quality food made from fresh ingredients.</li>
                        <li>Providing friendly & professional service.</li>
                        <li>Creating a warm and welcoming atmosphere for every guest.</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-right">
                <img src="{{ asset('assets/img/8.jpg') }}" alt="Signature Menu" class="img-fluid m-auto rounded-4 shadow-lg" style="height:750px;">
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
</style>
@endpush
