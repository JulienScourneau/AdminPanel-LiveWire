@props(['post'])
<article class="col-span-3 px-2 py-4 border-2 border-gray-200 rounded-2xl m-5">
    <div>
        <h1 class="text-xl font-bold mb-2">{{$post->title}}</h1>
    </div>
    <div class="text-sm font-semibold mb-4">
        {{$post->subtitle}}
    </div>
    <div class="text-xs font-semibold">
        {!! $post->body !!}
    </div>
</article>
