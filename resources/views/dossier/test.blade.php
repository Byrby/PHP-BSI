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
    <h1>Test</h1>

    @session('success')
        <p>{{ $value }}</p>
    @endsession


    <form action="/submit"
          method="POST">
        @csrf

        <label for="author">Auteur</label>
        <input type="text"
               id="author"
               name="author">

        <label for="title">Titre</label>
        <input type="text"
               id="title"
               name="title">

        <label for="resume">Resumé</label>
        <input type="text"
               id="resume"
               name="resume">

        <label for="content">Contenu</label>
        <textarea id="content"
                  name="content"></textarea>

        <button type="submit">
            Envoyer
        </button>

    </form>

</body>

</html>
