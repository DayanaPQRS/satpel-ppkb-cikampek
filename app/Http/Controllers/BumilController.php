<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Individual;
use App\Models\BumilRecord;

class BumilController extends Controller
{
    public function show(Individual $bumil)
    {
        $individual = $bumil->load(['family.headIndividual', 'classifications.program', 'bumilRecord']);
        
        $bumilClassification = $individual->classifications->where('program.code', 'BUMIL')->first();
        if (!$bumilClassification) {
            abort(404, 'Individual is not classified as BUMIL');
        }

        return view('kader.bumil.show', compact('individual', 'bumilClassification'));
    }

    public function edit(Individual $bumil)
    {
        $individual = $bumil->load(['family.headIndividual', 'classifications.program', 'bumilRecord']);
        $bumilClassification = $individual->classifications->where('program.code', 'BUMIL')->first();
        if (!$bumilClassification) {
            abort(404);
        }

        return view('kader.bumil.edit', compact('individual', 'bumilClassification'));
    }

    public function update(Request $request, Individual $bumil)
    {
        $request->validate([
            'pregnancy_week' => 'required|integer|min:1|max:42',
            'estimated_due_date' => 'required|date',
            'health_facility' => 'nullable|string|max:255',
        ]);

        $bumilClassification = $bumil->classifications()->whereHas('program', function($q) {
            $q->where('code', 'BUMIL');
        })->first();

        if (!$bumilClassification) {
            abort(404);
        }

        BumilRecord::updateOrCreate(
            ['classification_id' => $bumilClassification->id],
            [
                'form_data' => [
                    'pregnancy_week' => $request->pregnancy_week,
                    'estimated_due_date' => $request->estimated_due_date,
                    'health_facility' => $request->health_facility,
                ],
            ]
        );

        return redirect()->route('kader.bumil.show', $bumil)
            ->with('success', 'Data Ibu Hamil berhasil diperbarui.');
    }
}
