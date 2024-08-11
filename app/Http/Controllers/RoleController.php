<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::orderBy('id', 'DESC')->paginate(5);
        return view('pages.role.index')->with([
            'roles' => $roles
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $permissions = Permission::all();
        return view('pages.role.create')->with([
            'permissions' => $permissions
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:roles,name',
            'permissions' => 'required|array',
            'permissions.*' => 'exists:permissions,id'
        ]);

        $role = Role::create(['name' => $request->input('name')]);
        $permissions = $request->input('permissions');
        foreach ($permissions as $id) {
            $permission = Permission::find($id);
            $role->givePermissionTo($permission);
        }

        return redirect()->route('roles.create')->with('success', 'berhasil!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $role = Role::find($id);
        $role_permissions = Permission::join("role_has_permissions", "role_has_permissions.permission_id", "=", "permissions.id")
            ->where("role_has_permissions.role_id", $id)
            ->get();
        return view('pages.role.show')->with([
            'role' => $role,
            'role_permissions' => $role_permissions
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $role = Role::find($id);
        $permissions = Permission::all();
        $role_permissions = DB::table('role_has_permissions')
            ->join('permissions', 'role_has_permissions.permission_id', '=', 'permissions.id')
            ->where('role_has_permissions.role_id', $id)
            ->pluck('permissions.name', 'role_has_permissions.permission_id')
            ->all();

        return view('pages.role.edit')->with([
            'role' => $role,
            'permissions' => $permissions,
            'role_permissions' => $role_permissions
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'permissions' => 'required|array',
        ]);

        $role = Role::findOrFail($id);
        $role->update([
            'name' => $request->input('name'),
        ]);

        $permissions = $request->input('permissions');
        $validPermissions = Permission::whereIn('id', $permissions)->pluck('id')->toArray();
        $role->syncPermissions($validPermissions);

        return redirect()->route('roles.index')->with('success', 'berhasil update!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $role = Role::findOrFail($id);
        $role->delete();

        return redirect()->route('roles.index')->with('success', 'berhasil dihapus!');
    }
}
