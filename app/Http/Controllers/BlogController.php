<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        //récupération des billets de blog
        $posts = Post::all();
        return view('welcome', [
            "postsList" => $posts
        ]);
    }

    public function create()
    {
        return view("dossier.test");
    }

    public function submit()
    {
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
    }

    public function show($id)
    {
        //Some code
        $post = Post::find($id);

        return view("show", [
            "post" => $post
        ]);
    }

    public function edit($id)
    {
        $post = Post::find($id);

        return view("edit", [
            "post" => $post
        ]);
    }

    public function update($id)
    {
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
        return redirect()->to(
            route("blog.show", [
                "id" => $post->id
            ])
        );
    }

    public function delete($id)
    {
        $postToDelete = Post::find($id);
        $postToDelete->delete();

        return redirect()
            ->to(route("home"))
            ->withMessage("Le billet de blog a été supprimé.");
    }
}
