@extends('app_nosidebar')


@section('content')

<div class="page-header">
  <h2>Create announcement</h2>
</div>

@if (count($errors) > 0)
<div class="alert alert-danger alert-dismissible fade in" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
@foreach ($errors->all() as $error)
          <p>{{ $error }}</p>
    @endforeach
    </div>
@endif

<div class="well">
 <form action="{{url('admin/announcements/create') }}" method="POST" class="form-horizontal">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">

  <div class="form-group">
    <label for="title" class="form-label col-md-2">Title <span class="text-danger">*</span></label>
      <div class="col-md-10">
        <input name="title" id="title" class="form-control">
      </div>
    </div>

    <div class="form-group">
      <label for="message" class="form-label col-md-2">Message <span class="text-danger">*</span></label>
        <div class="col-md-10">
          <textarea name="description" id="message" rows="10" class="form-control"></textarea>
        </div>
      </div>

      <div class="form-group">
        <label class="form-label col-md-2">&nbsp;</label>
          <div class="col-md-10">
            <button type="submit" name="submit" id="save" class="btn btn-custom">{{ Lang::get('aop.save')}}</button>
          </div>
        </div>
    </form>
  </div>

@endsection
