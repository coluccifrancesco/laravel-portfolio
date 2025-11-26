<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagsController extends Controller {
    
    // Display a listing of the resource.
    public function index() {
        
        $tags = Tag::all();

        return view('tags.index', compact('tags'));
    }
    
    // Show the form for creating a new resource.
    public function create() {
        
        return view('tags.create');
    }
    
    // Store a newly created resource in storage.
    public function store(Request $request) {
        
        $data = $request->all();
        $newTag = new Tag();

        $newTag->name = $data['name'];
        $newTag->bg_color = $data['bg_color'];
        $newTag->font_color = $data['font_color'];

        $newTag->save();

        return redirect()->route('tags.show', $newTag);
    }
    
    // Display the specified resource.
    public function show(Tag $tag) {
    
        return view('tags.show', compact('tag'));
    }

    
    // Show the form for editing the specified resource.
    public function edit(Tag $tag) {
        
        return view('tags.edit', compact('tag'));
    }
    
    // Update the specified resource in storage.
    public function update(Request $request, Tag $tag) {
        
        $data = $request->all();

        $tag->name = $data['name'];
        $tag->bg_color = $data['bg-color'];
        $tag->font_color = $data['font-color'];

        $tag->update();

        return redirect()->route('tags.show', $tag);
    }

    // Asks if we're sure about deleting the project
    public function sureOfDestroy(Tag $tag){

        return view('tags.destroy', data: compact('tag'));
    }
    
    // Remove the specified resource from storage.
    public function destroy(Tag $tag) {
        
        $tag->projects()->detach();
        $tag->delete();

        return redirect()->route('tags.index');
    }
}
