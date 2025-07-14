@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Upload File Backup</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('backup.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label>Nama File</label>
            <input type="text" name="nama_file" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Lembaga</label>
            <select name="lembaga_id" class="form-control" required>
                @foreach ($lembagas as $lembaga)
                    <option value="{{ $lembaga->id }}">{{ $lembaga->nama_lembaga }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>File Backup</label>
            <input type="file" name="file_backup" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Catatan (opsional)</label>
            <textarea name="catatan" class="form-control"></textarea>
        </div>

        <button class="btn btn-primary">Upload</button>
    </form>
</div>
@endsection
