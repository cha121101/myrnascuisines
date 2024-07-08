<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bacasime+Antique&family=Euphoria+Script&family=Geologica:wght@300&family=Nunito:wght@300&family=Style+Script&family=Tangerine&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.css" rel="stylesheet" />

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link rel="stylesheet" href="css\calendar.css">
    <link rel="stylesheet" href="{{URL::asset('css/fonts.css')}}">
    {{-- @vite('resources/css/app.css') --}}
</head>

<body class="bg-orange-50">

  <!--NAVBAR-->
    <section>
      <nav class="border-white">
          <div class="relative">
              <a href="{{ route('welcome') }}" class="absolute p-2">
              <img src="{{URL::asset("/img/Logo_Myrna'sflower.png")}}" class="my-2 mr-3 rounded-lg shadow-xl h-9" alt="">
              </a>
              <div class="absolute inset-0 grid place-items-center "> 
              <p class="flex py-6 text-2xl font-bold text-red-700 md:py-4 md:text-5xl lg:text-6xl font-geologica">Event Reservation</p>
              </div> 
          </div>
          <div class="flex flex-wrap items-center justify-end p-3 mx-auto lg:p-4 inset-95">
              <a href="{{ route('welcome') }}" class="float-right duration-500 bg-white rounded-xl hover:scale-110">
              <svg xmlns="http://www.w3.org/2000/svg" height="35" viewBox="0 0 24 24">
                  <path fill="currentcolor" d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/>
              </svg>
              </a>
          </div>
      </nav>
    </section>
  <!--NAVBAR-->

    @auth
      <input type="text" hidden name="isadmin" value="true">
    @endauth
    
    @guest
      <input type="text" hidden name="isadmin" value="false">
    @endguest

    
    <x-breadcrumbs />

    <div id="personal-details" >
      <x-personal-details />
    </div>

    <div id="packages-details" >
      <!--Package Selection Section-->
        <section>
          <div class="py-2">
              <div class="m-1 md:m-[3rem]">
                  <div class="pb-10 overflow-hidden bg-white shadow-xl rounded-xl" id="packageselection">
                      <div class="w-full px-3 py-12">
                        <p class="flex mb-4 text-xl font-extrabold text-center text-gray-800 md:text-2xl font-geologica input-icon input-icon-right">Package Selection*</p>
                          <!--PACKAGES SECTION-->
                        
                            <!--PACKAGES-->
                              <div class="flex items-center justify-center mb-5">
                                <div class="mx-auto">
                                  <div class="grid grid-cols-1 gap-2 mx-2 sm:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-5">
                                
                                    @foreach ($package as $key => $value )
                                          <div
                                          id="{{ $key }}"
                                          @foreach ($value as $k => $v) 
                                            @if (is_array($v))
                                                @else
                                                    @if ($k == 'enable' && ($v == false || $v == "off")) 
                                                      class="hidden"
                                                    @else
                                                @endif
                                            @endif
                                          @endforeach
                                          >

                                            <label class="w-full h-full cursor-pointer">
                                              <input type="radio" class="sr-only peer"  onclick="enablenext()" name="package" value="{{ $key }}" />
                                              {{-- <input type="text" name="packageprice" value="{{ $value->price }}" hidden> --}}

                                                <div class="z-50 h-full max-w-lg my-4 overflow-hidden transition-all bg-white rounded-lg shadow-2xl ring-2 ring-transparent hover:shadow peer-checked:text-sky-400 peer-checked:ring-blue-400 peer-checked:ring-offset-2">

                                                    <img class="w-full rounded-t-lg h-48" src="{{URL::asset("img/editable/$value->picture")}}" alt="" />
                                              
                                                    <div class="flex items-center justify-between px-6 py-2 bg-gray-800">
                                                        <h1 class="text-2xl font-semibold text-white uppercase transition duration-300 font-geologica group" style="text-transform: uppercase">{{ $value->name }}</h1>
                                                        <div>
                                                            <svg width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="m10.6 13.8l-2.175-2.175q-.275-.275-.675-.275t-.7.3q-.275.275-.275.7q0 .425.275.7L9.9 15.9q.275.275.7.275q.425 0 .7-.275l5.675-5.675q.275-.275.275-.675t-.3-.7q-.275-.275-.7-.275q-.425 0-.7.275ZM12 22q-2.075 0-3.9-.788q-1.825-.787-3.175-2.137q-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175q1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138q1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175q-1.35 1.35-3.175 2.137Q14.075 22 12 22Z" /></svg>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="px-6 py-4">
                                                      <div class="text-2xl font-bold text-gray-800 font-geologica">₱{{ $value->price }}<span class="text-lg text-gray-600">/Pax</span></div>
                                                    </div>

                                                    <div class="px-6 py-4">
                                                        <ul class="mx-2 list-disc marker:text-red-800 font-geologica">
                                                          @foreach ($value->package_lists as $value )
                                                          <li><p><span class="text-base md:text-xl text-slate-700">{{ $value }}</span></p></li>
                                                          @endforeach
                                                        </ul>
                                                    </div>

                                                </div>

                                            </label>

                                          </div>
                                    @endforeach
                                  </div>
                                </div>
                              </div>
                            <!--PACKAGES-->

                          <!--PACKAGES SECTION-->
                      </div>
                      
                      <!--Button for Next/Back-->
                        <div class="flex flex-row justify-center">
                          <a onclick="selected(id = 1)"  href="#personaldetails"  type="button" class="px-3 py-2 font-extrabold text-white duration-500 bg-gray-800 border-r border-gray-100 font-geologica rounded-l-md hover:bg-green-500 hover:text-white hover:scale-110">
                            <div class="flex flex-row align-middle">
                              <svg class="w-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd"></path>
                              </svg>
                              <p class="ml-2">Prev</p>
                            </div>
                          </a>
                          <button  onclick="selected(id = 3)" id="packagenextbtn" disabled href="#venueselection" type="button" class="px-3 py-2 font-extrabold text-white duration-500 bg-gray-800 border-l border-gray-200 font-geologica rounded-r-md hover:bg-green-500 hover:text-white hover:scale-110">
                            <div class="flex flex-row align-middle">
                              <span class="mr-2">Next</span>
                              <svg class="w-5 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                              </svg>
                            </div>
                          </button>
                        </div>
                      <!--Button for Next/Back-->
                  </div>
              </div>
          </div>
        </section>
      <!--Package Selection Section-->
    </div>

    <div id="events-details" >
      <!--Venue Selection Section-->
        <section>
          <div class="py-2 max-w-screen">
              <div class="m-2 md:m-[3rem]">
                  <div class="pb-10 overflow-hidden bg-white shadow-2xl rounded-xl" id="venueselection">
                      <div class="w-full px-8 py-16">
                        <p class="flex mb-4 text-2xl font-extrabold text-center text-black font-geologica input-icon input-icon-right">Venue Selection*</p>
                          <div class="flex items-center justify-center mb-16">
                              <div class="mx-auto">
                                  <div class="grid gap-5">

                                      <!--Venue Selection-->
                                          <div class="grid content-center justify-center md:col-span-4 2xl:col-span-1 place-content-center">
                                              <div class="flex">
                                                  <div class="grid gap-5 divide-y-4 divide-red-700">

                                                      <!--Selection-->
                                                          <div class="grid gap-5 mx-auto my-5 md:grid-cols-2 lg:grid-cols-3 justify-items">
                                                            
                                                              <!--Restaurant Selection-->
                                                                  <label class="cursor-pointer">
                                                                      <input type="radio" onchange="venueselected(1)" class="sr-only peer" name="venue" id="venue-selected[]" value="restaurant" />
          
                                                                        <div class="max-w-sm h-full lg:my-[3rem] mx-auto overflow-hidden text-gray-800 bg-white rounded-lg shadow-2xl ring-2 ring-transparent transition-all hover:shadow  peer-checked:text-sky-400 peer-checked:ring-blue-400 peer-checked:ring-offset-2">
                                                                          <img src="{{ URL::asset("/img/editable/$restaurant->picture") }}" class="w-full bg-cover rounded-t-lg h-44 md:h-56" alt="..." />

                                                                            <div class="flex items-center justify-between px-6 py-2 bg-gray-800">
                                                                                <h1 class="text-xl font-semibold text-white transition duration-300 md:text-3xl font-geologica group">Restaurant</h1>
                                                                                <div>
                                                                                    <svg width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="m10.6 13.8l-2.175-2.175q-.275-.275-.675-.275t-.7.3q-.275.275-.275.7q0 .425.275.7L9.9 15.9q.275.275.7.275q.425 0 .7-.275l5.675-5.675q.275-.275.275-.675t-.3-.7q-.275-.275-.7-.275q-.425 0-.7.275ZM12 22q-2.075 0-3.9-.788q-1.825-.787-3.175-2.137q-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175q1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138q1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175q-1.35 1.35-3.175 2.137Q14.075 22 12 22Z" /></svg>
                                                                                </div>
                                                                            </div>

                                                                            <div class="px-6 py-4">
                                                                                <ul class="mx-2 list-disc marker:text-red-600 font-geologica">
                                                                                    <li><p><span class="text-base md:text-xl text-slate-700"><b>Price :</b>₱{{ $restaurant->price}}</span></p></li>
                                                                                    <li><p><span class="text-base md:text-xl text-slate-700"><b>Time :</b> {{ $restaurant->time  }}</span></p></li>
                                                                                    <li><p><span class="text-base md:text-xl text-slate-700"><b>Capacity :</b>{{ $restaurant->capacity }} pax</span></p></li>
                                                                                    <li><p><span class="text-base md:text-xl text-slate-700"><b>Amenities :</b> {{ $restaurant->amenities }}</span></p></li>
                                                                                    <li><p><span class="text-base md:text-xl text-slate-700"><b>Additional Fee per exceeding Hour :</b> ₱{{ $restaurant->per_hour }}</span></p></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    
                                                                  </label>
                                                              <!--Restaurant Selection-->

                                                              <!--Event hall Selection-->
                                                                  <label class="cursor-pointer">
                                                                      <input type="radio" onchange="venueselected(2)" class="sr-only peer" name="venue" id="venue-selected" value="event_hall"/>

                                                                      <div class="h-full max-w-sm mx-auto overflow-hidden transition-all text-gray-800 bg-white rounded-lg shadow-2xl ring-2 ring-transparent hover:shadow peer-checked:text-sky-400 peer-checked:ring-blue-400 peer-checked:ring-offset-2">
                                                                        <img src="{{ URL::asset("/img/editable/$event_hall->picture") }}" class="w-full bg-cover rounded-t-lg h-44 md:h-56" alt="..." />

                                                                          <div class="flex items-center justify-between px-6 py-2 bg-gray-800">
                                                                              <h1 class="text-xl font-semibold text-white transition duration-300 md:text-3xl font-geologica group">Event Hall</h1>
                                                                              <div>
                                                                                  <svg width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="m10.6 13.8l-2.175-2.175q-.275-.275-.675-.275t-.7.3q-.275.275-.275.7q0 .425.275.7L9.9 15.9q.275.275.7.275q.425 0 .7-.275l5.675-5.675q.275-.275.275-.675t-.3-.7q-.275-.275-.7-.275q-.425 0-.7.275ZM12 22q-2.075 0-3.9-.788q-1.825-.787-3.175-2.137q-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175q1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138q1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175q-1.35 1.35-3.175 2.137Q14.075 22 12 22Z" /></svg>
                                                                              </div>
                                                                          </div>
                                                                          
                                                                          <div class="px-6 py-4">
                                                                              <ul class="mx-2 list-disc marker:text-red-600 font-geologica">
                                                                                  <li><p><span class="text-base md:text-xl text-slate-700"><b>Price :</b> ₱{{ $event_hall->price }}</span></p></li> 
                                                                                  <li><p><span class="text-base md:text-xl text-slate-700"><b>Time :</b>{{$event_hall->time }}</span></p></li>
                                                                                  <li><p><span class="text-base md:text-xl text-slate-700"><b>Capacity :</b>{{ $event_hall->capacity }}  pax</span></p></li>
                                                                                  <li><p><span class="text-base md:text-xl text-slate-700"><b>Amenities :</b> {{ $event_hall->amenities }}</span></p></li>
                                                                                  <li><p><span class="text-base md:text-xl text-slate-700"><b>Additional Fee per exceeding Hour :</b>₱{{ $event_hall->per_hour }}</span></p></li>
                                                                              </ul>
                                                                          </div>
                                                                      </div>

                                                                  </label>
                                                              <!--Event hall Selection-->

                                                              <!--Pool Selection-->
                                                                  <label class="cursor-pointer sm:col-span-2 lg:col-span-1">
                                                                      <input type="radio" onchange="venueselected(3)"  class="sr-only peer" name="venue" id="venue-selected"  value="pool" /> 

                                                                      <div class="max-w-sm h-full lg:my-[3rem] mx-auto overflow-hidden text-gray-800 bg-white rounded-lg shadow-2xl ring-2 ring-transparent transition-all hover:shadow  peer-checked:text-sky-400 peer-checked:ring-blue-400 peer-checked:ring-offset-2">
                                                                          <img src="{{ URL::asset("/img/editable/$pool->picture") }}" class="w-full bg-cover rounded-t-lg h-44 md:h-56" alt="..." />

                                                                          <div class="flex items-center justify-between px-6 py-2 bg-gray-800">
                                                                              <h1 class="text-xl font-semibold text-white transition duration-300 md:text-3xl font-geologica group">Pool Area</h1>
                                                                              <div>
                                                                                  <svg width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="m10.6 13.8l-2.175-2.175q-.275-.275-.675-.275t-.7.3q-.275.275-.275.7q0 .425.275.7L9.9 15.9q.275.275.7.275q.425 0 .7-.275l5.675-5.675q.275-.275.275-.675t-.3-.7q-.275-.275-.7-.275q-.425 0-.7.275ZM12 22q-2.075 0-3.9-.788q-1.825-.787-3.175-2.137q-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175q1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138q1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175q-1.35 1.35-3.175 2.137Q14.075 22 12 22Z" /></svg>
                                                                              </div>
                                                                          </div>

                                                                          <div class="px-6 py-4">
                                                                              <ul class="mx-2 list-disc marker:text-red-600 font-Geologica">
                                                                                  <li><p><span class="text-base md:text-xl text-slate-700"><b>Price :</b> ₱{{ $pool->price }}</span></p></li>
                                                                                  <li><p><span class="text-base md:text-xl text-slate-700"><b>Time :</b>{{ $pool->time }}</span></p></li>
                                                                                  <li><p><span class="text-base md:text-xl text-slate-700"><b>Capacity :</b>{{ $pool->capacity }} pax</span></p></li>
                                                                                  <li><p><span class="text-base md:text-xl text-slate-700"><b>Amenities :</b> {{ $pool->amenities }}</span></p></li>
                                                                                  <li><p><span class="text-base md:text-xl text-slate-700"><b>Additional Fee per exceeding Hour :</b> ₱500</span></p></li>
                                                                              </ul>
                                                                          </div>
                                                                      </div>

                                                                  </label>
                                                              <!--Pool Selection-->
                                                          </div>
                                                      <!--Selection-->

                                                      <!--Additional Selection-->
                                                          <div>
                                                              <!--Addition Tab 1 (IF RESTAURANT SELECTED)-->
                                                                  <div id="restaurant-selected" class="grid justify-center hidden place-content-center">
                                                                      <p class="mb-4 text-2xl font-bold text-center text-gray-800 md:text-left font-Geologica">Venue Extension Selection</p>
                                                                      <div class="grid gap-5 md:grid-cols-2 2xl:grid-cols-3 2xl:mx-4">             
                                                                          <!--Event Hall Selection Option (IF RESTAURANT SELECTED)-->
                                                                              <label class="cursor-pointer">
                                                                                  <input type="checkbox" class="sr-only peer" name="venueaddon[]"  value="event_hall"/>
                                                                                  
                                                                                  <div class="h-full max-w-xs mx-auto overflow-hidden transition-all text-gray-800 bg-white rounded-lg shadow-lg ring-2 ring-transparent hover:shadow peer-checked:text-sky-400 peer-checked:ring-blue-400 peer-checked:ring-offset-2">
                                                                                      <div class="flex items-center justify-between px-6 py-2 bg-gray-800">
                                                                                          <h1 class="text-xl font-semibold text-white transition duration-300 md:text-3xl font-geologica group">Event Hall</h1>
                                                                                          <div>
                                                                                              <svg width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="m10.6 13.8l-2.175-2.175q-.275-.275-.675-.275t-.7.3q-.275.275-.275.7q0 .425.275.7L9.9 15.9q.275.275.7.275q.425 0 .7-.275l5.675-5.675q.275-.275.275-.675t-.3-.7q-.275-.275-.7-.275q-.425 0-.7.275ZM12 22q-2.075 0-3.9-.788q-1.825-.787-3.175-2.137q-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175q1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138q1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175q-1.35 1.35-3.175 2.137Q14.075 22 12 22Z" /></svg>
                                                                                          </div>
                                                                                      </div>
                                                                                      
                                                                                      <div class="px-6 py-4">
                                                                                          <ul class="mx-2 list-disc marker:text-red-600 font-geologica">
                                                                                              <li><p><span class="text-base md:text-xl text-slate-700"><b>Price :</b> ₱{{ $event_hall->price }}</span></p></li> 
                                                                                              <li><p><span class="text-base md:text-xl text-slate-700"><b>Time :</b>{{$event_hall->time }}</span></p></li>
                                                                                              <li><p><span class="text-base md:text-xl text-slate-700"><b>Capacity :</b>{{ $event_hall->capacity }}  pax</span></p></li>
                                                                                              <li><p><span class="text-base md:text-xl text-slate-700"><b>Amenities :</b> {{ $event_hall->amenities }}</span></p></li>
                                                                                              <li><p><span class="text-base md:text-xl text-slate-700"><b>Additional Fee per exceeding Hour :</b>₱{{ $event_hall->per_hour }}</span></p></li>
                                                                                          </ul>
                                                                                      </div>
                                                                                      
                                                                                  </div>
                                                                              </label>
                                                                          <!--Event Hall Selection Option (IF RESTAURANT SELECTED)-->

                                                                          <!--Pool Selection Option (IF RESTAURANT SELECTED)-->
                                                                              <label class="cursor-pointer">
                                                                                  <input type="checkbox" class="sr-only peer" name="venueaddon[]"  value="pool" /> 
                                                                                  <div class="h-full max-w-xs mx-auto overflow-hidden transition-all text-gray-800 bg-white rounded-lg shadow-lg ring-2 ring-transparent hover:shadow peer-checked:text-sky-400 peer-checked:ring-blue-400 peer-checked:ring-offset-2">
                                                                                      <div class="flex items-center justify-between px-6 py-2 bg-gray-800">
                                                                                          <h1 class="text-xl font-semibold text-white transition duration-300 md:text-3xl font-Geologica group">Pool Area</h1>
                                                                                          <div>
                                                                                              <svg width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="m10.6 13.8l-2.175-2.175q-.275-.275-.675-.275t-.7.3q-.275.275-.275.7q0 .425.275.7L9.9 15.9q.275.275.7.275q.425 0 .7-.275l5.675-5.675q.275-.275.275-.675t-.3-.7q-.275-.275-.7-.275q-.425 0-.7.275ZM12 22q-2.075 0-3.9-.788q-1.825-.787-3.175-2.137q-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175q1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138q1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175q-1.35 1.35-3.175 2.137Q14.075 22 12 22Z" /></svg>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="px-6 py-4">
                                                                                          <ul class="mx-2 list-disc marker:text-red-600 font-Geologica">
                                                                                              <li><p><span class="text-base md:text-xl text-slate-700"><b>Price :</b>₱{{ $pool->price}}</span></p></li>
                                                                                              <li><p><span class="text-base md:text-xl text-slate-700"><b>Time :</b> {{ $pool->time  }}</span></p></li>
                                                                                              <li><p><span class="text-base md:text-xl text-slate-700"><b>Capacity :</b>{{ $pool->capacity }} pax</span></p></li>
                                                                                              <li><p><span class="text-base md:text-xl text-slate-700"><b>Amenities :</b> {{ $pool->amenities }}</span></p></li>
                                                                                              <li><p><span class="text-base md:text-xl text-slate-700"><b>Additional Fee per exceeding Hour :</b> ₱{{ $pool->per_hour }}</span></p></li>
                                                                                          </ul>
                                                                                      </div>
                                                                                  </div>
                                                                              </label>
                                                                          <!--Pool Selection Option (IF RESTAURANT SELECTED)-->

                                                                          <!--Additional Pax-->
                                                                              <div class="mt-5 text-center md:mt-10 sm:col-span-2 2xl:col-span-1">
                                                                                  
                                                                                  <p class="mb-4 text-xl font-extrabold text-center text-gray-800 md:text-2xl font-geologica input-icon input-icon-right">Additional Guest</p>
                                                                                  <input type="number" min="0" max="50" name="additionalguestRestaurant" 
                                                                                  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                                                  onkeydown="javascript: return event.keyCode == 69 ? false : true"
                                                                                  maxlength="2"
                                                                                  placeholder="Guest" id="additionalguestRestaurant" value="0" class="px-3 py-1 text-xl border border-gray-400 rounded-xl font-geologica">  
                                                                              </div>
                                                                          <!--Additional Pax-->
                                                                      </div>
                                                                  </div>
                                                              <!--Addition Tab 1 (IF RESTAURANT SELECTED)-->

                                                              <!--==POOL SELECTION ADDITIONAL DATA==-->

                                                              <!--Addition Tab 2 (IF EVENT HALL SELECTED)-->
                                                                  <div id="event-hall-selected" class="grid justify-center hidden place-content-center">
                                                                      <p class="mb-4 text-2xl font-bold text-center text-gray-800 md:text-left font-Geologica">Venue Extension Selection</p>
                                                                      <div class="grid gap-5 md:grid-cols-2 2xl:grid-cols-3 2xl:mx-4">

                                                                          <!--Restaurant Selection Option (IF EVENT HALL SELECTED)-->
                                                                              <label class="cursor-pointer">
                                                                                  <input type="checkbox" class="sr-only peer" name="venueaddon[]"  value="restaurant"/>
                                                                                  <div class="h-full max-w-xs mx-auto overflow-hidden transition-all text-gray-800 bg-white rounded-lg shadow-lg ring-2 ring-transparent hover:shadow peer-checked:text-sky-400 peer-checked:ring-blue-400 peer-checked:ring-offset-2">
                                                                                      <div class="flex items-center justify-between px-6 py-2 bg-gray-800">
                                                                                          <h1 class="text-xl font-semibold text-white transition duration-300 md:text-3xl font-geologica group">Restaurant</h1>
                                                                                          <div>
                                                                                              <svg width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="m10.6 13.8l-2.175-2.175q-.275-.275-.675-.275t-.7.3q-.275.275-.275.7q0 .425.275.7L9.9 15.9q.275.275.7.275q.425 0 .7-.275l5.675-5.675q.275-.275.275-.675t-.3-.7q-.275-.275-.7-.275q-.425 0-.7.275ZM12 22q-2.075 0-3.9-.788q-1.825-.787-3.175-2.137q-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175q1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138q1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175q-1.35 1.35-3.175 2.137Q14.075 22 12 22Z" /></svg>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="px-6 py-4">
                                                                                          <ul class="mx-2 list-disc marker:text-red-600 font-geologica">
                                                                                              <li><p><span class="text-base md:text-xl text-slate-700"><b>Price :</b>₱{{ $restaurant->price}}</span></p></li>
                                                                                              <li><p><span class="text-base md:text-xl text-slate-700"><b>Time :</b> {{ $restaurant->time  }}</span></p></li>
                                                                                              <li><p><span class="text-base md:text-xl text-slate-700"><b>Capacity :</b>{{ $restaurant->capacity }} pax</span></p></li>
                                                                                              <li><p><span class="text-base md:text-xl text-slate-700"><b>Amenities :</b> {{ $restaurant->amenities }}</span></p></li>
                                                                                              <li><p><span class="text-base md:text-xl text-slate-700"><b>Additional Fee per exceeding Hour :</b> ₱{{ $restaurant->per_hour }}</span></p></li>
                                                                                          </ul>
                                                                                      </div>
                                                                                  </div>
                                                                              </label>
                                                                          <!--Restaurant Selection Option (IF EVENT HALL SELECTED)-->

                                                                          <!--Gazebo Selection Option (IF EVENT HALL SELECTED)-->
                                                                              <label class="cursor-pointer">
                                                                                  <input type="checkbox" class="sr-only peer" name="venueaddon[]"  value="gazebo" />
                                                                                  <div class="h-full max-w-xs mx-auto overflow-hidden transition-all text-gray-800 bg-white rounded-lg shadow-lg ring-2 ring-transparent hover:shadow peer-checked:text-sky-400 peer-checked:ring-blue-400 peer-checked:ring-offset-2">
                                                                                      <div class="flex items-center justify-between px-6 py-2 bg-gray-800">
                                                                                          <h1 class="text-xl font-semibold text-white transition duration-300 md:text-3xl font-Geologica group">Gazebo</h1>
                                                                                          <div>
                                                                                              <svg width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="m10.6 13.8l-2.175-2.175q-.275-.275-.675-.275t-.7.3q-.275.275-.275.7q0 .425.275.7L9.9 15.9q.275.275.7.275q.425 0 .7-.275l5.675-5.675q.275-.275.275-.675t-.3-.7q-.275-.275-.7-.275q-.425 0-.7.275ZM12 22q-2.075 0-3.9-.788q-1.825-.787-3.175-2.137q-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175q1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138q1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175q-1.35 1.35-3.175 2.137Q14.075 22 12 22Z" /></svg>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="px-6 py-4">
                                                                                          <ul class="mx-2 list-disc marker:text-red-600 font-Geologica">
                                                                                              <li><p><span class="text-base md:text-xl text-slate-700"><b>Price :</b>₱{{ $gazebo->price}}</span></p></li>
                                                                                              <li><p><span class="text-base md:text-xl text-slate-700"><b>Time :</b> {{ $gazebo->time  }}</span></p></li>
                                                                                              <li><p><span class="text-base md:text-xl text-slate-700"><b>Capacity :</b>{{ $gazebo->capacity }} pax</span></p></li>
                                                                                              <li><p><span class="text-base md:text-xl text-slate-700"><b>Amenities :</b> {{ $gazebo->amenities }}</span></p></li>
                                                                                              <li><p><span class="text-base md:text-xl text-slate-700"><b>Additional Fee per exceeding Hour :</b> ₱{{ $gazebo->per_hour }}</span></p></li>
                                                                                          </ul>
                                                                                      </div>
                                                                                  </div>
                                                                              </label>
                                                                          <!--Gazebo Selection Option (IF EVENT HALL SELECTED)-->

                                                                          <!--==NEED ACTION==-->

                                                                          <!--Pool Selection Option (IF EVENT HALL SELECTED)-->
                                                                              <label class="cursor-pointer">
                                                                                  <input type="checkbox" class="sr-only peer" name="venueaddon[]"  value="pool" /> 
                                                                                  <div class="h-full max-w-xs mx-auto overflow-hidden transition-all text-gray-800 bg-white rounded-lg shadow-lg ring-2 ring-transparent hover:shadow peer-checked:text-sky-400 peer-checked:ring-blue-400 peer-checked:ring-offset-2">
                                                                                      <div class="flex items-center justify-between px-6 py-2 bg-gray-800">
                                                                                          <h1 class="text-xl font-semibold text-white transition duration-300 md:text-3xl font-Geologica group">Pool Area</h1>
                                                                                          <div>
                                                                                              <svg width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="m10.6 13.8l-2.175-2.175q-.275-.275-.675-.275t-.7.3q-.275.275-.275.7q0 .425.275.7L9.9 15.9q.275.275.7.275q.425 0 .7-.275l5.675-5.675q.275-.275.275-.675t-.3-.7q-.275-.275-.7-.275q-.425 0-.7.275ZM12 22q-2.075 0-3.9-.788q-1.825-.787-3.175-2.137q-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175q1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138q1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175q-1.35 1.35-3.175 2.137Q14.075 22 12 22Z" /></svg>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="px-6 py-4">
                                                                                          <ul class="mx-2 list-disc marker:text-red-600 font-Geologica">
                                                                                              <li><p><span class="text-base md:text-xl text-slate-700"><b>Price :</b>₱{{ $pool->price}}</span></p></li>
                                                                                              <li><p><span class="text-base md:text-xl text-slate-700"><b>Time :</b> {{ $pool->time  }}</span></p></li>
                                                                                              <li><p><span class="text-base md:text-xl text-slate-700"><b>Capacity :</b>{{ $pool->capacity }} pax</span></p></li>
                                                                                              <li><p><span class="text-base md:text-xl text-slate-700"><b>Amenities :</b> {{ $pool->amenities }}</span></p></li>
                                                                                              <li><p><span class="text-base md:text-xl text-slate-700"><b>Additional Fee per exceeding Hour :</b> ₱{{ $pool->per_hour }}</span></p></li>
                                                                                          </ul>
                                                                                      </div>
                                                                                  </div>
                                                                              </label>
                                                                          <!--Pool Selection Option (IF EVENT HALL SELECTED)-->

                                                                          <!--==NEED ACTION==-->

                                                                          <!--Additional Pax-->
                                                                              <div class="mt-5 text-center md:mt-10 2xl:col-span-3">
                                                                                  
                                                                                  <p class="mb-4 text-xl font-extrabold text-center text-gray-800 md:text-2xl font-geologica input-icon input-icon-right">Additional Guest</p>
                                                                                  <input type="number" min="0" max="50" name="additionalguestEventHall" 
                                                                                  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                                                  onkeydown="javascript: return event.keyCode == 69 ? false : true"
                                                                                  maxlength="2"
                                                                                  placeholder="Guest" id="additionalguestEventHall" value="0" class="px-3 py-1 text-xl border border-gray-400 rounded-xl font-geologica">  
                                                                              </div>
                                                                          <!--Additional Pax-->

                                                                      </div>
                                                                  </div>
                                                              <!--Addition Tab 2 (IF EVENT HALL SELECTED)-->

                                                              <!--==POOL SELECTION ADDITIONAL DATA==-->
                                                              
                                                              <!--Addition Tab 3 (IF POOL IS SELECTED)-->
                                                                      <!--Additional Pax-->
                                                                  
                                                                  <div id="pool-selected" class="grid justify-center hidden place-content-center">
                                                                      <div class="mt-5 text-center md:mt-10 sm:col-span-2 2xl:col-span-1">
                                                                          
                                                                          <p class="mb-4 text-xl font-extrabold text-center text-gray-800 md:text-2xl font-geologica input-icon input-icon-right">Additional Guest</p>
                                                                          <input type="number" min="0" max="50" name="additionalguestPoolArea"
                                                                          oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                                          onkeydown="javascript: return event.keyCode == 69 ? false : true" 
                                                                          maxlength="2"
                                                                          placeholder="Guest" id="additionalguestPoolArea" value="0" class="px-3 py-1 text-xl border border-gray-400 rounded-xl font-geologica">
                                                                      </div>
                                                                  </div>
                                                                  <!--Additional Pax-->
                                                              <!--Addition Tab 3 (IF POOL IS SELECTED)-->
                                                          </div>
                                                      <!--Additional Selection-->
                                                  </div>
                                              </div>
                                          </div>
                                      <!--Venue Selection-->

                                  </div>
                              </div>
                              <script>

                              </script>
                          </div>
                          <p class="mb-2 text-3xl font-bold text-center text-gray-800 font-Geologica">Notes</p>
                          <div class="mx-[2rem] md:mx-[6rem] xl:mx-[10rem] justify-center mb-10">
                              <textarea type="text" name="specialrequest" id="message" rows="12" class="block p-2.5 w-full text-lg font-geologica font-extrabold text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Dear customer, Please indicate how many guests you will be having. You can input requests such as theme for the events set-up, and other services that our staff can accommodate."></textarea>
                          </div>
                          <!--Button for Next/Back-->
                              <div class="flex flex-row justify-center">
                                  <button onclick="selected(id = 2)" href="#packageselection" type="button" class="px-3 py-2 font-extrabold text-white duration-500 bg-gray-800 border-r border-gray-100 font-geologica rounded-l-md hover:bg-green-500 hover:text-white hover:scale-110">
                                  <div class="flex flex-row align-middle">
                                      <svg class="w-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                      <path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd"></path>
                                      </svg>
                                      <p class="ml-2">Prev</p>
                                  </div>
                              </button>
                                  <button  href="#time&date" disabled type="button" id="eventnextbutton"  class="px-3 py-2 font-extrabold text-white duration-500 bg-gray-800 border-l border-gray-200 font-geologica rounded-r-md hover:bg-green-500 hover:text-white hover:scale-110">
                                  <div class="flex flex-row align-middle">
                                      <span class="mr-2">Next</span>
                                      <svg class="w-5 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                      <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                      </svg>
                                  </div>
                              </button>
                              </div>
                          <!--Button for Next/Back-->
                      </div>
                  </div>
              </div>
          </div>
        </section>
      <!--Venue Selection Section-->
    </div>
      
    <div id="others-details">
      <!--Date & Time Selection Section-->
        <section>
            <div class="py-2 max-w-screen">
                <div class="m-2 md:m-[3rem]">
                    <div class="pb-10 bg-white shadow-2xl rounded-xl" id="time&date">
                        <div class="w-full px-4 py-16">
                            <p class="flex mb-4 text-2xl font-extrabold text-center text-gray-800 font-geologica input-icon input-icon-right">Time & Date Selection*</p>
                            <div class="grid lg:grid-cols-4">

                                <!--Calendar-->
                                    <div class="relative grid col-span-1 gap-4 my-5 shadow-2xl 2xl:grid-cols-2 md:col-span-2 lg:mx-5 bg-slate-100 rounded-xl">
                                        <div class="flex justify-center col-span-2 m-2">
                                            <input type="date" name="scheduledate" id="scheduledate" onchange="enablesumbit()" hidden >
                                            <div id="calendar" class="text-red-700 font-nunito"  style="height: full; width: full; "></div>
                                        </div>
                                    </div>
                                <!--Calendar-->

                                <!--Time-->
                                    <div class="grid justify-center col-span-2 mt-3 text-center place-content-start">
                                        <div class="relative mb-10 text-center" onchange="enablesumbit()" data-te-with-icon="false" data-te-timepicker-init data-te-input-wrapper-initid="timepicker-just-input">
                                            <label for="countries" class="block mb-2 text-2xl font-extrabold text-gray-800 font-geologica">Select Time*</label>
                                            <select id="scheduletime" name="scheduletime" class="border border-gray-300 text-xl rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5 px-12 bg-white text-red-700 font-geologica font-extrabold shadow-2xl dark:focus:ring-blue-500">
                                            <option selected>8:00 AM</option>
                                            <option>9:00 AM</option>
                                            <option>10:00 AM</option>
                                            <option>11:00 AM</option>
                                            <option>12:00 PM</option>
                                            <option>1:00 PM</option>
                                            <option>2:00 PM</option>
                                            <option>3:00 PM</option>
                                            <option>4:00 PM</option>
                                            <option>5:00 PM</option>
                                            <option>6:00 PM</option>
                                            </select>
                                        </div> 
                                    </div>
                                <!--Time-->

                            </div>
                        </div>

                        <!-- Main modal -->
                        <div id="default-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden items-center justify-center fixed top-0 bottom-0 left-0 right-0 z-50 w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative w-full max-w-2xl max-h-full">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow">
                                    <!-- Modal header -->
                                    <div class="flex items-center justify-center p-4 border-b rounded-t ">
                                        <h3 class="text-3xl font-extrabold text-center text-gray-900 font-geologica ">
                                            Confirmation
                                        </h3>
                                    </div>
                                    <!-- Modal body -->
                                      <div class="p-6 space-y-6 font-geologica">
                                          <ul class="mx-3 text-xl font-light text-center text-gray-800 list-disc divide-y divide-gray-600 marker:text-red-800 font-Geologica">
                                            <li class="my-2 text-left">
                                                <p class="font-bold">Name: <a id="confirm-fullname"></a></p>
                                            </li>
                                            <li class="my-2 text-left">
                                                <p class="font-bold">Address: <a id="confirm-address"></a></p>
                                            </li>
                                            <li class="my-2 text-left">
                                                <p class="font-bold">Phone Number: <a id="confirm-phone"></a></p>
                                            </li>
                                            <li class="my-2 text-left">
                                                <p class="font-bold">Email: <a id="confirm-email"></a></p>
                                            </li>
                                            <li class="my-2 text-left">
                                                <p class="font-bold">Package: <a id="confirm-package"></a></p>
                                            </li>
                                            <li class="my-2 text-left">
                                                <p class="font-bold">Venue: <a id="confirm-venue"></a></p>
                                            </li>
                                            <li class="my-2 text-left">
                                                <p class="font-bold">Additional Guest(s): <a id="confirm-additionalguess"></a></p>
                                            </li>
                                            <li class="my-2 text-left">
                                                <p class="font-bold">Schedule Date and Time: <a id="confirm-time-and-date"></a></p>
                                            </li>
                                          </ul>
                                      </div>
                                    <!-- Modal footer -->
                                    <div class="flex items-center justify-center text-center p-6 space-x-2 border-t border-gray-200 rounded-b ">
                                        <button data-modal-hide="default-modal" type="submit" id="submitbtn" onclick="checkall()" class="px-3 py-2 text-white bg-green-600 border-l border-gray-200 rounded-md font-geologica hover:bg-green-500 hover:scale-110 hover:text-white">Submit</button>
                                        <button data-modal-hide="default-modal" type="button" class="px-3 py-2 text-white bg-red-600 border-l border-gray-200 rounded-md font-geologica hover:bg-red-500 hover:scale-110 hover:text-white">Back</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Main modal -->

                        <!--Button for Next/Back-->
                            <div class="flex flex-row justify-center">
                                <a onclick="selected(id = 3)" href="#venueselection" type="button" class="px-3 py-2 font-extrabold text-white duration-500 bg-gray-800 border-r border-gray-100 font-geologica rounded-l-md hover:bg-green-500 hover:text-white hover:scale-110">
                                <div class="flex flex-row align-middle">
                                    <svg class="w-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                    <p class="ml-2">Prev</p>
                                </div>
                                </a>
                                <button type="button" id="confirmsubmitbtn"  data-modal-target="default-modal" onclick="confirmationbutton()" data-modal-toggle="default-modal" class="px-3 py-2 font-extrabold text-white duration-500 bg-green-600 border-l border-gray-200 font-geologica rounded-r-md hover:bg-green-500 hover:text-white hover:scale-110">
                                <div class="flex flex-row align-middle">
                                    <span class="mr-2">Submit</span>
                                </div>
                                </button>
                            </div>
                        <!--Button for Next/Back-->
                    </div>
                </div>
            </div>
        </section>
      <!--Date & Time Selection Section-->
    </div>

    <script>
      var calendar = document.getElementById('calendar');
      var confirmationModal = document.getElementById('confirmation-modal')
      var personal_details = document.getElementById('personal-details');
      var packages = document.getElementById('packages-details');
      var events = document.getElementById('events-details');
      var others = document.getElementById('others-details');
      var mailformat = `/^w+([.-]?w+)*@w+([.-]?w+)*(.w{2,3})+$/`;
      var scheduledate = document.getElementById('scheduledate');
      var text1 = document.getElementById('nav-personal-information'); 
      var text2 = document.getElementById('nav-packages'); 
      var text3 = document.getElementById('nav-venues'); 
      var text4 = document.getElementById('nav-time-and-date'); 
        // // Get current date
        var date = new Date();
        document.getElementById('submit-time').value = `${date.getMonth()}/${date.getDate()}/${date.getFullYear()}  ${date.getHours()}:${date.getMinutes()}`; 
        // Add five days to current date
        var yearStart = date.setDate(date.getDate() + 21);
        var yearEnd = date.setFullYear(date.getFullYear() + 1);

        
    

        //personal details
        function validateEmail(email) {
              var atPos = email.indexOf("@");
              var dotPos = email.lastIndexOf(".");
              return atPos > 0 && dotPos > atPos + 1 && dotPos < email.length - 1;
         }
         function containsSpecialChars(str) {
          const specialChars = /[`!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/;
            if(!specialChars.test(str)){
              return /[0-9]/.test(str);
            }
            return specialChars.test(str);
        }

        function selectInputColor(){
          if(phonenumber.value.length != 10){
              phonenumber.classList.add('border-2', 'border-red-500');
            }else{
              phonenumber.classList.remove('border-2', 'border-red-500');
            }
            if(firstname.value.trim().length === 0 || firstname.value.length == 0  || containsSpecialChars(firstname.value)){
              firstname.classList.add('border-2', 'border-red-500');
            }else{
              firstname.classList.remove('border-2', 'border-red-500');
            }
            if(lastname.value.trim().length === 0 && lastname.value.length == 0 || containsSpecialChars(lastname.value)){
              lastname.classList.add('border-2', 'border-red-500');
            }else{
              lastname.classList.remove('border-2', 'border-red-500');
            }
            if(address.value.trim().length === 0 && address.value.length <= 4){
              address.classList.add('border-2', 'border-red-500');
            }else{
              address.classList.remove('border-2', 'border-red-500');
            }
            if(email.value.indexOf("@") == -1 || email.value.length <= 7 || email.value.trim().length === 0 || !validateEmail(email.value)){
              email.classList.add('border-2', 'border-red-500');
            }else{
              email.classList.remove('border-2', 'border-red-500');
            }
        }
        //packages
        function enablenext(){
          // alert(document.getElementById('package-selected').value)
          document.getElementById('packagenextbtn').disabled = false;
            
        }
        
        var venue = ""

        //venue
        function venueselected(val){ 
          switch (val) {
            case 1:
              venue = 'Restaurant'
              
              document.getElementById('restaurant-selected').classList.remove('hidden');
              document.getElementById('event-hall-selected').classList.add('hidden');
              document.getElementById('pool-selected').classList.add('hidden');
              document.getElementById('additionalguestRestaurant').value = 0;
              document.getElementById('additionalguestEventHall').value = 0;
              document.getElementById('additionalguestPoolArea').value = 0;
              document.getElementById('eventnextbutton').disabled = false;
              
              break;
            case 2:
              venue = 'Event Hall'
              
              document.getElementById('pool-selected').classList.add('hidden');
              document.getElementById('event-hall-selected').classList.remove('hidden');
              document.getElementById('restaurant-selected').classList.add('hidden');
              document.getElementById('additionalguestRestaurant').value = 0;
              document.getElementById('additionalguestEventHall').value = 0;
              document.getElementById('additionalguestPoolArea').value = 0;
              document.getElementById('eventnextbutton').disabled = false;

            break;
            case 3:
              venue = 'Pool Area'
              
              document.getElementById('pool-selected').classList.remove('hidden');
              document.getElementById('event-hall-selected').classList.add('hidden');
              document.getElementById('restaurant-selected').classList.add('hidden');
              document.getElementById('additionalguestRestaurant').value = 0;
              document.getElementById('additionalguestEventHall').value = 0;
              document.getElementById('additionalguestPoolArea').value = 0;
              document.getElementById('eventnextbutton').disabled = false;
            default:

            break;

          }
        }
        

        

        const eventnextbutton = document.getElementById("eventnextbutton");
        eventnextbutton.addEventListener("click", checkadditionalguess);
        function checkadditionalguess(){
  
              var additionalguestRestaurant = document.getElementById('additionalguestRestaurant');
              var additionalguestEventHall= document.getElementById('additionalguestEventHall')
              var additionalguestPoolArea = document.getElementById('additionalguestPoolArea')

              if(additionalguestRestaurant.value == "" || additionalguestRestaurant.value > 50 || additionalguestEventHall.value == "" || additionalguestEventHall.value > 50 || additionalguestPoolArea.value == "" || additionalguestPoolArea.value > 50  ){
                alert('Additional guess should be 50 and below')

                // additionalguestRestaurant.value = 0;
                // additionalguestEventHall.value = 0;
                // additionalguestPoolArea.value = 0;
                // if(additionalguestRestaurant.value == "" || additionalguestRestaurant.value > 50 ){
                //   additionalguestRestaurant.classList.add('border-2', 'border-red-500');
                // }else{
                //   additionalguestRestaurant.classList.remove('border-2', 'border-red-500');
                // }
                // if(additionalguestEventHall.value == "" || additionalguestEventHall.value > 50){
                //   additionalguestEventHall.classList.add('border-2', 'border-red-500');
                // }else{
                //   additionalguestEventHall.classList.remove('border-2', 'border-red-500');
                // }
                // if(additionalguestPoolArea.value == "" || additionalguestPoolArea.value > 50 ){
                //   additionalguestPoolArea.classList.add('border-2', 'border-red-500');
                // }else{
                //   additionalguestPoolArea.classList.remove('border-2', 'border-red-500');
                // }
                
                // selected(id = 3)
              }else{
                // additionalguestRestaurant.classList.remove('border-2', 'border-red-500');
                
                selected(id = 4)
              }
              
            // confirmationModal.classList.remove('hidden')
            // confirmationModal.innerHTML = text;

        }
        
        function addonselected(){
          // console.log(document.getElementById('venueaddon'));
        }
        function checkfirstname(){
          if(firstname.value.trim().length === 0 || firstname.value.length == 0  || containsSpecialChars(firstname.value)){
    
              firstname.classList.add('border-2', 'border-red-500');
            }else{
              firstname.classList.remove('border-2', 'border-red-500');
            }
        }
        function checklastname(){
          if(lastname.value.trim().length === 0 && lastname.value.length == 0 || containsSpecialChars(lastname.value)){
              lastname.classList.add('border-2', 'border-red-500');
            }else{
              lastname.classList.remove('border-2', 'border-red-500');
            }
        }
        function checkaddress(){
          if(address.value.trim().length === 0 && address.value.length <= 4){
              address.classList.add('border-2', 'border-red-500');
            }else{
              address.classList.remove('border-2', 'border-red-500');
            }
        }
        function checkphonenumber(){
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
          if(email.value.indexOf("@") == -1 || email.value.length <= 7 || email.value.trim().length === 0 || !validateEmail(email.value)){
              email.classList.add('border-2', 'border-red-500');
            }else{
              email.classList.remove('border-2', 'border-red-500');
            }
        }
              packages.classList.add("hidden")
              events.classList.add("hidden")
              others.classList.add("hidden")
              text2.disabled = true;
              text2.classList.add('hidden')
              text3.disabled = true;
              text3.classList.add('hidden')
              text4.disabled = true;
              text4.classList.add('hidden')

        function selected(id){
          switch (id) {
            case 1:
              personal_details.classList.remove("hidden");
              packages.classList.add("hidden")
              events.classList.add("hidden")
              others.classList.add("hidden")
              text2.disabled = true;
              text3.disabled = true;
              text4.disabled = true;
            break;
            case 2:

              if(phonenumber.value.length != 10){
                selectInputColor()
                setTimeout(() => {
                  alert('Please Fill the missing fields')
                }, 100);
                return id = 1;
              }
              if(firstname.value.trim().length === 0 || firstname.value.length == 0 || containsSpecialChars(firstname.value)){
                selectInputColor()
                setTimeout(() => {
                  alert('Please Fill the missing fields')
                }, 100);
                return id = 1;
              }
              if(lastname.value.trim().length === 0 && lastname.value.length == 0 || containsSpecialChars(lastname.value)){
                selectInputColor()
                setTimeout(() => {
                  alert('Please Fill the missing fields')
                }, 100);
                return id = 1;
              }
              if(address.value.trim().length === 0 && address.value.length <= 4){
                selectInputColor()
                setTimeout(() => {
                  alert('Please Fill the missing fields')
                }, 100);
                return id = 1;
              }
              
              if(email.value.indexOf("@") == -1 || email.value.length<= 7 && email.value.trim().length === 0 || email.value.match(mailformat) || !validateEmail(email.value) ){
                selectInputColor()
                setTimeout(() => {
                  alert('Please Fill the missing fields')
                }, 100);
                return id = 1;
              }
  
              console.log(document.getElementById('email').value)
              selectInputColor()
              personal_details.classList.add("hidden")
              packages.classList.remove("hidden")
              events.classList.add("hidden")
              others.classList.add("hidden")
              text2.classList.remove('hidden');
              text1.classList.add('text-gray-700'); //--< 77 to80 need fix
              // formDatails()

              text2.classList.remove('hidden');
              text2.disabled = false;
  
            break;
            case 3:
            if(phonenumber.value.length != 10){
                selectInputColor()

                return id = 1;
              }
              if(firstname.value.trim().length === 0 || firstname.value.length == 0 || containsSpecialChars(firstname.value)){
                selectInputColor()
                return id = 1;
              }
              if(lastname.value.trim().length === 0 && lastname.value.length == 0 || containsSpecialChars(lastname.value)){
                selectInputColor()
                return id = 1;
              }
              if(address.value.trim().length === 0 && address.value.length <= 4){
                selectInputColor()
                return id = 1;
              }
              
              if(email.value.indexOf("@") == -1 || email.value.length<= 7 && email.value.trim().length === 0 || email.value.match(mailformat) || !validateEmail(email.value) ){
                selectInputColor()
                return id = 1;
              }
            
              personal_details.classList.add("hidden")
              packages.classList.add("hidden")
              events.classList.remove("hidden")
              others.classList.add("hidden")

              text3.classList.remove('hidden');
              text3.disabled = false;
              
            break;
            case 4:
            if(phonenumber.value.length != 10){
                selectInputColor()
                return id = 1;
              }
              if(firstname.value.trim().length === 0 || firstname.value.length == 0 || containsSpecialChars(firstname.value)){
                selectInputColor()
                return id = 1;
              }
              if(lastname.value.trim().length === 0 && lastname.value.length == 0 || containsSpecialChars(lastname.value)){
                selectInputColor()
                return id = 1;
              }
              if(address.value.trim().length === 0 && address.value.length <= 4){
                selectInputColor()
                return id = 1;
              }
              
              if(email.value.indexOf("@") == -1 || email.value.length<= 7 && email.value.trim().length === 0 || email.value.match(mailformat) || !validateEmail(email.value) ){
                selectInputColor()
                return id = 1;
              }



              text4.classList.remove('hidden');
              text4.disabled = false;
              //calendar
              $(document).ready(function(){
              var events = @json($calendar);
              const iseditable = events.map(function (element){
                  return element.editable;
              })    
                                                        
              $('#calendar').fullCalendar({
                    events: events,
                    selectable : true,
                    selectHelper: false,
                    contentHeight:"auto",
                    longPressDelay: 0000,
                    eventLongPressDelay:0000,
                    selectLongPressDelay: 0000,
                    select: function(start , end , allDays){
                        document.getElementById('scheduledate').value = moment(start).format('YYYY-MM-DD');
                        enablesumbit()
                        var mEnd = $.fullCalendar.moment(end);
                        var mStart = $.fullCalendar.moment(start);
                    },
                    validRange:{
                    
                    start: yearStart,
                    end: yearEnd
              
                    },
                    selectAllow: function(selectInfo){
                        //  create a day
                        var oneDay = 24 * 60 * 60 * 1000;
                        var startDay = selectInfo.start;
                        //  FullCalendar always gives next next day of select end day, so do minus one day
                        var endDay = selectInfo.end - oneDay;
                        var count = Math.round(Math.abs((startDay - endDay) / oneDay));
                        //  starts at 0, so add to start at 1
                        var dayCount = (count + 1);
                        if(dayCount < 2){
                            return true;
                        }else{
                            return false;
                        }
                    }
                })
        
                });

              personal_details.classList.add("hidden")
              packages.classList.add("hidden")
              events.classList.add("hidden")
              others.classList.remove("hidden")
            break;
          }
        };

       function confirmationbutton(){
        var firstname = document.getElementById('firstname');
        var lastname = document.getElementById('lastname');
        var address = document.getElementById('address');
        var email = document.getElementById('email');
        var phonenumber = document.getElementById('phonenumber');
        var package = document.querySelector('input[name = "package"]:checked')
        var venue = document.querySelector('input[name = "venue"]:checked')
        var scheduletime = document.getElementById('scheduletime')
        var scheduledate = document.getElementById('scheduledate')


        var additionalguestRestaurant = document.getElementById('additionalguestRestaurant').value;
        var additionalguestEventHall= document.getElementById('additionalguestEventHall').value
        var additionalguestPoolArea = document.getElementById('additionalguestPoolArea').value


        var packageselected = '';
        switch (package.value) {
          case "package_a":
            document.getElementById('confirm-package').innerHTML = 'Package A';
            break;
          case "package_b":
            document.getElementById('confirm-package').innerHTML = 'Package B';
          break;
          case "package_c":
            document.getElementById('confirm-package').innerHTML = 'Package C';
          break;
          case "package_d":
            document.getElementById('confirm-package').innerHTML = 'Package D';
          break;
          case "package_e":
            document.getElementById('confirm-package').innerHTML = 'Package E';
          break;
          default:
            break;
        }

        
        switch (venue.value) {
          case "event_hall":
            document.getElementById('confirm-venue').innerHTML = 'Event Hall';
            break;
          case "restaurant":
            document.getElementById('confirm-venue').innerHTML = 'Restaurant';
          break;
          case "gazebo":
            document.getElementById('confirm-venue').innerHTML = 'Gazebo';
          break;
          case "pool":
            document.getElementById('confirm-venue').innerHTML = 'Pool';
          break;
          default:
          document.getElementById('confirm-venue').innerHTML = 'Pool';
            break;
        }
        document.getElementById('confirm-time-and-date').innerHTML = `${scheduledate.value} ${scheduletime.value}`
        
        document.getElementById('confirm-additionalguess').innerHTML = Math.max(additionalguestEventHall, additionalguestPoolArea , additionalguestRestaurant)
        document.getElementById('confirm-fullname').innerHTML = `${firstname.value} ${lastname.value}`
        document.getElementById('confirm-address').innerHTML = `${address.value}`
        document.getElementById('confirm-phone').innerHTML = `${phonenumber.value}`
        document.getElementById('confirm-email').innerHTML = `${email.value}`
      



       }

       function enablesumbit(){
          //dito ko ilalagay yung data sa db
          var scheduledateevent = @json($scheduledateevent);
          var reservationevent = @json($reservationevent);
          var isokay = true;
                scheduledateevent.forEach(element => {
                    reservationevent.forEach(data => {
                        if(element.x == data.scheduledate && isokay){                            
                            if(isokay){
                                if(document.getElementById('scheduledate').value === element.x && element.y === 3 ){
                                    document.getElementById('confirmsubmitbtn').classList.remove('bg-green-600');
                                    document.getElementById('confirmsubmitbtn').classList.add('bg-red-600');
                                    document.getElementById('confirmsubmitbtn').innerHTML = 'Full';
                                    document.getElementById('confirmsubmitbtn').disabled = true;
                                    isokay = false;
                                }else if(document.getElementById('scheduledate').value === element.x && element.y <= 2 && data.scheduletime === document.getElementById('scheduletime').value){
                                    document.getElementById('confirmsubmitbtn').classList.remove('bg-green-600');
                                    document.getElementById('confirmsubmitbtn').classList.add('bg-red-600');
                                    document.getElementById('confirmsubmitbtn').innerHTML = 'Occupied';
                                    document.getElementById('confirmsubmitbtn').disabled = true;
                                    isokay = false;
                                }
                                else{
                                  document.getElementById('confirmsubmitbtn').classList.add('bg-green-600');
                                    document.getElementById('confirmsubmitbtn').classList.remove('bg-red-600');
                                    document.getElementById('confirmsubmitbtn').innerHTML = 'Submit';
                                    document.getElementById('confirmsubmitbtn').disabled = false;
                                }
                            }
                    }
                });

            });

             if(phonenumber.value.length != 10){
                selectInputColor()
              }
              else if(firstname.value.trim().length === 0 || firstname.value.length == 0 || containsSpecialChars(firstname.value)){
                selectInputColor()
              }
              else if(lastname.value.trim().length === 0 && lastname.value.length == 0 || containsSpecialChars(lastname.value)){
                selectInputColor()
              }
              else if(address.value.trim().length === 0 && address.value.length <= 4){
                selectInputColor()
              }
              else if(email.value.indexOf("@") == -1 || email.value.length<= 7 && email.value.trim().length === 0 || email.value.match(mailformat) || !validateEmail(email.value) ){
                selectInputColor()
              }else if(scheduledate == null || scheduledate == undefined || scheduledate == ""){
                document.getElementById('submitbtn').disabled = true;
              }
               else{
              
                document.getElementById('submitbtn').disabled = false;                
              }
              
       
       }
       $( "form" ).on( "submit", function( event ) {
        document.getElementById('submitbtn').classList.add('hidden');  
       
      }
       );
       
    </script>

  <script> import {Input, Timepicker, initTE,} from "tw-elements"; initTE({ Input, Timepicker });</script>
  <script type="text/javascript" src="../node_modules/tw-elements/dist/js/tw-elements.umd.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/datepicker.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
  </body>
</html>


