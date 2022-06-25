<?php

    $consulta=ConsultarProducto($_GET['no']);

    function ConsultarProducto( $no_prod )
    {
        include 'conexion.php';
        $sentencia="SELECT * FROM productos WHERE no='".$no_prod."' ";
        $resultado=$conexion->query($sentencia) or die ("Error al consultar el producto".mysqli_error($conexion));
        $fila=$resultado->fetch_assoc();

        return [
            $fila['id_productos'],
            $fila['nombre'],
            $fila['descripcion'],
        ];
    }
    ?>
    <!DOCTYPE html>
    <html>
        <head>
            <title>Modificar Producto</title>
            <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body>
<body id="top">
<div class="bgded overlay padtop" style="background-image:url('images/demo/backgrounds/01.png');"> 
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <header id="header" class="hoc clear">
    <div id="logo" class="fl_left"> 
      <!-- ################################################################################################ -->
      <h1><a href="./index.php">SC-INNOVASOFT</a></h1>
      <!-- ################################################################################################ -->
    </div>
    <nav id="mainav" class="fl_right"> 
      <!-- ################################################################################################ -->
      <ul class="clear">
        <li class="active"><a href="./index.php" title="Ir a la pagina de inicio">INICIO</a></li> 
                  <li><a href="index.php" title="Cerrar sesion">Log out</a></li>
                  <a href="index.php"><img src="iconos/Door.PNG">
      </ul>
      <!-- ################################################################################################ -->
    </nav>
  </header>
  
<div class="wrapper row3">
  <main class="hoc container clear"> 
    
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="wrapper row3">
  <main class="hoc container clear">
  <section id="services">
      <div class="sectiontitle">
        <p class="nospace font-xs">Drogueria JJ</p>
        <h6 class="heading">Modificar Producto</h6>
        </article>
        </li>
        <div id="contenido">
    <div style="margin: auto; width: 800px; border-collapse: separate; border-spacing; 10px 5px;">
    <span>
    <br>
    <form action="nuevo_prod2.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
    <label>Id Producto: </label>
    <input type="text" id="id_producto" name="id_producto"><br>

    <br>
    <label>Producto: </label>
    <input type="text" id="producto" name="producto"><br>
    <br>
    <label>Fecha de vencimiento</label>
    <input type="date" id="producto" name="producto"><br>
    <br>
    <label>Imagen producto</label>
    <input type="file" id="producto" name="producto"><br>
    <br>
    <label>Descripcion: </label>
    <textarea style="border-radius: 10px;" rows="3" cols="50" name="descripcion"></textarea><br>
    
    <br>
    <button type="submit" class="btn btn-success">Guardar</button>
    


</div><br>
 <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
     <!-- ################################################################################################ -->
    <div class="one_quarter first">
      <img src="/DrogueriaJJ/images/logo.png" widht="100%" height="100%"><br>
      <br><h6 class="heading">Praesent id aliquam</h6>
      <p>Non tellus nec sapien lobortis lobortis mauris egestas massa ac cursus pellentesque leo risus convallis nulla et fringilla sapien magna sit amet magna aliquam tempus praesent sit amet neque sed lobortis nulla facilisi [<a href="#">&hellip;</a>]</p>
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fab fa-facebook"></i></a></li>
        <li><a class="faicon-google-plus" href="#"><i class="fab fa-google-plus-g"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fab fa-twitter"></i></a></li>
        <li><a class="faicon-vk" href="#"><i class="fab fa-vk"></i></a></li>
        <li><a class="fas fa-map"></li></ul></a></a></i>
              </ul>
    </div>
        <div class="one_quarter">
      <h6 class="heading">Rutrum amet sodales</h6>
      <ul class="nospace linklist">
        <li><a href="#">Nulla tincidunt magna</a></li>
        <li><a href="#">Vel iaculis mollis mi</a></li>
        <li><a href="#">Lacus tincidunt diam ac</a></li>
        <li><a href="#">Varius purus justo pretium</a></li>
        <li><a href="#">Nunc proin tortor elit</a></li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="heading">At feugiat in diam</h6>
      <p class="nospace btmspace-15">In vestibulum dolor et augue fusce neque enim scelerisque at fermentum.</p>
      <form action="#" method="post">
        <fieldset>
          <legend>Newsletter:</legend>
          <input class="btmspace-15" type="text" value="" placeholder="Name">
          <input class="btmspace-15" type="text" value="" placeholder="Email">
          <button class="btn" type="submit" value="submit">Submit</button>
        </fieldset>
      </form>
    </div>
    <div class="one_quarter last">
      <h6 class="heading">Sed imperdiet pharetra</h6>
      <ul class="nospace linklist">
        <li>
          <article>
            <h6 class="nospace font-x1"><a href="#">Massa nam nulla augue</a></h6>
            <time class="font-xs block btmspace-10" datetime="2045-04-06">Friday, 6<sup>th</sup> April 2045</time>
            <p class="nospace">Faucibus nec lacinia quis ornare a eros pellentesque in orci vitae</p>
          </article>
        </li>
        <li>
          <article>
            <h6 class="nospace font-x1"><a href="#">Velit vehicula auctor</a></h6>
            <time class="font-xs block btmspace-10" datetime="2045-04-05">Thursday, 5<sup>th</sup> April 2045</time>
            <p class="nospace">Pellentesque pulvinar vestibulum bibendum blandit lectus pretium</p>
          </article>
        </li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2022 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="https://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>