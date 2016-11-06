<ul class="nav nav-pills nav-stacked">
  <li><a href="{{ action('UsersController@show', Auth::user()->id) }}"><i class="fa fa-user"></i> My Account</a></li>
  <li><a href="{{ action('UsersController@orders') }}"><i class="fa fa-briefcase"></i> My Orders</a></li>
  <li><a href="{{ action('UsersController@sales') }}"><i class="fa fa-money"></i> My Sales</a></li>
  <li><a href="{{ action('UsersController@editPassword') }}"><i class="fa fa-wrench"></i> Change Password</a></li>
  <li><a href="{{ action('UsersController@edit', Auth::user()->id) }}"><i class="fa fa-pencil"></i> Edit Profile</a></li>
  <li><a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> Logout</a>
    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
      {{ csrf_field() }}
    </form>
  </li>
</ul>
