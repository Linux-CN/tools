<x-guest-layout>
<h1>Search:{{$search}}</h1>
@foreach($posts as $post)
<li>{{$post->title}}</li>
@endforeach
{{ $posts->links() }}


</x-guest-layout>
