@extends('layouts.app')

@section('content')
    <h2>Tambah Izin Keluar</h2>

    <form method="POST" action="{{ route('izin_keluar.store') }}">
        @csrf
        @include('izin_keluar.form')
    </form>
@endsection
