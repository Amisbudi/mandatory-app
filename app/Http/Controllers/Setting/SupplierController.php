<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use App\Models\Setting\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $supplier = Supplier::paginate(5);
        /* JSON */
        // return response()->json($Supplier, 200);
        /* View Blade */
        return view('pages.setting.supplier.index')->with([
            'supplier' => $supplier
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.setting.supplier.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:225',
            'name_of_factory' => 'required|max:225',
            'type_of_goods' => 'required|max:225',
            'address' => 'required',
            'phone' => 'required|max:225',
            'information' => 'required|max:225',
            'purchase' => 'required|max:225',
            'maintenance' => 'required|max:225',
            'cost' => 'required|max:225'
        ], [
            'name.required' => 'The name of the supplier is required!',
            'name.max' => 'The name of the supplier cannot be more than 225 characters.',
            'name_of_factory.required' => 'The name of the factory is required!',
            'name_of_factory.max' => 'The name of the factory cannot be more than 225 characters.',
            'type_of_goods.required' => 'The type of the item is required!',
            'type_of_goods.max' => 'The type of the item cannot be more than 225 characters.',
            'address.required' => 'The address of the supplier is required!',
            'phone.required' => 'The name of the supplier is required!',
            'phone.max' => 'The name of the supplier cannot be more than 225 characters.',
            'information.required' => 'The information of the purchase is required!',
            'information.max' => 'The information of the purchase cannot be more than 225 characters.',
            'purchase.required' => 'The date of the purchase is required!',
            'purchase.max' => 'The date of the purchase cannot be more than 225 characters.',
            'maintenance.required' => 'The maintenance is required!',
            'maintenance.max' => 'The maintenance cannot be more than 225 characters.',
            'cost.required' => 'The cost of the maintenance is required!',
            'cost.max' => 'The costs of the maintenance cannot be more than 225 characters.',
        ]);

        Supplier::create([
            'name' => $request->name,
            'name_of_factory' => $request->name_of_factory,
            'type_of_goods' => $request->type_of_goods,
            'address' => $request->address,
            'phone' => $request->phone,
            'information' => $request->information,
            'purchase' => $request->purchase,
            'maintenance' => $request->maintenance,
            'cost' => $request->cost
        ]);
        /* JSON */
        // return response()->json([
        //     'message' => 'supplier created successfully!'
        // ], 201);
        /* View Blade */
        return redirect()->route('supplier.index')->with('success', 'supplier created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $supplier = Supplier::findOrFail($id);
        /* JSON */
        // return response()->json($Supplier, 200);
        /* View Blade */
        return view('pages.setting.supplier.show')->with([
            'supplier' => $supplier
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $supplier = Supplier::findOrFail($id);
        /* JSON */
        // return response()->json($Supplier, 200);
        /* View Blade */
        return view('pages.setting.supplier.edit')->with([
            'supplier' => $supplier
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|max:225',
            'name_of_factory' => 'required|max:225',
            'type_of_goods' => 'required|max:225',
            'address' => 'required',
            'phone' => 'required|max:225',
            'information' => 'required|max:225',
            'purchase' => 'required|max:225',
            'maintenance' => 'required|max:225',
            'cost' => 'required|max:225'
        ], [
            'name.required' => 'The name of the supplier is required!',
            'name.max' => 'The name of the supplier cannot be more than 225 characters.',
            'name_of_factory.required' => 'The name of the factory is required!',
            'name_of_factory.max' => 'The name of the factory cannot be more than 225 characters.',
            'type_of_goods.required' => 'The type of the item is required!',
            'type_of_goods.max' => 'The type of the item cannot be more than 225 characters.',
            'address.required' => 'The address of the supplier is required!',
            'phone.required' => 'The name of the supplier is required!',
            'phone.max' => 'The name of the supplier cannot be more than 225 characters.',
            'information.required' => 'The information of the purchase is required!',
            'information.max' => 'The information of the purchase cannot be more than 225 characters.',
            'purchase.required' => 'The date of the purchase is required!',
            'purchase.max' => 'The date of the purchase cannot be more than 225 characters.',
            'maintenance.required' => 'The maintenance is required!',
            'maintenance.max' => 'The maintenance cannot be more than 225 characters.',
            'cost.required' => 'The cost of the maintenance is required!',
            'cost.max' => 'The costs of the maintenance cannot be more than 225 characters.',
        ]);

        $supplier = Supplier::findOrFail($id);

        $supplier->update([
            'name' => $request->name,
            'name_of_factory' => $request->name_of_factory,
            'type_of_goods' => $request->type_of_goods,
            'address' => $request->address,
            'phone' => $request->phone,
            'information' => $request->information,
            'purchase' => $request->purchase,
            'maintenance' => $request->maintenance,
            'cost' => $request->cost
        ]);
        /* JSON */
        // return response()->json([
        //     'message' => 'supplier updated successfully!'
        // ], 201);
        /* View Blade */
        return redirect()->route('supplier.index')->with('success', 'supplier updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $supplier = Supplier::findOrFail($id);
        $supplier->delete();
        /* JSON */
        // return response()->json([
        //     'message' => 'supplier has been deleted!'
        // ], 200);
        /* View Blade */
        return redirect()->route('supplier.index')->with('success', 'supplier has been deleted!');
    }
}
