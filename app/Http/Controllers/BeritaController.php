<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        return view('public.berita.index');
    }

    public function show($berita)
    {
        return view('public.berita.show', compact('berita'));
    }
}
