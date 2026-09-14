@extends('layouts.auth')

@section('title', 'Pendaftaran Kader - Langkah 4')

@section('content')
<div class="mb-lg">
    <h2 class="font-headline-lg text-headline-lg text-on-surface mb-sm">Profil Tambahan</h2>
    <p class="font-body-md text-body-md text-on-surface-variant">Lengkapi data pendidikan dan pekerjaan Anda.</p>
</div>

<div class="bg-surface-container-lowest border border-outline-variant p-lg md:p-xl rounded-DEFAULT shadow-sm">
    <form action="{{ route('kader.register.step4.post') }}" method="POST" class="space-y-lg">
        @csrf
        
        <div>
            <label class="block font-label-md text-label-md text-on-surface mb-xs" for="education">Pendidikan Terakhir</label>
            <select class="w-full border-outline-variant focus:border-primary focus:ring-primary focus:ring-1 rounded-DEFAULT p-sm font-body-md text-body-md bg-surface-bright transition-colors" id="education" name="education" required>
                <option value="">Pilih Pendidikan</option>
                <option value="SD" {{ old('education', session('kader_registration.step4.education')) == 'SD' ? 'selected' : '' }}>SD Sederajat</option>
                <option value="SMP" {{ old('education', session('kader_registration.step4.education')) == 'SMP' ? 'selected' : '' }}>SMP Sederajat</option>
                <option value="SMA" {{ old('education', session('kader_registration.step4.education')) == 'SMA' ? 'selected' : '' }}>SMA Sederajat</option>
                <option value="D3" {{ old('education', session('kader_registration.step4.education')) == 'D3' ? 'selected' : '' }}>Diploma 3</option>
                <option value="S1" {{ old('education', session('kader_registration.step4.education')) == 'S1' ? 'selected' : '' }}>S1</option>
                <option value="S2/S3" {{ old('education', session('kader_registration.step4.education')) == 'S2/S3' ? 'selected' : '' }}>S2/S3</option>
            </select>
        </div>

        <div>
            <label class="block font-label-md text-label-md text-on-surface mb-xs" for="occupation">Pekerjaan</label>
            <input class="w-full border-outline-variant focus:border-primary focus:ring-primary focus:ring-1 rounded-DEFAULT p-sm font-body-md text-body-md bg-surface-bright transition-colors" id="occupation" name="occupation" value="{{ old('occupation', session('kader_registration.step4.occupation')) }}" required type="text"/>
        </div>

        <div>
            <label class="block font-label-md text-label-md text-on-surface mb-xs" for="marital_status">Status Perkawinan</label>
            <select class="w-full border-outline-variant focus:border-primary focus:ring-primary focus:ring-1 rounded-DEFAULT p-sm font-body-md text-body-md bg-surface-bright transition-colors" id="marital_status" name="marital_status" required>
                <option value="">Pilih Status</option>
                <option value="Belum Kawin" {{ old('marital_status', session('kader_registration.step4.marital_status')) == 'Belum Kawin' ? 'selected' : '' }}>Belum Kawin</option>
                <option value="Kawin" {{ old('marital_status', session('kader_registration.step4.marital_status')) == 'Kawin' ? 'selected' : '' }}>Kawin</option>
                <option value="Cerai Hidup" {{ old('marital_status', session('kader_registration.step4.marital_status')) == 'Cerai Hidup' ? 'selected' : '' }}>Cerai Hidup</option>
                <option value="Cerai Mati" {{ old('marital_status', session('kader_registration.step4.marital_status')) == 'Cerai Mati' ? 'selected' : '' }}>Cerai Mati</option>
            </select>
        </div>

        <div class="pt-md border-t border-outline-variant mt-xl flex items-center justify-between gap-md">
            <a href="{{ route('kader.register.step3') }}" class="font-label-md text-on-surface-variant hover:text-primary transition-colors flex items-center gap-xs">
                <span class="material-symbols-outlined text-[18px]">arrow_back</span> Kembali
            </a>
            <button class="bg-primary-container hover:bg-primary-container/90 text-on-primary font-label-md py-sm px-xl rounded-DEFAULT transition-colors flex items-center gap-xs" type="submit">
                Selanjutnya <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
            </button>
        </div>
    </form>
</div>
@endsection
