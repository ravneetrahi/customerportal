<!DOCTYPE html>
<html lang="en">
    <head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>Suite panel - Free customer panel for SuiteCRM</title>

	    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
	    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type='text/css'>
	    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet" type='text/css'>
	    <link href="{{ asset('css/default.css') }}" rel="stylesheet" type='text/css'>
      <link href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.4.0/fullcalendar.min.css" rel="stylesheet" type="text/css">
      <link href="{{ asset('css/calendar.css') }}" rel="stylesheet" type="text/css">
      <link href="{{ asset('css/bootstrap-datetimepicker.css') }}" rel="stylesheet" type="text/css">


	    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment-with-locales.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.4.0/fullcalendar.min.js"></script>
      <script src="{{ asset('js/bootstrap-datetimepicker.min.js') }}"></script>


        <!--[if lt IE 9]>
		    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
    </head>
    <body>
        <div class="container wrapper">
            <div class="container-fluid" style="padding-top: 10px; padding-bottom: 20px;">
                <img src="{{asset('img/logo.png')}}" class="pull-left">
                <div class="pull-right">
                    <a href="{{ url('/auth/logout') }}" title="Log out"  data-toggle="tooltip" data-placement="bottom" data-html="true" title="1st line of text <br> 2nd line of text"	><i class="fa fa-sign-out fa-2x"></i></a>
                </div>
            </div>

            <div class="page-container">

              <!-- top navbar -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container-fluid">
        	            <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed btn btn-custom" data-toggle="collapse" data-target="#navbar-collapse-menu" aria-expanded="false">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <a class="navbar-brand" href="{{ url('') }}" > {{ Lang::get('aop.portal_name') }} </a>
        	            </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="col-sm-offset-3">
                            <div class="collapse navbar-collapse " id="navbar-collapse-menu">
                                <ul class="nav navbar-nav">
                                    <li class="@if (Request::is('/*')) active @endif">
                                        <a href="{{ url('/') }}">
                                            <i class="fa fa-home fa-lg"></i>
                                        </a>
                                    </li>
                                    <li class="dropdown @if (Request::is('meetings*')) active @endif">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                            {{ Lang::get('aop.meetings') }} <span class="caret"></span>
                                        </a>

                                        <ul class="dropdown-menu">
                                            <li><a href="{{ url('meetings') }}"> {{ Lang::get('aop.meetings') }} </a></li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="{{ url('meetings/create') }}"> {{ Lang::get('aop.meetings_title_create') }}</a></li>
                                        </ul>
                                    </li>
                                    <li class="@if (Request::is('quotes*')) active @endif">
                                        <a href="{{ url('quotes')}}">
                                            {{ Lang::get('aop.quotes') }}
                                        </a>
                                    </li>
                                    <li class="dropdown @if (Request::is('cases*')) active @endif">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                            {{ Lang::get('aop.cases') }} <span class="caret"></span>
                                        </a>

                                        <ul class="dropdown-menu">
                                            <li><a href="{{ url('cases') }}"> {{ Lang::get('aop.case_status_all') }} </a></li>
                                            <li><a href="{{ url('cases') }}"> {{ Lang::get('aop.case_status_open') }} </a></li>
                                            <li><a href="{{ url('cases') }}"> {{ Lang::get('aop.case_status_closed') }} </a></li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="{{ url('cases/create') }}"> {{ Lang::get('aop.create_case') }}</a></li>
                                        </ul>
                                    </li>
                                </ul>

                                <ul class="nav navbar-nav navbar-right">
                                    <li class="dropdown @if (Request::is('profile*')) active @endif">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                          <i class="fa fa-user fa-lg"></i>  {{ Auth::user()->fname }} {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>

                                        <ul class="dropdown-menu">
                                          <li><a href="{{ url('admin') }}"> {{ Lang::get('aop.settings') }} </a></li>
                                          <li><a href="{{ url('profile') }}"> {{ Lang::get('aop.my_account') }} </a></li>
                                          <li><a href="{{ url('profile/chpass') }}"> {{ Lang::get('aop.change_password') }} </a></li>
                                          <li role="separator" class="divider"></li>
                                          <li class="navbar-menu-item">
                                           <div class="label">
                                            {{ Lang::get('aop.languages') }}
                                            </div>
                                          </li>

    							            <li><a href="?lang=nl">{{ Lang::get('aop.langnl') }}</a></li>
    	                        <li><a href="?lang=en">{{ Lang::get('aop.langen') }}</a></li>
                              <li><a href="?lang=fr">{{ Lang::get('aop.langfr') }}</a></li>
    							            <li role="separator" class="divider"></li>
                                            <li>
                                                <a href="{{ url('/auth/logout') }}">
                                                    <i class="fa fa-sign-out"></i> {{ Lang::get('aop.sign_out') }}
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </div>
                    </div>
                </div>

            <div class="container-fluid">
                <div class="row row-offcanvas row-offcanvas-left">
                    <!-- main area -->
                    <div class="col-xs-12 col-sm-12" style="padding-top: 20px;">
                        @yield('content')
                    </div><!--/row-->
                </div><!--/.col-xs-12.col-sm-9-->
            </div><!--/row-->
        </div><!--/.container-->
    </div>

	<!-- Scripts -->
	<script type="text/javascript">
	$("[data-toggle=tooltip]").tooltip();
	</script>

    </body>
</html>
