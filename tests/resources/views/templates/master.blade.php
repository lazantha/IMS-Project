<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg  bg-danger-subtle ">
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
                      <button type="button" class="btn btn-link nav-link active" data-bs-toggle="modal" data-bs-target="#staticBackdropSignIn" >Sign In</button>
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
   


<!-- Sign In Modal -->
<div class="modal fade" id="staticBackdropSignIn" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4>Please Sign In !</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <input type="email" placeholder="Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>

          <div class="mb-3">
            <input type="password" placeholder="Password" class="form-control" id="exampleInputPassword1">
          </div>
          <a class="btn btn-outline-primary btn-sm" href="#" role="button">Sign In</a>
          <br>
          <br>
          <p style="display: inline-block;">
            <span >Not Have An Account?</span>
            <button style="display: inline-block;" type="button" class="btn btn-link nav-link active" data-bs-toggle="modal" data-bs-target="#staticBackdropSignUp">Sign Up</button>
          </p>
          

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>


<!--Sign up Modal -->
<div class="modal fade" id="staticBackdropSignUp" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4>Please Sign Up !</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>

          <div class="mb-3">
            <input type="text" placeholder="First Name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>

          <div class="mb-3">
            <input type="text" placeholder="Last Name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          

          <div class="mb-3">
            <input type="email" placeholder="Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>

          <div class="mb-3">
            <input type="password" placeholder="Password" class="form-control" id="exampleInputPassword1">
          </div>

          <a class="btn btn-outline-primary btn-sm" href="#" role="button">Sign Up</a><br>
          <br>
          <br>
          <p style="display: inline-block;">
            <span >Have An Account?</span>
            <button style="display: inline-block;" type="button" class="btn btn-link nav-link active" data-bs-toggle="modal" data-bs-target="#staticBackdropSignIn">Sign In</button>
          </p>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>
    @yield('content')

 
    
</body>
</html>