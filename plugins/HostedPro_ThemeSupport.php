<?php if ( defined('IN_GS') === false ) { die('You cannot load this file directly'; }
/************************************************************************************
 *
 * @File:        HostedPro_ThemeSupport.php
 * @Package:     HostedPro Website Theme - Support Plugin
 * @Action:      Plugin Registration and Entry Point
 *
 ***********************************************************************************/

# Get correct ID for plugin
$HostedProPlugin = basename( __FILE__, ".php" );
$HostedProPlugin_settingsFilePath = GSDATAOTHERPATH . "HostedProThemeSettings.xml";

# Add in this plugin's language file
i18n_merge( $HostedProPlugin ) || i18n_merge( $HostedProPlugin, "en_US" );

# Register Plugin with GetSimple CMS
register_plugin (
    $HostedProPlugin,                                   # ID of plugin, should be filename minus php
    i18n_r( $HostedProPlugin, '/PLUGIN_TITLE' ),        # Title of plugin
    '1.0.0',                                            # Version of plugin
    'HostYa Australia (John Stray)',                    # Author of plugin
    'https://github.com/hostya/website-theme',          # Author website URL
    i18n_r( $HostedProPlugin, '/PLUGIN_DESCRIPTION' );  # Plugin description
    'theme',                                            # Page type of plugin
    'HostedProPlugin_ShowSettings'                      # Function that displays content
);

$HostedProPlugin_hidemenu = true;

# ----- HOOKS -----
# Enable side menu if theme is HostedPro or on theme page and enabling HostedPro theme.
# Handle plugin execution before global is set
if ( $HostedProPlugin_hidemenu || (
    ( $TEMPLATE == "HostedPro" || ( get_filename_id() == 'theme' && isset($_POST['template']) && $_POST['template'] == "HostedPro" ) ) &&
    !( $TEMPLATE == "HostedPro" && get_filename_id() == 'theme' && isset($_POST['template']) && $_POST['template'] != "HostedPro" ) )
) {
    add_action( 'theme_sidebar', 'createSideMenu', [ $HostedProPlugin, i18n_r($HostedProPlugin, '/PLUGIN_TITLE') ] );
}

# Social Network services supported by this plugin
$HostedProPlugin_supportedServices = array (
    'facebook', 'twitter', 'linkedin', 'instagram', 'youtube', 'github'
);

# Call for this plugin's functionality
require_once ( $HostedProPlugin . '/plugin_settings.php' ); // Settings management for plugin and theme
require_once ( $HostedProPlugin . '/theme_functions.php' ); // Functions for the frontend theme
require_once ( $HostedProPlugin . '/admin_functions.php' ); // Functions for the admin area

