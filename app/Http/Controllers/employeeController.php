<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class employeeController extends Controller
{
    //view employee
    public function viewEmployee()
    {
        $role = DB::table('users')
            ->select('users.role_id_user','role_name.role_id','role_name.promission')
            ->join('role_name','users.role_id_user','=','role_name.role_id')
            ->get();
            // dd($query);
        return view('form.employee',compact('role'));
    }
    // insert
    public function save(Request $Request)
    {
        $Request->validate([
            'name'          => 'required',
            'sex'           => 'required',
            'dateOfBirth'   => 'required',
            'email'         => 'required|string|email',
            'phone'         => 'required',
            'jobPosition'   => 'required',
            'salary'        => 'required',
        ]);

        $data = [
            'name'          =>   $Request->name,
            'sex'           =>   $Request->sex,
            'date_of_birth' =>   $Request->dateOfBirth,
            'email'         =>   $Request->email,
            'phone'         =>   $Request->phone,
            'job_position'  =>   $Request->jobPosition,
            'salary'        =>   $Request->salary,
        ];
        DB::table('employees')->insert($data);
        return redirect()->route('form/employee/new')->with('success','Has been insert successfully!');
        // return dd($data);
    }

    // report
    public function report()
    {
        $query = DB::table('employees')->select()->get();
        // dd($query);
        $role = DB::table('users')
            ->select('users.role_id_user','role_name.role_id','role_name.promission')
            ->join('role_name','users.role_id_user','=','role_name.role_id')
            ->get();
            // dd($query);
        return view('report.report',compact('query','role'));
    }
    // update
    public function update(Request $request)
    {
        $update = [
                'name'           =>  $request->name,
                'sex'            =>  $request->sex,
                'date_of_birth'  =>  $request->dateOfBirth,
                'email'          =>  $request->email,
                'phone'          =>  $request->phone,
                'job_position'   =>  $request->jobPosition,
                'salary'         =>  $request->salary

            ];
        DB::table('employees')->where('id',$request->id)->update($update);
        return redirect()->back()->with('success','Has been update successfully!');
    }
     // delete
     public function delete($id)
     {
         DB::table('employees')->where('id',$id)->delete();
         return redirect()->back()->with('success','Has been update successfully!');
    }

    // search
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


    }
}
