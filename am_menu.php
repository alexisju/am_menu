<?php
/**
 * AlbinoMouse Menu
 *
 * Menu personalisable à utiliser avec le template AlbinoMouse pour Shaarli (https://github.com/alexisju/albinomouse-template)
 * 
 */

function hook_am_menu_render_header($data)
{
  
// Theses following buttons are always displayed
    $button = array(
        'attr' => array(
            'href' => '?',
            'class' => 'am-menu-item',
            'id' => 'am-menu-linklist',
            'title' => 'home',
        ),
        'html' => '<i class="glyphicon glyphicon-home"></i> home',
    );
    $data['buttons_toolbar'][] = $button;
        $button = array(
        'attr' => array(
            'href' => '?do=daily',
            'class' => 'am-menu-item',
            'id' => 'am-menu-daily',
            'title' => 'daily',
        ),
        'html' => '<i class="glyphicon glyphicon-calendar"></i> daily',
    );
    $data['buttons_toolbar'][] = $button;
        $button = array(
        'attr' => array(
            'href' => '?do=tagcloud',
            'class' => 'am-menu-item',
            'id' => 'am-menu-tagcloud',
            'title' => 'tag cloud',
        ),
        'html' => '<i class="glyphicon glyphicon-tags"></i> tag cloud',
    );
        $data['buttons_toolbar'][] = $button;
        $button = array(
        'attr' => array(
            'href' => '?do=picwall',
            'class' => 'am-menu-item',
            'id' => 'am-menu-picwall',
            'title' => 'picwall',
        ),
        'html' => '<i class="glyphicon glyphicon-film"></i> picwall',
    );

    
    
    $data['buttons_toolbar'][] = $button;


 // Displayed only if loggedin
 if ($data['_LOGGEDIN_'] === true) {

    $button = array(
           'attr' => array (
            'href' => '?do=tools',
            'class' => 'am-menu-item',
            'title' => 'tools',
            'id' => 'am-menu-tools',
        ),
       'html' => '<i class="glyphicon glyphicon-cog"></i> tools',
     );
    $data['buttons_toolbar'][] = $button;
        $button = array(
           'attr' => array (
            'href' => '?do=addlink',
            'class' => 'am-menu-item',
            'id' => 'am-menu-addlink',
            'title' => 'Add link',
        ),
       'html' => '<i class="glyphicon glyphicon-plus-sign"></i> add link',
     );
    $data['buttons_toolbar'][] = $button;
    }

    return $data;
}
