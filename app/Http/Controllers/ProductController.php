<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\shoppingcart\Facades\Cart;
use App\Category;
use App\Product;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories =Category::pluck('id','name');
        return view('admin.product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation of form $request data
        $this->validate($request,[
            'name' => 'required',
            'size' => 'required',
            'price' =>'required',
            'image' => 'image|mimes:png,jpg,jpeg|max:10000',

            ]);
        if($request->hasFile('image')){
            $imageName = $request ->image ->getClientOriginalName();
            $request ->image->move('images', $imageName);
            $formInput = new Product;
            $formInput->name= $request->name;
            $formInput->description= $request->description;
            $formInput->size = $request->size;
            $formInput->price = $request->price;
            $formInput->image = $imageName;
            $formInput->category_id =$request ->category_id;
            $formInput->save();
            return redirect()->route('admin.index');

        }
/*
          //$formInput  = new Product;
        $formInput= $request->except('image');//requests all input from form except image
       // $formInput = $request->all(); --requests for all data from the form

        //handling image 
        $image=$request->image;//the $image variable holds the requested image temporarily
        if($request->hasFile($image)){
            $imageName= $image->getClientOriginalName();
            $image->move('images', $imageName);
            $formInput['image'] = $imageName;
         
            //Product::create('$formInput');
        }
       Product::create($formInput);
           //$formInput ->save();
        return redirect()->route('admin.index');
        */
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::find($id)->delete();
        return back();
    }
}
