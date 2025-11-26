@extends('layouts.app')

@section('content')
    
    <form action="{{ route('tags.update', $tag) }}" method="POST" class="w-50 mx-auto mt-5 border rounded p-4">
        @csrf 
        @method('PUT')
        
        <h1 class="text-white mb-4">Create a new Technology Tag</h1>

        <div class="form-control my-2 d-flex align-items-start flex-column">
            <label for="name">Technology Name</label>
            <input type="text" name="name" id="name" value="{{ $tag->name }}">
        </div>

        <h5 class="text-white mb-0 mt-4">Colors</h5>

        <div class="form-control my-2 d-flex justify-content-between align-items-start ">
            <label for="bg-color">Background</label>
            <input 
                type="color" 
                name="bg-color" 
                id="bg-color"
                value="{{ $tag->bg_color }}"
            >
            </input>
        </div>

        <div class="form-control my-2 d-flex justify-content-between align-items-start ">
            <label for="font-color">Font</label>
            <input 
                type="color" 
                name="font-color" 
                id="font-color"
                value="{{ $tag->font_color }}"
            >
            </input>
        </div>
        
        <div class="d-flex justify-content-between align-items-center mt-4">
            <button class="btn btn-primary" type="button">
                <a href="{{ route('tags.index') }}" class="text-white link-underline link-underline-opacity-0">Go back<i class="ms-2 fa-solid fa-arrow-left"></i></a>
            </button>
            
            <input type="submit" value="Save" class="btn btn-success">
        </div>
    </form>

@endsection