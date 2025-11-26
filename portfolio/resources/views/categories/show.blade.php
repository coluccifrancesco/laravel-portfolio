@extends('layouts.app')

@section('content')

    <div class="d-flex justify-content-between align-items-center p-5">
        <div class="text-white w-50">
            <h1>Name: {{ $category->name }}</h1>
            <p>Description: {{ $category->description }}</p>
            <p>Id: {{ $category->id }}</p>
        </div>

        <button class="btn btn-primary">
           <a href="{{ route('categories.index') }}"  class="text-white link-underline link-underline-opacity-0">Go back</a>
        </button>

        <div class="text-end">
            <button class="btn btn-warning">
                <a class="text-white" href="{{ route('categories.edit', $category->id) }}">
                    <i class="fa-solid fa-pencil"></i>
                </a>
            </button>

            <button class="btn btn-danger">
                <a class="text-white" href="{{ route('categories.sureOfDestroy', $category->id) }}">
                    <i class="fa-solid fa-trash"></i>
                </a>
            </button>
        </div>
    </div>
    
@endsection