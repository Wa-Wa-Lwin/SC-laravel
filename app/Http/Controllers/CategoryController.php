<?php

namespace App\Http\Controllers;
// use App\Models\Category;
// use App\Models\Post; // it can also write like this individually. 
//use App\Models\{Category,Post};

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::paginate(5); 
        return view('category.index',compact('categories'));
    }


    public function create()
    {
        return view('category.create');        
    }


    public function store(Request $request)
    {
        $name = $request->name;

        $request->validate([
            'name'=>'required'
        ]);

        Category::create([
            'name'=>$name
        ]); 

        return redirect('/categories')->with('msg','Stored Successfully.'); 
        
    }


    public function show($id)
    {
        
    }

    public function edit($id)
    {
        $category = Category::find($id); 
        return view('category.edit', compact('category'));
        
    }

    public function update(Request $request, $id)
    {
        $name = $request->name; 

        $request->validate([
            'name'=>'required'
        ]);
        
        Category::find($id)->update([
            'name' => $name
        ]);

        return redirect('/categories')->with('msg','Updated Successfully.'); 
       
    }

    public function destroy($id)
    {
        $category = Category::find($id); 
        Post::where('category_id','=', $category->id)->delete(); 
        $category->delete(); 
        return back()->with('msg','Deleted Successfully.');
        
    }
}
