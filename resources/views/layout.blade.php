@include('bootstrap_section._head')
@include('bootstrap_section._nav')
@include('bootstrap_section._header')
<h1 style="font-family: fantasy;font-weight: bolder;color: sandybrown;text-align: center;">Job post

</h1>
@yield('content')


 
<div style="width: 100%;height: 100px;" >
	<p style="float: right;text-decoration: none;color: red;">{{ $list->links() }}</p>
</div>

@include('bootstrap_section._footer')
