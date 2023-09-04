<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    public function __construct() {
        $this->middleware('auth')->except(["index", "show"]);
    }

    public function index(User $user) {
        $posts = Post::where("user_id", $user->id)->paginate(8);

        return view('dashboard', [
            "user" => $user,
            "posts" => $posts
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

    public function show(User $user, Post $post) {
        return view("posts.show", [
            "user" => $user,
            "post" => $post
        ]);
    }

    public function destroy(Post $post) {
        /**
         * Comprobar si el usuario autenticado
         * es el mismo que el autor de la publicacion
         */
        $this->authorize("delete", $post);

        // Borrar publicacion
        $post->delete();

        // Borrar imagen
        $imagen_path = public_path("uploads/".$post->imagen);
        if(File::exists($imagen_path)) {
            unlink($imagen_path);
        }

        // Redireccionar al muro de publicaciones
        return redirect()->route("posts.index", auth()->user()->username);
    }
}
