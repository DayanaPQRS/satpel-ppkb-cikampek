@extends('layouts.kader') @section('content')
<div class="px-4 lg:px-8 py-8 space-y-8">
  <div
    class="flex flex-col md:flex-row justify-between items-start md:items-end gap-4"
  >
    <div>
      <h1 class="text-2xl font-bold text-ink mb-1">Data Individu</h1>
      <p class="text-[15px] text-graphite">
        Kelola dan perbarui data individu di wilayah kerja Anda.
      </p>
    </div>
    <!-- Note: We don't have "Tambah Individu" directly since it must go through Family -> Tambah Anggota -->
  </div>

  @if(session('success'))
  <div
    class="bg-green-50 border border-green-500 text-green-700 p-4 rounded-[10px]-xl flex items-center gap-3 mb-6"
  >
    <span class="material-symbols-outlined">check_circle</span>
    <p class="text-[15px]">{{ session('success') }}</p>
  </div>
  @endif

  <div
    class="bg-paper p-4-card-card rounded-[10px]-xl border border-ink"
  >
    <div class="flex flex-col lg:flex-row gap-4 items-center">
      <form
        action="{{ route('kader.individual.index') }}"
        method="GET"
        class="w-full flex flex-col lg:flex-row gap-4 items-center"
      >
        <div class="relative w-full lg:w-96 shrink-0">
          <span
            class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-graphite"
            >search</span
          >
          <input
            name="search"
            value="{{ request('search') }}"
            class="w-full pl-12 pr-4 py-3 bg-paper border border-ink focus:border-primary focus:bg-fog transition-colors outline-none text-[15px] text-ink placeholder:text-graphite rounded-[10px]-xl"
            placeholder="Cari NIK atau Nama..."
            type="text"
          />
        </div>
        <div class="flex flex-wrap gap-2 w-full">
          <button
            type="submit"
            class="bg-primary text-white px-4 py-2 hover:bg-primary-dark transition-colors rounded-[10px]-xl-card-card flex items-center justify-center text-sm font-medium"
          >
            Cari
          </button>
          @if(request('search'))
          <a
            href="{{ route('kader.individual.index') }}"
            class="bg-fog text-graphite px-4 py-2 hover:bg-fogest transition-colors rounded-[10px]-xl-card-card flex items-center justify-center text-sm font-medium"
          >
            Reset
          </a>
          @endif
        </div>
      </form>
    </div>
  </div>

  <div
    class="bg-paper-card-card rounded-[10px]-xl border border-ink overflow-hidden"
  >
    <div class="overflow-x-auto">
      <table
        class="w-full text-left text-[15px] text-ink border-collapse"
      >
        <thead>
          <tr
            class="bg-fog border-b border-ink text-label-md text-sm font-medium text-graphite uppercase tracking-wider"
          >
            <th class="py-3 px-4">NIK</th>
            <th class="py-3 px-4">Nama Lengkap</th>
            <th class="py-3 px-4 hidden md:table-cell">Keluarga</th>
            <th class="py-3 px-4 hidden lg:table-cell">Hubungan</th>
            <th class="py-3 px-4 text-center">Usia</th>
            <th class="py-3 px-4">Klasifikasi</th>
            <th class="py-3 px-4 hidden xl:table-cell">
              Diperbarui
            </th>
            <th class="py-3 px-4 text-right">Aksi</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-border">
          @forelse($individuals as $individual)
          <tr
            class="hover:bg-fog transition-colors group"
          >
            <td class="py-3 px-4 font-mono text-sm tracking-wider">
              {{ Str::mask($individual->nik, '•', 6, 6) }}
            </td>
            <td class="py-3 px-4 font-semibold">
              {{ $individual->name }}
            </td>
            <td
              class="py-3 px-4 hidden md:table-cell text-graphite text-sm truncate max-w-[200px]"
            >
              {{ $individual->family->headIndividual->name ??
              'Belum ada KK' }}
            </td>
            <td
              class="py-3 px-4 hidden lg:table-cell text-sm text-graphite"
            >
              {{ $individual->family_relation }}
            </td>
            <td class="py-3 px-4 text-center">
              {{
              \Carbon\Carbon::parse($individual->birth_date)->age
              }} Thn
            </td>
            <td class="py-3 px-4">
              @if($individual->has_program_classification)
              <span
                class="inline-flex items-center px-2.5 py-0.5 rounded-[10px]-xl text-xs font-semibold bg-green-50 text-green-700 border border-green-200"
                >Ada Program</span
              >
              @else
              <span
                class="inline-flex items-center px-2.5 py-0.5 rounded-[10px]-xl text-xs font-semibold bg-fogest text-graphite border border-ink"
                >Belum Ada</span
              >
              @endif
            </td>
            <td
              class="py-3 px-4 hidden xl:table-cell text-sm text-graphite"
            >
              {{ $individual->updated_at->format('d M Y') }}
            </td>
            <td class="py-3 px-4 text-right">
              <a
                href="{{ route('kader.individual.show', $individual) }}"
                class="text-primary hover:text-primary-light text-sm font-medium text-sm transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100 flex items-center justify-end w-full gap-1"
              >
                Lihat Profil
                <span
                  class="material-symbols-outlined text-[16px]"
                  >arrow_forward</span
                >
              </a>
            </td>
          </tr>
          @empty
          <tr>
            <td
              colspan="8"
              class="py-8 px-4 text-center text-graphite"
            >
              Belum ada data individu.
            </td>
          </tr>
          @endforelse
        </tbody>
      </table>
    </div>
    <div
      class="bg-paper px-4 py-3 border-t border-ink flex flex-col sm:flex-row items-center justify-between gap-4"
    >
      <div class="text-[15px] text-sm text-graphite w-full">
        {{ $individuals->links() }}
      </div>
    </div>
  </div>
</div>
@endsection
