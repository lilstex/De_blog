<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal">De-Blog</h5>
    <nav class="my-2 my-md-0 mr-md-3">
      <a class="p-2 text-dark" href="/">Home</a>
      <a class="p-2 text-dark" href="/posts">Blogs</a>
      <a class="p-2 text-dark" href="/services">Services</a>
      <a class="p-2 text-dark" href="/about">About</a>

      @if (Auth::check())
      <a class="p-2 ml-auto" href="#">{{ Auth::user()->name }}</a>
      <a class="btn btn-outline-primary" href="/posts/create">Create Post</a>
      <a class="p-2 ml-auto" href="/logout">Log Out</a>
     
      @else
      <a class="p-2 text-dark" href="/login">Log In</a>
      <a class="p-2 text-dark" href="/register">Sign Up</a>

      @endif
  
     
    </nav>
   
  </div>
  
  