@extends('app_nosidebar')
@section('content')
<div class="page-header">
<h2>{{ Lang::get('aop.users_title') }}</h2>
</div>

<button class="btn btn-custom" onclick="location.href='{{ url('admin') }}';">Dashboard</button>
<button class="btn btn-custom" onclick="location.href='{{ url('admin/users/create') }}';">Create user</button>

<div class="clearfix">&nbsp;</div>
@if (Session::has('message'))
   <div class="alert alert-success">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped">
<thead>
 <tr>
  <th>{{ Lang::get('aop.users_name') }}</th>
  <th>{{ Lang::get('aop.users_email') }}</th>
  <th>{{ Lang::get('aop.users_type') }}</th>
  <th class="col-md-1"></th>
 </tr>
</thead>
@foreach ($users as $user_item)
<tr>
 <td>{{ $user_item->name }} {{ $user_item->fname }}</td>
 <td>{{ $user_item->email }}</td>
 <td>Portal user </td>
 <td><a href="{{ url('admin/users/edit') }}/{{ $user_item->id }}" data-toggle="tooltip" data-placement="bottom" data-html="true" title="{{ Lang::get('aop.users_edit') }}"><i class="fa fa-pencil"></i></a>
     <a href="{{ url('admin/users/remove') }}/{{ $user_item->id }}" data-toggle="tooltip" data-placement="bottom" data-html="true" title="Delete&nbsp;Account"><i class="fa fa-times"></i></a>
 </td>
</tr>
@endforeach
</table>
@endsection
