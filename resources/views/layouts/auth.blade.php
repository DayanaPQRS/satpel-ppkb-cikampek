<!DOCTYPE html>
<html lang="id">
<head>
 <meta charset="utf-8"/>
 <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
 <title>@yield('title') - Satpel PPKB Cikampek</title>
 <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
 <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
 <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700&display=swap" rel="stylesheet"/>
 <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
 @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-surface min-h-screen flex flex-col font-body-md text-on-surface">
 <main class="flex-grow flex w-full">
 <!-- Sidebar - Visual Branding -->
 <aside class="hidden lg:block lg:w-1/3 xl:w-2/5 bg-surface-container-low border-r border-outline-variant relative overflow-hidden flex-shrink-0">
 <div class="absolute inset-0 z-0">
 <img alt="Visual Pendukung Satpel PPKB Cikampek" class="w-full h-full object-cover opacity-80 mix-blend-multiply" src="https://lh3.googleusercontent.com/aida/AEtjO1XSqh6RGm-WuzJDsouK7jy01j1bKv9NkAl_AI2zJt7j2jvwqvelUvhx-w5jCJU308hNRk7M0zAcilHnouThLAJqyZbdqwwmSAeAseDsHWBThcz3xfG1rPvGLMKRYSFfboO1LiyTlUv-JYe0m27f4R3wAlyhlb0GJrp1_9WQCoOPpRuA360Hg8jYhX8wr9p8l7toEvaPC7LkAGfcpY2y1oz35nGlxOjk5zNlgQ_ULnouaKUEy_qV97RnD1I"/>
 </div>
 <div class="relative z-10 p-xl h-full flex flex-col justify-between bg-gradient-to-t from-surface-container-high/90 to-transparent">
 <div>
 <img src="{{ asset('images/logo.png') }}" alt="Logo BKKBN" class="h-12 w-auto object-contain bg-white p-1 mb-4">
 <h1 class="font-headline-lg text-headline-lg text-primary font-bold mb-md">Satpel PPKB Cikampek</h1>
 <p class="font-body-md text-body-md text-on-surface-variant">Sistem Informasi Pendaftaran & Manajemen Kader</p>
 </div>
 <div class="bg-surface/80 p-lg border border-outline-variant backdrop-blur-sm">
 <h3 class="font-label-md text-label-md text-primary font-bold mb-sm">Peran Penting Kader</h3>
 <p class="font-body-md text-body-md text-on-surface">Kader adalah ujung tombak pelayanan kesehatan dan keluarga berencana di tingkat desa. Bergabunglah bersama kami untuk membangun keluarga sejahtera.</p>
 </div>
 </div>
 </aside>

 <!-- Main Content - Form Area -->
 <section class="flex-1 flex flex-col justify-center items-center p-md md:p-xl lg:px-xxl w-full max-w-3xl mx-auto overflow-y-auto">
 <div class="w-full">
 <!-- Mobile Header -->
 <div class="lg:hidden mb-lg text-center">
 <h1 class="font-headline-md text-headline-md text-primary font-bold">Satpel PPKB Cikampek</h1>
 </div>

 @yield('content')
 </div>
 </section>
 </main>
</body>
</html>
