<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Web Design and Development Services</title>
<!-- Stylesheets -->
<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.css" rel="stylesheet">

<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/plugins/revolution/css/settings.css" rel="stylesheet" type="text/css"><!-- REVOLUTION SETTINGS STYLES -->
<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/plugins/revolution/css/layers.css" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/plugins/revolution/css/navigation.css" rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->
<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style.css" rel="stylesheet">
<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/responsive.css" rel="stylesheet">

<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/style.css" rel="stylesheet">


<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/favicon.png" type="image/x-icon">
<link rel="icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/favicon.png" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <!-- <div class="preloader"></div> -->
 	
    <!-- Main Header-->
    <header class="main-header">
    
    	<!-- Main Box -->
    	<div class="main-box">
        	<div class="auto-container">
            	<div class="outer-container clearfix">
                
                    <!--Logo Box-->
                    <div class="logo-box">
                        <div class="logo"><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.png" alt=""></a></div>
                    </div>
                    
                    <!--Nav Outer-->
                    <div class="nav-outer clearfix">
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <div class="navbar-header">
                                <!-- Toggle Button -->    	
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            
                            <div class="navbar-collapse collapse clearfix">
                                 <?php
                                        wp_nav_menu( array(
                                            'menu'              => 'primary',
                                            'theme_location'    => 'primary',
                                            'depth'             => 2,
                                            'container'         => 'div',
                                            'container_class'   => 'navbar-collapse collapse clearfix',
                                            'container_id'      => '',
                                            'menu_class'        => 'navigation clearfix',
                                            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                            'walker'            => new WP_Bootstrap_Navwalker())
                                        );
                                    ?>
                            </div>
                        </nav>
                        <!-- Main Menu End-->
                        
                    </div>
                    <!--Nav Outer End-->
                    
                    <!--Number-->
                    <div class="number">call us  +919433566387</div>
                    
            	</div>    
            </div>
        </div>
    
    </header>
    <!--End Main Header -->