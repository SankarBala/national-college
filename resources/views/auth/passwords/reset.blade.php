@extends('layouts.skyspace')

@section('content')
    <div class="container">
        <div class="col-md-4 m-auto">
            <div class="card">
                <div class="card-body login-card-body">
                    <p class="login-box-msg">You are only one step to change password
                    </p>

                    <form action="{{ route('password.update') }}" method="post">
                        @csrf
                        <div class="input-group mb-0">
                            <input type="password" class="form-control password" placeholder="Password" name="password" />
                            <div class="input-group-append showPassword">
                                <div class="input-group-text">
                                    <span class="fas fa-eye-slash eye"></span>
                                </div>
                            </div>
                        </div>
                        @error('password')
                            <p class="text-sm text-danger">{{ $message }}</p>
                        @enderror
                        <div class="input-group mb-3 mt-3">
                            <input type="password" class="form-control password" placeholder="Confirm Password"
                                name="password_confirmation" />
                            <div class="input-group-append showPassword">
                                <div class="input-group-text">
                                    <span class="fas fa-eye-slash eye"></span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary btn-block">Change password</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>

                    <p class="mt-3 mb-1">
                        <a href="{{ route('login') }}">Login</a>
                    </p>
                </div>
                <!-- /.login-card-body -->
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $('.showPassword').click(function() {
                $('.eye').toggleClass('fa-eye');
                $('.eye').toggleClass('fa-eye-slash');
                if ($('input[type=password]').attr('type') == "password") {
                    $('.password').attr('type', 'text');
                } else {
                    $('.password').attr('type', 'password');
                }
            });
        });
    </script>
@endpush
