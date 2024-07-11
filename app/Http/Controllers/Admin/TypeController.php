<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $data = [
            "types" => Type::all()
        ];
        return view('admin.types.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return " ciao sono create";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Type $type)
    {
        $data = [
            "types" => $type
        ];
        return view('admin.types.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Type $type)
    {
        return " ciao sono edit";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Type $type)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Type $type)
    {
        //
    }
}
