@extends('layout')

@section('content')

<div class="w3-content w3-padding" style="max-width:1564px">
<div class="w3-row-padding w3-grayscale">
    @foreach($list as $posts)
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="/w3images/team2.jpg" alt="John" style="width:100%">
      <h3>{{ $posts->title }}</h3>
      <p class="w3-opacity"></p>
      <p>{{ $posts->descripton }}</p>
      <p><button class="w3-button w3-light-grey w3-block">{{ $posts->company }}</button></p>
    </div>
    @endforeach
</div>
</div>

@endsection