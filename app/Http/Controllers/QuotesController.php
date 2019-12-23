<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class QuotesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('language');
    }

    public function index()
    {
        $data['lang'] = \Session::get('lang');
        return view('quotes.list', $data);
    }
}
