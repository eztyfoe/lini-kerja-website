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
                                <h4>Bobot Setiap Kriteria</h4>
                                <span>Pilihan Kriteria</span>
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
                                <form action="{{ url('/bobotPost') }}" method="POST">
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <!-- <input type="text" class="form-control" name="id_lowongan" id="id_lowongan" placeholder="id_lowongan"> -->
                                            <input type="hidden" name="id_lowongan" class="form-control" value="{{$id_lowongan}}" id="id_lowongan" />
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <!-- <input type="text" class="form-control" name="nilai" id="nilai" placeholder="Nilai"> -->
                                            <select name="nilai" class="form-control" name="nilai" id="nilai">
                                                <option>Nilai</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                            <!-- <input type="text" class="form-control" name="id_perusahaan" id="id_perusahaan" placeholder="perusahaan"> -->
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 m-b-5">
                                            <!-- <input type="text" class="form-control" name="sertifikat" id="sertifikat" placeholder="Sertifikat"> -->
                                            <select name="sertifikat" class="form-control" name="sertifikat" id="sertifikat">
                                                <option>Sertifikat Keahlian</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <!-- <input type="text" class="form-control" name="pendidikan" id="pendidikan" placeholder="Pendidikan"> -->
                                            <select name="pendidikan" class="form-control" name="pendidikan" id="pendidikan">
                                                <option>Pendidikan</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                            <!-- <input type="text" class="form-control" name="jenis_pekerjaan" id="jenis_pekerjaan" placeholder="Jenis Pekerjaan"> -->
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <!-- <input type="text" class="form-control" name="jarak" id="jarak" placeholder="Jarak"> -->
                                            <input type="text" name="jarak" class="form-control" value="1"  name="jarak" id="jarak" hidden="true"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <!-- <input type="text" class="form-control" name="pengalaman" id="pengalaman" placeholder="Pengalaman kerja"> -->
                                            <select name="pengalaman" class="form-control" name="pengalaman" id="pengalaman">
                                                <option>Pengalaman Kerja</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
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
