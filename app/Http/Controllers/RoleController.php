<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::all();

        return view('sistema.user.roles', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */

public function store(Request $request)
{
    $request->validate([
        'nombre' => 'required|string|max:255',
    ]);

    Role::create([
        'name' => $request->nombre,
        'guard_name' => 'web', // <-- Asegúrate de agregar esto
    ]);

    return redirect()->route('roles.index')->with('mensaje', 'Rol creado correctamente.');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        //$role = Role::find($id);
        $permisos  = Permission::all();
        return view('sistema.user.rolePermiso', compact('role', 'permisos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
    // Validación opcional pero recomendable
    $request->validate([
        'permisos' => 'nullable|array',
        'permisos.*' => 'exists:permissions,id',
    ]);

    // Sincronizar permisos (si no hay ninguno, limpia)
    $role->permissions()->sync($request->input('permisos', []));

    // Redirigir con mensaje de éxito
    return redirect()->route('roles.edit', $role)->with('mensaje', 'Permisos actualizados correctamente.');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $rol = Role::findOrFail($id);

        // Opcional: desvincular permisos antes de borrar (buena práctica)
        $rol->permissions()->detach();

        $rol->delete();

        return redirect()->route('roles.index')->with('mensaje', 'Rol eliminado correctamente');
    }
}
