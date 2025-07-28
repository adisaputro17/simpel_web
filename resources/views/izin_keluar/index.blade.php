@extends('layouts.app')

@section('content')
    <h2>Daftar Izin Keluar</h2>

    @if(session('success'))
        <p style="color: green">{{ session('success') }}</p>
    @endif

    @if(auth('pegawai')->user()->bawahan->count() > 0)
        <a href="{{ route('izin_keluar.create') }}">Tambah Izin</a>
    @endif

    <table border="1" cellpadding="8" cellspacing="0" style="margin-top: 10px;">
        <thead>
            <tr>
                <th>NIP</th>
                <th>Nama</th>
                <th>Tanggal</th>
                <th>Jam Keluar</th>
                <th>Jam Kembali</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($izinKeluar as $item)
                <tr>
                    <td>{{ $item->nip }}</td>
                    <td>{{ $item->pegawai->nama ?? '-' }}</td>
                    <td>{{ $item->tanggal }}</td>
                    <td>{{ $item->jam_keluar }}</td>
                    <td>{{ $item->jam_kembali }}</td>
                    <td>{{ $item->keterangan }}</td>
                    <td>
                        @if(auth('pegawai')->user()->bawahan->contains('nip', $item->nip))
                            <a href="{{ route('izin_keluar.edit', $item->id) }}">Edit</a>
                            <form action="{{ route('izin_keluar.destroy', $item->id) }}" method="POST" style="display:inline;">
                                @csrf @method('DELETE')
                                <button type="submit" onclick="return confirm('Yakin hapus?')">Hapus</button>
                            </form>
                        @else
                            <em>Read Only</em>
                        @endif
                    </td>
                </tr>
            @empty
                <tr><td colspan="7">Tidak ada data</td></tr>
            @endforelse
        </tbody>
    </table>
@endsection
