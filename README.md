
## Un plugin de menu personnel pour Shaarli

Un plugin pour Shaarli (fork communautaire) qui ajoute un menu personalisable pour le template AlbinoMouse pour Shaarli (https://github.com/alexisju/albinomouse-template)

### Installation/configuration
Clone this repository inside your `tpl/plugins/` directory, or download the archive and unpack it there.  
The directory structure should look like:

```
└── tpl
    └── plugins
        └── am_menu
            ├── README.md
            ├── am_menu.php
            └── am_menu.html
            
```

To enable the plugin, add `'am_menu'` to your list of enabled plugins in `data/options.php` (`PLUGINS` array)
. This should look like:

```
$GLOBALS['config']['PLUGINS'] = array('qrcode', 'any_other_plugin', 'am_menu');
```
