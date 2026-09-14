@extends('layouts.public')

@section('title', 'Beranda - Satpel PPKB Cikampek')

@section('content')
<!-- Hero Section -->
<section class="relative bg-white overflow-hidden">
 <!-- Split background for desktop -->
 <div class="hidden lg:block absolute inset-y-0 right-0 w-1/2 bg-blue-50/50"></div>
 
 <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
 <div class="flex flex-col lg:flex-row items-center pt-32 pb-20 lg:pt-40 lg:pb-28 gap-12 lg:gap-8">
 
 <!-- Left Text Content -->
 <div class="w-full lg:w-1/2 flex flex-col items-start z-10">
 <div class="text-blue-600 text-sm font-bold uppercase tracking-widest mb-4">
 Satuan Pelayanan PPKB Kecamatan Cikampek
 </div>
 
 <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-gray-900 tracking-tight leading-[1.1] mb-6">
 Keluarga Sehat,<br>
 <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-emerald-500">Masa Depan Hebat.</span>
 </h1>
 
 <p class="text-lg text-gray-600 leading-relaxed mb-10 max-w-lg">
 Portal resmi informasi layanan keluarga berencana, pendampingan ibu hamil, dan pencegahan stunting di Kecamatan Cikampek, Karawang.
 </p>
 
 <div class="flex flex-wrap items-center gap-4">
 <a href="{{ route('program.index') }}" class="px-8 py-3.5 bg-blue-600 text-white font-bold hover:bg-blue-700 transition shadow-lg shadow-blue-600/20">
 Eksplorasi Layanan
 </a>
 <a href="{{ route('profil') }}" class="px-8 py-3.5 bg-white border border-gray-200 text-gray-700 font-bold hover:bg-gray-50 transition shadow-sm">
 Kenali Kami
 </a>
 </div>
 </div>

 <!-- Right Image Content -->
 <div class="w-full lg:w-1/2 relative z-10">
 <div class="relative w-full aspect-square max-h-[550px] lg:ml-auto">
 <!-- Main Image -->
 <div class="absolute inset-0 overflow-hidden shadow-2xl border-4 border-white z-10">
 <img src="https://images.unsplash.com/photo-1542044801-38d5e89d8137?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="Ibu dan anak balita" class="w-full h-full object-cover">
 </div>
 
 <!-- Decorative floating cards -->
 <div class="absolute -bottom-8 -left-8 bg-white p-5 shadow-xl z-20 border border-gray-100 hidden md:block animate-[bounce_4s_infinite]">
 <div class="flex items-center gap-4">
 <div class="w-12 h-12 bg-emerald-100 flex items-center justify-center text-emerald-600">
 <span class="material-symbols-outlined">child_care</span>
 </div>
 <div>
 <p class="text-sm text-gray-500 font-medium">Fokus Utama</p>
 <p class="text-lg font-bold text-gray-900">Zero Stunting</p>
 </div>
 </div>
 </div>
 
 <!-- Dots Pattern -->
 <div class="absolute -top-6 -right-6 w-24 h-24 bg-[radial-gradient(#e5e7eb_2px,transparent_2px)] [background-size:12px_12px] z-0"></div>
 </div>
 </div>
 
 </div>
 </div>
</section>

<!-- Quick Programs Section -->
<section class="py-20 bg-gray-50 border-t border-gray-100">
 <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
 <div class="text-center max-w-2xl mx-auto mb-16">
 <h2 class="text-sm font-bold text-blue-600 uppercase tracking-widest mb-2">Layanan Terpadu</h2>
 <h3 class="text-3xl font-extrabold text-gray-900">Program Pendampingan Warga</h3>
 </div>

 <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
 <!-- Program 1 -->
 <a href="{{ route('program.index') }}" class="group bg-white overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 block">
 <div class="h-48 overflow-hidden relative">
 <img src="https://images.unsplash.com/photo-1517677129300-07b130802f46?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Ibu Hamil" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
 <div class="absolute inset-0 bg-gradient-to-t from-gray-900/60 to-transparent"></div>
 <div class="absolute bottom-4 left-4">
 <span class="px-3 py-1 bg-white/20 backdrop-blur-md text-white text-xs font-bold">1.000 HPK</span>
 </div>
 </div>
 <div class="p-6">
 <h4 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-blue-600 transition-colors">Pendampingan Catin & Bumil</h4>
 <p class="text-gray-600 text-sm leading-relaxed mb-4">Pengawalan nutrisi dan kesehatan ibu hamil serta calon pengantin guna mencegah risiko bayi lahir stunting.</p>
 <span class="text-blue-600 font-semibold text-sm flex items-center gap-1">Baca selengkapnya <span class="material-symbols-outlined text-[16px]">arrow_forward</span></span>
 </div>
 </a>

 <!-- Program 2 -->
 <a href="{{ route('program.index') }}" class="group bg-white overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 block">
 <div class="h-48 overflow-hidden relative">
 <img src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Pelayanan Medis" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
 <div class="absolute inset-0 bg-gradient-to-t from-gray-900/60 to-transparent"></div>
 <div class="absolute bottom-4 left-4">
 <span class="px-3 py-1 bg-white/20 backdrop-blur-md text-white text-xs font-bold">Layanan MKJP</span>
 </div>
 </div>
 <div class="p-6">
 <h4 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-blue-600 transition-colors">Keluarga Berencana (KB)</h4>
 <p class="text-gray-600 text-sm leading-relaxed mb-4">Fasilitasi layanan kontrasepsi aman, IUD, Implan, serta edukasi jarak kehamilan bersama jaringan bidan desa.</p>
 <span class="text-blue-600 font-semibold text-sm flex items-center gap-1">Baca selengkapnya <span class="material-symbols-outlined text-[16px]">arrow_forward</span></span>
 </div>
 </a>

 <!-- Program 3 -->
 <a href="{{ route('program.index') }}" class="group bg-white overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 block">
 <div class="h-48 overflow-hidden relative">
 <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Edukasi Balita" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
 <div class="absolute inset-0 bg-gradient-to-t from-gray-900/60 to-transparent"></div>
 <div class="absolute bottom-4 left-4">
 <span class="px-3 py-1 bg-white/20 backdrop-blur-md text-white text-xs font-bold">BKB, BKR, BKL</span>
 </div>
 </div>
 <div class="p-6">
 <h4 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-blue-600 transition-colors">Bina Ketahanan Keluarga</h4>
 <p class="text-gray-600 text-sm leading-relaxed mb-4">Pemberdayaan dan edukasi kelompok balita, remaja, lansia untuk menciptakan lingkungan keluarga harmonis.</p>
 <span class="text-blue-600 font-semibold text-sm flex items-center gap-1">Baca selengkapnya <span class="material-symbols-outlined text-[16px]">arrow_forward</span></span>
 </div>
 </a>
 </div>
 </div>
</section>

<!-- Latest News Teaser -->
<section class="py-20 bg-white">
 <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
 <div class="flex items-end justify-between mb-12">
 <div>
 <h2 class="text-3xl font-extrabold text-gray-900 mb-2">Kabar Lapangan</h2>
 <p class="text-gray-600">Update kegiatan dan penyuluhan terbaru.</p>
 </div>
 <a href="{{ route('berita.index') }}" class="hidden sm:inline-flex items-center gap-2 text-blue-600 font-bold hover:text-blue-700">
 Lihat Semua Berita <span class="material-symbols-outlined">arrow_forward</span>
 </a>
 </div>

 <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
 <div class="bg-gray-50 overflow-hidden border border-gray-100 flex flex-col sm:flex-row h-full">
 <div class="w-full sm:w-2/5 h-48 sm:h-auto">
 <img src="https://images.unsplash.com/photo-1582213782179-e0d53f98f2ca?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="News" class="w-full h-full object-cover">
 </div>
 <div class="p-6 w-full sm:w-3/5 flex flex-col justify-center">
 <span class="text-xs font-bold text-emerald-600 uppercase tracking-wider mb-2">Penyuluhan</span>
 <h4 class="text-lg font-bold text-gray-900 mb-3 leading-snug hover:text-blue-600 cursor-pointer transition-colors">Sosialisasi Stunting di Balai Desa Cikampek Kota</h4>
 <p class="text-sm text-gray-600 mb-4 line-clamp-2">Penyuluhan mengenai asupan gizi seimbang bagi balita dan ibu hamil dihadiri oleh 50 warga.</p>
 <span class="text-xs text-gray-400 mt-auto">12 September 2026</span>
 </div>
 </div>
 
 <div class="bg-gray-50 overflow-hidden border border-gray-100 flex flex-col sm:flex-row h-full">
 <div class="w-full sm:w-2/5 h-48 sm:h-auto">
 <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="News" class="w-full h-full object-cover">
 </div>
 <div class="p-6 w-full sm:w-3/5 flex flex-col justify-center">
 <span class="text-xs font-bold text-blue-600 uppercase tracking-wider mb-2">Kader Lapangan</span>
 <h4 class="text-lg font-bold text-gray-900 mb-3 leading-snug hover:text-blue-600 cursor-pointer transition-colors">Rapat Koordinasi Tim Pendamping Keluarga (TPK)</h4>
 <p class="text-sm text-gray-600 mb-4 line-clamp-2">Evaluasi rutin kinerja TPK Cikampek dalam mendampingi target sasaran secara door-to-door.</p>
 <span class="text-xs text-gray-400 mt-auto">10 September 2026</span>
 </div>
 </div>
 </div>
 
 <div class="mt-8 sm:hidden">
 <a href="{{ route('berita.index') }}" class="block text-center w-full py-3 bg-gray-100 text-gray-900 font-bold hover:bg-gray-200">
 Lihat Semua Berita
 </a>
 </div>
 </div>
</section>
@endsection
