@extends('layouts.admin')

@section('content')
<div class="container-fluid py-4">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-dark">Manajemen Galeri</h2>
        <button type="button" class="btn btn-primary shadow-sm" data-bs-toggle="modal" data-bs-target="#createModal">
            <i class="bi bi-plus-circle me-2"></i> Tambah Galeri
        </button>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        @forelse ($galleries as $gallery)
        <div class="col">
            <div class="card h-100 shadow-sm rounded-4 overflow-hidden">
                <img src="{{ asset('storage/' . $gallery->image) }}" class="card-img-top" 
                     alt="{{ $gallery->description }}" style="object-fit: cover; height: 250px;">
                <div class="card-body">
                    <p class="card-text">{{ $gallery->description }}</p>
                </div>
                <div class="card-footer d-flex justify-content-end gap-2 bg-white border-0">
                    <button type="button" class="btn btn-sm btn-warning text-white" data-bs-toggle="modal" data-bs-target="#editModal" 
                            data-id="{{ $gallery->id }}" 
                            data-description="{{ $gallery->description }}" 
                            data-image-path="{{ asset('storage/' . $gallery->image) }}">
                        Edit
                    </button>
                    <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" data-id="{{ $gallery->id }}">
                        Hapus
                    </button>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12">
            <div class="alert alert-info text-center" role="alert">
                Tidak ada gambar galeri yang ditemukan.
            </div>
        </div>
        @endforelse
    </div>
</div>

<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createModalLabel">Tambah Gambar Galeri</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('admin.galleries.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="createImage" class="form-label">Gambar</label>
                        <input class="form-control" type="file" id="createImage" name="image" required>
                    </div>
                    <div class="mb-3">
                        <img id="createImagePreview" src="" alt="Image Preview" class="img-fluid rounded-3" style="display: none;">
                    </div>
                    <div class="mb-3">
                        <label for="createDescription" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="createDescription" name="description" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Gambar Galeri</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="editForm" action="#" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="mb-3 text-center">
                        <img id="editImagePreview" src="" alt="Image Preview" class="img-fluid rounded-3 mb-2" style="max-height: 200px;">
                    </div>
                    <div class="mb-3">
                        <label for="editImage" class="form-label">Ganti Gambar</label>
                        <input class="form-control" type="file" id="editImage" name="image">
                    </div>
                    <div class="mb-3">
                        <label for="editDescription" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="editDescription" name="description" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Hapus Gambar Galeri</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Apakah Anda yakin ingin menghapus gambar ini? Tindakan ini tidak dapat dibatalkan.</p>
            </div>
            <div class="modal-footer">
                <form id="deleteForm" action="#" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    // Edit Modal Logic
    var editModal = document.getElementById('editModal');
    editModal.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget;
        var id = button.getAttribute('data-id');
        var description = button.getAttribute('data-description');
        var imagePath = button.getAttribute('data-image-path');

        var form = editModal.querySelector('#editForm');
        var imagePreview = editModal.querySelector('#editImagePreview');
        var descriptionInput = editModal.querySelector('#editDescription');

        form.action = '/admin/galleries/' + id;
        descriptionInput.value = description;
        imagePreview.src = imagePath;
        
        // Handle file input change for preview
        editModal.querySelector('#editImage').onchange = function(e) {
            var reader = new FileReader();
            reader.onload = function(e) {
                imagePreview.src = e.target.result;
            }
            reader.readAsDataURL(e.target.files[0]);
        };
    });

    // Delete Modal Logic
    var deleteModal = document.getElementById('deleteModal');
    deleteModal.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget;
        var id = button.getAttribute('data-id');
        var form = deleteModal.querySelector('#deleteForm');
        form.action = '/admin/galleries/' + id;
    });

    // Create Modal Image Preview
    document.getElementById('createImage').onchange = function(e) {
        var reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('createImagePreview').src = e.target.result;
        }
        reader.readAsDataURL(e.target.files[0]);
    };
});
</script>
@endpush