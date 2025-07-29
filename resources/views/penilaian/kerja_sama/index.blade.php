@extends('layouts.app')

@section('content')
<h2>Penilaian Kerja Sama</h2>

    @if(session('error'))
        <p style="color: red">{{ session('error') }}</p>
    @endif

<a href="{{ route('penilaian.create', 'kerja_sama') }}">Tambah</a>
<table border="1" cellpadding="8" cellspacing="0">
    <tr>
        <th>NIP</th><th>Nilai</th><th>Bulan</th><th>Tahun</th><th>Keterangan</th><th>Aksi</th>
    </tr>
    @foreach($data as $item)
    <tr>
        <td>{{ $item->nip }}</td>
        <td>{{ $item->nilai }}</td>
        <td>{{ $item->bulan }}</td>
        <td>{{ $item->tahun }}</td>
        <td>{{ $item->keterangan }}</td>
        <td>
            <a href="{{ route('penilaian.edit', ['kerja_sama', $item->id]) }}">Edit</a>
            <form action="{{ route('penilaian.destroy', ['kerja_sama', $item->id]) }}" method="POST" style="display:inline">
                @csrf @method('DELETE')
                <button onclick="return confirm('Hapus?')">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection