<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class publicController extends Controller
{
   public function index(){
       return view('user.index');
   }

   public function contact(){
    return view('user.pages.contact.contact');
   }

   public function sendEmail(Request $request){
        
        $this->validate($request,[
            'name'=>'required',
            'from'=>'required|email',
            'subject'=>'required',
            'message'=>'required'
        ]);

        $data = array();
        
        try {
            Mail::send('email.email',$data, function($message) use ($data) {
                $message->to('info@kacca.af', 'KACCA')
                        ->subject('From website contact page!');
            });

            Session::flash('success','Your message sent successfully');
            return redirect()->back();
        } catch (Exception $e) {
            Session::flash('mailerror',$e->getMessage());
            return redirect()->back();  
        }        
    }
}
