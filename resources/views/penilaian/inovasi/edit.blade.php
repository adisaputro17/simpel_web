@extends('layouts.app')
@section('content')
<h2>Edit Penilaian Inovasi</h2>
<form method="POST" action="{{ route('penilaian.update', ['inovasi', $item->id]) }}">
    @csrf @method('PUT')
    @include('penilaian.inovasi.form')
</form>
@endsection
