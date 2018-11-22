<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\showroom;

class FormsController extends Controller
{
    public function customerForm(Request $request,$fromType){

       
    }
    public function showroomForm(Request $request,$fromType){

        $sh_id = $request->showroom_id;
        $showroom = showroom::find($sh_id);

        return view('forms.showroomform', compact('showroom','sh_id'));
    }
}
