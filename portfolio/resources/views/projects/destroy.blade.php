@extends('layouts.app')

@section('content')

    <div class="w-50 mx-auto mt-5 border rounded p-4 text-white">

        <h1>Sei sicuro di cancellare {{ $project->name }}?</h1>

        <div class="d-flex align-items-center justify-content-between mt-5">
            <button class="btn btn-primary">
                <a class="text-white" href="{{ route('projects.show', $project->id) }}">No</a>
            </button>

            <form action="{{ route('projects.destroy', $project->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <input type='submit' class="btn btn-danger" value="Delete"></i></input>
            </form>
        </div>

    </div>

@endsection