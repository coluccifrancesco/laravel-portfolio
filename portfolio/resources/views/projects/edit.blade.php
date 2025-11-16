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
            <label for="tech_stack">Technologies Used</label>
            <input type="text" name="tech_stack" id="tech_stack" value="{{ $project->tech_stack }}">
        </div>
        
        <div class="form-control my-2 d-flex align-tiems-start flex-column">
            <label for="img">Img Path</label>
            <input type="text" name="img" id="img" value="{{ $project->img }}">
        </div>
        
        <div class="form-control my-2 d-flex align-tiems-start flex-column">
            <label for="repo_link">Link Repo</label>
            <input type="text" name="repo_link" id="repo_link" value="{{ $project->repo_link }}">
        </div>

        <div class="d-flex justify-content-between align-items-center">
            <input type="submit" value="Update" class="btn btn-warning mt-3">

            <button class="btn btn-primary">
                <a href="{{ route('projects.index') }}" class="text-white">Go back<i class="ms-2 fa-solid fa-arrow-left"></i></a>
            </button>
        </div>
    </form>

@endsection