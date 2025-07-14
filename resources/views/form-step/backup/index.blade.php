@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Riwayat Backup</h1>
    <a href="{{ route('backup.create') }}" class="btn btn-primary mb-3">+ Upload Backup</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Lembaga</th>
                <th>Nama File</th>
                <th>Catatan</th>
                <th>Uploaded</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($backups as $backup)
                <tr>
                    <td>{{ $backup->lembaga->nama_lembaga }}</td>
                    <td>{{ $backup->nama_file }}</td>
                    <td>{{ $backup->catatan ?? '-' }}</td>
                    <td>{{ $backup->uploaded_at->format('d M Y H:i') }}</td>
                    <td>
                        <a href="{{ route('backup.show', $backup) }}" class="btn btn-info btn-sm">Lihat</a>
                        <form action="{{ route('backup.destroy', $backup) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus file ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
 