<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    public function index() {
   $category = Category::all();
   return view('category.index', compact(category));
    }
    public function insert(Request $request) {
        $category = new Category;
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();
        return redirect(route('category.index')->with('status', 'Category Added Successfully'));
    }
    public function edit($id) {
        $category = Category::find($id);
        return view('category.index', compact(category));
    }
    public function update(Request $request, $id) {
        $category = new Category;
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();
         return redirect(route('category.index')->with('status', 'Category Updated Successfully'));

    }
    public function destroy($id){
        Category::destroy($id);
         return redirect(route('category.index')->with('status', 'Category Added Successfully'));

    }
}
