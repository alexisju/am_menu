<?php
/**
 * Effingo.be menu
 *
 * Ajoute un menu personnalisé pour mon Shaarli
 * 
 */

function hook_am_menu_render_header($data)
{
    $data['buttons_toolbar'][] = file_get_contents(PluginManager::$PLUGINS_PATH . '/am_menu/am_menu.html');
    
    return $data;
}
