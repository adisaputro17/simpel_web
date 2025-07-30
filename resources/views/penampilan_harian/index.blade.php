@extends('layouts.app')
@section('content')

<h3>Data Penampilan Harian</h3>
<a href="{{ route('penampilan.create') }}">Input Penilaian</a>

<table border="1">
    <thead>
        <tr>
            <th>Tanggal</th>
            <th>NIP</th>
            <th>Atribut Lengkap</th>
            <th>Seragam Sesuai Jadwal</th>
            <th>Seragam Sesuai Aturan</th>
            <th>Rapi</th>
            <th>Keterangan</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $d)
        <tr>
            <td>{{ $d->tanggal }}</td>
            <td>{{ $d->nip }}</td>
            <td>{{ $d->atribut_lengkap }}</td>
            <td>{{ $d->seragam_sesuai_jadwal }}</td>
            <td>{{ $d->seragam_sesuai_aturan }}</td>
            <td>{{ $d->rapi }}</td>
            <td>{{ $d->keterangan }}</td>
        </tr>
        @endforeach
    </tbody>
</table>


@endsection