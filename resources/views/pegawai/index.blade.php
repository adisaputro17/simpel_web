@extends('layouts.app')
@section('content')
<h2>Data Pegawai</h2>
<a href="{{ route('pegawai.create') }}">Tambah Pegawai</a>
<table border="1">
<tr><th>NIP</th><th>Nama</th><th>Atasan</th><th>Aksi</th></tr>
@foreach($pegawais as $p)
<tr>
<td>{{ $p->nip }}</td>
<td>{{ $p->nama }}</td>
<td>{{ $p->atasan->nama ?? '-' }}</td>
<td>
    <a href="{{ route('pegawai.edit', $p->nip) }}">Edit</a>
    <form action="{{ route('pegawai.destroy', $p->nip) }}" method="POST" style="display:inline">
        @csrf @method('DELETE')
        <button type="submit">Hapus</button>
    </form>
</td>
</tr>
@endforeach
</table>
@endsection