@extends('app_nosidebar')


@section('content')

<div class="page-header">
  <h2>Create announcement</h2>
</div>

<form class="">
  <div class="form-control">
    <label for="title" class="form-label col-md-3">Title <span class="text-danger">*</span></label>
      <div class="col-md-6">
        <input name="title" id="title" class="form-control">
      </div>
    </div>

    <div class="form-control">
      <label for="message" class="form-label col-md-3">Message <span class="text-danger">*</span></label>
        <div class="col-md-6">
          <textarea name="message" id="message" class="form-control"></textarea>
        </div>
      </div>

      <div class="form-control">
        <label class="form-label col-md-3">&nbsp;</label>
          <div class="col-md-6">
            <button type="submit" name="submit" id="save" class="form-control">
          </div>
        </div>

@endsection
