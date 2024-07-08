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

    <title>Event Hall</title>
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
                                    <a href="{{ route('welcome') }}" class="block pt-2 text-base font-bold text-gray-900 transition rounded lg:text-base lg:border-0 lg:p-0 group">Home<span class="block h-1 transition-all duration-1000 bg-red-800 max-w-0 group-hover:max-w-full"></span></a>
                                </li>
                                <li>
                                    <a href="{{ route('restaurantdetails') }}" class="block pt-2 text-base font-bold text-gray-900 transition rounded lg:text-base lg:border-0 lg:p-0 group">Restaurant<span class="block h-1 transition-all duration-1000 bg-red-800 max-w-0 group-hover:max-w-full"></span></a>
                                </li>
                                <li>
                                    <a href="{{ route('halldetails') }}" class="block pt-2 text-base font-bold text-gray-900 transition rounded lg:text-base lg:border-0 lg:p-0 group">Event Hall<span class="block h-1 transition-all duration-1000 bg-red-800 max-w-0 group-hover:max-w-full"></span></a>
                                </li>
                                <li>
                                    <a href="{{ route('gazebodetails') }}" class="block pt-2 text-base font-bold text-gray-900 transition rounded lg:text-base lg:border-0 lg:p-0 group">Gazebo<span class="block h-1 transition-all duration-1000 bg-red-800 max-w-0 group-hover:max-w-full"></span></a>
                                </li>
                                <li>
                                    <a href="{{ route('pooldetails') }}" class="block pt-2 text-base font-bold text-gray-900 transition rounded lg:text-base lg:border-0 lg:p-0 group">Pool Area<span class="block h-1 transition-all duration-1000 bg-red-800 max-w-0 group-hover:max-w-full"></span></a>
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
                            <h1 class="text-xl md:text-3xl xl:text-7xl font-geologica font-bold drop-shadow-2xl text-white">Event Hall</h1>
                            <hr class="h-px xl:h-[3px] my-[2px] xl:my-3 bg-red-900 border-0">
                            <h1 class="font-extralight font-geologica text-sm xl:text-lg text-white md:px-48 xl:px-72">
                               
                                Located at the
                                left side of the
                                restaurant is the
                                Event Hall which
                                is the biggest
                                venue that
                                Myrna’s Cuisine
                                and Events
                                Place offers.
                                

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

    <!--DETAILS-->
        <section class="my-10 bg-orange-50">
            <div class="p-5 md:p-14">
                
                <div class="grid items-center content-center">
                    
                        <h5 class="block mb-[-22px] md:mb-[-16px] pt-6 text-4xl antialiased font-extrabold leading-snug tracking-normal text-center text-gray-800 font-bacasime lg:text-5xl 2xl:text-6xl ">
                            EVENT HALL
                        </h5>
                        <h3 class="mb-3 text-3xl lg:text-4xl text-center text-red-700 font-tangerine font-extrabold ">Venue Details</h3>
                        <div class="grid md:grid-cols-2 md:divide-x divide-gray-600">
                            
                            <div class="p-6 font-semibold font-nunito">
                                <ul class="text-base md:text-xl text-center text-gray-800 divide-y divide-gray-800 font-geologica ">
                                    <li><p class="text-red-700 "><span><b class="text-gray-800">Price : </b>{{ $restaurant->price}}</span></p></li>
                                    <li><p class="text-red-700"><span><b class="text-gray-800">Time : </b> {{ $restaurant->time  }}</span></p></li>
                                    <li><p class="text-red-700"><span><b class="text-gray-800">Capacity : </b>{{ $restaurant->capacity }} pax</span></p></li>

                                    <li class="block md:hidden"><p class="text-red-700"><span><b class="text-gray-800">Amenities : </b> {{ $restaurant->amenities }}</span></p></li>
                                    <li class="block md:hidden"><p class="text-red-700"><span><b class="text-gray-800">Additional Fee per exceeding Hour : </b>{{ $restaurant->per_hour }}</span></p></li>
                                </ul>    
                            </div>
                    
                            <div class="p-6 font-semibold font-nunito hidden md:block">
                                <ul class="text-base md:text-xl text-center text-gray-800 divide-y divide-gray-800 font-geologica">
                                    <li><p class="text-red-700"><span><b class="text-gray-800">Amenities : </b> {{ $restaurant->amenities }}</span></p></li>
                                    <li><p class="text-red-700"><span><b class="text-gray-800">Additional Fee per exceeding Hour : </b>{{ $restaurant->per_hour }}</span></p></li>
                                    <li></li>
                                </ul>    
                            </div>

                        </div>
                    
                </div>
            </div>
        </section>
    <!--DETAILS-->

    <!--PICTURES-->
        <section class="p-5 bg-red-800">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="grid gap-4">
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="{{URL::asset("/img/eventshort_1.jpg")}}" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="{{URL::asset("/img/eventlong_1.jpg")}}" alt="">
                    </div>
                  
                </div>
                <div class="grid gap-4">
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="{{URL::asset("/img/eventlong_2.jpg")}}" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="{{URL::asset("/img/eventshort_2.jpg")}}" alt="">
                    </div>
                    
                </div>
                <div class="grid gap-4">
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="{{URL::asset("/img/eventshort_3.jpg")}}" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="{{URL::asset("/img/eventlong_3.jpg")}}" alt="">
                    </div>
                    
                </div>
                <div class="grid gap-4">
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="{{URL::asset("/img/eventlong_4.jpg")}}" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="{{URL::asset("/img/eventshort_4.jpg")}}" alt="">
                    </div>
                    
                </div>
            </div>
        </section>
    <!--PICTURES-->

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