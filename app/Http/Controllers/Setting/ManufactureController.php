<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use App\Models\Setting\Manufacture;
use Illuminate\Http\Request;

class ManufactureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $manufacture = Manufacture::paginate(5);
        /* JSON */
        // return response()->json($manufacture, 200);
        /* View Blade */
        return view('pages.setting.manufacture.index')->with([
            'manufacture' => $manufacture
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.setting.manufacture.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:225',
            'detail' => 'required|max:225',
        ], [
            'name.required' => 'The name of the manufacture is required!',
            'name.max' => 'The name of the manufacture cannot be more than 225 characters.',
            'detail.required' => 'The name of the manufacture is required!',
            'detail.max' => 'The detail of the manufacture cannot be more than 225 characters.',
        ]);

        Manufacture::create([
            'name' => $request->name,
            'detail' => $request->detail
        ]);
        /* JSON */
        // return response()->json([
        //     'message' => 'manufacture created successfully!'
        // ], 201);
        /* View Blade */
        return redirect()->route('manufacture.index')->with('success', 'manufacture created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $manufacture = Manufacture::findOrFail($id);
        /* JSON */
        // return response()->json($manufacture, 200);
        /* View Blade */
        return view('pages.setting.manufacture.show')->with([
            'manufacture' => $manufacture
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $manufacture = Manufacture::findOrFail($id);
        /* JSON */
        // return response()->json($manufacture, 200);
        /* View Blade */
        return view('pages.setting.manufacture.edit')->with([
            'manufacture' => $manufacture
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|max:225',
            'detail' => 'required|max:225'
        ], [
            'name.required' => 'The name of the manufacture is required!',
            'name.max' => 'The name of the manufacture cannot be more than 225 characters.',
            'detail.required' => 'The name of the manufacture is required!',
            'detail.max' => 'The detail of the manufacture cannot be more than 225 characters.',
        ]);

        Manufacture::update([
            'name' => $request->name,
            'detail' => $request->detail
        ]);
        /* JSON */
        // return response()->json([
        //     'message' => 'manufacture updated successfully!'
        // ], 201);
        /* View Blade */
        return redirect()->route('manufacture.index')->with('success', 'manufacture updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $manufacture = Manufacture::findOrFail($id);
        $manufacture->delete();
        /* JSON */
        // return response()->json([
        //     'message' => 'manufacture has been deleted!'
        // ], 200);
        /* View Blade */
        return redirect()->route('manufacture.index')->with('success', 'manufacture has been deleted!');
    }
}
