<!DOCTYPE html>
<html lang="en">
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
    <title>Create Table Reservation</title>

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />

    {{-- @vite('resources/css/app.css') --}}
    <link rel="stylesheet" href="{{URL::asset('css/fonts.css')}}">
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
                        <p id="table_reservation" class="flex py-6 text-2xl font-bold text-red-700 md:py-4 md:text-5xl lg:text-6xl font-geologica">Table Reservation</p>
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

    <!--FORM-->
        <section>
            <div class="min-h-screen py-6">
                <div class="m-2 md:m-[3rem]">
                    <div class="min-h-screen pb-10 overflow-hidden bg-white shadow-2xl rounded-xl" id="personaldetails">
                        <div class="w-full px-5 py-16">
                            <p class="flex mb-4 text-2xl font-extrabold text-center text-black font-geologica input-icon input-icon-right">Personal Information*</p>
                            
                            <form action="{{route('store.pending.table')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="text" name="submittime" id="submit-time" hidden>
                                @auth
                                <input type="text" hidden name="isadmin" value="true">
                                <input type="text" hidden name="name" value="{{ Auth::user()->name }}">
                                @endauth
                                @guest
                                    <input type="text" hidden  name="isadmin" value="false">
                                @endguest
                                <!--Form Selection-->
                                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                                        <!--FNAME-->
                                            <div>
                                                <label for="first_name" class="flex text-sm font-extrabold text-left text-black font-nunito input-icon input-icon-right">First name</label> 
                                                <input type="text" required name="firstname" id="firstname" placeholder="Firstname" onchange="checkfirstname()" class="bg-gray-50 border text-gray-900 font-geologica font-extrabold text-base rounded-lg focus:ring-blue-500  block w-full p-2.5 dark:placeholder-gray-400 dark:focus:ring-blue-500" placeholder="Last Name" require >
                                            </div>
                                        <!--FNAME-->

                                        <!--LNAME-->
                                            <div>
                                                <label for="last_name" class="flex text-sm font-extrabold text-left text-black font-nunito input-icon input-icon-right">Last name</label>
                                                <input type="text" required name="lastname" id="lastname" placeholder="Lastname" onchange="checklastname()" class="bg-gray-50 border text-gray-900 font-geologica font-extrabold text-base rounded-lg focus:ring-blue-500  block w-full p-2.5 dark:placeholder-gray-400 dark:focus:ring-blue-500" placeholder="Last Name" require >
                                            </div>
                                        <!--LNAME-->

                                        <!--ADDRESS-->
                                            <div>
                                                <label for="address" class="flex text-sm font-extrabold text-left text-black font-nunito input-icon input-icon-right">Address</label>
                                                <input type="text" required name="address" id="address" placeholder="Address" onchange="checkaddress()" class="bg-gray-50 border text-gray-900 font-geologica font-extrabold text-base rounded-lg focus:ring-blue-500  block w-full p-2.5 dark:placeholder-gray-400 dark:focus:ring-blue-500" placeholder="Address" require  >
                                            </div> 
                                        <!--ADDRESS--> 

                                        <!--PHOME NUMBER-->
                                            <div>
                                                <label for="phone" class="flex text-sm font-extrabold text-left text-black font-nunito input-icon input-icon-right">Phone number</label>
                                                <div class="flex items-center">
                                                    <p class="mr-2">+63</p><input 
                                                    type="number" 
                                                    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                    onkeydown="javascript: return event.keyCode == 69 ? false : true"    
                                                    name="phonenumber"
                                                    maxlength="10"  
                                                    id="phonenumber" onblur="checkphonenumber()" 
                                                    class="bg-gray-50 border text-gray-900 font-geologica font-extrabold text-base rounded-lg focus:ring-blue-500  block w-full p-2.5 dark:placeholder-gray-400 dark:focus:ring-blue-500">
                                               
                                                </div>                                           
                                            </div>
                                        <!--PHOME NUMBER-->
                                    </div>
                                <!--Form Selection-->
                                <!--Email-->
                                    <div>
                                        <label for="email" class="flex text-sm font-extrabold text-left text-black font-nunito input-icon input-icon-right">Email address</label>
                                        <input type="email" name="email" id="email" placeholder="Email" onchange="checkemail()" class="bg-gray-50 border text-gray-900 font-geologica font-extrabold text-base rounded-lg focus:ring-blue-500 block w-full p-2.5 dark:focus:ring-blue-500" placeholder="Myrnas@gmail.com" require >
                                    </div>
                                <!--Email-->
                                
                                <!--Table Selection-->
                                    <div class="w-full px-2 py-16">
                                        <p class="px-2 mt-4 space-y-2 font-medium border-t border-red-700 pt-7"></p>
                                        <p class="flex text-2xl font-extrabold text-center text-black font-geologica input-icon input-icon-right">Table Selection*</p>
                                        <div class="grid lg:grid-cols-4">

                                            <div class="relative grid col-span-2 gap-4 my-5 2xl:grid-cols-2 md:col-span-2 lg:mx-5">
                                                <div class="flex justify-center col-span-2 m-2">
                                                    <img class="w-[250px] h-[300px] md:w-[500px] md:h-[600px]" src="{{URL::asset("/img/floorPlan.png")}}">
                                                </div>
                                                <div class="grid col-span-2">
                                                    <p class="text-sm font-extrabold text-center text-black font-nunito input-icon input-icon-right"><i>NOTE : Table Layout is subjected to change without prior notice.</i></p>
                                                </div>
                                            </div>

                                            <div class="grid justify-center col-span-2 mt-3 text-center place-content-start">
                                                <div class="relative mb-10 text-center">
                                                    <label for="countries"  class="block mb-2 text-2xl font-extrabold text-gray-900 font-geologica">Select a Table*</label>
                                                    <select name="tablenumber" onchange="checkschedules()" id="tablenumber" class="border border-gray-300 text-xl rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5 px-12 bg-white text-red-700 font-geologica font-extrabold shadow-2xl dark:focus:ring-blue-500" >
                                                        <option value="Table 1" selected class="px-4 py-1 border-b hover:bg-gray-100">Table 1</option>
                                                        <option value="Table 2" class="px-4 py-1 border-b hover:bg-gray-100">Table 2</option>
                                                        <option value="Table 3" class="px-4 py-1 border-b hover:bg-gray-100">Table 3</option>
                                                        <option value="Table 4" class="px-4 py-1 border-b hover:bg-gray-100">Table 4</option>
                                                        <option value="Table 5" class="px-4 py-1 border-b hover:bg-gray-100">Table 5</option>
                                                        <option value="Table 6" class="px-4 py-1 border-b hover:bg-gray-100">Table 6</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <!--Table Selection-->

                                <!--Calendar & Time Selection-->
                                    <div class="w-full px-2 py-16">
                                        <p class="px-2 mt-4 space-y-2 font-medium border-t border-red-700 pt-7"></p>
                                        <p class="flex text-2xl font-extrabold text-center text-black font-geologica input-icon input-icon-right">Date & Time Selection*</p>
                                        <div class="grid lg:grid-cols-4">
                                            <!--Calendar-->
                                                <div class="relative grid col-span-1 gap-4 my-5 bg-white shadow-2xl 2xl:grid-cols-2 md:col-span-2 lg:mx-5 rounded-xl">
                                                    <div class="flex justify-center col-span-2 m-2">
                                                        <input type="date" name="scheduledate" id="scheduledate" hidden  >
                                                        <div id="calendar" class="text-red-700 font-nunito"  style="height: full; width: full; "></div>
                                                    </div>
                                                </div>
                                            <!--Calendar-->
                    
                                            <!--Time picker-->
                                                <div class="grid justify-center col-span-2 mt-3 text-center place-content-start">
                                                    <div class="relative mb-10 text-center" data-te-with-icon="false" data-te-timepicker-init data-te-input-wrapper-initid="timepicker-just-input">
                                                        <label for="countries" class="block mb-2 text-2xl font-extrabold text-gray-900 font-geologica">Select Time*</label>
                                                        <select id="scheduletime" name="scheduletime" onchange="checkschedules()" class="border border-gray-300 text-xl rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5 px-12 bg-white text-red-700 font-geologica font-extrabold shadow-2xl dark:focus:ring-blue-500">
                                                        
                                                        </select>
                                                    </div> 
                                                </div>
                                            <!--Time picker-->
                                        </div>
                                    </div>
                                <!--Calendar & Time Selection-->
                        </div>
                        <a href="#table_reservation" id="clickreservationtables"></a>
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
                                                    <ul class="mx-3 text-lg font-light text-center text-gray-800 list-disc divide-y divide-gray-600 marker:text-red-600 font-Geologica">
                                                        <li class="my-2 text-left">
                                                            <p class="font-bold">Name: <a id="confirm-name"></a></p>
                                                        <li class="my-2 text-left">
                                                            <p class="font-bold">Address: <a id="confirm-address"></a></p>
                                                        </li>
                                                        <!--
                                                        <li class="my-2">
                                                            <p class="font-bold">Phone Number: <a id=""></a></p>
                                                        </li>
                                                        -->
                                                        <li class="my-2 text-left">
                                                            <p class="font-bold">Email: <a id="confirm-email"></a></p>
                                                        </li>
                                                        <li class="my-2 text-left">
                                                            <p class="font-bold">Table Number: <a id="confirm-table"></a></p>
                                                        </li>
                                                        <li class="my-2 text-left">
                                                            <p class="font-bold">Schedule Date and Time: <a id="confirm-time-and-date"></a></p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- Modal footer -->
                                                <div class="flex items-center justify-center text-center p-6 space-x-2 border-t border-gray-200 rounded-b ">
                                                    <button data-modal-hide="default-modal" id="tablesubmitbtn" type="submit" class="px-3 py-2 text-white bg-green-600 border-l border-gray-200 rounded-md font-geologica hover:bg-green-500 hover:scale-110 hover:text-white">I accept</button>
                                                    <button data-modal-hide="default-modal" type="button" class="px-3 py-2 text-white bg-red-600 border-l border-gray-200 rounded-md font-geologica hover:bg-red-500 hover:scale-110 hover:text-white">Decline</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <!-- Main modal -->

                                <!--Button for Next-->
                                    <div class="flex flex-row justify-center">
                                        <button type="button" id="confirmation-btn" onclick="confirmation()" data-modal-target="default-modal" data-modal-toggle="default-modal" class="px-3 py-2 font-extrabold text-white bg-green-600 border-l border-gray-200 rounded-md font-geologica hover:bg-green-500 hover:scale-110 hover:text-white">
                                            <div class="flex flex-row align-middle">
                                                <span class="mr-2" id="confirmation-text">Submit</span>
                                                <svg class="w-5 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                </svg>
                                            </div>
                                        </button>
                                    </div>
                                <!--Button for Next-->
                            </form>
                    </div>
                </div>
            </div>
        </section>
    <!--FORM-->
           
    <!--Calendar Script-->
        <script>

            // Get current date
             var date = new Date();
             var checkcalendar = false;
             var firstname = document.getElementById("firstname")
             var lastname = document.getElementById("lastname")
             var email = document.getElementById("email")
             var phonenumber = document.getElementById("phonenumber") 


            var scheduledatetable = @json($scheduledatetable);
            var reservationtables = @json($reservationtables);
            
            
            
             let Schedules = ["8:00 AM", "9:00 AM","10:00 AM","11:00 AM","12:00 NN", "1:00 PM" , "2:00 PM", "3:00 PM", "4:00 PM", "5:00 PM", "6:00 PM", "7:00 PM" , "8:00 PM" , "9:00 PM" ]
             
             let scheduletime = document.getElementById('scheduletime');
            

            function schedule(){    
                for (var i = 0; i < Schedules.length; i++) {
                    let option = document.createElement("option");
                    option.text = Schedules[i]
                    scheduletime.appendChild(option)
                }
            }
            schedule()
            document.getElementById('submit-time').value = `${date.getMonth()}/${date.getDate()}/${date.getFullYear()}  ${date.getHours()}:${date.getMinutes()}`; 
            function confirmation(){
                document.getElementById("confirm-name").innerHTML = `${ document.getElementById("firstname").value} ${ document.getElementById("lastname").value}`
                document.getElementById("confirm-email").innerHTML = `${document.getElementById("email").value}`
                document.getElementById("confirm-address").innerHTML = `${document.getElementById("address").value}`
                document.getElementById("confirm-table").innerHTML = `${document.getElementById("tablenumber").value}`
                document.getElementById("confirm-time-and-date").innerHTML = `${ document.getElementById("scheduledate").value} ${ document.getElementById("scheduletime").value}`
            }
            var yearStart = date.setDate(date.getDate() + 1);
            var yearEnd = date.setFullYear(date.getFullYear() + 1);
            function checkemail(){
                if(email.value.indexOf("@") == -1 || email.value.length <= 7 || email.value.trim().length === 0 || !validateEmail(email.value)){
                    email.classList.add('border-2', 'border-red-500');
                }else{
                    email.classList.remove('border-2', 'border-red-500');
                }
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

            function checkschedules(){
                    var firstname = document.getElementById("firstname")
                    var lastname = document.getElementById("lastname")
                    var email = document.getElementById("email")
                    var phonenumber = document.getElementById("phonenumber")
                    var scheduledatetable = @json($scheduledatetable);
                    var reservationtables = @json($reservationtables);
                    var isokay = true;
                    scheduledatetable.forEach(element => {
                        reservationtables.forEach(data =>{
                            if(element.x == data.scheduledate && isokay){
                                if(isokay){
                                    if(document.getElementById('scheduledate').value == ""){
                                        document.getElementById('confirmation-btn').classList.add('bg-red-600');
                                        document.getElementById('confirmation-text').innerHTML = 'Select Date';
                                        document.getElementById('confirmation-btn').disabled = true;
                                        isokay = false;
                                    }
                                    else if(document.getElementById('scheduledate').value == element.x && data.scheduletime == document.getElementById('scheduletime').value && document.getElementById('tablenumber').value == data.tablenumber  ){ 
                                        document.getElementById('confirmation-btn').classList.add('bg-red-600');
                                        document.getElementById('confirmation-text').innerHTML = 'Occupied';
                                        document.getElementById('confirmation-btn').disabled = true;
                                        isokay = false;
                                    }else{
                                        if(checkall()){
                                            setTimeout(() => {
                                                alert('Plese fill up the field(s)')
                                            }, 100);
                                            document.getElementById('clickreservationtables').click();
                                            isokay = false;
                                        }else{
                                            document.getElementById('confirmation-btn').classList.remove('bg-red-600');
                                            document.getElementById('confirmation-text').innerHTML = 'Submit';
                                            document.getElementById('confirmation-btn').disabled = false;
                                        }
                                        $( "form" ).on( "submit", function( event ) {
                                            if(checkall()){
                                                event.preventDefault();
                                            }
                                            }
                                        )
                                    }
                                }
                            }
                        })
                    })
                }
            //personal details
            function validateEmail(email) {
                var atPos = email.indexOf("@");
                var dotPos = email.lastIndexOf(".");
                return atPos > 0 && dotPos > atPos + 1 && dotPos < email.length - 1;
            }
            var firstname = document.getElementById('firstname');
            var lastname = document.getElementById('lastname');
            var address = document.getElementById('address');
            var email = document.getElementById('email');
            var phonenumber = document.getElementById('phonenumber');
            var mailformat = `/^w+([.-]?w+)*@w+([.-]?w+)*(.w{2,3})+$/`;

            function containsSpecialChars(str) {
                const specialChars = /[`!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/;
                    if(!specialChars.test(str)){
                        return /[0-9]/.test(str);
                    }
                        return specialChars.test(str);
            }


            function checkall(){
                
                if(firstname.value.trim().length === 0 || firstname.value.length == 0  || containsSpecialChars(firstname.value)){
                    firstname.classList.add('border-2', 'border-red-500');
                }else{
                    firstname.classList.remove('border-2', 'border-red-500');
                }
                if(lastname.value.trim().length === 0 || lastname.value.length == 0 || containsSpecialChars(lastname.value)){
                    lastname.classList.add('border-2', 'border-red-500');
                }else{
                    lastname.classList.remove('border-2', 'border-red-500');
                }
                if(address.value.trim().length === 0 || address.value.length <= 4){
                    address.classList.add('border-2', 'border-red-500');
                }else{
                    address.classList.remove('border-2', 'border-red-500');
                }
                if(phonenumber.value.length != 10){
                    phonenumber.classList.add('border-2', 'border-red-500');
                    
                }else if(phonenumber.value[0] != 9){
                    phonenumber.classList.add('border-2', 'border-red-500');
                }
                else{
                    phonenumber.classList.remove('border-2', 'border-red-500');
                    }
                if(email.value.indexOf("@") == -1 || email.value.length <= 7 || email.value.trim().length === 0 || !validateEmail(email.value)){
                    email.classList.add('border-2', 'border-red-500');
                }else{
                    email.classList.remove('border-2', 'border-red-500');
                } 

                if(firstname.value.trim().length === 0 || firstname.value.length == 0 ){
                    return true
                }else if( containsSpecialChars(firstname.value)){
                    return true
                }else if( lastname.value.trim().length === 0 || lastname.value.length == 0 ){
                    return true
                }else if(containsSpecialChars(lastname.value)){
                    return true
                }else if(address.value.trim().length === 0 || address.value.length <= 4){
                    return true
                }else if( phonenumber.value.length != 10 || phonenumber.value[0] != 9 ){
                    return true
                }else if(email.value.indexOf("@") == -1 || email.value.length <= 7 ){
                    return true
                }else if(email.value.trim().length === 0 || !validateEmail(email.value)){
                    return true
                
                }
                return false;
            }




             
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
                    var mEnd = $.fullCalendar.moment(end);
                    checkcalendar = true;
                    var mStart = $.fullCalendar.moment(start);
                    checkschedules()
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
            
        </script>
        
    <!--Calendar Script-->

    <script>import {Input,Timepicker,initTE,} from "tw-elements";initTE({ Input, Timepicker });</script>
    <script type="text/javascript" src="../node_modules/tw-elements/dist/js/tw-elements.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/datepicker.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
</body>
</html>