<x-layout>
    <article>
       <h1> {{ $post->title }} </h1>
       <i>By <a href="#"> {{ $post->user->name }} </a> in {{ $post->category->name }}</i>
       <p> {{ $post->body }} </p>
    </article>
    <a href="/">Go Back</a>
</x-layout>
