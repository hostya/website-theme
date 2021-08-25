<?php if ( defined('IN_GS') === false ) { die('You cannot load this file directly.'); }
/***************************************************************************************************
*
* @File:        footer.inc.php
* @Package:     HostedPro Website Theme
* @Action:      Global Website Footer Area
*
*************************************************************************************************/?>

        <footer class="footer pt-100">
            <!-- @TODO: Add support for footer widgets -->
          
            <div class="footer-bottom text-center">
                Copyright <?php echo date('Y'); ?> &copy; <strong><?php get_site_name(); ?></strong><br />
                <small>Website Powered by: <a href="https://get-simple.info/" title="Link to GetSimple CMS website" target="_blank">GetSimple CMS</a> &bull;
                <a href="https://github.com/hostya/hostedpro-theme" title="Link to HostedPro theme GitHub project page" target="_blank">HostedPro Theme</a>
                made with love by <a href="https://www.hostya.com.au/" title="Link to HostYa Australia website" target="_new">HostYa Australia</a></small>
            </div>
          
        </footer>

        <!-- Back to top button -->
        <a href="#" class="back-top" title="Return to top of page"><i class="fa fa-caret-up"></i>TOP</a>

        <!-- Javascripts -->
        <script id="main-scripts"   src="<?php get_theme_url(); ?>/assets/scripts/main-scripts.js"></scripts>
        <script id="custom-scripts" src="<?php get_theme_url(); ?>/assets/scripts/custom.js"></script>

    </body>
</html>
