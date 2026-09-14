@extends('layouts.public')

@section('title', 'Agenda Kegiatan - Satpel PPKB Cikampek')

@section('content')
<!-- Header -->
<section class="bg-blue-600 pt-32 pb-20 border-b border-blue-700">
 <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
 <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight mb-4">Agenda Kegiatan</h1>
 <p class="text-lg text-blue-100 max-w-2xl mx-auto">Jadwal pelaksanaan posyandu, bimbingan keluarga, dan layanan KB keliling di wilayah Cikampek.</p>
 </div>
</section>

<!-- Content -->
<section class="py-16 bg-gray-50">
 <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
 
 <div class="space-y-6">
 <!-- Agenda Item 1 -->
 <div class="bg-white p-6 border border-gray-100 shadow-sm hover:shadow-md transition-shadow flex flex-col md:flex-row gap-6 items-center">
 <div class="w-full md:w-32 bg-blue-50 p-4 text-center shrink-0">
 <span class="block text-blue-600 font-extrabold text-3xl">24</span>
 <span class="block text-gray-500 font-semibold text-sm uppercase">September</span>
 <span class="block text-gray-400 text-xs mt-1">2026</span>
 </div>
 
 <div class="flex-grow text-center md:text-left">
 <div class="flex items-center justify-center md:justify-start gap-2 text-gray-500 text-sm mb-2 font-medium">
 <span class="material-symbols-outlined text-[18px]">schedule</span> 08:00 - Selesai
 <span class="px-2 text-gray-300">•</span>
 <span class="material-symbols-outlined text-[18px]">location_on</span> Aula Kecamatan Cikampek
 </div>
 <h3 class="text-xl font-bold text-gray-900 mb-2">Penyuluhan Serentak Pasangan Usia Subur</h3>
 <p class="text-gray-600 text-sm leading-relaxed">Edukasi terkait perencanaan kehamilan yang sehat dan penjelasan metode kontrasepsi jangka panjang oleh bidan ahli.</p>
 </div>
 
 <div class="shrink-0">
 <a href="#" class="px-5 py-2 bg-blue-600 text-white font-medium hover:bg-blue-700 transition shadow-sm text-sm inline-block">Detail</a>
 </div>
 </div>

 <!-- Agenda Item 2 -->
 <div class="bg-white p-6 border border-gray-100 shadow-sm hover:shadow-md transition-shadow flex flex-col md:flex-row gap-6 items-center">
 <div class="w-full md:w-32 bg-emerald-50 p-4 text-center shrink-0">
 <span class="block text-emerald-600 font-extrabold text-3xl">28</span>
 <span class="block text-gray-500 font-semibold text-sm uppercase">September</span>
 <span class="block text-gray-400 text-xs mt-1">2026</span>
 </div>
 
 <div class="flex-grow text-center md:text-left">
 <div class="flex items-center justify-center md:justify-start gap-2 text-gray-500 text-sm mb-2 font-medium">
 <span class="material-symbols-outlined text-[18px]">schedule</span> 09:00 - 12:00
 <span class="px-2 text-gray-300">•</span>
 <span class="material-symbols-outlined text-[18px]">location_on</span> Balai Desa Cikampek Kota
 </div>
 <h3 class="text-xl font-bold text-gray-900 mb-2">Pelayanan KB Keliling (Gratis)</h3>
 <p class="text-gray-600 text-sm leading-relaxed">Fasilitasi layanan pemasangan IUD dan Implan gratis bagi masyarakat Cikampek. Harap membawa fotokopi KTP/KK.</p>
 </div>
 
 <div class="shrink-0">
 <a href="#" class="px-5 py-2 bg-blue-600 text-white font-medium hover:bg-blue-700 transition shadow-sm text-sm inline-block">Detail</a>
 </div>
 </div>

 <!-- Agenda Item 3 -->
 <div class="bg-white p-6 border border-gray-100 shadow-sm hover:shadow-md transition-shadow flex flex-col md:flex-row gap-6 items-center">
 <div class="w-full md:w-32 bg-amber-50 p-4 text-center shrink-0">
 <span class="block text-amber-600 font-extrabold text-3xl">02</span>
 <span class="block text-gray-500 font-semibold text-sm uppercase">Oktober</span>
 <span class="block text-gray-400 text-xs mt-1">2026</span>
 </div>
 
 <div class="flex-grow text-center md:text-left">
 <div class="flex items-center justify-center md:justify-start gap-2 text-gray-500 text-sm mb-2 font-medium">
 <span class="material-symbols-outlined text-[18px]">schedule</span> 13:00 - 15:00
 <span class="px-2 text-gray-300">•</span>
 <span class="material-symbols-outlined text-[18px]">location_on</span> Posyandu Melati 1
 </div>
 <h3 class="text-xl font-bold text-gray-900 mb-2">Bina Keluarga Balita (BKB)</h3>
 <p class="text-gray-600 text-sm leading-relaxed">Pertemuan kelompok ibu balita untuk mendiskusikan pola asuh, stimulasi tumbuh kembang, dan pemenuhan gizi anak.</p>
 </div>
 
 <div class="shrink-0">
 <a href="#" class="px-5 py-2 bg-blue-600 text-white font-medium hover:bg-blue-700 transition shadow-sm text-sm inline-block">Detail</a>
 </div>
 </div>
 
 </div>
 
 </div>
</section>
@endsection
