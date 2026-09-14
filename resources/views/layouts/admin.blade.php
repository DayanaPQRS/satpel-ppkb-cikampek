<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Admin Dashboard - Satpel PPKB Cikampek</title>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet"/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 font-sans text-gray-900 antialiased">

<aside class="fixed left-0 top-0 h-full w-64 bg-slate-900 text-white z-50 flex flex-col">
    <div class="p-6 border-b border-slate-800">
        <div class="flex items-center gap-3">
            <img src="{{ asset('images/logo.png') }}" alt="Logo BKKBN" class="h-10 w-auto object-contain bg-white p-1">
            <div>
                <p class="text-xs text-blue-400 font-bold uppercase tracking-wider">Satpel PPKB</p>
                <p class="text-base font-bold text-white leading-tight">Admin Panel</p>
            </div>
        </div>
    </div>

    <nav class="flex-1 p-4 space-y-1">
        <a href="{{ route('admin.verification.index') }}" class="flex items-center gap-3 px-4 py-3 text-sm font-semibold transition-colors {{ request()->routeIs('admin.verification.*') ? 'bg-blue-600 text-white' : 'text-slate-300 hover:bg-slate-800 hover:text-white' }}">
            <span class="material-symbols-outlined text-[20px]">how_to_reg</span>
            <span>Verifikasi Kader</span>
        </a>
        <a href="{{ route('home') }}" target="_blank" class="flex items-center gap-3 px-4 py-3 text-sm font-semibold text-slate-300 hover:bg-slate-800 hover:text-white transition-colors">
            <span class="material-symbols-outlined text-[20px]">open_in_new</span>
            <span>Lihat Portal Publik</span>
        </a>
    </nav>

    <div class="p-4 border-t border-slate-800 bg-slate-950">
        <div class="flex items-center gap-3">
            <div class="w-9 h-9 bg-slate-800 border border-slate-700 flex items-center justify-center text-white">
                <span class="material-symbols-outlined text-sm">person</span>
            </div>
            <div class="overflow-hidden">
                <p class="text-xs font-bold text-white truncate">{{ auth()->user()->name ?? 'Administrator' }}</p>
                <p class="text-[11px] text-slate-400">Super Admin</p>
            </div>
            <form action="{{ route('kader.logout') }}" method="POST" class="ml-auto">
                @csrf
                <button type="submit" title="Logout" class="text-slate-400 hover:text-red-400 p-1 transition-colors">
                    <span class="material-symbols-outlined text-[18px]">logout</span>
                </button>
            </form>
        </div>
    </div>
</aside>

<div class="pl-64">
    <header class="fixed top-0 left-64 right-0 h-16 bg-white border-b border-gray-200 z-40 px-8 flex items-center justify-between">
        <div>
            <h1 class="text-lg font-bold text-gray-900">Panel Manajemen Satpel PPKB</h1>
        </div>
        <div class="flex items-center gap-4">
            <span class="text-xs bg-emerald-100 text-emerald-800 px-3 py-1 font-bold">Admin Active</span>
            <div class="text-sm font-semibold text-gray-700">
                {{ auth()->user()->email ?? 'admin@cikampek.go.id' }}
            </div>
        </div>
    </header>

    <main class="pt-20 px-8 pb-12 min-h-screen">
        @if(session('success'))
            <div class="mb-6 p-4 bg-emerald-50 border border-emerald-200 text-emerald-800 text-sm font-semibold flex items-center gap-2">
                <span class="material-symbols-outlined text-[20px]">check_circle</span>
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </main>
</div>

</body>
</html>
