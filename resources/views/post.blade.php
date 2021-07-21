<x-layout>
    <article>
       <h1> {{ $post->title }} </h1>
       <i>By <a href="/author/{{ $post->author->id }}"> {{ $post->author->name }} </a> in 
       <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</i></a>
       <p> {{ $post->body }} </p>
    </article>
    <a href="/">Go Back</a>
</x-layout>
