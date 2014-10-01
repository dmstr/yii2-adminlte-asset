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


Usage
-----

Once the extension is installed, simply use it in your application by configuring the path mappings of the view component:

```php
    'components' =>
        'view' => [
            'theme' => [
                'pathMap' => [
                    '@app/views' => '@vendor/dmstr/yii2-adminlte-asset/phundament4'
                ],
            ],
        ],
    ]
```

> Note: This asset bundle provides sample files for layout and view, make sure to adjust them to your needs.