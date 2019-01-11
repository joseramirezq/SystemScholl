<!DOCTYPE html>
<html lang="es">
<head>
	<title>Inicio</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="vistas/css/main.css">
</head>
<body>
    <?php
        require_once "./controladores/vistasControlador.php";
        $vt = new vistasControlador();
        $vistasR=$vt->obtener_vistas_controller();
        if ($vistasR == "login") :
            require_once "./vistas/contenidos/login.php";
        else:

    ?>
	<!-- SideBar -->
    <?php
    include "vistas/modules/navlateral.php";
    ?>

	<!-- Content page-->
	
		<!-- NavBar -->
        <?php
        include "vistas/modules/navbar.php";
        ?>
		<!-- Content page -->
        <?php require_once $vistasR; ?>
		
	

	<!-- Notifications area -->
  
    <?php endif ;?>
	<!--====== Scripts -->
    <?php
    include "vistas/modules/script.php";
    ?>
</body>
</html>