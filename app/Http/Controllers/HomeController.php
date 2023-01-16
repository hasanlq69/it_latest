<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trouble;
use App\Maintenance;
use App\Group;
use App\Activity;
use App\Daily;
use Carbon\Carbon;
use App\Project;
use App\Task;

use App\Charts\ProjectChart;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $main = Maintenance::orderBy('id', 'desc')->get();

        $today = Carbon::Today();
        
        $troub = Trouble::orderBy('created_at', 'desc')->where('status', 'On Progres')->get();
        $troday = Trouble::orderBy('id', 'desc')->whereDate('finish', $today)->get();

        $daily = Daily::select('act_id')->whereDate('created_at', $today)->get();
       // $actday = Activity::select('group_id')->where('id', $daily)->get();
        $act = Group::whereNotIn('id', $daily)->orderBy('maintenance_id')->get();
        $daychek = Daily::orderBy('created_at')->where('day', $today)->get();

        $pro = Project::orderBy('name')->get();
        $taskundone = Task::where('status', 'On Build')->where('start', '<=', $today)->get();
        $taskday = Task::where('finish', $today)->get();

        // return [$actday];
        return view('itdesk.index', compact('troub','troday','taskday','taskundone', 'main', 'today', 'daily', 'act', 'daychek', 'pro'));
    }

    public function home()
    {
        $main = Maintenance::orderBy('id', 'desc')->get();

        $today = Carbon::Today();
        
        $troub = Trouble::orderBy('created_at', 'desc')->where('status', 'On Progres')->get();
        $troday = Trouble::orderBy('id', 'desc')->whereDate('finish', $today)->get();

        $daily = Daily::whereDate('created_at', $today)->get()->pluck('act_id');
        $actday = Activity::whereIn('id', $daily)->get();
        $groupday = Group::whereIn('id', $actday)->get();
        
        $act = Group::whereNotIn('id', $daily)->orderBy('maintenance_id')->get();
        $daychek = Daily::orderBy('created_at')->where('day', $today)->get();

        $pro = Project::orderBy('name')->get();
        $taskundone = Task::where('status', 'On Build')->where('start', '<=', $today)->get();
        $taskday = Task::where('finish', $today)->get();


        $borderColors = [
            "rgba(255, 99, 132, 1.0)",
            "rgba(22,160,133, 1.0)",
            "rgba(255, 205, 86, 1.0)",
            "rgba(51,105,232, 1.0)",
            "rgba(244,67,54, 1.0)",
            "rgba(34,198,246, 1.0)",
            "rgba(153, 102, 255, 1.0)",
            "rgba(255, 159, 64, 1.0)",
            "rgba(233,30,99, 1.0)",
            "rgba(205,220,57, 1.0)"
        ];
        $fillColors = [
            "rgba(255, 99, 132, 0.2)",
            "rgba(22,160,133, 0.2)",
            "rgba(255, 205, 86, 0.2)",
            "rgba(51,105,232, 0.2)",
            "rgba(244,67,54, 0.2)",
            "rgba(34,198,246, 0.2)",
            "rgba(153, 102, 255, 0.2)",
            "rgba(255, 159, 64, 0.2)",
            "rgba(233,30,99, 0.2)",
            "rgba(205,220,57, 0.2)"

        ];

        $prochart = new ProjectChart;

        // return [$actday];
        return view('itdesk.index', compact('troub','troday', 'taskday','taskundone', 'main', 'today', 'daily', 'act', 'daychek', 'pro'));
    }
}
