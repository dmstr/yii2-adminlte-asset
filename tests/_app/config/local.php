<?php

return [
    'defaultRoute' => 'test',
    'aliases' => [
        'repo' => '/repo',
        'tests/app' => '@repo/tests/_app',
        'dmstr' => '/repo',
        '@dmstr/web' => '/repo/web',
        '@dmstr/widgets' => '/repo/widgets',
        '@dmstr/helpers' => '/repo/helpers',
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