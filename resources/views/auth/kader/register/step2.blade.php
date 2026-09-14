<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Pendaftaran Kader - Langkah 2 - Satpel PPKB Cikampek</title>
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
              "on-primary-fixed-variant": "#004493",
              "tertiary-fixed": "#ffe08a",
              "surface-bright": "#f9f9ff",
              "surface-container-high": "#e7e7f0",
              surface: "#f9f9ff",
              "outline-variant": "#c2c6d4",
              "on-background": "#191c22",
              "on-secondary-container": "#007434",
              background: "#f9f9ff",
              "secondary-fixed-dim": "#6cdd86",
              "on-surface": "#191c22",
              "tertiary-container": "#cfa600",
              "tertiary-fixed-dim": "#f1c100",
              "surface-dim": "#d9d9e2",
              "on-error": "#ffffff",
              "surface-variant": "#e1e2eb",
              "surface-container": "#ededf6",
              "surface-container-lowest": "#ffffff",
              tertiary: "#745b00",
              error: "#ba1a1a",
              "inverse-primary": "#adc7ff",
              "surface-container-low": "#f2f3fc",
              "primary-container": "#0057b8",
              secondary: "#006d31",
              "error-container": "#ffdad6",
              primary: "#00408b",
              "on-tertiary": "#ffffff",
              "on-primary": "#ffffff",
              "on-primary-fixed": "#001a41",
              outline: "#727784",
              "primary-fixed-dim": "#adc7ff",
              "on-surface-variant": "#424752",
              "inverse-on-surface": "#eff0f9",
              "primary-fixed": "#d8e2ff",
              "on-secondary-fixed-variant": "#005323",
              "on-secondary": "#ffffff",
              "surface-container-highest": "#e1e2eb",
              "secondary-fixed": "#88faa0",
              "inverse-surface": "#2e3037",
              "surface-tint": "#0d5bbc",
              "on-secondary-fixed": "#00210a",
              "on-tertiary-fixed-variant": "#574400",
              "on-primary-container": "#bfd2ff",
              "on-tertiary-container": "#4e3d00",
              "secondary-container": "#88faa0",
              "on-tertiary-fixed": "#241a00",
              "on-error-container": "#93000a",
            },
            borderRadius: {
              DEFAULT: "0.25rem",
              lg: "0.5rem",
              xl: "0.75rem",
              full: "9999px",
            },
            spacing: {
              xl: "40px",
              "container-max": "1280px",
              lg: "24px",
              unit: "4px",
              md: "16px",
              xxl: "64px",
              sm: "8px",
              xs: "4px",
              gutter: "24px",
            },
            fontFamily: {
              "body-md": ["Plus Jakarta Sans"],
              "display-xl": ["Plus Jakarta Sans"],
              "headline-md": ["Plus Jakarta Sans"],
              "headline-lg": ["Plus Jakarta Sans"],
              "body-lg": ["Plus Jakarta Sans"],
              "label-md": ["Plus Jakarta Sans"],
              caption: ["Plus Jakarta Sans"],
              "display-lg": ["Plus Jakarta Sans"],
            },
            fontSize: {
              "body-md": [
                "16px",
                { lineHeight: "24px", fontWeight: "400" },
              ],
              "display-xl": [
                "60px",
                {
                  lineHeight: "72px",
                  letterSpacing: "-0.02em",
                  fontWeight: "700",
                },
              ],
              "headline-md": [
                "24px",
                { lineHeight: "32px", fontWeight: "600" },
              ],
              "headline-lg": [
                "32px",
                {
                  lineHeight: "40px",
                  letterSpacing: "-0.01em",
                  fontWeight: "600",
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
              "display-lg": [
                "48px",
                {
                  lineHeight: "56px",
                  letterSpacing: "-0.02em",
                  fontWeight: "700",
                },
              ],
            },
          },
        },
      };
    </script>
    <style>
      body {
        font-family: "Plus Jakarta Sans", sans-serif;
      }
    </style>
  </head>
  <body class="bg-background text-on-background min-h-screen flex flex-col">
    <!-- TopNavBar -->
    <header
      class="bg-paper w-full top-0 sticky border-b-2 border-primary z-50"
    >
      <div
        class="flex justify-between items-center h-20 px-gutter max-w-container-max mx-auto"
      >
        <a
          class="text-xl font-bold text-headline-md font-bold text-primary flex items-center gap-sm"
          href="#"
        >
          Satpel PPKB Cikampek
        </a>
        <nav class="hidden md:flex gap-lg">
          <a
            class="text-graphite hover:text-primary transition-colors text-[15px] text-body-md"
            href="#"
            >Beranda</a
          >
          <a
            class="text-graphite hover:text-primary transition-colors text-[15px] text-body-md"
            href="#"
            >Layanan</a
          >
          <a
            class="text-graphite hover:text-primary transition-colors text-[15px] text-body-md"
            href="#"
            >Informasi</a
          >
          <a
            class="text-graphite hover:text-primary transition-colors text-[15px] text-body-md"
            href="#"
            >Kontak</a
          >
        </nav>
        <div class="flex items-center gap-md">
          <button
            class="text-sm font-medium text-label-md font-semibold text-primary border-2 border-primary px-md py-sm rounded-[10px]-none hover:bg-fog transition-colors"
          >
            Batal
          </button>
        </div>
      </div>
    </header>
    <main
      class="flex-grow flex items-center justify-center py-xl px-gutter"
    >
      <div
        class="max-w-5xl w-full bg-paper border border-ink rounded-[10px]-none grid grid-cols-1 md:grid-cols-2-card min-h-[600px]"
      >
        <!-- Supportive Visual Side -->
        <div
          class="hidden md:block bg-fog relative overflow-hidden border-r border-ink"
        >
          <img
            alt="Kader PKK members interacting with a citizen in a community setting, vibrant daylight, showing community service and civic duty."
            class="absolute inset-0 w-full h-full object-cover grayscale-[20%] opacity-90 mix-blend-multiply"
            src="https://lh3.googleusercontent.com/aida/AEtjO1Wc53elpoEPVJIL-qHxrkO6KYFoAI_Qvspss9ZaL_XR98pC1l7CElub-5JirLKwX946ZRdegYtJleOXp99ShLr-yca83RtNDJH3n7qz6DO-f17F_yFwKXYyYvvQq8dlQ8D7z6TTqm51DP4SBysnFAD7X9zp7c4WGNcpl4Wz8sociFYyNWnmJ6Ipt7rehd6UTK-raCXQ9iB4dKlkq9D6C-7Cu3xLtu7MzYwoAWHXAO1OgTt3HAJJU1SeuQ"
          />
          <div
            class="absolute inset-0 bg-gradient-to-t bg-primary-fixed-dim/80 to-transparent"
          ></div>
          <div
            class="absolute bottom-xl left-lg right-lg text-white-fixed"
          >
            <h2 class="text-2xl font-bold text-headline-lg mb-sm">
              Pendaftaran Kader
            </h2>
            <p
              class="text-lg text-body-lg text-white-fixed/80"
            >
              Bergabunglah bersama kami untuk memajukan
              kesejahteraan keluarga di Kecamatan Cikampek.
            </p>
          </div>
        </div>
        <!-- Form Side -->
        <div class="p-xl flex flex-col justify-between">
          <div>
            <!-- Progress Indicator -->
            <div class="mb-xl">
              <nav aria-label="Progress">
                <ol
                  class="flex items-center space-x-2"
                  role="list"
                >
                  <li>
                    <div class="flex items-center">
                      <span
                        class="flex items-center justify-center w-6 h-6 rounded-[10px]-none bg-primary text-white font-caption text-caption"
                      >
                        <span
                          class="material-symbols-outlined text-[14px]"
                          >check</span
                        >
                      </span>
                      <span
                        class="ml-2 font-caption text-caption text-primary"
                        >01 Akun</span
                      >
                    </div>
                  </li>
                  <li class="flex items-center">
                    <span class="text-graphite-variant mx-2"
                      >/</span
                    >
                  </li>
                  <li>
                    <div class="flex items-center">
                      <span
                        class="flex items-center justify-center w-6 h-6 rounded-[10px]-none bg-primary-light text-white-container font-caption text-caption font-bold border border-primary-container"
                      >
                        02
                      </span>
                      <span
                        class="ml-2 font-caption text-caption text-ink font-bold"
                        >Identitas</span
                      >
                    </div>
                  </li>
                  <li class="flex items-center">
                    <span class="text-graphite-variant mx-2"
                      >/</span
                    >
                  </li>
                  <li>
                    <div class="flex items-center">
                      <span
                        class="flex items-center justify-center w-6 h-6 rounded-[10px]-none bg-paper border border-ink text-graphite font-caption text-caption"
                      >
                        03
                      </span>
                      <span
                        class="ml-2 font-caption text-caption text-graphite"
                        >Alamat</span
                      >
                    </div>
                  </li>
                  <li class="flex items-center">
                    <span class="text-graphite-variant mx-2"
                      >/</span
                    >
                  </li>
                  <li class="hidden lg:flex items-center">
                    <span
                      class="font-caption text-caption text-graphite"
                      >04-06</span
                    >
                  </li>
                </ol>
              </nav>
            </div>
            <!-- Step Content -->
            <div class="mb-xl">
              <h1
                class="text-2xl font-bold text-headline-lg text-ink mb-xs"
              >
                Data Identitas
              </h1>
              <p
                class="text-[15px] text-body-md text-graphite"
              >
                Lengkapi data identitas Anda sesuai dengan KTP.
              </p>
            </div>
            <form action="#" class="space-y-md" method="POST">
              <!-- NIK -->
              <div>
                <label
                  class="block text-sm font-medium text-label-md text-ink mb-xs"
                  for="nik"
                  >NIK (Nomor Induk Kependudukan)</label
                >
                <input
                  class="block w-full border-ink bg-paper text-ink focus:border-primary focus:ring-1 focus:ring-primary rounded-[10px]-none text-[15px] text-body-md px-md py-sm"
                  id="nik"
                  name="nik"
                  placeholder="Masukkan 16 digit NIK"
                  type="text"
                />
              </div>
              <!-- Tempat Lahir & Tanggal Lahir -->
              <div class="grid grid-cols-1 md:grid-cols-2 gap-md">
                <div>
                  <label
                    class="block text-sm font-medium text-label-md text-ink mb-xs"
                    for="tempat-lahir"
                    >Tempat Lahir</label
                  >
                  <input
                    class="block w-full border-ink bg-paper text-ink focus:border-primary focus:ring-1 focus:ring-primary rounded-[10px]-none text-[15px] text-body-md px-md py-sm"
                    id="tempat-lahir"
                    name="tempat-lahir"
                    placeholder="Contoh: Karawang"
                    type="text"
                  />
                </div>
                <div>
                  <label
                    class="block text-sm font-medium text-label-md text-ink mb-xs"
                    for="tanggal-lahir"
                    >Tanggal Lahir</label
                  >
                  <input
                    class="block w-full border-ink bg-paper text-ink focus:border-primary focus:ring-1 focus:ring-primary rounded-[10px]-none text-[15px] text-body-md px-md py-sm"
                    id="tanggal-lahir"
                    name="tanggal-lahir"
                    type="date"
                  />
                </div>
              </div>
              <!-- Jenis Kelamin -->
              <div>
                <span
                  class="block text-sm font-medium text-label-md text-ink mb-xs"
                  >Jenis Kelamin</span
                >
                <div class="flex space-x-lg">
                  <label class="flex items-center">
                    <input
                      class="form-radio border-ink text-primary focus:ring-primary h-4 w-4"
                      name="jenis-kelamin"
                      type="radio"
                      value="Laki-laki"
                    />
                    <span
                      class="ml-sm text-[15px] text-body-md text-ink"
                      >Laki-laki</span
                    >
                  </label>
                  <label class="flex items-center">
                    <input
                      class="form-radio border-ink text-primary focus:ring-primary h-4 w-4"
                      name="jenis-kelamin"
                      type="radio"
                      value="Perempuan"
                    />
                    <span
                      class="ml-sm text-[15px] text-body-md text-ink"
                      >Perempuan</span
                    >
                  </label>
                </div>
              </div>
              <!-- Status Perkawinan & Pendidikan -->
              <div class="grid grid-cols-1 md:grid-cols-2 gap-md">
                <div>
                  <label
                    class="block text-sm font-medium text-label-md text-ink mb-xs"
                    for="status-perkawinan"
                    >Status Perkawinan</label
                  >
                  <select
                    class="block w-full border-ink bg-paper text-ink focus:border-primary focus:ring-1 focus:ring-primary rounded-[10px]-none text-[15px] text-body-md px-md py-sm"
                    id="status-perkawinan"
                    name="status-perkawinan"
                  >
                    <option
                      disabled=""
                      selected=""
                      value=""
                    >
                      Pilih Status
                    </option>
                    <option value="Belum Kawin">
                      Belum Kawin
                    </option>
                    <option value="Kawin">Kawin</option>
                    <option value="Cerai Hidup">
                      Cerai Hidup
                    </option>
                    <option value="Cerai Mati">
                      Cerai Mati
                    </option>
                  </select>
                </div>
                <div>
                  <label
                    class="block text-sm font-medium text-label-md text-ink mb-xs"
                    for="pendidikan"
                    >Pendidikan Terakhir</label
                  >
                  <select
                    class="block w-full border-ink bg-paper text-ink focus:border-primary focus:ring-1 focus:ring-primary rounded-[10px]-none text-[15px] text-body-md px-md py-sm"
                    id="pendidikan"
                    name="pendidikan"
                  >
                    <option
                      disabled=""
                      selected=""
                      value=""
                    >
                      Pilih Pendidikan
                    </option>
                    <option value="SD">SD/Sederajat</option>
                    <option value="SMP">
                      SMP/Sederajat
                    </option>
                    <option value="SMA">
                      SMA/Sederajat
                    </option>
                    <option value="D3">Diploma III</option>
                    <option value="S1">
                      S1/Diploma IV
                    </option>
                    <option value="S2">S2</option>
                  </select>
                </div>
              </div>
              <!-- Pekerjaan -->
              <div>
                <label
                  class="block text-sm font-medium text-label-md text-ink mb-xs"
                  for="pekerjaan"
                  >Pekerjaan</label
                >
                <input
                  class="block w-full border-ink bg-paper text-ink focus:border-primary focus:ring-1 focus:ring-primary rounded-[10px]-none text-[15px] text-body-md px-md py-sm"
                  id="pekerjaan"
                  name="pekerjaan"
                  placeholder="Contoh: Wiraswasta"
                  type="text"
                />
              </div>
            </form>
          </div>
          <!-- Form Actions -->
          <div
            class="mt-xl flex justify-between items-center pt-md border-t border-ink"
          >
            <button
              class="text-sm font-medium text-label-md font-semibold text-primary px-lg py-sm border border-transparent hover:border-primary transition-colors rounded-[10px]-none"
              type="button"
            >
              Kembali
            </button>
            <button
              class="text-sm font-medium text-label-md font-semibold bg-primary text-white px-lg py-sm rounded-[10px]-none hover:bg-primary-dark hover:text-white-container transition-colors-card"
              type="button"
            >
              Lanjutkan
            </button>
          </div>
        </div>
      </div>
    </main>
    <!-- Footer -->
    <footer
      class="bg-fogest w-full mt-auto border-t border-ink"
    >
      <div
        class="grid grid-cols-1 md:grid-cols-4 gap-lg py-xl px-gutter max-w-container-max mx-auto"
      >
        <div class="col-span-1 md:col-span-2">
          <h3
            class="text-lg font-bold text-headline-sm font-bold text-primary mb-sm"
          >
            Satpel PPKB Cikampek
          </h3>
          <p
            class="font-caption text-caption text-graphite"
          >
            © 2024 Satpel PPKB Kecamatan Cikampek. Hak Cipta
            Dilindungi.
          </p>
        </div>
        <div
          class="col-span-1 md:col-span-2 flex justify-start md:justify-end gap-lg"
        >
          <a
            class="font-caption text-caption text-graphite hover:text-primary transition-colors cursor-pointer"
            href="#"
            >Kebijakan Privasi</a
          >
          <a
            class="font-caption text-caption text-graphite hover:text-primary transition-colors cursor-pointer"
            href="#"
            >Syarat &amp; Ketentuan</a
          >
          <a
            class="font-caption text-caption text-graphite hover:text-primary transition-colors cursor-pointer"
            href="#"
            >Bantuan</a
          >
          <a
            class="font-caption text-caption text-graphite hover:text-primary transition-colors cursor-pointer"
            href="#"
            >Peta Situs</a
          >
        </div>
      </div>
    </footer>
  </body>
</html>
