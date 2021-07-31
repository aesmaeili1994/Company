<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\createSeoRequest;
use App\Models\Seo;
use Illuminate\Http\Request;

class PanelController extends Controller
{

    public function index()
    {
        return view('admin.panel.index');
    }

    public function create()
    {
        return view('admin.panel.create');
    }

    public function store(createSeoRequest $request)
    {
        Seo::create([
            'title'=>$request->title,
            'keywords'=>$request->keywords,
            'description'=>$request->description,
            'author'=>$request->author
        ]);
        session()->flash('create','thanks, successful create data.');
        return redirect()->route('panel.create');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $seo=Seo::findOrFail($id);
        return view('admin.panel.edit',compact('seo'));
    }


    public function update(createSeoRequest $request, $id)
    {
        Seo::findOrFail($id)->update([
            'title'=>$request->title,
            'keywords'=>$request->keywords,
            'description'=>$request->description,
            'author'=>$request->author,
        ]);
        session()->flash('update','successful update data!');
        return redirect()->route('panel.data');
    }

    public function destroy($id)
    {
        Seo::destroy($id);
        session()->flash('delete','successful delete data!');
        return redirect()->route('panel.data');

    }

    public function data()
    {
        $seo=Seo::all();
        return view('admin.panel.data',compact('seo'));
    }
}
