@extends('layouts.app')
@section('content')
    <h3>{{ isset($item) ? 'Edit' : 'Tambah' }} Keluhan</h3>
    <form method="POST" action="{{ isset($item) ? route('keluhan.update', $item->id) : route('keluhan.store') }}">
        @csrf
        @if (isset($item)) @method('PUT') @endif
        @include('keluhan.form')
    </form>
@endsection