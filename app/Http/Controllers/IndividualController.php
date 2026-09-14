<?php

namespace App\Http\Controllers;

use App\Models\Individual;
use Illuminate\Http\Request;

class IndividualController extends Controller
{
    public function index(Request $request)
    {
        $query = Individual::with('family')->latest();
        
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('nik', 'like', "%{$search}%");
            });
        }
        
        $individuals = $query->paginate(10)->withQueryString();
        return view('kader.individual.index', compact('individuals'));
    }

    public function show(Individual $individual)
    {
        $individual->load(['family.headIndividual']);
        return view('kader.individual.show', compact('individual'));
    }

    public function edit(Individual $individual)
    {
        return view('kader.individual.edit', compact('individual'));
    }

    public function update(Request $request, Individual $individual)
    {
        // update logic
    }
}
