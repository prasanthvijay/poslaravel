<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormsController extends Controller
{
    public function customerForm(Request $request,$fromType){

        print_r($request->input());
        die;
    }
}