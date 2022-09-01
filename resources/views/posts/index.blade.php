<x-guest-layout>
    @include('shared.navbar')
        @foreach ($posts as $post)
           <li>{{$post->title}}</li>
        @endforeach
    {{ $posts->links() }}
    @include('shared.footer')
</x-guest-layout>
