
<html>

    <head>
    <meta charset="utf-8">
    <title>Admin 2.0</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="<?php echo base_url().'css';?>/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url().'css';?>/bootstrap-responsive.css" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
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
          <a class="brand" href="./principal.php">Mi Gestor Web 3.0</a>
          <div class="btn-group pull-right">
                <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="icon-user"></i> <?php echo $this->user->username; ?>
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
              <li><a href="#">Panel de Control</a></li>
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

<br><br><br>

<div class="container">
  <ul class="breadcrumb">
  <li class="active">Ruta: <span class="divider">/</span></li>
  <li><a href="#">Panel Principal</a> <span class="divider">/</span></li>
  <li><a href="#">Mis Módulos</a> <span class="divider">/</span></li>
</ul>


<ul class="thumbnails">

  <li class="span1.5" style="background:#F7F7F7; text-decoration: none;">
    	<a href="#" class="thumbnail"><img data-src="holder.js/160x120" 
    	src="<?php echo base_url().'img';?>/inicio.png" alt="" style="width:100px; height:100px;"> 
    	<center><h5>Mi Web</h5></center></a>
  </li>

  <li class="span1.5" style="background:#F7F7F7">
    	<a href="../trabajadores/administracion" class="thumbnail">
    	<img src="<?php echo base_url().'img';?>/socios.png" alt="" style="width:100px; height:100px;">
    	<center><h5>Trabajadores</h5></center></a>
  </li>

  <li class="span1.5" style="background:#F7F7F7">
    	<a href="../productos/administracion" class="thumbnail">
    	<img src="<?php echo base_url().'img';?>/instituciones.png" alt="" style="width:100px; height:100px;">
    	<center><h5>Productos</h5></center></a>
  </li>

  <li class="span1.5" style="background:#F7F7F7">
    <a href="../noticias/administracion" class="thumbnail">
    	<img src="<?php echo base_url().'img';?>/noticias.png" alt="" style="width:100px; height:100px;">
    	<center><h5>Noticias</h5></center></a>
  </li>

  <li class="span1.5" style="background:#F7F7F7">
    <a href="<?php echo site_url('ingreso/logout'); ?>" class="thumbnail">
    	<img src="<?php echo base_url().'img';?>/salir.png" alt="" style="width:100px; height:100px;">
    	<center><h5>Salir</h5></center></a>
  </li>
</ul>

<hr>
 <footer>
<div class="container">
        <p class="muted credit">&copy; Gestor de Contenidos Web 3.0 - Realizado por <a href="http://www.twitter.com/cocotopia" target="_blank">@cocotopia.</a></p>
        <br>
</div>
</footer>
</div>
<script src="<?php echo base_url().'js';?>/jquery.js"></script>
<script src="<?php echo base_url().'js';?>/bootstrap.js"></script>

</body>

</html>