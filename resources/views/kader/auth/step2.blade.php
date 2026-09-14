@extends('layouts.auth')

@section('title', 'Pendaftaran Kader - Langkah 2')

@section('content')
<!-- Progress Indicator -->
<div class="mb-xl">
    <p class="font-caption text-caption text-on-surface-variant uppercase tracking-wider mb-sm">Langkah 2 dari 6</p>
    <div class="flex items-center gap-sm overflow-x-auto pb-sm hide-scrollbar">
        <div class="flex items-center opacity-50">
            <div class="w-8 h-8 rounded-full border border-outline-variant text-on-surface font-label-md text-label-md flex items-center justify-center">01</div>
        </div>
        <div class="w-8 h-[2px] bg-outline-variant flex-shrink-0 mx-sm opacity-50"></div>
        <div class="flex items-center">
            <div class="w-8 h-8 rounded-full bg-primary-container text-on-primary font-label-md text-label-md flex items-center justify-center font-bold">02</div>
            <span class="ml-sm font-label-md text-label-md text-primary font-bold whitespace-nowrap hidden sm:inline">Identitas</span>
        </div>
        <div class="w-8 h-[2px] bg-outline-variant flex-shrink-0 mx-sm"></div>
        <div class="flex items-center opacity-50">
            <div class="w-8 h-8 rounded-full border border-outline-variant text-on-surface font-label-md text-label-md flex items-center justify-center">03</div>
        </div>
        <div class="w-8 h-[2px] bg-outline-variant flex-shrink-0 mx-sm opacity-50"></div>
        <div class="flex items-center opacity-50">
            <div class="w-8 h-8 rounded-full border border-outline-variant text-on-surface font-label-md text-label-md flex items-center justify-center">04</div>
        </div>
        <div class="w-8 h-[2px] bg-outline-variant flex-shrink-0 mx-sm opacity-50"></div>
        <div class="flex items-center opacity-50">
            <div class="w-8 h-8 rounded-full border border-outline-variant text-on-surface font-label-md text-label-md flex items-center justify-center">05</div>
        </div>
        <div class="w-8 h-[2px] bg-outline-variant flex-shrink-0 mx-sm opacity-50"></div>
        <div class="flex items-center opacity-50">
            <div class="w-8 h-8 rounded-full border border-outline-variant text-on-surface font-label-md text-label-md flex items-center justify-center">06</div>
        </div>
    </div>
</div>

<div class="mb-lg">
    <h2 class="font-headline-lg text-headline-lg text-on-surface mb-sm">Identitas Pribadi</h2>
    <p class="font-body-md text-body-md text-on-surface-variant">Lengkapi data diri Anda sesuai dengan identitas resmi (KTP).</p>
</div>

<div class="bg-surface-container-lowest border border-outline-variant p-lg md:p-xl rounded-DEFAULT shadow-sm">
    <form action="{{ route('kader.register.step2.post') }}" method="POST" class="space-y-lg">
        @csrf
        
        <div>
            <label class="block font-label-md text-label-md text-on-surface mb-xs" for="nik">Nomor Induk Kependudukan (NIK)</label>
            <input class="w-full border-outline-variant focus:border-primary focus:ring-primary focus:ring-1 rounded-DEFAULT p-sm font-body-md text-body-md bg-surface-bright transition-colors" id="nik" name="nik" value="{{ old('nik', session('kader_registration.step2.nik')) }}" placeholder="16 digit NIK" required type="text"/>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-lg">
            <div>
                <label class="block font-label-md text-label-md text-on-surface mb-xs" for="birth_place">Tempat Lahir</label>
                <input class="w-full border-outline-variant focus:border-primary focus:ring-primary focus:ring-1 rounded-DEFAULT p-sm font-body-md text-body-md bg-surface-bright transition-colors" id="birth_place" name="birth_place" value="{{ old('birth_place', session('kader_registration.step2.birth_place')) }}" placeholder="Contoh: Karawang" required type="text"/>
            </div>
            <div>
                <label class="block font-label-md text-label-md text-on-surface mb-xs" for="birth_date">Tanggal Lahir</label>
                <input class="w-full border-outline-variant focus:border-primary focus:ring-primary focus:ring-1 rounded-DEFAULT p-sm font-body-md text-body-md bg-surface-bright transition-colors" id="birth_date" name="birth_date" value="{{ old('birth_date', session('kader_registration.step2.birth_date')) }}" required type="date"/>
            </div>
        </div>

        <div>
            <label class="block font-label-md text-label-md text-on-surface mb-xs" for="gender">Jenis Kelamin</label>
            <select class="w-full border-outline-variant focus:border-primary focus:ring-primary focus:ring-1 rounded-DEFAULT p-sm font-body-md text-body-md bg-surface-bright transition-colors" id="gender" name="gender" required>
                <option value="">Pilih Jenis Kelamin</option>
                <option value="Perempuan" {{ old('gender', session('kader_registration.step2.gender')) == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                <option value="Laki-laki" {{ old('gender', session('kader_registration.step2.gender')) == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
            </select>
        </div>

        <div class="pt-md border-t border-outline-variant mt-xl flex items-center justify-between gap-md">
            <a href="{{ route('kader.register.step1') }}" class="font-label-md text-on-surface-variant hover:text-primary transition-colors flex items-center gap-xs">
                <span class="material-symbols-outlined text-[18px]">arrow_back</span> Kembali
            </a>
            <button class="bg-primary-container hover:bg-primary-container/90 text-on-primary font-label-md py-sm px-xl rounded-DEFAULT transition-colors flex items-center gap-xs" type="submit">
                Selanjutnya <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
            </button>
        </div>
    </form>
</div>
@endsection
