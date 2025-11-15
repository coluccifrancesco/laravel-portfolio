@extends('layouts.app')

@section('content')

    <div class="p-5 my-4 text-white">
        <div class="d-flex justify-content-between align-items-center">
            <h1>{{ $project->name }}</h1>
            <div>
                <button class="btn btn-primary">
                    <a href="{{ $project->repo_link }}" class="text-white">Repo Link <i class="ms-2 fa-brands fa-github"></i></a>
                </button>
                
                <button class="btn btn-primary">
                    <a href="{{ route('projects.index') }}" class="text-white">All Projects <i class="ms-2 fa-solid fa-arrow-left"></i></a>
                </button>
            </div>
        </div>
        
        <div class="row my-5">
            <div class="col-12 col-md-6">
                <p>{{ $project->description }}</p>
                
                <?php $stack = json_decode($project->tech_stack); ?>
                <div class="my-5 d-flex justify-content-between align-items-center">
                    
                    @if (is_array($stack))
                        @foreach ($stack as $tech)
                            <p class="mb-0">{{ $tech }}</p>
                        @endforeach
                    @else
                        <p class="mb-0">{{ $stack }}</p>
                    @endif
                </div>
            </div>

            <div class="col-12 col-md-6">
                <img src="{{ $project->img }}" alt="img">
            </div>
        </div>
    </div>
    

@endsection