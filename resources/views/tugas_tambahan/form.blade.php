<div class="form-group">
    <label for="nip">Pegawai</label>
    <select name="nip" id="nip" class="form-control select2" required>
        <option value="">-- Pilih Pegawai --</option>
        @foreach($bawahan as $b)
            <option value="{{ $b->nip }}" {{ old('nip', $item->nip ?? '') == $b->nip ? 'selected' : '' }}>
                {{ $b->nama }} ({{ $b->nip }})
            </option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="tanggal">Tanggal</label>
    <input type="date" name="tanggal" class="form-control" value="{{ old('tanggal', $item->tanggal ?? '') }}" required>
</div>

<div class="form-group">
    <label for="jam_mulai">Jam Mulai</label>
    <input type="time" name="jam_mulai" class="form-control" value="{{ old('jam_mulai', $item->jam_mulai ?? '') }}" required>
</div>

<div class="form-group">
    <label for="jam_selesai">Jam Selesai</label>
    <input type="time" name="jam_selesai" class="form-control" value="{{ old('jam_selesai', $item->jam_selesai ?? '') }}" required>
</div>

<div class="form-group">
    <label for="keterangan">Keterangan</label>
    <textarea name="keterangan" class="form-control" rows="3" required>{{ old('keterangan', $item->keterangan ?? '') }}</textarea>
</div>
