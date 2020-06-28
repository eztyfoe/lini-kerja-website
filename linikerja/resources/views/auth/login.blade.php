@extends('baselogin') @section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <!-- Authentication card start -->

            <!-- <form class="md-float-material form-material"> -->
            <div class="text-center">
                <img src="assets\images\logo.png" alt="logo.png" />
            </div>
            <div class="auth-box card">
                <div class="card-block">
                    <div class="row m-b-20">
                        <div class="col-md-12">
                            <h3 class="text-center">Sign In</h3>
                        </div>
                    </div>
                    @if(\Session::has('message'))
                    <div class="alert alert-danger">
                        <div>{{Session::get('message')}}</div>
                    </div>
                    @endif @if(\Session::has('alert-success'))
                    <div class="alert alert-success">
                        <div>{{Session::get('alert-success')}}</div>
                    </div>
                    @endif
                    <form action="{{ url('/loginPost') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input type="text" class="form-control" id="username" name="username" placeholder="Username" />
                            <!-- <span class="form-bar"></span> -->
                        </div>
                        @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <div class="form-group">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" />
                            <!-- <span class="form-bar"></span> -->
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <!-- <div class="row m-t-25 text-left">
                                        <div class="col-12">
                                            <div class="checkbox-fade fade-in-primary d-">
                                                <label>
                                                    <input type="checkbox" value="">
                                                    <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                    <span class="text-inverse">Remember me</span>
                                                </label>
                                            </div>
                                            <div class="forgot-phone text-right f-right">
                                                <a href="auth-reset-password.htm" class="text-right f-w-600"> Forgot Password?</a>
                                            </div>
                                        </div>
                                    </div> -->
                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <input type="submit" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20" value="Log In" />
                            </div>
                        </div>
                        <hr />
                        <div class="row">
                            <div class="col-md-12">
                                <p class="text-inverse text-left m-b-0">
                                    <a href="/register"><b class="f-w-600">Registrasi</b></a>
                                </p>
                                <p class="text-inverse text-left">
                                    <a href="{{ url('/checkEmail') }}"><b class="f-w-600">Lupa Kata Sandi?</b></a>
                                </p>
                            </div>
                        </div>
                    </form>
                    <!-- end of form -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        @endsection
    </div>
</div>
