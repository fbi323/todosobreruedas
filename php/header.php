<?php  if (isset($_SESSION['email'])){ ?>
	<h4><p> <?php echo $_SESSION['email']; ?></p><a href='php/logout.php'><p>SALIR</p></a></h4>
	<?php if ($_SESSION['rol']=='admin') { ?>

<link rel="stylesheet" href="css/estilobarra.css" type="text/css" media="screen"/>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="js/prueba.js"></script>


<div class="clear"></div><br><br><br>
<div class="content">
			
			

			<ul id="sdt_menu" class="sdt_menu">
				<li>
					<a href="index.php">
					<!--<img src="img/barras1.jpg" alt=""/> Imagen del menu--> 
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">Inicio</span>
							<span class="sdt_descr">TSR</span>
						</span>
					</a>
				</li>
				<li>
					<a href="index.php">
					<!--<img src="img/barras2.jpg" alt=""/> Imagen del menu--> 
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">Insertar</span>
							<span class="sdt_descr">TSR</span>
						</span>
					</a>
					<div class="sdt_box">
							<a href="form_registro.php">Cliente o Proveedor</a>							
							<a href="form_produc.php">Insertar Productos</a>
							<a href="form_cataubica.php">Categoria o Ubicacion</a>
							
				</li>
				<li>
					<a href="index.php">
					<!--<img src="img/barras3.jpg" alt=""/> Imagen del menu--> 
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">Consultar</span>
							<span class="sdt_descr">TSR</span>
						</span>
					</a>
					<div class="sdt_box">
							<a href="Cosuta_clien.php">Consultar Cliente</a>
							<a href="Cosuta_provee.php">Consultar Proveedor</a>
							<a href="#">Consultar Producto</a>
				</li>
				<li>
					<a href="index.php">
					<!--<img src="img/barras4.jpg" alt=""/> Imagen del menu--> 
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">Agregar</span>
							<span class="sdt_descr">TSR</span>
						</span>
					</a>
					<div class="sdt_box">
							<a href="form_cataubica.php">categoria y ubicacion</a>
							<a href="backup.php">Backup</a>
							<a href="backup.php">Facturacion</a>
				</li>
				<li>
					<a href="index.php">
					<!--<img src="img/barras5.jpg" alt=""/> Imagen del menu--> 
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">Modificar</span>
							<span class="sdt_descr">TSR</span>
						</span>
					</a>
					<div class="sdt_box">
						<a href="#">Mod el Cliente</a>
						<a href="#">Mod el Proveedor</a>
						<a href="#">Mod el Producto</a>
					</div>
				</li>
			</ul>
		</div><br><br><br><br><br><br>
		<?php }  ?>
<div class="clear"></div>
<div class="main">
<div class="main1">
<div class="boxes">
		<h2>TODO SOBRE RUEDAS ZONA ADMINISTRATIVA</h2>
		<div class="repair">
		     <section>
				<ul class="lb-album">
</li>	
					
				</ul>
			</section>
    </div>
  </div>
</div>
</div>


	<div class="clear"></div>
	</div>
<?php if ($_SESSION['rol']=='provee') { ?>
	
<div class="clear"></div>
	<div class="h_main">
		<ul class="nav">
	        <li class="active">
	            <a href="index.php">       Inicio        </a></li>
	        <li><a href="form_produc.php">     Ingresar       </a></li>
	        <li><a href="Consulta_producto.php">       Consultar       </a></li>
	        <li><a href="Accesorios.php">  Modificar    </a></li>
	        <li><a href="Contacto.php">    Contacto      </a></li>
	     </ul>
	     <div class="search">
	    	<form>
	    		<input type="text" value="">
	    		<input type="submit" value="">
	    	</form>
		</div>
		
	<div class="clear"></div>
	</div>

<?php } if ($_SESSION['rol']=='cliente') { ?>

<div class="clear"></div>
	<div class="h_main">
		<ul class="nav">
	        <li class="active">
	            <a href="index.php">       Inicio        </a></li>
	        <li><a href="Llantas.php">     Llantas       </a></li>
	        <li><a href="Rines.php">       Rines         </a></li>
	        <li><a href="Accesorios.php">  Accesorios    </a></li>
	        <li><a href="Reparacion.php">  Reparacion    </a></li>
	 	    <li><a href="Ofertas.php">     Ofertas       </a></li>  
	  
	     </ul>
	     <div class="search">
	    	<form>
	    		<input type="text" value="">
	    		<input type="submit" value="">
	    	</form>
		</div>
		<?php } ?>
	<div class="clear"></div>
	</div>
	<?php } else { ?>
<div class="clear"></div>
	<div class="h_main">
		<ul class="nav">
	        <li class="active">
	            <a href="index.php">       Inicio        </a></li>
	        <li><a href="Llantas.php">     Llantas       </a></li>
	        <li><a href="Rines.php">       Rines         </a></li>
	        <li><a href="Accesorios.php">  Accesorios    </a></li>
	        <li><a href="Reparacion.php">  Reparacion    </a></li>	  
	    <!--<li><a href="Contacto.php">    Contacto      </a></li>-->
	     </ul>
	     <div class="search">
	    	<form>
	    		<input type="text" value="">
	    		<input type="submit" value="">
	    	</form>
		</div>
		<?php } ?>
	<div class="clear"></div>
	</div>
