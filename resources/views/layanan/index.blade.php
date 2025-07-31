@extends('layouts.app')
@section('content')
<h2>Daftar Layanan</h2>

<a href="{{ route('layanan.create') }}">Tambah Layanan</a>

<table border="1" cellpadding="6" cellspacing="0">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Jenis</th>
            <th>Tahun</th>
            @for($i = 1; $i <= 12; $i++)
                <th>B{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}</th>
            @endfor
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse($data as $layanan)
            <tr>
                <td>{{ $layanan->nama }}</td>
                <td>{{ ucfirst($layanan->jenis) }}</td>
                <td>{{ $layanan->tahun }}</td>
                @for($i = 1; $i <= 12; $i++)
                    <td>{{ $layanan['bulan_' . str_pad($i, 2, '0', STR_PAD_LEFT)] }}</td>
                @endfor
                <td>
                    <a href="{{ route('layanan.edit', $layanan->id) }}">Edit</a> |
                    <form action="{{ route('layanan.destroy', $layanan->id) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button onclick="return confirm('Yakin hapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="16">Belum ada data.</td></tr>
        @endforelse
    </tbody>
</table>

@endsection