@if (session()->has('success'))
<div x-data="{show : true}" x-init="setTimeout(() => show = false, 4000 )" x-show="show"
    class="fixed bottom-3 right-3 bg-blue-500 text-white text-sm py-2 px-4 rounded-xl">
    <p>{{ session('success') }}</p>
</div>
@endif