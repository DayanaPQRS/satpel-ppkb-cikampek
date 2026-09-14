<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link
      crossorigin=""
      href="https://fonts.gstatic.com"
      rel="preconnect"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;display=swap"
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
              "error-container": "#ffdad6",
              "on-primary-container": "#bfd2ff",
              "on-primary": "#ffffff",
              "on-tertiary": "#ffffff",
              "on-secondary-fixed-variant": "#005323",
              surface: "#f9f9ff",
              "tertiary-container": "#cfa600",
              "on-secondary-fixed": "#00210a",
              "primary-container": "#0057b8",
              primary: "#00408b",
              "on-error-container": "#93000a",
              "inverse-on-surface": "#eff0f9",
              "secondary-fixed": "#88faa0",
              outline: "#727784",
              "on-secondary-container": "#007434",
              tertiary: "#745b00",
              "surface-container-low": "#f2f3fc",
              "on-primary-fixed": "#001a41",
              "surface-container-lowest": "#ffffff",
              "on-surface": "#191c22",
              "surface-bright": "#f9f9ff",
              "surface-container-highest": "#e1e2eb",
              "on-background": "#191c22",
              "surface-variant": "#e1e2eb",
              "surface-dim": "#d9d9e2",
              "secondary-container": "#88faa0",
              "primary-fixed-dim": "#adc7ff",
              "inverse-primary": "#adc7ff",
              "surface-container": "#ededf6",
              "outline-variant": "#c2c6d4",
              background: "#f9f9ff",
              "on-error": "#ffffff",
              "on-secondary": "#ffffff",
              secondary: "#006d31",
              error: "#ba1a1a",
              "secondary-fixed-dim": "#6cdd86",
              "on-surface-variant": "#424752",
              "tertiary-fixed-dim": "#f1c100",
              "surface-container-high": "#e7e7f0",
              "surface-tint": "#0d5bbc",
              "inverse-surface": "#2e3037",
              "on-tertiary-fixed-variant": "#574400",
              "on-tertiary-container": "#4e3d00",
              "on-primary-fixed-variant": "#004493",
              "primary-fixed": "#d8e2ff",
              "on-tertiary-fixed": "#241a00",
              "tertiary-fixed": "#ffe08a",
            },
            borderRadius: {
              DEFAULT: "0.25rem",
              lg: "0.5rem",
              xl: "0.75rem",
              full: "9999px",
            },
            spacing: {
              xs: "4px",
              gutter: "24px",
              xxl: "64px",
              lg: "24px",
              sm: "8px",
              xl: "40px",
              unit: "4px",
              "container-max": "1280px",
              md: "16px",
            },
            fontFamily: {
              "body-lg": ["Plus Jakarta Sans"],
              "display-xl": ["Plus Jakarta Sans"],
              caption: ["Plus Jakarta Sans"],
              "display-lg": ["Plus Jakarta Sans"],
              "body-md": ["Plus Jakarta Sans"],
              "headline-lg": ["Plus Jakarta Sans"],
              "label-md": ["Plus Jakarta Sans"],
              "headline-md": ["Plus Jakarta Sans"],
            },
            fontSize: {
              "body-lg": [
                "18px",
                { lineHeight: "28px", fontWeight: "400" },
              ],
              "display-xl": [
                "60px",
                {
                  lineHeight: "72px",
                  letterSpacing: "-0.02em",
                  fontWeight: "700",
                },
              ],
              caption: [
                "12px",
                { lineHeight: "16px", fontWeight: "400" },
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
              "headline-lg": [
                "32px",
                {
                  lineHeight: "40px",
                  letterSpacing: "-0.01em",
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
              "headline-md": [
                "24px",
                { lineHeight: "32px", fontWeight: "600" },
              ],
            },
          },
        },
      };
    </script>
  </head>
  <body class="bg-background text-[15px] text-body-md text-ink">
    <aside
      class="fixed left-0 top-0 h-full w-64 bg-paper z-50 flex flex-col justify-between py-md-card-[0_1px_8px_rgba(0,0,0,0.04)]"
    >
      <div class="flex flex-col gap-lg">
        <div class="px-md flex items-center gap-sm">
          <div
            class="w-8 h-8 bg-primary-light flex items-center justify-center"
          >
            <span
              class="material-symbols-outlined text-white text-[20px]"
              >account_balance</span
            >
          </div>
          <div class="flex flex-col">
            <span
              class="text-sm font-medium text-label-md text-ink uppercase tracking-tight"
              >SATPEL PPKB</span
            ><span
              class="font-caption text-caption text-graphite"
              >Kec. Cikampek</span
            >
          </div>
        </div>
        <div class="px-md">
          <span
            class="font-caption text-caption uppercase text-graphite tracking-wider font-semibold"
            >Menu Utama</span
          >
          <nav
            class="mt-sm flex flex-col gap-xs"
            data-active-classes="bg-primary-light text-white"
          >
            <a
              class="flex items-center gap-sm px-sm py-sm text-graphite hover:bg-fog hover:text-ink transition-colors"
              data-path="dashboard"
              href="#"
              ><span class="material-symbols-outlined text-[20px]"
                >grid_view</span
              ><span class="text-sm font-medium text-label-md"
                >Dashboard</span
              ></a
            ><a
              aria-current="page"
              class="flex items-center gap-sm px-sm py-sm transition-colors bg-primary-light text-white"
              data-path="data-keluarga"
              href="#"
              ><span class="material-symbols-outlined text-[20px]"
                >family_restroom</span
              ><span class="text-sm font-medium text-label-md"
                >Data Keluarga</span
              ></a
            ><a
              class="flex items-center gap-sm px-sm py-sm text-graphite hover:bg-fog hover:text-ink transition-colors"
              data-path="data-individu"
              href="#"
              ><span class="material-symbols-outlined text-[20px]"
                >person_search</span
              ><span class="text-sm font-medium text-label-md"
                >Data Individu</span
              ></a
            ><a
              class="flex items-center gap-sm px-sm py-sm text-graphite hover:bg-fog hover:text-ink transition-colors"
              data-path="program-kb"
              href="#"
              ><span class="material-symbols-outlined text-[20px]"
                >health_and_safety</span
              ><span class="text-sm font-medium text-label-md"
                >Program KB</span
              ></a
            ><a
              class="flex items-center gap-sm px-sm py-sm text-graphite hover:bg-fog hover:text-ink transition-colors"
              data-path="kegiatan-lapangan"
              href="#"
              ><span class="material-symbols-outlined text-[20px]"
                >assignment</span
              ><span class="text-sm font-medium text-label-md"
                >Kegiatan Lapangan</span
              ></a
            ><a
              class="flex items-center gap-sm px-sm py-sm text-graphite hover:bg-fog hover:text-ink transition-colors"
              data-path="notifikasi"
              href="#"
              ><span class="material-symbols-outlined text-[20px]"
                >notifications</span
              ><span class="text-sm font-medium text-label-md"
                >Notifikasi</span
              ></a
            >
          </nav>
        </div>
      </div>
      <div class="px-md flex flex-col gap-xs">
        <span
          class="font-caption text-caption uppercase text-graphite tracking-wider font-semibold"
          >Dukungan &amp; Akun</span
        >
        <nav
          class="mt-xs flex flex-col gap-xs"
          data-active-classes="bg-primary-light text-white"
        >
          <a
            class="flex items-center gap-sm px-sm py-sm text-graphite hover:bg-fog hover:text-ink transition-colors"
            data-path="pusat-bantuan"
            href="#"
            ><span class="material-symbols-outlined text-[20px]"
              >help_outline</span
            ><span class="text-sm font-medium text-label-md"
              >Pusat Bantuan</span
            ></a
          ><a
            class="flex items-center gap-sm px-sm py-sm text-graphite hover:bg-fog hover:text-ink transition-colors"
            data-path="pengaturan-akun"
            href="#"
            ><span class="material-symbols-outlined text-[20px]"
              >settings</span
            ><span class="text-sm font-medium text-label-md"
              >Pengaturan Akun</span
            ></a
          >
        </nav>
        <div
          class="mt-md pt-sm bg-fog px-sm py-sm flex items-center justify-between"
        >
          <span
            class="font-caption text-caption text-graphite"
            >v2.4 Pelayanan KB</span
          ><span
            class="material-symbols-outlined text-graphite text-[16px]"
            >verified</span
          >
        </div>
      </div>
    </aside>
    <div class="pl-64">
      <header
        class="fixed top-0 left-64 right-0 h-16 bg-paper/90-xl-card-[0_1px_8px_rgba(0,0,0,0.04)] z-40 flex items-center justify-between px-lg"
      >
        <div class="flex items-center gap-md">
          <span
            class="text-xl font-bold text-body-md font-semibold text-primary tracking-tight hidden lg:inline-block"
            >SATPEL PPKB KECAMATAN CIKAMPEK</span
          >
          <div class="relative flex items-center">
            <span
              class="material-symbols-outlined absolute left-sm text-graphite text-[18px]"
              >search</span
            ><input
              class="bg-fog text-[15px] text-caption text-ink pl-xl pr-md py-xs focus:outline-none w-64 md:w-80"
              placeholder="Cari NIK, KK, atau nama warga..."
              type="search"
            />
          </div>
        </div>
        <div class="flex items-center gap-md">
          <button
            aria-label="Pemberitahuan"
            class="relative p-xs text-graphite hover:text-ink hover:bg-fog transition-colors"
            type="button"
          >
            <span class="material-symbols-outlined text-[22px]"
              >notifications</span
            ><span
              class="absolute top-xs right-xs w-2 h-2 bg-red-600"
            ></span>
          </button>
          <div class="flex items-center gap-sm pl-sm">
            <div class="flex flex-col text-right hidden sm:flex">
              <span
                class="text-sm font-medium text-label-md text-ink font-semibold leading-tight"
                >Siti Nurhaliza</span
              ><span
                class="font-caption text-caption text-graphite leading-tight"
                >Kader Utama</span
              >
            </div>
            <div
              class="w-8 h-8 bg-primary flex items-center justify-center"
            >
              <span
                class="material-symbols-outlined text-white text-[18px]"
                >person</span
              >
            </div>
          </div>
        </div>
      </header>
      <main class="relative pt-16 bg-background min-h-screen px-lg py-lg">
        <div class="flex flex-col w-full">
          <!-- 1. Top Navigation & Action Bar -->
          <div
            class="flex flex-col sm:flex-row sm:items-center justify-between gap-md mb-lg"
          >
            <!-- Breadcrumbs & Quick Back -->
            <div
              class="flex flex-wrap items-center gap-xs font-caption text-caption text-graphite"
            >
              <a
                class="inline-flex items-center gap-xs text-primary hover:underline text-sm font-medium transition-colors"
                href="#"
              >
                <span
                  class="material-symbols-outlined text-[16px]"
                  >arrow_back</span
                >
                Kembali ke Detail Keluarga
              </a>
              <span class="text-graphite">/</span>
              <a
                class="hover:text-ink transition-colors"
                href="#"
                >Data Keluarga</a
              >
              <span class="text-graphite">/</span>
              <a
                class="hover:text-ink transition-colors"
                href="#"
                >Bpk. Supriyanto</a
              >
              <span class="text-graphite">/</span>
              <span class="text-ink font-semibold"
                >Profil Individu (Ahmad Supriyanto)</span
              >
            </div>
            <!-- Quick Meta Indicator -->
            <div
              class="flex items-center gap-xs font-caption text-caption text-graphite"
            >
              <span
                class="material-symbols-outlined text-[15px] text-green-700"
                >verified_user</span
              >
              <span>Arsip Kependudukan Terpusat</span>
            </div>
          </div>
          <!-- 2. Compact Family Context Callout Strip -->
          <div
            class="bg-paper px-md py-sm mb-lg-card-card flex flex-col md:flex-row md:items-center justify-between gap-sm"
          >
            <div
              class="flex flex-wrap items-center gap-xs md:gap-sm text-sm font-medium text-caption text-ink"
            >
              <span
                class="inline-flex items-center gap-xs bg-primary-light/10 text-primary px-xs py-0.5 uppercase tracking-wide text-[11px] font-bold"
              >
                <span
                  class="material-symbols-outlined text-[14px]"
                  >family_restroom</span
                >
                Konteks Keluarga
              </span>
              <span class="font-semibold text-ink"
                >Bpk. Supriyanto</span
              >
              <span class="text-graphite-variant">|</span>
              <span class="text-graphite"
                >No. KK:
                <span
                  class="font-mono text-ink font-medium"
                  >•••• •••• •••• 1234</span
                ></span
              >
              <span class="text-graphite-variant">|</span>
              <span class="text-graphite"
                >RT 01 / RW 07, Dusun Krajan, Cikampek
                Timur</span
              >
              <span class="text-graphite-variant">|</span>
              <span class="text-ink font-medium"
                >Hubungan: Anak Pertama</span
              >
            </div>
            <a
              class="inline-flex items-center gap-xs text-sm font-medium text-caption text-primary hover:text-primary-light transition-colors shrink-0"
              href="#"
            >
              <span>Lihat Berkas Keluarga</span>
              <span class="material-symbols-outlined text-[16px]"
                >arrow_forward</span
              >
            </a>
          </div>
          <!-- 3. Primary Header Section -->
          <div
            class="bg-paper p-lg mb-xl-card-card"
          >
            <div
              class="flex flex-col lg:flex-row lg:items-center justify-between gap-lg"
            >
              <!-- Left: Identity Lockup -->
              <div
                class="flex items-start sm:items-center gap-md"
              >
                <!-- Initial Avatar -->
                <div
                  class="w-20 h-20 bg-primary-light/15 flex items-center justify-center shrink-0"
                >
                  <span
                    class="font-display-lg text-headline-lg font-bold text-primary tracking-tight"
                    >AS</span
                  >
                </div>
                <div class="flex flex-col gap-xs">
                  <div
                    class="flex flex-wrap items-center gap-sm"
                  >
                    <h1
                      class="text-2xl font-bold text-headline-lg font-bold text-ink tracking-tight"
                    >
                      Ahmad Supriyanto
                    </h1>
                  </div>
                  <p
                    class="text-[15px] text-body-md text-graphite"
                  >
                    Anak Pertama
                    <span class="text-graphite-variant"
                      >•</span
                    >
                    Laki-laki
                    <span class="text-graphite-variant"
                      >•</span
                    >
                    12 tahun (10 Oktober 2013)
                  </p>
                  <div
                    class="flex flex-wrap items-center gap-xs mt-xs"
                  >
                    <span
                      class="inline-flex items-center gap-xs px-sm py-0.5 bg-green-50 text-green-700 text-sm font-medium text-caption"
                    >
                      <span
                        class="material-symbols-outlined text-[14px]"
                        >check_circle</span
                      >
                      Data Lengkap
                    </span>
                    <span
                      class="inline-flex items-center gap-xs px-sm py-0.5 bg-tertiary-container/20 text-on-tertiary-container text-sm font-medium text-caption"
                    >
                      <span
                        class="material-symbols-outlined text-[14px]"
                        >pending</span
                      >
                      Menunggu Verifikasi Dukcapil
                    </span>
                    <span
                      class="inline-flex items-center gap-xs px-sm py-0.5 bg-fog text-graphite text-sm font-medium text-caption"
                    >
                      <span
                        class="material-symbols-outlined text-[14px]"
                        >location_on</span
                      >
                      Cikampek Timur
                    </span>
                  </div>
                </div>
              </div>
              <!-- Right: Primary Actions & Meta -->
              <div
                class="flex flex-col sm:items-end gap-sm lg:shrink-0"
              >
                <div class="flex items-center gap-xs">
                  <button
                    class="inline-flex items-center gap-xs px-md py-xs bg-primary text-white text-sm font-medium text-label-md hover:bg-primary-dark transition-colors"
                    type="button"
                  >
                    <span
                      class="material-symbols-outlined text-[18px]"
                      >edit</span
                    >
                    Edit Profil
                  </button>
                  <button
                    class="inline-flex items-center gap-xs px-md py-xs bg-fog text-ink hover:bg-fog transition-colors text-sm font-medium text-label-md"
                    type="button"
                  >
                    <span
                      class="material-symbols-outlined text-[18px]"
                      >print</span
                    >
                    Cetak Ringkasan
                  </button>
                  <button
                    aria-label="Menu Opsi Tambahan"
                    class="p-xs bg-fog text-graphite hover:bg-fog hover:text-ink transition-colors"
                    type="button"
                  >
                    <span
                      class="material-symbols-outlined text-[20px]"
                      >more_vert</span
                    >
                  </button>
                </div>
                <span
                  class="font-caption text-caption text-graphite text-right"
                >
                  Terakhir diperbarui: 3 September 2026, 10:15
                  WIB oleh
                  <strong
                    class="text-ink font-semibold"
                    >Kader Siti Nurhaliza</strong
                  >
                </span>
              </div>
            </div>
          </div>
          <!-- 4. Main Two-Column Grid Content -->
          <div
            class="grid grid-cols-1 lg:grid-cols-12 gap-lg items-start"
          >
            <!-- LEFT COLUMN: Demographic & Family In-depth (~65% -> 8 cols) -->
            <div class="lg:col-span-8 flex flex-col gap-lg">
              <!-- a. Identitas Kependudukan -->
              <section
                class="bg-paper-card-card"
              >
                <div
                  class="bg-fog px-lg py-sm flex items-center justify-between"
                >
                  <div class="flex items-center gap-xs">
                    <span
                      class="material-symbols-outlined text-primary text-[20px]"
                      >badge</span
                    >
                    <h2
                      class="text-xl font-bold text-label-md font-bold uppercase tracking-wider text-ink"
                    >
                      Identitas Kependudukan
                    </h2>
                  </div>
                  <a
                    class="inline-flex items-center gap-xs text-sm font-medium text-caption text-primary hover:underline"
                    href="#"
                  >
                    <span
                      class="material-symbols-outlined text-[16px]"
                      >edit_square</span
                    >
                    Edit
                  </a>
                </div>
                <div
                  class="p-lg grid grid-cols-1 sm:grid-cols-2 gap-x-lg gap-y-md"
                >
                  <div class="flex flex-col gap-xs">
                    <span
                      class="font-caption text-caption text-graphite uppercase tracking-wider"
                      >Nama Lengkap Sesuai Dokumen</span
                    >
                    <span
                      class="text-[15px] text-body-md font-semibold text-ink"
                      >Ahmad Supriyanto</span
                    >
                  </div>
                  <div class="flex flex-col gap-xs">
                    <span
                      class="font-caption text-caption text-graphite uppercase tracking-wider"
                      >Nomor Induk Kependudukan
                      (NIK)</span
                    >
                    <div class="flex items-center gap-xs">
                      <span
                        class="text-[15px] text-body-md font-mono font-semibold text-ink"
                        >321508••••••0012</span
                      >
                      <span
                        class="px-xs py-0.5 bg-green-50 text-green-700 text-sm font-medium text-[11px] font-bold uppercase"
                      >
                        Tervalidasi 16 Digit
                      </span>
                    </div>
                  </div>
                  <div class="flex flex-col gap-xs">
                    <span
                      class="font-caption text-caption text-graphite uppercase tracking-wider"
                      >Tempat Lahir</span
                    >
                    <span
                      class="text-[15px] text-body-md text-ink"
                      >Karawang</span
                    >
                  </div>
                  <div class="flex flex-col gap-xs">
                    <span
                      class="font-caption text-caption text-graphite uppercase tracking-wider"
                      >Tanggal Lahir &amp; Usia</span
                    >
                    <span
                      class="text-[15px] text-body-md text-ink"
                      >10 Oktober 2013
                      <span
                        class="text-graphite font-medium"
                        >(12 Tahun)</span
                      ></span
                    >
                  </div>
                  <div class="flex flex-col gap-xs">
                    <span
                      class="font-caption text-caption text-graphite uppercase tracking-wider"
                      >Jenis Kelamin</span
                    >
                    <span
                      class="text-[15px] text-body-md text-ink"
                      >Laki-laki</span
                    >
                  </div>
                  <div class="flex flex-col gap-xs">
                    <span
                      class="font-caption text-caption text-graphite uppercase tracking-wider"
                      >Status Perkawinan</span
                    >
                    <span
                      class="text-[15px] text-body-md text-ink"
                      >Belum Kawin</span
                    >
                  </div>
                  <div class="flex flex-col gap-xs">
                    <span
                      class="font-caption text-caption text-graphite uppercase tracking-wider"
                      >Agama</span
                    >
                    <span
                      class="text-[15px] text-body-md text-ink"
                      >Islam</span
                    >
                  </div>
                  <div class="flex flex-col gap-xs">
                    <span
                      class="font-caption text-caption text-graphite uppercase tracking-wider"
                      >Golongan Darah</span
                    >
                    <span
                      class="text-[15px] text-body-md text-ink"
                      >B+
                      <span
                        class="text-caption text-graphite"
                        >(Tercatat di Dokumen)</span
                      ></span
                    >
                  </div>
                </div>
              </section>
              <!-- b. Kedudukan & Hubungan Keluarga -->
              <section
                class="bg-paper-card-card"
              >
                <div
                  class="bg-fog px-lg py-sm flex items-center justify-between"
                >
                  <div class="flex items-center gap-xs">
                    <span
                      class="material-symbols-outlined text-primary text-[20px]"
                      >groups</span
                    >
                    <h2
                      class="text-xl font-bold text-label-md font-bold uppercase tracking-wider text-ink"
                    >
                      Kedudukan &amp; Hubungan Keluarga
                    </h2>
                  </div>
                  <span
                    class="font-caption text-caption text-graphite"
                    >Terverifikasi Kartu Keluarga</span
                  >
                </div>
                <div class="p-lg flex flex-col gap-md">
                  <div
                    class="grid grid-cols-1 sm:grid-cols-2 gap-x-lg gap-y-md"
                  >
                    <div class="flex flex-col gap-xs">
                      <span
                        class="font-caption text-caption text-graphite uppercase tracking-wider"
                        >Kepala Keluarga</span
                      >
                      <span
                        class="text-[15px] text-body-md font-semibold text-ink"
                        >Bpk. Supriyanto</span
                      >
                    </div>
                    <div class="flex flex-col gap-xs">
                      <span
                        class="font-caption text-caption text-graphite uppercase tracking-wider"
                        >Kedudukan dalam Kartu
                        Keluarga</span
                      >
                      <div
                        class="flex items-center gap-xs"
                      >
                        <span
                          class="text-[15px] text-body-md font-semibold text-ink"
                          >Anak</span
                        >
                        <span
                          class="text-caption text-graphite font-medium"
                          >(Anak Kandung ke-1)</span
                        >
                      </div>
                    </div>
                    <div class="flex flex-col gap-xs">
                      <span
                        class="font-caption text-caption text-graphite uppercase tracking-wider"
                        >Nomor Kartu Keluarga (KK)</span
                      >
                      <span
                        class="text-[15px] text-body-md font-mono font-medium text-ink"
                        >•••• •••• •••• 1234</span
                      >
                    </div>
                    <div class="flex flex-col gap-xs">
                      <span
                        class="font-caption text-caption text-graphite uppercase tracking-wider"
                        >Status Kepemilikan Rumah</span
                      >
                      <span
                        class="text-[15px] text-body-md text-ink"
                        >Rumah Sendiri (Milik
                        Keluarga)</span
                      >
                    </div>
                  </div>
                  <!-- Address Highlight Strip -->
                  <div
                    class="bg-fog p-md flex flex-col gap-xs mt-xs"
                  >
                    <span
                      class="font-caption text-caption text-graphite uppercase tracking-wider flex items-center gap-xs"
                    >
                      <span
                        class="material-symbols-outlined text-[15px] text-primary"
                        >pin_drop</span
                      >
                      Alamat Domisili Keluarga
                    </span>
                    <p
                      class="text-[15px] text-body-md text-ink leading-relaxed"
                    >
                      Jl. Mawar No. 12, RT 01 / RW 07,
                      Dusun Krajan, Desa Cikampek Timur,
                      Kec. Cikampek, Kab. Karawang, Jawa
                      Barat 41373
                    </p>
                  </div>
                  <div class="flex justify-end pt-xs">
                    <a
                      class="inline-flex items-center gap-xs text-sm font-medium text-caption text-primary hover:text-primary-light font-semibold transition-colors"
                      href="#"
                    >
                      <span
                        >Buka Berkas Keluarga Bpk.
                        Supriyanto</span
                      >
                      <span
                        class="material-symbols-outlined text-[16px]"
                        >arrow_forward</span
                      >
                    </a>
                  </div>
                </div>
              </section>
              <!-- c. Informasi Sosial & Kontak -->
              <section
                class="bg-paper-card-card"
              >
                <div
                  class="bg-fog px-lg py-sm flex items-center justify-between"
                >
                  <div class="flex items-center gap-xs">
                    <span
                      class="material-symbols-outlined text-primary text-[20px]"
                      >contact_phone</span
                    >
                    <h2
                      class="text-xl font-bold text-label-md font-bold uppercase tracking-wider text-ink"
                    >
                      Informasi Sosial &amp; Kontak
                    </h2>
                  </div>
                  <a
                    class="inline-flex items-center gap-xs text-sm font-medium text-caption text-primary hover:underline"
                    href="#"
                  >
                    <span
                      class="material-symbols-outlined text-[16px]"
                      >edit_square</span
                    >
                    Edit
                  </a>
                </div>
                <div class="p-lg flex flex-col gap-md">
                  <div
                    class="grid grid-cols-1 sm:grid-cols-2 gap-x-lg gap-y-md"
                  >
                    <div class="flex flex-col gap-xs">
                      <span
                        class="font-caption text-caption text-graphite uppercase tracking-wider"
                        >Status Pendidikan Saat
                        Ini</span
                      >
                      <span
                        class="text-[15px] text-body-md font-semibold text-green-700"
                        >Pelajar Aktif</span
                      >
                    </div>
                    <div class="flex flex-col gap-xs">
                      <span
                        class="font-caption text-caption text-graphite uppercase tracking-wider"
                        >Jenjang Pendidikan
                        Terakhir</span
                      >
                      <span
                        class="text-[15px] text-body-md text-ink"
                        >SMP / Sederajat (Kelas 7)</span
                      >
                    </div>
                    <div class="flex flex-col gap-xs">
                      <span
                        class="font-caption text-caption text-graphite uppercase tracking-wider"
                        >Pekerjaan Utama</span
                      >
                      <span
                        class="text-[15px] text-body-md text-ink"
                        >Pelajar / Belum Bekerja</span
                      >
                    </div>
                    <div class="flex flex-col gap-xs">
                      <span
                        class="font-caption text-caption text-graphite uppercase tracking-wider"
                        >Kontak Wali / Orang Tua</span
                      >
                      <div class="flex flex-col gap-xs">
                        <div
                          class="flex items-center gap-xs"
                        >
                          <span
                            class="text-[15px] text-body-md font-mono font-semibold text-ink"
                            >0812-••••-8901</span
                          >
                          <span
                            class="px-xs py-0.5 bg-green-50 text-green-700 text-sm font-medium text-[11px] font-bold"
                          >
                            Aktif Terverifikasi
                          </span>
                        </div>
                        <span
                          class="font-caption text-caption text-graphite"
                          >Nomor Wali / Ibu Siti
                          Aminah (Terhubung
                          WhatsApp)</span
                        >
                      </div>
                    </div>
                  </div>
                  <!-- Field Notes -->
                  <div
                    class="bg-fog p-md flex flex-col gap-xs"
                  >
                    <div
                      class="flex items-center justify-between"
                    >
                      <span
                        class="font-caption text-caption text-graphite uppercase tracking-wider flex items-center gap-xs font-bold"
                      >
                        <span
                          class="material-symbols-outlined text-[16px] text-tertiary"
                          >assignment_late</span
                        >
                        Catatan Lapangan Khusus Kader
                      </span>
                      <span
                        class="font-caption text-caption text-graphite"
                        >Posyandu Remaja Krajan</span
                      >
                    </div>
                    <p
                      class="text-[15px] text-body-md text-graphite leading-relaxed"
                    >
                      “Perlu pemantauan partisipasi
                      kegiatan Posyandu Remaja / BKR di
                      Dusun Krajan. Catatan imunisasi
                      HPV/lanjutan sekolah terjadwal bulan
                      depan.”
                    </p>
                  </div>
                </div>
              </section>
            </div>
            <!-- RIGHT COLUMN: Classifications, Status, History (~35% -> 4 cols) -->
            <div class="lg:col-span-4 flex flex-col gap-lg">
              <!-- a. Klasifikasi Program PPKB (CRITICAL) -->
              <section
                class="bg-paper-card-card"
              >
                <div
                  class="p-md bg-fog flex items-center justify-between"
                >
                  <div class="flex flex-col">
                    <div class="flex items-center gap-xs">
                      <h2
                        class="text-xl font-bold text-label-md font-bold uppercase tracking-wider text-ink"
                      >
                        Klasifikasi Program
                      </h2>
                      <span
                        class="px-xs py-0.5 bg-primary text-white text-sm font-medium text-[11px] font-bold"
                      >
                        1 Program
                      </span>
                    </div>
                  </div>
                  <button
                    class="inline-flex items-center gap-xs px-sm py-xs bg-primary text-white hover:bg-primary-dark text-sm font-medium text-caption font-semibold transition-colors"
                    type="button"
                  >
                    <span
                      class="material-symbols-outlined text-[16px]"
                      >add</span
                    >
                    Tambah
                  </button>
                </div>
                <div class="p-md flex flex-col gap-md">
                  <p
                    class="font-caption text-caption text-graphite leading-relaxed"
                  >
                    Program intervensi kependudukan dan
                    pembinaan yang terhubung dengan profil
                    Ahmad Supriyanto:
                  </p>
                  <!-- Classification Card 1 -->
                  <div
                    class="bg-fog p-md flex flex-col gap-sm"
                  >
                    <div
                      class="flex items-start justify-between gap-xs"
                    >
                      <div class="flex flex-col">
                        <div
                          class="flex items-center gap-xs"
                        >
                          <span
                            class="text-sm font-medium text-label-md font-bold text-ink"
                            >REMAJA &amp; BKR</span
                          >
                        </div>
                        <span
                          class="font-caption text-[11px] text-graphite uppercase font-semibold"
                          >(Bina Keluarga
                          Remaja)</span
                        >
                      </div>
                      <span
                        class="px-xs py-0.5 bg-green-50 text-green-700 text-sm font-medium text-[11px] font-bold shrink-0"
                      >
                        Aktif
                      </span>
                    </div>
                    <p
                      class="font-caption text-caption text-graphite leading-snug"
                    >
                      Program Pendampingan Tumbuh Kembang
                      Remaja &amp; Edukasi Gizi Seimbang
                    </p>
                    <div
                      class="bg-paper p-xs flex flex-col gap-xs font-caption text-caption"
                    >
                      <div
                        class="flex items-center justify-between text-ink"
                      >
                        <span class="text-graphite"
                          >Kategori:</span
                        >
                        <span class="font-medium"
                          >Remaja Awal (12
                          Tahun)</span
                        >
                      </div>
                      <div
                        class="flex items-center justify-between text-ink"
                      >
                        <span class="text-graphite"
                          >Kelompok BKR:</span
                        >
                        <span
                          class="font-semibold text-primary"
                          >Melati Krajan</span
                        >
                      </div>
                      <div
                        class="flex items-center justify-between text-ink"
                      >
                        <span class="text-graphite"
                          >Terdaftar Sejak:</span
                        >
                        <span class="font-mono"
                          >2 Sep 2026</span
                        >
                      </div>
                    </div>
                    <a
                      class="inline-flex items-center gap-xs text-sm font-medium text-caption text-primary hover:text-primary-light font-semibold transition-colors pt-xs"
                      href="#"
                    >
                      <span
                        >Lihat Intervensi &amp; Catatan
                        BKR</span
                      >
                      <span
                        class="material-symbols-outlined text-[15px]"
                        >arrow_forward</span
                      >
                    </a>
                  </div>
                  <!-- Policy banner info -->
                  <div
                    class="p-sm bg-primary-light/5 text-graphite flex items-start gap-xs"
                  >
                    <span
                      class="material-symbols-outlined text-primary text-[18px] shrink-0 mt-0.5"
                      >info</span
                    >
                    <p
                      class="font-caption text-caption leading-relaxed"
                    >
                      Klasifikasi ditentukan otomatis
                      melalui parameter profil (rentang
                      usia, status sekolah) dan intervensi
                      lapangan kader resmi. Profil tunggal
                      terpadu menghindari duplikasi data
                      warga.
                    </p>
                  </div>
                </div>
              </section>
              <!-- b. Status Data & Verifikasi -->
              <section
                class="bg-paper-card-card"
              >
                <div
                  class="bg-fog px-md py-sm flex items-center gap-xs"
                >
                  <span
                    class="material-symbols-outlined text-primary text-[18px]"
                    >verified</span
                  >
                  <h2
                    class="text-xl font-bold text-label-md font-bold uppercase tracking-wider text-ink"
                  >
                    Status Data &amp; Verifikasi
                  </h2>
                </div>
                <div class="p-md flex flex-col gap-sm">
                  <div
                    class="flex items-center justify-between py-xs"
                  >
                    <span
                      class="font-caption text-caption text-graphite uppercase font-semibold"
                      >Kelengkapan Data</span
                    >
                    <span
                      class="px-xs py-0.5 bg-green-50 text-green-700 text-sm font-medium text-caption font-bold flex items-center gap-xs"
                    >
                      <span
                        class="material-symbols-outlined text-[14px]"
                        >check</span
                      >
                      Lengkap (Field Wajib)
                    </span>
                  </div>
                  <div
                    class="flex items-center justify-between py-xs"
                  >
                    <span
                      class="font-caption text-caption text-graphite uppercase font-semibold"
                      >Validasi Dukcapil</span
                    >
                    <span
                      class="px-xs py-0.5 bg-tertiary-container/20 text-on-tertiary-container text-sm font-medium text-caption font-bold flex items-center gap-xs"
                    >
                      <span
                        class="material-symbols-outlined text-[14px]"
                        >sync</span
                      >
                      Menunggu Verifikasi
                    </span>
                  </div>
                  <div class="flex flex-col gap-xs py-xs">
                    <span
                      class="font-caption text-caption text-graphite uppercase font-semibold"
                      >Pencatat Pertama</span
                    >
                    <span
                      class="text-[15px] text-caption text-ink font-semibold"
                      >Kader Siti Nurhaliza</span
                    >
                    <span
                      class="font-caption text-[11px] text-graphite"
                      >Posyandu Teratai 03 Dusun
                      Krajan</span
                    >
                  </div>
                  <div class="flex flex-col gap-xs py-xs">
                    <span
                      class="font-caption text-caption text-graphite uppercase font-semibold"
                      >Sinkronisasi Terakhir</span
                    >
                    <span
                      class="text-[15px] text-caption text-ink font-mono"
                      >3 September 2026, 10:15 WIB</span
                    >
                  </div>
                  <div
                    class="p-xs bg-fog text-graphite font-caption text-caption leading-relaxed mt-xs"
                  >
                    Kader berwenang memperbarui data berkala
                    jika terdapat perubahan status
                    pendidikan, domisili, atau nomor kontak
                    wali.
                  </div>
                </div>
              </section>
              <!-- c. Riwayat Aktivitas (Timeline) -->
              <section
                class="bg-paper-card-card"
              >
                <div
                  class="bg-fog px-md py-sm flex items-center gap-xs"
                >
                  <span
                    class="material-symbols-outlined text-primary text-[18px]"
                    >history</span
                  >
                  <h2
                    class="text-xl font-bold text-label-md font-bold uppercase tracking-wider text-ink"
                  >
                    Riwayat Aktivitas
                  </h2>
                </div>
                <div class="p-md">
                  <div class="relative flex flex-col gap-md">
                    <!-- Timeline Item 1 -->
                    <div
                      class="relative pl-lg flex flex-col gap-xs"
                    >
                      <div
                        class="absolute left-0 top-1 w-2.5 h-2.5 bg-primary"
                      ></div>
                      <div
                        class="flex items-center justify-between"
                      >
                        <span
                          class="text-sm font-medium text-caption font-semibold text-ink"
                          >Profil individu
                          diperbarui</span
                        >
                        <span
                          class="font-caption text-[11px] text-graphite font-mono"
                          >10:15 WIB</span
                        >
                      </div>
                      <p
                        class="font-caption text-caption text-graphite leading-snug"
                      >
                        Catatan kelengkapan data sekolah
                        SMP diinput oleh Kader Siti
                        Nurhaliza.
                      </p>
                      <span
                        class="font-caption text-[11px] text-graphite font-mono"
                        >3 Sep 2026</span
                      >
                    </div>
                    <!-- Timeline Item 2 -->
                    <div
                      class="relative pl-lg flex flex-col gap-xs"
                    >
                      <div
                        class="absolute left-0 top-1 w-2.5 h-2.5 bg-secondary"
                      ></div>
                      <div
                        class="flex items-center justify-between"
                      >
                        <span
                          class="text-sm font-medium text-caption font-semibold text-ink"
                          >Klasifikasi Remaja
                          disematkan</span
                        >
                        <span
                          class="font-caption text-[11px] text-graphite font-mono"
                          >14:15 WIB</span
                        >
                      </div>
                      <p
                        class="font-caption text-caption text-graphite leading-snug"
                      >
                        Sistem mengkategorikan ke dalam
                        Bina Keluarga Remaja (BKR)
                        berdasarkan rentang usia 10-19
                        tahun.
                      </p>
                      <span
                        class="font-caption text-[11px] text-graphite font-mono"
                        >2 Sep 2026</span
                      >
                    </div>
                    <!-- Timeline Item 3 -->
                    <div
                      class="relative pl-lg flex flex-col gap-xs"
                    >
                      <div
                        class="absolute left-0 top-1 w-2.5 h-2.5 bg-outline"
                      ></div>
                      <div
                        class="flex items-center justify-between"
                      >
                        <span
                          class="text-sm font-medium text-caption font-semibold text-ink"
                          >Individu Ditambahkan</span
                        >
                        <span
                          class="font-caption text-[11px] text-graphite font-mono"
                          >14:00 WIB</span
                        >
                      </div>
                      <p
                        class="font-caption text-caption text-graphite leading-snug"
                      >
                        Entri awal anggota keluarga ke-3
                        pada formulir AK-02 keluarga
                        Bpk. Supriyanto.
                      </p>
                      <span
                        class="font-caption text-[11px] text-graphite font-mono"
                        >2 Sep 2026</span
                      >
                    </div>
                  </div>
                </div>
              </section>
              <!-- d. Privacy & Security Callout -->
              <div
                class="bg-paper p-md-card-card flex items-start gap-xs"
              >
                <span
                  class="material-symbols-outlined text-graphite text-[18px] shrink-0 mt-0.5"
                  >lock</span
                >
                <div class="flex flex-col gap-xs">
                  <span
                    class="text-sm font-medium text-[11px] font-bold uppercase tracking-wider text-graphite"
                    >Perlindungan Data Pribadi</span
                  >
                  <p
                    class="font-caption text-caption text-graphite leading-relaxed"
                  >
                    NIK dan data kontak dienkripsi dan
                    dimasking sesuai kebijakan perlindungan
                    data kependudukan Satpel PPKB Kecamatan
                    Cikampek. Akses penuh hanya dimiliki
                    petugas berwenang.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
  </body>
</html>
