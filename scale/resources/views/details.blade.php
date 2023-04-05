@extends('layout.master-page')
@section('title','ggproduct')
@section('content')
    <div class=" w-full p-2 xl:p-0 flex flex-col gap-3 py-4 max-w-7xl mx-auto min-h-screen">
        <h1 class=" capitalize">product > {{$product->title}}</h1>
        @if (Session::has('success'))
            <div class=" w-full  px-4 py-4 text-white flex gap-3 items-center capitalize text-lg font-medium bg-green-500 rounded">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 48 48"><mask id="ipSSuccess0"><g fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"><path fill="#fff" stroke="#fff" d="m24 4l5.253 3.832l6.503-.012l1.997 6.188l5.268 3.812L41 24l2.021 6.18l-5.268 3.812l-1.997 6.188l-6.503-.012L24 44l-5.253-3.832l-6.503.012l-1.997-6.188l-5.268-3.812L7 24l-2.021-6.18l5.268-3.812l1.997-6.188l6.503.012L24 4Z"/><path stroke="#000" d="m17 24l5 5l10-10"/></g></mask><path fill="currentColor" d="M0 0h48v48H0z" mask="url(#ipSSuccess0)"/></svg>{{Session::get('success')}}
            </div>
        @elseif(Session::has('failed'))
            <div class=" w-full  px-4 py-4 text-white flex gap-3 items-center capitalize text-lg font-medium bg-red-500 rounded">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path fill="currentColor" d="M12 17q.425 0 .713-.288T13 16q0-.425-.288-.713T12 15q-.425 0-.713.288T11 16q0 .425.288.713T12 17Zm0-4q.425 0 .713-.288T13 12V8q0-.425-.288-.713T12 7q-.425 0-.713.288T11 8v4q0 .425.288.713T12 13Zm0 9q-2.075 0-3.9-.788t-3.175-2.137q-1.35-1.35-2.137-3.175T2 12q0-2.075.788-3.9t2.137-3.175q1.35-1.35 3.175-2.137T12 2q2.075 0 3.9.788t3.175 2.137q1.35 1.35 2.138 3.175T22 12q0 2.075-.788 3.9t-2.137 3.175q-1.35 1.35-3.175 2.138T12 22Z"/></svg>
                {{Session::get('failed')}}
            </div>
        @endif
        <div class=" w-full flex flex-wrap gap-2">
            <div class=" basis-[400px] flex flex-col gap-2 grow w-full">
                <img src={{asset('/storage/'.$product->mainImage)}} class=" w-full h-[500px]" alt="">
                <div class="flex gap-2">
                    <img src="{{asset('./storage/'.$product->image1)}}" class=" object-cover w-[80px] h-[80px] shadow" src="" alt="">
                    <img src="{{asset('./storage/'.$product->image2)}}" class=" object-cover w-[80px] h-[80px] shadow" src="" alt="">
                    <img src="{{asset('./storage/'.$product->image3)}}" class=" object-cover w-[80px] h-[80px] shadow" src="" alt="">
                </div>
            </div>
            <div class="basis-[400px] gap-2.5 grow-[2] flex flex-col">
                <div class=" flex gap-2 items-center">
                    <h1 class=" font-medium capitalize text-xl text-black">{{$product->title}}</h1>
                    <span><span>(</span><span class="quantity">{{$product->quantity}}</span><span>)</span> </span>
                </div>
                <p>{{$product->description}}</p>
                <h1 class=" font-medium capitalize text-xl leading-none text-black">brand</h1>
                <div class=" flex justify-between items-center">
                    <h1 class=" capitalize">{{$product->brand}}</h1>
                    <span class=" flex gap-1 items-center">
                        <span class=" mt-1">4.5</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class=" text-mained" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="m12 18.275l-4.15 2.5q-.275.175-.575.15t-.525-.2q-.225-.175-.35-.438t-.05-.587l1.1-4.725L3.775 11.8q-.25-.225-.312-.513t.037-.562q.1-.275.3-.45t.55-.225l4.85-.425l1.875-4.45q.125-.3.388-.45t.537-.15q.275 0 .537.15t.388.45l1.875 4.45l4.85.425q.35.05.55.225t.3.45q.1.275.038.563t-.313.512l-3.675 3.175l1.1 4.725q.075.325-.05.588t-.35.437q-.225.175-.525.2t-.575-.15l-4.15-2.5Z"/></svg>
                    </span>
                </div> 
                <form action="{{route('addToCart')}}" class=" flex gap-2.5 flex-col" method="post">
                    @csrf
                    <input type="text" name="user_id" value='{{auth()->id()}}' hidden>
                    <input type="text" name="product_id" value="{{$product->id}}" hidden>
                    <div class=" text-white @guest opacity-50 pointer-events-none @endguest w-fit ">
                        <button type="button" class="plus bg-mained rounded-full inline-flex h-11 w-11 justify-center items-center px-4">+</button>
                        <input name="quantity" class="qtt px-4 text-lg w-16 p-2 pl-6 opacity-90 outline-none text-black pointer-events-none" value="1"/>
                        <button type="button" class="mines bg-mained rounded-full inline-flex h-11 w-11 justify-center items-center px-4">-</button>
                    </div>
                    <h1 class=" font-medium capitalize text-xl text-black">colors</h1>
                    <div class=" flex justify-between items-center">
                        <div class=" flex gap-2">
                            <span class=" w-5 h-5 cursor-pointer rounded-full bg-green-600"></span>
                            <span class=" w-5 h-5 cursor-pointer rounded-full bg-blue-600"></span>
                            <span class=" w-5 h-5 cursor-pointer rounded-full bg-gray-700"></span>
                            <span class=" w-5 h-5 cursor-pointer rounded-full bg-red-400"></span>
                            <span class=" w-5 h-5 cursor-pointer rounded-full bg-black"></span>
                        </div>
                        <h1 class=" text-lg text-black">24$</h1>
                    </div>
                    <h1 class=" font-medium capitalize text-xl text-black">size</h1>
                    <div class=" flex gap-2">
                        <div class=" rounded-xl cursor-pointer w-20 h-[60px] flex justify-center items-center text-lg capitalize border">
                            xxl
                        </div>
                        <div class=" rounded-xl cursor-pointer w-20 h-[60px] flex justify-center items-center text-lg capitalize border">
                            m
                        </div>
                        <div class=" rounded-xl cursor-pointer w-20 h-[60px] flex justify-center items-center text-lg capitalize border">
                            3xl
                        </div>
                    </div>
                    <div class=" flex gap-2 @guest opacity-50 pointer-events-none @endguest text-white">
                        <button type="submit" class=" bg-mained px-6 capitalize p-2 py-3 rounded-full ">add to cart</ type="submit">
                            <button class=" bg-[#222] px-6 capitalize p-2 py-3 rounded-full ">buy now</button>
                        </form>
                        </div>
                        <div>
                        </div>
                    </div>
                </div>
        <div>
            <h1 class=" font-semibold mt-3 text-3xl capitalize">others buy</h1>
            <div class=" w-full py-4 justify-center flex gap-6 gap-y-4 flex-wrap ">
                @foreach ($productSimilaire as $item)
                    <x-cart :item=$item></x-cart>
                @endforeach
            </div>
        </div>
    </div>
@endsection