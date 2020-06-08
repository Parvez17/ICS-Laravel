<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //addding db class 

class AddProduct extends Controller
{
    //
/**
 * Adding new product 
 * db col names
 * PID,name,quantity,sid,price(unit price), status
 */
public function Add(Request $req){
    $product=[
        'name'=>$req->name,
        'quantity'=>$req->quantity,
        'img'=>$req->img,
        'sid'=>$req->sid,
        'price'=>$req->price,
        'status'=>$req->status,
    ];
    print_r($product);
        DB::table('products')->insert($product);
        $req->session()->flash('success_msg',"Product added");
        return response()
            ->json(['name'=>"paervez"]);
        

    
}
/**
 * getting all the products from db
 */
public function GetProducts(){
  $data=DB::table('products')->get();
  return view('navLink.items.businesscard')->with("data",$data);
}

/**
 * getting all the data of a product
 *  from db by it's PID
 */
public function GetProductByID(Request $req){
    $pid=$req->pid;
    $data=DB::table('products')->where("PID","=",$pid)->first();
    return view('navLink.productCatagories.product')->with("data",$data);
  }

}
