<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\ProductCategory;
use File;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Product::paginate(5);
        return view('dashboard.product.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $data = ProductCategory::get();
        return view('dashboard.product.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image= '';
        if($request->hasFile('image')){
            $file=$request->file('image');
            $name=$file->getClientOriginalName();
            $file->move('images',$name);
            $image='images/'.$name;
        }
        Product::create([
            'name' => $request->name,
               'image'=>$image,
            'description' => $request->description,
            'quantity' => $request->quantity,
            'price' => $request->price,
            'category_id'=>$request->category_id

            
        ]);
        return redirect()->route('admin.product');
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
        $value = Product::find($id);
        return view('dashboard.product.edit', compact('value'));
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
         $image= $request->image_url;
        if($request->hasFile('image')){
            $file=$request->file('image');
            $name=$file->getClientOriginalName();
                        $file->move('images',$name);
             if(File::exists($image)
         ){
                File::delete($image);

             }


            $image='images/'.$name;
        }
        Product::find($id)->update([
            'name' => $request->name,
            'image'=>$image,
            'description' => $request->description,
            'quantity' => $request->quantity,
            'price' => $request->price
            
        ]);
        return redirect()->route('admin.product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Product::find($id)->delete();
        return redirect()->route('admin.product');
    }
}
