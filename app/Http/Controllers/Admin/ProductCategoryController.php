<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ProductCategory;
use App\Product;
class ProductCategoryController extends Controller
{
	public function index(){
		$data = ProductCategory::paginate(5);
		return view('dashboard.product-category.index', compact('data'));
	}

	public function create(){
		return view('dashboard.product-category.create');
	}

	public function edit($id){
		$data = ProductCategory::find($id);
		// $data = ProductCategory::where('id', $id)->first();
		return view('dashboard.product-category.edit', compact('data'));
	}

	public function store(Request $request){
		ProductCategory::create([
			'name' => $request->name,
			'description' => $request->description
		]);
		return redirect()->route('admin.product-category');
	}

	public function update(Request $request, $id){
		ProductCategory::find($id)->update([
			'name' => $request->name,
			'description' => $request->description
		]);
		return redirect()->route('admin.product-category');
	}	

	public function destroy($id){
		$message="Category already used";
		if(!Product::where('category_id',$id)->exists()){
        $data = ProductCategory::find($id)->delete();
        $message="Sucessfully deleted";
		}
		
		return redirect()->route('admin.product-category')->with('status',$message);
	}
}
