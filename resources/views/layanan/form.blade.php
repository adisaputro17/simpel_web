@csrf
@if(isset($layanan))
    @method('PUT')
@endif

<p>
    <label>Nama:</label><br>
    <input type="text" name="nama" value="{{ old('nama', $layanan->nama ?? '') }}">
</p>

<p>
    <label>Jenis:</label><br>
    <select name="jenis">
        <option value="internal" {{ old('jenis', $layanan->jenis ?? '') == 'internal' ? 'selected' : '' }}>Internal</option>
        <option value="eksternal" {{ old('jenis', $layanan->jenis ?? '') == 'eksternal' ? 'selected' : '' }}>Eksternal</option>
    </select>
</p>

<p>
    <label>Tahun:</label><br>
    <input type="number" name="tahun" value="{{ old('tahun', $layanan->tahun ?? '2025') }}">
</p>

<hr>
<p><strong>Jumlah Produk per Bulan:</strong></p>
@for($i = 1; $i <= 12; $i++)
    @php $b = str_pad($i, 2, '0', STR_PAD_LEFT); @endphp
    <p>
        <label>Bulan {{ $b }}:</label><br>
        <input type="number" name="bulan_{{ $b }}" value="{{ old("bulan_$b", $layanan["bulan_$b"] ?? 0) }}">
    </p>
@endfor

<button type="submit">{{ isset($layanan) ? 'Update' : 'Simpan' }}</button>
