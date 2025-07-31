<div class="mb-3">
    <label>Tanggal</label>
    <input type="date" name="tanggal" value="{{ old('tanggal', $item->tanggal ?? '') }}" class="form-control" required>
</div>
<div class="mb-3">
    <label>Bulan</label>
    <input type="text" name="bulan" value="{{ old('bulan', $item->bulan ?? '') }}" class="form-control" required>
</div>
<div class="mb-3">
    <label>Tahun</label>
    <input type="text" name="tahun" value="{{ old('tahun', $item->tahun ?? '') }}" class="form-control" required>
</div>
<div class="mb-3">
    <label>Jenis Layanan</label>
    <select name="jenis_layanan" class="form-control" required>
        <option value="internal" {{ old('jenis_layanan', $item->jenis_layanan ?? '') == 'internal' ? 'selected' : '' }}>Internal</option>
        <option value="eksternal" {{ old('jenis_layanan', $item->jenis_layanan ?? '') == 'eksternal' ? 'selected' : '' }}>Eksternal</option>
    </select>
</div>
<div class="mb-3">
    <label>Layanan</label>
    <select name="layanan_id" class="form-control" required>
        @foreach ($layanans as $layanan)
            <option value="{{ $layanan->id }}" {{ old('layanan_id', $item->layanan_id ?? '') == $layanan->id ? 'selected' : '' }}>{{ $layanan->nama }}</option>
        @endforeach
    </select>
</div>
<div class="mb-3">
    <label>Dari</label>
    <select name="dari" class="form-control">
        <option value="">-</option>
        @foreach ($pegawais as $pegawai)
            <option value="{{ $pegawai->nip }}" {{ old('dari', $item->dari ?? '') == $pegawai->nip ? 'selected' : '' }}>{{ $pegawai->nama }}</option>
        @endforeach
    </select>
</div>
<div class="mb-3">
    <label>Kepada</label>
    <select name="kepada" class="form-control" required>
        @foreach ($pegawais as $pegawai)
            <option value="{{ $pegawai->nip }}" {{ old('kepada', $item->kepada ?? '') == $pegawai->nip ? 'selected' : '' }}>{{ $pegawai->nama }}</option>
        @endforeach
    </select>
</div>
<div class="mb-3">
    <label>Jenis Permasalahan</label>
    <select name="jenis_permasalahan" class="form-control" required>
        <option value="internal" {{ old('jenis_permasalahan', $item->jenis_permasalahan ?? '') == 'internal' ? 'selected' : '' }}>Internal</option>
        <option value="eksternal" {{ old('jenis_permasalahan', $item->jenis_permasalahan ?? '') == 'eksternal' ? 'selected' : '' }}>Eksternal</option>
    </select>
</div>
<div class="mb-3">
    <label>Penjelasan Keluhan</label>
    <textarea name="deskripsi" class="form-control" required>{{ old('deskripsi', $item->deskripsi ?? '') }}</textarea>
</div>
<div class="mb-3">
    <button class="btn btn-primary">Simpan</button>
</div>