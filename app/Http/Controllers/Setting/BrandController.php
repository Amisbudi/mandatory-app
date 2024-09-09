<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use App\Models\Setting\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::paginate(5);
        /* JSON */
        // return response()->json($brands, 200);
        /* View Blade */
        return view('pages.setting.brand.index')->with([
            'brands' => $brands
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.setting.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:225',
            'address' => 'required|max:225',
            'factory' => 'required|max:225'
        ], [
            'name.required' => 'The brand name is required!',
            'name.max' => 'The brand name cannot be more than 225 characters.',
            'address.required' => 'The address is required!',
            'address.max' => 'The address cannot be more than 225 characters.',
            'factory.required' => 'The factory name is required!',
            'factory.max' => 'The factory name cannot be more than 225 characters.',
        ]);

        Brand::create([
            'name' => $request->name,
            'address' => $request->address,
            'factory' => $request->factory
        ]);

        /* JSON */
        // return response()->json([
        //     'message' => 'Brand created successfully!'
        // ], 201);
        /* View Blade */
        return redirect()->route('brand.index')->with('success', 'Brand created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $brand = Brand::findOrFail($id);
        /* JSON */
        // return response()->json($brand, 200);
        /* View Blade */
        return view('pages.setting.brand.show')->with([
            'brand' => $brand
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $brand = Brand::findOrFail($id);
        /* JSON */
        // return response()->json($brand, 200);
        /* View Blade */
        return view('pages.setting.brand.edit')->with([
            'brand' => $brand
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|max:225',
            'address' => 'required|max:225',
            'factory' => 'required|max:225'
        ], [
            'name.required' => 'The brand name is required!',
            'name.max' => 'The brand name cannot be more than 225 characters.',
            'address.required' => 'The address is required!',
            'address.max' => 'The address cannot be more than 225 characters.',
            'factory.required' => 'The factory name is required!',
            'factory.max' => 'The factory name cannot be more than 225 characters.',
        ]);

        $brand = Brand::findOrFail($id);
        $brand->update([
            'name' => $request->name,
            'address' => $request->address,
            'factory' => $request->factory
        ]);

        /* JSON */
        // return response()->json([
        //     'message' => 'Brand updated successfully!'
        // ], 201);
        /* View Blade */
        return redirect()->route('brand.index')->with('success', 'Brand updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $brand = Brand::findOrFail($id);
        $brand->delete();

        /* JSON */
        // return response()->json([
        //     'message' => 'Brand has been deleted!'
        // ], 200);
        /* View Blade */
        return redirect()->route('brand.index')->with('success', 'Brand has been deleted!');
    }
}
