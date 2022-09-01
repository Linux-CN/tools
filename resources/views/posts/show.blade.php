<x-guest-layout>
@include('shared.navbar')
    title:{{$post->title}}<br>
    guid: {{$post->guid}}<br>
    keywords:{{$post->keywords}}<br>
    excerpt: {{$post->excerpt}}<br>
    content:<x-markdown theme="slack-ochin">{{$post->content}}</x-markdown>
<br>
    image:<img src="{{$post->thumbnail}}"/><br>
    createdAt: {{$post->created_at}}

 @include('shared.footer')
</x-guest-layout>
