@extends('layouts.app')

@section('content')
    <h2>Edit Izin Keluar</h2>

    <form method="POST" action="{{ route('izin_keluar.update', $izinKeluar->id) }}">
        @csrf
        @method('PUT')
        @include('izin_keluar.form')
    </form>
@endsection
