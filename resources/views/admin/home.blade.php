@extends('layouts.admin')

@section('content')
<div class="container-fluid py-5" style="background:#f9f5f1; min-height:100vh;">
    <div class="row mb-4">
        <div class="col text-center">
            <h1 class="fw-bold" style="color:#6B4226;">Admin Dashboard</h1>
            <p class="text-muted">Kelola restoran Anda dengan mudah</p>
        </div>
    </div>

    <div class="row g-4">
        {{-- Statistik --}}
        <div class="col-md-3">
            <div class="card shadow border-0 rounded-4 h-100" style="background:#634c4c; color:#fff;">
                <div class="card-body text-center">
                    <h5 class="fw-bold">Pesanan Hari Ini</h5>
                    <h2>{{ $stats['orders_today'] }}</h2>
                </div>
            </div>
        </div>
        
        <div class="col-md-3">
            <div class="card shadow border-0 rounded-4 h-100" style="background:#d9c6b0; color:#2a2a2a;">
                <div class="card-body text-center">
                    <h5 class="fw-bold">Total Menu</h5>
                    <h2>{{ $stats['total_menu'] }}</h2>
                </div>
            </div>
        </div>
        
        <div class="col-md-3">
            <div class="card shadow border-0 rounded-4 h-100" style="background:#6B4226; color:#fff;">
                <div class="card-body text-center">
                    <h5 class="fw-bold">Best Seller</h5>
                    <h2 class="fs-5">{{ $stats['best_seller'] }}</h2>
                </div>
            </div>
        </div>
        
        <div class="col-md-3">
            <div class="card shadow border-0 rounded-4 h-100" style="background:#f0e4d7; color:#2a2a2a;">
                <div class="card-body text-center">
                    <h5 class="fw-bold">Total Users</h5>
                    <h2>{{ $stats['users'] }}</h2>
                </div>
            </div>
        </div>
    </div>

    {{-- Menu Kelola --}}
    <div class="row mt-5">
        <div class="col-12">
            <h3 class="fw-bold mb-3" style="color:#6B4226;">Manajemen</h3>
        </div>

        <div class="col-md-4">
            <a href="#" class="text-decoration-none">
                <div class="card shadow border-0 rounded-4 h-100 hover-shadow">
                    <div class="card-body text-center py-5">
                        <h5 class="fw-bold">Kelola Menu</h5>
                        <p class="text-muted">Tambah, edit, dan hapus menu restoran</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-4">
            <a href="#" class="text-decoration-none">
                <div class="card shadow border-0 rounded-4 h-100 hover-shadow">
                    <div class="card-body text-center py-5">
                        <h5 class="fw-bold">Kelola Pesanan</h5>
                        <p class="text-muted">Pantau pesanan pelanggan secara real-time</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-4">
            <a href="#" class="text-decoration-none">
                <div class="card shadow border-0 rounded-4 h-100 hover-shadow">
                    <div class="card-body text-center py-5">
                        <h5 class="fw-bold">Kelola User</h5>
                        <p class="text-muted">Atur admin & staff yang memiliki akses</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection
