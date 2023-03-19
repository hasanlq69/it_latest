

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
                                            <!-- <form role="search" class="sr-input-func">
                                                <input type="text" placeholder="Search..." class="search-int form-control">
                                                <a href="#"><i class="fa fa-search"></i></a>
                                            </form> -->
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="{{ route('problem.index') }} ">Troubleshoot List</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Troubleshoot Form</span>
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
        <!-- Basic Form Start -->
        <div class="basic-form-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline12-list">
                            <div class="sparkline12-hd">
                                <div class="main-sparkline12-hd">
                                    <h1>Troubleshoot Form</h1>
                                </div>
                            </div>
                            <div class="sparkline12-graph">
                                <div class="basic-login-form-ad">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="all-form-element-inner">
                                                <form action="{{ route('problem.update',$tr->id) }}" method="POST" enctype="multipart/form-data" >
                                                    {{csrf_field()}}
                                                    <input name="_method" type="hidden" value="PUT">

                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Type Desk </label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <select class="form-control" name="trouble_req" >
                                                                    <option value="{{$tr->trouble_req}}">{{$tr->trouble_req}}</option>
                                                                    <option value="Trouble">Trouble</option>
                                                                    <option value="By Request">By Request</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Client Name</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <div class="row">
                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                        <div class="form-select-list">
                                                                            <input type="text" class="form-control basic-ele-mg-t-10" placeholder=" Client/Device  Name" name="client_name" value="{{$tr->client_name}}" >
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                        <select class="form-control" name="department" >
                                                                            <option value="{{$tr->department}}">{{$tr->department}}</option>
                                                                            <option value="Device Only"><i>Device Only</i></option>
                                                                            <option value="Operational">Operational</option>
                                                                            <option value="IT">IT</option>
                                                                            <option value="HRGA">HRGA</option>
                                                                            <option value="Sales">Sales</option>
                                                                            <option value="Marketing">Marketing</option>
                                                                            <option value="Finance">Finance</option>
                                                                            <option value="Maintenance">Maintenance</option>
                                                                            <option value="Inpark Revenue">Inpark Revenue</option>
                                                                            <option value="Entertainment">Entertainment</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Trouble Name</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <div class="row">
                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                        <div class="form-select-list">
                                                                            <input type="text" class="form-control basic-ele-mg-t-10" placeholder=" Trouble Name" name="trouble_name" value="{{$tr->trouble_name}}" >
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">  
                                                                        <div class="form-select-list basic-ele-mg-t-10">
                                                                            <select class="form-control" name="trouble_type" >
                                                                                <option value="{{$tr->trouble_type}}">{{$tr->trouble_type}}</option>
                                                                                <option value="Dream & Moka POS">Dream & Moka POS</option>
                                                                                <option value="Ticketing">Ticketing</option>
                                                                                <option value="Hardware">Hardware</option>
                                                                                <option value="Operating System">Operating System</option>
                                                                                <option value="Networking">Networking</option>
                                                                                <option value="Other">Other</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Cause </label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" name="cause" class="form-control" placeholder="cause of  trouble" value="{{$tr->cause}}" >
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Time Allocation</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <div class="row">
                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                        <div class="form-select-list">

                                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                                <i>Started/Reported :</i>
                                                                            </div>
                                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                                {{date('d-m-Y H:i', strtotime($tr->start))}} 
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                        <div class="form-select-list basic-ele-mg-t-10">

                                                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                                                                <i>Finished:</i>
                                                                            </div>
                                                                            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                                                                <input type="datetime-local" class="form-control" placeholder=" Finish" name="finish" value="{{date('d-m-Y H:i', strtotime($tr->finish))}}">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Solution</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" name="solution" class="form-control" placeholder="solution of trouble" value="{{$tr->solution}}" required="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Note </label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <textarea class="form-control" placeholder="Detail Solution / Problem  " name="note" required="" >{{$tr->note}}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro"> </label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <div class="row">
                                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                        <div class="form-select-list basic-ele-mg-t-10">
                                                                            <a href="{{url('trouble/'.$tr->file_3)}}" target="_blank">
                                                                                <img src="{{url('trouble/'.$tr->file_3)}}" height="100" width="100">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                        <div class="form-select-list basic-ele-mg-t-10">
                                                                            <a href="{{url('trouble/'.$tr->file_2)}}" target="_blank">
                                                                                <img src="{{url('trouble/'.$tr->file_2)}}" height="100" width="100">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                        <div class="form-select-list basic-ele-mg-t-10">
                                                                            <a href="{{url('trouble/'.$tr->file_3)}}" target="_blank">
                                                                                <img src="{{url('trouble/'.$tr->file_3)}}" height="100" width="100">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Files <i>( img,doc, etc )</i></label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <div class="row">
                                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                        <div class="form-select-list basic-ele-mg-t-10">
                                                                            <input type="file" class="form-control" placeholder=" Finish" name="file_1">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                        <div class="form-select-list basic-ele-mg-t-10">
                                                                            <input type="file" class="form-control" placeholder=" Finish" name="file_2" >
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                        <div class="form-select-list basic-ele-mg-t-10">
                                                                            <input type="file" class="form-control" placeholder=" Finish" name="file_3">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Status</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <select class="form-control" name="status">
                                                                    <option value="{{$tr->status}}">{{$tr->status}}</option> <option value="Done ">Done </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="login-btn-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3"></div>
                                                                <div class="col-lg-9">
                                                                    <div class="login-horizental cancel-wp pull-left form-bc-ele">
                                                                        <a href="{{ URL::previous() }}" class="btn btn-danger ">Cancel</a>
                                                                        <button type="submit" class="btn btn-sm btn-primary login-submit-cs">Update</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
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