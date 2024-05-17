@extends('templates.master')
@section('Sign up')
@section('content')
    
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <form class="card p-4 shadow-sm border-warning" action="{{route('signUp')}}" method="POST">
                @csrf
                <h2 class="text-center mb-4">Sign Up</h2>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">First Name</label>
                    <input type="text" name="firstName" class="form-control" id="firstName"  placeholder="First Name">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Last Name</label>
                    <input type="text" name="lastName" class="form-control" id="lastName"  placeholder="Last Name">
                </div>

                
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Re Enter Password</label>
                    <input type="password" name="rePassword" class="form-control" id="rePassword" placeholder="Re Enter Password">
                </div>
                
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    {{-- <label class="form-check-label" for="exampleCheck1">Remember me</label> --}}
                </div>
                <button type="submit" class="btn btn-primary w-100">Sign Up</button>
                <a href="{{route('signIn-page')}}" class="text-decoration-none"> Have An Account ?</a>
            </form>
        </div>
    </div>
</div>


@endsection