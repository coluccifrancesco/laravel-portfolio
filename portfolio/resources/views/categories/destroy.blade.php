@extends('layouts.app')

@section('content')

    <div class="w-50 mx-auto mt-5 border rounded p-4 text-white">

        <h1>Sei sicuro di cancellare {{ $category->name }}?</h1>

        <div class="d-flex align-items-center justify-content-between mt-5">
            <button class="btn btn-primary">
                <a class="text-white link-underline link-underline-opacity-0" href="{{ route('projects.show', $category->id) }}">No</a>
            </button>

            <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <input type='submit' class="btn btn-danger" value="Delete"></i></input>
            </form>
        </div>

        <div class="w-100 rounded bg-danger mt-4 p-3 d-flex align-items-center justify-content-between">
            <p class="mb-0">If the page reolads, <span class="text-black">{{ $category->name }}</span> is in use</p>
            <i class="fs-2 fa-solid fa-triangle-exclamation"></i>
        </div>
    </div>

@endsection