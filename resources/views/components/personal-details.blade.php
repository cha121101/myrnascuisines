    
    <!--Personal Details Section-->
        <section>
            <div class="py-2">
                <div class="m-2 md:m-[3rem]">
                    <div class="pb-10 overflow-hidden bg-white shadow-2xl rounded-xl" id="personaldetails">
                        <div class="w-full px-3 py-16">
                            <p class="flex mb-4 text-xl font-extrabold text-center text-gray-800 md:text-2xl font-geologica input-icon input-icon-right">Personal Information*</p>

                            <form id action="{{ route('store.pending.event') }}" method="POST"  onkeydown="return event.key != 'Enter';"  >
                                @csrf
                                <input type="text" name="submittime" id="submit-time" hidden>
                                @auth
                                    <input type="text" hidden name="isadmin" value="true">
                                    <input type="text" hidden name="name" value="{{ Auth::user()->name }}">
                                @endauth
                                @guest
                                    <input type="text" hidden  name="isadmin" value="false">
                                @endguest
                                <div class="grid gap-6 mb-6 md:grid-cols-2">
                                    <!--FNAME-->
                                        <div>
                                            <label for="first_name" class="flex text-sm font-extrabold text-left text-black font-nunito input-icon input-icon-right">First name</label>
                                            <input type="text" required name="firstname" id="firstname" onblur="checkfirstname()" class="bg-gray-50 border text-gray-900 font-geologica font-extrabold text-sm md:text-base rounded-lg focus:ring-blue-500  block w-full p-2.5 dark:placeholder-gray-400 dark:focus:ring-blue-500" placeholder="First Name">
                                        </div>
                                    <!--FNAME-->

                                    <!--LNAME-->
                                        <div>
                                            <label for="last_name" class="flex text-sm font-extrabold text-left text-black font-nunito input-icon input-icon-right">Last name</label>
                                            <input type="text" required name="lastname" id="lastname" onblur="checklastname()" class="bg-gray-50 border text-gray-900 font-geologica font-extrabold text-sm md:text-base rounded-lg focus:ring-blue-500  block w-full p-2.5 dark:placeholder-gray-400 dark:focus:ring-blue-500" placeholder="Last Name" >
                                        </div>
                                    <!--LNAME-->

                                    <!--ADDRESS-->
                                        <div>
                                            <label for="address" class="flex text-sm font-extrabold text-left text-black font-nunito input-icon input-icon-right">Address</label>
                                            <input type="text" required name="address"  id="address" onblur="checkaddress()" class="bg-gray-50 border text-gray-900 font-geologica font-extrabold text-sm md:text-base rounded-lg focus:ring-blue-500  block w-full p-2.5 dark:placeholder-gray-400 dark:focus:ring-blue-500" placeholder="Address" >
                                        </div> 
                                    <!--ADDRESS--> 

                                    <!--PHOME NUMBER-->
                                        <div>
                                            <label for="phone" class="flex text-sm font-extrabold text-left text-black font-nunito input-icon input-icon-right">Phone number</label>
                                            <div class="flex items-center">
                                                <p class="mr-2">+63</p><input 
                                                    name="phonenumber"
                                                    type="number" 
                                                    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                    onkeydown="javascript: return event.keyCode == 69 ? false : true"                                                  
                                                    maxlength="10"  
                                                    id="phonenumber" onblur="checkphonenumber()" 
                                                    class="bg-gray-50 border text-gray-900 font-geologica font-extrabold text-sm md:text-base rounded-lg focus:ring-blue-500  block w-full p-2.5 dark:placeholder-gray-400 dark:focus:ring-blue-500">
                                            </div>                                           
                                        </div>
                                    <!--PHOME NUMBER-->
                                </div>
                                <!--Email-->
                                    <div>
                                        <label for="email" class="flex text-sm font-extrabold text-left text-black font-nunito input-icon input-icon-right">Email address</label>
                                        <input type="email" required name="email" id="email" onblur="checkemail()" class="bg-gray-50 border text-gray-900 font-geologica font-extrabold text-sm md:text-base rounded-lg focus:ring-blue-500  block w-full p-2.5 dark:placeholder-gray-400 dark:focus:ring-blue-500" placeholder="Myrnas@gmail.com" >
                                    </div>
                                <!--Email-->
                        </div>
                        <!--Button for Next-->
                            <div class="flex flex-row justify-center">
                                <button onclick="selected(id = 2)" href="#packageselection" id="personalbtn" type="button"  class="px-3 py-2 font-extrabold text-white duration-500 bg-gray-800 border-l border-gray-200 rounded-md font-geologica hover:bg-green-500 hover:text-white hover:scale-110">
                                <div class="flex flex-row align-middle">
                                    <span class="mr-2">Next</span>
                                    <svg class="w-5 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                            </button>
                            </div>
                        <!--Button for Next-->
                    </div>
                </div>
            </div>
        </section>
    <!--Personal Details Section-->