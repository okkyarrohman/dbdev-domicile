@extends('layouts.admin')

@section('content')
<div class="container-fluid py-4">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-dark">🍽️ Manajemen Menu</h2>
        <a href="#" class="btn btn-primary shadow-sm">
            <i class="bi bi-plus-circle me-2"></i> Tambah Menu
        </a>
    </div>

    <!-- Tabs -->
    <ul class="nav nav-tabs mb-4" id="menuTabs" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="makanan-tab" data-bs-toggle="tab" data-bs-target="#makanan" type="button" role="tab">
                🍛 Makanan
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="minuman-tab" data-bs-toggle="tab" data-bs-target="#minuman" type="button" role="tab">
                🥤 Minuman
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="cemilan-tab" data-bs-toggle="tab" data-bs-target="#cemilan" type="button" role="tab">
                🍩 Cemilan
            </button>
        </li>
    </ul>

    <!-- Tab Content -->
    <div class="tab-content" id="menuTabsContent">

        <!-- Tab Makanan -->
        <div class="tab-pane fade show active" id="makanan" role="tabpanel">
            <div class="row g-4">
                @for ($i = 1; $i <= 4; $i++)
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
                        <div class="position-relative">
                            <img src="{{ asset('assets/img/lontong-kupang.jpeg') }}" 
                                 alt="Makanan {{ $i }}" 
                                 class="card-img-top" 
                                 style="height:200px; object-fit:cover;">
                            <span class="badge bg-primary position-absolute top-0 start-0 m-3 rounded-pill px-3 py-2">
                                Makanan
                            </span>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h5 class="fw-bold text-dark">Makanan {{ $i }}</h5>
                            <p class="text-muted small flex-grow-1">Deskripsi singkat makanan {{ $i }}.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-primary fs-5">Rp {{ number_format(20000 * $i, 0, ',', '.') }}</span>
                                <div>
                                    <a href="#" class="btn btn-sm btn-warning me-1"><i class="bi bi-pencil-square"></i></a>
                                    <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
        </div>

        <!-- Tab Minuman -->
        <div class="tab-pane fade" id="minuman" role="tabpanel">
            <div class="row g-4">
                @for ($i = 1; $i <= 4; $i++)
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
                        <div class="position-relative">
                            <img src="{{ asset('assets/img/nasgor.jpeg') }}" 
                                 alt="Minuman {{ $i }}" 
                                 class="card-img-top" 
                                 style="height:200px; object-fit:cover;">
                            <span class="badge bg-success position-absolute top-0 start-0 m-3 rounded-pill px-3 py-2">
                                Minuman
                            </span>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h5 class="fw-bold text-dark">Minuman {{ $i }}</h5>
                            <p class="text-muted small flex-grow-1">Deskripsi singkat minuman {{ $i }}.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-primary fs-5">Rp {{ number_format(10000 * $i, 0, ',', '.') }}</span>
                                <div>
                                    <a href="#" class="btn btn-sm btn-warning me-1"><i class="bi bi-pencil-square"></i></a>
                                    <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
        </div>

        <!-- Tab Cemilan -->
        <div class="tab-pane fade" id="cemilan" role="tabpanel">
            <div class="row g-4">
                @for ($i = 1; $i <= 4; $i++)
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
                        <div class="position-relative">
                            <img src="{{ asset('assets/img/onde.jpeg') }}" 
                                 alt="Cemilan {{ $i }}" 
                                 class="card-img-top" 
                                 style="height:200px; object-fit:cover;">
                            <span class="badge bg-warning text-dark position-absolute top-0 start-0 m-3 rounded-pill px-3 py-2">
                                Cemilan
                            </span>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h5 class="fw-bold text-dark">Cemilan {{ $i }}</h5>
                            <p class="text-muted small flex-grow-1">Deskripsi singkat cemilan {{ $i }}.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-primary fs-5">Rp {{ number_format(8000 * $i, 0, ',', '.') }}</span>
                                <div>
                                    <a href="#" class="btn btn-sm btn-warning me-1"><i class="bi bi-pencil-square"></i></a>
                                    <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
        </div>

    </div>
</div>
@endsection
