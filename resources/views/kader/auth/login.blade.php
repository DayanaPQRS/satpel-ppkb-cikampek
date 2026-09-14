@extends('layouts.auth') @section('title', 'Login Kader') @section('content')
<div class="mb-lg">
    <h2 class="font-headline-lg text-headline-lg text-on-surface mb-sm">
        Masuk sebagai Kader
    </h2>
    <p class="font-body-md text-body-md text-on-surface-variant">
        Silakan masukkan email dan password Anda untuk masuk ke sistem.
    </p>
</div>

<div
    class="bg-surface-container-lowest border border-outline-variant p-lg md:p-xl rounded-DEFAULT shadow-sm"
>
    <form
        action="{{ route('kader.login.post') }}"
        method="POST"
        class="space-y-lg"
    >
        @csrf

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
                value="{{ old('email') }}"
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
                for="password"
                >Password</label
            >
            <input
                class="w-full border-outline-variant focus:border-primary focus:ring-primary focus:ring-1 rounded-DEFAULT p-sm pr-10 font-body-md text-body-md bg-surface-bright transition-colors"
                id="password"
                name="password"
                placeholder="Masukkan password"
                required
                type="password"
            />
        </div>

        <div
            class="pt-md border-t border-outline-variant mt-xl flex flex-col md:flex-row items-center justify-between gap-md"
        >
            <a
                class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors order-2 md:order-1"
                href="{{ route('kader.register.step1') }}"
            >
                Belum punya akun?
                <span class="font-bold text-primary underline">Daftar</span>
            </a>
            <button
                class="w-full md:w-auto bg-primary-container hover:bg-primary-container/90 text-on-primary font-label-md text-label-md py-sm px-xl rounded-DEFAULT transition-colors order-1 md:order-2 flex items-center justify-center gap-xs"
                type="submit"
            >
                Masuk
                <span class="material-symbols-outlined text-[18px]"
                    >arrow_forward</span
                >
            </button>
        </div>
    </form>
</div>
@endsection
