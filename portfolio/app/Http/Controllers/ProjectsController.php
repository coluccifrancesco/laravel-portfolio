<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Project;
use App\Models\Tag;
use Illuminate\Http\Request;

class ProjectsController extends Controller {
    
    // Display a listing of the resource.
    public function index(){

        $projects = Project::all();

        return view('projects.index', compact('projects'));
    }

    // Show the form for creating a new resource.
    public function create(){

        // get categories
        $categories = Category::all();

        // get tags
        $tags = Tag::all();

        return view('projects.create', compact('categories', 'tags'));
    }

    // Store a newly created resource in storage.
    public function store(Request $request){

        $data = $request->all();
        
        $newProject = new Project();
        
        $newProject->name = $data['name'];
        $newProject->description = $data['description'];
        $newProject->category_id = $data['category_id'];
        $newProject->img = $data['img'];
        $newProject->repo_link = $data['repo_link'];
        
        $newProject->save();

        // After saving the project we can verify tags
        if($request->has('tags')) {
            
            // if yes, save them
            $newProject->tags()->attach($data['tags']);
        }

        return redirect()->route('projects.show', $newProject);
    }

    // Display the specified resource.
    public function show(Project $project){

        return view('projects.show', compact('project'));
    }

    // Show the form for editing the specified resource.
    public function edit(Project $project){

        // get categories
        $categories = Category::all();

        // get tags
        $tags = Tag::all();

        return view('projects.edit', data: compact('project', 'categories', 'tags'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, Project $project){

        $data = $request->all();

        $project->name = $data['name'];
        $project->description = $data['description'];
        $project->category_id = $data['category_id'];
        $project->img = $data['img'];
        $project->repo_link = $data['repo_link'];
        
        $project->update();

        // after the project update verify if we're receiving tags
        if($request->has('tags')) {
            
            // tags update
            $project->tags()->sync($data['tags']);
        
        } else {
            
            // if there's no tags, we remove the ones originally attached
            $project->tags()->detach();
        }
        
        return redirect()->route('projects.show', $project);
    }

    // Asks if we're sure about deleting the project
    public function sureOfDestroy(Project $project){

        return view('projects.destroy', data: compact('project'));
    }

    // Remove the specified resource from storage.
    public function destroy(Project $project){

        $project->delete();

        return redirect()->route('projects.index');
    }
}
