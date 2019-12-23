@extends('app')
@section('sidebar')
 <a href="{{ url('profile') }}" class="list-group-item"> {{ Lang::get('aop.my_account') }} </a>
 <a href="{{ url('profile/chpass')}}" class="list-group-item"> {{ Lang::get('aop.change_password') }} </a>
@endsection

@section('content')
<div class="page-header"><h2>{{ Lang::get('aop.chpass_title') }}</h2> </div>
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
  {!! Form::model($user, array('url' => "profile/chpass/", 'method' => 'PATCH', 'class' => 'form-horizontal')) !!}
  <div class="form-group">
    <label for="current_pass" class="col-sm-3 control-label">{{ Lang::get('aop.current_password') }} <span class="text-danger">*</span></label>
    <div class="col-sm-6">
      <input type="password" name="current_pass" id="current_pass" class="form-control">
    </div>
  </div>

  <div class="form-group">
    <label for="password" class="col-sm-3 control-label">{{ Lang::get('aop.new_password') }} <span class="text-danger">*</span></label>
    <div class="col-sm-6">
      <input type="password" name="password" id="password" class="form-control">
    </div>
  </div>

    <div class="form-group">
    <label for="confirm_pass" class="col-sm-3 control-label">{{ Lang::get('aop.confirm_password') }} <span class="text-danger">*</span></label>
    <div class="col-sm-6">
      <input type="password" name="password_confirmation" id="confirm_pass" class="form-control">
    </div>
  </div>


  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
      <button type="submit" class="btn btn-custom">{{ Lang::get('aop.update') }}</button>
    </div>
  </div>
</form>
 </div>
@endsection
