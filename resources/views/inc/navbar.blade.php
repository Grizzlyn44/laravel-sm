<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <a class="navbar-brand" href="/">Acme</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item {{Request::is('/') ? 'active' : ''}}">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{Request::is('about') ? 'active' : ''}}" href="/about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{Request::is('contact') ? 'active' : ''}}" href="/contact">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{Request::is('messages') ? 'active' : ''}}" href="/messages">Messages</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{Request::is('post') ? 'active' : ''}}" href="/post">Posts</a>
      </li>

      @if(Auth::check() )
        <li class="nav-item">
          <a class="nav-link {{Request::is('user') ? 'active' : ''}}" href="{{ url('user', Auth::user()->id) }}">My posts</a>
        </li>
      @endif

    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      @if(Auth::check())
        <div class="btn-group btn-group-sm pull-right">
          <span class="username small">{{Auth::user()->email}}</span>
          <a href="logout" class="btn btn-default logout">Logout</a>
        </div>
      @endif
    </form>
  </div>
</nav>