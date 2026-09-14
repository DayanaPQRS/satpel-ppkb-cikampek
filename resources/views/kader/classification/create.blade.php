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
            class="w-10 h-10 bg-primary flex items-center justify-center shrink-0"
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
          class="block px-md py-sm text-graphite hover:bg-fog hover:text-ink transition-all text-[15px]"
          data-path="dashboard"
          href="#"
          >Dashboard</a
        ><a
          class="block px-md py-sm text-graphite hover:bg-fog hover:text-ink transition-all text-[15px]"
          data-path="data-keluarga"
          href="#"
          >Data Keluarga</a
        ><a
          class="block px-md py-sm text-graphite hover:bg-fog hover:text-ink transition-all text-[15px]"
          data-path="data-individu"
          href="#"
          >Data Individu</a
        ><a
          class="block px-md py-sm text-graphite hover:bg-fog hover:text-ink transition-all text-[15px]"
          data-path="program"
          href="#"
          >Program</a
        ><a
          aria-current="page"
          class="block px-md py-sm transition-all bg-primary-light text-white font-semibold"
          data-path="tambah-klasifikasi-program"
          href="#"
          >Tambah Klasifikasi Program</a
        ><a
          class="block px-md py-sm text-graphite hover:bg-fog hover:text-ink transition-all text-[15px]"
          data-path="kegiatan"
          href="#"
          >Kegiatan</a
        ><a
          class="block px-md py-sm text-graphite hover:bg-fog hover:text-ink transition-all text-[15px]"
          data-path="notifikasi"
          href="#"
          >Notifikasi</a
        >
        <div class="pt-xl pb-sm px-md">
          <p
            class="text-caption text-sm font-medium text-graphite uppercase tracking-widest"
          >
            Secondary
          </p>
        </div>
        <a
          class="block px-md py-sm text-graphite hover:bg-fog hover:text-ink transition-all text-[15px]"
          data-path="bantuan"
          href="#"
          >Bantuan</a
        ><a
          class="block px-md py-sm text-graphite hover:bg-fog hover:text-ink transition-all text-[15px]"
          data-path="pengaturan"
          href="#"
          >Pengaturan</a
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
        <div class="flex items-center gap-xl">
          <div
            class="flex items-center gap-xs font-caption text-caption text-graphite"
          >
            <span class="text-graphite">Satpel PPKB</span
            ><span>/</span><span class="text-graphite">Program</span
            ><span>/</span
            ><span class="text-primary text-sm font-medium"
              >Klasifikasi</span
            >
          </div>
          <div class="w-80 relative hidden md:block">
            <span
              class="material-symbols-outlined absolute left-md top-1/2 -translate-y-1/2 text-graphite"
              >search</span
            ><input
              class="w-full pl-xxl pr-md py-sm bg-fog border border-ink focus:border-primary focus:outline-none text-[15px] text-ink"
              placeholder="Cari data, program, atau kegiatan..."
              type="text"
            />
          </div>
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
          <div
            class="w-full max-w-[960px] mx-auto px-md py-lg space-y-xl pb-xxl"
          >
            <!-- BREADCRUMB & BACK BUTTON -->
            <div
              class="flex flex-col sm:flex-row sm:items-center justify-between gap-md"
            >
              <div
                class="flex items-center gap-xs font-caption text-caption text-graphite overflow-x-auto whitespace-nowrap"
              >
                <span
                  class="hover:text-primary cursor-pointer transition-colors"
                  >Data Keluarga</span
                >
                <span>/</span>
                <span
                  class="hover:text-primary cursor-pointer transition-colors"
                  >Bpk. Supriyanto</span
                >
                <span>/</span>
                <span
                  class="hover:text-primary cursor-pointer transition-colors"
                  >Profil Individu</span
                >
                <span>/</span>
                <span class="text-primary text-sm font-medium"
                  >Tambah Klasifikasi</span
                >
              </div>
              <a
                class="inline-flex items-center gap-xs text-primary hover:text-primary-light text-sm font-medium text-label-md transition-colors w-fit"
                href="#"
              >
                <span
                  class="material-symbols-outlined text-[18px]"
                  >arrow_back</span
                >
                Kembali ke Profil Individu
              </a>
            </div>
            <!-- CONTEXT INDIVIDU (Compact Card) -->
            <div class="bg-paper p-lg-card">
              <div
                class="flex flex-col md:flex-row md:items-center justify-between gap-lg"
              >
                <div class="flex items-center gap-md">
                  <div
                    class="w-12 h-12 flex items-center justify-center text-xl font-bold text-headline-md text-primary bg-primary-fixed shrink-0"
                  >
                    SA
                  </div>
                  <div class="space-y-xs">
                    <div
                      class="flex flex-wrap items-center gap-sm"
                    >
                      <h2
                        class="text-xl font-bold text-headline-md text-ink leading-tight"
                      >
                        Siti Aminah
                      </h2>
                      <span
                        class="px-sm py-0.5 bg-secondary-fixed text-on-secondary-fixed font-caption text-caption uppercase tracking-wider font-semibold"
                      >
                        Lengkap
                      </span>
                    </div>
                    <p
                      class="text-[15px] text-body-md text-graphite"
                    >
                      Istri, Perempuan • 30 tahun
                    </p>
                  </div>
                </div>
                <div
                  class="md:text-right space-y-xs pt-md md:pt-0"
                >
                  <div
                    class="flex md:justify-end items-center gap-xs text-graphite font-caption text-caption"
                  >
                    <span
                      class="material-symbols-outlined text-[16px] text-primary"
                      >family_restroom</span
                    >
                    <span
                      >Kepala Keluarga:
                      <strong
                        class="text-ink text-sm font-medium"
                        >Bpk. Supriyanto</strong
                      ></span
                    >
                  </div>
                  <p
                    class="font-caption text-caption text-graphite"
                  >
                    No. KK •••• •••• •••• 1234 • Desa
                    Cikampek Timur
                  </p>
                  <div
                    class="inline-flex items-center gap-xs text-green-700 font-caption text-caption"
                  >
                    <span
                      class="material-symbols-outlined text-[14px]"
                      >verified</span
                    >
                    <span
                      >Data terverifikasi kependudukan
                      Disdukcapil</span
                    >
                  </div>
                </div>
              </div>
            </div>
            <!-- PAGE HEADER -->
            <div class="space-y-xs">
              <div
                class="inline-block px-sm py-0.5 bg-fog text-graphite font-caption text-caption uppercase tracking-widest"
              >
                Kategori Pelayanan Terpadu
              </div>
              <h1
                class="text-2xl font-bold text-headline-lg text-ink"
              >
                Tambah Klasifikasi Program
              </h1>
              <p
                class="text-lg text-body-lg text-graphite"
              >
                Pilih program yang sesuai dengan kondisi aktual
                individu untuk menentukan jalur intervensi dan
                monitoring kader.
              </p>
              <div
                class="flex items-start gap-xs text-graphite font-caption text-caption pt-xs"
              >
                <span
                  class="material-symbols-outlined text-[16px] text-primary shrink-0 mt-0.5"
                  >info</span
                >
                <span
                  >Anda dapat memilih lebih dari satu
                  klasifikasi sekaligus. Detail klinis, jadwal
                  kunjungan, atau suplemen gizi diisi
                  tersendiri pada modul program terkait.</span
                >
              </div>
            </div>
            <!-- SECTION REKOMENDASI SISTEM -->
            <div class="bg-fog p-lg space-y-md">
              <div class="flex items-center justify-between">
                <div class="flex items-center gap-xs">
                  <span
                    class="material-symbols-outlined text-primary text-[20px]"
                    >auto_awesome</span
                  >
                  <span
                    class="text-sm font-medium text-label-md text-primary tracking-wide uppercase"
                    >Rekomendasi Cerdas Sistem</span
                  >
                </div>
                <span
                  class="text-caption font-caption text-graphite"
                  >Akurasi Algoritma 98%</span
                >
              </div>
              <div
                class="bg-paper p-md flex flex-col md:flex-row items-start md:items-center justify-between gap-md"
              >
                <div class="space-y-xs">
                  <div class="flex items-center gap-sm">
                    <span
                      class="text-xl font-bold text-headline-md text-ink"
                      >PUS (Pasangan Usia Subur)</span
                    >
                    <span
                      class="px-xs py-0.5 bg-primary-fixed text-white-fixed text-caption text-sm font-medium"
                      >Sesuai Kriteria</span
                    >
                  </div>
                  <p
                    class="text-[15px] text-body-md text-graphite"
                  >
                    Disarankan otomatis berdasarkan
                    parameter usia reproduksi (30 tahun) dan
                    status perkawinan tercatat (Kawin).
                  </p>
                  <p
                    class="font-caption text-caption text-graphite"
                  >
                    Catatan: Pastikan konfirmasi faktual
                    kondisi lapangan sebelum menyimpan ke
                    basis data.
                  </p>
                </div>
                <button
                  class="shrink-0 px-md py-sm bg-primary-fixed text-white-fixed hover:bg-primary hover:text-white text-sm font-medium text-label-md transition-all flex items-center gap-xs"
                  id="btnQuickRecommend"
                  type="button"
                >
                  <span
                    class="material-symbols-outlined text-[18px]"
                    id="iconQuickRecommend"
                    >check</span
                  >
                  <span id="textQuickRecommend"
                    >Telah Dipilih</span
                  >
                </button>
              </div>
            </div>
            <!-- SECTION PROGRAM YANG SUDAH AKTIF -->
            <div class="space-y-sm">
              <div class="flex items-center justify-between">
                <h3
                  class="text-sm font-medium text-label-md text-ink uppercase tracking-wider"
                >
                  Sudah Terdaftar (Program Aktif)
                </h3>
                <span
                  class="text-caption font-caption text-graphite"
                  >1 Program Sedang Berjalan</span
                >
              </div>
              <div
                class="bg-fog p-md flex flex-col sm:flex-row items-start sm:items-center justify-between gap-md opacity-90"
              >
                <div class="flex items-center gap-md">
                  <div
                    class="w-10 h-10 bg-fog flex items-center justify-center shrink-0"
                  >
                    <span
                      class="material-symbols-outlined text-graphite"
                      >medication</span
                    >
                  </div>
                  <div>
                    <div
                      class="flex items-center gap-sm flex-wrap"
                    >
                      <span
                        class="text-sm font-medium text-label-md text-ink"
                        >KB - Keluarga Berencana (Metode
                        IUD)</span
                      >
                      <span
                        class="px-xs py-0.5 bg-secondary-fixed text-on-secondary-fixed font-caption text-caption"
                        >Aktif Berjalan</span
                      >
                    </div>
                    <p
                      class="font-caption text-caption text-graphite"
                    >
                      Pemasangan faskes Puskesmas Cikampek
                      • Kontrol berkala tercatat normal
                    </p>
                  </div>
                </div>
                <div
                  class="flex items-center gap-md self-end sm:self-center"
                >
                  <span
                    class="inline-flex items-center gap-xs font-caption text-caption text-graphite"
                  >
                    <span
                      class="material-symbols-outlined text-[16px] text-green-700"
                      >check_circle</span
                    >
                    Sudah Terdaftar
                  </span>
                  <a
                    class="text-sm font-medium text-label-md text-primary hover:underline flex items-center gap-xs"
                    href="#"
                  >
                    Lihat Detail
                    <span
                      class="material-symbols-outlined text-[14px]"
                      >arrow_forward</span
                    >
                  </a>
                </div>
              </div>
            </div>
            <!-- SECTION DAFTAR PROGRAM SATPEL PPKB -->
            <div class="space-y-md">
              <div>
                <h3
                  class="text-xl font-bold text-headline-md text-ink"
                >
                  Program Satpel PPKB
                </h3>
                <p
                  class="text-[15px] text-body-md text-graphite"
                >
                  Pilih satu atau beberapa klasifikasi berikut
                  untuk disematkan pada data binaan kader:
                </p>
              </div>
              <!-- GRID CARDS -->
              <div
                class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-md"
                id="programGrid"
              >
                <!-- CARD 1: PUS (SELECTED) -->
                <div
                  class="program-card cursor-pointer p-md flex flex-col justify-between transition-all bg-primary-fixed/25-card"
                  data-code="PUS"
                  data-selected="true"
                  data-title="Pasangan Usia Subur"
                >
                  <div class="space-y-sm">
                    <div
                      class="flex items-center justify-between"
                    >
                      <div
                        class="w-10 h-10 bg-primary text-white flex items-center justify-center"
                      >
                        <span
                          class="material-symbols-outlined text-[22px]"
                          >diversity_1</span
                        >
                      </div>
                      <div
                        class="check-box-ui w-6 h-6 bg-primary text-white flex items-center justify-center"
                      >
                        <span
                          class="material-symbols-outlined text-[18px]"
                          >check</span
                        >
                      </div>
                    </div>
                    <div>
                      <p
                        class="font-caption text-caption text-primary font-semibold tracking-wider"
                      >
                        KLASIFIKASI 01
                      </p>
                      <h4
                        class="text-xl font-bold text-headline-md text-ink"
                      >
                        PUS
                      </h4>
                      <p
                        class="text-sm font-medium text-label-md text-primary"
                      >
                        Pasangan Usia Subur
                      </p>
                    </div>
                    <p
                      class="text-[15px] text-body-md text-graphite leading-relaxed"
                    >
                      Pemantauan usia subur, perencanaan
                      kehamilan terpadu, dan pendampingan
                      fertilitas sehat.
                    </p>
                  </div>
                  <div
                    class="pt-md mt-md flex items-center justify-between text-caption text-sm font-medium"
                  >
                    <span class="status-text text-primary"
                      >✓ Dipilih</span
                    >
                    <span
                      class="text-graphite font-caption"
                      >Target BKKBN</span
                    >
                  </div>
                </div>
                <!-- CARD 2: BUMIL (SELECTED) -->
                <div
                  class="program-card cursor-pointer p-md flex flex-col justify-between transition-all bg-primary-fixed/25-card"
                  data-code="BUMIL"
                  data-selected="true"
                  data-title="Ibu Hamil"
                >
                  <div class="space-y-sm">
                    <div
                      class="flex items-center justify-between"
                    >
                      <div
                        class="w-10 h-10 bg-primary text-white flex items-center justify-center"
                      >
                        <span
                          class="material-symbols-outlined text-[22px]"
                          >pregnant_woman</span
                        >
                      </div>
                      <div
                        class="check-box-ui w-6 h-6 bg-primary text-white flex items-center justify-center"
                      >
                        <span
                          class="material-symbols-outlined text-[18px]"
                          >check</span
                        >
                      </div>
                    </div>
                    <div>
                      <p
                        class="font-caption text-caption text-primary font-semibold tracking-wider"
                      >
                        KLASIFIKASI 02
                      </p>
                      <h4
                        class="text-xl font-bold text-headline-md text-ink"
                      >
                        BUMIL
                      </h4>
                      <p
                        class="text-sm font-medium text-label-md text-primary"
                      >
                        Ibu Hamil
                      </p>
                    </div>
                    <p
                      class="text-[15px] text-body-md text-graphite leading-relaxed"
                    >
                      Pendampingan gizi maternal,
                      pemantauan konsumsi TTD, dan
                      skrining risiko stunting sejak
                      janin.
                    </p>
                  </div>
                  <div
                    class="pt-md mt-md flex items-center justify-between text-caption text-sm font-medium"
                  >
                    <span class="status-text text-primary"
                      >✓ Dipilih</span
                    >
                    <span
                      class="text-graphite font-caption"
                      >Prioritas Stunting</span
                    >
                  </div>
                </div>
                <!-- CARD 3: CATIN (NORMAL) -->
                <div
                  class="program-card cursor-pointer p-md flex flex-col justify-between transition-all bg-paper-card hover:bg-fog"
                  data-code="CATIN"
                  data-selected="false"
                  data-title="Calon Pengantin"
                >
                  <div class="space-y-sm">
                    <div
                      class="flex items-center justify-between"
                    >
                      <div
                        class="w-10 h-10 bg-fog text-graphite flex items-center justify-center"
                      >
                        <span
                          class="material-symbols-outlined text-[22px]"
                          >favorite</span
                        >
                      </div>
                      <div
                        class="check-box-ui w-6 h-6 bg-fog flex items-center justify-center text-transparent"
                      >
                        <span
                          class="material-symbols-outlined text-[18px]"
                          >check</span
                        >
                      </div>
                    </div>
                    <div>
                      <p
                        class="font-caption text-caption text-graphite font-semibold tracking-wider"
                      >
                        KLASIFIKASI 03
                      </p>
                      <h4
                        class="text-xl font-bold text-headline-md text-ink"
                      >
                        CATIN
                      </h4>
                      <p
                        class="text-sm font-medium text-label-md text-graphite"
                      >
                        Calon Pengantin
                      </p>
                    </div>
                    <p
                      class="text-[15px] text-body-md text-graphite leading-relaxed"
                    >
                      Bimbingan pranikah terpadu, skrining
                      anemia Elsimil, dan kesiapan
                      reproduksi calon pasutri.
                    </p>
                  </div>
                  <div
                    class="pt-md mt-md flex items-center justify-between text-caption text-sm font-medium"
                  >
                    <span class="status-text text-graphite"
                      >Klik untuk memilih</span
                    >
                    <span class="text-graphite font-caption"
                      >3 Bulan Pranikah</span
                    >
                  </div>
                </div>
                <!-- CARD 4: BATITA (NORMAL) -->
                <div
                  class="program-card cursor-pointer p-md flex flex-col justify-between transition-all bg-paper-card hover:bg-fog"
                  data-code="BATITA"
                  data-selected="false"
                  data-title="Bawah Tiga Tahun"
                >
                  <div class="space-y-sm">
                    <div
                      class="flex items-center justify-between"
                    >
                      <div
                        class="w-10 h-10 bg-fog text-graphite flex items-center justify-center"
                      >
                        <span
                          class="material-symbols-outlined text-[22px]"
                          >child_care</span
                        >
                      </div>
                      <div
                        class="check-box-ui w-6 h-6 bg-fog flex items-center justify-center text-transparent"
                      >
                        <span
                          class="material-symbols-outlined text-[18px]"
                          >check</span
                        >
                      </div>
                    </div>
                    <div>
                      <p
                        class="font-caption text-caption text-graphite font-semibold tracking-wider"
                      >
                        KLASIFIKASI 04
                      </p>
                      <h4
                        class="text-xl font-bold text-headline-md text-ink"
                      >
                        BATITA / BADUTA
                      </h4>
                      <p
                        class="text-sm font-medium text-label-md text-graphite"
                      >
                        Bawah Tiga Tahun
                      </p>
                    </div>
                    <p
                      class="text-[15px] text-body-md text-graphite leading-relaxed"
                    >
                      Pengukuran antropometri bulanan di
                      posyandu, kelengkapan imunisasi
                      dasar, serta nutrisi 1.000 HPK.
                    </p>
                  </div>
                  <div
                    class="pt-md mt-md flex items-center justify-between text-caption text-sm font-medium"
                  >
                    <span class="status-text text-graphite"
                      >Klik untuk memilih</span
                    >
                    <span class="text-graphite font-caption"
                      >Posyandu Presisi</span
                    >
                  </div>
                </div>
                <!-- CARD 5: REMAJA / BKR (NORMAL) -->
                <div
                  class="program-card cursor-pointer p-md flex flex-col justify-between transition-all bg-paper-card hover:bg-fog"
                  data-code="REMAJA"
                  data-selected="false"
                  data-title="Bina Keluarga Remaja"
                >
                  <div class="space-y-sm">
                    <div
                      class="flex items-center justify-between"
                    >
                      <div
                        class="w-10 h-10 bg-fog text-graphite flex items-center justify-center"
                      >
                        <span
                          class="material-symbols-outlined text-[22px]"
                          >school</span
                        >
                      </div>
                      <div
                        class="check-box-ui w-6 h-6 bg-fog flex items-center justify-center text-transparent"
                      >
                        <span
                          class="material-symbols-outlined text-[18px]"
                          >check</span
                        >
                      </div>
                    </div>
                    <div>
                      <p
                        class="font-caption text-caption text-graphite font-semibold tracking-wider"
                      >
                        KLASIFIKASI 05
                      </p>
                      <h4
                        class="text-xl font-bold text-headline-md text-ink"
                      >
                        REMAJA &amp; BKR
                      </h4>
                      <p
                        class="text-sm font-medium text-label-md text-graphite"
                      >
                        Bina Keluarga Remaja
                      </p>
                    </div>
                    <p
                      class="text-[15px] text-body-md text-graphite leading-relaxed"
                    >
                      Pusat informasi konseling remaja
                      (PIK-R), pencegahan pernikahan anak,
                      dan pola asuh remaja.
                    </p>
                  </div>
                  <div
                    class="pt-md mt-md flex items-center justify-between text-caption text-sm font-medium"
                  >
                    <span class="status-text text-graphite"
                      >Klik untuk memilih</span
                    >
                    <span class="text-graphite font-caption"
                      >PIK-R / GenRe</span
                    >
                  </div>
                </div>
                <!-- CARD 6: LANSIA / BKL (NORMAL) -->
                <div
                  class="program-card cursor-pointer p-md flex flex-col justify-between transition-all bg-paper-card hover:bg-fog"
                  data-code="LANSIA"
                  data-selected="false"
                  data-title="Bina Keluarga Lansia"
                >
                  <div class="space-y-sm">
                    <div
                      class="flex items-center justify-between"
                    >
                      <div
                        class="w-10 h-10 bg-fog text-graphite flex items-center justify-center"
                      >
                        <span
                          class="material-symbols-outlined text-[22px]"
                          >elderly</span
                        >
                      </div>
                      <div
                        class="check-box-ui w-6 h-6 bg-fog flex items-center justify-center text-transparent"
                      >
                        <span
                          class="material-symbols-outlined text-[18px]"
                          >check</span
                        >
                      </div>
                    </div>
                    <div>
                      <p
                        class="font-caption text-caption text-graphite font-semibold tracking-wider"
                      >
                        KLASIFIKASI 06
                      </p>
                      <h4
                        class="text-xl font-bold text-headline-md text-ink"
                      >
                        LANSIA &amp; BKL
                      </h4>
                      <p
                        class="text-sm font-medium text-label-md text-graphite"
                      >
                        Bina Keluarga Lansia
                      </p>
                    </div>
                    <p
                      class="text-[15px] text-body-md text-graphite leading-relaxed"
                    >
                      Perawatan jangka panjang ramah
                      lansia, program lansia tangguh, dan
                      pendampingan psikososial keluarga.
                    </p>
                  </div>
                  <div
                    class="pt-md mt-md flex items-center justify-between text-caption text-sm font-medium"
                  >
                    <span class="status-text text-graphite"
                      >Klik untuk memilih</span
                    >
                    <span class="text-graphite font-caption"
                      >BKL Tangguh</span
                    >
                  </div>
                </div>
              </div>
            </div>
            <!-- SUCCESS NOTIFICATION BANNER (Initially Hidden) -->
            <div
              class="hidden bg-secondary text-on-secondary p-lg-md transition-all"
              id="successBanner"
            >
              <div
                class="flex flex-col sm:flex-row sm:items-center justify-between gap-md"
              >
                <div class="flex items-center gap-md">
                  <div
                    class="w-10 h-10 bg-paper/20 flex items-center justify-center shrink-0"
                  >
                    <span
                      class="material-symbols-outlined text-white text-[24px]"
                      >task_alt</span
                    >
                  </div>
                  <div>
                    <h4
                      class="text-sm font-medium text-label-md text-white font-bold"
                    >
                      Klasifikasi Berhasil Disimpan
                    </h4>
                    <p
                      class="text-[15px] text-body-md text-white/90"
                      id="successMessage"
                    >
                      2 Klasifikasi berhasil ditambahkan
                      ke profil Siti Aminah.
                    </p>
                  </div>
                </div>
                <div class="flex items-center gap-md">
                  <a
                    class="px-md py-sm bg-paper text-green-700 text-sm font-medium text-label-md hover:bg-fog transition-colors"
                    href="#"
                  >
                    Lihat Profil Individu
                  </a>
                </div>
              </div>
            </div>
            <!-- STICKY SELECTION SUMMARY BAR -->
            <div
              class="sticky bottom-6 z-30 bg-paper-xl p-md"
            >
              <div
                class="flex flex-col sm:flex-row items-stretch sm:items-center justify-between gap-md"
              >
                <div class="space-y-xs">
                  <div class="flex items-center gap-xs">
                    <span
                      class="w-2.5 h-2.5 bg-primary"
                    ></span>
                    <span
                      class="text-sm font-medium text-label-md text-ink"
                      id="summaryTitle"
                    >
                      2 Program Dipilih: PUS • BUMIL
                    </span>
                  </div>
                  <p
                    class="font-caption text-caption text-graphite"
                  >
                    Klasifikasi baru akan disematkan ke
                    profil Siti Aminah (Satpel PPKB Kec.
                    Cikampek)
                  </p>
                </div>
                <div
                  class="flex items-center gap-sm justify-end"
                >
                  <button
                    class="px-md py-sm text-sm font-medium text-label-md text-graphite hover:text-ink transition-colors"
                    id="btnReset"
                    type="button"
                  >
                    Batal
                  </button>
                  <button
                    class="px-lg py-sm bg-primary hover:bg-primary-dark text-white text-sm font-medium text-label-md transition-all flex items-center gap-xs"
                    id="btnOpenModal"
                    type="button"
                  >
                    <span
                      class="material-symbols-outlined text-[18px]"
                      >add_task</span
                    >
                    <span id="submitButtonText"
                      >Tambahkan Klasifikasi (2)</span
                    >
                  </button>
                </div>
              </div>
            </div>
          </div>
          <!-- CONFIRMATION MODAL (Hidden by default) -->
          <div
            class="fixed inset-0 z-50 flex items-center justify-center p-md bg-inverse-surface/60 hidden"
            id="confirmModal"
          >
            <div
              class="bg-paper w-full max-w-lg-xl p-xl space-y-lg"
            >
              <div class="flex items-start justify-between">
                <div class="flex items-center gap-sm">
                  <div
                    class="w-10 h-10 bg-primary-fixed flex items-center justify-center"
                  >
                    <span
                      class="material-symbols-outlined text-primary"
                      >fact_check</span
                    >
                  </div>
                  <div>
                    <h3
                      class="text-xl font-bold text-headline-md text-ink"
                    >
                      Konfirmasi Klasifikasi
                    </h3>
                    <p
                      class="font-caption text-caption text-graphite"
                    >
                      Satpel PPKB Kecamatan Cikampek
                    </p>
                  </div>
                </div>
                <button
                  class="text-graphite hover:text-ink"
                  id="btnCloseModal"
                >
                  <span class="material-symbols-outlined"
                    >close</span
                  >
                </button>
              </div>
              <div class="space-y-sm">
                <p
                  class="text-[15px] text-body-md text-ink"
                >
                  Individu binaan kader
                  <strong>Siti Aminah</strong> akan
                  ditambahkan ke dalam daftar klasifikasi
                  operasional:
                </p>
                <div
                  class="flex flex-wrap gap-xs pt-xs"
                  id="modalSelectedTags"
                >
                  <!-- Populated by JS -->
                </div>
                <div
                  class="p-md bg-fog text-graphite font-caption text-caption flex items-start gap-xs"
                >
                  <span
                    class="material-symbols-outlined text-primary text-[18px] shrink-0"
                    >verified_user</span
                  >
                  <span
                    >Pastikan klasifikasi sesuai dengan
                    verifikasi langsung kader di RT/RW
                    setempat. Data ini akan memperbarui
                    status dashboard PPKB kecamatan.</span
                  >
                </div>
              </div>
              <div
                class="flex items-center justify-end gap-sm pt-md"
              >
                <button
                  class="px-md py-sm text-graphite hover:bg-fog text-sm font-medium text-label-md"
                  id="btnCancelModal"
                  type="button"
                >
                  Periksa Kembali
                </button>
                <button
                  class="px-lg py-sm bg-primary text-white hover:bg-primary-dark text-sm font-medium text-label-md transition-all flex items-center gap-xs"
                  id="btnConfirmSubmit"
                  type="button"
                >
                  <span
                    class="material-symbols-outlined text-[18px]"
                    >check</span
                  >
                  Konfirmasi &amp; Simpan
                </button>
              </div>
            </div>
          </div>
          <script>
            (function () {
              const cards =
                document.querySelectorAll(".program-card");
              const summaryTitle =
                document.getElementById("summaryTitle");
              const submitButtonText =
                document.getElementById("submitButtonText");
              const btnReset =
                document.getElementById("btnReset");
              const btnOpenModal =
                document.getElementById("btnOpenModal");
              const confirmModal =
                document.getElementById("confirmModal");
              const btnCloseModal =
                document.getElementById("btnCloseModal");
              const btnCancelModal =
                document.getElementById("btnCancelModal");
              const btnConfirmSubmit =
                document.getElementById("btnConfirmSubmit");
              const modalSelectedTags =
                document.getElementById("modalSelectedTags");
              const successBanner =
                document.getElementById("successBanner");
              const successMessage =
                document.getElementById("successMessage");
              const btnQuickRecommend =
                document.getElementById("btnQuickRecommend");
              const textQuickRecommend =
                document.getElementById("textQuickRecommend");
              const iconQuickRecommend =
                document.getElementById("iconQuickRecommend");

              function updateUI() {
                const selectedCards = Array.from(cards).filter(
                  (c) =>
                    c.getAttribute("data-selected") ===
                    "true",
                );
                const count = selectedCards.length;
                const codes = selectedCards.map((c) =>
                  c.getAttribute("data-code"),
                );

                // Update cards styling
                cards.forEach((card) => {
                  const isSelected =
                    card.getAttribute("data-selected") ===
                    "true";
                  const iconWrapper =
                    card.querySelector(".w-10");
                  const checkBox =
                    card.querySelector(".check-box-ui");
                  const subtitle = card.querySelector(
                    "div > p.text-sm font-medium",
                  );
                  const statusText =
                    card.querySelector(".status-text");

                  if (isSelected) {
                    card.className =
                      "program-card cursor-pointer p-md flex flex-col justify-between transition-all bg-primary-fixed/25-card";
                    if (iconWrapper) {
                      iconWrapper.className =
                        "w-10 h-10 bg-primary text-white flex items-center justify-center";
                    }
                    if (checkBox) {
                      checkBox.className =
                        "check-box-ui w-6 h-6 bg-primary text-white flex items-center justify-center";
                    }
                    if (subtitle) {
                      subtitle.className =
                        "text-sm font-medium text-label-md text-primary";
                    }
                    if (statusText) {
                      statusText.textContent =
                        "✓ Dipilih";
                      statusText.className =
                        "status-text text-primary";
                    }
                  } else {
                    card.className =
                      "program-card cursor-pointer p-md flex flex-col justify-between transition-all bg-paper-card hover:bg-fog";
                    if (iconWrapper) {
                      iconWrapper.className =
                        "w-10 h-10 bg-fog text-graphite flex items-center justify-center";
                    }
                    if (checkBox) {
                      checkBox.className =
                        "check-box-ui w-6 h-6 bg-fog flex items-center justify-center text-transparent";
                    }
                    if (subtitle) {
                      subtitle.className =
                        "text-sm font-medium text-label-md text-graphite";
                    }
                    if (statusText) {
                      statusText.textContent =
                        "Klik untuk memilih";
                      statusText.className =
                        "status-text text-graphite";
                    }
                  }
                });

                // Update Quick Recommend Button state (tied to PUS card)
                const pusCard = Array.from(cards).find(
                  (c) =>
                    c.getAttribute("data-code") === "PUS",
                );
                const pusSelected =
                  pusCard &&
                  pusCard.getAttribute("data-selected") ===
                    "true";
                if (pusSelected) {
                  textQuickRecommend.textContent =
                    "Telah Dipilih";
                  iconQuickRecommend.textContent = "check";
                  btnQuickRecommend.className =
                    "shrink-0 px-md py-sm bg-primary-fixed text-white-fixed hover:bg-primary hover:text-white text-sm font-medium text-label-md transition-all flex items-center gap-xs";
                } else {
                  textQuickRecommend.textContent =
                    "+ Pilih Rekomendasi";
                  iconQuickRecommend.textContent = "add";
                  btnQuickRecommend.className =
                    "shrink-0 px-md py-sm bg-primary text-white hover:bg-primary-dark text-sm font-medium text-label-md transition-all flex items-center gap-xs";
                }

                // Update Bottom Sticky Summary
                if (count > 0) {
                  summaryTitle.textContent =
                    count +
                    " Program Dipilih: " +
                    codes.join(" • ");
                  submitButtonText.textContent =
                    "Tambahkan Klasifikasi (" + count + ")";
                  btnOpenModal.removeAttribute("disabled");
                  btnOpenModal.classList.remove(
                    "opacity-50",
                    "pointer-events-none",
                  );
                } else {
                  summaryTitle.textContent =
                    "Belum ada program dipilih";
                  submitButtonText.textContent =
                    "Pilih Program";
                  btnOpenModal.setAttribute(
                    "disabled",
                    "true",
                  );
                  btnOpenModal.classList.add(
                    "opacity-50",
                    "pointer-events-none",
                  );
                }
              }

              // Card click event
              cards.forEach((card) => {
                card.addEventListener("click", () => {
                  const current =
                    card.getAttribute("data-selected") ===
                    "true";
                  card.setAttribute(
                    "data-selected",
                    current ? "false" : "true",
                  );
                  updateUI();
                });
              });

              // Quick Recommend action toggle
              btnQuickRecommend.addEventListener("click", (e) => {
                e.stopPropagation();
                const pusCard = Array.from(cards).find(
                  (c) =>
                    c.getAttribute("data-code") === "PUS",
                );
                if (pusCard) {
                  const current =
                    pusCard.getAttribute(
                      "data-selected",
                    ) === "true";
                  pusCard.setAttribute(
                    "data-selected",
                    current ? "false" : "true",
                  );
                  updateUI();
                }
              });

              // Reset selection
              btnReset.addEventListener("click", () => {
                cards.forEach((c) =>
                  c.setAttribute("data-selected", "false"),
                );
                updateUI();
              });

              // Open Modal
              btnOpenModal.addEventListener("click", () => {
                const selectedCards = Array.from(cards).filter(
                  (c) =>
                    c.getAttribute("data-selected") ===
                    "true",
                );
                if (selectedCards.length === 0) return;

                modalSelectedTags.innerHTML = "";
                selectedCards.forEach((c) => {
                  const code = c.getAttribute("data-code");
                  const title = c.getAttribute("data-title");
                  const badge = document.createElement("div");
                  badge.className =
                    "px-md py-xs bg-primary text-white text-sm font-medium text-label-md flex items-center gap-xs";
                  badge.innerHTML =
                    '<span class="material-symbols-outlined text-[16px]">check</span> ' +
                    code +
                    " (" +
                    title +
                    ")";
                  modalSelectedTags.appendChild(badge);
                });

                confirmModal.classList.remove("hidden");
              });

              function closeModal() {
                confirmModal.classList.add("hidden");
              }

              btnCloseModal.addEventListener("click", closeModal);
              btnCancelModal.addEventListener(
                "click",
                closeModal,
              );
              confirmModal.addEventListener("click", (e) => {
                if (e.target === confirmModal) closeModal();
              });

              // Confirm Submit
              btnConfirmSubmit.addEventListener("click", () => {
                const selectedCards = Array.from(cards).filter(
                  (c) =>
                    c.getAttribute("data-selected") ===
                    "true",
                );
                const count = selectedCards.length;
                closeModal();
                successMessage.textContent =
                  count +
                  " Klasifikasi baru berhasil disimpan ke profil Siti Aminah.";
                successBanner.classList.remove("hidden");
                successBanner.scrollIntoView({
                  behavior: "smooth",
                  block: "center",
                });
              });

              // Init
              updateUI();
            })();
          </script>
        </div>
      </main>
    </div>
  </body>
</html>
