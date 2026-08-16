<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PortalController extends Controller
{
    public function login(): View
    {
        return view('auth.login');
    }

    public function dashboard(): View
    {
        return view('dashboard');
    }

    public function kuesioner(): View
    {
        return view('kuesioner', [
            'singleForms' => ['Identitas Desa', 'Profil Desa', 'Dokumen Properties'],
            'multipleForms' => ['Potensi Desa', 'Lembaga Desa', 'Sarana Prasarana'],
        ]);
    }
}
