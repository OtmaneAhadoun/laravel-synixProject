<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Montserrat:wght@400;500;600;800;900&family=Outfit:wght@100;200;300;400;500;600;700;800;900&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,800&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <title>{{$path}}</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="w-full font-font flex items-center justify-center relative h-screen">
        <header class="w-full px-2 xl:px-0 top-0 left-0 absolute shadow-head h-[70px]" >
            <nav class=" max-w-7xl m-auto flex items-center">
                <img class=" w-[170px] h-[70px] object-cover" src={{Storage::url('/synix.png')}} alt="">
            </nav>
        </header>
        <div class=" flex p-2 lg:shadow justify-center rounded-lg w-[700px] gap-1 h-[420px]">
            <img class=" hidden rounded-lg lg:flex object-cover w-1/2" src={{Storage::url('loginimg.jpg')}} alt=""/>
            <form method="POST" action={{route('login')}} class=" h-fit gap-2 lg:w-1/2 flex-col flex p-2 text-black w-full max-w-sm">
                @csrf
                <div class=" flex flex-col gap-1">
                    <label class=" font-medium capitalize" for="">email</label>
                    <input name="email" value="{{old('email')}}" class="font-medium @error('error') border-red-400 @enderror focus:rounded-l-2xl transition-all rounded-xl p-3 border outline-none focus:border-gray-300 " type="text">
                    @error('email')
                        <small class=" text-[12px] text-red-500">{{$message}}</small>
                    @enderror
                </div>
                <div class=" flex flex-col gap-1">
                    <label class=" font-medium capitalize" for="">password</label>
                    <input name="password" class="font-medium focus:rounded-l-2xl transition-all rounded-xl p-3 border outline-none focus:border-gray-300 " type="text">
                    @error('password')
                        <small class=" text-[12px] text-red-500">{{$message}}</small>
                    @enderror
                </div>
                <button type="submit" class=" hover:rounded-2xl bg-[#222] duration-300 transition-all  inline-flex items-center gap-3 capitalize p-3 text-white w-full justify-center rounded-xl">acces to the account <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M13.3 17.275q-.3-.3-.288-.725t.313-.725L16.15 13H5q-.425 0-.713-.288T4 12q0-.425.288-.713T5 11h11.15L13.3 8.15q-.3-.3-.3-.713t.3-.712q.3-.3.713-.3t.712.3L19.3 11.3q.15.15.213.325t.062.375q0 .2-.063.375t-.212.325l-4.6 4.6q-.275.275-.687.275t-.713-.3Z"/></svg></button>
                <div class=" flex flex-col py-2 items-center gap-3 capitalize">
                    <a href="" class=" text-sm" >forgot password??</a>
                    <a href="" class=" text-sm" > already have account?</a>
                    <button class=" p-2.5 rounded-xl px-6 border hover:rounded-2xl capitalize  transition-all">get acces</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>