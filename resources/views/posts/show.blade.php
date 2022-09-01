<x-guest-layout>
    title:{{$post->title}}<br>
    guid: {{$post->guid}}<br>
    keywords:{{$post->keywords}}<br>
    excerpt: {{$post->excerpt}}<br>
    content:{{$post->content}}<br>
    image:<img src="{{$post->thumbnail}}"/><br>
    createdAt: {{$post->created_at}}
</x-guest-layout>
