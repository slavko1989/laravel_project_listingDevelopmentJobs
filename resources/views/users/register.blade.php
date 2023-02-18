@include('bootstrap_section._head')
<div class="container" style="background-color: red;border-radius: 7px;margin-top: 7px;">
  <h2 style="text-align: center; font-family: monospace;"><a href="/" class="btn btn-warning">GO BACK</a> REGISTER PAGE</h2>
  <form action="/users" method="POST"  enctype="multipart/form-data">
    @csrf

    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter name" name="name" value="{{ old('name') }}">
      @error('name')
      <p style="color: black;">{{ $message }}</p>
      @enderror
    </div>

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

    <div class="form-group">
      <label for="pwd">Password2:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Confirm password" name="password_confirmation" value="{{ old('password_confirmation') }}">
      @error('password_confirmation')
      <p style="color: black;">{{ $message }}</p>
      @enderror
    </div>
    
    <button type="submit" class="btn btn-primary">Sign up</button>
    <a href="/login" class="btn btn-warning">If you are register, you can login here</a>
  </form>
</div>