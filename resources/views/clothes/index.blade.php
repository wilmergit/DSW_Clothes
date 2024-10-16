<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VirtualClothing</title>
</head>
<body>
    <h1>Clothes</h1>
    <ul>
        @foreach ($clothes as $clothes)
            <li>{{$clothes->title}} {{$clothes->brand}} {{$clothes->description}} {{$clothes->price}}</li>
            <a href="{{ route('clothes.edit', $clothes) }}">Edit</a>
            <form action="{{ route('clothes.destroy', $clothes->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>  
        @endforeach
    </ul>
</body>
</html>