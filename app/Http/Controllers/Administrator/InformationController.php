<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\createInformationRequest;
use App\Models\Information;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function index()
    {
        $information=Information::all();
        return view('admin.information.index',compact('information'));
    }

    public function create()
    {
        return view('admin.information.create');
    }

    public function store(createInformationRequest $request)
    {
        Information::create([
            'phone'=>$request->phone,
            'email'=>$request->email,
            'hours'=>$request->hours
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
        $information=Information::findOrFail($id);
        return view('admin.information.edit',compact('information'));
    }


    public function update(createInformationRequest $request, $id)
    {
        $information=Information::findOrFail($id);
        $information->update([
            'phone'=>$request->phone,
            'email'=>$request->email,
            'hours'=>$request->hours
        ]);
        session()->flash('update','successful update data!');
        return redirect()->route('info.index');
    }


    public function destroy($id)
    {
        Information::destroy($id);
        session()->flash('delete','successful delete data!');
        return back();
    }
}
