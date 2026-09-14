@extends('layouts.public')

@section('content')
<div class="bg-gray-50 border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
        <nav class="flex items-center space-x-3 text-sm text-gray-500 font-medium">
            <a href="{{ route('home') }}" class="hover:text-blue-600 transition-colors">Beranda</a>
            <span class="text-gray-400">/</span>
            <a href="{{ route('kegiatan.index') }}" class="hover:text-blue-600 transition-colors">Kegiatan</a>
            <span class="text-gray-400">/</span>
            <span class="text-gray-900 font-bold truncate max-w-[200px] sm:max-w-md">Detail Kegiatan</span>
        </nav>
    </div>
</div>

<section class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-16">
    <header class="mb-10">
        <div class="mb-6 flex flex-wrap gap-4 text-sm text-gray-500">
            <span class="flex items-center gap-1.5 font-bold text-blue-600">
                <span class="material-symbols-outlined text-[18px]">verified</span>
                Kegiatan Resmi
            </span>
            <span class="flex items-center gap-1.5 font-bold text-emerald-600">
                <span class="material-symbols-outlined text-[18px]">group</span>
                Pendampingan Terpadu
            </span>
        </div>
        
        <h1 class="text-4xl lg:text-5xl font-extrabold text-gray-900 leading-[1.1] tracking-tight mb-8">
            Penyuluhan Gizi 1.000 HPK & Demo Masak DASHAT Desa Kamojing
        </h1>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8 border-y border-gray-200 py-6">
            <div class="flex flex-col gap-1">
                <span class="text-xs font-bold text-gray-400 uppercase tracking-widest">Waktu Pelaksanaan</span>
                <span class="text-gray-900 font-bold">15 September 2026</span>
                <span class="text-sm text-gray-600">08:00 - 12:00 WIB</span>
            </div>
            <div class="flex flex-col gap-1">
                <span class="text-xs font-bold text-gray-400 uppercase tracking-widest">Lokasi</span>
                <span class="text-gray-900 font-bold">Balai Desa Kamojing</span>
                <span class="text-sm text-gray-600">Kec. Cikampek, Karawang</span>
            </div>
            <div class="flex flex-col gap-1">
                <span class="text-xs font-bold text-gray-400 uppercase tracking-widest">Penyelenggara</span>
                <span class="text-gray-900 font-bold">Satpel PPKB Cikampek</span>
                <span class="text-sm text-gray-600">TPK & PKK Desa Kamojing</span>
            </div>
        </div>

        <div class="w-full aspect-[21/9] relative border border-gray-200 shadow-sm">
            <img src="https://images.unsplash.com/photo-1542044801-38d5e89d8137?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" alt="Kegiatan" class="w-full h-full object-cover">
        </div>
    </header>

    <article class="prose prose-lg max-w-none text-gray-600 prose-headings:text-gray-900 prose-a:text-blue-600">
        <h2 class="text-2xl font-bold mb-4 pb-2 border-b-2 border-blue-600 inline-block">Deskripsi Kegiatan</h2>
        <p>Kegiatan Dapur Sehat Atasi Stunting (DASHAT) di Desa Kamojing merupakan intervensi spesifik untuk memberikan edukasi praktis kepada ibu balita dan ibu hamil terkait pemenuhan gizi 1.000 Hari Pertama Kehidupan. Melalui demonstrasi memasak berbahan pangan lokal yang murah dan mudah didapat, peserta diajarkan cara mengolah protein hewani agar menarik bagi balita dan memenuhi standar gizi seimbang.</p>
        
        <h2 class="text-2xl font-bold mt-10 mb-4 pb-2 border-b-2 border-blue-600 inline-block">Rangkaian Acara</h2>
        <ul class="space-y-4 list-none pl-0">
            <li class="flex items-start gap-4 p-4 border border-gray-200 bg-white shadow-sm">
                <span class="flex-shrink-0 text-blue-600 font-bold">08:00</span>
                <div>
                    <h4 class="font-bold text-gray-900 m-0">Registrasi & Pengukuran Antropometri</h4>
                    <p class="text-sm text-gray-600 mt-1 mb-0">Pencatatan tinggi dan berat badan balita peserta oleh kader Posyandu.</p>
                </div>
            </li>
            <li class="flex items-start gap-4 p-4 border border-gray-200 bg-white shadow-sm">
                <span class="flex-shrink-0 text-blue-600 font-bold">09:00</span>
                <div>
                    <h4 class="font-bold text-gray-900 m-0">Materi Edukasi 1.000 HPK</h4>
                    <p class="text-sm text-gray-600 mt-1 mb-0">Penyampaian materi pentingnya nutrisi di masa emas oleh Penyuluh KB dan Bidan.</p>
                </div>
            </li>
            <li class="flex items-start gap-4 p-4 border border-gray-200 bg-white shadow-sm">
                <span class="flex-shrink-0 text-blue-600 font-bold">10:00</span>
                <div>
                    <h4 class="font-bold text-gray-900 m-0">Demonstrasi Masak DASHAT</h4>
                    <p class="text-sm text-gray-600 mt-1 mb-0">Praktek membuat nugget tempe ikan dan puding kelor bersama ibu-ibu peserta.</p>
                </div>
            </li>
        </ul>
    </article>
</section>

<section class="bg-gray-50 border-t border-gray-200 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-end mb-8">
            <h2 class="text-2xl font-bold text-gray-900">Jadwal Kegiatan Terdekat</h2>
            <a href="{{ route('kegiatan.index') }}" class="text-blue-600 font-bold text-sm uppercase tracking-widest hover:text-blue-800 flex items-center gap-1">Lihat Semua Agenda <span class="material-symbols-outlined text-[16px]">arrow_forward</span></a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white border border-gray-200 p-4 shadow-sm hover:border-blue-600 transition-colors">
                <div class="flex gap-4">
                    <div class="flex flex-col items-center justify-center p-3 bg-blue-50 border border-blue-100 text-blue-700 min-w-[70px]">
                        <span class="text-2xl font-black leading-none">20</span>
                        <span class="text-xs font-bold uppercase mt-1">Okt</span>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-gray-900 mb-1 leading-snug">Pelayanan Safari KB Gratis Serentak</h3>
                        <p class="text-sm text-gray-600 line-clamp-2">Pemasangan Implan & IUD di Puskesmas Cikampek.</p>
                    </div>
                </div>
            </div>
            <div class="bg-white border border-gray-200 p-4 shadow-sm hover:border-blue-600 transition-colors">
                <div class="flex gap-4">
                    <div class="flex flex-col items-center justify-center p-3 bg-blue-50 border border-blue-100 text-blue-700 min-w-[70px]">
                        <span class="text-2xl font-black leading-none">25</span>
                        <span class="text-xs font-bold uppercase mt-1">Okt</span>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-gray-900 mb-1 leading-snug">Bimbingan Pranikah Elsimil (Batch III)</h3>
                        <p class="text-sm text-gray-600 line-clamp-2">Edukasi kesehatan reproduksi calon pengantin se-Kecamatan Cikampek.</p>
                    </div>
                </div>
            </div>
            <div class="bg-white border border-gray-200 p-4 shadow-sm hover:border-blue-600 transition-colors">
                <div class="flex gap-4">
                    <div class="flex flex-col items-center justify-center p-3 bg-blue-50 border border-blue-100 text-blue-700 min-w-[70px]">
                        <span class="text-2xl font-black leading-none">05</span>
                        <span class="text-xs font-bold uppercase mt-1">Nov</span>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-gray-900 mb-1 leading-snug">Rapat Koordinasi TPK Tingkat Kecamatan</h3>
                        <p class="text-sm text-gray-600 line-clamp-2">Evaluasi capaian pendampingan keluarga bulan berjalan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
