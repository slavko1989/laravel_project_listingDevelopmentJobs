<h1>{{ $header }}</h1>

@unless(count($list)==0)


@foreach($list as $posts)
<h2>
    <a href="/listing/{{$posts['id'] ?? ''}}">{{$posts['title']}}</a>
</h2>
<p>{{ $posts['description']  }}</p>
@endforeach

@else
<p>No posts found</p>
@endunless




