<section class="col-span-3 mr-4 border border-gray-600 rounded-xl p-2 h-max">
    <h2 class="border-b border-gray-600 text-lg px-4 py-2">User</h2>
    <div>
        <table class="min-w-full divide-y divide-gray-200">
            <tbody class="divide-y divide-gray-200">
            @foreach($users as $user)
                <div>
                    <tr>
                        <td class="px-2 py-1 text-sm">
                            {{$user->name}}
                        </td>
                        <td class="text-xs">
                            {{$user->email}}
                        </td>
                        <td>

                            <button wire:click="removeUser({{$user}})" class="text-red-500">Delete</button>
                        </td>
                    </tr>
                </div>
            @endforeach
            </tbody>
        </table>
    </div>
</section>


