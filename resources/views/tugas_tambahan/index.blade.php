@extends('layouts.app')

@section('content')
    <h2>Daftar Tugas Tambahan</h2>

    @if(session('success'))
        <p style="color: green">{{ session('success') }}</p>
    @endif

    @if(auth('pegawai')->user()->bawahan->count() > 0)
        <a href="{{ route('tugas_tambahan.create') }}">Tambah</a>
    @endif

    <table border="1" cellpadding="8" cellspacing="0" style="margin-top: 10px;">
        <tr>
            <th>NIP</th><th>Nama</th><th>Tanggal</th>
            <th>Jam Mulai</th><th>Jam Selesai</th><th>Keterangan</th><th>Aksi</th>
        </tr>
        @foreach($data as $item)
        <tr>
            <td>{{ $item->nip }}</td>
            <td>{{ $item->pegawai->nama ?? '-' }}</td>
            <td>{{ $item->tanggal }}</td>
            <td>{{ $item->jam_mulai }}</td>
            <td>{{ $item->jam_selesai }}</td>
            <td>{{ $item->keterangan }}</td>
            <td>
                @if(auth('pegawai')->user()->bawahan->contains('nip', $item->nip))
                    <a href="{{ route('tugas_tambahan.edit', $item->id) }}">Edit</a>
                    <form method="POST" action="{{ route('tugas_tambahan.destroy', $item->id) }}" style="display:inline">
                        @csrf @method('DELETE')
                        <button onclick="return confirm('Hapus?')">Hapus</button>
                    </form>
                @else
                    <em>Read Only</em>
                @endif
            </td>
        </tr>
        @endforeach
    </table>
@endsection
