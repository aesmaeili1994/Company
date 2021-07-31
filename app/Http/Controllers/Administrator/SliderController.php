<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\createSliderRequest;
use App\Http\Requests\updateSliderRequest;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        $slider=Slider::paginate(4);
        return view('admin.slider.index',compact('slider'));
    }

    public function create()
    {
        return view('admin.slider.create');
    }

    public function store(createSliderRequest $request)
    {
        $file=$request->file('image');
        $image='';
        if(!empty($file)){
            $image=time().'.'.$file->getClientOriginalExtension();
            $file->move('images/slider',$image);
        }
        Slider::create([
            'image'=>$image,
            'alt'=>$request->alt,
            'title'=>$request->title,
            'caption'=>$request->caption
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
        $slider=Slider::findOrFail($id);
        return view('admin.slider.edit',compact('slider'));
    }

    public function update(updateSliderRequest $request, $id)
    {
        $file=$request->file('image');
        $slider=Slider::findOrFail($id);
        $image='';
        if(!empty($file)){
            if(file_exists('images/slider/'.$slider->image)){
                unlink('images/slider/'.$slider->image);
            }
            $image=time().'.'.$file->getClientOriginalExtension();
            $file->move('images/slider',$image);
        }else{
            $image=$slider->image;
        }
        $slider->update([
            'image'=>$image,
            'alt'=>$request->alt,
            'title'=>$request->title,
            'caption'=>$request->caption
        ]);
        session()->flash('update','successfull update data!');
        return redirect()->route('slider.index');
    }

    public function destroy($id)
    {
        $imageDelete=Slider::findOrFail($id)->image;
        if(file_exists('images/slider/'.$imageDelete)){
            unlink('images/slider/'.$imageDelete);
        }
        Slider::destroy($id);
        session()->flash('delete','successful delete data!');
        return redirect()->route('slider.index');
    }
}
