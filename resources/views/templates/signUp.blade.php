@extends('templates.master')
@section('Sign up')
@section('content')
    
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <form class="card p-4 shadow" action="{{route('register.post')}}" method="POST">
                @csrf
                <h2 class="text-center mb-4">Sign Up</h2>
                <div class="mb-3">
                    
                    <input type="text" name="firstName" class="form-control" id="firstName"  placeholder="First Name">
                    @error('firstName')
                        <div class="error-message" style="color:red;">{{ $message }}</div>
                    @enderror

                </div>

                <div class="mb-3">
                    <input type="text" name="lastName" class="form-control" id="lastName"  placeholder="Last Name">
                     @error('lastName')
                        <div class="error-message" style="color:red;">{{ $message }}</div>
                    @enderror
                </div>

                
                <div class="mb-3">
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                     @error('email')
                        <div class="error-message" style="color:red;">{{ $message }}</div>
                    @enderror
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>

                <div class="mb-3">
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                     @error('password')
                        <div class="error-message" style="color:red;">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <input type="password" name="password_confirmation" class="form-control" id="rePassword" placeholder="Re Enter Password">
                     @error('passwrod_confirmation')
                        <div class="error-message" style="color:red;">{{ $message }}</div>
                    @enderror
                </div>
                
                <button type="submit" class="btn btn-primary w-100">Sign Up</button>
                <a href="{{route('login')}}" class="text-decoration-none"> Have An Account ?</a>
            </form>
        </div>
    </div>
</div>


@endsection