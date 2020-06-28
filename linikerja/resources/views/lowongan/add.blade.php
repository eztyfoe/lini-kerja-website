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
                                <h4>Tambah Lowongan</h4>
                                <span>isi kriteria disini</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page-header end -->
            <!-- Page body start -->
            <div class="page-body">
                <div class="row">
                    <!-- Left column start -->
                    <div class="col-lg-12 col-xl-9">
                        <!-- Flying Word card start -->
                        <div class="card">
                            @if(\Session::has('message'))
                            <div class="alert alert-danger">
                                <div>{{Session::get('message')}}</div>
                            </div>
                            @endif @if(\Session::has('alert-success'))
                            <div class="alert alert-success">
                                <div>{{Session::get('alert-success')}}</div>
                            </div>
                            @endif
                            <div class="card-block">
                                <form action="{{ url('/sendAddLowongan') }}" method="POST">
                                  <input type="hidden" class="form-control" name="id_perusahaan" id="nama" value="{{Session::get('id')}}" />
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                          <p>
                                            Nama Pekerjaan
                                          </p>
                                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Pekerjaan" required="" />
                                        </div>
                                        <div class="col-sm-6">
                                          <p>
                                            Jenis Pekerjaan
                                          </p>
                                            <select name="jenis_pekerjaan" class="form-control" name="jenis_pekerjaan" id="jenis_pekerjaan" required="" >
                                                <option>Jenis Pekerjaan</option>
                                                @foreach ($responseData as $res)
                                                <option value="{{$res['id_jenis_pekerjaan']}}">{{$res['nama']}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                          <p>
                                            Kisaran Gaji Pekerjaan
                                          </p>
                                          <input type="text" class="form-control autonumber" data-a-sign="(±) Rp. " data-a-sep="." data-a-dec="," name="gaji" id="gaji" placeholder="Gaji Pekerjaan" required="" />
                                          <!-- <div class="row text-center">
                                            <div class="col-lg-1">
                                              <p style="text-align: center;">
                                                Rp. 
                                              </p>
                                            </div>
                                            <div class="col-lg-5">
                                              <input type="text" class="form-control" name="gaji1" id="gaji1" placeholder="Mulai" />
                                            </div>
                                            <div class="col-lg-1">
                                              <p style="text-align: center;">
                                                -
                                              </p>
                                            </div>
                                            <div class="col-lg-5">
                                              <input type="text" class="form-control" name="gaji2" id="gaji2" placeholder="Akhir" />
                                            </div>
                                          </div> -->
                                        </div>                                        
                                        <div class="col-sm-6">
                                          <p>
                                            Waktu berlaku lowongan hingga
                                          </p>
                                            <input type="date" name="limit_time" id="limit_time" class="form-control" required="" onkeydown="return false" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                          <p>
                                            Deskripsi Pekerjaan
                                          </p>
                                            <textarea rows="5" cols="5" name="deskripsi" id="deskripsi" class="form-control" placeholder="Deskripsi Pekerjaan" required="" ></textarea>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12 text-right">
                                            <!--  <button type="submit" class="btn btn-primary m-r-10">Submit Details</button> -->
                                            <input type="submit" name="submit" id="submit" class="btn btn-primary m-r-10" value="submit" />
                                            <!-- <button type="submit" class="btn btn-default">Reset</button> -->
                                            {{ csrf_field() }}
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
