<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request){
        $tab = strtolower($request->query('tab', 'dashboard'));
        switch ($tab):
            case 'dashboard':
                return view('admin.dashboard');
                break;
            case 'recruit':
                return view('admin.artisan');
                break;
            case 'components':
                return view('admin.components');
                break;
            default:
                return view('admin.dashboard');
                endswitch;
    }

    public function test(){
    	return view('admin.test');
    }

}
