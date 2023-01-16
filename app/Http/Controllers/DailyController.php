<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Daily;
use App\Maintenance;
use App\Group;
use App\Activity;
use Auth;
use Carbon\Carbon;

class DailyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $today = Carbon::Today();
        $main = Maintenance::where('id', $id)->first();
        $dainot = Daily::select('act_id')->whereDate('created_at', $today)->get();
        // $group = Group::where('maintenance_id', $id)->pluck('id');
        $act = Activity::whereNotIn('id',$dainot)->pluck('group_id');
        $groupday = Group::where('maintenance_id', $id)->whereIn('id', $act)->get();


        $groupchek = Group::where('maintenance_id',$id)->pluck('id');
        $actday = Activity::whereIn('group_id', $groupchek)->pluck('id');
        $daily = Daily::whereDate('created_at', $today)->whereIn('act_id', $actday)->get();

        
        return view('itdesk.maintenance.daily', compact('today','main','groupday', 'daily'));
        // dd ($dainot);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pic = $request['pic'];
        $note = $request['note'];
        $simpan = [];
    
        foreach($request->act as $d){

            if(! empty($d))
            {
                // dd ($note);
                
                $day = Carbon::parse('Today')->format('d-m-y');
                $status = "Checked"; 
                $main = Auth::user()->fullname;
                $now = Carbon::now();

                $simpan[] = [
                    'act_id' => $d,
                    'note' => $note,
                    'maintener' => $main,
                    'day' => $day,
                    'status' => $status,
                    'pic' => $pic,
                    'updated_at' => $now,  
                    'created_at' => $now 

                ];
            }
        }
        Daily::insert($simpan);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
