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

    <title>Content Manager</title>

    <link rel="stylesheet" href="css\calendar.css">
    <link rel="stylesheet" href="{{URL::asset('css/fonts.css')}}">
    
</head>
<body class="bg-orange-50">

    <!--Nav Section-->
        <!--Top Navbar-->
            <nav class="fixed top-0 z-50 w-full">
                <div class="flex items-center justify-between">
                    <div class="flex items-center justify-between">
                    </div>
                    <div class="flex items-center">
                        <div class="flex items-center ml-3">

                        <!--Side Navbar Button-->
                            <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 mt-2 mr-3 text-sm text-red-700 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                                <span class="sr-only">Open sidebar</span>
                                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
                                </svg>
                            </button>
                        <!--Side Navbar Button-->

                        </div>
                    </div>
                </div>
            </nav>
        <!--Top Navbar-->

        <!--Side Navbar-->
            <section class="m-5 print:hidden">
                <aside id="logo-sidebar" class="fixed z-40 w-64 h-full m-4 transition-transform -translate-x-full bg-white rounded-t-2xl sm:translate-x-0" aria-label="Sidebar">
                        <div class="flex items-center justify-center m-5">
                            <a href="https://myrnascuisine.online" class="flex items-center">
                                <img src="{{URL::asset("/img/Logo_Myrna's.png")}}" class="h-44" alt="Flowbite Logo" />
                            </a>
                        </div>
                    <div class="h-full px-3 pt-5 overflow-y-auto bg-white shadow-2xl">
                        <ul class="space-y-2 font-medium">

                            <!--Dashboard-->
                                <li>
                                    <a href="{{ route('dashboard') }}" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-red-700 hover:text-white group">
                                        <svg class="w-5 h-5 text-red-700 transition duration-75 group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                                            <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                                            <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
                                        </svg>
                                        <span class="ml-3 font-extrabold font-nunito">Dashboard</span>
                                    </a>
                                </li>
                            <!--Dashboard-->

                            <!--Management-->
                                <li>
                                    <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-red-700 hover:text-white" aria-controls="dropdown-evebt" data-collapse-toggle="dropdown-event">
                                        <svg class="flex-shrink-0 w-5 h-5 text-red-700 transition duration-75 group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 512 512">
                                            <path d="M64 144a48 48 0 1 0 0-96 48 48 0 1 0 0 96zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zM64 464a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm48-208a48 48 0 1 0 -96 0 48 48 0 1 0 96 0z"/>
                                        </svg>
                                        <span class="flex-1 ml-3 font-extrabold text-left font-nunito whitespace-nowrap">Management</span>
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                        </svg>
                                    </button>
                                    <ul id="dropdown-event" class="hidden py-2 space-y-2">
                                        <li>
                                            <a href="{{ route('show.management.event') }}" class="flex items-center w-full p-2 font-extrabold text-red-700 transition duration-75 rounded-lg font-nunito pl-11 group hover:bg-red-700 hover:text-white">Event Reservations</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('show.management.table') }}" class="flex items-center w-full p-2 font-extrabold text-red-700 transition duration-75 rounded-lg font-nunito pl-11 group hover:bg-red-700 hover:text-white">Table Reservations</a>
                                        </li>
                                    </ul>
                                </li>
                            <!--Management-->

                            <!--Reports-->
                                <li>
                                    <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-red-700 hover:text-white" aria-controls="dropdown-table" data-collapse-toggle="dropdown-table">
                                        <svg class="flex-shrink-0 w-5 h-5 text-red-700 transition duration-75 group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 512 512">
                                            <path d="M152.1 38.2c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 113C-2.3 103.6-2.3 88.4 7 79s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zm0 160c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 273c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zM224 96c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H256c-17.7 0-32-14.3-32-32zm0 160c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H256c-17.7 0-32-14.3-32-32zM160 416c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H192c-17.7 0-32-14.3-32-32zM48 368a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/>
                                        </svg>
                                        <span class="flex-1 ml-3 font-extrabold text-left font-nunito whitespace-nowrap">Reports</span>
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                        </svg>
                                    </button>
                                    <ul id="dropdown-table" class="hidden py-2 space-y-2">
                                        <li>
                                            <a href="{{ route('show.history.event') }}" class="flex items-center w-full p-2 font-extrabold text-red-700 transition duration-75 rounded-lg font-nunito pl-11 group hover:bg-red-700 hover:text-white">Event Reports</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('show.history.table') }}" class="flex items-center w-full p-2 font-extrabold text-red-700 transition duration-75 rounded-lg font-nunito pl-11 group hover:bg-red-700 hover:text-white">Table Reports</a>
                                        </li>
                                    </ul>
                                </li>
                            <!--Reports-->
                        
                            <!--Account Management-->
                                <li>
                                    <a href="{{ route('show.settings') }}" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-red-700 hover:text-white group">
                                        <svg class="flex-shrink-0 w-5 h-5 text-red-700 transition duration-75 group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 512 512">
                                            <path d="M495.9 166.6c3.2 8.7 .5 18.4-6.4 24.6l-43.3 39.4c1.1 8.3 1.7 16.8 1.7 25.4s-.6 17.1-1.7 25.4l43.3 39.4c6.9 6.2 9.6 15.9 6.4 24.6c-4.4 11.9-9.7 23.3-15.8 34.3l-4.7 8.1c-6.6 11-14 21.4-22.1 31.2c-5.9 7.2-15.7 9.6-24.5 6.8l-55.7-17.7c-13.4 10.3-28.2 18.9-44 25.4l-12.5 57.1c-2 9.1-9 16.3-18.2 17.8c-13.8 2.3-28 3.5-42.5 3.5s-28.7-1.2-42.5-3.5c-9.2-1.5-16.2-8.7-18.2-17.8l-12.5-57.1c-15.8-6.5-30.6-15.1-44-25.4L83.1 425.9c-8.8 2.8-18.6 .3-24.5-6.8c-8.1-9.8-15.5-20.2-22.1-31.2l-4.7-8.1c-6.1-11-11.4-22.4-15.8-34.3c-3.2-8.7-.5-18.4 6.4-24.6l43.3-39.4C64.6 273.1 64 264.6 64 256s.6-17.1 1.7-25.4L22.4 191.2c-6.9-6.2-9.6-15.9-6.4-24.6c4.4-11.9 9.7-23.3 15.8-34.3l4.7-8.1c6.6-11 14-21.4 22.1-31.2c5.9-7.2 15.7-9.6 24.5-6.8l55.7 17.7c13.4-10.3 28.2-18.9 44-25.4l12.5-57.1c2-9.1 9-16.3 18.2-17.8C227.3 1.2 241.5 0 256 0s28.7 1.2 42.5 3.5c9.2 1.5 16.2 8.7 18.2 17.8l12.5 57.1c15.8 6.5 30.6 15.1 44 25.4l55.7-17.7c8.8-2.8 18.6-.3 24.5 6.8c8.1 9.8 15.5 20.2 22.1 31.2l4.7 8.1c6.1 11 11.4 22.4 15.8 34.3zM256 336a80 80 0 1 0 0-160 80 80 0 1 0 0 160z"/>
                                        </svg>
                                        <span class="flex-1 ml-3 font-extrabold font-nunito whitespace-nowrap">Account Management</span>
                                    </a>
                                </li>
                            <!--Account Management-->

                            <!---------------------------------------------------------------------------->

                            <ul class="pt-4 mt-4 space-y-2 font-medium border-t border-gray-200 dark:border-gray-700">
                            <!--Content Manager-->
                                <li>
                                    <a href="{{ route('show.dynamicweb') }}" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-red-700 hover:text-white group">
                                        <svg class="flex-shrink-0 w-5 h-5 text-red-700 transition duration-75 group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 512 512">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M64 480H448c35.3 0 64-28.7 64-64V160c0-35.3-28.7-64-64-64H288c-10.1 0-19.6-4.7-25.6-12.8L243.2 57.6C231.1 41.5 212.1 32 192 32H64C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64z"/>
                                        </svg>
                                        <span class="flex-1 ml-3 font-extrabold font-nunito whitespace-nowrap">Content Manager</span>
                                    </a>
                                </li>
                            <!--Content Manager-->

                            <!--Audit Trail-->
                                <li>
                                    <a href="{{ route('show.showaudit') }}" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-red-700 hover:text-white group">
                                        <svg class="flex-shrink-0 w-5 h-5 text-red-700 transition duration-75 group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 448 512">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M96 0C43 0 0 43 0 96V416c0 53 43 96 96 96H384h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V384c17.7 0 32-14.3 32-32V32c0-17.7-14.3-32-32-32H384 96zm0 384H352v64H96c-17.7 0-32-14.3-32-32s14.3-32 32-32zm32-240c0-8.8 7.2-16 16-16H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16zm16 48H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16s7.2-16 16-16z"/>
                                        </svg>
                                        <span class="flex-1 ml-3 font-extrabold font-nunito whitespace-nowrap">Audit Trail</span>
                                    </a>
                                </li>
                            <!--Audit Trail-->

                            <!--Archives-->
                                <li>
                                    <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-red-700 hover:text-white" aria-controls="dropdown-archive" data-collapse-toggle="dropdown-archive">
                                        <svg class="flex-shrink-0 w-5 h-5 text-red-700 transition duration-75 group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 384 512">
                                            <path d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM96 48c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16zm0 64c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16zm0 64c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16zm-6.3 71.8c3.7-14 16.4-23.8 30.9-23.8h14.8c14.5 0 27.2 9.7 30.9 23.8l23.5 88.2c1.4 5.4 2.1 10.9 2.1 16.4c0 35.2-28.8 63.7-64 63.7s-64-28.5-64-63.7c0-5.5 .7-11.1 2.1-16.4l23.5-88.2zM112 336c-8.8 0-16 7.2-16 16s7.2 16 16 16h32c8.8 0 16-7.2 16-16s-7.2-16-16-16H112z"/>
                                        </svg>
                                        <span class="flex-1 ml-3 font-extrabold text-left font-nunito whitespace-nowrap">Archive</span>
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                        </svg>
                                    </button>
                                    <ul id="dropdown-archive" class="hidden py-2 space-y-2">
                                        <li>
                                            <a href="{{ route('show.archives.event') }}" class="flex items-center w-full p-2 font-extrabold text-red-700 transition duration-75 rounded-lg font-nunito pl-11 group hover:bg-red-700 hover:text-white">Event Reservations</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('show.archives.table') }}" class="flex items-center w-full p-2 font-extrabold text-red-700 transition duration-75 rounded-lg font-nunito pl-11 group hover:bg-red-700 hover:text-white">Table Reservations</a>
                                        </li>
                                    </ul>
                                </li>
                            <!--Archives-->
                            </ul>
                    
                            <!---------------------------------------------------------------------------->
                            
                            <ul class="pt-4 mt-4 space-y-2 font-medium border-t border-gray-200 dark:border-gray-700">
                            <!--Logout-->
                                <li>
                                    <a href="{{ route('logout') }}" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-600 hover:text-white group">
                                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3"/>
                                        </svg>
                                        <span class="flex-1 ml-3 font-extrabold font-nunito whitespace-nowrap">Logout</span>
                                    </a>
                                </li>
                            <!--Logout-->
                            </ul>
                        </ul>
                    </div>
                </aside>
            </section>
        <!--Side Navbar-->
    <!--Nav Section-->

    <!--MAIN CONTENT-->
        <section>
            <div class="mt-5 sm:ml-72">

                <!--Time & Date-->
                    <section class="hidden mt-3 md:inline-block">     
                        <div class="px-12 ring-white bg-opacity-90">
                            <p id="todaysDate" class="text-3xl font-extrabold text-center text-red-700 font-geologica"></p>
                        </div>

                        <script>
                            function doDate()
                            {
                                var str = "";

                                var days = new Array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
                                var months = new Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");

                                var date = new Date();

                                var hours = date.getHours();
                                var minutes = date.getMinutes();
                                var ampm = hours >= 12 ? 'PM' : 'AM';
                                hours = hours % 12;
                                hours = hours ? hours : 12; // the hour '0' should be '12'
                                minutes = minutes < 10 ? '0'+minutes : minutes;
                                var strTime = hours + ':' + minutes + ' ' + ampm;

                                var dateNow = days[date.getDay()];

                                var timeAndDate = date.getDate() + " " + months[date.getMonth()] + " " + date.getFullYear() + " " + strTime;
                                
                                str += `
                                        
                                        ${dateNow} , ${timeAndDate} 
                                    `
                                document.getElementById("todaysDate").innerHTML = str;
                            }
                            setInterval(doDate, 1000);
                        </script>
                    </section>
                <!--Time & Date-->

                <div class="mt-16 ml-3 overflow-hidden shadow-md rounded-l-2xl md:mt-10 md:ml-0">

                    <!--Module Title-->
                        <nav class="bg-red-800 border-gray-200">
                            <div class="flex items-center space-x-3 rtl:space-x-reverse">
                                <h1 class="m-10 text-4xl font-bold text-white underline md:m-16 md:text-5xl font-geologica underline-offset-8">Content Manager</h1>
                            </div>
                        </nav>

                    <form action="{{ route('store.dynamicweb')}}"  enctype="multipart/form-data" method="POST" onkeydown="return event.key != 'Enter';">
                        @csrf

                            {{-- Main Content--}}
                                <div class="grid gap-10 p-20 bg-white md:grid-cols-2">

                                    {{-- carousel pics --}}
                                        <div>
                                            <label class="flex mb-3 text-lg font-extrabold text-left text-black xl:text-2xl font-nunito input-icon input-icon-right">Carousel Image</label>
                                            <!-- Modal toggle -->
                                            <button data-modal-target="modal-carousel" data-modal-toggle="modal-carousel" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xl px-12 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                                Edit
                                            </button>

                                            <!-- Main modal -->
                                            <div id="modal-carousel" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                <div class="relative w-full max-w-md max-h-full p-4">

                                                    <!-- Modal content -->
                                                    <div class="p-5 bg-white rounded-lg shadow">

                                                        <!-- Modal header -->
                                                        <div class="flex items-center justify-between p-4 border-b rounded-t md:p-5 dark:border-gray-600">
                                                            <h1 class="text-2xl font-extrabold text-red-700 font-nunito">
                                                                Carousel Content
                                                            </h1>
                                                            <button type="button"  class="inline-flex items-center justify-center w-8 h-8 text-sm text-gray-400 bg-transparent rounded-lg hover:bg-gray-200 hover:text-gray-900 ms-auto dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="modal-carousel">
                                                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                                </svg>
                                                                <span class="sr-only">Close modal</span>
                                                            </button>
                                                        </div>

                                                        <!-- Modal body -->
                                                        <div class="grid gap-3 p-5 text-center">
                                                            <label class="flex text-xl font-extrabold text-left text-black font-nunito input-icon input-icon-right">Insert Image/Picture</label>
                                                            <input class="my-2" type="file" name="carousel_hero[]"  multiple accept="image/*">
                                                        </div>

                                                        <div class="text-center">
                                                            <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                                Save
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                    {{-- carousel pics --}}
                                    
                                    {{-- Home --}}
                                        <div>
                                            <label class="flex mb-3 text-lg font-extrabold text-left text-black xl:text-2xl font-nunito input-icon input-icon-right">Home Caption</label>
                                            <!-- Modal toggle -->
                                            <button data-modal-target="modal-aboutus" data-modal-toggle="modal-aboutus" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xl px-12 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                                Edit
                                            </button>

                                            <!-- Main modal -->
                                            <div id="modal-aboutus" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                <div class="relative w-full max-w-md max-h-full p-4">

                                                    <!-- Modal content -->
                                                    <div class="p-5 bg-white rounded-lg shadow">

                                                        <div id="about_us">

                                                        </div>
                                                        <!-- Modal header -->
                                                        <div class="flex items-center justify-between p-4 border-b rounded-t md:p-5 dark:border-gray-600">
                                                            <h1 class="text-2xl font-extrabold text-red-700 font-nunito">
                                                            Home Content
                                                            </h1>
                                                            <button type="button" id="about_us_modal_btn" id="about_us_close" class="inline-flex items-center justify-center w-8 h-8 text-sm text-gray-400 bg-transparent rounded-lg hover:bg-gray-200 hover:text-gray-900 ms-auto dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="modal-aboutus">
                                                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                                </svg>
                                                                <span class="sr-only">Close modal</span>
                                                            </button>
                                                        </div>

                                                        <!-- Modal body -->
                                                        <div class="grid gap-3 p-5 text-center" >
                                                            <label class="flex text-xl font-extrabold text-left text-black font-nunito input-icon input-icon-right">Caption</label>
                                                            {{-- {!! Form::text('about_us_description', $description_about  , ['class'=>'form-control my-2', 'id'=> 'about_us_description', 'onchange' => "closemodal('about_us_modal_btn', 'about_us_description' , 'about_us' )", 'placeholder'=>'Enter  Caption' , 'required', ]) !!} --}}
                                                            <input class="my-2" type="text" name="about_us_description" id="about_us_description" onchange="closemodal('about_us_modal_btn', 'about_us_description' , 'about_us' )" placeholder="About us Description sheesh" value="{{ $description_about }}" >
                                                        </div>


                                                        <div class="text-center">
                                                            <button type="submit" onclick="checkfields('about_us_description' , 'about_us')" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                                Save
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                    {{-- Home --}}
                                    
                                    {{-- <img src="{{URL::asset("/img/editable/$tables->picture")}}" alt="Hello"> --}}

                                    {{-- Table {fine dining} --}}
                                        <div>
                                            <label class="flex mb-3 text-lg font-extrabold text-left text-black xl:text-2xl font-nunito input-icon input-icon-right">Table Image & Caption</label>
                                            <!-- Modal toggle -->
                                            <button data-modal-target="modal-table" data-modal-toggle="modal-table" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xl px-12 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                                Edit
                                            </button>

                                            <!-- Main modal -->
                                            <div id="modal-table" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                <div class="relative w-full max-w-md max-h-full p-4">

                                                    <!-- Modal content -->
                                                    <div class="p-5 bg-white rounded-lg shadow">

                                                        <!-- Modal header -->
                                                        <div class="flex items-center justify-between p-4 border-b rounded-t md:p-5 dark:border-gray-600">
                                                            <h1 class="text-2xl font-extrabold text-red-700 font-nunito">
                                                                Table Form Content
                                                            </h1>
                                                            <button type="button" id="table_modal_btn" class="inline-flex items-center justify-center w-8 h-8 text-sm text-gray-400 bg-transparent rounded-lg hover:bg-gray-200 hover:text-gray-900 ms-auto dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="modal-table">
                                                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                                </svg>
                                                                <span class="sr-only">Close modal</span>
                                                            </button>
                                                        </div>
                                                        <div  id="tables">

                                                        </div>

                                                        <!-- Modal body -->
                                                        <div class="grid gap-3 p-5 text-center">
                                                            <label class="flex text-xl font-extrabold text-left text-black font-nunito input-icon input-icon-right">Insert Image/Picture</label>
                                                            <input class="my-2" type="file"  name="tables[picture]" accept="image/*">

                                                            <label class="flex text-xl font-extrabold text-left text-black font-nunito input-icon input-icon-right">Caption</label>

                                                            {{-- {!! Form::text('tables[description]', $tables->description  , ['class'=>'form-control my-2', 'id'=> 'tables_description', 'onchange' => "closemodal('table_modal_btn', 'tables_description' , 'tables' )", 'placeholder'=>'Enter  Caption' , 'required', ]) !!} --}}
                                                            <input class="my-2" type="text"   name="tables[description]" id="tables_description" value="{{ $tables->description }}" onchange="closemodal('table_us_modal_btn', 'tables_description' , 'tables' )" placeholder="tables_description"  > 
                                                        </div>

                                                        <div class="text-center">
                                                            <button type="submit" onclick="checkfields('tables_description' , 'tables')"  class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                                Save
                                                            </button>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                    {{-- Table {fine dining} --}}
                                    
                                    {{-- @foreach ($tables as  $key => $value)
                                    
                                    @endforeach --}}
                        
                                    {{--  Event {Event Place} --}}
                                        <div>
                                            <label class="flex mb-3 text-lg font-extrabold text-left text-black xl:text-2xl font-nunito input-icon input-icon-right">Event Image & Caption</label>
                                            <!-- Modal toggle -->
                                            <button data-modal-target="modal-event" data-modal-toggle="modal-event" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xl px-12 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                                Edit
                                            </button>

                                            <!-- Main modal -->
                                            <div id="modal-event" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                <div class="relative w-full max-w-md max-h-full p-4">

                                                    <!-- Modal content -->
                                                    <div class="p-5 bg-white rounded-lg shadow">

                                                        <!-- Modal header -->
                                                        <div class="flex items-center justify-between p-4 border-b rounded-t md:p-5 dark:border-gray-600">
                                                            <h1 class="text-2xl font-extrabold text-red-700 font-nunito">
                                                            Event Form Content
                                                            </h1>
                                                            <button type="button"  id="event_us_modal_btn" class="inline-flex items-center justify-center w-8 h-8 text-sm text-gray-400 bg-transparent rounded-lg hover:bg-gray-200 hover:text-gray-900 ms-auto dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="modal-event">
                                                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                                </svg>
                                                                <span class="sr-only">Close modal</span>
                                                            </button>
                                                        </div>
                                                        <div id="event"></div>
                                                        <!-- Modal body -->
                                                        <div class="grid gap-3 p-5 text-center">
                                                            <label class="flex text-xl font-extrabold text-left text-black font-nunito input-icon input-icon-right">Insert Image/Picture</label>
                                                            <input class="my-2" type="file" name="event[picture]" accept="image/*">

                                                            <label class="flex text-xl font-extrabold text-left text-black font-nunito input-icon input-icon-right">Caption</label>
                                                            {{-- {!! Form::text('event[description]', $event->description  , ['class'=>'form-control my-2', 'id'=> 'event_description', 'onchange' => "closemodal('event_us_modal_btn', 'event_description' , 'event' )", 'placeholder'=>'Enter  Caption' , 'required', ]) !!} --}}
                                                            <input class="my-2" type="text" name="event[description]" value="{{ $event->description }}" onchange="closemodal('event_us_modal_btn', 'event_description' , 'event' )"  placeholder="event_description" id="event_description"> 
                                                            {{--  --}}
                                                        </div>
                                                        
                                                        <div class="text-center">
                                                            <button type="submit" onclick="checkfields('event_description' , 'event')"  class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                                Save
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                    {{--  Event {Event Place} --}}

                                    {{-- promos --}}               
                                        <div>
                                            <label class="flex mb-3 text-lg font-extrabold text-left text-black xl:text-2xl font-nunito input-icon input-icon-right">Promo Image</label>
                                            <!-- Modal toggle -->
                                            <button data-modal-target="modal-promo" data-modal-toggle="modal-promo" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xl px-12 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                                Edit
                                            </button>

                                            <!-- Main modal -->
                                            <div id="modal-promo" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                <div class="relative w-full max-w-md max-h-full p-4">

                                                    <!-- Modal content -->
                                                    <div class="p-5 bg-white rounded-lg shadow">

                                                        <!-- Modal header -->
                                                        <div class="flex items-center justify-between p-4 border-b rounded-t md:p-5 dark:border-gray-600">
                                                            <h1 class="text-2xl font-extrabold text-red-700 font-nunito">
                                                                Promo Content
                                                            </h1>
                                                            <button type="button" class="inline-flex items-center justify-center w-8 h-8 text-sm text-gray-400 bg-transparent rounded-lg hover:bg-gray-200 hover:text-gray-900 ms-auto dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="modal-promo">
                                                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                                </svg>
                                                                <span class="sr-only">Close modal</span>
                                                            </button>
                                                        </div>

                                                        <!-- Modal body -->
                                                        <div class="grid gap-2 p-5 text-center">
                                                            <label class="flex text-xl font-extrabold text-left text-black font-nunito input-icon input-icon-right">Insert Image/Picture</label>
                                                            <input class="my-2" type="file" name="promo_picture[]"  multiple accept="image/*">

                                                        </div>

                                                        <div class="text-center">
                                                            <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                                Save
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                    {{-- promos --}}

                                    {{-- Contacts --}}
                                        <div>
                                            <label class="flex mb-3 text-lg font-extrabold text-left text-black xl:text-2xl font-nunito input-icon input-icon-right">Contacts Captions</label>
                                            <!-- Modal toggle -->
                                            <button data-modal-target="modal-contacts" data-modal-toggle="modal-contacts" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xl px-12 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                                Edit
                                            </button>

                                            <!-- Main modal -->
                                            <div id="modal-contacts" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                <div class="relative w-full max-w-md max-h-full p-4">

                                                    <!-- Modal content -->
                                                    <div class="p-5 bg-white rounded-lg shadow">

                                                        <!-- Modal header -->
                                                        <div class="flex items-center justify-between p-4 border-b rounded-t md:p-5 dark:border-gray-600">
                                                            <h1 class="text-2xl font-extrabold text-red-700 font-nunito">
                                                                Contacts Content
                                                            </h1>
                                                            <button type="button" id="client_modal_btn" class="inline-flex items-center justify-center w-8 h-8 text-sm text-gray-400 bg-transparent rounded-lg hover:bg-gray-200 hover:text-gray-900 ms-auto dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="modal-contacts">
                                                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                                </svg>
                                                                <span class="sr-only">Close modal</span>
                                                            </button>
                                                        </div>
                                                        <div id="client"></div>

                                                        <!-- Modal body -->
                                                        <div class="grid p-5 text-center">
                                                            <label class="flex text-xl font-extrabold text-left text-black font-nunito input-icon input-icon-right">Email</label>
                                                            {{-- {!! Form::email('client[email]', $client->email , ['class'=>'form-control', 'placeholder'=>'Enter Email' , 'required', ]) !!} --}}
                                                            <input class="my-2" type="email" name="client[email]" value="{{ $client->email }}" id="client_email" onchange="checkclientfield('client_email','client_address', 'client_phone' , 'client_modal_btn', 'client')" placeholder="client_email"> 

                                                            <label class="flex text-xl font-extrabold text-left text-black font-nunito input-icon input-icon-right">Address</label>
                                                            {{-- {!! Form::text('client[address]', $client->address , ['class'=>'form-control, my-2', 'placeholder'=>'Enter address' , 'required', ]) !!} --}}
                                                            
                                                            <input class="my-2" type="text" name="client[address]" value="{{ $client->address }}" id="client_address" onchange="checkclientfield('client_email','client_address', 'client_phone' , 'client_modal_btn', 'client')" placeholder="client_address">

                                                            <label class="flex text-xl font-extrabold text-left text-black font-nunito input-icon input-icon-right">Contact Number</label>
                                                            {{-- {!! Form::tel('client[phone]', $client->phone , ['class'=>'form-control, my-2','pattern' => "{9}[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]" , 'placeholder'=>'9*********' , 'required', 'id' => 'client_number' ,'min' => 0, 'maxLength' => 9]) !!} --}}

                                                            <input class="my-2" type="tel" name="client[phone]" value="{{ $client->phone }}" id="client_phone" pattern="{9}[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]" onchange="checkclientfield('client_email','client_address', 'client_phone' , 'client_modal_btn', 'client')" placeholder="9*********" maxlength=9 required>

                                                            <script>
                                                                // document.querySelectorAll('input[type="number"]').forEach(input => {
                                                                //     input.oninput = () =>{
                                                                //         if(input.value.length > input.maxLength) input.value = input.value.slice(0 , input.maxLength)
                                                                //     }
                                                                // });

                                                            </script>

                                                        
                                                        </div>
                                                        
                                                        <div class="text-center">
                                                            <button type="submit" onchange="checkclientfield('client_email','client_address', 'client_phone' , 'client_modal_btn', 'client')" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                                Save
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                    {{-- Contacts --}}
                                </div>
                            {{-- Main Content--}}
                            <!------------------------------------------------------------------------------------->
                            <p class="px-2 space-y-2 font-medium border-t border-gray-200 dark:border-gray-700"></p>
                            <!------------------------------------------------------------------------------------->
                            
                            {{-- Venue --}}
                                <div class="grid gap-5 p-20 bg-white md:grid-cols-2">   

                                    {{-- restaurant --}}
                                        <div>
                                            <label class="flex mb-3 text-lg font-extrabold text-left text-black xl:text-2xl font-nunito input-icon input-icon-right">Restaurant Image & Caption</label>
                                            <!-- Modal toggle -->
                                            <button data-modal-target="modal-restaurant" data-modal-toggle="modal-restaurant" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xl px-12 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                                Edit
                                            </button>
        
                                            <!-- Main modal -->
                                            <div id="modal-restaurant" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                <div class="relative w-full max-w-md max-h-full p-4">

                                                    <!-- Modal content -->
                                                    <div class="p-5 bg-white rounded-lg shadow">

                                                        <!-- Modal header -->
                                                        <div class="flex items-center justify-between p-4 border-b rounded-t md:p-5 dark:border-gray-600">
                                                            <h1 class="text-2xl font-extrabold text-red-700 font-nunito">
                                                                Restaurant Content
                                                            </h1>
                                                            <button type="button" class="inline-flex items-center justify-center w-8 h-8 text-sm text-gray-400 bg-transparent rounded-lg hover:bg-gray-200 hover:text-gray-900 ms-auto dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="modal-restaurant">
                                                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                                </svg>
                                                                <span class="sr-only">Close modal</span>
                                                            </button>
                                                        </div>

                                                        <!-- Modal body -->
                                                        <div class="grid p-5 text-center">
                                                            <label class="flex text-xl font-extrabold text-left text-black font-nunito input-icon input-icon-right">Insert Image/Picture</label>
                                                            <input class="my-2" type="file" name="restaurant[picture]" multiple accept="image/*">

                                                            {{-- <input class="my-2" type="text" name="old_restaurant"  id=""> --}}

                                                            <label class="flex text-xl font-extrabold text-left text-black font-nunito input-icon input-icon-right">Caption</label>
                                                            {{-- {!! Form::text('restaurant[description]', $restaurant->description, ['class'=>'form-control my-2', 'placeholder'=>'Please Enter Caption' , 'required', ]) !!} --}}
                                                            <input class="my-2" type="text" name="restaurant[description]" value="{{ $restaurant->description }}" placeholder="restaurant_description" id="">
                                                            {{-- value="{{ $restaurant->picture }}" --}}

                                                            
                                                            <label class="flex text-xl font-extrabold text-left text-black font-nunito input-icon input-icon-right">Price</label>
                                                            {{-- {!! Form::number('restaurant[price]', $restaurant->price , ['class'=>'form-control my-2', 'placeholder'=>'Please Enter price' , 'required', 'min' => 0 ]) !!} --}}
                                                            <input class="my-2" type="text" name="restaurant[price]" value="{{ $restaurant->price }}" placeholder="Price">

                                                            <label class="flex text-xl font-extrabold text-left text-black font-nunito input-icon input-icon-right">Time</label>
                                                            {{-- {!! Form::text('restaurant[time]', $restaurant->time , ['class'=>'form-control my-2', 'placeholder'=>'Please Enter time' , 'required']) !!} --}}
                                                            <input class="my-2" type="text" name="restaurant[time]" value="{{ $restaurant->time }}" placeholder="Time"> 

                                                            <label class="flex text-xl font-extrabold text-left text-black font-nunito input-icon input-icon-right">Capacity</label>
                                                            {{-- {!! Form::number('restaurant[capacity]', $restaurant->capacity , ['class'=>'form-control my-2', 'placeholder'=>'Please Enter capacity' , 'required', 'min' => 0 ]) !!} --}}
                                                            <input class="my-2" type="text" name="restaurant[capacity]" value="{{ $restaurant->capacity }}" placeholder="Capacity">

                                                            <label class="flex text-xl font-extrabold text-left text-black font-nunito input-icon input-icon-right">Amenities</label>
                                                            {{-- {!! Form::text('restaurant[amenities]', $restaurant->amenities, ['class'=>'form-control my-2', 'placeholder'=>'Please Enter amenities' , 'required', ]) !!}  --}}
                                                            <input class="my-2" type="text" name="restaurant[amenities]" value="{{ $restaurant->amenities }}" placeholder="Amenities">

                                                            <label class="flex text-xl font-extrabold text-left text-black font-nunito input-icon input-icon-right">per-hour</label>
                                                            {{-- {!! Form::number('restaurant[per_hour]', $restaurant->per_hour , ['class'=>'form-control my-2', 'placeholder'=>'Price per exceeding hour' , 'required', 'min' => 0 ]) !!} --}}
                                                            <input class="my-2" type="text" name="restaurant[per_hour]" value="{{ $restaurant->per_hour }}" placeholder="Price per exceeding hour">
                                                        </div>

                                                        <div class="text-center">
                                                            <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                                Save
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                    {{-- restaurant --}}

                                    {{-- event hall --}}
                                        <div>
                                            <label class="flex mb-3 text-lg font-extrabold text-left text-black xl:text-2xl font-nunito input-icon input-icon-right">Event Hall Image & Caption</label>
                                            <!-- Modal toggle -->
                                            <button data-modal-target="modal-eventhall" data-modal-toggle="modal-eventhall" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xl px-12 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                                Edit
                                            </button>

                                            <!-- Main modal -->
                                            <div id="modal-eventhall" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                <div class="relative w-full max-w-md max-h-full p-4">

                                                    <!-- Modal content -->
                                                    <div class="p-5 bg-white rounded-lg shadow">

                                                        <!-- Modal header -->
                                                        <div class="flex items-center justify-between p-4 border-b rounded-t md:p-5 dark:border-gray-600">
                                                            <h1 class="text-2xl font-extrabold text-red-700 font-nunito">
                                                                Event Hall Content
                                                            </h1>
                                                            <button type="button" class="inline-flex items-center justify-center w-8 h-8 text-sm text-gray-400 bg-transparent rounded-lg hover:bg-gray-200 hover:text-gray-900 ms-auto dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="modal-eventhall">
                                                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                                </svg>
                                                                <span class="sr-only">Close modal</span>
                                                            </button>
                                                        </div>

                                                        <!-- Modal body -->
                                                        <div class="grid p-5 text-center">
                                                            <label class="flex text-xl font-extrabold text-left text-black font-nunito input-icon input-icon-right">Insert Image/Picture</label>
                                                            <input class="my-2" type="file" name="event_hall[picture]" multiple accept="image/*">

                                                            {{-- <input class="my-2" type="text" name="old_event_hall"  id=""> --}}

                                                            <label class="flex text-xl font-extrabold text-left text-black font-nunito input-icon input-icon-right">Caption</label>
                                                            {{-- {!! Form::text('event_hall[description]', $event_hall->description, ['class'=>'form-control my-2', 'placeholder'=>'Please Enter Caption' , 'required', ]) !!} --}}
                                                            <input class="my-2" type="text" name="event_hall[description]" value="{{ $event_hall->description }}" placeholder="event_hall_description" id=""> 
                                                            {{-- value="{{ $event_hall->picture }}" --}}

                                                            
                                                            <label class="flex text-xl font-extrabold text-left text-black font-nunito input-icon input-icon-right">Price</label>
                                                            {{-- {!! Form::number('event_hall[price]', $event_hall->price , ['class'=>'form-control my-2', 'placeholder'=>'Please Enter price' , 'required', 'min' => 0 ]) !!} --}}
                                                            <input class="my-2" type="text" name="event_hall[price]" value="{{ $event_hall->price }}" placeholder="Price"> 

                                                            <label class="flex text-xl font-extrabold text-left text-black font-nunito input-icon input-icon-right">Time</label>
                                                            {{-- {!! Form::text('event_hall[time]', $event_hall->time , ['class'=>'form-control my-2', 'placeholder'=>'Please Enter time' , 'required']) !!} --}}
                                                            <input class="my-2" type="text" name="event_hall[time]" value="{{ $event_hall->time }}" placeholder="Time"> 

                                                            <label class="flex text-xl font-extrabold text-left text-black font-nunito input-icon input-icon-right">Capacity</label>
                                                            {{-- {!! Form::number('event_hall[capacity]', $event_hall->capacity , ['class'=>'form-control my-2', 'placeholder'=>'Please Enter capacity' , 'required', 'min' => 0 ]) !!} --}}
                                                            <input class="my-2" type="text" name="event_hall[capacity]" value="{{ $event_hall->capacity }}" placeholder="Capacity"> 

                                                            <label class="flex text-xl font-extrabold text-left text-black font-nunito input-icon input-icon-right">Amenities</label>
                                                            {{-- {!! Form::text('event_hall[amenities]', $event_hall->amenities, ['class'=>'form-control my-2', 'placeholder'=>'Please Enter amenities' , 'required', ]) !!} --}}
                                                            <input class="my-2" type="text" name="event_hall[amenities]" value="{{ $event_hall->amenities }}" placeholder="Amenities"> 

                                                            <label class="flex text-xl font-extrabold text-left text-black font-nunito input-icon input-icon-right">per-hour</label>
                                                            {{-- {!! Form::number('event_hall[per_hour]', $event_hall->per_hour , ['class'=>'form-control my-2', 'placeholder'=>'Price per exceeding hour' , 'required', 'min' => 0 ]) !!} --}}
                                                            <input class="my-2" type="text" name="event_hall[per_hour]" value="{{ $event_hall->per_hour }}" placeholder="Price per exceeding hour"> 
                                                        </div>

                                                        <div class="text-center">
                                                            <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                                Save
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                    {{-- event hall --}}

                                    {{-- gazebo --}}
                                        <div>
                                            <label class="flex mb-3 text-lg font-extrabold text-left text-black xl:text-2xl font-nunito input-icon input-icon-right">Gazebo Image & Caption</label>
                                            <!-- Modal toggle -->
                                            <button data-modal-target="modal-gazebo" data-modal-toggle="modal-gazebo" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xl px-12 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                                Edit
                                            </button>

                                            <!-- Main modal -->
                                            <div id="modal-gazebo" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                <div class="relative w-full max-w-md max-h-full p-4">

                                                    <!-- Modal content -->
                                                    <div class="p-5 bg-white rounded-lg shadow">

                                                        <!-- Modal header -->
                                                        <div class="flex items-center justify-between p-4 border-b rounded-t md:p-5 dark:border-gray-600">
                                                            <h1 class="text-2xl font-extrabold text-red-700 font-nunito">
                                                                Gazebo Content
                                                            </h1>
                                                            <button type="button" class="inline-flex items-center justify-center w-8 h-8 text-sm text-gray-400 bg-transparent rounded-lg hover:bg-gray-200 hover:text-gray-900 ms-auto dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="modal-gazebo">
                                                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                                </svg>
                                                                <span class="sr-only">Close modal</span>
                                                            </button>
                                                        </div>

                                                        <!-- Modal body -->
                                                        <div class="grid p-5 text-center">
                                                            <label class="flex text-xl font-extrabold text-left text-black font-nunito input-icon input-icon-right">Insert Image/Picture</label>
                                                            <input class="my-2" type="file" name="gazebo[picture]" multiple accept="image/*">

                                                            {{-- <input class="my-2" type="text" name="old_gazebo"  id=""> --}}

                                                            <label class="flex text-xl font-extrabold text-left text-black font-nunito input-icon input-icon-right">Caption</label>
                                                            {{--  {!! Form::text('gazebo[description]', $gazebo->description, ['class'=>'form-control my-2', 'placeholder'=>'Please Enter Caption' , 'required', ]) !!} --}}
                                                            <input class="my-2" type="text" name="gazebo[description]" value="{{ $gazebo->description }}" placeholder="gazebo_description" id="">
                                                            {{-- value="{{ $gazebo->picture }}" --}}

                                                            
                                                            <label class="flex text-xl font-extrabold text-left text-black font-nunito input-icon input-icon-right">Price</label>
                                                            {{--  {!! Form::number('gazebo[price]', $gazebo->price , ['class'=>'form-control my-2', 'placeholder'=>'Please Enter price' , 'required', 'min' => 0 ]) !!} --}}
                                                            <input class="my-2" type="text" name="gazebo[price]" value="{{ $gazebo->price }}" placeholder="Price"> 

                                                            <label class="flex text-xl font-extrabold text-left text-black font-nunito input-icon input-icon-right">Time</label>
                                                            {{--  {!! Form::text('gazebo[time]', $gazebo->time , ['class'=>'form-control my-2', 'placeholder'=>'Please Enter time' , 'required']) !!} --}}
                                                            <input class="my-2" type="text" name="gazebo[time]" value="{{ $gazebo->time }}" placeholder="Time">

                                                            <label class="flex text-xl font-extrabold text-left text-black font-nunito input-icon input-icon-right">Capacity</label>
                                                            {{--  {!! Form::number('gazebo[capacity]', $gazebo->capacity , ['class'=>'form-control my-2', 'placeholder'=>'Please Enter capacity' , 'required', 'min' => 0 ]) !!} --}}
                                                            <input class="my-2" type="text" name="gazebo[capacity]" value="{{ $gazebo->capacity }}" placeholder="Capacity"> 

                                                            <label class="flex text-xl font-extrabold text-left text-black font-nunito input-icon input-icon-right">Amenities</label>
                                                            {{--  {!! Form::text('gazebo[amenities]', $gazebo->amenities, ['class'=>'form-control my-2', 'placeholder'=>'Please Enter amenities' , 'required', ]) !!} --}}
                                                            <input class="my-2" type="text" name="gazebo[amenities]" value="{{ $gazebo->amenities }}" placeholder="Amenities"> 

                                                            <label class="flex text-xl font-extrabold text-left text-black font-nunito input-icon input-icon-right">per-hour</label>
                                                            {{--  {!! Form::number('gazebo[per_hour]', $gazebo->per_hour , ['class'=>'form-control my-2', 'placeholder'=>'Price per exceeding hour' , 'required', 'min' => 0 ]) !!} --}}
                                                            <input class="my-2" type="text" name="gazebo[per_hour]" value="{{ $gazebo->per_hour }}" placeholder="Price per exceeding hour">
                                                        </div>

                                                        <div class="text-center">
                                                            <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                                Save
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                    {{-- gazebo --}}

                                    {{-- pool --}}
                                        <div>
                                            <label class="flex mb-3 text-lg font-extrabold text-left text-black xl:text-2xl font-nunito input-icon input-icon-right">Pool Area Image & Caption</label>
                                            <!-- Modal toggle -->
                                            <button data-modal-target="modal-pool" data-modal-toggle="modal-pool" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xl px-12 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                            Edit
                                            </button>

                                            <!-- Main modal -->
                                            <div id="modal-pool" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                <div class="relative w-full max-w-md max-h-full p-4">

                                                    <!-- Modal content -->
                                                    <div class="p-5 bg-white rounded-lg shadow">

                                                        <!-- Modal header -->
                                                        <div class="flex items-center justify-between p-4 border-b rounded-t md:p-5 dark:border-gray-600">
                                                            <h1 class="text-2xl font-extrabold text-red-700 font-nunito">
                                                                Pool Area Content
                                                            </h1>
                                                            <button type="button" class="inline-flex items-center justify-center w-8 h-8 text-sm text-gray-400 bg-transparent rounded-lg hover:bg-gray-200 hover:text-gray-900 ms-auto dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="modal-pool">
                                                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                                </svg>
                                                                <span class="sr-only">Close modal</span>
                                                            </button>
                                                        </div>

                                                        <!-- Modal body -->
                                                        <div class="grid p-5 text-center">
                                                            <label class="flex text-xl font-extrabold text-left text-black font-nunito input-icon input-icon-right">Insert Image/Picture</label>
                                                            <input class="my-2" type="file" name="pool[picture]" multiple accept="image/*">

                                                            {{-- <input class="my-2" type="text" name="old_pool"  id=""> --}}

                                                            <label class="flex text-xl font-extrabold text-left text-black font-nunito input-icon input-icon-right">Caption</label>
                                                            {{-- {!! Form::text('pool[description]', $pool->description, ['class'=>'form-control my-2', 'placeholder'=>'Please Enter Caption' , 'required', ]) !!} --}}
                                                            <input class="my-2" type="text" name="pool[description]" value="{{ $pool->description }}" placeholder="pool_description" id="">
                                                            {{-- value="{{ $pool->picture }}" --}}

                                                            
                                                            <label class="flex text-xl font-extrabold text-left text-black font-nunito input-icon input-icon-right">Price</label>
                                                            {{-- {!! Form::number('pool[price]', $pool->price , ['class'=>'form-control my-2', 'placeholder'=>'Please Enter price' , 'required', 'min' => 0 ]) !!} --}}
                                                            <input class="my-2" type="text" name="pool[price]" value="{{ $pool->price }}" placeholder="Price"> 

                                                            <label class="flex text-xl font-extrabold text-left text-black font-nunito input-icon input-icon-right">Time</label>
                                                            {{-- {!! Form::text('pool[time]', $pool->time , ['class'=>'form-control my-2', 'placeholder'=>'Please Enter time' , 'required']) !!} --}}
                                                            <input class="my-2" type="text" name="pool[time]" value="{{ $pool->time }}" placeholder="Time">

                                                            <label class="flex text-xl font-extrabold text-left text-black font-nunito input-icon input-icon-right">Capacity</label>
                                                            {{-- {!! Form::number('pool[capacity]', $pool->capacity , ['class'=>'form-control my-2', 'placeholder'=>'Please Enter capacity' , 'required', 'min' => 0 ]) !!} --}}
                                                            <input class="my-2" type="text" name="pool[capacity]" value="{{ $pool->capacity }}" placeholder="Capacity">

                                                            <label class="flex text-xl font-extrabold text-left text-black font-nunito input-icon input-icon-right">Amenities</label>
                                                            {{-- {!! Form::text('pool[amenities]', $pool->amenities, ['class'=>'form-control my-2', 'placeholder'=>'Please Enter amenities' , 'required', ]) !!} --}}
                                                            <input class="my-2" type="text" name="pool[amenities]" value="{{ $pool->amenities }}" placeholder="Amenities">

                                                            <label class="flex text-xl font-extrabold text-left text-black font-nunito input-icon input-icon-right">per-hour</label>
                                                            {{-- {!! Form::number('pool[per_hour]', $pool->per_hour , ['class'=>'form-control my-2', 'placeholder'=>'Price per exceeding hour' , 'required', 'min' => 0 ]) !!} --}}
                                                            <input class="my-2" type="text" name="pool[per_hour]" value="{{ $pool->per_hour }}" placeholder="Price per exceeding hour"> 
                                                        </div>

                                                        <div class="text-center">
                                                            <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                                Save
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                    {{-- pool --}}  
                                    
                                </div>  
                            {{-- Venue --}}

                            
                            <!------------------------------------------------------------------------------------->
                            <p class="px-2 space-y-2 font-medium border-t border-gray-200 dark:border-gray-700"></p>
                            <!------------------------------------------------------------------------------------->

                            {{-- Catering Packages--}}
                                <div class="grid h-full gap-5 bg-white xl:grid-cols-2" id="packages">
                                    
                                    @foreach ($package as $key => $val )
                                        <div id="{{ $key }}" class="m-[1rem] 2xl:m-[1.5rem] h-full bg-white shadow-2xl rounded-2xl">
                                            
    
                                            <div class="grid m-10" id="{{ $key }}_lists">

                                                <label class="flex my-3 text-lg font-extrabold text-left text-black xl:text-2xl font-nunito input-icon input-icon-right">Package Availability</label>
                                                    <input type="checkbox" name="package[{{ $key }}][enable]" 

                                                    @foreach ($val as  $k => $v)
                                                            @if ($k == "enable" && ($v == "on" || $v == "true") ) 
                                                            checked
                                                            @endif
                                                    @endforeach
                                                    id="">
                                                    <label class="flex my-3 text-lg font-extrabold text-left text-black xl:text-2xl font-nunito input-icon input-icon-right">Insert Image</label>
                                                    <input class="mb-6" type="file" name="package[{{ $key }}][picture]" id="picture{{ $key }}" accept="image/*">
                                                    <div id="preview"></div>
                                                    {{-- <img src="{{URL::asset("/img/editable/$val->picture")}}" class="w-full h-full" alt="Hello"> --}}
                                                    {{-- value="{{ $val->picture }}" --}}
                                                    
                                                    {{-- {!! Form::text('package[{{ $key }}][name]', $val->name, ['class'=>'form-control my-2', 'placeholder'=>'Please Enter Package Name' , 'required', ]) !!} --}}
                                                    <label class="flex mt-3 text-lg font-extrabold text-left text-black xl:text-2xl font-nunito input-icon input-icon-right">Package Name</label>
                                                    <input class="mb-6 text-xl font-extrabold text-left text-black font-nunito rounded-xl" readonly='true' type="text" name="package[{{ $key }}][name]" value="{{ $val->name }}" required>

                                                    {{-- {!! Form::text('package[{{ $key }}][description]', $val->description, ['class'=>'form-control my-2', 'placeholder'=>'Please Enter Package description' , 'required', ]) !!}  --}}
                                                    {{-- <label class="flex mt-3 text-lg font-extrabold text-left text-black xl:text-2xl font-nunito input-icon input-icon-right">Package Caption</label> --}}
                                                    <input class="mb-6 text-xl font-extrabold text-left text-black font-nunito rounded-xl" hidden id="{{ $val->name }}_description" onchange="checkdesciption('{{ $val->name }}_description')" type="text" name="package[{{ $key }}][description]" value="{{ $val->description }}" placeholder="Add Description" >
                                                    
                                                    {{-- {!! Form::number('package[{{ $key }}][price]', $val->price , ['class'=>'form-control my-2', 'placeholder'=>'Please Enter price' , 'required', 'min' => 0 ]) !!} --}}
                                                    <label class="flex mt-3 text-lg font-extrabold text-left text-black xl:text-2xl font-nunito input-icon input-icon-right">Package Price</label>
                                                    <input class="mb-6 text-xl font-extrabold text-left text-black font-nunito rounded-xl" type="number" name="package[{{ $key }}][price]" value="{{ $val->price }}" required>

                                                    <p class="px-2 pt-4 mt-4 space-y-2 font-medium border-t border-gray-200 dark:border-gray-700"></p>

                                                    @foreach ($val as  $k=> $v )
                                                        @if ($k == "package_lists")
                                                            @foreach ( $v as  $a)
                                                                
                                                                <div class="grid list {{ $key }}_lists" >
                                                                    <label class="flex mt-3 text-lg font-extrabold text-left text-black xl:text-2xl font-nunito input-icon input-icon-right">Package Offers</label>
                                                                    <input class="mb-6 text-xl font-extrabold text-left text-black font-nunito rounded-xl" type="text" readonly="true" name="package[{{ $key }}][package_lists][]" placeholder="Add some lists" value="{{ $a }}" required>
                                                                    <button class="py-3 text-2xl font-semibold text-center text-white duration-300 bg-red-500 delete hover:bg-red-600 hover:-translate-y-1 rounded-xl font-Geologica" type="button">
                                                                        Delete
                                                                    </button>
                                                                </div>
                                                                <script>   
                                                                    var current_tasks = document.querySelectorAll(".delete");
                                                                    for(var i=0; i<current_tasks.length; i++){
                                                                        current_tasks[i].onclick = function(){
                                                                            this.parentNode.remove();
                                                                        }
                                                                    }
                                                                </script>
                                                            @endforeach
                                                        @endif
                                                    @endforeach

                                                    
                                                    <label class="flex mt-3 text-lg font-extrabold text-left text-black xl:text-2xl font-nunito input-icon input-icon-right">Add Package offers</label>
                                                    <input class="mb-6 text-xl font-extrabold text-left text-black font-nunito rounded-xl" type="text" id="{{ $key }}_add" placeholder="Add some lists">
                                                    <button class="py-3 text-2xl font-semibold text-center text-white duration-300 bg-green-500 hover:bg-green-600 hover:-translate-y-1 rounded-xl font-Geologica " type="button" onclick="addlist('{{ $key }}', '{{ $key }}_lists', '{{ $key }}_add' )">Add</button>

                                            </div>
                                        </div>
                                    @endforeach

                                    <script>
                                        
                                        function checkdesciption(description){
                                            if(document.getElementById(`${description}`).value.length === 0 || document.getElementById(`${description}`).value.length === "" || document.getElementById(`${description}`).value.length === null || !document.getElementById(`${description}`).value.trim().length){
                                                console.log('err')
                                            }
                                        }

                                    </script>
                                    <p class="px-2 pt-4 mt-4 space-y-2 font-medium border-t border-gray-200 dark:border-gray-700"></p>
                                </div>
                            {{-- Catering Packages--}}

                            <!------------------------------------------------------------------------------------->
                            <p class="px-2 space-y-2 font-medium border-t border-gray-200 dark:border-gray-700"></p>
                            <!------------------------------------------------------------------------------------->

                            {{-- value="{{ $client->phone }}" --}}
                            
                            <!--Submit Button-->
                                <div class="flex items-center justify-center p-12 bg-white rounded-b-xl">
                                    <button data-modal-target="popup-modal-2" data-modal-toggle="popup-modal-2" type="button"  class="w-[20rem] bg-green-500  hover:bg-green-600  hover:-translate-y-1 hover:scale-110 duration-300 py-3 text-center rounded-xl font-Geologica font-semibold text-2xl text-white">
                                        Save
                                    </button>
                                    
                                    <div id="popup-modal-2" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                        <div class="relative w-full max-w-md max-h-full">
                                            <div class="relative bg-white rounded-lg shadow">
                                                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center" data-modal-hide="popup-modal-2">
                                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                    </svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                                <div class="p-6 text-center">
                                                    <svg class="w-12 h-12 mx-auto mb-4 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                                    </svg>
                                                    <h3 class="mb-5 text-lg font-normal text-gray-500">Are You Sure You Want to Save Changes</h3>
                                                    <button data-modal-hide="popup-modal-2" type="submit" class="text-white bg-green-500 hover:bg-green-400 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                        Yes, I'm sure
                                                    </button>
                                                    <button data-modal-hide="popup-modal-2" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">No, cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <!--Submit Button-->
                    
                        <script>

                            function addpackage(){
                
                            }
                            function addlist(package, packagelists, add){

                                var package_lists = document.getElementById(add);
                                if(package_lists.value.length == 0){
                                        alert("Please add")
                                    }
                                    
                                    else{
                                        document.getElementById(packagelists).innerHTML += `
                                            <div class="grid list">
                                                <p class="px-2 pt-4 mt-4 space-y-2 font-medium border-t border-gray-200 dark:border-gray-700"></p>

                                                <label class="flex mt-3 text-lg font-extrabold text-left text-black xl:text-2xl font-nunito input-icon input-icon-right">New Package Offer</label>
                                                <input class="mb-6 text-xl font-extrabold text-left text-black font-nunito rounded-xl" type="text" name="package[${package}][package_lists][]" placeholder="Add some lists" value="${package_lists.value}" required>
                                                <button class="py-3 text-2xl font-semibold text-center text-white duration-300 bg-red-500 delete hover:bg-red-600 hover:-translate-y-1 rounded-xl font-Geologica" type="button">
                                                    Delete
                                                </button>
                                            </div>
                                        `;
                                        package_lists.value == "";
                                        var current_tasks = document.querySelectorAll(".delete");
                                        for(var i=0; i<current_tasks.length; i++){
                                            current_tasks[i].onclick = function(){
                                                this.parentNode.remove();
                                            }
                                        }

                                    }
                            }
                        </script>

                    </form>
                </div>
            </div>
        </section>
    <!--MAIN CONTENT-->

    <!--FORM SCRIPT-->
        <script>
            function checkfields(description, data){
            $("form").on("submit", function (e) {
                    
                if(document.getElementById(`${description}`).value.length === 0 || document.getElementById(`${description}`).value.length === "" || document.getElementById(`${description}`).value.length === null || !document.getElementById(`${description}`).value.trim().length ){
                    document.getElementById(`${data}`).innerHTML = `
                    <div id="alert-border-2" class="flex items-center p-4 mb-4 text-red-800 border-t-4 border-red-300 bg-red-50 dark:text-red-400 dark:bg-gray-800 dark:border-red-800" role="alert">
                        <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                        </svg>
                        <div class="text-sm font-medium ms-3">
                        Please fill the required fields
                        </div>
                        <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700"  data-dismiss-target="#alert-border-2" aria-label="Close">
                        <span class="sr-only">Dismiss</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        </button>
                    </div>
                    `

                    document.getElementById(`${description}`).classList.add('border-2', 'border-red-500');
                    e.preventDefault();
                }
                
                
                });

            }   

            function closemodal(button, description, data){
                    if(document.getElementById(`${description}`).value.length === 0 || document.getElementById(`${description}`).value.length === "" || document.getElementById(`${description}`).value.length === null || !document.getElementById(`${description}`).value.trim().length ){
                        document.getElementById(`${button}`).disabled = true;

                        document.getElementById(`${data}`).innerHTML = `
                        <div id="alert-border-2" class="flex items-center p-4 mb-4 text-red-800 border-t-4 border-red-300 bg-red-50 dark:text-red-400 dark:bg-gray-800 dark:border-red-800" role="alert">
                            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                            </svg>
                            <div class="text-sm font-medium ms-3">
                            Please fill the required fields
                            </div>
                            <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700"  data-dismiss-target="#alert-border-2" aria-label="Close">
                            <span class="sr-only">Dismiss</span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            </button>
                        </div>
                        `

                    document.getElementById(`${description}`).classList.add('border-2', 'border-red-500');
                    }else{
                        document.getElementById(`${button}`).disabled = false;
                        document.getElementById(`${description}`).classList.remove('border-2', 'border-red-500');
                        document.getElementById(`${data}`).innerHTML = "";
                    }
                }
            function checkclientfield(email, address, phone , button , client){
                $("form").on("submit", function (e) {
                    if(document.getElementById(`${email}`).value.length === 0 || document.getElementById(`${email}`).value.length === "" || document.getElementById(`${email}`).value.length === null || !document.getElementById(`${email}`).value.trim().length ){
                            disablebtn(button, client)
                    
                            document.getElementById(`${email}`).classList.add('border-2', 'border-red-500');
                            e.preventDefault()
                        }else{
                            document.getElementById(`${email}`).classList.remove('border-2', 'border-red-500');
                        }

                        if(document.getElementById(`${address}`).value.length === 0 || document.getElementById(`${address}`).value.length === "" || document.getElementById(`${address}`).value.length === null || !document.getElementById(`${address}`).value.trim().length ){
                            disablebtn(button, client)
                    
                            document.getElementById(`${address}`).classList.add('border-2', 'border-red-500');
                            e.preventDefault()
                        }else{
                            document.getElementById(`${address}`).classList.remove('border-2', 'border-red-500');
                        }

                        if(document.getElementById(`${phone}`).value.length === 0 || document.getElementById(`${phone}`).value.length === "" || document.getElementById(`${phone}`).value.length === null || !document.getElementById(`${phone}`).value.trim().length ){
                            disablebtn(button, client)
                    
                            document.getElementById(`${address}`).classList.add('border-2', 'border-red-500');
                            e.preventDefault()
                        }else{
                            document.getElementById(`${address}`).classList.remove('border-2', 'border-red-500');
                        }
                })

                if(document.getElementById(`${email}`).value.length === 0 || document.getElementById(`${email}`).value.length === "" || document.getElementById(`${email}`).value.length === null || !document.getElementById(`${email}`).value.trim().length ){
                            disablebtn(button, client)
                    
                            document.getElementById(`${email}`).classList.add('border-2', 'border-red-500');
                            
                }else{
                            document.getElementById(`${email}`).classList.remove('border-2', 'border-red-500');
                        }

                        if(document.getElementById(`${address}`).value.length === 0 || document.getElementById(`${address}`).value.length === "" || document.getElementById(`${address}`).value.length === null || !document.getElementById(`${address}`).value.trim().length ){
                            disablebtn(button, client)
                    
                            document.getElementById(`${address}`).classList.add('border-2', 'border-red-500');
                            
                        }else{
                            document.getElementById(`${address}`).classList.remove('border-2', 'border-red-500');
                        }

                        if(document.getElementById(`${phone}`).value.length === 0 || document.getElementById(`${phone}`).value.length === "" || document.getElementById(`${phone}`).value.length === null || !document.getElementById(`${phone}`).value.trim().length ){
                            disablebtn(button, client)
                    
                            document.getElementById(`${address}`).classList.add('border-2', 'border-red-500');
                            
                        }else{
                            document.getElementById(`${address}`).classList.remove('border-2', 'border-red-500');
                        }
                    
                };
            
            

            function disablebtn(button, data){
                document.getElementById(`${button}`).disabled = true;

                document.getElementById(`${data}`).innerHTML = `
                <div id="alert-border-2" class="flex items-center p-4 mb-4 text-red-800 border-t-4 border-red-300 bg-red-50 dark:text-red-400 dark:bg-gray-800 dark:border-red-800" role="alert">
                    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                    </svg>
                    <div class="text-sm font-medium ms-3">
                    Please fill the required fields
                    </div>
                    <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700"  data-dismiss-target="#alert-border-2" aria-label="Close">
                    <span class="sr-only">Dismiss</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    </button>
                </div>
                `
                
            }
        </script>
    <!--FORM SCRIPT-->

    <script type="text/javascript" src="../node_modules/tw-elements/dist/js/tw-elements.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/datepicker.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
</body>
</html>