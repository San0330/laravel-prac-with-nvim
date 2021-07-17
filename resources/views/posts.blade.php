<x-layout>
    @foreach ($posts as $post)
    <article>
        <h1>
           <a href="posts/{{ $post->slug }}">
                {{ $post->title}} 
           </a>
        </h1>
        <p>{{ $post->excerpt }}</p> 
       <a href="#"><i>{{ $post->category->name }}</i></a>
    </article>
    @endforeach
</x-layout>
