@extends('layouts.app')

@section('title', 'Tambah Tugas Tambahan ')

@section('content')
<div class="container-fluid">
    <div class="row mb-3">
        <div class="col-md-12">
            <h4 class="mb-3">Daftar Tugas Tambahan</h4>

            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="fas fa-check-circle mr-1"></i> {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                </div>
            @endif

            @if(auth('pegawai')->user()->bawahan->count() > 0)
                <a href="{{ route('tugas_tambahan.create') }}" class="btn btn-primary mb-3">
                    <i class="fas fa-plus-circle"></i> Tambah Tugas Tambahan
                </a>
            @endif

            <div class="card">
                <div class="card-body table-responsive">
                    <table id="tugasTable" class="table table-hover table-bordered table-striped text-nowrap">
                        <thead class="bg-primary text-white text-center">
                            <tr>
                                <th>NIP</th>
                                <th>Nama</th>
                                <th>Tanggal</th>
                                <th>Jam Mulai</th>
                                <th>Jam Selesai</th>
                                <th>Keterangan</th>
                                <th style="width: 140px;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $item)
                            <tr>
                                <td>{{ $item->nip }}</td>
                                <td>{{ $item->pegawai->nama ?? '-' }}</td>
                                <td>{{ $item->tanggal }}</td>
                                <td>{{ $item->jam_mulai }}</td>
                                <td>{{ $item->jam_selesai }}</td>
                                <td>{{ $item->keterangan }}</td>
                                <td class="text-center">
                                    @if(auth('pegawai')->user()->bawahan->contains('nip', $item->nip))
                                        <a href="{{ route('tugas_tambahan.edit', $item->id) }}" class="btn btn-sm btn-warning">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>
                                        <form method="POST" action="{{ route('tugas_tambahan.destroy', $item->id) }}" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus?')">
                                            @csrf @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">
                                                <i class="fas fa-trash"></i> Hapus
                                            </button>
                                        </form>
                                    @else
                                        <span class="badge badge-secondary">Read Only</span>
                                    @endif
                                </td>
                            </tr>
                            @endforeach

                            @if($data->isEmpty())
                            <tr>
                                <td colspan="7" class="text-center text-muted">Belum ada data tugas tambahan</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

@push('styles')
<!-- DataTables CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css">
@endpush

@push('scripts')
<!-- jQuery (pastikan ini sudah tersedia di layout) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>

<script>
    $(document).ready(function () {
        $('#tugasTable').DataTable({
            responsive: true,
            autoWidth: false,
            language: {
                search: "Cari:",
                lengthMenu: "Tampilkan _MENU_ entri",
                zeroRecords: "Data tidak ditemukan",
                info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
                infoEmpty: "Tidak ada data",
                infoFiltered: "(disaring dari _MAX_ total entri)"
            }
        });
    });
</script>
@endpush
