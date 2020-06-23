<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function index(){
    	$users = User::all();
    	return view('users')->with('users', $users);
    }

    // public function create(){

    // }

    public function store(){
        $user = new User();
        $user->name = request('fname');
        $user->email = request('email');
        $user->password = request('password');
        $user->position = request('position');
        $user->facebook = request('fblink');
        $user->instagram = request('iglink');
        $user->twitter = request('ttlink');
        $user->linkedin = request('lilink');
        $user->address = request('address');
        $user->save();
        return redirect('/admin?tab=recruit');
    }

    public function destroy($id){
        $user = User::find($id);
        $user->delete();

        return redirect('/admin?tab=fire');

    }


    //edit
    //update
    //destroy
}
