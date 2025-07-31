@extends('layouts.app')
@section('content')
    <h3>Daftar Keluhan</h3>
    <a href="{{ route('keluhan.create') }}" class="btn btn-primary mb-2">Tambah Keluhan</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Layanan</th>
                <th>Dari</th>
                <th>Kepada</th>
                <th>Jenis Permasalahan</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->tanggal }}</td>
                    <td>{{ $item->layanan->nama }}</td>
                    <td>{{ $item->dariPegawai->nama ?? '-' }}</td>
                    <td>{{ $item->kepadaPegawai->nama ?? '-' }}</td>
                    <td>{{ $item->jenis_permasalahan }}</td>
                    <td>{{ $item->deskripsi }}</td>
                    <td>
                        <a href="{{ route('keluhan.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('keluhan.destroy', $item->id) }}" method="POST" style="display:inline-block">
                            @csrf @method('DELETE')
                            <button type="submit" onclick="return confirm('Yakin hapus?')" class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection