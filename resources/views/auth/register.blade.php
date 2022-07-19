@extends('auth.app')
@section('content')
<div class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <a href="{{route('frontend.welcome')}}"><b>Laravel</b>Blog</a>
        </div>

        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Register a new membership</p>

                <form action="{{url('/register')}}" method="post">
                    @csrf
                    <!-- Field start -->
                    <div class="mb-3">
                        <div class="input-group">
                            <input name="name" type="text" class="form-control @error('name'){{'is-invalid'}}@enderror" placeholder="Full name">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- Field end -->

                    <!-- Field start -->
                    <div class="mb-3">
                        <div class="input-group mb-3">
                            <input name="email" type="email" class="form-control @error('email'){{'is-invalid'}}@enderror" placeholder="Email">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- Field end -->

                    <!-- Field start -->
                    <div class="mb-3">
                        <div class="input-group mb-3">
                            <input name="password" type="password" class="form-control @error('password'){{'is-invalid'}}@enderror" placeholder="Password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        @error('password')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- Field end -->
                    <div class="mb-3">
                        <div class="input-group mb-3">
                            <input name="password_confirmation" type="password" class="form-control"
                                placeholder="Retype password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Field end -->
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input name="agree" type="checkbox" id="agreeTerms" name="terms" value="agree" onchange="document.getElementById('submitButton').disabled = !this.checked;">
                                <label for="agreeTerms">
                                I agree to the <a href="#">terms</a>
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button id="submitButton" type="submit" class="btn btn-primary btn-block" disabled>Register</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <div class="social-auth-links text-center">
                    <p>- OR -</p>
                    <a href="#" class="btn btn-block btn-primary">
                        <i class="fab fa-facebook mr-2"></i>
                        Sign up using Facebook
                    </a>
                    <a href="#" class="btn btn-block btn-danger">
                        <i class="fab fa-google-plus mr-2"></i>
                        Sign up using Google+
                    </a>
                </div>

                <a href="{{route('login')}}" class="text-center">I already have an account.</a>
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    <!-- /.register-box -->
</div>
@endsection
