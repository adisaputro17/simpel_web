@extends('layouts.app')
@section('content')

<h3>Input Penampilan Harian</h3>

<form action="{{ route('penampilan.store') }}" method="POST">
    @csrf
    <p>
        <label>Tanggal:</label>
        <input type="date" name="tanggal" required value="{{ old('tanggal', date('Y-m-d')) }}">
    </p>

    <table border="1">
        <thead>
            <tr>
                <th>NIP</th>
                <th>Nama</th>
                <th>Atribut Lengkap</th>
                <th>Seragam Sesuai Jadwal</th>
                <th>Seragam Sesuai Aturan</th>
                <th>Rapi</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pegawai as $p)
            <tr>
                <td>{{ $p->nip }}</td>
                <td>{{ $p->nama }}</td>
                <td>
                    <select name="penilaian[{{ $p->nip }}][atribut_lengkap]">
                        @foreach([0, 25, 50, 75, 100] as $val)
                        <option value="{{ $val }}">{{ $val }}</option>
                        @endforeach
                    </select>
                </td>
                <td>
                    <select name="penilaian[{{ $p->nip }}][seragam_sesuai_jadwal]">
                        <option value="0">0</option>
                        <option value="100">100</option>
                    </select>
                </td>
                <td>
                    <select name="penilaian[{{ $p->nip }}][seragam_sesuai_aturan]">
                        <option value="0">0</option>
                        <option value="100">100</option>
                    </select>
                </td>
                <td>
                    <select name="penilaian[{{ $p->nip }}][rapi]">
                        <option value="0">0</option>
                        <option value="100">100</option>
                    </select>
                </td>
                <td>
                    <input type="text" name="penilaian[{{ $p->nip }}][keterangan]">
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <button type="submit">Simpan</button>
</form>


@endsection