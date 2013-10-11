
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<title>Administracion Productos</title>
	<?php
	foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
	<?php endforeach; ?>
	<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
	<?php endforeach; ?>
</head>
<body>

	<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="../ingreso/index">Mi Gestor Web 3.0</a>
          <div class="btn-group pull-right">
                <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="icon-user"></i> Usuario
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="#"><i class="icon-user"></i>Mi Perfil</a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo site_url('ingreso/logout'); ?>"><i class="icon-off"></i>Salir</a></li>
                </ul>
         </div>


          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="../ingreso/index">Panel de Control</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Soporte <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Manuales</a></li>
                  <li><a href="#">Video Tutoriales</a></li>
                  <li><a href="#">Enlaces</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Administrador</a></li>
                  <li><a href="#">Reportar Error</a></li>
                </ul>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>


	<div class="container">
		<h3>Administración de Productos</h3>
	</div>
	<?php echo $output; ?>
</body>
</html>