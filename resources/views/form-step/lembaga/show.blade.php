@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Lembaga</h1>
    <div class="card p-3">
        <h3>{{ $lembaga->nama_lembaga }}</h3>
        <p><strong>Alamat:</strong> {{ $lembaga->alamat }}</p>
        <p><strong>Email:</strong> {{ $lembaga->email }}</p>
        <p><strong>Jenjang:</strong> {{ $lembaga->jenjang }}</p>
    </div>
    <a href="{{ route('lembaga.index') }}" class="btn btn-secondary mt-3">← Kembali</a>
</div>
@endsection
 