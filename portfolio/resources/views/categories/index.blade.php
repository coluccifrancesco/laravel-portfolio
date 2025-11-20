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

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="fa-solid fa-trash"></i>
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Category delete</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">Are you sure to delete {{ $category->name }}?</div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input type='submit' class="btn btn-danger" value="Delete"></i></input>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        @endforeach

    </div>

@endsection