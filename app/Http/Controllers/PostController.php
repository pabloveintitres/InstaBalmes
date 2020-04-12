<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    // 2:07:03 Añadir middleware por Seguridad
    public function __construct()
    {
        $this->middleware('auth');
    }

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

        // 2:11:51 php artisan storage:link. Crear enlace simbólico [...]
        dd(request('image')->store('uploads', 'public'));

        //\App\Post::create($data);
        auth()->user()->posts()->create($data);

        dd(request()->all());
    }
}
