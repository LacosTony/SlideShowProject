<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<title>Liste des présentations</title>
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	</head>
	<body>
		<div class="container">
			
			

			<p>{{$slide['elements']}}</p>
			<p>{{var_dump($slide['files'])}}</p>
			<p>{{$slide['nbFiles']}}</p>
		
		</div>
		
		<!-- Scripts -->
    	<script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>