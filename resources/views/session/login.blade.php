@extends('layouts.admin')

@section('content')
<section class="d-flex align-items-center justify-content-center vh-100 bg-light">
    <div class="card shadow-lg p-4 rounded-4" style="max-width:400px; width:100%;">
        <h3 class="text-center mb-4 fw-bold" style="color:#634c4c;">Admin Login</h3>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if($errors->any())
            <div class="alert alert-danger">{{ $errors->first() }}</div>
        @endif

        <form method="POST" action="{{ route('admin.login') }}">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email Admin</label>
                <input type="email" name="email" id="email" class="form-control rounded-3" 
                       placeholder="admin@domain.com" required autofocus value="{{ old('email') }}">
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Kata Sandi</label>
                <input type="password" name="password" id="password" class="form-control rounded-3" placeholder="••••••" required>
            </div>

            <button type="submit" class="btn w-100 btn-custom">Login</button>
        </form>
    </div>
</section>

<style>
.btn-custom {
    background: linear-gradient(45deg, #6B4226, #634c4c);
    color: #fff;
    font-weight: 600;
    border: none;
    transition: all 0.3s ease;
}
.btn-custom:hover {
    background: linear-gradient(45deg, #8B5E3C, #7A4E4E);
    transform: translateY(-2px);
    box-shadow: 0 6px 15px rgba(0,0,0,0.3);
}
</style>
@endsection
