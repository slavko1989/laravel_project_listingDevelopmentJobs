@foreach($list as $posts)
<h2>
    {{$posts['title']}}
</h2>
<p>{{ $posts['description']  }}</p>
@endforeach