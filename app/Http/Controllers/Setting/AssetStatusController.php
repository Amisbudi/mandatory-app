<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use App\Models\Setting\AssetStatus;
use Illuminate\Http\Request;

class AssetStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $asset_status = AssetStatus::paginate(5);
        /* JSON */
        // return response()->json($asset_status, 200);
        /* View Blade */
        return view('pages.setting.asset-status.index')->with([
            'asset_status' => $asset_status
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.setting.asset-status.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:225'
        ], [
            'name.required' => 'The name of the asset status is required!',
            'name.max' => 'The name of the asset status cannot be more than 225 characters.',
        ]);

        AssetStatus::create([
            'name'=> $request->name
        ]);
        /* JSON */
        // return response()->json([
        //     'message' => 'Asset status created successfully!'
        // ], 201);
        /* View Blade */
        return redirect()->route('assetstatus.index')->with('success','Asset status created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $asset_status = AssetStatus::findOrFail($id);
        /* JSON */
        // return response()->json($asset_status, 200);
        /* View Blade */
        return view('pages.setting.asset-status.show')->with([
            'asset_status' => $asset_status
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $asset_status = AssetStatus::findOrFail($id);
        /* JSON */
        // return response()->json($asset_status, 200);
        /* View Blade */
        return view('pages.setting.asset-status.edit')->with([
            'asset_status' => $asset_status
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|max:225'
        ], [
            'name.required' => 'The name of the asset status is required!',
            'name.max' => 'The name of the asset status cannot be more than 225 characters.',
        ]);

        $asset_status = AssetStatus::findOrFail($id);

        $asset_status->update([
            'name' => $request->name
        ]);
        /* JSON */
        // return response()->json([
        //     'message' => 'Asset status updated successfully!'
        // ], 201);
        /* View Blade */
        return redirect()->route('assetstatus.index')->with('success','Asset status updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $asset_status = AssetStatus::findOrFail($id);
        $asset_status->delete();
        /* JSON */
        // return response()->json([
        //     'message' => 'Asset status has been deleted!'
        // ], 200);
        /* View Blade */
        return redirect()->route('assetstatus.index')->with('success','Asset status has been deleted!');
    }
}
