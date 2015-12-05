<?php
/**
 * Effingo.be menu
 *
 * Ajoute un menu personnalisé pour mon Shaarli
 * 
 */

function hook_effingo_menu_render_header($data)
{
    $data['buttons_toolbar'][] = file_get_contents(PluginManager::$PLUGINS_PATH . '/effingo_menu/effingo_menu.html');
    
    return $data;
}
