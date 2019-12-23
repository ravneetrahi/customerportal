@extends('app_nosidebar')


@section('content')
<div class="page-header">
<h2>Announcements</h2>
</div>

<button type="button" class="btn btn-custom" onclick="location.href='announcements/create';">
    {{ Lang::get('aop.create_case') }}
</button>

<div class="clearfix">&nbsp;</div>
<table class="table table-striped">
  <thead>
    <tr>
      <th class="col-md-4">Title</th>
      <th>Status</th>
      <th>Created at</th>
      <th>Modified at</th>
      <th>&nbsp;</th>
    </tr>
  </thead>
  <tbody>
    @foreach($list as $value_item)
    <tr>
      <td>{{ $value_item->title }}</td>
      <td>{{ $value_item->status }}</td>
      <td>{{ $value_item->title }}</td>
      <td>{{ $value_item->title }}</td>
      <td>
        <a href="{{ url('announcements/edit')}}/{{ $value_item->id }} "><i class="fa fa-pencil"></i></a>
        <a href="{{ url('announcements/destroy')}}/{{ $value_item->id }}"><i class="fa fa-times"></i></a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
