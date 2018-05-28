    <div class="blog-masthead">
      <div class="container">
        <nav class="nav blog-nav">
          <a class="nav-link active" href="/">LOGO</a>
          <a class="nav-link" href="/"><bold>Home</bold></a>
          <a class="nav-link" href="/posts/create">AddPost</a>
            <div class="row ml-auto">
            @if (Auth::check() )

              
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          {{ Auth::user()->name }}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/logout">Log Out</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Your Profile</a>
        </div>
      </li>


            @endif
            
            </div>
        </nav>
      </div>
    </div>



   