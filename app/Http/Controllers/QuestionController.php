<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use DB;
use Session;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lockdown_questions = Question::where('category', 'lockdown')->get();
        $pandemic_questions = Question::where('category', 'pandemic')->get();
        return view('admin.questions.index', compact(
            'lockdown_questions',
            'pandemic_questions'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.questions.create');
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
            'category'=>'required',
            'status'=>'required',
            'question'=>'required',
            'bnquestion'=>'required'
        ]);

        $question = new Question();

        $question->category = $request->input('category');
        $question->status = $request->input('status');
        $question->question = $request->input('question');
        $question->bnquestion = $request->input('bnquestion');

        $question->save();

        return redirect()->route('questions')->with('msg','Question Created Successfully');
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
        $question = Question::find($id);
        return view('admin.questions.edit', compact('question'));
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
        $this->validate($request,[
            'category'=>'required',
            'status'=>'required',
            'question'=>'required',
            'bnquestion'=>'required'
        ]);

        $question = Question::find($id);

        $question->category = $request->input('category');
        $question->status = $request->input('status');
        $question->question = $request->input('question');
        $question->bnquestion = $request->input('bnquestion');

        $question->save();

        return redirect()->route('questions')->with('msg','Question Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("questions")->where('id',$id)->delete();
        return redirect()->route('questions')->with('msg','Question deleted successfully');
    }
}
