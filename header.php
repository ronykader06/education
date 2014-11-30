<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package education
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
   <!--[if ie]><meta http-equiv=X-UA-Compatible content="IE=Edge"><![endif]-->
    <title><?php wp_title( '|',true,'right' ) ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

<div id="page" class="hfeed site">
    <!--START OF SOCIAL AREA-->
    <section class="social-area">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="social">
                    <?php 
                        $facebook = get_option_tree('facebook','',false);                        $facebook = get_option_tree('facebook','',false);
                        $twitter = get_option_tree('twitter','',false);
                        $googleplus = get_option_tree('googleplus','',false);
                        $youtube = get_option_tree('youtube','',false);
                        $flicker = get_option_tree('flicker','',false);
                        $rss = get_option_tree('rss','',false);
                        $apple = get_option_tree('apple','',false);
                        $windows = get_option_tree('windows','',false);
                        $android = get_option_tree('android','',false);
               
                     ?>
                        <ul class="list-unstyled list-inline">
                            <li><a target="_blank" href="<?php echo $facebook; ?>"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a target="_blank" href="<?php echo $twitter; ?>"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a target="_blank" href="<?php echo $googleplus; ?>"><i class="fa fa-google-plus"></i></a>
                            </li>
                            <li><a target="_blank" href="<?php echo $youtube; ?>"><i class="fa fa-youtube-play"></i></a>
                            </li>
                            <li><a target="_blank" href="<?php echo $flicker; ?>"><i class="fa fa-flicker"></i></a>
                            </li>
                            <li><a target="_blank" href="<?php echo $rss; ?>"><i class="fa fa-rss"></i></a>
                            </li>
                            <li><a target="_blank" target="_blank" href="<?php echo $apple; ?>"><i class="fa fa-apple"></i></a>
                            </li>
                            <li><a target="_blank" href="<?php echo $windows; ?>"><i class="fa fa-windows"></i></a>
                            </li>
                            <li><a target="_blank" href="<?php echo $android; ?>"><i class="fa fa-android"></i></a>
                            </li>
                        </ul>
                    </div>

                </div>
                <!--END OF SOCIAL-->
                <div class="col-md-2 col-md-offset-7">
                    <div class="language">
                        <ul class="list-unstyled list-inline lang-list">
                            <li>
                                <img src="<?php echo IMAGES;?>/flag.png" alt="Flag">
                                <select name="country" id="language">
                                    <option selected value="english">English</option>
                                    <option value="bangla">Bangli</option>
                                    <option value="garmany">Garmany</option>
                                    <option value="frence">Frence</option>
                                </select>
                            </li>
                            <li>
                                <span>Login</span>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
            <!--END OF LANGUAGE AREA-->
        </div>
    </section>
    <!--END OF SOCIAL AREA SECTION-->

    <!--START OF HEADER SECTION-->
    <header id="masthead" class="site-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-menu">
                        <nav class="site-nav">
                   <ul class=" list-unstyled list-inline menu-list">
                                <li class="active"><a href="#">ACADEMICS</a>
                                </li>
                                <li><a href="#">ADMISSION</a>
                                </li>
                                <li><a href="#">REGISTER</a>
                                </li>
                                <li><a href="#">STYLE</a>
                                </li>
                                <li><a href="#">PAGES</a>
                                </li>
                                <li><a href="#">CURRICULAM</a>
                                </li>
                                <li><a href="#">DOWNLOADS</a>
                                </li>
                                <li><a href="#">CONTACT</a>
                                </li>
                            </ul> 
            
                          
                        </nav>
                        <div class="logo"><a href="<?php echo get_home_url(); ?>">&nbsp</a></div>
                    </div>
                    <!--End of Menu area -->
                </div>
            </div>
        </div>

    </header>
    <!--END OF HEADER SECTION-->