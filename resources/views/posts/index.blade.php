<x-guest-layout>
@foreach($posts as $post)
<li>{{$post->title}}</li>
@endforeach
{{ $posts->links() }}


</x-guest-layout>
