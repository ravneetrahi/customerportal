@extends('app')
@section('sidebar')
<ul class="nav">
  <a href="{{ url('meetings') }}" class="list-group-item"> {{ Lang::get('aop.meetings_title') }} </a>
  <a href="{{ url('meetings/create') }}" class="list-group-item"> {{ Lang::get('aop.meetings_title_create') }} </a>
</ul>
@endsection

@section('content')
<div class="page-header"><h2>Meeting details</h2></div>
    <ul class="list-unstyled padding">
    <li class="row">
      <strong class="col-md-3">{{ Lang::get('aop.meetings_subject') }}</strong>
      <div class="col-md-7">Training</div>
    </li>
    <li class="row">
      <strong class="col-md-3">{{ Lang::get('aop.meetings_sdate') }}</strong>
      <div class="col-md-7">
        20/10/2015 2:04 AM
      </div>
    </li>
    <li class="row">
      <strong class="col-md-3">{{ Lang::get('aop.meetings_edate') }}</strong>
      <div class="col-md-7">
        20/10/2015 2:04 AM
      </div>
    </li>

    <li class="row">
      <strong class="col-md-3">{{ Lang::get('aop.meetings_status') }}</strong>
      <div class="col-md-7">Open</div>
    </li>

    <li class="row">
      <strong class="col-md-3">Contact</strong>
      <div class="col-md-7">Mr. Hermans Glenn</div>
    </li>
   </ul>
  </div>



@endsection
