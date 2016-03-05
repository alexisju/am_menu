<?php
/**
 * AlbinoMouse Menu
 *
 * Menu personalisable à utiliser avec le template AlbinoMouse pour Shaarli (https://github.com/alexisju/albinomouse-template)
 * 
 */

function hook_am_menu_render_header($data)
{
    $data['buttons_toolbar'][] = file_get_contents(PluginManager::$PLUGINS_PATH . '/am_menu/am_menu.html');
    
    return $data;
}
