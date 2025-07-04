{{-- resources/views/jadwal-backup/index.blade.php --}}
@extends('layouts.app')
@section('content')

<h2>Daftar Jadwal Backup</h2>

{{-- Tombol tambah --}}
<a href="{{ route('jadwal-backup.create') }}" class="btn btn-success mb-3">+ Tambah Data</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Server</th>
            <th>Hari</th>
            <th>Jam</th>
            <th>Keterangan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($jadwals as $jadwal)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $jadwal->nama_server }}</td>
            <td>{{ $jadwal->hari_backup }}</td>
            <td>{{ $jadwal->jam_backup }}</td>
            <td>{{ $jadwal->keterangan }}</td>
            <td>
                <a href="{{ route('jadwal-backup.edit', $jadwal->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('jadwal-backup.destroy', $jadwal->id) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button type="submit" onclick="return confirm('Yakin ingin menghapus data ini?')" class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="6" class="text-center">Belum ada data.</td>
        </tr>
        @endforelse
    </tbody>
</table>

@endsection
