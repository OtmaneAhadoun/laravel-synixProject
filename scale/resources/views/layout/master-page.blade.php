<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Montserrat:wght@400;500;600;800;900&family=Outfit:wght@100;200;300;400;500;600;700;800;900&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,800&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class=" font-font text-[#444]">
    <x-Header :items=$items></x-Header>
    <div class=" cart-section cartUnderPg w-full h-full invisible fixed top-0 left-0 z-[999] bg-[#00000080]">
        <div class="cartAbovePg transition-all duration-300 translate-x-[384px] w-full flex items-center justify-center max-w-sm absolute right-0 bg-white h-full">
            <div class=" w-[70%] h-[90%]">
                <div class=" text-xl font-bold capitalize flex justify-between">
                    <h1>your cart</h1>
                    <svg xmlns="http://www.w3.org/2000/svg" class="closeCart cursor-pointer" width="30" height="30" viewBox="0 0 24 24"><path fill="currentColor" d="M6.4 19L5 17.6l5.6-5.6L5 6.4L6.4 5l5.6 5.6L17.6 5L19 6.4L13.4 12l5.6 5.6l-1.4 1.4l-5.6-5.6L6.4 19Z"/></svg>
                </div>
                <p class=" capitalize text-lg my-2">total:48$</p>
                <div class="w-full flex gap-2">
                    <button class=" bg-[#333] hover:bg-mained transition-all duration-300 p-2 rounded-full font-[500] text-white w-full uppercase">view cart</button>
                    <button class=" bg-[#333] hover:bg-mained transition-all duration-300 p-2 rounded-full font-[500] text-white w-full uppercase">put order</button>
                </div>
            </div>
        </div>
    </div>
    @yield('content')
    <x-footer></x-footer>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>