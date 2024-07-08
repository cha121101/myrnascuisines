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

    <title>Dashboard</title>

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
            <section class="m-5">
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

                            @if (Auth::user()->position == 'admin')
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
                            @endif
                    
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

    <!--Content Field Section-->
        <section>
            <div class="p-5 sm:ml-64">

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

                <div class="mt-10 rounded-lg">
                    <div class="grid gap-4 m-3 lg:grid-row-4 md:grid-cols-2 2xl:grid-cols-4">

                        <!--Pending Event Form-->
                            <div class="flex items-center justify-center shadow-lg rounded-xl">
                                <!--Pending Event Reservation-->
                                    <div class="w-full h-full px-2 bg-white border border-red-700 rounded-2xl">
                                        <h1 class="m-4 text-xl font-extrabold text-center text-red-600 underline font-geologica underline-offset-4">Event Reservations</h1>
                                        <div class="overflow-y-auto h-[16rem]">
                                            <table class="w-full text-xs text-left text-gray-500 dark:text-gray-400">
                                                <tbody>
                                                    @forelse ($pendingeventreservation as $key => $value )
                                                        <tr class="text-xs text-red-700 border-b border-red-700 md:text-sm">
                                                            <td scope="row" class="px-2 py-3 font-extrabold text-black font-geologica whitespace-nowrap">{{ $value->firstname }} {{ $value->lastname }}</td>
                                                            <td class="px-1 py-3 font-extrabold text-black font-nunito">{{ $value->scheduledate }}</td>
                                                            <td class="py-3 font-medium text-red-700 whitespace-nowrap">
                                                                <div class="flex items-center space-x-4">
                                                                    <a href="{{route('pending.event' , ['id' => $value->customer_id] )}}" type="button" data-drawer-target="drawer-update-product" data-drawer-show="drawer-update-product" aria-controls="drawer-update-product" class="flex items-center px-2 py-1.5 mb-2 text-sm font-medium text-center text-white rounded-xl bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none dark:bg-primary-600 dark:hover:bg-primary-700 bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-green-300 dark:focus:ring-green-800" >
                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 -ml-0.5" viewbox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                                            <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                                                            <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                                                                        </svg>
                                                                        Edit
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @empty
                                                    <div class="flex items-center p-4 mb-4 text-base font-extrabold text-center text-red-700 rounded-lg font-nunito " role="alert">
                                                        <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                                                        </svg>
                                                        <span class="sr-only">Info</span>
                                                        <div class="text-black">
                                                        <span class="font-extrabold font-Geologica">No </span>Event Reservation Request.
                                                        </div>
                                                    </div>
                                                    @endforelse
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                <!--Pending Event Reservation-->
                            </div>
                        <!--Pending Event Form-->

                        <!--Pending Table Form-->
                            <div class="flex items-center justify-center shadow-lg rounded-xl">
                                <!--Pending Table Reservation-->
                                    <div class="w-full h-full px-2 bg-white border border-red-700 rounded-2xl">
                                        <h1 class="m-4 text-xl font-extrabold text-center text-red-600 underline font-geologica underline-offset-4">Table Reservation</h1>
                                        <div class="overflow-y-auto h-[16rem]">
                                            <table class="w-full text-xs text-left text-gray-500">
                                                <tbody>
                                                    @forelse ($pendingreservation as $key => $value )
                                                        <tr class="text-xs text-red-700 border-b border-red-700 md:text-sm">
                                                            <td scope="row" class="px-2 py-3 font-extrabold text-black font-geologica whitespace-nowrap ">{{ $value->firstname }} {{ $value->lastname }}</td>
                                                            <td class="py-3 font-extrabold text-black font-nunito">{{ $value->scheduledate }}</td>
                                                            <td class="py-3 font-medium text-red-700 whitespace-nowrap">
                                                                <div class="flex content-center space-x-4">
                                                                    <a href="{{route('pending.table' , ['id' => $value->customer_id] )}}" type="button" data-drawer-target="drawer-update-product" data-drawer-show="drawer-update-product" aria-controls="drawer-update-product" class="flex items-center px-2 py-1.5 mb-2 text-sm font-medium text-center text-white rounded-xl bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none dark:bg-primary-600 dark:hover:bg-primary-700 bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-green-300 dark:focus:ring-green-800">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 -ml-0.5" viewbox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                                            <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                                                            <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                                                                        </svg>
                                                                        Edit
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @empty
                                                    <div class="flex items-center p-4 mb-4 text-base font-extrabold text-center text-red-700 rounded-lg font-nunito " role="alert">
                                                        <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                                                        </svg>
                                                        <span class="sr-only">Info</span>
                                                        <div class="text-black">
                                                        <span class="font-extrabold font-Geologica">No </span>Table Reservation Request.
                                                        </div>
                                                    </div>
                                                    @endforelse
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                <!--Pending Table Reservation-->
                            </div>
                        <!--Pending Table Form-->

                        <!--Today's Event Form-->
                            <div class="flex items-center justify-center shadow-lg rounded-xl">
                                <!--Today's Event Reservation-->
                                    <div class="w-full h-full px-2 bg-white border border-red-700 rounded-2xl">
                                        <h1 class="m-4 text-xl font-extrabold text-center text-red-600 underline font-geologica underline-offset-4">Today's Event Reservation</h1>
                                        <div class="overflow-y-auto h-[16rem]">
                                            <table class="w-full text-xs text-left text-gray-500 dark:text-gray-400">
                                                <tbody>
                                                    @forelse ($todayscheduleevent as $keys => $value )
                                                        @forelse ($value as $k => $v)
                                                            <tr class="text-xs text-red-700 border-b border-red-700 md:text-sm">
                                                            <td scope="row" class="px-2 py-3 font-extrabold text-black font-geologica whitespace-nowrap"><p>{{ $v }}</p></td>
                                                        @empty

                                                        @endforelse
                                                        @empty
                                                        <div class="flex items-center p-4 mb-4 text-base font-extrabold text-center text-red-700 rounded-lg font-nunito " role="alert">
                                                            <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                                                            </svg>
                                                            <span class="sr-only">Info</span>
                                                            <div class="text-black">
                                                            <span class="font-extrabold font-Geologica">No </span>Event Reservation Today.
                                                            </div>
                                                        </div>
                                                        @endforelse
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                <!--Today's Event Reservation-->
                            </div>
                        <!--Today's Event Form-->

                        <!--Today's Table Form-->
                            <div class="flex items-center justify-center shadow-lg rounded-xl">
                                <!--Today's Table Reservation-->
                                    <div class="w-full h-full px-2 bg-white border border-red-700 rounded-2xl">
                                        <h1 class="m-4 text-xl font-extrabold text-center text-red-600 underline font-geologica underline-offset-4">Today's Table Reservation</h1>
                                        <div class="overflow-y-auto h-[16rem]">
                                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                                <tbody>
                                                    @forelse ($todayscheduletable as $keys => $value )
                                                        
                                                    @forelse ($value as $k => $v)
                                                        <tr class="text-xs text-red-700 border-b border-red-700 md:text-sm">
                                                        <td scope="row" class="px-2 py-3 font-extrabold text-black font-geologica whitespace-nowrap"><p>{{ $v }}</p></td>
                                                    @empty
                                                        
                                                    @endforelse
                                                    @empty
                                                    <div class="flex items-center p-4 mb-4 text-base font-extrabold text-center text-red-700 rounded-lg font-nunito " role="alert">
                                                        <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                                                        </svg>
                                                        <span class="sr-only">Info</span>
                                                        <div class="text-black">
                                                        <span class="font-extrabold font-Geologica">No </span>Table Reservation Today.
                                                        </div>
                                                    </div>
                                                    @endforelse
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                <!--Today's Table Reservation-->
                            </div>
                        <!--Today's Table Form-->

                    </div>
                    <div class="grid xl:grid-cols-2">

                        <!--Calendar-->
                            <div class="relative grid grid-cols-1 col-span-1 gap-3 m-2 bg-white border border-red-700 shadow-lg rounded-xl">
                                <div class="flex justify-center col-span-2 m-2">
                                    <div id="calendar" class="text-red-700 font-nunito" style="height: full; width: full; "></div>
                                    <script>
                                        $(document).ready(function(){
                                        var events = @json($calendar);
                                        $('#calendar').fullCalendar({

                                            events: events,
                                            selectable : false,
                                            selectHelper: true,
                                            contentHeight:"auto",
                                           
                                            select: function(start , end , allDays){
                                                console.log(moment(start).format('YYYY-MM-DD'));
                                                document.getElementById('scheduledate').value = moment(start).format('YYYY-MM-DD');
                                            }
                                        })
                                        
                                        
                                        });
                                    </script>
                                </div>
                            </div>
                        <!--Calendar-->

                        <!--Chart-->
                            <div class="relative grid grid-cols-1 col-span-1 gap-3 m-2 bg-white border border-red-700 shadow-lg rounded-xl">
                                <div class="flex justify-center col-span-2 m-2">
                                    <div style="width: 100%; max-width: full; margin: 0 auto;">
                                        <canvas id="chart" style="width: 100%; height: 400px;"></canvas>
                                    </div>
                                    <!--Chart Script-->
                                    <script>
                                        var ctx = document.getElementById('chart').getContext('2d');
                                        var custumerChart = new Chart(ctx, {
                                            type: 'bar',
                                            data: {
                                                labels: @json($labels),
                                                datasets:
                                                          [{
                                                        label: "Event Reservations",
                                                        data: @json($datasets),
                                                        backgroundColor: ['#b91c1c'],
                                                        borderWidth: 1,
                                                        }],
                                            },
                                            options: {
                                                maintainAspectRatio: false,
                                                responsive: true,
                                                scales: {
                                                    yAxes: [
                                                        {
                                                            ticks: {
                                                            beginAtZero:true
                                                            }
                                                        }
                                                    ]
                                                }
                                            }
                                        });
                                    </script>
                                </div>
                            </div>
                        <!--Chart-->

                    </div>
                </div>
            </div>
        </section>
    <!--Content Field Section-->

    <!--SCRIPT-->
        <section>
            <!--
            <div class="relative grid grid-cols-1 col-span-1 gap-4 mx-5 my-5 md:grid-cols-2 md:col-span-2 bg-slate-100 rounded-xl ring-red-800 ring-2">
                <div class="flex justify-center col-span-2 m-2">

                    <div id="calendar" style="height: full; width: full; "></div>
                -->
                    <script>
                        $(document).ready(function(){
                        var events = @json($calendar);
                        $('#calendar').fullCalendar({

                            events: events,
                            selectable : false,
                            selectHelper: true,
                            contentHeight:"auto",
                            select: function(start , end , allDays){
                                console.log(moment(start).format('YYYY-MM-DD'));
                                document.getElementById('scheduledate').value = moment(start).format('YYYY-MM-DD');
                            }
                        })

                        });
                    </script>
                </div>
            </div>
            
            <!--
            <div class="relative grid grid-cols-1 col-span-1 gap-4 mx-5 my-5 md:grid-cols-2 md:col-span-2 bg-slate-100 rounded-xl ring-red-800 ring-2">
                <div class="flex justify-center col-span-2 m-2">
                    <div style="width: 100%; max-width: full; margin: 0 auto;">
                        <canvas id="chart" style="width: 100%; height: 400px;"></canvas>
                    </div>
                -->
                    <script>
                        var ctx = document.getElementById('chart').getContext('2d');
                        var custumerChart = new Chart(ctx, {
                            type: 'bar',
                            data: {
                                labels: @json($labels),
                                datasets: @json($datasets)
                            },
                            options: {
                                maintainAspectRatio: false,
                                responsive: true,
                                scales: {
                                    yAxes: [
                                        {
                                            ticks: {
                                            beginAtZero:true
                                            }
                                        }
                                    ]
                                }
                            }
                        });
                    </script>
                </div>
            </div>
        </section>
    <!--SCRIPT-->

    <script type="text/javascript" src="../node_modules/tw-elements/dist/js/tw-elements.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
</body>
</html>