<?php

namespace App\Http\Controllers\Admin;

use Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\showroom;

class ShowroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $showroom = showroom::where('status','=','1')
                    ->get();

        return view('admin.index',compact('showroom'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user(); 
        $data = $request->input();   
        showroom::create(['user_id' => $user->id,
            'sh_name' => $request->sh_name,
            'TIN_number' => $request->TIN_number,
            'sh_address' => $request->sh_address,
            'sh_phone' => $request->sh_phone,
            'sh_city' => $request->sh_city,
            'sh_pincode' => $request->sh_pincode,
            'status' => '1' ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        showroom::where('id', $id)->update([
            'sh_name' => $request->sh_name,
            'TIN_number' => $request->TIN_number,
            'sh_address' => $request->sh_address,
            'sh_phone' => $request->sh_phone,
            'sh_city' => $request->sh_city,
            'sh_pincode' => $request->sh_pincode,
            ]);

        return response()->json(['message'=>'success']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
