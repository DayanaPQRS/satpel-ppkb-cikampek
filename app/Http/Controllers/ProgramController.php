<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index()
    {
        return view('public.program.index');
    }

    public function show($program)
    {
        return view('public.program.show', compact('program'));
    }
}
