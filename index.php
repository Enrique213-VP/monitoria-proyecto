<?php
    require_once("config/conexion.php");

    require_once("models/social_Media.php");
    $socialmedia = new Socialmedia();
    $smon = $socialmedia->get_socialmedia();

    require_once("models/Aprendizaje.php");
    $aprendizaje = new Aprendizaje();
    $ap = $aprendizaje->get_Aprendizaje();


    require_once("models/Noticia.php");
    $noticia_principal = new Noticia();
    $NoI = $noticia_principal -> get_Noticia_principal();


    $noticia = new Noticia();
    $Not = $noticia -> get_Noticia();
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Monitoria - BD</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets\imgs\theme\logo-co_1.webp">
    <!-- NewsBoard CSS  -->
    <link rel="stylesheet" href="assets\css\style.css">
    <link rel="stylesheet" href="assets\css\widgets.css">
    <link rel="stylesheet" href="assets\css\responsive.css">
</head>

<body>
    <div class="scroll-progress primary-bg"></div>
    <!-- Start Preloader -->
    <div class="preloader text-center">
        <div class="circle"></div>
    </div>
    <!--Offcanvas sidebar-->
    <aside id="sidebar-wrapper" class="custom-scrollbar offcanvas-sidebar">
        <button class="off-canvas-close"><i class="elegant-icon icon_close"></i></button>
        <div class="sidebar-inner">
            <!--Latest-->
            <div class="sidebar-widget widget-latest-posts mb-50">
                <div class="widget-header-2 position-relative mb-30">
                    <h5 class="mt-5 mb-30">Don't miss</h5>
                </div>
                <div class="post-block-list post-module-1 post-module-5">
                    <ul class="list-post">
                        <li class="mb-30">
                            <div class="d-flex hover-up-2 transition-normal">
                                <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                </div>
                                    <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="mb-30">
                            <div class="d-flex hover-up-2 transition-normal">
                                <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                </div>
                                <div class="post-content media-body">
                                    <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="mb-30">
                            <div class="d-flex hover-up-2 transition-normal">
                                <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            </div>
        </div>
    </aside>
    <!-- Start Header -->
    <header class="main-header header-style-1 font-heading">
        <div class="header-top">
            <div class="container">
                <div class="row pt-20 pb-20">
                    <div class="col-md-3 col-xs-6">
                        <a href="index.html"><img class="logo" src="assets\imgs\theme\logo-colaprende.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-sticky">
            <div class="container align-self-center">
                <div class="mobile_menu d-lg-none d-block"></div>
                <div class="main-nav d-none d-lg-block float-left">
                    <nav>
                        <!--Desktop menu-->
                        <ul class="main-menu d-none d-lg-inline font-small">
                        <li><a href="#">Inicio</a> </li>
                            <?php
                            for($i=0;$i<sizeof($ap);$i++){
                            ?>
                        <li><a href="<?php echo $ap[$i] ["url_in"] ?>" target = "_blank"><?php echo $ap[$i] ["nombre"] ?></a> </li>
                            <?php
                            }
                            ?>
                        </ul>
                        <!--Mobile menu-->
                        <ul id="mobile-menu" class="d-block d-lg-none text-muted">
                            <li class="menu-item-has-children">
                                <a href="#">Home</a>
                                <?php
                            for($i=0;$i<sizeof($ap);$i++){
                            ?>
                        <li><a href="<?php echo $ap[$i] ["url_in"] ?>" target = "_blank"><?php echo $ap[$i] ["nombre"] ?></a> </li>
                            <?php
                            }
                            ?>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="float-right header-tools text-muted font-small">
                    <ul class="header-social-network d-inline-block list-inline mr-15">

                        <?php
                            for($i=0;$i<sizeof($smon);$i++){
                        ?>
                        <li class="list-inline-item"><a class="social-icon <?php echo $smon[$i] ["sm_icon"] ?> text-xs-center" target="_blank" title="<?php echo $smon[$i] ["sm_nom"] ?>" href="<?php echo $smon[$i] ["sm_rutaW"] ?>"><i class="elegant-icon <?php echo $smon[$i] ["sm_icon2"] ?>"></i></a></li>
                        <?php
                            }
                        ?>
                        
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </header>

    <main>
        <div class="featured-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <p class="text-muted"><span class="typewrite d-inline" data-period="2000" data-type='[ " Monitor en Base de Datos. ", "Estudiante. ", "Desarrollador movil. " ]'></span></p>
                        <h2>Hola, Soy <span>Sergio</span></h2>
                        <h3 class="mb-20"> Bienvenidos al proyecto de monitoria.</h3>
                        <h5 class="text-muted">Aprenderemos a realizar un sitio web utilizando una base de datos y un gestor, en este caso Maria DB.</h5>
                    </div>
                    <div class="col-lg-6 text-right d-none d-lg-block">
                        <img src="assets\imgs\theme\Escudo.png" alt="" style="width: 220px; height: 220 px; border-radius: 40 px; margin-right: 120px;">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="hot-tags pt-30 pb-30 font-small align-self-center">
                <div class="widget-header-3">
                    <div class="row align-self-center">
                        <div class="col-md-4 align-self-center">
                            <h5 class="widget-title">Apoyo para estudiantes</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="loop-grid mb-30">
                <div class="row">
                    <div class="col-lg-8 mb-30">

                        <div class="carausel-post-1 hover-up border-radius-10 overflow-hidden transition-normal position-relative wow fadeInUp animated">
                            <div class="arrow-cover"></div>
                            <div class="slide-fade">
                            <?php
                            for($i=0;$i<sizeof($NoI);$i++){
                        ?>
                                <div class="position-relative post-thumb">
                                    <div class="thumb-overlay img-hover-slide position-relative" style="background-image: url(assets/imgs/news/<?php echo $NoI[$i] ["img_noti"] ?>)">
                                        <a class="img-link" href="<?php echo $NoI[$i] ["url_noti"] ?>" target="_blank"></a>
                                        <div class="post-content-overlay text-white ml-30 mr-30 pb-30">
                                            <div class="entry-meta meta-0 font-small mb-20">
                                                <?php
                                                    $et = $noticia_principal -> get_Etiqueta($NoI[$i] ["id_not"]);
                                                foreach( $et as $row ){
                                                ?>
                                                <a href="category.html"><span class="post-cat text-light text-uppercase"><?php echo $row["nomEt"] ?></span></a>
                                                <?php
                                                }
                                                ?>
                                            </div>
                                            <h3 class="post-title font-weight-900 mb-20">
                                                <a class="text-white" href="single.html"><?php echo $NoI[$i] ["titulo"] ?></a>
                                            </h3>
                                            <div class="entry-meta meta-1 font-small text-white mt-10 pr-5 pl-5">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        
                    </div>
                    <?php
                            for($i=0;$i<sizeof($Not);$i++){
                        ?>
                    <article class="col-lg-4 col-md-6 mb-30 wow fadeInUp animated" data-wow-delay="0.2s">
                        <div class="post-card-1 border-radius-10 hover-up">
                            <div class="post-thumb thumb-overlay img-hover-slide position-relative" style="background-image: url(assets/imgs/news/<?php echo $Not[$i] ["img_noti"] ?>" target ="_blank")>
                                <a class="img-link" href="<?php echo $Not[$i] ["url_noti"] ?>" target ="_blank"></a>
                                <ul class="social-share">
                                    <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                    <li><a class="fb" href="#" title="Share on Facebook" target="_blank"><i class="elegant-icon social_facebook"></i></a></li>
                                    <li><a class="tw" href="#" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                    <li><a class="pt" href="#" target="_blank" title="Pin it"><i class="elegant-icon social_pinterest"></i></a></li>
                                </ul>
                            </div>
                            <div class="post-content p-30">
                                <div class="entry-meta meta-0 font-small mb-10">
                                <?php
                                                    $et = $noticia_principal -> get_Etiqueta($Not[$i] ["id_not"]);
                                                foreach( $et as $row ){
                                                ?>
                                    <a href="<?php echo $Not[$i] ["url_noti"] ?>" target ="_blank"><span class="post-cat text-warning"><?php echo $row["nomEt"] ?></span></a>
                                    <?php
                                                }
                                                ?>
                                </div>
                                <div class="d-flex post-card-content">
                                    <h5 class="post-title mb-20 font-weight-900">
                                        <a href="<?php echo $Not[$i] ["url_noti"] ?>" target ="_blank"><?php echo $Not[$i] ["titulo"] ?></a>
                                    </h5>
                                    <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                        <span class="post-on"><?php echo $Not[$i] ["Autor"] ?></span>
                                        <span class="time-reading has-dot"><?php echo $Not[$i] ["Tema"] ?></span>
                                        <span class="post-by has-dot"><?php echo date("d-m-y", strtotime($Not[$i] ["fecha"]))  ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                        <?php
                            }
                        ?>
                </div>
            </div>
        </div>
    </main>
    <!-- End Main content -->

    <!-- Footer Start-->
    <footer class="pt-50 pb-20 bg-grey">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sidebar-widget wow fadeInUp animated mb-30 text-center">
                        <div class="textwidget">
                            <strong class="color-black">Sigueme</strong><br><br>
                            <ul class="header-social-network d-inline-block list-inline color-white mb-20">
                                <?php
                            for($i=0;$i<sizeof($smon);$i++){
                        ?>
                        <li class="list-inline-item"><a class="<?php echo $smon[$i] ["sm_icon"] ?>" href="<?php echo $smon[$i] ["sm_rutaW"] ?>" target="_blank" title="<?php echo $smon[$i] ["sm_nom"] ?>"><i class="elegant-icon <?php echo $smon[$i] ["sm_icon2"] ?>"></i></a></li>
                        <?php
                            }
                        ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copy-right pt-30 mt-20 wow fadeInUp animated">
                <p class="float-md-left font-small text-muted">© 2021, Pagina web, proyecto de monitoria </p>
                <p class="float-md-right font-small text-muted">
                    Reaizado por <a href="https://www.linkedin.com/in/sergio-vargas-pedraza-a86b24209/" target="_blank">SergioV</a> | Todos los derechos reservados.
                </p>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
    <div class="dark-mark"></div>
    <!-- Vendor JS-->
    <script src="assets\js\vendor\modernizr-3.5.0.min.js"></script>
    <script src="assets\js\vendor\jquery-1.12.4.min.js"></script>
    <script src="assets\js\vendor\popper.min.js"></script>
    <script src="assets\js\vendor\bootstrap.min.js"></script>
    <script src="assets\js\vendor\jquery.slicknav.js"></script>
    <script src="assets\js\vendor\slick.min.js"></script>
    <script src="assets\js\vendor\wow.min.js"></script>
    <script src="assets\js\vendor\jquery.ticker.js"></script>
    <script src="assets\js\vendor\jquery.vticker-min.js"></script>
    <script src="assets\js\vendor\jquery.scrollUp.min.js"></script>
    <script src="assets\js\vendor\jquery.nice-select.min.js"></script>
    <script src="assets\js\vendor\jquery.magnific-popup.js"></script>
    <script src="assets\js\vendor\jquery.sticky.js"></script>
    <script src="assets\js\vendor\perfect-scrollbar.js"></script>
    <script src="assets\js\vendor\waypoints.min.js"></script>
    <script src="assets\js\vendor\jquery.theia.sticky.js"></script>
    <!-- NewsBoard JS -->
    <script src="assets\js\main.js"></script>
</body>

</html>