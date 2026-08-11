<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Projects;

class ProjectsController extends Controller
{
    public function index(){
        $projects =Projects::where('status',true)->paginate(10);
        return view('admin.projects.index',compact('projects'));
    }
    public function create(){
        return view('admin.projects.create');
    }
   public function store(Request $request)
{
    $request->validate([
        'title' => 'required',
        'description' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'github_link' => 'nullable|url',
        'technologies' => 'nullable|array',
        'technologies.*' => 'nullable|string',
        'live_link' => 'nullable|url',
        'category' => 'nullable|string',
        'client_review' => 'nullable|string',
    ]);

    $imageName = time() . '.' . $request->image->extension();

    $request->image->move(
        public_path('images'),
        $imageName
    );

    Projects::create([
        'title' => $request->title,
        'description' => $request->description,
        'image' => $imageName,
        'github_link' => $request->github_link,

        // Convert array to JSON
        'technologies' => json_encode($request->technologies),

        'live_link' => $request->live_link,
        'category' => $request->category,
        'client_review' => $request->client_review,
        'status' => true,
    ]);

    return redirect()
        ->route('admin.projects.index')
        ->with('success', 'Project created successfully.');
}
public function edit($id){
    $project = Projects::findOrFail($id);
    return view('admin.projects.edit', compact('project'));
}


public function update(Request $request, $id)
{
    $request->validate([
        'title' => 'required|string',
        'description' => 'required|string',

        // Image is NOT required during update
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        'github_link' => 'nullable|url',

        'technologies' => 'nullable|array',
        'technologies.*' => 'nullable|string',

        'live_link' => 'nullable|url',
        'category' => 'nullable|string',
        'client_review' => 'nullable|string',
    ]);

    try {

        $project = Projects::findOrFail($id);
        $imageName = $project->image;

        if ($request->hasFile('image')) {

            $image = $request->file('image');

            // Create new image name
            $newImageName = time() . '_' . uniqid() . '.' . $image->extension();

            // Upload new image first
            $image->move(
                public_path('images'),
                $newImageName
            );

            if (
                !empty($project->image) &&
                file_exists(public_path('images/' . $project->image))
            ) {
                unlink(public_path('images/' . $project->image));
            }

            // Use new image name
            $imageName = $newImageName;
        }


        $technologies = $request->technologies ?? [];

        $technologies = array_values(
            array_filter($technologies, function ($technology) {
                return !empty(trim($technology));
            })
        );

        $project->update([
            'title' => $request->title,
            'description' => $request->description,

            // Old image OR new image
            'image' => $imageName,

            'github_link' => $request->github_link,

            // Because Projects model has:
            // protected $casts = ['technologies' => 'array'];
            'technologies' => $technologies,

            'live_link' => $request->live_link,
            'category' => $request->category,
            'client_review' => $request->client_review,
        ]);

        return redirect()
            ->route('admin.projects.index')
            ->with('success', 'Project updated successfully.');

    } catch (\Exception $e) {

        return redirect()
            ->back()
            ->withInput()
            ->with(
                'error',
                'An error occurred while updating the project: ' . $e->getMessage()
            );
    }
}

public function delete($id)
{
    try {

        $project = Projects::findOrFail($id);

        // Delete project image
        if (
            !empty($project->image) &&
            file_exists(public_path('images/' . $project->image))
        ) {
            unlink(public_path('images/' . $project->image));
        }

        // Delete project from database
        $project->delete();

        return redirect()
            ->route('admin.projects.index')
            ->with('success', 'Project deleted successfully.');

    } catch (\Exception $e) {

        return redirect()
            ->back()
            ->with(
                'error',
                'Unable to delete project: ' . $e->getMessage()
            );
    }
}





}
