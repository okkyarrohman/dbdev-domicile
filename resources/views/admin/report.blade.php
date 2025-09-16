@extends('layouts.admin')

@section('content')
<div class="container-fluid py-4 h-100 px-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-dark">Manajemen Laporan</h2>
    </div>

    <div class="card shadow-lg border-0 rounded-4">
        <div class="card-header bg-secondary text-white rounded-top-4 p-4">
            <h5 class="mb-0 fw-bold">Daftar Pesan Masuk</h5>
        </div>
        <div class="card-body p-4">
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead class="table-secondary">
                        <tr>
                            <th scope="col" class="text-center">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Nomor Telepon</th>
                            <th scope="col">Pesan</th>
                            <th scope="col">Waktu</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($messages as $message)
                            <tr>
                                <th scope="row" class="text-center">{{ $loop->iteration + ($messages->currentPage() - 1) * $messages->perPage() }}</th>
                                <td>{{ $message->name }}</td>
                                <td>{{ $message->phone }}</td>
                                <td>{{ $message->message }}</td>
                                <td><small class="text-muted">{{ $message->created_at->format('d M Y, H:i') }}</small></td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center py-4">
                                    <p class="lead text-muted mb-0">Tidak ada pesan yang ditemukan.</p>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            
            <div class="d-flex justify-content-center mt-4">
                {{ $messages->links() }}
            </div>
        </div>
    </div>
</div>

<script>
    // Since the original script functions are for a "menu" and "image preview",
    // they are not needed for a "report" table. The script is left here 
    // for context but is not relevant to the table's appearance.
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