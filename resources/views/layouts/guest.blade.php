<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-poppins text-gray-900 antialiased">
    <div class="min-h-screen flex flex-col justify-center items-center pt-6 pb-6 px-4 sm:pt-0">

        <div
            class="w-full max-w-[460px] md:mx-0 mx-5 mt-6 px-6 py-4 bg-white shadow-md overflow-hidden border border-slate-200 rounded-[15px] flex justify-center items-center" data-aos="fade-up">
            {{ $slot }}
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
      // Inisialisasi AOS
      AOS.init({
            duration: 800,  // Durasi animasi dalam milidetik
            easing: 'ease-in-out', // Jenis easing animasi
        });
    </script>
</body>

</html>
