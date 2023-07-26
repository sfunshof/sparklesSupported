<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Validator;
use Mail;
use App\Mail\Contact_Mail;

class ContactController extends Controller
{
    //
    public function index(){
        return view('pages.contact');
    }

    public function contact_post(Request $request){
        
        $contact = new ContactController;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->msg_subject = $request->msg_subject;
        $contact->phone_number = $request->phone_number;
        $contact->message = $request->message;
      
        $details = [
            'title' => 'Mail from contact form',
            'name' => $contact->name,
            'email' => $contact->email,
            'msg_subject' => $contact->msg_subject,
            'phone_number' => $contact->phone_number,
            'message' => $contact->message
        ];
    
        
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'msg_subject' => 'required',
            'message' =>'required'
        ]);
        
        if ($validator->passes()) {
            $support_email=config('constants.support_email');
            
            Mail::to($support_email)->send(new Contact_Mail($details));
            
            return response()->json(['success'=>'Form is successfully submitted!']);
        }
        return response()->json(['error'=>$validator->errors()]);
    }
 }    