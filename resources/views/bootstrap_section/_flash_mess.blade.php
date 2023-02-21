@if(session()->has('message'))
	<p class="mess" style="text-align: center;margin-top: 10px;">{{ session('message') }}</p>
@endif
<script type="text/javascript">
setTimeout(function(){ 
$('.mess').hide(); 
}, 3000);
</script> 
