<x-guest-layout>
    <x-slot name="header">
        {{ __('Blog') }}
    </x-slot>
    @session('message')
        {{ $value }}
    @endsession

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
</x-guest-layout>
