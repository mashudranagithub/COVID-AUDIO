<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vuser;
use App\Question;
use App\Voice;
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
        $vusers = Vuser::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.vusers.index', compact(
            'vusers'
        ));
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

    public function bnVcreate() {
        return view('voice.bangla.index');
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
            $vuser->save();
            return redirect()->route('record')->with('msg','Registration Successful');
        }else{
            Session::flash('smessage','Invalid data!');
            return redirect()->back();
        }
    }


    public function bnVstore(Request $request)
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
            Session::flash('smessage','আপনি আপনার ভয়েস রেকর্ড করার জন্য সফল ভাবে রেজিস্ট্রেশান সম্পন্ন করেছেন।');
            $vuser->save();
            return redirect()->route('banglaRecord')->with('msg','Registration Successful');
        }else{
            Session::flash('smessage','Invalid data!');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vuser = Vuser::find($id);

        $vuser_all_data = Vuser::join('voices', 'voices.vuser_phone', '=', 'vusers.m_phone')
            ->join('questions', 'questions.id', '=', 'voices.qusetion_id')
            ->where('vusers.id', $id)
            ->select('voices.*', 'questions.question')
            ->get();

        return view('admin.vusers.show', compact(
            'vuser',
            'vuser_all_data'
        ));
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
