@extends('layouts.app')

@section('title', 'Tambah Izin Keluar')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
 
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h3 class="card-title mb-0">Tambah Izin Keluar</h3>
                </div>

                <form method="POST" action="{{ route('izin_keluar.store') }}">
                    @csrf
                    <div class="card-body">
                        @include('izin_keluar.form')
                    </div>
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-success">
                            <i class="fas fa-save"></i> Simpan
                        </button>
                        <a href="{{ route('izin_keluar.index') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left"></i> Kembali
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
