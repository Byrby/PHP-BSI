<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible"
          content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>{{ $post->title }}</h1>

    <p>{{ $post->content }}</p>

    <span>Créé par {{ $post->author }}</span>

    <a href="{{ route('blog.edit', [
        'id' => $post->id,
    ]) }}">
        Modifier
    </a>


    <form action="{{ route('blog.delete', [
        'id' => $post->id,
    ]) }}"
          method="POST">
        @csrf
        <button class=""
                onclick="return confirm('Êtes vous certain de vouloir supprimer le billet ?')">
            Supprimer
        </button>
    </form>

    <a href="{{ route('home') }}">
        Accueil
    </a>

</body>

</html>
