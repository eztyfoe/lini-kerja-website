@extends('base') @section('content')
<div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                <div class="row">
                    <div class="col-xl-12 col-md-12">
                        @if(\Session::has('message'))
                        <div class="alert alert-danger">
                            <div>{{Session::get('message')}}</div>
                        </div>
                        @endif @if(\Session::has('alert-success'))
                        <div class="alert alert-success">
                            <div>{{Session::get('alert-success')}}</div>
                        </div>
                        @endif
                        <div class="card table-card">
                            <div class="card-header">
                                <h5>Daftar Permintaan Verifikasi {{$title}} Terbaru</h5>
                                <div class="card-header-right">
                                    <ul class="list-unstyled card-option">
                                        <li><i class="feather icon-maximize full-card"></i></li>
                                        <li><i class="feather icon-minus minimize-card"></i></li>
                                        <li><i class="feather icon-trash-2 close-card"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-block">
                                @if (!empty($responseData)) 
                                <div class="table-responsive">
                                    <table class="table table-hover table-borderless">
                                        <thead>
                                            <tr>
                                                <th>Nama Perusahaan</th>
                                                <th align="center">Foto</th>
                                                <th></th>
                                                <!-- <th>Avg Price</th>
                                                <th>Total</th> -->
                                            </tr> 
                                        </thead>
                                        <tbody>
                                            @php ($curPerusahaan = '')
                                            @foreach(array_reverse($responseData) as $item)
                                            @if ($item['id_perusahaan'] != $curPerusahaan)
                                            <tr>
                                                <td><h6>{{$item['nama']}}</h6></td>
                                                <td align="center">
                                                    <a href="http://pkyuk.com/jkt/static/contents/surat/{{$item['foto']}}.jpeg" target="_blank" class="text-primary">
                                                        File
                                                    </a>
                                                </td>
                                                @if ($item['is_verified'] != 1)
                                                <td align="center">
                                                    <form action="{{url('postVerify')}}" method="post">
                                                        @csrf
                                                        <input type="hidden" name="halaman" id="halaman" value="adminSertifikat">
                                                        <input type="hidden" name="id_dokumen" id="id_dokumen" value="{{$item['id_sertifikat_perusahaan']}}">
                                                        <input type="hidden" name="tipe_dokumen" id="tipe_dokumen" value="4">
                                                        <input type="submit" name="submit" id="submit" class="btn btn-inverse btn-round btn-sm btn-outline-inverse" value="Verifikasi">
                                                    </form>
                                                </td>
                                                @endif
                                            </tr>
                                            @endif
                                            @php ($curPerusahaan = $item['id_perusahaan'])
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                @else
                                <p class="text-center">Tidak ada data {{$title}}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
