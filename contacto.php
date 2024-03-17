<?php include_once 'scripts.php'; ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Berti-Transp &ndash; Contacto y consultas</title>

<?php include_once 'head.php'; ?>

</head>
<body id="container">
	
	<?php include_once 'header.php'; ?>

	<div id="center" class="col-misc-2">
	<div class="section">
		
		<h2 class="title">Contacto</h2>
		
		<div class="col-1of3 col-misc-1">
		
		
		<p><strong>Dirección</strong><br>
		Amoroso 702, Esq. Luzuriaga,<br>
		Hurlingham (1686), Buenos Aires, Argentina.</p>
		<p><strong>Teléfono</strong><br>
		(011) 5435-0445</p>
		<p><strong>Fax</strong><br>
		(011) 5435-4369</p>
		<p><strong>Email</strong><br>
		<a href="mailto:info@bertitransp.com.ar">info@bertitransp.com.ar</a></p>
		</div><!-- /col -->
		
		<div class="col-2of3 col-misc-1">
		<?php
		error_reporting(E_ALL ^ E_NOTICE);
		if ( $_POST['submit'] ) {
			// Formato
			$mailheaders = 'MIME-Version: 1.0' . "\r\n";
			$mailheaders.= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			//
			$Nombre		= utf8_decode($_POST['Nombre']);
			$Email		= $_POST['Email'];
			$Telefono	= utf8_decode($_POST['Telefono']);
			$Mensaje	= utf8_decode($_POST['Mensaje']);
			$Mensaje	= htmlspecialchars ($Mensaje);
			//
			$msg = '<html><body>';
			$msg.= '<p style="color:#236229;"><strong style="font-size:120%;">BERTI-TRANSP</strong><br>';
			$msg.= 'Completaron el <strong>formulario de contacto</strong> en el sitio web.</em></p>';
			$msg.= '<table>';
			$msg.= '<tr><td valign="top" style="color:#888;" width="85">Nombre</td><td>' . $Nombre . '</td></tr>';
			$msg.= '<tr><td valign="top" style="color:#888;">Email</td><td>' . $Email . '</td></tr>';
			$msg.= '<tr><td valign="top" style="color:#888;">Tel&eacute;fono</td><td>' . $Telefono . '</td></tr>';
			$msg.= '<tr><td valign="top" style="color:#888;">Mensaje</td><td>' . nl2br ($Mensaje) . '</td></tr>';
			$msg.= '<tr><td>&nbsp;</td><td><span style="color:#CCC;font-size:40px;">&mdash;</span></td></tr>';
			$msg.= '</table>';
			$msg.= '</body></html>';
			// Destinatario
			$recipient = 'info@bertitransp.com.ar';
			// Asunto
			$subject = 'BERTI-TRANSP - Contacto desde la web';
			//
			$mailheaders.= 'From: ' . $Nombre . ' <' . $Email . '>' . "\r\n";
			//$mailheaders.= 'Cc: info@bertitransp.com.ar' . "\r\n";
			//$mailheaders.= 'Bcc: info@bertitransp.com.ar' . "\r\n";
			
			if ( @mail($recipient, $subject, $msg, $mailheaders) ) {
		?>
				<h3>Enviado.</h3>
				<p>Su mensaje fue enviado correctamente, pronto le responderemos.<br>
				Gracias por comunicarse con nosotros.</p>
		<?php
			} else {
		?>
				<h3>No se enviaron sus datos</h3>
				<p>Ocurrió un error al intentar enviar la información.<br>
				Por favor <a onClick="javascript:history.back(1);" style="cursor:pointer;"><strong>haga clic aquí</strong></a> para intentarlo nuevamente.</p>
		<?php
			}
		} else {
		?>
		
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" name="form_contacto" id="form_contacto" onsubmit="return check_form(this)">
		<fieldset>
		
		<legend>Formulario de contacto</legend>
		
		<p><label>Nombre y Apellido <em>Requerido</em><br>
		<input name="Nombre" id="Nombre" type="text"></label></p>
		
		<p><label>Dirección de email <em>Requerido</em><br>
		<input name="Email" id="Email" type="email"></label></p>
		
		<p><label>Número de teléfono<br>
		<input name="Telefono" id="Telefono" type="text"></label></p>
		
		<p><label>Comentario / Mensaje <em>Requerido</em><br>
		<textarea name="Mensaje" id="Mensaje" cols="40" rows="3"></textarea></label></p>
		
		<p><input type="submit" id="submit" name="submit" value="Enviar" class="btn-submit"> <input type="reset" value="Borrar" class="btn-clear"></p>
		
		</fieldset>
		</form>
		
		<?php
		}
		?>
		</div><!-- /col -->
		
	</div><!-- /section -->
	</div><!-- /center -->

	<?php include_once 'footer.php'; ?>
	
</body>
</html>