<div class="mb-3">
    <label for="nip" class="form-label">Pegawai</label>
    <select name="nip" id="nip" class="form-control select2">
        <option value="">-- Pilih Pegawai --</option>
        @foreach($pegawai as $p)
            <option value="{{ $p->nip }}" {{ old('nip', $item->nip ?? '') == $p->nip ? 'selected' : '' }}>
                {{ $p->nama }} ({{ $p->nip }})
            </option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label for="bulan" class="form-label">Bulan</label>
    <select name="bulan" id="bulan" class="form-control">
        @for ($i = 1; $i <= 12; $i++)
            <option value="{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}"
                {{ old('bulan', $item->bulan ?? '') == str_pad($i, 2, '0', STR_PAD_LEFT) ? 'selected' : '' }}>
                {{ str_pad($i, 2, '0', STR_PAD_LEFT) }}
            </option>
        @endfor
    </select>
</div>

<div class="mb-3">
    <label for="tahun" class="form-label">Tahun</label>
    <select name="tahun" id="tahun" class="form-control">
        <option value="2025" {{ old('tahun', $item->tahun ?? '') == '2025' ? 'selected' : '' }}>2025</option>
        <option value="2026" {{ old('tahun', $item->tahun ?? '') == '2026' ? 'selected' : '' }}>2026</option>
    </select>
</div>

<div class="mb-3">
    <label for="nilai" class="form-label">Nilai</label>
    <select name="nilai" id="nilai" class="form-control">
        @foreach([25,50,75,100] as $n)
            <option value="{{ $n }}" {{ old('nilai', $item->nilai ?? '') == $n ? 'selected' : '' }}>{{ $n }}</option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label for="keterangan" class="form-label">Keterangan</label>
    <textarea name="keterangan" id="keterangan" rows="3" class="form-control">{{ old('keterangan', $item->keterangan ?? '') }}</textarea>
</div>
