@extends('layouts.app')

@section('content')
    <h2>Tambah Tugas Tambahan</h2>
    <form method="POST" action="{{ route('tugas_tambahan.store') }}">
        @csrf
        @include('tugas_tambahan.form')
    </form>
@endsection
