<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Maintenance;
use App\Group;
use App\Activity;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        
        $main = Maintenance::where('id', $id)->first();
        $group = Group::where('maintenance_id', $id)->get();
        $groupact = Group::where('maintenance_id', $id)->pluck('id');
        $act = Activity::whereIn('group_id', $groupact)->get();
        return view('itdesk.maintenance.group', compact('main','group', 'act'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        
        $main = Maintenance::where('id', $id)->first();
        return view('itdesk.maintenance.new_group', compact('main'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $act = new Group;
        $main = $request['main_id'];
        $act->maintenance_id = $request['main_id'];
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
        $main = Group::where('id', $id)->first();
        return view('itdesk.maintenance.edit_group', compact('main'));
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
        $act = Group::where('id', $id)->first();
        $main = $request['main_id'];
        $act->maintenance_id = $request['main_id'];
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
