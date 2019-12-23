@extends('app_nosidebar')

@section('content')
<div class="panel panel-default">
  <div class="panel-heading">SuiteCRM connector</div>
  <div class="panel-body">
    <form action=""  method="post" class="form">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">

     <div class="form-group">
      <label for="hostname" class="form-label">SuiteCRM url <span class="text-danger"> *</span></label>
      <input type="text" name="hostname" id="hostname" value="{{ $url }}" class="form-control">
    </div>

    <div class="form-group">
     <label for="username">SuiteCRM username <span class="text-danger"> *</span></label>
     <input type="text" name="username" id="username" value="{{ $username }}" class="form-control">
   </div>

   <div class="form-group">
    <label for="password">New password</label>
     <input type="password" name="password" id="password" value="" class="form-control">
   </div>

   <div class="form-group">
    <label>Confirm password</label>
     <input type="password" name="confirm_password" value="" class="form-control">
   </div>

   <div class="form-group">
     <label>&nbsp;</label>
      <input type="submit" name="submit" value="{{ Lang::get('aop.save') }}" class="btn btn-custom">
   </div>
  </div>
</div>

@endsection
