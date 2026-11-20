@extends('layouts.app')

@section('title', 'Daftar Akun pemohon')

@section('content')
<div class="row justify-content-center align-items-center" style="min-height: 70vh;">
    <div class="col-md-6 col-lg-5">
        <div class="card shadow border-0">
            <div class="card-body p-4 p-md-5">
                <div class="text-center mb-4">
                    <div class="d-inline-flex p-3 rounded-circle bg-success bg-opacity-10 text-success mb-3">
                        <i class="bi bi-person-plus-fill fs-2"></i>
                    </div>
                    <h4 class="fw-bold text-dark">Registrasi pemohon</h4>
                    <p class="text-muted small">Buat akun untuk melaporkan kerusakan sarana kampus</p>
                </div>

                <div class="alert alert-info py-2 px-3 small d-flex align-items-center mb-3">
                    <i class="bi bi-shield-check me-2 fs-5"></i>
                    <div>Setiap akun baru otomatis terdaftar dengan role <strong>pemohon</strong>.</div>
                </div>

                <form method="POST" action="{{ route('register') }}" novalidate>
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label small fw-semibold">Nama Lengkap</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light border-end-0"><i class="bi bi-person text-muted"></i></span>
                            <input type="text" class="form-control border-start-0 ps-0 @error('name') is-invalid @enderror" 
                                id="name" name="name" value="{{ old('name') }}" required autofocus placeholder="Contoh: Budi Santoso">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label small fw-semibold">Alamat Email</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light border-end-0"><i class="bi bi-envelope text-muted"></i></span>
                            <input type="email" class="form-control border-start-0 ps-0 @error('email') is-invalid @enderror" 
                                id="email" name="email" value="{{ old('email') }}" required placeholder="budi@student.kampus.ac.id">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="password" class="form-label small fw-semibold">Kata Sandi</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0"><i class="bi bi-key text-muted"></i></span>
                                <input type="password" class="form-control border-start-0 ps-0 @error('password') is-invalid @enderror" 
                                    id="password" name="password" required placeholder="Minimal 6 karakter">
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="password_confirmation" class="form-label small fw-semibold">Ulangi Kata Sandi</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0"><i class="bi bi-check2-circle text-muted"></i></span>
                                <input type="password" class="form-control border-start-0 ps-0" 
                                    id="password_confirmation" name="password_confirmation" required placeholder="Ketik ulang kata sandi">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success w-100 py-2 fw-semibold mt-2">
                        <i class="bi bi-person-check me-1"></i> Selesaikan Pendaftaran
                    </button>
                </form>

                <div class="mt-4 text-center">
                    <span class="text-muted small">Sudah memiliki akun? </span>
                    <a href="{{ route('login') }}" class="small fw-semibold text-decoration-none">Masuk di sini</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
