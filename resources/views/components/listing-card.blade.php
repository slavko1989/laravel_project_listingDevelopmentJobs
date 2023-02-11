@props(['posts'])

<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">
  <div class="w3-row-padding w3-padding-16 w3-center" id="food">
    <div class="w3-quarter" style="background: white;">
      <img src="{{asset('images/logojpg.jpg')}}" alt="" style="width:100%">

      <x-tags_card :tagsCsv="$posts->tags"/>

      <h3><a href="/listing/{{ $posts->id }}">{{ $posts->title }}</a></h3>
      <p class="w3-opacity"></p>
      <p>{{ Str::substr($posts->descripton,0,40) }}</p>
      <p><button class="w3-button w3-light-grey w3-block">{{ $posts->company }}</button></p>
    </div>
  </div>
</div>
