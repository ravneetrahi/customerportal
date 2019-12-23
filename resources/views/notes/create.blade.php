@extends('app')
@section('sidebar')
  
@endsection

@section('content')

<div class="page-header"><h2>{{ Lang::get('aop.create_notes') }}</h2> </div>

@if (count($errors) > 0)
<div class="alert alert-danger alert-dismissible fade in" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> 
@foreach ($errors->all() as $error)
          <p>{{ $error }}</p>
    @endforeach
    </div>
@endif

<form action="{{ url('notes/saveNotes') }}" method="post" enctype="multipart/form-data" class="well well-sm">
 <input type="hidden" name="_token" value="{{ csrf_token() }}">
 <input type="hidden" name="case_id" value="{{$case_id}}">
  <div class="form-group">
  <label for="notes_subject" class="form-label">{{ Lang::get('aop.notes_subject') }}</label>
  <input name="notes_subject" id="notes_subject" class="form-control" required>
 </div>

 <div class="form-group">
  <label for="notes_description" class="form-label">{{ Lang::get('aop.notes_description') }}</label>
  <textarea name="notes_description" id="notes_description" class="form-control" rows="5" required></textarea>
 </div>

   <div class="form-group">
    <label for="notes_file">{{ Lang::get('aop.notes_add_file') }}</label>
    <input type="file" id="notes_file" class="form-control" name="notes_file">
  </div>

  <div class="form-group">
    <label for="notes_date_created">{{ Lang::get('aop.notes_date_created') }}</label>
    <input type="text" id="notes_date_created" class="form-control" value="No data" readonly>
  </div>

  <div class="form-group">
   <button type="submit" name="case_submit" class="btn btn-custom">{{ Lang::get('aop.save') }}</button>
 </div>
</form>

@endsection
