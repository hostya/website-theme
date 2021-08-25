<?php if ( defined('IN_GS') === false ){ die('You cannot load this file directly.'); }
/*************************************************************************************
*
* @File:        template.php
* @Package:     HostedPro Website Theme
* @Action:      Default Template
*
*************************************************************************************/


# Get this theme's settings based on what was entered within its plugin. 
# This function is in functions.php 
$HostedProTheme_settings = HostedProTheme_Settings();

# Include the header template
include('includes/header.inc.php');

# Include the primary navigation
include('includes/navigation.inc.php');
?>

        <main id="main-content">

            <!-- BREADCRUMBS - @TODO: Refacter this to use custom theme plugin -->
            <?php if ( return_custom_field('hide-bc') != 'on' ) { include('includes/breadcrumbs.inc.php'); } ?>

            <article>
                <?php get_page_content(); ?>
            </article>

        </main>

<?php # Include the footer template
include('includes/footer.inc.php');
