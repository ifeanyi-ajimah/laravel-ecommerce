<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class FrontController extends Controller
{
    
    public function index(){
    	$shirts = Product::orderBy('created_at', 'desc')->get();
    	return view('front.home' ,compact('shirts'));

    }

    public function shirts(){
    	$shirts = Product::orderBy('created_at', 'desc')->get();
        return view('front.shirts', compact('shirts'));
    }

    public function shirt($id){
        $shirt = Product::find($id);

    	return view('front.shirt', compact('shirt'));
    }






}
