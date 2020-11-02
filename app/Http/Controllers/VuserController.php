<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vuser;
use App\Question;
use DB;
use Session;

class VuserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('voice.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'gender'=>'required',
            'age'=>'required',
            'location'=>'required',
            'm_phone'=>'required|unique:vusers'
        ]);

        $vuser = new Vuser();

        $vuser->gender = $request->input('gender');
        $vuser->age = $request->input('age');
        $vuser->location = $request->input('location');
        $vuser->m_phone = $request->input('m_phone');



        if($request->input('m_phone')){
            Session::put('s_phone',$request->input('m_phone'));
            Session::flash('smessage','You are Successfully registered to record your voice answers!!');
        }else{
            Session::flash('smessage','Invalid data!');
            return redirect()->back();
        }

        $vuser->save();

        return redirect()->route('record')->with('msg','Registration Successful');
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
        //
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
