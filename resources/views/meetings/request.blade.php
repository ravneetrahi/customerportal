@extends('app')
@section('sidebar')
<ul class="nav">
  <a href="{{ url('meetings') }}" class="list-group-item"> {{ Lang::get('aop.meetings_title') }} </a>
  <a href="{{ url('meetings/create') }}" class="list-group-item"> {{ Lang::get('aop.meetings_title_create') }} </a>
</ul>
@endsection

@section('content')
<div class="page-header">
  <h2>{{lang::get('aop.meetings_title') }}</h2>
</div>

<div class="row">
<div class="col-md-12">
  @if (count($errors) > 0)
<div class="alert alert-danger alert-dismissible fade in" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> 
  @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
      @endforeach
      </div>
  @endif

  <form action="{{ url('meetings/create') }}" method="post" enctype="multipart/form-data" class="well well-sm">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="form-group">
    <label for="meeting_subject" class="form-label">{{ Lang::get('aop.meetings_subject') }} <span class="text-danger">*</span></label>
    <input name="meeting_subject" id="meeting_subject" class="form-control">
   </div>

   <div class="form-group">
     <label for="meeting_sdate" class="form-label">{{ Lang::get('aop.meetings_sdate') }} <span class="text-danger">*</span></label>
     <input type='text' name="meeting_sdate" id='meeting_sdate' class="form-control" />
     </div>
   <script type="text/javascript">
       $(function () {
           $('#meeting_sdate').datetimepicker({ format: 'DD-M-YYYY',  locale: '{{ $lang }}', showClose: true});
       });
   </script>

   <div class="form-group">
     <label for="meeting_edate" class="form-label">{{ Lang::get('aop.meetings_edate') }} <span class="text-danger">*</span></label>
     <input type='text' name="meeting_edate" id='meeting_edate' class="form-control" />
     </div>
   <script type="text/javascript">
       $(function () {
           $('#meeting_edate').datetimepicker({ format: 'DD-M-YYYY',  locale: 'nl', showClose: true});
       });
   </script>

   <div class="form-group">
    <label for="meeting_message" class="form-label">{{ Lang::get('aop.meetings_description') }} <span class="text-danger">*</span></label>
    <textarea name="meeting_message" id="meeting_message" class="form-control" rows="5"></textarea>
   </div>

    <div class="form-group">
     <button type="submit" name="save_meeting" class="btn btn-custom">{{ Lang::get('aop.save') }}</button>
   </div>
  </form>

  @endsection
