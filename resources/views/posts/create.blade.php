<x-layout>
    <section class="py-8 max-w-sm mx-auto">
        <h1 class="text-xl font-bold mb-4">
            Publish New Post
        </h1>
        <x-panel>
            <form action="/admin/posts" method="post" enctype="multipart/form-data">
                @csrf

                <x-forms.input name='title' />
                <x-forms.input name='slug' />
                <x-forms.input name='thumbnail' type='file' />
                <x-forms.textarea name='excerpt' />
                <x-forms.textarea name='body' />

                <x-forms.field>

                    <x-forms.label name="category" />

                    <select name="category_id" id="category_id">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                {{ ucwords($category->name) }}</option>
                        @endforeach
                    </select>

                    <x-forms.error name="category" />
                </x-forms.field>

                <x-forms.button>Publish</x-forms.button>

            </form>
        </x-panel>
    </section>
</x-layout>
