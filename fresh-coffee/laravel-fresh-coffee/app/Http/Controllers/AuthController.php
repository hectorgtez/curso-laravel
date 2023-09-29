<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegistroRequest;
use App\Http\Requests\LoginRequest;

class AuthController extends Controller
{
    public function register(RegistroRequest $request)
    {
        // Validar datos
        $data = $request->validated();

        // Crear el usuario
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password'])
        ]);

        // Retornar respuesta
        return [
            'token' => $user->createToken('token')->plainTextToken,
            'user' => $user
        ];
    }

    public function login(LoginRequest $request)
    {
        // Validar datos
        $data = $request->validated();

        if(!Auth::attempt($data)) {
            return response([
                'errors' => ['El correo y/o contraseña son incorrectos.']
            ], 422);
        }

        // Autenticar al usuario
        $user = Auth::user();

        // Retornar respuesta
        return [
            'token' => $user->createToken('token')->plainTextToken,
            'user' => $user
        ];
    }

    public function logout(Request $request)
    {

    }
}
