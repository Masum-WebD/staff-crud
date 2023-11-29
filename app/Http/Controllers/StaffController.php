<?php

namespace App\Http\Controllers;

use App\Models\Designating;
use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index(){
        $staffs= Staff::all();

        return view('welcome')->with([
            'staffs'=> $staffs,

    ]);
    }

    public function create(){
        $designation = Designating::all();
        return view('staff.create')->with(['designations' =>$designation]);
    }

    public function store(Request $request){
        // dd($request);
        $staff = new Staff();

        $staff->name = $request["name"];
        $staff->deg_id= $request["position"];
        $staff->birth_date= $request["date"];
        $staff->save();

        return redirect('/');

    }

    public function edit ( $id){
        $staff= Staff::find($id);
        $designations = Designating::all();
        return view('staff.edit')->with(['staff'=> $staff, 'designations'=>$designations]);
    }
    public function update( $id, Request $request){
        $staff= Staff::find($id);
        $staff->name = $request["name"];
        $staff->deg_id= $request["position"];
        $staff->birth_date= $request["date"];
        $staff->update();

        return redirect('/')->with('success',"successfully updated");
    }

    public function destroy($id){
        $staff= Staff::find($id);
        $staff->delete();
        return redirect('/');
    }
}
