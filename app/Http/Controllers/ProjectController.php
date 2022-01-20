<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.project.index-project', [
            'page' => 'project',
            'project' => Project::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.project.create-project', [
            'page' => 'project'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'type' => 'required',
            'brand' => 'required',
            'project' => 'required',
            'date' => 'required',
            'title' => 'required',
            'description' => 'required',
            'body' => 'required',
            'mainImage' => 'required|image|file',
            'otherImage*' => 'image|file'
        ]);

            if ($request->hasfile('mainImage')) {
                    $validated['mainImage'] = $request->file('mainImage')->store('project-image', ['disk' => 'public']);
            }

        $project = Project::create($validated);
        if ($request->hasFile('otherImage')) {
            foreach ($request->otherImage as $value) {
                # code...
                $otherImage['otherImage'] = $value->store('project-image', ['disk' => 'public']);
                $otherImage['project'] = $project->id;
                ProjectImage::create($otherImage);
            }
        }
        Alert::success('Success', 'Data create succesfully');

        return redirect(route('project.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('dashboard.project.edit-project', [
            'page' => 'project',
            'project' => $project,
            'otherImage' => ProjectImage::where('project', $project->id)->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'type' => 'required',
            'brand' => 'required',
            'project' => 'required',
            'date' => 'required',
            'title' => 'required',
            'description' => 'required',
            'body' => 'required',
            'mainImage' => 'image|file',
            'otherImage*' => 'image|file'
        ]);

        if ($request->hasFile('otherImage')) {
            foreach ($request->otherImage as $value) {
                $otherImage['otherImage'] = $value->store('project-image', ['disk' => 'public']);
                $otherImage['project'] = $project->id;
                ProjectImage::create($otherImage);
            }
        }

        if ($request->hasFile('mainImage')) {
            Storage::delete($project->mainImage);
            $validated['mainImage'] =  $request->file('mainImage')->store('project-image', ['disk' => 'public']);
        }


        Project::where('id', $project->id)->update($validated);
        Alert::success('Success', 'Data update succesfully');

        return redirect(route('project.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $otherImg = ProjectImage::where('project', $project->id);
        if ($otherImg != null) {
            foreach ($otherImg as $value) {
                storage::delete($value->otherImage);
                ProjectImage::destroy($value->id);
            }
        }
        storage::delete($project->mainImage);
        Project::destroy($project->id);

        return redirect()->back();
    }

    public function imgdel($id)
    {
        $image = ProjectImage::find($id);

        Storage::delete($image->otherImage);
        ProjectImage::destroy($id);
        return response()->json("success");
    }
}
