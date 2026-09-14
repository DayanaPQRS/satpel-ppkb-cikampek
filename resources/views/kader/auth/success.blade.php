@extends('layouts.auth') @section('title', 'Pendaftaran Berhasil')
@section('content')
<div
  class="bg-paper border border-ink p-xl rounded-[10px]-DEFAULT-card text-center flex flex-col items-center"
>
  <div
    class="w-20 h-20 bg-secondary-container text-on-secondary-container rounded-[100px] flex items-center justify-center mb-lg"
  >
    <span class="material-symbols-outlined text-[40px]">check_circle</span>
  </div>
  <h2 class="text-2xl font-bold text-headline-lg text-ink mb-sm">
    Pendaftaran Berhasil!
  </h2>
  <p
    class="text-[15px] text-body-md text-graphite max-w-md mx-auto mb-xl"
  >
    Data pendaftaran Anda telah kami terima dan sedang dalam tahap
    verifikasi oleh Admin Satpel PPKB Kecamatan Cikampek. Kami akan
    menghubungi Anda melalui WhatsApp jika akun sudah aktif.
  </p>

  <a
    href="{{ route('home') }}"
    class="bg-primary-light hover:bg-primary-dark/90 text-white text-sm font-medium py-sm px-xl rounded-[10px]-DEFAULT transition-colors flex items-center gap-xs"
  >
    Kembali ke Beranda
  </a>
</div>
@endsection
