<?php if ( defined('IN_GS') === false ) { die('You cannot load this file directly.'); }
/**************************************************************************************
*
* @File:        navigation.inc.php
* @Package:     HostedPro Website Theme
* @Action:      Global Website Navigation
*
************************************************************************************/?>

        <header class="header fixed-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-md-3 col-4">
                        
                        <!-- Website Logo -->
                        <div class="logo">
                            <a href="<?php get_site_url(); ?>" title="Click to return to home page">
                                <picture>
                                    <source media="(prefers-color-scheme: dark)" srcset="<?php get_theme_url(); ?>/images/logo.dark.png" />
                                    <img src="<?php get_theme_url(); ?>/images/logo.png" alt="<?php get_site_name(); ?> logo" />
                                </picture>
                            </a>
                        </div>
                        
                    </div>
                    <div class="col-lg-8 col-md-6 col-4">
                        
                        <!-- Primary Website Navigation -->
                        <nav class="text-right">
                            <div class="main-menu">
                                <ul>
                                    <?php HostedProTheme_GetNavigation(); ?>
                                </ul>
                            </div>
                        </nav>
                        
                    </div>
                    <div class="col-lg-2 col-md-3 col-4 text-right">
                        
                        <!-- Call to Action button -->
                        <a href="#" class="btn header-btn" title="Click to call this Action">
                            <i class="fa fa-flag" aria-hidden="true"></i><span>Call to Action</span>
                        </a>
                        
                    </div>
                </div>
            </div>
        </header>
