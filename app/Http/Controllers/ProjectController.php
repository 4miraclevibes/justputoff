<?php

namespace App\Http\Controllers;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Technology;

class ProjectController extends Controller
{
    public function index() 
    {
        $projects = Project::orderBy('created_at', 'desc')->get();
        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        $technologies = Technology::all();
        return view('projects.create', compact('technologies'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'technologies' => 'array|nullable',
            'demo' => 'nullable',
        ]);
        $data = $request->all();
        $data['thumbnail'] = $request->file('thumbnail')->store('image', 'public');
        $data['user_id'] = Auth::user()->id;
        $project = Project::create($data);

        if ($request->has('technologies')) {
            $project->technologies()->attach($request->technologies);
        }

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagePath = $image->store('images', 'public');
                $project->projectImages()->create(['image' => $imagePath]);
            }
        }

        return redirect()->route('projects.index')->with('success', 'Project created successfully');
    }

    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }
    
    public function edit(Project $project)
    {
        $technologies = Technology::all();
        return view('projects.edit', compact('project', 'technologies'));
    }

    public function update(Request $request, Project $project)
    {
        $request->validate([
            'description' => 'required',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'technologies' => 'array|nullable',
            'demo' => 'nullable',
        ]);
        $data = $request->all();
        if ($request->hasFile('thumbnail')) {
            Storage::delete($project->thumbnail);
            $data['thumbnail'] = $request->file('thumbnail')->store('image', 'public');
        }
        $project->update($data);

        $project->technologies()->sync($request->technologies ?? []);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagePath = $image->store('images', 'public');
                $project->projectImages()->create(['image' => $imagePath]);
            }
        }

        return redirect()->route('projects.index')->with('success', 'Project updated successfully');
    }

    public function destroy(Project $project)
    {
        Storage::delete($project->thumbnail);
        $project->delete();
        return redirect()->route('projects.index')->with('success', 'Project deleted successfully');
    }
}
