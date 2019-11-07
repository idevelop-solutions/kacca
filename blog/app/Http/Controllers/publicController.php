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
}
