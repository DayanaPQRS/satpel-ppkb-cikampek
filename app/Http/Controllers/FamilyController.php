<?php

namespace App\Http\Controllers;

use App\Models\Family;
use Illuminate\Http\Request;
use App\Http\Requests\StoreFamilyRequest;
use App\Http\Requests\UpdateFamilyRequest;

class FamilyController extends Controller
{
    public function index()
    {
        $families = Family::with('headIndividual')->latest()->paginate(10);
        return view('kader.family.index', compact('families'));
    }

    public function create()
    {
        return view('kader.family.create');
    }

    public function store(StoreFamilyRequest $request)
    {
        // For phase 3 we just create the family record
        $family = Family::create($request->validated());
        
        // The detailed head of family (individual) will be created inside the service later
        return redirect()->route('kader.family.index')->with('success', 'Data keluarga berhasil ditambahkan.');
    }

    public function show(Family $family)
    {
        $family->load('individuals');
        return view('kader.family.show', compact('family'));
    }

    public function edit(Family $family)
    {
        return view('kader.family.edit', compact('family'));
    }

    public function update(UpdateFamilyRequest $request, Family $family)
    {
        $family->update($request->validated());
        return redirect()->route('kader.family.index')->with('success', 'Data keluarga berhasil diperbarui.');
    }

    public function destroy(Family $family)
    {
        $family->delete();
        return redirect()->route('kader.family.index')->with('success', 'Data keluarga berhasil dihapus.');
    }
}
