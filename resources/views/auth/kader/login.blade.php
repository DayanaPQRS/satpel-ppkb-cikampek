<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Masuk Sistem - Satpel PPKB Cikampek</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.3/dist/cdn.min.js"></script>
    <style>
        body { font-family: 'Inter', sans-serif; }
        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="bg-gray-50 text-gray-900 min-h-screen flex flex-col antialiased">

<div class="flex-1 flex flex-col md:flex-row w-full min-h-screen">
    <!-- Left Side: Visual Branding -->
    <div class="hidden md:flex md:w-1/2 relative bg-slate-900 border-r border-gray-200 overflow-hidden">
        <img
            alt="Satpel PPKB Community Service"
            class="absolute inset-0 w-full h-full object-cover opacity-60"
            src="https://images.unsplash.com/photo-1576765608535-5f04d1e3f289?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80"
        />
        <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-900/60 to-transparent"></div>
        <div class="relative z-10 p-12 lg:p-16 flex flex-col justify-between w-full h-full text-white">
            <div class="flex items-center gap-3">
                <img src="{{ asset('images/logo.png') }}" alt="Logo BKKBN" class="h-10 w-auto object-contain bg-white p-1">
                <div>
                    <span class="text-sm font-bold tracking-widest uppercase text-blue-400 block">Satpel PPKB</span>
                    <span class="text-xs text-gray-300">Kecamatan Cikampek</span>
                </div>
            </div>

            <div class="max-w-md">
                <span class="text-xs font-bold uppercase tracking-widest text-blue-400 mb-2 block">Portal Layanan & Pendataan</span>
                <h1 class="text-3xl lg:text-4xl font-extrabold leading-tight text-white mb-4">
                    Sistem Terpadu Pelayanan & Pendataan Keluarga
                </h1>
                <p class="text-gray-300 text-sm leading-relaxed">
                    Akses khusus bagi Petugas Admin Satpel dan Kader TPK 10 Desa untuk pengelolaan data keluarga, verifikasi lapangan, dan pelaporan program stunting.
                </p>
            </div>

            <div class="text-xs text-gray-400 border-t border-slate-800 pt-4 flex items-center justify-between">
                <span>&copy; {{ date('Y') }} Satpel PPKB Cikampek</span>
                <a href="{{ route('home') }}" class="text-blue-400 hover:text-blue-300 font-semibold flex items-center gap-1">
                    <span class="material-symbols-outlined text-sm">arrow_back</span>
                    Portal Publik
                </a>
            </div>
        </div>
    </div>

    <!-- Right Side: Login Form -->
    <div class="w-full md:w-1/2 flex items-center justify-center p-6 sm:p-12 lg:p-16 bg-white">
        <div class="w-full max-w-md" x-data="{ showPassword: false }">
            <!-- Mobile Header -->
            <div class="md:hidden flex items-center justify-between mb-8 pb-4 border-b border-gray-100">
                <div class="flex items-center gap-2.5">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo BKKBN" class="h-8 w-auto object-contain">
                    <div>
                        <span class="font-bold text-gray-900 text-sm block leading-none">Satpel PPKB</span>
                        <span class="text-[11px] text-gray-500">Cikampek</span>
                    </div>
                </div>
                <a href="{{ route('home') }}" class="text-xs font-bold text-blue-600 hover:underline">
                    Ke Beranda
                </a>
            </div>

            <div class="mb-8">
                <p class="text-xs font-bold uppercase tracking-widest text-blue-600 mb-2">Otentikasi Akun</p>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-gray-900 tracking-tight">
                    Masuk ke Sistem
                </h2>
                <p class="text-sm text-gray-600 mt-2 leading-relaxed">
                    Masukkan email dan password terdaftar Anda (Akun Admin atau Kader).
                </p>
            </div>

            <!-- Error Alerts -->
            @if($errors->any())
                <div class="mb-6 p-4 bg-red-50 border-l-4 border-red-600 text-red-700 text-sm font-medium flex items-start gap-3">
                    <span class="material-symbols-outlined text-red-600 text-xl shrink-0 mt-0.5">error</span>
                    <div>
                        <p class="font-bold">Gagal Masuk</p>
                        <p class="text-xs mt-0.5">{{ $errors->first() }}</p>
                    </div>
                </div>
            @endif

            <form action="{{ route('kader.login.post') }}" method="POST" class="space-y-5">
                @csrf

                <!-- Email Field -->
                <div>
                    <label for="email" class="block text-xs font-bold uppercase tracking-wider text-gray-700 mb-2">
                        Alamat Email
                    </label>
                    <div class="relative">
                        <input
                            type="email"
                            id="email"
                            name="email"
                            value="{{ old('email') }}"
                            required
                            autofocus
                            placeholder="nama@cikampek.go.id"
                            class="w-full px-4 py-3.5 bg-gray-50 border border-gray-300 text-gray-900 text-sm focus:bg-white focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600 transition-colors"
                        />
                    </div>
                </div>

                <!-- Password Field -->
                <div>
                    <div class="flex items-center justify-between mb-2">
                        <label for="password" class="block text-xs font-bold uppercase tracking-wider text-gray-700">
                            Password
                        </label>
                    </div>
                    <div class="relative">
                        <input
                            :type="showPassword ? 'text' : 'password'"
                            id="password"
                            name="password"
                            required
                            placeholder="••••••••"
                            class="w-full px-4 py-3.5 pr-12 bg-gray-50 border border-gray-300 text-gray-900 text-sm focus:bg-white focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600 transition-colors"
                        />
                        <button
                            type="button"
                            @click="showPassword = !showPassword"
                            class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-700 p-1 flex items-center justify-center transition-colors"
                            title="Tampilkan / Sembunyikan Password"
                        >
                            <span class="material-symbols-outlined text-[20px]" x-text="showPassword ? 'visibility_off' : 'visibility'"></span>
                        </button>
                    </div>
                </div>

                <!-- Remember & Extra Options -->
                <div class="flex items-center justify-between pt-1">
                    <label class="flex items-center gap-2.5 cursor-pointer select-none">
                        <input
                            type="checkbox"
                            name="remember"
                            class="w-4 h-4 text-blue-600 border-gray-300 focus:ring-blue-500 bg-gray-50"
                        />
                        <span class="text-xs font-medium text-gray-600">Ingat saya di perangkat ini</span>
                    </label>
                </div>

                <!-- Submit Button -->
                <div class="pt-2">
                    <button
                        type="submit"
                        class="w-full py-4 px-6 bg-blue-600 hover:bg-blue-700 active:bg-blue-800 text-white font-bold text-sm uppercase tracking-wider flex items-center justify-center gap-2 shadow-sm hover:shadow transition-all cursor-pointer"
                    >
                        <span>Masuk ke Akun</span>
                        <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                    </button>
                </div>
            </form>

            <!-- Registration Footer -->
            <div class="mt-8 pt-6 border-t border-gray-200 text-center">
                <p class="text-xs text-gray-600">
                    Belum memiliki akun kader terdaftar?
                </p>
                <a
                    href="{{ route('kader.register.step1') }}"
                    class="mt-2 inline-flex items-center gap-1.5 text-xs font-bold uppercase tracking-wider text-blue-600 hover:text-blue-800 transition-colors"
                >
                    <span>Daftar Sebagai Kader Baru</span>
                    <span class="material-symbols-outlined text-sm">person_add</span>
                </a>
            </div>

            <!-- Quick Hint for Dev / Admin -->
            <div class="mt-6 p-3.5 bg-blue-50/60 border border-blue-100 text-xs text-blue-900 leading-relaxed">
                <span class="font-bold block mb-1">Informasi Akun Default (Seeder):</span>
                <p class="text-[11px] text-blue-800">
                    <strong>Admin:</strong> <code class="font-mono bg-white px-1 py-0.5 border border-blue-200">admin@cikampek.go.id</code> / <code class="font-mono bg-white px-1 py-0.5 border border-blue-200">password123</code>
                </p>
                <p class="text-[11px] text-blue-800 mt-0.5">
                    <strong>Kader:</strong> <code class="font-mono bg-white px-1 py-0.5 border border-blue-200">kader@cikampek.go.id</code> / <code class="font-mono bg-white px-1 py-0.5 border border-blue-200">password123</code>
                </p>
            </div>
        </div>
    </div>
</div>

</body>
</html>
