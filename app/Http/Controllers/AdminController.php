<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request){
        $tab = strtolower($request->query('tab', 'dashboard'));
        switch ($tab):
            case 'recruit':
                return view('admin.artisanrecruit');
                break;
            case 'components':
                return view('admin.components');
                break;
            case 'dashboard':
                return view('admin.dashboard');
                break;
            case 'forms':
                return view('admin.forms');
                break;
            case 'icons':
                return view('admin.icons');
                break;
            case 'typography':
                return view('admin.typography');
                break;
            case 'view':
                $staffs = Staff::all();
                return view('admin.artisanview')->with('staffs', $staffs);
                break;
            case 'fire':
                $staffs = Staff::all();
                return view('admin.artisanfire')->with('staffs', $staffs);
                break;
            default:
                return view('admin.dashboard');
                endswitch;
    }
}
