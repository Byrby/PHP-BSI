<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible"
          content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Ajout d'un billet de blog</h1>

    @session('success')
        <p>{{ $value }}</p>
    @endsession

    <a href="{{ route('home') }}">
        Accueil
    </a>

    <form action="{{ route('blog.submit') }}"
          method="POST">
        @csrf

        @include('elements.form')

        <button type="submit">
            Envoyer
        </button>

    </form>

</body>

</html>
