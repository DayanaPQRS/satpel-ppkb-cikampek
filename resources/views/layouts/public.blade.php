<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
 <title>@yield('title', 'Satpel PPKB Kecamatan Cikampek')</title>
 
 <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
 <!-- Alpine JS -->
 <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.3/dist/cdn.min.js"></script>

 @vite(['resources/css/app.css', 'resources/js/app.js'])
 <style>
 body { font-family: 'Inter', sans-serif; }
 [x-cloak] { display: none !important; }
 </style>
 @stack('styles')
</head>
<body class="bg-gray-50 text-gray-800 antialiased flex flex-col min-h-screen" x-data="{ mobileMenuOpen: false, scrolled: false }" @scroll.window="scrolled = (window.pageYOffset > 20)">
 
 <!-- HEADER NAVBAR (Sticky & Glassmorphism) -->
 <header 
 class="fixed top-0 w-full z-50 transition-all duration-300 border-b"
 :class="{ 'bg-white/80 backdrop-blur-lg border-gray-200 shadow-sm py-2': scrolled, 'bg-white border-transparent py-4': !scrolled }">
 <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
 <div class="flex items-center justify-between">
 
                <!-- Logo -->
                <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo BKKBN" class="h-10 w-auto object-contain">
                    <div class="flex flex-col">
                        <span class="font-bold text-lg leading-tight text-gray-900 group-hover:text-blue-600 transition-colors">
                            Satpel PPKB
                        </span>
                        <span class="text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Cikampek
                        </span>
                    </div>
                </a>

 <!-- Desktop Navigation -->
 <nav class="hidden md:flex items-center gap-8">
 <a href="{{ route('home') }}" class="text-sm font-medium {{ request()->routeIs('home') ? 'text-blue-600' : 'text-gray-600 hover:text-blue-600' }} transition-colors">Beranda</a>
 <a href="{{ route('profil') }}" class="text-sm font-medium {{ request()->routeIs('profil') ? 'text-blue-600' : 'text-gray-600 hover:text-blue-600' }} transition-colors">Profil</a>
 <a href="{{ route('program.index') }}" class="text-sm font-medium {{ request()->routeIs('program.*') ? 'text-blue-600' : 'text-gray-600 hover:text-blue-600' }} transition-colors">Layanan</a>
 <a href="{{ route('berita.index') }}" class="text-sm font-medium {{ request()->routeIs('berita.*') ? 'text-blue-600' : 'text-gray-600 hover:text-blue-600' }} transition-colors">Berita</a>
 <a href="{{ route('kegiatan.index') }}" class="text-sm font-medium {{ request()->routeIs('kegiatan.*') ? 'text-blue-600' : 'text-gray-600 hover:text-blue-600' }} transition-colors">Kegiatan</a>
 </nav>

 <!-- Desktop Actions -->
 <div class="hidden md:flex items-center gap-4">
 <a href="{{ route('kader.login') }}" class="text-sm font-semibold text-gray-700 hover:text-blue-600 transition-colors px-2">Masuk Sistem</a>
 <a href="{{ route('kader.register.step1') }}" class="text-sm font-semibold px-5 py-2.5 bg-blue-600 text-white hover:bg-blue-700 shadow hover:shadow-md transition-all">
 Daftar Kader
 </a>
 </div>

 <!-- Mobile Menu Button -->
 <button @click="mobileMenuOpen = !mobileMenuOpen" class="md:hidden p-2 text-gray-600 hover:text-blue-600 hover:bg-blue-50 transition-colors focus:outline-none">
 <span class="material-symbols-outlined" x-text="mobileMenuOpen ? 'close' : 'menu'">menu</span>
 </button>
 </div>
 </div>

 <!-- Mobile Navigation Menu (AlpineJS) -->
 <div x-show="mobileMenuOpen" 
 x-collapse
 x-cloak
 class="md:hidden bg-white border-t border-gray-100 shadow-xl absolute w-full left-0 mt-2">
 <div class="px-4 py-4 flex flex-col gap-2 space-y-1">
 <a href="{{ route('home') }}" class="block px-4 py-3 text-base font-medium {{ request()->routeIs('home') ? 'bg-blue-50 text-blue-600' : 'text-gray-700 hover:bg-gray-50 hover:text-blue-600' }}">Beranda</a>
 <a href="{{ route('profil') }}" class="block px-4 py-3 text-base font-medium {{ request()->routeIs('profil') ? 'bg-blue-50 text-blue-600' : 'text-gray-700 hover:bg-gray-50 hover:text-blue-600' }}">Profil</a>
 <a href="{{ route('program.index') }}" class="block px-4 py-3 text-base font-medium {{ request()->routeIs('program.*') ? 'bg-blue-50 text-blue-600' : 'text-gray-700 hover:bg-gray-50 hover:text-blue-600' }}">Layanan</a>
 <a href="{{ route('berita.index') }}" class="block px-4 py-3 text-base font-medium {{ request()->routeIs('berita.*') ? 'bg-blue-50 text-blue-600' : 'text-gray-700 hover:bg-gray-50 hover:text-blue-600' }}">Berita</a>
 <a href="{{ route('kegiatan.index') }}" class="block px-4 py-3 text-base font-medium {{ request()->routeIs('kegiatan.*') ? 'bg-blue-50 text-blue-600' : 'text-gray-700 hover:bg-gray-50 hover:text-blue-600' }}">Kegiatan</a>
 
 <div class="h-px bg-gray-100 my-2"></div>
 <a href="{{ route('kader.login') }}" class="block px-4 py-3 text-base font-medium text-gray-700 hover:bg-gray-50 hover:text-blue-600">Masuk Sistem</a>
 <a href="{{ route('kader.register.step1') }}" class="block px-4 py-3 mt-2 text-base font-semibold text-center bg-blue-600 text-white hover:bg-blue-700">Daftar Kader</a>
 </div>
 </div>
 </header>

 

 <!-- MAIN CONTENT -->
 <main class="flex-grow">
 @yield('content')
 </main>

 <!-- FOOTER -->
 <footer class="bg-white border-t border-gray-200 py-8 lg:py-8 mt-auto">
 <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
 <div class="grid grid-cols-1 md:grid-cols-4 gap-12 lg:gap-8">
 <!-- Brand -->
 <div class="col-span-1 md:col-span-1 lg:col-span-2">
 <div class="flex items-center gap-3 mb-4">
 <img src="{{ asset('images/logo.png') }}" alt="Logo BKKBN" class="h-10 w-auto object-contain">
 <span class="font-bold text-lg text-gray-900">Satpel PPKB Cikampek</span>
 </div>
 <p class="text-sm text-gray-500 leading-relaxed max-w-sm mb-6">
 Pusat layanan informasi dan pendampingan keluarga berencana serta pencegahan stunting di Kecamatan Cikampek, Karawang.
 </p>
 <div class="flex items-center gap-3">
 <a href="#" class="w-10 h-10 bg-gray-100 flex items-center justify-center text-gray-500 hover:bg-blue-600 hover:text-white transition-colors">
 <span class="material-symbols-outlined text-lg">public</span>
 </a>
 <a href="{{ route('kontak') }}" class="w-10 h-10 bg-gray-100 flex items-center justify-center text-gray-500 hover:bg-blue-600 hover:text-white transition-colors">
 <span class="material-symbols-outlined text-lg">mail</span>
 </a>
 </div>
 </div>

 <!-- Links -->
 <div>
 <h3 class="font-semibold text-gray-900 mb-4">Layanan</h3>
 <ul class="space-y-3">
 <li><a href="{{ route('program.index') }}" class="text-sm text-gray-500 hover:text-blue-600 transition-colors">Catin & Ibu Hamil</a></li>
 <li><a href="{{ route('program.index') }}" class="text-sm text-gray-500 hover:text-blue-600 transition-colors">Keluarga Berencana</a></li>
 <li><a href="{{ route('program.index') }}" class="text-sm text-gray-500 hover:text-blue-600 transition-colors">Pencegahan Stunting</a></li>
 <li><a href="{{ route('statistik') }}" class="text-sm text-gray-500 hover:text-blue-600 transition-colors">Statistik Wilayah</a></li>
 </ul>
 </div>

 <!-- Contact -->
 <div>
 <h3 class="font-semibold text-gray-900 mb-4">Kontak Kami</h3>
 <address class="not-italic text-sm text-gray-500 space-y-3 leading-relaxed">
 <p class="flex items-start gap-2">
 <span class="material-symbols-outlined text-lg text-blue-600 shrink-0">location_on</span>
 Jl. Jenderal Sudirman No. 45, Cikampek, Karawang 41373
 </p>
 <p class="flex items-center gap-2">
 <span class="material-symbols-outlined text-lg text-blue-600 shrink-0">call</span>
 (0264) 310-891
 </p>
 <p class="flex items-center gap-2">
 <span class="material-symbols-outlined text-lg text-blue-600 shrink-0">schedule</span>
 Senin - Jumat, 08.00 - 16.00
 </p>
 </address>
 </div>
 </div>
 
 <div class="border-t border-gray-100 mt-8 pt-6 flex flex-col md:flex-row items-center justify-between gap-4">
 <p class="text-sm text-gray-400">© {{ date('Y') }} Satpel PPKB Cikampek. Semua Hak Dilindungi.</p>
 <div class="flex items-center gap-6">
 <a href="#" class="text-sm text-gray-400 hover:text-gray-600">Kebijakan Privasi</a>
 <a href="#" class="text-sm text-gray-400 hover:text-gray-600">Syarat & Ketentuan</a>
 </div>
 </div>
 </div>
 </footer>

 @stack('scripts')
</body>
</html>
