<div>
    <main class="max-w-lg mx-auto p-4 rounded-xl border border-gray-500 static">
        <h1 class="font-bold text-xl text-gray-800">Live New Post</h1>
        <form class="mt-10" wire:submit.prevent="submit">
            @csrf

            <div class="mb-6">
                <label for="title" class="block mb-2 uppercase font-bold text-s text-gray-700">Title</label>
                <input id="title"
                       name="title"
                       type="text"
                       wire:model.lazy="title"
                       class="border border-gray-400 p-2 w-full rounded-xl">
                @error('title')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="subtitle" class="block mb-2 uppercase font-bold text-s text-gray-700">Subtitle</label>
                <input id="subtitle"
                       name="subtitle"
                       type="text"
                       wire:model.lazy="subtitle"
                       class="border border-gray-400 p-2 w-full rounded-xl">
                @error('subtitle')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="body" class="block mb-2 uppercase font-bold text-s text-gray-700">body</label>
                <input id="body"
                       name="body"
                       type="text"
                       wire:model.lazy="body"
                       class="border border-gray-400 p-2 w-full rounded-xl">
                @error('body')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button type="submit" class="px-6 py-2 text-center rounded-xl border border-gray-800 hover:bg-gray-300">
                    Publish
                </button>
            </div>
        </form>
        <div class="absolute">
            @if (session()->has('message'))
                <div
                    x-data="{show: true}"
                    x-init="setTimeout(() => show = false, 2000)"
                    x-show="show"
                    class="alert alert-success py-2 px-4 rounded-xl border border-green-800 text-green-900 bg-green-300">
                    {{ session('message') }}
                </div>
            @endif
        </div>
    </main>

</div>
