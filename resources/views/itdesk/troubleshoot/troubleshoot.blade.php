@extends('itdesk.main')
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
                                            <li><span class="bread-blod">Troubleshoots</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-status mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap drp-lst">
                            <h4>Troubleshoots List</h4>
                            <div class="add-product">
                                <a href="{{route('problem.create')}}"><span><i  class="fa fa-plus-square" aria-hidden="true"></i> </span> Troubleshoots</a>
                            </div>
                            <div class="asset-inner">
                                <table>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Client Name</th>
                                        <th>Status</th>
                                        <th>Setting</th>
                                    </tr>
                                    @php
                                        $i=1;
                                    @endphp
                                    @foreach($troub as $t)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$t->trouble_name}}</td>
                                        <td>
                                            {{$t->client_name}}
                                        </td>
                                        <td>{{$t->status}} </td>
                                        <td>
                                            <a href="{{route('problem.show', $t->id)}}" data-toggle="tooltip" title="Detail" class="btn btn-info pd-setting-ed"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            <a href="{{route('problem.edit', $t->id)}}" data-toggle="tooltip" title="Edit" class="btn btn-warning pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                            <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </table>
                            </div>
                            <div class="custom-pagination">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        
                                        {{-- <li class="page-item"><a class="page-link" href="#">Previous</a></li> --}}
                                        <li class="page-item">{{ $troub->links() }}</li>
                                        {{-- <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">Next</a></li> --}}
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection