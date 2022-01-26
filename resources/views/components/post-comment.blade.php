@props(['comment'])
<x-panel class="bg-gray-100">
    <article class="flex space-x-4">
        <div class="flex-shrink-0">
            <img class="rounded-md" src="https://i.pravatar.cc/60?u={{ $comment->id }}" alt="" height="60px"
                width="60px" />
        </div>
        <div>
            <header class="mb-4 rounded-xl">
                <h3 class="font-bold">{{ $comment->author->name }}</h3>
                <p class="text-xs">
                    Posted
                    <time>{{ $comment->created_at->diffForHumans() }}</time>
                </p>
            </header>
            <p>{{ $comment->body }}</p>
        </div>
    </article>
</x-panel>
