@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between mt-5">
        <h2 class="mb-4">Manajemen Promo</h2>
        <div class="d-flex gap-3">
            <button type="button" class="btn btn-primary shadow-sm mb-3" data-bs-toggle="modal" data-bs-target="#createModal">
                <i class="bi bi-plus-circle me-2"></i> Tambah Promotion
            </button>
                    <!-- Tombol Trigger Modal -->
            <button type="button" class="btn btn-primary shadow-sm mb-3" data-bs-toggle="modal" data-bs-target="#addBennerModal">
                <i class="bi bi-plus-circle me-2"></i> Tambah Benner
            </button>
        </div>

        <!-- Modal Create Promotion -->
        <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="createModalLabel">Tambah Promotion</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <form action="{{ route('admin.promo.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <!-- Input Gambar -->
                            <div class="mb-3">
                                <label for="img" class="form-label">Gambar</label>
                                <input type="file" name="img" id="img" class="form-control" required>
                            </div>

                            <!-- Input Keterangan -->
                            <div class="mb-3">
                                <label for="keterangan" class="form-label">Keterangan</label>
                                <textarea name="keterangan" id="keterangan" class="form-control" rows="3" required>{{ old('keterangan') }}</textarea>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal Create Promotion -->
        <div class="modal fade" id="addBennerModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="createModalLabel">Tambah Benner</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <form action="{{ route('admin.banner.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <!-- Input Gambar -->
                            <div class="mb-3">
                                <label for="img" class="form-label">Gambar</label>
                                <input type="file" name="img" id="img" class="form-control" required>
                            </div>

                            <!-- Input Keterangan -->
                            <div class="mb-3">
                                <label for="keterangan" class="form-label">Keterangan</label>
                                <textarea name="keterangan" id="keterangan" class="form-control" rows="3" required>{{ old('keterangan') }}</textarea>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Tabs -->
    <ul class="nav nav-tabs" id="promoTabs" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="promotion-tab" data-bs-toggle="tab" data-bs-target="#promotion" type="button" role="tab">
                Promotion
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="banner-tab" data-bs-toggle="tab" data-bs-target="#banner" type="button" role="tab">
                Banner Promo
            </button>
        </li>
    </ul>

    <div class="tab-content mt-3" id="promoTabsContent">

        <!-- Tab Promotion -->
        <div class="tab-pane fade show active" id="promotion" role="tabpanel" aria-labelledby="promotion-tab">
            <div class="row">
                @foreach ($promotions as $promotion)
                    <div class="col-md-4 mb-3">
                        <div class="card shadow-sm">
                            <img src="{{ asset('storage/'.$promotion->img) }}" 
                                class="card-img-top img-square" 
                                alt="Promotion">
                            <div class="card-body">
                                <p class="card-text">{{ $promotion->keterangan }}</p>
                                <div class="d-flex justify-content-between">
                                    <!-- Tombol Edit -->
                                    <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal{{ $promotion->id }}">
                                        Edit
                                    </button>
                                    <!-- Modal Edit -->
                                    <div class="modal fade" id="editModal{{ $promotion->id }}" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog modal-lg modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit Promotion</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>
                                                <form action="{{ route('admin.promo.update', $promotion->id) }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal-body">
                                                        <div class="mb-3">
                                                            <label for="img" class="form-label">Gambar (kosongkan jika tidak diganti)</label>
                                                            <input type="file" name="img" class="form-control">
                                                            @if($promotion->img)
                                                                <small class="text-muted">Gambar sekarang: <img src="{{ asset('storage/'.$promotion->img) }}" width="100"></small>
                                                            @endif
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="keterangan" class="form-label">Keterangan</label>
                                                            <textarea name="keterangan" class="form-control" rows="3" required>{{ $promotion->keterangan }}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                        <button type="submit" class="btn btn-primary">Update</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                     <!-- Tombol Hapus -->
                                    <form id="delete-form-{{ $promotion->id }}" 
                                        action="{{ route('admin.promo.destroy', $promotion->id) }}" 
                                        method="POST" 
                                        style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete({{ $promotion->id }})">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="d-flex justify-content-center">
                {{ $promotions->links() }}
            </div>
        </div>

        <!-- Tab Banner Promo -->
        <div class="tab-pane fade" id="banner" role="tabpanel" aria-labelledby="banner-tab">
            <div class="row">
                @foreach ($bannerPromos as $banner)
                    <div class="col-md-4 mb-3">
                        <div class="card shadow-sm">
                            <img src="{{ asset('storage/'.$banner->img) }}" class="card-img-top img-square" alt="Banner Promo">
                            <div class="card-body">
                                <p class="card-text">{{ $banner->keterangan }}</p>
                                <div class="d-flex justify-content-between">
                                    <!-- Tombol Edit -->
                                    <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editBannerModal{{ $banner->id }}">
                                        Edit
                                    </button>
                                    <!-- Modal Edit -->
                                    <div class="modal fade" id="editBannerModal{{ $banner->id }}" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog modal-lg modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit Banner Promo</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>
                                                <form action="{{ route('admin.banner.update', $banner->id) }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal-body">
                                                        <div class="mb-3">
                                                            <label for="img" class="form-label">Gambar (kosongkan jika tidak diganti)</label>
                                                            <input type="file" name="img" class="form-control">
                                                            @if($banner->img)
                                                                <small class="text-muted">Gambar sekarang: <img src="{{ asset('storage/'.$banner->img) }}" width="100"></small>
                                                            @endif
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="keterangan" class="form-label">Keterangan</label>
                                                            <textarea name="keterangan" class="form-control" rows="3" required>{{ $banner->keterangan }}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                        <button type="submit" class="btn btn-primary">Update</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Tombol Hapus -->
                                    <form id="delete-form-{{ $banner->id }}" 
                                        action="{{ route('admin.banner.destroy', $banner->id) }}" 
                                        method="POST" 
                                        style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete({{ $banner->id }})">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="d-flex justify-content-center">
                {{ $bannerPromos->links() }}
            </div>
        </div>

    </div>
</div>
<style>
    .img-square {
        width: 100%;
        height: 200px;      /* tinggi tetap */
        object-fit: cover;  /* biar isi gambarnya ngepas tanpa ketarik */
        border-radius: 8px; /* opsional, buat sudut melengkung */
    }
</style>
<script>
    function confirmDelete(id) {
    Swal.fire({
        title: 'Yakin hapus menu ini?',
        text: "Data yang dihapus tidak bisa dikembalikan!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#6c757d',
        confirmButtonText: 'Ya, hapus!',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('delete-form-' + id).submit();
        }
    })
}
</script>
@endsection
