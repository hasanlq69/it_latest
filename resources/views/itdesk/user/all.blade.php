@extends('hris.main')
@section('isi')
        <div class="breadcome-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcome-list single-page-breadcome">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="breadcome-heading">
                                        <form role="search" class="sr-input-func">
                                            <input type="text" placeholder="Search..." class="search-int form-control">
                                            <a href="#"><i class="fa fa-search"></i></a>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <ul class="breadcome-menu">
                                        <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                        </li>
                                        <li><span class="bread-blod">Semua Form</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="widgets-programs-area">
            <div class="container-fluid">
                <div class="widget-program-box mg-tb-30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                <div class="hpanel widget-int-shape responsive-mg-b-30">
                                    <div class="panel-body">
                                        <div class="text-center content-box">
                                            <h2 class="m-b-xs"> Form Ijin Keluar Kantor/ Tidak Bekerja </h2>
                                            <div class="m icon-box">
                                                <i class="educate-icon educate-star-half"></i>
                                            </div>
                                            <a href="{{ route('form.ijinkeluar') }}" class="btn btn-success widget-btn-2 ">Isi Form</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                <div class="hpanel widget-int-shape responsive-mg-b-30">
                                    <div class="panel-body">
                                        <div class="text-center content-box">
                                            <h2 class="m-b-xs"> Form Permintaan Cuti Karyawan</h2>
                                            <div class="m icon-box">
                                                <i class="educate-icon educate-miscellanous"></i>
                                            </div>
                                            <a href="{{ route('form.cuti') }}" class="btn btn-info widget-btn-2 ">Isi Form</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                <div class="hpanel widget-int-shape responsive-mg-b-30 res-tablet-mg-t-30 dk-res-t-pro-30">
                                    <div class="panel-body">
                                        <div class="text-center content-box">
                                            <h2 class="m-b-xs">Form Permintaan Absen dan Lembur</h2>
                                            <div class="m icon-box">
                                                <i class="educate-icon educate-interface"></i>
                                            </div>
                                            <a href="{{ route('form.absenlembur') }}" class="btn btn-warning widget-btn-2 ">Isi Form</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                <div class="hpanel widget-int-shape res-tablet-mg-t-30 dk-res-t-pro-30">
                                    <div class="panel-body">
                                        <div class="text-center content-box">
                                            <h2 class="m-b-xs">Form Permintaan</h2>
                                            <div class="m icon-box">
                                                <i class="educate-icon educate-charts"></i>
                                            </div>
                                            <a href="{{ route('form.cuti') }}" class="btn btn-danger widget-btn-2 ">Isi Form</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
@endsection