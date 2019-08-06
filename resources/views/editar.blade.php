<html>
<head>

	<TITLE> EDITAR PRODUCTO </TITLE>
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

					<a href="idrc">DOMINIO</a>
				</div>
			</div>

			<div id="nav-top">


				<div id="right-content">

						<div class="buscador-content">

							<input type="text" id="B"><label for="B"><span class="icon-search2"></span></label>
						</div>

					<a href="#">login/register</a>
					<a href="#">Country:CO</a>
				</div>

			</div>
		</header>

		<nav id="Navegacion">

			<div id="Navegacion-Content">

				<div class="all">

						<ul>	

							<li><a href="men" class="all-in">men</a></li>
							<li><a href="women.html">women</a></li>
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
											<li><a href="jackets.html">jackets & coats</a></li>
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

		<main id="FormularioAñadir"> 

            <form action="/operacionesBasicas/{{$producto->id}}" method="POST">
				@csrf
				@method('PUT')
				<p>
					<label for="nombre">Nombre </label>
					<input type="text" value="{{$producto->nombre}}" name="txtNombre">
				</p>

				<p>
					<label for="Descripcion">Descripcion </label>
					<input type="text" name="txtDescripcion">
				</p>


				<p>
					<label for="Material">Material </label>
					<input type="text" name="txtMaterial">
				</p>

				<p>
					<label for="Precio">Precio</label>
					<input type="text" name="txtPrecio">
				</p>

				

				<p>
						<label for="Tipo">Tipo</label>
	
						<select name="txtTipo">
							<option>Top</option>
							<option>Leather</option>
							<option>Demin</option>
							<option>Trousers</option>
							<option>Jeans</option>
							<option>Accesories</option>
						</select>
					</p>

				<p>
						<label for="Color">Color</label>
	
						<select name="txtColor">
							<option>white</option>
							<option>Black</option>
							<option>Gray</option>
							<option>Brown</option>
							<option>Green</option>
							<option>Red</option>
							<option>Yellow</option>
							<option>Blue</option>
						</select>
				</p>
				<p>
						<label for="Talla">Talla</label>
	
						<select name="txtTalla">
						<option>XS</option>
						<option>S</option>
						<option>M</option>
						<option>L</option>
						<option>XL</option>
						<option>XXL</option>
						</select>
				</p>


				<p>
						<label for="Marca">Marca</label>
	
						<select name="txtMarca">
							<option>Berskha</option>
							<option>Pull&Bear</option>
							<option>Stradivarius</option>
							<option>Zara</option>
							<option>H&M</option>
							<option>Forever21</option>
						</select>
					</p>
                
                <p>
                        <label for="Empresa">Empresa</label>
                        <input type="text" name="txtEmpresa">
                </p>
                <p>
                        <label for="Tienda">Tienda</label>
                        <input type="text" name="txtTienda">
                </p>


				
				<p>
					<button type="reset">Restablecer</button>
					<button type="submit" class="btn btn-primary" value="Añadir">Editar</button>
				</p>

			</form>
			
		</main> 



		<footer id="Pie">
			
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
		</footer>
	</div>
 <script src="js/main.js"></script>
</body>