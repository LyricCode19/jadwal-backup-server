@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Lembaga</h1>
    <a href="{{ route('lembaga.create') }}" class="btn btn-primary mb-3">+ Tambah Lembaga</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>Jenjang</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($lembagas as $lembaga)
                <tr>
                    <td>{{ $lembaga->nama_lembaga }}</td>
                    <td>{{ $lembaga->alamat }}</td>
                    <td>{{ $lembaga->email }}</td>
                    <td>{{ $lembaga->jenjang }}</td>
                    <td>
                        <a href="{{ route('lembaga.show', $lembaga) }}" class="btn btn-info btn-sm">Lihat</a>
                        <a href="{{ route('lembaga.edit', $lembaga) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('lembaga.destroy', $lembaga) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin hapus?')">
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
 