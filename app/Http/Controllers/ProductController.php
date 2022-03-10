<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
     public function index() {
   $product = Product::all();
   $party = PoliticalParty::find(1);
      $candidates = $party->presidentialCandidates;
   return view('product.index', compact(product));
    }
    public function insert(Request $request) {
         $request->validate([
            'name' => 'required',
            'detail' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
    
        Product::create($input);
     
        // return redirect()->route('products.index')
        //                 ->with('success','Product created successfully.');
        return redirect(route('product.index')->with('status', 'product Added Successfully'));
    }
    public function edit($id) {
        $product = Product::find($id);
        return view('product.index', compact(product));
    }
    public function update(Request $request, Product $product) {
     
                        
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required'
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }
          
        $product->update($input);
         return redirect(route('product.index')->with('status', 'product Updated Successfully'));

    }
}
    public function destroy($id){
        Product::destroy($id);
         return redirect(route('product.index')->with('status', 'product Added Successfully'));

    }
}
