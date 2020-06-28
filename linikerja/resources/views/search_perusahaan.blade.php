@extends('base')
@section('content')
{{-- @extends('content') --}}
<div class="pcoded-inner-content">
    <!-- Main-body start -->
    <div class="main-body">
        <div class="page-wrapper">
            <!-- Page-header start -->
            <div class="page-header">
                <div class="row align-items-end">
                    <div class="col-lg-8">
                        <div class="page-header-title">
                            <div class="d-inline">
                                <h4>Search Perusahaan</h4>
                                <span>Ini untuk anda mencari perusahaan yang mau anda cari</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="page-header-breadcrumb">
                            <ul class="breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="index-1.htm"> <i class="feather icon-home"></i> </a>
                                </li>
                                <li class="breadcrumb-item"><a href="#!">Search</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#!">Search Perusahaan</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page-header end -->

                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- Search result card start -->
                            <div class="card">
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-lg-6 offset-lg-3">
                                            <p class="txt-highlight text-center m-t-20">lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                                nisi ut aliquip ex ea commodo consequat.
                                            </p>
                                        </div>
                                    </div>
                                    <form action="{{ url('/cari') }}" method="get">
                                        {{ csrf_field() }}
                                    <div class="row seacrh-header">
                                        <div class="col-lg-4 offset-lg-4 offset-sm-3 col-sm-6 offset-sm-1 col-xs-12">
                                            <div class="input-group input-group-button input-group-primary">
                                                <input type="text" id="id" name="id" class="form-control" placeholder="Search here...">
                                                <button class="btn btn-primary input-group-addon" id="basic-addon1">Search</button>
                                                {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jQuery.min.js"></script>
                                                <script>
                                                $("button").click(function($search){$.ajax({
                                                    url: "http://pkyuk.com/jkt/services/api/perusahaan?pil=2"+$search""type:"GET",
                                                success: function (result){console.log(result);},
                                                error: function(error){console.log(error);}})})</script> --}}
                                            </div>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                            <!-- Search result card end -->
                            <h4 class="m-b-20"><b>20</b> Search Results Found</h4>
                            <!-- Search result found start -->
                            <div class="row search-result">

                                            
                                @foreach($response as $p)
                                
                                <div class="col-lg-3 col-md-4 col-sm-6 ">
                                    <div class="card">
                                        <img class="card-img-top img-fluid" src="..\files\assets\images\search-images\01.jpg" alt="Card image cap">
                                        <div class="card-block">
                                            <h5 class="card-title">{{ $p->nama }} <a href="#"><i class="icofont icofont-question"></i></a></h5>
                                            <p class="card-text text-muted">{{$p->id_lowongan}} </p>
                                            <p class="card-text text-muted">{{$p->id_perusahaan}} </p>
                                            <p class="card-text text-muted">{{$p->gaji}} </p>
                                            <p class="card-text text-muted">{{$p->jenis_pekerjaan}} </p>
                                            <p class="card-text text-muted">{{$p->id_perusahaan}} </p>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                            <!-- Search result found end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="styleSelector">

        </div>
    </div>
</div>
@endsection
