@props('success')
@if(session()->has('message'))

<div class="alert alert-success">
	<strong>{{ session('message') }}</strong>
</div>

@endif