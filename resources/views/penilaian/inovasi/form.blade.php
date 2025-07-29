<p>
    <label>Pegawai:</label><br>
    <select name="nip">
        @foreach($pegawai as $p)
        <option value="{{ $p->nip }}" {{ old('nip', $item->nip ?? '') == $p->nip ? 'selected' : '' }}>
            {{ $p->nama }} ({{ $p->nip }})
        </option>
        @endforeach
    </select>
</p>
<p>
    <label>Bulan:</label><br>
    <select name="bulan">
        @for ($i = 1; $i <= 12; $i++)
            <option value="{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}"
                {{ old('bulan', $item->bulan ?? '') == str_pad($i, 2, '0', STR_PAD_LEFT) ? 'selected' : '' }}>
                {{ str_pad($i, 2, '0', STR_PAD_LEFT) }}
            </option>
        @endfor
    </select>
</p>
<p>
   <label>Tahun:</label><br>
    <select name="tahun">
        <option value="2025" {{ old('tahun', $item->tahun ?? '') == '2025' ? 'selected' : '' }}>2025</option>
        <option value="2026" {{ old('tahun', $item->tahun ?? '') == '2026' ? 'selected' : '' }}>2026</option>
    </select>
</p>
<p>
    <label>Nilai:</label><br>
    <select name="nilai">
        @foreach([25,50,75,100] as $n)
        <option value="{{ $n }}" {{ old('nilai', $item->nilai ?? '') == $n ? 'selected' : '' }}>{{ $n }}</option>
        @endforeach
    </select>
</p>
<p>
    <label>Keterangan:</label><br>
    <textarea name="keterangan">{{ old('keterangan', $item->keterangan ?? '') }}</textarea>
</p>
<button type="submit">Simpan</button>
<a href="{{ route('penilaian.index', 'inovasi') }}">Kembali</a>