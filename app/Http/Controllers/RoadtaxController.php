<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Roadtax;
use DB;

class RoadtaxController extends Controller
{
    public function show()
    {
        return view('report.show');
    }
/*
    public function search(Request $request)
    {
        $fromDate = $request->input('fromDate');
        $toDate   = $request->input('toDate');

        $query =DB::table('employees')->select()
        ->where('date_of_birth', '>=', $fromDate)
        ->where('date_of_birth', '<=', $toDate)
        ->get();
        //dd($query);

            $role = DB::table('users')
            ->select('users.role_id_user','role_name.role_id','role_name.promission')
            ->join('role_name','users.role_id_user','=','role_name.role_id')
            ->get();
        return view('report.report',compact('query','role'));


    }*/
}
