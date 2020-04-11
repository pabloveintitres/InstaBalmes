<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{

    //Retornos de las vistas provenientes de web.php alli se llama al controlador y al método.
    //Por convención se nombran los metodos igual que las rutas. Agrupar los métodos que retornan vistas
    //para identificarlos fácilmente.
    public function create()
    {
        return view('posts/create');

    }

    public function store()
    {
        $data = request()->validate([
            'caption' => 'required',
            'image' => ['required', 'image'],
        ]);

        \App\Post::create($data);

        dd(request()->all());
    }
}
