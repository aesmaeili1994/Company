<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\createSocialRequest;
use App\Models\Social;
use Illuminate\Http\Request;

class SocialController extends Controller
{
    public function index()
    {
        $social=Social::paginate(4);
        return view('admin.social.index',compact('social'));
    }

    public function create()
    {
        return view('admin.social.create');
    }

    public function store(createSocialRequest $request)
    {
        Social::create([
            'telegram'=>$request->telegram,
            'instagram'=>$request->instagram,
            'linkdin'=>$request->linkdin,
            'twitter'=>$request->twitter
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
        $social=Social::findOrFail($id);
        return view('admin.social.edit',compact('social'));
    }

    public function update(createSocialRequest $request, $id)
    {
        Social::findOrFail($id)->update([
            'telegram'=>$request->telegram,
            'instagram'=>$request->instagram,
            'linkdin'=>$request->linkdin,
            'twitter'=>$request->twitter
        ]);
        session()->flash('update','successful update data!');
        return redirect()->route('social.index');
    }

    public function destroy($id)
    {
        Social::destroy($id);
        session()->flash('delete','successful delete data!');
        return back();
    }
}
