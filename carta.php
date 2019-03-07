       
      <?php 
    require_once('funciones/funciones.php');

?>
      
       <html>
         <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Fancy</title>

        <!-- Icon css link -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="vendors/elegant-icon/style.css" rel="stylesheet">
        <link href="vendors/themify-icon/themify-icons.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Rev slider css -->
        <link href="vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="vendors/revolution/css/navigation.css" rel="stylesheet">
        <link href="vendors/animate-css/animate.css" rel="stylesheet">

        <!-- Extra plugin css -->
        <link href="vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">

        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link rel="stylesheet" href="css/CSS.css">
    </head>
       <body style="">
       <header class="main_menu_area" style="background:black;">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#"> <p style="color:white;font-size:40px">LagerHaus</p></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"></button>
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active"><a class="nav-link" href="index.html">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="carta.php">Carta</a></li>
                        <li class="nav-item"><a  href="static.html">Promociones</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact-us.html">Locales</a></li>
                    </ul>
                    <ul class="navbar-nav justify-content-end">
                        <li><a href="#"><i class="icon_search"></i></a></li>
                        <li><a href="Login.html"><i class="icon_bag_alt"></i></a></li>
                    </ul>
                </div>
            </nav>
        </header>
       <?php 

            $cartas = mysqli_query($conexion,"SELECT * from carta") or die(mysqli_error($conexion));
            
       ?>
        <section class="latest_news_area p_100 mt-5">
            <div class="container">
                <div class="b_center_title">
                    <h2>Productos</h2>
                    <p>We Are A Creative Digital Agency. Focused on Growing Brands Online</p>
                </div>
                <div class="l_news_inner">
                    <div class="row">

                    <?php 
                        while($informacion = mysqli_fetch_array($cartas)) {

                        
                    ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="l_news_item">
                                <div class="l_news_img"><a href="#"><img class="img-fluid" src="img/blog/l-news/l-news-1.jpg" alt=""></a></div>
                                <div class="l_news_content">
                                    <a href="#"><h4 class='text-center'><?php echo $informacion['comida']; ?></h4></a>
                                    <p class='text-center'><?php echo $informacion['descripcion']; ?>.</p>
                                    <p class='text-center'><?php echo $informacion['precio']; ?>.</p>
                                    <a class="more_btn" href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>

                       
                </div>
            </div>
        </section>
             <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- Rev slider js -->
        <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <!-- Extra plugin css -->
        <script src="vendors/counterup/jquery.waypoints.min.js"></script>
        <script src="vendors/counterup/jquery.counterup.min.js"></script>
        <script src="vendors/counterup/apear.js"></script>
        <script src="vendors/counterup/countto.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/parallaxer/jquery.parallax-1.1.3.js"></script>
        <!--Tweets-->
        <script src="vendors/tweet/tweetie.min.js"></script>
        <script src="vendors/tweet/script.js"></script>

        <script src="js/theme.js"></script>
        </body>
        </html>