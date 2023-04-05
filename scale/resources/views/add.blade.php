<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>add</title>
    @vite('resources/css/app.css')
</head>
<body>
    <form action="{{route('store')}}" method="POST" enctype="multipart/form-data" class=" max-w-md flex flex-col gap-2">
    @csrf
    <input type="text" class=" w-full border p-2" name="title">
    <input class=" w-full border p-2" name="brand" type="text">
    <input class=" w-full border p-2" name="price" type="number">
    <textarea class=" w-full border p-2" name="description" ></textarea>
    <input class=" w-full border p-2" name="quantity" type="text">
    <input class=" w-full border p-2" type="file" name="mainImage">
    <input class=" w-full border p-2" type="file" name="image1">
    <input class=" w-full border p-2" type="file" name="image2">
    <input class=" w-full border p-2" type="file" name="image3">
    <button>submit</button>
</form>
</body>
</html>