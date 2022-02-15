<style>
  .btn-gradient {
    border-radius: 9px;
    width: 110px;
    background-image: linear-gradient(to right, rgb(0, 225, 255),rgb(0, 153, 255));
  }

  .navbar-brand {
    font-family: "Roboto", sans-serif;
    font-size: 21px;
    letter-spacing: 0.3rem;
    color: #ffffff;
    top: 20%;
    /* margin-inline-start: 30px; */
  }

  @media only screen and (min-width: 1024px) {
    .navbar-brand {
      margin-inline-start: 30px;
    }
}

  .nav-link {
    font-family: "Roboto", sans-serif;
    font-size: 12px;
    /* text-transform: uppercase; */
    letter-spacing: 0.3rem;
    color: rgba(255, 255, 255, 0.5);
    margin: 0 1rem;
  }
</style>


<nav class="navbar sticky-top navbar-expand-lg navbar-dark" style="background-color: rgb(0, 0, 0); min-height: 78px;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">FrimaSkn</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto" style="text-transform: uppercase;">
          <li class="nav-item">
            <a class="nav-link {{request()->is('posts')?'active':''}}" href="/posts">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="/categories" role="button" aria-expanded="false">Categories</a>
            <ul class="dropdown-menu">
                @foreach ($categories as $category)
                  <li><hr class="dropdown-divider"><a class="dropdown-item" href="/posts?category={{ $category->slug }}">{{ $category->name }}</a></li>
                @endforeach
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/">Portofolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{request()->is('about')?'active':''}}" href="/about">About</a>
          </li>
        </ul>
        <ul class="navbar-nav">
          @auth 
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Hi, {{ auth()->user()->name }}
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-window-reverse"></i> My Dashboard</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                  <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item">
                      <i class="bi bi-box-arrow-right"></i> Logout</a>
                    </button>
                  </form>
                </li>
              </ul>
            </li>   
          @else
            <li class="nav-item">
              <a href="/login" class="nav-link" style="font-size: 13px;">Sign In</a>
            </li>
          @endauth
        </ul>
      </div>
    </div>
</nav>