<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\createCaseValidator;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Classes\Suite;

class CasesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('language');
    }

    private $case_fields = array('id','case_subject','name','date_entered','date_modified','description','case_number','type','status','state','priority','contact_created_by_id', 'contact_created_by_name','product_c','system_type_c','use_cua_c','unicode_system_c','sap_release_c','steps_to_reproduce_c');
    private $case_update_fields = array('id','name','date_entered','date_modified','description','contact','contact_id', 'internal', 'assigned_user_id');
    private $contact_fields = array('id','first_name','last_name','date_entered','date_modified','description','portal_user_type','account_id');
    private $user_fields = array('id','first_name', 'last_name', 'date_entered','date_modified','description');
    private $note_fields = array('id','name', 'date_entered','date_modified','description','filename','file_url','portal_flag');


    /**
     * Show all cases to the user.
     * @return Response
     */
    public function index($page=0)
    {
        $restClient = new \App\Classes\Suite;
        $sid   = $restClient->login();
        $user = Auth::user();
        $contact_id  = $user->sugar_id;

        $limit  = 50;
        $offset = $page * $limit;

        $suitcrmUser   = $restClient->getEntry($sid,"Contacts",$contact_id,$this->contact_fields);
        $sugarcases = $restClient->getRelationships($sid,'Contacts',$contact_id,'cases','',$this->case_fields,array(), $deleted = false, $order_by = 'case_number DESC', $offset, $limit);

        $casesData = array();
        if(count($sugarcases)>0){
            foreach($sugarcases['entry_list'] as $key=>$sugarcase){
                 $casesData[$key]= $this->convertSuitCrmObject($sugarcase,'case');
             }
        }
        if(count($casesData)==$limit){
            $nextPage  =  $page + 1;
        }else{
            $nextPage  = 0;
        }
        
        if($page>=1){
            $prevPage  =  $page -1 ;
        }else{
            $prevPage  = 0;
        }

        return view('cases/list')->with('casesData', $casesData)
        ->with('page',$page)
        ->with('nextPage',$nextPage)
        ->with('prevPage',$prevPage);
    }

    /**
     * Create a new case
     */
    public function create()
    {
        $restClient = new \App\Classes\Suite;
        $sid   = $restClient->login();
        $user = Auth::user();
        $contact_id  = $user->sugar_id;

        $response    = $restClient->getModuleFields($sid,'Cases',array());

       /* echo "<pre>";
        print_r($response);
        die();*/

        $fieldValues  = array();

        if(isset($response['module_fields']) && count($response['module_fields'])>0){

            //priority
            if(isset($response['module_fields']['priority']) && count($response['module_fields']['priority']['options'])>0){

                foreach($response['module_fields']['priority']['options'] as $key=>$name_value){
                    $name                 = $name_value['name'];
                    $fieldValues['priority'][$name]   = $name_value['value'];
                }
            }

            //product
            if(isset($response['module_fields']['product_c']) && count($response['module_fields']['product_c']['options'])>0){

                foreach($response['module_fields']['product_c']['options'] as $key=>$name_value){
                    $name                 = $name_value['name'];
                    $fieldValues['product_c'][$name]   = $name_value['value'];
                }
            }
            //system_type_c
            if(isset($response['module_fields']['system_type_c']) && count($response['module_fields']['system_type_c']['options'])>0){

                foreach($response['module_fields']['system_type_c']['options'] as $key=>$name_value){
                    $name                 = $name_value['name'];
                    $fieldValues['system_type_c'][$name]   = $name_value['value'];
                }
            }
            //sap_release_c
            if(isset($response['module_fields']['sap_release_c']) && count($response['module_fields']['sap_release_c']['options'])>0){

                foreach($response['module_fields']['sap_release_c']['options'] as $key=>$name_value){
                    $name                 = $name_value['name'];
                    $fieldValues['sap_release_c'][$name]   = $name_value['value'];
                }
            }
        }

        return view('cases/create')->with('fieldValues',$fieldValues);
    }

    /**
     * Save the case to SuiteCRM
     * @param createCaseValidator $input
     * @return \Illuminate\View\View
     */
    public function saveCase(Request $request)
    {
        $caseData   = $request->all();

        if(!empty($caseData['case_subject']) && !empty($caseData['case_message']) && !empty($caseData['system_type_c'])){

            $restClient = new \App\Classes\Suite;
            $user = Auth::user();
            $contact_id  = $user->sugar_id;
            $sid   = $restClient->login();

            $data = array("contact_id"=>$contact_id,
                        "contact_created_by_id"=>$contact_id,
                        "case_name" => $caseData['case_subject'],
                        "status" => 'New',
                        "description" =>$caseData['case_message'],
                        "priority" => $caseData['priority'],
                        'update_date_entered' => true,
                        'steps_to_reproduce_c'=>$caseData['steps_to_reproduce_c'],
                        'product_c'=>$caseData['product_c'],
                        'system_type_c'=>$caseData['system_type_c'],
                        'use_cua_c'=>$caseData['use_cua_c'],
                        'unicode_system_c'=>$caseData['unicode_system_c'],
                        'sap_release_c'=>$caseData['sap_release_c'],


                    );
          
            //Create the actual case.
            $response    = $restClient->setEntry($sid,'Cases',$data);
            $restClient->setRelationship($sid,"Cases",$response['id'],"contacts",$contact_id);
            
            return redirect('cases/');

        }else{
           return redirect('cases/create');
        }
     
        
    }


     public function getCase($case_id)
    {
        $restClient = new \App\Classes\Suite;
        $user = Auth::user();
        $sugar_id  = $user->sugar_id;
        $sid   = $restClient->login();
        /*
         array('name'=>'accounts',
                'value' => array('id')),
        */
        $sugarNotes   = $restClient->getEntry($sid,"Cases",$case_id,$this->case_fields,array(
            array('name'=>'notes',
                'value' => $this->note_fields)
        ));
        
        $caseDetails = array();
        if(count($sugarNotes)>0){
            foreach($sugarNotes['entry_list'] as $key=>$sugarcase){
                 $caseDetails= $this->convertSuitCrmObject($sugarcase,'case');
          }
        }
        $notesArr  = array();
        if(count($sugarNotes['relationship_list'])>0){
            $notesArr= $this->convertSuitCrmObject($sugarNotes,'notes');
        }

        return view('cases/view')
        ->with('caseDetails', $caseDetails)
        ->with('sugarNotes',$notesArr)->with('case_id',$case_id);

    }

    public function read()
    {
        return view('cases/view');
    }

    public function downloadFile($notes_id){
       
        $restClient = new \App\Classes\Suite;
        $user = Auth::user();
        $sugar_id  = $user->sugar_id;
        $sid   = $restClient->login();

        $notesArr  = $restClient->get_note_attachment($sid,$notes_id);

        if(isset($notesArr['note_attachment']) && count($notesArr['note_attachment'])>0){
            $path       = public_path($notesArr['note_attachment']['filename']);
             $contents   = base64_decode($notesArr['note_attachment']['file']);
            //store file temporarily
            file_put_contents($path, $contents);
            //download file and delete it
            return response()->download($path)->deleteFileAfterSend(true);
        }
        
    }

}
