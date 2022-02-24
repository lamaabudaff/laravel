<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogsRequest;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index(){
       $blogs =  Blog::paginate(3);
        return view('blogs.index',compact('blogs'));
    }

    public function store(Request $request){
     //   dd($request->all());
        Blog::create([
            'title'=>$request->title,
            'text'=>$request->text,
 ]);
 return redirect(route('blogs.index'));


    }
    public function delete($id){
        try {
            $blog = Blog::find($id);
            if ($blog) {
                $blog->delete();
            }

            return redirect(route('blogs.index'));
        }catch (\Exception $exception){
            return $exception->getMessage();
        }
    }
    public function edit($id){
        $blog = Blog::find($id);
        if($blog) {
            return view('blogs.edit', compact('blog'));
       }else {
           abort(404, "this blog not found");
       }
    }
    public function update($id , BlogsRequest  $request){

        $blog = Blog::find($id);
        if($blog) {
            $blog->update([
                'title' => $request->title,
                'text' => $request->text,
            ]);
        }
            return redirect(route('blogs.edit',$blog->id));
        }


}
