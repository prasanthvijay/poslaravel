<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormsController extends Controller
{
    public function customerForm(Request $request,$fromType){

       
    }
    public function showroomForm(Request $request,$fromType){

      
        return view('forms.showroomform');
    }
}
