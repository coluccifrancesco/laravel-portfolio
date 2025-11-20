@extends('layouts.app')

@section('content')

    <button class="d-block mx-auto mt-5 btn btn-success">
        <a href="{{ route('projects.create') }}" class="text-white link-underline link-underline-opacity-0">Nuovo progetto <i class="fa-solid fa-plus"></i></a>
    </button>
    
    <div class="row p-4 m-4 mt-0 text-white">

        @foreach ($projects as $project)

            <div class="col-12 col-md-6 col-lg-4 p-4 my-2">
                <div class="h-100 p-4 border rounded d-flex align-items-start justify-content-between flex-column">
                    <img src="{{ $project->img }}" alt="img">
                    
                    <div class="w-100 d-flex justify-content-between align-items-center">
                        <h2 class="mt-2">{{ $project->name }}</h2>

                        @if ($project->category->name != 'null')
                            <p class="m-0">{{ $project->category->name }}</p>
                        @endif
                    </div>
                    <p class="mb-0">{{ $project->description }}</p>

                    <div class="row my-3 w-100">
                        
                        <?php $stack = json_decode($project->tech_stack); ?>
                        
                        @if (is_array($stack))
                            @foreach ($stack as $tech)
                                <div class="col-4">
                                    <p class="mb-0">{{ $tech }}</p>
                                </div>
                            @endforeach
                        @else
                            <div class="col-4">
                                <p class="mb-0">{{ $stack }}</p>
                            </div>
                        @endif

                    </div>

                    <div class="d-flex align-items-center justify-content-between w-100">
                        <button class="btn btn-primary">
                            <a 
                            class="text-white link-underline link-underline-opacity-0" 
                            href="{{ route('projects.show', $project->id) }}">
                                In detail
                            </a>
                        </button>

                        <div>
                            <button class="btn btn-warning">
                                <a 
                                class="text-white" 
                                href="{{ route('projects.edit', $project->id) }}">
                                    <i class="fa-solid fa-pencil"></i>
                                </a>
                            </button>
                            
                            <button class="btn btn-danger">
                                <a 
                                class="text-white" 
                                href="{{ route('projects.sureOfDestroy', $project->id) }}">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        @endforeach

    </div>

@endsection