<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
    	return view('admin.main');
    }

    public function test(){
    	return view('admin.test');
    }

    public function components(){
    	return view('admin.components');
    }

    public function artisan(){
    	return view('admin.artisan');
    }

}
