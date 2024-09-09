<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use App\Models\Setting\SetupModel;
use Illuminate\Http\Request;

class SetupModelController extends Controller
{
    public function index()
    {
        $setupModels = SetupModel::paginate(5);
        /* JSON */
        // return response()->json($setupModels, 200);
        /* View Blade */
        return view('pages.setting.setupmodel.index')->with([
            'setupModel' => $setupModels
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.setting.setupmodel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'type' => 'required|max:255',
            'material' => 'required|max:255',
            'information' => 'nullable',
            'maintenance' => 'nullable'
        ], [
            'name.required' => 'The name is required!',
            'name.max' => 'The name cannot be more than 255 characters.',
            'type.required' => 'The type is required!',
            'type.max' => 'The type cannot be more than 255 characters.',
            'material.required' => 'The material is required!',
            'material.max' => 'The material cannot be more than 255 characters.',
            'information.max' => 'The information cannot be more than 65535 characters.',
            'maintenance.max' => 'The maintenance cannot be more than 65535 characters.',
        ]);

        SetupModel::create([
            'name' => $request->name,
            'type' => $request->type,
            'material' => $request->material,
            'information' => $request->information,
            'maintenance' => $request->maintenance,
        ]);

        /* JSON */
        // return response()->json([
        //     'message' => 'SetupModel created successfully!'
        // ], 201);
        /* View Blade */
        return redirect()->route('setupmodel.index')->with('success', 'SetupModel created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $setupModel = SetupModel::findOrFail($id);
        /* JSON */
        // return response()->json($setupModel, 200);
        /* View Blade */
        return view('pages.setting.setupmodel.show')->with([
            'setupModel' => $setupModel
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $setupModel = SetupModel::findOrFail($id);
        /* JSON */
        // return response()->json($setupModel, 200);
        /* View Blade */
        return view('pages.setting.setupmodel.edit')->with([
            'setupModel' => $setupModel
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'type' => 'required|max:255',
            'material' => 'required|max:255',
            'information' => 'nullable',
            'maintenance' => 'nullable'
        ], [
            'name.required' => 'The name is required!',
            'name.max' => 'The name cannot be more than 255 characters.',
            'type.required' => 'The type is required!',
            'type.max' => 'The type cannot be more than 255 characters.',
            'material.required' => 'The material is required!',
            'material.max' => 'The material cannot be more than 255 characters.',
            'information.max' => 'The information cannot be more than 65535 characters.',
            'maintenance.max' => 'The maintenance cannot be more than 65535 characters.',
        ]);

        $setupModel = SetupModel::findOrFail($id);
        $setupModel->update([
            'name' => $request->name,
            'type' => $request->type,
            'material' => $request->material,
            'information' => $request->information,
            'maintenance' => $request->maintenance,
        ]);

        /* JSON */
        // return response()->json([
        //     'message' => 'SetupModel updated successfully!'
        // ], 200);
        /* View Blade */
        return redirect()->route('setupmodel.index')->with('success', 'SetupModel updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $setupModel = SetupModel::findOrFail($id);
        $setupModel->delete();

        /* JSON */
        // return response()->json([
        //     'message' => 'SetupModel has been deleted!'
        // ], 200);
        /* View Blade */
    }
}
