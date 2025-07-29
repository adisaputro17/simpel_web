@extends('layouts.app')
@section('content')
<h2>Tambah Penilaian Inovasi</h2>
<form method="POST" action="{{ route('penilaian.store', 'inovasi') }}">
    @csrf
    @include('penilaian.inovasi.form')
</form>
@endsection

