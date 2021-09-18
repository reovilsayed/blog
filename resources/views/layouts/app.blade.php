<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>@yield('title')</title>
    <link href="{{asset('dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('album.css')}}" rel="stylesheet">
    @yield('css')
  </head>

  <body>

    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
          <a href="{{url('/')}}" class="navbar-brand d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
            <strong>Blog</strong>
          </a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/')}}">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('single')}}">Single</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('add-post')}}">Add Post</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('posts')}}">Posts</a>
                </li>
                @guest
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('login')}}">Login</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('register')}}">Register</a>
                </li>
                @endguest
                @auth
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('logout')}}">{{Auth::user()->name}}</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('logout')}}">Logout</a>
                </li>
                @endauth
            </ul>
        </div>
    </nav>

    </header>

    @yield('content')

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="{{asset('assets/js/vendor/popper.min.js')}}"></script>
    <script src="{{asset('dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/holder.min.js')}}"></script>

    @yield('javascript')
  </body>
</html>
