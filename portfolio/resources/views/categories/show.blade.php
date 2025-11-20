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
    </div>
    
@endsection