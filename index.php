
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]--><head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Floran Pagliai</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--main style-->
<link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
<!--background slider style-->
<link rel="stylesheet" type="text/css" href="css/slideshow.css" />
<!--google font style-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,600,700,800,300' rel='stylesheet' type='text/css'>
<!--font-family: 'Open Sans', sans-serif;-->
<!-- font css style-->
<link rel="stylesheet" href="css/font-awesome.css">
<!--for slider style-->

<noscript>
    <link rel="stylesheet" type="text/css" href="css/fallback.css" />
</noscript>
<!--[if lt IE 9]>
<link rel="stylesheet" type="text/css" href="css/fallback.css" />
<![endif]-->
</head>
<body>
    <!--wrapper start-->
    <div class="wrapper" id="wrapper">
        <?php include('header.php'); ?>
        <?php include('aboutme.php'); ?>
        <?php include('technical.php'); ?>
        <?php include('experience.php'); ?>
        <?php include('education.php'); ?>
        <?php include('portofolio.php'); ?>
        <?php include('tumblr.php'); ?>
        <?php include('contact.php'); ?>
        <!--footer start-->
        <section class="footer" id="footer">
            <div class="container">
                <ul>
                    <li><a href="mailto:floran.pagliai@gmail.com"><i class="fa fa-envelope-o fa-2x"></i></a></li>
                    <li><a href="https://twitter.com/floranpagliai" target="_blank"><i class="fa fa-twitter fa-2x"></i></a></li>
                    <li><a href="https://fr.linkedin.com/in/floran-pagliai-97924858" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a></li>
                    <li><a href="http://blog.floranpagliai.fr/" target="_blank"><i class="fa fa-tumblr fa-2x"></i></a></li>
                    <li><a href="https://github.com/shked0wn" target="_blank"><i class="fa fa-github fa-2x"></i></a></li>
                </ul>
            </div>
        </section>
        <!--footer end-->
    </div>
    <!--wrapper end-->
    <!--modernizr js-->
    <script type="text/javascript" src="js/modernizr.custom.26633.js"></script>
    <!--jquary min js-->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/jquery.gridrotator.js"></script>
    <!--for custom jquary-->
    <script src="js/custom.js"></script>
    <!--for placeholder jquary-->
    <script type="text/javascript" src="js/jquery.placeholder.js"></script>
    <!--for menu jquary-->
    <script type="text/javascript" src="js/stickUp.js"></script>
    <script type="text/javascript">
        jQuery(function($) {
            $(document).ready( function() {
                //enabling stickUp on the '.navbar-wrapper' class
                $('.navbar-wrapper').stickUp({
                    parts: {
                        0: 'aboutme',
                        1: 'technical',
                        2: 'exprience',
                        3: 'education',
                        4: 'protfolio',
                        5: 'tumblr',
                        6: 'contact'
                    },
                    itemClass: 'menuItem',
                    itemHover: 'active',
                    topMargin: 'auto'
                });
            });

            $( ".navbar.navbar-inverse.navbar-static-top a" ).click(function() {
                $( ".navbar-collapse" ).addClass( "hideClass" );
            });


            $( ".navbar.navbar-inverse.navbar-static-top a" ).click(function() {
                $( ".navbar-collapse" ).addClass( "collapse" );
            });


            $( ".navbar.navbar-inverse.navbar-static-top a" ).click(function() {
                $( ".navbar-collapse" ).removeClass( "in" );
            });

            $( ".navbar-toggle" ).click(function() {
                $( ".navbar-collapse" ).removeClass( "hideClass" );
            });


        });
    </script>
    <!--for portfoli filter jquary-->
    <script src="js/jquery.isotope.js" type="text/javascript"></script>
    <!--for portfoli lightbox -->
    <link type="text/css" rel="stylesheet" id="theme" href="css/jquery-ui-1.8.16.custom.css">
    <link type="text/css" rel="stylesheet" href="css/lightbox.min.css">
    <script type="text/javascript" src="js/jquery.ui.widget.min.js"></script>
    <script type="text/javascript" src="js/jquery.ui.rlightbox.js"></script>
    <!--for skill chat jquary-->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.easypiechart.js"></script>
    <!--contact form js-->
    <script type="text/javascript" src="js/jquery.contact.js"></script>
</body>
</html>
