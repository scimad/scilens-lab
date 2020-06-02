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

    // public function create(){

    // }

    // public function store(){

    // }

    // public function show(){

    // }


    //edit
    //update
    //destroy
}
