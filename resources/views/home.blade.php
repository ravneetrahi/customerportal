@extends('app')
@section('sidebar')
  <a href="{{ url('') }}" class="@if (Request::is('/*')) list-group-item active @endif list-group-item"> {{ Lang::get('aop.home') }}</a>
  <a href="{{ url('cases') }}" class="@if (Request::is('cases')) list-group-item active @endif list-group-item">{{ Lang::get('aop.cases') }}</a>
@endsection

@section('content')
<div class="panel panel-default">
            
</div>

@endsection
