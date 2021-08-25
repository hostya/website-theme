<?php if ( defined('IN_GS') === false ){ die('you cannot load this file directly.'); }
/****************************************************
*
* @File: 	    functions.php
* @Package:		GetSimple CMS
* @Action:		HostYa theme for GetSimple CMS
*
*****************************************************/

function HostedProTheme_GetNavigation( bool $echo = true ) : string
{
    //@TODO: Refactor this so that it doesn't rely specifically on the i18n plugin  
    $menu_data = return_i18n_menu_data( get_page_slug(false), 0, 99, I18N_SHOW_MENU );
    $nav_list = '';
    
    foreach ( $menu_data as $menu_item )
    {
        # List element
        $item_active = $menu_item['currentpath'] ? ' class="active"' : '';
        $nav_list .= '<li' . $item_active . '>';
        
        # Nav-link element
        $item_title = empty($menu_item['menu']) ? $menu_item['title'] : $menu_item['menu'];
        $item_dropdown = $menu_item['haschildren'] ? ' <i class="fa fa-caret-down"></i>' : '';
        $nav_list .= '<a href="#">' . $item_title . $item_dropdown . '</a>';
        
        # Dropdown Menu Element
        if ( $menu_item['haschildren'] )
        {
            $nav_list .= '<ul class="sub-menu">';
            // NOTE: Coerce 'children' to array to allow for a menu item that has all its chilren set to private.
            foreach ( (array) $menu_item['children'] as $item_child )
            {
                $child_active = $item_child['current'] ? ' class="active"' : '';
                $child_title = empty($item_child['menu']) ? $item_child['title'] : $item_child['menu'];
                $nav_list .= '<li' . $child_active . '><a href="index.php?id=' . $item_child['url'] . '">' . $child_title . '</a>';
            }
            $nav_list .= '</ul>';
        }
        
        # Close the List element
        $nav_list .= '</li>';
    }
    
    if ( $echo ) { echo $nav_list; }
    return $nav_list;
}

function HostedProTheme_GetSettings() : array
{
    //@TODO: Buid this function so that it pulls settings from the custom plugin
    return array();
}
