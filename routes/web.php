<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //récupération des billets de blog
    $posts = Post::all();
    return view('welcome', [
        "postsList" => $posts
    ]);
})->name("home");


// Route for blogs
Route::group([
    "as" => "blog.",
    "prefix" => "/blog"
], function () {

    //Get blog post creation form
    Route::get("/nouveau-billet", function () {
        return view("dossier.test");
    })->name("create");

    //Get blog post creation form
    Route::post("/submit", function () {

        //Permet de valider les données du formulaire
        $data = request()->validate([
            "title" => "required|max:100",
            "author" => "required",
            "resume" => "required",
            "content" => "required",
        ]);

        $post = new Post();
        $post->fill($data);
        $post->save();

        return redirect()
            ->to(route("blog.create"))
            ->withSuccess("C'est super");
    })->name("submit");

    Route::get("/{id}", function ($id) {
        //Some code
        $post = Post::find($id);

        return view("show", [
            "post" => $post
        ]);
    })->name("show");


    Route::get("/{id}/edit", function ($id) {
        $post = Post::find($id);

        return view("edit", [
            "post" => $post
        ]);
    })->name("edit");

    Route::post('/{id}/update', function ($id) {
        //Permet de valider les données du formulaire
        $data = request()->validate([
            "title" => "required|max:100",
            "author" => "required",
            "resume" => "required",
            "content" => "required",
        ]);
        //On récupère le post en question
        $post = Post::find($id);
        //On change ses valeurs
        $post->fill($data);
        //On sauvegarde dans la DB
        $post->save();
        //On redirige vers la page du billet de blog
        return redirect()->to(route("blog.show", [
            "id" => $post->id
        ]));
    })->name("update");
});
