<html>
<head>

	<TITLE> DOMINIO </TITLE>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/css/ESTILOS.css">
	<link href="https://fonts.googleapis.com/css?family=Cutive+Mono" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="fonts/style.css">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>



</head>

<body id="Pagina">
				
	<div id="index-content">

		<div id="coso">

			<div id="logo">

				<div id="logo-content-index">

					<a>DOMINIO</a>
				</div>
			</div>

			<div class="menu-pie">
				
				<ul>

					
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
    
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
    
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
			    
			    
			    	<li><a href="/operacionesBasicas">clothes</a></li>

			    </ul>
			</div>
		</div>

		<div class="pic">
		</div>
	</div>
	


	


 <script src="js/main.js"></script>
</body>