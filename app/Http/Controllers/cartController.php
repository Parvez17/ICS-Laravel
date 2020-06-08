<?php

namespace App\Http\Controllers;
use Cookie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //addding db class 
class cartController extends Controller
{
    //

    public function Add(Request $req){
        $pid=$req->pid;
        print_r($pid);
        //$p=DB::table('products')->where("PID","=",$pid)-first();
        $product=(object)[
            "pid"=>$pid,
            "quantity"=>1,
            "price"=>40
        ];
        if (\Cookie::get('cart') !== null) {
            //dfkmldsfl,ds
            $preCart=$req->cookie('cart');
            array_push($preCart,$product);
            \Cookie::queue('cart', json_encode($preCart));

        }else{

            \Cookie::queue('cart',json_encode(array($product)));
        }

        return response()
        ->json(["success"=>true,"data"=>$product],200);
    }
}
