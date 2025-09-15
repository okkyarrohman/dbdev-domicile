@extends('layouts.admin')

@section('content')
<div class="container-fluid py-4">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-dark">🍽️ Manajemen Menu</h2>
        <a href="#" class="btn btn-primary shadow-sm" data-bs-toggle="modal" data-bs-target="#menuModal">
            <i class="bi bi-plus-circle me-2"></i> Tambah Menu
        </a>
    </div>
    <div class="modal fade" id="menuModal" tabindex="-1" aria-labelledby="menuModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-4 shadow">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold" id="menuModalLabel">Tambah Menu Baru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <form action="{{ route('menu.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        {{-- Nama --}}
                        <div class="mb-3">
                            <label class="form-label">Nama Menu</label>
                            <input type="text" name="nama" class="form-control" placeholder="Contoh: Gudeg Jogja" required>
                        </div>

                        {{-- Deskripsi --}}
                        <div class="mb-3">
                            <label class="form-label">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control" rows="3" placeholder="Deskripsi singkat menu..."></textarea>
                        </div>

                        {{-- Harga --}}
                        <div class="mb-3">
                            <label class="form-label">Harga</label>
                            <input type="number" name="harga" class="form-control" placeholder="25000" required>
                        </div>

                        {{-- Favorite --}}
                        <div class="mb-3 form-check">
                            <input type="checkbox" name="favorite" class="form-check-input" id="favoriteCheck">
                            <label class="form-check-label" for="favoriteCheck">Tandai sebagai Favorite</label>
                        </div>

                        {{-- Gambar --}}
                        <div class="mb-3">
                            <label class="form-label">Gambar</label>
                            <input type="file" name="gambar" id="gambarInput" class="form-control" accept="image/*" onchange="previewImage(event)">
                            
                            {{-- Preview --}}
                            <div id="previewWrapper" class="position-relative mt-3 d-none" style="max-width: 200px;">
                                <img id="gambarPreview" class="img-fluid rounded shadow-sm" alt="Preview">
                                <button type="button" id="removeImage" class="btn btn-sm btn-danger position-absolute top-0 end-0 m-1">&times;</button>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan Menu</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Search -->
    <form method="GET" action="{{ route('admin.menu') }}" class="mb-4">
        <div class="input-group">
            <input type="text" name="search" value="{{ $search }}" class="form-control"
                   placeholder="Cari menu...">
            <button class="btn btn-outline-secondary" type="submit">
                <i class="bi bi-search"></i>
            </button>
        </div>
    </form>

<!-- Menu List -->
<div class="row g-4">
    @forelse($menus as $menu)
        <div class="col-md-6 col-lg-4">
            <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
                <div class="position-relative">
                    <img src="{{ $menu->gambar ? asset('storage/'.$menu->gambar) : asset('assets/img/no-image.png') }}" 
                         alt="{{ $menu->nama }}" 
                         class="card-img-top"
                         style="height:200px; object-fit:cover;">
                    @if($menu->favorite)
                        <span class="badge bg-danger position-absolute top-0 start-0 m-3 rounded-pill px-3 py-2">
                            Favorite
                        </span>
                    @endif
                </div>
                <div class="card-body d-flex flex-column">
                    <h5 class="fw-bold text-dark">{{ $menu->nama }}</h5>
                    <p class="text-muted small flex-grow-1">{{ $menu->deskripsi }}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="fw-bold text-primary fs-5">
                            Rp {{ number_format($menu->harga, 0, ',', '.') }}
                        </span>
                        <div>
                            <!-- Tombol Edit -->
                            <button class="btn btn-sm btn-warning me-1" data-bs-toggle="modal" data-bs-target="#editMenuModal{{ $menu->id }}">
                                <i class="bi bi-pencil-square"></i>
                            </button>

                            <!-- Tombol Hapus -->
                            <form id="delete-form-{{ $menu->id }}" 
                                action="{{ route('menu.destroy', $menu->id) }}" 
                                method="POST" 
                                style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete({{ $menu->id }})">
                                    Hapus
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Edit -->
        <div class="modal fade" id="editMenuModal{{ $menu->id }}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content rounded-4 shadow">
                    <div class="modal-header">
                        <h5 class="modal-title fw-bold">Edit Menu - {{ $menu->nama }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <form action="{{ route('menu.update', $menu->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            {{-- Upload Gambar --}}
                            <div class="mb-3">
                                <label class="form-label">Gambar Menu</label>
                                <input type="file" name="gambar" class="form-control">
                                @if($menu->gambar)
                                    <img src="{{ asset('storage/'.$menu->gambar) }}" class="mt-2 rounded" width="120">
                                @endif
                            </div>

                            {{-- Nama --}}
                            <div class="mb-3">
                                <label class="form-label">Nama Menu</label>
                                <input type="text" name="nama" class="form-control" value="{{ $menu->nama }}" required>
                            </div>

                            {{-- Deskripsi --}}
                            <div class="mb-3">
                                <label class="form-label">Deskripsi</label>
                                <textarea name="deskripsi" class="form-control" rows="3">{{ $menu->deskripsi }}</textarea>
                            </div>

                            {{-- Harga --}}
                            <div class="mb-3">
                                <label class="form-label">Harga</label>
                                <input type="number" name="harga" class="form-control" value="{{ $menu->harga }}" required>
                            </div>

                            {{-- Favorite --}}
                            <div class="mb-3 form-check">
                                <input type="checkbox" name="favorite" class="form-check-input" id="favoriteCheck{{ $menu->id }}"
                                    {{ $menu->favorite ? 'checked' : '' }}>
                                <label class="form-check-label" for="favoriteCheck{{ $menu->id }}">Tandai sebagai Favorite</label>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    @empty
        <p class="text-muted">Tidak ada menu ditemukan.</p>
    @endforelse
</div>


    <!-- Pagination -->
    <div class="mt-4">
        {{ $menus->withQueryString()->links() }}
    </div>
</div>
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

function previewImage(event) {
    let input = event.target;
    let previewWrapper = document.getElementById('previewWrapper');
    let preview = document.getElementById('gambarPreview');
    let removeBtn = document.getElementById('removeImage');

    if (input.files && input.files[0]) {
        let reader = new FileReader();
        reader.onload = function(e) {
            preview.src = e.target.result;
            previewWrapper.classList.remove('d-none');
        }
        reader.readAsDataURL(input.files[0]);
    }

    removeBtn.onclick = function() {
        input.value = "";
        previewWrapper.classList.add('d-none');
        preview.src = "";
    }
}
</script>
@endsection
