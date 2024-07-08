
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bacasime+Antique&family=Geologica:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.css" rel="stylesheet" />

    <title>Accepted Table Reservation Form</title>
</head>
<body>
    
    <section>
        <div class="w-full bg-center bg-cover border-4 bg-black/30 border-red-700 shadow-xl py-5" style="background-image: url(/img/bgimg.jpg)">
            <div class="box-content bg-opacity-70 bg-white/60 p-4 mx-auto">
                <div class="flex justify-center mt-6 text-center">
                    <a href="#" class="flex items-center text-4xl font-extrabold text-red-700 underline font-Bacasime underline-offset-8 decoration-red-700">
                        <img class="h-[4rem] mr-2" src="{{URL::asset("/img/Logo_Myrna'sflower.png")}}" alt="logo">
                    </a>
                </div>
                <div class="flex justify-center text-center">
                    <a href="#" class="flex items-center text-6xl font-extrabold text-red-600 underline font-Bacasime underline-offset-8 decoration-red-600">
                        Myrna's Cuisine
                    </a>
                </div>
            </div>
        </div>

        <h1 class="text-3xl lg:text-4xl font-bold text-gray-800 font-Geologica p-10">Hooray! Your Reservation is Confirmed.</h1>
        <h1 class="text-2xl lg:text-3xl font-bold text-gray-800 font-Geologica p-10">Dear <span class="underline underline-offset-4 decoration-red-600">{{ $fullname }}</span></h1>
        <h1 class="text-2xl lg:text-3xl font-bold text-justify text-gray-800 font-Geologica p-10">We are pleased to inform you that your table reservation is
            confirmed! Get ready to eat delicious and affordable international
            cuisine served with love. We’ve made things easy for you and
            included all of your table reservation details in this email. All you
            need to do is show us this email and your valid ID once you
            arrive at our restaurant. 
            </h1>

        <div class="px-16 py-5">
            <ul class="marker:text-red-600 list-disc">
                <li class="text-xl lg:text-3xl font-bold text-gray-700 font-Geologica py-1">Name: <span class="font-semibold">{{ $fullname }}</span></li>
                <li class="text-xl lg:text-3xl font-bold text-gray-700 font-Geologica py-1">Contact Number: <span class="font-semibold">63+{{ $phonenumber }}</span></li>
                <li class="text-xl lg:text-3xl font-bold text-gray-700 font-Geologica py-1">Table Number: <span class="font-semibold">{{ $table }}</span></li>
                <li class="text-xl lg:text-3xl font-bold text-gray-700 font-Geologica py-1">Date: <span class="font-semibold">{{ $scheduledate }}</span></li>
                <li class="text-xl lg:text-3xl font-bold text-gray-700 font-Geologica py-1">Time: <span class="font-semibold">{{ $scheduletime }}</span></li>
            </ul>
        </div>

        <div class="px-16 py-5">
            <h1 class="text-xl lg:text-3xl text-red-600 py-5">NON-REFUNDABLE CANCELLATION POLICY</h1>
            <p class="text-xl lg:text-3xl text-gray-700 py-5"><i>Please be advised that not arriving 15 minutes after your
                reservation period on a busy business day will count as a
                no-show and your table will be given to other walk-in
                customers</i></p>
            <h1 class="text-2xl lg:text-3xl text-red-600 font-bold font-Geologica py-5"><span class="underline underline-offset-4 decoration-red-700">-Myrna's Cuisine</span></h1>
        </div>
    </section>

    <script type="text/javascript" src="../node_modules/tw-elements/dist/js/tw-elements.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/datepicker.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
</body>
</html>

    <!--
    <section>
        <h2>Hooray! Your Reservation is Confirmed.</h2>
        <h3><b>Dear</b> Name </h3>
        <h3>We are pleased to inform you that your table reservation is
            confirmed! Get ready to eat delicious and affordable international
            cuisine served with love. We’ve made things easy for you and
            included all of your table reservation details in this email. All you
            need to do is show us this email and your valid ID once you
            arrive at our restaurant.</h3>

        <div>
            <ul>
                <li><b>Name:</b> </li>
                <li><b>Contact Number:</b>+63 </li>
                <li><b>Table Number:</b> </li>
                <li><b>Date:</b> </li>
                <li><b>Time</b> </li>
                
            
            </ul>
        </div>
        <div>
            <p><i>Please be advised that not arriving 15 minutes after your
                reservation period on a busy business day will count as a
                no-show and your table will be given to other walk-in
                customers</i></p>
            <h2>-Myrna's Cuisine</h2>
        </div>
    </section>
    -->
    
<!--

'subject' => 'Horray! Your reservation is confirm' ,
'body' =>   'New Pending reservation from \n ',
'fullname' => $request->firstname .' ' .  $request->lastname ,
"address" => $request->address,
"email" =>  $request->email,
"phonenumber" =>  $request->phonenumber,
"table" =>  $request->table,
"scheduledate" =>  $request->scheduledate,
"scheduletime" =>  $request->scheduletime 

-->