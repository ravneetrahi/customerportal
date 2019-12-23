<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\createMeetingValidator;

class MeetingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('language');
    }

    public function index()
    {

        $lang = \Session::get('lang');
        return view('meetings.list', ['lang' => $lang]);
    }

    public function create()
    {
        $lang = \Session::get('lang');
        return view('meetings.request', ['lang' => $lang]);
    }

    public function store(createMeetingValidator $input)
    {
        //
    }

    public function show(Request $request)
    {
        $lang = $request->session()->get('lang');
        return view('meetings.view', ['lang' => $lang]);
    }
}
