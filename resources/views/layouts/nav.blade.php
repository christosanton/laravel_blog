  <div class="blog-masthead">
    <div class="container">
      <nav class="blog-nav">
        <a class="blog-nav-item active" href="/">Home</a>
 @if (! Auth::check())
        <a class="blog-nav-item" href="/login">Log In</a>

@endif

         @if (Auth::check())

        <a class="blog-nav-item" href="/logout">Log Out</a>
        
        @endif

        @if (Auth::check())

        <a class="blog-nav-item ml-auto" href="#">{{ Auth::user()->name }}</a>

        @endif
        
      </nav>
    </div>
  </div>