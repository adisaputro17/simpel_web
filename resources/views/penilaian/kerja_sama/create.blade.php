@extends('layouts.app')
@section('content')
<h2>Tambah Penilaian Kerja Sama</h2>
<form method="POST" action="{{ route('penilaian.store', 'kerja_sama') }}">
    @csrf
    @include('penilaian.kerja_sama.form')
</form>
@endsection

