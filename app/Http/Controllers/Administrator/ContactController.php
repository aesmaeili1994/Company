<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contact=Contact::paginate(4);
        return view('admin.contact.index',compact('contact'));
    }

    public function destroy($id)
    {
        Contact::destroy($id);
        session()->flash('delete','successful delete data!');
        return back();
    }
}
