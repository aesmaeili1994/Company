<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\createProductRequest;
use App\Http\Requests\updateProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $product=Product::paginate(4);
        return view('admin.product.index',compact('product'));
    }

    public function create()
    {
        return view('admin.product.create');
    }

    public function store(createProductRequest $request)
    {
        $file=$request->file('image');
        $image='';
        if(!empty($file)){
            $image=time().'.'.$file->getClientOriginalExtension();
            $file->move('images/product',$image);
        }
        Product::create([
            'title'=>$request->title,
            'image'=>$image,
            'alt'=>$request->alt,
            'body'=>$request->body,
            'title_web'=>$request->title_web,
            'keywords'=>$request->keywords,
            'description'=>$request->description
        ]);
        session()->flash('create','thanks, successful create data.');
        return redirect()->route('product.create');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $product=Product::findOrFail($id);
        return view('admin.product.edit',compact('product'));
    }

    public function update(updateProductRequest $request, $id)
    {
        $product=Product::findOrFail($id);
        $file=$request->file('image');
        $image='';
        if(!empty($file)) {
            if(file_exists('images/product/'.$product->image)){
                unlink('images/product/'.$product->image);
            }
            $image=time().'.'.$file->getClientOriginalExtension();
            $file->move('images/product',$image);
        }else{
            $image=$product->image;
        }
        $product->update([
            'title'=>$request->title,
            'image'=>$image,
            'alt'=>$request->alt,
            'body'=>$request->body,
            'title_web'=>$request->title_web,
            'keywords'=>$request->keywords,
            'description'=>$request->description
        ]);
        session()->flash('update','successfull update data!');
        return redirect()->route('product.index');
    }

    public function destroy($id)
    {
        $productDelete=Product::findOrFail($id)->image;
        if (file_exists('images/product/'.$productDelete)){
            unlink('images/product/'.$productDelete);
        }
        Product::destroy($id);
        session()->flash('delete','successful delete data!');
        return redirect()->route('product.index');
    }
}
