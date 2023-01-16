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
                                            <li><span class="bread-blod">Activity </span>
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
                            <h4>{{$main->name}} Activities Group</h4>
                            <div class="add-product">
                                <a href="{{route('group.create', $main->id)}}"><span><i  class="fa fa-plus-square" aria-hidden="true"></i> </span> Activities Group</a>
                            </div>
                            <div class="asset-inner">
                                <table>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Cheklist Activies</th>
                                        <th>Setting</th>
                                    </tr>
                                    @php
                                        $i=1;
                                    @endphp
                                    @foreach($group as $t)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$t->name}}</td>
                                        <td>
                                            <a href="{{ route('activity.create', $t->id) }}" class="btn btn-sm btn-success login-submit-cs"><span><i  class="fa fa-plus-square" aria-hidden="true"></i> </span> Activity</a> <br>
                                            @foreach($t->activities as $a)
                                            ~ {{$a->name}} <a href="{{route('activity.edit', $a->id)}}" data-toggle="tooltip" title="Edit {{$a->name}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                            <br>
                                            @endforeach
                                        </td>
                                        <td> 
                                            <a href="{{route('group.edit', $t->id)}}" data-toggle="tooltip" title="Edit {{$t->name}} Group" class="btn btn-warning pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                            <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection