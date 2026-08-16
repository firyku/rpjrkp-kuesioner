<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Indeks Desa')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/kemendesa.css') }}">
</head>
<body>
    <div class="portal-shell">
        <aside class="portal-sidebar">
            <a class="portal-brand" href="{{ route('dashboard') }}">
                <span class="brand-emblem">ID</span>
                <span><strong>Indeks Desa</strong><small>Kemendesa PDT</small></span>
            </a>
            <nav class="portal-nav" aria-label="Navigasi utama">
                <a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'is-active' : '' }}"><span>▦</span> Dashboard</a>
                <p>INDEKS DESA</p>
                <a href="{{ route('kuesioner') }}" class="{{ request()->routeIs('kuesioner') ? 'is-active' : '' }}"><span>☷</span> Kuesioner</a>
                <a href="#"><span>◫</span> Rekapitulasi</a>
                <a href="#"><span>◷</span> Monitoring</a>
                <p>PENGATURAN</p>
                <a href="#"><span>⚙</span> Profil Desa</a>
            </nav>
            <div class="portal-sidebar-footer">© {{ now()->year }} Kemendesa PDT</div>
        </aside>
        <main class="portal-main">
            <header class="portal-topbar">
                <button class="menu-button" type="button" aria-label="Buka menu">☰</button>
                <div class="portal-breadcrumb">@yield('breadcrumb', 'Dashboard')</div>
                <div class="portal-user"><span class="user-avatar">DG</span><span>Desa Gudangharjo</span>⌄</div>
            </header>
            <section class="portal-content">@yield('content')</section>
        </main>
    </div>
</body>
</html>
