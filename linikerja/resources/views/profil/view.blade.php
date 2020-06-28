@extends('base') @section('content')
<div class="pcoded-inner-content">
    <!-- Main-body start -->
    <div class="main-body">
        <div class="page-wrapper">
            <!-- Page-header start -->
            <div class="page-header">
                <div class="row align-items-end">
                    <div class="col-lg-8">
                        <div class="page-header-title">
                            <h4>Data Perusahaan</h4>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <a href="{{ url('/legality') }}" type="button" class="btn btn-warning btn-sm" style="float: right;">Legalitas Perusahaan</a>
                    </div>
                    <div class="col-lg-2">
                        <a href="{{ url('/editProfile') }}" type="button" class="btn btn-warning btn-sm" style="float: right;">Edit Profil Perusahaan</a>
                    </div>
                </div>
            </div>
            <!-- Page-header end -->
            @foreach($responseData as $ress)
            <!-- Page-body start -->
            <div class="page-body">
                <!--profile cover start-->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="cover-profile">
                            <div class="profile-bg-img">
                                <img class="profile-bg-img img-fluid" src="assets\images\user-profile\bg-img1.jpg" alt="bg-img" />
                                <div class="card-block user-info">
                                    <div class="col-md-12">
                                        <div class="media-left">
                                            <a href="#" class="profile-image">
                                                <img class="user-img img-radius" src="http://pkyuk.com/jkt/static/contents/{{$ress['foto']}}.jpeg" alt="user-img" style="width: 108px; height: 108px;"/>
                                            </a>
                                        </div>
                                        <div class="media-body row">
                                            <div class="col-lg-12">
                                                <div class="user-title">
                                                    <h2 class="text-capitalize">{{$ress['nama']}}</h2>
                                                    <span class="text-white"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--profile cover end-->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tab-content">
                            <!-- tab panel personal start -->
                            <div class="tab-pane active" id="personal" role="tabpanel">
                                <!-- personal card start -->
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-header-text">Data Perusahaan</h5>
                                    </div>
                                    <div class="card-block">
                                        <div class="view-info">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="general-info">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-xl-6">
                                                                <div class="table-responsive">
                                                                    <table class="table m-0">
                                                                        <tbody>
                                                                            <tr>
                                                                                <th scope="row">Nama Perusahaan</th>
                                                                                <td class="text-capitalize">{{$ress['nama']}}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">Jenis Perusahaan</th>
                                                                                <td class="text-capitalize">{{$ress['jenis_perusahaan']}}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">Email</th>
                                                                                <td>{{Session::get('email')}}</td>
                                                                            </tr>
                                                                            <tr></tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <!-- end of table col-lg-6 -->
                                                            <div class="col-lg-12 col-xl-6">
                                                                <div class="table-responsive">
                                                                    <table class="table">
                                                                        <tbody>
                                                                            <tr>
                                                                                <th scope="row">Alamat</th>
                                                                                <td>{{$ress['alamat']}}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">No. Telp</th>
                                                                                <td>{{$ress['telepon']}}</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <!-- end of table col-lg-6 -->
                                                        </div>
                                                        <!-- end of row -->
                                                    </div>
                                                    <!-- end of general info -->
                                                </div>
                                                <!-- end of col-lg-12 -->
                                            </div>
                                            <!-- end of row -->
                                        </div>
                                        <!-- end of view-info -->
                                    </div>
                                </div>
                            </div>
                            <!-- tab content end -->
                        </div>
                    </div>
                </div>
                <!-- Page-body end -->
            </div>
            @endforeach
        </div>
        <!-- Main body end -->
    </div>
</div>

@endsection
