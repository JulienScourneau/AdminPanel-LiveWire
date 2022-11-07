<x-layout>
    <section class="pt-10 bg-gradient-to-b from-slate-800 to-slate-600 text-white">
        <main class="max-w-6xl mx-auto space-y-6">
            <div class="grid grid-cols-6">
                @foreach($posts as $post)
                    <x-post-card :post="$post"></x-post-card>
                @endforeach
            </div>
        </main>
    </section>
</x-layout>
