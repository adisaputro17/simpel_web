<p>
    <label for="nip">Pegawai:</label><br>
    <select name="nip" id="nip" required>
        @foreach($bawahan as $b)
            <option value="{{ $b->nip }}" {{ old('nip', $izinKeluar->nip ?? '') == $b->nip ? 'selected' : '' }}>
                {{ $b->nama }} ({{ $b->nip }})
            </option>
        @endforeach
    </select>
</p>

<p>
    <label for="tanggal">Tanggal:</label><br>
    <input type="date" name="tanggal" id="tanggal" value="{{ old('tanggal', $izinKeluar->tanggal ?? '') }}" required>
</p>

<p>
    <label for="jam_keluar">Jam Keluar:</label><br>
    <input type="time" name="jam_keluar" id="jam_keluar" value="{{ old('jam_keluar', $izinKeluar->jam_keluar ?? '') }}" required>
</p>

<p>
    <label for="jam_kembali">Jam Kembali:</label><br>
    <input type="time" name="jam_kembali" id="jam_kembali" value="{{ old('jam_kembali', $izinKeluar->jam_kembali ?? '') }}" required>
</p>

<p>
    <label for="keterangan">Keterangan:</label><br>
    <textarea name="keterangan" id="keterangan" required>{{ old('keterangan', $izinKeluar->keterangan ?? '') }}</textarea>
</p>

<button type="submit">Simpan</button>
<a href="{{ route('izin_keluar.index') }}">Kembali</a>
