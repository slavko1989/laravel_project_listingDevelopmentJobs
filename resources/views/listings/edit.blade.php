@include('bootstrap_section._head')
@include('bootstrap_section._nav')
<div class="container" style="background-color: red;border-radius: 7px;margin-top: 7px;">
  <h2 style="text-align: center;">Edit job</h2>
  <form action="/listings/{{ $listing->id }}" method="POST"  enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="title">Title:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter tittle" name="title" value="{{ $listing->title }}">
      @error('title')
      <p style="color: black;">{{ $message }}</p>
      @enderror
    </div>
    <div class="form-group">
      <label for="pwd">Tags:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter tags" name="tags" value="{{ $listing->tags }}">
      @error('tags')
      <p style="color: black;">{{ $message }}</p>
      @enderror
    </div>
    <div class="form-group">
      <label for="pwd">Company:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter company" name="company" value="{{ $listing->company }}">
      @error('company')
      <p style="color: black;">{{ $message }}</p>
      @enderror
    </div>
    <div class="form-group">
      <label for="pwd">Location:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter location" name="location" value="{{ $listing->location }}">
      @error('location')
      <p style="color: black;">{{ $message }}</p>
      @enderror
    </div>
    <div class="form-group">
      <label for="pwd">Email:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter email" name="email" value="{{ $listing->email }}">
      @error('email')
      <p style="color: black;">{{ $message }}</p>
      @enderror
    </div>
    <div class="form-group">
      <label for="pwd">Website:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter website" name="website" value="{{ $listing->website }}">
      @error('website')
      <p style="color: black;">{{ $message }}</p>
      @enderror
    </div>
    <div class="form-group">
      <label for="pwd">Description:</label>
      <textarea type="text" class="form-control" id="pwd" placeholder="Enter Description" cols="40" rows="15" name="descripton">{{ $listing->descripton }}</textarea>
      @error('descipton')
      <p style="color: black;">{{ $message }}</p>
      @enderror
    </div>
     <div class="form-group">
      <label for="pwd">Logo:</label>
      <input type="file" class="form-control" id="pwd" placeholder="Enter logo" name="logo" value="{{ old('logo') }}">

      <img src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('images/logojpg.jpg') }}" alt="" style="width:100%">


      @error('logo')
      <p style="color: black;">{{ $message }}</p>
      @enderror
    </div>
    
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
</div>