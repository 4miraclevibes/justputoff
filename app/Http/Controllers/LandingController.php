<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
class LandingController extends Controller
{
    public function index()
    {
        $projects = Project::orderBy('created_at', 'desc')->get();
        return view('landing', compact('projects'));
    }
    public function show(Project $project)
    {
        return view('detail', compact('project'));
    }
}
