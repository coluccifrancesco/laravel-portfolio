@extends('layouts.app')

@section('content')

    <form action="{{ route('categories.store') }}" method="POST" class="w-50 mx-auto mt-5 border rounded p-4">
        @csrf 
        
        <h1 class="text-white mb-4">Create a new category</h1>

        <div class="form-control my-2 d-flex align-tiems-start flex-column">
            <label for="name">Category Name</label>
            <input type="text" name="name" id="name">
        </div>

        <div class="form-control my-2 d-flex align-tiems-start flex-column">
            <label for="description">Description</label>
            <textarea type="text" name="description" id="description"></textarea>
        </div>
        
        <div class="d-flex justify-content-between align-items-center mt-4">
            <button class="btn btn-primary" type="button">
                <a href="{{ route('categories.index') }}" class="text-white link-underline link-underline-opacity-0">Go back<i class="ms-2 fa-solid fa-arrow-left"></i></a>
            </button>
            
            <input type="submit" value="Save" class="btn btn-success">
        </div>
    </form>

@endsection