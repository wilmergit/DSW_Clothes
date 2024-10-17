@extends('layout')

@section('content')
    <head>
        <link rel="stylesheet" href="{{asset('css/edit.css')}}">
    </head>
    <header>
        <h1 class="title">Virtual Clothes</h1>
    </header>
    <main class="main-wrapper">
        <a class="list-btn" href="{{ route('clothes.index') }}">< Cancel</a>
        <h2 class="subtitle">Edit the clothes information</h2>
        <hr>
        <form method="POST" action="{{ route('clothes.update', $clothes) }}">
            @csrf @method('PUT')
            <div class="form-group">
                <label for="title">Title</label>
                <input class="form-control" id="title" placeholder="Enter title here" type="text" name="title" value="{{$clothes->title}}">
            </div>
            <div class="form-group">
                <label for="brand">Brand</label>
                <input class="form-control" id="brand" placeholder="Enter brand here" type="text" name="brand" value="{{$clothes->brand}}">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input class="form-control" id="description" placeholder="Describe the product" type="text" name="description" value="{{$clothes->description}}">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input class="form-control" id="price" type="text" name="price" value="{{$clothes->price}}">
            </div>
            <button type="submit" class="sbm">Submit</button>
        </form>
    </main>
    <footer>
        <h3>No regrets :\</h3>
    </footer>
@endsection