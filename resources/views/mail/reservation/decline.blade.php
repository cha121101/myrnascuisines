
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

    <title>Declined Reservation</title>
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
                    <a href="#" class="flex items-center text-6xl font-extrabold text-red-700 underline font-Bacasime underline-offset-8 decoration-red-700">
                        Myrna's Cuisine
                    </a>
                </div>
            </div>
        </div>
       
        <h1 class="text-3xl lg:text-4xl font-bold text-gray-800 font-Geologica p-10">Your Reservation has been Declined.</h1>
        <h1 class="text-2xl lg:text-3xl font-bold text-gray-800 font-Geologica p-10">Dear <span class="underline underline-offset-4 decoration-red-600">{{ $fullname }}</span></h1>
        <h1 class="text-2xl lg:text-3xl font-bold text-justify text-gray-800 font-Geologica p-10">We apologize for any inconvenience this may cause.
            Unfortunately, your desired reservation is already taken. We are
            more than happy to assist you in booking another event on
            another day and venue, just contact us or you can visit our website 
            www.myrnascuisine.online again to check the availability of our
            events place. 
            Once again, apologies for having to cancel your reservation. We
            look forward to dining with you soon.
            </h1>

        <div>
            <h1 class="text-2xl lg:text-3xl font-bold text-justify text-gray-800 font-Geologica p-10">Many Thanks</h1>

            <h2 class="text-2xl lg:text-3xl font-bold text-justify text-red-600 font-Geologica px-9 pt-5">-Myrna's Cuisine</h2>
        </div>

       
    </section>

    <script type="text/javascript" src="../node_modules/tw-elements/dist/js/tw-elements.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/datepicker.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
</body>
</html>
    