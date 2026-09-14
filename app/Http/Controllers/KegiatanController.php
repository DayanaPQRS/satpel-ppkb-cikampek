<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function index()
    {
        return view('public.kegiatan.index');
    }

    public function show($kegiatan)
    {
        return view('public.kegiatan.show', compact('kegiatan'));
    }
}
