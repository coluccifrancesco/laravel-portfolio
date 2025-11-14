@extends('layouts.app')

@section('content')

    <div class="p-5 my-4">
        <div class="d-flex justify-content-between align-items-center">
            <h1>{{ $project->name }}</h1>
            <div>
                <button class="btn btn-primary">
                    <a href="{{ $project->repo_link }}" class="text-white">Repo Link <i class="fa-brands fa-github"></i></a>
                </button>
                
                <button class="btn btn-primary">
                    <a href="{{ route('projects.index') }}" class="text-white">All Projects <i class="fa-solid fa-arrow-left"></i></a>
                </button>
            </div>
        </div>
        
        <div class="row my-4">
            <div class="col-12 col-md-6">
                <p>{{ $project->description }}</p>
                
                <?php $stack = json_decode($project->tech_stack); ?>
                <div class="d-flex justify-content-around align-items-center">
                    @foreach ($stack as $tech)
                        <p class="mb-0">{{ $tech }}</p>
                    @endforeach
                </div>
            </div>

            <div class="col-12 col-md-6">
                <img src="{{ $project->img }}" alt="img">
            </div>
        </div>
    </div>
    

@endsection