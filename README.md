AdminLTE Asset Bundle
=====================

*Backend UI for Yii2 Framework, based on [AdminLTE](https://github.com/almasaeed2010/AdminLTE)*

This package contains an [Asset Bundle for Yii 2.0 Framework](http://www.yiiframework.com/doc-2.0/guide-structure-assets.html) 
which registers the CSS files for the AdminLTE user-interface.

The CSS files are installed via Yii's recommended usage of the `fxp/composer-asset-plugin`.


Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

To install AdminLTE v1 run:

```
php composer.phar require dmstr/yii2-adminlte-asset "1.*"
```

To install AdminLTE v2 run: **NOTE: NOT READY YET, BUT UNDER DEVELOPMENT!**

> Preview for v2 available in `example-views/phundament/app` 

```
php composer.phar require dmstr/yii2-adminlte-asset "2.*@dev"
```


Quick Start
-----------

Once the extension is installed, you can have a *preview* by reconfiguring the path mappings of the view component:

For [Yii 2 Advanced Application Template](https://github.com/yiisoft/yii2-app-advanced)

```php
'components' => [
    'view' => [
         'theme' => [
             'pathMap' => [
                '@app/views' => '@vendor/dmstr/yii2-adminlte-asset/example-views/yiisoft/yii2-advanced-app'
             ],
         ],
    ],
],    
     ]
```

For [Yii 2 Basic Application Template](https://github.com/yiisoft/yii2-app-basic)

```php
'components' => [
    'view' => [
         'theme' => [
             'pathMap' => [
                '@app/views' => '@vendor/dmstr/yii2-adminlte-asset/example-views/yiisoft/yii2-basic-app'
             ],
         ],
    ],
],
     ]
```


For [Phundament 4](https://github.com/phundament/app)

```php
'components' => [
    'view' => [
        'theme' => [
            'pathMap' => [
                '@app/views' => '@vendor/dmstr/yii2-adminlte-asset/example-views/phundament/app'
            ],
        ],
    ],
],
```

This asset bundle provides sample files for layout and view (see folder `examples/`), they are **not meant to be customized directly in the `vendor/` folder**.

Therefore it is recommended to **copy the views into your application** and adjust them to your needs.


Customization
-------------

- Copy files from `vendor/dmstr/yii2-adminlte-asset/example-views/yiisoft/yii2-advanced-app` (or other theme) to `@app/views`.
- Remove the custom `view` configuration from your application by deleting the path mappings, if you have made them before.
- Edit your views adhering to html markup `vendor/bower/admin-lte/pages`

By default the extension uses black skin for AdminLTE. You can change this. Just replace class of body `skin-black` to `skin-blue`.
To fix all menu, add `fixed` class to `body` element.


> Namespacing rules follow the Yii 2.0 framework structure, eg. `dmstr\web` for the Asset Bundle.
 
