<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-5Zsb8+YW91bgrVFvfT3vzLgzS4g6JWw5/DL1+rrFdoQ0EJHPU3tVdrh+Qk8ZqBfsNH4cJVKCHUTGZ1sDgkXnFg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>@yield('title')</title>
    <style>
      .disable-pseudo-classes {
        all: initial;
        }

      
      
    </style>
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg  bg-danger-subtle position-static">
            <div class="container-fluid ms-5">
              <a class="navbar-brand fs-3" href="{{route('home-page')}}">I.M.S</a> 

              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('home-page')}}">Home</a>
                  </li>
                  <li class="nav-item">
                      {{-- sign in link --}}
                      <a class="nav-link active" aria-current="page" href="{{route('login')}}">Sign In</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="{{route('about-page')}}">About Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="{{route('contact-page')}}">Contact Us</a>
                  </li>
                  
                </ul>
              </div>
            </div>
          </nav>
    </header>

    @if(session('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>{{ session('success') }}</strong>  
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @elseif(session('error'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong> {{ session('error') }}</strong>
         
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif


    @yield('content')


    @yield('scripts')

</body>
</html>