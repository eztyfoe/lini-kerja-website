@extends('baselogin') @section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="auth-box card">
                <div class="card-block">
                    <div class="row m-b-20">
                        <div class="col-md-12">
                            <h3 class="text-center">Administrator</h3>
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
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" />
                        </div>
                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <input type="submit" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center" value="Log In" />
                            </div>
                        </div>
                        <hr />
                    </form>
                </div>
            </div>
        </div>
        @endsection
    </div>
</div>
