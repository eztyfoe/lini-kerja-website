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
                            <div class="d-inline">
                                <h2>Detail Lowongan</h2>
                            </div>
                        </div>
                    </div>
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
        </div>
        <!-- tab header end -->
        <div class="tab-content">
            <!-- tab panel personal start -->
            <div class="tab-pane active" id="personal" role="tabpanel">
                <!-- personal card start -->
                <div class="card m-l-20 m-r-20">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-lg-6">
                                <h5 class="card-header-text">Detail Lowongan</h5>
                            </div>
                            
                            <div class="col-lg-6">
                                @php
                                    $rD = 1;
                                @endphp
                                @if (!empty($responseLastResult))
                                    @foreach($responseLastResult as $ress)
                                        @if ($ress['status'] == '4')
                                        <button type="button" class="btn btn-primary btn-sm waves-effect" style="float: right" data-toggle="modal" data-target="#default-Modal">Lihat Hasil Perhitungan Sebelumnya</button>
                                        @endif
                                        @if ($rD == 1)
                                            @break
                                        @endif
                                    @endforeach
                                <div class="modal fade" id="default-Modal" tabindex="-1" role="dialog" style="z-index: 1050; display: none;" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Hasil Sebelumnya</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <tbody>
                                                            <tr>
                                                                <td>Nama</td>
                                                                <td>Hasil</td>
                                                            </tr>
                                                            @foreach($responseLastResult as $ress)
                                                            <tr>
                                                                @if ($ress['status'] == '4')
                                                                <td class="text-capitalize">{{$ress['nama']}}</td>
                                                                <td>{{$ress['hasil']}}</td>
                                                                @endif
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            </div>
                            
                        </div>
                    </div>

                    @foreach($responseDataLowongan as $ress)
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
                                                                <th scope="row">ID Lowongan</th>
                                                                <td>{{$ress['id_lowongan']}}</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Nama Lowongan</th>
                                                                <td>{{$ress['nama']}}</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Deskripsi</th>
                                                                <td>{{$ress['deskripsi']}}</td>
                                                            </tr>
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
                                                                <th scope="row">Jenis Pekerjaan</th>
                                                                <td>{{$ress['nama_jenis_pekerjaan']}}</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Perkiraan Gaji</th>
                                                                <td>{{$ress['gaji']}}</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Batas Waktu</th>
                                                                <td>{{$ress['limit_time']}}</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                            @endforeach
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
        </div>
        <!-- tab content end -->
        <div class="row">
            <!-- Left column start -->

            <div class="col-lg-12">
                <div class="card m-l-20 m-r-20">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-lg-6">
                                <h5 class="card-header-text">Daftar Pelamar</h5>
                            </div>

                            @if (!empty($responseDataPelamar))
                            <div class="col-lg-6">
                                <a href="{{ url('/dss?id=') }}{{$id_lowongan}}" type="submit" class="btn btn-primary btn-sm" style="float: right">Jalankan Perhitungan Pendukung Keputusan!</a>
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-12 col-xl-12">
                        @if (!empty($responseDataPelamar))
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Nama</td>
                                        <td>Nilai</td>
                                        <td>Sertifikat Keahlian</td>
                                        <td>Pendidikan Terakhir</td>
                                        <td>Jarak</td>
                                        <td>Pengalaman Kerja</td>
                                    </tr>
                                    @foreach($responseDataPelamar as $ress)
                                    <tr>
                                        <td>{{$ress['nama']}}</td>
                                        <td>{{$ress['nilai']}}</td>
                                        <td>{{$ress['sertifikat_keahlian']}}</td>
                                        <td>{{$ress['pendidikan_terakhir']}}</td>
                                        <td>{{$ress['jarak']}}</td>
                                        <td>{{$ress['pengalaman_kerja']}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @else
                            <p>Belum ada yang melamar</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
