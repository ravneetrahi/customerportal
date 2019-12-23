<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('language');
    }

    public function index()
    {
        /*$user = Auth::user();
        echo "<pre>";
        print_r($user);
        die();
        */
        return view('home');
    }
}
