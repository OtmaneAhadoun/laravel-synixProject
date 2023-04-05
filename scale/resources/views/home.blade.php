@extends('layout.master-page',['items'=>$items])
@section('title','SynixStore')
@section('content')
<section class="m-auto flex overflow-hidden items-center px-4 2xl:px-0 w-full object-cover min-h-[calc(100vh-110px)] relative">
    <div class="w-full transition-all duration-500 flex changed object-contain h-full absolute inset-0">
        <img class=" w-full h-full object-cover shrink-0" src={{Storage::url('slide1.jpg')}}>
        <img class=" w-full h-full object-cover shrink-0" src={{Storage::url('slide2.jpg')}}>
        <img class=" w-full h-full object-cover shrink-0" src={{Storage::url('slide3.jpg')}}>
        <img class=" w-full h-full object-cover shrink-0" src={{Storage::url('slide4.jpeg')}}>
    </div>
    <div class=" flex-col z-20 max-w-7xl w-full mx-auto p-2 text-white mb-[50px] flex capitalize text-lg font-medium  gap-2 items-start justify-center">
         <p class=" text-5xl font-bold leading-none">new arrivalls</p>
         <p class=" text-2xl font-bold leading-none">h&m</p>
         <p class=" text-5xl font-bold leading-none">jack jones</p>
         <a href="#overview" class="hello mt-5 hover:bg-[#333] capitalize text-lg font-medium transition-all text-white p-2.5 rounded-full px-10 bg-mained">shop now</a>
    </div>
</section>
<section class="m-auto py-12 grid grid-cols-mained flex-wrap justify-center gap-6 px-4 2xl:px-0 max-w-7xl">
    <div class="border group h-[300px] relative">
        <img src={{Storage::url('imagee.jpg')}} class="w-full object-contain h-full z-[-1] absolute inset-0" alt="">
        <div class=" opacity-0 duration-500 group-hover:opacity-80 z-[-1] transition-all absolute inset-0 bg-mained">
        </div>
        <div class=" z-20 cursor-pointer capitalize overflow-hidden w-fit border-b-2 border-transparent group-hover:border-white absolute bottom-7 text-white left-7">
            <h1 class=" translate-y-[20px] uppercase font-medium transition-all duration-500 group-hover:translate-y-0">shop now</h1>
        </div>
        <div class="capitalize transition-all duration-500 z-10 text-[#333] group-hover:text-white flex-col flex gap-2 p-4">
            <h1 class="font-bold text-3xl">men</h1>
            <h4 class='text-[#555] group-hover:text-white transition-all duration-500 text-sm'>spring project</h4>
        </div>
    </div>
    <div class="border group h-[300px] relative">
        <img src={{Storage::url('SAC.jpg')}} class="w-full  object-contain h-full z-[-1] absolute inset-0" alt="">
        <div class=" opacity-0 duration-500 group-hover:opacity-80 z-[-1] transition-all absolute inset-0 bg-mained">
        </div>
        <div class=" z-20 cursor-pointer capitalize overflow-hidden w-fit border-b-2 border-transparent group-hover:border-white absolute bottom-7 text-white left-7">
            <h1 class=" translate-y-[20px] uppercase font-medium transition-all duration-500 group-hover:translate-y-0">shop now</h1>
        </div>
        <div class="capitalize transition-all text-[#333] duration-500 z-10 group-hover:text-white flex-col flex gap-2 p-4">
            <h1 class="font-bold text-3xl">women</h1>
            <h4 class='text-[#555] group-hover:text-white transition-all duration-500 text-sm'>spring project</h4>
        </div>
    </div>
    <div class="border group h-[300px] relative">
        <img src={{Storage::url('image.jpg')}} class="w-full object-contain h-full z-[-1] absolute inset-0" alt="">
        <div class=" opacity-0 duration-500 group-hover:opacity-80 z-[-1] transition-all absolute inset-0 bg-mained">
        </div>
        <div class=" z-20 cursor-pointer capitalize overflow-hidden w-fit border-b-2 border-transparent group-hover:border-white absolute bottom-7 text-white left-7">
            <h1 class=" translate-y-[20px] uppercase font-medium transition-all duration-500 group-hover:translate-y-0">shop now</h1>
        </div>
        <div class="capitalize transition-all duration-500 z-10 text-[#333] group-hover:text-white flex-col flex gap-2 p-4">
            <h1 class="font-bold text-3xl">men</h1>
            <h4 class='text-[#555] group-hover:text-white transition-all duration-500 text-sm'>spring project</h4>
        </div>
    </div>
</section>
<main id="overview" class=" w-full pb-9 p-2 md:p-0 max-w-7xl flex-col flex gap-8 m-auto min-h-screen">
    <h1 class=" font-bold text-4xl text-[#222]">Product Overview</h1>
    <div>
        <ul class="flex gap-6 capitalize overflow-x-auto ">
            <li class=" cursor-pointer shrink-0 leading-none text-sm hover:text-black hover:border-black  border-transparent transition-all duration-500 text-black">all product</li>
            <li class=" cursor-pointer shrink-0 leading-none text-sm hover:text-black hover:border-black border-b border-transparent transition-all duration-500 text-[#888]">men</li>
            <li class=" cursor-pointer shrink-0 leading-none text-sm hover:text-black hover:border-black border-b border-transparent transition-all duration-500 text-[#888]">women</li>
            <li class=" cursor-pointer shrink-0 leading-none text-sm hover:text-black hover:border-black border-b border-transparent transition-all duration-500 text-[#888]">child</li>
            <li class=" cursor-pointer shrink-0 leading-none text-sm hover:text-black hover:border-black border-b border-transparent transition-all duration-500 text-[#888]">girl</li>
            <li class=" cursor-pointer shrink-0 leading-none text-sm hover:text-black hover:border-black border-b border-transparent transition-all duration-500 text-[#888]">watches</li>
            <li class=" cursor-pointer shrink-0 leading-none text-sm hover:text-black hover:border-black border-b border-transparent transition-all duration-500 text-[#888]">glases</li>
        </ul>
    </div>
    <div class=" w-full justify-center flex gap-6 gap-y-4 flex-wrap ">
        @foreach ($product as $item)
            <x-cart :item=$item></x-cart>
        @endforeach
        {{$items[0]->id}}
    </div>
    <div class=" w-full flex justify-center items-center">
        <button class=" p-2.5 px-10 hover:bg-[#333] hover:text-white transition-all duration-500 uppercase text-[15px] font-[400] rounded-full text-black bg-[#e6e6e6]">load more</button>
    </div>
</main>

@endsection