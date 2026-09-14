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
                <div class="flex flex-col w-full">
                    <div class="px-xl py-xl space-y-xl">
                        <div
                            class="flex flex-col md:flex-row justify-between items-start md:items-end gap-md"
                        >
                            <div>
                                <h1
                                    class="font-headline-lg text-headline-lg text-on-surface mb-xs"
                                >
                                    Data Keluarga
                                </h1>
                                <p
                                    class="font-body-md text-body-md text-on-surface-variant"
                                >
                                    Kelola dan perbarui data keluarga di wilayah
                                    kerja Anda.
                                </p>
                            </div>
                            <div class="flex items-center gap-md">
                                <button
                                    class="bg-primary text-on-primary px-lg py-md rounded-none font-label-md text-label-md hover:bg-primary-container transition-colors shadow-md flex items-center gap-sm"
                                >
                                    <span
                                        class="material-symbols-outlined text-[20px]"
                                        >add</span
                                    >
                                    Tambah Keluarga
                                </button>
                            </div>
                        </div>
                        <div class="bg-surface-container-lowest p-md shadow-sm">
                            <div
                                class="flex flex-col lg:flex-row gap-md items-center"
                            >
                                <div class="relative w-full lg:w-96 shrink-0">
                                    <span
                                        class="material-symbols-outlined absolute left-md top-1/2 -translate-y-1/2 text-on-surface-variant"
                                        >search</span
                                    >
                                    <input
                                        class="w-full pl-xxl pr-md py-md bg-surface border-b-2 border-transparent focus:border-primary focus:bg-surface-container-low transition-colors outline-none font-body-md text-on-surface placeholder:text-outline rounded-none"
                                        placeholder="Cari berdasarkan nama, NIK, atau no KK..."
                                        type="text"
                                    />
                                </div>
                                <div class="flex flex-wrap gap-sm w-full">
                                    <select
                                        class="bg-surface px-md py-md font-body-md text-on-surface border-b border-transparent focus:border-primary outline-none min-w-[140px] shadow-sm appearance-none cursor-pointer"
                                    >
                                        <option>Semua Desa</option>
                                        <option>Cikampek Kota</option>
                                        <option>Cikampek Barat</option>
                                    </select>
                                    <select
                                        class="bg-surface px-md py-md font-body-md text-on-surface border-b border-transparent focus:border-primary outline-none min-w-[120px] shadow-sm appearance-none cursor-pointer"
                                    >
                                        <option>Dusun</option>
                                        <option>Dusun I</option>
                                        <option>Dusun II</option>
                                    </select>
                                    <select
                                        class="bg-surface px-md py-md font-body-md text-on-surface border-b border-transparent focus:border-primary outline-none min-w-[100px] shadow-sm appearance-none cursor-pointer"
                                    >
                                        <option>RT/RW</option>
                                        <option>01/01</option>
                                        <option>02/01</option>
                                    </select>
                                    <select
                                        class="bg-surface px-md py-md font-body-md text-on-surface border-b border-transparent focus:border-primary outline-none min-w-[140px] shadow-sm appearance-none cursor-pointer"
                                    >
                                        <option>Status Data</option>
                                        <option>Lengkap</option>
                                        <option>Perlu Diperbarui</option>
                                        <option>Belum Lengkap</option>
                                    </select>
                                    <button
                                        class="bg-surface-container-low text-on-surface p-md shadow-sm hover:bg-surface-container transition-colors ml-auto flex items-center justify-center"
                                    >
                                        <span class="material-symbols-outlined"
                                            >filter_list</span
                                        >
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div
                            class="bg-surface-container-lowest shadow-sm overflow-hidden"
                        >
                            <div class="overflow-x-auto">
                                <table
                                    class="w-full text-left font-body-md text-on-surface border-collapse"
                                >
                                    <thead>
                                        <tr
                                            class="bg-surface-container border-b-2 border-outline-variant/30 text-label-md font-label-md text-on-surface-variant uppercase tracking-wider"
                                        >
                                            <th class="py-md px-md">
                                                Nomor KK
                                            </th>
                                            <th class="py-md px-md">
                                                Kepala Keluarga
                                            </th>
                                            <th
                                                class="py-md px-md hidden md:table-cell"
                                            >
                                                Alamat
                                            </th>
                                            <th
                                                class="py-md px-md hidden lg:table-cell"
                                            >
                                                Wilayah
                                            </th>
                                            <th class="py-md px-md text-center">
                                                Anggota
                                            </th>
                                            <th class="py-md px-md">Status</th>
                                            <th
                                                class="py-md px-md hidden xl:table-cell"
                                            >
                                                Diperbarui
                                            </th>
                                            <th class="py-md px-md text-right">
                                                Aksi
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody
                                        class="divide-y divide-outline-variant/10"
                                    >
                                        <tr
                                            class="hover:bg-surface-container-low transition-colors group"
                                        >
                                            <td
                                                class="py-md px-md font-mono text-sm tracking-wider"
                                            >
                                                321512********
                                            </td>
                                            <td
                                                class="py-md px-md font-semibold"
                                            >
                                                Budi Santoso
                                            </td>
                                            <td
                                                class="py-md px-md hidden md:table-cell text-on-surface-variant text-sm truncate max-w-[200px]"
                                            >
                                                Jl. Mawar No 12, Perumahan Indah
                                            </td>
                                            <td
                                                class="py-md px-md hidden lg:table-cell text-sm text-on-surface-variant"
                                            >
                                                RT 01/RW 02, Cikampek Barat
                                            </td>
                                            <td class="py-md px-md text-center">
                                                4
                                            </td>
                                            <td class="py-md px-md">
                                                <span
                                                    class="inline-flex items-center px-2.5 py-0.5 rounded-none text-xs font-semibold bg-secondary/10 text-secondary border border-secondary/20"
                                                    >Lengkap</span
                                                >
                                            </td>
                                            <td
                                                class="py-md px-md hidden xl:table-cell text-sm text-on-surface-variant"
                                            >
                                                12 Okt 2023
                                            </td>
                                            <td class="py-md px-md text-right">
                                                <button
                                                    class="text-primary hover:text-primary-container font-label-md text-sm transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100 flex items-center justify-end w-full gap-xs"
                                                >
                                                    Lihat Detail
                                                    <span
                                                        class="material-symbols-outlined text-[16px]"
                                                        >arrow_forward</span
                                                    >
                                                </button>
                                            </td>
                                        </tr>
                                        <tr
                                            class="hover:bg-surface-container-low transition-colors group"
                                        >
                                            <td
                                                class="py-md px-md font-mono text-sm tracking-wider"
                                            >
                                                321545********
                                            </td>
                                            <td
                                                class="py-md px-md font-semibold"
                                            >
                                                Siti Aminah
                                            </td>
                                            <td
                                                class="py-md px-md hidden md:table-cell text-on-surface-variant text-sm truncate max-w-[200px]"
                                            >
                                                Gg. Kenanga III No 45
                                            </td>
                                            <td
                                                class="py-md px-md hidden lg:table-cell text-sm text-on-surface-variant"
                                            >
                                                RT 03/RW 01, Cikampek Kota
                                            </td>
                                            <td class="py-md px-md text-center">
                                                2
                                            </td>
                                            <td class="py-md px-md">
                                                <span
                                                    class="inline-flex items-center px-2.5 py-0.5 rounded-none text-xs font-semibold bg-tertiary-container/20 text-tertiary-container border border-tertiary-container/30"
                                                    >Perlu Diperbarui</span
                                                >
                                            </td>
                                            <td
                                                class="py-md px-md hidden xl:table-cell text-sm text-on-surface-variant"
                                            >
                                                05 Sep 2023
                                            </td>
                                            <td class="py-md px-md text-right">
                                                <button
                                                    class="text-primary hover:text-primary-container font-label-md text-sm transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100 flex items-center justify-end w-full gap-xs"
                                                >
                                                    Lihat Detail
                                                    <span
                                                        class="material-symbols-outlined text-[16px]"
                                                        >arrow_forward</span
                                                    >
                                                </button>
                                            </td>
                                        </tr>
                                        <tr
                                            class="hover:bg-surface-container-low transition-colors group bg-error-container/10"
                                        >
                                            <td
                                                class="py-md px-md font-mono text-sm tracking-wider"
                                            >
                                                321588********
                                            </td>
                                            <td
                                                class="py-md px-md font-semibold text-error"
                                            >
                                                Ahmad Yani
                                            </td>
                                            <td
                                                class="py-md px-md hidden md:table-cell text-on-surface-variant text-sm truncate max-w-[200px]"
                                            >
                                                Jl. Stasiun Barat 12
                                            </td>
                                            <td
                                                class="py-md px-md hidden lg:table-cell text-sm text-on-surface-variant"
                                            >
                                                RT 05/RW 03, Cikampek Kota
                                            </td>
                                            <td class="py-md px-md text-center">
                                                -
                                            </td>
                                            <td class="py-md px-md">
                                                <span
                                                    class="inline-flex items-center px-2.5 py-0.5 rounded-none text-xs font-semibold bg-error/10 text-error border border-error/20"
                                                    >Belum Lengkap</span
                                                >
                                            </td>
                                            <td
                                                class="py-md px-md hidden xl:table-cell text-sm text-on-surface-variant"
                                            >
                                                -
                                            </td>
                                            <td class="py-md px-md text-right">
                                                <button
                                                    class="text-primary hover:text-primary-container font-label-md text-sm transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100 flex items-center justify-end w-full gap-xs"
                                                >
                                                    Lengkapi Data
                                                    <span
                                                        class="material-symbols-outlined text-[16px]"
                                                        >edit</span
                                                    >
                                                </button>
                                            </td>
                                        </tr>
                                        <tr
                                            class="hover:bg-surface-container-low transition-colors group text-outline"
                                        >
                                            <td
                                                class="py-md px-md font-mono text-sm tracking-wider"
                                            >
                                                321591********
                                            </td>
                                            <td
                                                class="py-md px-md font-semibold"
                                            >
                                                Dewi Lestari
                                            </td>
                                            <td
                                                class="py-md px-md hidden md:table-cell text-sm truncate max-w-[200px]"
                                            >
                                                Blok C No 11, Perum Kencana
                                            </td>
                                            <td
                                                class="py-md px-md hidden lg:table-cell text-sm"
                                            >
                                                RT 02/RW 04, Cikampek Barat
                                            </td>
                                            <td class="py-md px-md text-center">
                                                3
                                            </td>
                                            <td class="py-md px-md">
                                                <span
                                                    class="inline-flex items-center px-2.5 py-0.5 rounded-none text-xs font-semibold bg-surface-container-highest text-on-surface-variant border border-outline-variant"
                                                    >Draft</span
                                                >
                                            </td>
                                            <td
                                                class="py-md px-md hidden xl:table-cell text-sm"
                                            >
                                                2 jam lalu
                                            </td>
                                            <td class="py-md px-md text-right">
                                                <button
                                                    class="text-primary hover:text-primary-container font-label-md text-sm transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100 flex items-center justify-end w-full gap-xs"
                                                >
                                                    Lanjutkan
                                                    <span
                                                        class="material-symbols-outlined text-[16px]"
                                                        >arrow_forward</span
                                                    >
                                                </button>
                                            </td>
                                        </tr>
                                        <tr
                                            class="hover:bg-surface-container-low transition-colors group"
                                        >
                                            <td
                                                class="py-md px-md font-mono text-sm tracking-wider"
                                            >
                                                321522********
                                            </td>
                                            <td
                                                class="py-md px-md font-semibold"
                                            >
                                                Rahmat Hidayat
                                            </td>
                                            <td
                                                class="py-md px-md hidden md:table-cell text-on-surface-variant text-sm truncate max-w-[200px]"
                                            >
                                                Komp. Pertanian Blok A
                                            </td>
                                            <td
                                                class="py-md px-md hidden lg:table-cell text-sm text-on-surface-variant"
                                            >
                                                RT 01/RW 05, Cikampek Timur
                                            </td>
                                            <td class="py-md px-md text-center">
                                                5
                                            </td>
                                            <td class="py-md px-md">
                                                <span
                                                    class="inline-flex items-center px-2.5 py-0.5 rounded-none text-xs font-semibold bg-secondary/10 text-secondary border border-secondary/20"
                                                    >Lengkap</span
                                                >
                                            </td>
                                            <td
                                                class="py-md px-md hidden xl:table-cell text-sm text-on-surface-variant"
                                            >
                                                22 Okt 2023
                                            </td>
                                            <td class="py-md px-md text-right">
                                                <button
                                                    class="text-primary hover:text-primary-container font-label-md text-sm transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100 flex items-center justify-end w-full gap-xs"
                                                >
                                                    Lihat Detail
                                                    <span
                                                        class="material-symbols-outlined text-[16px]"
                                                        >arrow_forward</span
                                                    >
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div
                                class="bg-surface px-md py-md border-t border-outline-variant/30 flex items-center justify-between"
                            >
                                <p
                                    class="font-body-md text-sm text-on-surface-variant"
                                >
                                    Menampilkan
                                    <span class="font-semibold text-on-surface"
                                        >1–5</span
                                    >
                                    dari
                                    <span class="font-semibold text-on-surface"
                                        >128</span
                                    >
                                    keluarga
                                </p>
                                <div class="flex gap-sm">
                                    <button
                                        class="p-xs bg-surface-container hover:bg-surface-container-highest transition-colors text-on-surface disabled:opacity-50 disabled:cursor-not-allowed"
                                        disabled=""
                                    >
                                        <span
                                            class="material-symbols-outlined text-[20px]"
                                            >chevron_left</span
                                        >
                                    </button>
                                    <button
                                        class="px-sm py-xs bg-primary text-on-primary font-label-md text-sm"
                                    >
                                        1
                                    </button>
                                    <button
                                        class="px-sm py-xs bg-surface-container hover:bg-surface-container-highest transition-colors text-on-surface font-label-md text-sm"
                                    >
                                        2
                                    </button>
                                    <button
                                        class="px-sm py-xs bg-surface-container hover:bg-surface-container-highest transition-colors text-on-surface font-label-md text-sm"
                                    >
                                        3
                                    </button>
                                    <span
                                        class="px-sm py-xs text-on-surface-variant font-label-md text-sm"
                                        >...</span
                                    >
                                    <button
                                        class="p-xs bg-surface-container hover:bg-surface-container-highest transition-colors text-on-surface"
                                    >
                                        <span
                                            class="material-symbols-outlined text-[20px]"
                                            >chevron_right</span
                                        >
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div
                            class="grid grid-cols-1 md:grid-cols-3 gap-lg pt-xl border-t border-outline-variant/30 mt-xxl relative overflow-hidden"
                        >
                            <div
                                class="absolute inset-0 bg-gradient-to-br from-primary/5 via-transparent to-transparent -z-10 mix-blend-multiply"
                            ></div>
                            <div
                                class="bg-surface-container-lowest p-lg shadow-sm relative"
                            >
                                <div
                                    class="absolute top-0 right-0 w-24 h-24 bg-primary/5 rounded-bl-full -z-10"
                                ></div>
                                <p
                                    class="font-label-md text-on-surface-variant uppercase tracking-widest text-xs mb-xs"
                                >
                                    Keluarga Terdata
                                </p>
                                <p class="font-display-lg text-primary">128</p>
                                <div
                                    class="mt-md h-1 w-full bg-surface-container overflow-hidden"
                                >
                                    <div
                                        class="h-full bg-primary w-[80%]"
                                    ></div>
                                </div>
                                <p
                                    class="font-caption text-on-surface-variant mt-sm"
                                >
                                    80% dari target bulanan
                                </p>
                            </div>
                            <div
                                class="bg-surface-container-lowest p-lg shadow-sm relative"
                            >
                                <div
                                    class="absolute top-0 right-0 w-24 h-24 bg-error/5 rounded-bl-full -z-10"
                                ></div>
                                <p
                                    class="font-label-md text-on-surface-variant uppercase tracking-widest text-xs mb-xs"
                                >
                                    Perlu Perhatian
                                </p>
                                <p class="font-display-lg text-error">14</p>
                                <p
                                    class="font-body-md text-sm text-on-surface-variant mt-md flex items-center gap-xs"
                                >
                                    <span
                                        class="material-symbols-outlined text-[16px] text-error"
                                        >warning</span
                                    >
                                    Keluarga dengan data belum lengkap
                                </p>
                            </div>
                            <div
                                class="bg-surface-container-lowest p-lg shadow-sm relative overflow-hidden group"
                            >
                                <img
                                    class="absolute inset-0 w-full h-full object-cover opacity-10 group-hover:opacity-20 transition-opacity duration-700 pointer-events-none"
                                    data-alt="A macro shot of a crisp, clean white paper map unfolding, bathed in soft morning light with subtle blue shadows. Minimalist and corporate aesthetic."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCR8MXVzTeRpn2s5pMNAMqY9QAoFkmPUEl7_6mh71svtzDYzC9Qh9Y-KVVv1HLMQeS2r1fJxvSyEkyYeujOsppeGEyAOYVVCTqqwmy2myqzy4hfPdXbjFdIKcGkLGo4RapfW_bmDgHAPHVMxTKx4BE9QHFviQjPTR2R2H-dbdxK-89aQz1h3sjaNTaYAOpbXmin-CAs18--Ib2iDJxbjI1QP6vJCjqzlMm_VhbgtvPKIjQ6DFUYpQVF"
                                />
                                <p
                                    class="font-label-md text-on-surface-variant uppercase tracking-widest text-xs mb-xs relative z-10"
                                >
                                    Cakupan Wilayah
                                </p>
                                <p
                                    class="font-display-lg text-on-surface relative z-10"
                                >
                                    3
                                </p>
                                <p
                                    class="font-body-md text-sm text-on-surface-variant mt-md relative z-10"
                                >
                                    Desa/Kelurahan aktif diperbarui minggu ini
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </body>
</html>
