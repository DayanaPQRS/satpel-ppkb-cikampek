@extends('layouts.auth') @section('title', 'Pendaftaran Kader - Langkah 3')
@section('content')
<div class="mb-lg">
    <h2 class="font-headline-lg text-headline-lg text-on-surface mb-sm">
        Alamat Lengkap
    </h2>
    <p class="font-body-md text-body-md text-on-surface-variant">
        Lengkapi data alamat domisili Anda saat ini.
    </p>
</div>

<div
    class="bg-surface-container-lowest border border-outline-variant p-lg md:p-xl rounded-DEFAULT shadow-sm"
>
    <form
        action="{{ route('kader.register.step3.post') }}"
        method="POST"
        class="space-y-lg"
    >
        @csrf

        <div>
            <label
                class="block font-label-md text-label-md text-on-surface mb-xs"
                for="address"
                >Alamat Domisili</label
            >
            <textarea
                class="w-full border-outline-variant focus:border-primary focus:ring-primary focus:ring-1 rounded-DEFAULT p-sm font-body-md text-body-md bg-surface-bright transition-colors"
                id="address"
                name="address"
                required
            >
{{ old('address', session('kader_registration.step3.address')) }}</textarea>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-lg">
            <div>
                <label
                    class="block font-label-md text-label-md text-on-surface mb-xs"
                    for="village"
                    >Desa/Kelurahan</label
                >
                <input
                    class="w-full border-outline-variant focus:border-primary focus:ring-primary focus:ring-1 rounded-DEFAULT p-sm font-body-md text-body-md bg-surface-bright transition-colors"
                    id="village"
                    name="village"
                    value="{{ old('village', session('kader_registration.step3.village')) }}"
                    required
                    type="text"
                />
            </div>
            <div class="grid grid-cols-2 gap-sm">
                <div>
                    <label
                        class="block font-label-md text-label-md text-on-surface mb-xs"
                        for="rt"
                        >RT</label
                    >
                    <input
                        class="w-full border-outline-variant focus:border-primary focus:ring-primary focus:ring-1 rounded-DEFAULT p-sm font-body-md text-body-md bg-surface-bright transition-colors"
                        id="rt"
                        name="rt"
                        value="{{ old('rt', session('kader_registration.step3.rt')) }}"
                        required
                        type="text"
                    />
                </div>
                <div>
                    <label
                        class="block font-label-md text-label-md text-on-surface mb-xs"
                        for="rw"
                        >RW</label
                    >
                    <input
                        class="w-full border-outline-variant focus:border-primary focus:ring-primary focus:ring-1 rounded-DEFAULT p-sm font-body-md text-body-md bg-surface-bright transition-colors"
                        id="rw"
                        name="rw"
                        value="{{ old('rw', session('kader_registration.step3.rw')) }}"
                        required
                        type="text"
                    />
                </div>
            </div>
        </div>

        <div
            class="pt-md border-t border-outline-variant mt-xl flex items-center justify-between gap-md"
        >
            <a
                href="{{ route('kader.register.step2') }}"
                class="font-label-md text-on-surface-variant hover:text-primary transition-colors flex items-center gap-xs"
            >
                <span class="material-symbols-outlined text-[18px]"
                    >arrow_back</span
                >
                Kembali
            </a>
            <button
                class="bg-primary-container hover:bg-primary-container/90 text-on-primary font-label-md py-sm px-xl rounded-DEFAULT transition-colors flex items-center gap-xs"
                type="submit"
            >
                Selanjutnya
                <span class="material-symbols-outlined text-[18px]"
                    >arrow_forward</span
                >
            </button>
        </div>
    </form>
</div>
@endsection
