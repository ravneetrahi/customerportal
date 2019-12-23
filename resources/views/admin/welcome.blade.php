@extends('app_nosidebar')

@section('content')
<div class="page-header">
<h2>Admin dashboard</h2>
</div>

<div class="row">
  <div class="col-md-6">
    <div class="panel panel-default">
      <!-- Default panel contents -->
      <div class="panel-heading">General</div>
      <!-- List group -->
      <ul class="list-group">
        <li class="list-group-item"><a href="{{ url('admin/settings')}}">Portal settings</a></li>
        <li class="list-group-item"><a href="{{ url('admin/announcements')}}">Announcements</a></li>
        <li class="list-group-item"><a href="{{ url('admin/mail')}}">Mail settings</a></li>
        <li class="list-group-item"><a href="{{ url('admin/connector')}}">SuiteCRM connector</a></li>
      </ul>
    </div>
  </div>

  <div class="col-md-6">
    <div class="panel panel-default">
      <!-- Default panel contents -->
      <div class="panel-heading">{{ Lang::get('aop.users_title')}}</div>
      <!-- List group -->
      <ul class="list-group">
        <li class="list-group-item"><a href="{{ url('admin/users') }}">{{ Lang::get('aop.users_title')}}</a></li>
        <li class="list-group-item"><a href="{{ url('admin/users/create')}}">{{ Lang::get('aop.users_create_title')}}</a></li>
        <li class="list-group-item"><a href="#">Roles list</a></li>
        <li class="list-group-item"><a href="#">Permissions</a></li>
      </ul>
    </div>
  </div>

</div>

@endsection
