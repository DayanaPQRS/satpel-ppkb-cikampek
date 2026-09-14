<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="utf-8" />
    <meta
      content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover"
      name="viewport"
    />
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link
      crossorigin=""
      href="https://fonts.gstatic.com"
      rel="preconnect"
    />
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
    <script src="https://cdn.tailwindcss.com"></script>
    <script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            colors: {
              "surface-bright": "#f9f9ff",
              "error-container": "#ffdad6",
              "on-error": "#ffffff",
              "on-primary-fixed-variant": "#004493",
              "secondary-fixed-dim": "#6cdd86",
              "inverse-on-surface": "#eff0f9",
              "tertiary-container": "#cfa600",
              "on-primary-fixed": "#001a41",
              "on-background": "#191c22",
              primary: "#00408b",
              "surface-dim": "#d9d9e2",
              tertiary: "#745b00",
              background: "#f9f9ff",
              "surface-tint": "#0d5bbc",
              outline: "#727784",
              "surface-container-highest": "#e1e2eb",
              error: "#ba1a1a",
              "on-secondary-fixed": "#00210a",
              "secondary-container": "#88faa0",
              "on-tertiary-fixed-variant": "#574400",
              "surface-variant": "#e1e2eb",
              "on-primary-container": "#bfd2ff",
              "on-error-container": "#93000a",
              "inverse-surface": "#2e3037",
              surface: "#f9f9ff",
              "secondary-fixed": "#88faa0",
              "primary-container": "#0057b8",
              "surface-container-high": "#e7e7f0",
              "tertiary-fixed": "#ffe08a",
              "surface-container": "#ededf6",
              "on-surface-variant": "#424752",
              "primary-fixed-dim": "#adc7ff",
              secondary: "#006d31",
              "surface-container-low": "#f2f3fc",
              "on-tertiary-fixed": "#241a00",
              "primary-fixed": "#d8e2ff",
              "on-tertiary": "#ffffff",
              "inverse-primary": "#adc7ff",
              "tertiary-fixed-dim": "#f1c100",
              "on-primary": "#ffffff",
              "on-secondary-container": "#007434",
              "on-surface": "#191c22",
              "outline-variant": "#c2c6d4",
              "on-secondary-fixed-variant": "#005323",
              "on-tertiary-container": "#4e3d00",
              "surface-container-lowest": "#ffffff",
              "on-secondary": "#ffffff",
            },
            borderRadius: {
              DEFAULT: "0.25rem",
              lg: "0.5rem",
              xl: "0.75rem",
              full: "9999px",
            },
            spacing: {
              lg: "24px",
              xl: "40px",
              md: "16px",
              xs: "4px",
              unit: "4px",
              sm: "8px",
              "container-max": "1280px",
              xxl: "64px",
              gutter: "24px",
            },
            fontFamily: {
              "display-lg": ["Plus Jakarta Sans"],
              "display-xl": ["Plus Jakarta Sans"],
              "body-lg": ["Plus Jakarta Sans"],
              "body-md": ["Plus Jakarta Sans"],
              "headline-lg": ["Plus Jakarta Sans"],
              "headline-md": ["Plus Jakarta Sans"],
              caption: ["Plus Jakarta Sans"],
              "label-md": ["Plus Jakarta Sans"],
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
              "body-lg": [
                "18px",
                { lineHeight: "28px", fontWeight: "400" },
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
              "headline-md": [
                "24px",
                { lineHeight: "32px", fontWeight: "600" },
              ],
              caption: [
                "12px",
                { lineHeight: "16px", fontWeight: "400" },
              ],
              "label-md": [
                "14px",
                {
                  lineHeight: "20px",
                  letterSpacing: "0.05em",
                  fontWeight: "600",
                },
              ],
            },
          },
        },
      };
    </script>
    <style>
      @layer base {
        html,
        body {
          width: 100vw;
          margin: 0;
          padding: 0;
        }
        body {
          overscroll-behavior: none;
        }
        .pb-safe {
          padding-bottom: env(safe-area-inset-bottom, 0px);
        }
        .pt-safe {
          padding-top: env(safe-area-inset-top, 0px);
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
  </head>
  <body
    class="bg-[#F7F9FC] text-[15px] text-body-md text-[#172033] flex flex-col min-h-screen antialiased selection:bg-[#0057B8]/10 selection:text-[#0057B8]"
  >
    <header
      class="fixed top-0 w-full z-50 bg-paper/95 border-b border-[#E5E7EB]-card transition-all"
    >
      <div
        class="max-w-[1280px] mx-auto h-16 px-4 md:px-8 flex items-center justify-between gap-4"
      >
        <div class="flex items-center gap-3">
          <button
            aria-label="Menu Utama"
            class="w-10 h-10 rounded-[10px]-xl flex items-center justify-center text-[#172033] hover:bg-[#F0F3F8] hover:text-[#0057B8] transition-colors focus:outline-none focus:ring-2 focus:ring-[#0057B8]/20"
          >
            <span class="material-symbols-outlined text-[22px]"
              >menu</span
            ></button
          ><a href="#" class="flex flex-col group"
            ><div class="flex items-center gap-2">
              <span
                class="font-bold text-[#003B7A] tracking-tight text-[17px] group-hover:text-[#0057B8] transition-colors"
                >SATPEL PPKB</span
              ><span
                class="px-2 py-0.5 rounded-[100px] bg-[#159447]/10 text-[#159447] text-[11px] font-bold uppercase tracking-wider border border-[#159447]/20"
                >Resmi</span
              >
            </div>
            <span
              class="text-[12px] text-[#667085] leading-none font-medium"
              >Kecamatan Cikampek</span
            ></a
          >
        </div>
        <div class="hidden md:flex items-center gap-6">
          <a
            href="#"
            class="text-[14px] font-medium text-[#667085] hover:text-[#0057B8] transition-colors"
            >Beranda</a
          ><a
            href="#"
            class="text-[14px] font-semibold text-[#0057B8] border-b-2 border-[#0057B8] pb-1"
            >Layanan Program</a
          ><a
            href="#"
            class="text-[14px] font-medium text-[#667085] hover:text-[#0057B8] transition-colors"
            >Konsultasi</a
          ><a
            href="#"
            class="text-[14px] font-medium text-[#667085] hover:text-[#0057B8] transition-colors"
            >Warta &amp; Edukasi</a
          ><a
            href="#"
            class="text-[14px] font-medium text-[#667085] hover:text-[#0057B8] transition-colors"
            >Kontak</a
          >
        </div>
        <div class="flex items-center gap-2">
          <button
            aria-label="Notifikasi Layanan"
            class="w-10 h-10 rounded-[10px]-xl flex items-center justify-center text-[#667085] hover:bg-[#F0F3F8] hover:text-[#0057B8] transition-colors"
          >
            <span class="material-symbols-outlined text-[22px]"
              >notifications</span
            >
          </button>
          <div
            class="w-9 h-9 rounded-[100px] ring-2 ring-[#0057B8]/20 overflow-hidden"
          >
            <img
              alt="Foto Profil Pengguna"
              class="w-full h-full object-cover"
              src="https://lh3.googleusercontent.com/aida/AEtjO1Vr9qlFtYmeFiH1lxIRCy2tiWXqadk5jCu6SS_C6CzKTbOvy3cgxheIHHmjSpLxLvyCaIwqwwEc247ejGMxLrHM6Jbl-XUxhKEf_I0Y_askL-xwP_Dl7GjtjOCroZG76-e4HGZNIFjWH5n1N7wqL6F6Pa6AAb3oz4i_kAW0eFd51gcsUPkfvHfLfwORIx3eo8ozjkcbEqzuWQuuMYHvzvCdYrQ2-zZ_Gq2QkbMFgCqTtOeW048jIZIGUrc"
            />
          </div>
        </div>
      </div>
    </header>
    <main
      class="flex flex-col relative w-full pt-16 pb-24 bg-paper flex-grow"
    >
      <div class="flex flex-col w-full">
        <!-- Breadcrumb Navigation -->
        <div
          class="w-full bg-paper border-b border-[#E5E7EB] px-4 md:px-8 py-3"
        >
          <div
            class="max-w-[1280px] mx-auto flex items-center gap-2 text-[13px] text-[#667085]"
          >
            <a
              class="hover:text-[#0057B8] transition-colors flex items-center gap-1.5"
              href="#"
              ><span class="material-symbols-outlined text-[16px]"
                >home</span
              ><span class="">Beranda</span></a
            ><span class="text-[#C2C6D4]">/</span
            ><a
              class="hover:text-[#0057B8] transition-colors"
              href="#"
              >Program</a
            ><span class="text-[#C2C6D4]">/</span
            ><span class="text-[#0057B8] font-semibold"
              >Pendampingan Keluarga Terpadu</span
            >
          </div>
        </div>
        <!-- Hero Detail Section (Editorial Journal Style) -->
        <section
          class="w-full px-4 md:px-8 py-8 md:py-12 max-w-[1280px] mx-auto"
        >
          <div
            class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center"
          >
            <div class="lg:col-span-7 flex flex-col gap-5">
              <div class="flex flex-wrap items-center gap-2.5">
                <span
                  class="px-3 py-1 rounded-[100px] bg-[#0057B8]/10 text-[#0057B8] text-[12px] uppercase tracking-wider font-bold border border-[#0057B8]/15"
                  >Program Resmi Satpel PPKB</span
                ><span
                  class="px-3 py-1 rounded-[100px] bg-[#159447]/10 text-[#159447] text-[12px] uppercase tracking-wider font-bold flex items-center gap-1.5 border border-[#159447]/20"
                  ><span
                    class="material-symbols-outlined text-[14px]"
                    >verified</span
                  >Program Unggulan</span
                >
              </div>
              <h1
                class="text-[34px] md:text-[46px] font-bold text-[#172033] tracking-tight leading-[1.18]"
              >
                Pendampingan Keluarga Terpadu
              </h1>
              <p
                class="text-[17px] md:text-[18px] text-[#667085] leading-relaxed font-normal"
              >
                Pendampingan berkelanjutan untuk membantu
                keluarga mengenali kebutuhan, mendapatkan
                informasi resmi, dan mengakses layanan kesehatan
                serta sosial yang tepat di seluruh wilayah
                Kecamatan Cikampek.
              </p>
              <div class="flex flex-wrap items-center gap-3 pt-2">
                <a
                  class="inline-flex items-center justify-center gap-2 px-6 py-3 rounded-[10px]-xl bg-[#0057B8] text-white text-[15px] font-semibold hover:bg-[#003B7A] transition-all-card hover:shadow-card active:scale-[0.98]"
                  href="#kontak-cta"
                  ><span
                    class="material-symbols-outlined text-[19px]"
                    >chat</span
                  ><span class=""
                    >Konsultasi Kader Desa</span
                  ></a
                ><a
                  class="inline-flex items-center justify-center gap-2 px-6 py-3 rounded-[10px]-xl bg-paper text-[#172033] border border-[#E5E7EB] text-[15px] font-semibold hover:bg-[#F0F3F8] hover:border-[#D1DAF4] transition-all"
                  href="#alur-program"
                  ><span
                    class="material-symbols-outlined text-[19px] text-[#0057B8]"
                    >account_tree</span
                  ><span class="">Alur Pendampingan</span></a
                >
              </div>
            </div>
            <div class="lg:col-span-5 flex flex-col gap-2">
              <div
                class="relative rounded-[15px] overflow-hidden bg-paper border border-[#E5E7EB]-card group"
              >
                <img
                  class="w-full aspect-[4/3] object-cover group-hover:scale-[1.02] transition-transform duration-500"
                  data-alt="Dokumentasi resmi petugas penyuluh keluarga berencana perempuan berkerudung mengenakan batik seragam resmi Satpel PPKB Cikampek sedang berlutut tersenyum ramah memberikan suplemen gizi kepada balita ceria yang dipangku ibunya di dalam balai posyandu Cikampek Utara yang terang dan bersih."
                  src="https://lh3.googleusercontent.com/aida-public/AB6AXuDWqbq5D-p8GJpwe0jbWJAXQaYvpJtX996KIjgUrdgGwU2PjQs9rINpkNMrSiX27NXg4uTCwq0l7Y2QyeaEuryp6XNPWOFgkX_gKOZlfo74lgwDN9QWfio60L7fpx4tB2eFC8lLFH-omTd0FRnFoITFJFl6NTcKCtC-jZHJK_BneccmJlmubXK6OlpNnW_YyHOSBwH0RH9i7vYSJWk0IsPgkQmEDRLumnlqMFxxaG4Djd6Ttd4OEy-u"
                />
                <div
                  class="absolute bottom-0 inset-x-0 p-3.5 bg-gradient-to-t from-black/80 via-black/40 to-transparent text-white"
                >
                  <p
                    class="text-[12px] flex items-center gap-1.5 font-medium"
                  >
                    <span
                      class="material-symbols-outlined text-[15px] text-[#6cdd86]"
                      >photo_camera</span
                    ><span class=""
                      >Dokumentasi Rutin Door-to-Door
                      Kader Posyandu &amp; TPK
                      Cikampek</span
                    >
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Summary Cards Grid (No Borders, Crisp Background Tonal Shifts) -->
        <section class="w-full bg-paper border-y border-[#E5E7EB] py-8">
          <div class="max-w-[1280px] mx-auto px-4 md:px-8">
            <div
              class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6"
            >
              <div
                class="p-5 rounded-[10px]-2xl bg-[#F7F9FC] border border-[#E5E7EB] flex flex-col gap-2 hover:border-[#adc7ff] transition-colors"
              >
                <div
                  class="flex items-center gap-2 text-[#0057B8]"
                >
                  <span
                    class="material-symbols-outlined text-[20px]"
                    >groups</span
                  ><span
                    class="text-[11px] uppercase tracking-wider font-bold"
                    >Sasaran Utama</span
                  >
                </div>
                <p class="text-[18px] font-bold text-[#172033]">
                  Seluruh Keluarga Binaan
                </p>
                <p
                  class="text-[13px] text-[#667085] leading-relaxed"
                >
                  Meliputi 10 Desa/Kelurahan se-Kecamatan
                  Cikampek
                </p>
              </div>
              <div
                class="p-5 rounded-[10px]-2xl bg-[#F7F9FC] border border-[#E5E7EB] flex flex-col gap-2 hover:border-[#88faa0] transition-colors"
              >
                <div
                  class="flex items-center gap-2 text-[#159447]"
                >
                  <span
                    class="material-symbols-outlined text-[20px]"
                    >badge</span
                  ><span
                    class="text-[11px] uppercase tracking-wider font-bold"
                    >Pelaksana Teknis</span
                  >
                </div>
                <p class="text-[18px] font-bold text-[#172033]">
                  Satpel, TPK &amp; Kader
                </p>
                <p
                  class="text-[13px] text-[#667085] leading-relaxed"
                >
                  Kolaborasi Tenaga Pendamping Keluarga &amp;
                  Posyandu
                </p>
              </div>
              <div
                class="p-5 rounded-[10px]-2xl bg-[#F7F9FC] border border-[#E5E7EB] flex flex-col gap-2 hover:border-[#ffe08a] transition-colors"
              >
                <div
                  class="flex items-center gap-2 text-[#745b00]"
                >
                  <span
                    class="material-symbols-outlined text-[20px]"
                    >map</span
                  ><span
                    class="text-[11px] uppercase tracking-wider font-bold"
                    >Cakupan Wilayah</span
                  >
                </div>
                <p class="text-[18px] font-bold text-[#172033]">
                  10 Desa Administratif
                </p>
                <p
                  class="text-[13px] text-[#667085] leading-relaxed"
                >
                  Wilayah kerja terpadu Satpel PPKB Cikampek
                </p>
              </div>
              <div
                class="p-5 rounded-[10px]-2xl bg-[#F7F9FC] border border-[#E5E7EB] flex flex-col gap-2 hover:border-[#adc7ff] transition-colors"
              >
                <div
                  class="flex items-center gap-2 text-[#003B7A]"
                >
                  <span
                    class="material-symbols-outlined text-[20px]"
                    >health_and_safety</span
                  ><span
                    class="text-[11px] uppercase tracking-wider font-bold"
                    >Fokus Intervensi</span
                  >
                </div>
                <p class="text-[18px] font-bold text-[#172033]">
                  Cegah Stunting &amp; KB
                </p>
                <p
                  class="text-[13px] text-[#667085] leading-relaxed"
                >
                  Validasi data, edukasi 1.000 HPK &amp;
                  ketahanan sosial
                </p>
              </div>
            </div>
          </div>
        </section>
        <!-- Narrative Storytelling & Visual Evidence Section -->
        <section
          class="w-full px-4 md:px-8 py-12 md:py-16 max-w-[1280px] mx-auto"
        >
          <div
            class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-14 items-center"
          >
            <div class="lg:col-span-6 flex flex-col gap-5">
              <div
                class="flex items-center gap-2 text-[#159447] text-[12px] uppercase font-bold tracking-widest"
              >
                <span
                  class="inline-block w-2 h-2 rounded-[100px] bg-[#159447]"
                ></span
                ><span class="">Tentang Inisiatif</span>
              </div>
              <h2
                class="text-[28px] md:text-[34px] font-bold text-[#172033] tracking-tight leading-tight"
              >
                Membangun Ketahanan Keluarga dari Tingkat Rumah
                Tangga
              </h2>
              <div
                class="space-y-4 text-[16px] text-[#667085] leading-relaxed"
              >
                <p class="">
                  Pendampingan Keluarga Terpadu merupakan
                  pilar strategis Satpel PPKB Kecamatan
                  Cikampek untuk memastikan kehadiran negara
                  di setiap pintu warga. Program ini
                  mengintegrasikan peran penyuluh KB lapangan,
                  bidan desa, dan kader Tim Pendamping
                  Keluarga (TPK) dalam satu kesatuan sistem
                  pelayanan preventif.
                </p>
                <p class="">
                  Melalui pendekatan door-to-door yang
                  humanis, tim melakukan verifikasi faktual
                  terhadap kondisi riil rumah tangga,
                  memetakan risiko gizi buruk anak, membimbing
                  calon pengantin lewat aplikasi Elsimil,
                  serta menjembatani keluarga prasejahtera
                  dengan rujukan layanan medis di UPTD
                  Puskesmas Cikampek.
                </p>
              </div>
              <div
                class="p-5 rounded-[10px]-2xl bg-paper border border-[#E5E7EB] flex items-start gap-4-card"
              >
                <span
                  class="material-symbols-outlined text-[#0057B8] text-[28px] shrink-0 p-2 rounded-[10px]-xl bg-[#0057B8]/10"
                  >handshake</span
                >
                <div>
                  <h4
                    class="text-[15px] font-bold text-[#172033]"
                  >
                    Kemitraan Lintas Instansi
                  </h4>
                  <p
                    class="text-[13px] text-[#667085] pt-1 leading-relaxed"
                  >
                    Terkoordinasi langsung dengan BKKBN
                    Kabupaten Karawang, Dinas Pemberdayaan
                    Perempuan dan Perlindungan Anak, serta
                    Pemerintah Desa di seluruh teritori
                    Cikampek.
                  </p>
                </div>
              </div>
            </div>
            <div class="lg:col-span-6 relative">
              <div
                class="relative rounded-[15px] overflow-hidden bg-paper border border-[#E5E7EB]-card group"
              >
                <img
                  class="w-full aspect-[4/3] object-cover group-hover:scale-[1.02] transition-transform duration-500"
                  data-alt="Rombongan kader Posyandu dan TPK berseragam batik resmi KORPRI biru berjalan bersama menelusuri lorong perkampungan pemukiman warga Cikampek yang asri untuk kunjungan rumah door-to-door, berdialog hangat dengan lansia di teras rumah."
                  src="https://lh3.googleusercontent.com/aida-public/AB6AXuAJLpUwLykehb42fDy2mQgcpUOghHsCaMdami61934409TTkM7-Z2t9avxLnlP4K7jbg_FDaMl0I1tX9WaWky8zjIEnzpB0i0XMUVpJ8H_MXsQ0X3QbTkiA_gJXhY3OQMakV4kqnbSHyFcsua87BuTLBpLwHMieu5zZ_0a1mld6ftIbPlFL1MaaEWNe5vFbH0M9KUGGzU3qvveCTOQFHy1iGcTcwybyx-HoThA9M4PGgOzExS-pk7bs"
                />
              </div>
              <div
                class="mt-3 p-3.5 rounded-[10px]-xl bg-paper border border-[#E5E7EB]-card flex items-center justify-between"
              >
                <div class="flex items-center gap-2">
                  <span
                    class="material-symbols-outlined text-[#159447] text-[18px]"
                    >verified_user</span
                  ><span
                    class="text-[13px] font-semibold text-[#172033]"
                    >Verifikasi Lapangan Berkala</span
                  >
                </div>
                <span class="text-[12px] text-[#667085]"
                  >Kecamatan Cikampek, 2024</span
                >
              </div>
            </div>
          </div>
        </section>
        <!-- Program Objectives (Tujuan Program) -->
        <section
          class="w-full bg-paper border-y border-[#E5E7EB] py-12 md:py-16"
        >
          <div class="max-w-[1280px] mx-auto px-4 md:px-8">
            <div
              class="flex flex-col items-center text-center max-w-2xl mx-auto mb-10"
            >
              <span
                class="px-3 py-1 rounded-[100px] bg-[#0057B8]/10 text-[#0057B8] text-[11px] font-bold uppercase tracking-widest mb-2 border border-[#0057B8]/15"
                >Arah Kebijakan</span
              >
              <h2
                class="text-[28px] md:text-[34px] font-bold text-[#172033] tracking-tight"
              >
                Tujuan Utama Program
              </h2>
              <p class="text-[15px] text-[#667085] mt-2">
                Empat sasaran terukur yang dicapai secara
                berkesinambungan melalui intervensi langsung
                kader lapangan.
              </p>
            </div>
            <div
              class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6"
            >
              <div
                class="bg-[#F7F9FC] border border-[#E5E7EB] rounded-[10px]-2xl p-6 flex flex-col justify-between hover:border-[#0057B8]/30 transition-colors-card"
              >
                <div>
                  <span
                    class="text-[42px] text-[#0057B8]/25 font-bold block leading-none font-display"
                    >01</span
                  >
                  <h3
                    class="text-[17px] font-bold text-[#172033] mt-3"
                  >
                    Validitas Data Keluarga
                  </h3>
                  <p
                    class="text-[14px] text-[#667085] mt-2 leading-relaxed"
                  >
                    Meningkatkan akurasi dan pemutakhiran
                    data keluarga risiko stunting secara
                    berkala dan real-time di tingkat RT/RW.
                  </p>
                </div>
                <div
                  class="pt-4 mt-6 border-t border-[#E5E7EB] flex items-center gap-2 text-[#0057B8] text-[12px] font-semibold"
                >
                  <span
                    class="material-symbols-outlined text-[16px]"
                    >database</span
                  ><span class=""
                    >Sinkronisasi Data Resmi</span
                  >
                </div>
              </div>
              <div
                class="bg-[#F7F9FC] border border-[#E5E7EB] rounded-[10px]-2xl p-6 flex flex-col justify-between hover:border-[#0057B8]/30 transition-colors-card"
              >
                <div>
                  <span
                    class="text-[42px] text-[#0057B8]/25 font-bold block leading-none font-display"
                    >02</span
                  >
                  <h3
                    class="text-[17px] font-bold text-[#172033] mt-3"
                  >
                    Akses Informasi Terbuka
                  </h3>
                  <p
                    class="text-[14px] text-[#667085] mt-2 leading-relaxed"
                  >
                    Mempermudah warga memperoleh literasi
                    kesehatan reproduksi, pemenuhan gizi
                    balita, dan panduan pengasuhan anak.
                  </p>
                </div>
                <div
                  class="pt-4 mt-6 border-t border-[#E5E7EB] flex items-center gap-2 text-[#0057B8] text-[12px] font-semibold"
                >
                  <span
                    class="material-symbols-outlined text-[16px]"
                    >campaign</span
                  ><span class="">Edukasi Tatap Muka</span>
                </div>
              </div>
              <div
                class="bg-[#F7F9FC] border border-[#E5E7EB] rounded-[10px]-2xl p-6 flex flex-col justify-between hover:border-[#0057B8]/30 transition-colors-card"
              >
                <div>
                  <span
                    class="text-[42px] text-[#0057B8]/25 font-bold block leading-none font-display"
                    >03</span
                  >
                  <h3
                    class="text-[17px] font-bold text-[#172033] mt-3"
                  >
                    Pendampingan Prioritas
                  </h3>
                  <p
                    class="text-[14px] text-[#667085] mt-2 leading-relaxed"
                  >
                    Fasilitasi intensif bagi calon
                    pengantin, ibu hamil anemia/KEK, dan
                    anak di bawah 2 tahun (1.000 Hari
                    Pertama Kehidupan).
                  </p>
                </div>
                <div
                  class="pt-4 mt-6 border-t border-[#E5E7EB] flex items-center gap-2 text-[#0057B8] text-[12px] font-semibold"
                >
                  <span
                    class="material-symbols-outlined text-[16px]"
                    >support</span
                  ><span class="">Intervensi Spesifik</span>
                </div>
              </div>
              <div
                class="bg-[#F7F9FC] border border-[#E5E7EB] rounded-[10px]-2xl p-6 flex flex-col justify-between hover:border-[#0057B8]/30 transition-colors-card"
              >
                <div>
                  <span
                    class="text-[42px] text-[#0057B8]/25 font-bold block leading-none font-display"
                    >04</span
                  >
                  <h3
                    class="text-[17px] font-bold text-[#172033] mt-3"
                  >
                    Fasilitasi Rujukan Cepat
                  </h3>
                  <p
                    class="text-[14px] text-[#667085] mt-2 leading-relaxed"
                  >
                    Mengarahkan keluarga yang membutuhkan
                    penanganan medis spesialistis ke
                    Puskesmas Cikampek atau RSUD terdekat
                    secara tertib.
                  </p>
                </div>
                <div
                  class="pt-4 mt-6 border-t border-[#E5E7EB] flex items-center gap-2 text-[#0057B8] text-[12px] font-semibold"
                >
                  <span
                    class="material-symbols-outlined text-[16px]"
                    >local_hospital</span
                  ><span class="">Rujukan Faskes Pasti</span>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Target Audience / Kelompok Sasaran -->
        <section
          class="w-full px-4 md:px-8 py-12 md:py-16 max-w-[1280px] mx-auto"
        >
          <div
            class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-8"
          >
            <div>
              <div
                class="flex items-center gap-2 text-[#159447] text-[12px] uppercase font-bold tracking-widest"
              >
                <span
                  class="inline-block w-2 h-2 rounded-[100px] bg-[#159447]"
                ></span
                ><span class="">Inklusif &amp; Menyeluruh</span>
              </div>
              <h2
                class="text-[28px] md:text-[34px] font-bold text-[#172033] tracking-tight mt-1"
              >
                Siapa Saja yang Kami Dampingi?
              </h2>
            </div>
            <p class="text-[14px] text-[#667085] max-w-md">
              Pendampingan mencakup siklus kehidupan keluarga,
              mulai dari persiapan pernikahan hingga pembinaan
              lansia tangguh.
            </p>
          </div>
          <div
            class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6"
          >
            <div
              class="p-5 rounded-[10px]-2xl bg-paper border border-[#E5E7EB] flex flex-col gap-2-card hover:border-[#0057B8]/30 transition-all"
            >
              <div
                class="w-10 h-10 rounded-[10px]-xl bg-[#0057B8]/10 text-[#0057B8] flex items-center justify-center mb-1"
              >
                <span
                  class="material-symbols-outlined text-[20px]"
                  >favorite</span
                >
              </div>
              <span
                class="text-[11px] uppercase tracking-wider font-bold text-[#0057B8]"
                >Kelompok 01</span
              >
              <h4 class="text-[16px] font-bold text-[#172033]">
                Calon Pengantin (CATIN)
              </h4>
              <p
                class="text-[13px] text-[#667085] leading-relaxed"
              >
                Pemeriksaan Hb, lingkar lengan, bimbingan gizi
                pra-nikah, dan akun Elsimil.
              </p>
            </div>
            <div
              class="p-5 rounded-[10px]-2xl bg-paper border border-[#E5E7EB] flex flex-col gap-2-card hover:border-[#159447]/30 transition-all"
            >
              <div
                class="w-10 h-10 rounded-[10px]-xl bg-[#159447]/10 text-[#159447] flex items-center justify-center mb-1"
              >
                <span
                  class="material-symbols-outlined text-[20px]"
                  >pregnant_woman</span
                >
              </div>
              <span
                class="text-[11px] uppercase tracking-wider font-bold text-[#159447]"
                >Kelompok 02</span
              >
              <h4 class="text-[16px] font-bold text-[#172033]">
                Ibu Hamil &amp; Nifas
              </h4>
              <p
                class="text-[13px] text-[#667085] leading-relaxed"
              >
                Pemantauan asupan zat besi, deteksi dini
                komplikasi, serta persiapan ASI eksklusif.
              </p>
            </div>
            <div
              class="p-5 rounded-[10px]-2xl bg-paper border border-[#E5E7EB] flex flex-col gap-2-card hover:border-[#745b00]/30 transition-all"
            >
              <div
                class="w-10 h-10 rounded-[10px]-xl bg-[#cfa600]/15 text-[#745b00] flex items-center justify-center mb-1"
              >
                <span
                  class="material-symbols-outlined text-[20px]"
                  >child_care</span
                >
              </div>
              <span
                class="text-[11px] uppercase tracking-wider font-bold text-[#745b00]"
                >Kelompok 03</span
              >
              <h4 class="text-[16px] font-bold text-[#172033]">
                Bayi &amp; Balita (0-59 Bln)
              </h4>
              <p
                class="text-[13px] text-[#667085] leading-relaxed"
              >
                Monitoring tinggi badan, imunisasi dasar
                lengkap, dan pola MP-ASI bernutrisi.
              </p>
            </div>
            <div
              class="p-5 rounded-[10px]-2xl bg-paper border border-[#E5E7EB] flex flex-col gap-2-card hover:border-[#0057B8]/30 transition-all"
            >
              <div
                class="w-10 h-10 rounded-[10px]-xl bg-[#0057B8]/10 text-[#0057B8] flex items-center justify-center mb-1"
              >
                <span
                  class="material-symbols-outlined text-[20px]"
                  >diversity_1</span
                >
              </div>
              <span
                class="text-[11px] uppercase tracking-wider font-bold text-[#0057B8]"
                >Kelompok 04</span
              >
              <h4 class="text-[16px] font-bold text-[#172033]">
                Pasangan Usia Subur (PUS)
              </h4>
              <p
                class="text-[13px] text-[#667085] leading-relaxed"
              >
                Konseling pemilihan alat kontrasepsi mantap
                (MKJP/Non-MKJP) terencana.
              </p>
            </div>
            <div
              class="p-5 rounded-[10px]-2xl bg-paper border border-[#E5E7EB] flex flex-col gap-2-card hover:border-[#667085]/30 transition-all"
            >
              <div
                class="w-10 h-10 rounded-[10px]-xl bg-[#F0F3F8] text-[#172033] flex items-center justify-center mb-1"
              >
                <span
                  class="material-symbols-outlined text-[20px]"
                  >school</span
                >
              </div>
              <span
                class="text-[11px] uppercase tracking-wider font-bold text-[#667085]"
                >Kelompok 05</span
              >
              <h4 class="text-[16px] font-bold text-[#172033]">
                Remaja (PIK-R / GenRe)
              </h4>
              <p
                class="text-[13px] text-[#667085] leading-relaxed"
              >
                Pencegahan pernikahan dini, seks pra-nikah, dan
                gaya hidup sehat sebaya.
              </p>
            </div>
            <div
              class="p-5 rounded-[10px]-2xl bg-paper border border-[#E5E7EB] flex flex-col gap-2-card hover:border-[#667085]/30 transition-all"
            >
              <div
                class="w-10 h-10 rounded-[10px]-xl bg-[#F0F3F8] text-[#172033] flex items-center justify-center mb-1"
              >
                <span
                  class="material-symbols-outlined text-[20px]"
                  >elderly</span
                >
              </div>
              <span
                class="text-[11px] uppercase tracking-wider font-bold text-[#667085]"
                >Kelompok 06</span
              >
              <h4 class="text-[16px] font-bold text-[#172033]">
                Lansia (Bina Keluarga Lansia)
              </h4>
              <p
                class="text-[13px] text-[#667085] leading-relaxed"
              >
                Pemberdayaan lansia produktif, senam sehat, dan
                pemeliharaan kesehatan mental.
              </p>
            </div>
            <div
              class="p-5 rounded-[10px]-2xl bg-fogr from-[#0057B8]/5 to-[#003B7A]/5 border border-[#0057B8]/20 col-span-1 sm:grid-cols-2 lg:col-span-2 flex flex-col justify-between"
            >
              <div>
                <div
                  class="flex items-center gap-2 text-[#0057B8] font-bold"
                >
                  <span
                    class="material-symbols-outlined text-[18px]"
                    >family_restroom</span
                  ><span
                    class="text-[11px] uppercase tracking-wider"
                    >Kelompok 07</span
                  >
                </div>
                <h4
                  class="text-[16px] font-bold text-[#172033] mt-2"
                >
                  Keluarga Rentan Khusus
                </h4>
                <p
                  class="text-[13px] text-[#667085] mt-1 leading-relaxed"
                >
                  Keluarga prasejahtera, orang tua tunggal,
                  dan penyandang disabilitas yang memerlukan
                  perlindungan terpadu.
                </p>
              </div>
              <span
                class="inline-flex items-center gap-1.5 text-[12px] text-[#0057B8] font-bold pt-4"
                ><span
                  class="material-symbols-outlined text-[14px]"
                  >verified</span
                >Pelayanan Tanpa Pungutan Biaya</span
              >
            </div>
          </div>
        </section>
        <!-- Visual Journey Timeline (Alur 5 Langkah) -->
        <section
          class="w-full bg-paper border-y border-[#E5E7EB] py-12 md:py-16"
          id="alur-program"
        >
          <div class="max-w-[1280px] mx-auto px-4 md:px-8">
            <div class="flex flex-col gap-2 mb-8">
              <div
                class="flex items-center gap-2 text-[#0057B8] text-[12px] uppercase font-bold tracking-widest"
              >
                <span
                  class="inline-block w-2 h-2 rounded-[100px] bg-[#0057B8]"
                ></span
                ><span class="">Metodologi Kerja</span>
              </div>
              <h2
                class="text-[28px] md:text-[34px] font-bold text-[#172033] tracking-tight"
              >
                Bagaimana Pendampingan Berjalan?
              </h2>
              <p class="text-[15px] text-[#667085]">
                Alur kerja sistematis pendampingan dari
                pendataan awal hingga kemandirian keluarga
                binaan.
              </p>
            </div>
            <div
              class="grid grid-cols-1 md:grid-cols-5 gap-4 md:gap-5 relative"
            >
              <div
                class="p-5 rounded-[10px]-2xl bg-[#F7F9FC] border border-[#E5E7EB] flex flex-col justify-between"
              >
                <div>
                  <div
                    class="flex items-center justify-between mb-3"
                  >
                    <span
                      class="px-2.5 py-0.5 rounded-[100px] bg-[#0057B8]/10 text-[#0057B8] text-[11px] font-bold"
                      >FASE 01</span
                    ><span
                      class="material-symbols-outlined text-[#0057B8] text-[20px]"
                      >inventory_2</span
                    >
                  </div>
                  <h4
                    class="text-[16px] font-bold text-[#172033] mb-1.5"
                  >
                    Pendataan &amp; Pemetaan
                  </h4>
                  <p
                    class="text-[13px] text-[#667085] leading-relaxed"
                  >
                    Kader mencatat profil dasar anggota
                    keluarga, sanitasi rumah, dan status
                    gizi balita di lingkungan RT.
                  </p>
                </div>
                <span
                  class="text-[12px] font-medium text-[#667085] pt-4 mt-2 border-t border-[#E5E7EB]"
                  >Bulan ke-1</span
                >
              </div>
              <div
                class="p-5 rounded-[10px]-2xl bg-[#F7F9FC] border border-[#E5E7EB] flex flex-col justify-between"
              >
                <div>
                  <div
                    class="flex items-center justify-between mb-3"
                  >
                    <span
                      class="px-2.5 py-0.5 rounded-[100px] bg-[#159447]/10 text-[#159447] text-[11px] font-bold"
                      >FASE 02</span
                    ><span
                      class="material-symbols-outlined text-[#159447] text-[20px]"
                      >filter_alt</span
                    >
                  </div>
                  <h4
                    class="text-[16px] font-bold text-[#172033] mb-1.5"
                  >
                    Penapisan Risiko
                  </h4>
                  <p
                    class="text-[13px] text-[#667085] leading-relaxed"
                  >
                    Analisis data untuk menetapkan status
                    risiko stunting atau kerentanan
                    kehamilan oleh tenaga bidan/TPK.
                  </p>
                </div>
                <span
                  class="text-[12px] font-medium text-[#667085] pt-4 mt-2 border-t border-[#E5E7EB]"
                  >Penetapan Status</span
                >
              </div>
              <div
                class="p-5 rounded-[10px]-2xl bg-[#F7F9FC] border border-[#E5E7EB] flex flex-col justify-between"
              >
                <div>
                  <div
                    class="flex items-center justify-between mb-3"
                  >
                    <span
                      class="px-2.5 py-0.5 rounded-[100px] bg-[#cfa600]/20 text-[#745b00] text-[11px] font-bold"
                      >FASE 03</span
                    ><span
                      class="material-symbols-outlined text-[#745b00] text-[20px]"
                      >directions_walk</span
                    >
                  </div>
                  <h4
                    class="text-[16px] font-bold text-[#172033] mb-1.5"
                  >
                    Kunjungan Berkala
                  </h4>
                  <p
                    class="text-[13px] text-[#667085] leading-relaxed"
                  >
                    Kunjungan tatap muka terstruktur minimal
                    2 kali sebulan untuk edukasi nutrisi dan
                    pendistribusian suplemen.
                  </p>
                </div>
                <span
                  class="text-[12px] font-medium text-[#667085] pt-4 mt-2 border-t border-[#E5E7EB]"
                  >Rutin Terjadwal</span
                >
              </div>
              <div
                class="p-5 rounded-[10px]-2xl bg-[#F7F9FC] border border-[#E5E7EB] flex flex-col justify-between"
              >
                <div>
                  <div
                    class="flex items-center justify-between mb-3"
                  >
                    <span
                      class="px-2.5 py-0.5 rounded-[100px] bg-[#0057B8]/10 text-[#0057B8] text-[11px] font-bold"
                      >FASE 04</span
                    ><span
                      class="material-symbols-outlined text-[#0057B8] text-[20px]"
                      >monitoring</span
                    >
                  </div>
                  <h4
                    class="text-[16px] font-bold text-[#172033] mb-1.5"
                  >
                    Pemantauan Progres
                  </h4>
                  <p
                    class="text-[13px] text-[#667085] leading-relaxed"
                  >
                    Evaluasi kurva pertumbuhan di Posyandu
                    dan pencatatan riwayat kesehatan ibu di
                    buku KIA.
                  </p>
                </div>
                <span
                  class="text-[12px] font-medium text-[#667085] pt-4 mt-2 border-t border-[#E5E7EB]"
                  >Evaluasi Triwulan</span
                >
              </div>
              <div
                class="p-5 rounded-[10px]-2xl bg-[#159447]/10 border border-[#159447]/30 flex flex-col justify-between"
              >
                <div>
                  <div
                    class="flex items-center justify-between mb-3"
                  >
                    <span
                      class="px-2.5 py-0.5 rounded-[100px] bg-[#159447] text-white text-[11px] font-bold"
                      >FASE 05</span
                    ><span
                      class="material-symbols-outlined text-[#159447] text-[20px]"
                      >workspace_premium</span
                    >
                  </div>
                  <h4
                    class="text-[16px] font-bold text-[#172033] mb-1.5"
                  >
                    Kemandirian Warga
                  </h4>
                  <p
                    class="text-[13px] text-[#667085] leading-relaxed"
                  >
                    Keluarga mampu mempraktikkan pola hidup
                    sehat secara berdikari dan menjadi
                    rujukan keteladanan lingkungan.
                  </p>
                </div>
                <span
                  class="text-[12px] text-[#159447] font-bold pt-4 mt-2 border-t border-[#159447]/20"
                  >Keluarga Berkualitas</span
                >
              </div>
            </div>
          </div>
        </section>
        <!-- Concrete Activities & Real Services (Apa yang Kami Lakukan?) -->
        <section
          class="w-full px-4 md:px-8 py-12 md:py-16 max-w-[1280px] mx-auto"
        >
          <div class="flex flex-col gap-2 mb-8">
            <div
              class="flex items-center gap-2 text-[#0057B8] text-[12px] uppercase font-bold tracking-widest"
            >
              <span
                class="inline-block w-2 h-2 rounded-[100px] bg-[#0057B8]"
              ></span
              ><span class="">Bentuk Pelayanan Nyata</span>
            </div>
            <h2
              class="text-[28px] md:text-[34px] font-bold text-[#172033] tracking-tight"
            >
              Aktivitas di Lapangan
            </h2>
            <p class="text-[15px] text-[#667085]">
              Layanan langsung yang diterima oleh warga penerima
              manfaat di setiap dusun.
            </p>
          </div>
          <div
            class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6"
          >
            <div
              class="p-6 rounded-[10px]-2xl bg-paper border border-[#E5E7EB] flex items-start gap-4-card hover:border-[#0057B8]/30 transition-all"
            >
              <div
                class="w-12 h-12 rounded-[10px]-xl bg-[#0057B8]/10 text-[#0057B8] flex items-center justify-center shrink-0"
              >
                <span
                  class="material-symbols-outlined text-[24px]"
                  >door_front</span
                >
              </div>
              <div>
                <h4
                  class="text-[16px] font-bold text-[#172033]"
                >
                  Pendataan Door-to-Door
                </h4>
                <p
                  class="text-[13px] text-[#667085] mt-1.5 leading-relaxed"
                >
                  Petugas menyambangi rumah tangga untuk
                  mencocokkan data kartu keluarga, kepemilikan
                  jaminan kesehatan (BPJS), dan kondisi
                  sanitasi.
                </p>
              </div>
            </div>
            <div
              class="p-6 rounded-[10px]-2xl bg-paper border border-[#E5E7EB] flex items-start gap-4-card hover:border-[#159447]/30 transition-all"
            >
              <div
                class="w-12 h-12 rounded-[10px]-xl bg-[#159447]/10 text-[#159447] flex items-center justify-center shrink-0"
              >
                <span
                  class="material-symbols-outlined text-[24px]"
                  >restaurant</span
                >
              </div>
              <div>
                <h4
                  class="text-[16px] font-bold text-[#172033]"
                >
                  Edukasi Gizi Seimbang
                </h4>
                <p
                  class="text-[13px] text-[#667085] mt-1.5 leading-relaxed"
                >
                  Penyuluhan penyusunan menu harian padat gizi
                  berbasis bahan pangan lokal terjangkau
                  (telur, ikan air tawar, tahu/tempe).
                </p>
              </div>
            </div>
            <div
              class="p-6 rounded-[10px]-2xl bg-paper border border-[#E5E7EB] flex items-start gap-4-card hover:border-[#0057B8]/30 transition-all"
            >
              <div
                class="w-12 h-12 rounded-[10px]-xl bg-[#0057B8]/10 text-[#0057B8] flex items-center justify-center shrink-0"
              >
                <span
                  class="material-symbols-outlined text-[24px]"
                  >vaccines</span
                >
              </div>
              <div>
                <h4
                  class="text-[16px] font-bold text-[#172033]"
                >
                  Konseling KB Mandiri
                </h4>
                <p
                  class="text-[13px] text-[#667085] mt-1.5 leading-relaxed"
                >
                  Penjelasan komprehensif mengenai metode
                  kontrasepsi jangka panjang (IUD/Implan) yang
                  aman, higienis, dan tanpa biaya.
                </p>
              </div>
            </div>
            <div
              class="p-6 rounded-[10px]-2xl bg-paper border border-[#E5E7EB] flex items-start gap-4-card hover:border-[#745b00]/30 transition-all"
            >
              <div
                class="w-12 h-12 rounded-[10px]-xl bg-[#cfa600]/15 text-[#745b00] flex items-center justify-center shrink-0"
              >
                <span
                  class="material-symbols-outlined text-[24px]"
                  >straighten</span
                >
              </div>
              <div>
                <h4
                  class="text-[16px] font-bold text-[#172033]"
                >
                  Pemantauan Antropometri
                </h4>
                <p
                  class="text-[13px] text-[#667085] mt-1.5 leading-relaxed"
                >
                  Pengukuran standar tinggi dan berat badan
                  anak dengan alat ukur berstandar Kemenkes RI
                  di setiap pos penimbangan desa.
                </p>
              </div>
            </div>
            <div
              class="p-6 rounded-[10px]-2xl bg-paper border border-[#E5E7EB] flex items-start gap-4-card hover:border-[#ba1a1a]/30 transition-all"
            >
              <div
                class="w-12 h-12 rounded-[10px]-xl bg-[#ba1a1a]/10 text-[#ba1a1a] flex items-center justify-center shrink-0"
              >
                <span
                  class="material-symbols-outlined text-[24px]"
                  >emergency</span
                >
              </div>
              <div>
                <h4
                  class="text-[16px] font-bold text-[#172033]"
                >
                  Fasilitasi Rujukan Cepat
                </h4>
                <p
                  class="text-[13px] text-[#667085] mt-1.5 leading-relaxed"
                >
                  Pengawalan administratif bagi balita
                  berindikasi stunting berat untuk langsung
                  diperiksa dokter spesialis anak di faskes
                  lanjutan.
                </p>
              </div>
            </div>
            <div
              class="p-6 rounded-[10px]-2xl bg-paper border border-[#E5E7EB] flex items-start gap-4-card hover:border-[#172033]/30 transition-all"
            >
              <div
                class="w-12 h-12 rounded-[10px]-xl bg-[#F0F3F8] text-[#172033] flex items-center justify-center shrink-0"
              >
                <span
                  class="material-symbols-outlined text-[24px]"
                  >supervisor_account</span
                >
              </div>
              <div>
                <h4
                  class="text-[16px] font-bold text-[#172033]"
                >
                  Peningkatan Kapasitas Kader
                </h4>
                <p
                  class="text-[13px] text-[#667085] mt-1.5 leading-relaxed"
                >
                  Pelatihan berkala bagi kader TPK mengenai
                  komunikasi antarpribadi yang ramah dan
                  pencatatan digital di aplikasi SIGA.
                </p>
              </div>
            </div>
          </div>
        </section>
        <!-- Civic Impact / Citizen Benefits -->
        <section
          class="w-full bg-paper border-y border-[#E5E7EB] py-12 md:py-16"
        >
          <div class="max-w-[1280px] mx-auto px-4 md:px-8">
            <div
              class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-14 items-center"
            >
              <div class="lg:col-span-5 flex flex-col gap-4">
                <div
                  class="flex items-center gap-2 text-[#159447] text-[12px] uppercase font-bold tracking-widest"
                >
                  <span
                    class="inline-block w-2 h-2 rounded-[100px] bg-[#159447]"
                  ></span
                  ><span class="">Dampak Nyata Warga</span>
                </div>
                <h2
                  class="text-[28px] md:text-[34px] font-bold text-[#172033] tracking-tight leading-tight"
                >
                  Manfaat Langsung bagi Keluarga Cikampek
                </h2>
                <p
                  class="text-[15px] text-[#667085] leading-relaxed"
                >
                  Program ini memastikan tidak ada warga yang
                  tertinggal dalam mengakses fasilitas negara,
                  memotong birokrasi berbelit, dan menjaga
                  kerahasiaan data keluarga.
                </p>
                <div
                  class="p-5 rounded-[10px]-2xl bg-[#F7F9FC] border border-[#E5E7EB] mt-2"
                >
                  <div
                    class="flex items-center gap-2 text-[#0057B8] font-bold mb-1.5"
                  >
                    <span
                      class="material-symbols-outlined text-[20px]"
                      >sentiment_satisfied</span
                    ><span class="text-[14px]"
                      >Prinsip Pelayanan Humanis</span
                    >
                  </div>
                  <p
                    class="text-[13px] text-[#667085] leading-relaxed"
                  >
                    Setiap petugas bekerja dengan etika
                    kesopanan, menjaga privasi keluarga,
                    serta menghargai kearifan lokal di
                    masing-masing desa.
                  </p>
                </div>
              </div>
              <div class="lg:col-span-7 flex flex-col gap-3.5">
                <div
                  class="p-5 rounded-[10px]-2xl bg-[#F7F9FC] border border-[#E5E7EB] flex items-start gap-3.5-card hover:border-[#159447]/40 transition-colors"
                >
                  <span
                    class="material-symbols-outlined text-[#159447] text-[22px] shrink-0 mt-0.5"
                    >check_circle</span
                  >
                  <div>
                    <h4
                      class="text-[15px] font-bold text-[#172033]"
                    >
                      Informasi Resmi Bebas Perantara
                    </h4>
                    <p
                      class="text-[13px] text-[#667085] mt-1 leading-relaxed"
                    >
                      Warga mendapatkan penjelasan akurat
                      mengenai bantuan PMT (Pemberian
                      Makanan Tambahan), vitamin, dan
                      program bansos langsung dari kader
                      bersertifikat.
                    </p>
                  </div>
                </div>
                <div
                  class="p-5 rounded-[10px]-2xl bg-[#F7F9FC] border border-[#E5E7EB] flex items-start gap-3.5-card hover:border-[#159447]/40 transition-colors"
                >
                  <span
                    class="material-symbols-outlined text-[#159447] text-[22px] shrink-0 mt-0.5"
                    >check_circle</span
                  >
                  <div>
                    <h4
                      class="text-[15px] font-bold text-[#172033]"
                    >
                      Layanan Dekat di Depan Rumah
                    </h4>
                    <p
                      class="text-[13px] text-[#667085] mt-1 leading-relaxed"
                    >
                      Mengurangi kendala transportasi
                      terutama bagi ibu hamil tua atau ibu
                      dengan lebih dari satu balita
                      melalui jadwal kunjungan kader.
                    </p>
                  </div>
                </div>
                <div
                  class="p-5 rounded-[10px]-2xl bg-[#F7F9FC] border border-[#E5E7EB] flex items-start gap-3.5-card hover:border-[#159447]/40 transition-colors"
                >
                  <span
                    class="material-symbols-outlined text-[#159447] text-[22px] shrink-0 mt-0.5"
                    >check_circle</span
                  >
                  <div>
                    <h4
                      class="text-[15px] font-bold text-[#172033]"
                    >
                      Deteksi Masalah Sejak Dini
                    </h4>
                    <p
                      class="text-[13px] text-[#667085] mt-1 leading-relaxed"
                    >
                      Anak yang berat badannya tidak naik
                      (faltering growth) langsung
                      terpantau pada penimbangan pertama
                      sebelum memasuki status gagal
                      tumbuh.
                    </p>
                  </div>
                </div>
                <div
                  class="p-5 rounded-[10px]-2xl bg-[#F7F9FC] border border-[#E5E7EB] flex items-start gap-3.5-card hover:border-[#159447]/40 transition-colors"
                >
                  <span
                    class="material-symbols-outlined text-[#159447] text-[22px] shrink-0 mt-0.5"
                    >check_circle</span
                  >
                  <div>
                    <h4
                      class="text-[15px] font-bold text-[#172033]"
                    >
                      Advokasi Pelayanan Kesehatan Terpadu
                    </h4>
                    <p
                      class="text-[13px] text-[#667085] mt-1 leading-relaxed"
                    >
                      Membantu warga yang belum memiliki
                      jaminan kesehatan untuk mendapatkan
                      surat rekomendasi pelayanan jaminan
                      persalinan atau PBI.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Aggregate Civic Stats (Visual Ring / Metrics) -->
        <section class="w-full bg-[#F7F9FC] py-10 md:py-14">
          <div class="max-w-[1280px] mx-auto px-4 md:px-8">
            <div
              class="grid grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6 text-center"
            >
              <div
                class="p-6 rounded-[10px]-2xl bg-paper border border-[#E5E7EB] flex flex-col items-center justify-center-card"
              >
                <span
                  class="text-[36px] md:text-[44px] text-[#0057B8] font-bold leading-tight font-display"
                  >12.500+</span
                ><span
                  class="text-[12px] uppercase tracking-wider text-[#172033] font-bold mt-1.5"
                  >Keluarga Terdata</span
                ><span class="text-[12px] text-[#667085] mt-1"
                  >Basis pemutakhiran 2024</span
                >
              </div>
              <div
                class="p-6 rounded-[10px]-2xl bg-paper border border-[#E5E7EB] flex flex-col items-center justify-center-card"
              >
                <span
                  class="text-[36px] md:text-[44px] text-[#159447] font-bold leading-tight font-display"
                  >340+</span
                ><span
                  class="text-[12px] uppercase tracking-wider text-[#172033] font-bold mt-1.5"
                  >Kader Aktif Wilayah</span
                ><span class="text-[12px] text-[#667085] mt-1"
                  >Tersebar di 10 Desa</span
                >
              </div>
              <div
                class="p-6 rounded-[10px]-2xl bg-paper border border-[#E5E7EB] flex flex-col items-center justify-center-card"
              >
                <span
                  class="text-[36px] md:text-[44px] text-[#745b00] font-bold leading-tight font-display"
                  >85+</span
                ><span
                  class="text-[12px] uppercase tracking-wider text-[#172033] font-bold mt-1.5"
                  >Aksi Lapangan / Bln</span
                ><span class="text-[12px] text-[#667085] mt-1"
                  >Kunjungan rumah terstruktur</span
                >
              </div>
              <div
                class="p-6 rounded-[10px]-2xl bg-paper border border-[#E5E7EB] flex flex-col items-center justify-center-card"
              >
                <span
                  class="text-[36px] md:text-[44px] text-[#003B7A] font-bold leading-tight font-display"
                  >10</span
                ><span
                  class="text-[12px] uppercase tracking-wider text-[#172033] font-bold mt-1.5"
                  >Desa Binaan Satpel</span
                ><span class="text-[12px] text-[#667085] mt-1"
                  >Kecamatan Cikampek, Karawang</span
                >
              </div>
            </div>
          </div>
        </section>
        <!-- Related Priority Programs -->
        <section
          class="w-full px-4 md:px-8 py-12 md:py-16 max-w-[1280px] mx-auto"
        >
          <div
            class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-8"
          >
            <div>
              <div
                class="flex items-center gap-2 text-[#0057B8] text-[12px] uppercase font-bold tracking-widest"
              >
                <span
                  class="inline-block w-2 h-2 rounded-[100px] bg-[#0057B8]"
                ></span
                ><span class="">Sinergi Kebijakan</span>
              </div>
              <h2
                class="text-[28px] md:text-[34px] font-bold text-[#172033] tracking-tight mt-1"
              >
                Program Terkait yang Relevan
              </h2>
            </div>
            <a
              class="text-[14px] text-[#0057B8] font-bold hover:underline flex items-center gap-1.5"
              href="#"
              ><span class=""
                >Lihat Seluruh Direktori Program</span
              ><span class="material-symbols-outlined text-[16px]"
                >arrow_forward</span
              ></a
            >
          </div>
          <div
            class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6"
          >
            <div
              class="p-6 rounded-[10px]-2xl bg-paper border border-[#E5E7EB] flex flex-col justify-between hover:shadow-card-md hover:border-[#0057B8]/40 transition-all"
            >
              <div>
                <div
                  class="flex items-center justify-between mb-3"
                >
                  <span
                    class="px-2.5 py-0.5 rounded-[100px] bg-[#0057B8]/10 text-[#0057B8] text-[11px] font-bold"
                    >KODE: 01-CATIN</span
                  ><span
                    class="material-symbols-outlined text-[#0057B8] text-[18px]"
                    >favorite</span
                  >
                </div>
                <h4
                  class="text-[16px] font-bold text-[#172033]"
                >
                  Bimbingan Pranikah &amp; Elsimil
                </h4>
                <p
                  class="text-[13px] text-[#667085] mt-2 leading-relaxed"
                >
                  Skrining kesehatan reproduksi dan
                  pendampingan 3 bulan pra-nikah bagi calon
                  mempelai.
                </p>
              </div>
              <a
                class="pt-4 mt-6 border-t border-[#E5E7EB] flex items-center gap-1.5 text-[#0057B8] text-[13px] font-bold hover:underline"
                href="#"
                ><span class="">Lihat Detail Program</span
                ><span
                  class="material-symbols-outlined text-[14px]"
                  >arrow_forward</span
                ></a
              >
            </div>
            <div
              class="p-6 rounded-[10px]-2xl bg-paper border border-[#E5E7EB] flex flex-col justify-between hover:shadow-card-md hover:border-[#159447]/40 transition-all"
            >
              <div>
                <div
                  class="flex items-center justify-between mb-3"
                >
                  <span
                    class="px-2.5 py-0.5 rounded-[100px] bg-[#159447]/10 text-[#159447] text-[11px] font-bold"
                    >KODE: 02-BUMIL</span
                  ><span
                    class="material-symbols-outlined text-[#159447] text-[18px]"
                    >pregnant_woman</span
                  >
                </div>
                <h4
                  class="text-[16px] font-bold text-[#172033]"
                >
                  ANC Terpadu &amp; Cegah Stunting
                </h4>
                <p
                  class="text-[13px] text-[#667085] mt-2 leading-relaxed"
                >
                  Fasilitasi pemeriksaan kehamilan rutin dan
                  pemantauan asupan zat gizi mikro secara
                  intensif.
                </p>
              </div>
              <a
                class="pt-4 mt-6 border-t border-[#E5E7EB] flex items-center gap-1.5 text-[#159447] text-[13px] font-bold hover:underline"
                href="#"
                ><span class="">Lihat Detail Program</span
                ><span
                  class="material-symbols-outlined text-[14px]"
                  >arrow_forward</span
                ></a
              >
            </div>
            <div
              class="p-6 rounded-[10px]-2xl bg-paper border border-[#E5E7EB] flex flex-col justify-between hover:shadow-card-md hover:border-[#745b00]/40 transition-all"
            >
              <div>
                <div
                  class="flex items-center justify-between mb-3"
                >
                  <span
                    class="px-2.5 py-0.5 rounded-[100px] bg-[#cfa600]/20 text-[#745b00] text-[11px] font-bold"
                    >KODE: 04-PUS</span
                  ><span
                    class="material-symbols-outlined text-[#745b00] text-[18px]"
                    >family_restroom</span
                  >
                </div>
                <h4
                  class="text-[16px] font-bold text-[#172033]"
                >
                  Perencanaan Kehamilan Berjarak
                </h4>
                <p
                  class="text-[13px] text-[#667085] mt-2 leading-relaxed"
                >
                  Konseling pengaturan jarak kelahiran untuk
                  melindungi kesehatan ibu dan kualitas tumbuh
                  anak.
                </p>
              </div>
              <a
                class="pt-4 mt-6 border-t border-[#E5E7EB] flex items-center gap-1.5 text-[#745b00] text-[13px] font-bold hover:underline"
                href="#"
                ><span class="">Lihat Detail Program</span
                ><span
                  class="material-symbols-outlined text-[14px]"
                  >arrow_forward</span
                ></a
              >
            </div>
            <div
              class="p-6 rounded-[10px]-2xl bg-paper border border-[#E5E7EB] flex flex-col justify-between hover:shadow-card-md hover:border-[#003B7A]/40 transition-all"
            >
              <div>
                <div
                  class="flex items-center justify-between mb-3"
                >
                  <span
                    class="px-2.5 py-0.5 rounded-[100px] bg-[#0057B8]/10 text-[#0057B8] text-[11px] font-bold"
                    >KODE: 05-KB</span
                  ><span
                    class="material-symbols-outlined text-[#0057B8] text-[18px]"
                    >medical_services</span
                  >
                </div>
                <h4
                  class="text-[16px] font-bold text-[#172033]"
                >
                  Pelayanan MKJP Gratis
                </h4>
                <p
                  class="text-[13px] text-[#667085] mt-2 leading-relaxed"
                >
                  Pemasangan kontrasepsi IUD dan Implan
                  serentak di fasilitas kesehatan mitra
                  pemerintah.
                </p>
              </div>
              <a
                class="pt-4 mt-6 border-t border-[#E5E7EB] flex items-center gap-1.5 text-[#0057B8] text-[13px] font-bold hover:underline"
                href="#"
                ><span class="">Lihat Detail Program</span
                ><span
                  class="material-symbols-outlined text-[14px]"
                  >arrow_forward</span
                ></a
              >
            </div>
          </div>
        </section>
        <!-- Call to Action Banner (Official Civic Hotline & Assistance) -->
        <section
          class="w-full max-w-[1280px] mx-auto px-4 md:px-8 pb-12"
          id="kontak-cta"
        >
          <div
            class="rounded-[10px]-[24px] bg-fog from-[#003B7A] via-[#0057B8] to-[#003B7A] text-white p-8 md:p-12-md relative overflow-hidden"
          >
            <div
              class="flex flex-col lg:flex-row items-center justify-between gap-8 relative z-10"
            >
              <div
                class="max-w-2xl flex flex-col gap-3 text-center lg:text-left"
              >
                <div
                  class="flex items-center justify-center lg:justify-start gap-2 text-[#88faa0]"
                >
                  <span
                    class="material-symbols-outlined text-[20px]"
                    >contact_support</span
                  ><span
                    class="text-[12px] uppercase font-bold tracking-widest"
                    >Layanan Terbuka Warga</span
                  >
                </div>
                <h2
                  class="text-[28px] md:text-[34px] font-bold leading-tight"
                >
                  Butuh Pendampingan atau Ingin Mendaftarkan
                  Keluarga?
                </h2>
                <p
                  class="text-[15px] text-white/90 leading-relaxed font-normal"
                >
                  Hubungi kantor Satpel PPKB Kecamatan
                  Cikampek atau konfirmasi langsung kepada
                  kader Posyandu/TPK di rukun tetangga Anda.
                  Seluruh konsultasi tidak dipungut biaya.
                </p>
              </div>
              <div
                class="flex flex-col sm:flex-row items-center gap-3 shrink-0 w-full lg:w-auto"
              >
                <a
                  class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-[10px]-xl bg-paper text-[#003B7A] text-[15px] font-bold hover:bg-[#F0F3F8] transition-colors-card"
                  href="tel:02648371209"
                  ><span
                    class="material-symbols-outlined text-[20px] text-[#0057B8]"
                    >phone_in_talk</span
                  ><span class="">(0264) 8371-209</span></a
                ><a
                  class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-[10px]-xl bg-[#159447] text-white text-[15px] font-bold hover:bg-[#159447]/90 transition-colors-card"
                  href="https://wa.me/6281234567890"
                  rel="noopener noreferrer"
                  target="_blank"
                  ><span
                    class="material-symbols-outlined text-[20px]"
                    >chat</span
                  ><span class=""
                    >WhatsApp Siaga Satpel</span
                  ></a
                >
              </div>
            </div>
          </div>
        </section>
      </div>
      <footer
        class="w-full bg-paper border-t border-[#E5E7EB] text-[#667085] py-10 px-4 md:px-8"
      >
        <div
          class="max-w-[1280px] mx-auto flex flex-col md:flex-row items-start md:items-center justify-between gap-6"
        >
          <div class="flex flex-col gap-2">
            <div class="flex items-center gap-2 text-[#0057B8]">
              <span class="material-symbols-outlined text-[20px]"
                >call</span
              ><span class="text-[15px] font-bold text-[#172033]"
                >Hotline Siaga PPKB: (0264) 8371-209</span
              >
            </div>
            <p class="text-[13px] text-[#667085] max-w-xl">
              Satuan Pelayanan Pemberdayaan Perempuan &amp;
              Keluarga Berencana. Melayani masyarakat Kecamatan
              Cikampek terpadu, inklusif, dan profesional.
            </p>
          </div>
          <div class="flex flex-col md:items-end gap-1 text-[13px]">
            <div
              class="flex items-center gap-4 text-[#0057B8] font-medium"
            >
              <a href="#" class="hover:underline"
                >Kebijakan Privasi</a
              ><span class="text-[#E5E7EB]">•</span
              ><a href="#" class="hover:underline"
                >Standar Layanan</a
              ><span class="text-[#E5E7EB]">•</span
              ><a href="#" class="hover:underline"
                >Kontak Satpel</a
              >
            </div>
            <p class="text-[12px] text-[#667085] pt-1">
              © 2024 Satpel PPKB Kecamatan Cikampek • Hak Cipta
              Dilindungi
            </p>
          </div>
        </div>
      </footer>
    </main>
    <nav
      class="fixed bottom-0 w-full z-50 pb-safe bg-paper/95 border-t border-[#E5E7EB] md:hidden"
    >
      <div class="h-16 px-2 flex items-center justify-around">
        <a
          class="flex flex-col items-center justify-center text-[#667085] hover:text-[#0057B8] transition-colors py-1 px-3"
          href="#"
          ><span class="material-symbols-outlined text-[22px]"
            >home</span
          ><span class="text-[11px] font-medium mt-0.5"
            >Beranda</span
          ></a
        ><a
          class="flex flex-col items-center justify-center text-[#0057B8] font-bold py-1 px-3"
          href="#"
          ><span class="material-symbols-outlined text-[22px]"
            >family_restroom</span
          ><span class="text-[11px] font-bold mt-0.5"
            >Layanan</span
          ></a
        ><a
          class="flex flex-col items-center justify-center text-[#667085] hover:text-[#0057B8] transition-colors py-1 px-3"
          href="#"
          ><span class="material-symbols-outlined text-[22px]"
            >support_agent</span
          ><span class="text-[11px] font-medium mt-0.5"
            >Konsultasi</span
          ></a
        ><a
          class="flex flex-col items-center justify-center text-[#667085] hover:text-[#0057B8] transition-colors py-1 px-3"
          href="#"
          ><span class="material-symbols-outlined text-[22px]"
            >newspaper</span
          ><span class="text-[11px] font-medium mt-0.5"
            >Warta</span
          ></a
        ><a
          class="flex flex-col items-center justify-center text-[#667085] hover:text-[#0057B8] transition-colors py-1 px-3"
          href="#"
          ><span class="material-symbols-outlined text-[22px]"
            >location_on</span
          ><span class="text-[11px] font-medium mt-0.5"
            >Kontak</span
          ></a
        >
      </div>
    </nav>
  </body>
</html>
