@extends('layouts.auth') @section('title', 'Pendaftaran Kader - Langkah 5')
@section('content')
<div class="mb-lg">
    <h2 class="font-headline-lg text-headline-lg text-on-surface mb-sm">
        Data Rekening Bank
    </h2>
    <p class="font-body-md text-body-md text-on-surface-variant">
        Lengkapi data rekening bank Anda untuk keperluan insentif kader.
    </p>
</div>

<div
    class="bg-surface-container-lowest border border-outline-variant p-lg md:p-xl rounded-DEFAULT shadow-sm"
>
    <form
        action="{{ route('kader.register.step5.post') }}"
        method="POST"
        class="space-y-lg"
    >
        @csrf

        <div>
            <label
                class="block font-label-md text-label-md text-on-surface mb-xs"
                for="bank_name"
                >Nama Bank</label
            >
            <input
                class="w-full border-outline-variant focus:border-primary focus:ring-primary focus:ring-1 rounded-DEFAULT p-sm font-body-md text-body-md bg-surface-bright transition-colors"
                id="bank_name"
                name="bank_name"
                value="{{ old('bank_name', session('kader_registration.step5.bank_name')) }}"
                placeholder="Contoh: BJB, BRI, dll"
                required
                type="text"
            />
        </div>

        <div>
            <label
                class="block font-label-md text-label-md text-on-surface mb-xs"
                for="account_number"
                >Nomor Rekening</label
            >
            <input
                class="w-full border-outline-variant focus:border-primary focus:ring-primary focus:ring-1 rounded-DEFAULT p-sm font-body-md text-body-md bg-surface-bright transition-colors"
                id="account_number"
                name="account_number"
                value="{{ old('account_number', session('kader_registration.step5.account_number')) }}"
                required
                type="text"
            />
        </div>

        <div>
            <label
                class="block font-label-md text-label-md text-on-surface mb-xs"
                for="account_name"
                >Nama Pemilik Rekening</label
            >
            <input
                class="w-full border-outline-variant focus:border-primary focus:ring-primary focus:ring-1 rounded-DEFAULT p-sm font-body-md text-body-md bg-surface-bright transition-colors"
                id="account_name"
                name="account_name"
                value="{{ old('account_name', session('kader_registration.step5.account_name')) }}"
                required
                type="text"
            />
        </div>

        <div
            class="pt-md border-t border-outline-variant mt-xl flex items-center justify-between gap-md"
        >
            <a
                href="{{ route('kader.register.step4') }}"
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
