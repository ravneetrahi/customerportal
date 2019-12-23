@extends('app_nosidebar')

@section('content')
<div class="page-header">
<h2>Portal settings</h2>
</div>


<ul class="nav nav-tabs">
    <li class="active"><a href="#info-tab" data-toggle="tab">{{ Lang::get('aop.cases') }} <i class="fa"></i></a></li>
    <li><a href="#meetings-tab" data-toggle="tab">{{ Lang::get('aop.meetings') }} <i class="fa"></i></a></li>
    <li><a href="#quotes-tab" data-toggle="tab">{{ Lang::get('aop.quotes') }} <i class="fa"></i></a></li>
</ul>

<div class="well">
<form id="accountForm" method="post" class="form-horizontal">
    <div class="tab-content">
        <div class="tab-pane active" id="info-tab">
          <div class="form-group">
            <label for="current_pass" class="col-sm-4 control-label">Allow users to reopen cases <span class="text-danger">*</span></label>
            <div class="col-sm-5">
             <select name="reopen_cases" class="form-control">
               <option value="no">No</option>
               <option value="yes">Yes</option>
             </select>
            </div>
          </div>

          <div class="form-group">
            <label for="password" class="col-sm-4 control-label">Allow users to close cases <span class="text-danger">*</span></label>
            <div class="col-sm-5">
              <select name="allow_case_closing" class="form-control">
                <option value="no">No</option>
                <option value="yes">Yes</option>
              </select>
            </div>
          </div>

            <div class="form-group">
            <label for="confirm_pass" class="col-sm-4 control-label">Allow users to set case priority <span class="text-danger">*</span></label>
            <div class="col-sm-5">
              <select name="allow_case_closing" class="form-control">
                <option value="no">No</option>
                <option value="yes">Yes</option>
              </select>
            </div>
          </div>

          <div class="form-group">
          <label for="confirm_pass" class="col-sm-4 control-label">Allow users to choose the case type<span class="text-danger">*</span></label>
          <div class="col-sm-5">
            <select name="allow_case_closing" class="form-control">
              <option value="no">No</option>
              <option value="yes">Yes</option>
            </select>
          </div>
         </div>
        </div>

        <div class="tab-pane" id="meetings-tab">
            <div class="form-group">
                <label class="col-xs-3 control-label">Allow users to request meetings</label>
                <div class="col-xs-5">
                    <input type="text" class="form-control" name="address" />
                </div>
            </div>
        </div>

        <div class="tab-pane" id="quotes-tab">
            <div class="form-group">
                <label class="col-xs-3 control-label">Quotes_status</label>
                <div class="col-xs-5">
                    <input type="text" class="form-control" name="address" />
                </div>
            </div>
        </div>
    </div>

    <div class="form-group" style="margin-top: 15px;">
        <div class="col-sm-offset-3 col-sm-9">
            <button type="submit" class="btn btn-custom">{{ Lang::get('aop.update') }}</button>
        </div>
    </div>
</form>
</div>
@endsection
