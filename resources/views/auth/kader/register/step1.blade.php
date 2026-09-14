<!DOCTYPE html>

<html lang="id">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Pendaftaran Kader - Satpel PPKB Cikampek</title>
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
  <body
    class="bg-paper min-h-screen flex flex-col text-[15px] text-ink"
  >
    <!-- TopNavBar component logic says to hide navigation for transactional pages like Sign-up. 
     Suppressing main TopNavBar for this focused registration flow. -->
    <main class="flex-grow flex w-full">
      <!-- Sidebar - Visual Branding -->
      <aside
        class="hidden lg:block lg:w-1/3 xl:w-2/5 bg-fog border-r border-ink relative overflow-hidden flex-shrink-0"
      >
        <div class="absolute inset-0 z-0">
          <img
            alt="Visual Pendukung Satpel PPKB Cikampek"
            class="w-full h-full object-cover opacity-80 mix-blend-multiply"
            src="https://lh3.googleusercontent.com/aida/AEtjO1XSqh6RGm-WuzJDsouK7jy01j1bKv9NkAl_AI2zJt7j2jvwqvelUvhx-w5jCJU308hNRk7M0zAcilHnouThLAJqyZbdqwwmSAeAseDsHWBThcz3xfG1rPvGLMKRYSFfboO1LiyTlUv-JYe0m27f4R3wAlyhlb0GJrp1_9WQCoOPpRuA360Hg8jYhX8wr9p8l7toEvaPC7LkAGfcpY2y1oz35nGlxOjk5zNlgQ_ULnouaKUEy_qV97RnD1I"
          />
        </div>
        <div
          class="relative z-10 p-xl h-full flex flex-col justify-between bg-gradient-to-t from-surface-container-high/90 to-transparent"
        >
          <div>
            <h1
              class="text-2xl font-bold text-headline-lg text-primary font-bold mb-md"
            >
              Satpel PPKB Cikampek
            </h1>
            <p
              class="text-[15px] text-body-md text-graphite"
            >
              Sistem Informasi Pendaftaran &amp; Manajemen Kader
            </p>
          </div>
          <div
            class="bg-paper/80 p-lg border border-ink rounded-[10px]-DEFAULT"
          >
            <h3
              class="text-sm font-medium text-label-md text-primary font-bold mb-sm"
            >
              Peran Penting Kader
            </h3>
            <p class="text-[15px] text-body-md text-ink">
              Kader adalah ujung tombak pelayanan kesehatan dan
              keluarga berencana di tingkat desa. Bergabunglah
              bersama kami untuk membangun keluarga sejahtera.
            </p>
          </div>
        </div>
      </aside>
      <!-- Main Content - Registration Form -->
      <section
        class="flex-1 flex flex-col justify-center items-center p-md md:p-xl lg:px-xxl w-full max-w-3xl mx-auto overflow-y-auto"
      >
        <div class="w-full">
          <!-- Mobile Header (Visible only on small screens) -->
          <div class="lg:hidden mb-lg text-center">
            <h1
              class="text-xl font-bold text-headline-md text-primary font-bold"
            >
              Satpel PPKB Cikampek
            </h1>
          </div>
          <!-- Progress Indicator -->
          <div class="mb-xl">
            <p
              class="font-caption text-caption text-graphite uppercase tracking-wider mb-sm"
            >
              Langkah 1 dari 6
            </p>
            <div
              class="flex items-center gap-sm overflow-x-auto pb-sm hide-scrollbar"
            >
              <div class="flex items-center">
                <div
                  class="w-8 h-8 rounded-[100px] bg-primary-light text-white text-sm font-medium text-label-md flex items-center justify-center font-bold"
                >
                  01
                </div>
                <span
                  class="ml-sm text-sm font-medium text-label-md text-primary font-bold whitespace-nowrap hidden sm:inline"
                  >Akun</span
                >
              </div>
              <div
                class="w-8 h-[2px] bg-outline-variant flex-shrink-0 mx-sm"
              ></div>
              <div class="flex items-center opacity-50">
                <div
                  class="w-8 h-8 rounded-[100px] border border-ink text-ink text-sm font-medium text-label-md flex items-center justify-center"
                >
                  02
                </div>
                <span
                  class="ml-sm text-sm font-medium text-label-md text-ink whitespace-nowrap hidden sm:inline"
                  >Identitas</span
                >
              </div>
              <div
                class="w-8 h-[2px] bg-outline-variant flex-shrink-0 mx-sm opacity-50"
              ></div>
              <div class="flex items-center opacity-50">
                <div
                  class="w-8 h-8 rounded-[100px] border border-ink text-ink text-sm font-medium text-label-md flex items-center justify-center"
                >
                  03
                </div>
              </div>
              <div
                class="w-8 h-[2px] bg-outline-variant flex-shrink-0 mx-sm opacity-50"
              ></div>
              <div class="flex items-center opacity-50">
                <div
                  class="w-8 h-8 rounded-[100px] border border-ink text-ink text-sm font-medium text-label-md flex items-center justify-center"
                >
                  04
                </div>
              </div>
              <div
                class="w-8 h-[2px] bg-outline-variant flex-shrink-0 mx-sm opacity-50"
              ></div>
              <div class="flex items-center opacity-50">
                <div
                  class="w-8 h-8 rounded-[100px] border border-ink text-ink text-sm font-medium text-label-md flex items-center justify-center"
                >
                  05
                </div>
              </div>
              <div
                class="w-8 h-[2px] bg-outline-variant flex-shrink-0 mx-sm opacity-50"
              ></div>
              <div class="flex items-center opacity-50">
                <div
                  class="w-8 h-8 rounded-[100px] border border-ink text-ink text-sm font-medium text-label-md flex items-center justify-center"
                >
                  06
                </div>
              </div>
            </div>
          </div>
          <!-- Form Header -->
          <div class="mb-lg">
            <h2
              class="text-2xl font-bold text-headline-lg text-ink mb-sm"
            >
              Buat Akun Kader
            </h2>
            <p
              class="text-[15px] text-body-md text-graphite"
            >
              Daftarkan akun Anda untuk mengajukan diri sebagai
              kader Satpel PPKB Kecamatan Cikampek.
            </p>
          </div>
          <!-- Form Container -->
          <div
            class="bg-paper border border-ink p-lg md:p-xl rounded-[10px]-DEFAULT-card"
          >
            <form action="#" class="space-y-lg" method="POST">
              <!-- Nama Lengkap -->
              <div>
                <label
                  class="block text-sm font-medium text-label-md text-ink mb-xs"
                  for="fullName"
                  >Nama Lengkap</label
                >
                <input
                  class="w-full border-ink focus:border-primary focus:ring-primary focus:ring-1 rounded-[10px]-DEFAULT p-sm text-[15px] text-body-md bg-paper-bright transition-colors"
                  id="fullName"
                  name="fullName"
                  placeholder="Masukkan nama lengkap sesuai KTP"
                  required=""
                  type="text"
                />
              </div>
              <!-- Email & WhatsApp Row -->
              <div class="grid grid-cols-1 md:grid-cols-2 gap-lg">
                <div>
                  <label
                    class="block text-sm font-medium text-label-md text-ink mb-xs"
                    for="email"
                    >Email Aktif</label
                  >
                  <input
                    class="w-full border-ink focus:border-primary focus:ring-primary focus:ring-1 rounded-[10px]-DEFAULT p-sm text-[15px] text-body-md bg-paper-bright transition-colors"
                    id="email"
                    name="email"
                    placeholder="contoh@email.com"
                    required=""
                    type="email"
                  />
                </div>
                <div>
                  <label
                    class="block text-sm font-medium text-label-md text-ink mb-xs"
                    for="whatsapp"
                    >Nomor WhatsApp</label
                  >
                  <div class="relative">
                    <span
                      class="absolute inset-y-0 left-0 flex items-center pl-sm text-graphite text-[15px] text-body-md"
                      >+62</span
                    >
                    <input
                      class="w-full pl-12 border-ink focus:border-primary focus:ring-primary focus:ring-1 rounded-[10px]-DEFAULT p-sm text-[15px] text-body-md bg-paper-bright transition-colors"
                      id="whatsapp"
                      name="whatsapp"
                      placeholder="81234567890"
                      required=""
                      type="tel"
                    />
                  </div>
                </div>
              </div>
              <!-- Password -->
              <div>
                <label
                  class="block text-sm font-medium text-label-md text-ink mb-xs"
                  for="password"
                  >Password</label
                >
                <div class="relative">
                  <input
                    class="w-full border-ink focus:border-primary focus:ring-primary focus:ring-1 rounded-[10px]-DEFAULT p-sm pr-10 text-[15px] text-body-md bg-paper-bright transition-colors"
                    id="password"
                    name="password"
                    placeholder="Masukkan password"
                    required=""
                    type="password"
                  />
                  <button
                    aria-label="Toggle password visibility"
                    class="absolute inset-y-0 right-0 pr-sm flex items-center text-graphite hover:text-primary transition-colors"
                    type="button"
                  >
                    <span
                      class="material-symbols-outlined text-[20px]"
                      >visibility_off</span
                    >
                  </button>
                </div>
                <p
                  class="mt-xs font-caption text-caption text-graphite flex items-center gap-xs"
                >
                  <span
                    class="material-symbols-outlined text-[14px]"
                    >info</span
                  >
                  Gunakan password minimal 8 karakter.
                </p>
              </div>
              <!-- Konfirmasi Password -->
              <div>
                <label
                  class="block text-sm font-medium text-label-md text-ink mb-xs"
                  for="confirmPassword"
                  >Konfirmasi Password</label
                >
                <div class="relative">
                  <input
                    class="w-full border-ink focus:border-primary focus:ring-primary focus:ring-1 rounded-[10px]-DEFAULT p-sm pr-10 text-[15px] text-body-md bg-paper-bright transition-colors"
                    id="confirmPassword"
                    name="confirmPassword"
                    placeholder="Ulangi password"
                    required=""
                    type="password"
                  />
                  <button
                    aria-label="Toggle password visibility"
                    class="absolute inset-y-0 right-0 pr-sm flex items-center text-graphite hover:text-primary transition-colors"
                    type="button"
                  >
                    <span
                      class="material-symbols-outlined text-[20px]"
                      >visibility_off</span
                    >
                  </button>
                </div>
              </div>
              <!-- Submit Area -->
              <div
                class="pt-md border-t border-ink mt-xl flex flex-col md:flex-row items-center justify-between gap-md"
              >
                <a
                  class="text-[15px] text-body-md text-graphite hover:text-primary transition-colors order-2 md:order-1"
                  href="#"
                >
                  Sudah punya akun?
                  <span
                    class="font-bold text-primary underline"
                    >Masuk</span
                  >
                </a>
                <button
                  class="w-full md:w-auto bg-primary-light hover:bg-primary-dark/90 text-white text-sm font-medium text-label-md py-sm px-xl rounded-[10px]-DEFAULT transition-colors order-1 md:order-2 flex items-center justify-center gap-xs"
                  type="submit"
                >
                  Lanjutkan
                  <span
                    class="material-symbols-outlined text-[18px]"
                    >arrow_forward</span
                  >
                </button>
              </div>
            </form>
          </div>
        </div>
      </section>
    </main>
    <!-- Suppress Footer for Transactional Registration Flow -->
  </body>
</html>
