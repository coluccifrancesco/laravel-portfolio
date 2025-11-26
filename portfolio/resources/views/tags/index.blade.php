@extends('layouts.app')

@section('content')
    
    <button class="d-block mx-auto mt-5 btn btn-success">
        <a href="{{ route('tags.create') }}" class="text-white link-underline link-underline-opacity-0">Nuova tecnologia <i class="fa-solid fa-plus"></i></a>
    </button>
    
    <div class="row p-4 m-4 mt-0 text-white">

        @foreach ($tags as $tag)

            <div class="col-12 col-md-6 col-lg-4 p-4 my-2">
                <div class="rounded p-3 d-flex justify-content-between align-items-center" style="background-color: {{ $tag->bg_color }};">
                    <h5 class="mb-0">
                        <a 
                            href="{{ route('tags.show', $tag->id) }}" 
                            class="link-underline link-underline-opacity-0" 
                            style="color: {{ $tag->font_color }};"
                        >
                            {{ $tag->name }}
                        </a>
                    </h5>

                    <div>
                        <button class="btn btn-warning">
                            <a 
                                class="text-white" 
                                href="{{ route('tags.edit', $tag->id) }}"
                            >
                                <i class="fa-solid fa-pencil"></i>
                            </a>
                        </button>
                            
                        <button class="btn btn-danger">
                            <a 
                            class="text-white" 
                            href="{{ route('tags.sureOfDestroy', $tag->id) }}">
                                <i class="fa-solid fa-trash"></i>
                            </a>
                        </button>
                    </div>
                </div>
            </div>

        @endforeach

    </div>

@endsection