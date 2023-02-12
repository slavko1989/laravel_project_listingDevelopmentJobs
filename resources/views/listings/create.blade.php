@include('bootstrap_section._head')
@include('bootstrap_section._nav')
@include('bootstrap_section._header')
<div class="container" style="background-color: red;border-radius: 7px;margin-top: 7px;">
  <h2 style="text-align: center;">Create new job</h2>
  <form action="/listings" method="POST">
    @csrf
    <div class="form-group">
      <label for="title">Title:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter tittle" name="title">
      @error('title')
      <p style="color: black;">{{ $message }}</p>
      @enderror
    </div>
    <div class="form-group">
      <label for="pwd">Tags:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter tags" name="tags">
    </div>
    <div class="form-group">
      <label for="pwd">Company:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter company" name="company">
    </div>
    <div class="form-group">
      <label for="pwd">Location:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter location" name="location">
    </div>
    <div class="form-group">
      <label for="pwd">Email:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Website:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter website" name="website">
    </div>
    <div class="form-group">
      <label for="pwd">Description:</label>
      <textarea type="text" class="form-control" id="pwd" placeholder="Enter Description" cols="40" rows="15" name="descripton"></textarea>
    </div>
    
    <button type="submit" class="btn btn-primary">Create</button>
  </form>
</div>