@extends('layouts.auth') @section('title', 'Pendaftaran Kader - Langkah 1')
@section('content')
<!-- Progress Indicator -->
<div class="mb-xl">
    <p
        class="font-caption text-caption text-on-surface-variant uppercase tracking-wider mb-sm"
    >
        Langkah 1 dari 6
    </p>
    <div class="flex items-center gap-sm overflow-x-auto pb-sm hide-scrollbar">
        <div class="flex items-center">
            <div
                class="w-8 h-8 rounded-full bg-primary-container text-on-primary font-label-md text-label-md flex items-center justify-center font-bold"
            >
                01
            </div>
            <span
                class="ml-sm font-label-md text-label-md text-primary font-bold whitespace-nowrap hidden sm:inline"
                >Akun</span
            >
        </div>
        <div class="w-8 h-[2px] bg-outline-variant flex-shrink-0 mx-sm"></div>
        <div class="flex items-center opacity-50">
            <div
                class="w-8 h-8 rounded-full border border-outline-variant text-on-surface font-label-md text-label-md flex items-center justify-center"
            >
                02
            </div>
            <span
                class="ml-sm font-label-md text-label-md text-on-surface whitespace-nowrap hidden sm:inline"
                >Identitas</span
            >
        </div>
        <div
            class="w-8 h-[2px] bg-outline-variant flex-shrink-0 mx-sm opacity-50"
        ></div>
        <div class="flex items-center opacity-50">
            <div
                class="w-8 h-8 rounded-full border border-outline-variant text-on-surface font-label-md text-label-md flex items-center justify-center"
            >
                03
            </div>
        </div>
        <div
            class="w-8 h-[2px] bg-outline-variant flex-shrink-0 mx-sm opacity-50"
        ></div>
        <div class="flex items-center opacity-50">
            <div
                class="w-8 h-8 rounded-full border border-outline-variant text-on-surface font-label-md text-label-md flex items-center justify-center"
            >
                04
            </div>
        </div>
        <div
            class="w-8 h-[2px] bg-outline-variant flex-shrink-0 mx-sm opacity-50"
        ></div>
        <div class="flex items-center opacity-50">
            <div
                class="w-8 h-8 rounded-full border border-outline-variant text-on-surface font-label-md text-label-md flex items-center justify-center"
            >
                05
            </div>
        </div>
        <div
            class="w-8 h-[2px] bg-outline-variant flex-shrink-0 mx-sm opacity-50"
        ></div>
        <div class="flex items-center opacity-50">
            <div
                class="w-8 h-8 rounded-full border border-outline-variant text-on-surface font-label-md text-label-md flex items-center justify-center"
            >
                06
            </div>
        </div>
    </div>
</div>

<!-- Form Header -->
<div class="mb-lg">
    <h2 class="font-headline-lg text-headline-lg text-on-surface mb-sm">
        Buat Akun Kader
    </h2>
    <p class="font-body-md text-body-md text-on-surface-variant">
        Daftarkan akun Anda untuk mengajukan diri sebagai kader Satpel PPKB
        Kecamatan Cikampek.
    </p>
</div>

<!-- Form Container -->
<div
    class="bg-surface-container-lowest border border-outline-variant p-lg md:p-xl rounded-DEFAULT shadow-sm"
>
    <form
        action="{{ route('kader.register.step1.post') }}"
        method="POST"
        class="space-y-lg"
    >
        @csrf

        <!-- Nama Lengkap -->
        <div>
            <label
                class="block font-label-md text-label-md text-on-surface mb-xs"
                for="name"
                >Nama Lengkap</label
            >
            <input
                class="w-full border-outline-variant focus:border-primary focus:ring-primary focus:ring-1 rounded-DEFAULT p-sm font-body-md text-body-md bg-surface-bright transition-colors"
                id="name"
                name="name"
                value="{{ old('name', session('kader_registration.step1.name')) }}"
                placeholder="Masukkan nama lengkap sesuai KTP"
                required
                type="text"
            />
            @error('name')
            <p class="text-error font-caption mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Email & WhatsApp Row -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-lg">
            <div>
                <label
                    class="block font-label-md text-label-md text-on-surface mb-xs"
                    for="email"
                    >Email Aktif</label
                >
                <input
                    class="w-full border-outline-variant focus:border-primary focus:ring-primary focus:ring-1 rounded-DEFAULT p-sm font-body-md text-body-md bg-surface-bright transition-colors"
                    id="email"
                    name="email"
                    value="{{ old('email', session('kader_registration.step1.email')) }}"
                    placeholder="contoh@email.com"
                    required
                    type="email"
                />
                @error('email')
                <p class="text-error font-caption mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label
                    class="block font-label-md text-label-md text-on-surface mb-xs"
                    for="phone"
                    >Nomor WhatsApp</label
                >
                <div class="relative">
                    <span
                        class="absolute inset-y-0 left-0 flex items-center pl-sm text-on-surface-variant font-body-md text-body-md"
                        >+62</span
                    >
                    <input
                        class="w-full pl-12 border-outline-variant focus:border-primary focus:ring-primary focus:ring-1 rounded-DEFAULT p-sm font-body-md text-body-md bg-surface-bright transition-colors"
                        id="phone"
                        name="phone"
                        value="{{ old('phone', session('kader_registration.step1.phone')) }}"
                        placeholder="81234567890"
                        required
                        type="tel"
                    />
                </div>
                @error('phone')
                <p class="text-error font-caption mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <!-- Password -->
        <div>
            <label
                class="block font-label-md text-label-md text-on-surface mb-xs"
                for="password"
                >Password</label
            >
            <div class="relative">
                <input
                    class="w-full border-outline-variant focus:border-primary focus:ring-primary focus:ring-1 rounded-DEFAULT p-sm pr-10 font-body-md text-body-md bg-surface-bright transition-colors"
                    id="password"
                    name="password"
                    placeholder="Masukkan password"
                    required
                    type="password"
                />
            </div>
            @error('password')
            <p class="text-error font-caption mt-1">{{ $message }}</p>
            @enderror
            <p
                class="mt-xs font-caption text-caption text-on-surface-variant flex items-center gap-xs"
            >
                <span class="material-symbols-outlined text-[14px]">info</span>
                Gunakan password minimal 8 karakter.
            </p>
        </div>

        <!-- Konfirmasi Password -->
        <div>
            <label
                class="block font-label-md text-label-md text-on-surface mb-xs"
                for="password_confirmation"
                >Konfirmasi Password</label
            >
            <div class="relative">
                <input
                    class="w-full border-outline-variant focus:border-primary focus:ring-primary focus:ring-1 rounded-DEFAULT p-sm pr-10 font-body-md text-body-md bg-surface-bright transition-colors"
                    id="password_confirmation"
                    name="password_confirmation"
                    placeholder="Ulangi password"
                    required
                    type="password"
                />
            </div>
        </div>

        <!-- Submit Area -->
        <div
            class="pt-md border-t border-outline-variant mt-xl flex flex-col md:flex-row items-center justify-between gap-md"
        >
            <a
                class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors order-2 md:order-1"
                href="{{ route('kader.login') }}"
            >
                Sudah punya akun?
                <span class="font-bold text-primary underline">Masuk</span>
            </a>
            <button
                class="w-full md:w-auto bg-primary-container hover:bg-primary-container/90 text-on-primary font-label-md text-label-md py-sm px-xl rounded-DEFAULT transition-colors order-1 md:order-2 flex items-center justify-center gap-xs"
                type="submit"
            >
                Lanjutkan
                <span class="material-symbols-outlined text-[18px]"
                    >arrow_forward</span
                >
            </button>
        </div>
    </form>
</div>
@endsection
