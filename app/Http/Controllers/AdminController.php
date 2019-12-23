<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Timezones;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('language');
    }

    public function index()
    {
        return view('admin.welcome');
    }

    public function connector()
    {
        $url = config('suitecrm.url');
        $username = config('suitecrm.username');

        return view('admin.connector', compact('url', 'username'));
    }

  /**
   * @param Request $request
   * @param ConnectorValidator $input
     */
  public function store_connector(Request $request, ConnectorValidator $input)
    {
        // This needs to be written into a middleware.
        \Config::set('suitecrm.url', $request->get('hostname'));
        \Config::set('suitecrm.url', $request->get('username'));
        \Config::set('suitecrm.password', $request->get('password'));
    }

    public function mail()
    {
        return view('admin.list_mail');
    }

    public function settings()
    {
        return view('admin.settings');
    }
}
