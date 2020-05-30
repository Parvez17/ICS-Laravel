<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    //
    public function Index(Request $req){
        $email=$req->email;
        $pwd=$req->pwd;
        $user = DB::table('users')->where('email', $email)->where('pwd',$pwd)->first();
        if($user){
            $req->session()->put('user',$user);
            return redirect('/home');
        }else{
            $req->session()->flash('error_msg',"email or password is wrong");
            return redirect('/myaccount');
        }
           
    }
}
