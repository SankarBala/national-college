@extends('layouts.skyspace')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body login-card-body">
                        <h4 class="login-box-msg">Sign in</h4>

                        <form action="{{ route('login') }}" method="post">
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
                                <p class="text-danger text-sm">{{$message}}</p>
                            @enderror
                            <div class="input-group mb-0 mt-3">
                                <input type="password" class="form-control" placeholder="Password" name="password" />
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>
                            @error('password')
                                <p class="text-danger text-sm">{{$message}}</p>
                            @enderror
                            <div class="row mt-3">
                                <div class="col-8">
                                    <div class="icheck-primary">
                                        <input type="checkbox" id="remember" name="remember" />
                                        <label for="remember">
                                            Remember Me
                                        </label>
                                    </div>
                                </div>
                                <!-- /.col -->
                                <div class="col-4">
                                    <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                                </div>
                                <!-- /.col -->
                            </div>
                            <div class="row mt-3">
                                
                                <!-- /.col -->
                                <div class="col">
                                  <a href="{{route('password.request') }}" class="text-center text-warning">Forgot password?</a>
                                </div>
                                <!-- /.col -->
                            </div>
                        </form>

                    </div>
                    <!-- /.login-card-body -->
                </div>
            </div>
        </div>
    </div>
@endsection
