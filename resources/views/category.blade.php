@extends('layout.main')

@section('content')
    <h1 class="mb-5">{{ $category }}</h1>

    @foreach ($posts as $post)
    <article>
        <h2><a href="/posts/{{ $post->slug }}"> {{ $post->title }}</a></h2>

        <p>By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }} </a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

        <p>{{ $post->excerpt}}

        <a href="/posts/{{ $post->slug }}" class="test-decoration-none">Read more...</a>
    </article>

    @endforeach
@endsection
