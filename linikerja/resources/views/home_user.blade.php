@extends('base') @section('content')
<div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-c-green update-card">
                            <div class="card-block">
                                <div class="row align-items-end">
                                    <div class="col-8">
                                        @foreach ($responseCountPelamar as $item)
                                        <h4 class="text-white">{{$item['pelamar']}}</h4>
                                        @endforeach
                                        <h6 class="text-white m-b-0">Pelamar</h6>
                                    </div>
                                    <div class="col-4 text-right">
                                        <iframe
                                            class="chartjs-hidden-iframe"
                                            tabindex="-1"
                                            style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"
                                            __idm_frm__="25"
                                        ></iframe>
                                        <canvas id="update-chart-2" height="100" width="138" style="display: block; width: 69px; height: 50px;"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <p class="text-white m-b-0"><i class="feather icon-clock text-white f-14 m-r-10"></i>updated: a few seconds ago</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-c-lite-green update-card">
                            <div class="card-block">
                                <div class="row align-items-end">
                                    <div class="col-8">
                                        @foreach ($responseCountLowongan as $item)
                                        <h4 class="text-white">{{$item['lowongan']}}</h4>
                                        @endforeach
                                        <h6 class="text-white m-b-0">Lowongan</h6>
                                    </div>
                                    <div class="col-4 text-right">
                                        <iframe
                                            class="chartjs-hidden-iframe"
                                            tabindex="-1"
                                            style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"
                                            __idm_frm__="27"
                                        ></iframe>
                                        <canvas id="update-chart-4" height="100" width="138" style="display: block; width: 69px; height: 50px;"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <p class="text-white m-b-0"><i class="feather icon-clock text-white f-14 m-r-10"></i>updated: a few seconds ago</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-8 col-md-12">
                        <div class="card table-card">
                            <div class="card-header">
                                <h5>Daftar Lowongan</h5>
                                <div class="card-header-right">
                                    <ul class="list-unstyled card-option">
                                        <li><i class="feather icon-maximize full-card"></i></li>
                                        <li><i class="feather icon-minus minimize-card"></i></li>
                                        <li><i class="feather icon-trash-2 close-card"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-block">
                                @if (!empty($responseDataLowongan)) 
                                <div class="table-responsive">
                                    <table class="table table-hover table-borderless">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Perkiraan Gaji</th>
                                                <th>Batas Waktu</th>
                                                <!-- <th>Avg Price</th>
                                                <th>Total</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($responseDataLowongan as $item)
                                            <tr>
                                                <td>
                                                    <div class="d-inline-block align-middle">
                                                        <h6>{{$item['nama']}}</h6>
                                                        <p class="text-muted m-b-0">{{$item['deskripsi']}}</p>
                                                    </div>
                                                </td>
                                                <td class="text-c-blue">{{$item['gaji']}}</td>
                                                <td class="t">{{$item['limit_time']}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div class="text-center">
                                        <a href="lowongan" class="b-b-primary text-primary">Lihat seluruh Lowongan</a>
                                    </div>
                                </div>
                                @else
                                <p class="text-center">Tidak ada data lowongan</p>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-12">
                        <div class="card user-activity-card">
                            <div class="card-header">
                                <h5>Pelamar Terbaru</h5>
                                <div class="card-header-right">
                                    <ul class="list-unstyled card-option">
                                        <li><i class="feather icon-maximize full-card"></i></li>
                                        <li><i class="feather icon-minus minimize-card"></i></li>
                                        <li><i class="feather icon-trash-2 close-card"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-block">
                                @if (!empty($responseDataPelamar)) @foreach($responseDataPelamar as $item)
                                <div class="row m-b-25">
                                    <div class="col-auto p-r-0">
                                        <div class="u-img">
                                            <img src="https://colorlib.com/polygon/adminty/files/assets/images/avatar-2.jpg" alt="user image" class="img-radius cover-img" />
                                        </div>
                                    </div>
                                    <div class="col">
                                        <h6 class="m-b-5">{{$item['nama']}}</h6>
                                        <p class="text-muted m-b-0">{{$item['nama_lowongan']}}</p>
                                        <!-- <p class="text-muted m-b-0"><i class="feather icon-clock m-r-10"></i>2 min ago</p> -->
                                    </div>
                                </div>                                
                                @endforeach @else
                                <p class="text-center">Tidak ada data pelamar</p>
                                @endif
                                <!-- <div class="text-center">
                                    <a href="#!" class="b-b-primary text-primary">View all Projects</a>
                                </div> -->
                            </div>
                        </div>
                    </div>

                    <!-- <div class="col-xl-6 col-md-12">
                        <div class="card user-card-full">
                            <div class="row m-l-0 m-r-0">
                                <div class="col-sm-4 bg-c-lite-green user-profile">
                                    <div class="card-block text-center text-white">
                                        <div class="m-b-25">
                                            <img src="../files/assets/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image" />
                                        </div>
                                        <h6 class="f-w-600">Jeny William</h6>
                                        <p>Web Designer</p>
                                        <i class="feather icon-edit m-t-10 f-16"></i>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="card-block">
                                        <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <p class="m-b-10 f-w-600">Email</p>
                                                <h6 class="text-muted f-w-400">jeny@gmail.com</h6>
                                            </div>
                                            <div class="col-sm-6">
                                                <p class="m-b-10 f-w-600">Phone</p>
                                                <h6 class="text-muted f-w-400">0023-333-526136</h6>
                                            </div>
                                        </div>
                                        <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Projects</h6>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <p class="m-b-10 f-w-600">Recent</p>
                                                <h6 class="text-muted f-w-400">Guruable Admin</h6>
                                            </div>
                                            <div class="col-sm-6">
                                                <p class="m-b-10 f-w-600">Most Viewed</p>
                                                <h6 class="text-muted f-w-400">Able Pro Admin</h6>
                                            </div>
                                        </div>
                                        <ul class="social-link list-unstyled m-t-40 m-b-10">
                                            <li>
                                                <a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="facebook"><i class="feather icon-facebook facebook" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="twitter"><i class="feather icon-twitter twitter" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="instagram"><i class="feather icon-instagram instagram" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
