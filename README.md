
## Un plugin de menu personnel pour Shaarli

Un plugin pour Shaarli (fork communautaire) qui ajoute un menu personnel

### Installation/configuration
Clone this repository inside your `tpl/plugins/` directory, or download the archive and unpack it there.  
The directory structure should look like:

```
└── tpl
    └── plugins
        └── effingo_menu
            ├── README.md
            ├── effingo_menu.php
            └── effingo_menu.html
            
```

To enable the plugin, add `'effingo_menu'` to your list of enabled plugins in `data/options.php` (`PLUGINS` array)
. This should look like:

```
$GLOBALS['config']['PLUGINS'] = array('qrcode', 'any_other_plugin', 'effingo_menu');
```
