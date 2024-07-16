<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Language;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            "languages" => Language::all()
        ];
        return view('admin.languages.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $languages = Language::all();
        $data = [
            "languages" => $languages
        ];
        return view('admin.languages.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            "icon" => 'required'
        ]);

        $newLanguage = new Language();
        $newLanguage->fill($data);
        $newLanguage->save();

        return redirect()->route('admin.languages.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Language $language)
    {
        $data = [
            "language" => $language
        ];
        return view('admin.languages.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Language $language)
    {
        $data = [
            "languages" => $language
        ];

        return view('admin.languages.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Language $language)
    {
        $data = $request->validate([
            'name' => 'required',
            "icon" => 'required'
        ]);
        $language->update($data);

        return redirect()->route('admin.languages.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Language $language)
    {
        $language->delete();

        return redirect()->route('admin.languages.index');
    }
}
