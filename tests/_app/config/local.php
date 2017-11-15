<?php

return [
    'aliases' => [
        'repo' => '/repo',
        'tests/app' => '@repo/tests/_app',
        'dmstr' => '@repo'
    ],
    'controllerMap' => [
        'test' => 'tests\app\controllers\TestController',
    ],
];