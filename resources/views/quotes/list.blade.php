@extends('app_nosidebar')


@section('content')
<div class="page-header">
  <h2>Quotes</h2>
</div>
  <div class="well">
    <form action="" class="form-horizontal">

   <div class="row">
    <div class="col-md-3">
     <input type="text" id="quote_number" name="quote_number"  class="form-control input-sm">
     <span class="help-block">{{ Lang::get('aop.quotes_number')}}</span>
    </div>

  <div class="col-md-3">
    <select name="quote_status" class="form-control">
      <option selected=""></option>
      <option value="Confirmed">{{ Lang::get('aop.confirmed')}}</option>
      <option value="closed_accpted">{{ Lang::get('aop.closed_accepted')}}</option>
    </select>
     <span class="help-block">{{ Lang::get('aop.quotes_status')}}</span>
  </div>

  <div class="col-md-3">
    <input type="text" class="form-control" id="validuntill">
    <span class="help-block"> {{ Lang::get('aop.quotes_valid_untill')}}</span>
  </div>
  <script type="text/javascript">
    $(function () {
        $('#validuntill').datetimepicker({ format: 'DD-M-YYYY',  locale: '{{ $lang }}', showClose: true});
    });
</script>
    <div class="col-md-2">
      <button type="submit" class="btn btn-custom">{{ Lang::get('aop.search')}}</button>
    </div>

</form>
</div>
</div>

<table class="table table-striped">
  <thead>
    <th class="col-md-1">{{ Lang::get('aop.quotes_number')}}</th>
    <th class="col-md-6">{{ Lang::get('aop.quotes_subject')}}</th>
    <th class="text-center col-md-2">{{ Lang::get('aop.quotes_grand_total')}}</th>
    <th class="text-center col-md-2">{{ Lang::get('aop.quotes_valid_untill')}}</th>
   </thead>
   <tbody>
    <tr>
     <td><a href="#1">#1</a></td>
     <td><a href="#">Suite portal</a></td>
     <td class="text-center">&euro; 0.00</td>
     <td class="text-center">27/11/2015</td>
    </tr>

    <tr>
     <td><a href="#1">#1</a></td>
     <td><a href="#">Suite portal</a></td>
     <td class="text-center">&euro; 0.00</td>
     <td class="text-center">27/11/2015</td>
    </tr>
   </tbody>
</table>
@endsection
