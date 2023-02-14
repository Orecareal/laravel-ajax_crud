<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    function index(){
        $data = Product::latest()->paginate(5);
        return view('pages/index', compact('data'));
    }

    public function addProduct(Request $req){
        $req->validate([
                'name'=>'required|unique:products',
                'price'=>'required|numeric'
            ],[
                'name.required'=> 'Name is required',
                'name.unique'=> 'Product already exists',
                'price.required'=> 'Price is required',
            ]);

            $product = new Product();
            $product->name = $req->name;
            $product->price = $req->price;
            $product->save();
            return response()->JSON([
                'status'=>'success',
            ]);

    }

    public function updateProduct(Request $req){
        $req->validate([
                'update_name'=>'required|unique:products,name,'.$req->update_id,
                'update_price'=>'required|numeric'
            ],[
                'update_name.required'=> 'Name is required',
                'update_name.unique'=> 'Product already exists',
                'update_price.required'=> 'Price is required',
            ]);

            Product::where('id', $req->update_id)->update([
                'name'=>$req->update_name,
                'price'=>$req->update_price,
            ]);
            return response()->JSON([
                'status'=>'success',
            ]);

    }

    public function deleteProduct(Request $req){
        Product::find($req->id)->delete();
        return response()->JSON([
            'status'=>'success',
        ]);
    }

    public function pagination(){
        $data = Product::latest()->paginate(5);
        return view('pages/pagination_page', compact('data'))->render();
    }

}
