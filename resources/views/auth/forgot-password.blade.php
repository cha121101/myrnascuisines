<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bacasime+Antique&family=Geologica:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css\calendar.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Forgot-Password</title>
</head>
<body class="bg-fixed bg-center bg-no-repeat bg-cover" style="background-image: url(/img/bgimg.jpg)">

    <!--Forget Password-->
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <section class="bg-white/30 backdrop-blur-sm">
                <div class="h-full">
                    <div class="flex items-center justify-center h-screen px-4 mx-auto my-auto">
                        <div class="w-full bg-orange-100 border-4 border-red-700 shadow-xl rounded-xl md:mt-0 sm:max-w-md xl:p-0">
                            <div class="flex justify-center mt-6 text-center">
                                <a href="#" class="flex items-center text-4xl font-extrabold text-red-700 underline font-Bacasime underline-offset-8 decoration- decoration-red-700">
                                <img class="h-[4rem] mr-2" src="{{URL::asset("/img/Logo_Myrna'sflower.png")}}" alt="logo">
                                </a>
                            </div>
                            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                                <div class="mb-4 text-justify text-md font-semibold font-Geologica text-gray-800">
                                    {{ __('Forgot your password? No problem, just enter your email address and we will send you an email to reset your password. Please check your email to access the reset link to change your password.') }}
                                </div>
                                <div>
                                    <x-input-label for="email" :value="__('Email')" />
                                    <x-text-input id="email" class="bg-gray-50 border border-gray-300 text-gray-800 font-Geologica sm:text-sm rounded-2xl focus:ring-red-700 focus:border-red-700 block w-full p-2.5 dark:bg-white dark:placeholder-gray-400 dark:red-700 dark:focus:ring-red-700 dark:focus:border-red-700" type="email" name="email" :value="old('email')" required autofocus />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>
                                <button type="submit" class="w-full text-red-700 hover:text-orange-100 border-2 border-red-700 text-base rounded-2xl bg-white hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium px-5 py-2.5 text-center dark:hover:bg-primary-700 dark:focus:ring-primary-800">Send Link to This Email</button>
                            </div>
                            <div class="text-sm text-gray-600 items-center flex justify-between p-5">
                                <a href="{{ route('login') }}" class="text-gray-800 cursor-pointer hover:text-red-700 inline-flex items-center ml-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                        d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z"
                                        clip-rule="evenodd" />
                                    </svg>
                                    Back
                                </a>
                                <p class="hover:text-red-700 cursor-pointer">Need help?</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </form>
    <!--Forget Password-->

    <script type="text/javascript" src="../node_modules/tw-elements/dist/js/tw-elements.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
</body>
</html>
