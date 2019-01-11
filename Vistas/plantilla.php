<!DOCTYPE html>
<html lang="es">
<head>
	<title>Inicio</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="vistas/css/main.css">
</head>
<body>
	<!-- SideBar -->
    <?php
    include "vistas/modules/navlateral.php";
    ?>

	<!-- Content page-->
	<section class="full-box dashboard-contentPage">
		<!-- NavBar -->
        <?php
        include "vistas/modules/navbar.php";
        ?>
		<!-- Content page -->
		
	</section>

	<!-- Notifications area -->
    <?php
        include "vistas/modules/notifi.php";
    ?>
	<!-- Dialog help -->
    <?php
        include "vistas/modules/dialog.php";
    ?>
	<!--====== Scripts -->
    <?php
        include "vistas/modules/script.php";
    ?>
</body>
</html>