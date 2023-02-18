@include('bootstrap_section._head')
<div class="container" style="background-color: red;border-radius: 7px;margin-top: 7px;">
  <h2 style="text-align: center; font-family: monospace;"><a href="/" class="btn btn-warning">GO BACK</a> LOGIN PAGE</h2>
  <form action="/users/authenticate" method="POST"  enctype="multipart/form-data">
    @csrf

    <div class="form-group">
      <label for="pwd">Email:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter email" name="email" value="{{ old('email') }}">
      @error('e,ail')
      <p style="color: black;">{{ $message }}</p>
      @enderror
    </div>

    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="password" value="{{ old('password') }}">
      @error('password')
      <p style="color: black;">{{ $message }}</p>
      @enderror
    </div>
 
    <button type="submit" class="btn btn-primary">Sign in</button>
    <a href="/register" class="btn btn-warning">If you don't have account yet, please register here</a>
  </form>
</div>