@extends('base')
@section('content')
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
                                                      <h4>List Pelamar</h4>
                                                      <span>Ini beberapa pelamar yang melamar di perusahaanmu</span>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-lg-4">
                                              <!-- <div class="page-header-breadcrumb">
                                                  <ul class="breadcrumb-title">
                                                      <li class="breadcrumb-item">
                                                          <a href="index-1.htm"> <i class="feather icon-home"></i> </a>
                                                      </li>
                                                      <li class="breadcrumb-item"><a href="#!">Job Search</a>
                                                      </li>
                                                      <li class="breadcrumb-item"><a href="#!">Card View</a>
                                                      </li>
                                                  </ul>
                                              </div> -->
                                          </div>
                                      </div>
                                  </div>
                                  <!-- Page-header end -->
                                    <!-- Page body start -->
                                                                               
                                    @if(\Session::has('message'))
                                        <div class="alert alert-danger">
                                            <div>{{Session::get('message')}}</div>
                                        </div>
                                     @endif
                    
                                    @if(\Session::has('alert-success'))
                                        <div class="alert alert-success">
                                            <div>{{Session::get('alert-success')}}</div>
                                        </div>
                                    @endif
                                    
                                    <div class="page-body">
                                    <div class="row">
                                        <!-- Left column start -->
                                        <form action="{{ url('/listpelamar') }}" method="get">
                                            {{ csrf_field() }}
                                            <div class="col-lg-9">
                                             <div class="job-card card-columns">
                                                <!-- Job card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <div class="media">
                                                            <div class="media-body media-middle">
                                                    
                                    @foreach($response as $p)
                                    <div class="col-lg-3 col-md-4 col-sm-6 ">
                                                
                                                    <div class="card">

                                                        <div class="card-block">
                                                                    <a class="media-left media-middle" href="#">
                                                                        <img class="media-object img-60" src="assets\images\browser\chrome.png" alt="Generic placeholder image">
                                                                    </a>
                                                                    <h5 class="card-title">{{ $p->nama }} <a href="#"><i class="icofont icofont-question"></i></a></h5>
                                                                    <p class="card-text text-muted"></p>
                                                                    <p class="card-text text-muted">{{$p->id_lowongan}} </p>
                                                                    <p class="card-text text-muted">{{$p->id_pelamar}} </p>
                                                                    <p class="card-text text-muted">{{$p->id_pengguna}} </p>
                                                                    <p class="card-text text-muted">{{$p->nama}} </p>
                                                                    <p class="card-text text-muted">{{$p->jenis_kelamin}} </p>
                                                                    <p class="card-text text-muted">{{$p->alamat}} </p>
                                                                    <p class="card-text text-muted">{{$p->tempat_lahir}} </p>
                                                                    <p class="card-text text-muted">{{$p->tanggal_lahir}} </p>
                                                                    <p class="card-text text-muted">{{$p->agama}} </p>
                                                                    <p class="card-text text-muted">{{$p->foto}} </p>
                                                                    <div class="text-right">
                                                                    <p <button type="button" class="btn btn-primary waves-effect waves-light btn-sm" data-toggle="modal" data-target=""> Details
                                                                    </button></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Job card end -->

                                                {{-- <!-- Job card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <div class="media">
                                                            <a class="media-left media-middle" href="#">
                                                                <img class="media-object img-60" src="assets\images\browser\firefox.png" alt="Generic placeholder image">
                                                            </a>
                                                            <div class="media-body media-middle">
                                                                <div class="company-name">
                                                                    <p>Firefox</p>
                                                                    <span class="text-muted f-14">December 16, 2017</span>
                                                                </div>
                                                                <div class="job-badge">
                                                                    <label class="label bg-primary">New</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <h6 class="job-card-desc">Job Description</h6>
                                                        <p class="text-muted">lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet.</p>
                                                        <div class="job-lable">
                                                            <label class="label badge-danger">Animation</label>
                                                            <label class="label badge-success">Bootstrap</label>
                                                            <label class="label badge-info">Css 3</label>
                                                        </div>
                                                        <div class="job-meta-data"><i class="icofont icofont-safety"></i>washington</div>
                                                        <div class="job-meta-data"><i class="icofont icofont-university"></i>10 Years</div>

                                                    <div class="text-right">
                                                        <button type="button" class="btn btn-primary waves-effect waves-light btn-sm"> Apply Job
                                                        </button>
                                                    </div></div>
                                                </div>
                                                <!-- Job card end -->

                                                <!-- Job card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <div class="media">
                                                            <a class="media-left media-middle" href="#">
                                                                <img class="media-object img-60" src="assets\images\browser\ie.png" alt="Generic placeholder image">
                                                            </a>
                                                            <div class="media-body media-middle">
                                                                <div class="company-name">
                                                                    <p>Internet Explorer</p>
                                                                    <span class="text-muted f-14">December 16, 2017</span>
                                                                </div>
                                                                <div class="job-badge">
                                                                    <label class="label bg-primary">New</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <h6 class="job-card-desc">Job Description</h6>
                                                        <p class="text-muted">lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                        <div class="job-lable">
                                                            <label class="label badge-info">Animation</label>
                                                            <label class="label badge-danger">Bootstrap</label>
                                                            <label class="label badge-success">SCSS</label>
                                                            <label class="label badge-warning">Jade</label>
                                                            <label class="label badge-danger">Javascript</label>
                                                        </div>
                                                        <div class="job-meta-data"><i class="icofont icofont-safety"></i>washington</div>
                                                        <div class="job-meta-data"><i class="icofont icofont-university"></i>10 Years</div>

                                                    <div class="text-right">
                                                        <button type="button" class="btn btn-primary waves-effect waves-light btn-sm"> Apply Job
                                                        </button>
                                                    </div></div>
                                                </div>
                                                <!-- Job card end -->

                                                <!-- Job card start -->
                                                 <div class="card">
                                                    <div class="card-header">
                                                        <div class="media">
                                                            <a class="media-left media-middle" href="#">
                                                                <img class="media-object img-60" src="assets\images\browser\opera.png" alt="Generic placeholder image">
                                                            </a>
                                                            <div class="media-body media-middle">
                                                                <div class="company-name">
                                                                    <p>Safari</p>
                                                                    <span class="text-muted f-14">December 16, 2017</span>
                                                                </div>
                                                                <div class="job-badge">
                                                                    <label class="label bg-primary">New</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <h6 class="job-card-desc">Job Description</h6>
                                                        <p class="text-muted">lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor sit amet.</p>
                                                        <div class="job-lable">
                                                            <label class="label badge-info">Animation</label>
                                                            <label class="label badge-danger">Bootstrap</label>
                                                            <label class="label badge-success">SCSS</label>
                                                        </div>
                                                        <div class="job-meta-data"><i class="icofont icofont-safety"></i>washington</div>
                                                        <div class="job-meta-data"><i class="icofont icofont-university"></i>10 Years</div>

                                                    <div class="text-right">
                                                        <button type="button" class="btn btn-primary waves-effect waves-light btn-sm"> Apply Job
                                                        </button>
                                                    </div>    </div>
                                                </div>
                                                <!-- Job card end -->

                                                <!-- Job card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <div class="media">
                                                            <a class="media-left media-middle" href="#">
                                                                <img class="media-object img-60" src="assets\images\browser\opera.png" alt="Generic placeholder image">
                                                            </a>
                                                            <div class="media-body media-middle">
                                                                <div class="company-name">
                                                                    <p>Opera</p>
                                                                    <span class="text-muted f-14">December 16, 2017</span>
                                                                </div>
                                                                <div class="job-badge">
                                                                    <label class="label bg-primary">New</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <h6 class="job-card-desc">Job Description</h6>
                                                        <p class="text-muted">lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                                                        <div class="job-lable">
                                                            <label class="label badge-danger">Animation</label>
                                                            <label class="label badge-info">Bootstrap</label>
                                                            <label class="label badge-success">SCSS</label>
                                                        </div>
                                                        <div class="job-meta-data"><i class="icofont icofont-safety"></i>washington</div>
                                                        <div class="job-meta-data"><i class="icofont icofont-university"></i>10 Years</div>

                                                    <div class="text-right">
                                                        <button type="button" class="btn btn-primary waves-effect waves-light btn-sm"> Apply Job
                                                        </button>
                                                    </div>    </div>
                                                </div>
                                                <!-- Job card end -->


                                                <!-- Job card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <div class="media">
                                                            <a class="media-left media-middle" href="#">
                                                                <img class="media-object img-60" src="assets\images\browser\opera.png" alt="Generic placeholder image">
                                                            </a>
                                                            <div class="media-body media-middle">
                                                                <div class="company-name">
                                                                    <p>Opera</p>
                                                                    <span class="text-muted f-14">December 16, 2017</span>
                                                                </div>
                                                                <div class="job-badge">
                                                                    <label class="label bg-primary">New</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <h6 class="job-card-desc">Job Description</h6>
                                                        <p class="text-muted">lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                                                        <div class="job-lable">
                                                            <label class="label badge-warning">Animation</label>
                                                            <label class="label badge-danger">Bootstrap</label>
                                                            <label class="label badge-info">SCSS</label>
                                                        </div>
                                                        <div class="job-meta-data"><i class="icofont icofont-safety"></i>washington</div>
                                                        <div class="job-meta-data"><i class="icofont icofont-university"></i>10 Years</div>

                                                    <div class="text-right">
                                                        <button type="button" class="btn btn-primary waves-effect waves-light btn-sm"> Apply Job
                                                        </button>
                                                    </div>
                                                        </div>
                                                </div>
                                                <!-- Job card end --> --}}
                                            </div>


                                            <!-- Pagination start -->
                                            <!-- <nav aria-label="...">
                                                <ul class="pagination justify-content-center m-t-20 m-b-20">
                                                    <li class="page-item disabled">
                                                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item active">
                                                        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#">Next</a>
                                                    </li>
                                                </ul>
                                            </nav> -->
                                            <!-- Pagination end -->
                                        </div>

                                        <!-- Left column end -->
                                        <!-- Right column start -->
                                        <!-- <div class="col-lg-3"> -->
                                            <!-- Filter card start -->
                                            
                                            <!-- Filter card end -->
                                            <!-- Location card start -->
                                            
                                            <!-- Location card end -->
                                            <!-- Job Title card start -->
                                            
                                            <!-- Job Title card end -->
                                            <!-- Specific Skills card start -->
                                            
                                            <!-- Specific Skills card end -->
                                            <!-- Date Posted card start -->
                                            
                                            <!-- Date Posted card end -->
                                            <!-- Company card start -->
                                            
                                            <!-- Company card end -->
                                            <!-- Recent Searches card start -->
                                            
                                            <!-- Recent Searches card end -->
                                        <!-- </div> -->
                                        </div>
                                        <!-- Right column end -->
                                    </div>
                                </div>
                                    <!-- Page body start -->
                                </div>
                            </div>
                            <!-- Main-body end -->
                            <!-- <div id="styleSelector">
                            </div> -->
                        </div>
                    </div>
@endsection