<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta
            content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover"
            name="viewport"
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
        <style>
            @layer base {
                body {
                    -webkit-tap-highlight-color: transparent;
                    scroll-behavior: smooth;
                }
                .pb-safe {
                    padding-bottom: env(safe-area-inset-bottom, 0px);
                }
                .pt-safe {
                    padding-top: env(safe-area-inset-top, 0px);
                }
            }
            .no-scrollbar::-webkit-scrollbar {
                display: none;
            }
            .no-scrollbar {
                -ms-overflow-style: none;
                scrollbar-width: none;
            }
        </style>
    </head>
    <body class="bg-background text-on-surface font-body-md">
        <header
            class="fixed top-0 w-full z-50 bg-surface/80 backdrop-blur-xl pt-safe shadow-[0_1px_8px_rgba(0,0,0,0.04)]"
        >
            <div class="h-16 flex items-center justify-between px-lg">
                <div class="flex items-center gap-sm">
                    <div
                        class="w-8 h-8 bg-primary-container flex items-center justify-center"
                    >
                        <span
                            class="material-symbols-outlined text-on-primary-container text-[20px]"
                            >account_balance</span
                        >
                    </div>
                    <h1
                        class="font-headline-md text-headline-md tracking-tight text-primary"
                    >
                        Dashboard
                    </h1>
                </div>
                <div class="flex items-center gap-xs">
                    <button
                        class="w-11 h-11 flex items-center justify-center text-on-surface-variant hover:bg-surface-container transition-colors"
                    >
                        <span class="material-symbols-outlined"
                            >notifications</span
                        >
                    </button>
                    <div
                        class="w-8 h-8 rounded-full bg-primary flex items-center justify-center ml-xs"
                    >
                        <span
                            class="material-symbols-outlined text-on-primary text-[18px]"
                            >person</span
                        >
                    </div>
                </div>
            </div>
        </header>
        <main class="pt-16 pb-xxl min-h-screen bg-surface">
            <div class="flex flex-col w-full">
                <!-- Desktop 2-Column Dashboard Shell Layout -->
                <div class="w-full flex min-h-[calc(100vh-4rem)]">
                    <!-- Left Sidebar for Satpel PPKB Kader -->
                    <aside
                        class="w-72 bg-surface-container-lowest shrink-0 hidden lg:flex flex-col justify-between py-6 px-4 shadow-[1px_0_0_0_rgba(114,119,132,0.12)]"
                    >
                        <div class="space-y-6">
                            <!-- Satpel Badge Banner -->
                            <div
                                class="bg-primary/5 p-3 rounded flex items-center gap-3"
                            >
                                <div
                                    class="w-10 h-10 bg-primary text-on-primary rounded flex items-center justify-center font-headline-md text-headline-md"
                                >
                                    <span
                                        class="material-symbols-outlined text-[22px]"
                                        >diversity_1</span
                                    >
                                </div>
                                <div class="min-w-0">
                                    <p
                                        class="font-label-md text-label-md text-primary font-bold uppercase tracking-wider truncate"
                                    >
                                        Kader PPKB
                                    </p>
                                    <p
                                        class="font-caption text-caption text-on-surface-variant truncate"
                                    >
                                        Kec. Cikampek, Karawang
                                    </p>
                                </div>
                            </div>
                            <!-- Primary Navigation -->
                            <nav class="space-y-1">
                                <span
                                    class="font-caption text-caption uppercase tracking-widest text-on-surface-variant/70 px-3 block mb-2 font-semibold"
                                    >Menu Utama</span
                                >
                                <a
                                    class="flex items-center gap-3 px-3 py-2.5 rounded text-on-surface-variant hover:bg-surface-container transition-colors font-label-md text-label-md"
                                    href="#"
                                >
                                    <span
                                        class="material-symbols-outlined text-[20px]"
                                        >dashboard</span
                                    >
                                    <span>Dashboard</span>
                                </a>
                                <!-- Active Menu Item: Data Keluarga -->
                                <a
                                    class="flex items-center gap-3 px-3 py-2.5 rounded bg-primary text-on-primary shadow-sm font-label-md text-label-md"
                                    href="#"
                                >
                                    <span
                                        class="material-symbols-outlined text-[20px]"
                                        style="
                                            font-variation-settings: &quot;FILL&quot;
                                                1;
                                        "
                                        >group</span
                                    >
                                    <span class="font-bold">Data Keluarga</span>
                                    <span
                                        class="ml-auto text-[10px] bg-white/20 px-2 py-0.5 rounded font-mono"
                                        >Aktif</span
                                    >
                                </a>
                                <a
                                    class="flex items-center gap-3 px-3 py-2.5 rounded text-on-surface-variant hover:bg-surface-container transition-colors font-label-md text-label-md"
                                    href="#"
                                >
                                    <span
                                        class="material-symbols-outlined text-[20px]"
                                        >person_search</span
                                    >
                                    <span>Data Individu</span>
                                </a>
                                <a
                                    class="flex items-center gap-3 px-3 py-2.5 rounded text-on-surface-variant hover:bg-surface-container transition-colors font-label-md text-label-md"
                                    href="#"
                                >
                                    <span
                                        class="material-symbols-outlined text-[20px]"
                                        >flag_circle</span
                                    >
                                    <span>Program KB</span>
                                </a>
                                <a
                                    class="flex items-center gap-3 px-3 py-2.5 rounded text-on-surface-variant hover:bg-surface-container transition-colors font-label-md text-label-md"
                                    href="#"
                                >
                                    <span
                                        class="material-symbols-outlined text-[20px]"
                                        >event_note</span
                                    >
                                    <span>Kegiatan &amp; Lapangan</span>
                                </a>
                                <a
                                    class="flex items-center justify-between px-3 py-2.5 rounded text-on-surface-variant hover:bg-surface-container transition-colors font-label-md text-label-md"
                                    href="#"
                                >
                                    <div class="flex items-center gap-3">
                                        <span
                                            class="material-symbols-outlined text-[20px]"
                                            >notifications_active</span
                                        >
                                        <span>Notifikasi</span>
                                    </div>
                                    <span
                                        class="w-5 h-5 rounded-full bg-error text-on-error text-[11px] font-bold flex items-center justify-center"
                                        >3</span
                                    >
                                </a>
                            </nav>
                            <!-- Secondary System Section -->
                            <div class="pt-4 space-y-1">
                                <span
                                    class="font-caption text-caption uppercase tracking-widest text-on-surface-variant/70 px-3 block mb-2 font-semibold"
                                    >Bantuan &amp; Konfigurasi</span
                                >
                                <a
                                    class="flex items-center gap-3 px-3 py-2 rounded text-on-surface-variant hover:bg-surface-container transition-colors font-label-md text-label-md"
                                    href="#"
                                >
                                    <span
                                        class="material-symbols-outlined text-[18px]"
                                        >help_center</span
                                    >
                                    <span>Pusat Bantuan</span>
                                </a>
                                <a
                                    class="flex items-center gap-3 px-3 py-2 rounded text-on-surface-variant hover:bg-surface-container transition-colors font-label-md text-label-md"
                                    href="#"
                                >
                                    <span
                                        class="material-symbols-outlined text-[18px]"
                                        >settings</span
                                    >
                                    <span>Pengaturan Akun</span>
                                </a>
                            </div>
                        </div>
                        <!-- User Profile Card -->
                        <div
                            class="bg-surface-container-low p-3.5 rounded flex items-center gap-3"
                        >
                            <div class="relative">
                                <img
                                    class="w-10 h-10 rounded-full object-cover shadow-sm"
                                    data-alt="Close up portrait photo of Ibu Siti Aminah, an Indonesian field worker in traditional blue batik and headscarf, smiling warmly outdoors under natural daylight, sharp focus on face."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuD43IkX_rYVJFXDoyzArNaY660dmnSj5TbW8I2r4KvFzm3h1oCV_mBwbyQ11KRCShYjNThbcIT38FI1uWw-LBJsCHC_G-u-earDzKuMFcb0ac-j8C5aqXqWtY7bqp_kLx7VMYBmtSERFg9kKOcwXeXDlhEQ2fIYs3-TwPuLc53OqLpbp7xTCpTeTovArqCF2jkD6ag2E9PG8Gc74FwYCsjD8AIte1C0krZoyFxwXWewB7yE6IrgGZtR"
                                />
                                <span
                                    class="w-3 h-3 bg-secondary rounded-full absolute bottom-0 right-0 shadow-[0_0_0_2px_#ffffff]"
                                ></span>
                            </div>
                            <div class="min-w-0 flex-1">
                                <p
                                    class="font-label-md text-label-md font-bold text-on-surface truncate"
                                >
                                    Siti Aminah, S.Tr.Keb
                                </p>
                                <p
                                    class="font-caption text-caption text-on-surface-variant truncate"
                                >
                                    ID: PPKB-CKP-042
                                </p>
                            </div>
                            <button
                                class="text-on-surface-variant hover:text-primary transition-colors"
                                title="Keluar"
                            >
                                <span
                                    class="material-symbols-outlined text-[18px]"
                                    >logout</span
                                >
                            </button>
                        </div>
                    </aside>
                    <!-- Main Workspace Content Area -->
                    <section class="flex-1 flex flex-col min-w-0 bg-surface">
                        <!-- Sub-header Bar: Search & Quick Status -->
                        <div
                            class="w-full bg-surface-container-lowest px-6 lg:px-12 py-3.5 shadow-sm flex items-center justify-between gap-4"
                        >
                            <div class="flex-1 max-w-lg relative">
                                <span
                                    class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-on-surface-variant text-[20px]"
                                    >search</span
                                >
                                <input
                                    class="w-full pl-10 pr-4 py-2 bg-surface-container-low focus:bg-surface-container-lowest text-on-surface font-body-md text-body-md placeholder:text-on-surface-variant/60 rounded focus:outline-none shadow-sm focus:shadow-md transition-all"
                                    placeholder="Cari data KK, NIK warga, atau agenda kegiatan..."
                                    type="text"
                                />
                            </div>
                            <div class="flex items-center gap-4">
                                <!-- Active Posko Tag -->
                                <div
                                    class="hidden sm:flex items-center gap-2 px-3 py-1.5 bg-secondary/10 text-secondary rounded"
                                >
                                    <span
                                        class="w-2 h-2 rounded-full bg-secondary animate-pulse"
                                    ></span>
                                    <span
                                        class="font-caption text-caption font-bold tracking-wide uppercase"
                                        >Posko Cikampek Kota Aktif</span
                                    >
                                </div>
                                <!-- Notification Bell Trigger with Badge -->
                                <button
                                    class="relative p-2 rounded text-on-surface-variant hover:bg-surface-container transition-colors"
                                >
                                    <span
                                        class="material-symbols-outlined text-[22px]"
                                        >notifications</span
                                    >
                                    <span
                                        class="absolute top-1.5 right-1.5 w-2 h-2 rounded-full bg-error"
                                    ></span>
                                </button>
                                <!-- Current Cadre Quick Avatar Badge -->
                                <div
                                    class="flex items-center gap-2 pl-3 bg-surface-container-low py-1 px-2.5 rounded"
                                >
                                    <span
                                        class="font-caption text-caption font-semibold text-primary"
                                        >Siti Aminah</span
                                    >
                                    <span
                                        class="material-symbols-outlined text-[16px] text-primary"
                                        >verified</span
                                    >
                                </div>
                            </div>
                        </div>
                        <!-- Main Content Container with Contextual Spacing -->
                        <div
                            class="w-full max-w-5xl mx-auto px-4 lg:px-8 py-8 space-y-6"
                        >
                            <!-- Top Breadcrumb & Back Action Row -->
                            <div
                                class="flex flex-col sm:flex-row sm:items-center justify-between gap-4"
                            >
                                <div class="space-y-1">
                                    <nav
                                        class="flex items-center gap-2 font-caption text-caption text-on-surface-variant"
                                    >
                                        <a
                                            class="hover:text-primary transition-colors flex items-center gap-1"
                                            href="#"
                                        >
                                            <span
                                                class="material-symbols-outlined text-[14px]"
                                                >home</span
                                            >
                                            Dashboard
                                        </a>
                                        <span>/</span>
                                        <a
                                            class="hover:text-primary transition-colors"
                                            href="#"
                                            >Data Keluarga</a
                                        >
                                        <span>/</span>
                                        <span class="text-primary font-semibold"
                                            >Tambah Keluarga</span
                                        >
                                    </nav>
                                    <h2
                                        class="font-headline-lg text-headline-lg font-bold text-on-surface tracking-tight"
                                    >
                                        Formulir Pendaftaran Keluarga Baru
                                    </h2>
                                </div>
                                <a
                                    class="inline-flex items-center gap-2 text-primary hover:text-primary-container font-label-md text-label-md font-semibold bg-surface-container-lowest px-4 py-2 rounded shadow-sm hover:shadow transition-all self-start sm:self-center"
                                    href="#"
                                >
                                    <span
                                        class="material-symbols-outlined text-[18px]"
                                        >arrow_back</span
                                    >
                                    <span>Kembali ke Data Keluarga</span>
                                </a>
                            </div>
                            <!-- Editorial Context Card (Visual Richness with Photographic Banner) -->
                            <div
                                class="bg-surface-container-lowest rounded overflow-hidden shadow-md"
                            >
                                <div class="grid grid-cols-1 md:grid-cols-12">
                                    <div
                                        class="md:col-span-8 p-6 lg:p-8 flex flex-col justify-center space-y-3"
                                    >
                                        <div
                                            class="inline-flex items-center gap-2 text-primary font-label-md text-caption uppercase tracking-wider font-bold"
                                        >
                                            <span
                                                class="material-symbols-outlined text-[16px]"
                                                >how_to_reg</span
                                            >
                                            Pendataan Rutin Lapangan PPKB 2025
                                        </div>
                                        <h3
                                            class="font-headline-md text-headline-md font-bold text-on-surface leading-tight"
                                        >
                                            Integrasi Data Kependudukan &amp;
                                            Pembangunan Keluarga Cikampek
                                        </h3>
                                        <p
                                            class="font-body-md text-body-md text-on-surface-variant leading-relaxed"
                                        >
                                            Pastikan nomor Kartu Keluarga (KK)
                                            dan NIK sesuai dengan KTP elektronik
                                            warga setempat untuk memvalidasi
                                            penyaluran paket bantuan gizi
                                            balita, intervensi stunting, dan
                                            layanan konseling KB.
                                        </p>
                                        <div
                                            class="pt-2 flex flex-wrap gap-4 text-on-surface-variant font-caption text-caption"
                                        >
                                            <div
                                                class="flex items-center gap-1.5"
                                            >
                                                <span
                                                    class="material-symbols-outlined text-secondary text-[16px]"
                                                    >check_circle</span
                                                >
                                                Validasi NIK Otomatis
                                            </div>
                                            <div
                                                class="flex items-center gap-1.5"
                                            >
                                                <span
                                                    class="material-symbols-outlined text-secondary text-[16px]"
                                                    >check_circle</span
                                                >
                                                Sinkronisasi Puskesmas
                                            </div>
                                            <div
                                                class="flex items-center gap-1.5"
                                            >
                                                <span
                                                    class="material-symbols-outlined text-secondary text-[16px]"
                                                    >check_circle</span
                                                >
                                                Kerahasiaan Terjamin
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Image visual representing local field cadremen in action -->
                                    <div
                                        class="md:col-span-4 relative min-h-[160px] md:min-h-full bg-surface-container"
                                    >
                                        <img
                                            class="w-full h-full object-cover"
                                            data-alt="Indonesian female community health cadres wearing modest blue batik uniforms walking through a village alleyway in Cikampek, consulting elderly residents warmly under bright tropical daytime light, clean documentary photography style."
                                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBsMhrCCPnOGamXEJOyJLssjt8s0YpsEAY-6W0MYPeY_MNCeKf9-DY2yU0KlaMMD8VSwAxooHLrPedzeuMw6Oc1S_lOu9C-2RFSWNGc3QkSebRRgyyPyqs-5okxZRA9UD25LHz5XQ7-E0tc8ZjdVUDZZBh2bzT723pts8v6GfeJ2MAZePwo5GCN5hxBUHV7rSgKjbTa2kVuYM4WUymNvKsQKsKigo936mW1VNnNHpRHbBIznSTaLGZW"
                                        />
                                        <div
                                            class="absolute inset-0 bg-gradient-to-t md:bg-gradient-to-r from-surface-container-lowest via-transparent to-transparent opacity-80"
                                        ></div>
                                    </div>
                                </div>
                            </div>
                            <!-- FORM CONTAINER CARD -->
                            <form
                                class="bg-surface-container-lowest rounded shadow-lg p-6 lg:p-10 space-y-10"
                                id="formTambahKeluarga"
                            >
                                <!-- ================= SECTION 1: IDENTITAS KELUARGA ================= -->
                                <div class="space-y-6">
                                    <div
                                        class="flex items-start gap-4 pb-4 bg-surface-container-low/50 p-4 rounded"
                                    >
                                        <div
                                            class="w-9 h-9 rounded bg-primary text-on-primary flex items-center justify-center font-headline-md text-headline-md font-bold shrink-0 shadow-sm"
                                        >
                                            1
                                        </div>
                                        <div class="flex-1">
                                            <h4
                                                class="font-headline-md text-headline-md font-bold text-on-surface"
                                            >
                                                Identitas Keluarga
                                            </h4>
                                            <p
                                                class="font-body-md text-body-md text-on-surface-variant"
                                            >
                                                Data identitas dasar kepala
                                                keluarga dan kartu keluarga yang
                                                tercatat di Dinas Dukcapil.
                                            </p>
                                        </div>
                                        <span
                                            class="material-symbols-outlined text-primary-container text-[24px]"
                                            >badge</span
                                        >
                                    </div>
                                    <div
                                        class="grid grid-cols-1 md:grid-cols-2 gap-6 pt-2"
                                    >
                                        <!-- Nomor KK (Full row on md) -->
                                        <div class="md:col-span-2 space-y-2">
                                            <div
                                                class="flex items-center justify-between"
                                            >
                                                <label
                                                    class="font-label-md text-label-md font-bold text-on-surface flex items-center gap-1.5"
                                                    for="inputKK"
                                                >
                                                    <span
                                                        >Nomor Kartu Keluarga
                                                        (KK)</span
                                                    >
                                                    <span
                                                        class="text-error font-bold"
                                                        >*</span
                                                    >
                                                </label>
                                                <span
                                                    class="font-caption text-caption text-on-surface-variant font-mono"
                                                    id="kkCounter"
                                                    >0 / 16 digit</span
                                                >
                                            </div>
                                            <div
                                                class="relative flex items-center"
                                            >
                                                <span
                                                    class="material-symbols-outlined absolute left-3.5 text-on-surface-variant text-[20px]"
                                                    >assignment</span
                                                >
                                                <input
                                                    class="w-full pl-11 pr-24 py-3 bg-surface-container-low focus:bg-surface-container-lowest text-on-surface font-body-md text-body-md rounded shadow-sm focus:shadow-md focus:outline-none transition-all tracking-wider font-mono"
                                                    id="inputKK"
                                                    maxlength="16"
                                                    placeholder="Masukkan 16 digit nomor KK (contoh: 3215091204010001)"
                                                    required=""
                                                    type="text"
                                                />
                                                <div
                                                    class="absolute right-3 flex items-center gap-1"
                                                >
                                                    <button
                                                        class="text-xs bg-primary/10 hover:bg-primary/20 text-primary px-2.5 py-1 rounded font-label-md font-semibold transition-colors"
                                                        title="Verifikasi otomatis ke Dukcapil"
                                                        type="button"
                                                    >
                                                        Cek KK
                                                    </button>
                                                </div>
                                            </div>
                                            <p
                                                class="font-caption text-caption text-on-surface-variant flex items-center gap-1"
                                            >
                                                <span
                                                    class="material-symbols-outlined text-[15px] text-primary"
                                                    >info</span
                                                >
                                                Pastikan 16 digit angka sesuai
                                                dengan lembar Kartu Keluarga
                                                fisik terbaru.
                                            </p>
                                        </div>
                                        <!-- Nama Kepala Keluarga -->
                                        <div class="space-y-2">
                                            <label
                                                class="font-label-md text-label-md font-bold text-on-surface flex items-center gap-1.5"
                                                for="namaKepala"
                                            >
                                                <span
                                                    >Nama Lengkap Kepala
                                                    Keluarga</span
                                                >
                                                <span
                                                    class="text-error font-bold"
                                                    >*</span
                                                >
                                            </label>
                                            <div
                                                class="relative flex items-center"
                                            >
                                                <span
                                                    class="material-symbols-outlined absolute left-3.5 text-on-surface-variant text-[20px]"
                                                    >person</span
                                                >
                                                <input
                                                    class="w-full pl-11 pr-4 py-3 bg-surface-container-low focus:bg-surface-container-lowest text-on-surface font-body-md text-body-md rounded shadow-sm focus:shadow-md focus:outline-none transition-all"
                                                    id="namaKepala"
                                                    placeholder="Contoh: Muhammad Samsudin"
                                                    required=""
                                                    type="text"
                                                />
                                            </div>
                                            <p
                                                class="font-caption text-caption text-on-surface-variant"
                                            >
                                                Sesuai nama yang tercantum di
                                                akta lahir / KK.
                                            </p>
                                        </div>
                                        <!-- NIK Kepala Keluarga -->
                                        <div class="space-y-2">
                                            <div
                                                class="flex items-center justify-between"
                                            >
                                                <label
                                                    class="font-label-md text-label-md font-bold text-on-surface flex items-center gap-1.5"
                                                    for="nikKepala"
                                                >
                                                    <span
                                                        >Nomor NIK Kepala
                                                        Keluarga</span
                                                    >
                                                    <span
                                                        class="text-error font-bold"
                                                        >*</span
                                                    >
                                                </label>
                                                <span
                                                    class="font-caption text-caption text-on-surface-variant font-mono"
                                                    id="nikCounter"
                                                    >0 / 16 digit</span
                                                >
                                            </div>
                                            <div
                                                class="relative flex items-center"
                                            >
                                                <span
                                                    class="material-symbols-outlined absolute left-3.5 text-on-surface-variant text-[20px]"
                                                    >fingerprint</span
                                                >
                                                <input
                                                    class="w-full pl-11 pr-4 py-3 bg-surface-container-low focus:bg-surface-container-lowest text-on-surface font-body-md text-body-md rounded shadow-sm focus:shadow-md focus:outline-none transition-all tracking-wider font-mono"
                                                    id="nikKepala"
                                                    maxlength="16"
                                                    placeholder="Masukkan 16 digit NIK kepala keluarga"
                                                    required=""
                                                    type="text"
                                                />
                                            </div>
                                            <p
                                                class="font-caption text-caption text-on-surface-variant"
                                            >
                                                16 digit NIK tertera di KTP-el
                                                kepala keluarga.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- ================= SECTION 2: ALAMAT DOMISILI ================= -->
                                <div class="space-y-6 pt-4">
                                    <div
                                        class="flex items-start gap-4 pb-4 bg-surface-container-low/50 p-4 rounded"
                                    >
                                        <div
                                            class="w-9 h-9 rounded bg-primary text-on-primary flex items-center justify-center font-headline-md text-headline-md font-bold shrink-0 shadow-sm"
                                        >
                                            2
                                        </div>
                                        <div class="flex-1">
                                            <h4
                                                class="font-headline-md text-headline-md font-bold text-on-surface"
                                            >
                                                Alamat Domisili
                                            </h4>
                                            <p
                                                class="font-body-md text-body-md text-on-surface-variant"
                                            >
                                                Lokasi tempat tinggal riil
                                                keluarga saat ini di lingkup
                                                Kecamatan Cikampek.
                                            </p>
                                        </div>
                                        <span
                                            class="material-symbols-outlined text-primary-container text-[24px]"
                                            >location_city</span
                                        >
                                    </div>
                                    <!-- Alamat Lengkap Field -->
                                    <div class="space-y-2">
                                        <label
                                            class="font-label-md text-label-md font-bold text-on-surface flex items-center gap-1.5"
                                            for="alamatLengkap"
                                        >
                                            <span
                                                >Alamat Lengkap (Jalan / Gang /
                                                Blok / No. Rumah)</span
                                            >
                                            <span class="text-error font-bold"
                                                >*</span
                                            >
                                        </label>
                                        <textarea
                                            class="w-full p-3.5 bg-surface-container-low focus:bg-surface-container-lowest text-on-surface font-body-md text-body-md rounded shadow-sm focus:shadow-md focus:outline-none transition-all resize-y"
                                            id="alamatLengkap"
                                            placeholder="Contoh: Jl. Ahmad Yani No. 45, RT 003 / RW 005, Dekat Musholla Al-Hidayah"
                                            required=""
                                            rows="3"
                                        ></textarea>
                                    </div>
                                    <!-- Grid 2 Kolom: Kecamatan (Locked) & Desa -->
                                    <div
                                        class="grid grid-cols-1 md:grid-cols-2 gap-6"
                                    >
                                        <div class="space-y-2">
                                            <label
                                                class="font-label-md text-label-md font-bold text-on-surface flex items-center gap-1.5"
                                            >
                                                <span>Kecamatan</span>
                                                <span
                                                    class="text-caption font-normal text-on-surface-variant"
                                                    >(Terkunci Wilayah
                                                    Tugas)</span
                                                >
                                            </label>
                                            <div
                                                class="relative flex items-center"
                                            >
                                                <span
                                                    class="material-symbols-outlined absolute left-3.5 text-primary text-[20px]"
                                                    >lock</span
                                                >
                                                <input
                                                    class="w-full pl-11 pr-4 py-3 bg-surface-container text-on-surface font-body-md text-body-md font-semibold rounded cursor-not-allowed select-none"
                                                    readonly=""
                                                    type="text"
                                                    value="Kecamatan Cikampek"
                                                />
                                                <span
                                                    class="absolute right-3.5 text-xs bg-primary/10 text-primary px-2 py-0.5 rounded font-mono font-bold"
                                                    >TERKUNCI</span
                                                >
                                            </div>
                                        </div>
                                        <div class="space-y-2">
                                            <label
                                                class="font-label-md text-label-md font-bold text-on-surface flex items-center gap-1.5"
                                                for="pilihDesa"
                                            >
                                                <span>Desa / Kelurahan</span>
                                                <span
                                                    class="text-error font-bold"
                                                    >*</span
                                                >
                                            </label>
                                            <div
                                                class="relative flex items-center"
                                            >
                                                <span
                                                    class="material-symbols-outlined absolute left-3.5 text-on-surface-variant text-[20px]"
                                                    >holiday_village</span
                                                >
                                                <select
                                                    class="w-full pl-11 pr-10 py-3 bg-surface-container-low focus:bg-surface-container-lowest text-on-surface font-body-md text-body-md rounded shadow-sm focus:shadow-md focus:outline-none transition-all appearance-none cursor-pointer"
                                                    id="pilihDesa"
                                                    required=""
                                                >
                                                    <option
                                                        disabled=""
                                                        selected=""
                                                        value=""
                                                    >
                                                        Pilih Desa /
                                                        Kelurahan...
                                                    </option>
                                                    <option
                                                        value="cikampek_kota"
                                                    >
                                                        Cikampek Kota
                                                    </option>
                                                    <option
                                                        value="cikampek_barat"
                                                    >
                                                        Cikampek Barat
                                                    </option>
                                                    <option
                                                        value="cikampek_timur"
                                                    >
                                                        Cikampek Timur
                                                    </option>
                                                    <option
                                                        value="cikampek_selatan"
                                                    >
                                                        Cikampek Selatan
                                                    </option>
                                                    <option
                                                        value="dawuan_barat"
                                                    >
                                                        Dawuan Barat
                                                    </option>
                                                    <option
                                                        value="dawuan_timur"
                                                    >
                                                        Dawuan Timur
                                                    </option>
                                                    <option
                                                        value="dawuan_tengah"
                                                    >
                                                        Dawuan Tengah
                                                    </option>
                                                    <option value="kalihurip">
                                                        Kalihurip
                                                    </option>
                                                    <option value="kamojing">
                                                        Kamojing
                                                    </option>
                                                    <option value="pucung">
                                                        Pucung
                                                    </option>
                                                </select>
                                                <span
                                                    class="material-symbols-outlined absolute right-3 pointer-events-none text-on-surface-variant text-[20px]"
                                                    >expand_more</span
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Grid 4 Kolom: Dusun, RT, RW, Kode Pos -->
                                    <div
                                        class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4"
                                    >
                                        <div class="space-y-2">
                                            <label
                                                class="font-label-md text-label-md font-bold text-on-surface"
                                                for="namaDusun"
                                                >Dusun / Kampung</label
                                            >
                                            <input
                                                class="w-full px-3.5 py-3 bg-surface-container-low focus:bg-surface-container-lowest text-on-surface font-body-md text-body-md rounded shadow-sm focus:shadow-md focus:outline-none transition-all"
                                                id="namaDusun"
                                                placeholder="Cth: Krajan"
                                                type="text"
                                            />
                                        </div>
                                        <div class="space-y-2">
                                            <label
                                                class="font-label-md text-label-md font-bold text-on-surface flex items-center gap-1"
                                                for="inputRT"
                                            >
                                                <span>RT</span>
                                                <span
                                                    class="text-error font-bold"
                                                    >*</span
                                                >
                                            </label>
                                            <input
                                                class="w-full px-3.5 py-3 bg-surface-container-low focus:bg-surface-container-lowest text-on-surface font-body-md text-body-md rounded shadow-sm focus:shadow-md focus:outline-none transition-all font-mono"
                                                id="inputRT"
                                                maxlength="3"
                                                placeholder="001"
                                                required=""
                                                type="text"
                                            />
                                        </div>
                                        <div class="space-y-2">
                                            <label
                                                class="font-label-md text-label-md font-bold text-on-surface flex items-center gap-1"
                                                for="inputRW"
                                            >
                                                <span>RW</span>
                                                <span
                                                    class="text-error font-bold"
                                                    >*</span
                                                >
                                            </label>
                                            <input
                                                class="w-full px-3.5 py-3 bg-surface-container-low focus:bg-surface-container-lowest text-on-surface font-body-md text-body-md rounded shadow-sm focus:shadow-md focus:outline-none transition-all font-mono"
                                                id="inputRW"
                                                maxlength="3"
                                                placeholder="002"
                                                required=""
                                                type="text"
                                            />
                                        </div>
                                        <div class="space-y-2">
                                            <label
                                                class="font-label-md text-label-md font-bold text-on-surface"
                                                for="kodePos"
                                                >Kode Pos</label
                                            >
                                            <input
                                                class="w-full px-3.5 py-3 bg-surface-container text-on-surface font-body-md text-body-md font-mono rounded shadow-sm cursor-not-allowed"
                                                id="kodePos"
                                                readonly=""
                                                type="text"
                                                value="41373"
                                            />
                                        </div>
                                    </div>
                                    <!-- Mini Map Geographic Anchor Info Box -->
                                    <div
                                        class="w-full h-32 rounded bg-surface-container-low relative overflow-hidden flex items-center justify-between p-6 shadow-inner"
                                        data-location="Cikampek, Karawang, Jawa Barat"
                                        style=""
                                    >
                                        <div
                                            class="space-y-1 relative z-10 max-w-md bg-surface-container-lowest/90 backdrop-blur-md p-3 rounded"
                                        >
                                            <p
                                                class="font-label-md text-label-md font-bold text-primary flex items-center gap-1.5"
                                            >
                                                <span
                                                    class="material-symbols-outlined text-[16px]"
                                                    >pin_drop</span
                                                >
                                                Geolokasi Presisi Wilayah
                                                Cikampek
                                            </p>
                                            <p
                                                class="font-caption text-caption text-on-surface-variant"
                                            >
                                                Titik koordinat satelit
                                                diselaraskan otomatis
                                                berdasarkan RW/RT yang dipilih.
                                            </p>
                                        </div>
                                        <div
                                            class="relative z-10 hidden sm:flex items-center gap-2 bg-surface-container-lowest/90 px-3 py-1.5 rounded font-caption text-caption text-secondary font-bold"
                                        >
                                            <span
                                                class="w-2 h-2 rounded-full bg-secondary"
                                            ></span>
                                            GPS Siap Sinkron
                                        </div>
                                    </div>
                                </div>
                                <!-- ================= SECTION 3: INFORMASI TEMPAT TINGGAL & TAMBAHAN ================= -->
                                <div class="space-y-6 pt-4">
                                    <div
                                        class="flex items-start gap-4 pb-4 bg-surface-container-low/50 p-4 rounded"
                                    >
                                        <div
                                            class="w-9 h-9 rounded bg-primary text-on-primary flex items-center justify-center font-headline-md text-headline-md font-bold shrink-0 shadow-sm"
                                        >
                                            3
                                        </div>
                                        <div class="flex-1">
                                            <h4
                                                class="font-headline-md text-headline-md font-bold text-on-surface"
                                            >
                                                Informasi Tempat Tinggal &amp;
                                                Tambahan
                                            </h4>
                                            <p
                                                class="font-body-md text-body-md text-on-surface-variant"
                                            >
                                                Indikator demografi awal guna
                                                pemetaan bantuan dan program
                                                pendampingan keluarga berencana.
                                            </p>
                                        </div>
                                        <span
                                            class="material-symbols-outlined text-primary-container text-[24px]"
                                            >real_estate_agent</span
                                        >
                                    </div>
                                    <div
                                        class="grid grid-cols-1 md:grid-cols-2 gap-6"
                                    >
                                        <!-- Status Tempat Tinggal -->
                                        <div class="space-y-2">
                                            <label
                                                class="font-label-md text-label-md font-bold text-on-surface flex items-center gap-1.5"
                                                for="statusRumah"
                                            >
                                                <span
                                                    >Status Kepemilikan Tempat
                                                    Tinggal</span
                                                >
                                                <span
                                                    class="text-error font-bold"
                                                    >*</span
                                                >
                                            </label>
                                            <div
                                                class="relative flex items-center"
                                            >
                                                <span
                                                    class="material-symbols-outlined absolute left-3.5 text-on-surface-variant text-[20px]"
                                                    >home_work</span
                                                >
                                                <select
                                                    class="w-full pl-11 pr-10 py-3 bg-surface-container-low focus:bg-surface-container-lowest text-on-surface font-body-md text-body-md rounded shadow-sm focus:shadow-md focus:outline-none transition-all appearance-none cursor-pointer"
                                                    id="statusRumah"
                                                    required=""
                                                >
                                                    <option
                                                        disabled=""
                                                        selected=""
                                                        value=""
                                                    >
                                                        Pilih status tempat
                                                        tinggal...
                                                    </option>
                                                    <option
                                                        value="milik_sendiri"
                                                    >
                                                        Milik Sendiri
                                                    </option>
                                                    <option
                                                        value="kontrak_sewa"
                                                    >
                                                        Kontrak / Sewa
                                                    </option>
                                                    <option value="menumpang">
                                                        Menumpang dengan
                                                        Keluarga/Kerabat
                                                    </option>
                                                    <option value="rumah_dinas">
                                                        Rumah Dinas / Instansi
                                                    </option>
                                                    <option value="lainnya">
                                                        Lainnya
                                                    </option>
                                                </select>
                                                <span
                                                    class="material-symbols-outlined absolute right-3 pointer-events-none text-on-surface-variant text-[20px]"
                                                    >expand_more</span
                                                >
                                            </div>
                                        </div>
                                        <!-- Perkiraan Jumlah Anggota Keluarga -->
                                        <div class="space-y-2">
                                            <label
                                                class="font-label-md text-label-md font-bold text-on-surface flex items-center gap-1.5"
                                                for="jumlahAnggota"
                                            >
                                                <span
                                                    >Jumlah Jiwa dalam Keluarga
                                                    (Termasuk Kepala KK)</span
                                                >
                                            </label>
                                            <div
                                                class="relative flex items-center"
                                            >
                                                <span
                                                    class="material-symbols-outlined absolute left-3.5 text-on-surface-variant text-[20px]"
                                                    >groups</span
                                                >
                                                <input
                                                    class="w-full pl-11 pr-4 py-3 bg-surface-container-low focus:bg-surface-container-lowest text-on-surface font-body-md text-body-md rounded shadow-sm focus:shadow-md focus:outline-none transition-all"
                                                    id="jumlahAnggota"
                                                    max="25"
                                                    min="1"
                                                    placeholder="Contoh: 4 orang"
                                                    type="number"
                                                />
                                            </div>
                                            <p
                                                class="font-caption text-caption text-on-surface-variant"
                                            >
                                                Rincian nama anggota individu
                                                diinput pada tahapan berikutnya.
                                            </p>
                                        </div>
                                    </div>
                                    <!-- Catatan Khusus -->
                                    <div class="space-y-2">
                                        <div
                                            class="flex items-center justify-between"
                                        >
                                            <label
                                                class="font-label-md text-label-md font-bold text-on-surface flex items-center gap-2"
                                                for="catatanKhusus"
                                            >
                                                <span
                                                    >Catatan Khusus
                                                    Lapangan</span
                                                >
                                                <span
                                                    class="font-caption text-caption bg-surface-container-high px-2 py-0.5 rounded text-on-surface-variant"
                                                    >Opsional</span
                                                >
                                            </label>
                                            <span
                                                class="font-caption text-caption text-on-surface-variant"
                                                >Maks. 300 karakter</span
                                            >
                                        </div>
                                        <textarea
                                            class="w-full p-3.5 bg-surface-container-low focus:bg-surface-container-lowest text-on-surface font-body-md text-body-md rounded shadow-sm focus:shadow-md focus:outline-none transition-all resize-y"
                                            id="catatanKhusus"
                                            placeholder="Tuliskan catatan kondisi khusus keluarga jika ada (misal: terdapat ibu hamil resiko tinggi, balita stunting, lansia sakit menahun, atau riwayat bantuan sosial)..."
                                            rows="3"
                                        ></textarea>
                                    </div>
                                </div>
                                <!-- ================= SECTION 4: PRIVASI & KEAMANAN DATA ================= -->
                                <div
                                    class="bg-primary/10 p-5 rounded space-y-2"
                                >
                                    <div
                                        class="flex items-center gap-2.5 text-primary font-bold"
                                    >
                                        <span
                                            class="material-symbols-outlined text-[24px]"
                                            >verified_user</span
                                        >
                                        <h5
                                            class="font-label-md text-label-md uppercase tracking-wide"
                                        >
                                            Privasi &amp; Keamanan Data PPKB
                                            Kecamatan Cikampek
                                        </h5>
                                    </div>
                                    <p
                                        class="font-body-md text-body-md text-on-surface leading-relaxed text-sm"
                                    >
                                        Data keluarga yang dihimpun digunakan
                                        semata-mata untuk keperluan pelayanan
                                        publik, pemantauan status gizi keluarga,
                                        dan program Bangga Kencana BKKBN.
                                        Seluruh data pribadi terenkripsi 256-bit
                                        dan tidak akan disebarluaskan untuk
                                        kepentingan komersial.
                                    </p>
                                </div>
                                <!-- ================= ACTION BUTTONS FOOTER ================= -->
                                <div
                                    class="pt-6 flex flex-col sm:flex-row items-center justify-between gap-4 bg-surface-container-lowest"
                                >
                                    <!-- Cancel Button -->
                                    <button
                                        class="w-full sm:w-auto px-6 py-3 font-label-md text-label-md font-semibold text-on-surface-variant hover:text-on-surface hover:bg-surface-container transition-all rounded text-center"
                                        onclick="history.back()"
                                        type="button"
                                    >
                                        Batalkan &amp; Keluar
                                    </button>
                                    <!-- Save Action Group -->
                                    <div
                                        class="flex flex-col sm:flex-row items-center gap-3 w-full sm:w-auto"
                                    >
                                        <!-- Draft Button -->
                                        <button
                                            class="w-full sm:w-auto px-5 py-3 bg-surface-container-low hover:bg-surface-container text-primary font-label-md text-label-md font-bold rounded shadow-sm hover:shadow transition-all inline-flex items-center justify-center gap-2"
                                            id="btnDraft"
                                            type="button"
                                        >
                                            <span
                                                class="material-symbols-outlined text-[18px]"
                                                >bookmark_border</span
                                            >
                                            <span>Simpan sebagai Draft</span>
                                        </button>
                                        <!-- Primary Submit Button -->
                                        <button
                                            class="w-full sm:w-auto px-8 py-3 bg-primary hover:bg-primary-container text-on-primary font-label-md text-label-md font-bold rounded shadow-md hover:shadow-xl transition-all inline-flex items-center justify-center gap-2"
                                            id="btnSubmit"
                                            type="submit"
                                        >
                                            <span>Simpan &amp; Lanjutkan</span>
                                            <span
                                                class="material-symbols-outlined text-[18px]"
                                                >arrow_forward</span
                                            >
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <!-- Quick Tips & Cadre Assistance Box -->
                            <div
                                class="bg-surface-container-lowest p-6 rounded shadow-sm flex flex-col md:flex-row items-start md:items-center justify-between gap-4"
                            >
                                <div class="flex items-center gap-4">
                                    <div
                                        class="w-12 h-12 rounded bg-tertiary-container/20 text-tertiary flex items-center justify-center font-bold"
                                    >
                                        <span
                                            class="material-symbols-outlined text-[26px]"
                                            >contact_support</span
                                        >
                                    </div>
                                    <div>
                                        <h6
                                            class="font-label-md text-label-md font-bold text-on-surface"
                                        >
                                            Mengalami kendala NIK tidak
                                            ditemukan?
                                        </h6>
                                        <p
                                            class="font-caption text-caption text-on-surface-variant"
                                        >
                                            Hubungi Koordinator PLKB Cikampek
                                            via kanal darurat internal Satpel
                                            PPKB.
                                        </p>
                                    </div>
                                </div>
                                <button
                                    class="px-4 py-2 bg-surface-container text-on-surface font-label-md text-caption font-bold rounded hover:bg-surface-container-high transition-colors self-end md:self-center"
                                    type="button"
                                >
                                    Hubungi Helpdesk PLKB
                                </button>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <script>
                // Dynamic Counter logic for 16 digit inputs
                const inputKK = document.getElementById("inputKK");
                const kkCounter = document.getElementById("kkCounter");
                if (inputKK && kkCounter) {
                    inputKK.addEventListener("input", (e) => {
                        const val = e.target.value.replace(/\D/g, "");
                        e.target.value = val;
                        kkCounter.textContent = `${val.length} / 16 digit`;
                        if (val.length === 16) {
                            kkCounter.classList.remove(
                                "text-on-surface-variant",
                            );
                            kkCounter.classList.add(
                                "text-secondary",
                                "font-bold",
                            );
                        } else {
                            kkCounter.classList.remove(
                                "text-secondary",
                                "font-bold",
                            );
                            kkCounter.classList.add("text-on-surface-variant");
                        }
                    });
                }

                const inputNIK = document.getElementById("nikKepala");
                const nikCounter = document.getElementById("nikCounter");
                if (inputNIK && nikCounter) {
                    inputNIK.addEventListener("input", (e) => {
                        const val = e.target.value.replace(/\D/g, "");
                        e.target.value = val;
                        nikCounter.textContent = `${val.length} / 16 digit`;
                        if (val.length === 16) {
                            nikCounter.classList.remove(
                                "text-on-surface-variant",
                            );
                            nikCounter.classList.add(
                                "text-secondary",
                                "font-bold",
                            );
                        } else {
                            nikCounter.classList.remove(
                                "text-secondary",
                                "font-bold",
                            );
                            nikCounter.classList.add("text-on-surface-variant");
                        }
                    });
                }

                // Restrict RT & RW to numbers only
                const inputRT = document.getElementById("inputRT");
                const inputRW = document.getElementById("inputRW");
                [inputRT, inputRW].forEach((elem) => {
                    if (elem) {
                        elem.addEventListener("input", (e) => {
                            e.target.value = e.target.value.replace(/\D/g, "");
                        });
                    }
                });

                // Simple feedback notification micro-interaction
                const form = document.getElementById("formTambahKeluarga");
                if (form) {
                    form.addEventListener("submit", (e) => {
                        e.preventDefault();
                        const submitBtn = document.getElementById("btnSubmit");
                        if (submitBtn) {
                            submitBtn.innerHTML = `
          <span class="material-symbols-outlined animate-spin text-[18px]">progress_activity</span>
          <span>Memverifikasi Data...</span>
        `;
                            submitBtn.disabled = true;
                            setTimeout(() => {
                                alert(
                                    "Data Keluarga " +
                                        (inputKK ? inputKK.value : "") +
                                        " berhasil disimpan! Mengarahkan ke input anggota keluarga...",
                                );
                                submitBtn.innerHTML = `
            <span class="material-symbols-outlined text-[18px]">check</span>
            <span>Tersimpan!</span>
          `;
                            }, 1200);
                        }
                    });
                }

                const btnDraft = document.getElementById("btnDraft");
                if (btnDraft) {
                    btnDraft.addEventListener("click", () => {
                        btnDraft.innerHTML = `
        <span class="material-symbols-outlined text-[18px]">check</span>
        <span>Draft Tersimpan di Lokal</span>
      `;
                        setTimeout(() => {
                            btnDraft.innerHTML = `
          <span class="material-symbols-outlined text-[18px]">bookmark_border</span>
          <span>Simpan sebagai Draft</span>
        `;
                        }, 2000);
                    });
                }
            </script>
        </main>
        <nav
            class="fixed bottom-0 w-full z-50 bg-surface/80 backdrop-blur-xl pb-safe shadow-[0_-1px_8px_rgba(0,0,0,0.04)]"
            data-active-classes="text-primary border-t-2 border-primary"
        >
            <div class="flex justify-between items-center h-16 px-md">
                <a
                    aria-current="page"
                    class="flex flex-col items-center justify-center flex-1 h-full gap-xs transition-all text-primary border-t-2 border-primary"
                    data-path="dashboard"
                    href="#"
                    ><span class="material-symbols-outlined">dashboard</span
                    ><span class="font-label-md text-caption">Beranda</span></a
                ><a
                    class="flex flex-col items-center justify-center flex-1 h-full gap-xs text-on-surface-variant transition-all"
                    data-path="pelayanan"
                    href="#"
                    ><span class="material-symbols-outlined"
                        >volunteer_activism</span
                    ><span class="font-label-md text-caption"
                        >Pelayanan</span
                    ></a
                ><a
                    class="flex flex-col items-center justify-center flex-1 h-full gap-xs text-on-surface-variant transition-all"
                    data-path="laporan"
                    href="#"
                    ><span class="material-symbols-outlined">analytics</span
                    ><span class="font-label-md text-caption">Laporan</span></a
                ><a
                    class="flex flex-col items-center justify-center flex-1 h-full gap-xs text-on-surface-variant transition-all"
                    data-path="arsip"
                    href="#"
                    ><span class="material-symbols-outlined">inventory_2</span
                    ><span class="font-label-md text-caption">Arsip</span></a
                ><a
                    class="flex flex-col items-center justify-center flex-1 h-full gap-xs text-on-surface-variant transition-all"
                    data-path="profil-kecamatan"
                    href="#"
                    ><span class="material-symbols-outlined">info</span
                    ><span class="font-label-md text-caption">Profil</span></a
                >
            </div>
        </nav>
    </body>
</html>
