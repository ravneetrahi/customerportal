@extends('app_nosidebar')
@section('sidebar')
<ul class="nav">
  <a href="{{ url('meetings') }}" class="list-group-item"> {{ Lang::get('aop.meetings_title') }} </a>
  <a href="{{ url('meetings/create') }}" class="list-group-item"> {{ Lang::get('aop.meetings_title_create') }} </a>
</ul>
@endsection

@section('content')
<div class="page-header">
  <h2>Meetings</h2>
</div>

<div class="row">
<div class="col-md-12">
  <script>
  $(document).ready(function() {

    		$('#calendar').fullCalendar({
    			header: {
    				left: 'prev,next today',
    				center: 'title',
    				right: 'month,basicWeek'
    			},
    			defaultDate: '2015-10-12',
    			editable: true,
    			eventLimit: true, // allow "more" link when too many events
          lang: '{{ $lang }}',
          firstDay: '1',
    			events: [
    				{
    					title: 'All Day Event',
    					start: '2015-10-01'
    				},
    				{
    					title: 'Long Event',
    					start: '2015-10-07',
    					end: '2015-10-10'
    				},
    				{
    					id: 999,
    					title: 'Repeating Event',
    					start: '2015-10-10T16:00:00',
              url: '{{ url('meetings/read/') }}'
            },
    				{
    					id: 999,
    					title: 'Repeating Event',
    					start: '2015-10-16T16:00:00',
              url: '{{ url('meetings/read/') }}'
    				},
    				{
    					title: 'Conference',
    					start: '2015-10-11',
    					end: '2015-10-13',
              url: '{{ url('meetings/read/') }}'
    				},
    				{
    					title: 'Meeting',
    					start: '2015-10-12T10:30:00',
    					end: '2015-10-12T12:30:00',
              url: '{{ url('meetings/read/') }}'
    				},
    				{
    					title: 'Meeting',
    					start: '2015-10-12T14:30:00',
              url: '{{ url('meetings/read/') }}'
    				},
    				{
    					title: 'Happy Hour',
    					start: '2015-10-12T17:30:00',
              url: '{{ url('meetings/read/') }}'
    				},
    				{
    					title: 'Dinner',
    					start: '2015-10-12T20:00:00',
              url: '{{ url('meetings/read/') }}'
    				},
    				{
    					title: 'Training',
    					start: '2015-10-13',
              end:   '2015-10-15',
              url: '{{ url('meetings/read/') }}'
    				},
    				{
    					title: 'Site presentation',
    					start: '2015-10-28',
              end: '2015-10-30T12:30:00',
              url: '{{ url('meetings/read/') }}'
    				}
    			]
    		});

    	});

    </script>
	<div id='calendar'></div>
</div>
</div>

@endsection
