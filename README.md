
## Un plugin de menu personnel pour Shaarli

AM Menu (Albinomouse Menu)  is a plugin designed to enhance and customize [Albinomouse template](https://github.com/alexisju/albinomouse-template)
 for [Shaarli](https://github.com/shaarli/Shaarli).

### Installation

  1. Download the latest [release](https://github.com/alexisju/am_menu) of this plugin.
  2. Put the `am_menu` folder in your Shaarli installation, in `plugins/` (don't change the name).
  3. Enable the plugin in Shaarli's plugin administration page. 
  
The directory structure should look like:

```
└── tpl
    └── plugins
        └── am_menu
            ├── README.md
            └──am_menu.php
            
```
### Configuration

You need to edit manually the file `am_menu.php` to change the itemps of the menu.

Only change these elements :

href => ' *put the desired url here* ',
class => ' *choose a class (optional)* ',
id =>  ' *choose a id (optional)* ',
title => ' *choose a title (optional)* ',
html => ' *choose a button's name* ',

If you use this plugin with [Albinomouse template for Shaari](https://github.com/alexisju/albinomouse-template) you can also add any  [Glyphicon](http://getbootstrap.com/components/#glyphicons)  into the html element (see example into `am_menu.php`). CSS and fonts are loaded with the template.

