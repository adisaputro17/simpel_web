@extends('layouts.app')
@section('content')
<h2>Edit Penilaian Objektif</h2>
<form method="POST" action="{{ route('penilaian.update', ['objektif', $item->id]) }}">
    @csrf @method('PUT')
    @include('penilaian.objektif.form')
</form>
@endsection
