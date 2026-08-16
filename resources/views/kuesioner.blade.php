@extends('layouts.admin')

@section('title', 'Kuesioner | Indeks Desa')
@section('breadcrumb', 'Indeks Desa / Kuesioner')
@section('content')
    <div class="page-heading"><div><span class="eyebrow">INDEKS DESA 2026</span><h1>Kuesioner Desa</h1><p>Isi dan simpan data sesuai kelompok pertanyaan.</p></div><button class="button button-outline" type="button">Ekspor Kuesioner</button></div>
    <div class="questionnaire-layout">
        <aside class="questionnaire-menu"><strong>Bagian Kuesioner</strong><a class="is-active" href="#identitas">Identitas Desa</a><a href="#profil">Profil Desa</a><a href="#potensi">Potensi Desa</a><a href="#lembaga">Lembaga Desa</a><a href="#sarana">Sarana Prasarana</a></aside>
        <div class="questionnaire-content">
            <section id="identitas" class="surface form-surface"><div class="surface-heading"><div><span class="eyebrow">INPUT TUNGGAL</span><h2>Identitas Desa</h2><p>Data ini hanya diisi satu kali dan tidak ditampilkan dalam tabel.</p></div><span class="status-pill">Belum disimpan</span></div><form class="detail-form"><label>Nama Desa<input name="nama_desa" value="Gudangharjo"></label><label>Kecamatan<input name="kecamatan" value="Paranggupito"></label><label>Kabupaten<input name="kabupaten" value="Wonogiri"></label><label>Provinsi<input name="provinsi" value="Jawa Tengah"></label><div class="form-actions"><button class="button button-primary" type="button">Simpan Perubahan</button></div></form></section>
            @foreach ($multipleForms as $form)
                <section id="{{ Str::slug($form) }}" class="surface table-surface"><div class="surface-heading"><div><span class="eyebrow">INPUT BERULANG</span><h2>{{ $form }}</h2><p>Gunakan tabel untuk menambah lebih dari satu data.</p></div><button class="button button-primary" type="button">+ Tambah Data</button></div><div class="data-table-wrap"><table><thead><tr><th>No.</th><th>Nama / Uraian</th><th>Keterangan</th><th>Status</th><th>Aksi</th></tr></thead><tbody><tr><td colspan="5" class="empty-state">Belum ada data. Klik “Tambah Data” untuk membuat entri baru.</td></tr></tbody></table></div></section>
            @endforeach
        </div>
    </div>
@endsection
