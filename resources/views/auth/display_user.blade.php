@extends('app_nosidebar')
@section('content')
<div class="page-header"><h2>{{ Lang::get('aop.users_edit_title') }}</h2> </div>

@if (Session::has('message'))
   <div class="alert alert-success">{{ Session::get('message') }}</div>
@endif

 <div class="well">
{!! Form::model($user, array('url' => "admin/users/updateUser/$user->id", 'method' => 'PATCH', 'class' => 'form-horizontal')) !!}

  <div class="form-group">
    <label for="first_name" class="col-sm-2 control-label">{{ Lang::get('aop.first_name') }}</label>
    <div class="col-sm-10">
      <input type="text" name="fname" id="fname" value="{{ $user->fname }}" class="form-control">
    </div>
  </div>

  <div class="form-group">
    <label for="lname" class="col-sm-2 control-label">{{ Lang::get('aop.last_name') }}</label>
    <div class="col-sm-10">
      <input type="text" name="name" id="name" value="{{ $user->name }}" class="form-control">
    </div>
  </div>

  <div class="form-group">
    <label for="address" class="col-sm-2 control-label">{{ Lang::get('aop.address') }}</label>
    <div class="col-sm-10">
      <input type="text" name="address" id="address" value="{{ $user->address }}" class="form-control">
    </div>
  </div>

  <div class="form-group">
    <label for="postal_code" class="col-sm-2 control-label">{{ Lang::get('aop.city') }}</label>
    <div class="col-sm-2">
      <input type="text" name="postal_code" id="postal_code" value="{{ $user->postal_code }}" placeholder="Postal code" class="form-control">
    </div>
    <div class="col-sm-8">
      <input type="text" name="city" id="city" value="{{ $user->city }}" placeholder="City" class="form-control">
    </div>
  </div>

  <div class="form-group">
    <label for="country" class="col-sm-2 control-label">{{ Lang::get('aop.country') }}</label>
    <div class="col-sm-10">
      <select name="country" id="country" class="form-control">
      @foreach($country_list as $country_item)
      <option value="{{ $country_item->country }}" @if($country_item->country == $user->country) selected="" @endif>{{ $country_item->country }}</option>
      @endforeach
      </select>
    </div>
  </div>



  <div class="divider">&nbsp;</div>

  <div class="form-group">
    <label for="email" class="col-sm-2 control-label">{{ Lang::get('aop.email') }}</label>
    <div class="col-sm-6">
      <input type="email" name="email" id="email" value="{{ $user->email }}" class="form-control">
    </div>
  </div>

  <div class="form-group">
    <label for="office_phone" class="col-sm-2 control-label">{{ Lang::get('aop.office_phone') }}</label>
    <div class="col-sm-6">
      <input type="phone" name="office_phone" placeholder="+32" id="office_phone" class="form-control">
    </div>
  </div>

    <div class="form-group">
    <label for="mobile" class="col-sm-2 control-label">{{ Lang::get('aop.mobile') }}</label>
    <div class="col-sm-6">
      <input type="mobile" name="mobile" placeholder="+32" id="mobile" class="form-control">
    </div>
  </div>

  <div class="form-group">
    <label for="timezone" class="col-md-2 control-label">{{ Lang::get('aop.timezone') }} <span class="text-danger">*</span></label>
    <div class="col-sm-6">
      <select name="timezone" id="timezone" class="form-control">
        @foreach ($timezones as $timezone_item)
       <option value="{{ $timezone_item->timezone }}">{{ $timezone_item->timezone }}</option>
       @endforeach
      </select>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-custom">{{ Lang::get('aop.update') }}</button>
      <button type="button" onclick="location.href='{{ url('admin') }}';" class="btn btn-default">Cancel</button>
    </div>
  </div>
  {!! Form::close() !!}
 </div>
@endsection
