
<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Admin 3.0</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="<?php echo base_url().'css';?>/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url().'css';?>/bootstrap-responsive.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url().'css';?>/bootstrap-custom.css" rel="stylesheet" type="text/css">
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
    
	<div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand"><img src="<?php echo base_url().'img';?>/logo.png" alt="Bienvenido" border="0"></a>
        </div>
      </div>
    </div>


 <div class="container">
        <div id="login-wraper">

			<?php if(@$error_login): ?>
			<div  id="message-box">
				<div class="alert alert-sucess">
					<a href="#" data-dismiss="alert" class="close"> x </a>
					Error en el usuario o contrase&ntilde;a.
				</div>
			</div>
			<?php endif; ?>
			<?php echo @validation_errors(); ?>


			<form class="form login-form" name="frmlogin"  method="post" >
			<legend>Ingreso a <span class="blue">Mi Gestor Web</span></legend>
			<div class="body">
				<label>Usuario:</label>
				<input type="text" name="username" class="input-block-level" placeholder="Ingrese su ID de Usuario" value="<?php echo @$_POST['username']; ?>"/><br />

				<label>Contraseña:</label>
				<input type="password" name="password" class="input-block-level" placeholder="Ingrese su contraseña" value="<?php echo @$_POST['password']; ?>" /><br />
			</div>

			<div class="footer">
			<label class="checkbox inline">
			<input type="checkbox" id="inlineCheckbox1" value="option1"> Recordarme
			</label>

			<button type="submit" class="btn btn-large btn-primary">Ingresar</button>
			</div>
			</form>
     </div>
    </div>


<footer class="white navbar-fixed-bottom">
Olvidaste tu contraseña? 
<a href="#" class="btn btn-success">Recordar</a>
</footer>

<script src="<?php echo base_url().'js';?>/jquery.js"></script>
<script src="<?php echo base_url().'js';?>/bootstrap.js"></script>
<script src="<?php echo base_url().'js';?>/backstretch.min.js"></script>
<script src="<?php echo base_url().'js';?>/typica-login.js"></script>

</body>
</html>