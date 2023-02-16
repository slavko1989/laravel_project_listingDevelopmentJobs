@extends('layout')
@section('content')
@include('bootstrap_section._search_box')
@unless(count($list)==0)

@foreach($list as $posts)
  <x-listing-card :posts="$posts"/>  
  

<div class="w3-quarter" style="background: white;">
  <a href="/listings/{{ $posts->id }}/edit" style="margin-left: 178px;margin-top: -75px;position: absolute; font-family: !important;font-weight: bolder;letter-spacing: 3px;font-size: 18px;"><span class="glyphicon glyphicon-pencil"></span>EDIT</a>

    <form method="POST" action="/listings/{{ $posts->id }}">
      @csrf
      @method('DELETE')
   <button style="margin-left: 45px;margin-top: -73px;position: absolute; font-family: !important;font-weight: bolder;letter-spacing: 3px;font-size: 18px;"><span class="glyphicon glyphicon-trash"></span>DELETE</button>
 </form>
</div>
@endforeach

@else
<p>No posts found</p>
@endunless
@endsection