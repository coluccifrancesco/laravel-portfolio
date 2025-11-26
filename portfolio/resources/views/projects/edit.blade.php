@extends('layouts.app')

@section('content')

    <form action="{{ route('projects.update', $project) }}" method="POST" class="w-50 mx-auto mt-5 border rounded p-4">

        @csrf
        @method('PUT')

        <h1 class="mb-4 text-white">Update project</h1>

        <div class="form-control my-2 d-flex align-tiems-start flex-column">
            <label for="name">Project Name</label>
            <input type="text" name="name" id="name" value="{{ $project->name }}">
        </div>

        <div class="form-control my-2 d-flex align-tiems-start flex-column">
            <label for="description">Description</label>
            <textarea type="text" name="description" id="description">{{ $project->description }}</textarea>
        </div>

        <div class="form-control my-2 d-flex align-tiems-start flex-column">
            <label for="category_id">Category</label>
            <select name="category_id" id="category_id">
                @foreach ($categories as $category)
                    <option 
                        value="{{ $category->id }}" 
                        {{ $project->category_id == $category->id ? 'selected' : '' }}
                    >
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-control my-2 d-flex flex-wrap">
            <p class="w-100 mb-1">Tags</p>

            @foreach ($tags as $tag)
                <div class="mx-1 border rounded p-2 m-1" style="background-color: {{ $tag->color }};">
                    <input 
                        type="checkbox" name="tags[]" 
                        value="{{ $tag->id }}" 
                        id="tag-{{ $tag->id }}" 
                        {{ $project->tags->contains($tag->id) ? 'checked' : '' }}  
                    >
                    <label for="tag-{{ $tag->id }}">{{ $tag->name }}</label>
                </div>
            @endforeach
        </div>

        <div class="form-control my-2 d-flex align-tiems-start flex-column">
            <label for="img">Img Path</label>
            <input type="text" name="img" id="img" value="{{ $project->img }}">
        </div>

        <div class="form-control my-2 d-flex align-tiems-start flex-column">
            <label for="repo_link">Link Repo</label>
            <input type="text" name="repo_link" id="repo_link" value="{{ $project->repo_link }}">
        </div>

        <div class="d-flex justify-content-between align-items-center mt-3">
            <button class="btn btn-primary">
                <a href="{{ route('projects.index') }}" class="text-white link-underline link-underline-opacity-0">Go back<i class="ms-2 fa-solid fa-arrow-left"></i></a>
            </button>
            
            <input type="submit" value="Update" class="btn btn-warning">
        </div>
    </form>

@endsection