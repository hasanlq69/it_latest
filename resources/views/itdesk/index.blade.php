@extends('itdesk.main')
@section('isi')
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                            <h3>ALL TASK TODAY</h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="{{ url('/') }}">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Dashboard Index</span>
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

        <div class="courses-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                @foreach($troub as $tr)
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="courses-inner res-mg-t-30 table-mg-t-pro-n tb-sm-res-d-n dk-res-t-d-n">
                            <div class="courses-title">
                                <b><i class="text-danger">
                                <a href="{{route('problem.edit', $tr->id)}}" data-toggle="tooltip" title="Edit {{$tr->trouble_name}} Trouble"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                {{$tr->trouble_name}} "{{$tr->trouble_type}}" 
                                </i></b>                                
                            </div>
                            <div class="courses-alaltic pull-right">
                                <img src="trouble/{{$tr->file_1}}" height="50" width="50">
                            </div>
                            <div class="course-des ">
                                <p ><span class="text-info"> <b>Client  :</b> {{$tr->client_name}} @ {{$tr->department}} </span> </p>
                                <p><span class="text-warning"> <b>Cause :</b> {{$tr->cause}}</span></p>
                                <p><span></span> <b>Note:</b><br> <small>{{$tr->note}}</small></p>
                            </div>
                            <div class="product-buttons">
                                <small class="text-info">
                                    <span class="cr-ic-r"><span class="course-icon"> Reported by {{$tr->reporter}} </span>
                                    <span class="cr-ic-r"><span class="course-icon"> at {{$tr->created_at->format('d-m-Y h:i A')}} </span> 
                                </small>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="courses-inner res-mg-t-30 table-mg-t-pro-n tb-sm-res-d-n dk-res-t-d-n">
                        <div class="product-buttons">
                            <a href="{{ route('problem.create')}}" data-toggle="tooltip" title="Add Troubleshoot" class="btn btn-warning btn-lg btn-block"><i  class="fa fa-plus-square" aria-hidden="true"></i> Troubleshoot</a>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>

        <div class="courses-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                @foreach($troday as $trd)
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="courses-inner res-mg-t-30 table-mg-t-pro-n tb-sm-res-d-n dk-res-t-d-n">
                        <div class="courses-title">
                            <b><i class="text-success">
                            <a href="{{route('problem.show', $trd->id)}}" data-toggle="tooltip" title="Show {{$trd->trouble_name}} Trouble"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            {{$trd->trouble_name}} "{{$trd->trouble_type}}" 
                            </i></b>
                        </div>
                        <div class="courses-alaltic pull-right">
                            <img src="trouble/{{$trd->file_1}}" height="50" width="50">
                        </div>
                        <div class="course-des">
                            <p ><span class="text-info"> <b>Client     :</b> {{$trd->client_name}} @ {{$trd->department}} </span> </p>
                            <p><span class="text-success"> <b>Solution :</b> {{$trd->solution}}</span></p>
                            <p><span></span> <b>Note:</b><br> <small>{{$trd->note}}</small></p>
                        </div>
                        <div class="product-buttons">
                            <small class="text-info">
                                <span class="cr-ic-r"><span class="course-icon"> Solved by {{$trd->reporter}} </span>
                                <span class="cr-ic-r"><span class="course-icon"> at {{$trd->updated_at->format('d-m-Y h:i A')}} </span> 
                            </small>
                        </div>
                    </div>
                </div>
                @endforeach
                </div>
            </div>
        </div>
        
        <div class="courses-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <h3>Cheklist Activity  {{$today->format('d-m-Y')}}</h3>
                            <table class="table">
                                <tr>
                                    <th >Maintenace Name</th>
                                    <th>Setting </th>
                                </tr>
                                @foreach($main as $a)
                                <tr>
                                    <td><b>  {{ $a->name }}  </b> </td>
                                    <td>
                                            
                                        <a href="{{route('daily.create', $a->id)}}" data-toggle="tooltip" title="Cheklist Activity" class="btn btn-success pd-setting-ed"><i class="fa fa-check-square-o" aria-hidden="true"></i></a>
                                    </td>
                                        
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="courses-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                @foreach($taskundone as $tud)
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="courses-inner res-mg-t-30 table-mg-t-pro-n tb-sm-res-d-n dk-res-t-d-n">
                            <div class="courses-alaltic text-danger">
                                <a href="{{route('task.edit', $tud->id)}}" data-toggle="tooltip" title="Edit {{$tud->name}} Task"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                {{$tud->name}} <br>
                                <b class="text-warning"> 
                                    <a href="{{ route('task.create', $tud->Project->id)}}" data-toggle="tooltip" title="Add Task {{$tud->Project->name}} Project    "><i  class="fa fa-plus-square" aria-hidden="true"></i></a>
                                    <a href="{{route('project.show', $tud->Project->id)}}"> "{{$tud->Project->name}} Project" </a>
                                </b>
                            </div>
                            <div class="course-des ">
                                <p>By <b class="text-danger"> {{$tud->developer}} </b>  <b class="text-warning"> -> {{$tud->status}}</b> <i class="text-info">  from {{ date('d-M-y', strtotime($tud->start)) }}</i>   </p>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
        
        <div class="courses-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                @foreach($taskday as $tda)
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="courses-inner res-mg-t-30 table-mg-t-pro-n tb-sm-res-d-n dk-res-t-d-n">
                            <div class="courses-alaltic text-success">
                                <a href="{{route('task.show', $tda->id)}}" data-toggle="tooltip" title="Detail {{$tda->name}} Task"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                {{$tda->name}} "<b>{{$tda->status}}</b>" <br>
                                <b class="text-warning"> 
                                <a href="{{route('task.show', $tda->id)}}" data-toggle="tooltip" title="Detail {{$tda->name}} Task">
                                    <a href="{{ route('task.create', $tda->Project->id)}}" data-toggle="tooltip" title="Add Task {{$tda->Project->name}} Project    "><i  class="fa fa-plus-square" aria-hidden="true"></i></a>
                                    <a href="{{route('project.show', $tda->Project->id)}}"> "{{$tda->Project->name}} Project" </a>  
                                </b>
                            </div>
                            <div class="course-des ">
                                <p>By <b class="text-success"> {{$tda->developer}} </b> <i class="text-info"> @ {{ date('d M', strtotime($tda->start)) }} - {{$today->format('d M y')}}</i> <i class="text-success"> </i> </p>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>

@endsection