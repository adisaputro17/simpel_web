
@extends('layouts.app')
@section('content')
<h2>Edit Layanan</h2>

<form method="POST" action="{{ route('layanan.update', $layanan->id) }}">
    @include('layanan.form')
</form>


@endsection