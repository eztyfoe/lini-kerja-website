@extends('base') @section('content')
<div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-header">
                <div class="row align-items-end">
                    <div class="col-lg-8">
                        <div class="page-header-title">
                            <h4>Data Lowongan</h4>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <a href="addLowongan" type="button" class="btn btn-primary btn-sm" style="float: right;">Tambah Lowongan</a>
                    </div>
                </div>
            </div>
            <div class="page-body">
                <div class="row">
                    @if (!empty($responseData)) @foreach($responseData as $ress)
                    <div class="col-xl-4 col-md-6">
                        <div class="card">
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
                                
                            </div>
                            <div class="card-footer">
                                <div class="text-right">
                                    <a href="/detailLowongan?id={{$ress['id_lowongan']}}" type="button" class="btn btn-primary waves-effect waves-light btn-sm">View Detail </a>

                                    <a href="/editLowongan?id={{$ress['id_lowongan']}}" type="button" class="btn btn-primary waves-effect waves-light btn-sm">Update</a>
                                    <!-- <button type="button" class="btn btn-primary waves-effect waves-light btn-sm">Update</button> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach @else
                    <p>Tidak ada data lowongan</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
