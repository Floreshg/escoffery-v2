<html lang="es">

<head>
    <?php
	include('plantilla/head.php');
    ?>
        <title>Contactenos - Agencias Escofery</title>
</head>

<body>
    <?php
	include('plantilla/header.php');
    ?>

        <section class="general">

            <section>

                <div class="container">
                    <div class="row">


                        <div class="distribucion-color distribucion-padding col-lg-12 col-md-12">

                            <div class="col-lg-3 col-md-3">

                            </div>

                            <div class="col-lg-3 col-md-3">
                                <div class="circle black">
                                </div>
                                <h2 class="text-white position-rela">Contáctenos</h2>



                                <!--     <img src="/assets/images/DISTRIBUCION1.png" alt="distribucion" class="img-responsive center-block">
      -->
                            </div>

                            <div class="col-lg-3 col-md-3">

                            </div>

                            <div class="col-lg-3 col-md-3">
                            </div>

                        </div>
                    </div>
                </div>
            </section>


            <section class="margin">
                <div class="container">
                    <div class="row">
                        <div class="contactenos col-lg-12">
                            <div class="col-lg-6 col-md-6 col-xs-12 margin border-radius">
                                <form action="/action_page.php">

                                    <div class="form-group">
                                        <input type="text" class="form-control" id="nombre" placeholder="*Nombre Completo">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email" placeholder="*Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="asunto" placeholder="*Asunto">
                                    </div>
                                    <div class="form-group">

                                        <textarea rows="5" cols="100%" style="resize: none" id="cn_message" class="form-control" placeholder="*Mensaje" maxlength="500" required></textarea>
                                    </div>
                                    <button type="button" class="btn btn-danger" id="enviar-contacto">Subcribirse</button>
                                </form>
                            </div>


                            <div class="col-lg-6 col-md-6 col-xs-12 margin">
                                <div>
                                    <h3>AGENCIAS ESCOFFERY, S.A.</h3>
                                    <p>Calle 84 Este, Panamá, Panama</p>
                                </div>

                                <div>
                                    <h3>Teléfono: </h3>
                                    <p>+507 302 2372</p>
                                </div>

                                <div>
                                    <h3>E-mail:</h3>
                                    <p>info@agenciasescoffery.com</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>




<!--

            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            <div class="imagenfondo">
                                <div class="opacidad">
                                    <div class="content-icono">
                                        <h3 class="text-center text-white">ÚNETE A NOSOTROS</h3>

                                        <div class=" redes">
                                            <a href="https://www.facebook.com/agescoffery/" target="_blank"><i class="fa fa-facebook "></i></a>
                                        </div>

                                        <div class=" redes">
                                            <a href="https://www.instagram.com/agescoffery/" target="_blank"> <i class="fa fa-instagram"></i></a>
                                        </div>

                                        <div class="redes">
                                            <a href="https://www.youtube.com/user/agenciasescoffey" target="_blank"> <i class="fa fa-youtube"></i></a>
                                        </div>



                                    </div>

                                    <div class="text-center">
                                        <form action="/action_page.php">

                                            <div class="form-group">
                                                <input type="email" class="form-control" id="email" placeholder="*SUSCRIBIRSE">
                                            </div>
                                            <button type="button" class="btn btn-danger" id="enviar-Suscripcion">Suscribirme</button>
                                        </form>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
-->

            <section>
                
                <div class="container">

                    <div class="row">

                        <div>

                            <div class="img-contact" style="background: url(assets/images/slider.jpg);">

                                <div class="text-contact container">
                                    <div class="margin-contact row">

                                        <div class="col-sm-4">

                                        </div>

                                        <div class="col-xs-4 col-sm-1 text-center">
                                            <a href="https://www.facebook.com/agescoffery/" target="_blank"><i class="fa fa-facebook "></i></a>
                                        </div>

                                        <div class="col-xs-4 col-sm-2  text-center">
                                            <a href="https://www.instagram.com/agescoffery/" target="_blank"> <i class="fa fa-instagram"></i></a>
                                        </div>

                                        <div class="col-xs-4 col-sm-1 text-center">
                                            <a href="https://www.youtube.com/user/agenciasescoffey" target="_blank"> <i class="fa fa-youtube"></i></a>
                                        </div>

                                        <div class="col-sm-4 ">

                                        </div>

                                        <div class=" margin ">
                                           <div class="">
                                            <div class="col-sm-8 col-sm-offset-2 col-xs-12 border-radius text-center">
                                                <form action="/action_page.php">

                                                    <div class="form-group">
                                                        <input type="email" class="form-control" id="email" placeholder="*SUSCRIBIRSE">
                                                    </div>
                                                    <button type="button" class="btn btn-danger" id="enviar-Suscripcion">Suscribirme</button>
                                                </form>
                                            </div>
                                           </div>
                                        </div>

                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>


            </section>


        </section>

<?php
	include('plantilla/footer.php');
?>

