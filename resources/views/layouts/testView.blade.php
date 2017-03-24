<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<title>Slide</title>
		<meta name="viewport" content="initial-scale=1.0,width=device-width">

		<link href="{{ asset('css/reset.css') }}" rel="stylesheet">
		<link href="{{ asset('css/style.css') }}" rel="stylesheet">
	</head>
	<body id="body">
		<div class="page-transition page-transition-pop"></div>
		
		<div class="content-container">	

			<!--<p>{{$slide['elements']}}</p>
			<p>{{var_dump($slide['files'])}}</p>
			<p>{{$slide['nbFiles']}}</p>-->
			
			@foreach($slide['files'] as $file)
			<img src='{{$file->url}}' width="{{$file->width}}" height="{{$file->height}}">
			@endforeach

		</div>
		
		@if($number==0)
			<span class="nav arrow-left" target-frame="0"></span>
    		<span class="nav arrow-right" target-frame="{{$number+1}}"></span>
		@else
			<span class="nav arrow-left" target-frame="{{$number-1}}"></span>
   			<span class="nav arrow-right" target-frame="{{$number+1}}"></span>
		@endif

		<!-- Scripts -->
    	<script src="{{ asset('js/lib/hammer.min.js') }}"></script>
    	<script src="{{ asset('js/lib/jquery-3.0.0.min.js') }}"></script>
    	<script src="{{ asset('js/lib/jquery-fullscreen.js') }}"></script>
    	<script src="{{ asset('js/main.js') }}"></script>
    </body>
</html>