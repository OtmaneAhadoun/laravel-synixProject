@props(['items'])
<div class="header md:flex hidden transition-all w-full h-10 bg-[#222]">
        <div class=" w-full text-[13px] items-center justify-between flex text-[#b2b2b2] h-full px-4 2xl:px-0 max-w-7xl m-auto">
            <h1 class="">Free shipping for standard order over $100 {{$items[0]->id}} </h1>
            <ul class=" flex h-full text-[13px] capitalize">
                <li class=" inline-flex items-center px-5 cursor-pointer border-[#b2b2b2]">help & faqs</li>
                <li class=" inline-flex items-center px-5 cursor-pointer border-[#b2b2b2]">my account</li>
                <li class=" inline-flex items-center px-5 cursor-pointer border-[#b2b2b2]">en</li>
                <li class=" inline-flex items-center pl-5 cursor-pointer border-[#b2b2b2]">promos</li>
            </ul>
        </div>
    </div>
    <header class=" z-[100] transition-all bg-white sticky top-0 h-[70px]  w-full">
        <div class=" px-4 z-10 2xl:px-0 max-w-7xl w-full flex items-center justify-between h-full m-auto">
            <img class=" object-cover w-[170px] bg-left h-[70px]" src={{Storage::url('synix.png')}} alt="">
            <ul class=" md:flex hidden uppercase font-[500] justify-start gap-6">
                <li class=" hover:text-mained transition-all cursor-pointer text-[14px]"><a href="{{url('/')}}">home</a> </li>
                <li class=" hover:text-mained transition-all cursor-pointer text-[14px]">shop</li>
                <li class=" relative hover:text-mained transition-all cursor-pointer text-[14px] inline-flex">Features
                    <span class=" absolute left-[60%] text-[10px] px-2 uppercase top-[-70%] rounded bg-rose-500 text-white">hot</span>
                </li>
                <li class=" hover:text-mained transition-all cursor-pointer text-[14px]">blog</li>
                <li class=" hover:text-mained transition-all cursor-pointer text-[14px]">about</li>
                <li class=" hover:text-mained transition-all cursor-pointer text-[14px]">contact</li>
            </ul>
            <ul class=" flex gap-4">
                <li class=" hover:text-mained transition-all cursor-pointer"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 24 24"><path fill="currentColor" d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5A6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5S14 7.01 14 9.5S11.99 14 9.5 14z"/></svg></li>
                @auth
                <li class="cart hover:text-mained transition-all cursor-pointer relative">
                    <span class=" rounded-full border-2 border-white w-5 h-5 absolute inline-flex justify-center items-center text-white text-[12px] font-medium -top-[10px] -right-2 bg-mained"></span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 432 432">
                        <path fill="currentColor" d="M128 344q18 0 30.5 12.5t12.5 30t-12.5 30T128 429t-30-12.5t-12-30t12-30t30-12.5zM0 3h70l20 42h315q9 0 15.5 6.5T427 67q0 5-3 10l-76 138q-12 22-38 22H151l-19 35v3q0 5 5 5h247v43H128q-18 0-30.5-12.5T85 280q0-11 6-20l28-53L43 45H0V3zm341.5 341q17.5 0 30 12.5t12.5 30t-12.5 30t-30 12.5t-30-12.5t-12.5-30t12.5-30t30-12.5z"/>
                    </svg>
                </li>
                @endauth
                <li class=" hover:text-mained transition-all cursor-pointer relative">
                    <span class=" w-5 border-2 border-white  h-5 rounded-full absolute inline-flex justify-center items-center text-white text-[12px] font-medium -top-[10px] -right-2 bg-mained">0</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="currentColor" d="m12.1 18.55l-.1.1l-.11-.1C7.14 14.24 4 11.39 4 8.5C4 6.5 5.5 5 7.5 5c1.54 0 3.04 1 3.57 2.36h1.86C13.46 6 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5c0 2.89-3.14 5.74-7.9 10.05M16.5 3c-1.74 0-3.41.81-4.5 2.08C10.91 3.81 9.24 3 7.5 3C4.42 3 2 5.41 2 8.5c0 3.77 3.4 6.86 8.55 11.53L12 21.35l1.45-1.32C18.6 15.36 22 12.27 22 8.5C22 5.41 19.58 3 16.5 3Z"/></svg>
                </li>
                <li class="profile  transition-all cursor-pointer relative">
                    @guest
                    <div class="p-2 py-3 hidden profile_info rounded bg-white rounded-tr-none absolute flex-col gap-2 w-[180px] shadow-sm right-0 top-[130%] border">
                        <span class=" absolute h-3 w-3 right-[2px] bg-white top-[-6px] border-t border-l rotate-45"></span>
                        <h1 class=" text-center font-[400] capitalize">be our custmer</h1>
                        <a href={{route('tologin')}} class="capitalize rounded-full p-2.5 w-full bg-mained text-white text-center text-[15px] font-[400] ">log in</a>
                        <small class=" w-full text-center capitalize leading-none">or</small>
                        <button class="p-2.5 capitalize hover:bg-[#333] hover:text-white transition-all duration-500 text-[15px] font-[400] rounded-full text-black bg-[#e6e6e6]">create account</a></button> 
                    </div>
                    @endguest
                    @auth
                    <div class="px-1 z-50 hidden profile_info rounded bg-white rounded-tr-none absolute flex-col w-[180px] shadow-sm right-0 top-[130%] border">
                        <span class=" absolute h-3 w-3 right-[2px] bg-white top-[-6px] border-t border-l rotate-45"></span>
                        <h1 class=" px-4 font-[400] py-2 capitalize w-full border-b ">mr.{{Auth()->user()->name}}</h1>
                        <ul class=" flex-col flex gap-1 pt-2 pb-1 text-[15px] capitalize text-black">
                            <li class=" py-1 hover:text-mained transition-all duration-500 px-4">profile</li>
                            <li class=" py-1 hover:text-mained transition-all duration-500 px-4">orders</li>
                            <li class=" py-1 hover:text-mained transition-all duration-500 px-4">history</li>
                            <li class=" py-2 bg-mained text-center text-white px-4 rounded-xl"><a class=" inline-block w-full h-full" href="{{route('logout')}}">log out</a> </li>
                        </ul>
                        
                    </div>     
                    @endauth
                    <svg xmlns="http://www.w3.org/2000/svg" class="hover:text-mained" width="20" height="20" viewBox="0 0 24 24"><g fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"><path d="M16 9a4 4 0 1 1-8 0a4 4 0 0 1 8 0Zm-2 0a2 2 0 1 1-4 0a2 2 0 0 1 4 0Z"/><path d="M12 1C5.925 1 1 5.925 1 12s4.925 11 11 11s11-4.925 11-11S18.075 1 12 1ZM3 12c0 2.09.713 4.014 1.908 5.542A8.986 8.986 0 0 1 12.065 14a8.984 8.984 0 0 1 7.092 3.458A9 9 0 1 0 3 12Zm9 9a8.963 8.963 0 0 1-5.672-2.012A6.992 6.992 0 0 1 12.065 16a6.991 6.991 0 0 1 5.689 2.92A8.964 8.964 0 0 1 12 21Z"/></g></svg>
                </li>
                <li class="listt md:hidden flex  hover:text-mained transition-all cursor-pointer relative">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M11 18q-.425 0-.712-.288Q10 17.425 10 17t.288-.712Q10.575 16 11 16h2q.425 0 .713.288q.287.287.287.712t-.287.712Q13.425 18 13 18ZM4 8q-.425 0-.712-.287Q3 7.425 3 7t.288-.713Q3.575 6 4 6h16q.425 0 .712.287Q21 6.575 21 7t-.288.713Q20.425 8 20 8Zm3 5q-.425 0-.713-.288Q6 12.425 6 12t.287-.713Q6.575 11 7 11h10q.425 0 .712.287q.288.288.288.713t-.288.712Q17.425 13 17 13Z"/></svg>
                </li>
            </ul>
        </div>
        <ul class="navdrop translate-y-[-150%] md:hidden w-full capitalize flex-col transition-all duration-300 font-[500] flex text-lg p-6 gap-3 text-white bg-mained">
            <li class=" hover:pl-1 transition-all cursor-pointer text-[14px]">home</li>
            <li class=" hover:pl-1 transition-all cursor-pointer text-[14px]">shop</li>
            <li class=" hover:pl-1 transition-all cursor-pointer text-[14px]">Features</li>
            <li class=" hover:pl-1 transition-all cursor-pointer text-[14px]">blog</li>
            <li class=" hover:pl-1 transition-all cursor-pointer text-[14px]">about</li>
            <li class=" hover:pl-1 transition-all cursor-pointer text-[14px]">contact</li>
        </ul>
    </header>