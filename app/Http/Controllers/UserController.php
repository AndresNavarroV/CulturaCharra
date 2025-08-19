<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gentes=User::all();
        return view('sistema.index')->with('gentes',$gentes);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sistema.create');
    }

    /**
     * Store a newly created resource in storage.
     */
public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|string|min:6|confirmed',
        'rol' => 'required|string',
    ], [
        // Mensajes personalizados
        'name.required' => 'El nombre es obligatorio.',
        'name.string' => 'El nombre debe ser una cadena de texto.',
        'name.max' => 'El nombre no debe exceder los 255 caracteres.',

        'email.required' => 'El correo electrónico es obligatorio.',
        'email.email' => 'El correo electrónico no tiene un formato válido.',
        'email.unique' => 'Este correo ya está registrado.',

        'password.required' => 'La contraseña es obligatoria.',
        'password.string' => 'La contraseña debe ser una cadena de texto.',
        'password.min' => 'La contraseña debe tener al menos 6 caracteres.',
        'password.confirmed' => 'La confirmación de la contraseña no coincide.',

        'rol.required' => 'El rol es obligatorio.',
        'rol.string' => 'El rol debe ser una cadena de texto.',
    ]);

    $gentes = new User();
    $gentes->name = $request->get('name');
    $gentes->email = $request->get('email');
    $gentes->password = Hash::make($request->get('password'));
    $gentes->rol = $request->get('rol');

    $gentes->save();

    return redirect('user')->with('mensaje', 'Usuario agregado con éxito');
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
    public function edit(string $id)
    {
        $gente = User::find($id);
        return view('sistema.edit')->with('gente',$gente);
    }

    /**
     * Update the specified resource in storage.
     */
public function update(Request $request, string $id)
{
    $gente = User::findOrFail($id);

    // Validaciones
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email,' . $id,
        'rol' => 'required|string|in:admin,usuario,cliente', // ajusta según roles reales
        'password' => 'nullable|string|min:6|confirmed',
    ], [
        'name.required' => 'El nombre es obligatorio.',
        'email.required' => 'El correo electrónico es obligatorio.',
        'email.email' => 'El correo electrónico no tiene un formato válido.',
        'email.unique' => 'El correo electrónico ya está registrado.',
        'rol.required' => 'El rol es obligatorio.',
        'password.min' => 'La contraseña debe tener al menos 6 caracteres.',
        'password.confirmed' => 'La confirmación de la contraseña no coincide.',
    ]);

    // Actualización de campos básicos
    $gente->name = $request->get('name');
    $gente->email = $request->get('email');

    if ($request->filled('password')) {
        $gente->password = Hash::make($request->get('password'));
    }

    $gente->save();

    // Actualizar roles con Spatie
    $gente->syncRoles([$request->get('rol')]);

    return redirect('/user')->with('mensaje', 'Usuario actualizado correctamente');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $gente = User::findOrFail($id);
        $gente->delete();
        return redirect('/user');
    }
}
