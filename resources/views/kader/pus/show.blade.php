<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <link
      href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
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
              outline: "#727784",
              "on-surface-variant": "#424752",
              "surface-bright": "#f9f9ff",
              "inverse-surface": "#2e3037",
              "surface-variant": "#e1e2eb",
              "on-tertiary-fixed": "#241a00",
              "on-error": "#ffffff",
              background: "#f9f9ff",
              "secondary-container": "#88faa0",
              "surface-tint": "#0d5bbc",
              "on-secondary-fixed": "#00210a",
              "on-primary-fixed": "#001a41",
              "inverse-on-surface": "#eff0f9",
              "surface-dim": "#d9d9e2",
              "surface-container-high": "#e7e7f0",
              "primary-fixed": "#d8e2ff",
              "primary-fixed-dim": "#adc7ff",
              "on-secondary": "#ffffff",
              "inverse-primary": "#adc7ff",
              "surface-container-highest": "#e1e2eb",
              surface: "#f9f9ff",
              "on-secondary-container": "#007434",
              "error-container": "#ffdad6",
              "secondary-fixed-dim": "#6cdd86",
              "on-secondary-fixed-variant": "#005323",
              "on-tertiary-fixed-variant": "#574400",
              "surface-container-low": "#f2f3fc",
              "on-error-container": "#93000a",
              "surface-container-lowest": "#ffffff",
              "on-tertiary": "#ffffff",
              "surface-container": "#ededf6",
              "tertiary-container": "#cfa600",
              primary: "#00408b",
              "secondary-fixed": "#88faa0",
              "on-primary": "#ffffff",
              "primary-container": "#0057b8",
              "outline-variant": "#c2c6d4",
              "on-primary-container": "#bfd2ff",
              "tertiary-fixed-dim": "#f1c100",
              "on-background": "#191c22",
              "on-surface": "#191c22",
              secondary: "#006d31",
              tertiary: "#745b00",
              "on-primary-fixed-variant": "#004493",
              error: "#ba1a1a",
              "tertiary-fixed": "#ffe08a",
              "on-tertiary-container": "#4e3d00",
            },
            borderRadius: {
              DEFAULT: "0.25rem",
              lg: "0.5rem",
              xl: "0.75rem",
              full: "9999px",
            },
            spacing: {
              xl: "40px",
              gutter: "24px",
              xxl: "64px",
              "container-max": "1280px",
              unit: "4px",
              sm: "8px",
              md: "16px",
              xs: "4px",
              lg: "24px",
            },
            fontFamily: {
              "headline-md": ["Plus Jakarta Sans"],
              "label-md": ["Plus Jakarta Sans"],
              "body-lg": ["Plus Jakarta Sans"],
              "display-lg": ["Plus Jakarta Sans"],
              "display-xl": ["Plus Jakarta Sans"],
              "headline-lg": ["Plus Jakarta Sans"],
              "body-md": ["Plus Jakarta Sans"],
              caption: ["Plus Jakarta Sans"],
            },
            fontSize: {
              "headline-md": [
                "24px",
                {
                  lineHeight: "32px",
                  fontWeight: "600",
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
              "body-lg": [
                "18px",
                {
                  lineHeight: "28px",
                  fontWeight: "400",
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
              "body-md": [
                "16px",
                {
                  lineHeight: "24px",
                  fontWeight: "400",
                },
              ],
              caption: [
                "12px",
                {
                  lineHeight: "16px",
                  fontWeight: "400",
                },
              ],
            },
          },
        },
      };
    </script>
  </head>
  <body
    class="bg-paper text-[15px] text-body-md text-ink antialiased"
  >
    <aside
      class="fixed left-0 top-0 h-full w-72 bg-paper z-50 flex flex-col justify-between border-r border-surface-container"
    >
      <div class="flex flex-col">
        <div class="px-6 py-6 border-b border-surface-container">
          <div class="flex items-center gap-3">
            <div
              class="w-10 h-10 rounded-[10px] bg-primary flex items-center justify-center text-white text-xl font-bold text-headline-md font-bold"
            >
              KB
            </div>
            <div>
              <h1
                class="text-xl font-bold text-[15px] leading-snug font-bold text-primary tracking-tight"
              >
                SATPEL PPKB
              </h1>
              <p
                class="font-caption text-caption text-graphite uppercase tracking-wider"
              >
                Kecamatan Cikampek
              </p>
            </div>
          </div>
        </div>
        <div class="px-4 py-4">
          <p
            class="px-3 mb-2 font-caption text-caption uppercase tracking-wider text-graphite font-semibold"
          >
            Menu Administrasi
          </p>
          <nav
            class="space-y-1"
            data-active-classes="bg-primary-light text-white font-semibold"
          >
            <a
              aria-current="page"
              class="flex items-center gap-3 px-3 py-2.5 rounded-[10px] transition-colors bg-primary-light text-white font-semibold"
              data-path="data-keluarga"
              href="#"
              ><span class="material-symbols-outlined text-[20px]"
                >diversity_1</span
              ><span>Data Keluarga</span></a
            ><a
              class="flex items-center gap-3 px-3 py-2.5 rounded-[10px] text-graphite hover:bg-fog hover:text-ink transition-colors text-sm font-medium text-label-md"
              data-path="data-individu"
              href="#"
              ><span class="material-symbols-outlined text-[20px]"
                >person</span
              ><span>Data Individu</span></a
            ><a
              class="flex items-center gap-3 px-3 py-2.5 rounded-[10px] text-graphite hover:bg-fog hover:text-ink transition-colors text-sm font-medium text-label-md"
              data-path="program-kb"
              href="#"
              ><span class="material-symbols-outlined text-[20px]"
                >health_and_safety</span
              ><span>Program KB</span></a
            ><a
              class="flex items-center gap-3 px-3 py-2.5 rounded-[10px] text-graphite hover:bg-fog hover:text-ink transition-colors text-sm font-medium text-label-md"
              data-path="kegiatan-lapangan"
              href="#"
              ><span class="material-symbols-outlined text-[20px]"
                >assignment</span
              ><span>Kegiatan Lapangan</span></a
            >
          </nav>
          <p
            class="px-3 mt-6 mb-2 font-caption text-caption uppercase tracking-wider text-graphite font-semibold"
          >
            Dukungan &amp; Akun
          </p>
          <nav
            class="space-y-1"
            data-active-classes="bg-primary-light text-white font-semibold"
          >
            <a
              class="flex items-center gap-3 px-3 py-2.5 rounded-[10px] text-graphite hover:bg-fog hover:text-ink transition-colors text-sm font-medium text-label-md"
              data-path="notifikasi"
              href="#"
              ><span class="material-symbols-outlined text-[20px]"
                >notifications</span
              ><span>Notifikasi</span></a
            ><a
              class="flex items-center gap-3 px-3 py-2.5 rounded-[10px] text-graphite hover:bg-fog hover:text-ink transition-colors text-sm font-medium text-label-md"
              data-path="pusat-bantuan"
              href="#"
              ><span class="material-symbols-outlined text-[20px]"
                >help</span
              ><span>Pusat Bantuan</span></a
            ><a
              class="flex items-center gap-3 px-3 py-2.5 rounded-[10px] text-graphite hover:bg-fog hover:text-ink transition-colors text-sm font-medium text-label-md"
              data-path="pengaturan-akun"
              href="#"
              ><span class="material-symbols-outlined text-[20px]"
                >settings</span
              ><span>Pengaturan Akun</span></a
            >
          </nav>
        </div>
      </div>
      <div
        class="p-4 border-t border-surface-container bg-fog"
      >
        <div class="flex items-center gap-3">
          <div
            class="w-10 h-10 rounded-[10px] bg-primary flex items-center justify-center"
          >
            <span
              class="material-symbols-outlined text-white text-[20px]"
              >badge</span
            >
          </div>
          <div class="flex-1 min-w-0">
            <p
              class="text-sm font-medium text-label-md font-semibold text-ink truncate"
            >
              Siti Nurhaliza
            </p>
            <p
              class="font-caption text-caption text-graphite truncate"
            >
              Kader Cikampek Timur
            </p>
          </div>
          <span
            class="material-symbols-outlined text-graphite text-[18px]"
            >verified</span
          >
        </div>
      </div>
    </aside>
    <div class="pl-72 flex flex-col min-h-screen">
      <header
        class="fixed top-0 left-72 right-0 h-16 bg-paper/90 border-b border-surface-container z-40 px-8"
      >
        <div class="h-16 flex items-center justify-between gap-6">
          <div class="flex-1 max-w-lg">
            <div class="relative flex items-center w-full">
              <span
                class="material-symbols-outlined absolute left-3 text-graphite text-[20px]"
                >search</span
              ><input
                class="w-full pl-10 pr-4 py-2 bg-fog border border-ink rounded-[10px] text-[15px] text-body-md text-ink placeholder:text-graphite focus:outline-none focus:border-primary-container transition-colors"
                placeholder="Cari warga, nomor Kartu Keluarga (KK), atau NIK..."
                type="text"
              />
            </div>
          </div>
          <div class="flex items-center gap-4">
            <button
              aria-label="Notifikasi"
              class="relative p-2 rounded-[10px] text-graphite hover:bg-fog hover:text-ink transition-colors"
              type="button"
            >
              <span class="material-symbols-outlined text-[22px]"
                >notifications</span
              ><span
                class="absolute top-2 right-2 w-2 h-2 rounded-[100px] bg-red-600"
              ></span>
            </button>
            <div class="h-6 w-px bg-fog"></div>
            <div class="flex items-center gap-3">
              <div class="text-right hidden sm:block">
                <p
                  class="text-sm font-medium text-label-md font-semibold text-ink leading-tight"
                >
                  Siti Nurhaliza
                </p>
                <p
                  class="font-caption text-caption text-green-700 font-medium"
                >
                  Kader Terverifikasi
                </p>
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
        </div>
      </header>
      <main class="flex-1 pt-16 bg-paper px-8 py-6 w-full">
        <div class="flex flex-col w-full">
          <!-- Top Navigation & Breadcrumb -->
          <div
            class="flex flex-col md:flex-row md:items-center justify-between gap-4 pb-6"
          >
            <div
              class="flex items-center gap-2 font-caption text-caption text-graphite"
            >
              <a
                class="hover:text-primary transition-colors"
                href="#"
                >Data Keluarga</a
              >
              <span class="text-graphite-variant">/</span>
              <a
                class="hover:text-primary transition-colors"
                href="#"
                >Bpk. Supriyanto</a
              >
              <span class="text-graphite-variant">/</span>
              <a
                class="hover:text-primary transition-colors"
                href="#"
                >Siti Aminah</a
              >
              <span class="text-graphite-variant">/</span>
              <span class="text-ink font-semibold"
                >Detail PUS</span
              >
            </div>
            <a
              class="inline-flex items-center gap-2 text-sm font-medium text-label-md text-primary hover:text-white-fixed-variant transition-colors self-start md:self-auto group"
              href="#"
            >
              <span
                class="material-symbols-outlined text-[18px] transition-transform group-hover:-translate-x-1"
                >arrow_back</span
              >
              <span>Kembali ke Profil Individu</span>
            </a>
          </div>
          <!-- Profile Header Card -->
          <section
            class="bg-paper p-6 mb-6-card"
          >
            <div
              class="flex flex-col lg:flex-row lg:items-center justify-between gap-6"
            >
              <div class="flex items-start gap-4">
                <!-- Initial Avatar -->
                <div
                  class="w-16 h-16 bg-primary-fixed text-primary flex items-center justify-center text-xl font-bold text-headline-md font-bold shrink-0"
                >
                  SA
                </div>
                <div class="flex flex-col gap-1.5">
                  <div
                    class="flex flex-wrap items-center gap-3"
                  >
                    <h2
                      class="text-2xl font-bold text-headline-lg text-ink tracking-tight"
                    >
                      Siti Aminah
                    </h2>
                    <div class="flex items-center gap-2">
                      <span
                        class="bg-fog text-ink text-sm font-medium text-label-md px-2.5 py-0.5 tracking-normal"
                      >
                        PUS - Pasangan Usia Subur
                      </span>
                      <span
                        class="bg-green-50 text-green-700 text-sm font-medium text-label-md px-2.5 py-0.5 flex items-center gap-1"
                      >
                        <span
                          class="w-1.5 h-1.5 bg-secondary"
                        ></span>
                        AKTIF
                      </span>
                    </div>
                  </div>
                  <p
                    class="text-[15px] text-body-md text-graphite"
                  >
                    Istri • Perempuan • 30 tahun • No. KK:
                    •••• •••• •••• 1234
                  </p>
                  <p
                    class="font-caption text-caption text-graphite flex items-center gap-1.5 mt-1"
                  >
                    <span
                      class="material-symbols-outlined text-[14px]"
                      >schedule</span
                    >
                    Terakhir diperbarui: 3 September 2026
                    oleh
                    <span
                      class="font-semibold text-graphite"
                      >Kader Siti Nurhaliza</span
                    >
                  </p>
                </div>
              </div>
              <!-- Action Buttons -->
              <div
                class="flex flex-wrap items-center gap-3 lg:self-center"
              >
                <button
                  class="px-4 py-2 bg-fog text-primary text-sm font-medium text-label-md hover:bg-fog transition-colors flex items-center gap-2"
                  type="button"
                >
                  <span
                    class="material-symbols-outlined text-[18px]"
                    >medical_services</span
                  >
                  <span>Tambah Data KB</span>
                </button>
                <button
                  class="px-4 py-2 bg-fog text-primary text-sm font-medium text-label-md hover:bg-fog transition-colors flex items-center gap-2"
                  type="button"
                >
                  <span
                    class="material-symbols-outlined text-[18px]"
                    >pregnant_woman</span
                  >
                  <span>Catat Kehamilan</span>
                </button>
                <button
                  class="px-5 py-2 bg-primary-light text-white text-sm font-medium text-label-md hover:bg-primary transition-colors flex items-center gap-2"
                  type="button"
                >
                  <span
                    class="material-symbols-outlined text-[18px]"
                    >edit</span
                  >
                  <span>Edit Data PUS</span>
                </button>
              </div>
            </div>
          </section>
          <!-- Horizontal 5-Column Statistical Summary -->
          <section class="grid grid-cols-2 md:grid-cols-5 gap-3 mb-6">
            <div
              class="bg-paper p-4-card flex flex-col justify-between"
            >
              <span
                class="font-caption text-caption uppercase tracking-wider text-graphite font-semibold"
                >Status PUS</span
              >
              <div class="mt-2 flex items-center gap-1.5">
                <span class="w-2 h-2 bg-secondary"></span>
                <span
                  class="text-sm font-medium text-label-md font-bold text-green-700"
                  >AKTIF</span
                >
              </div>
              <p
                class="font-caption text-caption text-graphite mt-1"
              >
                Kategori Usia Subur
              </p>
            </div>
            <div
              class="bg-paper p-4-card flex flex-col justify-between"
            >
              <span
                class="font-caption text-caption uppercase tracking-wider text-graphite font-semibold"
                >Status Kawin</span
              >
              <span
                class="text-sm font-medium text-label-md font-semibold text-ink mt-2"
                >Kawin Sah</span
              >
              <p
                class="font-caption text-caption text-graphite mt-1"
              >
                Tercatat KUA
              </p>
            </div>
            <div
              class="bg-paper p-4-card flex flex-col justify-between"
            >
              <span
                class="font-caption text-caption uppercase tracking-wider text-graphite font-semibold"
                >Usia Reproduksi</span
              >
              <span
                class="text-sm font-medium text-label-md font-semibold text-ink mt-2"
                >30 Tahun</span
              >
              <p
                class="font-caption text-caption text-graphite mt-1"
              >
                Fase Reproduksi Aktif
              </p>
            </div>
            <div
              class="bg-paper p-4-card flex flex-col justify-between"
            >
              <span
                class="font-caption text-caption uppercase tracking-wider text-graphite font-semibold"
                >Pasangan Sah</span
              >
              <span
                class="text-sm font-medium text-label-md font-semibold text-ink mt-2 truncate"
                >Bpk. Supriyanto</span
              >
              <p
                class="font-caption text-caption text-graphite mt-1"
              >
                45 Tahun (Suami)
              </p>
            </div>
            <div
              class="col-span-2 md:col-span-1 bg-paper p-4-card flex flex-col justify-between"
            >
              <span
                class="font-caption text-caption uppercase tracking-wider text-graphite font-semibold"
                >Wilayah Binaan</span
              >
              <span
                class="text-sm font-medium text-label-md font-semibold text-ink mt-2 truncate"
                >Cikampek Timur</span
              >
              <p
                class="font-caption text-caption text-graphite mt-1"
              >
                Dusun Krajan, RT 01/07
              </p>
            </div>
          </section>
          <!-- Main Content Layout (70/30 split) -->
          <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
            <!-- Left Column (Main ~70% / 8 cols) -->
            <div class="lg:col-span-8 flex flex-col gap-6">
              <!-- Section A: Data Pasangan -->
              <section
                class="bg-paper p-6-card"
              >
                <div
                  class="flex items-center justify-between pb-4 bg-fog -mx-6 -mt-6 p-6 mb-5"
                >
                  <div class="flex items-center gap-3">
                    <span
                      class="material-symbols-outlined text-primary text-[24px]"
                      >group</span
                    >
                    <div>
                      <h3
                        class="text-xl font-bold text-headline-md text-ink"
                      >
                        Data Pasangan
                      </h3>
                      <p
                        class="font-caption text-caption text-graphite"
                      >
                        Keterhubungan kependudukan resmi
                        kartu keluarga
                      </p>
                    </div>
                  </div>
                  <a
                    class="text-sm font-medium text-label-md text-primary hover:text-white-fixed-variant flex items-center gap-1 font-semibold group"
                    href="#"
                  >
                    Lihat Profil Pasangan
                    <span
                      class="material-symbols-outlined text-[16px] transition-transform group-hover:translate-x-0.5"
                      >arrow_forward</span
                    >
                  </a>
                </div>
                <div
                  class="grid grid-cols-1 md:grid-cols-2 gap-y-4 gap-x-6"
                >
                  <div class="bg-fog p-3.5">
                    <span
                      class="font-caption text-caption text-graphite uppercase tracking-wider block"
                      >Nama Pasangan</span
                    >
                    <span
                      class="text-[15px] text-body-md font-semibold text-ink"
                      >Bpk. Supriyanto</span
                    >
                  </div>
                  <div class="bg-fog p-3.5">
                    <span
                      class="font-caption text-caption text-graphite uppercase tracking-wider block"
                      >NIK Pasangan</span
                    >
                    <span
                      class="text-[15px] text-body-md font-semibold text-ink font-mono"
                      >321508••••••0001</span
                    >
                  </div>
                  <div class="bg-fog p-3.5">
                    <span
                      class="font-caption text-caption text-graphite uppercase tracking-wider block"
                      >Hubungan Keluarga</span
                    >
                    <span
                      class="text-[15px] text-body-md font-semibold text-ink"
                      >Suami (Kepala Keluarga)</span
                    >
                  </div>
                  <div class="bg-fog p-3.5">
                    <span
                      class="font-caption text-caption text-graphite uppercase tracking-wider block"
                      >Pernikahan Sah</span
                    >
                    <span
                      class="text-[15px] text-body-md font-semibold text-ink"
                      >12 Mei 2018
                      <span
                        class="font-caption text-caption text-graphite"
                        >(Usia 8 Tahun)</span
                      ></span
                    >
                  </div>
                  <div
                    class="bg-fog p-3.5 md:col-span-2"
                  >
                    <span
                      class="font-caption text-caption text-graphite uppercase tracking-wider block"
                      >Status Domisili Bersama</span
                    >
                    <span
                      class="text-[15px] text-body-md font-semibold text-ink flex items-center gap-2 mt-0.5"
                    >
                      <span
                        class="material-symbols-outlined text-green-700 text-[18px]"
                        >check_circle</span
                      >
                      Aktif &amp; Tinggal Serumah di Dusun
                      Krajan RT 01 / RW 07
                    </span>
                  </div>
                </div>
              </section>
              <!-- Section B: Status Keluarga Berencana (KB) -->
              <section
                class="bg-paper p-6-card"
              >
                <div
                  class="flex items-center justify-between pb-4 bg-fog -mx-6 -mt-6 p-6 mb-5"
                >
                  <div class="flex items-center gap-3">
                    <span
                      class="material-symbols-outlined text-primary text-[24px]"
                      >health_and_safety</span
                    >
                    <div>
                      <h3
                        class="text-xl font-bold text-headline-md text-ink"
                      >
                        Status Keluarga Berencana (KB)
                      </h3>
                      <p
                        class="font-caption text-caption text-graphite"
                      >
                        Catatan penggunaan alat dan obat
                        kontrasepsi
                      </p>
                    </div>
                  </div>
                  <span
                    class="bg-red-600-container text-red-700 text-sm font-medium text-label-md px-3 py-1 font-semibold"
                  >
                    Non-Akseptor
                  </span>
                </div>
                <!-- Alert Edukasi Ramah -->
                <div
                  class="bg-fog p-4 mb-5 flex items-start gap-3"
                >
                  <span
                    class="material-symbols-outlined text-primary text-[22px] shrink-0 mt-0.5"
                    >lightbulb</span
                  >
                  <div
                    class="text-body-md text-[15px] text-ink leading-relaxed"
                  >
                    <p>
                      <span class="font-semibold"
                        >Siti Aminah</span
                      >
                      belum tercatat menggunakan metode
                      kontrasepsi aktif (non-akseptor).
                      Prioritaskan komunikasi
                      interpersonal terkait perlindungan
                      jangka panjang melalui edukasi
                      <strong
                        class="text-primary font-semibold"
                        >MKJP (IUD/Implan)</strong
                      >
                      pada kunjungan rutin berikutnya.
                    </p>
                  </div>
                </div>
                <div
                  class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-5"
                >
                  <div class="bg-fog p-3">
                    <span
                      class="font-caption text-caption text-graphite uppercase tracking-wider block"
                      >Status KB</span
                    >
                    <span
                      class="text-sm font-medium text-label-md font-semibold text-red-600 mt-1 block"
                      >Belum Menggunakan KB</span
                    >
                  </div>
                  <div class="bg-fog p-3">
                    <span
                      class="font-caption text-caption text-graphite uppercase tracking-wider block"
                      >Metode Kontrasepsi</span
                    >
                    <span
                      class="text-sm font-medium text-label-md font-semibold text-graphite mt-1 block"
                      >-</span
                    >
                  </div>
                  <div class="bg-fog p-3">
                    <span
                      class="font-caption text-caption text-graphite uppercase tracking-wider block"
                      >Tanggal Mulai</span
                    >
                    <span
                      class="text-sm font-medium text-label-md font-semibold text-graphite mt-1 block"
                      >-</span
                    >
                  </div>
                  <div class="bg-fog p-3">
                    <span
                      class="font-caption text-caption text-graphite uppercase tracking-wider block"
                      >Pelayanan Terakhir</span
                    >
                    <span
                      class="text-sm font-medium text-label-md font-semibold text-graphite mt-1 block"
                      >-</span
                    >
                  </div>
                </div>
                <div
                  class="flex flex-wrap items-center gap-3 pt-2"
                >
                  <button
                    class="px-4 py-2 bg-primary text-white text-sm font-medium text-label-md hover:bg-primary-dark transition-colors flex items-center gap-2"
                    type="button"
                  >
                    <span
                      class="material-symbols-outlined text-[18px]"
                      >add</span
                    >
                    <span>Tambah Data KB</span>
                  </button>
                  <button
                    class="px-4 py-2 bg-fog text-primary text-sm font-medium text-label-md hover:bg-fog transition-colors flex items-center gap-2"
                    type="button"
                  >
                    <span
                      class="material-symbols-outlined text-[18px]"
                      >support_agent</span
                    >
                    <span>Konseling KB</span>
                  </button>
                </div>
              </section>
              <!-- Section C: Status Kehamilan -->
              <section
                class="bg-paper p-6-card"
              >
                <div
                  class="flex items-center justify-between pb-4 bg-fog -mx-6 -mt-6 p-6 mb-5"
                >
                  <div class="flex items-center gap-3">
                    <span
                      class="material-symbols-outlined text-primary text-[24px]"
                      >pregnant_woman</span
                    >
                    <div>
                      <h3
                        class="text-xl font-bold text-headline-md text-ink"
                      >
                        Status Kehamilan
                      </h3>
                      <p
                        class="font-caption text-caption text-graphite"
                      >
                        Pemantauan obstetri dan
                        penapisan ibu hamil baru
                      </p>
                    </div>
                  </div>
                  <span
                    class="bg-fog text-graphite text-sm font-medium text-label-md px-3 py-1 font-semibold"
                  >
                    Tidak Hamil
                  </span>
                </div>
                <div
                  class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4"
                >
                  <div class="bg-fog p-4">
                    <span
                      class="font-caption text-caption text-graphite uppercase tracking-wider block"
                      >Status Saat Ini</span
                    >
                    <p
                      class="text-lg text-body-lg font-bold text-ink mt-1"
                    >
                      Tidak Sedang Hamil
                    </p>
                    <p
                      class="font-caption text-caption text-graphite mt-1"
                    >
                      Pemeriksaan skrining kader
                      terkonfirmasi negatif
                    </p>
                  </div>
                  <div class="bg-fog p-4">
                    <span
                      class="font-caption text-caption text-graphite uppercase tracking-wider block"
                      >Riwayat Obstetri (Gravida /
                      Para)</span
                    >
                    <p
                      class="text-lg text-body-lg font-bold text-ink mt-1"
                    >
                      1 Anak Lahir Hidup
                    </p>
                    <p
                      class="font-caption text-caption text-graphite mt-1"
                    >
                      Anak ke-1: Ahmad Supriyanto (12
                      tahun)
                    </p>
                  </div>
                </div>
                <div
                  class="bg-fog p-3 mb-5 flex items-center gap-2 text-graphite font-caption text-caption"
                >
                  <span
                    class="material-symbols-outlined text-primary text-[16px] shrink-0"
                    >sync_alt</span
                  >
                  <span
                    >Data kehamilan dan antenatal
                    terintegrasi langsung dengan modul
                    pendampingan BUMIL Cikampek.</span
                  >
                </div>
                <div class="flex flex-wrap items-center gap-3">
                  <button
                    class="px-4 py-2 bg-primary text-white text-sm font-medium text-label-md hover:bg-primary-dark transition-colors flex items-center gap-2"
                    type="button"
                  >
                    <span
                      class="material-symbols-outlined text-[18px]"
                      >add_circle</span
                    >
                    <span>Catat Kehamilan</span>
                  </button>
                  <button
                    class="px-4 py-2 bg-fog text-primary text-sm font-medium text-label-md hover:bg-fog transition-colors flex items-center gap-2"
                    type="button"
                  >
                    <span
                      class="material-symbols-outlined text-[18px]"
                      >history</span
                    >
                    <span>Lihat Riwayat Kehamilan</span>
                  </button>
                </div>
              </section>
              <!-- Section D: Riwayat PUS (Timeline Vertikal) -->
              <section
                class="bg-paper p-6-card"
              >
                <div
                  class="flex items-center gap-3 pb-4 bg-fog -mx-6 -mt-6 p-6 mb-6"
                >
                  <span
                    class="material-symbols-outlined text-primary text-[24px]"
                    >history_toggle_off</span
                  >
                  <div>
                    <h3
                      class="text-xl font-bold text-headline-md text-ink"
                    >
                      Riwayat PUS
                    </h3>
                    <p
                      class="font-caption text-caption text-graphite"
                    >
                      Kronologi administrasi kependudukan
                      dan layanan KB
                    </p>
                  </div>
                </div>
                <!-- Vertical Timeline Items -->
                <div class="relative pl-6 space-y-6">
                  <!-- Item 1 -->
                  <div class="relative">
                    <div
                      class="absolute -left-[30px] top-1 w-3.5 h-3.5 bg-primary"
                    ></div>
                    <div class="flex items-baseline gap-2">
                      <span
                        class="text-sm font-medium text-label-md font-bold text-primary"
                        >3 September 2026</span
                      >
                      <span
                        class="font-caption text-caption text-graphite"
                        >10:15 WIB</span
                      >
                    </div>
                    <p
                      class="text-[15px] text-body-md font-semibold text-ink mt-0.5"
                    >
                      Verifikasi dan Pemutakhiran Berkas
                      PUS
                    </p>
                    <p
                      class="font-caption text-caption text-graphite mt-0.5"
                    >
                      Data PUS dimutakhirkan dan diajukan
                      untuk verifikasi pengawas kecamatan
                      oleh Kader Siti Nurhaliza.
                    </p>
                  </div>
                  <!-- Item 2 -->
                  <div class="relative">
                    <div
                      class="absolute -left-[30px] top-1 w-3.5 h-3.5 bg-fogest"
                    ></div>
                    <div class="flex items-baseline gap-2">
                      <span
                        class="text-sm font-medium text-label-md font-semibold text-ink"
                        >12 Januari 2026</span
                      >
                      <span
                        class="font-caption text-caption text-graphite"
                        >09:00 WIB</span
                      >
                    </div>
                    <p
                      class="text-[15px] text-body-md font-semibold text-ink mt-0.5"
                    >
                      Pemeriksaan Kesehatan Reproduksi
                      &amp; Skrining Awal
                    </p>
                    <p
                      class="font-caption text-caption text-graphite mt-0.5"
                    >
                      Puskesmas Cikampek: Kondisi organ
                      reproduksi sehat, tekanan darah
                      115/75 mmHg, konseling kontrasepsi.
                    </p>
                  </div>
                  <!-- Item 3 -->
                  <div class="relative">
                    <div
                      class="absolute -left-[30px] top-1 w-3.5 h-3.5 bg-fogest"
                    ></div>
                    <div class="flex items-baseline gap-2">
                      <span
                        class="text-sm font-medium text-label-md font-semibold text-ink"
                        >10 Januari 2025</span
                      >
                      <span
                        class="font-caption text-caption text-graphite"
                        >14:20 WIB</span
                      >
                    </div>
                    <p
                      class="text-[15px] text-body-md font-semibold text-ink mt-0.5"
                    >
                      Terdaftar sebagai Pasangan Usia
                      Subur (PUS)
                    </p>
                    <p
                      class="font-caption text-caption text-graphite mt-0.5"
                    >
                      Pencatatan awal basis data
                      kependudukan Satpel PPKB Kecamatan
                      Cikampek.
                    </p>
                  </div>
                  <!-- Item 4 -->
                  <div class="relative">
                    <div
                      class="absolute -left-[30px] top-1 w-3.5 h-3.5 bg-fogest"
                    ></div>
                    <div class="flex items-baseline gap-2">
                      <span
                        class="text-sm font-medium text-label-md font-semibold text-ink"
                        >12 Mei 2018</span
                      >
                    </div>
                    <p
                      class="text-[15px] text-body-md font-semibold text-ink mt-0.5"
                    >
                      Pernikahan Tercatat Resmi
                    </p>
                    <p
                      class="font-caption text-caption text-graphite mt-0.5"
                    >
                      Akta nikah terdaftar di Kantor
                      Urusan Agama (KUA) Kecamatan
                      Cikampek, Kabupaten Karawang.
                    </p>
                  </div>
                </div>
              </section>
              <!-- Section E: Catatan Khusus Kader -->
              <section
                class="bg-paper p-6-card"
              >
                <div
                  class="flex items-center justify-between pb-4 bg-fog -mx-6 -mt-6 p-6 mb-5"
                >
                  <div class="flex items-center gap-3">
                    <span
                      class="material-symbols-outlined text-primary text-[24px]"
                      >notes</span
                    >
                    <div>
                      <h3
                        class="text-xl font-bold text-headline-md text-ink"
                      >
                        Catatan Khusus Kader
                      </h3>
                      <p
                        class="font-caption text-caption text-graphite"
                      >
                        Buku harian pendampingan
                        lapangan PPKB
                      </p>
                    </div>
                  </div>
                  <button
                    class="text-sm font-medium text-label-md text-primary hover:text-white-fixed-variant font-semibold flex items-center gap-1.5"
                    type="button"
                  >
                    <span
                      class="material-symbols-outlined text-[16px]"
                      >edit_note</span
                    >
                    Edit Catatan
                  </button>
                </div>
                <div class="bg-fog p-4">
                  <div class="flex items-start gap-3">
                    <span
                      class="material-symbols-outlined text-graphite text-[20px] shrink-0 mt-0.5"
                      >format_quote</span
                    >
                    <div class="space-y-2">
                      <p
                        class="text-[15px] text-body-md text-ink leading-relaxed italic"
                      >
                        “Keluarga aktif mengikuti
                        kegiatan penyuluhan dan posyandu
                        Dusun Krajan. Saat ini belum
                        menggunakan kontrasepsi, rencana
                        kunjungan edukasi lanjutan
                        terkait metode IUD minggu
                        depan.”
                      </p>
                      <div
                        class="flex items-center justify-between pt-2"
                      >
                        <span
                          class="font-caption text-caption text-graphite"
                          >Oleh: Kader Siti Nurhaliza
                          (Posyandu Teratai 03)</span
                        >
                        <span
                          class="font-caption text-caption text-graphite"
                          >3 September 2026</span
                        >
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="mt-4 flex items-center gap-2 font-caption text-caption text-graphite"
                >
                  <span
                    class="material-symbols-outlined text-[16px]"
                    >lock</span
                  >
                  <span
                    >Catatan bersifat internal kader dan
                    terlindungi regulasi privasi PPKB.</span
                  >
                </div>
              </section>
            </div>
            <!-- Right Column (Sidebar ~30% / 4 cols) -->
            <div class="lg:col-span-4 flex flex-col gap-6">
              <!-- Section A: Program Terkait (Keterkaitan Antar Program) -->
              <section
                class="bg-paper p-6-card"
              >
                <div
                  class="pb-4 bg-fog -mx-6 -mt-6 p-6 mb-5"
                >
                  <div
                    class="flex items-center gap-2 text-primary text-xl font-bold text-headline-md"
                  >
                    <span
                      class="material-symbols-outlined text-[24px]"
                      >hub</span
                    >
                    <h3 class="text-ink">
                      Program Terkait
                    </h3>
                  </div>
                  <p
                    class="font-caption text-caption text-graphite mt-1"
                  >
                    Interoperabilitas data keluarga tanpa
                    duplikasi
                  </p>
                </div>
                <div class="space-y-3">
                  <!-- Program PUS (Active) -->
                  <div
                    class="p-3.5 bg-fog flex flex-col gap-2"
                  >
                    <div
                      class="flex items-center justify-between"
                    >
                      <div
                        class="flex items-center gap-2"
                      >
                        <span
                          class="material-symbols-outlined text-primary text-[20px]"
                          >diversity_1</span
                        >
                        <span
                          class="text-sm font-medium text-label-md font-bold text-ink"
                          >PUS</span
                        >
                      </div>
                      <span
                        class="bg-green-50 text-green-700 text-sm font-medium text-label-md px-2 py-0.5 text-xs font-semibold"
                      >
                        AKTIF
                      </span>
                    </div>
                    <p
                      class="font-caption text-caption text-graphite"
                    >
                      Pasangan Usia Subur tercatat dalam
                      sistem.
                    </p>
                    <div
                      class="flex items-center justify-between pt-1"
                    >
                      <span
                        class="font-caption text-caption text-primary font-semibold flex items-center gap-1"
                      >
                        <span
                          class="w-1.5 h-1.5 bg-primary"
                        ></span>
                        Sedang Dibuka
                      </span>
                    </div>
                  </div>
                  <!-- Program KB (Not Registered) -->
                  <div
                    class="p-3.5 bg-fog flex flex-col gap-2"
                  >
                    <div
                      class="flex items-center justify-between"
                    >
                      <div
                        class="flex items-center gap-2"
                      >
                        <span
                          class="material-symbols-outlined text-graphite text-[20px]"
                          >medication</span
                        >
                        <span
                          class="text-sm font-medium text-label-md font-bold text-ink"
                          >KB (Akseptor)</span
                        >
                      </div>
                      <span
                        class="bg-fog text-graphite text-sm font-medium text-label-md px-2 py-0.5 text-xs font-semibold"
                      >
                        Belum Terdaftar
                      </span>
                    </div>
                    <p
                      class="font-caption text-caption text-graphite"
                    >
                      Belum memilih metode kontrasepsi
                      aktif.
                    </p>
                    <div class="pt-1">
                      <a
                        class="inline-flex items-center gap-1 text-sm font-medium text-label-md text-primary hover:text-white-fixed-variant font-semibold"
                        href="#"
                      >
                        Daftarkan KB
                        <span
                          class="material-symbols-outlined text-[14px]"
                          >arrow_forward</span
                        >
                      </a>
                    </div>
                  </div>
                  <!-- Program BUMIL (Not Registered) -->
                  <div
                    class="p-3.5 bg-fog flex flex-col gap-2"
                  >
                    <div
                      class="flex items-center justify-between"
                    >
                      <div
                        class="flex items-center gap-2"
                      >
                        <span
                          class="material-symbols-outlined text-graphite text-[20px]"
                          >pregnant_woman</span
                        >
                        <span
                          class="text-sm font-medium text-label-md font-bold text-ink"
                          >BUMIL</span
                        >
                      </div>
                      <span
                        class="bg-fog text-graphite text-sm font-medium text-label-md px-2 py-0.5 text-xs font-semibold"
                      >
                        Belum Terdaftar
                      </span>
                    </div>
                    <p
                      class="font-caption text-caption text-graphite"
                    >
                      Tidak tercatat dalam kohort ibu
                      hamil aktif.
                    </p>
                    <div class="pt-1">
                      <a
                        class="inline-flex items-center gap-1 text-sm font-medium text-label-md text-primary hover:text-white-fixed-variant font-semibold"
                        href="#"
                      >
                        Skrining Hamil
                        <span
                          class="material-symbols-outlined text-[14px]"
                          >arrow_forward</span
                        >
                      </a>
                    </div>
                  </div>
                </div>
                <div
                  class="mt-4 p-3 bg-fog text-graphite font-caption text-caption flex items-start gap-2"
                >
                  <span
                    class="material-symbols-outlined text-primary text-[18px] shrink-0 mt-0.5"
                    >info</span
                  >
                  <span
                    >PUS adalah basis intervensi. Kader
                    dapat menghubungkan intervensi KB atau
                    BUMIL langsung dari profil ini.</span
                  >
                </div>
              </section>
              <!-- Section B: Status Verifikasi & Integritas Data -->
              <section
                class="bg-paper p-6-card"
              >
                <div
                  class="pb-4 bg-fog -mx-6 -mt-6 p-6 mb-5"
                >
                  <div
                    class="flex items-center gap-2 text-primary text-xl font-bold text-headline-md"
                  >
                    <span
                      class="material-symbols-outlined text-[24px]"
                      >verified</span
                    >
                    <h3 class="text-ink">
                      Status Verifikasi
                    </h3>
                  </div>
                  <p
                    class="font-caption text-caption text-graphite mt-1"
                  >
                    Audit trail data dan validitas lapangan
                  </p>
                </div>
                <div class="space-y-4">
                  <!-- Kelengkapan Berkas -->
                  <div>
                    <div
                      class="flex items-center justify-between text-sm font-medium text-label-md mb-1.5"
                    >
                      <span
                        class="text-graphite"
                        >Kelengkapan Berkas PUS</span
                      >
                      <span
                        class="font-semibold text-green-700"
                        >Lengkap</span
                      >
                    </div>
                    <div
                      class="w-full bg-fog h-2 overflow-hidden"
                    >
                      <div
                        class="bg-secondary h-full w-full"
                      ></div>
                    </div>
                    <span
                      class="font-caption text-caption text-graphite mt-1 block"
                      >Field Wajib Lengkap</span
                    >
                  </div>
                  <div
                    class="bg-fog p-3 space-y-2.5"
                  >
                    <div
                      class="flex justify-between items-start"
                    >
                      <span
                        class="font-caption text-caption text-graphite"
                        >Status Validasi</span
                      >
                      <span
                        class="bg-tertiary-fixed text-on-tertiary-fixed-variant text-sm font-medium text-label-md px-2 py-0.5 text-xs font-semibold text-right"
                      >
                        Menunggu Verifikasi
                      </span>
                    </div>
                    <p
                      class="font-caption text-caption text-graphite"
                    >
                      Menunggu persetujuan Admin Satpel
                      PPKB Kecamatan Cikampek.
                    </p>
                  </div>
                  <div
                    class="space-y-3 font-caption text-caption"
                  >
                    <div
                      class="flex justify-between py-1 bg-fog px-3"
                    >
                      <span class="text-graphite"
                        >Petugas Pencatat</span
                      >
                      <span
                        class="text-ink font-semibold text-right"
                        >Kader Siti Nurhaliza</span
                      >
                    </div>
                    <div
                      class="flex justify-between py-1 bg-fog px-3"
                    >
                      <span class="text-graphite"
                        >Pos Pelayanan</span
                      >
                      <span
                        class="text-ink font-semibold text-right"
                        >Posyandu Teratai 03</span
                      >
                    </div>
                    <div
                      class="flex justify-between py-1 bg-fog px-3"
                    >
                      <span class="text-graphite"
                        >Sinkronisasi Terakhir</span
                      >
                      <span
                        class="text-ink font-semibold text-right"
                        >3 Sep 2026, 10:15 WIB</span
                      >
                    </div>
                  </div>
                </div>
              </section>
              <!-- Section C: Box Privasi Data Kependudukan -->
              <section
                class="bg-paper p-5-card"
              >
                <div class="flex items-start gap-3">
                  <span
                    class="material-symbols-outlined text-primary text-[22px] shrink-0 mt-0.5"
                    >security</span
                  >
                  <div>
                    <h4
                      class="text-sm font-medium text-label-md font-bold text-ink"
                    >
                      Jaminan Kerahasiaan Data
                    </h4>
                    <p
                      class="font-caption text-caption text-graphite mt-1.5 leading-relaxed"
                    >
                      Seluruh data PUS, riwayat
                      reproduksi, dan NIK pasangan
                      terenkripsi dan hanya dapat diakses
                      oleh kader wilayah tugas Cikampek
                      Timur sesuai standar tata kelola
                      data BKKBN.
                    </p>
                  </div>
                </div>
              </section>
            </div>
          </div>
        </div>
      </main>
    </div>
  </body>
</html>
