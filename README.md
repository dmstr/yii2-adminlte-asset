AdminLTE Asset Bundle
=====================

Backend theme for Yii2 Framework, based on [AdminLTE](https://github.com/almasaeed2010/AdminLTE).

**WORK IN PROGRESS(!)**

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist dmstr/yii2-adminlte-asset "*"
```

or add

```
"dmstr/yii2-adminlte-asset": "*"
```

to the require section of your `composer.json` file.


Quick Start
-----

Once the extension is installed, simply use it in your application by configuring the path mappings of the view component:

For [Yii 2 Advanced Application Template](https://github.com/yiisoft/yii2-app-advanced)
```php
    'components' =>
        'view' => [
            'theme' => [
                'pathMap' => [
                    '@app/views' => '@vendor/dmstr/yii2-adminlte-asset/themes/advanced-backend'
                ],
            ],
        ],
    ]
```

For [phundament4](https://github.com/phundament/app)
```php
    'components' =>
        'view' => [
            'theme' => [
                'pathMap' => [
                    '@app/views' => '@vendor/dmstr/yii2-adminlte-asset/themes/phundament4'
                ],
            ],
        ],
    ]
```

Customization.
-----

This asset bundle (folder themes/) provides sample files for layout and view, make sure to adjust them to your needs. 
Therefore you have to copy the views into your application and change or remove the parts you don't need.

- Copy files from `vendor/dmstr/yii2-adminlte-asset/themes/advanced-backend` (or other theme) to `@app/views`
- Delete block `view` from your application by configuring the path mappings of the view component. If you have made them before.
- Edit your views adhering to html markup `vendor/bower/admin-lte/pages`

By default the extension uses black skin for AdminLTE. You can change this. Just replace class of body `skin-black` to `skin-blue`.
To fix all menu, add `fixed` class to `body` element.