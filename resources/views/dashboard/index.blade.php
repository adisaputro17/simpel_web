@extends('layouts.app')

@section('content')
<div class="container">
    <h4 class="mb-4">Nilai Izin Keluar Pegawai</h4>

    <form method="GET" class="mb-3">
        <div class="row">
            <div class="col">
                <label>Bulan Awal</label>
                <select name="bulan_awal" class="form-control">
                    @for($i = 1; $i <= 12; $i++)
                        <option value="{{ $i }}" {{ request('bulan_awal') == $i ? 'selected' : '' }}>{{ $i }}</option>
                    @endfor
                </select>
            </div>
            <div class="col">
                <label>Bulan Akhir</label>
                <select name="bulan_akhir" class="form-control">
                    @for($i = 1; $i <= 12; $i++)
                        <option value="{{ $i }}" {{ request('bulan_akhir') == $i ? 'selected' : '' }}>{{ $i }}</option>
                    @endfor
                </select>
            </div>
            <div class="col">
                <label>Tahun</label>
                <input type="number" name="tahun" class="form-control" value="{{ request('tahun', now()->year) }}">
            </div>
            <div class="col">
                <label>&nbsp;</label><br>
                <button class="btn btn-primary">Tampilkan</button>
            </div>
        </div>
    </form>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>NIP</th>
                <th>Nama</th>
                <th>Nilai Kehadiran</th>
                <th>Nilai Kinerja</th>
                <th>Nilai Kerja Sama</th>
                <th>Nilai Inovasi</th>
                <th>Nilai Penampilan</th>
                <th>Nilai Komplain</th>
                <th>Total Nilai</th>

                
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $row)
            <tr>
                <td>{{ $row['nip'] }}</td>
                <td>{{ $row['nama'] }}</td>
                <td>{{ $row['total_nilai_kehadiran_bobot'] }}</td>
                <td>{{ $row['total_nilai_kinerja_bobot'] }}</td>
                <td>{{ $row['nilai_kerja_sama_bobot'] }}</td>
                <td>{{ $row['nilai_inovasi_bobot'] }}</td>
                <td>{{ $row['nilai_penampilan_bobot'] }}</td>
                <td>{{ $row['nilai_komplain_bobot'] }}</td>
                <td>{{ $row['total_nilai'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
