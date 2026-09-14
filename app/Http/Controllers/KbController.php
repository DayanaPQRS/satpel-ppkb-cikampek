<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Individual;
use App\Models\KbRecord;

class KbController extends Controller
{
    public function show(Individual $kb)
    {
        $individual = $kb->load(['family.headIndividual', 'classifications.program', 'kbRecord']);
        
        $kbClassification = $individual->classifications->where('program.code', 'KB')->first();
        if (!$kbClassification) {
            abort(404, 'Individual is not classified as KB');
        }

        return view('kader.kb.show', compact('individual', 'kbClassification'));
    }

    public function edit(Individual $kb)
    {
        $individual = $kb->load(['family.headIndividual', 'classifications.program', 'kbRecord']);
        $kbClassification = $individual->classifications->where('program.code', 'KB')->first();
        if (!$kbClassification) {
            abort(404);
        }

        return view('kader.kb.edit', compact('individual', 'kbClassification'));
    }

    public function update(Request $request, Individual $kb)
    {
        $request->validate([
            'method_used' => 'required|string|max:255',
            'start_date' => 'required|date',
            'provider_type' => 'required|string|max:255',
        ]);

        $kbClassification = $kb->classifications()->whereHas('program', function($q) {
            $q->where('code', 'KB');
        })->first();

        if (!$kbClassification) {
            abort(404);
        }

        KbRecord::updateOrCreate(
            ['classification_id' => $kbClassification->id],
            [
                'method_used' => $request->method_used,
                'start_date' => $request->start_date,
                'provider_type' => $request->provider_type,
            ]
        );

        return redirect()->route('kader.kb.show', $kb)
            ->with('success', 'Data Akseptor KB berhasil diperbarui.');
    }
}
