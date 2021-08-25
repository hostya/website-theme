<?php if ( defined('IN_GS') === false ) { die('You cannot load this file directly'; }
/************************************************************************************
 *
 * @File:        plugin_settings.php
 * @Package:     HostedPro Website Theme - Support Plugin
 * @Action:      Manages all the settings related to the Plugin and Theme
 *
 ***********************************************************************************/

/**
 * InitSettings
 * Initialises the settings file, ensuring its available for remaining functions
 * Generally called when the plugin is run for the first time, or after update.
 *
 * @return bool - Returns true if Init was successful, false otherwise
 */
function HostedProPlugin_InitSettings () : bool
{
    return false;
}

/**
 * GetSettings
 * Reads in the settings file, returning it as an array for functions to use.
 * Should be called once and storred in a variable for use later.
 *
 * @return array - An array containing all the currently configured settings
 */
function HostedProPlugin_GetSettings () : array
{
    return array();
}

/**
 * SaveSettings
 * Takes an array of settings sent from the admin area page and saves them into
 * the settings XML file. Also used for updating (modifying) settings.
 *
 * @param array $settings - An array of settings to store or update in the file
 * @return bool - Returns true if the save was successful, false otherwise
 */
function HostedProPlugin_SaveSettings ( array $settings = array() ) : bool
{
    return false;
}

/**
 * ShowSettings
 * Function used to actually show the settings configuration page in the admin area
 *
 * @return void - This function doesn't return anything; it outputs to screen.
 */
function HostedProPlugin_ShowSettings () : void
{
    echo "Hello World!";
}
