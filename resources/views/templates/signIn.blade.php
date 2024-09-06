@extends('templates.master')
@section('Sign in')
@section('content')
    
<div class="container mt-4 ">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <form class="card p-4 shadow " action="{{route('login.post')}}" method="POST">
                @csrf
                <h2 class="text-center mb-4">Login</h2>
                <div class="mb-3">
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
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
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    {{-- <label class="form-check-label" for="exampleCheck1">Remember me</label> --}}
                </div>
                <button type="submit" class="btn btn-primary w-100">Login</button>
                <a href="{{route('register')}}" class="text-decoration-none">Dont Have An Account ?</a>
            </form>
        </div>
    </div>
</div>


@endsection