@extends('app')
@section('sidebar')
 <a href="{{ url('profile') }}" class="list-group-item"> {{ Lang::get('aop.my_account') }} </a>
 <a href="{{ url('profile/chpass')}}" class="list-group-item"> {{ Lang::get('aop.change_password') }} </a>
@endsection

@section('content')
<div class="page-header"><h2>{{ Lang::get('aop.my_account') }}</h2> </div>

<div class="alert alert-info">
 <p><i class="fa fa-info-circle fa-2x"></i> {{ Lang::get('aop.account_info') }}</p>
</div>
 <div class="well">
<form action="" method="POST" class="form-horizontal">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">

  <div class="form-group">
    <label for="fname" class="col-sm-2 control-label">{{ Lang::get('aop.first_name') }} <span class="text-danger">*</span></label>
    <div class="col-sm-10">
      <input type="text" name="fname" id="fname" value="{{ Auth::user()->fname }}" class="form-control">
    </div>
  </div>

  <div class="form-group">
    <label for="name" class="col-sm-2 control-label">{{ Lang::get('aop.last_name') }} <span class="text-danger">*</span></label>
    <div class="col-sm-10">
      <input type="text" name="name" id="name" value="{{ Auth::user()->name }}" class="form-control">
    </div>
  </div>

  <div class="form-group">
    <label for="address" class="col-sm-2 control-label">{{ Lang::get('aop.address') }} <span class="text-danger">*</span></label>
    <div class="col-sm-10">
      <input type="text" name="address" id="address" value="{{ Auth::user()->address }}" class="form-control">
    </div>
  </div>

  <div class="form-group">
    <label for="postal_code" class="col-sm-2 control-label">{{ Lang::get('aop.city') }} <span class="text-danger">*</span></label>
    <div class="col-sm-2">
      <input type="text" name="postal_code" id="postal_code" value="{{ Auth::user()->postal_code }}" placeholder="Postal code" class="form-control">
    </div>
    <div class="col-sm-8">
      <input type="text" name="city" id="city" placeholder="City" value="{{ Auth::user()->city }}" class="form-control">
    </div>
  </div>

  <div class="form-group">
    <label for="country" class="col-sm-2 control-label">{{ Lang::get('aop.country') }} <span class="text-danger">*</span></label>
    <div class="col-sm-10">
      <select name="country" id="country" class="form-control">
      @foreach($countries as $country_item)
      <option value="{{ $country_item->country }}" @if($country_item->country == Auth::user()->country) selected="" @endif>{{ $country_item->country }}</option>
      @endforeach
      </select>
    </div>
  </div>

  <div class="divider">&nbsp;</div>

  <div class="form-group">
    <label for="email" class="col-sm-2 control-label">{{ Lang::get('aop.email') }}</label>
    <div class="col-sm-6">
      <input type="email" name="email" id="email" value="{{ Auth::user()->email }}" class="form-control">
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
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-custom">Update</button>
    </div>
  </div>
</form>
 </div>
@endsection
