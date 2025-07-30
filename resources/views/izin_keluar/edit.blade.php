@extends('layouts.app')

@section('title', 'Edit Izin Keluar')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
      
            <div class="card">
                <div class="card-header bg-warning">
                    <h3 class="card-title text-white mb-0">Edit Izin Keluar</h3>
                </div>

                <form method="POST" action="{{ route('izin_keluar.update', $izinKeluar->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        @include('izin_keluar.form')
                    </div>
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i> Update
                        </button>
                        <a href="{{ route('izin_keluar.index') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left"></i> Batal
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
