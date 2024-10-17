@extends('layout')

@section('content')
    <head>
        <link rel="stylesheet" href="{{asset('css/create.css')}}">
    </head>
    <header>
        <h1 class="title">Virtual Clothes</h1>
    </header>
    <main class="main-wrapper">
        <div class="btns">
            <a class="home-btn" href="{{url('/')}}">< Home</a>
            <a class="list-btn" href="{{ route('clothes.index') }}">Listing ></a>
        </div>
        <h2 class="subtitle">Add new clothes</h2>
        <hr>
        <form action="{{ route('clothes.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input class="form-control" id="title" placeholder="Enter title here" type="text" name="title">
            </div>
            <div class="form-group">
                <label for="brand">Brand</label>
                <input class="form-control" id="brand" placeholder="Enter brand here" type="text" name="brand">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input class="form-control" id="description" placeholder="Describe the product" type="text" name="description">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input class="form-control" id="price" type="text" name="price">
            </div>
            <button type="submit" class="sbm">Submit</button>
        </form>
    </main>
    <footer>
        <h3>Enjoy your clothes!</h3>
    </footer>
@endsection