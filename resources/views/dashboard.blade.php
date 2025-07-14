@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card shadow rounded-4">
        <div class="card-body">
            <h2 class="mb-3">Selamat Datang, {{ Auth::user()->name }}! 🎉</h2>
            <p class="lead">Anda berhasil login ke sistem <strong>Backup Server</strong>.</p>

            <hr>

            <div class="row mt-4">
                <div class="col-md-6 mb-3">
                    <a href="{{ route('lembaga.index') }}" class="btn btn-primary w-100">
                        🏫 Kelola Lembaga
                    </a>
                </div>
                <div class="col-md-6 mb-3">
                    <a href="{{ route('backup.index') }}" class="btn btn-success w-100">
                        💾 Lihat Riwayat Backup
                    </a>
                </div>
                <div class="col-md-6 mb-3">
                    <a href="{{ route('backup.create') }}" class="btn btn-warning w-100">
                        📤 Upload Backup Baru
                    </a>
                </div>
                <div class="col-md-6 mb-3">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-outline-danger w-100">
                            🔒 Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 