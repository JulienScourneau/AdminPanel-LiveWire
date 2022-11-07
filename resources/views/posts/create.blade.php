<x-settings>

            <main class="max-w-lg mx-auto p-4 rounded-xl border border-gray-500">
                <h1 class="font-bold text-xl text-gray-800">New Post</h1>
                <form action="/create/post" method="POST" class="mt-10">
                    @csrf

                    <div class="mb-6">
                        <label for="title" class="block mb-2 uppercase font-bold text-s text-gray-700">Title</label>
                        <input id="title"
                               name="title"
                               type="text"
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
                               class="border border-gray-400 p-2 w-full rounded-xl">
                        @error('body')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <button type="submit" class="px-6 py-2 text-center rounded-xl border border-gray-800 hover:bg-gray-300">Publish</button>
                    </div>
                </form>
            </main>
</x-settings>
