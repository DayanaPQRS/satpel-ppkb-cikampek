@extends('layouts.kader') @section('content')
<div class="flex flex-col w-full px-4 lg:px-8 py-6">
  <!-- Top Navigation & Breadcrumb -->
  <div
    class="flex flex-col md:flex-row md:items-center justify-between gap-4 pb-6"
  >
    <div
      class="flex items-center gap-2 font-caption text-caption text-graphite"
    >
      <a
        class="hover:text-primary transition-colors"
        href="{{ route('kader.family.index') }}"
        >Data Keluarga</a
      >
      <span class="text-graphite-variant">/</span>
      <a
        class="hover:text-primary transition-colors"
        href="{{ route('kader.family.show', $individual->family_id) }}"
        >{{ $individual->family->headIndividual->name ?? 'Keluarga'
        }}</a
      >
      <span class="text-graphite-variant">/</span>
      <a
        class="hover:text-primary transition-colors"
        href="{{ route('kader.bumil.show', $individual) }}"
        >{{ $individual->name }}</a
      >
      <span class="text-graphite-variant">/</span>
      <span class="text-ink font-semibold">Edit Data BUMIL</span>
    </div>
    <a
      class="inline-flex items-center gap-2 text-sm font-medium text-label-md text-primary hover:text-white-fixed-variant transition-colors self-start md:self-auto group"
      href="{{ route('kader.bumil.show', $individual) }}"
    >
      <span
        class="material-symbols-outlined text-[18px] transition-transform group-hover:-translate-x-1"
        >arrow_back</span
      >
      <span>Kembali ke Detail BUMIL</span>
    </a>
  </div>

  <!-- Main Content -->
  <div
    class="max-w-3xl mx-auto w-full bg-paper-card border border-ink rounded-[10px] p-6 lg:p-8"
  >
    <div class="mb-8 border-b border-ink pb-6">
      <h1 class="text-2xl font-bold text-ink mb-2">
        Edit Data Ibu Hamil
      </h1>
      <p class="text-[15px] text-graphite">
        Perbarui informasi kehamilan untuk
        <strong>{{ $individual->name }}</strong>.
      </p>
    </div>

    <form
      action="{{ route('kader.bumil.update', $individual) }}"
      method="POST"
      class="space-y-6"
    >
      @csrf @method('PUT')

      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Usia Kandungan -->
        <div class="space-y-1">
          <label
            for="pregnancy_week"
            class="text-sm font-medium text-ink"
            >Usia Kandungan (Minggu)
            <span class="text-red-600">*</span></label
          >
          <input
            type="number"
            name="pregnancy_week"
            id="pregnancy_week"
            required
            min="1"
            max="42"
            value="{{ old('pregnancy_week', $individual->bumilRecord->form_data['pregnancy_week'] ?? '') }}"
            class="w-full px-4 py-2 bg-paper border @error('pregnancy_week') border-error @else border-ink focus:border-primary @enderror rounded-[10px] text-ink focus:outline-none transition-colors"
          />
          @error('pregnancy_week')
          <p class="font-caption text-red-600">{{ $message }}</p>
          @enderror
        </div>

        <!-- Perkiraan Lahir -->
        <div class="space-y-1">
          <label
            for="estimated_due_date"
            class="text-sm font-medium text-ink"
            >Hari Perkiraan Lahir (HPL)
            <span class="text-red-600">*</span></label
          >
          <input
            type="date"
            name="estimated_due_date"
            id="estimated_due_date"
            required
            value="{{ old('estimated_due_date', $individual->bumilRecord->form_data['estimated_due_date'] ?? '') }}"
            class="w-full px-4 py-2 bg-paper border @error('estimated_due_date') border-error @else border-ink focus:border-primary @enderror rounded-[10px] text-ink focus:outline-none transition-colors"
          />
          @error('estimated_due_date')
          <p class="font-caption text-red-600">{{ $message }}</p>
          @enderror
        </div>

        <!-- Faskes -->
        <div class="space-y-1 md:col-span-2">
          <label
            for="health_facility"
            class="text-sm font-medium text-ink"
            >Fasilitas Kesehatan Tempat Pemeriksaan</label
          >
          <input
            type="text"
            name="health_facility"
            id="health_facility"
            placeholder="Contoh: Puskesmas Cikampek"
            value="{{ old('health_facility', $individual->bumilRecord->form_data['health_facility'] ?? '') }}"
            class="w-full px-4 py-2 bg-paper border @error('health_facility') border-error @else border-ink focus:border-primary @enderror rounded-[10px] text-ink focus:outline-none transition-colors"
          />
          @error('health_facility')
          <p class="font-caption text-red-600">{{ $message }}</p>
          @enderror
        </div>
      </div>

      <div
        class="pt-6 border-t border-ink flex items-center justify-end gap-4"
      >
        <a
          href="{{ route('kader.bumil.show', $individual) }}"
          class="px-6 py-2 text-sm font-medium text-graphite hover:text-ink transition-colors"
        >
          Batal
        </a>
        <button
          type="submit"
          class="px-6 py-2 bg-primary hover:bg-primary-dark text-white text-sm font-medium transition-all rounded-[10px] flex items-center gap-2-card"
        >
          <span class="material-symbols-outlined text-[18px]"
            >save</span
          >
          Simpan Perubahan
        </button>
      </div>
    </form>
  </div>
</div>
@endsection
