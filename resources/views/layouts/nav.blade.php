<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="/">Groceries</a>
    <div class="nav navbar-nav navbar-right">
  @if (Auth::check())
    <a class="nav-link ml-auto" href="#">{{ Auth::user()->name }}</a>
    <a class="nav-link ml-auto" href="/logout">Log out</a>
  @else

      <a class="nav-link ml-auto" href="/login">Sign In</a>
      <a class="nav-link ml-auto" href="/register">Sign Up</a>

  @endif
  </div>
</nav>
