<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\createAboutRequest;
use App\Http\Requests\updateAboutRequest;
use App\Models\About;
use App\Models\Slider;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $about=About::all();
        return view('admin.about.index',compact('about'));
    }

    public function create()
    {
        return view('admin.about.create');
    }

    public function store(createAboutRequest $request)
    {
        $file=$request->file('image');
        $image='';
        if(!empty($file)){
            $image=time().'.'.$file->getClientOriginalExtension();
            $file->move('images/about',$image);
        }
        About::create([
            'title'=>$request->title,
            'image'=>$image,
            'alt'=>$request->alt,
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
        $about=About::findOrFail($id);
        return view('admin.about.edit',compact('about'));
    }


    public function update(updateAboutRequest $request, $id)
    {
        $file=$request->file('image');
        $about=About::findOrFail($id);
        $image='';
        if(!empty($file)){
            if(file_exists('images/about/'.$about->image)){
               unlink('images/about/'.$about->image);
            }
            $image=time().'.'.$file->getClientOriginalExtension();
            $file->move('images/about',$image);
        }else{
            $image=$about->image;
        }
        $about->update([
            'title'=>$request->title,
            'image'=>$image,
            'alt'=>$request->alt,
            'description'=>$request->description
        ]);
        session()->flash('update','successfull update data!');
        return redirect()->route('about.index');
    }


    public function destroy($id)
    {
        $about=About::findOrFail($id);
        if(file_exists('images/about/'.$about->image)){
            unlink('images/about/'.$about->image);
        }
        About::destroy($id);
        session()->flash('delete','successful delete data!');
        return redirect()->route('about.index');
    }
}
