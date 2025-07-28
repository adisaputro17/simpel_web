@extends('layouts.app')
@section('content')
<h2>Edit Pegawai</h2>
<form action="{{ route('pegawai.update', $pegawai->nip) }}" method="POST">
@csrf @method('PUT')
Nama: <input type="text" name="nama" value="{{ $pegawai->nama }}"><br>
Password (kosongkan jika tidak diganti): <input type="password" name="password"><br>
Atasan:
<select name="atasan_id">
    <option value="">-- Pilih Atasan --</option>
    @foreach($atasans as $a)
    <option value="{{ $a->nip }}" {{ $pegawai->atasan_id == $a->nip ? 'selected' : '' }}>{{ $a->nama }}</option>
    @endforeach
</select><br>
<button type="submit">Update</button>
</form>
@endsection