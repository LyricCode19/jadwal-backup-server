@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Lembaga</h1>
    <form action="{{ route('lembaga.update', $lembaga) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Nama Lembaga</label>
            <input type="text" name="nama_lembaga" class="form-control" value="{{ $lembaga->nama_lembaga }}" required>
        </div>
        <div class="mb-3">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control" required>{{ $lembaga->alamat }}</textarea>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ $lembaga->email }}" required>
        </div>
        <div class="mb-3">
            <label>Jenjang</label>
            <select name="jenjang" class="form-control" required>
                <option value="TK" {{ $lembaga->jenjang == 'TK' ? 'selected' : '' }}>TK</option>
                <option value="SD" {{ $lembaga->jenjang == 'SD' ? 'selected' : '' }}>SD</option>
                <option value="SMP" {{ $lembaga->jenjang == 'SMP' ? 'selected' : '' }}>SMP</option>
                <option value="SMA" {{ $lembaga->jenjang == 'SMA' ? 'selected' : '' }}>SMA</option>
                <option value="PT" {{ $lembaga->jenjang == 'PT' ? 'selected' : '' }}>PT</option>
            </select>
        </div>
        <button class="btn btn-success">Perbarui</button>
    </form>
</div>
@endsection
 