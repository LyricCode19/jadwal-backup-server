@extends('layouts.app')

@section('content')
<div class="container text-center">
    <h1 class="mb-4">Selamat Datang, {{ Auth::user()->name }}!</h1>

    <div class="row justify-content-center">
        <div class="col-md-4">
            <a href="{{ route('lembaga.index') }}" class="btn btn-outline-primary w-100 mb-3">
                📚 Kelola Lembaga
            </a>
        </div>
        <div class="col-md-4">
            <a href="{{ route('backup.index') }}" class="btn btn-outline-success w-100 mb-3">
                💾 Riwayat Backup
            </a>
        </div>
        <div class="col-md-4">
            <a href="{{ route('backup.create') }}" class="btn btn-outline-warning w-100 mb-3">
                ⬆️ Upload Backup
            </a>
        </div>
    </div>
</div>
@endsection
 