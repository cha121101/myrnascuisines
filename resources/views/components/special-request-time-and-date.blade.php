    <!--Date & Time Selection Section-->
        <section>
            <div class="py-2 max-w-screen bg-slate-800">
                <div class="m-2 md:m-[3rem]">
                    <div class="pb-10 shadow-xl bg-slate-100 rounded-xl" id="time&date">
                        <div class="w-full px-4 py-16">
                            <p class="mb-4 text-2xl font-bold text-gray-800 text-left font-Geologica">Time & Date Selection*</p>
                            <div class="grid lg:grid-cols-4">

                                <!--Calendar-->
                                    <div class="relative grid col-span-1 gap-4 my-5 2xl:grid-cols-2 md:col-span-2 lg:mx-5 bg-slate-100 rounded-xl ring-red-600 ring-2">
                                        <div class="flex justify-center col-span-2 m-2">
                                            <input type="date" name="scheduledate" id="scheduledate" onchange="enablesumbit()" hidden >
                                            <div id="calendar"  style="height: full; width: full; "></div>
                                        </div>
                                    </div>
                                <!--Calendar-->

                                <!--Time-->
                                    <div class="grid justify-center col-span-2 mt-3 text-center place-content-start">
                                        <div class="relative mb-10 text-center" data-te-with-icon="false" data-te-timepicker-init data-te-input-wrapper-initid="timepicker-just-input">
                                            <label for="countries" class="block mb-2 text-lg font-medium text-gray-900">Select Time*</label>
                                            <select id="scheduletime" name="scheduletime" class="border border-gray-300 text-xl rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5 px-12 bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
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

                        <!--Button for Next/Back-->
    
                            <div class="flex flex-row justify-center">
                                <a onclick="selected(id = 3)" href="#venueselection" type="button" class="px-3 py-2 text-white bg-gray-800 border-r border-gray-100 rounded-l-md hover:bg-green-500 hover:text-white hover:scale-110 duration-500">
                                <div class="flex flex-row align-middle">
                                    <svg class="w-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                    <p class="ml-2">Prev</p>
                                </div>
                                </a>
                                <button type="submit" id="submitbtn" onclick="checkall()" disabled class="px-3 py-2 text-white bg-green-600 border-l border-gray-200 rounded-r-md hover:bg-green-500 hover:text-white hover:scale-110 duration-500">
                                <div class="flex flex-row align-middle">
                                    <span class="mr-2">Submit</span>
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
    <!--Date & Time Selection Section-->

    