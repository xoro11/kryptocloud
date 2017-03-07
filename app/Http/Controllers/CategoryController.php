<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;
use Session;
use App\Category;

class CategoryController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $categories = Category::all();

       return view('categories.index')->withCategories($categories);
    }

   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,array('name'=>'required|max:255'));
        $category=new Category;
        $category->name=$request->name;
        $category->save();

        Session::flash('success','New Category Has Been Created');

        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($category_id)
    {
        $p=Category::find($category_id);
        $c=Post::all();
         foreach ($c as $category) {
            $cats[$category->name]=$category->title;
        }
      return view('categories.show')->withP($p)->withC($c);
    }
   
        

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=Category::find($id);
        return view('categories.edit')->withPost($post);    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $post=Category::find($id);
        $post->name = $request->input('name');
       
    $post->save();

    Session::flash('success','This post was Successfully saved');

     return redirect()->route('categories.index',$post->id);
    

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $post= Category::find($id);

         $post->delete();

         Session::flash('success','This post is deleted');
          return redirect()->route('posts.index');
           }
}
