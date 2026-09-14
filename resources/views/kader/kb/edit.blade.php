@extends('layouts.kader')

@section('content')
<div class="flex flex-col w-full px-4 lg:px-8 py-6">
  <!-- Top Navigation & Breadcrumb -->
  <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 pb-6">
    <div class="flex items-center gap-2 font-caption text-caption text-graphite">
      <a class="hover:text-primary transition-colors" href="{{ route('kader.family.index') }}">Data Keluarga</a>
      <span class="text-graphite-variant">/</span>
      <a class="hover:text-primary transition-colors" href="{{ route('kader.family.show', $individual->family_id) }}">{{ $individual->family->headIndividual->name ?? 'Keluarga' }}</a>
      <span class="text-graphite-variant">/</span>
      <a class="hover:text-primary transition-colors" href="{{ route('kader.kb.show', $individual) }}">{{ $individual->name }}</a>
      <span class="text-graphite-variant">/</span>
      <span class="text-ink font-semibold">Edit Data KB</span>
    </div>
    <a class="inline-flex items-center gap-2 text-sm font-medium text-label-md text-primary hover:text-white-fixed-variant transition-colors self-start md:self-auto group" href="{{ route('kader.kb.show', $individual) }}">
      <span class="material-symbols-outlined text-[18px] transition-transform group-hover:-translate-x-1">arrow_back</span>
      <span>Kembali ke Detail KB</span>
    </a>
  </div>

  <!-- Main Content -->
  <div class="max-w-3xl mx-auto w-full bg-paper-card border border-ink rounded-[10px] p-6 lg:p-8">
    <div class="mb-8 border-b border-ink pb-6">
      <h1 class="text-2xl font-bold text-ink mb-2">Edit Data Akseptor KB</h1>
      <p class="text-[15px] text-graphite">Perbarui informasi metode kontrasepsi untuk <strong>{{ $individual->name }}</strong>.</p>
    </div>

    <form action="{{ route('kader.kb.update', $individual) }}" method="POST" class="space-y-6">
      @csrf
      @method('PUT')

      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Metode -->
        <div class="space-y-1 md:col-span-2">
          <label for="method_used" class="text-sm font-medium text-ink">Metode Kontrasepsi <span class="text-red-600">*</span></label>
          <select name="method_used" id="method_used" required class="w-full px-4 py-2 bg-paper border @error('method_used') border-error @else border-ink focus:border-primary @enderror rounded-[10px] text-ink focus:outline-none transition-colors">
            <option value="">Pilih Metode</option>
            @foreach(['IUD', 'Implan', 'Suntik 1 Bulan', 'Suntik 3 Bulan', 'Pil', 'Kondom', 'MOW', 'MOP'] as $method)
              <option value="{{ $method }}" {{ old('method_used', $individual->kbRecord->method_used ?? '') == $method ? 'selected' : '' }}>{{ $method }}</option>
            @endforeach
          </select>
          @error('method_used')
            <p class="font-caption text-red-600">{{ $message }}</p>
          @enderror
        </div>

        <!-- Tanggal Mulai -->
        <div class="space-y-1">
          <label for="start_date" class="text-sm font-medium text-ink">Tanggal Mulai Penggunaan <span class="text-red-600">*</span></label>
          <input type="date" name="start_date" id="start_date" required 
              value="{{ old('start_date', $individual->kbRecord->start_date ?? '') }}"
              class="w-full px-4 py-2 bg-paper border @error('start_date') border-error @else border-ink focus:border-primary @enderror rounded-[10px] text-ink focus:outline-none transition-colors">
          @error('start_date')
            <p class="font-caption text-red-600">{{ $message }}</p>
          @enderror
        </div>

        <!-- Tempat Pelayanan -->
        <div class="space-y-1">
          <label for="provider_type" class="text-sm font-medium text-ink">Tempat Pelayanan <span class="text-red-600">*</span></label>
          <select name="provider_type" id="provider_type" required class="w-full px-4 py-2 bg-paper border @error('provider_type') border-error @else border-ink focus:border-primary @enderror rounded-[10px] text-ink focus:outline-none transition-colors">
            <option value="">Pilih Tempat Pelayanan</option>
            @foreach(['Puskesmas', 'Klinik Swasta', 'Bidan Praktik Mandiri', 'Rumah Sakit', 'Posyandu'] as $provider)
              <option value="{{ $provider }}" {{ old('provider_type', $individual->kbRecord->provider_type ?? '') == $provider ? 'selected' : '' }}>{{ $provider }}</option>
            @endforeach
          </select>
          @error('provider_type')
            <p class="font-caption text-red-600">{{ $message }}</p>
          @enderror
        </div>
      </div>

      <div class="pt-6 border-t border-ink flex items-center justify-end gap-4">
        <a href="{{ route('kader.kb.show', $individual) }}" class="px-6 py-2 text-sm font-medium text-graphite hover:text-ink transition-colors">
          Batal
        </a>
        <button type="submit" class="px-6 py-2 bg-primary hover:bg-primary-dark text-white text-sm font-medium transition-all rounded-[10px] flex items-center gap-2-card">
          <span class="material-symbols-outlined text-[18px]">save</span>
          Simpan Perubahan
        </button>
      </div>
    </form>
  </div>
</div>
@endsection
