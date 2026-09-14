<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <link
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0"
            rel="stylesheet"
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
                            "on-background": "#191c22",
                            "primary-fixed": "#d8e2ff",
                            primary: "#00408b",
                            "surface-container": "#ededf6",
                            "on-primary": "#ffffff",
                            "on-tertiary": "#ffffff",
                            "on-secondary-container": "#007434",
                            "inverse-on-surface": "#eff0f9",
                            "on-primary-fixed-variant": "#004493",
                            "on-primary-container": "#bfd2ff",
                            "on-tertiary-container": "#4e3d00",
                            "on-error": "#ffffff",
                            "error-container": "#ffdad6",
                            "surface-bright": "#f9f9ff",
                            "inverse-surface": "#2e3037",
                            "on-error-container": "#93000a",
                            "on-secondary-fixed-variant": "#005323",
                            "secondary-fixed": "#88faa0",
                            "surface-dim": "#d9d9e2",
                            "primary-container": "#0057b8",
                            surface: "#f9f9ff",
                            "on-primary-fixed": "#001a41",
                            outline: "#727784",
                            "on-surface": "#191c22",
                            background: "#f9f9ff",
                            "tertiary-container": "#cfa600",
                            "surface-container-high": "#e7e7f0",
                            "surface-variant": "#e1e2eb",
                            "on-secondary": "#ffffff",
                            "on-surface-variant": "#424752",
                            "secondary-fixed-dim": "#6cdd86",
                            "secondary-container": "#88faa0",
                            "on-secondary-fixed": "#00210a",
                            "surface-container-highest": "#e1e2eb",
                            "inverse-primary": "#adc7ff",
                            "outline-variant": "#c2c6d4",
                            secondary: "#006d31",
                            error: "#ba1a1a",
                            "tertiary-fixed": "#ffe08a",
                            "on-tertiary-fixed": "#241a00",
                            "surface-container-lowest": "#ffffff",
                            tertiary: "#745b00",
                            "on-tertiary-fixed-variant": "#574400",
                            "tertiary-fixed-dim": "#f1c100",
                            "primary-fixed-dim": "#adc7ff",
                            "surface-container-low": "#f2f3fc",
                            "surface-tint": "#0d5bbc",
                        },
                        borderRadius: {
                            DEFAULT: "0.25rem",
                            lg: "0.5rem",
                            xl: "0.75rem",
                            full: "9999px",
                        },
                        spacing: {
                            "container-max": "1280px",
                            unit: "4px",
                            sm: "8px",
                            md: "16px",
                            lg: "24px",
                            xxl: "64px",
                            xs: "4px",
                            gutter: "24px",
                            xl: "40px",
                        },
                        fontFamily: {
                            "label-md": ["Plus Jakarta Sans"],
                            caption: ["Plus Jakarta Sans"],
                            "display-lg": ["Plus Jakarta Sans"],
                            "headline-md": ["Plus Jakarta Sans"],
                            "headline-lg": ["Plus Jakarta Sans"],
                            "body-lg": ["Plus Jakarta Sans"],
                            "body-md": ["Plus Jakarta Sans"],
                            "display-xl": ["Plus Jakarta Sans"],
                        },
                        fontSize: {
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
                        },
                    },
                },
            };
        </script>
    </head>
    <body
        class="bg-background font-body-md text-body-md text-on-surface antialiased"
    >
        <aside
            class="fixed left-0 top-0 h-full w-72 bg-surface-container-lowest z-50 flex flex-col justify-between border-r border-outline-variant"
        >
            <div class="flex flex-col">
                <div
                    class="h-20 px-6 flex items-center gap-3 border-b-2 border-primary bg-surface-container-lowest"
                >
                    <div
                        class="w-9 h-9 bg-primary flex items-center justify-center text-on-primary font-headline-md text-headline-md font-bold"
                    >
                        P
                    </div>
                    <div class="flex flex-col">
                        <span
                            class="font-label-md text-label-md uppercase tracking-tight text-primary font-bold"
                            >Satpel PPKB</span
                        ><span
                            class="font-caption text-caption uppercase text-on-surface-variant tracking-wider"
                            >Kecamatan Cikampek</span
                        >
                    </div>
                </div>
                <div class="px-4 py-6">
                    <div
                        class="px-3 mb-2 font-caption text-caption uppercase text-outline font-semibold tracking-wider"
                    >
                        Menu Utama
                    </div>
                    <nav
                        class="flex flex-col gap-1"
                        data-active-classes="bg-primary-container text-on-primary font-bold"
                    >
                        <a
                            class="flex items-center gap-3 px-3 py-2.5 text-on-surface-variant hover:bg-surface-container hover:text-on-surface transition-colors"
                            data-path="dashboard"
                            href="#"
                            ><span class="material-symbols-outlined text-[20px]"
                                >dashboard</span
                            ><span class="font-label-md text-label-md"
                                >Dashboard</span
                            ></a
                        ><a
                            aria-current="page"
                            class="flex items-center gap-3 px-3 py-2.5 transition-colors bg-primary-container text-on-primary font-bold"
                            data-path="data-keluarga"
                            href="#"
                            ><span class="material-symbols-outlined text-[20px]"
                                >family_restroom</span
                            ><span class="font-label-md text-label-md"
                                >Data Keluarga</span
                            ></a
                        ><a
                            class="flex items-center gap-3 px-3 py-2.5 text-on-surface-variant hover:bg-surface-container hover:text-on-surface transition-colors"
                            data-path="data-individu"
                            href="#"
                            ><span class="material-symbols-outlined text-[20px]"
                                >person_search</span
                            ><span class="font-label-md text-label-md"
                                >Data Individu</span
                            ></a
                        ><a
                            class="flex items-center gap-3 px-3 py-2.5 text-on-surface-variant hover:bg-surface-container hover:text-on-surface transition-colors"
                            data-path="program"
                            href="#"
                            ><span class="material-symbols-outlined text-[20px]"
                                >assignment</span
                            ><span class="font-label-md text-label-md"
                                >Program</span
                            ></a
                        ><a
                            class="flex items-center gap-3 px-3 py-2.5 text-on-surface-variant hover:bg-surface-container hover:text-on-surface transition-colors"
                            data-path="kegiatan"
                            href="#"
                            ><span class="material-symbols-outlined text-[20px]"
                                >event_available</span
                            ><span class="font-label-md text-label-md"
                                >Kegiatan</span
                            ></a
                        ><a
                            class="flex items-center gap-3 px-3 py-2.5 text-on-surface-variant hover:bg-surface-container hover:text-on-surface transition-colors"
                            data-path="notifikasi"
                            href="#"
                            ><span class="material-symbols-outlined text-[20px]"
                                >notifications</span
                            ><span class="font-label-md text-label-md"
                                >Notifikasi</span
                            ></a
                        >
                    </nav>
                </div>
                <div class="px-4">
                    <div
                        class="px-3 mb-2 font-caption text-caption uppercase text-outline font-semibold tracking-wider"
                    >
                        Sistem
                    </div>
                    <nav
                        class="flex flex-col gap-1"
                        data-active-classes="bg-primary-container text-on-primary font-bold"
                    >
                        <a
                            class="flex items-center gap-3 px-3 py-2.5 text-on-surface-variant hover:bg-surface-container hover:text-on-surface transition-colors"
                            data-path="bantuan"
                            href="#"
                            ><span class="material-symbols-outlined text-[20px]"
                                >help</span
                            ><span class="font-label-md text-label-md"
                                >Bantuan</span
                            ></a
                        ><a
                            class="flex items-center gap-3 px-3 py-2.5 text-on-surface-variant hover:bg-surface-container hover:text-on-surface transition-colors"
                            data-path="pengaturan"
                            href="#"
                            ><span class="material-symbols-outlined text-[20px]"
                                >settings</span
                            ><span class="font-label-md text-label-md"
                                >Pengaturan</span
                            ></a
                        >
                    </nav>
                </div>
            </div>
            <div
                class="p-4 border-t border-outline-variant bg-surface-container-low"
            >
                <div
                    class="flex items-center gap-3 p-2 bg-surface-container-lowest border border-outline-variant"
                >
                    <div
                        class="w-10 h-10 bg-primary flex items-center justify-center text-on-primary font-bold text-sm shrink-0"
                    >
                        SN
                    </div>
                    <div class="flex flex-col overflow-hidden">
                        <span
                            class="font-label-md text-label-md text-on-surface truncate"
                            >Siti Nurhaliza</span
                        ><span
                            class="font-caption text-caption text-secondary font-semibold uppercase tracking-wider truncate"
                            >Kader Utama</span
                        >
                    </div>
                </div>
            </div>
        </aside>
        <div class="pl-72 flex flex-col min-h-screen">
            <header
                class="fixed top-0 left-72 right-0 h-20 bg-surface-container-lowest border-b border-outline-variant z-40 px-8 flex items-center justify-between shadow-[0_1px_8px_rgba(0,0,0,0.04)]"
            >
                <div class="flex items-center w-96">
                    <div class="relative w-full">
                        <span
                            class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline text-[20px]"
                            >search</span
                        ><input
                            class="w-full pl-10 pr-4 py-2 bg-surface-container-low border border-outline-variant text-on-surface placeholder:text-outline font-body-md text-body-md focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary"
                            placeholder="Cari NIK, KK, atau nama warga..."
                            type="text"
                        />
                    </div>
                </div>
                <div class="flex items-center gap-4">
                    <button
                        aria-label="Notifikasi"
                        class="p-2 text-on-surface-variant hover:text-on-surface hover:bg-surface-container transition-colors relative"
                        type="button"
                    >
                        <span class="material-symbols-outlined text-[22px]"
                            >notifications</span
                        ><span
                            class="absolute top-2 right-2 w-2 h-2 bg-error"
                        ></span>
                    </button>
                    <div class="h-6 w-[1px] bg-outline-variant mx-1"></div>
                    <div class="flex items-center gap-3 cursor-pointer group">
                        <div
                            class="w-8 h-8 rounded-full bg-primary flex items-center justify-center"
                        >
                            <span
                                class="material-symbols-outlined text-on-primary text-[18px]"
                                >person</span
                            >
                        </div>
                        <span
                            class="font-label-md text-label-md text-on-surface hidden md:inline-block group-hover:text-primary transition-colors"
                            >Kader Cikampek</span
                        >
                    </div>
                </div>
            </header>
            <main class="flex-1 pt-20 bg-background w-full px-8 py-8">
                <div class="flex flex-col w-full">
                    <!-- Top Navigation & Actions Bar -->
                    <div
                        class="flex flex-col md:flex-row md:items-center justify-between pb-6 gap-4"
                    >
                        <div class="flex flex-col gap-1.5">
                            <nav
                                class="flex items-center gap-2 font-caption text-caption text-on-surface-variant"
                            >
                                <a
                                    class="hover:text-primary transition-colors"
                                    href="#"
                                    >Data Keluarga</a
                                >
                                <span>/</span>
                                <span class="text-on-surface font-semibold"
                                    >Detail Keluarga</span
                                >
                            </nav>
                            <a
                                class="inline-flex items-center gap-1.5 text-primary font-label-md text-label-md hover:underline w-fit"
                                href="#"
                            >
                                <span
                                    class="material-symbols-outlined text-[18px]"
                                    >arrow_back</span
                                >
                                <span>Kembali ke Data Keluarga</span>
                            </a>
                        </div>
                        <div class="flex items-center gap-3">
                            <button
                                class="inline-flex items-center gap-2 px-4 py-2.5 bg-surface-container-lowest text-primary font-label-md text-label-md hover:bg-surface-container transition-colors"
                                type="button"
                            >
                                <span
                                    class="material-symbols-outlined text-[18px]"
                                    >edit_document</span
                                >
                                <span>Edit Data Keluarga</span>
                            </button>
                            <button
                                aria-label="Menu Opsi Lainnya"
                                class="w-10 h-10 flex items-center justify-center bg-surface-container-lowest text-on-surface-variant hover:text-on-surface hover:bg-surface-container transition-colors"
                                type="button"
                            >
                                <span
                                    class="material-symbols-outlined text-[20px]"
                                    >more_vert</span
                                >
                            </button>
                        </div>
                    </div>
                    <!-- Family Hero Header -->
                    <div class="bg-surface-container-lowest p-8 mb-6">
                        <div
                            class="flex flex-col lg:flex-row lg:items-center justify-between gap-6"
                        >
                            <div class="flex flex-col gap-3">
                                <div class="flex flex-wrap items-center gap-3">
                                    <h1
                                        class="font-headline-lg text-headline-lg text-on-surface tracking-tight"
                                    >
                                        Bpk. Supriyanto
                                    </h1>
                                    <span
                                        class="inline-flex items-center gap-1.5 px-3 py-1 bg-secondary-container/40 text-on-secondary-container font-label-md text-label-md"
                                    >
                                        <span
                                            class="material-symbols-outlined text-[16px]"
                                            >verified</span
                                        >
                                        <span>Data Lengkap</span>
                                    </span>
                                </div>
                                <div
                                    class="flex flex-wrap items-center gap-y-2 gap-x-5 text-on-surface-variant font-label-md text-label-md"
                                >
                                    <div
                                        class="flex items-center gap-1.5 bg-surface-container-low px-2.5 py-1"
                                    >
                                        <span
                                            class="material-symbols-outlined text-[18px] text-outline"
                                            >lock</span
                                        >
                                        <span
                                            class="text-on-surface tracking-wider font-semibold"
                                            >•••• •••• •••• 1234</span
                                        >
                                        <button
                                            aria-label="Salin nomor KK"
                                            class="text-outline hover:text-primary transition-colors ml-1"
                                            onclick="
                                                navigator.clipboard.writeText(
                                                    '3215082405811234',
                                                )
                                            "
                                            type="button"
                                        >
                                            <span
                                                class="material-symbols-outlined text-[16px]"
                                                >content_copy</span
                                            >
                                        </button>
                                    </div>
                                    <div class="flex items-center gap-1.5">
                                        <span
                                            class="material-symbols-outlined text-[18px] text-primary"
                                            >location_on</span
                                        >
                                        <span>Desa Cikampek Timur</span>
                                    </div>
                                    <div
                                        class="flex items-center gap-1.5 text-outline"
                                    >
                                        <span
                                            class="material-symbols-outlined text-[18px]"
                                            >update</span
                                        >
                                        <span class="font-caption text-caption"
                                            >Pembaruan: 3 September 2026, 09:42
                                            WIB</span
                                        >
                                    </div>
                                </div>
                            </div>
                            <div
                                class="flex items-center gap-4 bg-surface-container-low p-4 self-start lg:self-center"
                            >
                                <div
                                    class="w-12 h-12 bg-primary flex items-center justify-center text-on-primary"
                                >
                                    <span
                                        class="material-symbols-outlined text-[26px]"
                                        >family_restroom</span
                                    >
                                </div>
                                <div class="flex flex-col">
                                    <span
                                        class="font-caption text-caption uppercase tracking-wider text-outline font-semibold"
                                        >Tingkat Validitas</span
                                    >
                                    <span
                                        class="font-headline-md text-headline-md text-on-surface font-bold"
                                        >100% Valid</span
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Quick Summary Strip -->
                    <div
                        class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-8"
                    >
                        <div
                            class="bg-surface-container-lowest p-5 flex flex-col gap-1"
                        >
                            <span
                                class="font-caption text-caption uppercase tracking-wider text-outline font-semibold"
                                >Kepala Keluarga</span
                            >
                            <span
                                class="font-headline-md text-headline-md text-on-surface truncate"
                                >Bpk. Supriyanto</span
                            >
                            <span
                                class="font-caption text-caption text-on-surface-variant"
                                >Penanggung Jawab KK</span
                            >
                        </div>
                        <div
                            class="bg-surface-container-lowest p-5 flex flex-col gap-1"
                        >
                            <span
                                class="font-caption text-caption uppercase tracking-wider text-outline font-semibold"
                                >Jumlah Anggota</span
                            >
                            <div class="flex items-baseline gap-2">
                                <span
                                    class="font-headline-md text-headline-md text-primary font-bold"
                                    >4</span
                                >
                                <span
                                    class="font-label-md text-label-md text-on-surface-variant"
                                    >Jiwa</span
                                >
                            </div>
                            <span
                                class="font-caption text-caption text-on-surface-variant"
                                >2 Dewasa • 2 Anak</span
                            >
                        </div>
                        <div
                            class="bg-surface-container-lowest p-5 flex flex-col gap-1"
                        >
                            <span
                                class="font-caption text-caption uppercase tracking-wider text-outline font-semibold"
                                >Wilayah Binaan</span
                            >
                            <span
                                class="font-headline-md text-headline-md text-on-surface"
                                >RT 01 / RW 07</span
                            >
                            <span
                                class="font-caption text-caption text-on-surface-variant"
                                >Dusun Krajan, Cikampek Timur</span
                            >
                        </div>
                        <div
                            class="bg-surface-container-lowest p-5 flex flex-col gap-1"
                        >
                            <span
                                class="font-caption text-caption uppercase tracking-wider text-outline font-semibold"
                                >Status Kependudukan</span
                            >
                            <div
                                class="flex items-center gap-1.5 text-secondary"
                            >
                                <span
                                    class="material-symbols-outlined text-[20px]"
                                    >verified_user</span
                                >
                                <span
                                    class="font-headline-md text-headline-md font-bold"
                                    >Terverifikasi</span
                                >
                            </div>
                            <span
                                class="font-caption text-caption text-on-surface-variant"
                                >Tersinkronisasi Dukcapil</span
                            >
                        </div>
                    </div>
                    <!-- Two-Column Workspace -->
                    <div
                        class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start"
                    >
                        <!-- Left Column (Main Focus - 65%) -->
                        <div class="lg:col-span-8 flex flex-col gap-8">
                            <!-- Card: Informasi Keluarga -->
                            <div
                                class="bg-surface-container-lowest p-6 flex flex-col gap-6"
                            >
                                <div
                                    class="flex items-center justify-between pb-4 bg-surface-container-low px-4 py-3"
                                >
                                    <div class="flex items-center gap-2">
                                        <span
                                            class="material-symbols-outlined text-primary text-[20px]"
                                            >badge</span
                                        >
                                        <h2
                                            class="font-headline-md text-headline-md text-on-surface"
                                        >
                                            Informasi Keluarga
                                        </h2>
                                    </div>
                                    <button
                                        class="text-primary hover:underline font-label-md text-label-md flex items-center gap-1"
                                        type="button"
                                    >
                                        <span
                                            class="material-symbols-outlined text-[16px]"
                                            >edit</span
                                        >
                                        <span>Ubah</span>
                                    </button>
                                </div>
                                <div
                                    class="grid grid-cols-1 sm:grid-cols-2 gap-y-5 gap-x-8 px-2"
                                >
                                    <div class="flex flex-col gap-1">
                                        <span
                                            class="font-caption text-caption uppercase tracking-wider text-outline"
                                            >Nomor Kartu Keluarga</span
                                        >
                                        <div
                                            class="flex items-center gap-2 font-body-md text-body-md text-on-surface font-semibold"
                                        >
                                            <span>•••• •••• •••• 1234</span>
                                            <span
                                                class="px-2 py-0.5 bg-surface-container text-outline text-[11px] uppercase font-bold tracking-wider"
                                                >Masking</span
                                            >
                                        </div>
                                    </div>
                                    <div class="flex flex-col gap-1">
                                        <span
                                            class="font-caption text-caption uppercase tracking-wider text-outline"
                                            >Kepala Keluarga</span
                                        >
                                        <span
                                            class="font-body-md text-body-md text-on-surface font-semibold"
                                            >Bpk. Supriyanto</span
                                        >
                                    </div>
                                    <div class="flex flex-col gap-1">
                                        <span
                                            class="font-caption text-caption uppercase tracking-wider text-outline"
                                            >Alamat Domisili</span
                                        >
                                        <span
                                            class="font-body-md text-body-md text-on-surface"
                                            >Jl. Mawar No. 12</span
                                        >
                                    </div>
                                    <div class="flex flex-col gap-1">
                                        <span
                                            class="font-caption text-caption uppercase tracking-wider text-outline"
                                            >Dusun / Lingkungan</span
                                        >
                                        <span
                                            class="font-body-md text-body-md text-on-surface"
                                            >Dusun Krajan</span
                                        >
                                    </div>
                                    <div class="flex flex-col gap-1">
                                        <span
                                            class="font-caption text-caption uppercase tracking-wider text-outline"
                                            >Rukun Tetangga / Warga</span
                                        >
                                        <span
                                            class="font-body-md text-body-md text-on-surface"
                                            >RT 01 / RW 07</span
                                        >
                                    </div>
                                    <div class="flex flex-col gap-1">
                                        <span
                                            class="font-caption text-caption uppercase tracking-wider text-outline"
                                            >Desa / Kelurahan</span
                                        >
                                        <span
                                            class="font-body-md text-body-md text-on-surface"
                                            >Cikampek Timur</span
                                        >
                                    </div>
                                    <div class="flex flex-col gap-1">
                                        <span
                                            class="font-caption text-caption uppercase tracking-wider text-outline"
                                            >Kecamatan Satpel</span
                                        >
                                        <span
                                            class="font-body-md text-body-md text-on-surface"
                                            >Kecamatan Cikampek (Wilayah
                                            Tugas)</span
                                        >
                                    </div>
                                    <div class="flex flex-col gap-1">
                                        <span
                                            class="font-caption text-caption uppercase tracking-wider text-outline"
                                            >Kode Pos</span
                                        >
                                        <span
                                            class="font-body-md text-body-md text-on-surface"
                                            >41373</span
                                        >
                                    </div>
                                    <div
                                        class="flex flex-col gap-1 sm:col-span-2"
                                    >
                                        <span
                                            class="font-caption text-caption uppercase tracking-wider text-outline"
                                            >Status Kepemilikan Rumah</span
                                        >
                                        <div class="flex items-center gap-2">
                                            <span
                                                class="font-body-md text-body-md text-on-surface"
                                                >Rumah Sendiri (Milik
                                                Pribadi)</span
                                            >
                                            <span
                                                class="px-2 py-0.5 bg-primary-fixed text-on-primary-fixed font-caption text-caption"
                                                >Layak Huni</span
                                            >
                                        </div>
                                    </div>
                                    <div
                                        class="flex flex-col gap-2 sm:col-span-2 bg-surface-container-low p-4"
                                    >
                                        <div
                                            class="flex items-center gap-1.5 text-primary"
                                        >
                                            <span
                                                class="material-symbols-outlined text-[18px]"
                                                >sticky_note_2</span
                                            >
                                            <span
                                                class="font-label-md text-label-md font-semibold"
                                                >Catatan Lapangan Kader</span
                                            >
                                        </div>
                                        <p
                                            class="font-body-md text-body-md text-on-surface-variant leading-relaxed"
                                        >
                                            Keluarga aktif dalam posyandu
                                            Teratai 03. Terdaftar sebagai
                                            penerima pendampingan gizi balita
                                            berkala dan kunjungan PUS terpadu.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Section: Anggota Keluarga (Main Focus) -->
                            <div class="flex flex-col gap-5">
                                <div
                                    class="flex flex-col sm:flex-row sm:items-center justify-between gap-4"
                                >
                                    <div class="flex flex-col gap-1">
                                        <div class="flex items-center gap-3">
                                            <h2
                                                class="font-headline-lg text-headline-lg text-on-surface"
                                            >
                                                Anggota Keluarga
                                            </h2>
                                            <span
                                                class="px-2.5 py-1 bg-surface-container-high text-on-surface font-label-md text-label-md"
                                            >
                                                4 Anggota Terdaftar
                                            </span>
                                        </div>
                                        <p
                                            class="font-body-md text-body-md text-on-surface-variant"
                                        >
                                            Daftar individu dalam keluarga ini.
                                            Satu individu dapat memiliki peran
                                            serta lebih dari satu klasifikasi
                                            program pendampingan.
                                        </p>
                                    </div>
                                    <button
                                        class="inline-flex items-center gap-2 px-5 py-2.5 bg-primary-container text-on-primary font-label-md text-label-md hover:bg-primary transition-colors shrink-0"
                                        type="button"
                                    >
                                        <span
                                            class="material-symbols-outlined text-[20px]"
                                            >person_add</span
                                        >
                                        <span>+ Tambah Anggota</span>
                                    </button>
                                </div>
                                <!-- Members Card List -->
                                <div class="flex flex-col gap-4">
                                    <!-- Member 1: Bpk. Supriyanto (Kepala Keluarga) -->
                                    <div
                                        class="bg-surface-container-lowest p-6 flex flex-col gap-4"
                                    >
                                        <div
                                            class="flex flex-col sm:flex-row sm:items-start justify-between gap-4"
                                        >
                                            <div class="flex items-start gap-4">
                                                <div
                                                    class="w-12 h-12 bg-surface-container flex items-center justify-center text-primary font-headline-md text-headline-md font-bold shrink-0"
                                                >
                                                    SP
                                                </div>
                                                <div
                                                    class="flex flex-col gap-1"
                                                >
                                                    <div
                                                        class="flex flex-wrap items-center gap-2"
                                                    >
                                                        <span
                                                            class="font-headline-md text-headline-md text-on-surface font-bold"
                                                            >Bpk.
                                                            Supriyanto</span
                                                        >
                                                        <span
                                                            class="px-2 py-0.5 bg-primary-fixed text-on-primary-fixed font-label-md text-label-md"
                                                            >Kepala
                                                            Keluarga</span
                                                        >
                                                        <span
                                                            class="px-2 py-0.5 bg-secondary-container/40 text-on-secondary-container font-caption text-caption flex items-center gap-1"
                                                        >
                                                            <span
                                                                class="material-symbols-outlined text-[14px]"
                                                                >check</span
                                                            >
                                                            Lengkap
                                                        </span>
                                                    </div>
                                                    <div
                                                        class="flex flex-wrap items-center gap-y-1 gap-x-4 text-on-surface-variant font-body-md text-body-md"
                                                    >
                                                        <span>Laki-laki</span>
                                                        <span>•</span>
                                                        <span
                                                            >45 tahun (12 Mei
                                                            1981)</span
                                                        >
                                                        <span>•</span>
                                                        <span
                                                            class="font-mono text-outline"
                                                            >NIK:
                                                            321508******0001</span
                                                        >
                                                    </div>
                                                </div>
                                            </div>
                                            <a
                                                class="inline-flex items-center gap-1 px-4 py-2 bg-surface-container text-primary font-label-md text-label-md hover:bg-surface-container-high transition-colors shrink-0"
                                                href="#"
                                            >
                                                <span>Lihat Profil</span>
                                                <span
                                                    class="material-symbols-outlined text-[16px]"
                                                    >arrow_forward</span
                                                >
                                            </a>
                                        </div>
                                        <div
                                            class="bg-surface-container-low px-4 py-3 flex flex-wrap items-center gap-2"
                                        >
                                            <span
                                                class="font-caption text-caption uppercase tracking-wider text-outline font-semibold"
                                                >Klasifikasi / Program:</span
                                            >
                                            <span
                                                class="px-2.5 py-1 bg-surface-container-lowest text-primary font-label-md text-label-md"
                                            >
                                                PUS (Pasangan Usia Subur)
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Member 2: Ibu Siti Aminah (Istri) -->
                                    <div
                                        class="bg-surface-container-lowest p-6 flex flex-col gap-4"
                                    >
                                        <div
                                            class="flex flex-col sm:flex-row sm:items-start justify-between gap-4"
                                        >
                                            <div class="flex items-start gap-4">
                                                <div
                                                    class="w-12 h-12 bg-surface-container flex items-center justify-center text-primary font-headline-md text-headline-md font-bold shrink-0"
                                                >
                                                    SA
                                                </div>
                                                <div
                                                    class="flex flex-col gap-1"
                                                >
                                                    <div
                                                        class="flex flex-wrap items-center gap-2"
                                                    >
                                                        <span
                                                            class="font-headline-md text-headline-md text-on-surface font-bold"
                                                            >Ibu Siti
                                                            Aminah</span
                                                        >
                                                        <span
                                                            class="px-2 py-0.5 bg-surface-variant text-on-surface-variant font-label-md text-label-md"
                                                            >Istri</span
                                                        >
                                                        <span
                                                            class="px-2 py-0.5 bg-secondary-container/40 text-on-secondary-container font-caption text-caption flex items-center gap-1"
                                                        >
                                                            <span
                                                                class="material-symbols-outlined text-[14px]"
                                                                >check</span
                                                            >
                                                            Lengkap
                                                        </span>
                                                    </div>
                                                    <div
                                                        class="flex flex-wrap items-center gap-y-1 gap-x-4 text-on-surface-variant font-body-md text-body-md"
                                                    >
                                                        <span>Perempuan</span>
                                                        <span>•</span>
                                                        <span
                                                            >41 tahun (24
                                                            Agustus 1985)</span
                                                        >
                                                        <span>•</span>
                                                        <span
                                                            class="font-mono text-outline"
                                                            >NIK:
                                                            321508******0004</span
                                                        >
                                                    </div>
                                                </div>
                                            </div>
                                            <a
                                                class="inline-flex items-center gap-1 px-4 py-2 bg-surface-container text-primary font-label-md text-label-md hover:bg-surface-container-high transition-colors shrink-0"
                                                href="#"
                                            >
                                                <span>Lihat Profil</span>
                                                <span
                                                    class="material-symbols-outlined text-[16px]"
                                                    >arrow_forward</span
                                                >
                                            </a>
                                        </div>
                                        <div
                                            class="bg-surface-container-low px-4 py-3 flex flex-wrap items-center gap-2"
                                        >
                                            <span
                                                class="font-caption text-caption uppercase tracking-wider text-outline font-semibold"
                                                >Klasifikasi / Program:</span
                                            >
                                            <span
                                                class="px-2.5 py-1 bg-surface-container-lowest text-primary font-label-md text-label-md"
                                            >
                                                PUS (Pasangan Usia Subur)
                                            </span>
                                            <span
                                                class="px-2.5 py-1 bg-secondary-container/30 text-on-secondary-container font-label-md text-label-md"
                                            >
                                                KB Aktif - IUD
                                            </span>
                                            <span
                                                class="px-2.5 py-1 bg-tertiary-fixed text-on-tertiary-fixed font-label-md text-label-md flex items-center gap-1"
                                            >
                                                <span
                                                    class="material-symbols-outlined text-[16px]"
                                                    >pregnant_woman</span
                                                >
                                                <span
                                                    >BUMIL (Hamil 5 Bulan)</span
                                                >
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Member 3: Ahmad Supriyanto (Anak Pertama - Attention) -->
                                    <div
                                        class="bg-surface-container-lowest p-6 flex flex-col gap-4"
                                    >
                                        <div
                                            class="flex flex-col sm:flex-row sm:items-start justify-between gap-4"
                                        >
                                            <div class="flex items-start gap-4">
                                                <div
                                                    class="w-12 h-12 bg-surface-container flex items-center justify-center text-primary font-headline-md text-headline-md font-bold shrink-0"
                                                >
                                                    AS
                                                </div>
                                                <div
                                                    class="flex flex-col gap-1"
                                                >
                                                    <div
                                                        class="flex flex-wrap items-center gap-2"
                                                    >
                                                        <span
                                                            class="font-headline-md text-headline-md text-on-surface font-bold"
                                                            >Ahmad
                                                            Supriyanto</span
                                                        >
                                                        <span
                                                            class="px-2 py-0.5 bg-surface-variant text-on-surface-variant font-label-md text-label-md"
                                                            >Anak Pertama</span
                                                        >
                                                        <span
                                                            class="px-2 py-0.5 bg-error-container text-on-error-container font-caption text-caption flex items-center gap-1"
                                                        >
                                                            <span
                                                                class="material-symbols-outlined text-[14px]"
                                                                >priority_high</span
                                                            >
                                                            Perlu Diperbarui
                                                        </span>
                                                    </div>
                                                    <div
                                                        class="flex flex-wrap items-center gap-y-1 gap-x-4 text-on-surface-variant font-body-md text-body-md"
                                                    >
                                                        <span>Laki-laki</span>
                                                        <span>•</span>
                                                        <span
                                                            >12 tahun (10
                                                            Oktober 2013)</span
                                                        >
                                                        <span>•</span>
                                                        <span
                                                            class="font-mono text-outline"
                                                            >NIK:
                                                            321508******0012</span
                                                        >
                                                    </div>
                                                </div>
                                            </div>
                                            <a
                                                class="inline-flex items-center gap-1 px-4 py-2 bg-error text-on-error font-label-md text-label-md hover:bg-error/90 transition-colors shrink-0"
                                                href="#"
                                            >
                                                <span>Perbarui Data</span>
                                                <span
                                                    class="material-symbols-outlined text-[16px]"
                                                    >arrow_forward</span
                                                >
                                            </a>
                                        </div>
                                        <div
                                            class="bg-surface-container-low px-4 py-3 flex flex-col sm:flex-row sm:items-center justify-between gap-3"
                                        >
                                            <div
                                                class="flex flex-wrap items-center gap-2"
                                            >
                                                <span
                                                    class="font-caption text-caption uppercase tracking-wider text-outline font-semibold"
                                                    >Klasifikasi /
                                                    Program:</span
                                                >
                                                <span
                                                    class="px-2.5 py-1 bg-surface-container-lowest text-on-surface font-label-md text-label-md"
                                                >
                                                    Remaja (BKR)
                                                </span>
                                            </div>
                                            <div
                                                class="flex items-center gap-1.5 text-on-error-container font-caption text-caption"
                                            >
                                                <span
                                                    class="material-symbols-outlined text-[16px] text-error"
                                                    >info</span
                                                >
                                                <span
                                                    >Catatan: Imunisasi Lanjutan
                                                    Belum Terdata</span
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Member 4: Aisyah Supriyanto (Anak Kedua) -->
                                    <div
                                        class="bg-surface-container-lowest p-6 flex flex-col gap-4"
                                    >
                                        <div
                                            class="flex flex-col sm:flex-row sm:items-start justify-between gap-4"
                                        >
                                            <div class="flex items-start gap-4">
                                                <div
                                                    class="w-12 h-12 bg-surface-container flex items-center justify-center text-primary font-headline-md text-headline-md font-bold shrink-0"
                                                >
                                                    AY
                                                </div>
                                                <div
                                                    class="flex flex-col gap-1"
                                                >
                                                    <div
                                                        class="flex flex-wrap items-center gap-2"
                                                    >
                                                        <span
                                                            class="font-headline-md text-headline-md text-on-surface font-bold"
                                                            >Aisyah
                                                            Supriyanto</span
                                                        >
                                                        <span
                                                            class="px-2 py-0.5 bg-surface-variant text-on-surface-variant font-label-md text-label-md"
                                                            >Anak Kedua</span
                                                        >
                                                        <span
                                                            class="px-2 py-0.5 bg-secondary-container/40 text-on-secondary-container font-caption text-caption flex items-center gap-1"
                                                        >
                                                            <span
                                                                class="material-symbols-outlined text-[14px]"
                                                                >check</span
                                                            >
                                                            Lengkap
                                                        </span>
                                                    </div>
                                                    <div
                                                        class="flex flex-wrap items-center gap-y-1 gap-x-4 text-on-surface-variant font-body-md text-body-md"
                                                    >
                                                        <span>Perempuan</span>
                                                        <span>•</span>
                                                        <span
                                                            >7 tahun (3 Maret
                                                            2019)</span
                                                        >
                                                        <span>•</span>
                                                        <span
                                                            class="font-mono text-outline"
                                                            >NIK:
                                                            321508******0018</span
                                                        >
                                                    </div>
                                                </div>
                                            </div>
                                            <a
                                                class="inline-flex items-center gap-1 px-4 py-2 bg-surface-container text-primary font-label-md text-label-md hover:bg-surface-container-high transition-colors shrink-0"
                                                href="#"
                                            >
                                                <span>Lihat Profil</span>
                                                <span
                                                    class="material-symbols-outlined text-[16px]"
                                                    >arrow_forward</span
                                                >
                                            </a>
                                        </div>
                                        <div
                                            class="bg-surface-container-low px-4 py-3 flex flex-wrap items-center gap-2"
                                        >
                                            <span
                                                class="font-caption text-caption uppercase tracking-wider text-outline font-semibold"
                                                >Klasifikasi / Program:</span
                                            >
                                            <span
                                                class="px-2.5 py-1 bg-surface-container-lowest text-secondary font-label-md text-label-md"
                                            >
                                                BATITA / Anak
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Right Column (Supporting Sidebar - 35%) -->
                        <div class="lg:col-span-4 flex flex-col gap-6">
                            <!-- Card: Ringkasan Program Keluarga -->
                            <div
                                class="bg-surface-container-lowest p-6 flex flex-col gap-5"
                            >
                                <div
                                    class="flex items-center justify-between pb-3 bg-surface-container-low px-4 py-3"
                                >
                                    <h3
                                        class="font-headline-md text-headline-md text-on-surface"
                                    >
                                        Ringkasan Program
                                    </h3>
                                    <a
                                        class="font-caption text-caption uppercase text-primary font-semibold hover:underline"
                                        href="#"
                                        >Lihat Semua</a
                                    >
                                </div>
                                <p
                                    class="font-body-md text-body-md text-on-surface-variant"
                                >
                                    Klasifikasi program PPKB yang terhubung
                                    dengan anggota keluarga ini:
                                </p>
                                <!-- Programs List -->
                                <div class="flex flex-col gap-3">
                                    <div
                                        class="flex items-center justify-between p-3 bg-surface-container-low"
                                    >
                                        <div class="flex items-center gap-3">
                                            <div
                                                class="w-3 h-3 bg-primary shrink-0"
                                            ></div>
                                            <div class="flex flex-col">
                                                <span
                                                    class="font-label-md text-label-md text-on-surface font-semibold"
                                                    >PUS (Pasangan Usia
                                                    Subur)</span
                                                >
                                                <span
                                                    class="font-caption text-caption text-on-surface-variant"
                                                    >Bpk. Supriyanto &amp; Ibu
                                                    Siti Aminah</span
                                                >
                                            </div>
                                        </div>
                                        <span
                                            class="px-2 py-0.5 bg-surface-container text-on-surface font-label-md text-label-md"
                                            >2 Jiwa</span
                                        >
                                    </div>
                                    <div
                                        class="flex items-center justify-between p-3 bg-surface-container-low"
                                    >
                                        <div class="flex items-center gap-3">
                                            <div
                                                class="w-3 h-3 bg-tertiary shrink-0"
                                            ></div>
                                            <div class="flex flex-col">
                                                <span
                                                    class="font-label-md text-label-md text-on-surface font-semibold"
                                                    >BUMIL (Ibu Hamil)</span
                                                >
                                                <span
                                                    class="font-caption text-caption text-on-surface-variant"
                                                    >Ibu Siti Aminah (Trimester
                                                    2)</span
                                                >
                                            </div>
                                        </div>
                                        <span
                                            class="px-2 py-0.5 bg-surface-container text-on-surface font-label-md text-label-md"
                                            >1 Jiwa</span
                                        >
                                    </div>
                                    <div
                                        class="flex items-center justify-between p-3 bg-surface-container-low"
                                    >
                                        <div class="flex items-center gap-3">
                                            <div
                                                class="w-3 h-3 bg-secondary shrink-0"
                                            ></div>
                                            <div class="flex flex-col">
                                                <span
                                                    class="font-label-md text-label-md text-on-surface font-semibold"
                                                    >KB Aktif</span
                                                >
                                                <span
                                                    class="font-caption text-caption text-on-surface-variant"
                                                    >Metode Kontrasepsi
                                                    IUD</span
                                                >
                                            </div>
                                        </div>
                                        <span
                                            class="px-2 py-0.5 bg-surface-container text-on-surface font-label-md text-label-md"
                                            >1 Jiwa</span
                                        >
                                    </div>
                                    <div
                                        class="flex items-center justify-between p-3 bg-surface-container-low"
                                    >
                                        <div class="flex items-center gap-3">
                                            <div
                                                class="w-3 h-3 bg-outline shrink-0"
                                            ></div>
                                            <div class="flex flex-col">
                                                <span
                                                    class="font-label-md text-label-md text-on-surface font-semibold"
                                                    >Remaja (BKR)</span
                                                >
                                                <span
                                                    class="font-caption text-caption text-on-surface-variant"
                                                    >Ahmad Supriyanto (12
                                                    Thn)</span
                                                >
                                            </div>
                                        </div>
                                        <span
                                            class="px-2 py-0.5 bg-surface-container text-on-surface font-label-md text-label-md"
                                            >1 Jiwa</span
                                        >
                                    </div>
                                    <div
                                        class="flex items-center justify-between p-3 bg-surface-container-low"
                                    >
                                        <div class="flex items-center gap-3">
                                            <div
                                                class="w-3 h-3 bg-primary-container shrink-0"
                                            ></div>
                                            <div class="flex flex-col">
                                                <span
                                                    class="font-label-md text-label-md text-on-surface font-semibold"
                                                    >Anak / Batita</span
                                                >
                                                <span
                                                    class="font-caption text-caption text-on-surface-variant"
                                                    >Aisyah Supriyanto (7
                                                    Thn)</span
                                                >
                                            </div>
                                        </div>
                                        <span
                                            class="px-2 py-0.5 bg-surface-container text-on-surface font-label-md text-label-md"
                                            >1 Jiwa</span
                                        >
                                    </div>
                                </div>
                                <div class="pt-2">
                                    <p
                                        class="font-caption text-caption text-outline italic"
                                    >
                                        * Klasifikasi dihitung otomatis dari
                                        data individu masing-masing anggota
                                        keluarga.
                                    </p>
                                </div>
                            </div>
                            <!-- Card: Riwayat Aktivitas (Timeline) -->
                            <div
                                class="bg-surface-container-lowest p-6 flex flex-col gap-5"
                            >
                                <div
                                    class="pb-3 bg-surface-container-low px-4 py-3"
                                >
                                    <h3
                                        class="font-headline-md text-headline-md text-on-surface"
                                    >
                                        Riwayat Aktivitas
                                    </h3>
                                </div>
                                <div
                                    class="relative pl-6 flex flex-col gap-6 before:content-[''] before:absolute before:left-2 before:top-2 before:bottom-2 before:w-[2px] before:bg-surface-container-highest"
                                >
                                    <div class="relative flex flex-col gap-1">
                                        <div
                                            class="absolute -left-6 top-1 w-3 h-3 bg-primary"
                                        ></div>
                                        <span
                                            class="font-caption text-caption text-outline"
                                            >3 Sep 2026 • 09:42</span
                                        >
                                        <p
                                            class="font-body-md text-body-md text-on-surface"
                                        >
                                            Data keluarga diperbarui oleh
                                            <span
                                                class="font-semibold text-primary"
                                                >Kader Siti Nurhaliza</span
                                            >
                                        </p>
                                    </div>
                                    <div class="relative flex flex-col gap-1">
                                        <div
                                            class="absolute -left-6 top-1 w-3 h-3 bg-primary"
                                        ></div>
                                        <span
                                            class="font-caption text-caption text-outline"
                                            >2 Sep 2026 • 14:15</span
                                        >
                                        <p
                                            class="font-body-md text-body-md text-on-surface"
                                        >
                                            <span class="font-semibold"
                                                >Ahmad Supriyanto</span
                                            >
                                            ditambahkan ke dalam KK
                                        </p>
                                    </div>
                                    <div class="relative flex flex-col gap-1">
                                        <div
                                            class="absolute -left-6 top-1 w-3 h-3 bg-tertiary"
                                        ></div>
                                        <span
                                            class="font-caption text-caption text-outline"
                                            >28 Agu 2026 • 10:30</span
                                        >
                                        <p
                                            class="font-body-md text-body-md text-on-surface"
                                        >
                                            Status kehamilan Ibu Siti Aminah
                                            diperbarui (<span
                                                class="font-semibold text-tertiary"
                                                >BUMIL Trimester 2</span
                                            >)
                                        </p>
                                    </div>
                                    <div class="relative flex flex-col gap-1">
                                        <div
                                            class="absolute -left-6 top-1 w-3 h-3 bg-secondary"
                                        ></div>
                                        <span
                                            class="font-caption text-caption text-outline"
                                            >15 Agu 2026 • 08:00</span
                                        >
                                        <p
                                            class="font-body-md text-body-md text-on-surface"
                                        >
                                            Sinkronisasi data kependudukan
                                            berhasil dengan server pusat
                                            kecamatan
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Card: Privacy Notice Callout -->
                            <div
                                class="bg-surface-container-low p-5 flex flex-col gap-3"
                            >
                                <div
                                    class="flex items-center gap-2 text-primary font-label-md text-label-md"
                                >
                                    <span
                                        class="material-symbols-outlined text-[20px]"
                                        >shield</span
                                    >
                                    <span>Jaminan Privasi &amp; Hak Akses</span>
                                </div>
                                <p
                                    class="font-caption text-caption text-on-surface-variant leading-relaxed"
                                >
                                    Data keluarga ini dilindungi sesuai regulasi
                                    Satu Data Kependudukan PPKB. NIK dan KK
                                    tersimpan secara terenkripsi dan hanya dapat
                                    diakses oleh kader resmi wilayah tugas Desa
                                    Cikampek Timur.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </body>
</html>
