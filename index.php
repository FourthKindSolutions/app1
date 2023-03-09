<!DOCTYPE html>
<html>
<head>
	<title>APLICACION DEMO PHP openshift </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		body {
			background-color: black;
			color: white;
			font-family: Arial, Helvetica, sans-serif;
			text-align: center;
			padding-top: 50px;
		}
		h1 {
			font-size: 50px;
			margin-bottom: 0;
		}
		p {
			font-size: 20px;
			margin-top: 10px;
		}
	</style>
</head>
<body>
	<h1>ARCHIVO INDEX.PHP REUTILIZABLE</h1>
	<p>EL METODO DE AUTENTICACION QUE SE ESTARA UTILIZANDO ES EL SIGUIENTE OAUTh-PROXY DE OPENSHIFT,
	ESTE CONTENEDOR NO CUENTA CON UNA DIRECION ROUTEABLE EXTERNA SE ESTA UTILIZANDO UN PROXY INTERNO A NIVEL DE CLUSTER EL CUAL EMITE LA FUNCION DE EXPONER EL SERVIOCIO
	SOBRE LA RUTA PRICIPAL PARA TENER ACCESO A ESTA APP ES NECESARIO QUE EL USUARIO ESTE LOGEADO EN LA CONSOLA DE OPENSHIFT POR LO QUE PROVICIONO UN GRUPO Y 3 USUARIOS LOS CUALES
	TIENEN ACCESO RESTRINGIDO SOLO A LAS APPS DEL NAMESAPCE LLAMADO CSN EN EL CUAL SE ESTA IMPLEMENTANDO ESTA DEMO</p>
<?php
echo gethostname();
?>	
</body>
</html>
