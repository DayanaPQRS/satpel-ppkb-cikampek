<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Satpel PPKB Cikampek - Registrasi Kader - Langkah 4</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
      href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;display=swap"
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
      /* Custom scrollbar for multi-select if needed */
      ::-webkit-scrollbar {
        width: 6px;
      }
      ::-webkit-scrollbar-track {
        background: transparent;
      }
      ::-webkit-scrollbar-thumb {
        background: #c2c6d4;
        border-radius: 4px;
      }
      ::-webkit-scrollbar-thumb:hover {
        background: #727784;
      }
    </style>
  </head>
  <body
    class="bg-paper text-ink antialiased min-h-screen flex flex-col font-sans"
  >
    <!-- Notice: Suppressing Navigation Shell because this is a Transactional/Linear flow (Registration Step 4) -->
    <main class="flex-grow flex flex-col md:flex-row w-full min-h-screen">
      <!-- Left Column: Hero Image (Hidden on Mobile) -->
      <div
        class="hidden md:block w-full md:w-5/12 lg:w-1/2 relative bg-fog"
      >
        <img
          alt="Community Education Session in Cikampek"
          class="absolute inset-0 w-full h-full object-cover"
          src="https://lh3.googleusercontent.com/aida/AEtjO1UdRCaeuTOaEUlG7sErQ5Xz_kiaozMT0i_yu9VMPlneawyeaOmtLwRsMoPDnWG1g_VjLuLIA4AqCb1n2EWKsdUb8CLh_91RsdCKVQvTcxQ02Sn7SQ8J5BDOCacEciNP5TZPvZSXmfHzHzryA6HTPFdB0JRr8ngGBNrcDPX7aOy1-Tx1Fnz_8TjZsTCvqF-3tZTFsBULqVsUut3NeI9YnjLb6MZ2qNbRsQ0_iYqg_2OvI5OPecW11ux10A"
        />
        <!-- Subtle gradient overlay to anchor any text if added later, or just for mood -->
        <div
          class="absolute inset-0 bg-gradient-to-t from-on-surface/40 to-transparent"
        ></div>
        <div class="absolute bottom-xl left-lg right-lg text-white">
          <h2
            class="text-xl font-bold text-headline-md text-white mb-sm"
          >
            Membangun Keluarga Berkualitas
          </h2>
          <p
            class="text-[15px] text-body-md text-white opacity-90 max-w-md"
          >
            Kader adalah ujung tombak penggerak masyarakat. Bersama,
            kita wujudkan generasi yang sehat dan cerdas di
            Kecamatan Cikampek.
          </p>
        </div>
      </div>
      <!-- Right Column: Registration Form -->
      <div
        class="w-full md:w-7/12 lg:w-1/2 flex flex-col bg-paper justify-center items-center py-xxl px-gutter"
      >
        <div
          class="w-full max-w-lg flex flex-col h-full justify-center"
        >
          <!-- Brand & Progress (Mobile friendly) -->
          <div class="mb-xl">
            <div
              class="text-lg font-bold text-headline-sm font-bold text-primary mb-lg flex items-center gap-2"
            >
              <span
                class="material-symbols-outlined"
                data-icon="hub"
                >hub</span
              >
              Satpel PPKB Cikampek
            </div>
            <div class="flex items-center gap-xs mb-sm">
              <div
                class="h-1 flex-1 bg-primary rounded-[100px]"
              ></div>
              <div
                class="h-1 flex-1 bg-primary rounded-[100px]"
              ></div>
              <div
                class="h-1 flex-1 bg-primary rounded-[100px]"
              ></div>
              <div
                class="h-1 flex-1 bg-primary rounded-[100px]"
              ></div>
              <div
                class="h-1 flex-1 bg-paper-variant rounded-[100px]"
              ></div>
              <div
                class="h-1 flex-1 bg-paper-variant rounded-[100px]"
              ></div>
            </div>
            <div
              class="font-caption text-caption text-graphite"
            >
              Langkah 04 / 06
            </div>
          </div>
          <!-- Form Header -->
          <div class="mb-xl">
            <h1
              class="font-display-lg text-display-lg text-ink mb-sm"
            >
              Data Kader
            </h1>
            <p
              class="text-[15px] text-body-md text-graphite"
            >
              Ceritakan sedikit mengenai pengalaman dan aktivitas
              kader Anda.
            </p>
          </div>
          <!-- Form Fields -->
          <form
            class="space-y-lg flex-grow flex flex-col justify-center"
          >
            <div class="space-y-lg">
              <!-- Status Kader -->
              <div>
                <label
                  class="block text-sm font-medium text-label-md text-ink mb-xs"
                  for="status-kader"
                  >Status Kader</label
                >
                <div class="relative">
                  <select
                    class="block w-full bg-paper border border-ink text-ink text-[15px] text-body-md rounded-[10px]-none px-md py-sm h-12 focus:border-primary focus:border-2 focus:ring-0 appearance-none transition-all outline-none"
                    id="status-kader"
                    name="status-kader"
                  >
                    <option
                      disabled=""
                      selected=""
                      value=""
                    >
                      Pilih status kader Anda
                    </option>
                    <option value="aktif">
                      Kader Aktif
                    </option>
                    <option value="nonaktif">
                      Kader Non-Aktif (Cuti)
                    </option>
                    <option value="baru">
                      Kader Baru (Belum pernah bertugas)
                    </option>
                  </select>
                  <div
                    class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-md text-graphite"
                  >
                    <span
                      class="material-symbols-outlined"
                      data-icon="expand_more"
                      >expand_more</span
                    >
                  </div>
                </div>
              </div>
              <!-- Wilayah Kerja -->
              <div>
                <label
                  class="block text-sm font-medium text-label-md text-ink mb-xs"
                  for="wilayah-kerja"
                  >Wilayah Kerja</label
                >
                <div class="relative">
                  <select
                    class="block w-full bg-paper border border-ink text-ink text-[15px] text-body-md rounded-[10px]-none px-md py-sm h-12 focus:border-primary focus:border-2 focus:ring-0 appearance-none transition-all outline-none"
                    id="wilayah-kerja"
                    name="wilayah-kerja"
                  >
                    <option
                      disabled=""
                      selected=""
                      value=""
                    >
                      Pilih desa/kelurahan
                    </option>
                    <option value="cikampek-kota">
                      Cikampek Kota
                    </option>
                    <option value="cikampek-timur">
                      Cikampek Timur
                    </option>
                    <option value="cikampek-selatan">
                      Cikampek Selatan
                    </option>
                    <option value="cikampek-pusaka">
                      Cikampek Pusaka
                    </option>
                    <option value="dawuan-timur">
                      Dawuan Timur
                    </option>
                    <option value="dawuan-tengah">
                      Dawuan Tengah
                    </option>
                    <option value="dawuan-barat">
                      Dawuan Barat
                    </option>
                    <option value="kalihurip">
                      Kalihurip
                    </option>
                    <option value="kamojing">
                      Kamojing
                    </option>
                    <option value="karangsinom">
                      Karangsinom
                    </option>
                  </select>
                  <div
                    class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-md text-graphite"
                  >
                    <span
                      class="material-symbols-outlined"
                      data-icon="expand_more"
                      >expand_more</span
                    >
                  </div>
                </div>
              </div>
              <!-- Pengalaman sebagai Kader -->
              <div>
                <label
                  class="block text-sm font-medium text-label-md text-ink mb-xs"
                  for="pengalaman"
                  >Pengalaman sebagai Kader</label
                >
                <div class="relative">
                  <select
                    class="block w-full bg-paper border border-ink text-ink text-[15px] text-body-md rounded-[10px]-none px-md py-sm h-12 focus:border-primary focus:border-2 focus:ring-0 appearance-none transition-all outline-none"
                    id="pengalaman"
                    name="pengalaman"
                  >
                    <option
                      disabled=""
                      selected=""
                      value=""
                    >
                      Pilih lama pengalaman
                    </option>
                    <option value="0">&lt; 1 Tahun</option>
                    <option value="1-3">1 - 3 Tahun</option>
                    <option value="3-5">3 - 5 Tahun</option>
                    <option value="5+">&gt; 5 Tahun</option>
                  </select>
                  <div
                    class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-md text-graphite"
                  >
                    <span
                      class="material-symbols-outlined"
                      data-icon="expand_more"
                      >expand_more</span
                    >
                  </div>
                </div>
              </div>
              <!-- Organisasi/Lembaga -->
              <div>
                <label
                  class="block text-sm font-medium text-label-md text-ink mb-xs"
                  for="organisasi"
                  >Organisasi/Lembaga</label
                >
                <input
                  class="block w-full bg-paper border border-ink text-ink text-[15px] text-body-md rounded-[10px]-none px-md py-sm h-12 focus:border-primary focus:border-2 focus:ring-0 transition-all outline-none placeholder:text-graphite"
                  id="organisasi"
                  name="organisasi"
                  placeholder="Contoh: Posyandu, PKK, BKB, atau lainnya"
                  type="text"
                />
              </div>
              <!-- Nomor WhatsApp Aktif -->
              <div>
                <label
                  class="block text-sm font-medium text-label-md text-ink mb-xs"
                  for="whatsapp"
                  >Nomor WhatsApp Aktif</label
                >
                <input
                  class="block w-full bg-paper border border-ink text-ink text-[15px] text-body-md rounded-[10px]-none px-md py-sm h-12 focus:border-primary focus:border-2 focus:ring-0 transition-all outline-none placeholder:text-graphite"
                  id="whatsapp"
                  name="whatsapp"
                  placeholder="Contoh: 081234567890"
                  type="tel"
                />
              </div>
              <!-- Catatan Tambahan -->
              <div>
                <label
                  class="block text-sm font-medium text-label-md text-ink mb-xs"
                  for="catatan"
                  >Catatan Tambahan (Opsional)</label
                >
                <textarea
                  class="block w-full bg-paper border border-ink text-ink text-[15px] text-body-md rounded-[10px]-none px-md py-sm focus:border-primary focus:border-2 focus:ring-0 transition-all outline-none placeholder:text-graphite resize-none"
                  id="catatan"
                  name="catatan"
                  placeholder="Tuliskan jika ada informasi tambahan mengenai spesialisasi Anda..."
                  rows="3"
                ></textarea>
              </div>
            </div>
            <!-- Action Buttons -->
            <div
              class="flex flex-col sm:flex-row gap-sm pt-xl mt-auto"
            >
              <button
                class="flex-1 px-lg py-md border border-primary text-primary text-sm font-medium text-label-md rounded-[10px]-none hover:bg-primary/5 transition-colors focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2"
                type="button"
              >
                Kembali
              </button>
              <button
                class="flex-1 px-lg py-md bg-primary-light text-white text-sm font-medium text-label-md rounded-[10px]-none hover:bg-primary transition-colors focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2"
                type="submit"
              >
                Lanjutkan
              </button>
            </div>
          </form>
        </div>
      </div>
    </main>
  </body>
</html>
