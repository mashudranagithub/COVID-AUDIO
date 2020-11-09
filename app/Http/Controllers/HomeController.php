<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Voice;
use App\Question;
use App\Vuser;
use DB;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $questions_number = Question::all()->count();
        $vuser_number = Vuser::all()->count();
        $voice_number = Voice::all()->count();

        return view('admin.index', compact(
            'questions_number',
            'vuser_number',
            'voice_number'
        ));
    }
}
