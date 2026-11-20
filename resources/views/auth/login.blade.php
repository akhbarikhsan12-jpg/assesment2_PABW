@extends('layouts.app')

@section('title', 'Masuk ke Sistem')

@section('content')
<div class="row justify-content-center align-items-center" style="min-height: 70vh;">
    <div class="col-md-5 col-lg-4">
        <div class="card shadow border-0">
            <div class="card-body p-4 p-md-5">
                <div class="text-center mb-4">
                    <div class="d-inline-flex p-3 rounded-circle bg-primary bg-opacity-10 text-primary mb-3">
                        <i class="bi bi-shield-lock-fill fs-2"></i>
                    </div>
                    <h4 class="fw-bold text-dark">Selamat Datang</h4>
                    <p class="text-muted small">Silakan masuk ke akun SmartFacility Anda</p>
                </div>

                <form method="POST" action="{{ route('login') }}" novalidate>
                    @csrf

                    <div class="mb-3">
                        <label for="email" class="form-label small fw-semibold">Alamat Email</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light border-end-0"><i class="bi bi-envelope text-muted"></i></span>
                            <input type="email" class="form-control border-start-0 ps-0 @error('email') is-invalid @enderror" 
                                id="email" name="email" value="{{ old('email') }}" required autofocus placeholder="nama@kampus.ac.id">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label small fw-semibold">Kata Sandi</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light border-end-0"><i class="bi bi-key text-muted"></i></span>
                            <input type="password" class="form-control border-start-0 ps-0 @error('password') is-invalid @enderror" 
                                id="password" name="password" required placeholder="••••••••">
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-4 form-check">
                        <input type="checkbox" class="form-check-input" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label small text-muted" for="remember">Ingat Saya</label>
                    </div>

                    <button type="submit" class="btn btn-primary w-100 py-2 fw-semibold">
                        <i class="bi bi-box-arrow-in-right me-1"></i> Masuk Sekarang
                    </button>
                </form>

                <div class="mt-4 text-center">
                    <span class="text-muted small">Belum punya akun? </span>
                    <a href="{{ route('register') }}" class="small fw-semibold text-decoration-none">Daftar Akun Mahasiswa</a>
                </div>

                <!-- Credential Demo Info -->
                <div class="mt-4 p-3 bg-light rounded small border">
                    <div class="fw-bold mb-1 text-secondary"><i class="bi bi-info-circle me-1"></i> Akun Demo Seeder:</div>
                    <div class="d-flex justify-content-between text-muted">
                        <span>Admin:</span> <code>admin@smartfacility.test</code>
                    </div>
                    <div class="d-flex justify-content-between text-muted">
                        <span>Mahasiswa:</span> <code>mahasiswa@smartfacility.test</code>
                    </div>
                    <div class="d-flex justify-content-between text-muted">
                        <span>Password:</span> <code>password</code>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
