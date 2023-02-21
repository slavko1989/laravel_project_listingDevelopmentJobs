<!-- nav bar -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="/" class="w3-bar-item w3-button"><b><img src="../images/logo.jpg" style="width: 50px;height: 50px;" alt=""></b> Laravel Project</a>
       @include('bootstrap_section._flash_mess')
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">

    @auth
        <ul class="list-group list-group-horizontal">
          <li class="list-group-item" style="border: none;"><a href="/listings/menage" class="w3-bar-item w3-button">Menage</a></li>
          <li class="list-group-item" style="border: none;"><a href="/listings/create" class="w3-bar-item w3-button">Add Jobs</a></li>
          <li class="list-group-item" style="border: none;">Welcome {{ auth()->user()->name }}</li>
          <li class="list-group-item" style="border: none;">
            <form method="POST" action="/logout">
                @csrf
                    <input  type="submit" style="top: 50px;" value="LOGOUT">
              </form></li>
        </ul>

      @else

      <a href="/register" class="w3-bar-item w3-button">Register</a>
      <a href="/login" class="w3-bar-item w3-button">Login</a>

      @endauth
    </div>
  </div>
</div>
<!-- nav bar -->