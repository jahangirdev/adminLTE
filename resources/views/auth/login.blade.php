@extends('auth.app')
@section('content')
<div class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="{{url('/')}}"><b>Laravel</b>Blog</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <p class="login-box-msg">Sign in to start your session</p>

                <form action="{{url('/login')}}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input name="email" type="email" class="form-control" placeholder="Email" value="{{ old('email') }}"/>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input name="password" type="password" class="form-control" placeholder="Password" />
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input name="remember" type="checkbox" id="remember" {{old('remember') ? 'checked':'';}}/>
                                <label for="remember"> Remember Me </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">
                                Sign In
                            </button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <div class="social-auth-links text-center mb-3">
                    <p>- OR -</p>
                    <a href="#" class="btn btn-block btn-primary">
                        <i class="fab fa-facebook mr-2"></i> Sign in using
                        Facebook
                    </a>
                    <a href="#" class="btn btn-block btn-danger">
                        <i class="fab fa-google-plus mr-2"></i> Sign in using
                        Google+
                    </a>
                </div>
                <!-- /.social-auth-links -->

                <p class="mb-1">
                    <a href="{{route('password.request')}}">I forgot my password</a>
                </p>
                <p class="mb-0">
                    <a href="{{route('register')}}" class="text-center">Register a new membership</a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
</div>
@endsection