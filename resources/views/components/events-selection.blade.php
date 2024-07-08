
    <!--Venue Selection Section-->
        <section>
            <div class="py-2 max-w-screen bg-slate-800">
                <div class="m-2 md:m-[3rem]">
                    <div class="pb-10 overflow-hidden shadow-xl bg-slate-100 rounded-xl" id="venueselection">
                        <div class="w-full px-8 py-16">
                            <div class="flex items-center justify-center mb-16">
                                <div class="mx-auto">
                                    <div class="grid gap-5">

                                        <!--Venue Selection-->
                                            <div class="grid content-center justify-center md:col-span-4 2xl:col-span-1 place-content-center">
                                                <p class="mb-4 text-3xl font-bold text-center text-gray-800 md:text-left font-Geologica">Venue Selection*</p>
                                            
                                                <div class="flex">
                                                    <div class="grid gap-5 divide-y-4 divide-red-700">

                                                        <!--Selection-->
                                                            <div class="grid gap-5 mx-auto my-5 md:grid-cols-2 lg:grid-cols-3 justify-items">
                                                                <!--Restaurant Selection-->
                                                                    <label class="cursor-pointer">
                                                                        <input type="radio" onchange="venueselected(1)" class="sr-only peer" name="venue" id="venue-selected" value="Restaurant" />
                                                                        <div class="max-w-xs h-full lg:my-[3rem] mx-auto overflow-hidden bg-white rounded-lg shadow-lg ring-2 ring-transparent transition-all hover:shadow  peer-checked:text-sky-400 peer-checked:ring-blue-400 peer-checked:ring-offset-2">
                                                                            <div class="flex items-center justify-between px-6 py-4 bg-gradient-to-r from-red-400 to-red-600">
                                                                                <h1 class="text-3xl font-semibold text-white transition duration-300 font-Geologica group">Restaurant</h1>
                                                                                <div>
                                                                                    <svg width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="m10.6 13.8l-2.175-2.175q-.275-.275-.675-.275t-.7.3q-.275.275-.275.7q0 .425.275.7L9.9 15.9q.275.275.7.275q.425 0 .7-.275l5.675-5.675q.275-.275.275-.675t-.3-.7q-.275-.275-.7-.275q-.425 0-.7.275ZM12 22q-2.075 0-3.9-.788q-1.825-.787-3.175-2.137q-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175q1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138q1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175q-1.35 1.35-3.175 2.137Q14.075 22 12 22Z" /></svg>
                                                                                </div>
                                                                            </div>
                                                                            <div class="px-6 py-4">
                                                                                <ul class="mx-2 list-disc marker:text-red-600 font-Geologica">
                                                                                    <li><p><span class="text-xl text-slate-700"><b>Price :</b>₱{{ $restaurant->price}}</span></p></li>
                                                                                    <li><p><span class="text-xl text-slate-700"><b>Time :</b> {{ $restaurant->time  }}</span></p></li>
                                                                                    <li><p><span class="text-xl text-slate-700"><b>Capacity :</b>{{ $restaurant->capacity }} pax</span></p></li>
                                                                                    <li><p><span class="text-xl text-slate-700"><b>Amenities :</b> {{ $restaurant->amenities }}</span></p></li>
                                                                                    <li><p><span class="text-xl text-slate-700"><b>Additional Fee per exceeding Hour :</b> ₱{{ $restaurant->per_hour }}</span></p></li>
                                                                                </ul>
                                                                            </div>
                                                                            
                                                                        </div>
                                                                       
                                                                    </label>
                                                                <!--Restaurant Selection-->

                                                                <!--Event hall Selection-->
                                                                    <label class="cursor-pointer">
                                                                        <input type="radio" onchange="venueselected(2)" class="sr-only peer" name="venue" id="venue-selected" value="Event Hall"/>
                                                                        <div class="h-full max-w-xs mx-auto overflow-hidden transition-all bg-white rounded-lg shadow-lg ring-2 ring-transparent hover:shadow peer-checked:text-sky-400 peer-checked:ring-blue-400 peer-checked:ring-offset-2">
                                                                            <div class="flex items-center justify-between px-6 py-4 bg-gradient-to-r from-red-400 to-red-600">
                                                                                <h1 class="text-3xl font-semibold text-white transition duration-300 font-Geologica group">Event Hall</h1>
                                                                                <div>
                                                                                    <svg width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="m10.6 13.8l-2.175-2.175q-.275-.275-.675-.275t-.7.3q-.275.275-.275.7q0 .425.275.7L9.9 15.9q.275.275.7.275q.425 0 .7-.275l5.675-5.675q.275-.275.275-.675t-.3-.7q-.275-.275-.7-.275q-.425 0-.7.275ZM12 22q-2.075 0-3.9-.788q-1.825-.787-3.175-2.137q-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175q1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138q1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175q-1.35 1.35-3.175 2.137Q14.075 22 12 22Z" /></svg>
                                                                                </div>
                                                                            </div>
                                                                            <div class="px-6 py-4">
                                                                                <ul class="mx-2 list-disc marker:text-red-600 font-Geologica">
                                                                                    <li><p><span class="text-xl text-slate-700"><b>Price :</b> ₱{{ $event_hall->price }}</span></p></li> 
                                                                                    <li><p><span class="text-xl text-slate-700"><b>Time :</b>{{$event_hall->time }}</span></p></li>
                                                                                    <li><p><span class="text-xl text-slate-700"><b>Capacity :</b>{{ $event_hall->capacity }}  pax</span></p></li>
                                                                                    <li><p><span class="text-xl text-slate-700"><b>Amenities :</b> {{ $event_hall->amenities }}</span></p></li>
                                                                                    <li><p><span class="text-xl text-slate-700"><b>Additional Fee per exceeding Hour :</b>₱{{ $event_hall->per_hour }}</span></p></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </label>
                                                                <!--Event hall Selection-->

                                                                <!--Pool Selection-->
                                                                    <label class="cursor-pointer sm:col-span-2 lg:col-span-1">
                                                                        <input type="radio" onchange="venueselected(3)"  class="sr-only peer" name="venue" id="venue-selected"  value="Pool Area" /> 
                                                                        <div class="max-w-xs lg:my-[3rem] h-full mx-auto overflow-hidden bg-white rounded-lg shadow-lg ring-2 ring-transparent transition-all hover:shadow peer-checked:text-sky-400 peer-checked:ring-blue-400 peer-checked:ring-offset-2">
                                                                            <div class="flex items-center justify-between px-6 py-4 bg-red-600 bg-gradient-to-r">
                                                                                <h1 class="text-3xl font-semibold text-white transition duration-300 font-Geologica group">Pool Area</h1>
                                                                                <div>
                                                                                    <svg width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="m10.6 13.8l-2.175-2.175q-.275-.275-.675-.275t-.7.3q-.275.275-.275.7q0 .425.275.7L9.9 15.9q.275.275.7.275q.425 0 .7-.275l5.675-5.675q.275-.275.275-.675t-.3-.7q-.275-.275-.7-.275q-.425 0-.7.275ZM12 22q-2.075 0-3.9-.788q-1.825-.787-3.175-2.137q-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175q1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138q1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175q-1.35 1.35-3.175 2.137Q14.075 22 12 22Z" /></svg>
                                                                                </div>
                                                                            </div>
                                                                            <div class="px-6 py-4">
                                                                                <ul class="mx-2 list-disc marker:text-red-600 font-Geologica">
                                                                                    <li><p><span class="text-xl text-slate-700"><b>Price :</b> ₱{{ $pool->price }}</span></p></li>
                                                                                    <li><p><span class="text-xl text-slate-700"><b>Time :</b>{{ $pool->time }}</span></p></li>
                                                                                    <li><p><span class="text-xl text-slate-700"><b>Capacity :</b>{{ $pool->capacity }} pax</span></p></li>
                                                                                    <li><p><span class="text-xl text-slate-700"><b>Amenities :</b> {{ $pool->amenities }}</span></p></li>
                                                                                    <li><p><span class="text-xl text-slate-700"><b>Additional Fee per exceeding Hour :</b> ₱500</span></p></li>
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
                                                                                    <input type="checkbox" class="sr-only peer" name="venueaddon[]"  value="Event Hall"/>
                                                                                    <div class="h-full max-w-xs mx-auto overflow-hidden text-red-600 transition-all bg-white rounded-lg shadow-lg ring-2 ring-transparent hover:shadow peer-checked:text-sky-400 peer-checked:ring-blue-400 peer-checked:ring-offset-2">
                                                                                        <div class="flex items-center justify-between px-6 py-4 bg-red-600 bg-gradient-to-r">
                                                                                            <h1 class="text-3xl font-semibold text-white transition duration-300 font-Geologica group">Event Hall</h1>
                                                                                            <div>
                                                                                                <svg width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="m10.6 13.8l-2.175-2.175q-.275-.275-.675-.275t-.7.3q-.275.275-.275.7q0 .425.275.7L9.9 15.9q.275.275.7.275q.425 0 .7-.275l5.675-5.675q.275-.275.275-.675t-.3-.7q-.275-.275-.7-.275q-.425 0-.7.275ZM12 22q-2.075 0-3.9-.788q-1.825-.787-3.175-2.137q-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175q1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138q1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175q-1.35 1.35-3.175 2.137Q14.075 22 12 22Z" /></svg>
                                                                                            </div>
                                                                                        </div>
                                                                                        
                                                                                        <div class="px-6 py-4">
                                                                                            <ul class="mx-2 list-disc marker:text-red-600 font-Geologica">
                                                                                                <li><p><span class="text-xl text-slate-700"><b>Price :</b> ₱{{ $event_hall->price }}</span></p></li> 
                                                                                                <li><p><span class="text-xl text-slate-700"><b>Time :</b>{{$event_hall->time }}</span></p></li>
                                                                                                <li><p><span class="text-xl text-slate-700"><b>Capacity :</b>{{ $event_hall->capacity }}  pax</span></p></li>
                                                                                                <li><p><span class="text-xl text-slate-700"><b>Amenities :</b> {{ $event_hall->amenities }}</span></p></li>
                                                                                                <li><p><span class="text-xl text-slate-700"><b>Additional Fee per exceeding Hour :</b>₱{{ $event_hall->per_hour }}</span></p></li>
                                                                                            </ul>
                                                                                        </div>
                                                                                        
                                                                                    </div>
                                                                                </label>
                                                                            <!--Event Hall Selection Option (IF RESTAURANT SELECTED)-->

                                                                            <!--Pool Selection Option (IF RESTAURANT SELECTED)-->
                                                                                <label class="cursor-pointer">
                                                                                    <input type="checkbox" class="sr-only peer" name="venueaddon[]"  value="Pool area" /> 
                                                                                    <div class="h-full max-w-xs mx-auto overflow-hidden text-red-600 transition-all bg-white rounded-lg shadow-lg ring-2 ring-transparent hover:shadow peer-checked:text-sky-400 peer-checked:ring-blue-400 peer-checked:ring-offset-2">
                                                                                        <div class="flex items-center justify-between px-6 py-4 bg-red-600 bg-gradient-to-r">
                                                                                            <h1 class="text-3xl font-semibold text-white transition duration-300 font-Geologica group">Pool Area</h1>
                                                                                            <div>
                                                                                                <svg width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="m10.6 13.8l-2.175-2.175q-.275-.275-.675-.275t-.7.3q-.275.275-.275.7q0 .425.275.7L9.9 15.9q.275.275.7.275q.425 0 .7-.275l5.675-5.675q.275-.275.275-.675t-.3-.7q-.275-.275-.7-.275q-.425 0-.7.275ZM12 22q-2.075 0-3.9-.788q-1.825-.787-3.175-2.137q-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175q1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138q1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175q-1.35 1.35-3.175 2.137Q14.075 22 12 22Z" /></svg>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="px-6 py-4">
                                                                                            <ul class="mx-2 list-disc marker:text-red-600 font-Geologica">
                                                                                                <li><p><span class="text-xl text-slate-700"><b>Price :</b>₱{{ $pool->price}}</span></p></li>
                                                                                                <li><p><span class="text-xl text-slate-700"><b>Time :</b> {{ $pool->time  }}</span></p></li>
                                                                                                <li><p><span class="text-xl text-slate-700"><b>Capacity :</b>{{ $pool->capacity }} pax</span></p></li>
                                                                                                <li><p><span class="text-xl text-slate-700"><b>Amenities :</b> {{ $pool->amenities }}</span></p></li>
                                                                                                <li><p><span class="text-xl text-slate-700"><b>Additional Fee per exceeding Hour :</b> ₱{{ $pool->per_hour }}</span></p></li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </label>
                                                                            <!--Pool Selection Option (IF RESTAURANT SELECTED)-->

                                                                            <!--Additional Pax-->
                                                                                <div class="mt-5 text-center md:mt-10 sm:col-span-2 2xl:col-span-1">
                                                                                    
                                                                                    <p class="mb-4 text-2xl font-bold text-center text-gray-800 md:text-left font-Geologica">Additional Guest</p>
                                                                                    <input type="number" min="0" max="50" name="additionalguestRestaurant" 
                                                                                    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                                                    onkeydown="javascript: return event.keyCode == 69 ? false : true"
                                                                                    maxlength="2"
                                                                                    placeholder="Guest" id="additionalguestRestaurant" class="py-1 border border-gray-400 px-full">  
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
                                                                                    <input type="checkbox" class="sr-only peer" name="venueaddon[]"  value="Restaurant"/>
                                                                                    <div class="h-full max-w-xs mx-auto overflow-hidden text-red-600 transition-all bg-white rounded-lg shadow-lg ring-2 ring-transparent hover:shadow peer-checked:text-sky-400 peer-checked:ring-blue-400 peer-checked:ring-offset-2">
                                                                                        <div class="flex items-center justify-between px-6 py-4 bg-red-600 bg-gradient-to-r">
                                                                                            <h1 class="text-3xl font-semibold text-white transition duration-300 font-Geologica group">Restaurant</h1>
                                                                                            <div>
                                                                                                <svg width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="m10.6 13.8l-2.175-2.175q-.275-.275-.675-.275t-.7.3q-.275.275-.275.7q0 .425.275.7L9.9 15.9q.275.275.7.275q.425 0 .7-.275l5.675-5.675q.275-.275.275-.675t-.3-.7q-.275-.275-.7-.275q-.425 0-.7.275ZM12 22q-2.075 0-3.9-.788q-1.825-.787-3.175-2.137q-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175q1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138q1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175q-1.35 1.35-3.175 2.137Q14.075 22 12 22Z" /></svg>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="px-6 py-4">
                                                                                            <ul class="mx-2 list-disc marker:text-red-600 font-Geologica">
                                                                                                <li><p><span class="text-xl text-slate-700"><b>Price :</b>₱{{ $restaurant->price}}</span></p></li>
                                                                                                <li><p><span class="text-xl text-slate-700"><b>Time :</b> {{ $restaurant->time  }}</span></p></li>
                                                                                                <li><p><span class="text-xl text-slate-700"><b>Capacity :</b>{{ $restaurant->capacity }} pax</span></p></li>
                                                                                                <li><p><span class="text-xl text-slate-700"><b>Amenities :</b> {{ $restaurant->amenities }}</span></p></li>
                                                                                                <li><p><span class="text-xl text-slate-700"><b>Additional Fee per exceeding Hour :</b> ₱{{ $restaurant->per_hour }}</span></p></li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </label>
                                                                            <!--Restaurant Selection Option (IF EVENT HALL SELECTED)-->

                                                                            <!--Gazebo Selection Option (IF EVENT HALL SELECTED)-->
                                                                                <label class="cursor-pointer">
                                                                                    <input type="checkbox" class="sr-only peer" name="venueaddon[]"  value="Gazebo" />
                                                                                    <div class="h-full max-w-xs mx-auto overflow-hidden text-red-600 transition-all bg-white rounded-lg shadow-lg ring-2 ring-transparent hover:shadow peer-checked:text-sky-400 peer-checked:ring-blue-400 peer-checked:ring-offset-2">
                                                                                        <div class="flex items-center justify-between px-6 py-4 bg-red-600 bg-gradient-to-r">
                                                                                            <h1 class="text-3xl font-semibold text-white transition duration-300 font-Geologica group">Gazebo</h1>
                                                                                            <div>
                                                                                                <svg width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="m10.6 13.8l-2.175-2.175q-.275-.275-.675-.275t-.7.3q-.275.275-.275.7q0 .425.275.7L9.9 15.9q.275.275.7.275q.425 0 .7-.275l5.675-5.675q.275-.275.275-.675t-.3-.7q-.275-.275-.7-.275q-.425 0-.7.275ZM12 22q-2.075 0-3.9-.788q-1.825-.787-3.175-2.137q-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175q1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138q1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175q-1.35 1.35-3.175 2.137Q14.075 22 12 22Z" /></svg>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="px-6 py-4">
                                                                                            <ul class="mx-2 list-disc marker:text-red-600 font-Geologica">
                                                                                                <li><p><span class="text-xl text-slate-700"><b>Price :</b>₱{{ $gazebo->price}}</span></p></li>
                                                                                                <li><p><span class="text-xl text-slate-700"><b>Time :</b> {{ $gazebo->time  }}</span></p></li>
                                                                                                <li><p><span class="text-xl text-slate-700"><b>Capacity :</b>{{ $gazebo->capacity }} pax</span></p></li>
                                                                                                <li><p><span class="text-xl text-slate-700"><b>Amenities :</b> {{ $gazebo->amenities }}</span></p></li>
                                                                                                <li><p><span class="text-xl text-slate-700"><b>Additional Fee per exceeding Hour :</b> ₱{{ $gazebo->per_hour }}</span></p></li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </label>
                                                                            <!--Gazebo Selection Option (IF EVENT HALL SELECTED)-->

                                                                            <!--==NEED ACTION==-->

                                                                            <!--Pool Selection Option (IF EVENT HALL SELECTED)-->
                                                                                <label class="cursor-pointer">
                                                                                    <input type="checkbox" class="sr-only peer" name="venueaddon[]"  value="Pool area" /> 
                                                                                    <div class="h-full max-w-xs mx-auto overflow-hidden text-red-600 transition-all bg-white rounded-lg shadow-lg ring-2 ring-transparent hover:shadow peer-checked:text-sky-400 peer-checked:ring-blue-400 peer-checked:ring-offset-2">
                                                                                        <div class="flex items-center justify-between px-6 py-4 bg-red-600 bg-gradient-to-r">
                                                                                            <h1 class="text-3xl font-semibold text-white transition duration-300 font-Geologica group">Pool Area</h1>
                                                                                            <div>
                                                                                                <svg width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="m10.6 13.8l-2.175-2.175q-.275-.275-.675-.275t-.7.3q-.275.275-.275.7q0 .425.275.7L9.9 15.9q.275.275.7.275q.425 0 .7-.275l5.675-5.675q.275-.275.275-.675t-.3-.7q-.275-.275-.7-.275q-.425 0-.7.275ZM12 22q-2.075 0-3.9-.788q-1.825-.787-3.175-2.137q-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175q1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138q1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175q-1.35 1.35-3.175 2.137Q14.075 22 12 22Z" /></svg>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="px-6 py-4">
                                                                                            <ul class="mx-2 list-disc marker:text-red-600 font-Geologica">
                                                                                                <li><p><span class="text-xl text-slate-700"><b>Price :</b>₱{{ $pool->price}}</span></p></li>
                                                                                                <li><p><span class="text-xl text-slate-700"><b>Time :</b> {{ $pool->time  }}</span></p></li>
                                                                                                <li><p><span class="text-xl text-slate-700"><b>Capacity :</b>{{ $pool->capacity }} pax</span></p></li>
                                                                                                <li><p><span class="text-xl text-slate-700"><b>Amenities :</b> {{ $pool->amenities }}</span></p></li>
                                                                                                <li><p><span class="text-xl text-slate-700"><b>Additional Fee per exceeding Hour :</b> ₱{{ $pool->per_hour }}</span></p></li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </label>
                                                                            <!--Pool Selection Option (IF EVENT HALL SELECTED)-->

                                                                            <!--==NEED ACTION==-->

                                                                            <!--Additional Pax-->
                                                                                <div class="mt-5 text-center md:mt-10 2xl:col-span-3">
                                                                                    
                                                                                    <p class="mb-4 text-2xl font-bold text-center text-gray-800 md:text-left font-Geologica">Additional Guest</p>
                                                                                    <input type="number" min="0" max="50" name="additionalguestEventHall" 
                                                                                    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                                                    onkeydown="javascript: return event.keyCode == 69 ? false : true"
                                                                                    maxlength="2"
                                                                                    placeholder="Guest" id="additionalguestEventHall" class="px-2 py-1 border border-gray-400">  
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
                                                                            
                                                                            <p class="mb-4 text-2xl font-bold text-center text-gray-800 md:text-left font-Geologica">Additional Guest</p>
                                                                            <input type="number" min="0" max="50" name="additionalguestPoolArea"
                                                                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                                            onkeydown="javascript: return event.keyCode == 69 ? false : true" 
                                                                            maxlength="2"
                                                                            placeholder="Guest" id="additionalguestPoolArea" class="px-2 py-1 border border-gray-400">
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
                                <textarea type="text" name="specialrequest" id="message" rows="12" class="block p-2.5 w-full text-lg text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Dear customer, Please indicate how many guests you will be having. You can input requests such as theme for the events set-up, and other services that our staff can accommodate."></textarea>
                            </div>
                            <!--Button for Next/Back-->
                                <div class="flex flex-row justify-center">
                                    <button onclick="selected(id = 2)" href="#packageselection" type="button" class="px-3 py-2 text-white duration-500 bg-gray-800 border-r border-gray-100 rounded-l-md hover:bg-green-500 hover:text-white hover:scale-110">
                                    <div class="flex flex-row align-middle">
                                        <svg class="w-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd"></path>
                                        </svg>
                                        <p class="ml-2">Prev</p>
                                    </div>
                                </button>
                                    <button onclick="selected(id = 4)" href="#time&date" disabled type="button" id="eventnextbutton"  class="px-3 py-2 text-white duration-500 bg-gray-800 border-l border-gray-200 rounded-r-md hover:bg-green-500 hover:text-white hover:scale-110">
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
