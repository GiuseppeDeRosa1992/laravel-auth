<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        return response()->json([
            'success' => true,
            'projects' => Project::with(['type', 'languages'])->orderByDesc('id')->paginate(9),
        ]);
    }

    //chiamo la funziona latest come l'ho chiamta alla fine nel projectController e gli passo con take solo gli ultimi 6 progetti
    public function latest()
    {
        return response()->json([
            'success' => true,
            'projects' => Project::with(['type', 'languages'])->orderByDesc('id')->take(6)->get(),
        ]);
    }

    //chiamo la funziona show come l'ho chiamta alla fine nel projectController e gli passo
    public function show($slug)
    {
        $project = Project::with(['type', 'languages'])->where('slug', $slug)->first();

        if ($project) {
            return response()->json([
                'success' => true,
                'project' => $project
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'not found'
            ]);
        };
    }
}
