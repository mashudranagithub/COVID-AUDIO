<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Voice;
use App\Question;
use App\Vuser;
use DB;
use Session;

class VoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        $voices = Voice::join('questions', 'questions.id', '=', 'voices.qusetion_id')
                    ->select('voices.*', 'questions.question')
                    ->orderBy('created_at', 'desc')
                    ->paginate(10);

        return view('admin.voices.index', compact(
            'voices'
        ));
    }


    // Lockdown Voice answers
    public function lockdown_voices()
    {

        $lockdown_voices = Voice::join('questions', 'questions.id', '=', 'voices.qusetion_id')
            ->select('voices.*', 'questions.question')
            ->where('questions.category', 'lockdown')
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('admin.voices.lockdown-voices', compact(
            'lockdown_voices'
        ));

    }


    // Pandemic Voice answers
    public function pandemic_voices()
    {

        $pandemic_voices = Voice::join('questions', 'questions.id', '=', 'voices.qusetion_id')
            ->select('voices.*', 'questions.question')
            ->where('questions.category', 'pandemic')
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('admin.voices.pandemic-voices', compact(
            'pandemic_voices'
        ));

    }


    public function record()
    {

        $session_phone = Session::get('s_phone');

        $vuser_id = Vuser::where('m_phone', $session_phone)->get('id');

        $lockdown_questions = Question::where('status', '1')->where('category', 'lockdown')->get();
        $pandemic_questions = Question::where('status', '1')->where('category', 'pandemic')->get();
        return view('voice.record', compact(
            'lockdown_questions',
            'pandemic_questions',
            'vuser_id'
        ));
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
        if(isset($_FILES)){
            foreach($_FILES as $file){
            $session_phone = Session::get('s_phone');
            $data = new Voice;
                $size = $file['size']; 
                $input = $file['tmp_name'];
                $output = "data/". $session_phone . '_' . $file['name'];
                $without_extension = substr($file['name'], 0, strrpos($file['name'], "."));
                $f = explode('id_', $without_extension);
                $data->vuser_phone = $session_phone;
                $data->qusetion_id = $f[1];
                $data->answer = $output;
                $data->save();
                move_uploaded_file($input, $output);
            }
            return redirect()->route('vUserCreatePage')->with('msg', 'Voice Record saved Successfully');
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
