<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bacasime+Antique&family=Euphoria+Script&family=Geologica:wght@300&family=Nunito:wght@300&family=Style+Script&family=Tangerine&display=swap" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.css" rel="stylesheet" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.1.1/flowbite.min.css"  rel="stylesheet" />

    <title>Myrnas Cuisine</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="resources/css/js/app.js"></script>

    <link rel="stylesheet" href="{{URL::asset('css/fonts.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/card.css')}}">
  
</head>
<body class="bg-orange-50" id="top">

    <!--ICON-->
        <a href="#top">
            <div class="m-2 p-1 fixed w-[30px] lg:w-[45px] box-content rounded-lg z-50 shadow-2xl bg-white">
                <img src="{{URL::asset("/img/Logo_Myrna'sflower.png")}}" class="z-50" alt=""  draggable="false">
            </div>
        </a>
    <!--ICON-->

    <!--HEADER-->
        <header class="relative xl:absolute z-50 w-full bg-orange-50">

            <!--Navigation Bar Title-->
                <div class="flex items-center justify-center">
                    <img class="w-4/5 p-5 lg:w-1/3" src="{{URL::asset("/img/bg-logo.png")}}" draggable="false">
                </div>
            <!--Navigation Bar Title-->

            <!--Navigation Bar-->
                <nav class="relative z-50 w-full pb-2 bg-orange-50">
                    <div class="flex flex-wrap items-center justify-center max-w-screen-xl px-2 mx-auto text-center">
                        
                        <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center justify-center w-10 h-10 p-2 text-sm text-gray-800 transition duration-500 rounded-lg lg:hidden hover:text-white hover:bg-red-800" aria-controls="navbar-default" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                            </svg>
                        </button>
                        
                        <div class="hidden w-full mb-2 transition duration-500 divide-y lg:block lg:w-auto lg:mb-0" id="navbar-default">
                            <ul class="flex flex-col p-4 mt-4 text-sm font-extrabold divide-y divide-red-800 rounded-lg lg:p-0 lg:divide-none lg:flex-row lg:space-x-28 lg:mt-0 lg:border-0 lg:bg-transparen font-geologica">
                                <li>
                                    <a href="#reservations" class="block pt-2 text-base font-bold text-gray-900 transition rounded lg:text-base lg:border-0 lg:p-0 group">Reservations<span class="block h-1 transition-all duration-1000 bg-red-800 max-w-0 group-hover:max-w-full"></span></a>
                                </li>
                                <li>
                                    <a href="#venues" class="block pt-2 text-base font-bold text-gray-900 transition rounded lg:text-base lg:border-0 lg:p-0 group">Venues<span class="block h-1 transition-all duration-1000 bg-red-800 max-w-0 group-hover:max-w-full"></span></a>
                                </li>
                                <li>
                                    <a href="#packages" class="block pt-2 text-base font-bold text-gray-900 transition rounded lg:text-base lg:border-0 lg:p-0 group">Catering Packages<span class="block h-1 transition-all duration-1000 bg-red-800 max-w-0 group-hover:max-w-full"></span></a>
                                </li>
                                <li>
                                    <a href="#contacts" class="block pt-2 text-base font-bold text-gray-900 transition rounded lg:text-base lg:border-0 lg:p-0 group">Contacts<span class="block h-1 transition-all duration-1000 bg-red-800 max-w-0 group-hover:max-w-full"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            <!--Navigation Bar-->

        </header>
    <!--HEADER-->

    <!--OWL CAROUSEL-->
        <section>
            
            <div class="absolute z-40 right-0 left-0 xl:px-10">
                <div class="flex items-center justify-center h-52 md:h-72 xl:h-screen px-4 mx-auto my-auto z-50">
                            
                    <div class="grid">
                        <div class="text-center">
                            <h1 class="text-xl md:text-3xl xl:text-7xl font-geologica font-bold drop-shadow-2xl text-white">Welcome to Myrna's Cuisine</h1>
                            <hr class="h-px xl:h-[3px] my-[2px] xl:my-3 bg-red-900 border-0">
                            <h1 class="font-extralight font-geologica text-sm xl:text-lg text-white md:px-48 xl:px-72">
                                    
                                A state-of-the-art Events Place and
                                Restaurant that offers delicious and affordable international cuisine served with
                                love located in San Juan, Concepcion, Tarlac. 

                            </h1>
                        </div>
                    </div>

                </div>
            </div>
       
            <div class="relative block">   
                <div class="flex">
                    <div class="relative w-full -mt-4 md:-mt-0 overflow-hidden bg-fixed">

                        <div id="default-carousel" class="relative w-full" data-carousel="slide">
                            <!-- Carousel wrapper -->
                                <div class="relative h-60 md:h-72 overflow-hidden xl:h-screen">

                                    @foreach ($herocarousel as $key => $value )
                                            @if ($key == 0)
                                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                    <img src="{{URL::asset("/img/editable/$value")}}" class="absolute brightness-50 block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                                                </div>
                                            @endif
                                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                            <img src="{{URL::asset("/img/editable/$value")}}" class="absolute brightness-50 block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                                        </div>
                                    @endforeach
                                    
                                </div>
                            <!-- Slider indicators -->
                                <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
                                </div>
                             <!-- Slider controls -->
                            
                             <!--
                                <button type="button" class="absolute top-0 start-0 z-40 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-focus:outline-none">
                                        <svg class="w-4 h-4 text-red-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                                        </svg>
                                        <span class="sr-only">Previous</span>
                                    </span>
                                </button>
                                <button type="button" class="absolute top-0 end-0 z-40 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-focus:outline-none">
                                        <svg class="w-4 h-4 text-red-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                        </svg>
                                        <span class="sr-only">Next</span>
                                    </span>
                                </button>
                            -->
                        </div>

                    </div>
                </div>
            </div>

        </section>
    <!--OWL CAROUSEL-->

    <!--RESERVATIONS-->
        <Section class="pb-10">
            <div class="relative z-40 h-full md:-mt-24">

                <div class="h-full min-h-screen w-full pt-12 lg:px-16">
                    <div class="grid gap-20 md:grid-cols-2 md:gap-5">

                    <!--TABLE RESERVATION-->
                        <div class="rounded-xl md:bg-white pb-10 md:p-5 text-center md:shadow-2xl" id="reservations">

                            <div class="relative mx-auto flex h-16 w-16 md:-translate-y-12 transform items-center justify-center rounded-full shadow-lg bg-teal-400 shadow-teal-500/40 z-50">
                                <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 448 512">
                                    <path d="M416 0C400 0 288 32 288 176V288c0 35.3 28.7 64 64 64h32V480c0 17.7 14.3 32 32 32s32-14.3 32-32V352 240 32c0-17.7-14.3-32-32-32zM64 16C64 7.8 57.9 1 49.7 .1S34.2 4.6 32.4 12.5L2.1 148.8C.7 155.1 0 161.5 0 167.9c0 45.9 35.1 83.6 80 87.7V480c0 17.7 14.3 32 32 32s32-14.3 32-32V255.6c44.9-4.1 80-41.8 80-87.7c0-6.4-.7-12.8-2.1-19.1L191.6 12.5c-1.8-8-9.3-13.3-17.4-12.4S160 7.8 160 16V150.2c0 5.4-4.4 9.8-9.8 9.8c-5.1 0-9.3-3.9-9.8-9L127.9 14.6C127.2 6.3 120.3 0 112 0s-15.2 6.3-15.9 14.6L83.7 151c-.5 5.1-4.7 9-9.8 9c-5.4 0-9.8-4.4-9.8-9.8V16zm48.3 152l-.3 0-.3 0 .3-.7 .3 .7z" fill="white"/>
                                </svg>
                            </div>

                            <div class="relative mx-10 -mt-3 overflow-visible text-white bg-red-800 -translate-x-6 -translate-y-6 bg-cover md:shadow-lg bg-blue-gray-500 bg-clip-border shadow-blue-gray-500/40 z-10">
                                <img src="{{URL::asset("img/editable/$table->picture")}}" class="w-full h-full translate-x-6 translate-y-6" alt="img-blur-shadow" layout="fill"/>
                            </div>
                            <div class="grid place-content-center">
                                <div class="p-5 md:p-12">
                                    <h5 class="block mb-[-22px] md:mb-[-16px] text-4xl lg:text-5xl text-center text-gray-900 font-bacasime font-extrabold antialiased leading-snug tracking-normal">
                                        FINE DINING
                                    </h5>
                                    <h3 class="mb-3 text-3xl lg:text-4xl text-center text-red-700 font-tangerine font-extrabold ">Reserve your seat now!</h3>
                                    <p class="block text-base lg:text-lg text-center text-gray-800 font-geologica antialiased leading-relaxed text-inherit">
                                        @if ($table->description != null)
                                        {{ $table->description }}
                                        @else
                                        The place is close to Barceloneta Beach and bus stop just 2 min by walk
                                        and near to "Naviglio" where you can enjoy the main night life in
                                        Barcelona.
                                        @endif
                                    </p>
                                </div>
                                <div class="py-5 text-center">
                                    <a type="button" href="{{ route('Userview.Reservation.table') }}" class="rounded-full bg-danger px-8 py-3 text-lg font-extrabold uppercase leading-normal font-bacasime text-white hover:scale-110 hover:-translate-y-3 shadow-[0_4px_9px_-4px_#dc4c64] transition duration-500 group-hover:scale-110 ease-in-out bg-red-700 hover:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] focus:bg-danger-600 focus:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] focus:outline-none focus:ring-0 active:bg-danger-700 active:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(220,76,100,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)]" data-te-ripple-init data-te-ripple-color="light">Reserve Now!</a>
                                </div>
                            </div>

                            
                        </div>
                    <!--TABLE RESERVATION-->

                    <!--EVENT RESERVATION-->
                        <div data-aos-delay="150" class="rounded-xl md:bg-white pb-10  md:p-5 text-center md:shadow-2xl">

                            <div class="relative mx-auto flex h-16 w-16 md:-translate-y-12 transform items-center justify-center rounded-full shadow-lg bg-rose-500 shadow-rose-500/40 z-50">

                                    <svg viewBox=" 0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white">
                                        <path
                                            d="M12 0C11.0532 0 10.2857 0.767511 10.2857 1.71432V5.14285H13.7142V1.71432C13.7142 0.767511 12.9467 0 12 0Z"
                                            fill="#F5F5FC"></path>
                                        <path
                                            d="M36 0C35.0532 0 34.2856 0.767511 34.2856 1.71432V5.14285H37.7142V1.71432C37.7143 0.767511 36.9468 0 36 0Z"
                                            fill="#F5F5FC"></path>
                                        <path
                                            d="M42.8571 5.14282H37.7143V12C37.7143 12.9468 36.9468 13.7143 36 13.7143C35.0532 13.7143 34.2857 12.9468 34.2857 12V5.14282H13.7142V12C13.7142 12.9468 12.9467 13.7143 11.9999 13.7143C11.0531 13.7143 10.2856 12.9468 10.2856 12V5.14282H5.14285C2.30253 5.14282 0 7.44535 0 10.2857V42.8571C0 45.6974 2.30253 48 5.14285 48H42.8571C45.6975 48 48 45.6974 48 42.8571V10.2857C48 7.44535 45.6975 5.14282 42.8571 5.14282ZM44.5714 42.8571C44.5714 43.8039 43.8039 44.5714 42.857 44.5714H5.14285C4.19605 44.5714 3.42854 43.8039 3.42854 42.8571V20.5714H44.5714V42.8571Z"
                                            fill="#F5F5FC"></path>
                                        <path
                                            d="M13.7142 23.9999H10.2857C9.33889 23.9999 8.57138 24.7674 8.57138 25.7142C8.57138 26.661 9.33889 27.4285 10.2857 27.4285H13.7142C14.661 27.4285 15.4285 26.661 15.4285 25.7142C15.4285 24.7674 14.661 23.9999 13.7142 23.9999Z"
                                            fill="#F5F5FC"></path>
                                        <path
                                            d="M25.7143 23.9999H22.2857C21.3389 23.9999 20.5714 24.7674 20.5714 25.7142C20.5714 26.661 21.3389 27.4285 22.2857 27.4285H25.7143C26.6611 27.4285 27.4286 26.661 27.4286 25.7142C27.4286 24.7674 26.6611 23.9999 25.7143 23.9999Z"
                                            fill="#F5F5FC"></path>
                                        <path
                                            d="M37.7143 23.9999H34.2857C33.3389 23.9999 32.5714 24.7674 32.5714 25.7142C32.5714 26.661 33.3389 27.4285 34.2857 27.4285H37.7143C38.6611 27.4285 39.4286 26.661 39.4286 25.7142C39.4286 24.7674 38.661 23.9999 37.7143 23.9999Z"
                                            fill="#F5F5FC"></path>
                                        <path
                                            d="M13.7142 30.8571H10.2857C9.33889 30.8571 8.57138 31.6246 8.57138 32.5714C8.57138 33.5182 9.33889 34.2857 10.2857 34.2857H13.7142C14.661 34.2857 15.4285 33.5182 15.4285 32.5714C15.4285 31.6246 14.661 30.8571 13.7142 30.8571Z"
                                            fill="#F5F5FC"></path>
                                        <path
                                            d="M25.7143 30.8571H22.2857C21.3389 30.8571 20.5714 31.6246 20.5714 32.5714C20.5714 33.5182 21.3389 34.2857 22.2857 34.2857H25.7143C26.6611 34.2857 27.4286 33.5182 27.4286 32.5714C27.4286 31.6246 26.6611 30.8571 25.7143 30.8571Z"
                                            fill="#F5F5FC"></path>
                                        <path
                                            d="M37.7143 30.8571H34.2857C33.3389 30.8571 32.5714 31.6246 32.5714 32.5714C32.5714 33.5182 33.3389 34.2857 34.2857 34.2857H37.7143C38.6611 34.2857 39.4286 33.5182 39.4286 32.5714C39.4285 31.6246 38.661 30.8571 37.7143 30.8571Z"
                                            fill="#F5F5FC"></path>
                                        <path
                                            d="M13.7142 37.7142H10.2857C9.33889 37.7142 8.57138 38.4817 8.57138 39.4286C8.57138 40.3754 9.33889 41.1428 10.2857 41.1428H13.7142C14.661 41.1428 15.4285 40.3753 15.4285 39.4284C15.4285 38.4816 14.661 37.7142 13.7142 37.7142Z"
                                            fill="#F5F5FC"></path>
                                        <path
                                            d="M25.7143 37.7142H22.2857C21.3389 37.7142 20.5714 38.4817 20.5714 39.4285C20.5714 40.3754 21.3389 41.1429 22.2857 41.1429H25.7143C26.6611 41.1429 27.4286 40.3754 27.4286 39.4285C27.4286 38.4817 26.6611 37.7142 25.7143 37.7142Z"
                                            fill="#F5F5FC"></path>
                                        <path
                                            d="M37.7143 37.7142H34.2857C33.3389 37.7142 32.5714 38.4817 32.5714 39.4285C32.5714 40.3754 33.3389 41.1429 34.2857 41.1429H37.7143C38.6611 41.1429 39.4286 40.3754 39.4286 39.4285C39.4286 38.4817 38.661 37.7142 37.7143 37.7142Z"
                                            fill="#F5F5FC"></path>
                                    </svg>
                                    
                            </div>
                           
                            <div class="relative mx-10 -mt-3 overflow-visible text-white bg-red-800 translate-x-6  -translate-y-6 bg-cover md:shadow-lg bg-blue-gray-500 bg-clip-border shadow-blue-gray-500/40 z-10">
                                <img src="{{URL::asset("img/editable/$event->picture")}}" class="w-full h-full -translate-x-6 translate-y-6" alt="img-blur-shadow" layout="fill"/>
                            </div>

                            <div class="grid place-content-center">
                                <div class="p-5 md:p-12">
                                    <h5 class="block mb-[-22px] md:mb-[-16px] text-4xl lg:text-5xl text-center text-gray-900 font-bacasime font-extrabold antialiased leading-snug tracking-normal">
                                        EVENTS PLACE
                                    </h5>
                                    <h3 class="mb-3 text-3xl lg:text-4xl text-center text-red-700 font-tangerine font-extrabold ">Celebrate with us!</h3>
                                    <p class="block text-base lg:text-lg text-center text-gray-800 font-geologica antialiased leading-relaxed text-inherit">
                                        @if ($event->description )
                                        {{ $event->description  }}
                                        @else
                                        The place is close to Barceloneta Beach and bus stop just 2 min by walk
                                        and near to "Naviglio" where you can enjoy the main night life in
                                        Barcelona.
                                        @endif
                                    </p>
                                </div>
                                <div class="py-5 text-center">
                                    <a type="button" href="{{ route('Userview.Reservation.event') }}" class="rounded-full bg-danger px-8 py-3 text-lg font-extrabold uppercase leading-normal font-bacasime text-white hover:scale-110 hover:-translate-y-3 shadow-[0_4px_9px_-4px_#dc4c64] transition duration-500 group-hover:scale-110 ease-in-out bg-red-700 hover:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] focus:bg-danger-600 focus:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] focus:outline-none focus:ring-0 active:bg-danger-700 active:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(220,76,100,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)]" data-te-ripple-init data-te-ripple-color="light">Reserve Now!</a>
                                </div>
                            </div>

                        </div>
                    <!--EVENT RESERVATION-->

                    <!--
                        <div data-aos-delay="300" class="rounded-xl bg-white p-6 text-center shadow-xl">
                                <div class="mx-auto flex h-16 w-16 -translate-y-12 transform items-center justify-center rounded-full shadow-lg bg-sky-500 shadow-sky-500/40">
                                    <svg viewBox="0 0 55 44" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white">
                                        <path
                                        d="M8.25 19.25C11.2836 19.25 13.75 16.7836 13.75 13.75C13.75 10.7164 11.2836 8.25 8.25 8.25C5.21641 8.25 2.75 10.7164 2.75 13.75C2.75 16.7836 5.21641 19.25 8.25 19.25ZM46.75 19.25C49.7836 19.25 52.25 16.7836 52.25 13.75C52.25 10.7164 49.7836 8.25 46.75 8.25C43.7164 8.25 41.25 10.7164 41.25 13.75C41.25 16.7836 43.7164 19.25 46.75 19.25ZM49.5 22H44C42.4875 22 41.1211 22.6102 40.1242 23.5984C43.5875 25.4977 46.0453 28.9266 46.5781 33H52.25C53.7711 33 55 31.7711 55 30.25V27.5C55 24.4664 52.5336 22 49.5 22ZM27.5 22C32.8195 22 37.125 17.6945 37.125 12.375C37.125 7.05547 32.8195 2.75 27.5 2.75C22.1805 2.75 17.875 7.05547 17.875 12.375C17.875 17.6945 22.1805 22 27.5 22ZM34.1 24.75H33.3867C31.5992 25.6094 29.6141 26.125 27.5 26.125C25.3859 26.125 23.4094 25.6094 21.6133 24.75H20.9C15.4344 24.75 11 29.1844 11 34.65V37.125C11 39.4023 12.8477 41.25 15.125 41.25H39.875C42.1523 41.25 44 39.4023 44 37.125V34.65C44 29.1844 39.5656 24.75 34.1 24.75ZM14.8758 23.5984C13.8789 22.6102 12.5125 22 11 22H5.5C2.46641 22 0 24.4664 0 27.5V30.25C0 31.7711 1.22891 33 2.75 33H8.41328C8.95469 28.9266 11.4125 25.4977 14.8758 23.5984Z"
                                        fill="white"></path>
                                    </svg>
                                </div>
                                <h1 class="text-darken mb-3 pt-3 text-xl font-medium lg:h-14 lg:px-14">GARDEN BED MAINTENANCE</h1>
                                <p class="px-4 text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo iure inventore amet modi accusantium vero perspiciatis, incidunt dicta sed aspernatur!</p>
                        </div>
                    </div>
                    -->
                    <div id="venues"></div>
                </div>
            </div>
        </Section>
    <!--RESERVATIONS-->

    <!--VENUES-->
        <section class="py-10 bg-gray-800" id="venues">
            <div class="h-3 border-b-4 border-red-800 z-0 block pb-8 md:pb-12 text-6xl antialiased font-extrabold text-center text-slate-50 font-tangerine lg:text-7xl xl:text-8xl">
                <span class="bg-gray-800 px-5">Venues</span>
            </div>
            <div class="flex flex-wrap justify-center mt-10">

                <!-- card 1 -->
                <div class="p-4 max-w-sm">
                    <div class="flex rounded-lg h-full bg-white p-8 flex-col">
                        <div class="flex items-center mb-3">
                            <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-red-800 text-white">
                                <svg fill="#f8fafc" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512">
                                    <path d="M128 0c13.3 0 24 10.7 24 24V64H296V24c0-13.3 10.7-24 24-24s24 10.7 24 24V64h40c35.3 0 64 28.7 64 64v16 48V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V192 144 128C0 92.7 28.7 64 64 64h40V24c0-13.3 10.7-24 24-24zM400 192H48V448c0 8.8 7.2 16 16 16H384c8.8 0 16-7.2 16-16V192zM329 297L217 409c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47 95-95c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                                </svg>
                            </div>
                            <h2 class="text-red-800 text-2xl font-bacasime font-bold">Restaurant</h2>
                        </div>
                        <div class="flex flex-col justify-between flex-grow">
                            <p class="mb-6 text-lg text-center">
                            
                                The beautiful
                                main dining and
                                buffet area of
                                Myrna’s Cuisine
                                also serves as a
                                venue and
                                extension for the
                                Event Hall, and
                                Pool Area.
                                
                            </p>
                            <a href="{{ route('restaurantdetails') }}" class="mt-3 text-gray-800 hover:text-red-800 inline-flex items-center hover:scale-105 transition duration-300">Learn More
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            
                <!-- card 2 -->
                <div class="p-4 max-w-sm">
                    <div class="flex rounded-lg h-full bg-white p-8 flex-col">
                        <div class="flex items-center mb-3">
                            <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-red-800 text-white">
                                <svg fill="#f8fafc" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512">
                                    <path d="M128 0c13.3 0 24 10.7 24 24V64H296V24c0-13.3 10.7-24 24-24s24 10.7 24 24V64h40c35.3 0 64 28.7 64 64v16 48V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V192 144 128C0 92.7 28.7 64 64 64h40V24c0-13.3 10.7-24 24-24zM400 192H48V448c0 8.8 7.2 16 16 16H384c8.8 0 16-7.2 16-16V192zM329 297L217 409c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47 95-95c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                                </svg>
                            </div>
                            <h2 class="text-red-800 text-2xl font-bacasime font-bold">Event Hall</h2>
                        </div>
                        <div class="flex flex-col justify-between flex-grow">
                            <p class="mb-6 text-lg text-center">
                            
                                Located at the
                                left side of the
                                restaurant is the
                                Event Hall which
                                is the biggest
                                venue that
                                Myrna’s Cuisine
                                and Events
                                Place offers.
                                
                            </p>
                            <a href="{{ route('halldetails') }}" class="mt-3 text-gray-800 hover:text-red-800 inline-flex items-center hover:scale-105 transition duration-300">Learn More
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            
                <!-- card 3 -->
                <div class="p-4 max-w-sm">
                    <div class="flex rounded-lg h-full bg-white p-8 flex-col">
                        <div class="flex items-center mb-3">
                            <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-red-800 text-white">
                                <svg fill="#f8fafc" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512">
                                    <path d="M128 0c13.3 0 24 10.7 24 24V64H296V24c0-13.3 10.7-24 24-24s24 10.7 24 24V64h40c35.3 0 64 28.7 64 64v16 48V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V192 144 128C0 92.7 28.7 64 64 64h40V24c0-13.3 10.7-24 24-24zM400 192H48V448c0 8.8 7.2 16 16 16H384c8.8 0 16-7.2 16-16V192zM329 297L217 409c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47 95-95c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                                </svg>
                            </div>
                            <h2 class="text-red-800 text-2xl font-bacasime font-bold">Gazebo</h2>
                        </div>
                        <div class="flex flex-col justify-between flex-grow">
                            <p class="mb-6 text-lg text-center">
                            
                                The Gazebo is
                                an extension for
                                the Event Hall
                                for additional
                                space partnered
                                with the
                                beautiful view
                                around the
                                location.
                                
                            </p>
                            <a href="{{ route('gazebodetails') }}" class="mt-3 text-gray-800 hover:text-red-800 inline-flex items-center hover:scale-105 transition duration-300">Learn More
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- card 4 -->
                <div class="p-4 max-w-sm">
                    <div class="flex rounded-lg h-full bg-white p-8 flex-col">
                        <div class="flex items-center mb-3">
                            <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-red-800 text-white">
                                <svg fill="#f8fafc" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512">
                                    <path d="M128 0c13.3 0 24 10.7 24 24V64H296V24c0-13.3 10.7-24 24-24s24 10.7 24 24V64h40c35.3 0 64 28.7 64 64v16 48V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V192 144 128C0 92.7 28.7 64 64 64h40V24c0-13.3 10.7-24 24-24zM400 192H48V448c0 8.8 7.2 16 16 16H384c8.8 0 16-7.2 16-16V192zM329 297L217 409c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47 95-95c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                                </svg>
                            </div>
                            <h2 class="text-red-800 text-2xl font-bacasime font-bold">Pool Area</h2>
                        </div>
                        <div class="flex flex-col justify-between flex-grow">
                            <p class="mb-6 text-lg text-center">
                            
                                This event
                                venue has a
                                pool accessible
                                for a swim or to
                                be used located behind
                                the Event Hall
                                which can be
                                seen through
                                the Gazebo.
                                
                            </p>
                            <a href="{{ route('pooldetails') }}" class="mt-3 text-gray-800 hover:text-red-800 inline-flex items-center hover:scale-105 transition duration-300">Learn More
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                
            </div>
            <div id="packages"></div>
        </section>
    <!--VENUES-->
        
    <!--PACKAGES SECTION-->
        
        <section class="py-10 bg-red-800">
            <div class="h-3 border-b-4 border-slate-50 z-0 block pb-8 md:pb-12 text-6xl antialiased font-extrabold text-center text-slate-50 font-tangerine lg:text-7xl xl:text-8xl">
                <span class="bg-red-800 px-5">Catering Packages</span>
            </div>
            <div class="py-10 mx-5 mt-10 drop-shadow-2xl rounded-xl packages"> 
                <div class="mx-auto">
                    <div class="z-40 flex items-center mb-5 place-content-center">
                
                        <div class="grid gap-5 sm:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-5">

                            @foreach ($package as $key => $value )
                            <div class="list"
                            @foreach ($value as  $k => $v)
                                @if ($k == "enable" && ($v == "false" || $v == "off") )
                                hidden   
                                @else
                                    
                                @endif
                
                            @endforeach
                            >
                                <div class="z-50 h-full max-w-lg my-4 bg-white border rounded-lg shadow-2xl" value={{ $value->name }}>
                                    <img class="w-full rounded-t-lg h-48" src="{{URL::asset("img/editable/$value->picture")}}" alt="" />

                                    <div class="flex items-center justify-between px-6 py-2 bg-gray-800">
                                        <h1 class="text-2xl font-semibold text-white uppercase transition duration-300 font-geologica group">{{ $value->name }}</h1>
                                    </div>

                                    <div class="px-6 py-4">
                                        <div class="text-2xl font-bold text-gray-800 font-geologica">₱{{ $value->price }}<span class="text-lg text-gray-600">/Pax</span></div>
                                    </div>

                                    <div class="px-6 py-4">
                                        <ul class="mx-2 list-disc marker:text-red-800 font-geologica">
                                                @foreach ($value->package_lists as $value )
                                                <li><p><span class="text-xl text-slate-700">{{ $value }}</span></p></li>
                                                @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!--PACKAGES SECTION-->

    <!--CONTACTS-->
        <section class="p-6 bg-gray-800 md:px-5" id="contacts">
                                
            <div>
                <h1 class="mt-2 text-3xl font-semibold text-gray-800 font-geologica md:text-5xl dark:text-white">Contacts</h1>
            </div>

            <div class="grid grid-cols-1 gap-12 mt-10 lg:grid-cols-3">
                <div class="grid grid-cols-1 gap-12 sm:grid-cols-2 lg:grid-cols-1">
                    <div>
                        <span class="inline-block p-3 text-red-800 bg-white rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                            </svg>
                        </span>

                        <h2 class="mt-4 text-base font-medium text-white">Email</h2>
                        <p class="mt-2 text-base text-gray-300">Our Management is here to serve.</p>
                        <p class="mt-2 text-base text-blue-400">{{ $client->email }}</p>
                    </div>

                    <div>
                        <span class="inline-block p-3 text-red-800 bg-white rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                            </svg>
                        </span>
                        
                        <h2 class="mt-4 text-base font-medium text-white">Address</h2>
                        <p class="mt-2 text-base text-gray-300 ">Come say hello at our Restaurant.</p>
                        <p class="mt-2 text-base text-blue-400">{{ $client->address }}</p>
                    </div>

                    <div>
                        <span class="inline-block p-3 text-red-800 bg-white rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                            </svg>
                        </span>
                        
                        <h2 class="mt-4 text-base font-medium text-white">Phone</h2>
                        <p class="mt-2 text-base text-gray-300 ">Mon-Fri from 9am to 6pm.</p>
                        <p class="mt-2 text-base text-blue-400">+63-{{ $client->phone }}</p>
                    </div>
                </div>

                <div class="overflow-hidden rounded-lg lg:col-span-2 h-96 lg:h-auto">
                    <iframe  width="100%" height="100%" frameborder="0" title="map" marginheight="0" marginwidth="0" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30400.846919004947!2d120.56565845975453!3d15.341854408239925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396c1d624856b17%3A0x73cd3708a051f995!2sMyrna%E2%80%99s%20Cuisine%20Restaurant%20-%20Egg%20Stop%20Tarlac%20Branch!5e1!3m2!1sen!2sph!4v1692009622595!5m2!1sen!2sph"></iframe>
                </div>
            </div>

        </section>
    <!--CONTACTS-->


    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.js"></script>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.1.1/flowbite.min.js"></script>
</body>
</html>
