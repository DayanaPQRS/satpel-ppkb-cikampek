@extends('layouts.public')

@section('content')
<div class="bg-gray-50 border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
        <nav class="flex items-center space-x-3 text-sm text-gray-500 font-medium">
            <a href="{{ route('home') }}" class="hover:text-blue-600 transition-colors">Beranda</a>
            <span class="text-gray-400">/</span>
            <a href="{{ route('berita.index') }}" class="hover:text-blue-600 transition-colors">Berita</a>
            <span class="text-gray-400">/</span>
            <span class="text-gray-900 font-bold truncate max-w-[200px] sm:max-w-md">Detail Berita</span>
        </nav>
    </div>
</div>

<section class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-16">
    <header class="mb-10">
        <div class="mb-6 flex flex-wrap gap-4 text-sm text-gray-500">
            <span class="flex items-center gap-1.5 font-bold text-blue-600">
                <span class="material-symbols-outlined text-[18px]">verified</span>
                Berita Resmi Satpel PPKB
            </span>
            <span class="flex items-center gap-1.5">
                <span class="material-symbols-outlined text-[18px]">calendar_today</span>
                12 Agustus 2026
            </span>
            <span class="flex items-center gap-1.5">
                <span class="material-symbols-outlined text-[18px]">schedule</span>
                4 Menit Membaca
            </span>
        </div>
        
        <h1 class="text-4xl lg:text-5xl font-extrabold text-gray-900 leading-[1.1] tracking-tight mb-8">
            Gerakan Bersama Kader PPKB Cikampek Perkuat Pendampingan Keluarga di Wilayah
        </h1>

        <div class="w-full aspect-[21/9] relative border border-gray-200 shadow-sm">
            <img src="{{ asset('images/kader-kunjungan.jpg') }}" alt="Bidan dan Kader" class="w-full h-full object-cover">
            <div class="absolute bottom-0 left-0 right-0 p-3 bg-white/95 backdrop-blur border-t border-gray-200">
                <p class="text-xs text-gray-600">Dokumentasi: Bidan desa bersama kader TPK Satpel PPKB Cikampek melakukan kunjungan.</p>
            </div>
        </div>
    </header>

    <article class="prose prose-lg max-w-none text-gray-600 prose-headings:text-gray-900 prose-a:text-blue-600">
        <p class="lead text-xl text-gray-900 font-medium">Konsolidasi terpadu sebanyak 340 kader Tim Pendamping Keluarga (TPK) di sepuluh desa se-Kecamatan Cikampek resmi diintensifkan mulai pekan ini. Langkah strategis ini ditempuh guna memacu ketepatan intervensi gizi dan pendataan terintegrasi.</p>
        
        <p>Dalam akselerasi lapangan tahun 2026 ini, setiap regu kader memegang mandat verifikasi riil melalui kunjungan langsung dari rumah ke rumah (door-to-door). Pendekatan personal tersebut mencakup pemutakhiran indikator kesehatan pada aplikasi Elsimil dan pengukuran antropometri balita.</p>

        <h2 class="text-2xl font-bold mt-10 mb-4 pb-2 border-b-2 border-blue-600 inline-block">Kolaborasi Lintas Sektor</h2>
        
        <p>Efektivitas pendampingan keluarga di tingkat akar rumput tak lepas dari keselarasan kerja antara Satpel PPKB Cikampek, Puskesmas, jajaran pemerintah desa, serta para ketua RT dan RW. Jalur koordinasi yang dipersingkat mempermudah rujukan cepat.</p>

        <blockquote class="my-8 p-6 bg-gray-50 border-l-4 border-blue-600 italic text-xl text-gray-900 font-medium shadow-sm">
            "Pendampingan keluarga dilakukan secara berkelanjutan melalui kolaborasi kader dan masyarakat di tingkat wilayah untuk memastikan tidak ada balita maupun ibu hamil yang luput dari pemantauan gizi."
            <footer class="text-sm text-gray-500 mt-4 not-italic font-bold tracking-widest uppercase">— Kepala Satpel PPKB Kecamatan Cikampek</footer>
        </blockquote>

        <p>Pendekatan yang dibangun bukan semata inspeksi administratif, melainkan dialog empati yang mendengarkan kendala harian ibu balita, mulai dari pemahaman pola makan bergizi seimbang berbahan baku lokal hingga edukasi kontrasepsi.</p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 my-10">
            <div class="border border-gray-200 shadow-sm p-2 bg-white">
                <img src="{{ asset('images/pelayanan-posyandu.jpg') }}" alt="Kader" class="w-full aspect-[4/3] object-cover border border-gray-100">
                <p class="text-xs text-gray-500 mt-2 text-center">Kader TPK Dawuan Tengah</p>
            </div>
            <div class="border border-gray-200 shadow-sm p-2 bg-white">
                <img src="{{ asset('images/ibu-balita.jpg') }}" alt="Forum" class="w-full aspect-[4/3] object-cover border border-gray-100">
                <p class="text-xs text-gray-500 mt-2 text-center">Forum edukasi keluarga</p>
            </div>
        </div>

        <h2 class="text-2xl font-bold mt-10 mb-4 pb-2 border-b-2 border-blue-600 inline-block">Akses Layanan Terbuka</h2>
        
        <p>Guna menyederhanakan akses, warga di sepuluh desa dapat langsung berinteraksi dengan kader TPK di pos RW setempat atau mengunjungi Balai Penyuluhan KB Satpel PPKB Cikampek setiap hari kerja.</p>
    </article>

    <div class="mt-12 pt-8 border-t border-gray-200 flex flex-wrap justify-between items-center gap-4">
        <div class="flex gap-2">
            <span class="px-3 py-1 bg-gray-100 text-gray-600 text-xs font-bold uppercase tracking-wider">#SatpelCikampek</span>
            <span class="px-3 py-1 bg-gray-100 text-gray-600 text-xs font-bold uppercase tracking-wider">#CegahStunting</span>
        </div>
        <button onclick="window.print()" class="text-blue-600 font-bold text-sm uppercase tracking-widest hover:text-blue-800 transition-colors flex items-center gap-2">
            <span class="material-symbols-outlined text-[18px]">print</span> Cetak Berita
        </button>
    </div>
</section>

<section class="bg-gray-50 border-t border-gray-200 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-end mb-8">
            <h2 class="text-2xl font-bold text-gray-900">Berita Terkait Lainnya</h2>
            <a href="{{ route('berita.index') }}" class="text-blue-600 font-bold text-sm uppercase tracking-widest hover:text-blue-800 flex items-center gap-1">Lihat Semua <span class="material-symbols-outlined text-[16px]">arrow_forward</span></a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white border border-gray-200 p-4 shadow-sm hover:border-blue-600 transition-colors">
                <div class="text-xs text-gray-500 font-bold uppercase tracking-widest mb-2">08 Agustus 2026</div>
                <h3 class="text-lg font-bold text-gray-900 mb-2 leading-snug">Pertemuan Evaluasi Kader: Menjaga Kualitas Input Data Elsimil</h3>
                <p class="text-sm text-gray-600 line-clamp-2">Monitoring berkala terhadap kelengkapan berkas calon pengantin dan pelaporan bayi.</p>
            </div>
            <div class="bg-white border border-gray-200 p-4 shadow-sm hover:border-blue-600 transition-colors">
                <div class="text-xs text-gray-500 font-bold uppercase tracking-widest mb-2">02 Agustus 2026</div>
                <h3 class="text-lg font-bold text-gray-900 mb-2 leading-snug">Rembuk Warga Kampung KB: Olahan Pangan Protein Tinggi</h3>
                <p class="text-sm text-gray-600 line-clamp-2">Praktik langsung memasak menu kaya hewani bersama ibu-ibu kader PKK.</p>
            </div>
            <div class="bg-white border border-gray-200 p-4 shadow-sm hover:border-blue-600 transition-colors">
                <div class="text-xs text-gray-500 font-bold uppercase tracking-widest mb-2">28 Juli 2026</div>
                <h3 class="text-lg font-bold text-gray-900 mb-2 leading-snug">Akses Layanan KB Bergerak: Melayani Lebih dari 120 Akseptor</h3>
                <p class="text-sm text-gray-600 line-clamp-2">Dukungan mobil unit pelayanan KB memudahkan kaum ibu mendapatkan kontrasepsi.</p>
            </div>
        </div>
    </div>
</section>
@endsection
