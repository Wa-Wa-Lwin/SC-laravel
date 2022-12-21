<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function index()
    {
        $title = "wwl";
        $posts = Post::Paginate(5);   
        
        return view('post.index', compact('title', 'posts'));
    }

    public function create()
    {
        $categories=Category::all(); 
        return view('post.create',compact('categories')); //folder.filename for directing to the page 
    }
    
    public function store(Request $request)
    {
        $title = $request->title;
        $content = $request->content;
        $categoryId = $request->category_id;

        $request->validate([
            'title'=>'required',
            'content'=>'required',
            'category_id'=>'required'
        ]);

        Post::create([
            'title'=>$title,
            'content'=>$content,
            'category_id'=>$categoryId

        ]);

        return redirect('/posts')->with('msg','Created Successfully.'); 
    }

    public function edit($id)
    {
        $post = Post::find($id); 
        return view('post.edit',compact('post')); 
    }

    public function update(Request $request,$id)
    {
        $title = $request->title;
        $content = $request->content;

        $request->validate([
            'title'=>'required',
            'content'=>'required'
        ]);

        $post = Post::find($id); 

        $post->update([           
            'title'=> $request->title, 
            'content'=> $request->content 
        ]);

        return redirect('/posts')->with('msg','Updated Successfully.'); 
    }

    public function show($id)
    {
        
    }

    public function destroy($id)
    {
        Post::find($id)->delete(); 
        return back()->with('msg','Deleted successfully.');
       
    }

    

}
