<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index(User $user) {
        return view('dashboard', [
            "user" => $user
        ]);
    }

    public function create() {
        return view('posts.create');
    }

    public function store(Request $request) {
        // Validacion de datos ingresados
        $this->validate($request, [
            "titulo" => "required|max:255",
            "descripcion" => "required",
            "imagen" => "required"
        ]);

        // Creacion y almacenamiento de nuevo registro
        // Post::create([
        //     "titulo" => $request->titulo,
        //     "descripcion" => $request->descripcion,
        //     "imagen" => $request->imagen,
        //     "user_id" => auth()->user()->username
        // ]);

        // Otra forma de crear el registro
        // $post = new Post();
        // $post->titulo = $request->titulo;
        // $post->descripcion = $request->descripcion;
        // $post->imagen = $request->imagen;
        // $post->user_id = auth()->user()->username;

        // Creacion y almacenamiento de registro con relaciones
        $request->user()->posts()->create([
            "titulo" => $request->titulo,
            "descripcion" => $request->descripcion,
            "imagen" => $request->imagen,
            "user_id" => auth()->user()->username
        ]);

        return redirect()->route("posts.index", auth()->user()->username);
    }
}
