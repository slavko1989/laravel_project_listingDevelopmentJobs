
@props(['tagsCsv'])

@php
  $tags = explode(',',$tagsCsv);
@endphp

<div class="w3-white w3-margin">
    <div class="w3-container w3-white" style="margin-top: 5px;">
      @foreach($tags as $tag)
      <p>
        <span class="3-tag w3-light-grey w3-margin-bottom"><a href="/?tag={{ $tag }}" class="btn btn-primary">{{ $tag }}</a></span>
      </p>
      @endforeach
    </div>
  </div>