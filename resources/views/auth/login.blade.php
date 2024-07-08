{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block w-full mt-1"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>


        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="text-sm text-gray-600 underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bacasime+Antique&family=Euphoria+Script&family=Geologica:wght@300&family=Nunito:wght@300&family=Style+Script&family=Tangerine&display=swap" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script> 
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="css\calendar.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Login</title>

    <link rel="stylesheet" href="{{URL::asset('css/fonts.css')}}">

</head>
<body class="bg-fixed bg-center bg-no-repeat bg-cover" style="background-image: url(/img/bgimg.jpg)">

    <!--LOGIN-->
        @if ($errors->any())
            <div id="alert-border-2" class="flex items-center justify-center right-0 left-0 fixed z-50 my-10 mx-[2rem] p-4 overflow-x-hidden text-red-800 border-t-4 border-red-700 bg-slate-100 " role="alert">
                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                </svg>
                <div class="ml-3 text-sm font-medium">
                    Wrong Email/Password Try Again.
                </div>
                <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-slate-100 text-red-700 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8"  data-dismiss-target="#alert-border-2" aria-label="Close">
                    <span class="sr-only">Dismiss</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                </button>
            </div>
        @endif

        <!--FORM-->
            <form action="{{ route('store') }}" method="post">
                @csrf
                <section class="bg-white/30 backdrop-blur-sm">
                    <div class="h-full">
                    <div class="flex items-center justify-center h-screen px-4 mx-auto my-auto">
                        <div class="w-full bg-orange-100 border-4 border-red-800 shadow-xl rounded-xl md:mt-0 sm:max-w-md xl:p-0">
                            <div class="flex justify-center mt-6 text-center">
                                <a href="#" class="flex items-center text-4xl font-extrabold text-red-700 underline font-bacasime underline-offset-8 decoration- decoration-red-700">
                                    <img class="h-[4rem] mr-2" src="{{URL::asset("/img/Logo_Myrna'sflower.png")}}" alt="logo">
                                </a>
                            </div>
                            <div class="flex justify-center text-center">
                            <a href="#" class="flex items-center text-3xl md:text-4xl font-extrabold text-red-700 font-bacasime">
                                Myrna's Cuisine
                            </a>
                            </div>
                            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                                <form class="space-y-4 md:space-y-6" action="#">
                                    <div>
                                        <label for="email" class="block text-base font-bold text-gray-900 font-geologica">Username</label>
                                        <input type="email" name="email" id="email" class="bg-gray-50 border text-gray-900 font-geologica font-extrabold text-base rounded-lg focus:ring-blue-500  block w-full p-2.5 dark:placeholder-gray-400 dark:focus:ring-blue-500" placeholder="Myrna'scuisine@gmail.com" required="">
                                    </div>
                                    <div>
                                        <label for="password" class="block text-base font-bold text-gray-900 font-geologica">Password</label>
                                        <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border text-gray-900 font-geologica font-extrabold text-base rounded-lg focus:ring-blue-500  block w-full p-2.5 dark:placeholder-gray-400 dark:focus:ring-blue-500" required="">
                                    </div>
                                    <div class="items-right text-right">
                                        <a href="{{ route('password.request') }}" class="text-base font-geologica text-gray-900 hover:text-red-700 hover:underline">Forgot password?</a>
                                    </div>
                                    <button type="submit" class="w-full text-red-700 hover:text-orange-100 border-2 border-red-700 text-base rounded-2xl bg-white hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium px-5 py-2.5 text-center dark:hover:bg-primary-700 dark:focus:ring-primary-800">Sign in</button>
                                </form>
                            </div>
                        </div>
                        </div>
                    </div>
                </section>
            </form>
        <!--FORM-->
    
    <!--LOGIN-->

    <script type="text/javascript" src="../node_modules/tw-elements/dist/js/tw-elements.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
</body>
</html>