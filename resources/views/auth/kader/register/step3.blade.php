<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Satpel PPKB Cikampek - Registrasi Langkah 3</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
      href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700&amp;display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
      rel="stylesheet"
    />
    <script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            colors: {
              tertiary: "#745b00",
              secondary: "#006d31",
              "on-tertiary-fixed-variant": "#574400",
              "secondary-fixed": "#88faa0",
              outline: "#727784",
              "primary-container": "#0057b8",
              "secondary-container": "#88faa0",
              "inverse-primary": "#adc7ff",
              "inverse-on-surface": "#eff0f9",
              "primary-fixed": "#d8e2ff",
              "on-tertiary": "#ffffff",
              "surface-bright": "#f9f9ff",
              "on-secondary-fixed": "#00210a",
              "primary-fixed-dim": "#adc7ff",
              "on-surface-variant": "#424752",
              "error-container": "#ffdad6",
              "on-primary-fixed": "#001a41",
              error: "#ba1a1a",
              "surface-container": "#ededf6",
              "surface-container-lowest": "#ffffff",
              "surface-container-high": "#e7e7f0",
              "secondary-fixed-dim": "#6cdd86",
              "inverse-surface": "#2e3037",
              "surface-container-highest": "#e1e2eb",
              "surface-container-low": "#f2f3fc",
              "on-error-container": "#93000a",
              "tertiary-container": "#cfa600",
              "surface-variant": "#e1e2eb",
              "tertiary-fixed-dim": "#f1c100",
              primary: "#00408b",
              background: "#f9f9ff",
              "on-secondary": "#ffffff",
              "surface-tint": "#0d5bbc",
              "on-primary": "#ffffff",
              "on-error": "#ffffff",
              "on-tertiary-container": "#4e3d00",
              "on-secondary-container": "#007434",
              "tertiary-fixed": "#ffe08a",
              "outline-variant": "#c2c6d4",
              "on-secondary-fixed-variant": "#005323",
              "on-tertiary-fixed": "#241a00",
              "on-surface": "#191c22",
              "on-primary-fixed-variant": "#004493",
              surface: "#f9f9ff",
              "on-background": "#191c22",
              "on-primary-container": "#bfd2ff",
              "surface-dim": "#d9d9e2",
            },
            borderRadius: {
              DEFAULT: "0.25rem",
              lg: "0.5rem",
              xl: "0.75rem",
              full: "9999px",
            },
            spacing: {
              xs: "4px",
              "container-max": "1280px",
              gutter: "24px",
              lg: "24px",
              xl: "40px",
              xxl: "64px",
              md: "16px",
              unit: "4px",
              sm: "8px",
            },
            fontFamily: {
              "display-lg": ["Plus Jakarta Sans"],
              "label-md": ["Plus Jakarta Sans"],
              "headline-md": ["Plus Jakarta Sans"],
              "headline-lg": ["Plus Jakarta Sans"],
              "display-xl": ["Plus Jakarta Sans"],
              caption: ["Plus Jakarta Sans"],
              "body-lg": ["Plus Jakarta Sans"],
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
                {
                  lineHeight: "32px",
                  fontWeight: "600",
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
                {
                  lineHeight: "16px",
                  fontWeight: "400",
                },
              ],
              "body-lg": [
                "18px",
                {
                  lineHeight: "28px",
                  fontWeight: "400",
                },
              ],
              "body-md": [
                "16px",
                {
                  lineHeight: "24px",
                  fontWeight: "400",
                },
              ],
            },
          },
        },
      };
    </script>
    <style>
      /* Base styles matching guidance */
      body {
        background-color: theme("colors.background");
        color: theme("colors.on-background");
        -webkit-font-smoothing: antialiased;
      }

      /* Custom form focus states to match premium editorial style */
      .form-input:focus,
      .form-textarea:focus,
      .form-select:focus {
        border-color: theme("colors.primary");
        box-shadow-card: none;
        border-width: 2px;
        outline: none;
      }

      /* Hide scrollbar for a cleaner look in the form area if it scrolls */
      .no-scrollbar::-webkit-scrollbar {
        display: none;
      }
      .no-scrollbar {
        -ms-overflow-style: none;
        scrollbar-width: none;
      }
    </style>
  </head>
  <body
    class="h-screen w-full flex flex-col md:flex-row overflow-hidden bg-background"
  >
    <!-- Left Side: Human-centered Image (Hidden on small mobile, visible on md+) -->
    <div
      class="hidden md:flex md:w-1/2 lg:w-[55%] relative h-full flex-col justify-end"
    >
      <div class="absolute inset-0 bg-paper-variant">
        <img
          alt="Komunitas Kader"
          class="object-cover w-full h-full mix-blend-multiply opacity-90"
          src="https://lh3.googleusercontent.com/aida/AEtjO1Wc53elpoEPVJIL-qHxrkO6KYFoAI_Qvspss9ZaL_XR98pC1l7CElub-5JirLKwX946ZRdegYtJleOXp99ShLr-yca83RtNDJH3n7qz6DO-f17F_yFwKXYyYvvQq8dlQ8D7z6TTqm51DP4SBysnFAD7X9zp7c4WGNcpl4Wz8sociFYyNWnmJ6Ipt7rehd6UTK-raCXQ9iB4dKlkq9D6C-7Cu3xLtu7MzYwoAWHXAO1OgTt3HAJJU1SeuQ"
        />
        <!-- Gradient overlay for legibility if needed, keeping it minimal -->
        <div
          class="absolute inset-0 bg-gradient-to-t from-on-surface/80 via-transparent to-transparent"
        ></div>
      </div>
      <!-- Optional contextual branding over image -->
      <div class="relative z-10 p-xxl text-white">
        <h2
          class="text-2xl font-bold text-headline-lg mb-sm text-on-tertiary"
        >
          Bersama Membangun Keluarga Berkualitas
        </h2>
        <p
          class="text-lg text-body-lg text-on-tertiary/90 max-w-lg"
        >
          Peran aktif Anda sebagai kader adalah pilar utama dalam
          menyukseskan program pembangunan keluarga, kependudukan, dan
          keluarga berencana.
        </p>
      </div>
    </div>
    <!-- Right Side: Registration Form -->
    <div
      class="w-full md:w-1/2 lg:w-[45%] h-full flex flex-col bg-paper overflow-y-auto no-scrollbar relative"
    >
      <!-- Header / Progress Area -->
      <div class="px-gutter pt-xl pb-lg flex-shrink-0">
        <!-- Back to start/brand (Optional small nav) -->
        <div class="flex items-center justify-between mb-xxl">
          <div
            class="text-sm font-medium text-label-md font-bold text-primary flex items-center gap-2"
          >
            <span class="material-symbols-outlined text-[20px]"
              >assignment</span
            >
            Satpel PPKB Cikampek
          </div>
          <!-- Progress Indicator -->
          <div class="flex items-center gap-2">
            <span
              class="font-caption text-caption text-graphite font-semibold tracking-wider"
              >LANGKAH 03/06</span
            >
            <div class="flex gap-1">
              <div
                class="h-1 w-4 bg-outline-variant rounded-[100px]"
              ></div>
              <div
                class="h-1 w-4 bg-outline-variant rounded-[100px]"
              ></div>
              <div class="h-1 w-8 bg-primary rounded-[100px]"></div>
              <div
                class="h-1 w-4 bg-outline-variant rounded-[100px]"
              ></div>
              <div
                class="h-1 w-4 bg-outline-variant rounded-[100px]"
              ></div>
              <div
                class="h-1 w-4 bg-outline-variant rounded-[100px]"
              ></div>
            </div>
          </div>
        </div>
        <div class="max-w-md mx-auto w-full">
          <h1
            class="font-display-lg text-display-lg text-ink mb-sm"
          >
            Alamat &amp; Wilayah
          </h1>
          <p
            class="text-lg text-body-lg text-graphite"
          >
            Lengkapi alamat dan wilayah kerja Anda.
          </p>
        </div>
      </div>
      <!-- Form Content -->
      <div class="px-gutter pb-xxl flex-grow flex flex-col justify-start">
        <div class="max-w-md mx-auto w-full">
          <form class="space-y-6">
            <!-- Textarea: Alamat Lengkap -->
            <div>
              <label
                class="block text-sm font-medium text-label-md text-ink mb-2"
                for="alamat"
                >Alamat Lengkap</label
              >
              <textarea
                class="w-full bg-paper-bright border border-ink rounded-[10px]-none px-4 py-3 text-[15px] text-body-md text-ink focus:border-primary focus:ring-0 transition-colors placeholder:text-graphite-variant"
                id="alamat"
                name="alamat"
                placeholder="Nama jalan, gedung, no. rumah..."
                rows="3"
              ></textarea>
            </div>
            <!-- Static Info: Kecamatan (Styling as a disabled/readonly field for civic context) -->
            <div>
              <label
                class="block text-sm font-medium text-label-md text-ink mb-2"
                >Kecamatan</label
              >
              <div
                class="w-full bg-fog border border-ink rounded-[10px]-none px-4 py-3 text-[15px] text-body-md text-graphite flex items-center justify-between"
              >
                <span>Cikampek</span>
                <span
                  class="material-symbols-outlined text-graphite-variant text-[20px]"
                  >lock</span
                >
              </div>
              <p
                class="mt-1 font-caption text-caption text-graphite-variant"
              >
                Wilayah kerja dikunci berdasarkan wilayah
                instansi.
              </p>
            </div>
            <!-- Select: Desa/Kelurahan -->
            <div>
              <label
                class="block text-sm font-medium text-label-md text-ink mb-2"
                for="desa"
                >Desa/Kelurahan</label
              >
              <div class="relative">
                <select
                  class="w-full bg-paper-bright border border-ink rounded-[10px]-none px-4 py-3 text-[15px] text-body-md text-ink focus:border-primary focus:ring-0 transition-colors appearance-none pr-10"
                  id="desa"
                  name="desa"
                >
                  <option disabled="" selected="" value="">
                    Pilih Desa/Kelurahan...
                  </option>
                  <option value="cikampek_barat">
                    Cikampek Barat
                  </option>
                  <option value="cikampek_kota">
                    Cikampek Kota
                  </option>
                  <option value="cikampek_pusaka">
                    Cikampek Pusaka
                  </option>
                  <option value="cikampek_selatan">
                    Cikampek Selatan
                  </option>
                  <option value="cikampek_timur">
                    Cikampek Timur
                  </option>
                  <option value="cikumpay">Cikumpay</option>
                  <option value="dawuan_barat">
                    Dawuan Barat
                  </option>
                  <option value="dawuan_tengah">
                    Dawuan Tengah
                  </option>
                  <option value="dawuan_timur">
                    Dawuan Timur
                  </option>
                  <option value="kalihurip">Kalihurip</option>
                  <option value="kamojing">Kamojing</option>
                  <option value="karangsinom">
                    Karangsinom
                  </option>
                </select>
                <div
                  class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-graphite"
                >
                  <span
                    class="material-symbols-outlined text-[20px]"
                    >expand_more</span
                  >
                </div>
              </div>
            </div>
            <!-- Grid for RT/RW/Dusun/Kode Pos -->
            <div class="grid grid-cols-2 gap-4">
              <div class="col-span-2">
                <label
                  class="block text-sm font-medium text-label-md text-ink mb-2"
                  for="dusun"
                  >Dusun</label
                >
                <input
                  class="w-full bg-paper-bright border border-ink rounded-[10px]-none px-4 py-3 text-[15px] text-body-md text-ink focus:border-primary focus:ring-0 transition-colors placeholder:text-graphite-variant"
                  id="dusun"
                  name="dusun"
                  placeholder="Nama Dusun/Kampung"
                  type="text"
                />
              </div>
              <div>
                <label
                  class="block text-sm font-medium text-label-md text-ink mb-2"
                  for="rt"
                  >RT</label
                >
                <input
                  class="w-full bg-paper-bright border border-ink rounded-[10px]-none px-4 py-3 text-[15px] text-body-md text-ink focus:border-primary focus:ring-0 transition-colors placeholder:text-graphite-variant"
                  id="rt"
                  name="rt"
                  placeholder="001"
                  type="text"
                />
              </div>
              <div>
                <label
                  class="block text-sm font-medium text-label-md text-ink mb-2"
                  for="rw"
                  >RW</label
                >
                <input
                  class="w-full bg-paper-bright border border-ink rounded-[10px]-none px-4 py-3 text-[15px] text-body-md text-ink focus:border-primary focus:ring-0 transition-colors placeholder:text-graphite-variant"
                  id="rw"
                  name="rw"
                  placeholder="001"
                  type="text"
                />
              </div>
              <div class="col-span-2">
                <label
                  class="block text-sm font-medium text-label-md text-ink mb-2"
                  for="kodepos"
                  >Kode Pos</label
                >
                <input
                  class="w-full bg-paper-bright border border-ink rounded-[10px]-none px-4 py-3 text-[15px] text-body-md text-ink focus:border-primary focus:ring-0 transition-colors placeholder:text-graphite-variant"
                  id="kodepos"
                  name="kodepos"
                  placeholder="41373"
                  type="text"
                />
              </div>
            </div>
          </form>
        </div>
      </div>
      <!-- Sticky Footer for Actions -->
      <div
        class="mt-auto px-gutter py-lg border-t border-ink bg-paper sticky bottom-0 z-20"
      >
        <div
          class="max-w-md mx-auto w-full flex justify-between items-center gap-4"
        >
          <button
            class="w-1/3 flex justify-center items-center py-4 px-6 border border-primary bg-transparent text-sm font-medium text-label-md text-primary hover:bg-primary-fixed transition-colors"
            type="button"
          >
            Kembali
          </button>
          <button
            class="w-2/3 flex justify-center items-center py-4 px-6 bg-primary text-sm font-medium text-label-md text-white hover:bg-primary/90 transition-colors-card"
            type="button"
          >
            Lanjutkan
          </button>
        </div>
      </div>
    </div>
  </body>
</html>
