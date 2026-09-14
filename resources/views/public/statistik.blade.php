@extends('layouts.public')

@section('title', 'Statistik Wilayah - Satpel PPKB Cikampek')

@section('content')
<!-- Header -->
<section class="bg-blue-600 pt-32 pb-20 border-b border-blue-700">
 <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
 <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight mb-4">Statistik & Data Kependudukan</h1>
 <p class="text-lg text-blue-100 max-w-2xl mx-auto">Gambaran data demografi, capaian program KB, dan peta stunting di wilayah Kecamatan Cikampek.</p>
 </div>
</section>

<!-- Content -->
<section class="py-16 bg-gray-50">
 <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
 
 <!-- Summary Cards -->
 <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
 <div class="bg-white p-6 shadow-sm border border-gray-100">
 <div class="w-12 h-12 bg-blue-50 text-blue-600 flex items-center justify-center mb-4">
 <span class="material-symbols-outlined">family_restroom</span>
 </div>
 <div class="text-3xl font-extrabold text-gray-900 mb-1">34.250</div>
 <div class="text-sm font-medium text-gray-500">Total Kepala Keluarga</div>
 </div>
 
 <div class="bg-white p-6 shadow-sm border border-gray-100">
 <div class="w-12 h-12 bg-emerald-50 text-emerald-600 flex items-center justify-center mb-4">
 <span class="material-symbols-outlined">group</span>
 </div>
 <div class="text-3xl font-extrabold text-gray-900 mb-1">105.802</div>
 <div class="text-sm font-medium text-gray-500">Jumlah Penduduk</div>
 </div>
 
 <div class="bg-white p-6 shadow-sm border border-gray-100">
 <div class="w-12 h-12 bg-amber-50 text-amber-600 flex items-center justify-center mb-4">
 <span class="material-symbols-outlined">medical_services</span>
 </div>
 <div class="text-3xl font-extrabold text-gray-900 mb-1">68%</div>
 <div class="text-sm font-medium text-gray-500">Peserta KB Aktif (PA)</div>
 </div>
 
 <div class="bg-white p-6 shadow-sm border border-gray-100">
 <div class="w-12 h-12 bg-rose-50 text-rose-600 flex items-center justify-center mb-4">
 <span class="material-symbols-outlined">child_care</span>
 </div>
 <div class="text-3xl font-extrabold text-gray-900 mb-1">4.2%</div>
 <div class="text-sm font-medium text-gray-500">Prevalensi Stunting</div>
 </div>
 </div>

 <!-- Charts Placeholders -->
 <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
 <div class="bg-white p-8 shadow-sm border border-gray-100">
 <h3 class="text-lg font-bold text-gray-900 mb-6 flex items-center gap-2">
 <span class="material-symbols-outlined text-blue-600">pie_chart</span>
 Metode Kontrasepsi (Mix)
 </h3>
 <div class="h-64 flex items-center justify-center bg-gray-50 border border-dashed border-gray-200">
 <p class="text-gray-400 text-sm">Visualisasi Chart akan dimuat di sini</p>
 </div>
 </div>
 
 <div class="bg-white p-8 shadow-sm border border-gray-100">
 <h3 class="text-lg font-bold text-gray-900 mb-6 flex items-center gap-2">
 <span class="material-symbols-outlined text-emerald-600">bar_chart</span>
 Tren Peserta KB Baru 2026
 </h3>
 <div class="h-64 flex items-center justify-center bg-gray-50 border border-dashed border-gray-200">
 <p class="text-gray-400 text-sm">Visualisasi Chart akan dimuat di sini</p>
 </div>
 </div>
 </div>

 </div>
</section>
@endsection
