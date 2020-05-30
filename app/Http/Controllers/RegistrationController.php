<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    //
public function Index(Request $req){
    //code
    $email=$req->email;
    $pwd=$req->pwd;
    DB::table('users')->insert(
        [
            'email'=>$email,
            'pwd'=>$pwd,
            'name'=>'parvez'//it will be changed
        ]
        );
        $req->session()->flash('success_msg',"Registration Successful");
        return redirect('/myaccount');

}
}
