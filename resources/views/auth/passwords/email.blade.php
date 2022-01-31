@extends('layouts.skyspace')

@section('content')
<div class="col-md-4">


    Email
    <div class="card">
        <div class="card-body login-card-body">
          <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>
    
          <form action="{{route('password.email')}}" method="post">
            @csrf
            <div class="input-group mb-0">
              <input type="email" class="form-control" placeholder="Email" name="email" />
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
              @error('email')
                  <p class="text-sm text-danger">{{$message}}</p>
              @enderror
            <div class="row py-3">
              <div class="col-12">
                <button type="submit" class="btn btn-warning btn-block">Reset password</button>
              </div>
              <!-- /.col -->
            </div>
          </form>
    
          <p class="mt-3 mb-1">
            <a href="{{route('login')}}">Login</a>
          </p>
         
        </div>
        <!-- /.login-card-body -->
      </div>
</div>
@endsection
