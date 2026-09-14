<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KaderProfile;
use App\Models\User;
use Illuminate\Http\Request;

class VerificationController extends Controller
{
    public function index(Request $request)
    {
        $status = $request->query('status', 'pending');

        $kaders = KaderProfile::with('user')
            ->when($status !== 'all', function ($query) use ($status) {
                return $query->where('status', $status);
            })
            ->latest()
            ->paginate(10);

        $counts = [
            'all' => KaderProfile::count(),
            'pending' => KaderProfile::where('status', 'pending')->count(),
            'approved' => KaderProfile::where('status', 'approved')->count(),
            'rejected' => KaderProfile::where('status', 'rejected')->count(),
        ];

        return view('admin.verification.index', compact('kaders', 'status', 'counts'));
    }

    public function approve($id)
    {
        $kader = KaderProfile::findOrFail($id);
        $kader->update(['status' => 'approved']);

        return back()->with('success', 'Akun Kader berhasil diverifikasi dan disetujui.');
    }

    public function reject($id)
    {
        $kader = KaderProfile::findOrFail($id);
        $kader->update(['status' => 'rejected']);

        return back()->with('success', 'Pendaftaran Kader telah ditolak.');
    }
}
