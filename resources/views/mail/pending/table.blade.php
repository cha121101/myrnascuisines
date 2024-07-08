
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

    <title>New Table Reservation Mail</title>
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
        <h1 class="text-3xl lg:text-4xl font-bold text-center text-gray-800 font-Geologica p-10">HI! There is a New <span class="underline underline-offset-4 decoration-red-600">Table Reservation</span> Form submitted to the website.</h1>
        <div class="px-16 py-5">
            <ul class="marker:text-red-600 list-disc">
                <li class="text-2xl lg:text-3xl font-bold text-gray-700 font-Geologica py-1"> {{ $fullname }} - <span> {{ $submittime }}</span></li>
                <li class="text-2xl lg:text-3xl font-bold text-gray-700 font-Geologica py-1"> Date of Reservation - {{ $scheduledate }}</li>
                <li class="text-2xl lg:text-3xl font-bold text-gray-700 font-Geologica py-1"> Time of Reservation - {{ $scheduletime }}</li>
            </ul>
        </div>
    </section>

    <script type="text/javascript" src="../node_modules/tw-elements/dist/js/tw-elements.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/datepicker.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
</body>
</html>


