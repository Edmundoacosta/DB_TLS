<!DOCTYPE html>
<html>
<head>
	<title>Lista</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="contenedor_login">
	   <div class="caja_modal_login">
	       <div class="col-lg-8" id="modal_login" >
	           <form class="form-horizontal" action="ac/login-exec.php" method="post">
	               <div class="image_form_login">
	                  <img class="logo_login" id="logo" src='https://image.freepik.com/free-icon/macos-platform_318-33076.jpg' alt="">
	               </div>
	               <div class="formulario_login">
	                  <div class='form-group'>
	                     <div class="input">
	                        <div class="input-group login-form">
	                           <label for="inputEmail3" class="col-sm-12 col-xs-12 control-label control-login">Usuario</label>
	                           <div class="col-sm-12 col-xs-12">
	                              <input type="text" class="form-control" id="login" name="login" placeholder="">
	                           </div>
	                        </div>
	                     </div>
	                  </div>
	                  <div class='form-group'>
	                     <div class="input">
	                        <div class="input-group login-form">
	                           <label for="inputEmail3" class="col-sm-12 col-xs-12 control-label control-login">Contraseña</label>
	                           <div class="col-sm-12 col-xs-12">
	                              <input type="password" class="form-control" id="password" name="password" placeholder="">
	                           </div>
	                        </div>
	                     </div>
	                  </div>
	               </div>
	             <div class="form-group">
	               <div class="col-lg-12 col-sm-12" id="button_ingresar">
	                  <input value="Ingresar" name="Submit" class='btn-login btn btn-default' type="submit" />
	               </div>
	             </div>
	           </form>
	       </div>
	   </div>
	</div>
</body>
</html>
