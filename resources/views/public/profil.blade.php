@extends('layouts.public')

@section('title', 'Profil Satpel PPKB Cikampek')

@section('content')
<!-- Hero Section -->
<section class="relative bg-white pt-32 pb-20 lg:pt-24 lg:pb-28 border-b border-gray-100 overflow-hidden">
 <!-- Decorative background elements -->
 <div class="absolute inset-0 z-0">
 <div class="absolute -top-24 -right-24 w-96 h-96 bg-blue-50 blur-3xl opacity-70"></div>
 <div class="absolute top-1/2 -left-24 w-72 h-72 bg-emerald-50 blur-3xl opacity-70"></div>
 </div>

 <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
 <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-8 items-center">
 
 <!-- Text Content -->
 <div class="flex flex-col items-start">
 <nav aria-label="Breadcrumb" class="flex items-center gap-2 text-sm font-medium text-gray-500 mb-8">
 <a href="{{ route('home') }}" class="hover:text-blue-600 transition-colors">Beranda</a>
 <span class="text-gray-300">/</span>
 <span class="text-gray-900">Profil Satpel</span>
 </nav>
 
 <h1 class="text-4xl sm:text-5xl lg:text-[54px] font-extrabold text-gray-900 tracking-tight leading-[1.1] mb-6">
 Membangun Ketahanan Keluarga di Cikampek.
 </h1>
 
 <p class="text-lg text-gray-600 leading-relaxed mb-8 max-w-lg">
 Satuan Pelayanan Pengendalian Penduduk dan Keluarga Berencana (Satpel PPKB) Kecamatan Cikampek berdedikasi mendampingi keluarga, mencegah stunting, dan mewujudkan masyarakat yang sejahtera.
 </p>
 
 <div class="flex flex-wrap items-center gap-4">
 <a href="#peran-layanan" class="px-6 py-3 bg-blue-600 text-white font-medium hover:bg-blue-700 transition shadow-sm flex items-center gap-2">
 <span>Kenali Peran Kami</span>
 <span class="material-symbols-outlined text-sm">arrow_downward</span>
 </a>
 </div>
 </div>

 <!-- Image Composition -->
    <div class="relative w-full h-[500px] lg:h-[600px] overflow-hidden shadow-xl">
        <img src="{{ asset('images/ibu-balita.jpg') }}" alt="Keluarga bahagia dan sehat" class="absolute inset-0 w-full h-full object-cover">
 <div class="absolute inset-0 bg-gradient-to-t from-gray-900/60 via-transparent to-transparent"></div>
 <div class="absolute bottom-6 left-6 right-6 p-5 bg-white/95 backdrop-blur-sm shadow-lg">
 <div class="flex items-center gap-4">
 <div class="w-12 h-12 bg-emerald-100 flex items-center justify-center shrink-0">
 <span class="material-symbols-outlined text-emerald-600">verified_user</span>
 </div>
 <div>
 <h3 class="font-bold text-gray-900">Melayani Sejak 1998</h3>
 <p class="text-sm text-gray-500">Mendampingi lebih dari 10 Desa di Cikampek.</p>
 </div>
 </div>
 </div>
 </div>
 
 </div>
 </div>
</section>

<!-- Stats Section -->
<section class="py-16 bg-white border-b border-gray-100">
 <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
 <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 divide-x divide-gray-100">
 <div class="px-4 text-center">
 <div class="text-4xl font-extrabold text-blue-600 mb-2">34k+</div>
 <div class="text-sm font-bold text-gray-900">Keluarga Terdata</div>
 </div>
 <div class="px-4 text-center">
 <div class="text-4xl font-extrabold text-blue-600 mb-2">482</div>
 <div class="text-sm font-bold text-gray-900">Kader Aktif</div>
 </div>
 <div class="px-4 text-center">
 <div class="text-4xl font-extrabold text-blue-600 mb-2">10</div>
 <div class="text-sm font-bold text-gray-900">Desa Binaan</div>
 </div>
 <div class="px-4 text-center">
 <div class="text-4xl font-extrabold text-blue-600 mb-2">6</div>
 <div class="text-sm font-bold text-gray-900">Program Prioritas</div>
 </div>
 </div>
 </div>
</section>

<!-- Visi Misi Section -->
<section class="py-24 bg-gray-50" id="visi-misi">
 <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
 <div class="text-center max-w-3xl mx-auto mb-16">
 <h2 class="text-sm font-bold text-blue-600 uppercase tracking-widest mb-2">Arah Kebijakan</h2>
 <h3 class="text-3xl font-extrabold text-gray-900 mb-6">Visi & Misi Satpel Cikampek</h3>
 <p class="text-xl text-gray-600 leading-relaxed italic">
 "Terwujudnya Keluarga Cikampek yang Berkualitas, Sejahtera, Berketahanan, dan Bebas Stunting."
 </p>
 </div>

 <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
 <div class="bg-white p-8 shadow-sm border border-gray-100 flex gap-6">
 <div class="w-12 h-12 bg-blue-50 flex items-center justify-center shrink-0">
 <span class="text-xl font-bold text-blue-600">01</span>
 </div>
 <div>
 <h4 class="text-lg font-bold text-gray-900 mb-2">Pemerataan Layanan KB</h4>
 <p class="text-gray-600 leading-relaxed">Meningkatkan akses dan pemerataan pelayanan KB berkualitas di seluruh fasilitas kesehatan dan klinik desa secara konsisten.</p>
 </div>
 </div>
 
 <div class="bg-white p-8 shadow-sm border border-gray-100 flex gap-6">
 <div class="w-12 h-12 bg-blue-50 flex items-center justify-center shrink-0">
 <span class="text-xl font-bold text-blue-600">02</span>
 </div>
 <div>
 <h4 class="text-lg font-bold text-gray-900 mb-2">Konvergensi Stunting</h4>
 <p class="text-gray-600 leading-relaxed">Mengoptimalkan pendampingan keluarga berisiko stunting melalui integrasi lintas sektor dan koordinasi berkala bersama bidan desa.</p>
 </div>
 </div>
 
 <div class="bg-white p-8 shadow-sm border border-gray-100 flex gap-6">
 <div class="w-12 h-12 bg-blue-50 flex items-center justify-center shrink-0">
 <span class="text-xl font-bold text-blue-600">03</span>
 </div>
 <div>
 <h4 class="text-lg font-bold text-gray-900 mb-2">Penguatan Kader Lini</h4>
 <p class="text-gray-600 leading-relaxed">Menguatkan kapasitas kader lapangan (PPKBD, Sub-PPKBD) sebagai motor edukasi ketahanan, parenting, dan pelaksanaan 8 fungsi keluarga.</p>
 </div>
 </div>
 
 <div class="bg-white p-8 shadow-sm border border-gray-100 flex gap-6">
 <div class="w-12 h-12 bg-blue-50 flex items-center justify-center shrink-0">
 <span class="text-xl font-bold text-blue-600">04</span>
 </div>
 <div>
 <h4 class="text-lg font-bold text-gray-900 mb-2">Satu Data Digital</h4>
 <p class="text-gray-600 leading-relaxed">Mengembangkan tata kelola pendataan kependudukan terpadu yang transparan, akuntabel, dan berbasis platform digital modern.</p>
 </div>
 </div>
 </div>
 </div>
</section>

<!-- Peran Strategis -->
<section class="py-24 bg-white" id="peran-layanan">
 <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
 <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 gap-6">
 <div>
 <h2 class="text-sm font-bold text-blue-600 uppercase tracking-widest mb-2">Peran Strategis</h2>
 <h3 class="text-3xl font-extrabold text-gray-900 max-w-xl">Enam Pilar Aksi Lapangan Kami</h3>
 </div>
 <p class="text-gray-600 max-w-md">
 Melayani masyarakat secara terstruktur, partisipatif, dan terukur bersama jejaring faskes dan kader desa.
 </p>
 </div>

 <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
 @php
 $pillars = [
 ['icon' => 'fact_check', 'title' => 'Pendataan Keluarga', 'desc' => 'Pengelolaan basis data akurat by name by address untuk sasaran intervensi sosial.'],
 ['icon' => 'supervisor_account', 'title' => 'Pendampingan TPK', 'desc' => 'Mobilisasi Tim Pendamping Keluarga untuk ibu hamil, calon pengantin, dan balita.'],
 ['icon' => 'vaccines', 'title' => 'Pelayanan KB', 'desc' => 'Fasilitasi layanan kontrasepsi (IUD, Implan, dll) yang aman dan terjangkau.'],
 ['icon' => 'child_care', 'title' => 'Pencegahan Stunting', 'desc' => 'Pemantauan status gizi antropometri balita posyandu dan edukasi PMT.'],
 ['icon' => 'school', 'title' => 'Pembinaan Kader', 'desc' => 'Pelatihan kapasitas berkala bagi kader guna menjamin akurasi respon lapangan.'],
 ['icon' => 'escalator_warning', 'title' => 'Konseling Ketahanan', 'desc' => 'Pendampingan kelompok Bina Keluarga Balita, Remaja, dan Lansia.']
 ];
 @endphp
 
 @foreach($pillars as $pillar)
 <div class="p-8 bg-gray-50 border border-gray-100 hover:border-blue-200 hover:shadow-md transition-all group">
 <div class="w-14 h-14 bg-white flex items-center justify-center shadow-sm mb-6 text-blue-600 group-hover:scale-110 transition-transform">
 <span class="material-symbols-outlined text-3xl">{{ $pillar['icon'] }}</span>
 </div>
 <h4 class="text-xl font-bold text-gray-900 mb-3">{{ $pillar['title'] }}</h4>
 <p class="text-gray-600 leading-relaxed">{{ $pillar['desc'] }}</p>
 </div>
 @endforeach
 </div>
 </div>
</section>

<!-- Call to Action -->
<section class="py-24 bg-blue-600">
 <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
 <h2 class="text-3xl sm:text-4xl font-extrabold text-white mb-6">
 Mari Bersama Membangun Keluarga Hebat
 </h2>
 <p class="text-lg text-blue-100 mb-10 max-w-2xl mx-auto">
 Tim penyuluh dan kader Satpel PPKB Kecamatan Cikampek siap mendampingi Anda dan keluarga dengan informasi kontrasepsi, gizi balita, dan pencegahan stunting.
 </p>
 <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
 <a href="{{ route('program.index') }}" class="w-full sm:w-auto px-8 py-3.5 bg-white text-blue-600 font-bold hover:bg-gray-50 transition shadow-lg">
 Pelajari Layanan
 </a>
 <a href="{{ route('kontak') }}" class="w-full sm:w-auto px-8 py-3.5 bg-transparent border-2 border-white/30 text-white font-bold hover:bg-white/10 transition">
 Hubungi Kami
 </a>
 </div>
 </div>
</section>
@endsection
