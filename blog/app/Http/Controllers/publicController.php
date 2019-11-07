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


    public function history(){

        return view('user.pages.about.history');
    }

    public function missionVision(){

        return view('user.pages.about.missionvision');
    }

    public function ourTeam(){

        return view('user.pages.about.ourteam');
    }

    public function auditAccounting(){

        return view('user.pages.about.auditAccounting');
    }

    public function informationSystemAssurance(){

        return view('user.pages.about.informationSystemAssurance');
    }

    public function managementAssurance(){

        return view('user.pages.about.managementAssurance');
    }
    public function taxCompilance(){

        return view('user.pages.about.taxCompilance');
    }

    public function businessTaxService(){

        return view('user.pages.about.businessTaxService');
    }

    public function businessReceiptTax(){

        return view('user.pages.about.businessReceiptTax');
    }

    public function internationTax(){

        return view('user.pages.about.internationTax');
    }

    public function transferPricing(){

        return view('user.pages.about.transferPricing');
    }

    public function indirectTax(){

        return view('user.pages.about.indirectTax');
    }

    public function advisoryServices(){

        return view('user.pages.about.advisoryServices');
    }

    public function corporateAdvisory(){

        return view('user.pages.about.corporateAdvisory');
    }

    public function environmentManagementAdvisory(){

        return view('user.pages.about.environmentManagementAdvisory');
    }

    public function transactionSupport(){

        return view('user.pages.about.transactionSupport');
    }

    public function transactionTax(){

        return view('user.pages.about.transactionTax');
    }

    public function valuationBusinessModeling(){

        return view('user.pages.about.valuationBusinessModeling');
    }

    
}
