@extends('layouts.app')

@section('title', 'Edit Pegawai')

@section('content')
<div class="container-fluid mt-3">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit Pegawai</h3>
                </div>

                <form action="{{ route('pegawai.update', $pegawai->nip) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-body">

                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" value="{{ $pegawai->nama }}" required>
                        </div>

                        <div class="form-group">
                            <label for="password">Password <small class="text-muted">(Kosongkan jika tidak diganti)</small></label>
                            <input type="password" name="password" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="atasan_id">Atasan</label>
                            <select name="atasan_id" class="form-control">
                                <option value="">-- Pilih Atasan --</option>
                                @foreach($atasans as $a)
                                <option value="{{ $a->nip }}" {{ $pegawai->atasan_id == $a->nip ? 'selected' : '' }}>
                                    {{ $a->nama }}
                                </option>
                                @endforeach
                            </select>
                        </div>

                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i> Update
                        </button>
                        <a href="{{ route('pegawai.index') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left"></i> Kembali
                        </a>
                    </div>
                </form>

            </div>

        </div>
    </div>
</div>
@endsection
