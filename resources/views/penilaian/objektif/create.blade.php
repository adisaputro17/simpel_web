@extends('layouts.app')
@section('content')
<h2>Tambah Penilaian Objektif</h2>
<form method="POST" action="{{ route('penilaian.store', 'objektif') }}">
    @csrf
    @include('penilaian.objektif.form')
</form>
@endsection

