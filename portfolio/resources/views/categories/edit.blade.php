@extends('layouts.app')

@section('content')

    <form action="{{ route('categories.update', $category) }}" method="POST" class="w-50 mx-auto mt-5 border rounded p-4">
        
        @csrf
        @method('PUT')

        <h1 class="mb-4 text-white">Update category</h1>

        <div class="form-control my-2 d-flex align-tiems-start flex-column">
            <label for="name">Category Name</label>
            <input type="text" name="name" id="name" value="{{ $category->name }}">
        </div>

        <div class="form-control my-2 d-flex align-tiems-start flex-column">
            <label for="description">Description</label>
            <textarea type="text" name="description" id="description">{{ $category->description }}</textarea>
        </div>

        <div class="d-flex justify-content-between align-items-center mt-4">
            <input type="submit" value="Update" class="btn btn-warning">

            <button class="btn btn-primary">
                <a href="{{ route('categories.index') }}" class="text-white link-underline link-underline-opacity-0">Go back<i class="ms-2 fa-solid fa-arrow-left"></i></a>
            </button>
        </div>
    </form>

@endsection