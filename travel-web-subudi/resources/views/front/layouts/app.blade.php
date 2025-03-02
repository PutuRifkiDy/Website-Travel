<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <!-- CSS -->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@9.0.3/dist/style.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <title>{{ config('app.name') }} - @yield('title')</title>

    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <style>
        html {
            scroll-behavior: smooth
        }
    </style>
</head>

<body class="font-poppins text-black">
    @yield('content')


    @stack('before-scripts')


    @stack('after-scripts')

    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        const toast = document.getElementById('toast-simple');

        if (toast) {
            toast.style.display = "flex"; // Munculkan toast
            setTimeout(() => {
                toast.style.display = "none"; // Sembunyikan toast setelah 3 detik
            }, 3000);
        }
    </script>
    <script>
        // Inisialisasi AOS
        AOS.init({
            duration: 800, // Durasi animasi dalam milidetik
            easing: 'ease-in-out', // Jenis easing animasi
        });
    </script>
</body>

</html>
