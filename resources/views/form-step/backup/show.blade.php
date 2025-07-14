@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Backup</h1>

    <div class="card p-3">
        <p><strong>Lembaga:</strong> {{ $backup->lembaga->nama_lembaga }}</p>
        <p><strong>Nama File:</strong> {{ $backup->nama_file }}</p>
        <p><strong>Catatan:</strong> {{ $backup->catatan ?? '-' }}</p>
        <p><strong>Lokasi Path:</strong> {{ $backup->lokasi_path }}</p>
        <p><strong>Tanggal Upload:</strong> {{ $backup->uploaded_at->format('d M Y H:i') }}</p>

        <a href="{{ asset('storage/' . $backup->lokasi_path) }}" target="_blank" class="btn btn-secondary mt-3">Download / Lihat File</a>
    </div>

    <a href="{{ route('backup.index') }}" class="btn btn-secondary mt-3">← Kembali</a>
</div>
@endsection
 