<?php
    session_start();
    ob_start();
    include('../config.php');
?>
<!doctype html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Language" content="en">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Login - ArchitectUI HTML Bootstrap 4 Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
        <meta name="description" content="ArchitectUI HTML Bootstrap 4 Dashboard Template">
        <!-- Disable tap highlight on IE -->
        <meta name="msapplication-tap-highlight" content="no">
        <link rel="stylesheet" href="<?php echo INCLUDE_PATH_ADMIN; ?>vendors/@fortawesome/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="<?php echo INCLUDE_PATH_ADMIN; ?>vendors/ionicons-npm/css/ionicons.css">
        <link rel="stylesheet" href="<?php echo INCLUDE_PATH_ADMIN; ?>vendors/linearicons-master/dist/web-font/style.css">
        <link rel="stylesheet" href="<?php echo INCLUDE_PATH_ADMIN; ?>vendors/pixeden-stroke-7-icon-master/pe-icon-7-stroke/dist/pe-icon-7-stroke.css">
        <link href="<?php echo INCLUDE_PATH_ADMIN; ?>styles/css/base.css" rel="stylesheet">
    </head>
    <body>
        <div class="app-container app-theme-white body-tabs-shadow">
            <div class="app-container">
                <div class="h-100">
                    <div class="h-100 no-gutters row">
                        <div class="d-none d-lg-block col-lg-4">
                            <div class="slider-light">
                                <div class="slick-slider">
                                    <div>
                                        <div class="position-relative h-100 d-flex justify-content-center align-items-center bg-plum-plate" tabindex="-1">
                                            <div class="slide-img-bg" style="background-image: url('<?php echo INCLUDE_PATH_ADMIN; ?>images/originals/city.jpg');"></div>
                                            <div class="slider-content">
                                                <h3>Perfect Balance</h3>
                                                <p>
                                                    ArchitectUI is like a dream. Some think it's too good to be true! Extensive
                                                    collection of unified React Boostrap Components and Elements.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="position-relative h-100 d-flex justify-content-center align-items-center bg-premium-dark" tabindex="-1">
                                            <div class="slide-img-bg" style="background-image: url('<?php echo INCLUDE_PATH_ADMIN; ?>images/originals/citynights.jpg');"></div>
                                            <div class="slider-content">
                                                <h3>Scalable, Modular, Consistent</h3>
                                                <p>
                                                    Easily exclude the components you don't require. Lightweight, consistent
                                                    Bootstrap based styles across all elements and components
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="position-relative h-100 d-flex justify-content-center align-items-center bg-sunny-morning" tabindex="-1">
                                            <div class="slide-img-bg" style="background-image: url('<?php echo INCLUDE_PATH_ADMIN; ?>images/originals/citydark.jpg');"></div>
                                            <div class="slider-content">
                                                <h3>Complex, but lightweight</h3>
                                                <p>We've included a lot of components that cover almost all use cases for any type of application.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="h-100 d-flex bg-white justify-content-center align-items-center col-md-12 col-lg-8">
                            <div class="mx-auto app-login-box col-sm-12 col-md-10 col-lg-9">
                                <div class="app-logo"></div>
                                <h4 class="mb-0">
                                    <span class="d-block">Bem vindo de volta,</span>
                                    <span>Por favor entre em sua conta.</span>
                                </h4>
                                <br>
                                <p class="text-danger">
                                    <?php
                                        if(isset($_SESSION['msg'])){
                                            echo $_SESSION['msg'];
                                            unset($_SESSION['msg']);
                                            echo "<br>";
                                        }
                                    ?>
                                </p>
                                <p class="text-success">
                                    <?php
                                        if(isset($_SESSION['msgcad'])){
                                            echo $_SESSION['msgcad'];
                                            unset($_SESSION['msgcad']);
                                            echo "<br>";
                                        }
                                    ?>
                                </p>
                                <div class="divider row"></div>
                                <div>
                                    <form action="<?php echo INCLUDE_PATH_ADMIN; ?>back-end/login.php" method="post">
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="position-relative form-group">
                                                    <label for="exampleEmail" class="">E-mail</label>
                                                    <input name="email" id="exampleEmail"
                                                        placeholder="Seu e-mail..." type="email" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="position-relative form-group">
                                                    <label for="examplePassword" class="">Senha</label>
                                                    <input name="password" id="examplePassword"
                                                        placeholder="Sua senha..." type="password" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="divider row"></div>
                                        <div class="d-flex align-items-center">
                                            <div class="ml-auto">
                                                <button class="btn btn-primary btn-lg" name="btnLogin">Entrar no Painel</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- plugin dependencies -->
        <script type="text/javascript" src="<?php echo INCLUDE_PATH_ADMIN; ?>vendors/jquery/dist/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo INCLUDE_PATH_ADMIN; ?>vendors/slick-carousel/slick/slick.min.js"></script>
        <!-- custome.js -->
        <script type="text/javascript" src="<?php echo INCLUDE_PATH_ADMIN; ?>js/carousel-slider.js"></script>
    </body>
</html>
