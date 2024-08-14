<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = auth()->user()->projects;
        return view('projects.index',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Project $project)
    {
      return view("projects.create", compact('project'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:150'
        ]); 
        
        // Add the authenticated user's ID to the data
        $data['user_id'] = auth()->id();
        
        // Create the project with the validated data
        Project::create($data);
        
        // Redirect to the projects index page with a success message
        return redirect('/projects')->with('success', 'Project created successfully.');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        if (auth()->user()->id !== $project->user_id) {
            abort(403);
        }
        
        return view('projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        if (auth()->user()->id !== $project->user_id) {
            abort(403);
        }
        
        return view('projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {

          $data = $request->validate([
            'title'=>'sometimes|required',
            'description'=>'sometimes|required',
            'status'=>'sometimes|required'
          ]);

        $project->update($data);
            return redirect('/projects/' . $project->id);
    }
//  $project->update([
//             'status'=> request('status')
//             ]);
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect('/projects');
    }
}
