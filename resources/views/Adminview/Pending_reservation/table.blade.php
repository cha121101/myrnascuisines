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

    <title>Pending Table Reservation Form</title>

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

    <!--FORM SECTION-->
        <section>
            <div class="sm:ml-64 print:sm:ml-0">
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

                <!--FORM-->
                    <div class="overflow-hidden bg-opacity-75 max-w-screen">
                        <div class="w-full px-10 py-12 mx-auto text-center font-Geologica lg:text-left">
                            <p class="flex px-5 py-5 my-10 text-3xl font-extrabold text-center text-white underline bg-red-700 md:text-4xl xl:text-5xl font-geologica font-Geologica underline-offset-8 decoration-white">Pending Table Reservation Form</p>
                            @forelse($data as $key => $val )
                            <form action="{{ route('action.reservation.table') }}" enctype="multipart/form-data" method="POST"  >
                                @csrf
                                <input type="hidden" name="id" value="{{ $val->id }}">
                                <input type="hidden" name="customer_id" value="{{ $val->customer_id }}"> 
                                <input type="hidden" name="name" value="{{ Auth::user()->name }}"> 
                                <!--FORM INPUT-->
                                    <div class="grid xl:grid-cols-2">

                                        <!--Personal Info-->
                                            <div>
                                                <!--Fname,Lname,Address,Phonenumber-->
                                                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                                                        <div>
                                                            <p class="flex text-sm font-extrabold text-left text-black font-nunito input-icon input-icon-right">First name</p> 
                                                            <input type="text" name="firstname" id="firstname" onchange="checkfirstname()" class="bg-gray-50 border text-gray-900 font-geologica font-extrabold text-base rounded-lg focus:ring-blue-500  block w-full p-2.5 dark:placeholder-gray-400 dark:focus:ring-blue-500" value="{{$val->firstname }}" placeholder="First Name">
                                                        </div>

                                                        <div>
                                                            <p class="flex text-sm font-extrabold text-left text-black font-nunito input-icon input-icon-right">Last name</p> 
                                                            <input type="text" name="lastname" id="lastname" onchange="checklastname()" class="bg-gray-50 border text-gray-900 font-geologica font-extrabold text-base rounded-lg focus:ring-blue-500  block w-full p-2.5 dark:placeholder-gray-400 dark:focus:ring-blue-500" value="{{$val->lastname }}" placeholder="Last Name">
                                                        </div>

                                                        <div>
                                                            <p class="flex text-sm font-extrabold text-left text-black font-nunito input-icon input-icon-right">Address</p> 
                                                            <input type="text"  name="address"  id="address" onchange="checkaddress()" class="bg-gray-50 border text-gray-900 font-geologica font-extrabold text-base rounded-lg focus:ring-blue-500  block w-full p-2.5 dark:placeholder-gray-400 dark:focus:ring-blue-500" value="{{$val->address }}" placeholder="Address">
                                                        </div>  

                                                        <div>
                                                            <p class="flex text-sm font-extrabold text-left text-black font-nunito input-icon input-icon-right">Phone Number</p> 
                                                            <input 
                                                            type="number"
                                                            name="phonenumber" 
                                                            id="phonenumber" 
                                                            onchange="checkphonenumber()" 
                                                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" 
                                                            onkeydown="javascript: return event.keyCode == 69 ? false : true"                                                 
                                                            maxlength="10"  
                                                            class="bg-gray-50 border text-gray-900 font-geologica font-extrabold text-base rounded-lg focus:ring-blue-500  block w-full p-2.5 dark:placeholder-gray-400 dark:focus:ring-blue-500" 
                                                            value="{{$val->phonenumber }}" 
                                                            placeholder="Phone Number" 
                                                            autocomplete="off" >
                                                        </div>
                                                    </div>
                                                <!--Fname,Lname,Address,Phonenumber-->

                                                <!--Email-->
                                                    <div class="mb-6">
                                                        <p class="flex text-sm font-extrabold text-left text-black font-nunito input-icon input-icon-right">Email address</p> 
                                                        <input type="email" name="email" id="email" onchange="checkemail()" class="bg-gray-50 border text-gray-900 font-geologica font-extrabold text-base rounded-lg focus:ring-blue-500  block w-full p-2.5 dark:placeholder-gray-400 dark:focus:ring-blue-500" value="{{$val->email }}" placeholder="Myrnas@gmail.com" required>
                                                    </div>
                                                <!--Email-->
                                            </div>
                                        <!--Personal Info-->

                                        <!--Reservation Details-->
                                            <div class="grid mb-6 xl:grid-cols-2">
                                                <div class="xl:mx-[2rem] font-Geologica justify-items-center">

                                                    <!--Date Selection-->
                                                        <div class="mb-6 text-center rounded-lg">
                                                            <div class="relative mb-6 text-center">
                                                                <p class="flex text-sm font-extrabold text-left text-black font-nunito input-icon input-icon-right">Date</p>       
                                                                <input type="date" onchange="checkschedule()" class="bg-gray-50 border text-gray-900 font-geologica font-extrabold text-base rounded-lg focus:ring-blue-500  block w-full p-2.5 dark:placeholder-gray-400 dark:focus:ring-blue-500" name="scheduledate" id="scheduledate" value="{{$val->scheduledate}}">
                                                            </div>
                                                        </div>   
                                                    <!--Date Selection-->

                                                    <!--Package,Venue,Noofpax-->
                                                        <div class="mb-6">
                                                            <div class="grid xl:col-span-2">
                                                                <p class="flex text-sm font-extrabold text-left text-black font-nunito input-icon input-icon-right">Table:</p>
                                                                <select name="tablenumber"id="table" onchange="checkschedule()"  class="bg-gray-50 border text-gray-900 font-geologica font-extrabold text-base rounded-lg focus:ring-blue-500  block w-full p-2.5 dark:placeholder-gray-400 dark:focus:ring-blue-500" >
                                                                    <optgroup>
                                                                        <option value="{{$val->tablenumber}}" default>{{$val->tablenumber}}</option>  
                                                                    </optgroup>
                                                                    <optgroup>
                                                                        <option value="Table 1" default>Table 1</option>
                                                                        <option value="Table 2" default>Table 2</option>
                                                                        <option value="Table 3" default>Table 3</option>
                                                                        <option value="Table 4" default>Table 4</option>
                                                                        <option value="Table 5" default>Table 5</option>
                                                                        <option value="Table 6" default>Table 6</option>
                                                                    </optgroup>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    <!--Package,Venue,Noofpax--> 

                                                </div>

                                                <div class="xl:mx-[2rem]font-Geologica justify-items-center">

                                                    <!--Time Selection--> 
                                                        <div class="relative mb-6 text-center">
                                                            <p class="flex text-sm font-extrabold text-left text-black font-nunito input-icon input-icon-right">Time</p> 
                                                                <div class="relative text-center">
                                                                    <select id="scheduletime" name="scheduletime" onclick="checkschedule()" class="bg-gray-50 border text-gray-900 font-geologica font-extrabold text-base rounded-lg focus:ring-blue-500  block w-full p-2.5 dark:placeholder-gray-400 dark:focus:ring-blue-500" >
                                                                        <optgroup>
                                                                            <option value="{{$val->scheduletime}}" default>{{$val->scheduletime}}</option>  
                                                                        </optgroup>
                                                                        <optgroup>
                                                                            <option value="8:00 AM">8:00 AM</option>
                                                                            <option value="9:00 AM">9:00 AM</option>
                                                                            <option value="10:00 AM">10:00 AM</option>
                                                                            <option value="11:00 AM">11:00 AM</option>
                                                                            <option value="12:00 PM">12:00 PM</option>
                                                                            <option value="1:00 PM">1:00 PM</option>
                                                                            <option value="2:00 PM">2:00 PM</option>
                                                                            <option value="3:00 PM">3:00 PM</option>
                                                                            <option value="4:00 PM">4:00 PM</option>
                                                                            <option value="5:00 PM">5:00 PM</option>
                                                                            <option value="6:00 PM">6:00 PM</option>
                                                                            <option value="7:00 PM">7:00 PM</option>
                                                                            <option value="8:00 PM">8:00 PM</option>
                                                                            <option value="9:00 PM">9:00 PM</option>
                                                                        </optgroup>
                                                                    </select>
                                                                </div> 
                                                        </div> 
                                                    <!--Time Selection-->

                                                </div>
                                                <div class="grid items-center justify-center xl:col-span-2">
                                                    @method('DELETE')
                                                    <!--SCHEDULES-->
                                                        <button data-modal-target="schedulemodal" id="schedulebtn" hidden data-modal-toggle="schedulemodal" class="block hidden text-white focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button">
                                                            <p>Schedules</p>
                                                        </button>
                                                    
                                                        <!-- Main modal -->
                                                        <div id="schedulemodal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                            <div class="relative w-full max-w-2xl max-h-full p-4">
                                                                <!-- Modal content -->
                                                                <div class="relative bg-white rounded-lg shadow">
                                                                    <!-- Modal header -->
                                                                        <div class="flex items-center justify-between p-4 border-b rounded-t md:p-5">
                                                                            <h3 class="text-2xl font-extrabold text-gray-900 font-geologica">
                                                                            All Occupied Reservations
                                                                            </h3>
                                                                            <button type="button" class="inline-flex items-center justify-center w-8 h-8 text-sm text-red-800 bg-transparent rounded-lg hover:bg-red-800 hover:text-white ms-auto" data-modal-hide="schedulemodal">
                                                                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                                                </svg>
                                                                                <span class="sr-only">Close modal</span>
                                                                            </button>
                                                                        </div>
                                                                    <!-- Modal body -->
                                                                        <div class="p-4 space-y-4 md:p-5">
                                                                            <div class="relative overflow-x-auto">
                                                                                <table class="w-full text-xl text-center text-gray-800 font-geologica rtl:text-right">
                                                                                    <thead class="pb-5 text-xl text-white uppercase bg-red-800">
                                                                                        <tr>
                                                                                            <th scope="col" class="px-6 py-3">
                                                                                                Customer ID
                                                                                            </th>
                                                                                            <th scope="col" class="px-6 py-3">
                                                                                                Date And Time
                                                                                            </th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody class="divide-y-2 divide-red-800" id="allscheduledates">
                                                                            
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    <!-- Modal footer -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <!--SCHEDULES-->

                                                    <!--Accept Modal-->
                                                        <button data-modal-target="popup-modal-1" data-modal-toggle="popup-modal-1" id="accepttogglebtn" class="w-[15rem] h-[4rem] bg-green-500  hover:bg-green-400 hover:-translate-y-1 hover:scale-110 duration-300 text-center rounded-xl font-Geologica font-semibold text-2xl text-white mt-10 mb-10 print:hidden" type="button">
                                                            Accept
                                                        </button>
                                                    
                                                        <div id="popup-modal-1" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                            <div class="relative w-full max-w-md max-h-full">
                                                                <div class="relative bg-white shadow rounded-xl">
                                                                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal-1">
                                                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                                        </svg>
                                                                        <span class="sr-only">Close modal</span>
                                                                    </button>
                                                                    <div class="p-6 text-center">
                                                                        <svg class="w-12 h-12 mx-auto mb-4 text-red-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                                                        </svg>
                                                                        <h3 class="mb-5 text-lg font-normal text-black font-geologica">Are You Sure You Want to Accept The Reservation Form?</h3>
                                                                        <button data-modal-hide="popup-modal-1" name="action" value="accept" type="submit" id="submitbtn" class="text-white bg-green-500 hover:bg-green-400 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                                            Yes, I'm sure
                                                                        </button>
                                                                        <button data-modal-hide="popup-modal-1" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No, cancel</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <!--Accept Modal-->
                                        
                                                    <!--Decline Modal-->
                                                        <button data-modal-target="popup-modal-2" data-modal-toggle="popup-modal-2" id="declinetogglebtn" class="w-[15rem] h-[4rem] bg-gray-700 hover:bg-red-600 hover:-translate-y-1 hover:scale-110 duration-300 text-center rounded-xl font-Geologica font-semibold text-2xl text-white mb-10 print:hidden" type="button">
                                                            Decline
                                                        </button>
                                                    
                                                        <div id="popup-modal-2" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                            <div class="relative w-full max-w-md max-h-full">
                                                                <div class="relative bg-white rounded-lg shadow">
                                                                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal-2">
                                                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                                        </svg>
                                                                        <span class="sr-only">Close modal</span>
                                                                    </button>
                                                                    <div class="p-6 text-center">
                                                                        <svg class="w-12 h-12 mx-auto mb-4 text-red-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                                                        </svg>
                                                                        <h3 class="mb-5 text-lg font-normal text-black font-geologica">Are You Sure You Want to Decline The Reservation Form?</h3>
                                                                        <button data-modal-hide="popup-modal-2" name="action" value="decline" id="submitbtn" class="text-white bg-red-500 hover:bg-red-400 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                                            Yes, I'm sure
                                                                        </button>
                                                                        <button data-modal-hide="popup-modal-2" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No, cancel</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <!--Decline Modal-->
                                                </div>
                                            </div>
                                        <!--Reservation Details-->
                                    <div>
                                <!--FORM INPUT-->
                            </form>    
                            @empty
                            <script>window.location = "/dashboard";</script>
                            @endforelse 
                        </div>
                    </div>
                <!--FORM-->
            </div>
        </section>
    <!--FORM SECTION-->
    
    <!--FORM SCRIPT-->
        <script>
                var today = new Date().toISOString().split('T')[0];
                document.getElementsByName("scheduledate")[0].setAttribute('min', today);
                
                var date = new Date();
                var scheduledatetable = @json($scheduledatetable);
                var reservationtables = @json($reservationtables);

                var allreservationschedules = ""
                reservationtables.forEach(element => {
                    allreservationschedules += `<tr> 
                                                        <td>${element.customer_id} </td>
                                                        <td> ${element.scheduledate} ${element.scheduletime} </td>                            
                                                </tr>`  
                });
                document.getElementById('allscheduledates').innerHTML = allreservationschedules;

                checkschedule();
                function checkschedule(){
                    // && data.table == document.getElementById('table') == data.tablenumber
                  
                    var isokay = true;
                    scheduledatetable.forEach(element => {
                        reservationtables.forEach(data =>{
                            if(element.x == data.scheduledate && isokay){
                                if(isokay){
                                    if(document.getElementById('scheduledate').value == element.x && data.scheduletime == document.getElementById('scheduletime').value && document.getElementById('table').value == data.tablenumber  ){ 
                                        document.getElementById('schedulebtn').classList.add('bg-red-600');
                                        document.getElementById('schedulebtn').classList.add('rounded-xl');
                                        document.getElementById('schedulebtn').classList.add('font-geologica');
                                        document.getElementById('schedulebtn').classList.add('text-2xl');
                                        document.getElementById('schedulebtn').classList.add('my-5');
                                        document.getElementById('schedulebtn').innerHTML = 'Occupied';
                                        document.getElementById('schedulebtn').classList.remove('hidden')
                                        document.getElementById('accepttogglebtn').classList.add('hidden')
                                    }else{
                                        document.getElementById('accepttogglebtn').classList.remove('bg-red-600');
                                        document.getElementById('accepttogglebtn').innerHTML = 'Accept';
                                        document.getElementById('accepttogglebtn').disabled = false;
                                    }
                                }
                            }
                        })
                    });
                    
                }

                //personal details
                function validateEmail(email) {
                    var atPos = email.indexOf("@");
                    var dotPos = email.lastIndexOf(".");
                    return atPos > 0 && dotPos > atPos + 1 && dotPos < email.length - 1;
                }


                function credentials(){
                    var firstname = document.getElementById('firstname');
                    var lastname = document.getElementById('lastname');
                    var address = document.getElementById('address');
                    var email = document.getElementById('email');
                    var phonenumber = document.getElementById('phonenumber');
                    var mailformat = `/^w+([.-]?w+)*@w+([.-]?w+)*(.w{2,3})+$/`;
                }
                
                function containsSpecialChars(str) {
                    const specialChars = /[`!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/;
                        if(!specialChars.test(str)){
                            return /[0-9]/.test(str);
                        }
                            return specialChars.test(str);
                }

                function checkfirstname(){
                    credentials()
                    if(firstname.value.trim().length === 0 || firstname.value.length == 0  || containsSpecialChars(firstname.value)){
                        firstname.classList.add('border-2', 'border-red-500');
                        return false;
                    }else{
                        firstname.classList.remove('border-2', 'border-red-500');
                        return true;
                    }
                }
                function checklastname(){
                    credentials()
                    if(lastname.value.trim().length === 0 && lastname.value.length == 0 || containsSpecialChars(lastname.value)){
                        lastname.classList.add('border-2', 'border-red-500');
                        return false;
                    }else{
                        lastname.classList.remove('border-2', 'border-red-500');
                        return true;
                    }
                }
                function checkaddress(){
                    credentials()
                    if(address.value.trim().length === 0 && address.value.length <= 4){
                        address.classList.add('border-2', 'border-red-500');
                        return false;
                    }else{
                        address.classList.remove('border-2', 'border-red-500');
                        return true;
                    }
                }
                function checkphonenumber(){
                    credentials()
                    if(phonenumber.value.length != 10){
                        phonenumber.classList.add('border-2', 'border-red-500');
                        return false;
                        
                    }else if(phonenumber.value[0] != 9){
                        phonenumber.classList.add('border-2', 'border-red-500');
                        return false;
                    }
                    else{
                        phonenumber.classList.remove('border-2', 'border-red-500');
                        return true;
                        }
                }
                function checkemail(){
                    credentials()
                    if(email.value.indexOf("@") == -1 || email.value.length <= 7 || email.value.trim().length === 0 || !validateEmail(email.value)){
                        email.classList.add('border-2', 'border-red-500');
                        return false;
                    }else{
                        email.classList.remove('border-2', 'border-red-500');
                        return true;
                    }
                }
                $( "form" ).on( "submit", function( event ) {
                    if(checkfirstname()){
                       
                    }else{
                        event.preventDefault();
                    }
                    if(checklastname()){

                    }else{
                        event.preventDefault();
                    }
                    if(checkaddress()){

                    }else{
                        event.preventDefault();
                    }
                    if(checkemail()){
                        
                    }else{
                        event.preventDefault();
                    }
                    if(checkphonenumber()){
                        
                    }else{
                        event.preventDefault();
                    }
                    if(!event.isDefaultPrevented()){
                        document.getElementById('accepttogglebtn').classList.add('hidden')
                        document.getElementById('declinetogglebtn').classList.add('hidden')
                    }
                    else{
                        setTimeout(() => {
                        alert('Please Fill the missing fields')
                        }, 100);
                    }
                    
                    });
        </script>
    <!--FORM SCRIPT-->

    <script type="text/javascript" src="../node_modules/tw-elements/dist/js/tw-elements.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/datepicker.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
</body>
</html>