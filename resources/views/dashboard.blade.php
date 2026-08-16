@extends('layouts.admin')

@section('title', 'Dashboard | Indeks Desa')
@section('breadcrumb', 'Dashboard')
@section('content')
    <div class="page-heading"><div><h1>Dashboard</h1><p>Ringkasan pengisian Indeks Desa Tahun 2026.</p></div><a class="button button-primary" href="{{ route('kuesioner') }}">Isi Kuesioner</a></div>
    <section class="stat-grid">
        <article><span>STATUS PENGISIAN</span><strong>Dalam Proses</strong><small>Perbarui data untuk melanjutkan</small></article>
        <article><span>PROGRES KUESIONER</span><strong>0%</strong><div class="progress"><i style="width:0%"></i></div></article>
        <article><span>TAHUN PENDATAAN</span><strong>2026</strong><small>Indeks Desa</small></article>
        <article><span>WILAYAH</span><strong>Gudangharjo</strong><small>Kec. Paranggupito</small></article>
    </section>
    <section class="surface dashboard-welcome"><span class="eyebrow">SELAMAT DATANG</span><h2>Lengkapi data Indeks Desa</h2><p>Gunakan menu Kuesioner untuk mengisi data desa. Data yang hanya satu kali diisi disajikan sebagai formulir detail, sedangkan data berulang dikelola sebagai tabel.</p><a class="button button-primary" href="{{ route('kuesioner') }}">Buka Kuesioner</a></section>
@endsection
