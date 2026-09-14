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
    <body class="bg-background font-body-md text-on-surface">
        <aside
            class="fixed left-0 top-0 h-full w-72 bg-surface-container-lowest border-r border-outline-variant z-50 flex flex-col"
        >
            <div class="p-lg mb-xl">
                <div class="flex items-center gap-md">
                    <div
                        class="w-10 h-10 bg-primary flex items-center justify-center"
                    >
                        <span class="material-symbols-outlined text-on-primary"
                            >account_balance</span
                        >
                    </div>
                    <div>
                        <p
                            class="font-label-md text-label-md text-primary tracking-wider uppercase leading-none"
                        >
                            Satpel PPKB
                        </p>
                        <p
                            class="font-headline-md text-[16px] font-bold text-on-surface"
                        >
                            Cikampek
                        </p>
                    </div>
                </div>
            </div>
            <nav
                class="flex-1 px-md space-y-xs"
                data-active-classes="bg-primary-container text-on-primary font-semibold"
            >
                <a
                    aria-current="page"
                    class="flex items-center gap-md px-md py-sm transition-all group bg-primary-container text-on-primary font-semibold"
                    data-path="dashboard"
                    href="#"
                    ><span class="material-symbols-outlined text-[20px]"
                        >dashboard</span
                    ><span class="font-body-md">Dashboard</span></a
                ><a
                    class="flex items-center gap-md px-md py-sm text-on-surface-variant hover:bg-surface-container hover:text-on-surface transition-all group"
                    data-path="data-keluarga"
                    href="#"
                    ><span class="material-symbols-outlined text-[20px]"
                        >family_restroom</span
                    ><span class="font-body-md">Data Keluarga</span></a
                ><a
                    class="flex items-center gap-md px-md py-sm text-on-surface-variant hover:bg-surface-container hover:text-on-surface transition-all group"
                    data-path="data-individu"
                    href="#"
                    ><span class="material-symbols-outlined text-[20px]"
                        >person</span
                    ><span class="font-body-md">Data Individu</span></a
                ><a
                    class="flex items-center gap-md px-md py-sm text-on-surface-variant hover:bg-surface-container hover:text-on-surface transition-all group"
                    data-path="program"
                    href="#"
                    ><span class="material-symbols-outlined text-[20px]"
                        >assignment</span
                    ><span class="font-body-md">Program</span></a
                ><a
                    class="flex items-center gap-md px-md py-sm text-on-surface-variant hover:bg-surface-container hover:text-on-surface transition-all group"
                    data-path="kegiatan"
                    href="#"
                    ><span class="material-symbols-outlined text-[20px]"
                        >event_note</span
                    ><span class="font-body-md">Kegiatan</span></a
                ><a
                    class="flex items-center gap-md px-md py-sm text-on-surface-variant hover:bg-surface-container hover:text-on-surface transition-all group"
                    data-path="notifikasi"
                    href="#"
                    ><span class="material-symbols-outlined text-[20px]"
                        >notifications</span
                    ><span class="font-body-md">Notifikasi</span></a
                >
                <div class="pt-xl pb-sm px-md">
                    <p
                        class="text-caption font-label-md text-outline uppercase tracking-widest"
                    >
                        Secondary
                    </p>
                </div>
                <a
                    class="flex items-center gap-md px-md py-sm text-on-surface-variant hover:bg-surface-container hover:text-on-surface transition-all group"
                    data-path="bantuan"
                    href="#"
                    ><span class="material-symbols-outlined text-[20px]"
                        >help</span
                    ><span class="font-body-md">Bantuan</span></a
                ><a
                    class="flex items-center gap-md px-md py-sm text-on-surface-variant hover:bg-surface-container hover:text-on-surface transition-all group"
                    data-path="pengaturan"
                    href="#"
                    ><span class="material-symbols-outlined text-[20px]"
                        >settings</span
                    ><span class="font-body-md">Pengaturan</span></a
                >
            </nav>
            <div
                class="p-lg border-t border-outline-variant bg-surface-container-low"
            >
                <div class="flex items-center gap-md">
                    <div
                        class="w-10 h-10 rounded-full bg-primary flex items-center justify-center shrink-0"
                    >
                        <span
                            class="material-symbols-outlined text-on-primary text-[20px]"
                            >person</span
                        >
                    </div>
                    <div class="overflow-hidden">
                        <p
                            class="font-label-md text-label-md text-on-surface truncate"
                        >
                            Siti Nurhaliza
                        </p>
                        <p
                            class="font-caption text-caption text-on-surface-variant"
                        >
                            Kader Utama
                        </p>
                    </div>
                    <button
                        class="ml-auto text-on-surface-variant hover:text-primary transition-colors"
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
                class="fixed top-0 left-72 right-0 h-20 bg-surface/80 backdrop-blur-xl border-b border-outline-variant z-40 px-xl flex items-center justify-between"
            >
                <div class="w-96 relative">
                    <span
                        class="material-symbols-outlined absolute left-md top-1/2 -translate-y-1/2 text-on-surface-variant"
                        >search</span
                    ><input
                        class="w-full pl-xxl pr-md py-sm bg-surface-container-low border border-outline-variant focus:border-primary focus:outline-none font-body-md text-on-surface"
                        placeholder="Cari data, warga, atau kegiatan..."
                        type="text"
                    />
                </div>
                <div class="flex items-center gap-lg">
                    <button
                        class="relative p-sm text-on-surface-variant hover:text-primary transition-colors"
                    >
                        <span class="material-symbols-outlined"
                            >notifications</span
                        ><span
                            class="absolute top-1.5 right-1.5 w-2 h-2 bg-error rounded-full"
                        ></span>
                    </button>
                    <div class="flex items-center gap-md cursor-pointer group">
                        <div class="text-right hidden sm:block">
                            <p
                                class="font-label-md text-label-md text-on-surface"
                            >
                                Profil Kader
                            </p>
                            <p
                                class="font-caption text-caption text-on-surface-variant"
                            >
                                Cikampek Barat
                            </p>
                        </div>
                        <div
                            class="w-10 h-10 rounded-full bg-primary flex items-center justify-center"
                        >
                            <span
                                class="material-symbols-outlined text-on-primary text-[20px]"
                                >person</span
                            >
                        </div>
                    </div>
                </div>
            </header>
            <main class="relative pt-20 min-h-screen bg-background">
                <div class="flex flex-col w-full p-xl gap-xxl">
                    <!-- Welcome & Account Status Header -->
                    <div
                        class="flex flex-col md:flex-row gap-lg justify-between items-start"
                    >
                        <div class="flex flex-col gap-sm">
                            <h1 class="font-display-lg text-on-surface">
                                Kader Dashboard
                            </h1>
                            <p
                                class="font-body-lg text-on-surface-variant max-w-2xl"
                            >
                                Selamat datang, Kader Siti Aminah. Berikut
                                ringkasan aktivitas dan data yang perlu Anda
                                perhatikan.
                            </p>
                            <p
                                class="font-label-md text-primary uppercase tracking-widest mt-sm"
                                id="current-date"
                            ></p>
                        </div>
                        <div
                            class="bg-surface-container-lowest p-lg shadow-sm rounded-xl min-w-[300px] flex flex-col gap-md"
                        >
                            <div class="flex justify-between items-center">
                                <span
                                    class="font-label-md text-on-surface-variant uppercase tracking-wider"
                                    >Status Akun</span
                                >
                                <span
                                    class="bg-secondary-fixed/20 text-secondary px-sm py-xs rounded text-caption font-bold flex items-center gap-xs"
                                >
                                    <span
                                        class="material-symbols-outlined text-[16px]"
                                        >check_circle</span
                                    >
                                    AKTIF
                                </span>
                            </div>
                            <div>
                                <p class="font-headline-md text-on-surface">
                                    Desa Cikampek Timur
                                </p>
                                <div
                                    class="flex items-center gap-xs mt-xs text-secondary"
                                >
                                    <span
                                        class="material-symbols-outlined text-[16px]"
                                        >sync</span
                                    >
                                    <span class="font-caption">Tersinkron</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Quick Actions -->
                    <div class="flex flex-col gap-md">
                        <h2
                            class="font-headline-md text-on-surface flex items-center gap-sm"
                        >
                            <span class="material-symbols-outlined text-primary"
                                >bolt</span
                            >
                            Aksi Cepat
                        </h2>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-md">
                            <button
                                class="bg-primary text-on-primary p-lg rounded-xl flex flex-col items-center justify-center gap-sm hover:bg-primary/90 transition-colors shadow-md group"
                            >
                                <span
                                    class="material-symbols-outlined text-[32px] group-hover:scale-110 transition-transform"
                                    >family_restroom</span
                                >
                                <span class="font-label-md text-center"
                                    >Tambah Keluarga</span
                                >
                            </button>
                            <button
                                class="bg-surface-container-lowest text-primary p-lg rounded-xl flex flex-col items-center justify-center gap-sm hover:bg-surface-container-low transition-colors shadow-sm border-2 border-primary group"
                            >
                                <span
                                    class="material-symbols-outlined text-[32px] group-hover:scale-110 transition-transform"
                                    >person_add</span
                                >
                                <span class="font-label-md text-center"
                                    >Tambah Anggota</span
                                >
                            </button>
                            <button
                                class="bg-surface-container-lowest text-on-surface p-lg rounded-xl flex flex-col items-center justify-center gap-sm hover:bg-surface-container-low transition-colors shadow-sm group"
                            >
                                <span
                                    class="material-symbols-outlined text-[32px] text-tertiary group-hover:scale-110 transition-transform"
                                    >assignment_add</span
                                >
                                <span class="font-label-md text-center"
                                    >Input Program</span
                                >
                            </button>
                            <button
                                class="bg-surface-container-lowest text-on-surface p-lg rounded-xl flex flex-col items-center justify-center gap-sm hover:bg-surface-container-low transition-colors shadow-sm group"
                            >
                                <span
                                    class="material-symbols-outlined text-[32px] text-on-surface-variant group-hover:scale-110 transition-transform"
                                    >search</span
                                >
                                <span class="font-label-md text-center"
                                    >Lihat Data</span
                                >
                            </button>
                        </div>
                    </div>
                    <!-- Main Content Grid -->
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-xl">
                        <!-- Left Column: Data Summary & Programs -->
                        <div class="lg:col-span-8 flex flex-col gap-xl">
                            <!-- Data Summary -->
                            <section class="flex flex-col gap-md">
                                <h2 class="font-headline-md text-on-surface">
                                    Ringkasan Data
                                </h2>
                                <div class="grid grid-cols-2 gap-md">
                                    <div
                                        class="bg-surface-container-lowest p-lg rounded-xl shadow-sm flex items-center justify-between"
                                    >
                                        <div>
                                            <p
                                                class="font-label-md text-on-surface-variant uppercase mb-xs"
                                            >
                                                Keluarga Terdata
                                            </p>
                                            <p
                                                class="font-display-lg text-primary"
                                            >
                                                128
                                            </p>
                                        </div>
                                        <div
                                            class="w-16 h-16 rounded-full bg-primary/10 flex items-center justify-center"
                                        >
                                            <span
                                                class="material-symbols-outlined text-[32px] text-primary"
                                                >home</span
                                            >
                                        </div>
                                    </div>
                                    <div
                                        class="bg-surface-container-lowest p-lg rounded-xl shadow-sm flex items-center justify-between"
                                    >
                                        <div>
                                            <p
                                                class="font-label-md text-on-surface-variant uppercase mb-xs"
                                            >
                                                Anggota Keluarga
                                            </p>
                                            <p
                                                class="font-display-lg text-on-surface"
                                            >
                                                436
                                            </p>
                                        </div>
                                        <div
                                            class="w-16 h-16 rounded-full bg-surface-container flex items-center justify-center"
                                        >
                                            <span
                                                class="material-symbols-outlined text-[32px] text-on-surface-variant"
                                                >group</span
                                            >
                                        </div>
                                    </div>
                                    <div
                                        class="bg-error-container p-lg rounded-xl shadow-sm flex items-center justify-between"
                                    >
                                        <div>
                                            <p
                                                class="font-label-md text-on-error-container uppercase mb-xs"
                                            >
                                                Perlu Diperbarui
                                            </p>
                                            <p
                                                class="font-display-lg text-error"
                                            >
                                                12
                                            </p>
                                        </div>
                                        <div
                                            class="w-16 h-16 rounded-full bg-error/10 flex items-center justify-center"
                                        >
                                            <span
                                                class="material-symbols-outlined text-[32px] text-error"
                                                >warning</span
                                            >
                                        </div>
                                    </div>
                                    <div
                                        class="bg-tertiary-container p-lg rounded-xl shadow-sm flex items-center justify-between"
                                    >
                                        <div>
                                            <p
                                                class="font-label-md text-on-tertiary-container uppercase mb-xs"
                                            >
                                                Draft
                                            </p>
                                            <p
                                                class="font-display-lg text-tertiary"
                                            >
                                                4
                                            </p>
                                        </div>
                                        <div
                                            class="w-16 h-16 rounded-full bg-tertiary/10 flex items-center justify-center"
                                        >
                                            <span
                                                class="material-symbols-outlined text-[32px] text-tertiary"
                                                >edit_document</span
                                            >
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- Programs Grid -->
                            <section class="flex flex-col gap-md">
                                <h2 class="font-headline-md text-on-surface">
                                    Program Dikelola
                                </h2>
                                <div
                                    class="grid grid-cols-2 md:grid-cols-4 gap-md"
                                >
                                    <div
                                        class="bg-surface-container-lowest p-md rounded-xl shadow-sm flex flex-col items-center gap-xs hover:shadow-md transition-shadow cursor-pointer"
                                    >
                                        <span
                                            class="material-symbols-outlined text-primary text-[24px]"
                                            >favorite</span
                                        >
                                        <span
                                            class="font-label-md text-on-surface"
                                            >CATIN</span
                                        >
                                    </div>
                                    <div
                                        class="bg-surface-container-lowest p-md rounded-xl shadow-sm flex flex-col items-center gap-xs hover:shadow-md transition-shadow cursor-pointer"
                                    >
                                        <span
                                            class="material-symbols-outlined text-secondary text-[24px]"
                                            >pregnant_woman</span
                                        >
                                        <span
                                            class="font-label-md text-on-surface"
                                            >BUMIL</span
                                        >
                                    </div>
                                    <div
                                        class="bg-surface-container-lowest p-md rounded-xl shadow-sm flex flex-col items-center gap-xs hover:shadow-md transition-shadow cursor-pointer"
                                    >
                                        <span
                                            class="material-symbols-outlined text-tertiary text-[24px]"
                                            >child_care</span
                                        >
                                        <span
                                            class="font-label-md text-on-surface"
                                            >BATITA</span
                                        >
                                    </div>
                                    <div
                                        class="bg-surface-container-lowest p-md rounded-xl shadow-sm flex flex-col items-center gap-xs hover:shadow-md transition-shadow cursor-pointer"
                                    >
                                        <span
                                            class="material-symbols-outlined text-on-primary-fixed-variant text-[24px]"
                                            >diversity_1</span
                                        >
                                        <span
                                            class="font-label-md text-on-surface"
                                            >PUS</span
                                        >
                                    </div>
                                    <div
                                        class="bg-surface-container-lowest p-md rounded-xl shadow-sm flex flex-col items-center gap-xs hover:shadow-md transition-shadow cursor-pointer"
                                    >
                                        <span
                                            class="material-symbols-outlined text-primary text-[24px]"
                                            >health_and_safety</span
                                        >
                                        <span
                                            class="font-label-md text-on-surface"
                                            >KB</span
                                        >
                                    </div>
                                    <div
                                        class="bg-surface-container-lowest p-md rounded-xl shadow-sm flex flex-col items-center gap-xs hover:shadow-md transition-shadow cursor-pointer"
                                    >
                                        <span
                                            class="material-symbols-outlined text-secondary text-[24px]"
                                            >school</span
                                        >
                                        <span
                                            class="font-label-md text-on-surface"
                                            >Remaja</span
                                        >
                                    </div>
                                    <div
                                        class="bg-surface-container-lowest p-md rounded-xl shadow-sm flex flex-col items-center gap-xs hover:shadow-md transition-shadow cursor-pointer"
                                    >
                                        <span
                                            class="material-symbols-outlined text-tertiary text-[24px]"
                                            >elderly</span
                                        >
                                        <span
                                            class="font-label-md text-on-surface"
                                            >Lansia</span
                                        >
                                    </div>
                                </div>
                            </section>
                        </div>
                        <!-- Right Column: Attention & Activity -->
                        <div class="lg:col-span-4 flex flex-col gap-xl">
                            <!-- Attention Required -->
                            <section
                                class="bg-surface-container-lowest rounded-xl shadow-sm p-lg flex flex-col gap-md"
                            >
                                <h3
                                    class="font-headline-md text-on-surface flex items-center gap-sm"
                                >
                                    <span
                                        class="material-symbols-outlined text-error"
                                        >priority_high</span
                                    >
                                    Perlu Perhatian
                                </h3>
                                <div class="flex flex-col gap-sm">
                                    <div
                                        class="flex justify-between items-center p-sm bg-error-container/30 rounded-lg"
                                    >
                                        <div class="flex flex-col">
                                            <span
                                                class="font-label-md text-on-surface"
                                                >12 Data Keluarga</span
                                            >
                                            <span
                                                class="font-caption text-on-surface-variant"
                                                >Perlu pembaruan tahunan</span
                                            >
                                        </div>
                                        <button
                                            class="text-primary font-label-md hover:underline"
                                        >
                                            Lihat
                                        </button>
                                    </div>
                                    <div
                                        class="flex justify-between items-center p-sm bg-tertiary-container/30 rounded-lg"
                                    >
                                        <div class="flex flex-col">
                                            <span
                                                class="font-label-md text-on-surface"
                                                >4 Draft Tersimpan</span
                                            >
                                            <span
                                                class="font-caption text-on-surface-variant"
                                                >Belum disinkronisasi</span
                                            >
                                        </div>
                                        <button
                                            class="text-primary font-label-md hover:underline"
                                        >
                                            Lihat
                                        </button>
                                    </div>
                                    <div
                                        class="flex justify-between items-center p-sm bg-surface-container rounded-lg"
                                    >
                                        <div class="flex flex-col">
                                            <span
                                                class="font-label-md text-on-surface"
                                                >3 Rekam Tidak Lengkap</span
                                            >
                                            <span
                                                class="font-caption text-on-surface-variant"
                                                >Kekurangan data NIK</span
                                            >
                                        </div>
                                        <button
                                            class="text-primary font-label-md hover:underline"
                                        >
                                            Lihat
                                        </button>
                                    </div>
                                </div>
                            </section>
                            <!-- Activity Log -->
                            <section
                                class="bg-surface-container-lowest rounded-xl shadow-sm p-lg flex flex-col gap-md flex-1"
                            >
                                <h3 class="font-headline-md text-on-surface">
                                    Aktivitas Terakhir
                                </h3>
                                <div
                                    class="flex flex-col relative before:absolute before:inset-y-0 before:left-[11px] before:w-[2px] before:bg-surface-container"
                                >
                                    <div class="flex gap-md relative mb-md">
                                        <div
                                            class="w-6 h-6 rounded-full bg-primary flex items-center justify-center shrink-0 z-10"
                                        >
                                            <span
                                                class="w-2 h-2 bg-on-primary rounded-full"
                                            ></span>
                                        </div>
                                        <div class="flex flex-col">
                                            <span
                                                class="font-label-md text-on-surface"
                                                >Data Keluarga Diperbarui</span
                                            >
                                            <span
                                                class="font-caption text-on-surface-variant"
                                                >Keluarga Bpk. Budi - Hari ini,
                                                09:30</span
                                            >
                                        </div>
                                    </div>
                                    <div class="flex gap-md relative mb-md">
                                        <div
                                            class="w-6 h-6 rounded-full bg-secondary flex items-center justify-center shrink-0 z-10"
                                        >
                                            <span
                                                class="w-2 h-2 bg-on-secondary rounded-full"
                                            ></span>
                                        </div>
                                        <div class="flex flex-col">
                                            <span
                                                class="font-label-md text-on-surface"
                                                >Data CATIN Ditambahkan</span
                                            >
                                            <span
                                                class="font-caption text-on-surface-variant"
                                                >Sari &amp; Andi - Kemarin,
                                                14:15</span
                                            >
                                        </div>
                                    </div>
                                    <div class="flex gap-md relative mb-md">
                                        <div
                                            class="w-6 h-6 rounded-full bg-surface-container-highest flex items-center justify-center shrink-0 z-10"
                                        >
                                            <span
                                                class="w-2 h-2 bg-on-surface-variant rounded-full"
                                            ></span>
                                        </div>
                                        <div class="flex flex-col">
                                            <span
                                                class="font-label-md text-on-surface"
                                                >Sinkronisasi Selesai</span
                                            >
                                            <span
                                                class="font-caption text-on-surface-variant"
                                                >45 Data - 2 Hari lalu</span
                                            >
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
                <script>
                    document.addEventListener("DOMContentLoaded", () => {
                        const dateOptions = {
                            weekday: "long",
                            year: "numeric",
                            month: "long",
                            day: "numeric",
                        };
                        document.getElementById("current-date").textContent =
                            new Date().toLocaleDateString("id-ID", dateOptions);
                    });
                </script>
            </main>
        </div>
    </body>
</html>
