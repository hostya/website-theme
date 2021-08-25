<?php if ( defined('IN_GS') === false ) { die('You cannot load this file directly.'); }
/**************************************************************************************
*
* @File:        header.inc.php
* @Package:     HostedPro Website Theme
* @Action:      HTML Header and Metadata
*
**************************************************************************************/
?><!DOCTYPE html><!-- HTML5 : XHTML Compatible -->
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="robots" content="index, follow" />
        
        <title><?php get_page_clean_title(); ?> &raquo; <?php get_site_name(); ?></title>
        <link rel="shortcut icon" href="favicon.ico" />
        
        <!-- Web Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
	    
        <!-- Stylesheets -->
        <link rel="stylesheet" id="bootstrap"      href="<?php get_theme_url(); ?>/assets/css/bootstrap.min.css" />
        <link rel="stylesheet" id="fontawesome"    href="<?php get_theme_url(); ?>/assets/css/font-awesome.min.css" />
        <link rel="stylesheet" id="main-style"     href="<?php get_theme_url(); ?>/assets/css/main-styles.css" />
        <!-- @TODO: Implement more color options and get selected color from theme settings plugin -->
        <link rel="stylesheet" id="theme-color"    href="<?php get_theme_url(); ?>/assets/css/colors/blue.css" />
        <link rel="stylesheet" id="custom-styles"  href="<?php get_theme_url(); ?>/assets/css/custom.css" />
      
        <!--
             @TODO: Add metadata/opengraph/twittercard support
             PHP: include('metadata.inc.php');
        -->
      
        <?php get_header(); // GetSimple Header Hook - Used by many plugins to add functionality ?>
	    
    </head>
	
    <body id="<?php get_page_slug(); ?>">
	    
        <div class="preloader">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
