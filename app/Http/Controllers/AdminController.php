<?php

namespace App\Http\Controllers;

use App\Categorie_product;
use App\Categories;
use App\Http\Requests;
use App\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class admincontroller extends Controller
{
	public function index()
	{

	}
    public function adminlogin()
    {
    	return view('admin/AdminLogin');
    }
    public function adminhome()
    {
    	$users = Products::all();
    	$categories = Categories::all();
    	return view("admin/AdminHome")->with(['allUsers'=>$users,'categories'=>$categories]);
    	
    }
    public function addproduct()
   {
   		$categories = Categories::all();
   		return view('admin/Addproduct')->with(['categories'=>$categories,'message'=>'Catogories added successfully']);  		
   } 
   public function addcategories()
   {
   		$categories = Categories::all();
   		return view('admin/AddCategories')->with(['categories'=>$categories]);  		
   } 
   public function postaddproduct(Request $request)
   {
   		$data=[];
   		$insert=Products::create([
    		'productName'=>$request->input('productName'),
    		'description'=>$request->input('description'),
    		'price'=>$request->input('price')
    		]);
    	if($insert)
    	{
    		if (Input::file('Image')->isValid()) {
			      $destinationPath = 'public/images';
			      $extension = Input::file('Image')->getClientOriginalExtension();
			      $fileName = rand(100,200).'.'.$extension; 
			      $insert->Image = $fileName;
			      $insert->save();
			      Input::file('Image')->move($destinationPath, $fileName);
			    }
			$insert=Categorie_product::create([
    		'categories_id'=>$request->input('categories_id'),
    		'products_id'=>$insert->id
    		]);

    		return redirect('adminhome')->with(['message'=>'Product created successfully']);
    	}
    	return back()->withInput(['message'=>'Product not created']);
   }
   public function postaddcategories(Request $request)
   {
   		$insert=Categories::create([
    		'categoriesName'=>$request->input('categoriesName')
    		]);
   		return redirect('addproduct')->with(['message'=>'Category created successfully']);
   }
   public function updateProductView(Request $request,$id)
   {
   		$users = Products::find($id);
   		$categories = Categories::all();
    	return view("admin/AdminUpdate")->with(['allUsers'=>$users,'categories'=>$categories,'id'=>$id]);
   }
   public function updateProduct(Request $request,$id)
   {

   		$update= Products::where('id',$id)->update([
   			'productName'=>$request->input('productName'),
    		'description'=>$request->input('description'),
    		'price'=>$request->input('price')]);

   		if($request->input('Image') !== null)
    	{
    		if (Input::file('Image')->isValid()) {
			      $destinationPath = 'public/images';
			      $extension = Input::file('Image')->getClientOriginalExtension();
			      $fileName = rand(100,200).'.'.$extension; 
			      $insert->Image = $fileName;
			      $insert->save();
			      Input::file('Image')->move($destinationPath, $fileName);
			    }
    	}
    	return redirect("/adminhome")->with(['message'=>'Products updated successfully']);

   }
}
