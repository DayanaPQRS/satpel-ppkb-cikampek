<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <link
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&amp;display=swap"
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
          font-family: "Plus Jakarta Sans", sans-serif;
        }
        body {
          overscroll-behavior: none;
          background-color: #f9f9ff;
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
              "on-tertiary-fixed": "#241a00",
              "on-surface": "#191c22",
              "surface-container": "#ededf6",
              tertiary: "#745b00",
              "surface-container-lowest": "#ffffff",
              "tertiary-fixed": "#ffe08a",
              "primary-fixed": "#d8e2ff",
              "on-primary-container": "#bfd2ff",
              "on-primary-fixed-variant": "#004493",
              "secondary-fixed-dim": "#6cdd86",
              "tertiary-fixed-dim": "#f1c100",
              "surface-variant": "#e1e2eb",
              primary: "#00408b",
              "inverse-primary": "#adc7ff",
              "on-secondary-fixed": "#00210a",
              background: "#f9f9ff",
              surface: "#f9f9ff",
              "secondary-fixed": "#88faa0",
              "on-tertiary-fixed-variant": "#574400",
              "surface-bright": "#f9f9ff",
              "outline-variant": "#c2c6d4",
              "secondary-container": "#88faa0",
              "on-error-container": "#93000a",
              error: "#ba1a1a",
              "on-primary": "#ffffff",
              "on-tertiary": "#ffffff",
              outline: "#727784",
              "surface-dim": "#d9d9e2",
              "inverse-on-surface": "#eff0f9",
              "tertiary-container": "#cfa600",
              "on-error": "#ffffff",
              "on-secondary-container": "#007434",
              "on-tertiary-container": "#4e3d00",
              "on-primary-fixed": "#001a41",
              "primary-container": "#0057b8",
              "on-background": "#191c22",
              "surface-tint": "#0d5bbc",
              "on-secondary": "#ffffff",
              "on-surface-variant": "#424752",
              "surface-container-highest": "#e1e2eb",
              "primary-fixed-dim": "#adc7ff",
              "inverse-surface": "#2e3037",
              "surface-container-high": "#e7e7f0",
              "on-secondary-fixed-variant": "#005323",
              secondary: "#006d31",
              "surface-container-low": "#f2f3fc",
              "error-container": "#ffdad6",
            },
            borderRadius: {
              DEFAULT: "0.25rem",
              lg: "0.5rem",
              xl: "0.75rem",
              full: "9999px",
            },
            spacing: {
              md: "16px",
              xs: "4px",
              xxl: "64px",
              sm: "8px",
              gutter: "24px",
              xl: "40px",
              lg: "24px",
              "container-max": "1280px",
              unit: "4px",
            },
            fontFamily: {
              "display-lg": ["Plus Jakarta Sans"],
              "display-xl": ["Plus Jakarta Sans"],
              caption: ["Plus Jakarta Sans"],
              "body-lg": ["Plus Jakarta Sans"],
              "headline-lg": ["Plus Jakarta Sans"],
              "label-md": ["Plus Jakarta Sans"],
              "headline-md": ["Plus Jakarta Sans"],
              "body-md": ["Plus Jakarta Sans"],
            },
            fontSize: {
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
              caption: [
                "12px",
                { lineHeight: "16px", fontWeight: "400" },
              ],
              "body-lg": [
                "18px",
                { lineHeight: "28px", fontWeight: "400" },
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
              "body-md": [
                "16px",
                { lineHeight: "24px", fontWeight: "400" },
              ],
            },
          },
        },
      };
    </script>
  </head>
  <body class="bg-background text-[15px] text-ink">
    <aside
      class="fixed left-0 top-0 h-full w-72 bg-paper border-r border-ink z-50 flex flex-col"
    >
      <div class="p-lg mb-xl">
        <div class="flex items-center gap-md">
          <div
            class="w-10 h-10 bg-primary flex items-center justify-center"
          >
            <span class="material-symbols-outlined text-white"
              >account_balance</span
            >
          </div>
          <div>
            <p
              class="text-sm font-medium text-label-md text-primary tracking-wider uppercase leading-none"
            >
              Satpel PPKB
            </p>
            <p
              class="text-xl font-bold text-[16px] font-bold text-ink"
            >
              Cikampek
            </p>
          </div>
        </div>
      </div>
      <nav
        class="flex-1 px-md space-y-xs"
        data-active-classes="bg-primary-light text-white font-semibold"
      >
        <a
          aria-current="page"
          class="flex items-center gap-md px-md py-sm transition-all group bg-primary-light text-white font-semibold"
          data-path="dashboard"
          href="#"
          ><span class="material-symbols-outlined text-[20px]"
            >dashboard</span
          ><span class="text-[15px]">Dashboard</span></a
        ><a
          class="flex items-center gap-md px-md py-sm text-graphite hover:bg-fog hover:text-ink transition-all group"
          data-path="data-keluarga"
          href="#"
          ><span class="material-symbols-outlined text-[20px]"
            >family_restroom</span
          ><span class="text-[15px]">Data Keluarga</span></a
        ><a
          class="flex items-center gap-md px-md py-sm text-graphite hover:bg-fog hover:text-ink transition-all group"
          data-path="data-individu"
          href="#"
          ><span class="material-symbols-outlined text-[20px]"
            >person</span
          ><span class="text-[15px]">Data Individu</span></a
        ><a
          class="flex items-center gap-md px-md py-sm text-graphite hover:bg-fog hover:text-ink transition-all group"
          data-path="program"
          href="#"
          ><span class="material-symbols-outlined text-[20px]"
            >assignment</span
          ><span class="text-[15px]">Program</span></a
        ><a
          class="flex items-center gap-md px-md py-sm text-graphite hover:bg-fog hover:text-ink transition-all group"
          data-path="kegiatan"
          href="#"
          ><span class="material-symbols-outlined text-[20px]"
            >event_note</span
          ><span class="text-[15px]">Kegiatan</span></a
        ><a
          class="flex items-center gap-md px-md py-sm text-graphite hover:bg-fog hover:text-ink transition-all group"
          data-path="notifikasi"
          href="#"
          ><span class="material-symbols-outlined text-[20px]"
            >notifications</span
          ><span class="text-[15px]">Notifikasi</span></a
        >
        <div class="pt-xl pb-sm px-md">
          <p
            class="text-caption text-sm font-medium text-graphite uppercase tracking-widest"
          >
            Secondary
          </p>
        </div>
        <a
          class="flex items-center gap-md px-md py-sm text-graphite hover:bg-fog hover:text-ink transition-all group"
          data-path="bantuan"
          href="#"
          ><span class="material-symbols-outlined text-[20px]"
            >help</span
          ><span class="text-[15px]">Bantuan</span></a
        ><a
          class="flex items-center gap-md px-md py-sm text-graphite hover:bg-fog hover:text-ink transition-all group"
          data-path="pengaturan"
          href="#"
          ><span class="material-symbols-outlined text-[20px]"
            >settings</span
          ><span class="text-[15px]">Pengaturan</span></a
        >
      </nav>
      <div
        class="p-lg border-t border-ink bg-fog"
      >
        <div class="flex items-center gap-md">
          <div
            class="w-10 h-10 rounded-[100px] bg-primary flex items-center justify-center shrink-0"
          >
            <span
              class="material-symbols-outlined text-white text-[20px]"
              >person</span
            >
          </div>
          <div class="overflow-hidden">
            <p
              class="text-sm font-medium text-label-md text-ink truncate"
            >
              Siti Nurhaliza
            </p>
            <p
              class="font-caption text-caption text-graphite"
            >
              Kader Utama
            </p>
          </div>
          <button
            class="ml-auto text-graphite hover:text-primary transition-colors"
          >
            <span class="material-symbols-outlined text-[20px]"
              >logout</span
            >
          </button>
        </div>
      </div>
    </aside>
    <div class="pl-72">
      <header
        class="fixed top-0 left-72 right-0 h-20 bg-paper/80-xl border-b border-ink z-40 px-xl flex items-center justify-between"
      >
        <div class="w-96 relative">
          <span
            class="material-symbols-outlined absolute left-md top-1/2 -translate-y-1/2 text-graphite"
            >search</span
          ><input
            class="w-full pl-xxl pr-md py-sm bg-fog border border-ink focus:border-primary focus:outline-none text-[15px] text-ink"
            placeholder="Cari data, warga, atau kegiatan..."
            type="text"
          />
        </div>
        <div class="flex items-center gap-lg">
          <button
            class="relative p-sm text-graphite hover:text-primary transition-colors"
          >
            <span class="material-symbols-outlined"
              >notifications</span
            ><span
              class="absolute top-1.5 right-1.5 w-2 h-2 bg-red-600 rounded-[100px]"
            ></span>
          </button>
          <div class="flex items-center gap-md cursor-pointer group">
            <div class="text-right hidden sm:block">
              <p
                class="text-sm font-medium text-label-md text-ink"
              >
                Profil Kader
              </p>
              <p
                class="font-caption text-caption text-graphite"
              >
                Cikampek Barat
              </p>
            </div>
            <div
              class="w-10 h-10 rounded-[100px] bg-primary flex items-center justify-center"
            >
              <span
                class="material-symbols-outlined text-white text-[20px]"
                >person</span
              >
            </div>
          </div>
        </div>
      </header>
      <main class="relative pt-20 min-h-screen bg-background">
        <div class="flex flex-col w-full">
          <!-- Top Progress / Context Breadcrumb Bar -->
          <div
            class="w-full bg-paper border-b border-ink px-xl py-md"
          >
            <div
              class="max-w-[1140px] mx-auto flex flex-col sm:flex-row sm:items-center justify-between gap-sm"
            >
              <nav
                class="flex items-center gap-xs font-caption text-caption text-graphite"
              >
                <a
                  class="hover:text-primary transition-colors"
                  href="#"
                  >Data Keluarga</a
                >
                <span class="text-graphite">/</span>
                <a
                  class="hover:text-primary transition-colors"
                  href="#"
                  >Bpk. Supriyanto</a
                >
                <span class="text-graphite">/</span>
                <a
                  class="hover:text-primary transition-colors"
                  href="#"
                  >Siti Aminah</a
                >
                <span class="text-graphite">/</span>
                <span
                  class="text-graphite text-sm font-medium"
                  >BUMIL</span
                >
                <span class="text-graphite">/</span>
                <span
                  class="text-primary text-sm font-medium font-semibold"
                  >Detail Kehamilan</span
                >
              </nav>
              <a
                class="inline-flex items-center gap-xs text-sm font-medium text-label-md text-primary hover:underline group"
                href="#"
              >
                <span
                  class="material-symbols-outlined text-[18px] group-hover:-translate-x-0.5 transition-transform"
                  >arrow_back</span
                >
                Kembali ke Profil Individu
              </a>
            </div>
          </div>
          <!-- Content Container (1140px fixed width desktop constraint) -->
          <div
            class="w-full max-w-[1140px] mx-auto px-lg py-xl flex flex-col gap-lg"
          >
            <!-- Profile Header Card -->
            <section
              class="bg-paper p-lg-card flex flex-col md:flex-row items-start md:items-center justify-between gap-lg"
            >
              <div class="flex items-center gap-lg">
                <!-- Avatar Initial -->
                <div
                  class="w-16 h-16 rounded-[100px] bg-primary-fixed flex items-center justify-center shrink-0"
                >
                  <span
                    class="text-xl font-bold text-primary font-bold tracking-tight"
                    >SA</span
                  >
                </div>
                <!-- Identity info -->
                <div class="flex flex-col">
                  <div
                    class="flex flex-wrap items-center gap-xs sm:gap-sm"
                  >
                    <h1
                      class="text-xl font-bold text-headline-md text-ink"
                    >
                      Siti Aminah
                    </h1>
                    <span
                      class="bg-green-50 text-green-700 text-sm font-medium text-caption uppercase tracking-wider px-sm py-xs"
                    >
                      BUMIL AKTIF
                    </span>
                    <span
                      class="bg-primary-fixed text-primary text-sm font-medium text-caption uppercase tracking-wider px-sm py-xs"
                    >
                      PUS
                    </span>
                  </div>
                  <p
                    class="text-[15px] text-body-md text-graphite mt-xs"
                  >
                    Istri, Perempuan • 30 tahun •
                    <span
                      class="font-semibold text-ink"
                      >Kehamilan ke-2 (G2P1A0)</span
                    >
                  </p>
                  <div
                    class="flex items-center gap-xs mt-xs text-graphite font-caption text-caption"
                  >
                    <span
                      class="material-symbols-outlined text-[16px] text-primary"
                      >verified_user</span
                    >
                    <span
                      >Terakhir diperbarui: 3 September
                      2026 oleh
                      <strong
                        class="font-medium text-ink"
                        >Bdn. Sri Wahyuni / Posyandu
                        Teratai 03</strong
                      ></span
                    >
                  </div>
                </div>
              </div>
              <!-- Header Action Buttons -->
              <div
                class="flex items-center gap-sm shrink-0 w-full md:w-auto"
              >
                <button
                  class="flex-1 md:flex-initial px-md py-sm bg-fog text-primary text-sm font-medium text-label-md hover:bg-paper-variant transition-colors flex items-center justify-center gap-xs"
                >
                  <span
                    class="material-symbols-outlined text-[18px]"
                    >edit</span
                  >
                  Edit Data Kehamilan
                </button>
                <button
                  class="flex-1 md:flex-initial px-md py-sm bg-primary-light text-white text-sm font-medium text-label-md hover:bg-primary transition-colors flex items-center justify-center gap-xs-card"
                >
                  <span
                    class="material-symbols-outlined text-[18px]"
                    >add_circle</span
                  >
                  + Tambah Pemeriksaan
                </button>
              </div>
            </section>
            <!-- 2-Column Responsive Grid Layout (Desktop: ~70% Left, ~30% Right) -->
            <div
              class="grid grid-cols-1 lg:grid-cols-12 gap-lg items-start"
            >
              <!-- ================= LEFT / MAIN COLUMN (~70% = 8 cols) ================= -->
              <div class="lg:col-span-8 flex flex-col gap-lg">
                <!-- 1. HERO STATUS KEHAMILAN AKTIF -->
                <div
                  class="bg-paper p-lg-card relative overflow-hidden"
                >
                  <div
                    class="flex flex-wrap items-center justify-between gap-sm mb-md pb-sm bg-fog -mx-lg -mt-lg px-lg pt-md"
                  >
                    <div class="flex items-center gap-sm">
                      <span
                        class="bg-primary text-white text-sm font-medium text-caption uppercase px-sm py-xs"
                      >
                        KEHAMILAN AKTIF
                      </span>
                      <span
                        class="text-xl font-bold text-[20px] font-bold text-ink"
                      >
                        12 minggu 2 hari
                      </span>
                    </div>
                    <span
                      class="bg-primary-light/10 text-primary-light text-sm font-medium text-label-md px-md py-xs font-semibold"
                    >
                      TRIMESTER I
                    </span>
                  </div>
                  <!-- Trimester Visual Progress Line -->
                  <div class="my-md">
                    <div
                      class="flex items-center justify-between text-caption text-sm font-medium uppercase mb-xs text-graphite"
                    >
                      <span
                        class="text-primary font-bold flex items-center gap-xs"
                      >
                        <span
                          class="w-2 h-2 rounded-[100px] bg-primary inline-block"
                        ></span>
                        Trimester I (Aktif)
                      </span>
                      <span>Trimester II</span>
                      <span>Trimester III</span>
                      <span class="text-green-700"
                        >Persalinan</span
                      >
                    </div>
                    <!-- Custom 4-stage track -->
                    <div
                      class="grid grid-cols-4 gap-xs h-2.5 w-full bg-fog"
                    >
                      <!-- TM1: 100% Filled in this trimester -->
                      <div
                        class="bg-primary-light h-full relative"
                      >
                        <div
                          class="absolute right-0 top-1/2 -translate-y-1/2 w-3.5 h-3.5 bg-primary rounded-[100px] ring-2 ring-surface-container-lowest-card"
                        ></div>
                      </div>
                      <!-- TM2: Pending -->
                      <div
                        class="bg-fogest h-full"
                      ></div>
                      <!-- TM3: Pending -->
                      <div
                        class="bg-fogest h-full"
                      ></div>
                      <!-- Target: Pending -->
                      <div
                        class="bg-fogest h-full"
                      ></div>
                    </div>
                    <div
                      class="flex items-center justify-between text-caption text-graphite mt-xs font-caption"
                    >
                      <span>0 - 13 mg</span>
                      <span>14 - 27 mg</span>
                      <span>28 - 40 mg</span>
                      <span>Target Lahir</span>
                    </div>
                  </div>
                  <!-- Grid Key Metrics (4 cards) -->
                  <div
                    class="grid grid-cols-2 sm:grid-cols-4 gap-sm my-md"
                  >
                    <div
                      class="p-sm bg-fog flex flex-col justify-between"
                    >
                      <div>
                        <span
                          class="text-caption font-caption text-graphite uppercase tracking-wider block"
                          >HPHT</span
                        >
                        <p
                          class="text-xl font-bold text-[18px] font-bold text-ink mt-xs"
                        >
                          10 Jun 2026
                        </p>
                      </div>
                      <p
                        class="font-caption text-caption text-graphite mt-xs"
                      >
                        Haid Terakhir
                      </p>
                    </div>
                    <div
                      class="p-sm bg-fog flex flex-col justify-between"
                    >
                      <div>
                        <span
                          class="text-caption font-caption text-graphite uppercase tracking-wider block"
                          >HPL</span
                        >
                        <p
                          class="text-xl font-bold text-[18px] font-bold text-primary mt-xs"
                        >
                          17 Mar 2027
                        </p>
                      </div>
                      <p
                        class="font-caption text-caption text-green-700 font-medium mt-xs"
                      >
                        28 minggu tersisa
                      </p>
                    </div>
                    <div
                      class="p-sm bg-fog flex flex-col justify-between"
                    >
                      <div>
                        <span
                          class="text-caption font-caption text-graphite uppercase tracking-wider block"
                          >Gravida / Para</span
                        >
                        <p
                          class="text-xl font-bold text-[18px] font-bold text-ink mt-xs"
                        >
                          G2P1A0
                        </p>
                      </div>
                      <p
                        class="font-caption text-caption text-graphite mt-xs"
                      >
                        Hamil 2 • Lahir 1 • Ab 0
                      </p>
                    </div>
                    <div
                      class="p-sm bg-fog flex flex-col justify-between"
                    >
                      <div>
                        <span
                          class="text-caption font-caption text-graphite uppercase tracking-wider block"
                          >Status Faskes</span
                        >
                        <p
                          class="text-xl font-bold text-[18px] font-bold text-green-700 mt-xs"
                        >
                          Terverifikasi
                        </p>
                      </div>
                      <p
                        class="font-caption text-caption text-graphite mt-xs"
                      >
                        Puskesmas Cikampek
                      </p>
                    </div>
                  </div>
                  <div class="flex justify-end pt-xs">
                    <button
                      class="text-primary text-sm font-medium text-label-md hover:underline inline-flex items-center gap-xs"
                    >
                      <span
                        class="material-symbols-outlined text-[18px]"
                        >edit_calendar</span
                      >
                      Edit Data Kehamilan
                    </button>
                  </div>
                </div>
                <!-- 2. STATUS RISIKO KEHAMILAN -->
                <div
                  class="bg-paper p-lg-card"
                >
                  <div
                    class="flex items-center justify-between pb-sm mb-md bg-fog -mx-lg -mt-lg px-lg pt-md"
                  >
                    <div class="flex items-center gap-xs">
                      <span
                        class="material-symbols-outlined text-green-700"
                        >health_and_safety</span
                      >
                      <h2
                        class="text-xl font-bold text-[18px] font-semibold text-ink"
                      >
                        Status Risiko Kehamilan (KSPR)
                      </h2>
                    </div>
                    <span
                      class="bg-secondary/15 text-green-700 text-sm font-medium text-label-md px-md py-xs font-bold uppercase tracking-wide"
                    >
                      RISIKO RENDAH
                    </span>
                  </div>
                  <div class="flex flex-col gap-sm">
                    <div
                      class="flex items-center justify-between text-caption font-caption text-graphite"
                    >
                      <span
                        >Tanggal Penilaian:
                        <strong class="text-ink"
                          >03 September 2026</strong
                        ></span
                      >
                      <span
                        class="bg-fog px-sm py-xs"
                        >Skrining Awal ANC Trimester
                        I</span
                      >
                    </div>
                    <div
                      class="p-md bg-fog"
                    >
                      <p
                        class="text-[15px] text-body-md text-ink leading-relaxed"
                      >
                        "Tidak ditemukan faktor risiko
                        yang membutuhkan pemantauan
                        khusus pada pemeriksaan
                        terakhir. Tekanan darah normal
                        (<span class="font-semibold"
                          >115/75 mmHg</span
                        >), LILA
                        <span class="font-semibold"
                          >25.5 cm</span
                        >
                        (bebas KEK), Hemoglobin
                        <span class="font-semibold"
                          >12.2 g/dL</span
                        >."
                      </p>
                    </div>
                    <!-- Mini Vitals Strip -->
                    <div
                      class="grid grid-cols-3 gap-sm pt-xs text-center"
                    >
                      <div class="bg-paper p-sm">
                        <span
                          class="font-caption text-caption text-graphite block"
                          >Tekanan Darah</span
                        >
                        <span
                          class="text-sm font-medium text-label-md text-ink font-semibold"
                          >115/75 mmHg</span
                        >
                      </div>
                      <div class="bg-paper p-sm">
                        <span
                          class="font-caption text-caption text-graphite block"
                          >LILA (Status KEK)</span
                        >
                        <span
                          class="text-sm font-medium text-label-md text-green-700 font-semibold"
                          >25.5 cm (Normal)</span
                        >
                      </div>
                      <div class="bg-paper p-sm">
                        <span
                          class="font-caption text-caption text-graphite block"
                          >Kadar Hemoglobin</span
                        >
                        <span
                          class="text-sm font-medium text-label-md text-green-700 font-semibold"
                          >12.2 g/dL (Normal)</span
                        >
                      </div>
                    </div>
                    <div class="flex justify-end pt-xs">
                      <button
                        class="px-md py-xs bg-fog text-primary text-sm font-medium text-label-md hover:bg-paper-variant transition-colors flex items-center gap-xs"
                      >
                        <span
                          class="material-symbols-outlined text-[18px]"
                          >assignment_turned_in</span
                        >
                        Lihat Lembar Skrining Risiko
                        (KSPR)
                      </button>
                    </div>
                  </div>
                </div>
                <!-- 3. PEMERIKSAAN TERAKHIR -->
                <div
                  class="bg-paper p-lg-card"
                >
                  <div
                    class="flex items-center justify-between pb-sm mb-md bg-fog -mx-lg -mt-lg px-lg pt-md"
                  >
                    <div class="flex items-center gap-xs">
                      <span
                        class="material-symbols-outlined text-primary"
                        >clinical_notes</span
                      >
                      <h2
                        class="text-xl font-bold text-[18px] font-semibold text-ink"
                      >
                        Pemeriksaan Terakhir
                      </h2>
                    </div>
                    <span
                      class="bg-secondary/15 text-green-700 text-sm font-medium text-caption uppercase px-sm py-xs"
                    >
                      Selesai Normal
                    </span>
                  </div>
                  <div class="space-y-md">
                    <div
                      class="flex flex-col sm:flex-row sm:items-center justify-between gap-xs pb-xs"
                    >
                      <div>
                        <p
                          class="text-sm font-medium text-label-md font-semibold text-ink"
                        >
                          Pemeriksaan Rutin Kehamilan
                          (ANC K1)
                        </p>
                        <p
                          class="font-caption text-caption text-graphite"
                        >
                          03 September 2026 •
                          Puskesmas Cikampek (Bdn. Sri
                          Wahyuni, S.Tr.Keb)
                        </p>
                      </div>
                      <div class="text-right">
                        <span
                          class="font-caption text-caption text-graphite"
                          >Kontrol Berikutnya:</span
                        >
                        <p
                          class="text-sm font-medium text-label-md text-primary font-semibold"
                        >
                          01 Oktober 2026
                        </p>
                      </div>
                    </div>
                    <div
                      class="bg-fog p-md"
                    >
                      <p
                        class="text-sm font-medium text-caption uppercase text-graphite tracking-wider mb-xs"
                      >
                        Hasil Ringkas Klinis
                      </p>
                      <p
                        class="text-[15px] text-body-md text-ink"
                      >
                        Kondisi umum ibu &amp; janin
                        baik, DJJ terdeteksi positif
                        regular, TFU setinggi 2 jari di
                        atas simfisis pubis, suplemen
                        TTD (Fe) &amp; Asam Folat
                        diberikan 30 tablet untuk 30
                        hari.
                      </p>
                    </div>
                    <div
                      class="flex items-center justify-between pt-xs"
                    >
                      <button
                        class="px-md py-xs bg-fog text-ink text-sm font-medium text-label-md hover:bg-paper-variant transition-colors flex items-center gap-xs"
                      >
                        <span
                          class="material-symbols-outlined text-[18px]"
                          >visibility</span
                        >
                        Lihat Detail ANC
                      </button>
                      <button
                        class="px-md py-xs bg-primary-light text-white text-sm font-medium text-label-md hover:bg-primary transition-colors flex items-center gap-xs"
                      >
                        <span
                          class="material-symbols-outlined text-[18px]"
                          >add</span
                        >
                        + Catat Hasil Pemeriksaan Baru
                      </button>
                    </div>
                  </div>
                </div>
                <!-- 4. RIWAYAT PEMERIKSAAN (Clean Timeline / List Card) -->
                <div
                  class="bg-paper p-lg-card"
                >
                  <div
                    class="flex items-center justify-between pb-sm mb-md bg-fog -mx-lg -mt-lg px-lg pt-md"
                  >
                    <div class="flex items-center gap-xs">
                      <span
                        class="material-symbols-outlined text-primary"
                        >history_edu</span
                      >
                      <h2
                        class="text-xl font-bold text-[18px] font-semibold text-ink"
                      >
                        Riwayat Pemeriksaan (Kohort ANC)
                      </h2>
                    </div>
                    <span
                      class="text-caption font-caption text-graphite"
                      >3 Rekam Medis</span
                    >
                  </div>
                  <div class="space-y-sm">
                    <!-- Record 1 -->
                    <div
                      class="p-md bg-fog hover:bg-fog transition-colors flex flex-col sm:flex-row sm:items-center justify-between gap-sm"
                    >
                      <div
                        class="flex items-start gap-md"
                      >
                        <div
                          class="w-8 h-8 bg-primary/10 text-primary flex items-center justify-center shrink-0 mt-0.5"
                        >
                          <span
                            class="material-symbols-outlined text-[18px]"
                            >done_all</span
                          >
                        </div>
                        <div>
                          <div
                            class="flex items-center gap-sm"
                          >
                            <p
                              class="text-sm font-medium text-label-md font-semibold text-ink"
                            >
                              Pemeriksaan ANC K1
                              Murni
                            </p>
                            <span
                              class="bg-secondary/15 text-green-700 text-sm font-medium text-[10px] uppercase px-xs py-0.5 font-bold"
                              >Lengkap
                              Standar</span
                            >
                          </div>
                          <p
                            class="font-caption text-caption text-graphite mt-xs"
                          >
                            03 Sep 2026 • Puskesmas
                            Cikampek • Bdn. Sri
                            Wahyuni
                          </p>
                        </div>
                      </div>
                      <button
                        class="text-primary text-sm font-medium text-caption hover:underline self-end sm:self-center"
                      >
                        Rincian →
                      </button>
                    </div>
                    <!-- Record 2 -->
                    <div
                      class="p-md bg-fog hover:bg-fog transition-colors flex flex-col sm:flex-row sm:items-center justify-between gap-sm"
                    >
                      <div
                        class="flex items-start gap-md"
                      >
                        <div
                          class="w-8 h-8 bg-primary/10 text-primary flex items-center justify-center shrink-0 mt-0.5"
                        >
                          <span
                            class="material-symbols-outlined text-[18px]"
                            >radiology</span
                          >
                        </div>
                        <div>
                          <p
                            class="text-sm font-medium text-label-md font-semibold text-ink"
                          >
                            Konfirmasi Kehamilan
                            &amp; USG Konfirmasi
                            Kantung Janin
                          </p>
                          <p
                            class="font-caption text-caption text-graphite mt-xs"
                          >
                            05 Agu 2026 • Puskesmas
                            Cikampek • dr. H.
                            Hendra, Sp.OG
                          </p>
                        </div>
                      </div>
                      <button
                        class="text-primary text-sm font-medium text-caption hover:underline self-end sm:self-center"
                      >
                        Rincian →
                      </button>
                    </div>
                    <!-- Record 3 -->
                    <div
                      class="p-md bg-fog hover:bg-fog transition-colors flex flex-col sm:flex-row sm:items-center justify-between gap-sm"
                    >
                      <div
                        class="flex items-start gap-md"
                      >
                        <div
                          class="w-8 h-8 bg-primary/10 text-primary flex items-center justify-center shrink-0 mt-0.5"
                        >
                          <span
                            class="material-symbols-outlined text-[18px]"
                            >science</span
                          >
                        </div>
                        <div>
                          <p
                            class="text-sm font-medium text-label-md font-semibold text-ink"
                          >
                            Pemeriksaan Awal Tes
                            Urin (PP Test Positif)
                          </p>
                          <p
                            class="font-caption text-caption text-graphite mt-xs"
                          >
                            08 Jul 2026 • Poskesdes
                            Cikampek Timur • Kader
                            Siti Nurhaliza
                          </p>
                        </div>
                      </div>
                      <button
                        class="text-primary text-sm font-medium text-caption hover:underline self-end sm:self-center"
                      >
                        Rincian →
                      </button>
                    </div>
                  </div>
                  <div class="flex justify-center pt-md">
                    <button
                      class="text-primary text-sm font-medium text-label-md hover:underline flex items-center gap-xs"
                    >
                      <span
                        class="material-symbols-outlined text-[18px]"
                        >menu_book</span
                      >
                      Lihat Seluruh Catatan ANC (Buku KIA)
                    </button>
                  </div>
                </div>
                <!-- 5. PEMANTAUAN KEHAMILAN OLEH KADER (Intervention Checklist) -->
                <div
                  class="bg-paper p-lg-card"
                >
                  <div
                    class="flex items-center justify-between pb-sm mb-md bg-fog -mx-lg -mt-lg px-lg pt-md"
                  >
                    <div class="flex items-center gap-xs">
                      <span
                        class="material-symbols-outlined text-primary"
                        >fact_check</span
                      >
                      <h2
                        class="text-xl font-bold text-[18px] font-semibold text-ink"
                      >
                        Pemantauan Kehamilan oleh Kader
                      </h2>
                    </div>
                    <span
                      class="text-sm font-medium text-caption text-green-700 font-bold bg-green-50 px-sm py-xs"
                    >
                      4 dari 5 Terpantau (80%)
                    </span>
                  </div>
                  <p
                    class="font-caption text-caption text-graphite mb-md"
                  >
                    Ceklis paket intervensi esensial 1000
                    Hari Pertama Kehidupan (HPK) untuk
                    pencegahan risiko stunting sejak dalam
                    kandungan:
                  </p>
                  <div class="space-y-xs">
                    <div
                      class="p-sm bg-fog flex items-center justify-between"
                    >
                      <div
                        class="flex items-center gap-sm"
                      >
                        <span
                          class="material-symbols-outlined text-green-700 text-[22px]"
                          >check_box</span
                        >
                        <span
                          class="text-[15px] text-body-md text-ink font-medium"
                          >Pemeriksaan rutin ANC
                          Faskes (K1 terpenuhi sesuai
                          standar)</span
                        >
                      </div>
                      <span
                        class="text-caption font-caption text-graphite"
                        >Verifikasi Bidan</span
                      >
                    </div>
                    <div
                      class="p-sm bg-fog flex items-center justify-between"
                    >
                      <div
                        class="flex items-center gap-sm"
                      >
                        <span
                          class="material-symbols-outlined text-green-700 text-[22px]"
                          >check_box</span
                        >
                        <span
                          class="text-[15px] text-body-md text-ink font-medium"
                          >Pemantauan pertambahan
                          berat badan &amp; lingkar
                          lengan (LILA aman)</span
                        >
                      </div>
                      <span
                        class="text-caption font-caption text-graphite"
                        >Posyandu Teratai 03</span
                      >
                    </div>
                    <div
                      class="p-sm bg-fog flex items-center justify-between"
                    >
                      <div
                        class="flex items-center gap-sm"
                      >
                        <span
                          class="material-symbols-outlined text-green-700 text-[22px]"
                          >check_box</span
                        >
                        <span
                          class="text-[15px] text-body-md text-ink font-medium"
                          >Konseling gizi seimbang
                          &amp; pencegahan stunting
                          sejak janin</span
                        >
                      </div>
                      <span
                        class="text-caption font-caption text-graphite"
                        >Kader Pendamping</span
                      >
                    </div>
                    <div
                      class="p-sm bg-fog flex items-center justify-between"
                    >
                      <div
                        class="flex items-center gap-sm"
                      >
                        <span
                          class="material-symbols-outlined text-green-700 text-[22px]"
                          >check_box</span
                        >
                        <span
                          class="text-[15px] text-body-md text-ink font-medium"
                          >Konsumsi suplemen TTD
                          (Tablet Tambah Darah)
                          rutin</span
                        >
                      </div>
                      <span
                        class="text-caption font-caption text-graphite"
                        >30 Tab Terdistribusi</span
                      >
                    </div>
                    <div
                      class="p-sm bg-fog flex items-center justify-between"
                    >
                      <div
                        class="flex items-center gap-sm"
                      >
                        <span
                          class="material-symbols-outlined text-graphite text-[22px]"
                          >check_box_outline_blank</span
                        >
                        <span
                          class="text-[15px] text-body-md text-graphite"
                          >Rencana persalinan aman
                          &amp; P4K (Perlu dilengkapi
                          mendekati Trimester
                          III)</span
                        >
                      </div>
                      <span
                        class="text-caption font-caption text-red-600 font-medium"
                        >Tertunda (Tahap 1)</span
                      >
                    </div>
                  </div>
                </div>
                <!-- 6. RIWAYAT KEHAMILAN INDIVIDU (Multi-Record Concept) -->
                <div
                  class="bg-paper p-lg-card"
                >
                  <div
                    class="flex items-center justify-between pb-sm mb-md bg-fog -mx-lg -mt-lg px-lg pt-md"
                  >
                    <div class="flex items-center gap-xs">
                      <span
                        class="material-symbols-outlined text-primary"
                        >inventory_2</span
                      >
                      <h2
                        class="text-xl font-bold text-[18px] font-semibold text-ink"
                      >
                        Riwayat Kehamilan Individu
                        (Multi-Record)
                      </h2>
                    </div>
                    <button
                      class="text-primary text-sm font-medium text-caption hover:underline"
                    >
                      Buka Buku Riwayat Obstetrik
                    </button>
                  </div>
                  <div class="space-y-sm">
                    <!-- Record kehamilan sekarang -->
                    <div
                      class="p-md bg-primary-fixed/20 flex flex-col sm:flex-row sm:items-center justify-between gap-sm"
                    >
                      <div>
                        <div
                          class="flex items-center gap-sm"
                        >
                          <span
                            class="text-sm font-medium text-label-md font-bold text-primary"
                            >Kehamilan ke-2 (Tahun
                            2026)</span
                          >
                          <span
                            class="bg-primary text-white text-sm font-medium text-[10px] uppercase px-xs py-0.5"
                            >AKTIF</span
                          >
                        </div>
                        <p
                          class="text-[15px] text-caption text-graphite mt-xs"
                        >
                          G2P1A0 • Usia Kehamilan: 12
                          mg 2 hr • Estimasi Lahir:
                          Maret 2027 • Kondisi: Normal
                        </p>
                      </div>
                      <span
                        class="text-sm font-medium text-caption text-primary font-semibold"
                        >Sedang Ditampilkan</span
                      >
                    </div>
                    <!-- Record kehamilan pertama -->
                    <div
                      class="p-md bg-fog flex flex-col sm:flex-row sm:items-center justify-between gap-sm"
                    >
                      <div>
                        <div
                          class="flex items-center gap-sm"
                        >
                          <span
                            class="text-sm font-medium text-label-md font-semibold text-ink"
                            >Kehamilan ke-1 (Tahun
                            2018)</span
                          >
                          <span
                            class="bg-fog text-graphite text-sm font-medium text-[10px] uppercase px-xs py-0.5"
                            >SELESAI</span
                          >
                        </div>
                        <p
                          class="text-[15px] text-caption text-graphite mt-xs"
                        >
                          Anak Pertama: Laki-laki
                          (Ahmad Supriyanto) • Berat
                          lahir 3.1 kg • Sehat •
                          Persalinan Normal di
                          Puskesmas Cikampek
                        </p>
                      </div>
                      <button
                        class="text-graphite hover:text-primary text-sm font-medium text-caption underline"
                      >
                        Lihat Arsip
                      </button>
                    </div>
                  </div>
                </div>
                <!-- 7. RENCANA PERSALINAN (P4K) -->
                <div
                  class="bg-paper p-lg-card"
                >
                  <div
                    class="flex items-center justify-between pb-sm mb-md bg-fog -mx-lg -mt-lg px-lg pt-md"
                  >
                    <div class="flex items-center gap-xs">
                      <span
                        class="material-symbols-outlined text-primary"
                        >baby_changing_station</span
                      >
                      <h2
                        class="text-xl font-bold text-[18px] font-semibold text-ink"
                      >
                        Rencana Persalinan (P4K)
                      </h2>
                    </div>
                    <span
                      class="bg-fog text-graphite text-sm font-medium text-caption px-sm py-xs"
                    >
                      Perlu Dilengkapi (Tahap Trimester I)
                    </span>
                  </div>
                  <div
                    class="grid grid-cols-1 sm:grid-cols-2 gap-md p-md bg-fog"
                  >
                    <div>
                      <span
                        class="text-caption font-caption text-graphite uppercase block"
                        >Estimasi Persalinan (HPL)</span
                      >
                      <p
                        class="text-sm font-medium text-body-md font-semibold text-ink mt-xs"
                      >
                        17 Maret 2027
                      </p>
                    </div>
                    <div>
                      <span
                        class="text-caption font-caption text-graphite uppercase block"
                        >Pendamping Persalinan</span
                      >
                      <p
                        class="text-sm font-medium text-body-md font-semibold text-ink mt-xs"
                      >
                        Bpk. Supriyanto (Suami)
                      </p>
                    </div>
                    <div>
                      <span
                        class="text-caption font-caption text-graphite uppercase block"
                        >Tempat Persalinan
                        Terencana</span
                      >
                      <p
                        class="text-sm font-medium text-body-md text-graphite mt-xs italic"
                      >
                        Belum diisi (Rekomendasi:
                        Puskesmas Cikampek / PONED)
                      </p>
                    </div>
                    <div>
                      <span
                        class="text-caption font-caption text-graphite uppercase block"
                        >Penolong Persalinan</span
                      >
                      <p
                        class="text-sm font-medium text-body-md text-graphite mt-xs italic"
                      >
                        Belum diisi (Bidan / Dokter
                        Sp.OG)
                      </p>
                    </div>
                    <div class="sm:col-span-2">
                      <span
                        class="text-caption font-caption text-graphite uppercase block"
                        >Calon Donor Darah &amp;
                        Transportasi Siaga</span
                      >
                      <p
                        class="text-[15px] text-body-md text-ink mt-xs"
                      >
                        Dalam koordinasi kader Dusun
                        Krajan (Golongan Darah Ibu:
                        <strong class="font-bold"
                          >O+</strong
                        >)
                      </p>
                    </div>
                  </div>
                  <div class="flex justify-end pt-md">
                    <button
                      class="px-md py-sm bg-primary text-white text-sm font-medium text-label-md hover:bg-primary-dark transition-colors flex items-center gap-xs-card"
                    >
                      <span
                        class="material-symbols-outlined text-[18px]"
                        >edit_note</span
                      >
                      Lengkapi Rencana P4K
                    </button>
                  </div>
                </div>
              </div>
              <!-- ================= RIGHT COLUMN (~30% = 4 cols) ================= -->
              <div class="lg:col-span-4 flex flex-col gap-lg">
                <!-- SIDEBAR 1: PROGRAM TERKAIT (Interoperabilitas Satu Data PPKB) -->
                <div
                  class="bg-paper p-lg-card"
                >
                  <div
                    class="flex items-center gap-xs pb-sm mb-md bg-fog -mx-lg -mt-lg px-lg pt-md"
                  >
                    <span
                      class="material-symbols-outlined text-primary text-[20px]"
                      >hub</span
                    >
                    <h3
                      class="text-xl font-bold text-[16px] font-semibold text-ink"
                    >
                      Program Terkait (Satu Data)
                    </h3>
                  </div>
                  <div class="space-y-sm">
                    <!-- PUS -->
                    <div
                      class="p-sm bg-fog flex items-center justify-between"
                    >
                      <div>
                        <div
                          class="flex items-center gap-xs"
                        >
                          <span
                            class="text-sm font-medium text-label-md font-bold text-ink"
                            >PUS</span
                          >
                          <span
                            class="w-2 h-2 rounded-[100px] bg-secondary"
                          ></span>
                        </div>
                        <p
                          class="font-caption text-caption text-graphite"
                        >
                          Pasangan: Supriyanto
                        </p>
                      </div>
                      <a
                        class="px-sm py-xs bg-fog hover:bg-primary hover:text-white text-sm font-medium text-caption text-primary transition-colors"
                        href="#"
                      >
                        Lihat
                      </a>
                    </div>
                    <!-- KB -->
                    <div
                      class="p-sm bg-fog flex items-center justify-between"
                    >
                      <div>
                        <div
                          class="flex items-center gap-xs"
                        >
                          <span
                            class="text-sm font-medium text-label-md font-bold text-ink"
                            >KB</span
                          >
                          <span
                            class="font-caption text-[11px] text-graphite uppercase"
                            >(Non-aktif)</span
                          >
                        </div>
                        <p
                          class="font-caption text-caption text-graphite"
                        >
                          Eks IUD (Program Hamil)
                        </p>
                      </div>
                      <a
                        class="px-sm py-xs bg-fog hover:bg-primary hover:text-white text-sm font-medium text-caption text-primary transition-colors"
                        href="#"
                      >
                        Lihat
                      </a>
                    </div>
                    <!-- BUMIL -->
                    <div
                      class="p-sm bg-primary-fixed/30 flex items-center justify-between"
                    >
                      <div>
                        <div
                          class="flex items-center gap-xs"
                        >
                          <span
                            class="text-sm font-medium text-label-md font-bold text-primary"
                            >BUMIL</span
                          >
                          <span
                            class="w-2 h-2 rounded-[100px] bg-primary"
                          ></span>
                        </div>
                        <p
                          class="font-caption text-caption text-graphite"
                        >
                          Kohort Trimester I
                        </p>
                      </div>
                      <span
                        class="text-sm font-medium text-caption text-primary font-semibold px-sm py-xs"
                      >
                        Sedang Dibuka
                      </span>
                    </div>
                    <!-- BATITA -->
                    <div
                      class="p-sm bg-fog flex items-center justify-between opacity-70"
                    >
                      <div>
                        <span
                          class="text-sm font-medium text-label-md font-bold text-graphite"
                          >BATITA</span
                        >
                        <p
                          class="font-caption text-caption text-graphite"
                        >
                          Otomatis pasca lahir
                        </p>
                      </div>
                      <span
                        class="font-caption text-caption text-graphite italic"
                        >Belum Aktif</span
                      >
                    </div>
                  </div>
                </div>
                <!-- SIDEBAR 2: STATUS AUDIT & VERIFIKASI -->
                <div
                  class="bg-paper p-lg-card"
                >
                  <div
                    class="flex items-center gap-xs pb-sm mb-md bg-fog -mx-lg -mt-lg px-lg pt-md"
                  >
                    <span
                      class="material-symbols-outlined text-primary text-[20px]"
                      >verified</span
                    >
                    <h3
                      class="text-xl font-bold text-[16px] font-semibold text-ink"
                    >
                      Status Audit &amp; Verifikasi
                    </h3>
                  </div>
                  <div
                    class="space-y-sm text-label-md text-caption"
                  >
                    <div
                      class="flex justify-between items-center py-xs border-b border-surface-container"
                    >
                      <span
                        class="text-graphite"
                        >Kelengkapan Data:</span
                      >
                      <span
                        class="font-semibold text-green-700 flex items-center gap-xs"
                      >
                        <span
                          class="material-symbols-outlined text-[16px]"
                          >check_circle</span
                        >
                        Lengkap (100%)
                      </span>
                    </div>
                    <div
                      class="flex justify-between items-center py-xs border-b border-surface-container"
                    >
                      <span
                        class="text-graphite"
                        >Validasi Puskesmas:</span
                      >
                      <span
                        class="font-semibold text-primary"
                        >Menunggu Verifikasi</span
                      >
                    </div>
                    <div
                      class="flex flex-col py-xs border-b border-surface-container"
                    >
                      <span
                        class="text-graphite"
                        >Pencatat Pertama:</span
                      >
                      <span
                        class="font-semibold text-ink"
                        >Kader Siti Nurhaliza</span
                      >
                      <span
                        class="text-graphite font-caption"
                        >Posyandu Teratai 03 Dusun
                        Krajan</span
                      >
                    </div>
                    <div class="flex flex-col py-xs">
                      <span
                        class="text-graphite"
                        >Sinkronisasi Terakhir:</span
                      >
                      <span
                        class="font-medium text-ink"
                        >03 September 2026, 10:15
                        WIB</span
                      >
                    </div>
                  </div>
                </div>
                <!-- SIDEBAR 3: RIWAYAT AKTIVITAS (Vertical Micro-timeline) -->
                <div
                  class="bg-paper p-lg-card"
                >
                  <div
                    class="flex items-center gap-xs pb-sm mb-md bg-fog -mx-lg -mt-lg px-lg pt-md"
                  >
                    <span
                      class="material-symbols-outlined text-primary text-[20px]"
                      >schedule</span
                    >
                    <h3
                      class="text-xl font-bold text-[16px] font-semibold text-ink"
                    >
                      Aktivitas Terbaru
                    </h3>
                  </div>
                  <div
                    class="relative pl-md space-y-md before:absolute before:left-2 before:top-2 before:bottom-2 before:w-0.5 before:bg-fogest"
                  >
                    <div class="relative pl-sm">
                      <span
                        class="absolute -left-[19px] top-1 w-2.5 h-2.5 rounded-[100px] bg-primary ring-4 ring-surface-container-lowest"
                      ></span>
                      <p
                        class="text-sm font-medium text-caption font-semibold text-ink"
                      >
                        Data ANC K1 Tercatat
                      </p>
                      <p
                        class="font-caption text-[11px] text-graphite"
                      >
                        03 Sep 2026 • 10:15 WIB oleh
                        Siti Nurhaliza
                      </p>
                    </div>
                    <div class="relative pl-sm">
                      <span
                        class="absolute -left-[19px] top-1 w-2.5 h-2.5 rounded-[100px] bg-secondary ring-4 ring-surface-container-lowest"
                      ></span>
                      <p
                        class="text-sm font-medium text-caption font-semibold text-ink"
                      >
                        Skrining Risiko Diperbarui
                      </p>
                      <p
                        class="font-caption text-[11px] text-graphite"
                      >
                        03 Sep 2026 • 09:30 WIB di
                        Puskesmas
                      </p>
                    </div>
                    <div class="relative pl-sm">
                      <span
                        class="absolute -left-[19px] top-1 w-2.5 h-2.5 rounded-[100px] bg-outline ring-4 ring-surface-container-lowest"
                      ></span>
                      <p
                        class="text-sm font-medium text-caption font-semibold text-ink"
                      >
                        USG Trimester I Dikonfirmasi
                      </p>
                      <p
                        class="font-caption text-[11px] text-graphite"
                      >
                        05 Agu 2026 • 14:00 WIB oleh
                        Faskes
                      </p>
                    </div>
                    <div class="relative pl-sm">
                      <span
                        class="absolute -left-[19px] top-1 w-2.5 h-2.5 rounded-[100px] bg-outline ring-4 ring-surface-container-lowest"
                      ></span>
                      <p
                        class="text-sm font-medium text-caption font-semibold text-ink"
                      >
                        Entri HPHT &amp; Pembukaan Buku
                        KIA
                      </p>
                      <p
                        class="font-caption text-[11px] text-graphite"
                      >
                        10 Jun 2026 oleh Sistem
                      </p>
                    </div>
                  </div>
                </div>
                <!-- SIDEBAR 4: KEAMANAN & PRIVASI DATA -->
                <div
                  class="p-md bg-fog-card"
                >
                  <div class="flex items-start gap-sm">
                    <span
                      class="material-symbols-outlined text-primary text-[20px] shrink-0 mt-0.5"
                      >shield</span
                    >
                    <div class="flex flex-col">
                      <p
                        class="text-sm font-medium text-label-md font-bold text-ink"
                      >
                        Keamanan &amp; Kerahasiaan Data
                      </p>
                      <p
                        class="font-caption text-caption text-graphite mt-xs leading-relaxed"
                      >
                        Data medis kohort ibu hamil ini
                        dilindungi di bawah standarisasi
                        Satu Data Keluarga BKKBN &amp;
                        PPKB Kecamatan Cikampek. NIK
                        kependudukan:
                        <span
                          class="font-mono font-semibold text-ink"
                          >321508******0004</span
                        >
                        (Masked).
                      </p>
                    </div>
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
