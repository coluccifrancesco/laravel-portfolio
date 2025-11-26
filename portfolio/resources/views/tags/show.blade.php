@extends('layouts.app')

@section('content')

    <div class="d-flex justify-content-between align-items-center p-5">
        <div 
            class="text-white w-50 rounded p-4" 
            style="background-color: {{ $tag->bg_color }};"
        >
            <h1 class='mb-0' style='color: {{ $tag->font_color }};'>Name: {{ $tag->name }}</h1>
            <p class='mb-0' style='color: {{ $tag->font_color }};'>Id: {{ $tag->id }}</p>
        </div>

        <button class="btn btn-primary">
           <a href="{{ route('tags.index') }}" class="text-white link-underline link-underline-opacity-0">Go back</a>
        </button>

        <div class="text-end">
            <button class="btn btn-warning">
                <a class="text-white" href="{{ route('tags.edit', $tag->id) }}">
                    <i class="fa-solid fa-pencil"></i>
                </a>
            </button>

            <button class="btn btn-danger">
                <a class="text-white" href="{{ route('tags.sureOfDestroy', $tag->id) }}">
                    <i class="fa-solid fa-trash"></i>
                </a>
            </button>
        </div>
    </div>

@endsection