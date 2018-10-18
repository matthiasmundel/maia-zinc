<?php $farbe1 = substr(uniqid(),-6);$farbe2 = substr(uniqid(),-6);?>
<!doctype html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html <?php language_attributes(); ?> class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">


    <?php wp_head(); ?>

    <style type="text/css">
        .navbar-brand {
            background-color: #<?php echo $farbe1 ?>;
            color: #fff;
        }

        .nav>li>a,
        .nav>li>a:focus,
        .nav>li>a:hover {
            color: #<?php echo $farbe2 ?>;
            background-color: transparent;
        }

        .nav>li>a:focus,
        .nav>li>a:hover {
            font-weight: 600
        }

        .mzadress,
        .mzadress a {
            color: #<?php echo $farbe2 ?>;
        }

        .navbar-toggle .icon-bar {
            background-color: #<?php echo $farbe2 ?>;
        }

        .more-link {
            color: #<?php echo $farbe2 ?>;

        }

    </style>

</head>

<body>



    <div class="container mzcontainer mznavcontainer">
        <div class="row">
            <div class="col-md-12 mznavbar">
                <nav class="navbar" role="navigation">

                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        <a class="navbar-brand" href="<?php echo home_url(); ?>">
                            <?php bloginfo('name'); ?>
                        </a>
                    </div>

                    <?php
wp_nav_menu( array(
'menu'=> 'header-menu',
'theme_location'=> 'header-menu',
'depth' => 2,
'container' => 'div',
'container_class' => 'collapse navbar-collapse',
'container_id'=> 'bs-example-navbar-collapse-1',
'menu_class'=> 'nav navbar-nav',
'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
'walker'=> new wp_bootstrap_navwalker())
);
?>
                </nav>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p>
                    <?php
if ( function_exists('yoast_breadcrumb') ) {
yoast_breadcrumb('
<p id="breadcrumbs">','</p>
');
}
?>
                </p>

            </div>
        </div>
    </div>
