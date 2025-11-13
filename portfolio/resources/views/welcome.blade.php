@extends('layouts.app')

@section('content')

    <div class="row p-4 m-4">
        
        @foreach ($projects as $project)

            <div class="col-12 col-md-6 col-lg-4 p-4 my-2">
                <div class="h-100 p-4 border d-flex align-items-start justify-content-between flex-column">
                    <img src="{{ $project->img }}" alt="img">
                    
                    <h2 class="mt-2">{{ $project->name }}</h2>
                    <p class="mb-0">{{ $project->description }}</p>

                    <div class="border row my-2">
                        
                        <?php $stack = json_decode($project->tech_stack); ?>
                        @foreach ($stack as $tech)
                            <div class="col-4">
                                <p class="mb-0">{{ $tech }}</p>
                            </div>
                        @endforeach
                    
                    </div>

                    <button class="w-100 btn btn-primary"><a class="text-white" href="/project/{{ $project->name }}">In detail</a></button>
                </div>
            </div>

        @endforeach

    </div>

@endsection