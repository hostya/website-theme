<?php if ( defined('IN_GS') === false ) { die('You cannot load this file directly'; }
/************************************************************************************
 *
 * @File:        admin_functions.php
 * @Package:     HostedPro Website Theme - Support Plugin
 * @Action:      Functions for the Backend and Admin area
 *
 ***********************************************************************************/

 # Admin Hook - Create new inputs on the page editor screen.
 add_action( 'edit-extras', 'HostedProPlugin_EditorCustomFields' );

 # Admin Hook - Save the values of custom fields on page save
 add_action( 'changedata-save', 'HostedProPlugin_SaveCustomFields' );


 /**
  * GetCustomFields
  * Returns a list of all the custom fields.
  * @TODO: Determin if this is actually needed.
  *
  * @return array - An array listing all custom fields
  */
function HostedProPlugin_GetCustomFields () : array
{
    return array();
}

/**
 * EditorCustomFields
 * Called by the `edit-extras` hook to include the input fields on the page editor
 *
 * @return void - Returns nothing; outputs directly to screen
 */
function HostedProPlugin_EditorCustomFields () : void
{
    echo "<input type=\"text\" name=\"custom-field\" value=\"\" placeholder=\"\" />";
}

/**
 * SaveCustomFields
 * Saves the custom field values when a page is saved or updated. Called via the
 * `changedata-save` plugin hook.
 *
 * @return void - Nothing is returned by this functon
 */
function HostedProPlugin_SaveCustomFields () : void
{
    GLOBAL $xml; // `$xml` contains the content of the page. We will add our elements to it.
}
 
