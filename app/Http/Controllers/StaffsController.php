<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;

class StaffsController extends Controller
{
    public function index(){
    	$staffs = Staff::all();
    	return view('staffs')->with('staffs', $staffs);
    }

    public function create(){

    }

    public function store(){
        $staff = new Staff();
        $staff->name = request('fname');
        $staff->position = request('position');
        $staff->facebook = request('fblink');
        $staff->instagram = request('iglink');
        $staff->twitter = request('ttlink');
        $staff->linkedin = request('lilink');
        $staff->address = request('address');
        $staff->save();
        return redirect('/admin?tab=recruit');
    }

    public function destroy($id){
        $staff = Staff::find($id);
        $staff->delete();

        return redirect('/admin?tab=fire');
    }


    //edit
    //update
    //destroy
}
