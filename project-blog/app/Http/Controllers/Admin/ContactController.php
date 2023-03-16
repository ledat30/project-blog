<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('admin.contact.index' ,compact('contacts'));
    }
    public function delete($id){
        Contact::find($id)->delete();
        return redirect()->route('admin.contact.index')->with('success','Delete successfully');
    }
}
