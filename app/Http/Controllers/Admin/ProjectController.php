<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Language;
use App\Models\Project;
use App\Models\Type;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'projects' => Project::all()
        ];
        return view('admin.projects.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = Type::all();
        $languages = Language::all();

        $data = [
            'types' => $types,
            'languages' => $languages
        ];
        return view('admin.projects.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required|min:10',
            'img_preview' => 'required',
            'type_id' => 'required',
            //passo al validate languages e gli dico che e un array e dopo tutto quello che c'è in languages con * con exists nella tabella languages id
            'languages' => 'array',
            'languages.*' => 'exists:languages,id',
        ]);

        $newProject = new Project();

        $newProject->fill($data);
        $newProject->save();

        //dopo che ho slavato come nel seeder gli passo i linguaggi stavolta a mano tramite il create con le checkbox

        $newProject->languages()->sync($data['languages']);


        return redirect()->route('admin.projects.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        $data = [
            "projects" => $project
        ];
        return view("admin.projects.show", $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {

        $types = Type::all();
        $languages = Language::all();

        $data = [
            'project' => $project,
            'types' => $types,
            'languages' => $languages
        ];
        return view('admin.projects.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required|min:10',
            'img_preview' => 'required',
            'type_id' => 'required|exists:types,id', //exists:tabella dove cercare, colonna dove cercare.
            'languages' => 'array',
            'languages.*' => 'exists:languages,id',

        ]);

        $project->update($data);

        //dopo che ho slavato come nel seeder gli passo i linguaggi stavolta a mano tramite edit per fare update con le checkbox

        $project->languages()->sync($data['languages']);


        return redirect()->route('admin.projects.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('admin.projects.index');
    }
}
