@extends('layouts.app')

@section('titulo')
    Página principal
@endsection

@section('contenido')
    @if ($posts->count())
        <div class="w-4/5 mx-auto">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                @foreach($posts as $post)
                    <div>
                        <a href="{{route("posts.show", ['post' => $post, 'user' => $post->user])}}">
                            <img src="{{asset("uploads")."/".$post->imagen}}" alt="Imagen de publicación {{$post->titulo}}">
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="my-10">
                {{$posts->links()}}
            </div>
        </div>
    @else
        <p class="text-gray-600 uppercase text-sm text-center font-bold">No hay publicaciones</p>
    @endif
@endsection
