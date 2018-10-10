<!-- NAVBAR
================================================== -->
<div class="navbar-wrapper">
  <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
  <div class="container">


    <div class="navbar">
      <div class="navbar-inner">
        <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
        <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="brand" href="/"><img src="img/logotreegroup.png" alt="" width="226" height="54"></a>
        <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
        <div class="nav-collapse collapse">
          <ul class="nav pull-right">
	
            <li <?php echo ActiveClass(""); ?>><a href="/">Inicio</a></li>
            <li <?php echo ActiveClass("nosotros"); ?>><a href="nosotros">Nosotros</a></li>
            <!-- Read about Bootstrap dropdowns at http://twitter.github.com/bootstrap/javascript.htmltestdropdowns -->

            <li class="dropdown">
              <a href="/" class="dropdown-toggle" data-toggle="dropdown">Sector Privado <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li <?php echo ActiveClass("lemontree"); ?>><a href="lemontree">Lemon Tree</a></li>
                <li class="divider"></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="test" class="dropdown-toggle" data-toggle="dropdown">Sector Gobierno <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li <?php echo ActiveClass("gobernarte"); ?>><a href="gobernarte">Gobernarte</a></li>
                <li class="divider"></li>
                <li <?php echo ActiveClass("centrosdeatencion"); ?>><a href="centrosdeatencion">Emergencias 911/066</a></li>
              </ul>
            </li>

            <li <?php echo ActiveClass("contact-centers"); ?>><a href="contact-centers">Contact Centers</a></li>
            <li <?php echo ActiveClass("contacto"); ?>><a href="contacto">Contacto</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div><!-- /.navbar-inner -->
    </div><!-- /.navbar -->

  </div> <!-- /.container -->
</div><!-- /.navbar-wrapper -->