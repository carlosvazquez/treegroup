<?php include("includes/header.php");?>
<?php include("includes/topnav.php");?>

<div class="bandera">
  <div class="container">
    <div class="page-header">
        <ul class="navegacion">
            <li><a href="/">Inicio</a> <span class="divider">/</span></li>
            <li><a href="#">Sector Privado</a> <span class="divider">/</span></li>
        </ul>
    </div>
  </div>
</div>
<div class="container contenido">
  <div class="row">
    <div class="span12">
      <div class="row">

<!-- LeftColumn -->
        <div class="span3">
          <div class="row">
            <?php include("includes/sidebargobernarte.php");?>
          </div>
        </div>
<!-- End LeftColumn -->


<!-- Contenido -->
        <div class="span9">
<!-- Insertar Span's desde aqui -->
    <div class="row">
        <div class="span8 informacion justificado">
            <h1>Gobernarte</h1>
            <h3>Nuestros Clientes</h3>
            <p><img src="img/logosgobernarte1.png" alt=""></p>
            <hr>
            <p><img src="img/logosgobernarte2.png" alt=""></p>
            <hr>
            <p><img src="img/logosgobernarte3.png" alt=""></p>
            <hr>
            <p><img src="img/logosgobernarte4.png" alt=""></p>
            <hr>
        </div>
        <div class="span1">
            <?php #include("includes/rightcolumn.php");?>
        </div>
    </div>
<!-- End Span's hasta aqui -->
        </div>
<!-- End Contenido Span 9 -->

      </div> <!-- End Row -->
    </div> <!-- End Span12 -->
  </div> <!-- End Row -->
</div> <!-- End Container Contenido -->


  <?php include("includes/footer.php");?>