@extends('layouts.app')
@section('content')
<h2>Tambah Pegawai</h2>
<form action="{{ route('pegawai.store') }}" method="POST">
@csrf
NIP: <input type="text" name="nip"><br>
Nama: <input type="text" name="nama"><br>
Password: <input type="password" name="password"><br>
Atasan:
<select name="atasan_id">
    <option value="">-- Pilih Atasan --</option>
    @foreach($atasans as $a)
    <option value="{{ $a->nip }}">{{ $a->nama }}</option>
    @endforeach
</select><br>
<button type="submit">Simpan</button>
</form>
@endsection