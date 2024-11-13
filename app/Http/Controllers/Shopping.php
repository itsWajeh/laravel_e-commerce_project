<?php

namespace App\Http\Controllers;
use App\Models\products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class Shopping extends Controller
{
    public function index(){

        return view('shopping.landingpage');
    }

    public function electric(){
        $product=products::all();
        return view('shopping.electric',['products'=>$product]);
    }


    public function productDetails($id){
        $producdetails=DB::table('products')
        ->join('products__details','products.id','=','products__details.id_products')
        ->where('products.id','=',$id)
        ->first();

        return view('shopping.productDetails',['prod'=>$producdetails]);
    }

    public function add_to_cart()
    {
      $count=session::get('counter');
      $count++;
      session::put('counter',$count);
      return view('shopping.landingpage');

    }

    
    public function homeFurniture(){

        $product=products::all();
        return view('shopping.homeFurniture',['products'=>$product]);    }
}
