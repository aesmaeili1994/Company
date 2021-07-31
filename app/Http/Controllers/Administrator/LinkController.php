<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\createLinkRequest;
use App\Models\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function index()
    {
        $link=Link::paginate(4);
        return view('admin.link.index',compact('link'));
    }

    public function create()
    {
        return view('admin.link.create');
    }

    public function store(createLinkRequest $request)
    {
        Link::create([
            'name'=>$request->name,
            'link'=>$request->link
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
        $link=Link::findOrFail($id);
        return view('admin.link.edit',compact('link'));
    }

    public function update(createLinkRequest $request, $id)
    {
        Link::findORFail($id)->update([
            'name'=>$request->name,
            'link'=>$request->link
        ]);
        session()->flash('update','successful update data!');
        return redirect()->route('link.index');
    }

    public function destroy($id)
    {
        Link::destroy($id);
        session()->flash('delete','successful delete data!');
        return back();
    }
}
