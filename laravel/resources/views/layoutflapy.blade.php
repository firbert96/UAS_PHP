<html>
<head>
<title>Project UAS</title>
<!-- Fonts -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
<!-- Styles -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
{{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
</head>

<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
 <div class="navbar-header">
   <ul class="nav nav-tabs">
<li><a type="submit" name="Index" href="{{ url('/') }}">Home</a></li>
<li><a type="submit" name="Index" href="{{ url('/game') }}">Game</a></li>
<li><a type="submit" name="Index" href="{{ url('/info') }}">About us</a></li>
   </ul>
 </div>
</nav>
@yield('content')
@section("footer")
{{ HTML::script('js/stats.js') }}

@stop
</body>
</html>
			