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
                                <h4>Legalitas Perusahaan</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page-header end -->
            <!-- Page body start -->
            <div class="page-body">
                <div class="row">
                    <div class="col-lg-12 col-xl-3">
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
                            @foreach($responseData as $ress)
                                @php ($foto = $ress['foto'])
                            @endforeach
                            @if (Session::get('id') == $ress['id_perusahaan'])                 
                            <div class="card-block">
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <p>
                                            Bukti Legalitas Perusahaan
                                        </p>
                                        @if (is_null($ress['foto']))
                                            
                                        @else
                                            <img class="user-img img-radius" src="http://pkyuk.com/jkt/static/contents/surat/{{$foto}}.jpeg" alt="user-img" style="max-width: 100%;" />
                                        @endif                                            
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class="card-block">
                                <form action="{{ url('/postLegality') }}" method="POST">
                                    <input type="hidden" class="form-control" name="id_perusahaan" id="id_perusahaan" value="{{Session::get('id')}}" />
                                    
                                    <div class="form-group row"> 
                                        <div class="col-sm-12">
                                            <p>
                                                
                                            </p>
                                            <input id="inp" type="file" class="form-control" accept=".png, .jpg, .jpeg"/>
                                        </div>
                                    </div>

                                    <div id="foto-row" class="form-group row" style="visibility: hidden; display: none;">
                                        <div class="col-sm-12">
                                          <input type="text" class="form-control" name="foto" id="foto" />
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12 text-right">
                                            <input type="submit" name="submit" id="submit" class="btn btn-primary m-r-10" value="submit" />
                                        </div>
                                    </div>
                                    {{ csrf_field() }}
                                </form>
                            </div>
                            @endif
                            

                            <script>
                                function readFile() {
                                    if (this.files && this.files[0]) {
                                        var FR = new FileReader();

                                        FR.addEventListener("load", function (e) {
                                            // document.getElementById("img").src = e.target.result;
                                            document.getElementById("foto").value = e.target.result.split(',')[1];
                                            // document.getElementById("foto-row").style = "visibility: visible";
                                            // document.getElementById("foto-row").style = "display: block";
                                        });

                                        FR.readAsDataURL(this.files[0]);
                                    }
                                }
                                document.getElementById("inp").addEventListener("change", readFile);
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
