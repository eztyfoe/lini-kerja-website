@extends('baselogin')
@section('content')
<div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <!-- <form class="md-float-material form-material"> -->
                        <div class="text-center">
                            <img src="assets\images\logo.png" alt="logo.png">
                        </div>
                        <div class="auth-box card">
                            <div class="card-block">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center txt-primary">Sign up</h3>
                                    </div>
                                </div>
                                 @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <form action="{{ url('/registerPost') }}" method="post">
                                {{ csrf_field() }}
                                <div class="form-group form-primary">
                                    <input type="text" class="form-control" name="username" id="username" placeholder="username"/>
                                    <span class="form-bar"></span>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email Address"/>
                                    <span class="form-bar"></span>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group form-primary">
                                            <input type="password" class="form-control" name="password" id="password" placeholder="password"/>
                                            <span class="form-bar"></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-primary">
                                            <input type="password" class="form-control" name="confirmation" id="confirmation" placeholder="confirmation"/>
                                            <span class="form-bar"></span>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <input type="submit" name="submit" id="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20t" value="Sign up"/>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-10">
                                        <p class="text-inverse text-left m-b-0">Have Acoount?</p>
                                        <p class="text-inverse text-left m-b-0"><a href="{{url('login')}}"><b class="f-w-600">Login here</b></a></p>
                                        <p class="text-inverse text-left"><a href="/"><b class="f-w-600">Back to website</b></a></p>
                                    </div>
                                    <div class="col-md-2">
                                        <img src="assets\images\auth\Logo-small-bottom.png" alt="small-logo.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
@endsection