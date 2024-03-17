<?php
if (preg_match('/index/', $url)){
	$attr_href = '#';
	$attr_title = '';
} else {
	$attr_href = './';
	$attr_title = '&larr; Inicio &mdash; Berti-Transp';
}
?>
<div id="header">

	<h1 class="brand">
		<a href="<?php echo $attr_href; ?>" title="<?php echo $attr_title; ?>">Berti-Transp &mdash; <em>Transporte integral</em></a>
	</h1>
	
	<ul class="nav">
		<li class="nav-item nav-home <?php if (preg_match('/index/', $url)){echo 'current';}?>"><a href="index.php">Inicio</a></li>
		<li class="nav-item <?php if (preg_match('/empresa/', $url)){echo 'current';}?>"><a href="empresa.php">Empresa</a></li>
		<li class="nav-item <?php if (preg_match('/flota/', $url)){echo 'current';}?>"><a href="flota.php">Flota</a>
			<ul class="nav-submenu">
				<!--<li class="nav-submenu-item"><a href="flota-camionetas.php">Camionetas</a></li>-->
				<li class="nav-submenu-item"><a href="flota-chasis.php">Chasis</a></li>
				<li class="nav-submenu-item"><a href="flota-semirremolque-playo.php">Semirremolque playo</a></li>
				<li class="nav-submenu-item"><a href="flota-semirremolque-con-baranda.php">Semirremolque con baranda</a></li>
				<!--<li class="nav-submenu-item"><a href="flota-semis-saider.php">Semis Saider</a></li>-->
				<!--<li class="nav-submenu-item"><a href="flota-furgon-seco-y-frio.php">Furgón Seco y frío</a></li>-->
				<li class="nav-submenu-item"><a href="flota-aranas-portacontenedores.php">Arañas portacontenedores</a></li>
				<li class="nav-submenu-item"><a href="flota-carretones-especiales.php">Carretones especiales</a></li>
				<li class="nav-submenu-item"><a href="flota-transporte-de-automoviles.php">Transporte de automóviles</a></li>
			</ul>
		</li>
		<li class="nav-item <?php if (preg_match('/clientes/', $url)){echo 'current';}?>"><a href="clientes.php">Clientes</a></li>
		<!--<li class="nav-item <?php if (preg_match('/novedades/', $url)){echo 'current';}?>"><a href="novedades.php">Novedades</a></li>-->
		<li class="nav-item <?php if (preg_match('/contacto/', $url)){echo 'current';}?>"><a href="contacto.php">Contacto</a></li>
	</ul><!-- /navigation -->

</div><!-- /header -->
