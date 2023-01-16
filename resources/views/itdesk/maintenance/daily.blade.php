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
                            <h4>{{$main->name}} {{$today->format('d-m-Y')}} Cheklist Activities</h4>
                            <div class="add-product">
                                {{-- <a href="{{route('activity.create', $main->id)}}"><span><i  class="fa fa-plus-square" aria-hidden="true"></i> </span> Activities</a> --}}
                            </div>
                            <div class="asset-inner">
                                <table>
                                    <tr>
                                        <th>Activities</th>
                                    </tr>
                                    @php
                                        $i=1;
                                        $ia=1;
                                    @endphp
                                    @foreach($groupday as $t)
                                    <tr>
                                        <td>
                                            <strong>{{$i++}}. {{$t->name}}</strong> <br>
                                        @foreach($t->activities as $ag)
                                            <form action="{{route('daily.store')}}" method="POST">
                                                @csrf
                                                    <input type="checkbox" name="act[]" value="{{$ag->id}}"> {{$ag->name}} <br>
                                        @endforeach  
                                                    <input type="text" class="form-control" name="note" placeholder="Note">
                                                    <div class="input-group custom-go-button">
                                                        <input type="text" class="form-control" name="pic" placeholder="PIC">
                                                        <span class="input-group-btn"><button type="type" class="btn btn-primary">Checked </button></span>
                                                    </div>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @foreach ($daily as $day)
                                    <tr>
                                        <td>
                                            <small>
                                            <input type="checkbox" checked disabled> {{$day->activity->name}}<strong> {{$day->activity->group->name}}</strong> <br>
                                            {{$day->status}} by {{$day->maintener}}
                                            </small>

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