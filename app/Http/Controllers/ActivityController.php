<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Maintenance;
use App\Group;
use App\Activity;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        return view('itdesk.maintenance.activity');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $group = Group::where('id', $id)->first();
        $group2 = Group::where('id', $id)->pluck('maintenance_id');
        $main = Maintenance::whereIn('id', $group2)->first();
        // return [$group , $main];
        $act = Activity::where('group_id', $id)->get();
        return view('itdesk.maintenance.new_act', compact('main','act','group'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $act = new Activity;
        $main = $request['main_id'];
        $act->group_id = $request['group_id'];
        $act->name = $request['name'];
        $act->code = $request['code'];
        $act->save();

        return redirect('group/index/'.$main);
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
        $act = Activity::where('id', $id)->first();
        return view('itdesk.maintenance.edit_act', compact('act'));
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
        $act = Activity::where('id', $id)->first();
        $main = $request['main_id'];
        $act->group_id = $request['group_id'];
        $act->name = $request['name'];
        $act->code = $request['code'];
        $act->update();

        return redirect('group/index/'.$main);
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
