<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ url('/firstpage') }}">
                    Laravel Blog
                </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="{{Request::is('firstpage') ? "active" : "" }}"><a href="/firstpage">Home</span></a></li>
        <li class="{{Request::is('blog') ? "active" : "" }}"><a href="/blog">Blog</span></a></li>
         <li class="{{Request::is('create') ? "active" : "" }}"><a href="{{url('/posts/create')}}">Create</a></li>
         <li class="{{Request::is('all posts') ? "active" : "" }}"><a href="{{url('/posts')}}">All Posts</a></li>

        <li class="{{Request::is('out') ? "active" : "" }}"><a href="/out">About</a></li>
        <li class="{{Request::is('contact') ? "active" : "" }}"><a href="/contact">Contact</a></li>
        
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        @if(Auth::check())
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Account  <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{url('/posts')}}">All posts</a></li>
            <li><a href="{{route('categories.index')}}">Categories</a></li>
           <li role="separator" class="divider"></li>
            <li><a href="{{url('/auth/logout')}}">Logout</a></li>
          </ul>
        </li>

        @else
        <a href="http://localhost:8000/login"class="btn btn-default" >Login</a>

        @endif
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
