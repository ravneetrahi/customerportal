@extends('app')
@section('sidebar')
  <a href="{{ url('cases') }}" class="list-group-item">{{ Lang::get('aop.case_status_all') }}</a>
  <a href="{{ url('cases') }}" class="list-group-item">{{ Lang::get('aop.case_status_open') }}</a>
  <a href="{{ url('cases') }}" class="list-group-item">{{ Lang::get('aop.case_status_closed') }}</a>
  <a href="{{ url('cases/create') }}" class="list-group-item"> {{ Lang::get('aop.create_case') }}</a>
@endsection

@section('content')

<div class="page-header"><h2>{{ Lang::get('aop.create_case') }}</h2> </div>

@if (count($errors) > 0)
<div class="alert alert-danger alert-dismissible fade in" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> 
@foreach ($errors->all() as $error)
          <p>{{ $error }}</p>
    @endforeach
    </div>
@endif

<form action="{{ url('cases/saveCase') }}" method="post" enctype="multipart/form-data" class="well well-sm">
 <input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="row">
  <div class="col-sm-6">
      <div class="form-group">
        <label for="case_status" class="form-label">{{ Lang::get('aop.case_status') }}</label>
        NEW
      </div>
    </div>
    <div class="col-sm-6">
      <div class="form-group">
        <label for="product_c" class="form-label">{{ Lang::get('aop.case_products') }}</label>
         <select name="product_c" id="product_c" class="form-control">
            <option>Select type</option>
            @if(count($fieldValues['product_c'])>0)
              @foreach($fieldValues['product_c'] as $values)
              <option value="{{$values}}">{{$values}}</option>
              @endforeach
            @endif
          </select>
      </div>
    </div>
</div>

<div class="row">
  <div class="col-sm-6">
      <div class="form-group">
        <label for="system_type_c" class="form-label">{{ Lang::get('aop.case_system_type') }}</label>
        <select name="system_type_c" id="system_type_c" class="form-control">
            @if(count($fieldValues['system_type_c'])>0)
              @foreach($fieldValues['system_type_c'] as $values)
              <option value="{{$values}}">{{$values}}</option>
              @endforeach
            @endif
          </select>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="form-group">
        <label for="priority" class="form-label">{{ Lang::get('aop.case_priority') }}</label>
         <select name="priority" id="priority" class="form-control">
            @if(count($fieldValues['priority'])>0)
              @foreach($fieldValues['priority'] as $values)
                <option value="{{$values}}">{{$values}}</option>
              @endforeach
            @endif
          </select>
      </div>
    </div>
</div>

<div class="row">
  <div class="col-sm-6">
      <div class="form-group">
        <label for="case_cua" class="form-label">{{ Lang::get('aop.case_cua') }}</label>
        <input type="checkbox" name="use_cua_c" value="1"/>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="form-group">
        <label for="case_unicode" class="form-label">{{ Lang::get('aop.case_unicode') }}</label>
        <input type="checkbox" name="unicode_system_c" value="1"/>
      </div>
    </div>
</div>
 <div class="form-group">
  <label for="sap_release_c" class="form-label">{{ Lang::get('aop.case_sap') }}</label>
        <select name="sap_release_c" id="sap_release_c" class="form-control">
          @if(count($fieldValues['sap_release_c'])>0)
            @foreach($fieldValues['sap_release_c'] as $values)
              <option value="{{$values}}">{{$values}}</option>
            @endforeach
          @endif
        </select>
 </div>

 <div class="form-group">
  <label for="case_message" class="form-label">{{ Lang::get('aop.steps_to_reproduce') }}</label>
  <textarea name="steps_to_reproduce_c" id="steps_to_reproduce_c" class="form-control" rows="5"></textarea>
 </div>


  <div class="form-group">
  <label for="case_subject" class="form-label">{{ Lang::get('aop.case_subject') }}</label>
  <input name="case_subject" id="case_subject" class="form-control">
 </div>

 <div class="form-group">
  <label for="case_message" class="form-label">{{ Lang::get('aop.case_description') }}</label>
  <textarea name="case_message" id="case_message" class="form-control" rows="5"></textarea>
 </div>

  <div class="form-group">
   <button type="submit" name="case_submit" class="btn btn-custom">{{ Lang::get('aop.save') }}</button>
 </div>
</form>

@endsection
