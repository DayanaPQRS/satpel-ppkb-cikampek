@extends('layouts.auth') @section('title', 'Pendaftaran Kader - Langkah 6')
@section('content')
<div class="mb-lg">
    <h2 class="font-headline-lg text-headline-lg text-on-surface mb-sm">
        Unggah Berkas
    </h2>
    <p class="font-body-md text-body-md text-on-surface-variant">
        Unggah dokumen yang dibutuhkan untuk verifikasi akhir.
    </p>
</div>

<div
    class="bg-surface-container-lowest border border-outline-variant p-lg md:p-xl rounded-DEFAULT shadow-sm"
>
    <form
        action="{{ route('kader.register.submit') }}"
        method="POST"
        enctype="multipart/form-data"
        class="space-y-lg"
    >
        @csrf

        <div>
            <label
                class="block font-label-md text-label-md text-on-surface mb-xs"
                for="ktp_path"
                >Unggah KTP</label
            >
            <input
                class="w-full border-outline-variant focus:border-primary focus:ring-primary focus:ring-1 rounded-DEFAULT p-sm font-body-md text-body-md bg-surface-bright transition-colors"
                id="ktp_path"
                name="ktp_path"
                type="file"
                accept="image/*,.pdf"
            />
            <p class="font-caption text-on-surface-variant mt-1">
                Format: JPG, PNG, PDF (Max: 2MB)
            </p>
        </div>

        <div>
            <label
                class="block font-label-md text-label-md text-on-surface mb-xs"
                for="sk_path"
                >Unggah SK Kader (Opsional)</label
            >
            <input
                class="w-full border-outline-variant focus:border-primary focus:ring-primary focus:ring-1 rounded-DEFAULT p-sm font-body-md text-body-md bg-surface-bright transition-colors"
                id="sk_path"
                name="sk_path"
                type="file"
                accept="image/*,.pdf"
            />
        </div>

        <div
            class="pt-md border-t border-outline-variant mt-xl flex items-center justify-between gap-md"
        >
            <a
                href="{{ route('kader.register.step5') }}"
                class="font-label-md text-on-surface-variant hover:text-primary transition-colors flex items-center gap-xs"
            >
                <span class="material-symbols-outlined text-[18px]"
                    >arrow_back</span
                >
                Kembali
            </a>
            <button
                class="bg-primary hover:bg-primary/90 text-on-primary font-label-md py-sm px-xl rounded-DEFAULT transition-colors flex items-center gap-xs"
                type="submit"
            >
                Selesaikan Pendaftaran
                <span class="material-symbols-outlined text-[18px]"
                    >check_circle</span
                >
            </button>
        </div>
    </form>
</div>
@endsection
