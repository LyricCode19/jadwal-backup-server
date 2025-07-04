{{-- resources/views/jadwal-backup/create.blade.php --}}
@extends('layouts.app')
@section('content')
<h2 class="mb-4">Tambah Jadwal Backup</h2>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<form action="{{ route('jadwal-backup.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label>Nama Server</label>
        <input type="text" name="nama_server" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Hari Backup</label>
        <input type="text" name="hari_backup" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Jam Backup</label>
        <input type="time" name="jam_backup" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Keterangan</label>
        <textarea name="keterangan" class="form-control"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="{{ route('jadwal-backup.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@endsection
