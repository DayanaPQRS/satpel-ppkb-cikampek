<?php

namespace App\Http\Controllers;

use App\Models\Individual;
use App\Models\Program;
use App\Models\Classification;
use Illuminate\Http\Request;

class ClassificationController extends Controller
{
    public function create(Individual $individual)
    {
        $programs = Program::all();
        $activeClassifications = $individual->classifications()->with('program')->get();
        $activeProgramIds = $activeClassifications->pluck('program_id')->toArray();
        
        return view('kader.classification.create', compact('individual', 'programs', 'activeClassifications', 'activeProgramIds'));
    }

    public function store(Request $request, Individual $individual)
    {
        $request->validate([
            'program_ids' => 'required|array',
            'program_ids.*' => 'exists:programs,id',
        ]);

        $kaderId = auth()->id();
        $now = now()->toDateString();
        
        $count = 0;
        foreach ($request->program_ids as $programId) {
            // Check if already active
            $exists = Classification::where('individual_id', $individual->id)
                ->where('program_id', $programId)
                ->where('status', 'active')
                ->exists();
                
            if (!$exists) {
                Classification::create([
                    'individual_id' => $individual->id,
                    'program_id' => $programId,
                    'kader_id' => $kaderId,
                    'status' => 'active',
                    'recorded_at' => $now,
                ]);
                $count++;
            }
        }

        return redirect()->route('kader.individual.show', $individual)
            ->with('success', "$count Klasifikasi baru berhasil disimpan ke profil {$individual->name}.");
    }
}
