@extends('layouts.app')

@section('content')

    <div class="p-5 my-4 text-white">

        {{-- Tablet and desktop view --}}
        <div class="d-none d-sm-flex justify-content-between align-items-center">
            <h1>{{ $project->name }}</h1>
            <div>
                <button class="btn btn-primary">
                    <a href="{{ $project->repo_link }}" class="text-white link-underline link-underline-opacity-0">Repo Link <i
                            class="ms-2 fa-brands fa-github"></i></a>
                </button>

                <button class="btn btn-primary">
                    <a href="{{ route('projects.index') }}" class="text-white link-underline link-underline-opacity-0">All Projects <i
                            class="ms-2 fa-solid fa-arrow-left"></i></a>
                </button>
            </div>
        </div>

        {{-- Mobile view --}}
        <div class="d-block d-sm-none my-4">
            <h1>{{ $project->name }}</h1>
            <div class="mt-3">
                <button class="btn btn-primary">
                    <a href="{{ $project->repo_link }}" class="text-white">Repo Link <i
                            class="ms-2 fa-brands fa-github"></i></a>
                </button>

                <button class="btn btn-primary">
                    <a href="{{ route('projects.index') }}" class="text-white">All Projects <i
                            class="ms-2 fa-solid fa-arrow-left"></i></a>
                </button>
            </div>
        </div>

        <p class="mb-0 fs-4">
            <bold>{{ $project->category->name }}</bold>
        </p>

        <div class="row my-4">
            <div class="col-12 col-md-6">
                <p>{{ $project->description }}</p>

                @forelse ($project->tags as $tag)
                    <span class="badge mb-4" style="background-color: {{ $tag->color }};">{{ $tag->name }}</span>
                @empty
                @endforelse
            </div>

            <div class="col-12 col-md-6">
                <img src="{{ $project->img }}" alt="img">
            </div>
        </div>

        <div class="text-end">
            <button class="btn btn-warning">
                <a class="text-white" href="{{ route('projects.edit', $project->id) }}">
                    <i class="fa-solid fa-pencil"></i>
                </a>
            </button>

            <button class="btn btn-danger">
                <a class="text-white" href="{{ route('projects.sureOfDestroy', $project->id) }}">
                    <i class="fa-solid fa-trash"></i>
                </a>
            </button>
        </div>
    </div>

@endsection