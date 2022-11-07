<x-settings>
    <main>
        <h1 class="text-xl py-4 uppercase">Dashboard</h1>
        <div class="grid grid-cols-6">
            <section class="col-span-3 mr-4 border border-gray-600 rounded-xl p-2">
                <h2 class="border-b border-gray-600 text-lg px-4 py-2">User</h2>
                <div>
                    <table class="min-w-full divide-y divide-gray-200">
                        <tbody class="divide-y divide-gray-200">
                        @foreach($users as $user)
                            <tr>
                                <td class="px-4 py-2 whitespace-nowrap">
                                    {{$user->name}}
                                </td>
                                <td>
                                    {{$user->email}}
                                </td>
                                <td>
                                    <a href="#" class="text-red-500">delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </section>
            <section class="col-span-3 mr-4 border border-gray-600 rounded-xl p-2">
                <h2 class="border-b border-gray-600 text-lg px-4 py-2">Post</h2>
                <div>
                    <table class="min-w-full divide-y divide-gray-200">
                        <tbody class="divide-y divide-gray-200">
                        @foreach($posts as $post)
                            <tr>
                                <td class="px-4 py-2 whitespace-nowrap">
                                    {{$post->title}}
                                </td>
                                <td>
                                    {{$post->subtitle}}
                                </td>
                                <td>
                                    <button class="text-red-500" >delete</button>
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
