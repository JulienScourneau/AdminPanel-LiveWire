<x-settings>
    <main class="text-gray-800-800">
        <h1 class="text-xl py-4 uppercase ">Livewire Dashboard</h1>
        <div class="grid grid-cols-6">
            @livewire('dashboard')
            <section class="col-span-3 mr-4 border border-gray-600 rounded-xl p-2 h-max">
                <h2 class="border-b border-gray-600 text-lg px-4 py-2">Post</h2>
                <div>
                    <table class="min-w-full divide-y divide-gray-200">
                        <tbody class="divide-y divide-gray-200">
                        @foreach($posts as $post)
                            <tr>
                                <td class="px-2 py-1 text-sm">
                                    {{$post->title}}
                                </td>
                                <td class="text-xs ">
                                    {{$post->subtitle}}
                                </td>
                                <td>
                                    <form method="POST" action="/delete/post/{{$post->id}}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </main>
</x-settings>
