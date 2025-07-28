<p>
    <label for="nip">Pegawai:</label><br>
    <select name="nip" id="nip">
        @foreach($bawahan as $b)
            <option value="{{ $b->nip }}" {{ old('nip', $item->nip ?? '') == $b->nip ? 'selected' : '' }}>
                {{ $b->nama }} ({{ $b->nip }})
            </option>
        @endforeach
    </select>
</p>

<p>
    <label for="tanggal">Tanggal:</label><br>
    <input type="date" name="tanggal" value="{{ old('tanggal', $item->tanggal ?? '') }}" required>
</p>

<p>
    <label for="jam_mulai">Jam Mulai:</label><br>
    <input type="time" name="jam_mulai" value="{{ old('jam_mulai', $item->jam_mulai ?? '') }}" required>
</p>

<p>
    <label for="jam_selesai">Jam Selesai:</label><br>
    <input type="time" name="jam_selesai" value="{{ old('jam_selesai', $item->jam_selesai ?? '') }}" required>
</p>

<p>
    <label for="keterangan">Keterangan:</label><br>
    <textarea name="keterangan">{{ old('keterangan', $item->keterangan ?? '') }}</textarea>
</p>

<button type="submit">Simpan</button>
<a href="{{ route('tugas_tambahan.index') }}">Kembali</a>
