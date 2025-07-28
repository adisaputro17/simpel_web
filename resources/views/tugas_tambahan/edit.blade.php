@extends('layouts.app')

@section('content')
    <h2>Edit Tugas Tambahan</h2>
    <form method="POST" action="{{ route('tugas_tambahan.update', $item->id) }}">
        @csrf @method('PUT')
        @include('tugas_tambahan.form')
    </form>
@endsection
