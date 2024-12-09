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
    <h1>Blog</h1>

    <a href="{{ route('blog.create') }}">
        Ajouter un article
    </a>

    @foreach ($postsList as $currentPost)
        <div>
            <a href="{{ route('blog.show', [
                'id' => $currentPost->id,
            ]) }}">
                {{ $currentPost->title }}
            </a>
            {{ $currentPost->resume }}
        </div>
    @endforeach

</body>

</html>
