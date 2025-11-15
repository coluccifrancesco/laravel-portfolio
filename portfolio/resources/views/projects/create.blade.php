@extends('layouts.app')

@section('content')

    <form action="{{ route('projects.store') }}" method="POST" class="w-50 mx-auto mt-5 border rounded p-4">
        @csrf

        <div class="form-control my-2 d-flex align-tiems-start flex-column">
            <label for="name">Project Name</label>
            <input type="text" name="name" id="name">
        </div>
        
        <div class="form-control my-2 d-flex align-tiems-start flex-column">
            <label for="description">Description</label>
            <textarea type="text" name="description" id="description"></textarea>
        </div>
        
        <div class="form-control my-2 d-flex align-tiems-start flex-column">
            <label for="tech_stack">Technologies Used</label>
            <input type="text" name="tech_stack" id="tech_stack" value='Ex: ["HTML", "CSS", "JavaScript", "React", "MySql, "NodeJs", "ExpressJS", "PHP", "Laravel"]'>
        </div>
        
        <div class="form-control my-2 d-flex align-tiems-start flex-column">
            <label for="img">Img Path</label>
            <input type="text" name="img" id="img">
        </div>
        
        <div class="form-control my-2 d-flex align-tiems-start flex-column">
            <label for="repo_link">Link Repo</label>
            <input type="text" name="repo_link" id="repo_link">
        </div>

        <input type="submit" value="Save" class="btn btn-success mt-3">
    </form>

@endsection