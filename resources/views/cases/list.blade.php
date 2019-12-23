@extends('app')
<style>
.paging a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
}

.paging a:hover {
  background-color: #ddd;
  color: black;
}

.previous {
  background-color: #f1f1f1;
  color: black;
}

.next {
  background-color: #4CAF50;
  color: white;
}

.round {
  border-radius: 50%;
}
</style>

@section('content')
<div class="row">
<div class="col-md-12">


</div>
</div>

<div class="clearfix">&nbsp;</div>
<div class="clearfix">&nbsp;</div>

<div class="row">
<div class="col-md-12">
<table class="table table-striped">
 <thead>
  <tr>
  <th class="col-md-1">Num</th>
   <th class="col-md-1">Subject</th>
    <th class="col-md-1">Status</th>
   <th class="col-md-2">Priority</th>
   <th class="col-md-2">Type</th>
   <th class="col-md-2">Date Created</th>
  </tr>
 </thead>
  <tbody>
  @if(count($casesData)>0)
      @foreach($casesData as $case)
        <tr>
        <td>{{$case['case_number']}}</td>
          <td><a href="/cases/{{$case['id']}}">{{$case['name']}}</a></td>
          <td>{{$case['status']}}</td>
          <td>{{$case['priority']}}</td>
          <td>{{$case['type']}}</td>
          <td>{{$case['date_entered']}}</td>
      </tr>
      @endforeach
  @endif
  </tbody>
</table>
<div class="paging">
    @if($page>0)
      <a href="/cases/{{$prevPage}}" class="previous">&laquo; Previous</a>
    @endif
    @if($nextPage>0)
      <a href="/cases/{{$nextPage}}" class="next">Next &raquo;</a>
    @endif
</div>
</div>
</div>

@endsection
