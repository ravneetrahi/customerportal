@extends('welcome')

@section('content')

		<div class="container">
<div class='loginColumns block block-size-login highlight-color-purple'>
<div class='block-content-outer'>
<div class='block-content-inner'>
    <div class="row">
      <div class="col-md-10">
        <img src="{{asset('img/logo.png')}}" class="logo-name">
                    <div class="clearfix">&nbsp;</div>
                   					@if (session('status'))
						<div class="alert alert-success">
							{{ session('status') }}
						</div>
					@endif

					@if (count($errors) > 0)
				    <div class="text-danger">
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

                    <div class="clearfix">&nbsp;</div>
					<form role="form" method="POST" action="{{ url('/password/email') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="control-label">E-Mail Address</label>
							<input type="email" class="form-control" name="email" value="{{ old('email') }}">

						</div>

						<div class="form-group">
							<div class="col-md-6">
								<button type="submit" class="btn btn-custom">
									Send Password Reset Link
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
