@extends('app_nosidebar')

@section('content')
<div class="page-header">
<h2>Mail settings</h2>
</div>

<div class="clearfix">&nbsp;</div>
 @if (count($errors) > 0)
 <div class="alert alert-danger">
 <ul>
 @foreach ($errors->all() as $error)
 <li>{{ $error }}</li>
     @endforeach
 </ul>
</div>
@endif


@if (Session::has('message'))
   <div class="alert alert-success">{{ Session::get('message') }}</div>
@endif

<div class="well">
 <form action="" method="POST" class="form-horizontal">
   <div class="form-group">
    <label for="mail_hostname" class="form-label col-md-2">Hostname <span class="text-danger">*</span></label>
    <div class="col-md-6">
      <input type="text" id="mail_hostname" name="mail_hostname" placeholder="Hostname" class="form-control">
    </div>
    <div class="col-md-1">
      <input type="number" id="mail_port" name="mail_port" value="25" placeholder="Port" class="form-control">
    </div>
   </div>

   <div class="form-group">
    <label for="mail_username" class="form-label col-md-2">{{ Lang::get('aop.email')}} <span class="text-danger">*</span></label>
    <div class="col-md-6">
      <input type="email" id="mail_username" name="mail_username" class="form-control">
    </div>
   </div>

   <div class="form-group">
    <label for="mail_password" class="form-label col-md-2">Password <span class="text-danger">*</span></label>
      <div class="col-md-6">
       <input type="password" id="mail_password" name="mail_password" class="form-control">
      </div>
   </div>

  <div class="form-group">
    <label class="form-label col-md-2">&nbsp;</label>
    <div class="col-md-6">
      <button type="submit" name="save" id="save" class="btn btn-custom">{{Lang::get('aop.save')}}</button>
    </div>
</div>
@endsection
