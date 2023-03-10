@props(['posts'])
<div class="w3-main w3-content w3-padding" style="max-width:800px;margin-top:50px">
  <div class="w3-row-padding w3-padding-16 w3-center" id="food">
    <img src="{{ $posts->logo ? asset('storage/' . $posts->logo) : asset('images/logojpg.jpg') }}" alt="" style="width:100%">
    <x-tags_card :tagsCsv="$posts->tags"/>
    <h3><a href="/listing/{{ $posts->id }}">{{ $posts->title }}</a></h3>
    <p class="w3-opacity"></p>
    <p>{{ Str::substr($posts->descripton,0,40) }}</p>
    <p><button class="w3-button w3-light-grey w3-block">{{ $posts->company }}</button></p>
  </div>
</div>