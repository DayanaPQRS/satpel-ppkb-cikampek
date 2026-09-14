<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Individual;
use App\Models\PusRecord;

class PusController extends Controller
{
    public function show(Individual $pus)
    {
        $individual = $pus->load(['family.headIndividual', 'classifications.program', 'pusRecord', 'kbRecord']);
        
        $pusClassification = $individual->classifications->where('program.code', 'PUS')->first();
        if (!$pusClassification) {
            abort(404, 'Individual is not classified as PUS');
        }

        return view('kader.pus.show', compact('individual', 'pusClassification'));
    }

    public function edit(Individual $pus)
    {
        $individual = $pus->load(['family.headIndividual', 'classifications.program', 'pusRecord']);
        $pusClassification = $individual->classifications->where('program.code', 'PUS')->first();
        if (!$pusClassification) {
            abort(404);
        }

        return view('kader.pus.edit', compact('individual', 'pusClassification'));
    }

    public function update(Request $request, Individual $pus)
    {
        $request->validate([
            'wife_age' => 'required|integer|min:10',
            'number_of_children' => 'required|integer|min:0',
            'wants_children' => 'required|boolean',
        ]);

        $pusClassification = $pus->classifications()->whereHas('program', function($q) {
            $q->where('code', 'PUS');
        })->first();

        if (!$pusClassification) {
            abort(404);
        }

        PusRecord::updateOrCreate(
            ['classification_id' => $pusClassification->id],
            [
                'wife_age' => $request->wife_age,
                'number_of_children' => $request->number_of_children,
                'wants_children' => $request->wants_children,
            ]
        );

        return redirect()->route('kader.pus.show', $pus)
            ->with('success', 'Data PUS berhasil diperbarui.');
    }
}
