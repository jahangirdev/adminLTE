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
                    <div class="alert alert-danger my-4">
                        $message
                    </div>
                    @enderror
                    <p class="login-box-msg">You are only one step a way from your new password, recover your password now.</p>

                    <form action="{{route('password.update')}}" method="post">
                        @csrf
                        <input type="hidden" name="email" value="{{$request->email}}">
                        <input type="hidden" name="token" value="{{$request->token}}">
                        <div class="mb-3">
                            <div class="input-group">
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
                        <div class="input-group mb-3">
                            <input name="password_confirmation" type="password" class="form-control" placeholder="Confirm Password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
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
                        <a href="{{route('login')}}">Login</a>
                    </p>
                </div>
                <!-- /.login-card-body -->
            </div>
        </div>
        <!-- /.login-box -->
    </div>
@endsection
