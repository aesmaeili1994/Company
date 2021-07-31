<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\createTeamRequest;
use App\Http\Requests\updateTeamRequest;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $team=Team::paginate(4);
        return view('admin.team.index',compact('team'));
    }

    public function create()
    {
        return view('admin.team.create');
    }

    public function store(createTeamRequest $request)
    {
        $file=$request->file('image');
        $image='';
        if(!empty($file)){
            $image=time().'.'.$file->getClientOriginalExtension();
            $file->move('images/team',$image);
        }
        Team::create([
            'image'=>$image,
            'alt'=>$request->alt,
            'fullname'=>$request->fullname,
            'job'=>$request->job,
            'facebook'=>$request->facebook,
            'twitter'=>$request->twitter,
            'instagram'=>$request->instagram
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
        $team=Team::findOrFail($id);
        return view('admin.team.edit',compact('team'));
    }

    public function update(updateTeamRequest $request, $id)
    {
        $team=Team::findOrFail($id);
        $file=$request->file('image');
        $image='';
        if(!empty($file)){
            if(file_exists('images/team/'.$team->image)){
                unlink('images/team/'.$team->image);
            }
            $image=time().'.'.$file->getClientOriginalExtension();
            $file->move('images/team',$image);
        }else{
            $image=$team->image;
        }
        $team->update([
            'image'=>$image,
            'alt'=>$request->alt,
            'fullname'=>$request->fullname,
            'job'=>$request->job,
            'facebook'=>$request->facebook,
            'twitter'=>$request->twitter,
            'instagram'=>$request->instagram
        ]);
        session()->flash('update','successfull update data!');
        return redirect()->route('team.index');
    }

    public function destroy($id)
    {
        $teamDelete=Team::findOrFail($id)->image;
        if(file_exists('images/team/'.$teamDelete)){
            unlink('images/team/'.$teamDelete);
        }
        Team::destroy($id);
        session()->flash('delete','successful delete data!');
        return back();
    }
}
