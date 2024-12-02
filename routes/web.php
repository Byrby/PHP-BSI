<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get("/test", function () {
    return view("dossier.test");
});

Route::post("/submit", function () {
    $data = request()->all();

    $post = new Post();
    $post->fill($data);
    $post->save();

    return redirect()->to("/test")->withSuccess("C'est super");
});
