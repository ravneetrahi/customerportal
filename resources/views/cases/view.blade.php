<style>
td, th {
	padding: 3px !important;
}
.modal-backdrop.in{
  opacity:0 !important
}
</style>
@extends('app')
@section('sidebar')
  <a href="{{ url('cases') }}" class="list-group-item">{{ Lang::get('aop.case_status_all') }}</a>
  <a href="{{ url('cases') }}" class="list-group-item">{{ Lang::get('aop.case_status_open') }}</a>
  <a href="{{ url('cases') }}" class="list-group-item">{{ Lang::get('aop.case_status_closed') }}</a>
  <a href="{{ url('cases/create') }}" class="list-group-item"> {{ Lang::get('aop.create_case') }}</a>
@endsection

@section('content')
<div class="page-header"><h2>Case - #{{$caseDetails['case_number']}}</h2></div>
<div class="bottom case-header">
    </div>
  </div>
</div>
<ul class="list-unstyled padding">
   
    <li class="row">
      <strong class="col-md-3">{{ Lang::get('aop.case_subject') }}</strong>
      <div class="col-md-7">
       {{$caseDetails['name']}}
      </div>
    </li>
    <li class="row">
       <strong class="col-md-3">{{ Lang::get('aop.case_products') }}</strong>
      <div class="col-md-7">{{$caseDetails['product_c']}}</div>
    </li>
    <li class="row">
       <strong class="col-md-3">{{ Lang::get('aop.case_sap') }}</strong>
      <div class="col-md-7">{{$caseDetails['sap_release_c']}}</div>
    </li>
    <li class="row">
       <strong class="col-md-3">{{ Lang::get('aop.case_system_type') }}</strong>
      <div class="col-md-7">{{$caseDetails['system_type_c']}}</div>
    </li>
    <li class="row">
       <strong class="col-md-3">{{ Lang::get('aop.case_cua') }}</strong>
      <div class="col-md-7">{{$caseDetails['use_cua_c']}}</div>
    </li>
     <li class="row">
       <strong class="col-md-3">{{ Lang::get('aop.case_unicode') }}</strong>
        <div class="col-md-7">{{$caseDetails['unicode_system_c']}}</div>
    </li>
    <li class="row">
       <strong class="col-md-3">{{ Lang::get('aop.case_raised') }}</strong>
      <div class="col-md-7">{{$caseDetails['date_entered']}}</div>
    </li>
    <li class="row">
      <strong class="col-md-3">{{ Lang::get('aop.case_last_update') }}</strong>
      <div class="col-md-7">{{$caseDetails['date_modified']}}</div>
    </li>
    <li class="row">
      <strong class="col-md-3">{{ Lang::get('aop.case_status') }}</strong>
      <div class="col-md-7">{{$caseDetails['status']}}</div>
    </li>

    <li class="row">
      <strong class="col-md-3">{{ Lang::get('aop.steps_to_reproduce') }}</strong>
      <div class="col-md-7">{{$caseDetails['steps_to_reproduce_c']}}</div>
    </li>
   </ul>
</div>
<br/>
<a href="/notes/add/{{$case_id}}" class="align-right"><input type="button" class="btn btn-default" value="Add Notes"></button></a>
  
<div id="accordion" class="panel-group case-items">
  <div class="panel panel-default">
  <div class="panel-heading tocustomer">
    <div class="panel-title">
      <a data-toggle="collapse" data-parent="#accordion" href="#collapse_645749">
                  <span class="indicator glyphicon glyphicon-chevron-down pull-right">
          </span>
                <span class="glyphicon glyphicon-envelope read">
        </span>
                <strong class="author">{{$caseDetails['name']}} Notes</strong>
        <span class="date">{{$caseDetails['date_modified']}}</span>
      </a>
    </div>
  </div>
    
  <div id="collapse_645749" class="panel-collapse collapse in">
    <div class="case-message ">
      <div class="case-message-content">
       
         <table width="100%" padding='10' >
          <tr>
                <th>Subject</th>
                <th>Files</th>
                <th>Created on</th>
                <th>Action</th>
            </tr>
             @if(count($sugarNotes)>0)
                @foreach($sugarNotes as $key=>$notes)
                  <tr>  
                      <td>{{$notes['name']}}</td>
                      <td><a href="downloadFile/{{$notes['id']}}">{{$notes['filename']}}</a></td>
                      <td>{{$notes['date_entered']}}</td>
                      <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal{{$key}}">View</button>
                      <div class="modal fade" id="myModal{{$key}}" role="dialog">
                        <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">{{$notes['name']}}</h4>
                            </div>
                            <div class="modal-body">
                             
                              <p>{!! nl2br(e($notes['description'])) !!}</p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                          </div>

                          </div>
                        </div>
                    </div>
                      </td>
                  </tr>
                    
                @endforeach
            @endif
         </table>

       </div>

          </div>
  </div>
</div>

<script type="text/javascript">
$(function () {
                    $('a[data-toggle="collapse"]').on('click',function(){

				var objectID=$(this).attr('href');

				if($(objectID).hasClass('in'))
				{
                                    $(objectID).collapse('hide');
				}

				else{
                                    $(objectID).collapse('show');
				}
                    });


                    $('#expandAll').on('click',function(){

                        $('a[data-toggle="collapse"]').each(function(){
                            var objectID=$(this).attr('href');
                            if($(objectID).hasClass('in')===false)
                            {
                                 $(objectID).collapse('show');
                            }
                        });
                    });

                    $('#collapseAll').on('click',function(){

                        $('a[data-toggle="collapse"]').each(function(){
                            var objectID=$(this).attr('href');
                            $(objectID).collapse('hide');
                        });
                    });

		});

$('#CloseCase').appendTo("body")
</script>
@endsection
