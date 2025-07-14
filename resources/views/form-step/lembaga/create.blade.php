@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Lembaga</h1>
    <form action="{{ route('lembaga.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nama Lembaga</label>
            <input type="text" name="nama_lembaga" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Jenjang</label>
            <select name="jenjang" class="form-control" required>
                <option value="TK">TK</option>
                <option value="SD">SD</option>
                <option value="SMP">SMP</option>
                <option value="SMA">SMA</option>
                <option value="PT">PT</option>
            </select>
        </div>
        <button class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
 