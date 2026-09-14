@extends('layouts.kader')

@section('content')
<div class="w-full max-w-5xl mx-auto px-4 lg:px-8 py-8 space-y-6">
  <!-- Breadcrumb Navigation -->
  <div class="flex items-center justify-between pb-6">
    <nav class="flex items-center gap-2 font-caption text-caption text-graphite">
      <a class="hover:text-primary transition-colors flex items-center gap-1" href="{{ route('kader.family.index') }}">
        <span class="material-symbols-outlined text-[16px]">home</span> Data Keluarga
      </a>
      <span>/</span>
      <a class="hover:text-primary transition-colors text-sm font-medium text-caption text-ink" href="{{ route('kader.family.show', $family) }}">Keluarga Bpk. {{ $family->headIndividual->name ?? 'Belum ada kepala' }}</a>
      <span>/</span>
      <span class="text-primary text-sm font-medium text-caption">Tambah Anggota</span>
    </nav>
    <a class="flex items-center gap-1.5 text-sm font-medium text-caption text-primary hover:text-primary-light transition-colors py-1 px-3 bg-fog hover:bg-paper-variant rounded-[10px]" href="{{ route('kader.family.show', $family) }}">
      <span class="material-symbols-outlined text-[16px]">arrow_back</span>
      <span>Kembali ke Kartu Keluarga</span>
    </a>
  </div>

  <!-- Editorial Top Context Card (Civic Dossier) -->
  <section class="bg-paper p-6-card relative overflow-hidden rounded-[10px]">
    <div class="absolute left-0 top-0 bottom-0 w-1.5 bg-primary-light"></div>
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-6">
      <div class="flex items-start gap-4">
        <div class="w-12 h-12 bg-fog flex items-center justify-center shrink-0 rounded-[10px]">
          <span class="material-symbols-outlined text-primary text-[28px]">family_restroom</span>
        </div>
        <div class="space-y-1">
          <div class="flex items-center gap-2">
            <span class="font-caption text-caption uppercase tracking-widest text-graphite">Konteks Pendaftaran Anggota Baru</span>
            <span class="bg-green-50 text-green-700 text-sm font-medium text-[11px] px-2 py-0.5 uppercase tracking-wider rounded-[10px]">KK Terverifikasi</span>
          </div>
          <h2 class="text-xl font-bold text-headline-md text-ink">Keluarga: {{ $family->headIndividual->name ?? 'Tanpa Kepala' }}</h2>
          <div class="flex flex-wrap items-center gap-x-4 gap-y-1 font-caption text-caption text-graphite">
            <span class="flex items-center gap-1 font-mono font-semibold text-ink">
              <span class="material-symbols-outlined text-[15px] text-graphite">badge</span>
              No. KK: {{ Str::mask($family->kk_number, '•', 4, 8) }}
            </span>
            <span>•</span>
            <span class="flex items-center gap-1">
              <span class="material-symbols-outlined text-[15px] text-graphite">location_on</span>
              RT {{ $family->rt }} / RW {{ $family->rw }}, {{ $family->village }}
            </span>
          </div>
        </div>
      </div>
      <div class="flex items-center gap-4 pt-4 md:pt-0 border-t md:border-t-0 border-surface-variant">
        <div class="text-right">
          <div class="text-sm font-medium text-caption text-graphite">Status Saat Ini</div>
          <div class="text-xl font-bold text-headline-md text-primary leading-tight">{{ $family->individuals()->count() }} <span class="text-[15px] text-caption text-graphite">Individu</span></div>
        </div>
        <div class="h-10 w-px bg-paper-variant"></div>
        <div class="bg-primary-fixed text-white-fixed p-2 rounded-[10px] text-center text-[11px] text-sm font-medium leading-tight max-w-[130px]">
          Aksi: Input Anggota Baru
        </div>
      </div>
    </div>
  </section>

  <!-- Page Title & Guidance Section -->
  <header class="mb-4">
    <div class="flex items-center gap-2 text-primary text-sm font-medium text-caption uppercase tracking-wider mb-2">
      <span class="material-symbols-outlined text-[18px]">how_to_reg</span>
      <span>Instrumen Pemutakhiran Data Lapangan PPKB</span>
    </div>
    <h1 class="text-2xl font-bold text-headline-lg text-ink tracking-tight">Tambah Anggota Keluarga</h1>
    <p class="text-[15px] text-body-md text-graphite mt-2 max-w-3xl">
      Masukkan data dasar individu yang akan ditambahkan ke dalam registrasi kependudukan. Pastikan seluruh entri bersumber langsung dari dokumen resmi (<span class="text-ink font-semibold">KTP-el / Kartu Keluarga</span>). Field bertanda (<span class="text-red-600 font-bold">*</span>) wajib diisi.
    </p>
  </header>

  <!-- Main Structured Form Container -->
  <div class="w-full bg-paper p-8 md:p-10-card rounded-[10px]">
    <form action="{{ route('kader.family.member.store', $family) }}" method="POST" class="space-y-12" id="formTambahAnggota">
      @csrf
      
      <!-- SECTION 1: DATA IDENTITAS -->
      <fieldset class="space-y-6">
        <div class="flex items-center justify-between pb-3 bg-fog px-4 py-3 rounded-[10px]">
          <div class="flex items-center gap-3">
            <span class="w-7 h-7 bg-primary text-white text-sm font-medium flex items-center justify-center text-caption rounded-[10px]">01</span>
            <legend class="text-xl font-bold text-[18px] text-ink font-bold">Data Identitas Kependudukan</legend>
          </div>
          <span class="font-caption text-caption text-graphite">Verifikasi Identitas Dukcapil</span>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 pt-2">
          <div class="md:col-span-2 space-y-2">
            <label class="block text-sm font-medium text-label-md text-ink" for="name">
              Nama Lengkap Sesuai Dokumen Resmi <span class="text-red-600 font-bold">*</span>
            </label>
            <div class="relative">
              <input class="w-full h-12 px-4 bg-fog text-ink text-[15px] focus:outline-none focus:bg-paper focus:ring-2 focus:ring-primary-container transition-all rounded-[10px]" id="name" name="name" value="{{ old('name') }}" placeholder="Masukkan nama lengkap" required type="text"/>
            </div>
            @error('name')<p class="text-red-600 font-caption">{{ $message }}</p>@enderror
          </div>
          
          <div class="space-y-2">
            <label class="block text-sm font-medium text-label-md text-ink" for="nik">
              Nomor Induk Kependudukan (NIK) <span class="text-red-600 font-bold">*</span>
            </label>
            <div class="relative">
              <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-graphite text-[20px]">badge</span>
              <input class="w-full h-12 pl-10 pr-4 bg-fog text-ink font-mono focus:outline-none focus:bg-paper focus:ring-2 focus:ring-primary-container transition-all rounded-[10px]" id="nik" name="nik" value="{{ old('nik') }}" maxlength="16" placeholder="3215xxxxxxxxxxxx" required type="text"/>
            </div>
            @error('nik')<p class="text-red-600 font-caption">{{ $message }}</p>@enderror
          </div>

          <div class="space-y-2">
            <label class="block text-sm font-medium text-label-md text-ink">
              Jenis Kelamin <span class="text-red-600 font-bold">*</span>
            </label>
            <div class="grid grid-cols-2 gap-3 h-12">
              <label class="flex items-center justify-center gap-2.5 px-4 bg-fog hover:bg-fog cursor-pointer transition-colors has-[:checked]:bg-primary-light has-[:checked]:text-white text-ink text-sm font-medium rounded-[10px] select-none">
                <input class="sr-only" name="gender" type="radio" value="Laki-laki" {{ old('gender') == 'Laki-laki' ? 'checked' : '' }} required/>
                <span class="material-symbols-outlined text-[18px]">male</span><span>Laki-laki</span>
              </label>
              <label class="flex items-center justify-center gap-2.5 px-4 bg-fog hover:bg-fog cursor-pointer transition-colors has-[:checked]:bg-primary-light has-[:checked]:text-white text-ink text-sm font-medium rounded-[10px] select-none">
                <input class="sr-only" name="gender" type="radio" value="Perempuan" {{ old('gender') == 'Perempuan' ? 'checked' : '' }} required/>
                <span class="material-symbols-outlined text-[18px]">female</span><span>Perempuan</span>
              </label>
            </div>
            @error('gender')<p class="text-red-600 font-caption">{{ $message }}</p>@enderror
          </div>

          <div class="space-y-2">
            <label class="block text-sm font-medium text-label-md text-ink" for="birth_place">
              Tempat Lahir <span class="text-red-600 font-bold">*</span>
            </label>
            <div class="relative">
              <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-graphite text-[20px]">location_city</span>
              <input class="w-full h-12 pl-10 pr-4 bg-fog text-ink focus:outline-none focus:bg-paper focus:ring-2 focus:ring-primary-container transition-all rounded-[10px]" id="birth_place" name="birth_place" value="{{ old('birth_place') }}" required type="text"/>
            </div>
            @error('birth_place')<p class="text-red-600 font-caption">{{ $message }}</p>@enderror
          </div>

          <div class="space-y-2">
            <label class="block text-sm font-medium text-label-md text-ink" for="birth_date">
              Tanggal Lahir <span class="text-red-600 font-bold">*</span>
            </label>
            <div class="relative">
              <input class="w-full h-12 px-4 bg-fog text-ink focus:outline-none focus:bg-paper focus:ring-2 focus:ring-primary-container transition-all rounded-[10px]" id="birth_date" name="birth_date" value="{{ old('birth_date') }}" required type="date" max="{{ date('Y-m-d') }}"/>
            </div>
            @error('birth_date')<p class="text-red-600 font-caption">{{ $message }}</p>@enderror
          </div>
        </div>
      </fieldset>

      <!-- SECTION 2: HUBUNGAN KELUARGA -->
      <fieldset class="space-y-6">
        <div class="flex items-center justify-between pb-3 bg-fog px-4 py-3 rounded-[10px]">
          <div class="flex items-center gap-3">
            <span class="w-7 h-7 bg-primary text-white text-sm font-medium flex items-center justify-center text-caption rounded-[10px]">02</span>
            <legend class="text-xl font-bold text-[18px] text-ink font-bold">Kedudukan dalam Keluarga</legend>
          </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 pt-2">
          <div class="space-y-2">
            <label class="block text-sm font-medium text-label-md text-ink" for="family_relation">
              Hubungan Keluarga <span class="text-red-600 font-bold">*</span>
            </label>
            <div class="relative">
              <select class="w-full h-12 px-4 bg-fog text-ink focus:outline-none focus:bg-paper focus:ring-2 focus:ring-primary-container transition-all appearance-none cursor-pointer rounded-[10px]" id="family_relation" name="family_relation" required>
                <option disabled selected value="">-- Pilih --</option>
                <option value="Kepala Keluarga">Kepala Keluarga</option>
                <option value="Istri">Istri</option>
                <option value="Suami">Suami</option>
                <option value="Anak">Anak</option>
                <option value="Orang Tua">Orang Tua</option>
                <option value="Mertua">Mertua</option>
                <option value="Cucu">Cucu</option>
                <option value="Lainnya">Lainnya</option>
              </select>
              <span class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 text-graphite pointer-events-none text-[20px]">expand_more</span>
            </div>
            @error('family_relation')<p class="text-red-600 font-caption">{{ $message }}</p>@enderror
          </div>
        </div>
      </fieldset>

      <!-- SECTION 3: INFORMASI SOSIAL -->
      <fieldset class="space-y-6">
        <div class="flex items-center justify-between pb-3 bg-fog px-4 py-3 rounded-[10px]">
          <div class="flex items-center gap-3">
            <span class="w-7 h-7 bg-primary text-white text-sm font-medium flex items-center justify-center text-caption rounded-[10px]">03</span>
            <legend class="text-xl font-bold text-[18px] text-ink font-bold">Informasi Sosial & Ekonomi</legend>
          </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 pt-2">
          <div class="space-y-2">
            <label class="block text-sm font-medium text-label-md text-ink" for="marital_status">
              Status Perkawinan <span class="text-red-600 font-bold">*</span>
            </label>
            <div class="relative">
              <select class="w-full h-12 px-4 bg-fog text-ink focus:outline-none focus:bg-paper focus:ring-2 focus:ring-primary-container transition-all appearance-none cursor-pointer rounded-[10px]" id="marital_status" name="marital_status" required>
                <option disabled selected value="">-- Pilih --</option>
                <option value="Belum Kawin">Belum Kawin</option>
                <option value="Kawin">Kawin Tercatat</option>
                <option value="Kawin Belum Tercatat">Kawin Belum Tercatat</option>
                <option value="Cerai Hidup">Cerai Hidup</option>
                <option value="Cerai Mati">Cerai Mati</option>
              </select>
              <span class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 text-graphite pointer-events-none text-[20px]">expand_more</span>
            </div>
            @error('marital_status')<p class="text-red-600 font-caption">{{ $message }}</p>@enderror
          </div>

          <div class="space-y-2">
            <label class="block text-sm font-medium text-label-md text-ink" for="education">
              Pendidikan Terakhir
            </label>
            <div class="relative">
              <select class="w-full h-12 px-4 bg-fog text-ink focus:outline-none focus:bg-paper focus:ring-2 focus:ring-primary-container transition-all appearance-none cursor-pointer rounded-[10px]" id="education" name="education">
                <option value="">-- Pilih --</option>
                <option value="Tidak/Belum Sekolah">Tidak / Belum Pernah Sekolah</option>
                <option value="SD/Sederajat">SD / MI / Sederajat</option>
                <option value="SMP/Sederajat">SMP / MTs / Sederajat</option>
                <option value="SMA/Sederajat">SMA / SMK / MA / Sederajat</option>
                <option value="Diploma">Diploma</option>
                <option value="S1">S1 / D4</option>
                <option value="S2">S2</option>
                <option value="S3">S3</option>
              </select>
              <span class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 text-graphite pointer-events-none text-[20px]">expand_more</span>
            </div>
            @error('education')<p class="text-red-600 font-caption">{{ $message }}</p>@enderror
          </div>

          <div class="space-y-2">
            <label class="block text-sm font-medium text-label-md text-ink" for="job">
              Pekerjaan Pokok
            </label>
            <div class="relative">
              <select class="w-full h-12 px-4 bg-fog text-ink focus:outline-none focus:bg-paper focus:ring-2 focus:ring-primary-container transition-all appearance-none cursor-pointer rounded-[10px]" id="job" name="job">
                <option value="">-- Pilih --</option>
                <option value="Belum/Tidak Bekerja">Belum / Tidak Bekerja</option>
                <option value="Pelajar/Mahasiswa">Pelajar / Mahasiswa</option>
                <option value="Mengurus Rumah Tangga">Mengurus Rumah Tangga</option>
                <option value="PNS">PNS/TNI/Polri</option>
                <option value="Pegawai Swasta">Pegawai Swasta</option>
                <option value="Wiraswasta">Wiraswasta</option>
                <option value="Petani">Petani / Peternak</option>
                <option value="Buruh">Buruh</option>
                <option value="Lainnya">Lainnya</option>
              </select>
              <span class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 text-graphite pointer-events-none text-[20px]">expand_more</span>
            </div>
            @error('job')<p class="text-red-600 font-caption">{{ $message }}</p>@enderror
          </div>
        </div>
      </fieldset>

      <!-- SECTION 4: KONTAK -->
      <fieldset class="space-y-6">
        <div class="flex items-center justify-between pb-3 bg-fog px-4 py-3 rounded-[10px]">
          <div class="flex items-center gap-3">
            <span class="w-7 h-7 bg-primary text-white text-sm font-medium flex items-center justify-center text-caption rounded-[10px]">04</span>
            <legend class="text-xl font-bold text-[18px] text-ink font-bold">Saluran Komunikasi (Opsional)</legend>
          </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 pt-2">
          <div class="space-y-2">
            <label class="block text-sm font-medium text-label-md text-ink" for="phone">
              Nomor WhatsApp / Seluler
            </label>
            <div class="relative">
              <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-graphite text-[20px]">call</span>
              <input class="w-full h-12 pl-10 pr-4 bg-fog text-ink focus:outline-none focus:bg-paper focus:ring-2 focus:ring-primary-container transition-all rounded-[10px]" id="phone" name="phone" value="{{ old('phone') }}" placeholder="08xxxxxxxxxx" type="tel"/>
            </div>
            @error('phone')<p class="text-red-600 font-caption">{{ $message }}</p>@enderror
          </div>
        </div>
      </fieldset>

      <!-- Form Action Hub -->
      <div class="bg-paper py-6 border-t border-surface-variant flex flex-col sm:flex-row items-center justify-between gap-4 sticky bottom-0 z-30">
        <a href="{{ route('kader.family.show', $family) }}" class="px-5 py-3 text-graphite hover:text-ink hover:bg-fog text-sm font-medium transition-colors rounded-[10px] text-center">
          Batalkan
        </a>
        <button type="submit" class="px-7 py-3 bg-primary hover:bg-primary-dark text-white text-sm font-medium transition-all flex items-center gap-2-card rounded-[10px]">
          <span>Simpan Anggota</span>
          <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
        </button>
      </div>
    </form>
  </div>
</div>
@endsection
