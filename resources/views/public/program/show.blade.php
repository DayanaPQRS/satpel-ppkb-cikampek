@extends('layouts.public')

@section('content')
<!-- Breadcrumb Navigation -->
<div class="w-full bg-gray-50 border-b border-gray-200">
 <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
 <nav class="flex items-center space-x-3 text-sm text-gray-500 font-medium">
 <a href="{{ route('home') }}" class="hover:text-blue-600 transition-colors">Beranda</a>
 <span class="text-gray-400">/</span>
 <a href="{{ route('program.index') }}" class="hover:text-blue-600 transition-colors">Program</a>
 <span class="text-gray-400">/</span>
 <span class="text-gray-900 font-bold">Pendampingan Keluarga Terpadu</span>
 </nav>
 </div>
</div>

<!-- Hero Detail Section -->
<section class="w-full bg-white pt-16 pb-12">
 <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
 <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
 <div class="flex flex-col items-start gap-6">
 <!-- Clean Eyebrow Text instead of AI-slop badges -->
 <p class="text-blue-600 font-bold tracking-widest uppercase text-xs">
 Program Resmi Satpel PPKB — Unggulan
 </p>
 
 <h1 class="text-4xl sm:text-5xl font-extrabold text-gray-900 tracking-tight leading-[1.1]">
 Pendampingan Keluarga Terpadu
 </h1>
 
 <p class="text-lg text-gray-600 leading-relaxed">
 Pendampingan berkelanjutan untuk membantu keluarga mengenali kebutuhan, mendapatkan informasi resmi, dan mengakses layanan kesehatan serta sosial yang tepat di seluruh wilayah Kecamatan Cikampek.
 </p>
 
 <div class="flex flex-wrap items-center gap-4 pt-4">
 <a href="#kontak-cta" class="inline-flex items-center justify-center px-8 py-3.5 bg-blue-600 text-white font-bold hover:bg-blue-700 transition-colors shadow-sm">
 Konsultasi Kader Desa
 </a>
 <a href="#alur-program" class="inline-flex items-center justify-center px-8 py-3.5 bg-white text-gray-900 font-bold border-2 border-gray-200 hover:border-gray-900 transition-colors">
 Alur Pendampingan
 </a>
 </div>
 </div>
 
 <div class="w-full aspect-[4/3] relative">
 <!-- Sharp edges for image -->
 <img src="https://images.unsplash.com/photo-1542044801-38d5e89d8137?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="Dokumentasi Pelayanan" class="absolute inset-0 w-full h-full object-cover shadow-lg border border-gray-100">
 <div class="absolute bottom-0 left-0 right-0 bg-white/95 backdrop-blur border-t border-gray-200 p-4 shadow-sm">
 <p class="text-xs text-gray-600 font-medium flex items-center gap-2">
 <span class="material-symbols-outlined text-[16px] text-gray-400">photo_camera</span>
 Dokumentasi rutin kader di lapangan
 </p>
 </div>
 </div>
 </div>
 </div>
</section>

<!-- Summary Cards Grid -->
<section class="w-full bg-gray-50 border-y border-gray-200 py-16">
 <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
 <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
 <!-- Sharp edged cards -->
 <div class="bg-white p-6 border border-gray-200 shadow-sm flex flex-col gap-3">
 <span class="text-xs uppercase tracking-widest font-bold text-gray-500">Sasaran Utama</span>
 <p class="text-xl font-bold text-gray-900">Seluruh Keluarga Binaan</p>
 <p class="text-sm text-gray-600 leading-relaxed mt-auto">Meliputi 10 Desa/Kelurahan se-Kecamatan Cikampek</p>
 </div>
 <div class="bg-white p-6 border border-gray-200 shadow-sm flex flex-col gap-3">
 <span class="text-xs uppercase tracking-widest font-bold text-gray-500">Pelaksana Teknis</span>
 <p class="text-xl font-bold text-gray-900">Satpel, TPK & Kader</p>
 <p class="text-sm text-gray-600 leading-relaxed mt-auto">Kolaborasi Tenaga Pendamping Keluarga & Posyandu</p>
 </div>
 <div class="bg-white p-6 border border-gray-200 shadow-sm flex flex-col gap-3">
 <span class="text-xs uppercase tracking-widest font-bold text-gray-500">Cakupan Wilayah</span>
 <p class="text-xl font-bold text-gray-900">10 Desa Administratif</p>
 <p class="text-sm text-gray-600 leading-relaxed mt-auto">Wilayah kerja terpadu Satpel PPKB Cikampek</p>
 </div>
 <div class="bg-white p-6 border border-gray-200 shadow-sm flex flex-col gap-3">
 <span class="text-xs uppercase tracking-widest font-bold text-gray-500">Fokus Intervensi</span>
 <p class="text-xl font-bold text-gray-900">Cegah Stunting & KB</p>
 <p class="text-sm text-gray-600 leading-relaxed mt-auto">Validasi data, edukasi 1.000 HPK & ketahanan sosial</p>
 </div>
 </div>
 </div>
</section>

<!-- Narrative Storytelling Section -->
<section class="w-full px-4 sm:px-6 lg:px-8 py-20 bg-white border-b border-gray-200">
 <div class="max-w-7xl mx-auto">
 <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
 <div class="flex flex-col gap-6">
 <!-- Clean Eyebrow -->
 <p class="text-emerald-600 font-bold tracking-widest uppercase text-xs">
 Tentang Inisiatif
 </p>
 <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900 tracking-tight leading-tight">
 Membangun Ketahanan Keluarga dari Tingkat Rumah Tangga
 </h2>
 <div class="space-y-6 text-gray-600 leading-relaxed">
 <p>Pendampingan Keluarga Terpadu merupakan pilar strategis Satpel PPKB Kecamatan Cikampek untuk memastikan kehadiran negara di setiap pintu warga. Program ini mengintegrasikan peran penyuluh KB lapangan, bidan desa, dan kader Tim Pendamping Keluarga (TPK) dalam satu kesatuan sistem pelayanan preventif.</p>
 <p>Melalui pendekatan yang humanis, tim melakukan verifikasi faktual terhadap kondisi riil rumah tangga, memetakan risiko gizi buruk anak, membimbing calon pengantin lewat aplikasi Elsimil, serta menjembatani keluarga prasejahtera dengan rujukan layanan medis.</p>
 </div>
 </div>
 <div class="w-full aspect-[4/3]">
 <!-- Sharp edges -->
 <img src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="Kunjungan Lapangan" class="w-full h-full object-cover shadow-lg border border-gray-100">
 </div>
 </div>
 </div>
</section>

<!-- Target Audience -->
<section class="w-full px-4 sm:px-6 lg:px-8 py-20 bg-gray-50 border-b border-gray-200">
 <div class="max-w-7xl mx-auto">
 <div class="mb-12">
 <!-- Clean Eyebrow -->
 <p class="text-blue-600 font-bold tracking-widest uppercase text-xs mb-3">
 Inklusif & Menyeluruh
 </p>
 <h2 class="text-3xl font-extrabold text-gray-900 tracking-tight">
 Siapa Saja yang Kami Dampingi?
 </h2>
 </div>
 
 <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
 <div class="bg-white p-8 border border-gray-200 shadow-sm">
 <span class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-2 block">Kelompok 01</span>
 <h4 class="text-lg font-bold text-gray-900 mb-3">Calon Pengantin (CATIN)</h4>
 <p class="text-sm text-gray-600 leading-relaxed">Pemeriksaan Hb, lingkar lengan, bimbingan gizi pra-nikah, dan pembuatan akun Elsimil.</p>
 </div>
 <div class="bg-white p-8 border border-gray-200 shadow-sm">
 <span class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-2 block">Kelompok 02</span>
 <h4 class="text-lg font-bold text-gray-900 mb-3">Ibu Hamil & Nifas</h4>
 <p class="text-sm text-gray-600 leading-relaxed">Pemantauan asupan zat besi, deteksi dini komplikasi, serta persiapan ASI eksklusif.</p>
 </div>
 <div class="bg-white p-8 border border-gray-200 shadow-sm">
 <span class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-2 block">Kelompok 03</span>
 <h4 class="text-lg font-bold text-gray-900 mb-3">Bayi & Balita</h4>
 <p class="text-sm text-gray-600 leading-relaxed">Monitoring tinggi badan, imunisasi dasar lengkap, dan pola MP-ASI bernutrisi.</p>
 </div>
 <div class="bg-white p-8 border border-gray-200 shadow-sm">
 <span class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-2 block">Kelompok 04</span>
 <h4 class="text-lg font-bold text-gray-900 mb-3">Pasangan Usia Subur (PUS)</h4>
 <p class="text-sm text-gray-600 leading-relaxed">Konseling pemilihan alat kontrasepsi mantap (MKJP/Non-MKJP) terencana dan aman.</p>
 </div>
 <div class="bg-white p-8 border border-gray-200 shadow-sm">
 <span class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-2 block">Kelompok 05</span>
 <h4 class="text-lg font-bold text-gray-900 mb-3">Remaja (PIK-R / GenRe)</h4>
 <p class="text-sm text-gray-600 leading-relaxed">Edukasi pencegahan pernikahan dini, seks pra-nikah, dan gaya hidup sehat sebaya.</p>
 </div>
 <div class="bg-white p-8 border border-gray-200 shadow-sm">
 <span class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-2 block">Kelompok 06</span>
 <h4 class="text-lg font-bold text-gray-900 mb-3">Lansia (BKL)</h4>
 <p class="text-sm text-gray-600 leading-relaxed">Pemberdayaan lansia produktif, senam sehat, dan pemeliharaan kesehatan mental.</p>
 </div>
 </div>
 </div>
</section>

<!-- Call to Action Banner -->
<section class="w-full bg-blue-600 py-16" id="kontak-cta">
 <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
 <h2 class="text-3xl sm:text-4xl font-extrabold text-white leading-tight mb-6">
 Butuh Pendampingan Keluarga?
 </h2>
 <p class="text-lg text-blue-100 max-w-2xl mx-auto mb-10">
 Hubungi kantor Satpel PPKB Kecamatan Cikampek atau konfirmasi langsung kepada kader Posyandu/TPK di rukun tetangga Anda. Konsultasi tidak dipungut biaya.
 </p>
 <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
 <a href="tel:02648371209" class="px-8 py-3.5 bg-white text-blue-600 font-bold border-2 border-transparent hover:bg-gray-50 transition-colors">
 Hubungi (0264) 8371-209
 </a>
 <a href="https://wa.me/6281234567890" class="px-8 py-3.5 bg-transparent text-white font-bold border-2 border-white hover:bg-white/10 transition-colors">
 WhatsApp Siaga Satpel
 </a>
 </div>
 </div>
</section>
@endsection
