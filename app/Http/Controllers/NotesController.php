<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class NotesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('language');
    }

    private $note_fields = array('id','name', 'date_entered','date_modified','description','filename','file_url','portal_flag');


    public function add($case_id)
    {

        return view('notes.create')->with('case_id',$case_id);
    }

    /**
     * Save the notes to SuiteCRM
     * @param createCaseValidator $input
     * @return \Illuminate\View\View
     */
    public function saveNotes(Request $request)
    {
    
        $notesData  = $request->all();

        $file = $request->file('notes_file');
        // File Details
        $filename = $file->getClientOriginalName();
        //$extension = $file->getClientOriginalExtension();
        $tempPath = $file->getRealPath();
        //$fileSize = $file->getSize();
        // $mimeType = $file->getMimeType();

        

            $restClient      = new \App\Classes\Suite;
            $user            = Auth::user();
            $contact_id      = $user->sugar_id;
            $sid             = $restClient->login();

            //For every file, create a new note. Add an attachment and link the note to the
            $note_data = array( array(
                        'name' => 'name',
                        'value' => $notesData['notes_subject'],
                    ),
                    array(
                        'name' => 'description',
                        'value' => $notesData['notes_description']
                    ),
                    array(
                        'name' => 'parent_type',
                        'value' => 'Cases'
                    ),
                    array(
                        'name' => 'parent_id',
                        'value' => $notesData['case_id']
                    ));

            $new_note = $restClient->setEntry($sid,'Notes',$note_data);

            $note_id = $new_note['id'];
            $restClient->set_note_attachment($sid,$note_id, $filename, $tempPath);
            return redirect('/cases/'.$notesData['case_id']);
    }

   

}
