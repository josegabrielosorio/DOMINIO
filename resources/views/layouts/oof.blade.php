<html>
<head>

	<TITLE>@yield('titulo')</TITLE>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/css/ESTILOS.css">
	<link href="https://fonts.googleapis.com/css?family=Cutive+Mono" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="fonts/style.css">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>



</head>

<body id="Pagina">

	<div id="Contenedor-Principal">
			
		<header id="Cabecera">

			<div id="logo">

				<div id="logo-content">

					<a href="welcome">DOMINIO</a>
				</div>
			</div>

			<div id="nav-top">

				


				<div id="right-content">

						<div class="buscador-content">

							<input type="text" id="B"><label for="B"><span class="icon-search2"></span></label>
						</div>

					<a href="/operacionesBasicas/create">Registrar Producto</a>
					<a href="#">Country:CO</a>
					<br>
					<br>
				    
					
				</div>
			</div>
		</header>

		<nav id="Navegacion">

			<div id="Navegacion-Content">

				<div class="all">

						<ul>	

							<li><a href="men" class="all-in">men</a></li>
							<li><a href="women">women</a></li>
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
						</ul>
				</div>

				<div id="Menus">
							
					<div class="menu">

						<ul>
							<li class="Accesories">

								<a href="#">

									<span>Stores</span>
								</a>

								<ul>
									<li><a href="#">All</a></li>

									<li><a href="#">Berskha</a></li>

									<li><a href="#">Pull&Bear</a></li>

									<li><a href="#">Stradivarius</a></li>

									<li><a href="#">Zara</a></li>

									<li><a href="#">H&M</a></li>

									<li><a href="#">Forever21</a></li>
								</ul>
							</li>


							<li class="shop">

								<a href="#">

									<span>Products</span>
								</a>

								<ul>
									<li><a href="#">All</a></li>

									<li><a href="#">new</a></li>

									<li><a href="top">top</a>
										
										<ul>
											<li><a href="jackets">jackets & coats</a></li>
											<li><a href="#">t-shirt</a></li>
											<li><a href="#">shirt</a></li>
											<li><a href="#">Sweatshirts & Hoodies</a></li>
										</ul>
									</li>

									<li><a href="#">leather</a>

										<ul>
											<li><a href="#">jackets & coats</a></li>
											<li><a href="#">trousers</a></li>
											<li><a href="#">belts</a></li>
											<li><a href="#">bags</a></li>
										</ul>
									</li>

									<li><a href="#">demin</a>

										<ul>
											<li><a href="#">jackets & coats</a></li>
											<li><a href="#">jeans</a></li>
											<li><a href="#">shorts</a></li>
										</ul>
									</li>

									<li><a href="#">trousers</a>

										<ul>
											<li><a href="#">shorts</a></li>
											<li><a href="#">chinos</a></li>
											<li><a href="#">joggers</a></li>
										</ul>
									</li>
										
									<li><a href="#">jeans</a>

										<ul>
											<li><a href="#">skinny</a></li>
											<li><a href="#">super skinny</a></li>
											<li><a href="#">regular</a></li>
											<li><a href="#">bikers</a></li>
										</ul>
									</li>
								
									<li><a href="#">accesories</a>

										<ul>
											<li><a href="#">socks</a></li>
											<li><a href="#">bags</a></li>
											<li><a href="#">belts</a></li>
											<li><a href="#">others</a></li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
					</div>
					
				</div>
			</div> 
			
		</nav>

		<div class="container">

            @yield('contenido')

		</div>

	<!--	<footer id="Pie">
			
			<div id="nav-bottom">


				<nav class="menu3">

					<span>© 2017-2018 Dominio. All rights reserved </span>
								
					<ul>
						
						<li><a href="#">sizing</a></li>
						<li><a href="contact.html">contact</a></li>
						<li><a href="#">information</a></li>
						<li><a href="#">Privacy policy</a></li>
						<li><a href="legal.html">terms of use</a></li>
					</ul>
				</nav>
			</div>	
		</footer> -->
	</div>
 <script src="js/main.js"></script>
</body>
