<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title>Reset-Password</title>
</head>
<body class="bg-fixed bg-center bg-no-repeat bg-cover" style="background-image: url(/img/bgimg.jpg)">

    <!--Reset-Password-->
        <form method="POST" action="{{ route('password.store') }}">
            @csrf
            <input type="text" name="emailresetpassword" value="true" hidden>
            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <section class="bg-white/30 backdrop-blur-sm">
                <div class="h-full">
                    <div class="flex items-center justify-center h-screen px-4 mx-auto my-auto">
                        <div class="w-full bg-orange-100 border-4 border-red-700 shadow-xl rounded-xl md:mt-0 sm:max-w-md xl:p-0">
                            <div class="flex justify-center mt-6 text-center">
                                <a href="#" class="flex items-center text-4xl font-extrabold text-red-700 underline font-Bacasime underline-offset-8 decoration- decoration-red-700">
                                <img class="h-[4rem] mr-2" src="{{URL::asset("/img/Logo_Myrna'sflower.png")}}" alt="logo">
                                </a>
                            </div>

                            <div class="flex justify-center text-center">
                                <p class="flex items-center text-3xl font-extrabold text-gray-800 font-Bacasime">
                                    Reset Password
                                </p>
                            </div>
                            
                            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">

                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="block w-full " type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            
                                <x-input-label for="password" :value="__('Password')" />
                                <x-text-input id="password" class="block w-full " type="password" name="password" required autocomplete="new-password" />
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />

                                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                                <x-text-input id="password_confirmation" class="block w-full "
                                                    type="password"
                                                    name="password_confirmation" required autocomplete="new-password" />
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

                                    <button type="submit" class="w-full text-red-700 hover:text-orange-100 border-2 border-red-700 text-base rounded-2xl bg-white hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium px-5 py-2.5 text-center dark:hover:bg-primary-700 dark:focus:ring-primary-800">Reset Password</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </form>
    <!--Reset-Password-->
    
    <script type="text/javascript" src="../node_modules/tw-elements/dist/js/tw-elements.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
</body>
</html>

    <!--
    <div>

        {{ $errors }}
        <form method="POST" action="{{ route('password.store') }}">
            @csrf
            <input type="text" name="emailresetpassword" value="true" hidden>
            
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />
                <x-text-input id="password" class="block w-full mt-1" type="password" name="password" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

        
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block w-full mt-1"
                                    type="password"
                                    name="password_confirmation" required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <button type="submit">Reset</button>
            </div>
        </form>


    </div>
    -->