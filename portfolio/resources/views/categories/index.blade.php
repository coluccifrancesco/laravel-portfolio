@extends('layouts.app')

@section('content')

    <button class="d-block mx-auto mt-5 btn btn-success">
        <a href="{{ route('categories.create') }}" class="text-white link-underline link-underline-opacity-0">New Category<i
                class="fa-solid fa-plus"></i></a>
    </button>

    <div class="row p-4 m-4 mt-1 text-white">

        @foreach ($categories as $category)

            <div class="col-12 col-md-6 col-lg-4 col-xl-3 my-3">
                <div class="bg-secondary rounded mx-auto p-3 d-flex justify-content-between alignm-items-center">
                    <h5 class="my-auto">
                        <a href="{{ route('categories.show', $category->id) }}"
                            class="text-white link-underline link-underline-opacity-0">{{ $category->name }}</a>
                    </h5>

                    <div>
                        <button class="btn btn-warning">
                            <a class="text-white" href="{{ route('categories.edit', $category->id) }}">
                                <i class="fa-solid fa-pencil"></i>
                            </a>
                        </button>

                        <button class="btn btn-danger">
                            <a 
                            class="text-white" 
                            href="{{ route('categories.sureOfDestroy', $category->id) }}">
                                <i class="fa-solid fa-trash"></i>
                            </a>
                        </button>
                    </div>
                </div>

            </div>

        @endforeach

    </div>

@endsection