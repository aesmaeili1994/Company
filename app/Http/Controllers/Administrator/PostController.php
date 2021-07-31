<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\createPostRequest;
use App\Http\Requests\updatePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $post=Post::paginate(4);
        return view('admin.post.index',compact('post'));
    }

    public function create()
    {
        return view('admin.post.create');
    }

    public function store(createPostRequest $request)
    {
        $file=$request->file('image');
        $image='';
        if(!empty($file)){
            $image=time().'.'.$file->getClientOriginalExtension();
            $file->move('images/post',$image);
        }
        Post::create([
            'image'=>$image,
            'alt'=>$request->alt,
            'subject'=>$request->subject,
            'body'=>$request->body,
            'title'=>$request->title,
            'author'=>$request->author,
            'keywords'=>$request->keywords,
            'description'=>$request->description
        ]);
        session()->flash('create','thanks, successful create data.');
        return back();
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $post=Post::findOrFail($id);
        return view('admin.post.edit',compact('post'));
    }

    public function update(updatePostRequest $request, $id)
    {
        $post=Post::findOrFail($id);
        $file=$request->file('image');
        $image='';
        if(!empty($file)){
            if (file_exists('images/post/'.$post->image)) {
                unlink('images/post/'.$post->image);
            }
            $image=time().'.'.$file->getClientOriginalExtension();
            $file->move('images/post',$image);
        }else{
            $image=$post->image;
        }
        $post->update([
            'image'=>$image,
            'alt'=>$request->alt,
            'subject'=>$request->subject,
            'body'=>$request->body,
            'title'=>$request->title,
            'author'=>$request->author,
            'keywords'=>$request->keywords,
            'description'=>$request->description
        ]);
        session()->flash('update','successfull update data!');
        return redirect()->route('post.index');
    }

    public function destroy($id)
    {
        $post=Post::findOrFail($id);
        if(file_exists('images/post/'.$post->image)){
            unlink('images/post/'.$post->image);
        }
        Post::destroy($id);
        session()->flash('delete','successful delete data!');
        return back();
    }
}
