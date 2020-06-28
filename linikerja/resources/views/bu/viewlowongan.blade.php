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
                            <h4>Daftar Lowongan</h4>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <a href="{{ url('/daftar_lowongan') }}" type="button" class="btn btn-primary btn-sm" style="float: right;">Tambah Lowongan</a>
                    </div>
                </div>
            </div>
            <!-- Page-header end -->
            <!-- Page body start -->
            @if(\Session::has('message'))
            <div class="alert alert-danger">
                <div>{{Session::get('message')}}</div>
            </div>
            @endif @if(\Session::has('alert-success'))
            <div class="alert alert-success">
                <div>{{Session::get('alert-success')}}</div>
            </div>
            @endif
            <div class="page-body">
                <div class="row">
                    <!-- Left column start -->

                    <div class="col-lg-12">
                        <div class="row">
                            @if (!empty($responseData)) @foreach($responseData as $ress)
                            <!-- Job card start -->
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="card col-md-11">
                                        <div class="card-header">
                                            <div class="media">
                                                <div class="media-body media-middle">
                                                    <div class="company-name">
                                                        <p>{{$ress['nama']}}</p>
                                                        <span class="text-muted f-14">{{$ress['deskripsi']}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-block">
                                            <div class="job-lable">
                                                <label class="label badge-success">{{$ress['nama_jenis_pekerjaan']}}</label>
                                            </div>
                                            <div class="job-meta-data"><i class="icofont icofont-safety"></i>Kisaran Gaji : {{$ress['gaji']}}</div>
                                            <div class="job-meta-data"><i class="icofont icofont-university"></i>Batas Waktu : {{$ress['limit_time']}}</div>
                                            <div class="text-right">
                                                <a href="/detaillowongan?id={{$ress['id_lowongan']}}" type="button" class="btn btn-primary waves-effect waves-light btn-sm">View Detail </a>

                                                <a href="/editLowongan?id={{$ress['id_lowongan']}}" type="button" class="btn btn-primary waves-effect waves-light btn-sm">Update</a>
                                                <!-- <button type="button" class="btn btn-primary waves-effect waves-light btn-sm">Update</button> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Job card end -->
                            @endforeach @else
                            <p>Tidak ada data lowongan</p>
                            @endif
                        </div>
                    </div>
                    <!-- Right column end -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
