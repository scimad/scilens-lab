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
            case 'recruit':
                return view('admin.artisan');
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
            default:
                return view('admin.dashboard');
                endswitch;
    }
}
