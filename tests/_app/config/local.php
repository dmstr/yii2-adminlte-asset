<?php

return [
    'defaultRoute' => 'test',
    'aliases' => [
        'repo' => '/repo',
        'tests/app' => '@repo/tests/_app',
        'dmstr/adminlte' => '@repo',
        '@dmstr/adminlte/web' => '@dmstr/adminlte/web',
        '@dmstr/adminlte/widgets' => '@dmstr/adminlte/widgets',
        '@dmstr/adminlte/helpers' => '@dmstr/adminlte/helpers',
    ],
    'controllerNamespace' => 'tests\app\controllers',
    'components' => [
        'urlManager' => [
            'rules' => [
                'param/<id>' => 'sub/action/param'
            ]
        ]
    ]
];