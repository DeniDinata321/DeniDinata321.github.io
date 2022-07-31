<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Deni - movies</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
  </head>
  <body id="home">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Deni Movie</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link " href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/category/1">Action</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/category/2">Comedy</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/category/3">Animation</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/category/4">Documenter</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/category/5">Fantasy</a>
        </li>
        @auth
          @if(in_array(Auth::user()->role, ['Admin']))
            <li class="nav-item">
              <a class="nav-link" href="/categories">Category</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/contents">Content</a>
            </li>
          @endif
        @endauth
        <ul>
        <li class="nav-item dropdown ">
             <a id="navbarDropdown " class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                 Hi, {{ Auth::user()->name }}
             </a>
             <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                 <a class="dropdown-item" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                             {{ __('Logout') }}
                 </a>
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                   @csrf
                 </form>
             </div>
         </li>
        </ul>
          </ul>
        </div>
      </div>
    </nav>
    <section class="jumbotron ">
      <h1>ini coba</h1>
    <main class="py-4">
        @yield('content')
    </main>
</section>
   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>  
  </body>
</html>