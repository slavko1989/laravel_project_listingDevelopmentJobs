@extends('layout')

@section('content')

<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
     @foreach($list as $posts)
    <img src="/images/logojpg.jpg" style="width:100%;" class="w3-round"><br><br>
    <h4><b>{{ $posts->created_at }} {{ $posts->title }}</b></h4>
    <p class="w3-text-grey">{{ $posts->descripton }}</p>
  </div>
  <div class="w3-bar-block">
    <a href="#portfolio" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>{{ $posts->website }}</a> 
    <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>{{ $posts->location }}</a> 
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>{{ $posts->email }}</a>
  </div>
 
  @endforeach
  
</nav>

@endsection