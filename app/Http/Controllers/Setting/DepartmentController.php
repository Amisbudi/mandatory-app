<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use App\Models\Setting\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $department = Department::paginate(5);
        /* JSON */
        // return response()->json($department, 200);
        /* View Blade */
        return view('pages.setting.department.index')->with([
            'department' => $department
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.setting.department.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:225'
        ], [
            'name.required' => 'The name of the department is required!',
            'name.max' => 'The name of the department cannot be more than 225 characters.',
        ]);
        $request->validate([
            'name_of_company' => 'required|max:225'
        ], [
            'name_of_company.required' => 'The name of the department is required!',
            'name_of_company.max' => 'The name of the company cannot be more than 225 characters.',
        ]);
        $request->validate([
            'head_of_department' => 'required|max:225'
        ], [
            'head_of_department.required' => 'The name of the department is required!',
            'head_of_department.max' => 'The head of the department cannot be more than 225 characters.',
        ]);

        Department::create([
            'name' => $request->name,
            'name_of_company' => $request->name_of_company,
            'head_of_department' => $request->head_of_department
        ]);
        /* JSON */
        // return response()->json([
        //     'message' => 'department created successfully!'
        // ], 201);
        /* View Blade */
        return redirect()->route('department.index')->with('success', 'department created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $department = Department::findOrFail($id);
        /* JSON */
        // return response()->json($department, 200);
        /* View Blade */
        return view('pages.setting.department.show')->with([
            'department' => $department
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $department = department::findOrFail($id);
        /* JSON */
        // return response()->json($department, 200);
        /* View Blade */
        return view('pages.setting.department.edit')->with([
            'department' => $department
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
            'name.required' => 'The name of the department is required!',
            'name.max' => 'The name of the department cannot be more than 225 characters.',
        ]);
        $request->validate([
            'name_of_company' => 'required|max:225'
        ], [
            'name_of_company.required' => 'The name of the department is required!',
            'name_of_company.max' => 'The name of the company cannot be more than 225 characters.',
        ]);
        $request->validate([
            'head_of_department' => 'required|max:225'
        ], [
            'head_of_department.required' => 'The name of the department is required!',
            'head_of_department.max' => 'The head of the department cannot be more than 225 characters.',
        ]);

        Department::update([
            'name' => $request->name,
            'name_of_company' => $request->name_of_company,
            'head_of_department' => $request->head_of_department
        ]);
        /* JSON */
        // return response()->json([
        //     'message' => 'department updated successfully!'
        // ], 201);
        /* View Blade */
        return redirect()->route('department.index')->with('success', 'department updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $department = department::findOrFail($id);
        $department->delete();
        /* JSON */
        // return response()->json([
        //     'message' => 'department has been deleted!'
        // ], 200);
        /* View Blade */
        return redirect()->route('department.index')->with('success', 'department has been deleted!');
    }
}
