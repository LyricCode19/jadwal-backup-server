
@extends('layouts.app')
@section('content')
<h2 class="mb-4">Edit Jadwal Backup</h2>

<form action="{{ route('jadwal-backup.update', $jadwal->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label class="form-label">Nama Server</label>
        <input type="text" name="nama_server" class="form-control" value="{{ $jadwal->nama_server }}" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Hari Backup</label>
        <input type="text" name="hari_backup" class="form-control" value="{{ $jadwal->hari_backup }}" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Jam Backup</label>
        <input type="time" name="jam_backup" class="form-control" value="{{ $jadwal->jam_backup }}" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Keterangan</label>
        <textarea name="keterangan" class="form-control">{{ $jadwal->keterangan }}</textarea>
    </div>
    <button type="submit" class="btn btn-success">Update</button>
    <a href="{{ route('jadwal-backup.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@endsection
