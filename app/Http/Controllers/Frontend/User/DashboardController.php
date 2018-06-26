<?php

namespace App\Http\Controllers\Frontend\User;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Auth;

/**
 * Class DashboardController.
 */
class DashboardController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {

        $uid = Auth::user()->id;
        $project_id_array = DB::table('project_user_datas')->where('user_id', $uid)->value('project_id');

        if(is_array($project_id_array))
        {
            $projects = DB::table('projects')->whereIn('id', $project_id_array)->get();
        }
        else
        {
            $projects = DB::table('projects')->where('id', $project_id_array)->get();

        }

        return view('frontend.user.dashboard', ['projects' => $projects]);
    }


}
