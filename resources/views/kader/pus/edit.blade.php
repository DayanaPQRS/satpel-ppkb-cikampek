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
      <a class="hover:text-primary transition-colors" href="{{ route('kader.pus.show', $individual) }}">{{ $individual->name }}</a>
      <span class="text-graphite-variant">/</span>
      <span class="text-ink font-semibold">Edit Data PUS</span>
    </div>
    <a class="inline-flex items-center gap-2 text-sm font-medium text-label-md text-primary hover:text-white-fixed-variant transition-colors self-start md:self-auto group" href="{{ route('kader.pus.show', $individual) }}">
      <span class="material-symbols-outlined text-[18px] transition-transform group-hover:-translate-x-1">arrow_back</span>
      <span>Kembali ke Detail PUS</span>
    </a>
  </div>

  <!-- Main Content -->
  <div class="max-w-3xl mx-auto w-full bg-paper-card border border-ink rounded-[10px] p-6 lg:p-8">
    <div class="mb-8 border-b border-ink pb-6">
      <h1 class="text-2xl font-bold text-ink mb-2">Edit Data Pasangan Usia Subur (PUS)</h1>
      <p class="text-[15px] text-graphite">Perbarui informasi kependudukan dan preferensi keluarga untuk <strong>{{ $individual->name }}</strong>.</p>
    </div>

    <form action="{{ route('kader.pus.update', $individual) }}" method="POST" class="space-y-6">
      @csrf
      @method('PUT')

      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Usia Istri -->
        <div class="space-y-1">
          <label for="wife_age" class="text-sm font-medium text-ink">Usia Istri (Tahun) <span class="text-red-600">*</span></label>
          <input type="number" name="wife_age" id="wife_age" required min="10" max="60" 
              value="{{ old('wife_age', $individual->pusRecord->wife_age ?? \Carbon\Carbon::parse($individual->birth_date)->age) }}"
              class="w-full px-4 py-2 bg-paper border @error('wife_age') border-error @else border-ink focus:border-primary @enderror rounded-[10px] text-ink focus:outline-none transition-colors">
          @error('wife_age')
            <p class="font-caption text-red-600">{{ $message }}</p>
          @enderror
        </div>

        <!-- Jumlah Anak Hidup -->
        <div class="space-y-1">
          <label for="number_of_children" class="text-sm font-medium text-ink">Jumlah Anak Hidup <span class="text-red-600">*</span></label>
          <input type="number" name="number_of_children" id="number_of_children" required min="0" 
              value="{{ old('number_of_children', $individual->pusRecord->number_of_children ?? 0) }}"
              class="w-full px-4 py-2 bg-paper border @error('number_of_children') border-error @else border-ink focus:border-primary @enderror rounded-[10px] text-ink focus:outline-none transition-colors">
          @error('number_of_children')
            <p class="font-caption text-red-600">{{ $message }}</p>
          @enderror
        </div>

        <!-- Ingin Anak Lagi -->
        <div class="space-y-1 md:col-span-2">
          <label class="text-sm font-medium text-ink block mb-2">Ingin Anak Lagi? <span class="text-red-600">*</span></label>
          <div class="flex items-center gap-4">
            <label class="flex items-center gap-2 cursor-pointer">
              <input type="radio" name="wants_children" value="1" 
                  {{ old('wants_children', $individual->pusRecord->wants_children ?? '') == '1' ? 'checked' : '' }}
                  class="w-4 h-4 text-primary focus:ring-primary border-ink">
              <span class="text-[15px] text-ink">Ya, Ingin Anak</span>
            </label>
            <label class="flex items-center gap-2 cursor-pointer">
              <input type="radio" name="wants_children" value="0" 
                  {{ old('wants_children', $individual->pusRecord->wants_children ?? '') == '0' ? 'checked' : '' }}
                  class="w-4 h-4 text-primary focus:ring-primary border-ink">
              <span class="text-[15px] text-ink">Tidak Ingin Anak</span>
            </label>
          </div>
          @error('wants_children')
            <p class="font-caption text-red-600">{{ $message }}</p>
          @enderror
        </div>
      </div>

      <div class="pt-6 border-t border-ink flex items-center justify-end gap-4">
        <a href="{{ route('kader.pus.show', $individual) }}" class="px-6 py-2 text-sm font-medium text-graphite hover:text-ink transition-colors">
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
