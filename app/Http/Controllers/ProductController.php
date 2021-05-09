<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; 
//use Session;

class ProductController extends Controller
{
  
   
    public function create()
    {
        return view('Addproduct');
    }

  
    public function store(Request $request)
    {
        $obj=new Product();
    	$obj->productname=$request->productname;
    	$obj->productid=$request->productid;
    	$obj->productprice=$request->productprice;
    	
    	

    	if($obj->save()){
    		//return view('ShowProduct');
           // return "welcome";
           $obj = Product::all();
            return view('ShowProduct', ['data'=>$obj]);
    	}

    }

   
    public function show($id)
    {
        $obj = Product::all();
            return view('ShowProduct', ['data'=>$obj]);
    
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sample = Product::find($id);       
       
        return view('edit',['data'=>$sample]);
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
        
       
            $obj = Product::find($id);       
            $obj->productname = $request->productname;
            $obj->productid = $request->productid;
            $obj->productprice = $request->productprice;
             if($obj->save())
            {
                $obj = Product::all();
                return view('ShowProduct', ['data'=>$obj]);
            }
           // return view('frontend.edit',['data'=>$sample]);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sample = Product::find($id)->delete();       
        $obj = Product::all();
        return view('ShowProduct', ['data'=>$obj]);
    }
}
