<?php

namespace App\Http\Controllers;
use App\Http\Controllers\RecruitController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Mail;
use App\Mail\Apply_Mail;

class RecruitController extends Controller
{
    //
    public function index(){
        return view('pages.recruit');
    }
    public function coordinator(){
        return view('pages.recruit.coordinator');
    }
    public function livein(){
        return view('pages.recruit.livein');
    }
    public function workers(){
        return view('pages.recruit.workers');
    }
    public function applyform(){
        return view('pages.recruit.applyform');
    }
    public function apply_post(Request $request){
        
        $recruit = new RecruitController;
        $recruit->name = $request->name;
        $recruit->email = $request->email;
        $recruit->phone_number = $request->phone_number;
        $recruit->job_wanted = $request->job_wanted;
  

        $details = [
            'title' => 'Mail from recruitment form',
            'name' => $recruit->name,
            'email' => $recruit->email,
            'phone_number' => $recruit->phone_number,
            'job_wanted' => $recruit->job_wanted
            ];

    
        
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'job_wanted' => 'required'
         ]);
        
        if ($validator->passes()) {
            $support_email=config('constants.support_email');
            
            Mail::to($support_email)->send(new Apply_Mail($details));
            
            return response()->json(['success'=>'Form is successfully submitted!']);
        }
        return response()->json(['error'=>$validator->errors()]);
    }
}
