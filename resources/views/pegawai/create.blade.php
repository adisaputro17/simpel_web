@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Tambah Pegawai</h3>
                </div>

                <form action="{{ route('pegawai.store') }}" method="POST">
                    @csrf
                    <div class="card-body">

                        <div class="form-group">
                            <label for="nip">NIP</label>
                            <input type="text" class="form-control" name="nip" id="nip" placeholder="Masukkan NIP" required>
                        </div>

                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama" required>
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan Password" required>
                        </div>

                        <div class="form-group">
                            <label for="atasan_id">Atasan</label>
                            <select name="atasan_id" id="atasan_id" class="form-control">
                                <option value="">-- Pilih Atasan --</option>
                                @foreach($atasans as $a)
                                    <option value="{{ $a->nip }}">{{ $a->nama }} ({{ $a->nip }})</option>
                                @endforeach
                            </select>
                        </div>

                    </div>

                    <div class="card-footer text-right">
                        <a href="{{ route('pegawai.index') }}" class="btn btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>

            </div>

        </div>
    </div>
</div>
@endsection
