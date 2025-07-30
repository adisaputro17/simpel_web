@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card shadow">
                <div class="card-header bg-warning text-dark">
                    <h4 class="mb-0">Edit Penilaian Inovasi</h4>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('penilaian.update', ['inovasi', $item->id]) }}">
                        @csrf
                        @method('PUT')

                        @include('penilaian.inovasi.form')

                        <div class="d-flex justify-content-between mt-4">
                            <a href="{{ route('penilaian.index', 'inovasi') }}" class="btn btn-secondary">
                                <i class="fas fa-arrow-left"></i> Kembali
                            </a>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Update
                            </button>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>
</div>
@endsection
