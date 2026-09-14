@extends('layouts.public')

@section('title', 'Kontak Kami - Satpel PPKB Cikampek')

@section('content')
<!-- Header -->
<section class="bg-blue-600 pt-32 pb-20 border-b border-blue-700">
 <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
 <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight mb-4">Hubungi Kami</h1>
 <p class="text-lg text-blue-100 max-w-2xl mx-auto">Kami siap melayani dan mendengarkan aspirasi Anda seputar layanan keluarga berencana dan kependudukan.</p>
 </div>
</section>

<!-- Content -->
<section class="py-16 bg-gray-50">
 <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
 
 <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
 <!-- Contact Info -->
 <div>
 <h2 class="text-2xl font-bold text-gray-900 mb-6">Informasi Kontak</h2>
 <p class="text-gray-600 mb-8 leading-relaxed">Kunjungi kantor kami pada hari kerja atau hubungi kami melalui saluran di bawah ini untuk pertanyaan seputar program dan layanan Satpel PPKB Kecamatan Cikampek.</p>
 
 <div class="space-y-6">
 <div class="flex items-start gap-4 p-4 bg-white border border-gray-100 shadow-sm">
 <div class="w-12 h-12 bg-blue-50 text-blue-600 flex items-center justify-center shrink-0">
 <span class="material-symbols-outlined text-2xl">location_on</span>
 </div>
 <div>
 <h4 class="font-bold text-gray-900 mb-1">Alamat Kantor</h4>
 <p class="text-gray-600 text-sm">Jl. Jenderal Sudirman No. 45, Cikampek, Kabupaten Karawang, Jawa Barat 41373</p>
 </div>
 </div>
 
 <div class="flex items-start gap-4 p-4 bg-white border border-gray-100 shadow-sm">
 <div class="w-12 h-12 bg-blue-50 text-blue-600 flex items-center justify-center shrink-0">
 <span class="material-symbols-outlined text-2xl">call</span>
 </div>
 <div>
 <h4 class="font-bold text-gray-900 mb-1">Telepon</h4>
 <p class="text-gray-600 text-sm">(0264) 310-891</p>
 <p class="text-gray-500 text-xs mt-1">Senin - Jumat, 08:00 - 16:00 WIB</p>
 </div>
 </div>

 <div class="flex items-start gap-4 p-4 bg-white border border-gray-100 shadow-sm">
 <div class="w-12 h-12 bg-blue-50 text-blue-600 flex items-center justify-center shrink-0">
 <span class="material-symbols-outlined text-2xl">mail</span>
 </div>
 <div>
 <h4 class="font-bold text-gray-900 mb-1">Email</h4>
 <p class="text-gray-600 text-sm">halo@satpel-cikampek.go.id</p>
 </div>
 </div>
 </div>
 </div>

 <!-- Contact Form -->
 <div class="bg-white p-8 border border-gray-100 shadow-md">
 <h3 class="text-xl font-bold text-gray-900 mb-6">Kirim Pesan</h3>
 <form action="#" method="POST" class="space-y-5">
 <div>
 <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
 <input type="text" id="name" name="name" class="w-full border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm px-4 py-2.5" placeholder="Masukkan nama Anda">
 </div>
 
 <div>
 <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Alamat Email</label>
 <input type="email" id="email" name="email" class="w-full border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm px-4 py-2.5" placeholder="contoh@email.com">
 </div>
 
 <div>
 <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Subjek</label>
 <select id="subject" name="subject" class="w-full border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm px-4 py-2.5">
 <option value="">Pilih Subjek...</option>
 <option value="layanan">Pertanyaan Layanan KB</option>
 <option value="pengaduan">Pengaduan/Saran</option>
 <option value="kemitraan">Kemitraan/Kerjasama</option>
 <option value="lainnya">Lainnya</option>
 </select>
 </div>

 <div>
 <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Pesan</label>
 <textarea id="message" name="message" rows="4" class="w-full border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm px-4 py-2.5" placeholder="Tuliskan pesan Anda di sini..."></textarea>
 </div>
 
 <button type="button" class="w-full bg-blue-600 text-white font-bold px-4 py-3 hover:bg-blue-700 transition shadow-sm">
 Kirim Pesan
 </button>
 </form>
 </div>
 </div>

 </div>
</section>
@endsection
