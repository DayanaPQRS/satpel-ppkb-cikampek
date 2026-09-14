<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <link
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&amp;display=swap"
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
              primary: "#00408b",
              "on-tertiary": "#ffffff",
              "surface-container": "#ededf6",
              "on-primary-fixed": "#001a41",
              "outline-variant": "#c2c6d4",
              "surface-container-high": "#e7e7f0",
              "on-secondary": "#ffffff",
              background: "#f9f9ff",
              "secondary-fixed-dim": "#6cdd86",
              "primary-fixed-dim": "#adc7ff",
              "tertiary-fixed": "#ffe08a",
              "tertiary-container": "#cfa600",
              surface: "#f9f9ff",
              error: "#ba1a1a",
              "surface-bright": "#f9f9ff",
              outline: "#727784",
              "secondary-container": "#88faa0",
              "primary-fixed": "#d8e2ff",
              "surface-variant": "#e1e2eb",
              "surface-container-low": "#f2f3fc",
              "primary-container": "#0057b8",
              "on-primary": "#ffffff",
              "on-background": "#191c22",
              "on-primary-container": "#bfd2ff",
              "surface-container-lowest": "#ffffff",
              "on-surface": "#191c22",
              "tertiary-fixed-dim": "#f1c100",
              "on-tertiary-container": "#4e3d00",
              "on-error-container": "#93000a",
              "surface-tint": "#0d5bbc",
              "on-surface-variant": "#424752",
              "inverse-surface": "#2e3037",
              secondary: "#006d31",
              "on-tertiary-fixed-variant": "#574400",
              "secondary-fixed": "#88faa0",
              "on-secondary-container": "#007434",
              "inverse-primary": "#adc7ff",
              "inverse-on-surface": "#eff0f9",
              "on-secondary-fixed": "#00210a",
              "surface-dim": "#d9d9e2",
              "on-secondary-fixed-variant": "#005323",
              "error-container": "#ffdad6",
              tertiary: "#745b00",
              "surface-container-highest": "#e1e2eb",
              "on-primary-fixed-variant": "#004493",
              "on-tertiary-fixed": "#241a00",
              "on-error": "#ffffff",
            },
            borderRadius: {
              DEFAULT: "0.25rem",
              lg: "0.5rem",
              xl: "0.75rem",
              full: "9999px",
            },
            spacing: {
              md: "16px",
              unit: "4px",
              sm: "8px",
              "container-max": "1280px",
              gutter: "24px",
              xl: "40px",
              xxl: "64px",
              lg: "24px",
              xs: "4px",
            },
            fontFamily: {
              "headline-lg": ["Plus Jakarta Sans"],
              "display-lg": ["Plus Jakarta Sans"],
              "body-md": ["Plus Jakarta Sans"],
              "headline-md": ["Plus Jakarta Sans"],
              "display-xl": ["Plus Jakarta Sans"],
              "body-lg": ["Plus Jakarta Sans"],
              "label-md": ["Plus Jakarta Sans"],
              caption: ["Plus Jakarta Sans"],
            },
            fontSize: {
              "headline-lg": [
                "32px",
                {
                  lineHeight: "40px",
                  letterSpacing: "-0.01em",
                  fontWeight: "600",
                },
              ],
              "display-lg": [
                "48px",
                {
                  lineHeight: "56px",
                  letterSpacing: "-0.02em",
                  fontWeight: "700",
                },
              ],
              "body-md": [
                "16px",
                { lineHeight: "24px", fontWeight: "400" },
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
              "body-lg": [
                "18px",
                { lineHeight: "28px", fontWeight: "400" },
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
            },
          },
        },
      };
    </script>
  </head>
  <body
    class="bg-background text-[15px] text-body-md text-ink antialiased"
  >
    <aside
      class="fixed left-0 top-0 h-full w-72 bg-paper border-r border-ink/30 z-50 flex flex-col justify-between"
    >
      <div class="flex flex-col">
        <div
          class="h-20 px-lg border-b border-ink/30 flex items-center gap-3 bg-paper"
        >
          <div
            class="w-10 h-10 bg-primary flex items-center justify-center"
          >
            <span class="material-symbols-outlined text-white"
              >apartment</span
            >
          </div>
          <div class="flex flex-col min-w-0">
            <span
              class="text-sm font-medium text-label-md text-primary uppercase tracking-wider truncate"
              >SATPEL PPKB</span
            ><span
              class="font-caption text-caption text-graphite truncate"
              >Kecamatan Cikampek</span
            >
          </div>
        </div>
        <div class="px-md py-lg">
          <span
            class="font-caption text-caption uppercase tracking-wider text-graphite px-sm pb-sm block"
            >Menu Utama</span
          >
          <nav
            class="space-y-xs"
            data-active-classes="bg-primary-light text-white text-sm font-medium"
          >
            <a
              class="flex items-center gap-3 px-md py-sm text-graphite hover:bg-fog hover:text-ink transition-colors text-sm font-medium text-label-md"
              data-path="dashboard"
              href="#"
              ><span class="material-symbols-outlined text-[20px]"
                >grid_view</span
              ><span>Dashboard</span></a
            ><a
              class="flex items-center gap-3 px-md py-sm text-graphite hover:bg-fog hover:text-ink transition-colors text-sm font-medium text-label-md"
              data-path="data-keluarga"
              href="#"
              ><span class="material-symbols-outlined text-[20px]"
                >diversity_3</span
              ><span>Data Keluarga</span></a
            ><a
              class="flex items-center gap-3 px-md py-sm text-graphite hover:bg-fog hover:text-ink transition-colors text-sm font-medium text-label-md"
              data-path="detail-keluarga"
              href="#"
              ><span class="material-symbols-outlined text-[20px]"
                >family_restroom</span
              ><span>Detail Keluarga</span></a
            ><a
              class="flex items-center gap-3 px-md py-sm text-graphite hover:bg-fog hover:text-ink transition-colors text-sm font-medium text-label-md"
              data-path="detail-pus"
              href="#"
              ><span class="material-symbols-outlined text-[20px]"
                >favorite</span
              ><span>Detail PUS</span></a
            ><a
              class="flex items-center gap-3 px-md py-sm text-graphite hover:bg-fog hover:text-ink transition-colors text-sm font-medium text-label-md"
              data-path="data-individu"
              href="#"
              ><span class="material-symbols-outlined text-[20px]"
                >person</span
              ><span>Data Individu</span></a
            ><a
              aria-current="page"
              class="flex items-center gap-3 px-md py-sm transition-colors bg-primary-light text-white text-sm font-medium"
              data-path="program-kb"
              href="#"
              ><span class="material-symbols-outlined text-[20px]"
                >health_and_safety</span
              ><span>Program KB</span></a
            ><a
              class="flex items-center gap-3 px-md py-sm text-graphite hover:bg-fog hover:text-ink transition-colors text-sm font-medium text-label-md"
              data-path="kegiatan-lapangan"
              href="#"
              ><span class="material-symbols-outlined text-[20px]"
                >calendar_month</span
              ><span>Kegiatan Lapangan</span></a
            >
          </nav>
        </div>
      </div>
      <div
        class="border-t border-ink/30 p-md space-y-xs bg-paper"
      >
        <span
          class="font-caption text-caption uppercase tracking-wider text-graphite px-sm pb-xs block"
          >Preferensi</span
        >
        <nav
          class="space-y-xs"
          data-active-classes="bg-primary-light text-white text-sm font-medium"
        >
          <a
            class="flex items-center justify-between px-md py-sm text-graphite hover:bg-fog hover:text-ink transition-colors text-sm font-medium text-label-md"
            data-path="notifikasi"
            href="#"
            ><div class="flex items-center gap-3">
              <span class="material-symbols-outlined text-[20px]"
                >notifications</span
              ><span>Notifikasi</span>
            </div>
            <span
              class="px-xs py-0.5 bg-secondary text-on-secondary font-caption text-caption font-semibold"
              >4</span
            ></a
          ><a
            class="flex items-center gap-3 px-md py-sm text-graphite hover:bg-fog hover:text-ink transition-colors text-sm font-medium text-label-md"
            data-path="bantuan"
            href="#"
            ><span class="material-symbols-outlined text-[20px]"
              >help</span
            ><span>Bantuan</span></a
          ><a
            class="flex items-center gap-3 px-md py-sm text-graphite hover:bg-fog hover:text-ink transition-colors text-sm font-medium text-label-md"
            data-path="pengaturan"
            href="#"
            ><span class="material-symbols-outlined text-[20px]"
              >settings</span
            ><span>Pengaturan</span></a
          >
        </nav>
        <div
          class="mt-sm pt-sm border-t border-ink/20 flex items-center justify-between px-sm"
        >
          <span class="font-caption text-caption text-graphite"
            >Versi 2.4.0 • Cikampek</span
          >
        </div>
      </div>
    </aside>
    <div class="pl-72">
      <header
        class="fixed top-0 left-72 right-0 h-20 bg-paper border-b border-ink/30 z-40 px-lg flex items-center justify-between"
      >
        <div class="flex-1 max-w-xl">
          <div class="relative flex items-center w-full">
            <span
              class="material-symbols-outlined absolute left-md text-graphite pointer-events-none text-[20px]"
              >search</span
            ><input
              class="w-full pl-xl pr-md py-sm bg-background border border-ink/40 text-[15px] text-body-md text-ink placeholder:text-graphite focus:outline-none focus:border-primary transition-colors"
              placeholder="Cari NIK, Nomor KK, atau Nama Kepala Keluarga di Cikampek..."
              type="text"
            />
          </div>
        </div>
        <div class="flex items-center gap-lg">
          <div
            class="flex items-center gap-sm border-r border-ink/30 pr-lg"
          >
            <button
              class="relative p-sm text-graphite hover:text-primary transition-colors"
              title="Notifikasi"
            >
              <span class="material-symbols-outlined text-[24px]"
                >notifications</span
              ><span
                class="absolute top-1 right-1 w-2.5 h-2.5 bg-red-600 border border-surface-container-lowest"
              ></span></button
            ><button
              class="p-sm text-graphite hover:text-primary transition-colors"
              title="Dokumentasi SOP"
            >
              <span class="material-symbols-outlined text-[24px]"
                >description</span
              >
            </button>
          </div>
          <div class="flex items-center gap-3">
            <div class="flex flex-col text-right">
              <span
                class="text-sm font-medium text-label-md text-ink leading-tight"
                >Siti Nurhaliza</span
              ><span
                class="font-caption text-caption text-green-700 font-semibold"
                >Kader Posyandu / PPKB</span
              >
            </div>
            <div
              class="w-8 h-8 rounded-[100px] bg-primary flex items-center justify-center"
            >
              <span
                class="material-symbols-outlined text-white text-[18px]"
                >person</span
              >
            </div>
          </div>
        </div>
      </header>
      <main class="relative pt-20 w-full min-h-screen bg-background">
        <div class="flex flex-col w-full">
          <!-- Top Context Bar: Breadcrumbs & Return Action -->
          <div class="w-full bg-paper-card">
            <div
              class="max-w-[1140px] mx-auto px-lg py-md flex flex-wrap items-center justify-between gap-md"
            >
              <!-- Breadcrumbs -->
              <nav
                aria-label="Breadcrumb"
                class="flex items-center gap-xs text-graphite font-caption text-caption flex-wrap"
              >
                <a
                  class="hover:text-primary transition-colors"
                  data-path="data-keluarga"
                  href="#"
                  >Data Keluarga</a
                >
                <span class="text-graphite-variant">/</span>
                <span class="text-graphite"
                  >Bpk. Supriyanto</span
                >
                <span class="text-graphite-variant">/</span>
                <span
                  class="text-graphite font-medium"
                  >Siti Aminah</span
                >
                <span class="text-graphite-variant">/</span>
                <a
                  class="hover:text-primary transition-colors"
                  data-path="detail-pus"
                  href="#"
                  >PUS</a
                >
                <span class="text-graphite-variant">/</span>
                <span class="text-primary font-semibold"
                  >Detail KB</span
                >
              </nav>
              <!-- Return Button -->
              <a
                class="inline-flex items-center gap-1.5 text-primary hover:text-primary-light text-sm font-medium text-label-md transition-colors"
                data-path="detail-pus"
                href="#"
              >
                <span
                  class="material-symbols-outlined text-[18px]"
                  >arrow_back</span
                >
                <span>Kembali ke Detail PUS</span>
              </a>
            </div>
          </div>
          <!-- Profile Banner Card -->
          <div
            class="w-full bg-paper-card mt-xs"
          >
            <div
              class="max-w-[1140px] mx-auto px-lg py-lg flex flex-col md:flex-row md:items-center justify-between gap-lg"
            >
              <!-- Left: Identity -->
              <div class="flex items-center gap-md">
                <div
                  class="w-14 h-14 rounded-[100px] bg-primary-fixed text-primary flex items-center justify-center text-xl font-bold text-headline-md font-bold-card"
                >
                  SA
                </div>
                <div class="flex flex-col">
                  <div
                    class="flex items-center gap-sm flex-wrap"
                  >
                    <h1
                      class="text-xl font-bold text-headline-md text-ink font-semibold"
                    >
                      Siti Aminah
                    </h1>
                    <span
                      class="px-2 py-0.5 rounded-[100px] bg-primary-fixed text-primary font-caption text-caption font-semibold"
                    >
                      PUS
                    </span>
                    <span
                      class="px-2.5 py-0.5 rounded-[100px] bg-secondary-container text-on-secondary-container font-caption text-caption font-semibold flex items-center gap-1"
                    >
                      <span
                        class="material-symbols-outlined text-[14px]"
                        >check_circle</span
                      >
                      KB AKTIF
                    </span>
                  </div>
                  <div
                    class="flex items-center gap-2 mt-0.5 text-graphite font-caption text-caption flex-wrap"
                  >
                    <span
                      >Perempuan • 30 tahun • Istri</span
                    >
                    <span
                      class="w-1 h-1 rounded-[100px] bg-outline-variant"
                    ></span>
                    <span
                      class="text-graphite flex items-center gap-1"
                    >
                      <span
                        class="material-symbols-outlined text-[14px]"
                        >edit_calendar</span
                      >
                      Terakhir diperbarui: 3 September
                      2026 oleh Kader Siti Nurhaliza
                    </span>
                  </div>
                </div>
              </div>
              <!-- Right: Main Actions -->
              <div class="flex items-center gap-sm flex-wrap">
                <button
                  class="inline-flex items-center gap-1.5 px-md py-sm bg-fog text-ink hover:bg-fog transition-colors text-sm font-medium text-label-md rounded-[10px]-lg-card"
                  type="button"
                >
                  <span
                    class="material-symbols-outlined text-[18px]"
                    >add_circle</span
                  >
                  <span>Tambah Riwayat KB</span>
                </button>
                <button
                  class="inline-flex items-center gap-1.5 px-md py-sm bg-primary-light text-white hover:bg-primary transition-colors text-sm font-medium text-label-md rounded-[10px]-lg-md"
                  type="button"
                >
                  <span
                    class="material-symbols-outlined text-[18px]"
                    >edit_document</span
                  >
                  <span>Edit Data KB</span>
                </button>
              </div>
            </div>
          </div>
          <!-- Main 2-Column Content Area -->
          <div class="max-w-[1140px] w-full mx-auto px-lg py-xl">
            <div
              class="grid grid-cols-1 lg:grid-cols-12 gap-lg items-start"
            >
              <!-- LEFT COLUMN (~68%, col-span-8) -->
              <div class="lg:col-span-8 flex flex-col gap-lg">
                <!-- SECTION 1: Metode KB Saat Ini (Hero Card) -->
                <section
                  class="bg-paper rounded-[10px]-xl-card p-lg relative overflow-hidden"
                >
                  <div
                    class="absolute top-0 right-0 w-36 h-36 bg-fogl bg-primary-fixed/40 via-transparent to-transparent pointer-events-none"
                  ></div>
                  <!-- Card Header -->
                  <div
                    class="flex items-center justify-between pb-md mb-md border-b border-surface-container"
                  >
                    <div class="flex items-center gap-sm">
                      <div
                        class="w-9 h-9 rounded-[10px]-lg bg-primary text-white flex items-center justify-center-card"
                      >
                        <span
                          class="material-symbols-outlined text-[20px]"
                          >health_and_safety</span
                        >
                      </div>
                      <div>
                        <h2
                          class="text-sm font-medium text-label-md text-ink font-bold uppercase tracking-wider"
                        >
                          Metode KB Saat Ini
                        </h2>
                        <span
                          class="font-caption text-caption text-graphite"
                          >Pilihan kontrasepsi aktif
                          individu</span
                        >
                      </div>
                    </div>
                    <div class="flex items-center gap-sm">
                      <span
                        class="px-2.5 py-1 rounded-[100px] bg-secondary-container text-on-secondary-container font-caption text-caption font-semibold flex items-center gap-1"
                      >
                        <span
                          class="w-1.5 h-1.5 rounded-[100px] bg-secondary animate-pulse"
                        ></span>
                        AKTIF
                      </span>
                      <button
                        class="inline-flex items-center gap-1 text-primary hover:text-primary-light text-sm font-medium text-label-md font-semibold transition-colors"
                        type="button"
                      >
                        <span
                          class="material-symbols-outlined text-[16px]"
                          >tune</span
                        >
                        <span>Edit Metode</span>
                      </button>
                    </div>
                  </div>
                  <!-- Highlight Detail Grid -->
                  <div
                    class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-md"
                  >
                    <!-- Item 1 -->
                    <div
                      class="p-md rounded-[10px]-lg bg-fog flex flex-col justify-between gap-1"
                    >
                      <span
                        class="font-caption text-caption text-graphite font-medium"
                        >Metode Kontrasepsi</span
                      >
                      <div
                        class="text-xl font-bold text-headline-md font-semibold text-primary leading-tight"
                      >
                        IUD
                      </div>
                      <span
                        class="font-caption text-caption text-graphite"
                        >Alat Kontrasepsi Dalam Rahim
                        (AKDR)</span
                      >
                    </div>
                    <!-- Item 2 -->
                    <div
                      class="p-md rounded-[10px]-lg bg-fog flex flex-col justify-between gap-1"
                    >
                      <span
                        class="font-caption text-caption text-graphite font-medium"
                        >Tanggal Pemasangan</span
                      >
                      <div
                        class="text-[15px] text-body-md font-semibold text-ink"
                      >
                        12 Januari 2026
                      </div>
                      <span
                        class="font-caption text-caption text-graphite"
                        >Mulai efektif proteksi</span
                      >
                    </div>
                    <!-- Item 3 -->
                    <div
                      class="p-md rounded-[10px]-lg bg-fog flex flex-col justify-between gap-1"
                    >
                      <span
                        class="font-caption text-caption text-graphite font-medium"
                        >Perkiraan Berakhir</span
                      >
                      <div
                        class="text-[15px] text-body-md font-semibold text-ink"
                      >
                        12 Januari 2031
                      </div>
                      <span
                        class="font-caption text-caption text-green-700 font-medium"
                        >Masa pakai 5 tahun</span
                      >
                    </div>
                    <!-- Item 4 -->
                    <div
                      class="p-md rounded-[10px]-lg bg-fog flex flex-col justify-between gap-1"
                    >
                      <span
                        class="font-caption text-caption text-graphite font-medium"
                        >Tempat Pelayanan</span
                      >
                      <div
                        class="text-[15px] text-body-md font-semibold text-ink flex items-center gap-1"
                      >
                        <span
                          class="material-symbols-outlined text-primary text-[18px]"
                          >local_hospital</span
                        >
                        <span>Puskesmas Cikampek</span>
                      </div>
                      <span
                        class="font-caption text-caption text-graphite"
                        >Fasilitas Kesehatan Tingkat
                        I</span
                      >
                    </div>
                    <!-- Item 5 -->
                    <div
                      class="p-md rounded-[10px]-lg bg-fog flex flex-col justify-between gap-1 sm:col-span-2"
                    >
                      <span
                        class="font-caption text-caption text-graphite font-medium"
                        >Status Efektivitas</span
                      >
                      <div
                        class="flex items-center gap-2"
                      >
                        <span
                          class="px-2 py-0.5 rounded-[10px] bg-primary-fixed text-primary font-caption text-caption font-bold"
                          >MKJP</span
                        >
                        <span
                          class="text-[15px] text-body-md font-semibold text-ink"
                          >Perlindungan Sangat
                          Tinggi</span
                        >
                      </div>
                      <span
                        class="font-caption text-caption text-graphite"
                        >Metode Kontrasepsi Jangka
                        Panjang direkomendasikan
                        BKKBN</span
                      >
                    </div>
                  </div>
                  <!-- Quick Progress / Timeline Indicator -->
                  <div
                    class="mt-md p-md rounded-[10px]-lg bg-paper border border-ink/30 flex flex-col gap-2"
                  >
                    <div
                      class="flex items-center justify-between text-caption font-caption"
                    >
                      <span
                        class="text-graphite"
                        >Siklus Pemakaian IUD (Bulan
                        ke-8 dari 60 bulan)</span
                      >
                      <span
                        class="text-primary font-semibold"
                        >13% Terlewati</span
                      >
                    </div>
                    <div
                      class="w-full bg-fog h-2 rounded-[100px] overflow-hidden"
                    >
                      <div
                        class="bg-primary h-full rounded-[100px] transition-all duration-500"
                        style="width: 13.3%"
                      ></div>
                    </div>
                  </div>
                </section>
                <!-- SECTION 2: Informasi Pelayanan Terakhir -->
                <section
                  class="bg-paper rounded-[10px]-xl-card p-lg"
                >
                  <div
                    class="flex items-center justify-between pb-md mb-md border-b border-surface-container"
                  >
                    <div class="flex items-center gap-sm">
                      <div
                        class="w-8 h-8 rounded-[10px]-lg bg-fog flex items-center justify-center text-primary"
                      >
                        <span
                          class="material-symbols-outlined text-[18px]"
                          >medical_services</span
                        >
                      </div>
                      <h2
                        class="text-sm font-medium text-label-md text-ink font-bold"
                      >
                        Informasi Pelayanan Terakhir
                      </h2>
                    </div>
                    <button
                      class="inline-flex items-center gap-1 text-primary hover:text-primary-light text-sm font-medium text-label-md transition-colors"
                      type="button"
                    >
                      <span
                        class="material-symbols-outlined text-[16px]"
                        >edit</span
                      >
                      <span>Edit Informasi</span>
                    </button>
                  </div>
                  <div
                    class="grid grid-cols-1 md:grid-cols-2 gap-y-md gap-x-lg"
                  >
                    <div class="flex flex-col gap-0.5">
                      <span
                        class="font-caption text-caption text-graphite uppercase tracking-wider"
                        >Tanggal Pelayanan
                        Terakhir</span
                      >
                      <span
                        class="text-[15px] text-body-md font-medium text-ink"
                        >12 Juli 2026</span
                      >
                    </div>
                    <div class="flex flex-col gap-0.5">
                      <span
                        class="font-caption text-caption text-graphite uppercase tracking-wider"
                        >Tempat Pelayanan</span
                      >
                      <span
                        class="text-[15px] text-body-md font-medium text-ink"
                        >Puskesmas Cikampek</span
                      >
                    </div>
                    <div class="flex flex-col gap-0.5">
                      <span
                        class="font-caption text-caption text-graphite uppercase tracking-wider"
                        >Tenaga / Provider</span
                      >
                      <span
                        class="text-[15px] text-body-md font-medium text-ink flex items-center gap-1"
                      >
                        <span
                          class="material-symbols-outlined text-green-700 text-[16px]"
                          >verified</span
                        >
                        Bidan Sri Wahyuni, S.Tr.Keb
                      </span>
                    </div>
                    <div class="flex flex-col gap-0.5">
                      <span
                        class="font-caption text-caption text-graphite uppercase tracking-wider"
                        >Jenis Pelayanan</span
                      >
                      <span
                        class="text-[15px] text-body-md font-medium text-ink"
                        >Pemeriksaan Berkala &amp;
                        Kontrol IUD</span
                      >
                    </div>
                    <div class="md:col-span-2 pt-xs">
                      <span
                        class="font-caption text-caption text-graphite uppercase tracking-wider block mb-1"
                        >Status Pelayanan</span
                      >
                      <div
                        class="inline-flex items-center gap-1.5 px-3 py-1 rounded-[10px]-md bg-secondary-container/60 text-green-700 text-sm font-medium text-label-md font-semibold"
                      >
                        <span
                          class="material-symbols-outlined text-[18px]"
                          >check</span
                        >
                        <span
                          >Selesai &amp; Kondisi
                          Normal</span
                        >
                      </div>
                    </div>
                  </div>
                </section>
                <!-- SECTION 3: Kondisi & Keluhan Pasca Pelayanan -->
                <section
                  class="bg-paper rounded-[10px]-xl-card p-lg"
                >
                  <div
                    class="flex items-center justify-between pb-md mb-md border-b border-surface-container"
                  >
                    <div class="flex items-center gap-sm">
                      <div
                        class="w-8 h-8 rounded-[10px]-lg bg-fog flex items-center justify-center text-primary"
                      >
                        <span
                          class="material-symbols-outlined text-[18px]"
                          >sentiment_satisfied</span
                        >
                      </div>
                      <h2
                        class="text-sm font-medium text-label-md text-ink font-bold"
                      >
                        Kondisi dan Keluhan Pasca
                        Pelayanan
                      </h2>
                    </div>
                    <button
                      class="inline-flex items-center gap-1 text-primary hover:text-primary-light text-sm font-medium text-label-md transition-colors"
                      type="button"
                    >
                      <span
                        class="material-symbols-outlined text-[16px]"
                        >edit_note</span
                      >
                      <span>Edit Catatan</span>
                    </button>
                  </div>
                  <div class="space-y-md">
                    <div
                      class="flex flex-col sm:flex-row sm:items-center justify-between gap-sm p-md rounded-[10px]-lg bg-fog"
                    >
                      <span
                        class="text-sm font-medium text-label-md text-ink font-medium"
                        >Status Keluhan Klinis</span
                      >
                      <span
                        class="inline-flex items-center gap-1 px-2.5 py-1 rounded-[10px] bg-secondary-container text-on-secondary-container font-caption text-caption font-semibold"
                      >
                        <span
                          class="material-symbols-outlined text-[14px]"
                          >task_alt</span
                        >
                        Tidak ada keluhan klinis
                      </span>
                    </div>
                    <div
                      class="p-md rounded-[10px]-lg bg-fog"
                    >
                      <span
                        class="font-caption text-caption text-graphite uppercase tracking-wider block mb-1"
                        >Efek Samping</span
                      >
                      <p
                        class="text-[15px] text-body-md text-ink"
                      >
                        Tidak ada keluhan efek samping
                        yang dilaporkan.
                      </p>
                    </div>
                    <div
                      class="p-md rounded-[10px]-lg bg-fog border-l-4 border-primary"
                    >
                      <div
                        class="flex items-center justify-between mb-1"
                      >
                        <span
                          class="font-caption text-caption text-primary font-semibold uppercase tracking-wider"
                          >Catatan Kader
                          Posyandu</span
                        >
                        <span
                          class="font-caption text-caption text-graphite"
                          >Diperbarui 12 Juli
                          2026</span
                        >
                      </div>
                      <p
                        class="text-[15px] text-body-md text-ink leading-relaxed"
                      >
                        "Ibu Siti Aminah merasa nyaman
                        dengan metode IUD. Pemantauan
                        berkala dijadwalkan ulang pada
                        bulan Januari 2027 bersamaan
                        dengan Posyandu Mawar."
                      </p>
                    </div>
                    <div
                      class="flex items-center gap-2 text-graphite font-caption text-caption pt-xs"
                    >
                      <span
                        class="material-symbols-outlined text-[16px]"
                        >shield</span
                      >
                      <span
                        >Catatan bersifat internal untuk
                        pemantauan lapangan kader dan
                        tenaga kesehatan
                        terdaftar.</span
                      >
                    </div>
                  </div>
                </section>
                <!-- SECTION 4: Riwayat Penggunaan Metode KB -->
                <section
                  class="bg-paper rounded-[10px]-xl-card p-lg"
                >
                  <div
                    class="flex flex-col sm:flex-row sm:items-center justify-between gap-md pb-md mb-md border-b border-surface-container"
                  >
                    <div class="flex items-center gap-sm">
                      <div
                        class="w-8 h-8 rounded-[10px]-lg bg-fog flex items-center justify-center text-primary"
                      >
                        <span
                          class="material-symbols-outlined text-[18px]"
                          >history</span
                        >
                      </div>
                      <div>
                        <h2
                          class="text-sm font-medium text-label-md text-ink font-bold"
                        >
                          Riwayat Penggunaan Metode KB
                        </h2>
                        <span
                          class="font-caption text-caption text-graphite"
                          >3 Catatan tersimpan dalam
                          sistem</span
                        >
                      </div>
                    </div>
                    <button
                      class="inline-flex items-center gap-1 px-3 py-1.5 rounded-[10px]-lg bg-fog text-ink hover:bg-fog transition-colors text-sm font-medium text-label-md"
                      type="button"
                    >
                      <span
                        class="material-symbols-outlined text-[16px]"
                        >add</span
                      >
                      <span>Tambah Riwayat</span>
                    </button>
                  </div>
                  <!-- Table Wrapper -->
                  <div class="overflow-x-auto">
                    <table
                      class="w-full text-left text-[15px] text-body-md"
                    >
                      <thead>
                        <tr
                          class="text-graphite font-caption text-caption uppercase tracking-wider bg-fog"
                        >
                          <th
                            class="py-sm px-md font-semibold"
                          >
                            METODE
                          </th>
                          <th
                            class="py-sm px-md font-semibold"
                          >
                            PERIODE
                          </th>
                          <th
                            class="py-sm px-md font-semibold"
                          >
                            TEMPAT PELAYANAN
                          </th>
                          <th
                            class="py-sm px-md font-semibold"
                          >
                            TENAGA MEDIS
                          </th>
                          <th
                            class="py-sm px-md font-semibold"
                          >
                            STATUS
                          </th>
                          <th
                            class="py-sm px-md font-semibold text-right"
                          >
                            AKSI
                          </th>
                        </tr>
                      </thead>
                      <tbody
                        class="divide-y divide-surface-container text-ink text-[14px]"
                      >
                        <!-- Row 1 -->
                        <tr
                          class="hover:bg-fog/50 transition-colors"
                        >
                          <td class="py-md px-md">
                            <div
                              class="font-semibold text-primary"
                            >
                              IUD
                            </div>
                            <div
                              class="font-caption text-caption text-graphite"
                            >
                              AKDR
                            </div>
                          </td>
                          <td
                            class="py-md px-md whitespace-nowrap"
                          >
                            12 Jan 2026 – Sekarang
                          </td>
                          <td class="py-md px-md">
                            Puskesmas Cikampek
                          </td>
                          <td
                            class="py-md px-md whitespace-nowrap"
                          >
                            Bidan Sri Wahyuni
                          </td>
                          <td class="py-md px-md">
                            <span
                              class="px-2 py-0.5 rounded-[100px] bg-secondary-container text-on-secondary-container font-caption text-caption font-semibold"
                            >
                              Aktif
                            </span>
                          </td>
                          <td
                            class="py-md px-md text-right"
                          >
                            <button
                              class="text-primary hover:text-primary-light text-sm font-medium text-caption font-semibold"
                              type="button"
                            >
                              Lihat Detail
                            </button>
                          </td>
                        </tr>
                        <!-- Row 2 -->
                        <tr
                          class="hover:bg-fog/50 transition-colors"
                        >
                          <td class="py-md px-md">
                            <div
                              class="font-semibold text-ink"
                            >
                              Suntik 3 Bulan
                            </div>
                            <div
                              class="font-caption text-caption text-graphite"
                            >
                              Kombinasi Hormonal
                            </div>
                          </td>
                          <td
                            class="py-md px-md whitespace-nowrap text-graphite"
                          >
                            Jan 2025 – Des 2025
                          </td>
                          <td
                            class="py-md px-md text-graphite"
                          >
                            Puskesmas Pembantu
                            Krajan
                          </td>
                          <td
                            class="py-md px-md text-graphite whitespace-nowrap"
                          >
                            Bidan Rita
                          </td>
                          <td class="py-md px-md">
                            <span
                              class="px-2 py-0.5 rounded-[100px] bg-paper-variant text-graphite font-caption text-caption font-medium"
                              title="Beralih ke MKJP IUD"
                            >
                              Berakhir
                            </span>
                          </td>
                          <td
                            class="py-md px-md text-right"
                          >
                            <button
                              class="text-primary hover:text-primary-light text-sm font-medium text-caption font-semibold"
                              type="button"
                            >
                              Lihat Detail
                            </button>
                          </td>
                        </tr>
                        <!-- Row 3 -->
                        <tr
                          class="hover:bg-fog/50 transition-colors"
                        >
                          <td class="py-md px-md">
                            <div
                              class="font-semibold text-ink"
                            >
                              Pil KB
                            </div>
                            <div
                              class="font-caption text-caption text-graphite"
                            >
                              Oral
                            </div>
                          </td>
                          <td
                            class="py-md px-md whitespace-nowrap text-graphite"
                          >
                            Jan 2024 – Des 2024
                          </td>
                          <td
                            class="py-md px-md text-graphite"
                          >
                            Poskesdes Cikampek Timur
                          </td>
                          <td
                            class="py-md px-md text-graphite whitespace-nowrap"
                          >
                            Kader &amp; Bidan Desa
                          </td>
                          <td class="py-md px-md">
                            <span
                              class="px-2 py-0.5 rounded-[100px] bg-paper-variant text-graphite font-caption text-caption font-medium"
                            >
                              Berakhir
                            </span>
                          </td>
                          <td
                            class="py-md px-md text-right"
                          >
                            <button
                              class="text-primary hover:text-primary-light text-sm font-medium text-caption font-semibold"
                              type="button"
                            >
                              Lihat Detail
                            </button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div
                    class="mt-md pt-md border-t border-surface-container flex items-center gap-2 text-graphite font-caption text-caption"
                  >
                    <span
                      class="material-symbols-outlined text-[16px]"
                      >info</span
                    >
                    <span
                      >Riwayat mencatat perubahan metode
                      kontrasepsi untuk kesinambungan data
                      kesehatan reproduksi.</span
                    >
                  </div>
                </section>
              </div>
              <!-- RIGHT COLUMN (~32%, col-span-4) -->
              <div class="lg:col-span-4 flex flex-col gap-lg">
                <!-- SIDEBAR SECTION 1: Program Terkait -->
                <section
                  class="bg-paper rounded-[10px]-xl-card p-lg"
                >
                  <div
                    class="flex items-center gap-sm pb-md mb-md border-b border-surface-container"
                  >
                    <div
                      class="w-8 h-8 rounded-[10px]-lg bg-fog flex items-center justify-center text-primary"
                    >
                      <span
                        class="material-symbols-outlined text-[18px]"
                        >hub</span
                      >
                    </div>
                    <div>
                      <h2
                        class="text-sm font-medium text-label-md text-ink font-bold"
                      >
                        Program Terkait
                      </h2>
                      <span
                        class="font-caption text-caption text-graphite"
                        >Keterkaitan Intervensi
                        PPKB</span
                      >
                    </div>
                  </div>
                  <div class="space-y-sm">
                    <!-- PUS Item -->
                    <div
                      class="p-md rounded-[10px]-lg bg-fog flex items-center justify-between"
                    >
                      <div class="flex flex-col">
                        <span
                          class="text-sm font-medium text-label-md font-semibold text-ink"
                          >PUS</span
                        >
                        <span
                          class="font-caption text-caption text-graphite"
                          >Pasangan Usia Subur
                          (Target)</span
                        >
                      </div>
                      <div
                        class="flex flex-col items-end"
                      >
                        <span
                          class="px-2 py-0.5 rounded-[10px] bg-secondary-container text-on-secondary-container font-caption text-caption font-semibold"
                        >
                          ✓ Aktif
                        </span>
                        <a
                          class="text-primary hover:underline font-caption text-caption font-medium mt-1 inline-flex items-center gap-0.5"
                          data-path="detail-pus"
                          href="#"
                        >
                          <span>Lihat PUS</span>
                          <span
                            class="material-symbols-outlined text-[12px]"
                            >arrow_forward</span
                          >
                        </a>
                      </div>
                    </div>
                    <!-- KB Item -->
                    <div
                      class="p-md rounded-[10px]-lg bg-fog flex items-center justify-between"
                    >
                      <div class="flex flex-col">
                        <span
                          class="text-sm font-medium text-label-md font-semibold text-ink"
                          >KB</span
                        >
                        <span
                          class="font-caption text-caption text-graphite"
                          >Keluarga Berencana
                          (IUD)</span
                        >
                      </div>
                      <span
                        class="px-2 py-0.5 rounded-[10px] bg-secondary-container text-on-secondary-container font-caption text-caption font-semibold"
                      >
                        ✓ Aktif
                      </span>
                    </div>
                    <!-- BUMIL Item -->
                    <div
                      class="p-md rounded-[10px]-lg bg-fog flex items-center justify-between"
                    >
                      <div class="flex flex-col">
                        <span
                          class="text-sm font-medium text-label-md font-semibold text-ink"
                          >BUMIL</span
                        >
                        <span
                          class="font-caption text-caption text-graphite"
                          >Ibu Hamil</span
                        >
                      </div>
                      <span
                        class="px-2 py-0.5 rounded-[10px] bg-paper-variant text-graphite font-caption text-caption"
                      >
                        Tidak Terdaftar
                      </span>
                    </div>
                  </div>
                  <div
                    class="mt-md p-sm rounded-[10px]-lg bg-paper border border-ink/30 flex items-start gap-2"
                  >
                    <span
                      class="material-symbols-outlined text-primary text-[18px] mt-0.5"
                      >sync</span
                    >
                    <p
                      class="font-caption text-caption text-graphite leading-tight"
                    >
                      Keterkaitan status program terhubung
                      otomatis untuk memastikan intervensi
                      gizi &amp; layanan KB terkoordinasi
                      di Kecamatan Cikampek.
                    </p>
                  </div>
                </section>
                <!-- SIDEBAR SECTION 2: Status Verifikasi & Audit Trail -->
                <section
                  class="bg-paper rounded-[10px]-xl-card p-lg"
                >
                  <div
                    class="flex items-center gap-sm pb-md mb-md border-b border-surface-container"
                  >
                    <div
                      class="w-8 h-8 rounded-[10px]-lg bg-fog flex items-center justify-center text-primary"
                    >
                      <span
                        class="material-symbols-outlined text-[18px]"
                        >verified_user</span
                      >
                    </div>
                    <div>
                      <h2
                        class="text-sm font-medium text-label-md text-ink font-bold"
                      >
                        Status Verifikasi
                      </h2>
                      <span
                        class="font-caption text-caption text-graphite"
                        >Audit validitas Satu Data
                        PPKB</span
                      >
                    </div>
                  </div>
                  <div
                    class="space-y-md text-[15px] text-body-md"
                  >
                    <div
                      class="flex items-center justify-between"
                    >
                      <span
                        class="text-graphite font-caption text-caption"
                        >Status Kelengkapan Data:</span
                      >
                      <span
                        class="text-green-700 font-semibold flex items-center gap-1 text-sm font-medium text-label-md"
                      >
                        <span
                          class="material-symbols-outlined text-[16px]"
                          >check</span
                        >
                        Lengkap
                      </span>
                    </div>
                    <div class="flex flex-col gap-1">
                      <span
                        class="text-graphite font-caption text-caption"
                        >Status Validasi Lapangan:</span
                      >
                      <div>
                        <span
                          class="px-2.5 py-1 rounded-[10px]-md bg-tertiary-fixed text-on-tertiary-fixed font-caption text-caption font-semibold inline-flex items-center gap-1"
                        >
                          <span
                            class="material-symbols-outlined text-[14px]"
                            >hourglass_top</span
                          >
                          Menunggu Verifikasi Pengawas
                        </span>
                      </div>
                    </div>
                    <div
                      class="flex flex-col gap-0.5 pt-xs border-t border-surface-container"
                    >
                      <span
                        class="text-graphite font-caption text-caption"
                        >Terakhir Diperbarui:</span
                      >
                      <span
                        class="text-ink font-medium font-caption text-caption"
                        >3 September 2026, 10:15
                        WIB</span
                      >
                    </div>
                    <div class="flex flex-col gap-0.5">
                      <span
                        class="text-graphite font-caption text-caption"
                        >Pencatat Lapangan:</span
                      >
                      <span
                        class="text-ink font-medium font-caption text-caption"
                        >Kader Siti Nurhaliza (Posyandu
                        Teratai 03)</span
                      >
                    </div>
                  </div>
                </section>
                <!-- SIDEBAR SECTION 3: Riwayat Aktivitas (Timeline) -->
                <section
                  class="bg-paper rounded-[10px]-xl-card p-lg"
                >
                  <div
                    class="flex items-center gap-sm pb-md mb-md border-b border-surface-container"
                  >
                    <div
                      class="w-8 h-8 rounded-[10px]-lg bg-fog flex items-center justify-center text-primary"
                    >
                      <span
                        class="material-symbols-outlined text-[18px]"
                        >timeline</span
                      >
                    </div>
                    <div>
                      <h2
                        class="text-sm font-medium text-label-md text-ink font-bold"
                      >
                        Riwayat Aktivitas
                      </h2>
                      <span
                        class="font-caption text-caption text-graphite"
                        >Kronologi pembaruan &amp;
                        pelayanan</span
                      >
                    </div>
                  </div>
                  <div
                    class="relative pl-6 space-y-md before:content-[''] before:absolute before:left-2 before:top-2 before:bottom-2 before:w-0.5 before:bg-fog"
                  >
                    <!-- Event 1 -->
                    <div class="relative">
                      <div
                        class="absolute -left-6 top-1 w-2.5 h-2.5 rounded-[100px] bg-primary ring-4 ring-surface-container-lowest"
                      ></div>
                      <span
                        class="font-caption text-caption font-semibold text-primary block"
                        >3 September 2026</span
                      >
                      <p
                        class="font-caption text-caption text-graphite mt-0.5"
                      >
                        Data KB diperbarui oleh kader
                        Siti Nurhaliza (Pengecekan rutin
                        posyandu).
                      </p>
                    </div>
                    <!-- Event 2 -->
                    <div class="relative">
                      <div
                        class="absolute -left-6 top-1 w-2.5 h-2.5 rounded-[100px] bg-secondary ring-4 ring-surface-container-lowest"
                      ></div>
                      <span
                        class="font-caption text-caption font-semibold text-ink block"
                        >12 Juli 2026</span
                      >
                      <p
                        class="font-caption text-caption text-graphite mt-0.5"
                      >
                        Pelayanan kontrol IUD 6 bulanan
                        dicatat di Puskesmas Cikampek.
                      </p>
                    </div>
                    <!-- Event 3 -->
                    <div class="relative">
                      <div
                        class="absolute -left-6 top-1 w-2.5 h-2.5 rounded-[100px] bg-outline ring-4 ring-surface-container-lowest"
                      ></div>
                      <span
                        class="font-caption text-caption font-semibold text-ink block"
                        >12 Januari 2026</span
                      >
                      <p
                        class="font-caption text-caption text-graphite mt-0.5"
                      >
                        Pemasangan IUD berhasil &amp;
                        didaftarkan sebagai metode KB
                        aktif.
                      </p>
                    </div>
                    <!-- Event 4 -->
                    <div class="relative">
                      <div
                        class="absolute -left-6 top-1 w-2.5 h-2.5 rounded-[100px] bg-outline-variant ring-4 ring-surface-container-lowest"
                      ></div>
                      <span
                        class="font-caption text-caption font-semibold text-graphite block"
                        >10 Januari 2025</span
                      >
                      <p
                        class="font-caption text-caption text-graphite mt-0.5"
                      >
                        Peralihan metode dari Pil KB ke
                        Suntik 3 Bulan.
                      </p>
                    </div>
                  </div>
                </section>
                <!-- SIDEBAR SECTION 4: Callout Privasi -->
                <div
                  class="p-md rounded-[10px]-xl bg-fog flex items-start gap-3-card"
                >
                  <div
                    class="w-8 h-8 rounded-[100px] bg-fog flex items-center justify-center text-primary shrink-0"
                  >
                    <span
                      class="material-symbols-outlined text-[18px]"
                      >lock</span
                    >
                  </div>
                  <div class="flex flex-col gap-1">
                    <span
                      class="text-sm font-medium text-label-md font-semibold text-ink"
                      >Data Pelayanan Terlindungi</span
                    >
                    <p
                      class="font-caption text-caption text-graphite leading-normal"
                    >
                      Data pelayanan KB bersifat rahasia
                      dan terlindungi sesuai kode etik
                      pelayanan kesehatan reproduksi
                      Satpel PPKB Kecamatan Cikampek. NIK
                      tidak ditampilkan.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
  </body>
</html>
