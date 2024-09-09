<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use App\Models\Setting\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::paginate(5);
        /* JSON */
        // return response()->json($companies, 200);
        /* View Blade */
        return view('pages.setting.company.index')->with([
            'companies' => $companies
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.setting.company.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'status' => 'required|max:255',
            'address' => 'required|max:255',
            'country' => 'required|max:255',
            'regency' => 'required|max:255',
            'postal_code' => 'required|max:10'
        ], [
            'name.required' => 'The name is required!',
            'name.max' => 'The name cannot be more than 255 characters.',
            'status.required' => 'The status is required!',
            'status.max' => 'The status cannot be more than 255 characters.',
            'address.required' => 'The address is required!',
            'address.max' => 'The address cannot be more than 255 characters.',
            'country.required' => 'The country is required!',
            'country.max' => 'The country cannot be more than 255 characters.',
            'regency.required' => 'The regency is required!',
            'regency.max' => 'The regency cannot be more than 255 characters.',
            'postal_code.required' => 'The postal code is required!',
            'postal_code.max' => 'The postal code cannot be more than 10 characters.',
        ]);

        Company::create([
            'name' => $request->name,
            'status' => $request->status,
            'address' => $request->address,
            'country' => $request->country,
            'regency' => $request->regency,
            'postal_code' => $request->postal_code,
        ]);

        /* JSON */
        // return response()->json([
        //     'message' => 'Company created successfully!'
        // ], 201);
        /* View Blade */
        return redirect()->route('companies.index')->with('success', 'Company created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $company = Company::findOrFail($id);
        /* JSON */
        // return response()->json($company, 200);
        /* View Blade */
        return view('pages.setting.company.show')->with([
            'company' => $company
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $company = Company::findOrFail($id);
        /* JSON */
        // return response()->json($company, 200);
        /* View Blade */
        return view('pages.setting.company.edit')->with([
            'company' => $company
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'status' => 'required|max:255',
            'address' => 'required|max:255',
            'country' => 'required|max:255',
            'regency' => 'required|max:255',
            'postal_code' => 'required|max:10'
        ], [
            'name.required' => 'The name is required!',
            'name.max' => 'The name cannot be more than 255 characters.',
            'status.required' => 'The status is required!',
            'status.max' => 'The status cannot be more than 255 characters.',
            'address.required' => 'The address is required!',
            'address.max' => 'The address cannot be more than 255 characters.',
            'country.required' => 'The country is required!',
            'country.max' => 'The country cannot be more than 255 characters.',
            'regency.required' => 'The regency is required!',
            'regency.max' => 'The regency cannot be more than 255 characters.',
            'postal_code.required' => 'The postal code is required!',
            'postal_code.max' => 'The postal code cannot be more than 10 characters.',
        ]);

        $company = Company::findOrFail($id);
        $company->update([
            'name' => $request->name,
            'status' => $request->status,
            'address' => $request->address,
            'country' => $request->country,
            'regency' => $request->regency,
            'postal_code' => $request->postal_code,
        ]);

        /* JSON */
        // return response()->json([
        //     'message' => 'Company updated successfully!'
        // ], 200);
        /* View Blade */
        return redirect()->route('companies.index')->with('success', 'Company updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $company = Company::findOrFail($id);
        $company->delete();

        /* JSON */
        // return response()->json([
        //     'message' => 'Company has been deleted!'
        // ], 200);
        /* View Blade */
        return redirect()->route('companies.index')->with('success', 'Company has been deleted!');
    }
}
