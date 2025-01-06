<x-app-layout>
    <h1>Modification d'un billet de blog</h1>

    @session('success')
        <p>{{ $value }}</p>
    @endsession

    <a href="{{ route('home') }}">
        Accueil
    </a>

    <form action="{{ route('blog.update', [
        'id' => $post->id,
    ]) }}"
          method="POST">
        @csrf

        @include('elements.form', [
            'post' => $post,
        ])

        <button type="submit">
            Modifer
        </button>

    </form>
</x-app-layout>
