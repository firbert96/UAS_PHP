@extends('layout')
@section('content')
<!DOCTYPE html>
<html>
 	<head>
		<script src="http://lab.subinsb.com/projects/jquery/core/jquery-2.1.1.js"></script>
		<script src="http://lab.subinsb.com/projects/jquery/chess/jquery.chess.min.js"></script>
 	</head>
 	<body>
		<div id="content">
			<h2>Chess </h2>
			<div id="game"></div>
			<script>
				$(document).ready(function(){
					$("#game").chess();
				});
			</script>
		</div>
		<!-- http://subinsb.com/jquery-chess-game -->
 	</body>
</html>	
@endsection