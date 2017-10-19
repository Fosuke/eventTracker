<div class="masthead clearfix">
  <div class="inner">
    <h3 class="masthead-brand">
    	Event Tracker
    	
    </h3>
    <nav class="nav nav-masthead">
      <a class="nav-link {{ (Request::is('/') ? 'active' : '') }}" href="/">Home</a>
      <a class="nav-link {{ (Request::is('events') ? 'active' : '') }}" href="/events">Events</a>
      <a class="nav-link {{ (Request::is('eventNames') ? 'active' : '') }}" href="/eventNames">Event Names</a>
      <a class="nav-link {{ (Request::is('categories') ? 'active' : '') }}" href="/categories">Categories</a>
      @if (Auth::check())
        
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{Auth::user()->name}}
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item btn btn-danger" href="/logout">Sign Out</a>
          </div>
       
      @else
        <a class="nav-link {{ (Request::is('register') ? 'active' : '') }}" href="/register">Register</a>
        <a class="nav-link {{ (Request::is('login') ? 'active' : '') }}" href="/login">Login</a>
      @endif
    </nav>
  </div>
</div>