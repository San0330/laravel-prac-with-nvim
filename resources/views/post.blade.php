<x-layout>
    <article>
       <h1> {{ $post->title }} </h1>
       <p> {{ $post->body }} </p>
       <a href="#"><i>{{ $post->category->name }}</i></a>
    </article>
    <a href="/">Go Back</a>
</x-layout>
