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
                                <h4>Pendukung Keputusan</h4>
                                <span>Hasil</span>
                            </div>
                        </div>
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
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h5 class="card-header-text">Hasil Perhitungan Pendukung Keputusan</h5>
                                    </div>
                                    <div class="col-lg-6">
                                        @php
                                            $rD = 1;
                                        @endphp
                                        @foreach ($responseData as $item)
                                            <form action="{{ url('/endDSS') }}" method="post">
                                                <input type="hidden" name="id_lowongan" value="{{$item['id_lowongan']}}">
                                                <input type="submit" name="submit" id="submit" class="btn btn-warning btn-round btn-sm btn-outline-warning" value="Akhiri Perhitungan" style="float: right"/>
                                                {{ csrf_field() }}
                                            </form>
                                            @if ($rD == 1)
                                                @break
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-12">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>Nama</td>
                                                <td>Nilai</td>
                                                <td>Sertifikat Keahlian</td>
                                                <td>Pendidikan Terakhir</td>
                                                <td>Pengalaman Kerja</td>
                                                <td>Hasil Perhitungan</td>
                                                <td align="center">Kandidat Terpilih</td>
                                            </tr>

                                            @foreach($responseData as $ress)
                                            <tr>
                                                <td class="text-capitalize">{{$ress['nama']}}</td>
                                                <td>{{$ress['nilai']}}</td>
                                                <td>{{$ress['sertifikat_keahlian']}}</td>
                                                <td>{{$ress['pendidikan_terakhir']}}</td>
                                                <td>{{$ress['pengalaman_kerja']}}</td>
                                                <td>{{$ress['hasil']}}</td>
                                                @if ($ress['status'] != 2)
                                                    <td align="center">
                                                        <form action="{{ url('/sendPelamar') }}" method="post" id="{{$ress['nama']}}{{$ress['status']}}">
                                                            <input type="hidden" name="id_lowongan" value="{{$ress['id_lowongan']}}">
                                                            <input type="hidden" name="id_pelamar" value="{{$ress['id_pelamar']}}">
                                                            <input type="hidden" name="status" value="2">
                                                            <input type="hidden" name="id_dss" value="{{$ress['id_dss']}}">
                                                            <input type="submit" name="submit" id="submit" class="btn btn-inverse btn-round btn-sm btn-outline-inverse" value="Pilih" />
                                                            {{ csrf_field() }}
                                                        </form>
                                                    </td>
                                                @else
                                                    <td align="center">
                                                        <form action="{{ url('/sendPelamar') }}" method="post" id="{{$ress['nama']}}{{$ress['status']}}">
                                                            <input type="hidden" name="id_lowongan" value="{{$ress['id_lowongan']}}">
                                                            <input type="hidden" name="id_pelamar" value="{{$ress['id_pelamar']}}">
                                                            <input type="hidden" name="status" value="3">
                                                            <input type="hidden" name="id_dss" value="{{$ress['id_dss']}}">
                                                            <input type="submit" name="submit" id="submit" class="btn btn-inverse btn-round btn-sm" value="Hapus" />
                                                            {{ csrf_field() }}
                                                        </form>
                                                    </td>
                                                @endif
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Right column end -->
            </div>
        </div>
        <!-- Page body start -->
    </div>
</div>
<!-- Main-body end -->

@endsection
