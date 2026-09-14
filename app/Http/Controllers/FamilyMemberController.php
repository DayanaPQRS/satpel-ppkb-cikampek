<?php

namespace App\Http\Controllers;

use App\Models\Family;
use App\Models\Individual;
use Illuminate\Http\Request;
use App\Http\Requests\StoreFamilyMemberRequest;

class FamilyMemberController extends Controller
{
    public function create(Family $family)
    {
        return view('kader.family-member.create', compact('family'));
    }

    public function store(StoreFamilyMemberRequest $request, Family $family)
    {
        $data = $request->validated();
        $data['family_id'] = $family->id;
        
        $individual = Individual::create($data);

        return redirect()->route('kader.individual.show', $individual)->with('success', 'Anggota keluarga berhasil ditambahkan.');
    }

    public function show(Family $family, Individual $member)
    {
        return redirect()->route('kader.individual.show', $member);
    }

    public function edit(Family $family, Individual $member)
    {
        return view('kader.family-member.edit', compact('family', 'member'));
    }

    public function update(Request $request, Family $family, Individual $member)
    {
        // Add update logic here
    }

    public function destroy(Family $family, Individual $member)
    {
        $member->delete();
        return redirect()->route('kader.family.show', $family)->with('success', 'Anggota keluarga berhasil dihapus.');
    }
}
