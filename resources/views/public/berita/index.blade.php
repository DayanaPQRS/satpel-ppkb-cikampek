@extends('layouts.public')

@section('title', 'Kabar Lapangan - Satpel PPKB Cikampek')

@section('content')
<!-- Header -->
<section class="bg-blue-600 pt-32 pb-20 border-b border-blue-700">
 <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
 <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight mb-4">Kabar Lapangan & Publikasi</h1>
 <p class="text-lg text-blue-100 max-w-2xl mx-auto">Informasi terbaru, artikel edukasi, dan dokumentasi penyuluhan dari tim Satpel PPKB Kecamatan Cikampek.</p>
 </div>
</section>

<!-- Content -->
<section class="py-16 bg-gray-50">
 <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
 
 <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
 <!-- News Item 1 -->
 <a href="#" class="group bg-white overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 flex flex-col h-full">
 <div class="h-48 overflow-hidden relative">
 <img src="https://images.unsplash.com/photo-1582213782179-e0d53f98f2ca?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Penyuluhan" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
 </div>
 <div class="p-6 flex-grow flex flex-col">
 <span class="text-xs font-bold text-emerald-600 uppercase tracking-wider mb-2">Penyuluhan</span>
 <h4 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors leading-snug">Sosialisasi Stunting di Balai Desa Cikampek Kota</h4>
 <p class="text-gray-600 text-sm leading-relaxed mb-4 flex-grow line-clamp-3">Penyuluhan mengenai asupan gizi seimbang bagi balita dan ibu hamil dihadiri oleh 50 warga serta didampingi aparat desa setempat.</p>
 <span class="text-xs text-gray-400 mt-auto">12 September 2026</span>
 </div>
 </a>

 <!-- News Item 2 -->
 <a href="#" class="group bg-white overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 flex flex-col h-full">
 <div class="h-48 overflow-hidden relative">
 <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Rapat" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
 </div>
 <div class="p-6 flex-grow flex flex-col">
 <span class="text-xs font-bold text-blue-600 uppercase tracking-wider mb-2">Kader Lapangan</span>
 <h4 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors leading-snug">Rapat Koordinasi Tim Pendamping Keluarga (TPK)</h4>
 <p class="text-gray-600 text-sm leading-relaxed mb-4 flex-grow line-clamp-3">Evaluasi rutin kinerja TPK Cikampek dalam mendampingi target sasaran secara door-to-door dan percepatan pelaporan di Elsimil.</p>
 <span class="text-xs text-gray-400 mt-auto">10 September 2026</span>
 </div>
 </a>

 <!-- News Item 3 -->
 <a href="#" class="group bg-white overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 flex flex-col h-full">
 <div class="h-48 overflow-hidden relative">
 <img src="https://images.unsplash.com/photo-1531206715517-5c0ba140b2b8?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Edukasi Remaja" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
 </div>
 <div class="p-6 flex-grow flex flex-col">
 <span class="text-xs font-bold text-amber-600 uppercase tracking-wider mb-2">Pusat Informasi</span>
 <h4 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors leading-snug">Pelatihan Konselor Remaja PIK-R Cikampek</h4>
 <p class="text-gray-600 text-sm leading-relaxed mb-4 flex-grow line-clamp-3">Remaja Cikampek dibekali pengetahuan mengenai bahaya napza, seks bebas, dan pernikahan dini melalui kegiatan GenRe.</p>
 <span class="text-xs text-gray-400 mt-auto">05 September 2026</span>
 </div>
 </a>
 
 </div>
 
 </div>
</section>
@endsection
