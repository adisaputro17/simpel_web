@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="card shadow-sm">
        <div class="card-header bg-info text-white">
            <h5 class="mb-0">Tambah Penilaian Objektif</h5>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('penilaian.store', 'objektif') }}">
                @csrf
                @include('penilaian.objektif.form')
                <div class="mt-4">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Simpan
                    </button>
                    <a href="{{ route('penilaian.index', 'objektif') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
