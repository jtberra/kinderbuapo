<!DOCTYPE html>
<html>

  <head>


    <title>indexKinderBuapo</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https:77maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <style>
      .container{margin-top:100px}
      body {
      width: 1340px;
      padding: 100px;
      border: 5px;
      margin: 1.0;
          }
    </style>


    <!-- LOGO -->
    <div align="center"><img src="imagenes\logo.png"
    width="600"
    height="600">
    </div>
<!-- FIN LOGO -->
  </head>
  <body>

<br></br>
<br></br>
<br></br>
<br></br>
<h3 align = "center">Consulte la información del alumno</h3>
  <p>Ahora puede hacer una revisar las calificaciones en las clases en que se encuentra inscrito el alumno, 
    así como su retroalimentación por parte de los profesores y los pagos pendientes.</p>
  <br></br>
  <p align = "center">Registrese o ingrese en caso de contar con una cuenta para consultar del alumno
    y pagar la inscripción o colegiaturas, para proceder, da click en la siguiente imágen:</p>

   <!-- prueba imagen -->
  <a title="Pagar colegiatura" href="">
  <center>
  <img src="imagenes\folder.png"
    width="200"
    height="200">
    </center>
    </a>
 <!-- fin prueba imagen -->


	    <div class="container">
      <form class="form-horizontal" action="interfaz.php" method="post">
        <div class="form-group">
		 <h4><label class="col-sm-2 control-label">Registrate</label></h4> <p>
		</div>
		<div class="form-group">

    <div class="form-group">
          <label for="tb_id" class="col-sm-2 control-label">Usuario</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="id" id="tb_id" placeholder="Usuario" required>
          </div>
        </div>


          <label for="tb_nombre" class="col-sm-2 control-label">Nombre</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="nombre" id="tb_nombre" placeholder="Nombre" required>
          </div>
        </div>


		<div class="form-group">
          <label for="tb_apellido" class="col-sm-2 control-label">Apellido</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="apellido" id="tb_apellido" placeholder="Apellido" required>
          </div>
        </div>


        <div class="form-group">
          <label for="tb_password" class="col-sm-2 control-label">Contraseña</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" name="contrasenia" id="tb_contrasenia" placeholder="Contraseña" required>
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
		    <input type='hidden' name='insertar' value='insertar'>
			<button type="submit" class="btn btn-default">Registrarse</button>
          </div>
        </div>

      </form>
    </div>


    <div class="container">
      <form class="form-horizontal" action="interfaz.php" method="post">
        <div class="form-group">
        <h6><label class="col-sm-0 control-label">¿Ya eres usuario?</label></h6> <p>
		 <h4><label class="col-sm-2 control-label">Ingresar</label></h4> <p>
		</div>

    <div class="form-group">
          <label for="tb_id" class="col-sm-2 control-label">Usuario</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="id" id="tb_id" placeholder="Usuario" required>
          </div>
        </div>


        <div class="form-group">
          <label for="tb_password" class="col-sm-2 control-label">Contraseña</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" name="contrasenia" id="tb_contrasenia" placeholder="Contraseña" required>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
		   <input type='hidden' name='ingresar' value='ingresar'>
            <button type="submit" class="btn btn-default">Ingresar</button>
          </div>
        </div>
      </form>
    </div>

<footer>
<h3 align = "center">Instrucciones</h3>
<p>Para ingresar como SECRETARIO ingrese usuario rol 1 y su contraseña secre</p>
<p>Para ingresar como PROFESOR ingrese usuario rol 2 y su contraseña profe</p>

<br></br>
</footer>
  </body>
</html>
