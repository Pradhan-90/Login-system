<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use Session;

class UserController extends Controller
{
    public function list() 
    {
        Session::get('logData');
        $user=user::all();
        return view('userlist',['user'=>$user]);
    }

    public function create() 
    {
        return view('create');
    }

    public function loginsubmit(Request $req) 
    {
        return user::select('*')->where(
            [
                ['email', '=', $req->email],
                ['password', '=', $req->password],
            ]
        )->get();
        $req->session()->put('logData', [$req->input()]);
        return redirect('/list');
    //    print_r($req->input());
    }

    public function createsubmit(Request $req) 
    {
        $user = new user;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = $req->password;
        $result = $user->save();
        if ($result) {
            $req->session()->put('logData', [$req->input()]);
            return redirect('/list');
        }
    }
}
