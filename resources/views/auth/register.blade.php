@extends('welcome')

@section('content')
<div class="container">
<div class='loginColumns block block-size-login highlight-color-purple'>
<div class='block-content-outer'>
<div class='block-content-inner'>
 <div class="row">
      <div class="col-md-12">
       <img src="{{asset('img/logo.png')}}" class="logo-name">
         <div class="clearfix">&nbsp;</div>
      			@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="user_type" value="1">


            <div class="form-group">
							<label for="name" class="col-md-5 control-label">Name</label>
							<div class="col-md-7">
								<input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
							</div>
						</div>

						<div class="form-group">
							<label for="fname" class="col-md-5 control-label">First name</label>
							<div class="col-md-7">
								<input type="text" class="form-control" id="fname" name="fname" value="{{ old('fname') }}">
							</div>
						</div>
            <div class="form-group">
              <label for="address" class="col-sm-2 control-label">{{ Lang::get('aop.address') }}</label>
              <div class="col-sm-10">
                <input type="text" name="address" id="address" class="form-control">
              </div>
            </div>

            <div class="form-group">
              <label for="postal_code" class="col-sm-2 control-label">{{ Lang::get('aop.city') }}</label>
              <div class="col-sm-2">
                <input type="text" name="postal_code" id="postal_code" placeholder="Postal code" class="form-control">
              </div>
              <div class="col-sm-8">
                <input type="text" name="city" id="city" placeholder="City" class="form-control">
              </div>
            </div>

            <div class="form-group">
              <label for="countries" class="col-sm-2 control-label">{{ Lang::get('aop.country') }}</label>
              <div class="col-sm-10">
                <select name="country" id="countries" class="form-control">
                  @foreach ($countries as $country_item)
                 <option value="{{ $country_item->country }}">{{ $country_item->country }}</option>
                 @endforeach
                </select>
              </div>
            </div>

						<div class="form-group">
							<label for="email" class="col-md-5 control-label">E-Mail Address</label>
							<div class="col-md-7">
								<input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="col-md-5 control-label">Password</label>
							<div class="col-md-7">
								<input type="password" class="form-control" id="password" name="password">
							</div>
						</div>

						<div class="form-group">
							<label for="confirm_pass" class="col-md-5 control-label">Confirm Password</label>
							<div class="col-md-7">
								<input type="password" class="form-control" id="confirm_pass" name="password_confirmation">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-custom">
									Register
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
@endsection
