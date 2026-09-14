<!DOCTYPE html>

<html lang="id">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <link
      href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700&amp;display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
      rel="stylesheet"
    />
    <style>
      @layer base {
        html,
        body {
          margin: 0;
          padding: 0;
        }
        body {
          overscroll-behavior: none;
        }
        main > :first-child {
          margin-top: 0 !important;
        }
        main > :last-child {
          margin-bottom: 0 !important;
        }
      }
      ::-webkit-scrollbar {
        display: none;
      }
    </style>
    <script src="https://cdn.tailwindcss.com"></script>
    <script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            colors: {
              "secondary-fixed": "#88faa0",
              "on-error-container": "#93000a",
              "secondary-container": "#88faa0",
              "on-tertiary-fixed": "#241a00",
              "error-container": "#ffdad6",
              "inverse-primary": "#adc7ff",
              "outline-variant": "#c2c6d4",
              "on-tertiary-fixed-variant": "#574400",
              "on-secondary-container": "#007434",
              "primary-fixed": "#d8e2ff",
              "inverse-on-surface": "#eff0f9",
              "on-tertiary": "#ffffff",
              tertiary: "#745b00",
              "on-primary-fixed": "#001a41",
              "on-secondary-fixed-variant": "#005323",
              "inverse-surface": "#2e3037",
              outline: "#727784",
              "on-primary": "#ffffff",
              "primary-fixed-dim": "#adc7ff",
              "on-surface": "#191c22",
              "surface-variant": "#e1e2eb",
              "surface-container": "#ededf6",
              "surface-container-high": "#e7e7f0",
              "secondary-fixed-dim": "#6cdd86",
              "on-error": "#ffffff",
              "on-secondary": "#ffffff",
              "on-primary-fixed-variant": "#004493",
              "primary-container": "#0057b8",
              "on-tertiary-container": "#4e3d00",
              primary: "#00408b",
              "on-surface-variant": "#424752",
              "surface-container-low": "#f2f3fc",
              "on-primary-container": "#bfd2ff",
              "on-background": "#191c22",
              "tertiary-container": "#cfa600",
              surface: "#f9f9ff",
              secondary: "#006d31",
              "surface-container-highest": "#e1e2eb",
              "surface-bright": "#f9f9ff",
              error: "#ba1a1a",
              "surface-dim": "#d9d9e2",
              "on-secondary-fixed": "#00210a",
              "surface-tint": "#0d5bbc",
              "tertiary-fixed-dim": "#f1c100",
              background: "#f9f9ff",
              "tertiary-fixed": "#ffe08a",
              "surface-container-lowest": "#ffffff",
            },
            borderRadius: {
              DEFAULT: "0.25rem",
              lg: "0.5rem",
              xl: "0.75rem",
              full: "9999px",
            },
            spacing: {
              gutter: "24px",
              sm: "8px",
              xxl: "64px",
              xs: "4px",
              lg: "24px",
              "container-max": "1280px",
              md: "16px",
              unit: "4px",
              xl: "40px",
            },
            fontFamily: {
              "body-lg": ["Plus Jakarta Sans"],
              "body-md": ["Plus Jakarta Sans"],
              "display-lg": ["Plus Jakarta Sans"],
              "label-md": ["Plus Jakarta Sans"],
              caption: ["Plus Jakarta Sans"],
              "headline-md": ["Plus Jakarta Sans"],
              "display-xl": ["Plus Jakarta Sans"],
              "headline-lg": ["Plus Jakarta Sans"],
            },
            fontSize: {
              "body-lg": [
                "18px",
                { lineHeight: "28px", fontWeight: "400" },
              ],
              "body-md": [
                "16px",
                { lineHeight: "24px", fontWeight: "400" },
              ],
              "display-lg": [
                "48px",
                {
                  lineHeight: "56px",
                  letterSpacing: "-0.02em",
                  fontWeight: "700",
                },
              ],
              "label-md": [
                "14px",
                {
                  lineHeight: "20px",
                  letterSpacing: "0.05em",
                  fontWeight: "600",
                },
              ],
              caption: [
                "12px",
                { lineHeight: "16px", fontWeight: "400" },
              ],
              "headline-md": [
                "24px",
                { lineHeight: "32px", fontWeight: "600" },
              ],
              "display-xl": [
                "60px",
                {
                  lineHeight: "72px",
                  letterSpacing: "-0.02em",
                  fontWeight: "700",
                },
              ],
              "headline-lg": [
                "32px",
                {
                  lineHeight: "40px",
                  letterSpacing: "-0.01em",
                  fontWeight: "600",
                },
              ],
            },
          },
        },
      };
    </script>
  </head>
  <body
    class="bg-fog text-[15px] text-body-md text-ink antialiased"
  >
    <aside
      class="fixed left-0 top-0 h-full w-72 bg-paper z-50 flex flex-col justify-between py-6 px-4-[0_1px_8px_rgba(0,0,0,0.04)]"
    >
      <div class="flex flex-col gap-6">
        <div class="px-3 py-2">
          <div
            class="text-xl font-bold text-headline-md text-primary-light tracking-tight leading-tight uppercase"
          >
            SATPEL PPKB
          </div>
          <div
            class="text-sm font-medium text-caption text-graphite tracking-wider uppercase mt-1"
          >
            Kecamatan Cikampek
          </div>
        </div>
        <nav
          class="flex flex-col gap-1"
          data-active-classes="bg-primary-light text-white font-bold"
        >
          <a
            class="flex items-center gap-3 px-3 py-2.5 text-graphite hover:bg-fog hover:text-ink transition-all"
            data-path="dashboard"
            href="#"
            ><span class="material-symbols-outlined text-[20px]"
              >grid_view</span
            ><span class="text-sm font-medium text-label-md"
              >Dashboard</span
            ></a
          ><a
            aria-current="page"
            class="flex items-center gap-3 px-3 py-2.5 transition-all bg-primary-light text-white font-bold"
            data-path="data-keluarga"
            href="#"
            ><span class="material-symbols-outlined text-[20px]"
              >family_restroom</span
            ><span class="text-sm font-medium text-label-md"
              >Data Keluarga</span
            ></a
          ><a
            class="flex items-center gap-3 px-3 py-2.5 text-graphite hover:bg-fog hover:text-ink transition-all"
            data-path="data-individu"
            href="#"
            ><span class="material-symbols-outlined text-[20px]"
              >person_search</span
            ><span class="text-sm font-medium text-label-md"
              >Data Individu</span
            ></a
          ><a
            class="flex items-center gap-3 px-3 py-2.5 text-graphite hover:bg-fog hover:text-ink transition-all"
            data-path="program"
            href="#"
            ><span class="material-symbols-outlined text-[20px]"
              >assignment</span
            ><span class="text-sm font-medium text-label-md"
              >Program</span
            ></a
          ><a
            class="flex items-center gap-3 px-3 py-2.5 text-graphite hover:bg-fog hover:text-ink transition-all"
            data-path="kegiatan"
            href="#"
            ><span class="material-symbols-outlined text-[20px]"
              >event_available</span
            ><span class="text-sm font-medium text-label-md"
              >Kegiatan</span
            ></a
          ><a
            class="flex items-center justify-between px-3 py-2.5 text-graphite hover:bg-fog hover:text-ink transition-all"
            data-path="notifikasi"
            href="#"
            ><div class="flex items-center gap-3">
              <span class="material-symbols-outlined text-[20px]"
                >notifications</span
              ><span class="text-sm font-medium text-label-md"
                >Notifikasi</span
              >
            </div>
            <span class="w-2 h-2 rounded-[100px] bg-primary"></span
          ></a>
        </nav>
      </div>
      <div class="flex flex-col gap-4">
        <nav
          class="flex flex-col gap-1"
          data-active-classes="bg-primary-light text-white font-bold"
        >
          <a
            class="flex items-center gap-3 px-3 py-2 text-graphite hover:bg-fog hover:text-ink transition-all"
            data-path="bantuan"
            href="#"
            ><span class="material-symbols-outlined text-[20px]"
              >help</span
            ><span class="text-sm font-medium text-label-md"
              >Bantuan</span
            ></a
          ><a
            class="flex items-center gap-3 px-3 py-2 text-graphite hover:bg-fog hover:text-ink transition-all"
            data-path="pengaturan"
            href="#"
            ><span class="material-symbols-outlined text-[20px]"
              >settings</span
            ><span class="text-sm font-medium text-label-md"
              >Pengaturan</span
            ></a
          >
        </nav>
        <div class="pt-4 flex items-center gap-3 px-3">
          <div
            class="w-8 h-8 rounded-[100px] bg-primary flex items-center justify-center"
          >
            <span
              class="material-symbols-outlined text-white text-[18px]"
              >person</span
            >
          </div>
          <div class="flex flex-col min-w-0">
            <span
              class="text-sm font-medium text-label-md text-ink truncate"
              >Siti Aminah</span
            ><span
              class="font-caption text-caption text-graphite truncate"
              >Kader Utama</span
            >
          </div>
        </div>
      </div>
    </aside>
    <div class="pl-72">
      <header
        class="fixed top-0 left-72 right-0 h-16 bg-paper/90-xl-[0_1px_8px_rgba(0,0,0,0.04)] z-40 px-8 flex items-center justify-between"
      >
        <div class="relative w-80">
          <span
            class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-graphite text-[20px]"
            >search</span
          ><input
            class="w-full pl-10 pr-4 py-2 bg-fog text-ink text-[15px] text-label-md placeholder:text-graphite focus:outline-none focus:bg-paper transition-colors"
            placeholder="Cari NIK, KK, atau Nama..."
            type="text"
          />
        </div>
        <div class="flex items-center gap-6">
          <button
            class="relative p-2 text-graphite hover:text-ink transition-colors"
            type="button"
          >
            <span class="material-symbols-outlined text-[22px]"
              >notifications</span
            ><span
              class="absolute top-1.5 right-1.5 w-2 h-2 rounded-[100px] bg-primary-light"
            ></span>
          </button>
          <div class="flex items-center gap-3 pl-4">
            <div
              class="w-8 h-8 rounded-[100px] bg-primary flex items-center justify-center"
            >
              <span
                class="material-symbols-outlined text-white text-[18px]"
                >person</span
              >
            </div>
            <div class="hidden md:flex flex-col text-left">
              <span
                class="text-sm font-medium text-label-md text-ink leading-tight"
                >Siti Aminah</span
              ><span
                class="font-caption text-caption text-graphite"
                >Satpel Cikampek</span
              >
            </div>
          </div>
        </div>
      </header>
      <main class="relative pt-16 bg-fog min-h-screen">
        <div class="max-w-[1000px] mx-auto px-6 py-8">
          <div class="flex flex-col w-full">
            <!-- Breadcrumb Navigation -->
            <div class="flex items-center justify-between pb-6">
              <nav
                class="flex items-center gap-2 font-caption text-caption text-graphite"
              >
                <a
                  class="hover:text-primary transition-colors flex items-center gap-1"
                  href="#"
                >
                  <span
                    class="material-symbols-outlined text-[16px]"
                    >home</span
                  >
                  Data Keluarga
                </a>
                <span>/</span>
                <a
                  class="hover:text-primary transition-colors text-sm font-medium text-caption text-ink"
                  href="#"
                  >Bpk. Supriyanto</a
                >
                <span>/</span>
                <span
                  class="text-primary text-sm font-medium text-caption"
                  >Tambah Anggota</span
                >
              </nav>
              <a
                class="flex items-center gap-1.5 text-sm font-medium text-caption text-primary hover:text-primary-light transition-colors py-1 px-3 bg-fog hover:bg-paper-variant"
                href="#"
              >
                <span
                  class="material-symbols-outlined text-[16px]"
                  >arrow_back</span
                >
                <span>Kembali ke Kartu Keluarga</span>
              </a>
            </div>
            <!-- Editorial Top Context Card (Civic Dossier) -->
            <section
              class="bg-paper p-6-card mb-8 relative overflow-hidden"
            >
              <div
                class="absolute left-0 top-0 bottom-0 w-1.5 bg-primary-light"
              ></div>
              <div
                class="flex flex-col md:flex-row md:items-center justify-between gap-6"
              >
                <div class="flex items-start gap-4">
                  <div
                    class="w-12 h-12 bg-fog flex items-center justify-center shrink-0"
                  >
                    <span
                      class="material-symbols-outlined text-primary text-[28px]"
                      >family_restroom</span
                    >
                  </div>
                  <div class="space-y-1">
                    <div class="flex items-center gap-2">
                      <span
                        class="font-caption text-caption uppercase tracking-widest text-graphite"
                        >Konteks Pendaftaran Anggota
                        Baru</span
                      >
                      <span
                        class="bg-green-50 text-green-700 text-sm font-medium text-[11px] px-2 py-0.5 uppercase tracking-wider"
                        >KK Terverifikasi</span
                      >
                    </div>
                    <h2
                      class="text-xl font-bold text-headline-md text-ink"
                    >
                      Kepala Keluarga: Bpk. Supriyanto
                    </h2>
                    <div
                      class="flex flex-wrap items-center gap-x-4 gap-y-1 font-caption text-caption text-graphite"
                    >
                      <span
                        class="flex items-center gap-1 font-mono font-semibold text-ink"
                      >
                        <span
                          class="material-symbols-outlined text-[15px] text-graphite"
                          >badge</span
                        >
                        No. KK: •••• •••• •••• 1234
                      </span>
                      <span>•</span>
                      <span
                        class="flex items-center gap-1"
                      >
                        <span
                          class="material-symbols-outlined text-[15px] text-graphite"
                          >location_on</span
                        >
                        Dusun Krajan, RT 01 / RW 07,
                        Desa Cikampek Timur
                      </span>
                    </div>
                  </div>
                </div>
                <div
                  class="flex items-center gap-4 pt-4 md:pt-0 border-t md:border-t-0 border-surface-variant"
                >
                  <div class="text-right">
                    <div
                      class="text-sm font-medium text-caption text-graphite"
                    >
                      Status Saat Ini
                    </div>
                    <div
                      class="text-xl font-bold text-headline-md text-primary leading-tight"
                    >
                      4
                      <span
                        class="text-[15px] text-caption text-graphite"
                        >Individu</span
                      >
                    </div>
                  </div>
                  <div
                    class="h-10 w-px bg-paper-variant"
                  ></div>
                  <div
                    class="bg-primary-fixed text-white-fixed p-2 text-center text-[11px] text-sm font-medium leading-tight max-w-[130px]"
                  >
                    Aksi: Input Anggota ke-5
                  </div>
                </div>
              </div>
            </section>
            <!-- Page Title & Guidance Section -->
            <header class="mb-8">
              <div
                class="flex items-center gap-2 text-primary text-sm font-medium text-caption uppercase tracking-wider mb-2"
              >
                <span
                  class="material-symbols-outlined text-[18px]"
                  >how_to_reg</span
                >
                <span
                  >Instrumen Pemutakhiran Data Lapangan
                  PPKB</span
                >
              </div>
              <h1
                class="text-2xl font-bold text-headline-lg text-ink tracking-tight"
              >
                Tambah Anggota Keluarga
              </h1>
              <p
                class="text-[15px] text-body-md text-graphite mt-2 max-w-3xl"
              >
                Masukkan data dasar individu yang akan
                ditambahkan ke dalam registrasi kependudukan.
                Pastikan seluruh entri bersumber langsung dari
                dokumen resmi (<span
                  class="text-ink font-semibold"
                  >KTP-el / Kartu Keluarga</span
                >). Field bertanda (<span
                  class="text-red-600 font-bold"
                  >*</span
                >) wajib diisi.
              </p>
            </header>
            <!-- Main Structured Form Container -->
            <div
              class="w-full bg-paper p-8 md:p-10-card mb-8"
            >
              <form
                class="space-y-12"
                id="formTambahAnggota"
                onsubmit="event.preventDefault()"
              >
                <!-- SECTION 1: DATA IDENTITAS -->
                <fieldset class="space-y-6">
                  <div
                    class="flex items-center justify-between pb-3 bg-fog px-4 py-3"
                  >
                    <div class="flex items-center gap-3">
                      <span
                        class="w-7 h-7 bg-primary text-white text-sm font-medium flex items-center justify-center text-caption"
                        >01</span
                      >
                      <legend
                        class="text-xl font-bold text-[18px] text-ink font-bold"
                      >
                        Data Identitas Kependudukan
                      </legend>
                    </div>
                    <span
                      class="font-caption text-caption text-graphite"
                      >Verifikasi Identitas Dukcapil</span
                    >
                  </div>
                  <div
                    class="grid grid-cols-1 md:grid-cols-2 gap-6 pt-2"
                  >
                    <!-- Nama Lengkap -->
                    <div class="md:col-span-2 space-y-2">
                      <label
                        class="block text-sm font-medium text-label-md text-ink"
                        for="namaLengkap"
                      >
                        Nama Lengkap Sesuai Dokumen
                        Resmi
                        <span
                          class="text-red-600 font-bold"
                          >*</span
                        >
                      </label>
                      <div class="relative">
                        <input
                          class="w-full h-12 px-4 bg-fog text-ink text-[15px] placeholder:text-graphite focus:outline-none focus:bg-paper focus:ring-2 focus:ring-primary-container transition-all"
                          id="namaLengkap"
                          placeholder="Masukkan nama lengkap tanpa singkatan (Contoh: Siti Aisyah Azzahra)"
                          required=""
                          type="text"
                        />
                      </div>
                      <p
                        class="font-caption text-caption text-graphite"
                      >
                        Hindari penggunaan gelar
                        kehormatan pada isian nama pokok
                        KTP/KK.
                      </p>
                    </div>
                    <!-- NIK -->
                    <div class="space-y-2">
                      <div
                        class="flex items-center justify-between"
                      >
                        <label
                          class="block text-sm font-medium text-label-md text-ink"
                          for="nik"
                        >
                          Nomor Induk Kependudukan
                          (NIK)
                          <span
                            class="text-red-600 font-bold"
                            >*</span
                          >
                        </label>
                        <span
                          class="font-mono text-caption text-graphite font-semibold"
                          id="nikCounter"
                          >0/16 digit</span
                        >
                      </div>
                      <div class="relative">
                        <span
                          class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-graphite text-[20px]"
                          >badge</span
                        >
                        <input
                          class="w-full h-12 pl-10 pr-4 bg-fog text-ink font-mono text-label-md placeholder:text-graphite focus:outline-none focus:bg-paper focus:ring-2 focus:ring-primary-container transition-all tracking-wider"
                          id="nik"
                          maxlength="16"
                          placeholder="3215xxxxxxxxxxxx"
                          required=""
                          type="text"
                        />
                      </div>
                      <p
                        class="font-caption text-caption text-graphite flex items-center gap-1"
                      >
                        <span
                          class="material-symbols-outlined text-[14px] text-primary"
                          >info</span
                        >
                        Hanya 16 digit angka resmi.
                        Sistem akan memverifikasi
                        duplikasi NIK.
                      </p>
                    </div>
                    <!-- Jenis Kelamin -->
                    <div class="space-y-2">
                      <label
                        class="block text-sm font-medium text-label-md text-ink"
                      >
                        Jenis Kelamin
                        <span
                          class="text-red-600 font-bold"
                          >*</span
                        >
                      </label>
                      <div
                        class="grid grid-cols-2 gap-3 h-12"
                      >
                        <label
                          class="flex items-center justify-center gap-2.5 px-4 bg-fog hover:bg-fog cursor-pointer transition-colors has-[:checked]:bg-primary-light has-[:checked]:text-white text-ink text-sm font-medium text-label-md select-none"
                        >
                          <input
                            checked=""
                            class="sr-only"
                            name="jenisKelamin"
                            type="radio"
                            value="Laki-laki"
                          />
                          <span
                            class="material-symbols-outlined text-[18px]"
                            >male</span
                          >
                          <span>Laki-laki</span>
                        </label>
                        <label
                          class="flex items-center justify-center gap-2.5 px-4 bg-fog hover:bg-fog cursor-pointer transition-colors has-[:checked]:bg-primary-light has-[:checked]:text-white text-ink text-sm font-medium text-label-md select-none"
                        >
                          <input
                            class="sr-only"
                            name="jenisKelamin"
                            type="radio"
                            value="Perempuan"
                          />
                          <span
                            class="material-symbols-outlined text-[18px]"
                            >female</span
                          >
                          <span>Perempuan</span>
                        </label>
                      </div>
                      <p
                        class="font-caption text-caption text-graphite"
                      >
                        Pilih sesuai penanda gender
                        resmi di akta/KTP.
                      </p>
                    </div>
                    <!-- Tempat Lahir -->
                    <div class="space-y-2">
                      <label
                        class="block text-sm font-medium text-label-md text-ink"
                        for="tempatLahir"
                      >
                        Tempat Lahir
                        <span
                          class="text-red-600 font-bold"
                          >*</span
                        >
                      </label>
                      <div class="relative">
                        <span
                          class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-graphite text-[20px]"
                          >location_city</span
                        >
                        <input
                          class="w-full h-12 pl-10 pr-4 bg-fog text-ink text-[15px] placeholder:text-graphite focus:outline-none focus:bg-paper focus:ring-2 focus:ring-primary-container transition-all"
                          id="tempatLahir"
                          placeholder="Contoh: Karawang"
                          required=""
                          type="text"
                        />
                      </div>
                    </div>
                    <!-- Tanggal Lahir -->
                    <div class="space-y-2">
                      <label
                        class="block text-sm font-medium text-label-md text-ink"
                        for="tanggalLahir"
                      >
                        Tanggal Lahir
                        <span
                          class="text-red-600 font-bold"
                          >*</span
                        >
                      </label>
                      <div class="relative">
                        <input
                          class="w-full h-12 px-4 bg-fog text-ink text-[15px] focus:outline-none focus:bg-paper focus:ring-2 focus:ring-primary-container transition-all"
                          id="tanggalLahir"
                          max="2025-05-18"
                          required=""
                          type="date"
                        />
                      </div>
                      <p
                        class="font-caption text-caption text-graphite"
                      >
                        Format: Tanggal/Bulan/Tahun
                        (Maksimal hari ini).
                      </p>
                    </div>
                  </div>
                </fieldset>
                <!-- SECTION 2: HUBUNGAN KELUARGA -->
                <fieldset class="space-y-6">
                  <div
                    class="flex items-center justify-between pb-3 bg-fog px-4 py-3"
                  >
                    <div class="flex items-center gap-3">
                      <span
                        class="w-7 h-7 bg-primary text-white text-sm font-medium flex items-center justify-center text-caption"
                        >02</span
                      >
                      <legend
                        class="text-xl font-bold text-[18px] text-ink font-bold"
                      >
                        Kedudukan dalam Keluarga
                      </legend>
                    </div>
                    <span
                      class="font-caption text-caption text-graphite"
                      >Struktur Susunan KK</span
                    >
                  </div>
                  <div
                    class="grid grid-cols-1 md:grid-cols-2 gap-6 pt-2"
                  >
                    <div class="space-y-2">
                      <label
                        class="block text-sm font-medium text-label-md text-ink"
                        for="hubunganKeluarga"
                      >
                        Hubungan dengan Kepala Keluarga
                        (Bpk. Supriyanto)
                        <span
                          class="text-red-600 font-bold"
                          >*</span
                        >
                      </label>
                      <div class="relative">
                        <select
                          class="w-full h-12 px-4 bg-fog text-ink text-[15px] focus:outline-none focus:bg-paper focus:ring-2 focus:ring-primary-container transition-all appearance-none cursor-pointer"
                          id="hubunganKeluarga"
                          required=""
                        >
                          <option
                            disabled=""
                            selected=""
                            value=""
                          >
                            -- Pilih Hubungan
                            Keluarga --
                          </option>
                          <option value="Istri">
                            Istri
                          </option>
                          <option value="Suami">
                            Suami
                          </option>
                          <option value="Anak">
                            Anak
                          </option>
                          <option value="Orang Tua">
                            Orang Tua (Ayah/Ibu)
                          </option>
                          <option value="Mertua">
                            Mertua
                          </option>
                          <option value="Saudara">
                            Saudara Kandung
                          </option>
                          <option value="Cucu">
                            Cucu
                          </option>
                          <option value="Keponakan">
                            Keponakan / Famili Lain
                          </option>
                          <option value="Lainnya">
                            Lainnya
                          </option>
                        </select>
                        <span
                          class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 text-graphite pointer-events-none text-[20px]"
                          >expand_more</span
                        >
                      </div>
                      <p
                        class="font-caption text-caption text-graphite"
                      >
                        Menentukan jalur eligibility
                        bantuan dan analisis piramida
                        usia keluarga.
                      </p>
                    </div>
                    <!-- Hubungan Lainnya (Kondisional) -->
                    <div
                      class="space-y-2 hidden"
                      id="wrapperHubunganLainnya"
                    >
                      <label
                        class="block text-sm font-medium text-label-md text-ink"
                        for="hubunganLainnya"
                      >
                        Sebutkan Hubungan Lainnya
                        <span
                          class="text-red-600 font-bold"
                          >*</span
                        >
                      </label>
                      <input
                        class="w-full h-12 px-4 bg-fog text-ink text-[15px] placeholder:text-graphite focus:outline-none focus:bg-paper focus:ring-2 focus:ring-primary-container transition-all"
                        id="hubunganLainnya"
                        placeholder="Misal: Anak Angkat / Kerabat Jauh"
                        type="text"
                      />
                    </div>
                  </div>
                </fieldset>
                <!-- SECTION 3: INFORMASI SOSIAL -->
                <fieldset class="space-y-6">
                  <div
                    class="flex items-center justify-between pb-3 bg-fog px-4 py-3"
                  >
                    <div class="flex items-center gap-3">
                      <span
                        class="w-7 h-7 bg-primary text-white text-sm font-medium flex items-center justify-center text-caption"
                        >03</span
                      >
                      <legend
                        class="text-xl font-bold text-[18px] text-ink font-bold"
                      >
                        Informasi Sosial &amp; Ekonomi
                      </legend>
                    </div>
                    <span
                      class="font-caption text-caption text-graphite"
                      >Profil Demografi Wilayah</span
                    >
                  </div>
                  <div
                    class="grid grid-cols-1 md:grid-cols-2 gap-6 pt-2"
                  >
                    <!-- Status Perkawinan -->
                    <div class="space-y-2">
                      <label
                        class="block text-sm font-medium text-label-md text-ink"
                        for="statusPerkawinan"
                      >
                        Status Perkawinan
                        <span
                          class="text-red-600 font-bold"
                          >*</span
                        >
                      </label>
                      <div class="relative">
                        <select
                          class="w-full h-12 px-4 bg-fog text-ink text-[15px] focus:outline-none focus:bg-paper focus:ring-2 focus:ring-primary-container transition-all appearance-none cursor-pointer"
                          id="statusPerkawinan"
                          required=""
                        >
                          <option
                            disabled=""
                            selected=""
                            value=""
                          >
                            -- Pilih Status
                            Perkawinan --
                          </option>
                          <option value="Belum Kawin">
                            Belum Kawin
                          </option>
                          <option value="Kawin">
                            Kawin Tercatat
                          </option>
                          <option
                            value="Kawin Belum Tercatat"
                          >
                            Kawin Belum Tercatat
                          </option>
                          <option value="Cerai Hidup">
                            Cerai Hidup
                          </option>
                          <option value="Cerai Mati">
                            Cerai Mati
                          </option>
                        </select>
                        <span
                          class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 text-graphite pointer-events-none text-[20px]"
                          >expand_more</span
                        >
                      </div>
                    </div>
                    <!-- Pendidikan Terakhir -->
                    <div class="space-y-2">
                      <label
                        class="block text-sm font-medium text-label-md text-ink"
                        for="pendidikan"
                      >
                        Pendidikan Terakhir
                      </label>
                      <div class="relative">
                        <select
                          class="w-full h-12 px-4 bg-fog text-ink text-[15px] focus:outline-none focus:bg-paper focus:ring-2 focus:ring-primary-container transition-all appearance-none cursor-pointer"
                          id="pendidikan"
                        >
                          <option
                            disabled=""
                            selected=""
                            value=""
                          >
                            -- Pilih Jenjang
                            Pendidikan --
                          </option>
                          <option
                            value="Tidak/Belum Sekolah"
                          >
                            Tidak / Belum Pernah
                            Sekolah
                          </option>
                          <option
                            value="SD/Sederajat"
                          >
                            SD / MI / Sederajat
                          </option>
                          <option
                            value="SMP/Sederajat"
                          >
                            SMP / MTs / Sederajat
                          </option>
                          <option
                            value="SMA/Sederajat"
                          >
                            SMA / SMK / MA /
                            Sederajat
                          </option>
                          <option value="Diploma">
                            Diploma (D1 - D3)
                          </option>
                          <option value="S1">
                            Sarjana (S1) / D4
                          </option>
                          <option value="S2">
                            Magister (S2)
                          </option>
                          <option value="S3">
                            Doktor (S3)
                          </option>
                        </select>
                        <span
                          class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 text-graphite pointer-events-none text-[20px]"
                          >expand_more</span
                        >
                      </div>
                    </div>
                    <!-- Pekerjaan Pokok -->
                    <div class="space-y-2">
                      <label
                        class="block text-sm font-medium text-label-md text-ink"
                        for="pekerjaan"
                      >
                        Pekerjaan Pokok
                      </label>
                      <div class="relative">
                        <select
                          class="w-full h-12 px-4 bg-fog text-ink text-[15px] focus:outline-none focus:bg-paper focus:ring-2 focus:ring-primary-container transition-all appearance-none cursor-pointer"
                          id="pekerjaan"
                        >
                          <option
                            disabled=""
                            selected=""
                            value=""
                          >
                            -- Pilih Jenis Pekerjaan
                            --
                          </option>
                          <option
                            value="Belum/Tidak Bekerja"
                          >
                            Belum / Tidak Bekerja
                          </option>
                          <option
                            value="Pelajar/Mahasiswa"
                          >
                            Pelajar / Mahasiswa
                          </option>
                          <option
                            value="Ibu Rumah Tangga"
                          >
                            Mengurus Rumah Tangga
                          </option>
                          <option value="PNS">
                            Aparatur Sipil Negara
                            (PNS/PPPK/TNI/Polri)
                          </option>
                          <option
                            value="Pegawai Swasta"
                          >
                            Karyawan / Pegawai
                            Swasta
                          </option>
                          <option value="Wiraswasta">
                            Wiraswasta / Usaha
                            Mandiri
                          </option>
                          <option value="Petani">
                            Petani / Peternak
                          </option>
                          <option value="Buruh">
                            Buruh Harian Lepas /
                            Pabrik
                          </option>
                          <option value="Pedagang">
                            Pedagang / Jasa
                          </option>
                          <option value="Lainnya">
                            Lainnya
                          </option>
                        </select>
                        <span
                          class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 text-graphite pointer-events-none text-[20px]"
                          >expand_more</span
                        >
                      </div>
                    </div>
                    <!-- Pekerjaan Lainnya Detail (Kondisional) -->
                    <div
                      class="space-y-2 hidden"
                      id="wrapperPekerjaanLainnya"
                    >
                      <label
                        class="block text-sm font-medium text-label-md text-ink"
                        for="pekerjaanLainnya"
                      >
                        Tuliskan Jenis Pekerjaan
                        Spesifik
                      </label>
                      <input
                        class="w-full h-12 px-4 bg-fog text-ink text-[15px] placeholder:text-graphite focus:outline-none focus:bg-paper focus:ring-2 focus:ring-primary-container transition-all"
                        id="pekerjaanLainnya"
                        placeholder="Contoh: Pekerja Seni / Montir Lepas"
                        type="text"
                      />
                    </div>
                  </div>
                </fieldset>
                <!-- SECTION 4: KONTAK -->
                <fieldset class="space-y-6">
                  <div
                    class="flex items-center justify-between pb-3 bg-fog px-4 py-3"
                  >
                    <div class="flex items-center gap-3">
                      <span
                        class="w-7 h-7 bg-primary text-white text-sm font-medium flex items-center justify-center text-caption"
                        >04</span
                      >
                      <legend
                        class="text-xl font-bold text-[18px] text-ink font-bold"
                      >
                        Saluran Komunikasi (Opsional)
                      </legend>
                    </div>
                    <span
                      class="font-caption text-caption text-graphite"
                      >Integrasi Layanan Notifikasi
                      Satpel</span
                    >
                  </div>
                  <div
                    class="grid grid-cols-1 md:grid-cols-2 gap-6 pt-2"
                  >
                    <!-- Telepon / WhatsApp -->
                    <div class="space-y-2">
                      <label
                        class="block text-sm font-medium text-label-md text-ink"
                        for="noKontak"
                      >
                        Nomor WhatsApp / Seluler
                      </label>
                      <div class="relative">
                        <span
                          class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-graphite text-[20px]"
                          >call</span
                        >
                        <input
                          class="w-full h-12 pl-10 pr-4 bg-fog text-ink font-mono text-label-md placeholder:text-graphite focus:outline-none focus:bg-paper focus:ring-2 focus:ring-primary-container transition-all"
                          id="noKontak"
                          placeholder="08xxxxxxxxxx"
                          type="tel"
                        />
                      </div>
                      <p
                        class="font-caption text-caption text-graphite"
                      >
                        Digunakan kader untuk jadwal
                        posyandu, reminder KB, atau
                        bansos stunting.
                      </p>
                    </div>
                    <!-- Status Kontak -->
                    <div class="space-y-2">
                      <label
                        class="block text-sm font-medium text-label-md text-ink"
                      >
                        Status Kepemilikan &amp;
                        Keaktifan Kontak
                      </label>
                      <div
                        class="grid grid-cols-2 gap-3 h-12"
                      >
                        <label
                          class="flex items-center justify-center gap-2 px-4 bg-fog hover:bg-fog cursor-pointer transition-colors has-[:checked]:bg-primary-light has-[:checked]:text-white text-ink text-sm font-medium text-caption select-none"
                        >
                          <input
                            checked=""
                            class="sr-only"
                            name="statusNomor"
                            type="radio"
                            value="Aktif Mandiri"
                          />
                          <span
                            class="material-symbols-outlined text-[16px]"
                            >check_circle</span
                          >
                          <span>Aktif Mandiri</span>
                        </label>
                        <label
                          class="flex items-center justify-center gap-2 px-4 bg-fog hover:bg-fog cursor-pointer transition-colors has-[:checked]:bg-primary-light has-[:checked]:text-white text-ink text-sm font-medium text-caption select-none"
                        >
                          <input
                            class="sr-only"
                            name="statusNomor"
                            type="radio"
                            value="Numpang KK"
                          />
                          <span
                            class="material-symbols-outlined text-[16px]"
                            >contact_phone</span
                          >
                          <span>Ikut Kepala KK</span>
                        </label>
                      </div>
                    </div>
                  </div>
                </fieldset>
                <!-- SECTION 5: CATATAN KHUSUS LAPANGAN -->
                <fieldset class="space-y-6">
                  <div
                    class="flex items-center justify-between pb-3 bg-fog px-4 py-3"
                  >
                    <div class="flex items-center gap-3">
                      <span
                        class="w-7 h-7 bg-primary text-white text-sm font-medium flex items-center justify-center text-caption"
                        >05</span
                      >
                      <legend
                        class="text-xl font-bold text-[18px] text-ink font-bold"
                      >
                        Catatan Khusus Lapangan
                      </legend>
                    </div>
                    <span
                      class="font-caption text-caption text-graphite"
                      >Catatan Kader PPKB</span
                    >
                  </div>
                  <div class="space-y-2 pt-2">
                    <label
                      class="block text-sm font-medium text-label-md text-ink"
                      for="catatanKader"
                    >
                      Kondisi Spesifik / Catatan Lapangan
                      (Opsional)
                    </label>
                    <textarea
                      class="w-full p-4 bg-fog text-ink text-[15px] placeholder:text-graphite focus:outline-none focus:bg-paper focus:ring-2 focus:ring-primary-container transition-all"
                      id="catatanKader"
                      placeholder="Catatan kondisi kesehatan dasar, alergi berat, ragam disabilitas fisik/mental, atau keterangan tambahan situasi tempat tinggal..."
                      rows="3"
                    ></textarea>
                    <p
                      class="font-caption text-caption text-graphite"
                    >
                      Catatan ini bersifat internal untuk
                      koordinasi monitoring kader di
                      tingkat Desa Cikampek Timur.
                    </p>
                  </div>
                </fieldset>
              </form>
            </div>
            <!-- Civic Notices & Security Enclave -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
              <!-- Next Step Notice -->
              <div
                class="bg-paper p-6-card flex items-start gap-4"
              >
                <div
                  class="w-10 h-10 bg-tertiary-fixed text-on-tertiary-fixed flex items-center justify-center shrink-0"
                >
                  <span
                    class="material-symbols-outlined text-[24px]"
                    >lightbulb</span
                  >
                </div>
                <div class="space-y-1">
                  <h4
                    class="text-sm font-medium text-label-md text-ink"
                  >
                    Tahap Lanjutan: Klasifikasi Program
                  </h4>
                  <p
                    class="font-caption text-caption text-graphite leading-relaxed"
                  >
                    Penetapan kategori khusus seperti
                    <span
                      class="font-semibold text-ink"
                      >CATIN, BUMIL, BADUTA/BATITA,
                      Pasangan Usia Subur (PUS), Akseptor
                      KB, Remaja</span
                    >, atau
                    <span
                      class="font-semibold text-ink"
                      >Lansia</span
                    >
                    dilakukan pada layar profil setelah data
                    dasar tersimpan.
                  </p>
                </div>
              </div>
              <!-- Security & Privacy Dossier Box -->
              <div
                class="bg-paper p-6-card flex items-start gap-4"
              >
                <div
                  class="w-10 h-10 bg-green-50 text-green-700 flex items-center justify-center shrink-0"
                >
                  <span
                    class="material-symbols-outlined text-[24px]"
                    >shield</span
                  >
                </div>
                <div class="space-y-1">
                  <h4
                    class="text-sm font-medium text-label-md text-ink"
                  >
                    Perlindungan Kerahasiaan Data (Satu Data
                    PPKB)
                  </h4>
                  <p
                    class="font-caption text-caption text-graphite leading-relaxed"
                  >
                    Data kependudukan dilindungi standar
                    enkripsi kementerian. NIK hanya
                    digunakan untuk sinkronisasi bansos dan
                    profil kesehatan terpadu di lingkungan
                    Satpel PPKB Cikampek.
                  </p>
                </div>
              </div>
            </div>
            <!-- Form Action Hub -->
            <div
              class="bg-paper p-6-card flex flex-col sm:flex-row items-center justify-between gap-4 sticky bottom-4 z-30"
            >
              <div
                class="flex items-center gap-2 text-graphite font-caption text-caption"
              >
                <span
                  class="material-symbols-outlined text-[18px] text-green-700"
                  >cloud_done</span
                >
                <span
                  >Draf formulir tersimpan otomatis di
                  perangkat lokal</span
                >
              </div>
              <div
                class="flex items-center flex-wrap gap-3 w-full sm:w-auto justify-end"
              >
                <!-- Batal -->
                <a
                  class="px-5 py-3 text-graphite hover:text-ink hover:bg-fog text-sm font-medium text-label-md transition-colors text-center"
                  href="#"
                >
                  Batalkan
                </a>
                <!-- Simpan Draft -->
                <button
                  class="px-5 py-3 bg-fog hover:bg-paper-variant text-ink text-sm font-medium text-label-md transition-colors flex items-center gap-2"
                  id="btnDraft"
                  type="button"
                >
                  <span
                    class="material-symbols-outlined text-[18px]"
                    >draft</span
                  >
                  <span>Simpan sebagai Draft</span>
                </button>
                <!-- Simpan & Lanjutkan -->
                <button
                  class="px-7 py-3 bg-primary-light hover:bg-primary text-white text-sm font-medium text-label-md transition-all flex items-center gap-2-card hover:shadow-card"
                  id="btnSubmit"
                  type="button"
                >
                  <span
                    >Simpan &amp; Lanjut ke Profil
                    Individu</span
                  >
                  <span
                    class="material-symbols-outlined text-[18px]"
                    >arrow_forward</span
                  >
                </button>
              </div>
            </div>
            <!-- Toast Notification Modal/Feedback (Hidden by default) -->
            <div
              class="fixed bottom-8 right-8 z-50 bg-inverse-surface text-inverse-on-surface p-4-xl flex items-center gap-3 transition-opacity duration-300 opacity-0 pointer-events-none"
              id="toastSuccess"
            >
              <span
                class="material-symbols-outlined text-green-700-fixed text-[24px]"
                >task_alt</span
              >
              <div>
                <div class="text-sm font-medium text-label-md">
                  Anggota Keluarga Berhasil Disimpan
                </div>
                <div
                  class="font-caption text-caption text-surface-dim"
                >
                  Mengarahkan ke halaman penetapan program
                  individu...
                </div>
              </div>
            </div>
            <script>
              // Interaktivitas NIK Counter
              const nikInput = document.getElementById("nik");
              const nikCounter =
                document.getElementById("nikCounter");

              if (nikInput && nikCounter) {
                nikInput.addEventListener("input", (e) => {
                  // Hanya izinkan angka
                  e.target.value = e.target.value.replace(
                    /[^0-9]/g,
                    "",
                  );
                  const count = e.target.value.length;
                  nikCounter.textContent = `${count}/16 digit`;
                  if (count === 16) {
                    nikCounter.classList.remove(
                      "text-graphite",
                      "text-red-600",
                    );
                    nikCounter.classList.add(
                      "text-green-700",
                    );
                  } else if (count > 0 && count < 16) {
                    nikCounter.classList.remove(
                      "text-graphite",
                      "text-green-700",
                    );
                    nikCounter.classList.add("text-red-600");
                  } else {
                    nikCounter.classList.add(
                      "text-graphite",
                    );
                    nikCounter.classList.remove(
                      "text-green-700",
                      "text-red-600",
                    );
                  }
                });
              }

              // Toggle Hubungan Lainnya
              const hubunganSelect =
                document.getElementById("hubunganKeluarga");
              const wrapperHubunganLainnya =
                document.getElementById(
                  "wrapperHubunganLainnya",
                );
              const hubunganLainnya =
                document.getElementById("hubunganLainnya");

              if (hubunganSelect && wrapperHubunganLainnya) {
                hubunganSelect.addEventListener(
                  "change",
                  () => {
                    if (
                      hubunganSelect.value === "Lainnya"
                    ) {
                      wrapperHubunganLainnya.classList.remove(
                        "hidden",
                      );
                      hubunganLainnya.setAttribute(
                        "required",
                        "required",
                      );
                      hubunganLainnya.focus();
                    } else {
                      wrapperHubunganLainnya.classList.add(
                        "hidden",
                      );
                      hubunganLainnya.removeAttribute(
                        "required",
                      );
                    }
                  },
                );
              }

              // Toggle Pekerjaan Lainnya
              const pekerjaanSelect =
                document.getElementById("pekerjaan");
              const wrapperPekerjaanLainnya =
                document.getElementById(
                  "wrapperPekerjaanLainnya",
                );

              if (pekerjaanSelect && wrapperPekerjaanLainnya) {
                pekerjaanSelect.addEventListener(
                  "change",
                  () => {
                    if (
                      pekerjaanSelect.value === "Lainnya"
                    ) {
                      wrapperPekerjaanLainnya.classList.remove(
                        "hidden",
                      );
                    } else {
                      wrapperPekerjaanLainnya.classList.add(
                        "hidden",
                      );
                    }
                  },
                );
              }

              // Micro interaction: Submit Demo
              const btnSubmit =
                document.getElementById("btnSubmit");
              const btnDraft =
                document.getElementById("btnDraft");
              const toast =
                document.getElementById("toastSuccess");

              function triggerToast(msg) {
                if (toast) {
                  if (msg)
                    toast.querySelector(
                      ".font-caption",
                    ).textContent = msg;
                  toast.classList.remove(
                    "opacity-0",
                    "pointer-events-none",
                  );
                  setTimeout(() => {
                    toast.classList.add(
                      "opacity-0",
                      "pointer-events-none",
                    );
                  }, 3200);
                }
              }

              if (btnSubmit) {
                btnSubmit.addEventListener("click", () => {
                  const nama =
                    document.getElementById("namaLengkap");
                  if (nama && !nama.value) {
                    nama.focus();
                    nama.classList.add(
                      "ring-2",
                      "ring-error",
                    );
                    setTimeout(
                      () =>
                        nama.classList.remove(
                          "ring-2",
                          "ring-error",
                        ),
                      2000,
                    );
                    return;
                  }
                  triggerToast(
                    "Mengarahkan ke formulir penapisan program...",
                  );
                });
              }

              if (btnDraft) {
                btnDraft.addEventListener("click", () => {
                  triggerToast(
                    "Draf isian berhasil disimpan sementara.",
                  );
                });
              }
            </script>
          </div>
        </div>
      </main>
    </div>
  </body>
</html>
