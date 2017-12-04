AdminLTE Asset Bundle
=====================

[![Latest Stable Version](https://poser.pugx.org/dmstr/yii2-adminlte-asset/v/stable.svg)](https://packagist.org/packages/dmstr/yii2-adminlte-asset) 
[![Total Downloads](https://poser.pugx.org/dmstr/yii2-adminlte-asset/downloads.svg)](https://packagist.org/packages/dmstr/yii2-adminlte-asset)
[![License](https://poser.pugx.org/dmstr/yii2-adminlte-asset/license.svg)](https://packagist.org/packages/dmstr/yii2-adminlte-asset)


*Backend UI for Yii2 Framework, based on [AdminLTE](https://github.com/almasaeed2010/AdminLTE)*

!["Yii2 AdminLTE Presentation"](https://cloud.githubusercontent.com/assets/874234/7603896/753228ee-f943-11e4-9d42-2a31b41eb42d.jpg)

This package contains an [Asset Bundle for Yii 2.0 Framework](http://www.yiiframework.com/doc-2.0/guide-structure-assets.html) 
which registers the CSS files for the AdminLTE user-interface.

The CSS files are installed via Yii's recommended usage of the `fxp/composer-asset-plugin` v1.1.1 or later.


Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

To install AdminLTE v2 run:

```
composer require dmstr/yii2-adminlte-asset "^2.1"
```

To install AdminLTE v1 run:

```
composer require dmstr/yii2-adminlte-asset "^1"
```

FAQ
---

### Web-font usage

AdminLTE dropped web-font inclusion in `2.4.0`, so you need to include your desired font manually, ie.

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

> Inclusion via CDN is not recommended for production, please adjust this to your project's asset-bundling workflow.

For details see [#140](https://github.com/dmstr/yii2-adminlte-asset/issues/140).

### Upgrading

When upgrading please see the [AdminLTE upgrade guide](https://adminlte.io/docs/2.4/upgrade-guide) for adjustments you need to make in your views.

### Composer installation

- For issues with `DmitryBaranovskiy/eve.git`, please see [#113](https://github.com/dmstr/yii2-adminlte-asset/issues/133#issuecomment-337179853).

### Compatibility matrix

| yii2-adminlte-asset | AdminLTE |
|---|---|
| 2.4 | 2.0 - 2.3 |
| 2.5 | 2.4 |

> For other [issues](https://github.com/dmstr/yii2-adminlte-asset/issues?utf8=%E2%9C%93&q=is%3Aissue), please search GitHub first.


Quick Start
-----------

Once the extension is installed, you can have a **preview** by reconfiguring the path mappings of the view component:

For Yii 2 [Advanced Application Template](https://github.com/yiisoft/yii2-app-advanced) or [Basic Application Template](https://github.com/yiisoft/yii2-app-basic)

```php
'components' => [
    'view' => [
         'theme' => [
             'pathMap' => [
                '@app/views' => '@vendor/dmstr/yii2-adminlte-asset/example-views/yiisoft/yii2-app'
             ],
         ],
    ],
],
```


For [phd5](https://github.com/dmstr/phd5-app) application

```php
'components' => [
    'view' => [
        'theme' => [
            'pathMap' => [
                '@app/views' => '@vendor/dmstr/yii2-adminlte-asset/example-views/testing/app'
            ],
        ],
    ],
],
```

This asset bundle provides sample files for layout and view (see folder `examples/`), they are **not meant to be customized directly in the `vendor/` folder**.

Therefore it is recommended to **copy the views into your application** and adjust them to your needs.


Customization
-------------

- Copy files from `vendor/dmstr/yii2-adminlte-asset/example-views/yiisoft/yii2-app` (or other theme) to `@app/views`.
- Remove the custom `view` configuration from your application by deleting the path mappings, if you have made them before.
- Edit your views adhering to html markup `vendor/almasaeed2010/adminlte/pages`

### AdminLTE Plugins

Assets for [AdminLTE plugins](https://almsaeedstudio.com/themes/AdminLTE/documentation/index.html#plugins) are not included
in our `AdminLteAsset` but you can find these files in your vendor directory under `vendor/almasaeed2010/adminlte/plugins`.
So if you want to use any of them we recommend to create a custom bundle where you list the plugin files you need:


```php
use yii\web\AssetBundle;
class AdminLtePluginAsset extends AssetBundle
{
    public $sourcePath = '@vendor/almasaeed2010/adminlte/plugins';
    public $js = [
        'datatables/dataTables.bootstrap.min.js',
        // more plugin Js here
    ];
    public $css = [
        'datatables/dataTables.bootstrap.css',
        // more plugin CSS here
    ];
    public $depends = [
        'dmstr\web\AdminLteAsset',
    ];
}
```

As this asset depends on our `AdminLteAsset` it's the only asset you have to register, for example in
your `main.php` layout file.


### Skins

By default the extension uses blue skin for AdminLTE. You can change it in config file.

```php
'components' => [
    'assetManager' => [
        'bundles' => [
            'dmstr\web\AdminLteAsset' => [
                'skin' => 'skin-black',
            ],
        ],
    ],
],
```

And then just replace class of body `skin-blue`. You can use `AdminLteHelper::skinClass()` if you don't want to alter every view file when you change skin color. 
```html
<body class="<?= \dmstr\helpers\AdminLteHelper::skinClass() ?>">
```

**Note:** Use `AdminLteHelper::skinClass()` only if you override the skin through configuration. Otherwise you will not get the correct css class of body.

Here is the list of available skins:

```
"skin-blue",
"skin-black",
"skin-red",
"skin-yellow",
"skin-purple",
"skin-green",
"skin-blue-light",
"skin-black-light",
"skin-red-light",
"skin-yellow-light",
"skin-purple-light",
"skin-green-light"
```

#### Disabling skin file loading, when using bundled assets

    Yii::$container->set(
        AdminLteAsset::className(),
        [
            'skin' => false,
        ]
    );

If you want to use native DOM of headers AdminLTE

```html
<h1>
    About <small>static page</small>
</h1>
```

then you can follow the code:

```php
/* @var $this yii\web\View */

$this->params['breadcrumbs'][] = 'About';

$this->beginBlock('content-header'); ?>
About <small>static page</small>
<?php $this->endBlock(); ?>

<div class="site-about">
    <p> This is the About page. You may modify the following file to customize its content: </p>
    <code><?= __FILE__ ?></code>
</div>
```

### Left sidebar menu - Widget Menu

If you need to separate sections of the menu then just add the `li.header` item to `items`
```php
    'items' => [
        ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii']],
        ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug']],
        ['label' => 'MAIN NAVIGATION', 'options' => ['class' => 'header']], // here
        // ... a group items
        ['label' => '', 'options' => ['class' => 'header']],
        // ... a group items
        ['label' => '', 'options' => ['class' => 'header']],
        // ... a group items
```

To add a label for a item:

```php
'items' => [
    [
        'label' => 'Mailbox',
        'icon' => 'envelope-o',
        'url' => ['/mailbox'],
        'template'=>'<a href="{url}">{icon} {label}<span class="pull-right-container"><small class="label pull-right bg-yellow">123</small></span></a>'
    ],
]
```

By default to icons will be added prefix of [Font Awesome](http://fontawesome.io/)

### Template for Gii CRUD generator

Tell Gii about our template. The setting is made in the config file:

```php
if (YII_ENV_DEV) {    
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',      
        'allowedIPs' => ['127.0.0.1', '::1', '192.168.0.*', '192.168.178.20'],  
        'generators' => [ //here
            'crud' => [
                'class' => 'yii\gii\generators\crud\Generator',
                'templates' => [
                    'adminlte' => '@vendor/dmstr/yii2-adminlte-asset/gii/templates/crud/simple',
                ]
            ]
        ],
    ];
}
```

Testing
-------

Go to the tests folder and start the testing stack

    cd tests
    docker-compose up -d
    
Install `yii2-adminlte-asset` in the testing application

    docker-compose exec php composer install
    
Open testing URLs in your browser

    http://docker.local:20580/test
    http://docker.local:20580/test/login    


Further Information
-------------------

For AdminLTE documentation, please read https://almsaeedstudio.com/themes/AdminLTE/documentation/index.html

> Namespacing rules follow the Yii 2.0 framework structure, eg. `dmstr\web` for the Asset Bundle.
 
