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
                                                      <h4>Job Search - Card List</h4>
                                                      <span>Here you got your job details</span>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-lg-4">
                                              <div class="page-header-breadcrumb">
                                                  <ul class="breadcrumb-title">
                                                      <li class="breadcrumb-item">
                                                          <a href="index-1.htm"> <i class="feather icon-home"></i> </a>
                                                      </li>
                                                      <li class="breadcrumb-item"><a href="#!">Job Search</a>
                                                      </li>
                                                      <li class="breadcrumb-item"><a href="#!">Card View</a>
                                                      </li>
                                                  </ul>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <!-- Page-header end -->
                                    <!-- Page body start -->
                                    <div class="page-body">
                                    <div class="row">
                                        <!-- Left column start -->
                                        <div class="col-lg-9">
                                             <div class="job-card card-columns">
                                                <!-- Job card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <div class="media">
                                                            <a class="media-left media-middle" href="#">
                                                                <img class="media-object img-60" src="assets\images\browser\chrome.png" alt="Generic placeholder image">
                                                            </a>
                                                            <form action="{{ url('/listkerjaan') }}" method="Post">
                                                            <div class="media-body media-middle">
                                                                <div class="company-name">
                                                                    <p>{{Session::get('nama')}}</p>
                                                                    <span class="text-muted f-14">{{Session::get('time_limit')}}</span>
                                                                </div>
                                                                <!-- <div class="job-badge">
                                                                    <label class="label bg-primary">New</label>
                                                                </div> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <p class="text-muted">{{Session::get('deskripsi')}}</p>
                                                        <div class="job-lable">
                                                            <label class="label badge-success">{{Session::get('gaji')}}</label>
                                                            <!-- <label class="label badge-info">Bootstrap</label>
                                                            <label class="label badge-primary">Css 3</label>
                                                            <label class="label badge-warning">Jade</label> -->
                                                        </div>
                                                        <!-- <div class="job-meta-data"><i class="icofont icofont-safety"></i>washington</div>
                                                        <div class="job-meta-data"><i class="icofont icofont-university"></i>10 Years</div> -->
                                                        <div class="text-right">
                                                            <button type="button" class="btn btn-primary waves-effect waves-light btn-sm"> Details
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Job card end -->

                                                <!-- Job card start -->
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
                                                <!-- Job card end -->
                                            </div>


                                            <!-- Pagination start -->
                                            <nav aria-label="...">
                                                <ul class="pagination justify-content-center m-t-20 m-b-20">
                                                    <li class="page-item disabled">
                                                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <!-- <li class="page-item active"> -->
                                                        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                                    <!-- </li> -->
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#">Next</a>
                                                    </li>
                                                </ul>
                                            </nav>
                                            <!-- Pagination end -->
                                        </div>

                                        <!-- Left column end -->
                                        <!-- Right column start -->
                                        <div class="col-lg-3">
                                            <!-- Filter card start -->
                                            <!-- <div class="card">
                                                <div class="card-header">
                                                    <h5><i class="icofont icofont-filter m-r-5"></i>Filter</h5>
                                                </div>
                                                <div class="card-block">
                                                    <form action="#">
                                                        <div class="form-group row">
                                                            <div class="col-sm-12">
                                                                <input type="text" class="form-control" placeholder="Job-title">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-12">
                                                                <input type="text" class="form-control" placeholder="Location">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-12">
                                                                <select class="form-control">
                                                                    <option>Select Job Type</option>
                                                                    <option>Full Time</option>
                                                                    <option>Part Time</option>
                                                                    <option>Remote</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="text-right">
                                                            <button type="submit" class="btn btn-primary">
                                                                <i class="icofont icofont-job-search m-r-5"></i> Job Find
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div> -->
                                            <!-- Filter card end -->
                                            <!-- Location card start -->
                                            <!-- <div class="card job-right-header">
                                                <div class="card-header">
                                                    <h5>Location</h5>
                                                    <div class="card-header-right">
                                                        <label class="label label-danger">Add</label>
                                                    </div>
                                                </div>
                                                <div class="card-block">
                                                    <form action="#">
                                                        <div class="checkbox-fade fade-in-primary">
                                                            <label>
                                                                <input type="checkbox" value="">
                                                                <span class="cr">
                                                                    <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                                                </span>
                                                            </label>
                                                            <div>Amsterdam, North Holland Province, Netherlands</div>
                                                        </div>
                                                        <div class="checkbox-fade fade-in-primary">
                                                            <label>
                                                                <input type="checkbox" value="">
                                                                <span class="cr">
                                                                    <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                                                </span>
                                                            </label>
                                                            <div>Koog aan de Zaan, North Holland Province, Netherlands</div>
                                                        </div>
                                                        <div class="checkbox-fade fade-in-primary">
                                                            <label>
                                                                <input type="checkbox" value="">
                                                                <span class="cr">
                                                                    <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                                                </span>
                                                            </label>
                                                            <div>Amsterdam Binnenstad en Oostelijk Havengebied, North Holland Province, Netherlands</div>
                                                        </div>
                                                        <div class="checkbox-fade fade-in-primary">
                                                            <label>
                                                                <input type="checkbox" value="">
                                                                <span class="cr">
                                                                    <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                                                </span>
                                                            </label>
                                                            <div>Hoofddorp, North Holland Province, Netherlands</div>
                                                        </div>
                                                        <div class="checkbox-fade fade-in-primary">
                                                            <label>
                                                                <input type="checkbox" value="">
                                                                <span class="cr">
                                                                    <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                                                </span>
                                                            </label>
                                                            <div>Alkmaar, North Holland Province, Netherlands</div>
                                                        </div>
                                                    </form>
                                                </div>

                                            </div> -->
                                            <!-- Location card end -->
                                            <!-- Job Title card start -->
                                            <!-- <div class="card job-right-header">
                                                <div class="card-header">
                                                    <h5>Job Title</h5>
                                                    <div class="card-header-right">
                                                        <label class="label label-danger">Add</label>
                                                    </div>
                                                </div>
                                                <div class="card-block">
                                                    <form action="#">
                                                        <div class="checkbox-fade fade-in-primary">
                                                            <label>
                                                                <input type="checkbox" value="">
                                                                <span class="cr">
                                                                    <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                                                </span>
                                                            </label>
                                                            <div>
                                                                Developer
                                                                <span class="text-muted">(30)</span>
                                                            </div>
                                                        </div>
                                                        <div class="checkbox-fade fade-in-primary">
                                                            <label>
                                                                <input type="checkbox" value="">
                                                                <span class="cr">
                                                                    <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                                                </span>
                                                            </label>
                                                            <div>
                                                                Front end designer
                                                                <span class="text-muted">(48)</span>
                                                            </div>
                                                        </div>
                                                        <div class="checkbox-fade fade-in-primary">
                                                            <label>
                                                                <input type="checkbox" value="">
                                                                <span class="cr">
                                                                    <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                                                </span>
                                                            </label>
                                                            <div>
                                                                UX designer
                                                                <span class="text-muted">(37)</span>
                                                            </div>
                                                        </div>
                                                        <div class="checkbox-fade fade-in-primary">
                                                            <label>
                                                                <input type="checkbox" value="">
                                                                <span class="cr">
                                                                    <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                                                </span>
                                                            </label>
                                                            <div>
                                                                Software engineer
                                                                <span class="text-muted">(57)</span>
                                                            </div>
                                                        </div>
                                                        <div class="checkbox-fade fade-in-primary">
                                                            <label>
                                                                <input type="checkbox" value="">
                                                                <span class="cr">
                                                                    <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                                                </span>
                                                            </label>
                                                            <div>
                                                                PHP developer
                                                                <span class="text-muted">(60)</span>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>

                                            </div> -->
                                            <!-- Job Title card end -->
                                            <!-- Specific Skills card start -->
                                            <!-- <div class="card job-right-header">
                                                <div class="card-header">
                                                    <h5>Specific Skills</h5>
                                                    <div class="card-header-right">
                                                        <label class="label label-danger">Add</label>
                                                    </div>
                                                </div>
                                                <div class="card-block">
                                                    <form action="#">
                                                        <div class="checkbox-fade fade-in-primary">
                                                            <label>
                                                                <input type="checkbox" value="">
                                                                <span class="cr">
                                                                    <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                                                </span>
                                                            </label>
                                                            <div>
                                                                HTML / CSS / SCSS
                                                                <span class="text-muted">(30)</span>
                                                            </div>
                                                        </div>
                                                        <div class="checkbox-fade fade-in-primary">
                                                            <label>
                                                                <input type="checkbox" value="">
                                                                <span class="cr">
                                                                    <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                                                </span>
                                                            </label>
                                                            <div>
                                                                Javascript
                                                                <span class="text-muted">(48)</span>
                                                            </div>
                                                        </div>
                                                        <div class="checkbox-fade fade-in-primary">
                                                            <label>
                                                                <input type="checkbox" value="">
                                                                <span class="cr">
                                                                    <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                                                </span>
                                                            </label>
                                                            <div>
                                                                Jquery
                                                                <span class="text-muted">(37)</span>
                                                            </div>
                                                        </div>
                                                        <div class="checkbox-fade fade-in-primary">
                                                            <label>
                                                                <input type="checkbox" value="">
                                                                <span class="cr">
                                                                    <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                                                </span>
                                                            </label>
                                                            <div>
                                                                Angular JS
                                                                <span class="text-muted">(57)</span>
                                                            </div>
                                                        </div>
                                                        <div class="checkbox-fade fade-in-primary">
                                                            <label>
                                                                <input type="checkbox" value="">
                                                                <span class="cr">
                                                                    <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                                                </span>
                                                            </label>
                                                            <div>
                                                                Node js
                                                                <span class="text-muted">(60)</span>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>

                                            </div> -->
                                            <!-- Specific Skills card end -->
                                            <!-- Date Posted card start -->
                                            <!-- <div class="card job-right-header">
                                                <div class="card-header">
                                                    <h5>Date Posted</h5>
                                                    <div class="card-header-right">
                                                        <label class="label label-danger">Add</label>
                                                    </div>
                                                </div>
                                                <div class="card-block">
                                                    <form action="#">
                                                        <div class="form-radio">
                                                            <div class="radio radiofill radio-inline">
                                                                <label>
                                                                    <input type="radio" name="radio" checked="checked">
                                                                    <i class="helper"></i> Today
                                                                    <span class="text-muted">(30)</span>
                                                                </label>
                                                            </div>
                                                            <div class="radio radiofill radio-inline">
                                                                <label>
                                                                    <input type="radio" name="radio">
                                                                    <i class="helper"></i> Yesterday
                                                                    <span class="text-muted">(85)</span>
                                                                </label>
                                                            </div>
                                                            <div class="radio radiofill radio-inline">
                                                                <label>
                                                                    <input type="radio" name="radio">
                                                                    <i class="helper"></i> Last-week
                                                                    <span class="text-muted">(184)</span>
                                                                </label>
                                                            </div>
                                                            <div class="radio radiofill radio-inline">
                                                                <label>
                                                                    <input type="radio" name="radio">
                                                                    <i class="helper"></i> Last month
                                                                    <span class="text-muted">(195)</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>

                                            </div> -->
                                            <!-- Date Posted card end -->
                                            <!-- Company card start -->
                                            <!-- <div class="card job-right-header">
                                                <div class="card-header">
                                                    <h5>Company</h5>
                                                    <div class="card-header-right">
                                                        <label class="label label-danger">Add</label>
                                                    </div>
                                                </div>
                                                <div class="card-block">
                                                    <form action="#">
                                                        <div class="checkbox-fade fade-in-primary">
                                                            <label>
                                                                <input type="checkbox" value="">
                                                                <span class="cr">
                                                                    <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                                                </span>
                                                            </label>
                                                            <div>
                                                                Phoenixcoded
                                                            </div>
                                                        </div>
                                                        <div class="checkbox-fade fade-in-primary">
                                                            <label>
                                                                <input type="checkbox" value="">
                                                                <span class="cr">
                                                                    <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                                                </span>
                                                            </label>
                                                            <div>
                                                                Peacock
                                                            </div>
                                                        </div>
                                                        <div class="checkbox-fade fade-in-primary">
                                                            <label>
                                                                <input type="checkbox" value="">
                                                                <span class="cr">
                                                                    <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                                                </span>
                                                            </label>
                                                            <div>
                                                                Amazon
                                                            </div>
                                                        </div>
                                                        <div class="checkbox-fade fade-in-primary">
                                                            <label>
                                                                <input type="checkbox" value="">
                                                                <span class="cr">
                                                                    <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                                                </span>
                                                            </label>
                                                            <div>
                                                                Flipkart
                                                            </div>
                                                        </div>
                                                        <div class="checkbox-fade fade-in-primary">
                                                            <label>
                                                                <input type="checkbox" value="">
                                                                <span class="cr">
                                                                    <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                                                </span>
                                                            </label>
                                                            <div>
                                                                Snapdeal
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>

                                            </div> -->
                                            <!-- Company card end -->
                                            <!-- Recent Searches card start -->
                                            <!-- <div class="card job-right-header">
                                                <div class="card-header">
                                                    <h5>Recent Searches</h5>
                                                    <div class="card-header-right">
                                                        <label class="label label-danger">Add</label>
                                                    </div>
                                                </div>
                                                <div class="card-block">
                                                    <form action="#">
                                                        <div>
                                                            Senior Web designer
                                                            <p>Amsterdam</p>
                                                        </div>
                                                        <div>
                                                            PHP Devloper
                                                            <p>Amsterdam</p>
                                                        </div>
                                                        <div>
                                                            Fresher UI designer
                                                            <p>Amsterdam</p>
                                                        </div>
                                                        <div>
                                                            Wordpress devloper
                                                            <p>Amsterdam</p>
                                                        </div>
                                                        <div>
                                                            Opencart devloper
                                                            <p>Amsterdam</p>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div> -->
                                            <!-- Recent Searches card end -->
                                        </div>
                                        </div>
                                        <!-- Right column end -->
                                    </div>
                                </div>
                                    <!-- Page body start -->
                                </div>
                            </div>
                            @endsection