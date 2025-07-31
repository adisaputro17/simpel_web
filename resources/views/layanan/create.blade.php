
@extends('layouts.app')
@section('content')
<h2>Tambah Layanan</h2>

<form method="POST" action="{{ route('layanan.store') }}">
    @include('layanan.form')
</form>


@endsection