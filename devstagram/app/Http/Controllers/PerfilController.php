<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class PerfilController extends Controller
{
    public function __construct() {
        $this->middleware("auth");
    }

    public function index() {
        return view("perfil.index");
    }

    public function store(Request $request) {
        // Modificar el request
        $request->request->add(["username" => Str::slug($request->username)]);

        // Validar campos del formulario
        $this->validate($request, [
            "username" => ["required", "unique:users,username,".auth()->user()->id, "min:3", "max:20", "not_in:editar-perfil"]
        ]);

        if($request->imagen) {
            $imagen = $request->file("imagen");

            $nombreImagen = Str::uuid() . "." . $imagen->extension();
            $imagenPath = public_path("perfiles") . "/" . $nombreImagen;

            $imagenServidor = Image::make($imagen);
            $imagenServidor->fit(1000, 1000);
            $imagenServidor->save($imagenPath);
        }

        // Crear el objeto del usuario modificado
        $usuario = User::find(auth()->user()->id);
        $auxImagen = $usuario->imagen; // Variable auxiliar para borrar imagen anterior
        $usuario->username = $request->username;
        $usuario->imagen = $nombreImagen ?? auth()->user()->imagen ?? "";

        // Guardar cambios
        $usuario->save();

        // Borrar imagen de perfil anterior
        if($request->imagen) {
            $imagen_path = public_path("perfiles"."/".$auxImagen);
            if(File::exists($imagen_path)) {
                unlink($imagen_path);
            }
        }

        // Redireccionar
        return redirect()->route("posts.index", $usuario->username);
    }
}
