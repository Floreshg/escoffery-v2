<header>


    <nav class="navbar navbar-default navbar-fixed-top">

        <div class="container">
            <div class="row">
                <div class="color-barra container ">

                    <div class="pull-right size-barra">
                   
                          <div class="redes-sociales text-center ">
                            <a href="https://www.facebook.com/agescoffery/" target="_blank"><i class="fa fa-facebook rs"></i></a>
                        </div>

                        <div class="redes-sociales text-center ">
                            <a href="https://www.instagram.com/agescoffery/" target="_blank"><i class="fa fa-instagram rs"></i></a>
                        </div>

                        <div class="  redes-sociales text-center">
                            <a href="https://www.youtube.com/user/agenciasescoffey" target="_blank"> <i class="fa fa-youtube rs"></i></a>
                        </div>
                        <div class="form-group pull-right">
                            <form>
                                <input type="search" placeholder="Buscar">
                            </form>
                        </div> 
                    </div>

                </div>




                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
                    <div class="size-logo">
                        <a href="index.php">
            <img src="assets/images/logo_escoffery.png" alt="logo">
            </a>
                    </div>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right masyucula">
                        <li <?php if ($page=='index.php' ) { echo ' class="active"'; } ?>><a href="index.php">NOSOTROS</a></li>
                        <li <?php if ($page=='private_label.php' ) { echo ' class="active"'; } ?>><a href="private_label.php">PRIVATE LABEL</a></li>
                        <li <?php if ($page=='productos.php' ) { echo ' class="active"'; } ?>><a href="productos.php">PRODUCTOS</a></li>
                        <li <?php if ($page=='distribucion.php' ) { echo ' class="active"'; } ?>><a href="distribucion.php">DISTRIBUCIÓN</a></li>
                        <li <?php if ($page=='contactenos.php' ) { echo ' class="active"'; } ?>><a href="contactenos.php">CONTÁCTENOS</a></li>

                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </div>
    </nav>

</header>