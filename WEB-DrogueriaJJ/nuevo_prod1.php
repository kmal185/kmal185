<?php
    include "conexion.php";
   
?>

<!DOCTYPE html>
<html lang="es">
<head>
<title>Drogueria JJ</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">

<div class="bgded overlay padtop" style="background-image:url('images/demo/backgrounds/2.jpg');"> 
  
  <header id="header" class="hoc clear">
    <div id="logo" class="fl_left">
      <h1><strong>SC-INNOVASOFT</a></strong></h1>
          </div>
    <nav id="mainav" class="fl_right"> 
      <!-- ################################################################################################ -->
      <ul class="clear">
        <li class="active">
        <li><a class="" href="#">Contactenos</a>
        </li>
      </ul>
    </nav>
  </header>

<div id="contenido">
    <div style="margin: auto; width: 800px; border-collapse: separate; border-spacing; 10px 5px;">
    <span><br><h1> <b>Nuevo Producto</b></h1></span>
    <br>
    <form action="nuevo_prod2.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
    <label><br>Codigo de Producto: </label>
    <input type="text" id="id_producto" name="id_producto" required><br>
    <br>
    <label>Producto: </label>
    <input type="text" id="producto" name="producto" required><br>
    <br>
    <label>Fecha de vencimiento</label>
    <input type="date" id="fecha" name="fecha" required><br>
    <br>
    <label>Imagen producto</label>
    <input type="file" id="imagen" name="imagen" required><br>
    <br>
    <label>Descripcion: </label>
    <textarea style="border-radius: 10px;" rows="3" cols="50" name="descripcion" required></textarea><br>

    <br>
    <button type="submit" class="btn btn-success">Guardar</button><br>
</form>
</div>

</div>
</div>
</body>
</html>
