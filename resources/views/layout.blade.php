@include('bootstrap_section._head')
@include('bootstrap_section._nav')
@include('bootstrap_section._header')
<h1 style="font-family: fantasy;font-weight: bolder;color: sandybrown;text-align: center;">Job post
@if(session()->has('message'))
<div class="alert alert-success" x-data="{show:true}" x-init="setTimeout(()=>show - false,3000)" x-show="show">
	<p style="color: green;">{{ session('message') }}</p>
</div>
@endif
</h1>
@yield('content')


 
<div style="width: 100%;height: 100px;" >
	<p style="float: right;text-decoration: none;color: red;">{{ $list->links() }}</p>
</div>

@include('bootstrap_section._footer')
