@extends('layout')

@section('content')
    <h1>Edit the clothes information</h1>
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
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection