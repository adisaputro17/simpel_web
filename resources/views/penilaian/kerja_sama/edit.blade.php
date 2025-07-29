@extends('layouts.app')
@section('content')
<h2>Edit Penilaian Kerja Sama</h2>
<form method="POST" action="{{ route('penilaian.update', ['kerja_sama', $item->id]) }}">
    @csrf @method('PUT')
    @include('penilaian.kerja_sama.form')
</form>
@endsection
