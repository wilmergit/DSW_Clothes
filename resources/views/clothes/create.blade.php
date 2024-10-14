@extends('layout')

@section('content')
    <h1>Add a new clothe</h1>
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
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <a href="{{ route('clothes.index') }}">Back to the list</a>
@endsection