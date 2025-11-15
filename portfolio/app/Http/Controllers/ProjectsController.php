<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $projects = Project::all();

        return view('projects.index', compact('projects'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('projects.create');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $data = $request->all();
        
        $newProject = new Project();
        
        $newProject->name = $data['name'];
        $newProject->description = $data['description'];
        $newProject->tech_stack = json_encode($data['tech_stack']);
        $newProject->img = $data['img'];
        $newProject->repo_link = $data['repo_link'];
        
        $newProject->save();

        return redirect()->route('projects.show', $newProject);
    }

    // Display the specified resource.
    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    // Show the form for editing the specified resource.
    public function edit(Project $project)
    {
        return view('projects.edit', data: compact('project'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, Project $project)
    {
        $data = $request->all();

        $project->name = $data['name'];
        $project->description = $data['description'];
        $project->tech_stack = $data['tech_stack'];
        $project->img = $data['img'];
        $project->repo_link = $data['repo_link'];
        
        $project->update();

        return redirect()->route('projects.show', $project);
    }

    // Asks if we're sure about deleting the project
    public function sureOfDestroy(Project $project)
    {
        return view('projects.destroy', data: compact('project'));
    }

    // Remove the specified resource from storage.
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('projects.index');
    }
}
