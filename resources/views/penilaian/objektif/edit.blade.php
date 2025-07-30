@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="card shadow-sm">
        <div class="card-header bg-warning text-dark">
            <h5 class="mb-0">Edit Penilaian Objektif</h5>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('penilaian.update', ['objektif', $item->id]) }}">
                @csrf
                @method('PUT')

                @include('penilaian.objektif.form')

                <div class="mt-4">
                    <button type="submit" class="btn btn-success">
                        <i class="fas fa-save"></i> Perbarui
                    </button>
                    <a href="{{ route('penilaian.index', 'objektif') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Batal
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
