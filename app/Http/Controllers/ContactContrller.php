<?php

namespace App\Http\Controllers;
use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactContrller extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    public function add_contact(Request $request){

       $contact = New Contact();
       $contact->name = $request->name;
       $contact->phone = $request->phone;
       $contact->email = $request->email;
       $contact->address = $request->address;
       $contact->message = $request->message;
       $contact->save();
       return ['message'=>'OK'];
    }
    public function all_category(){
        $contact = Contact::all();
        return response()->json([
            'contact'=>$contact
        ],200);
    }

}
