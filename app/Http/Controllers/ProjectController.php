<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Support\Str;
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
            'page' => 'Project',
            'project' => Project::orderBy('index', 'asc')->get()
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
            'page' => 'Project',
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
        $title = $request->title;
        $desc = $request->description;
        $body = $request->body;
         if ($request->unpublished) {
            $disabled = true;
        }else {
            $disabled = false;
        }


        $request['title'] = str_replace(' ', '', str_replace('&nbsp;', '', strip_tags($request['title'])));
        $request['description'] = str_replace(' ', '', str_replace('&nbsp;', '', strip_tags($request['description'])));
        $request['body'] = str_replace(' ', '', str_replace('&nbsp;', '', strip_tags($request['body'])));
        $validated = $request->validate([
            'type' => 'required',
            'unpublished' => $disabled,
            'brand' => 'required|max:255',
            'project' => 'required|max:255',
            'date' => 'required|max:255',
            'title' => 'required|min:1',
            'description' => 'required|min:1',
            'body' => 'required|min:1',
            'mainImage' => 'required|image|file',
            'detailImage' => 'image|file',
            'otherImage*' => 'image|file',
            'detail1' => 'min:0',
            'detail2' => 'min:0',
            'detail3' => 'min:0',
            'insta1' => 'min:0|max:255',
            'insta2' => 'min:0|max:255',
            'insta3' => 'min:0|max:255',
        ]);
        $validated['title'] = $title;
        $validated['description'] = $desc;
        $validated['body'] = $body;

        $validated['project']= Str::title($request->project);

        if ($request->hasfile('mainImage')) {
                $validated['mainImage'] = $request->file('mainImage')->store('project-image', ['disk' => 'public']);
        }

        if ($request->hasfile('detailImage')) {
                $validated['detailImage'] = $request->file('detailImage')->store('project-image', ['disk' => 'public']);
        }

        if ($request->featured == true) {
            if ($request->type == 'person') {
                Project::where('type', 'person')->update(['featured' => null]);
            } else {
                Project::where('type', 'project')->update(['featured' => null]);
            }
            $request->validate(['layout' => 'required']);
            $validated['featured'] = $request->layout;
        }

        $validated['subTitle'] = $request->subTitle;
        $validated['index'] = Project::all()->count() + 1 ;
        $project = Project::create($validated);
        $project::find($project->id)->update(['slug' => self::slugify(strip_tags($title . strval($project->id) ))]);
        if ($request->hasFile('otherImage')) {
            foreach ($request->otherImage as $value) {
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
            'page' => 'Project',
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
        $title = $request->title;
        $desc = $request->description;
        $body = $request->body;
         if ($request->unpublished) {
            $disabled = true;
        }else {
            $disabled = false;
        }

        $request['title'] = str_replace(' ', '', str_replace('&nbsp;', '', strip_tags($request['title'])));
        $request['description'] = str_replace(' ', '', str_replace('&nbsp;', '', strip_tags($request['description'])));
        $request['body'] = str_replace(' ', '', str_replace('&nbsp;', '', strip_tags($request['body'])));
        $validated = $request->validate([
            'type' => 'required',
            'brand' => 'required|max:255',
            'unpublished' => $disabled,
            'project' => 'required|max:255',
            'date' => 'required|max:255',
            'title' => 'required|min:1',
            'description' => 'required|min:1',
            'body' => 'required|min:1',
            'mainImage' => 'image|file',
            'detailImage' => 'image|file',
            'otherImage*' => 'image|file',
            'detail1' => 'min:0',
            'detail2' => 'min:0',
            'detail3' => 'min:0',
            'insta1' => 'min:0|max:255',
            'insta2' => 'min:0|max:255',
            'insta3' => 'min:0|max:255',
        ]);
        $validated['title'] = $title;
        $validated['description'] = $desc;
        $validated['body'] = $body;

        $validated['project']= Str::title($request->project);
        $validated['slug'] = self::slugify(strip_tags($title . strval($project->id) ));
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

        if ($request->hasFile('detailImage')) {
            Storage::delete($project->detailImage);
            $validated['detailImage'] =  $request->file('detailImage')->store('project-image', ['disk' => 'public']);
        }

        if ($request->featured == true) {
            if ($request->type == 'person') {
                Project::where('type', 'person')->update(['featured' => null]);
            } else {
                Project::where('type', 'project')->update(['featured' => null]);
            }
            $request->validate(['layout' => 'required']);
            $validated['featured'] = $request->layout;
        }
        $validated['subTitle'] = $request->subTitle;
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
        if ($project->detailImage != null) {
           storage::delete($project->detailImage);
        }
        Project::destroy($project->id);
        $notdel = Project::all();
        foreach ($notdel as $key => $value) {
            $value->update(['index' => $key + 1]);
        }
        return redirect()->back();
    }

    public function imgdel($id)
    {
        $image = ProjectImage::find($id);

        Storage::delete($image->otherImage);
        ProjectImage::destroy($id);
        return response()->json("success");
    }

    public function position(Request $request)
    {
        foreach ($request->id as $index => $id) {
            Project::find($id)->update(['index' => $index + 1]);
        }

        return response()->json('success');

    }
}
