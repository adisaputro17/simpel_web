@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card card-primary shadow">
        <div class="card-header">
            <h3 class="card-title">Tambah Tugas Tambahan</h3>
        </div>
        <form method="POST" action="{{ route('tugas_tambahan.store') }}">
            @csrf
            <div class="card-body">
                @include('tugas_tambahan.form')
            </div>
            <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> Simpan
                </button>
                <a href="{{ route('tugas_tambahan.index') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> Kembali
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
