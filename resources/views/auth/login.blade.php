<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link href="{{ asset('output.css') }}" rel="stylesheet"> --}}
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

</head>

<body class="font-poppins text-black flex justify-center items-center min-h-screen">
    <div
        class="max-w-[460px] w-full md:mx-0 mx-5 flex flex-col items-center justify-center px-4 gap-8 border-2 border-slate-200 rounded-[15px] shadow" data-aos="fade-up">
        <form method="POST" action="{{ route('login') }}"
            class="flex flex-col w-full bg-white p-[24px_16px] gap-8 rounded-[22px] items-center">
            @csrf
            <div class="flex flex-col gap-1 text-center">
                <h1 class="font-semibold text-2xl leading-[42px] ">Sign In</h1>
                <p class="text-sm leading-[25px] tracking-[0.6px] text-darkGrey">Welcome Back! Enter your valid data
                </p>
            </div>
            <div class="flex flex-col gap-[15px] w-full max-w-[311px]">
                <div class="flex flex-col gap-1 w-full">
                    <p class="font-semibold">Email</p>
                    <div
                        class="flex items-center gap-3 p-[16px_12px] border border-[#BFBFBF] rounded-xl focus-within:border-[#4D73FF] transition-all duration-300">
                        <div class="w-4 h-4 flex shrink-0">
                            <img src="assets/icons/sms.svg" alt="icon">
                        </div>
                        <input type="email" name="email"
                            class="appearance-none outline-none border-none w-full text-sm placeholder:text-[#BFBFBF] tracking-[0.35px]"
                            placeholder="Your email address">
                    </div>
                </div>
                @error('email')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror

                <div class="flex flex-col gap-1 w-full">
                    <p class="font-semibold">Password</p>
                    <div
                        class="flex items-center gap-3 p-[16px_12px] border border-[#BFBFBF] rounded-xl focus-within:border-[#4D73FF] transition-all duration-300">
                        <div class="w-4 h-4 flex shrink-0">
                            <img src="assets/icons/password-lock.svg" alt="icon">
                        </div>
                        <input type="password" name="password"
                            class="appearance-none border-none outline-none w-full text-sm placeholder:text-[#BFBFBF] tracking-[0.35px]"
                            placeholder="Enter your valid password">
                    </div>
                </div>
                @error('password')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit"
                class="bg-[#4D73FF] p-[16px_24px] w-full max-w-[311px] rounded-[10px] text-center text-white font-semibold hover:bg-[#06C755] transition-all duration-300">Sign
                In</button>
            <p class="text-center text-sm tracking-035 text-darkGrey">Don’t have account? <a
                    href="{{ route('register') }}" class="text-[#4D73FF] font-semibold tracking-[0.6px]">Sign Up</a>
            </p>
        </form>
    </div>
    {{-- </section> --}}
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
