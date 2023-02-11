@extends('layout')

@section('content')
@include('bootstrap_section._search_box')
@unless(count($list)==0)
@foreach($list as $posts)
<x-listing-card :posts="$posts"/>
@endforeach

@else
<p>No posts found</p>
@endunless
</div>
@endsection




