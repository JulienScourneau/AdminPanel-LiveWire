<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 p-6 rounded-xl border border-gray-500">
            <h1 class="font-bold text-xl text-gray-800">Sign up</h1>
            <form action="/signup" method="POST" class="mt-10">
                @csrf

                <div class="mb-6">
                    <label for="name" class="block mb-2 uppercase font-bold text-s text-gray-700">Name</label>
                    <input id="name"
                           name="name"
                           type="text"
                           class="border border-gray-400 p-2 w-full rounded-xl">
                    @error('name')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="email" class="block mb-2 uppercase font-bold text-s text-gray-700">Email</label>
                    <input id="email"
                           name="email"
                           type="email"
                           class="border border-gray-400 p-2 w-full rounded-xl">
                    @error('email')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="password" class="block mb-2 uppercase font-bold text-s text-gray-700">Password</label>
                    <input id="password"
                           name="password"
                           type="password"
                           class="border border-gray-400 p-2 w-full rounded-xl">
                    @error('password')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <button type="submit" class="border border-gray-500 px-6 py-2 rounded-xl text-white bg-teal-500 hover:bg-teal-600">Sign up</button>
                </div>

            </form>
        </main>
    </section>
</x-layout>
