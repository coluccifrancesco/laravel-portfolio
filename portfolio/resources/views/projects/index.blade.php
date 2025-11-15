@extends('layouts.app')

@section('content')

    <div class="row p-4 m-4 text-white">

        <a href="{{ route('projects.create') }}">Nuovo progetto</a>
        
        @foreach ($projects as $project)

            <div class="col-12 col-md-6 col-lg-4 p-4 my-2">
                <div class="h-100 p-4 border rounded d-flex align-items-start justify-content-between flex-column">
                    <img src="{{ $project->img }}" alt="img">
                    
                    <h2 class="mt-2">{{ $project->name }}</h2>
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
                            class="text-white" 
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