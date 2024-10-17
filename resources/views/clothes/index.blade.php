<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VirtualClothing</title>
</head>
<body>
    <header>
        <h1 class="title">Virtual Clothes</h1>
    </header>
    <main class="main-wrapper">
        <div class="btns-nav">
            <a class="home-btn" href="{{url('/')}}">< Home</a>
            <a class="add-btn" href="{{ route('clothes.create') }}">Add ></a>
        </div>
        <ul>
            @foreach ($clothes as $clothes)
                <h2 class="item-number">{{$clothes->id}}</h2>
                <li class="item-title">{{$clothes->title}}</li><li class="item-brand">{{$clothes->brand}}</li> <li>{{$clothes->description}}</li> <li>{{$clothes->price}}</li>
                <div class="btns">
                    <a class="edit-btn" href="{{ route('clothes.edit', $clothes) }}">Edit</a>
                    <form action="{{ route('clothes.destroy', $clothes->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="delete-btn" type="submit">Delete</button>
                    </form>
                </div>
                <hr>
            @endforeach
        </ul>
    </main>
</body>
</html>