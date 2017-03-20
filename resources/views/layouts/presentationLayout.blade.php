<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<title>Liste des présentations</title>
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">

		@yield('style')

		<!-- Scripts -->
	    <script>
	        window.Laravel = {!! json_encode([
	            'csrfToken' => csrf_token(),
	        ]) !!};
	    </script>
	</head>
	<body>
		<nav class="navbar navbar-inverse">
		  <div class="container-fluid">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>                      
			  </button>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
			  <ul class="nav navbar-nav navbar-right">
			  @if (Auth::guest())
                    <li>
                    	<a href="{{ route('login') }}">
                    		<span class="glyphicon glyphicon-log-in"></span>
                    		Login
                    	</a>
                    </li>
                    <li>
                    	<a href="{{ route('register') }}">
                    		<span class="glyphicon glyphicon-user"></span>
                    		Register
                    	</a>
                    </li>
              @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} 
                            <span class="caret"></span>
                        </a>

                    	<ul class="dropdown-menu" role="menu">
                        	<li>
                            	<a href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout
                            	</a>

                            	<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                	{{ csrf_field() }}
                          		</form>
                       		</li>
                    	</ul>
                	</li>
              	@endif
              	</ul>
			</div>
		  </div>
		</nav>
		  @yield('content')
		<!-- Scripts -->
    	<script src="{{ asset('js/app.js') }}"></script>
	</body>
</html>