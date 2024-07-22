<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Language;
use App\Models\Project;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'projects' => Project::orderByDesc('id')->paginate(9)
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

        //aggiungo slug al progetto
        $data['slug'] = Str::slug($request->title, '-');

        //creo variabile dove metto il percorso per lo storage dove vanno a finire le immagini che prendo dal create e poi le attacco alla variabile data dove passo tutti i dati del validate
        $img_path = Storage::put('images', $request['img_preview']);
        $data['img_preview'] = $img_path;


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
            'img_preview' => 'image',
            'type_id' => 'required|exists:types,id', //exists:tabella dove cercare, colonna dove cercare.
            'languages' => 'array',
            'languages.*' => 'exists:languages,id',
        ]);

        //aggiungo slug al progetto
        $data['slug'] = Str::slug($request->title, '-');


        if ($request->has('img_preview')) {
            // save the image
            $img_path = Storage::put('images', $request['img_preview']);
            $data['img_preview'] = $img_path;
            if ($project->img_preview && !Str::startsWith($project->img_preview, 'http')) {
                Storage::delete($project->img_preview);
            }
        }

        //creo variabile dove metto il percorso per lo storage dove vanno a finire le immagini che prendo dal create e poi le attacco alla variabile data dove passo tutti i dati del validate
        // $img_path = Storage::put('images', $request['img_preview']);
        // $data['img_preview'] = $img_path;


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

        Storage::delete($project->img_preview);

        $project->delete();

        return redirect()->route('admin.projects.index');
    }
}
