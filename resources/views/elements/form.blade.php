<label for="author">Auteur</label>
<input type="text"
       id="author"
       value="{{ $post->author ?? '' }}"
       name="author">
@error('author')
    <div>{{ $message }}</div>
@enderror
<br>

<label for="title">Titre</label>
<input type="text"
       id="title"
       value="{{ $post->title ?? '' }}"
       name="title">
@error('title')
    <div>{{ $message }}</div>
@enderror
<br>

<label for="resume">Resumé</label>
<input type="text"
       id="resume"
       value="{{ $post->resume ?? '' }}"
       name="resume">
@error('resume')
    <div>{{ $message }}</div>
@enderror
<br>

<label for="content">Contenu</label>
<textarea id="content"
          name="content">{{ $post->content ?? '' }}</textarea>
@error('content')
    <div>{{ $message }}</div>
@enderror
<br>
