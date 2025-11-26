@extends('layouts.app')

@section('content')

    <div class="w-50 mx-auto mt-5 border rounded p-4 text-white">

        <h1>Sei sicuro di cancellare {{ $tag->name }}?</h1>

        <div class="d-flex align-items-center justify-content-between mt-5">
            <button class="btn btn-primary">
                <a class="text-white link-underline link-underline-opacity-0" href="{{ route('tags.show', $tag->id) }}">No</a>
            </button>

            <form action="{{ route('tags.destroy', $tag->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <input type='submit' class="btn btn-danger" value="Delete"></i></input>
            </form>
        </div>

    </div>

@endsection