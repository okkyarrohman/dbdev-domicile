@extends('layouts.admin')

@section('content')
<div class="container-fluid p-5" style="background:#f9f5f1; min-height:100vh;">
    <div class="row mb-4 px-4">
        <div class="col text-center">
            <h1 class="fw-bold" style="color:#6B4226;">Admin Crab & Co.</h1>
            <p class="text-muted" >Kelola restoran Anda dengan mudah</p>
        </div>
    </div>

{{-- Menu Kelola --}}
<div class="row mt-5 px-4">
    <div class="col-12 text-center mb-5">
        <h3 class="fw-bold" style="color:#6B4226;">Manajemen</h3>
    </div>

    @php
        $menus = [
            ['title' => 'Kelola Menu', 'route' => route('admin.menu'), 'icon' => 'bi-journal-text'],
            ['title' => 'Kelola Promotion', 'route' => route('admin.promo'), 'icon' => 'bi-megaphone-fill'],
            ['title' => 'Kelola Galeri', 'route' => route('admin.galleries.index'), 'icon' => 'bi-images'],
            ['title' => 'Kelola Laporan', 'route' => route('admin.report'), 'icon' => 'bi-bar-chart-fill'],
        ];
    @endphp

    @foreach($menus as $item)
        <div class="col-md-3 col-sm-6 mb-4">
            <a href="{{ $item['route'] }}" class="text-decoration-none">
                <div class="card border-0 shadow-sm rounded-4 h-100 hover-shadow text-center p-4 transition-all"
                     style="background:#fff; transition:all 0.3s ease;">
                    <div class="mb-3">
                        <i class="bi {{ $item['icon'] }} fs-1 text-custom"></i>
                    </div>
                    <h5 class="fw-bold" style="color:#6B4226;">{{ $item['title'] }}</h5>
                </div>
            </a>
        </div>
    @endforeach
</div>

{{-- CSS tambahan --}}
<style>
    .hover-shadow:hover {
        transform: translateY(-6px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.1

</div>
@endsection
