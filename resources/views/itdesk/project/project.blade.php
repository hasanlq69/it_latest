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
                                            <li><span class="bread-blod">Projects</span>
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
                            <h4>Project List</h4>
                            <div class="add-product">
                                <a href="{{route('project.create')}}"><span><i  class="fa fa-plus-square" aria-hidden="true"></i> </span> Project</a>
                            </div>
                            <div class="asset-inner">
                                <table>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Type</th>
                                        <th>Tasks List </th>
                                        <th>Setting</th>
                                    </tr>
                                    @php
                                        $i=1;
                                    @endphp
                                    @foreach($pro as $t)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$t->name}}</td>
                                        <td>{{$t->type}}</td>
                                        <td>
                                            <a href="{{ route('task.create', $t->id) }}" class="btn btn-sm btn-success login-submit-cs"><span><i  class="fa fa-plus-square" aria-hidden="true"></i> </span>  Task</a> <br>
                                            
                                            @php
                                                $count = 0;
                                            @endphp
                                            @foreach($t->tasks as $a)
                                            @php
                                                if($count == 3) break;
                                            @endphp
                                            @php
                                                $count++;
                                            @endphp
                                            {{$a->name}}  
                                            <a href="{{route('task.show', $a->id)}}" data-toggle="tooltip" title="Detail Task" class="btn btn-primary pd-setting-ed"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            <a href="{{route('task.edit', $a->id)}}" data-toggle="tooltip" title="Edit Task" class="btn btn-danger pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                            <br>
                                            @endforeach
                                        </td>
                                        <td> 
                                            <a href="{{route('project.show', $t->id)}}" data-toggle="tooltip" title="Detail Project" class="btn btn-info pd-setting-ed"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            <a href="{{route('project.edit', $t->id)}}" data-toggle="tooltip" title="Edit Project" class="btn btn-warning pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                            <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </table>
                            </div>
                            <div class="custom-pagination">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection