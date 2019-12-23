<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Announcements;
use App\Http\Requests\createAnnouncementValidator;


class AnnouncementsController extends Controller
{

    public function __construct()
    {
        $this->middleware('language');
    }

    public function index()
    {
        $data['list'] = Announcements::get();
        return view('announcements.list', $data);
    }


    public function create()
    {
        return view('announcements.create');
    }


  /**
   * @param createAnnouncementValidator $input
   * @param Request $request
   * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
  public function store(createAnnouncementValidator $input, Request $request)
    {
        Announcements::create($request);
        return redirect('announcements');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        return view('announcements.change');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
