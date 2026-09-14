@extends('layouts.admin')

@section('content')
<div class="max-w-7xl mx-auto space-y-6">
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
        <div>
            <h2 class="text-2xl font-bold text-gray-900">Verifikasi & Persetujuan Kader</h2>
            <p class="text-sm text-gray-500 mt-1">Kelola permohonan registrasi kader baru di 10 desa wilayah Satpel PPKB Cikampek.</p>
        </div>
    </div>

    <!-- Status Tabs -->
    <div class="flex items-center gap-2 border-b border-gray-200">
        <a href="{{ route('admin.verification.index', ['status' => 'pending']) }}" class="px-4 py-2.5 text-sm font-bold border-b-2 transition-colors {{ $status === 'pending' ? 'border-blue-600 text-blue-600 bg-blue-50/50' : 'border-transparent text-gray-500 hover:text-gray-900' }}">
            Menunggu Verifikasi ({{ $counts['pending'] }})
        </a>
        <a href="{{ route('admin.verification.index', ['status' => 'approved']) }}" class="px-4 py-2.5 text-sm font-bold border-b-2 transition-colors {{ $status === 'approved' ? 'border-blue-600 text-blue-600 bg-blue-50/50' : 'border-transparent text-gray-500 hover:text-gray-900' }}">
            Disetujui ({{ $counts['approved'] }})
        </a>
        <a href="{{ route('admin.verification.index', ['status' => 'rejected']) }}" class="px-4 py-2.5 text-sm font-bold border-b-2 transition-colors {{ $status === 'rejected' ? 'border-blue-600 text-blue-600 bg-blue-50/50' : 'border-transparent text-gray-500 hover:text-gray-900' }}">
            Ditolak ({{ $counts['rejected'] }})
        </a>
        <a href="{{ route('admin.verification.index', ['status' => 'all']) }}" class="px-4 py-2.5 text-sm font-bold border-b-2 transition-colors {{ $status === 'all' ? 'border-blue-600 text-blue-600 bg-blue-50/50' : 'border-transparent text-gray-500 hover:text-gray-900' }}">
            Semua ({{ $counts['all'] }})
        </a>
    </div>

    <!-- Table -->
    <div class="bg-white border border-gray-200 shadow-sm overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm text-gray-600">
                <thead class="bg-gray-50 text-gray-900 border-b border-gray-200 uppercase text-xs font-bold tracking-wider">
                    <tr>
                        <th class="px-6 py-4">Nama / Email</th>
                        <th class="px-6 py-4">NIK</th>
                        <th class="px-6 py-4">No. Telepon / WA</th>
                        <th class="px-6 py-4">Wilayah Tugas</th>
                        <th class="px-6 py-4">Status</th>
                        <th class="px-6 py-4 text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @forelse($kaders as $kader)
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-4">
                                <p class="font-bold text-gray-900">{{ $kader->user->name ?? '-' }}</p>
                                <p class="text-xs text-gray-500">{{ $kader->user->email ?? '-' }}</p>
                            </td>
                            <td class="px-6 py-4 font-mono text-xs">
                                {{ $kader->nik }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $kader->phone }}
                            </td>
                            <td class="px-6 py-4">
                                <p class="font-semibold text-gray-900">{{ $kader->village }}</p>
                                <p class="text-xs text-gray-500">{{ $kader->dusun }}</p>
                            </td>
                            <td class="px-6 py-4">
                                @if($kader->status === 'approved')
                                    <span class="inline-flex items-center px-2.5 py-1 text-xs font-bold bg-emerald-100 text-emerald-800">
                                        Disetujui
                                    </span>
                                @elseif($kader->status === 'rejected')
                                    <span class="inline-flex items-center px-2.5 py-1 text-xs font-bold bg-red-100 text-red-800">
                                        Ditolak
                                    </span>
                                @else
                                    <span class="inline-flex items-center px-2.5 py-1 text-xs font-bold bg-amber-100 text-amber-800">
                                        Pending
                                    </span>
                                @endif
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="inline-flex items-center gap-2 justify-end">
                                    @if($kader->status !== 'approved')
                                        <form action="{{ route('admin.verification.approve', $kader->id) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="px-3 py-1.5 bg-blue-600 text-white text-xs font-bold hover:bg-blue-700 transition-colors">
                                                Setujui
                                            </button>
                                        </form>
                                    @endif
                                    @if($kader->status !== 'rejected')
                                        <form action="{{ route('admin.verification.reject', $kader->id) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="px-3 py-1.5 bg-gray-100 text-red-600 border border-red-200 text-xs font-bold hover:bg-red-50 transition-colors">
                                                Tolak
                                            </button>
                                        </form>
                                    @endif
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-6 py-12 text-center text-gray-500">
                                <span class="material-symbols-outlined text-4xl text-gray-300 mb-2">inbox</span>
                                <p class="text-sm font-semibold">Tidak ada data kader dalam status ini.</p>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if($kaders->hasPages())
            <div class="px-6 py-4 border-t border-gray-200 bg-gray-50">
                {{ $kaders->links() }}
            </div>
        @endif
    </div>
</div>
@endsection
