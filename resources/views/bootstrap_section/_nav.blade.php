<!-- nav bar -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="/" class="w3-bar-item w3-button"><b><img src="../images/logo.jpg" style="width: 50px;height: 50px;" alt=""></b> Laravel Project</a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">

      @auth
      
      <p>Welcome {{ auth()->user()->name }}</p><a href="/register" class="w3-bar-item w3-button">Register</a>
      <a href="/login" class="w3-bar-item w3-button">Login</a>
      <a href="/listings/create" class="w3-bar-item w3-button">Add Jobs</a>
      <form method="POST" action="/logout">
        @csrf
            <button type="submit">LOGOUT</button>
      </form>
      @else

      <a href="/register" class="w3-bar-item w3-button">Register</a>
      <a href="/login" class="w3-bar-item w3-button">Login</a>

      @endauth
    </div>
  </div>
</div>
<!-- nav bar -->