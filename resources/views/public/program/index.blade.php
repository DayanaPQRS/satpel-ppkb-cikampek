@extends('layouts.public')

@section('title', 'Layanan Publik - Satpel PPKB Cikampek')

@section('content')
<!-- Header -->
<section class="bg-blue-600 pt-32 pb-20 border-b border-blue-700">
 <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
 <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight mb-4">Layanan Publik & Pendampingan</h1>
 <p class="text-lg text-blue-100 max-w-2xl mx-auto">Informasi layanan kependudukan, kesehatan ibu dan anak, serta ketahanan keluarga di Kecamatan Cikampek.</p>
 </div>
</section>

<!-- Content -->
<section class="py-16 bg-gray-50">
 <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
 <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
 
 <a href="{{ route('program.show', 'catin') }}" class="group bg-white overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 flex flex-col h-full">
 <div class="h-48 overflow-hidden relative">
 <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Catin" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
 <div class="absolute inset-0 bg-gradient-to-t from-gray-900/60 to-transparent"></div>
 </div>
 <div class="p-6 flex-grow flex flex-col">
 <div class="flex items-center gap-2 text-blue-600 mb-2">
 <span class="material-symbols-outlined">favorite</span>
 <span class="text-xs font-bold uppercase tracking-wider">Pra-Nikah</span>
 </div>
 <h4 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors">Konseling Calon Pengantin (Catin)</h4>
 <p class="text-gray-600 text-sm leading-relaxed mb-4 flex-grow">Pendampingan 3 bulan pra-nikah untuk memastikan kondisi kesehatan ideal demi mencegah bayi stunting.</p>
 </div>
 </a>

 <a href="{{ route('program.show', 'bumil') }}" class="group bg-white overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 flex flex-col h-full">
 <div class="h-48 overflow-hidden relative">
 <img src="https://images.unsplash.com/photo-1531983412531-1f49a365ffed?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Bumil" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
 <div class="absolute inset-0 bg-gradient-to-t from-gray-900/60 to-transparent"></div>
 </div>
 <div class="p-6 flex-grow flex flex-col">
 <div class="flex items-center gap-2 text-emerald-600 mb-2">
 <span class="material-symbols-outlined">pregnant_woman</span>
 <span class="text-xs font-bold uppercase tracking-wider">Ibu Hamil</span>
 </div>
 <h4 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-emerald-600 transition-colors">Pendampingan Ibu Hamil</h4>
 <p class="text-gray-600 text-sm leading-relaxed mb-4 flex-grow">Pemeriksaan kehamilan rutin, pemantauan status gizi, dan penanganan risiko kesehatan ibu hamil oleh TPK.</p>
 </div>
 </a>

 <a href="#" class="group bg-white overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 flex flex-col h-full">
 <div class="h-48 overflow-hidden relative">
 <img src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="KB" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
 <div class="absolute inset-0 bg-gradient-to-t from-gray-900/60 to-transparent"></div>
 </div>
 <div class="p-6 flex-grow flex flex-col">
 <div class="flex items-center gap-2 text-blue-600 mb-2">
 <span class="material-symbols-outlined">medical_services</span>
 <span class="text-xs font-bold uppercase tracking-wider">Kontrasepsi</span>
 </div>
 <h4 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors">Keluarga Berencana (KB)</h4>
 <p class="text-gray-600 text-sm leading-relaxed mb-4 flex-grow">Layanan kontrasepsi MKJP dan Non-MKJP gratis bagi Pasangan Usia Subur (PUS) bekerja sama dengan Faskes.</p>
 </div>
 </a>
 
 </div>
 </div>
</section>
@endsection
