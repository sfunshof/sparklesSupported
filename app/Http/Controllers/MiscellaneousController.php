<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\MiscellaneousController;
use Illuminate\Support\Facades\Validator;
use Mail;
use App\Mail\Callback_Mail;

class MiscellaneousController extends Controller
{
    //
    public function privacy(){
        return view('pages.miscellaneous.privacy');
    }
    public function terms(){
        return view('pages.miscellaneous.terms');
    }
    public function covid19(){
        return view('pages.miscellaneous.covid19');
    }
    
    public function callback_post(Request $request){
        
        $recruit = new RecruitController;
        $recruit->name = $request->callback_name;
        $recruit->email = $request->callback_email;
        $recruit->phone_number = $request->callback_phone_number;
        
        $details = [
            'title' => 'Request to call back ASAP',
            'name' => $recruit->name,
            'email' => $recruit->email,
            'phone_number' => $recruit->phone_number
         ];
    
    
        $validator = Validator::make($request->all(), [
            'callback_name' => 'required',
            'callback_email' => 'required|email',
            'callback_phone_number' => 'required'
        ]);
        
        
        if ($validator->passes()) {
            $support_email= config('constants.support_email');
             Mail::to($support_email)->send(new Callback_Mail($details));
            
            return response()->json(['success'=>'Form is successfully submitted!']);
        }
        
        return response()->json(['error'=>$validator->errors()]);
    }

}
