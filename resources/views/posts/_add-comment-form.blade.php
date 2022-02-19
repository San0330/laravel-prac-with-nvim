<x-panel>
    @auth
        <form method="post" action="/posts/{{ $post->slug }}/comments">
            @csrf
            <header class="flex items-center">
                <img src="https://i.pravatar.cc/60?u={{ auth()->id() }}" alt="" height="40px" width="40px"
                    class="rounded-full" />
                <h2 class="ml-4">Want to comment?</h2>
            </header>

            <x-forms.textarea name="body" />

            <div class="flex justify-end border-t border-gray-200 pt-6">
                <x-forms.button>
                    Post
                </x-forms.button>
            </div>
        </form>
    @else
        <p class="font-semibold text-lg">
            <a href="/register" class="hover:underline">Register</a> or
            <a href="/login" class="hover:underline">Login</a> to
            leave a comment
        </p>
    @endauth
</x-panel>
