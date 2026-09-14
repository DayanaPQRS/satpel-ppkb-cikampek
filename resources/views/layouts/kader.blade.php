<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8"/>
 <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
 <title>Kader Dashboard - Satpel PPKB Cikampek</title>
 <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" rel="stylesheet"/>
 <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet"/>
 @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-background font-body-md text-on-surface">

<aside class="fixed left-0 top-0 h-full w-72 bg-surface-container-lowest border-r border-outline-variant z-50 flex flex-col">
 <div class="p-lg mb-xl">
  <div class="flex items-center gap-md">
    <img src="{{ asset('images/logo.png') }}" alt="Logo BKKBN" class="h-10 w-auto object-contain">
    <div>
      <p class="font-label-md text-label-md text-primary tracking-wider uppercase leading-none">Satpel PPKB</p>
      <p class="font-headline-md text-[16px] font-bold text-on-surface">Cikampek</p>
    </div>
  </div>
 </div>
 <nav class="flex-1 px-md space-y-xs">
 <a class="flex items-center gap-md px-md py-sm transition-all group {{ request()->routeIs('kader.dashboard') ? 'bg-primary-container text-on-primary font-semibold' : 'text-on-surface-variant hover:bg-surface-container hover:text-on-surface' }}" href="{{ route('kader.dashboard') }}">
 <span class="material-symbols-outlined text-[20px]">dashboard</span><span class="font-body-md">Dashboard</span>
 </a>
 <a class="flex items-center gap-md px-md py-sm transition-all group {{ request()->routeIs('kader.family.*') ? 'bg-primary-container text-on-primary font-semibold' : 'text-on-surface-variant hover:bg-surface-container hover:text-on-surface' }}" href="{{ route('kader.family.index') }}">
 <span class="material-symbols-outlined text-[20px]">family_restroom</span><span class="font-body-md">Data Keluarga</span>
 </a>
 <a class="flex items-center gap-md px-md py-sm transition-all group {{ request()->routeIs('kader.individual.*') ? 'bg-primary-container text-on-primary font-semibold' : 'text-on-surface-variant hover:bg-surface-container hover:text-on-surface' }}" href="{{ route('kader.individual.index') }}">
 <span class="material-symbols-outlined text-[20px]">person</span><span class="font-body-md">Data Individu</span>
 </a>
 </nav>
 <div class="p-lg border-t border-outline-variant bg-surface-container-low">
 <div class="flex items-center gap-md">
 <div class="w-10 h-10 bg-primary flex items-center justify-center shrink-0">
 <span class="material-symbols-outlined text-on-primary text-[20px]">person</span>
 </div>
 <div class="overflow-hidden">
 <p class="font-label-md text-label-md text-on-surface truncate">{{ auth()->user()->name ?? 'Kader' }}</p>
 <p class="font-caption text-caption text-on-surface-variant">Kader Utama</p>
 </div>
 <form action="{{ route('kader.logout') }}" method="POST" class="ml-auto">
 @csrf
 <button type="submit" class="text-on-surface-variant hover:text-primary transition-colors">
 <span class="material-symbols-outlined text-[20px]">logout</span>
 </button>
 </form>
 </div>
 </div>
</aside>

<div class="pl-72">
 <header class="fixed top-0 left-72 right-0 h-20 bg-surface/80 backdrop-blur-xl border-b border-outline-variant z-40 px-xl flex items-center justify-between">
 <div class="w-96 relative">
 <span class="material-symbols-outlined absolute left-md top-1/2 -translate-y-1/2 text-on-surface-variant">search</span>
 <input class="w-full pl-xxl pr-md py-sm bg-surface-container-low border border-outline-variant focus:border-primary focus:outline-none font-body-md text-on-surface" placeholder="Cari data, warga, atau kegiatan..." type="text"/>
 </div>
 <div class="flex items-center gap-lg">
 <button class="relative p-sm text-on-surface-variant hover:text-primary transition-colors">
 <span class="material-symbols-outlined">notifications</span>
 <span class="absolute top-1.5 right-1.5 w-2 h-2 bg-error "></span>
 </button>
 <div class="flex items-center gap-md cursor-pointer group">
 <div class="text-right hidden sm:block">
 <p class="font-label-md text-label-md text-on-surface">Profil Kader</p>
 <p class="font-caption text-caption text-on-surface-variant">{{ auth()->user()->kaderProfile->village ?? 'Cikampek' }}</p>
 </div>
 <div class="w-10 h-10 bg-primary flex items-center justify-center">
 <span class="material-symbols-outlined text-on-primary text-[20px]">person</span>
 </div>
 </div>
 </div>
 </header>

 <main class="relative pt-20 min-h-screen bg-background">
 @yield('content')
 </main>
</div>

</body>
</html>
