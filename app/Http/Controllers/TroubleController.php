<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trouble;
use Auth;
use Mail;

class TroubleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $troub = Trouble::orderBy('created_at', 'desc')->where('status', 'Done')->paginate(10);
        return view('itdesk.troubleshoot.troubleshoot', compact('troub'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('itdesk.troubleshoot.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tro = new Trouble;
        $tro->department = $request['department'];
        $tro->trouble_type = $request['trouble_type'];
        $tro->client_name = $request['client_name'];
        $tro->trouble_name = $request['trouble_name'];
        $troname = $request['trouble_name'];
        $tro->trouble_req = $request['trouble_req'];
        $tro->start = $request['start'];
        $tro->finish = $request['finish'];
        $tro->cause = $request['cause'];
        $tro->solution = $request['solution'];
        $tro->note = $request['note'];
        $tro->status = $request['status'];

        if ($request->hasFile('file_1')){
            $file=$request->file('file_1');
            $path='trouble/';
            $name=$troname.'1'.time().'.'.$file->getClientOriginalExtension();
            $file->move($path,$name);
            $tro->file_1=$name;
        }else{
            $tro->file_1='nofile.png';
        }

        if ($request->hasFile('file_2')){
            $file=$request->file('file_2');
            $path2='trouble/';
            $name2=$troname.'2'.time().'.'.$file->getClientOriginalExtension();
            $file->move($path2,$name2);
            $tro->file_2=$name2;
        }else{
            $tro->file_2='nofile.png';
        }


        if ($request->hasFile('file_3')){
            $file=$request->file('file_3');
            $path3='trouble/';
            $name3=$troname.'3'.time().'.'.$file->getClientOriginalExtension();
            $file->move($path3,$name3);
            $tro->file_3=$name3;
        }else{
            $tro->file_3='nofile.png';
        }

        $status = $request['status'];

        if ($status == "Done") {
            $tro->reporter = Auth::user()->fullname;
            $tro->problem_solver = Auth::user()->fullname;
            $tro->save();
            try{
                Mail::send('email', ['nama' => $request->client_name,'dept' => $request->department, 'trouble_type' => $request->trouble_req, 'trouble_name'=>  $request->trouble_name, 'note'=>  $request->note, 'status'=>  $request->status], function ($message) use ($request)
                {
                    $message->subject($request->client_name);
                    $message->from('mishbahul09munir@gmail.com', 'Troubleshot IT Desk');
                    $pnerima = ['irvan@salokapark.com', 'munir@salokapark.com'];
                    $message->to($pnerima);
                });
            }
            catch (Exception $e){
                return response (['status' => false,'errors' => $e->getMessage()]);
            }
            return redirect('/problem')->with('alert-success','Berhasil Kirim Email');
            
        }
        else 
        {
            $tro->reporter = Auth::user()->fullname;
            $tro->problem_solver = "Not Yet";
            $tro->save();
            try{
                Mail::send('email', ['nama' => $request->client_name,'dept' => $request->department, 'trouble_type' => $request->trouble_req, 'trouble_name'=>  $request->trouble_name, 'note'=>  $request->note,'status'=>  $request->status], function ($message) use ($request)
                {
                    $message->subject($request->client_name);
                    $message->from('mishbahul09munir@gmail.com', 'Troubleshot IT Desk');
                    $pnerima = ['irvan@salokapark.com', 'munir@salokapark.com'];
                    $message->to($pnerima);
                });
            }
            catch (Exception $e){
                return response (['status' => false,'errors' => $e->getMessage()]);
            }
            return redirect('/')->with('alert-success','Berhasil Kirim Email');
        }

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tr = Trouble::where('id', $id)->first();
        return view('itdesk.troubleshoot.detail', compact('tr'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tr = Trouble::where('id', $id)->first();
        return view('itdesk.troubleshoot.edit', compact('tr'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tro = Trouble::where('id', $id)->first();
        $tro->department = $request['department'];
        $tro->trouble_type = $request['trouble_type'];
        $tro->client_name = $request['client_name'];
        $tro->trouble_name = $request['trouble_name'];
        $troname = $request['trouble_name'];
        $tro->trouble_req = $request['trouble_req'];
        $tro->finish = $request['finish'];
        $tro->cause = $request['cause'];
        $tro->solution = $request['solution'];
        $tro->note = $request['note'];
        $tro->status = $request['status'];

        if ($request->hasFile('file_1')){
            $file=$request->file('file_1');
            $path='trouble/';
            $name=$troname.'1'.time().'.'.$file->getClientOriginalExtension();
            $file->move($path,$name);
            $tro->file_1=$name;
        } else{
            $tro->file_1=$tro->file_1;
        }

        if ($request->hasFile('file_2')){
            $file=$request->file('file_2');
            $path2='trouble/';
            $name2=$troname.'2'.time().'.'.$file->getClientOriginalExtension();
            $file->move($path2,$name2);
            $tro->file_2=$name2;
        } else{
            $tro->file_2=$tro->file_2;
        }


        if ($request->hasFile('file_3')){
            $file=$request->file('file_3');
            $path3='trouble/';
            $name3=$troname.'3'.time().'.'.$file->getClientOriginalExtension();
            $file->move($path3,$name3);
            $tro->file_3=$name3;
        } else{
            $tro->file_3=$tro->file_3;
        }
        $status = $request['status'];

        if ($status == "Done") {
            $tro->reporter = Auth::user()->fullname;
            $tro->problem_solver = Auth::user()->fullname;
            $tro->update();
            try{
                Mail::send('email', ['nama' => $request->client_name,'dept' => $request->department, 'trouble_type' => $request->trouble_req, 'trouble_name'=>  $request->trouble_name, 'note'=>  $request->note, 'status'=>  $request->status], function ($message) use ($request)
                {
                    $message->subject($request->client_name);
                    $message->from('mishbahul09munir@gmail.com', 'Troubleshot IT Desk');
                    $pnerima = ['irvan@salokapark.com', 'munir@salokapark.com'];
                    $message->to($pnerima);
                });
            }
            catch (Exception $e){
                return response (['status' => false,'errors' => $e->getMessage()]);
            }
            return redirect('/problem')->with('alert-success','Berhasil Kirim Email');
            
        }
        else 
        {
            $tro->reporter = Auth::user()->fullname;
            $tro->problem_solver = "Not Yet";
            $tro->update();
            try{
                Mail::send('email', ['nama' => $request->client_name,'dept' => $request->department, 'trouble_type' => $request->trouble_req, 'trouble_name'=>  $request->trouble_name, 'note'=>  $request->note, 'status'=>  $request->status], function ($message) use ($request)
                {
                    $message->subject($request->client_name);
                    $message->from('mishbahul09munir@gmail.com', 'Troubleshot IT Desk');
                    $pnerima = ['irvan@salokapark.com', 'munir@salokapark.com'];
                    $message->to($pnerima);
                });
            }
            catch (Exception $e){
                return response (['status' => false,'errors' => $e->getMessage()]);
            }
            return redirect('/')->with('alert-success','Berhasil Kirim Email');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
